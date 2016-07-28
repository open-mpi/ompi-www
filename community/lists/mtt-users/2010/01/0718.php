<?
$subject_val = "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 10:20:16 2010" -->
<!-- isoreceived="20100104152016" -->
<!-- sent="Mon, 4 Jan 2010 10:20:06 -0500" -->
<!-- isosent="20100104152006" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini" -->
<!-- id="20100104152005.GF53342_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B41D33C.8050207_at_chelsio.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 10:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0719.php">Jeff Squyres: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>Previous message:</strong> <a href="0717.php">vishal shorghar: "[MTT users] MTT:Error while executing ompi-core-perf-testing.ini"</a>
<li><strong>In reply to:</strong> <a href="0717.php">vishal shorghar: "[MTT users] MTT:Error while executing ompi-core-perf-testing.ini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0719.php">Jeff Squyres: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>Reply:</strong> <a href="0719.php">Jeff Squyres: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Vishal,
<br>
<p>The debug output shows that your MTT run aborted because you do not
<br>
have a username/passwd for the open-mpi.org/mtt/submit URL. To skip
<br>
the IU Database part, try running with --no-section iu.database, e.g.,
<br>
<p>&nbsp;&nbsp;# cat ompi-core-perf-testing.ini | ../client/mtt --no-section iu.database --debug -
<br>
<p>Thanks,
<br>
Ethan
<br>
<p>On Mon, Jan/04/2010 05:08:36PM, vishal shorghar wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today I ran ompi-core-perf-test script as &quot;# cat  
</span><br>
<span class="quotelev1">&gt; ompi-core-perf-testing.ini | ../client/mtt  --debug -&quot;
</span><br>
<span class="quotelev1">&gt; It gave me following error and exits .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_veera samples]# cat  ompi-core-perf-testing.ini | ../client/mtt  
</span><br>
<span class="quotelev1">&gt; --debug -
</span><br>
<span class="quotelev1">&gt; Debug is 1, Verbose is 1                                                    
</span><br>
<span class="quotelev1">&gt;    *** MTT: ../client/mtt --debug -                                         
</span><br>
<span class="quotelev1">&gt;       *** Running on veera                                                  
</span><br>
<span class="quotelev1">&gt;          Chdir ../client                                                    
</span><br>
<span class="quotelev1">&gt;             Chdir /root/mtt-svn/samples                                     
</span><br>
<span class="quotelev1">&gt;                Copying: stdin to /tmp/dw1zvwGZEa.ini                        
</span><br>
<span class="quotelev1">&gt;                   Expanding include_file(s) parameters in 
</span><br>
<span class="quotelev1">&gt; /tmp/dw1zvwGZEa.ini                    Reading ini file: stdin              
</span><br>
<span class="quotelev1">&gt;                                           Validating INI inifile: 
</span><br>
<span class="quotelev1">&gt; /tmp/bH9q7NY7Hl.ini                                    FilterINI: Final 
</span><br>
<span class="quotelev1">&gt; list of sections:                                                   [mtt]   
</span><br>
<span class="quotelev1">&gt;                                                                       
</span><br>
<span class="quotelev1">&gt; [lock]                                                                      
</span><br>
<span class="quotelev1">&gt;   [mpi get: ompi-nightly-trunk]                                             
</span><br>
<span class="quotelev1">&gt;     [mpi get: ompi-nightly-v1.2]                                            
</span><br>
<span class="quotelev1">&gt;       [mpi get: ompi-released-v1.2]                                         
</span><br>
<span class="quotelev1">&gt;         [mpi get: mpich1]                                                   
</span><br>
<span class="quotelev1">&gt;           [mpi get: mpich-mx]                                               
</span><br>
<span class="quotelev1">&gt;             [mpi get: mpich2]                                               
</span><br>
<span class="quotelev1">&gt;               [mpi get: mvapich1]                                           
</span><br>
<span class="quotelev1">&gt;                 [mpi get: mvapich2]                                         
</span><br>
<span class="quotelev1">&gt;                   [mpi get: hp mpi]                                         
</span><br>
<span class="quotelev1">&gt;                     [mpi get: intel mpi]                                    
</span><br>
<span class="quotelev1">&gt;                       [skip mpi get: scali mpi]                             
</span><br>
<span class="quotelev1">&gt;                         [skip mpi get: cray mpi]                            
</span><br>
<span class="quotelev1">&gt;                           [mpi install: ompi/gnu-standard]                  
</span><br>
<span class="quotelev1">&gt;                             [mpi install: mpich1]                           
</span><br>
<span class="quotelev1">&gt;                               [mpi install: mpich2]                         
</span><br>
<span class="quotelev1">&gt;                                 [mpi install: mvapich1]                     
</span><br>
<span class="quotelev1">&gt;                                   [mpi install: mvapich2]                   
</span><br>
<span class="quotelev1">&gt;                                     [mpi install: intel mpi]                
</span><br>
<span class="quotelev1">&gt;                                       [mpi install: hp mpi]                 
</span><br>
<span class="quotelev1">&gt;                                         [mpi details: ompi]                 
</span><br>
<span class="quotelev1">&gt;                                           [mpi details: mpich1]             
</span><br>
<span class="quotelev1">&gt;                                             [mpi details: mpich2]           
</span><br>
<span class="quotelev1">&gt;                                               [mpi details: mvapich1]       
</span><br>
<span class="quotelev1">&gt;                                                 [mpi details: mvapich2]     
</span><br>
<span class="quotelev1">&gt;                                                   [mpi details: mpich-mx]   
</span><br>
<span class="quotelev1">&gt;                                                     [mpi details: intel 
</span><br>
<span class="quotelev1">&gt; mpi]                                                      [mpi details: hp 
</span><br>
<span class="quotelev1">&gt; mpi]                                                         [test get: 
</span><br>
<span class="quotelev1">&gt; netpipe]                                                           [test 
</span><br>
<span class="quotelev1">&gt; get: osu]                                                               
</span><br>
<span class="quotelev1">&gt; [test get: imb]                                                             
</span><br>
<span class="quotelev1">&gt;   [test get: skampi]                                                        
</span><br>
<span class="quotelev1">&gt;     [test get: nbcbench]                                                    
</span><br>
<span class="quotelev1">&gt;       [test build: netpipe]                                                 
</span><br>
<span class="quotelev1">&gt;         [test build: osu]                                                   
</span><br>
<span class="quotelev1">&gt;           [test build: imb]                                                 
</span><br>
<span class="quotelev1">&gt;             [test build: skampi]                                            
</span><br>
<span class="quotelev1">&gt;               [test build: nbcbench]                                        
</span><br>
<span class="quotelev1">&gt;                 [test run: netpipe]                                         
</span><br>
<span class="quotelev1">&gt;                   [test run: osu]                                           
</span><br>
<span class="quotelev1">&gt;                     [test run: imb]                                         
</span><br>
<span class="quotelev1">&gt;                       [test run: skampi]                                    
</span><br>
<span class="quotelev1">&gt;                         [test run: nbcbench]                                
</span><br>
<span class="quotelev1">&gt;                           [reporter: iu database]                           
</span><br>
<span class="quotelev1">&gt;                             [reporter: text file backup]                    
</span><br>
<span class="quotelev1">&gt;                         Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
</span><br>
<span class="quotelev1">&gt; scratch                        Value returning:                             
</span><br>
<span class="quotelev1">&gt;                                   scratch: .                                
</span><br>
<span class="quotelev1">&gt;                                      scratch resolved: 
</span><br>
<span class="quotelev1">&gt; /root/mtt-svn/samples                                        Chdir 
</span><br>
<span class="quotelev1">&gt; /root/mtt-svn/samples                                                    
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT fast_scratch                
</span><br>
<span class="quotelev1">&gt;    Value returning:                                                         
</span><br>
<span class="quotelev1">&gt;       fast_scratch: /root/mtt-svn/samples                                   
</span><br>
<span class="quotelev1">&gt;          fast_scratch resolved: /root/mtt-svn/samples                       
</span><br>
<span class="quotelev1">&gt;             *** Main scratch tree: /root/mtt-svn/samples                    
</span><br>
<span class="quotelev1">&gt;                *** Fast scratch tree: /root/mtt-svn/samples                 
</span><br>
<span class="quotelev1">&gt;                   Value got: Config::IniFiles=HASH(0xf872ad0) MTT force     
</span><br>
<span class="quotelev1">&gt;                      Value returning:                                       
</span><br>
<span class="quotelev1">&gt;                         Making dir: /root/mtt-svn/samples/sources (cwd: 
</span><br>
<span class="quotelev1">&gt; /root/mtt-svn/samples)         Making dir: /root/mtt-svn/samples/installs 
</span><br>
<span class="quotelev1">&gt; (cwd: /root/mtt-svn/samples)        Making dir: 
</span><br>
<span class="quotelev1">&gt; /root/mtt-svn/samples/test_runs (cwd: /root/mtt-svn/samples)       Value 
</span><br>
<span class="quotelev1">&gt; got: Config::IniFiles=HASH(0xf872ad0) MTT funclet_files                  
</span><br>
<span class="quotelev1">&gt; Value returning:                                                            
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT hostfile                 
</span><br>
<span class="quotelev1">&gt;       Value returning:                                                      
</span><br>
<span class="quotelev1">&gt;          Value got: Config::IniFiles=HASH(0xf872ad0) MTT hostlist           
</span><br>
<span class="quotelev1">&gt;             Value returning:                                                
</span><br>
<span class="quotelev1">&gt;                Value got: Config::IniFiles=HASH(0xf872ad0) MTT max_np       
</span><br>
<span class="quotelev1">&gt;                   Value returning:                                          
</span><br>
<span class="quotelev1">&gt;                      Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
</span><br>
<span class="quotelev1">&gt; textwrap                       Value returning:                             
</span><br>
<span class="quotelev1">&gt;                                   Value got: 
</span><br>
<span class="quotelev1">&gt; Config::IniFiles=HASH(0xf872ad0) MTT drain_timeout                  Value 
</span><br>
<span class="quotelev1">&gt; returning:                                                               
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT trim_save_successful        
</span><br>
<span class="quotelev1">&gt;    Value returning:                                                         
</span><br>
<span class="quotelev1">&gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT trim_save_failed      
</span><br>
<span class="quotelev1">&gt;          Value returning:                                                   
</span><br>
<span class="quotelev1">&gt;             Value got: Config::IniFiles=HASH(0xf872ad0) MTT trial           
</span><br>
<span class="quotelev1">&gt;                Value returning: 1                                           
</span><br>
<span class="quotelev1">&gt;                   Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
</span><br>
<span class="quotelev1">&gt; http_proxy                     Value returning:                             
</span><br>
<span class="quotelev1">&gt;                                   Value got: 
</span><br>
<span class="quotelev1">&gt; Config::IniFiles=HASH(0xf872ad0) MTT https_proxy                    Value 
</span><br>
<span class="quotelev1">&gt; returning:                                                               
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT ftp_proxy                   
</span><br>
<span class="quotelev1">&gt;    Value returning:                                                         
</span><br>
<span class="quotelev1">&gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT terminate_files       
</span><br>
<span class="quotelev1">&gt;          Value returning:                                                   
</span><br>
<span class="quotelev1">&gt;             Value got: Config::IniFiles=HASH(0xf872ad0) MTT pause_files     
</span><br>
<span class="quotelev1">&gt;                Value returning:                                             
</span><br>
<span class="quotelev1">&gt;                   Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
</span><br>
<span class="quotelev1">&gt; min_disk_free                  Value returning:                             
</span><br>
<span class="quotelev1">&gt;                                   Value got: 
</span><br>
<span class="quotelev1">&gt; Config::IniFiles=HASH(0xf872ad0) MTT min_disk_free_wait             Value 
</span><br>
<span class="quotelev1">&gt; returning:                                                               
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT delete_fast_scratch         
</span><br>
<span class="quotelev1">&gt;    Value returning:                                                         
</span><br>
<span class="quotelev1">&gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
</span><br>
<span class="quotelev1">&gt; save_fast_scratch_files        Value returning:                             
</span><br>
<span class="quotelev1">&gt;                                   Value got: 
</span><br>
<span class="quotelev1">&gt; Config::IniFiles=HASH(0xf872ad0) MTT                                  
</span><br>
<span class="quotelev1">&gt; docommand_timeout_notify_file                                               
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Value returning:                                                            
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT                          
</span><br>
<span class="quotelev1">&gt;         docommand_timeout_notify_email                                      
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; Value returning:                                                            
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT                          
</span><br>
<span class="quotelev1">&gt;         docommand_timeout_notify_timeout                                    
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; Value returning:                                                            
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT                          
</span><br>
<span class="quotelev1">&gt;         docommand_timeout_backtrace_program                                 
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; Value returning:                                                            
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT before_all_exec          
</span><br>
<span class="quotelev1">&gt;       Value returning:                                                      
</span><br>
<span class="quotelev1">&gt;          Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
</span><br>
<span class="quotelev1">&gt; before_all_exec_timeout        Value returning:                             
</span><br>
<span class="quotelev1">&gt;                                   Value got: 
</span><br>
<span class="quotelev1">&gt; Config::IniFiles=HASH(0xf872ad0) MTT before_all_exec_pass           Value 
</span><br>
<span class="quotelev1">&gt; returning:                                                               
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT before_each_exec            
</span><br>
<span class="quotelev1">&gt;    Value returning:                                                         
</span><br>
<span class="quotelev1">&gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
</span><br>
<span class="quotelev1">&gt; before_each_exec_timeout       Value returning:                             
</span><br>
<span class="quotelev1">&gt;                                   Value got: 
</span><br>
<span class="quotelev1">&gt; Config::IniFiles=HASH(0xf872ad0) MTT before_each_exec_pass          Value 
</span><br>
<span class="quotelev1">&gt; returning:                                                               
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT after_all_exec              
</span><br>
<span class="quotelev1">&gt;    Value returning:                                                         
</span><br>
<span class="quotelev1">&gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
</span><br>
<span class="quotelev1">&gt; after_all_exec_timeout         Value returning:                             
</span><br>
<span class="quotelev1">&gt;                                   Value got: 
</span><br>
<span class="quotelev1">&gt; Config::IniFiles=HASH(0xf872ad0) MTT after_all_exec_pass            Value 
</span><br>
<span class="quotelev1">&gt; returning:                                                               
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT after_each_exec             
</span><br>
<span class="quotelev1">&gt;    Value returning:                                                         
</span><br>
<span class="quotelev1">&gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT 
</span><br>
<span class="quotelev1">&gt; after_each_exec_timeout        Value returning:                             
</span><br>
<span class="quotelev1">&gt;                                   Value got: 
</span><br>
<span class="quotelev1">&gt; Config::IniFiles=HASH(0xf872ad0) MTT after_each_exec_pass           Value 
</span><br>
<span class="quotelev1">&gt; returning:                                                               
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) lock module                     
</span><br>
<span class="quotelev1">&gt;    Value returning:                                                         
</span><br>
<span class="quotelev1">&gt;       Value got: Config::IniFiles=HASH(0xf8fb9d0) mtt log_file logfile      
</span><br>
<span class="quotelev1">&gt;          Value returning:                                                   
</span><br>
<span class="quotelev1">&gt;             *** Reporter initializing                                       
</span><br>
<span class="quotelev1">&gt;                Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu 
</span><br>
<span class="quotelev1">&gt; database module       Value returning: MTTDatabase                          
</span><br>
<span class="quotelev3">&gt;                          &gt;&gt; Initializing reporter module: MTTDatabase       
</span><br>
<span class="quotelev1">&gt;                             Evaluating: require MTT::Reporter::MTTDatabase  
</span><br>
<span class="quotelev1">&gt;                                Evaluating: $ret = 
</span><br>
<span class="quotelev1">&gt; &amp;MTT::Reporter::MTTDatabase::Init(@args)                    Value got: 
</span><br>
<span class="quotelev1">&gt; Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database                
</span><br>
<span class="quotelev1">&gt; mttdatabase_username                                                        
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Value returning: you must set this value                                    
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database        
</span><br>
<span class="quotelev1">&gt;         mttdatabase_password                                                
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; Value returning: you must set this value                                    
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database        
</span><br>
<span class="quotelev1">&gt;         mttdatabase_url                                                     
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; Value returning: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>                       
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database        
</span><br>
<span class="quotelev1">&gt;         mttdatabase_realm                                                   
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; Value returning: OMPI                                                       
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database        
</span><br>
<span class="quotelev1">&gt;         mttdatabase_email_errors_to                                         
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; Value returning:                                                            
</span><br>
<span class="quotelev1">&gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database        
</span><br>
<span class="quotelev1">&gt;         mttdatabase_debug_filename
</span><br>
<span class="quotelev1">&gt; Value returning: mttdb_debug_file_perf
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
</span><br>
<span class="quotelev1">&gt;   mttdatabase_keep_debug_files
</span><br>
<span class="quotelev1">&gt; Value returning: 1
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
</span><br>
<span class="quotelev1">&gt;   mttdatabase_debug_server
</span><br>
<span class="quotelev1">&gt; Value returning:
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
</span><br>
<span class="quotelev1">&gt;   mttdatabase_hostname
</span><br>
<span class="quotelev1">&gt; Value returning:
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) mtt local_username
</span><br>
<span class="quotelev1">&gt; Value returning:
</span><br>
<span class="quotelev1">&gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
</span><br>
<span class="quotelev1">&gt;   mttdatabase_platform
</span><br>
<span class="quotelev1">&gt; Value returning: you must set this value
</span><br>
<span class="quotelev1">&gt;   Set HTTP credentials for realm &quot;OMPI&quot;
</span><br>
<span class="quotelev1">&gt; MTTDatabase client getting a client serial number...
</span><br>
<span class="quotelev1">&gt; MTTDatabase client trying proxy:  / Default (none)
</span><br>
<span class="quotelev1">&gt; MTTDatabase proxy successful / not 500
</span><br>
<span class="quotelev1">&gt; *** WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
</span><br>
<span class="quotelev1">&gt;    <a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; *** WARNING: &gt;&gt; Error was: 401 Authorization Required
</span><br>
<span class="quotelev1">&gt;    &lt;!DOCTYPE HTML PUBLIC &quot;-//IETF//DTD HTML 2.0//EN&quot;&gt;
</span><br>
<span class="quotelev1">&gt;    &lt;html&gt;&lt;head&gt;
</span><br>
<span class="quotelev1">&gt;    &lt;title&gt;401 Authorization Required&lt;/title&gt;
</span><br>
<span class="quotelev1">&gt;    &lt;/head&gt;&lt;body&gt;
</span><br>
<span class="quotelev1">&gt;    &lt;h1&gt;Authorization Required&lt;/h1&gt;
</span><br>
<span class="quotelev1">&gt;    &lt;p&gt;This server could not verify that you
</span><br>
<span class="quotelev1">&gt;    are authorized to access the document
</span><br>
<span class="quotelev1">&gt;    requested.  Either you supplied the wrong
</span><br>
<span class="quotelev1">&gt;    credentials (e.g., bad password), or your
</span><br>
<span class="quotelev1">&gt;    browser doesn't understand how to supply
</span><br>
<span class="quotelev1">&gt;    the credentials required.&lt;/p&gt;
</span><br>
<span class="quotelev1">&gt;    &lt;hr&gt;
</span><br>
<span class="quotelev1">&gt;    &lt;address&gt;Apache Server at www.open-mpi.org Port 443&lt;/address&gt;
</span><br>
<span class="quotelev1">&gt;    &lt;/body&gt;&lt;/html&gt;
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted: MTT::Reporter::MTTDatabase:Init: *** ERROR: &gt;&gt;
</span><br>
<span class="quotelev1">&gt;    Do not want to continue with possible bad submission URL --
</span><br>
<span class="quotelev1">&gt;        aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anyone suggest me if any modification required in 
</span><br>
<span class="quotelev1">&gt; ompi-core-perf-testing.ini or any other way to run this test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi-core-perf-testing.ini file is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vishal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Note that there are many items in this file that, while they are
</span><br>
<span class="quotelev1">&gt; # good for examples, may not work for random MTT users.  For example,
</span><br>
<span class="quotelev1">&gt; # the &quot;ompi-tests&quot; SVN repository that is used in the examples below
</span><br>
<span class="quotelev1">&gt; # is *not* a public repository (there's nothing really secret in this
</span><br>
<span class="quotelev1">&gt; # repository; it contains many publicly-available MPI tests and
</span><br>
<span class="quotelev1">&gt; # benchmarks, but we have never looked into the redistribution rights
</span><br>
<span class="quotelev1">&gt; # of these codes, so we keep the SVN repository &quot;closed&quot; to the
</span><br>
<span class="quotelev1">&gt; # general public and only use it internally in the Open MPI project).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MTT]
</span><br>
<span class="quotelev1">&gt; # Leave this string so that we can identify this data subset in the
</span><br>
<span class="quotelev1">&gt; # database
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Use a &quot;test&quot; label until we're ready to run real results
</span><br>
<span class="quotelev1">&gt; description = [testbake]
</span><br>
<span class="quotelev1">&gt; # description = [2007 collective performance bakeoff]
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real results
</span><br>
<span class="quotelev1">&gt; trial = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Put other values here as relevant to your environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Lock]
</span><br>
<span class="quotelev1">&gt; # Put values here as relevant to your environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: ompi-nightly-trunk]
</span><br>
<span class="quotelev1">&gt; mpi_details = OMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev1">&gt; ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: ompi-nightly-v1.2]
</span><br>
<span class="quotelev1">&gt; mpi_details = OMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev1">&gt; ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/v1.2">http://www.open-mpi.org/nightly/v1.2</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: ompi-released-v1.2]
</span><br>
<span class="quotelev1">&gt; mpi_details = OMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev1">&gt; ompi_snapshot_url = <a href="http://www.open-mpi.org/software/ompi/v1.2/downloads">http://www.open-mpi.org/software/ompi/v1.2/downloads</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: MPICH1]
</span><br>
<span class="quotelev1">&gt; mpi_details = MPICH1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; # MPICH1 from the Argonne web site
</span><br>
<span class="quotelev1">&gt; #download_url = <a href="http://www-unix.mcs.anl.gov/mpi/mpich1/downloads/mpich.tar.gz">http://www-unix.mcs.anl.gov/mpi/mpich1/downloads/mpich.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; # If you are using SLURM, use this URL -- it's the same exact
</span><br>
<span class="quotelev1">&gt; # mpich.tar.gz but with the SLURM 1.2.12/etc/mpich1.slurm.patch in it
</span><br>
<span class="quotelev1">&gt; # (which allows native launching under SLURM).
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://www.open-mpi.org/~jsquyres/ompi-coll-bakeoff/mpich-1.2.7p1-patched-for-slurm.tar.gz">http://www.open-mpi.org/~jsquyres/ompi-coll-bakeoff/mpich-1.2.7p1-patched-for-slurm.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; # This version is fixed/frozen, so it's ok to hard-code it
</span><br>
<span class="quotelev1">&gt; download_version = 1.2.7p1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: MPICH-MX]
</span><br>
<span class="quotelev1">&gt; mpi_details = MPICH-MX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz">http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; # You need to obtain the username and password from Myricom
</span><br>
<span class="quotelev1">&gt; download_username = &lt;OBTAIN THIS FROM MYRICOM&gt;
</span><br>
<span class="quotelev1">&gt; download_password = &lt;OBTAIN THIS FROM MYRICOM&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: MPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_details = MPICH2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://www-unix.mcs.anl.gov/mpi/mpich2/downloads/mpich2-1.0.5p4.tar.gz">http://www-unix.mcs.anl.gov/mpi/mpich2/downloads/mpich2-1.0.5p4.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: MVAPICH1]
</span><br>
<span class="quotelev1">&gt; mpi_details = MVAPICH1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich/mvapich-0.9.9.tar.gz">http://mvapich.cse.ohio-state.edu/download/mvapich/mvapich-0.9.9.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: MVAPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_details = MVAPICH2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz">http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: HP MPI]
</span><br>
<span class="quotelev1">&gt; mpi_details = HP MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # You need to have HP MPI already installed somewhere
</span><br>
<span class="quotelev1">&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; # Fill this in with the version of your HP MPI
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_version = 2.2.5.1b1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: Intel MPI]
</span><br>
<span class="quotelev1">&gt; mpi_details = Intel MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # You need to have Intel MPI already installed somewhere
</span><br>
<span class="quotelev1">&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; # Fill this in with the version of your Intel MPI
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_version = 3.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [SKIP MPI get: Scali MPI]
</span><br>
<span class="quotelev1">&gt; mpi_details = Scali MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # You need to have Scali MPI already installed somewhere
</span><br>
<span class="quotelev1">&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; # Fill this in with the version of your Scali MPI
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_version = ???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [SKIP MPI get: Cray MPI]
</span><br>
<span class="quotelev1">&gt; mpi_details = Cray MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # You need to have Cray MPI already installed somewhere
</span><br>
<span class="quotelev1">&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; # Fill this in with the version of your Cray MPI
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_version = ???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Install MPI phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # All flavors of Open MPI
</span><br>
<span class="quotelev1">&gt; [MPI install: OMPI/GNU-standard]
</span><br>
<span class="quotelev1">&gt; mpi_get = ompi-nightly-trunk, ompi-nightly-v1.2, ompi-released-v1.2
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = OMPI
</span><br>
<span class="quotelev1">&gt; ompi_make_all_arguments = -j 8
</span><br>
<span class="quotelev1">&gt; ompi_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; ompi_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; # Adjust these configure flags for your site
</span><br>
<span class="quotelev1">&gt; ompi_configure_arguments = CFLAGS=-O3 --with-openib --enable-mpirun-prefix-by-default --enable-branch-probabilities --disable-heterogeneous --without-mpi-param-check
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: MPICH1]
</span><br>
<span class="quotelev1">&gt; mpi_get = mpich1
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; # Ensure that MPICH allocates enough shared memory (32MB seems to be
</span><br>
<span class="quotelev1">&gt; # enough for ppn=4; went to 64MB to give it plenty of room)
</span><br>
<span class="quotelev1">&gt; setenv = P4_GLOBMEMSIZE 67108864
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = MPICH2
</span><br>
<span class="quotelev1">&gt; mpich2_use_all_target = 0
</span><br>
<span class="quotelev1">&gt; mpich2_apply_slurm_patch = 1
</span><br>
<span class="quotelev1">&gt; mpich2_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; mpich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; mpich2_configure_arguments = -cflags=-O3 -rsh=ssh --with-device=ch_p4 --with-comm=shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: MPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_get = mpich2
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; # Adjust this for your site (this is what works at Cisco).  Needed to
</span><br>
<span class="quotelev1">&gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
</span><br>
<span class="quotelev1">&gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev1">&gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev1">&gt; prepend_path = LD_LIBRARY_PATH /opt/slurm/current/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = MPICH2
</span><br>
<span class="quotelev1">&gt; mpich2_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; mpich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; mpich2_configure_arguments = --disable-f90 CFLAGS=-O3 --enable-fast --with-device=ch3:nemesis
</span><br>
<span class="quotelev1">&gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev1">&gt; mpich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
</span><br>
<span class="quotelev1">&gt; mpich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: MVAPICH1]
</span><br>
<span class="quotelev1">&gt; mpi_get = mvapich1
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; # Setting this makes MVAPICH assume that the same HCAs are on all
</span><br>
<span class="quotelev1">&gt; # hosts and therefore it makes some optimizations
</span><br>
<span class="quotelev1">&gt; setenv = VIADEV_USE_COMPAT_MODE 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = MVAPICH2
</span><br>
<span class="quotelev1">&gt; # Adjust this to be where your OFED is installed
</span><br>
<span class="quotelev1">&gt; mvapich2_setenv = IBHOME /usr
</span><br>
<span class="quotelev1">&gt; # Leave this set (COMPAT); if you don't, their script asks questions,
</span><br>
<span class="quotelev1">&gt; # causing MTT to hang
</span><br>
<span class="quotelev1">&gt; mvapich2_setenv = COMPAT AUTO_DETECT
</span><br>
<span class="quotelev1">&gt; mvapich2_build_script = make.mvapich.gen2
</span><br>
<span class="quotelev1">&gt; mvapich2_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; mvapich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: MVAPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_get = mvapich2
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; # Adjust this for your site (this is what works at Cisco).  Needed to
</span><br>
<span class="quotelev1">&gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
</span><br>
<span class="quotelev1">&gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev1">&gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev1">&gt; prepend_path = LD_LIBRARY_PATH /opt/slurm/current/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = MVAPICH2
</span><br>
<span class="quotelev1">&gt; # Adjust this to be where your OFED is installed
</span><br>
<span class="quotelev1">&gt; mvapich2_setenv = OPEN_IB_HOME /usr
</span><br>
<span class="quotelev1">&gt; mvapich2_build_script = make.mvapich2.ofa
</span><br>
<span class="quotelev1">&gt; mvapich2_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; mvapich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev1">&gt; mvapich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
</span><br>
<span class="quotelev1">&gt; mvapich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: Intel MPI]
</span><br>
<span class="quotelev1">&gt; mpi_get = Intel MPI
</span><br>
<span class="quotelev1">&gt; # Adjust this if you need to.  It guarantees that multiple MPD's
</span><br>
<span class="quotelev1">&gt; # running on the same host will not collide.  If you'll ever have
</span><br>
<span class="quotelev1">&gt; # multi-job-on-the-same-host conflicts, you may want to adjust this to
</span><br>
<span class="quotelev1">&gt; # reflect some unique identifier (e.g., a resource manager ID).
</span><br>
<span class="quotelev1">&gt; setenv = MPD_CON_EXT mtt-unique-mpd.&amp;getenv(&quot;SLURM_JOBID&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Analyze::IntelMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: HP MPI]
</span><br>
<span class="quotelev1">&gt; mpi_get = HP MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Analyze::HPMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI run details
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: OMPI]
</span><br>
<span class="quotelev1">&gt; # Check &amp;test_alloc() for byslot or bynode
</span><br>
<span class="quotelev1">&gt; exec = mpirun @alloc@ -np &amp;test_np() @mca@ &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; parameters = &amp;MPI::OMPI::find_mpirun_params(&amp;test_command_line(), \
</span><br>
<span class="quotelev1">&gt;                                             &amp;test_executable())
</span><br>
<span class="quotelev1">&gt; network = &amp;MPI::OMPI::find_network(&amp;test_command_line(), &amp;test_executable())
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;--bynode&quot;, &quot;--byslot&quot;)
</span><br>
<span class="quotelev1">&gt; mca = &amp;enumerate( \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl sm,tcp,self &quot; . @common_params@, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl tcp,self &quot; . @common_params@, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl sm,openib,self &quot; . @common_params@, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl sm,openib,self --mca mpi_leave_pinned 1 &quot; . @common_params@, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl openib,self &quot; . @common_params@, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl openib,self --mca mpi_leave_pinned 1 &quot; . @common_params@, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl openib,self --mca mpi_leave_pinned_pipeline 1 &quot; . @common_params@, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl openib,self --mca btl_openib_use_srq 1 &quot; . @common_params@)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # v1.2 has a problem with striping across heterogeneous ports right now: 
</span><br>
<span class="quotelev1">&gt; # <a href="https://svn.open-mpi.org/trac/ompi/ticket/1125">https://svn.open-mpi.org/trac/ompi/ticket/1125</a>.  Also keep the coll
</span><br>
<span class="quotelev1">&gt; # bakeoff tests on DDR only.
</span><br>
<span class="quotelev1">&gt; common_params = &quot;--mca btl_tcp_if_include ib0 --mca oob_tcp_if_include ib0 --mca btl_openib_if_include mthca0 --mca mpi_paffinity_alone 1&quot; . \
</span><br>
<span class="quotelev1">&gt;         &amp;if(&amp;or(&amp;eq(&amp;mpi_get_name(), &quot;ompi-nightly-v1.2&quot;), \
</span><br>
<span class="quotelev1">&gt;                 &amp;eq(&amp;mpi_get_name(), &quot;ompi-released-v1.2&quot;)), \
</span><br>
<span class="quotelev1">&gt;                 &quot;--mca btl_openib_max_btls 1&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # It is important that the after_each_exec step is a single
</span><br>
<span class="quotelev1">&gt; # command/line so that MTT will launch it directly (instead of via a
</span><br>
<span class="quotelev1">&gt; # temporary script).  This is because the &quot;srun&quot; command is
</span><br>
<span class="quotelev1">&gt; # (intentionally) difficult to kill in some cases.  See
</span><br>
<span class="quotelev1">&gt; # <a href="https://svn.open-mpi.org/trac/mtt/changeset/657">https://svn.open-mpi.org/trac/mtt/changeset/657</a> for details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after_each_exec = &amp;if(&amp;ne(&quot;&quot;, &amp;getenv(&quot;SLURM_NNODES&quot;)), &quot;srun -N &quot; . &amp;getenv(&quot;SLURM_NNODES&quot;)) /home/mpiteam/svn/ompi-tests/cisco/mtt/after_each_exec.pl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: MPICH1]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Launching through SLURM.  From
</span><br>
<span class="quotelev1">&gt; # <a href="http://www.llnl.gov/linux/slurm/quickstart.html">http://www.llnl.gov/linux/slurm/quickstart.html</a>.
</span><br>
<span class="quotelev1">&gt; exec = srun @alloc@ -n &amp;test_np() --mpi=mpich1_p4 &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev1">&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev1">&gt; #exec = mpirun -np &amp;test_np() -machinefile &amp;hostfile() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; network = loopback,ethernet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # In this SLURM example, if each node has 4 CPUs, telling SLURM to
</span><br>
<span class="quotelev1">&gt; # launching &quot;by node&quot; means specifying that each MPI process will use 4
</span><br>
<span class="quotelev1">&gt; # CPUs.
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: MPICH2]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev1">&gt; # ensure that multiple mpd's on the same node don't conflict (or never
</span><br>
<span class="quotelev1">&gt; # happen).
</span><br>
<span class="quotelev1">&gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev1">&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev1">&gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; network = loopback,ethernet,shmem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # In this SLURM example, if each node has 4 CPUs, telling SLURM to
</span><br>
<span class="quotelev1">&gt; # launching &quot;by node&quot; means specifying that each MPI process will use 4
</span><br>
<span class="quotelev1">&gt; # CPUs.
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: MVAPICH1]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Launching through SLURM.  From
</span><br>
<span class="quotelev1">&gt; # <a href="http://www.llnl.gov/linux/slurm/quickstart.html">http://www.llnl.gov/linux/slurm/quickstart.html</a>.
</span><br>
<span class="quotelev1">&gt; exec = srun @alloc@ -n &amp;test_np() --mpi=mvapich &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev1">&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev1">&gt; #exec = mpirun -np &amp;test_np() --machinefile &amp;hostfile() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
</span><br>
<span class="quotelev1">&gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: MVAPICH2]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev1">&gt; # ensure that multiple mpd's on the same node don't conflict (or never
</span><br>
<span class="quotelev1">&gt; # happen).
</span><br>
<span class="quotelev1">&gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev1">&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev1">&gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
</span><br>
<span class="quotelev1">&gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: MPICH-MX]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Launching through SLURM.  From
</span><br>
<span class="quotelev1">&gt; # <a href="http://www.llnl.gov/linux/slurm/quickstart.html">http://www.llnl.gov/linux/slurm/quickstart.html</a>.
</span><br>
<span class="quotelev1">&gt; exec = srun @alloc@ -n &amp;test_np() --mpi=mpichgm &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; network = mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev1">&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev1">&gt; #exec = mpirun -np &amp;test_np() --machinefile &amp;hostfile() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
</span><br>
<span class="quotelev1">&gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: Intel MPI]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Need a before_any_exec step to launch MPDs
</span><br>
<span class="quotelev1">&gt; before_any_exec = &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; h=`hostname`
</span><br>
<span class="quotelev1">&gt; file=mtt-hostlist.$$
</span><br>
<span class="quotelev1">&gt; rm -f $file
</span><br>
<span class="quotelev1">&gt; # If we're allocating by node, get each hostname once.  Otherwise, get
</span><br>
<span class="quotelev1">&gt; # each hostname as many times as we have slots on that node.
</span><br>
<span class="quotelev1">&gt; srun hostname | uniq &gt; $file
</span><br>
<span class="quotelev1">&gt; # Add localhost if it's not in there (e.g., srun -A)
</span><br>
<span class="quotelev1">&gt; local=`grep $h $file`
</span><br>
<span class="quotelev1">&gt; touch /tmp/mtt-mpiexec-options.$SLURM_JOBID
</span><br>
<span class="quotelev1">&gt; if test &quot;$local&quot; = &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;    echo $h &gt;&gt; $file
</span><br>
<span class="quotelev1">&gt;    echo -nolocal &gt; /tmp/mpiexec-options.$SLURM_JOBID
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; num=`wc -l $file | awk '{ print $1 }'`
</span><br>
<span class="quotelev1">&gt; mpdboot -n $num -r ssh --verbose --file=$file
</span><br>
<span class="quotelev1">&gt; mpdtrace
</span><br>
<span class="quotelev1">&gt; rm -f $file
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Intel MPI seems to default to by-node allocation and I can't figure
</span><br>
<span class="quotelev1">&gt; # out how to override it.  Sigh.
</span><br>
<span class="quotelev1">&gt; exec = mpiexec @options@ -n &amp;test_np() ./&amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Test both the &quot;normal&quot; collective algorithms and Intel's &quot;fast&quot;
</span><br>
<span class="quotelev1">&gt; # collective algorithms (their docs state that the &quot;fast&quot; algorithms
</span><br>
<span class="quotelev1">&gt; # may not be MPI conformant, and may not give the same results between
</span><br>
<span class="quotelev1">&gt; # multiple runs, assumedly if the process layout is different).
</span><br>
<span class="quotelev1">&gt; options = &amp;stringify(&amp;cat(&quot;/tmp/mpiexec-options.&quot; . &amp;getenv(&quot;SLURM_JOBID&quot;))) \
</span><br>
<span class="quotelev1">&gt;           &amp;enumerate(&quot;-genv I_MPI_DEVICE rdssm&quot;, \
</span><br>
<span class="quotelev1">&gt;                      &quot;-genv I_MPI_DEVICE rdssm -genv I_MPI_FAST_COLLECTIVES 1&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after_all_exec = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; rm -f /tmp/mpiexec-options.$SLURM_JOBID
</span><br>
<span class="quotelev1">&gt; mpdallexit
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: HP MPI]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # I use MPI_IBV_NO_FORK_SAFE=1 because I'm using RHEL4U4, which
</span><br>
<span class="quotelev1">&gt; # doesn't have IBV fork() support.  I also have multiple active HCA
</span><br>
<span class="quotelev1">&gt; # ports and therefore need to give HP MPI a clue on the scheduling of
</span><br>
<span class="quotelev1">&gt; # ports via MPI_IB_CARD_ORDER.  I got this information via e-mailing
</span><br>
<span class="quotelev1">&gt; # HP MPI support.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # In SLURM, HP MPI seems to schedule first by node and then by slot.
</span><br>
<span class="quotelev1">&gt; # So if you have 2 quad-core nodes in your SLURM alloc, if you mpirun
</span><br>
<span class="quotelev1">&gt; # -np 2, you'll get one proc on each node.  If you mpirun -np 4,
</span><br>
<span class="quotelev1">&gt; # you'll get MCW ranks 0 and 1 on the first node and MCA ranks 2 and 3
</span><br>
<span class="quotelev1">&gt; # on the second node.  This is pretty much exactly what we want, so we
</span><br>
<span class="quotelev1">&gt; # don't need to check &amp;test_alloc() here.
</span><br>
<span class="quotelev1">&gt; exec = mpirun -IBV -e MPI_IBV_NO_FORK_SAFE=1 -e MPI_IB_CARD_ORDER=0:0 -srun -n&amp;test_np() ./&amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: netpipe]
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: osu]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/osu">https://svn.open-mpi.org/svn/ompi-tests/trunk/osu</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: imb]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: skampi]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: nbcbench]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/nbcbench">https://svn.open-mpi.org/svn/ompi-tests/trunk/nbcbench</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test build phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: netpipe]
</span><br>
<span class="quotelev1">&gt; test_get = netpipe
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make mpi
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: osu]
</span><br>
<span class="quotelev1">&gt; test_get = osu
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make osu_latency osu_bw osu_bibw
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: imb]
</span><br>
<span class="quotelev1">&gt; test_get = imb
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; cd src
</span><br>
<span class="quotelev1">&gt; make clean IMB-MPI1
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: skampi]
</span><br>
<span class="quotelev1">&gt; test_get = skampi
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; # Set EVERYONE_CAN_MPI_IO for HP MPI
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: nbcbench]
</span><br>
<span class="quotelev1">&gt; test_get = nbcbench
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test Run phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: netpipe]
</span><br>
<span class="quotelev1">&gt; test_build = netpipe
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = 2
</span><br>
<span class="quotelev1">&gt; alloc = node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = NetPipe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: osu]
</span><br>
<span class="quotelev1">&gt; test_build = osu
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = 2
</span><br>
<span class="quotelev1">&gt; alloc = node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = OSU
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = osu_bw osu_latency osu_bibw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: imb]
</span><br>
<span class="quotelev1">&gt; test_build = imb
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; argv = -npmin &amp;test_np() &amp;enumerate(&quot;PingPong&quot;, &quot;PingPing&quot;, &quot;Sendrecv&quot;, &quot;Exchange&quot;, &quot;Allreduce&quot;, &quot;Reduce&quot;, &quot;Reduce_scatter&quot;, &quot;Allgather&quot;, &quot;Allgatherv&quot;, &quot;Alltoall&quot;, &quot;Bcast&quot;, &quot;Barrier&quot;) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = IMB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = src/IMB-MPI1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: skampi]
</span><br>
<span class="quotelev1">&gt; test_build = skampi
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = SKaMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = skampi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: nbcbench]
</span><br>
<span class="quotelev1">&gt; test_build = nbcbench
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; timeout = -1
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = NBCBench
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = nbcbench
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; argv = -p &amp;test_np()-&amp;test_np() -s 1-1048576 -v -t \
</span><br>
<span class="quotelev1">&gt;     &amp;enumerate(&quot;MPI_Allgatherv&quot;, &quot;MPI_Allgather&quot;, &quot;MPI_Allreduce&quot;, \
</span><br>
<span class="quotelev1">&gt;     &quot;MPI_Alltoall&quot;, &quot;MPI_Alltoallv&quot;, &quot;MPI_Barrier&quot;, &quot;MPI_Bcast&quot;, \
</span><br>
<span class="quotelev1">&gt;     &quot;MPI_Gather&quot;, &quot;MPI_Gatherv&quot;, &quot;MPI_Reduce&quot;, &quot;MPI_Reduce_scatter&quot;, \
</span><br>
<span class="quotelev1">&gt;     &quot;MPI_Scan&quot;, &quot;MPI_Scatter&quot;, &quot;MPI_Scatterv&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Reporter phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Reporter: IU database]
</span><br>
<span class="quotelev1">&gt; module = MTTDatabase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev1">&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; # Change this to be the username and password for your submit user.
</span><br>
<span class="quotelev1">&gt; # Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev1">&gt; mttdatabase_username = you must set this value
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = you must set this value
</span><br>
<span class="quotelev1">&gt; # Change this to be some short string identifying your cluster.
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = you must set this value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mttdatabase_debug_filename = mttdb_debug_file_perf
</span><br>
<span class="quotelev1">&gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # This is a backup reporter; it also writes results to a local text
</span><br>
<span class="quotelev1">&gt; # file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev1">&gt; module = TextFile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt; Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_summary_footer =
</span><br>
<span class="quotelev1">&gt; textfile_detail_header =
</span><br>
<span class="quotelev1">&gt; textfile_detail_footer =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_textwrap = 78
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0719.php">Jeff Squyres: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>Previous message:</strong> <a href="0717.php">vishal shorghar: "[MTT users] MTT:Error while executing ompi-core-perf-testing.ini"</a>
<li><strong>In reply to:</strong> <a href="0717.php">vishal shorghar: "[MTT users] MTT:Error while executing ompi-core-perf-testing.ini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0719.php">Jeff Squyres: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>Reply:</strong> <a href="0719.php">Jeff Squyres: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
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
