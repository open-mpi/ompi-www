<?
$subject_val = "[MTT users] MTT:Error while executing ompi-core-perf-testing.ini";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 06:38:45 2010" -->
<!-- isoreceived="20100104113845" -->
<!-- sent="Mon, 04 Jan 2010 17:08:36 +0530" -->
<!-- isosent="20100104113836" -->
<!-- name="vishal shorghar" -->
<!-- email="vshorrghar_at_[hidden]" -->
<!-- subject="[MTT users] MTT:Error while executing ompi-core-perf-testing.ini" -->
<!-- id="4B41D33C.8050207_at_chelsio.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [MTT users] MTT:Error while executing ompi-core-perf-testing.ini<br>
<strong>From:</strong> vishal shorghar (<em>vshorrghar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 06:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/12/0716.php">Keith M Matthews: "[MTT users] AUTO: Keith M Matthews/Australia/IBM is out of the office. (returning 18/01/2010)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>Reply:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Today I ran ompi-core-perf-test script as &quot;# cat  
<br>
ompi-core-perf-testing.ini | ../client/mtt  --debug -&quot;
<br>
It gave me following error and exits .
<br>
<p>[root_at_veera samples]# cat  ompi-core-perf-testing.ini | ../client/mtt  
<br>
--debug -
<br>
Debug is 1, Verbose is 
<br>
1                                                       
<br>
*** MTT: ../client/mtt --debug 
<br>
-                                               
<br>
*** Running on 
<br>
veera                                                           
<br>
Chdir 
<br>
../client                                                                
<br>
Chdir 
<br>
/root/mtt-svn/samples                                                    
<br>
Copying: stdin to 
<br>
/tmp/dw1zvwGZEa.ini                                          
<br>
Expanding include_file(s) parameters in 
<br>
/tmp/dw1zvwGZEa.ini                    
<br>
Reading ini file: 
<br>
stdin                                                        
<br>
Validating INI inifile: 
<br>
/tmp/bH9q7NY7Hl.ini                                    
<br>
FilterINI: Final list of 
<br>
sections:                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[mtt]                                                                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[lock]                                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: 
<br>
ompi-nightly-trunk]                                           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: 
<br>
ompi-nightly-v1.2]                                            
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: 
<br>
ompi-released-v1.2]                                           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: 
<br>
mpich1]                                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: 
<br>
mpich-mx]                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: 
<br>
mpich2]                                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: 
<br>
mvapich1]                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: 
<br>
mvapich2]                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: hp 
<br>
mpi]                                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi get: intel 
<br>
mpi]                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[skip mpi get: scali 
<br>
mpi]                                               
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[skip mpi get: cray 
<br>
mpi]                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi install: 
<br>
ompi/gnu-standard]                                        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi install: 
<br>
mpich1]                                                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi install: 
<br>
mpich2]                                                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi install: 
<br>
mvapich1]                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi install: 
<br>
mvapich2]                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi install: intel 
<br>
mpi]                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi install: hp 
<br>
mpi]                                                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi details: 
<br>
ompi]                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi details: 
<br>
mpich1]                                                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi details: 
<br>
mpich2]                                                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi details: 
<br>
mvapich1]                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi details: 
<br>
mvapich2]                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi details: 
<br>
mpich-mx]                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi details: intel 
<br>
mpi]                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mpi details: hp 
<br>
mpi]                                                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test get: 
<br>
netpipe]                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test get: 
<br>
osu]                                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test get: 
<br>
imb]                                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test get: 
<br>
skampi]                                                      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test get: 
<br>
nbcbench]                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test build: 
<br>
netpipe]                                                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test build: 
<br>
osu]                                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test build: 
<br>
imb]                                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test build: 
<br>
skampi]                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test build: 
<br>
nbcbench]                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test run: 
<br>
netpipe]                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test run: 
<br>
osu]                                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test run: 
<br>
imb]                                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test run: 
<br>
skampi]                                                      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test run: 
<br>
nbcbench]                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[reporter: iu 
<br>
database]                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[reporter: text file 
<br>
backup]                                            
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
scratch                        
<br>
Value 
<br>
returning:                                                               
<br>
scratch: 
<br>
.                                                                     
<br>
scratch resolved: 
<br>
/root/mtt-svn/samples                                        
<br>
Chdir 
<br>
/root/mtt-svn/samples                                                    
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
fast_scratch                   
<br>
Value 
<br>
returning:                                                               
<br>
fast_scratch: 
<br>
/root/mtt-svn/samples                                            
<br>
fast_scratch resolved: 
<br>
/root/mtt-svn/samples                                   
<br>
*** Main scratch tree: 
<br>
/root/mtt-svn/samples                                   
<br>
*** Fast scratch tree: 
<br>
/root/mtt-svn/samples                                   
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
force                          
<br>
Value 
<br>
returning:                                                               
<br>
Making dir: /root/mtt-svn/samples/sources (cwd: 
<br>
/root/mtt-svn/samples)         
<br>
Making dir: /root/mtt-svn/samples/installs (cwd: 
<br>
/root/mtt-svn/samples)        
<br>
Making dir: /root/mtt-svn/samples/test_runs (cwd: 
<br>
/root/mtt-svn/samples)       
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
funclet_files                  
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
hostfile                       
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
hostlist                       
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
max_np                         
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
textwrap                       
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
drain_timeout                  
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
trim_save_successful           
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
trim_save_failed               
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
trial                          
<br>
Value returning: 
<br>
1                                                             
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
http_proxy                     
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
https_proxy                    
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
ftp_proxy                      
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
terminate_files                
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
pause_files                    
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
min_disk_free                  
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
min_disk_free_wait             
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
delete_fast_scratch            
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
save_fast_scratch_files        
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) 
<br>
MTT                                
<br>
&nbsp;&nbsp;&nbsp;
<br>
docommand_timeout_notify_file                                                
<br>
<p>Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) 
<br>
MTT                                
<br>
&nbsp;&nbsp;&nbsp;
<br>
docommand_timeout_notify_email                                               
<br>
<p>Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) 
<br>
MTT                                
<br>
&nbsp;&nbsp;&nbsp;
<br>
docommand_timeout_notify_timeout                                             
<br>
<p>Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) 
<br>
MTT                                
<br>
&nbsp;&nbsp;&nbsp;
<br>
docommand_timeout_backtrace_program                                          
<br>
<p>Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
before_all_exec                
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
before_all_exec_timeout        
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
before_all_exec_pass           
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
before_each_exec               
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
before_each_exec_timeout       
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
before_each_exec_pass          
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
after_all_exec                 
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
after_all_exec_timeout         
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
after_all_exec_pass            
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
after_each_exec                
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
after_each_exec_timeout        
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
<br>
after_each_exec_pass           
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) lock 
<br>
module                        
<br>
Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) mtt log_file 
<br>
logfile               
<br>
Value 
<br>
returning:                                                               
<br>
*** Reporter 
<br>
initializing                                                      
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database 
<br>
module       
<br>
Value returning: 
<br>
MTTDatabase                                                   
<br>
<span class="quotelev2"> &gt;&gt; Initializing reporter module: 
</span><br>
MTTDatabase                                   
<br>
Evaluating: require 
<br>
MTT::Reporter::MTTDatabase                                 
<br>
Evaluating: $ret = 
<br>
&amp;MTT::Reporter::MTTDatabase::Init(@args)                    
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu 
<br>
database              
<br>
&nbsp;&nbsp;&nbsp;
<br>
mttdatabase_username                                                         
<br>
<p>Value returning: you must set this 
<br>
value                                       
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu 
<br>
database              
<br>
&nbsp;&nbsp;&nbsp;
<br>
mttdatabase_password                                                         
<br>
<p>Value returning: you must set this 
<br>
value                                       
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu 
<br>
database              
<br>
&nbsp;&nbsp;&nbsp;
<br>
mttdatabase_url                                                              
<br>
<p>Value returning: 
<br>
<a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>                          
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu 
<br>
database              
<br>
&nbsp;&nbsp;&nbsp;
<br>
mttdatabase_realm                                                            
<br>
<p>Value returning: 
<br>
OMPI                                                          
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu 
<br>
database              
<br>
&nbsp;&nbsp;&nbsp;
<br>
mttdatabase_email_errors_to                                                  
<br>
<p>Value 
<br>
returning:                                                               
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu 
<br>
database              
<br>
&nbsp;&nbsp;&nbsp;mttdatabase_debug_filename
<br>
Value returning: mttdb_debug_file_perf
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
<br>
&nbsp;&nbsp;&nbsp;mttdatabase_keep_debug_files
<br>
Value returning: 1
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
<br>
&nbsp;&nbsp;&nbsp;mttdatabase_debug_server
<br>
Value returning:
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
<br>
&nbsp;&nbsp;&nbsp;mttdatabase_hostname
<br>
Value returning:
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) mtt local_username
<br>
Value returning:
<br>
Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
<br>
&nbsp;&nbsp;&nbsp;mttdatabase_platform
<br>
Value returning: you must set this value
<br>
&nbsp;&nbsp;&nbsp;Set HTTP credentials for realm &quot;OMPI&quot;
<br>
MTTDatabase client getting a client serial number...
<br>
MTTDatabase client trying proxy:  / Default (none)
<br>
MTTDatabase proxy successful / not 500
<br>
*** WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>
<br>
*** WARNING: &gt;&gt; Error was: 401 Authorization Required
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;!DOCTYPE HTML PUBLIC &quot;-//IETF//DTD HTML 2.0//EN&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;html&gt;&lt;head&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;401 Authorization Required&lt;/title&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;&lt;body&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Authorization Required&lt;/h1&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;This server could not verify that you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;are authorized to access the document
<br>
&nbsp;&nbsp;&nbsp;&nbsp;requested.  Either you supplied the wrong
<br>
&nbsp;&nbsp;&nbsp;&nbsp;credentials (e.g., bad password), or your
<br>
&nbsp;&nbsp;&nbsp;&nbsp;browser doesn't understand how to supply
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the credentials required.&lt;/p&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;hr&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;address&gt;Apache Server at www.open-mpi.org Port 443&lt;/address&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;&lt;/html&gt;
<br>
*** ERROR: Module aborted: MTT::Reporter::MTTDatabase:Init: *** ERROR: &gt;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Do not want to continue with possible bad submission URL --
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aborting.
<br>
<p>Could anyone suggest me if any modification required in 
<br>
ompi-core-perf-testing.ini or any other way to run this test.
<br>
<p>ompi-core-perf-testing.ini file is attached.
<br>
<p>Regards,
<br>
<p>Vishal
<br>
<p><p>
<br><p>
#
<br>
# Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
<br>
#
<br>
# Note that there are many items in this file that, while they are
<br>
# good for examples, may not work for random MTT users.  For example,
<br>
# the &quot;ompi-tests&quot; SVN repository that is used in the examples below
<br>
# is *not* a public repository (there's nothing really secret in this
<br>
# repository; it contains many publicly-available MPI tests and
<br>
# benchmarks, but we have never looked into the redistribution rights
<br>
# of these codes, so we keep the SVN repository &quot;closed&quot; to the
<br>
# general public and only use it internally in the Open MPI project).
<br>
<p>#======================================================================
<br>
# Generic OMPI core performance testing template configuration
<br>
#======================================================================
<br>
<p>[MTT]
<br>
# Leave this string so that we can identify this data subset in the
<br>
# database
<br>
# OMPI Core: Use a &quot;test&quot; label until we're ready to run real results
<br>
description = [testbake]
<br>
# description = [2007 collective performance bakeoff]
<br>
# OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real results
<br>
trial = 1
<br>
<p># Put other values here as relevant to your environment.
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Lock]
<br>
# Put values here as relevant to your environment.
<br>
<p>#======================================================================
<br>
# MPI get phase
<br>
#======================================================================
<br>
<p>[MPI get: ompi-nightly-trunk]
<br>
mpi_details = OMPI
<br>
<p>module = OMPI_Snapshot
<br>
ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: ompi-nightly-v1.2]
<br>
mpi_details = OMPI
<br>
<p>module = OMPI_Snapshot
<br>
ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/v1.2">http://www.open-mpi.org/nightly/v1.2</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: ompi-released-v1.2]
<br>
mpi_details = OMPI
<br>
<p>module = OMPI_Snapshot
<br>
ompi_snapshot_url = <a href="http://www.open-mpi.org/software/ompi/v1.2/downloads">http://www.open-mpi.org/software/ompi/v1.2/downloads</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: MPICH1]
<br>
mpi_details = MPICH1
<br>
<p>module = Download
<br>
# MPICH1 from the Argonne web site
<br>
#download_url = <a href="http://www-unix.mcs.anl.gov/mpi/mpich1/downloads/mpich.tar.gz">http://www-unix.mcs.anl.gov/mpi/mpich1/downloads/mpich.tar.gz</a>
<br>
# If you are using SLURM, use this URL -- it's the same exact
<br>
# mpich.tar.gz but with the SLURM 1.2.12/etc/mpich1.slurm.patch in it
<br>
# (which allows native launching under SLURM).
<br>
download_url = <a href="http://www.open-mpi.org/~jsquyres/ompi-coll-bakeoff/mpich-1.2.7p1-patched-for-slurm.tar.gz">http://www.open-mpi.org/~jsquyres/ompi-coll-bakeoff/mpich-1.2.7p1-patched-for-slurm.tar.gz</a>
<br>
# This version is fixed/frozen, so it's ok to hard-code it
<br>
download_version = 1.2.7p1
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: MPICH-MX]
<br>
mpi_details = MPICH-MX
<br>
<p>module = Download
<br>
download_url = <a href="http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz">http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz</a>
<br>
# You need to obtain the username and password from Myricom
<br>
download_username = &lt;OBTAIN THIS FROM MYRICOM&gt;
<br>
download_password = &lt;OBTAIN THIS FROM MYRICOM&gt;
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: MPICH2]
<br>
mpi_details = MPICH2
<br>
<p>module = Download
<br>
download_url = <a href="http://www-unix.mcs.anl.gov/mpi/mpich2/downloads/mpich2-1.0.5p4.tar.gz">http://www-unix.mcs.anl.gov/mpi/mpich2/downloads/mpich2-1.0.5p4.tar.gz</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: MVAPICH1]
<br>
mpi_details = MVAPICH1
<br>
<p>module = Download
<br>
download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich/mvapich-0.9.9.tar.gz">http://mvapich.cse.ohio-state.edu/download/mvapich/mvapich-0.9.9.tar.gz</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: MVAPICH2]
<br>
mpi_details = MVAPICH2
<br>
<p>module = Download
<br>
download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz">http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: HP MPI]
<br>
mpi_details = HP MPI
<br>
<p># You need to have HP MPI already installed somewhere
<br>
module = AlreadyInstalled
<br>
# Fill this in with the version of your HP MPI
<br>
alreadyinstalled_version = 2.2.5.1b1
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI get: Intel MPI]
<br>
mpi_details = Intel MPI
<br>
<p># You need to have Intel MPI already installed somewhere
<br>
module = AlreadyInstalled
<br>
# Fill this in with the version of your Intel MPI
<br>
alreadyinstalled_version = 3.0
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[SKIP MPI get: Scali MPI]
<br>
mpi_details = Scali MPI
<br>
<p># You need to have Scali MPI already installed somewhere
<br>
module = AlreadyInstalled
<br>
# Fill this in with the version of your Scali MPI
<br>
alreadyinstalled_version = ???
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[SKIP MPI get: Cray MPI]
<br>
mpi_details = Cray MPI
<br>
<p># You need to have Cray MPI already installed somewhere
<br>
module = AlreadyInstalled
<br>
# Fill this in with the version of your Cray MPI
<br>
alreadyinstalled_version = ???
<br>
<p>#======================================================================
<br>
# Install MPI phase
<br>
#======================================================================
<br>
<p># All flavors of Open MPI
<br>
[MPI install: OMPI/GNU-standard]
<br>
mpi_get = ompi-nightly-trunk, ompi-nightly-v1.2, ompi-released-v1.2
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 0
<br>
<p>module = OMPI
<br>
ompi_make_all_arguments = -j 8
<br>
ompi_compiler_name = gnu
<br>
ompi_compiler_version = &amp;get_gcc_version()
<br>
# Adjust these configure flags for your site
<br>
ompi_configure_arguments = CFLAGS=-O3 --with-openib --enable-mpirun-prefix-by-default --enable-branch-probabilities --disable-heterogeneous --without-mpi-param-check
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI install: MPICH1]
<br>
mpi_get = mpich1
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 0
<br>
# Ensure that MPICH allocates enough shared memory (32MB seems to be
<br>
# enough for ppn=4; went to 64MB to give it plenty of room)
<br>
setenv = P4_GLOBMEMSIZE 67108864
<br>
<p>module = MPICH2
<br>
mpich2_use_all_target = 0
<br>
mpich2_apply_slurm_patch = 1
<br>
mpich2_compiler_name = gnu
<br>
mpich2_compiler_version = &amp;get_gcc_version()
<br>
mpich2_configure_arguments = -cflags=-O3 -rsh=ssh --with-device=ch_p4 --with-comm=shared
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI install: MPICH2]
<br>
mpi_get = mpich2
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 0
<br>
# Adjust this for your site (this is what works at Cisco).  Needed to
<br>
# launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
<br>
# all the way through the test run phases that use this MPI install,
<br>
# where the test executables will need to have this set.
<br>
prepend_path = LD_LIBRARY_PATH /opt/slurm/current/lib
<br>
<p>module = MPICH2
<br>
mpich2_compiler_name = gnu
<br>
mpich2_compiler_version = &amp;get_gcc_version()
<br>
mpich2_configure_arguments = --disable-f90 CFLAGS=-O3 --enable-fast --with-device=ch3:nemesis
<br>
# These are needed to launch through SLURM; adjust as appropriate.
<br>
mpich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
<br>
mpich2_additional_wrapper_libs = -lpmi
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI install: MVAPICH1]
<br>
mpi_get = mvapich1
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 0
<br>
# Setting this makes MVAPICH assume that the same HCAs are on all
<br>
# hosts and therefore it makes some optimizations
<br>
setenv = VIADEV_USE_COMPAT_MODE 0
<br>
<p>module = MVAPICH2
<br>
# Adjust this to be where your OFED is installed
<br>
mvapich2_setenv = IBHOME /usr
<br>
# Leave this set (COMPAT); if you don't, their script asks questions,
<br>
# causing MTT to hang
<br>
mvapich2_setenv = COMPAT AUTO_DETECT
<br>
mvapich2_build_script = make.mvapich.gen2
<br>
mvapich2_compiler_name = gnu
<br>
mvapich2_compiler_version = &amp;get_gcc_version()
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI install: MVAPICH2]
<br>
mpi_get = mvapich2
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 0
<br>
# Adjust this for your site (this is what works at Cisco).  Needed to
<br>
# launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
<br>
# all the way through the test run phases that use this MPI install,
<br>
# where the test executables will need to have this set.
<br>
prepend_path = LD_LIBRARY_PATH /opt/slurm/current/lib
<br>
<p>module = MVAPICH2
<br>
# Adjust this to be where your OFED is installed
<br>
mvapich2_setenv = OPEN_IB_HOME /usr
<br>
mvapich2_build_script = make.mvapich2.ofa
<br>
mvapich2_compiler_name = gnu
<br>
mvapich2_compiler_version = &amp;get_gcc_version()
<br>
# These are needed to launch through SLURM; adjust as appropriate.
<br>
mvapich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
<br>
mvapich2_additional_wrapper_libs = -lpmi
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI install: Intel MPI]
<br>
mpi_get = Intel MPI
<br>
# Adjust this if you need to.  It guarantees that multiple MPD's
<br>
# running on the same host will not collide.  If you'll ever have
<br>
# multi-job-on-the-same-host conflicts, you may want to adjust this to
<br>
# reflect some unique identifier (e.g., a resource manager ID).
<br>
setenv = MPD_CON_EXT mtt-unique-mpd.&amp;getenv(&quot;SLURM_JOBID&quot;)
<br>
<p>module = Analyze::IntelMPI
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI install: HP MPI]
<br>
mpi_get = HP MPI
<br>
<p>module = Analyze::HPMPI
<br>
<p>#======================================================================
<br>
# MPI run details
<br>
#======================================================================
<br>
<p>[MPI Details: OMPI]
<br>
# Check &amp;test_alloc() for byslot or bynode
<br>
exec = mpirun @alloc@ -np &amp;test_np() @mca@ &amp;test_executable() &amp;test_argv()
<br>
parameters = &amp;MPI::OMPI::find_mpirun_params(&amp;test_command_line(), \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;test_executable())
<br>
network = &amp;MPI::OMPI::find_network(&amp;test_command_line(), &amp;test_executable())
<br>
<p>alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;--bynode&quot;, &quot;--byslot&quot;)
<br>
mca = &amp;enumerate( \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl sm,tcp,self &quot; . @common_params@, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl tcp,self &quot; . @common_params@, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl sm,openib,self &quot; . @common_params@, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl sm,openib,self --mca mpi_leave_pinned 1 &quot; . @common_params@, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl openib,self &quot; . @common_params@, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl openib,self --mca mpi_leave_pinned 1 &quot; . @common_params@, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl openib,self --mca mpi_leave_pinned_pipeline 1 &quot; . @common_params@, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl openib,self --mca btl_openib_use_srq 1 &quot; . @common_params@)
<br>
<p># v1.2 has a problem with striping across heterogeneous ports right now: 
<br>
# <a href="https://svn.open-mpi.org/trac/ompi/ticket/1125">https://svn.open-mpi.org/trac/ompi/ticket/1125</a>.  Also keep the coll
<br>
# bakeoff tests on DDR only.
<br>
common_params = &quot;--mca btl_tcp_if_include ib0 --mca oob_tcp_if_include ib0 --mca btl_openib_if_include mthca0 --mca mpi_paffinity_alone 1&quot; . \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;if(&amp;or(&amp;eq(&amp;mpi_get_name(), &quot;ompi-nightly-v1.2&quot;), \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;eq(&amp;mpi_get_name(), &quot;ompi-released-v1.2&quot;)), \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl_openib_max_btls 1&quot;, &quot;&quot;)
<br>
<p># It is important that the after_each_exec step is a single
<br>
# command/line so that MTT will launch it directly (instead of via a
<br>
# temporary script).  This is because the &quot;srun&quot; command is
<br>
# (intentionally) difficult to kill in some cases.  See
<br>
# <a href="https://svn.open-mpi.org/trac/mtt/changeset/657">https://svn.open-mpi.org/trac/mtt/changeset/657</a> for details.
<br>
<p>after_each_exec = &amp;if(&amp;ne(&quot;&quot;, &amp;getenv(&quot;SLURM_NNODES&quot;)), &quot;srun -N &quot; . &amp;getenv(&quot;SLURM_NNODES&quot;)) /home/mpiteam/svn/ompi-tests/cisco/mtt/after_each_exec.pl
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: MPICH1]
<br>
<p># Launching through SLURM.  From
<br>
# <a href="http://www.llnl.gov/linux/slurm/quickstart.html">http://www.llnl.gov/linux/slurm/quickstart.html</a>.
<br>
exec = srun @alloc@ -n &amp;test_np() --mpi=mpich1_p4 &amp;test_executable() &amp;test_argv()
<br>
<p># If not using SLURM, you'll need something like this (not tested).
<br>
# You may need different hostfiles for running by slot/by node.
<br>
#exec = mpirun -np &amp;test_np() -machinefile &amp;hostfile() &amp;test_executable()
<br>
<p>network = loopback,ethernet
<br>
<p># In this SLURM example, if each node has 4 CPUs, telling SLURM to
<br>
# launching &quot;by node&quot; means specifying that each MPI process will use 4
<br>
# CPUs.
<br>
alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: MPICH2]
<br>
<p># Launching through SLURM.  If you use mpdboot instead, you need to
<br>
# ensure that multiple mpd's on the same node don't conflict (or never
<br>
# happen).
<br>
exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
<br>
<p># If not using SLURM, you'll need something like this (not tested).
<br>
# You may need different hostfiles for running by slot/by node.
<br>
#exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
<br>
<p>network = loopback,ethernet,shmem
<br>
<p># In this SLURM example, if each node has 4 CPUs, telling SLURM to
<br>
# launching &quot;by node&quot; means specifying that each MPI process will use 4
<br>
# CPUs.
<br>
alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: MVAPICH1]
<br>
<p># Launching through SLURM.  From
<br>
# <a href="http://www.llnl.gov/linux/slurm/quickstart.html">http://www.llnl.gov/linux/slurm/quickstart.html</a>.
<br>
exec = srun @alloc@ -n &amp;test_np() --mpi=mvapich &amp;test_executable() &amp;test_argv()
<br>
<p># If not using SLURM, you'll need something like this (not tested).
<br>
# You may need different hostfiles for running by slot/by node.
<br>
#exec = mpirun -np &amp;test_np() --machinefile &amp;hostfile() &amp;test_executable()
<br>
<p>network = loopback,verbs,shmem
<br>
<p># In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
<br>
# specify that each MPI process will use 4 CPUs.
<br>
alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: MVAPICH2]
<br>
<p># Launching through SLURM.  If you use mpdboot instead, you need to
<br>
# ensure that multiple mpd's on the same node don't conflict (or never
<br>
# happen).
<br>
exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
<br>
<p># If not using SLURM, you'll need something like this (not tested).
<br>
# You may need different hostfiles for running by slot/by node.
<br>
#exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
<br>
<p>network = loopback,verbs,shmem
<br>
<p># In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
<br>
# specify that each MPI process will use 4 CPUs.
<br>
alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: MPICH-MX]
<br>
<p># Launching through SLURM.  From
<br>
# <a href="http://www.llnl.gov/linux/slurm/quickstart.html">http://www.llnl.gov/linux/slurm/quickstart.html</a>.
<br>
exec = srun @alloc@ -n &amp;test_np() --mpi=mpichgm &amp;test_executable() &amp;test_argv()
<br>
network = mx
<br>
<p># If not using SLURM, you'll need something like this (not tested).
<br>
# You may need different hostfiles for running by slot/by node.
<br>
#exec = mpirun -np &amp;test_np() --machinefile &amp;hostfile() &amp;test_executable()
<br>
<p># In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
<br>
# specify that each MPI process will use 4 CPUs.
<br>
alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: Intel MPI]
<br>
<p># Need a before_any_exec step to launch MPDs
<br>
before_any_exec = &lt;&lt;EOF
<br>
h=`hostname`
<br>
file=mtt-hostlist.$$
<br>
rm -f $file
<br>
# If we're allocating by node, get each hostname once.  Otherwise, get
<br>
# each hostname as many times as we have slots on that node.
<br>
srun hostname | uniq &gt; $file
<br>
# Add localhost if it's not in there (e.g., srun -A)
<br>
local=`grep $h $file`
<br>
touch /tmp/mtt-mpiexec-options.$SLURM_JOBID
<br>
if test &quot;$local&quot; = &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;echo $h &gt;&gt; $file
<br>
&nbsp;&nbsp;&nbsp;echo -nolocal &gt; /tmp/mpiexec-options.$SLURM_JOBID
<br>
fi
<br>
num=`wc -l $file | awk '{ print $1 }'`
<br>
mpdboot -n $num -r ssh --verbose --file=$file
<br>
mpdtrace
<br>
rm -f $file
<br>
EOF
<br>
<p># Intel MPI seems to default to by-node allocation and I can't figure
<br>
# out how to override it.  Sigh.
<br>
exec = mpiexec @options@ -n &amp;test_np() ./&amp;test_executable() &amp;test_argv()
<br>
network = loopback,verbs,shmem
<br>
<p># Test both the &quot;normal&quot; collective algorithms and Intel's &quot;fast&quot;
<br>
# collective algorithms (their docs state that the &quot;fast&quot; algorithms
<br>
# may not be MPI conformant, and may not give the same results between
<br>
# multiple runs, assumedly if the process layout is different).
<br>
options = &amp;stringify(&amp;cat(&quot;/tmp/mpiexec-options.&quot; . &amp;getenv(&quot;SLURM_JOBID&quot;))) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;enumerate(&quot;-genv I_MPI_DEVICE rdssm&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;-genv I_MPI_DEVICE rdssm -genv I_MPI_FAST_COLLECTIVES 1&quot;)
<br>
<p>after_all_exec = &lt;&lt;EOT
<br>
rm -f /tmp/mpiexec-options.$SLURM_JOBID
<br>
mpdallexit
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: HP MPI]
<br>
<p># I use MPI_IBV_NO_FORK_SAFE=1 because I'm using RHEL4U4, which
<br>
# doesn't have IBV fork() support.  I also have multiple active HCA
<br>
# ports and therefore need to give HP MPI a clue on the scheduling of
<br>
# ports via MPI_IB_CARD_ORDER.  I got this information via e-mailing
<br>
# HP MPI support.
<br>
#
<br>
# In SLURM, HP MPI seems to schedule first by node and then by slot.
<br>
# So if you have 2 quad-core nodes in your SLURM alloc, if you mpirun
<br>
# -np 2, you'll get one proc on each node.  If you mpirun -np 4,
<br>
# you'll get MCW ranks 0 and 1 on the first node and MCA ranks 2 and 3
<br>
# on the second node.  This is pretty much exactly what we want, so we
<br>
# don't need to check &amp;test_alloc() here.
<br>
exec = mpirun -IBV -e MPI_IBV_NO_FORK_SAFE=1 -e MPI_IB_CARD_ORDER=0:0 -srun -n&amp;test_np() ./&amp;test_executable() &amp;test_argv()
<br>
network = loopback,verbs,shmem
<br>
<p>#======================================================================
<br>
# Test get phase
<br>
#======================================================================
<br>
<p>[Test get: netpipe]
<br>
module = Download
<br>
download_url = <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: osu]
<br>
module = SVN
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/osu">https://svn.open-mpi.org/svn/ompi-tests/trunk/osu</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: imb]
<br>
module = SVN
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: skampi]
<br>
module = SVN
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: nbcbench]
<br>
module = SVN
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/nbcbench">https://svn.open-mpi.org/svn/ompi-tests/trunk/nbcbench</a>
<br>
<p>#======================================================================
<br>
# Test build phase
<br>
#======================================================================
<br>
<p>[Test build: netpipe]
<br>
test_get = netpipe
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
make mpi
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: osu]
<br>
test_get = osu
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
make osu_latency osu_bw osu_bibw
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: imb]
<br>
test_get = imb
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
cd src
<br>
make clean IMB-MPI1
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: skampi]
<br>
test_get = skampi
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>module = Shell
<br>
# Set EVERYONE_CAN_MPI_IO for HP MPI
<br>
shell_build_command = &lt;&lt;EOT
<br>
make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: nbcbench]
<br>
test_get = nbcbench
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
make
<br>
EOT
<br>
<p>#======================================================================
<br>
# Test Run phase
<br>
#======================================================================
<br>
<p>[Test run: netpipe]
<br>
test_build = netpipe
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
# Timeout hueristic: 10 minutes
<br>
timeout = 10:00
<br>
save_stdout_on_pass = 1
<br>
# Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
<br>
stdout_save_lines = -1
<br>
merge_stdout_stderr = 1
<br>
np = 2
<br>
alloc = node
<br>
<p>specify_module = Simple
<br>
analyze_module = NetPipe
<br>
<p>simple_pass:tests = NPmpi
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: osu]
<br>
test_build = osu
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
# Timeout hueristic: 10 minutes
<br>
timeout = 10:00
<br>
save_stdout_on_pass = 1
<br>
# Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
<br>
stdout_save_lines = -1
<br>
merge_stdout_stderr = 1
<br>
np = 2
<br>
alloc = node
<br>
<p>specify_module = Simple
<br>
analyze_module = OSU
<br>
<p>simple_pass:tests = osu_bw osu_latency osu_bibw
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: imb]
<br>
test_build = imb
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
# Timeout hueristic: 10 minutes
<br>
timeout = 10:00
<br>
save_stdout_on_pass = 1
<br>
# Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
<br>
stdout_save_lines = -1
<br>
merge_stdout_stderr = 1
<br>
np = &amp;env_max_procs()
<br>
<p>argv = -npmin &amp;test_np() &amp;enumerate(&quot;PingPong&quot;, &quot;PingPing&quot;, &quot;Sendrecv&quot;, &quot;Exchange&quot;, &quot;Allreduce&quot;, &quot;Reduce&quot;, &quot;Reduce_scatter&quot;, &quot;Allgather&quot;, &quot;Allgatherv&quot;, &quot;Alltoall&quot;, &quot;Bcast&quot;, &quot;Barrier&quot;) 
<br>
<p>specify_module = Simple
<br>
analyze_module = IMB
<br>
<p>simple_pass:tests = src/IMB-MPI1
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: skampi]
<br>
test_build = skampi
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
# Timeout hueristic: 10 minutes
<br>
timeout = 10:00
<br>
save_stdout_on_pass = 1
<br>
# Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
<br>
stdout_save_lines = -1
<br>
merge_stdout_stderr = 1
<br>
np = &amp;env_max_procs()
<br>
<p>argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
<br>
<p>specify_module = Simple
<br>
analyze_module = SKaMPI
<br>
<p>simple_pass:tests = skampi
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: nbcbench]
<br>
test_build = nbcbench
<br>
pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
<br>
timeout = -1
<br>
save_stdout_on_pass = 1
<br>
# Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
<br>
stdout_save_lines = -1
<br>
merge_stdout_stderr = 1
<br>
<p>specify_module = Simple
<br>
analyze_module = NBCBench
<br>
simple_pass:tests = nbcbench
<br>
<p>argv = -p &amp;test_np()-&amp;test_np() -s 1-1048576 -v -t \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp;enumerate(&quot;MPI_Allgatherv&quot;, &quot;MPI_Allgather&quot;, &quot;MPI_Allreduce&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;MPI_Alltoall&quot;, &quot;MPI_Alltoallv&quot;, &quot;MPI_Barrier&quot;, &quot;MPI_Bcast&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;MPI_Gather&quot;, &quot;MPI_Gatherv&quot;, &quot;MPI_Reduce&quot;, &quot;MPI_Reduce_scatter&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;MPI_Scan&quot;, &quot;MPI_Scatter&quot;, &quot;MPI_Scatterv&quot;)
<br>
<p>#======================================================================
<br>
# Reporter phase
<br>
#======================================================================
<br>
<p>[Reporter: IU database]
<br>
module = MTTDatabase
<br>
<p>mttdatabase_realm = OMPI
<br>
mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
<br>
# Change this to be the username and password for your submit user.
<br>
# Get this from the OMPI MTT administrator.
<br>
mttdatabase_username = you must set this value
<br>
mttdatabase_password = you must set this value
<br>
# Change this to be some short string identifying your cluster.
<br>
mttdatabase_platform = you must set this value
<br>
<p>mttdatabase_debug_filename = mttdb_debug_file_perf
<br>
mttdatabase_keep_debug_files = 1
<br>
<p>#----------------------------------------------------------------------
<br>
<p># This is a backup reporter; it also writes results to a local text
<br>
# file
<br>
<p>[Reporter: text file backup]
<br>
module = TextFile
<br>
<p>textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
<br>
<p>textfile_summary_header = &lt;&lt;EOT
<br>
Hostname: &amp;shell(&quot;hostname&quot;)
<br>
uname: &amp;shell(&quot;uname -a&quot;)
<br>
Username: &amp;shell(&quot;who am i&quot;)
<br>
EOT
<br>
<p>textfile_summary_footer =
<br>
textfile_detail_header =
<br>
textfile_detail_footer =
<br>
<p>textfile_textwrap = 78
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/12/0716.php">Keith M Matthews: "[MTT users] AUTO: Keith M Matthews/Australia/IBM is out of the office. (returning 18/01/2010)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>Reply:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
