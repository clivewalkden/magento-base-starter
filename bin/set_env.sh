#!/usr/bin/env bash

export USER_ID="$(id -u)"
export GROUP_ID="$(id -g)"

#envsubst <"${PWD}/.docker/config.env.sample" >"${PWD}/.docker/config.env"