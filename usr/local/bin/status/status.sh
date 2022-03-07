# Shiori Server Status
# Version 1.1 (2022-03-07)
# Copyright (c) 2022 Sora Arakawa
# Licensed under the MIT License

#!/bin/bash

{
	cat <<-EOS
	Generated by Shiori Server Status
	Version 1.1 (2022-03-07)
	https://github.com/arkwnet/shiori-server-status

	Last updated on :
	EOS

	# Date and Time
	date
	echo ""

	# System Status
	vmstat -s
	echo ""

	# ext4 Disk Status
	df -ht ext4
} > /var/www/html/status/status.txt