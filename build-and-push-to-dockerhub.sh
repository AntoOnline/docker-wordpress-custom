#!/bin/bash

# Check if repository name argument is provided
if [[ -z $1 ]]; then
  echo "Error: Repository name argument is missing."
  echo "Usage: ./build-and-push-to-dockerhub.sh <repository-name>"
  exit 1
fi

# Docker Hub repository name
REPO_NAME=$1

# Build the Docker image
docker build -t $REPO_NAME .

# Login to Docker Hub
docker login

# Push the Docker image to Docker Hub
docker push $REPO_NAME
