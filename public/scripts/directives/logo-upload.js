
'use strict';

angular.module('transportApp')
    .directive('logoUpload', ['CityService', function(CityService){
        return {
            restrict: 'E',
            scope: {
                transporterId: '='
            },
            controller: ['$scope','$upload', function($scope, $upload){

                $scope.$watch('files', function() {

                    if ($scope.files != null) {

                        var file = $scope.files;
                        $scope.upload = $upload.upload({
                            url: 'api/image', // upload.php script, node.js route, or servlet url
                            //method: 'POST',
                            //headers: {'Authorization': 'xxx'}, // only for html5
                            //withCredentials: true,
                            data: {transporterId: $scope.transporterId},
                            file: file // single file or a list of files. list is only for html5
                            //fileName: 'doc.jpg' or ['1.jpg', '2.jpg', ...] // to modify the name of the file(s)
                            //fileFormDataName: myFile, // file formData name ('Content-Disposition'), server side request form name
                            // could be a list of names for multiple files (html5). Default is 'file'
                            //formDataAppender: function(formData, key, val){}  // customize how data is added to the formData.
                            // See #40#issuecomment-28612000 for sample code

                        }).progress(function(evt) {

                            console.log('progress: ' + parseInt(100.0 * evt.loaded / evt.total) + '% file :'+ evt.config.file.name);

                        }).success(function(data, status, headers, config) {

                            // file is uploaded successfully
                            $('#transpThumb_' + data.transporter_id).attr('src', data.image_url);

                        });

                    }

                    /* alternative way of uploading, send the file binary with the file's content-type.
                     Could be used to upload files to CouchDB, imgur, etc... html5 FileReader is needed.
                     It could also be used to monitor the progress of a normal http post/put request.
                     Note that the whole file will be loaded in browser first so large files could crash the browser.
                     You should verify the file size before uploading with $upload.http().
                     */
                    // $scope.upload = $upload.http({...})  // See 88#issuecomment-31366487 for sample code.

                });
            }],
            templateUrl: 'views/logo-upload.html'

        }
    }]);

