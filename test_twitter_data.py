#!/usr/bin/env python
import get_twitter_data
import sys

## PLACE YOUR CREDENTIALS in config.json file or run this file with appropriate arguments from command line
keyword = sys.argv[1]
time = 'today'
twitterData = get_twitter_data.TwitterData()
tweets = twitterData.getTwitterData(keyword, time)
print tweets
