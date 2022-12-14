#!/bin/bash
# my-frontend-and-backend-api-examples destroy-pipeline.sh

fly -t ci destroy-pipeline --pipeline my-frontend-and-backend-api-examples
