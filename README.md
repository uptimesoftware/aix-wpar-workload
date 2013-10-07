## AIX WPAR Workload Monitor 1.0

### Description
This plugin monitors various health & performance metrics for AIX WPAR's.

### Supported Monitoring Stations
* 7.2
* 7.1
* 6.0
* 5.5
* 5.4
* 5.3
* 5.2

### Supported Agents
AIX

### Installation Notes

[Install using the up.time Plugin Manager](https://github.com/uptimesoftware/uptime-plugin-manager)

Also, on the AIX agent, please do the following:
a. Extract agent-files.zip
b. Place the wpar-monitor.sh file in the directory /opt/uptime-agent/scripts/
(create the directory if needed)
c. Create/edit the following password file:
/opt/uptime-agent/bin/.uptmpasswd
and add the following line to it:
/opt/uptime-agent/scripts/wpar-monitor.sh 

### Input Variables
* Script Name - the location of the script on the monitoring station that contains the logic for contacting the agent and returning the output in a useful format to the monitoring station
* Port - port that the up.time agent is listening on (default 9998)
* Password - password that the up.time agent has setup

### Output Variables
* LPAR Physical Processor Utilization (proc)	
* LPAR Entitled Capacity Utilization (%)	
* WPAR CPU User(%)	
* WPAR CPU System (%)	
* WPAR CPU Waiting on IO (%)	
* WPAR CPU Idle (%)	
* WPAR Physical Processor Utilization (proc)	
* WPAR Physical Processor Utilization (%)	
* WPAR Memory Size (pages)	
* WPAR Memory In Use (pages)	
* WPAR Memory Free(pages)	
* WPAR Paging Space Size (pages)	
* WPAR Paging Space In Use (pages)	
* Response time (ms)

### Languages Used
Shell / Batch, PHP, Java
