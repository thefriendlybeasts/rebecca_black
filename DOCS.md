{{ noparse }}
# Usage
Just use `{{ rebecca_black }}` to spit out the number of days til Friday.


## I don't care about Friday!
If for some reason you wanna countdown to another point in time (I'm not listenin' to you, you crasy!),
use the `to` parameter. You can format the date/time in plain English, but in case that doesn't work
for you, here are the [supported formats](http://php.net/manual/en/datetime.formats.php).


## Days!? I want seconds!
You don't have to get the countdown in days. You can use the `unit` parameter which accepts `days`,
`hours`, `minutes`, and `seconds`.


---


## Examples
- Days until August 14, 2015:  
  `{{ rebecca_black to="August 14, 2015" }}`
- Seconds until August 14, 2015:  
  `{{ rebecca_black to="August 14, 2015" unit="seconds" }}`
- Days until the third Friday of next month:  
  `{{ rebecca_black to="third Friday of next month" }}`
{{ /noparse }}
