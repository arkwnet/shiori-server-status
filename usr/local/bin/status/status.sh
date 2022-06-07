#!/bin/bash

# Shiori Server Status
# Version 1.2.0 (2022-06-07)
# Copyright (c) 2022 Sora Arakawa
# Licensed under the MIT License

date > /var/www/html/status/status_date.txt
vmstat -s > /var/www/html/status/status_vmstat.txt
df -ht ext4 > /var/www/html/status/status_df.txt
