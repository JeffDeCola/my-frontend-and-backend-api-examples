#!/bin/bash
# my-frontend-and-backend-api-examples set-pipeline.sh

fly -t ci set-pipeline -p my-frontend-and-backend-api-examples -c pipeline.yml --load-vars-from ../../../.credentials.yml
