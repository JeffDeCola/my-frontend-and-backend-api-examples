#!/bin/bash
# my-frontend-and-backend-api-examples destroy-pipeline.sh

echo " "
echo "Destroy pipeline on target jeffs-ci-target which is team jeffs-ci-team"
fly --target jeffs-ci-target \
    destroy-pipeline \
    --pipeline my-frontend-and-backend-api-examples
echo " "
