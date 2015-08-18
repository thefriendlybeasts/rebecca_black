{{ noparse }}
# Usage
## `{{ rebecca_black }}`
Get the number of `unit`s until the specified day.

The default `unit` is `days` and the default day is the upcoming Friday, so just use
`{{ rebecca_black }}` to spit out the number of days 'til Friday.


### I don't care about Friday!
If for some reason you wanna countdown to another point in time (I'm not listenin' to you, you crasy!),
use the `to` parameter. You can format the date/time in plain English, but in case that doesn't work
for you, here are the [supported formats](http://php.net/manual/en/datetime.formats.php).


### Days!? I want seconds!
You don't have to get the countdown in days. You can use the `unit` parameter which accepts `days`,
`hours`, `minutes`, `seconds`, and `milliseconds`.





## `{{ rebecca_black:countdown }}`
This is a tag pair that spits out the number of days, hours, minutes, and seconds until the
specified date, which is, of course, the upcoming Friday. You can also get the total number of
milliseconds, which is useful for JavaScripting.


---


## Examples
- Days until August 14, 2015:  
  `{{ rebecca_black to="August 14, 2015" }}`
- Seconds until August 14, 2015:  
  `{{ rebecca_black to="August 14, 2015" unit="seconds" }}`
- Days until the third Friday of next month:  
  `{{ rebecca_black to="third Friday of next month" }}`
- Countdown timer (BYO JavaScript):
  ```
  {{ rebecca_black:countdown }}
    {{ d }} days {{ h }} hours {{ m }} minutes {{ s }} seconds
  {{ /rebecca_black:countdown }}
  ```
{{ /noparse }}
