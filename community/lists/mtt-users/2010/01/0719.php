<?
$subject_val = "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 11:37:04 2010" -->
<!-- isoreceived="20100104163704" -->
<!-- sent="Mon, 4 Jan 2010 11:36:58 -0500" -->
<!-- isosent="20100104163658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini" -->
<!-- id="56A7973C-BCD6-4F30-BCE8-E00AA378B91B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100104152005.GF53342_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 11:36:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>In reply to:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vishal --
<br>
<p>We'd love to have Chelsio's results included in our database.  Contact me off-list if you'd like a username/password for the database (I'm 99% sure that a &quot;chelsio&quot; user already exists; I can reset the password if you'd like).
<br>
<p><p>On Jan 4, 2010, at 10:20 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Hi Vishal,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The debug output shows that your MTT run aborted because you do not
</span><br>
<span class="quotelev1">&gt; have a username/passwd for the open-mpi.org/mtt/submit URL. To skip
</span><br>
<span class="quotelev1">&gt; the IU Database part, try running with --no-section iu.database, e.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   # cat ompi-core-perf-testing.ini | ../client/mtt --no-section iu.database --debug -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan/04/2010 05:08:36PM, vishal shorghar wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Today I ran ompi-core-perf-test script as &quot;# cat 
</span><br>
<span class="quotelev2">&gt; &gt; ompi-core-perf-testing.ini | ../client/mtt  --debug -&quot;
</span><br>
<span class="quotelev2">&gt; &gt; It gave me following error and exits .
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_veera samples]# cat  ompi-core-perf-testing.ini | ../client/mtt 
</span><br>
<span class="quotelev2">&gt; &gt; --debug -
</span><br>
<span class="quotelev2">&gt; &gt; Debug is 1, Verbose is 1                                                   
</span><br>
<span class="quotelev2">&gt; &gt;    *** MTT: ../client/mtt --debug -                                        
</span><br>
<span class="quotelev2">&gt; &gt;       *** Running on veera                                                 
</span><br>
<span class="quotelev2">&gt; &gt;          Chdir ../client                                                   
</span><br>
<span class="quotelev2">&gt; &gt;             Chdir /root/mtt-svn/samples                                    
</span><br>
<span class="quotelev2">&gt; &gt;                Copying: stdin to /tmp/dw1zvwGZEa.ini                       
</span><br>
<span class="quotelev2">&gt; &gt;                   Expanding include_file(s) parameters in
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/dw1zvwGZEa.ini                    Reading ini file: stdin             
</span><br>
<span class="quotelev2">&gt; &gt;                                           Validating INI inifile:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/bH9q7NY7Hl.ini                                    FilterINI: Final
</span><br>
<span class="quotelev2">&gt; &gt; list of sections:                                                   [mtt]  
</span><br>
<span class="quotelev2">&gt; &gt;                                                                      
</span><br>
<span class="quotelev2">&gt; &gt; [lock]                                                                     
</span><br>
<span class="quotelev2">&gt; &gt;   [mpi get: ompi-nightly-trunk]                                            
</span><br>
<span class="quotelev2">&gt; &gt;     [mpi get: ompi-nightly-v1.2]                                           
</span><br>
<span class="quotelev2">&gt; &gt;       [mpi get: ompi-released-v1.2]                                        
</span><br>
<span class="quotelev2">&gt; &gt;         [mpi get: mpich1]                                                  
</span><br>
<span class="quotelev2">&gt; &gt;           [mpi get: mpich-mx]                                              
</span><br>
<span class="quotelev2">&gt; &gt;             [mpi get: mpich2]                                              
</span><br>
<span class="quotelev2">&gt; &gt;               [mpi get: mvapich1]                                          
</span><br>
<span class="quotelev2">&gt; &gt;                 [mpi get: mvapich2]                                        
</span><br>
<span class="quotelev2">&gt; &gt;                   [mpi get: hp mpi]                                        
</span><br>
<span class="quotelev2">&gt; &gt;                     [mpi get: intel mpi]                                   
</span><br>
<span class="quotelev2">&gt; &gt;                       [skip mpi get: scali mpi]                            
</span><br>
<span class="quotelev2">&gt; &gt;                         [skip mpi get: cray mpi]                           
</span><br>
<span class="quotelev2">&gt; &gt;                           [mpi install: ompi/gnu-standard]                 
</span><br>
<span class="quotelev2">&gt; &gt;                             [mpi install: mpich1]                          
</span><br>
<span class="quotelev2">&gt; &gt;                               [mpi install: mpich2]                        
</span><br>
<span class="quotelev2">&gt; &gt;                                 [mpi install: mvapich1]                    
</span><br>
<span class="quotelev2">&gt; &gt;                                   [mpi install: mvapich2]                  
</span><br>
<span class="quotelev2">&gt; &gt;                                     [mpi install: intel mpi]               
</span><br>
<span class="quotelev2">&gt; &gt;                                       [mpi install: hp mpi]                
</span><br>
<span class="quotelev2">&gt; &gt;                                         [mpi details: ompi]                
</span><br>
<span class="quotelev2">&gt; &gt;                                           [mpi details: mpich1]            
</span><br>
<span class="quotelev2">&gt; &gt;                                             [mpi details: mpich2]          
</span><br>
<span class="quotelev2">&gt; &gt;                                               [mpi details: mvapich1]      
</span><br>
<span class="quotelev2">&gt; &gt;                                                 [mpi details: mvapich2]    
</span><br>
<span class="quotelev2">&gt; &gt;                                                   [mpi details: mpich-mx]  
</span><br>
<span class="quotelev2">&gt; &gt;                                                     [mpi details: intel
</span><br>
<span class="quotelev2">&gt; &gt; mpi]                                                      [mpi details: hp
</span><br>
<span class="quotelev2">&gt; &gt; mpi]                                                         [test get:
</span><br>
<span class="quotelev2">&gt; &gt; netpipe]                                                           [test
</span><br>
<span class="quotelev2">&gt; &gt; get: osu]                                                              
</span><br>
<span class="quotelev2">&gt; &gt; [test get: imb]                                                            
</span><br>
<span class="quotelev2">&gt; &gt;   [test get: skampi]                                                       
</span><br>
<span class="quotelev2">&gt; &gt;     [test get: nbcbench]                                                   
</span><br>
<span class="quotelev2">&gt; &gt;       [test build: netpipe]                                                
</span><br>
<span class="quotelev2">&gt; &gt;         [test build: osu]                                                  
</span><br>
<span class="quotelev2">&gt; &gt;           [test build: imb]                                                
</span><br>
<span class="quotelev2">&gt; &gt;             [test build: skampi]                                           
</span><br>
<span class="quotelev2">&gt; &gt;               [test build: nbcbench]                                       
</span><br>
<span class="quotelev2">&gt; &gt;                 [test run: netpipe]                                        
</span><br>
<span class="quotelev2">&gt; &gt;                   [test run: osu]                                          
</span><br>
<span class="quotelev2">&gt; &gt;                     [test run: imb]                                        
</span><br>
<span class="quotelev2">&gt; &gt;                       [test run: skampi]                                   
</span><br>
<span class="quotelev2">&gt; &gt;                         [test run: nbcbench]                               
</span><br>
<span class="quotelev2">&gt; &gt;                           [reporter: iu database]                          
</span><br>
<span class="quotelev2">&gt; &gt;                             [reporter: text file backup]                   
</span><br>
<span class="quotelev2">&gt; &gt;                         Value got: Config::IniFiles=HASH(0xf872ad0) MTT
</span><br>
<span class="quotelev2">&gt; &gt; scratch                        Value returning:                            
</span><br>
<span class="quotelev2">&gt; &gt;                                   scratch: .                               
</span><br>
<span class="quotelev2">&gt; &gt;                                      scratch resolved:
</span><br>
<span class="quotelev2">&gt; &gt; /root/mtt-svn/samples                                        Chdir
</span><br>
<span class="quotelev2">&gt; &gt; /root/mtt-svn/samples                                                   
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT fast_scratch               
</span><br>
<span class="quotelev2">&gt; &gt;    Value returning:                                                        
</span><br>
<span class="quotelev2">&gt; &gt;       fast_scratch: /root/mtt-svn/samples                                  
</span><br>
<span class="quotelev2">&gt; &gt;          fast_scratch resolved: /root/mtt-svn/samples                      
</span><br>
<span class="quotelev2">&gt; &gt;             *** Main scratch tree: /root/mtt-svn/samples                   
</span><br>
<span class="quotelev2">&gt; &gt;                *** Fast scratch tree: /root/mtt-svn/samples                
</span><br>
<span class="quotelev2">&gt; &gt;                   Value got: Config::IniFiles=HASH(0xf872ad0) MTT force    
</span><br>
<span class="quotelev2">&gt; &gt;                      Value returning:                                      
</span><br>
<span class="quotelev2">&gt; &gt;                         Making dir: /root/mtt-svn/samples/sources (cwd:
</span><br>
<span class="quotelev2">&gt; &gt; /root/mtt-svn/samples)         Making dir: /root/mtt-svn/samples/installs
</span><br>
<span class="quotelev2">&gt; &gt; (cwd: /root/mtt-svn/samples)        Making dir:
</span><br>
<span class="quotelev2">&gt; &gt; /root/mtt-svn/samples/test_runs (cwd: /root/mtt-svn/samples)       Value
</span><br>
<span class="quotelev2">&gt; &gt; got: Config::IniFiles=HASH(0xf872ad0) MTT funclet_files                 
</span><br>
<span class="quotelev2">&gt; &gt; Value returning:                                                           
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT hostfile                
</span><br>
<span class="quotelev2">&gt; &gt;       Value returning:                                                     
</span><br>
<span class="quotelev2">&gt; &gt;          Value got: Config::IniFiles=HASH(0xf872ad0) MTT hostlist          
</span><br>
<span class="quotelev2">&gt; &gt;             Value returning:                                               
</span><br>
<span class="quotelev2">&gt; &gt;                Value got: Config::IniFiles=HASH(0xf872ad0) MTT max_np      
</span><br>
<span class="quotelev2">&gt; &gt;                   Value returning:                                         
</span><br>
<span class="quotelev2">&gt; &gt;                      Value got: Config::IniFiles=HASH(0xf872ad0) MTT
</span><br>
<span class="quotelev2">&gt; &gt; textwrap                       Value returning:                            
</span><br>
<span class="quotelev2">&gt; &gt;                                   Value got:
</span><br>
<span class="quotelev2">&gt; &gt; Config::IniFiles=HASH(0xf872ad0) MTT drain_timeout                  Value
</span><br>
<span class="quotelev2">&gt; &gt; returning:                                                              
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT trim_save_successful       
</span><br>
<span class="quotelev2">&gt; &gt;    Value returning:                                                        
</span><br>
<span class="quotelev2">&gt; &gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT trim_save_failed     
</span><br>
<span class="quotelev2">&gt; &gt;          Value returning:                                                  
</span><br>
<span class="quotelev2">&gt; &gt;             Value got: Config::IniFiles=HASH(0xf872ad0) MTT trial          
</span><br>
<span class="quotelev2">&gt; &gt;                Value returning: 1                                          
</span><br>
<span class="quotelev2">&gt; &gt;                   Value got: Config::IniFiles=HASH(0xf872ad0) MTT
</span><br>
<span class="quotelev2">&gt; &gt; http_proxy                     Value returning:                            
</span><br>
<span class="quotelev2">&gt; &gt;                                   Value got:
</span><br>
<span class="quotelev2">&gt; &gt; Config::IniFiles=HASH(0xf872ad0) MTT https_proxy                    Value
</span><br>
<span class="quotelev2">&gt; &gt; returning:                                                              
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT ftp_proxy                  
</span><br>
<span class="quotelev2">&gt; &gt;    Value returning:                                                        
</span><br>
<span class="quotelev2">&gt; &gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT terminate_files      
</span><br>
<span class="quotelev2">&gt; &gt;          Value returning:                                                  
</span><br>
<span class="quotelev2">&gt; &gt;             Value got: Config::IniFiles=HASH(0xf872ad0) MTT pause_files    
</span><br>
<span class="quotelev2">&gt; &gt;                Value returning:                                            
</span><br>
<span class="quotelev2">&gt; &gt;                   Value got: Config::IniFiles=HASH(0xf872ad0) MTT
</span><br>
<span class="quotelev2">&gt; &gt; min_disk_free                  Value returning:                            
</span><br>
<span class="quotelev2">&gt; &gt;                                   Value got:
</span><br>
<span class="quotelev2">&gt; &gt; Config::IniFiles=HASH(0xf872ad0) MTT min_disk_free_wait             Value
</span><br>
<span class="quotelev2">&gt; &gt; returning:                                                              
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT delete_fast_scratch        
</span><br>
<span class="quotelev2">&gt; &gt;    Value returning:                                                        
</span><br>
<span class="quotelev2">&gt; &gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT
</span><br>
<span class="quotelev2">&gt; &gt; save_fast_scratch_files        Value returning:                            
</span><br>
<span class="quotelev2">&gt; &gt;                                   Value got:
</span><br>
<span class="quotelev2">&gt; &gt; Config::IniFiles=HASH(0xf872ad0) MTT                                 
</span><br>
<span class="quotelev2">&gt; &gt; docommand_timeout_notify_file                                              
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Value returning:                                                           
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT                         
</span><br>
<span class="quotelev2">&gt; &gt;         docommand_timeout_notify_email                                     
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt; Value returning:                                                           
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT                         
</span><br>
<span class="quotelev2">&gt; &gt;         docommand_timeout_notify_timeout                                   
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt; Value returning:                                                           
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT                         
</span><br>
<span class="quotelev2">&gt; &gt;         docommand_timeout_backtrace_program                                
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt; Value returning:                                                           
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf872ad0) MTT before_all_exec         
</span><br>
<span class="quotelev2">&gt; &gt;       Value returning:                                                     
</span><br>
<span class="quotelev2">&gt; &gt;          Value got: Config::IniFiles=HASH(0xf872ad0) MTT
</span><br>
<span class="quotelev2">&gt; &gt; before_all_exec_timeout        Value returning:                            
</span><br>
<span class="quotelev2">&gt; &gt;                                   Value got:
</span><br>
<span class="quotelev2">&gt; &gt; Config::IniFiles=HASH(0xf872ad0) MTT before_all_exec_pass           Value
</span><br>
<span class="quotelev2">&gt; &gt; returning:                                                              
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT before_each_exec           
</span><br>
<span class="quotelev2">&gt; &gt;    Value returning:                                                        
</span><br>
<span class="quotelev2">&gt; &gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT
</span><br>
<span class="quotelev2">&gt; &gt; before_each_exec_timeout       Value returning:                            
</span><br>
<span class="quotelev2">&gt; &gt;                                   Value got:
</span><br>
<span class="quotelev2">&gt; &gt; Config::IniFiles=HASH(0xf872ad0) MTT before_each_exec_pass          Value
</span><br>
<span class="quotelev2">&gt; &gt; returning:                                                              
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT after_all_exec             
</span><br>
<span class="quotelev2">&gt; &gt;    Value returning:                                                        
</span><br>
<span class="quotelev2">&gt; &gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT
</span><br>
<span class="quotelev2">&gt; &gt; after_all_exec_timeout         Value returning:                            
</span><br>
<span class="quotelev2">&gt; &gt;                                   Value got:
</span><br>
<span class="quotelev2">&gt; &gt; Config::IniFiles=HASH(0xf872ad0) MTT after_all_exec_pass            Value
</span><br>
<span class="quotelev2">&gt; &gt; returning:                                                              
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf872ad0) MTT after_each_exec            
</span><br>
<span class="quotelev2">&gt; &gt;    Value returning:                                                        
</span><br>
<span class="quotelev2">&gt; &gt;       Value got: Config::IniFiles=HASH(0xf872ad0) MTT
</span><br>
<span class="quotelev2">&gt; &gt; after_each_exec_timeout        Value returning:                            
</span><br>
<span class="quotelev2">&gt; &gt;                                   Value got:
</span><br>
<span class="quotelev2">&gt; &gt; Config::IniFiles=HASH(0xf872ad0) MTT after_each_exec_pass           Value
</span><br>
<span class="quotelev2">&gt; &gt; returning:                                                              
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) lock module                    
</span><br>
<span class="quotelev2">&gt; &gt;    Value returning:                                                        
</span><br>
<span class="quotelev2">&gt; &gt;       Value got: Config::IniFiles=HASH(0xf8fb9d0) mtt log_file logfile     
</span><br>
<span class="quotelev2">&gt; &gt;          Value returning:                                                  
</span><br>
<span class="quotelev2">&gt; &gt;             *** Reporter initializing                                      
</span><br>
<span class="quotelev2">&gt; &gt;                Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu
</span><br>
<span class="quotelev2">&gt; &gt; database module       Value returning: MTTDatabase                         
</span><br>
<span class="quotelev4">&gt; &gt;                          &gt;&gt; Initializing reporter module: MTTDatabase      
</span><br>
<span class="quotelev2">&gt; &gt;                             Evaluating: require MTT::Reporter::MTTDatabase 
</span><br>
<span class="quotelev2">&gt; &gt;                                Evaluating: $ret =
</span><br>
<span class="quotelev2">&gt; &gt; &amp;MTT::Reporter::MTTDatabase::Init(@args)                    Value got:
</span><br>
<span class="quotelev2">&gt; &gt; Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database               
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_username                                                       
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Value returning: you must set this value                                   
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database       
</span><br>
<span class="quotelev2">&gt; &gt;         mttdatabase_password                                               
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt; Value returning: you must set this value                                   
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database       
</span><br>
<span class="quotelev2">&gt; &gt;         mttdatabase_url                                                    
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt; Value returning: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>                      
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database       
</span><br>
<span class="quotelev2">&gt; &gt;         mttdatabase_realm                                                  
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt; Value returning: OMPI                                                      
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database       
</span><br>
<span class="quotelev2">&gt; &gt;         mttdatabase_email_errors_to                                        
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt; Value returning:                                                           
</span><br>
<span class="quotelev2">&gt; &gt;    Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database       
</span><br>
<span class="quotelev2">&gt; &gt;         mttdatabase_debug_filename
</span><br>
<span class="quotelev2">&gt; &gt; Value returning: mttdb_debug_file_perf
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
</span><br>
<span class="quotelev2">&gt; &gt;   mttdatabase_keep_debug_files
</span><br>
<span class="quotelev2">&gt; &gt; Value returning: 1
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
</span><br>
<span class="quotelev2">&gt; &gt;   mttdatabase_debug_server
</span><br>
<span class="quotelev2">&gt; &gt; Value returning:
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
</span><br>
<span class="quotelev2">&gt; &gt;   mttdatabase_hostname
</span><br>
<span class="quotelev2">&gt; &gt; Value returning:
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) mtt local_username
</span><br>
<span class="quotelev2">&gt; &gt; Value returning:
</span><br>
<span class="quotelev2">&gt; &gt; Value got: Config::IniFiles=HASH(0xf8fb9d0) reporter: iu database
</span><br>
<span class="quotelev2">&gt; &gt;   mttdatabase_platform
</span><br>
<span class="quotelev2">&gt; &gt; Value returning: you must set this value
</span><br>
<span class="quotelev2">&gt; &gt;   Set HTTP credentials for realm &quot;OMPI&quot;
</span><br>
<span class="quotelev2">&gt; &gt; MTTDatabase client getting a client serial number...
</span><br>
<span class="quotelev2">&gt; &gt; MTTDatabase client trying proxy:  / Default (none)
</span><br>
<span class="quotelev2">&gt; &gt; MTTDatabase proxy successful / not 500
</span><br>
<span class="quotelev2">&gt; &gt; *** WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt; &gt; *** WARNING: &gt;&gt; Error was: 401 Authorization Required
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;!DOCTYPE HTML PUBLIC &quot;-//IETF//DTD HTML 2.0//EN&quot;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;html&gt;&lt;head&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;title&gt;401 Authorization Required&lt;/title&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;/head&gt;&lt;body&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;h1&gt;Authorization Required&lt;/h1&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;p&gt;This server could not verify that you
</span><br>
<span class="quotelev2">&gt; &gt;    are authorized to access the document
</span><br>
<span class="quotelev2">&gt; &gt;    requested.  Either you supplied the wrong
</span><br>
<span class="quotelev2">&gt; &gt;    credentials (e.g., bad password), or your
</span><br>
<span class="quotelev2">&gt; &gt;    browser doesn't understand how to supply
</span><br>
<span class="quotelev2">&gt; &gt;    the credentials required.&lt;/p&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;hr&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;address&gt;Apache Server at www.open-mpi.org Port 443&lt;/address&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;/body&gt;&lt;/html&gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** ERROR: Module aborted: MTT::Reporter::MTTDatabase:Init: *** ERROR: &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Do not want to continue with possible bad submission URL --
</span><br>
<span class="quotelev2">&gt; &gt;        aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could anyone suggest me if any modification required in
</span><br>
<span class="quotelev2">&gt; &gt; ompi-core-perf-testing.ini or any other way to run this test.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi-core-perf-testing.ini file is attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Vishal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # Note that there are many items in this file that, while they are
</span><br>
<span class="quotelev2">&gt; &gt; # good for examples, may not work for random MTT users.  For example,
</span><br>
<span class="quotelev2">&gt; &gt; # the &quot;ompi-tests&quot; SVN repository that is used in the examples below
</span><br>
<span class="quotelev2">&gt; &gt; # is *not* a public repository (there's nothing really secret in this
</span><br>
<span class="quotelev2">&gt; &gt; # repository; it contains many publicly-available MPI tests and
</span><br>
<span class="quotelev2">&gt; &gt; # benchmarks, but we have never looked into the redistribution rights
</span><br>
<span class="quotelev2">&gt; &gt; # of these codes, so we keep the SVN repository &quot;closed&quot; to the
</span><br>
<span class="quotelev2">&gt; &gt; # general public and only use it internally in the Open MPI project).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MTT]
</span><br>
<span class="quotelev2">&gt; &gt; # Leave this string so that we can identify this data subset in the
</span><br>
<span class="quotelev2">&gt; &gt; # database
</span><br>
<span class="quotelev2">&gt; &gt; # OMPI Core: Use a &quot;test&quot; label until we're ready to run real results
</span><br>
<span class="quotelev2">&gt; &gt; description = [testbake]
</span><br>
<span class="quotelev2">&gt; &gt; # description = [2007 collective performance bakeoff]
</span><br>
<span class="quotelev2">&gt; &gt; # OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real results
</span><br>
<span class="quotelev2">&gt; &gt; trial = 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Put other values here as relevant to your environment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Lock]
</span><br>
<span class="quotelev2">&gt; &gt; # Put values here as relevant to your environment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; # MPI get phase
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: ompi-nightly-trunk]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = OMPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev2">&gt; &gt; ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: ompi-nightly-v1.2]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = OMPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev2">&gt; &gt; ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/v1.2">http://www.open-mpi.org/nightly/v1.2</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: ompi-released-v1.2]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = OMPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev2">&gt; &gt; ompi_snapshot_url = <a href="http://www.open-mpi.org/software/ompi/v1.2/downloads">http://www.open-mpi.org/software/ompi/v1.2/downloads</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: MPICH1]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = MPICH1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Download
</span><br>
<span class="quotelev2">&gt; &gt; # MPICH1 from the Argonne web site
</span><br>
<span class="quotelev2">&gt; &gt; #download_url = <a href="http://www-unix.mcs.anl.gov/mpi/mpich1/downloads/mpich.tar.gz">http://www-unix.mcs.anl.gov/mpi/mpich1/downloads/mpich.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt; # If you are using SLURM, use this URL -- it's the same exact
</span><br>
<span class="quotelev2">&gt; &gt; # mpich.tar.gz but with the SLURM 1.2.12/etc/mpich1.slurm.patch in it
</span><br>
<span class="quotelev2">&gt; &gt; # (which allows native launching under SLURM).
</span><br>
<span class="quotelev2">&gt; &gt; download_url = <a href="http://www.open-mpi.org/~jsquyres/ompi-coll-bakeoff/mpich-1.2.7p1-patched-for-slurm.tar.gz">http://www.open-mpi.org/~jsquyres/ompi-coll-bakeoff/mpich-1.2.7p1-patched-for-slurm.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt; # This version is fixed/frozen, so it's ok to hard-code it
</span><br>
<span class="quotelev2">&gt; &gt; download_version = 1.2.7p1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: MPICH-MX]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = MPICH-MX
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Download
</span><br>
<span class="quotelev2">&gt; &gt; download_url = <a href="http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz">http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt; # You need to obtain the username and password from Myricom
</span><br>
<span class="quotelev2">&gt; &gt; download_username = &lt;OBTAIN THIS FROM MYRICOM&gt;
</span><br>
<span class="quotelev2">&gt; &gt; download_password = &lt;OBTAIN THIS FROM MYRICOM&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: MPICH2]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = MPICH2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Download
</span><br>
<span class="quotelev2">&gt; &gt; download_url = <a href="http://www-unix.mcs.anl.gov/mpi/mpich2/downloads/mpich2-1.0.5p4.tar.gz">http://www-unix.mcs.anl.gov/mpi/mpich2/downloads/mpich2-1.0.5p4.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: MVAPICH1]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = MVAPICH1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Download
</span><br>
<span class="quotelev2">&gt; &gt; download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich/mvapich-0.9.9.tar.gz">http://mvapich.cse.ohio-state.edu/download/mvapich/mvapich-0.9.9.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: MVAPICH2]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = MVAPICH2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Download
</span><br>
<span class="quotelev2">&gt; &gt; download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz">http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: HP MPI]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = HP MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # You need to have HP MPI already installed somewhere
</span><br>
<span class="quotelev2">&gt; &gt; module = AlreadyInstalled
</span><br>
<span class="quotelev2">&gt; &gt; # Fill this in with the version of your HP MPI
</span><br>
<span class="quotelev2">&gt; &gt; alreadyinstalled_version = 2.2.5.1b1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI get: Intel MPI]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = Intel MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # You need to have Intel MPI already installed somewhere
</span><br>
<span class="quotelev2">&gt; &gt; module = AlreadyInstalled
</span><br>
<span class="quotelev2">&gt; &gt; # Fill this in with the version of your Intel MPI
</span><br>
<span class="quotelev2">&gt; &gt; alreadyinstalled_version = 3.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [SKIP MPI get: Scali MPI]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = Scali MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # You need to have Scali MPI already installed somewhere
</span><br>
<span class="quotelev2">&gt; &gt; module = AlreadyInstalled
</span><br>
<span class="quotelev2">&gt; &gt; # Fill this in with the version of your Scali MPI
</span><br>
<span class="quotelev2">&gt; &gt; alreadyinstalled_version = ???
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [SKIP MPI get: Cray MPI]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_details = Cray MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # You need to have Cray MPI already installed somewhere
</span><br>
<span class="quotelev2">&gt; &gt; module = AlreadyInstalled
</span><br>
<span class="quotelev2">&gt; &gt; # Fill this in with the version of your Cray MPI
</span><br>
<span class="quotelev2">&gt; &gt; alreadyinstalled_version = ???
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; # Install MPI phase
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # All flavors of Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; [MPI install: OMPI/GNU-standard]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_get = ompi-nightly-trunk, ompi-nightly-v1.2, ompi-released-v1.2
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = OMPI
</span><br>
<span class="quotelev2">&gt; &gt; ompi_make_all_arguments = -j 8
</span><br>
<span class="quotelev2">&gt; &gt; ompi_compiler_name = gnu
</span><br>
<span class="quotelev2">&gt; &gt; ompi_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev2">&gt; &gt; # Adjust these configure flags for your site
</span><br>
<span class="quotelev2">&gt; &gt; ompi_configure_arguments = CFLAGS=-O3 --with-openib --enable-mpirun-prefix-by-default --enable-branch-probabilities --disable-heterogeneous --without-mpi-param-check
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI install: MPICH1]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_get = mpich1
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev2">&gt; &gt; # Ensure that MPICH allocates enough shared memory (32MB seems to be
</span><br>
<span class="quotelev2">&gt; &gt; # enough for ppn=4; went to 64MB to give it plenty of room)
</span><br>
<span class="quotelev2">&gt; &gt; setenv = P4_GLOBMEMSIZE 67108864
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = MPICH2
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_use_all_target = 0
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_apply_slurm_patch = 1
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_compiler_name = gnu
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_configure_arguments = -cflags=-O3 -rsh=ssh --with-device=ch_p4 --with-comm=shared
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI install: MPICH2]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_get = mpich2
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev2">&gt; &gt; # Adjust this for your site (this is what works at Cisco).  Needed to
</span><br>
<span class="quotelev2">&gt; &gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
</span><br>
<span class="quotelev2">&gt; &gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev2">&gt; &gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev2">&gt; &gt; prepend_path = LD_LIBRARY_PATH /opt/slurm/current/lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = MPICH2
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_compiler_name = gnu
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_configure_arguments = --disable-f90 CFLAGS=-O3 --enable-fast --with-device=ch3:nemesis
</span><br>
<span class="quotelev2">&gt; &gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
</span><br>
<span class="quotelev2">&gt; &gt; mpich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI install: MVAPICH1]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_get = mvapich1
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev2">&gt; &gt; # Setting this makes MVAPICH assume that the same HCAs are on all
</span><br>
<span class="quotelev2">&gt; &gt; # hosts and therefore it makes some optimizations
</span><br>
<span class="quotelev2">&gt; &gt; setenv = VIADEV_USE_COMPAT_MODE 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = MVAPICH2
</span><br>
<span class="quotelev2">&gt; &gt; # Adjust this to be where your OFED is installed
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_setenv = IBHOME /usr
</span><br>
<span class="quotelev2">&gt; &gt; # Leave this set (COMPAT); if you don't, their script asks questions,
</span><br>
<span class="quotelev2">&gt; &gt; # causing MTT to hang
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_setenv = COMPAT AUTO_DETECT
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_build_script = make.mvapich.gen2
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_compiler_name = gnu
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI install: MVAPICH2]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_get = mvapich2
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev2">&gt; &gt; # Adjust this for your site (this is what works at Cisco).  Needed to
</span><br>
<span class="quotelev2">&gt; &gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
</span><br>
<span class="quotelev2">&gt; &gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev2">&gt; &gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev2">&gt; &gt; prepend_path = LD_LIBRARY_PATH /opt/slurm/current/lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = MVAPICH2
</span><br>
<span class="quotelev2">&gt; &gt; # Adjust this to be where your OFED is installed
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_setenv = OPEN_IB_HOME /usr
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_build_script = make.mvapich2.ofa
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_compiler_name = gnu
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev2">&gt; &gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
</span><br>
<span class="quotelev2">&gt; &gt; mvapich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI install: Intel MPI]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_get = Intel MPI
</span><br>
<span class="quotelev2">&gt; &gt; # Adjust this if you need to.  It guarantees that multiple MPD's
</span><br>
<span class="quotelev2">&gt; &gt; # running on the same host will not collide.  If you'll ever have
</span><br>
<span class="quotelev2">&gt; &gt; # multi-job-on-the-same-host conflicts, you may want to adjust this to
</span><br>
<span class="quotelev2">&gt; &gt; # reflect some unique identifier (e.g., a resource manager ID).
</span><br>
<span class="quotelev2">&gt; &gt; setenv = MPD_CON_EXT mtt-unique-mpd.&amp;getenv(&quot;SLURM_JOBID&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Analyze::IntelMPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI install: HP MPI]
</span><br>
<span class="quotelev2">&gt; &gt; mpi_get = HP MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Analyze::HPMPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; # MPI run details
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI Details: OMPI]
</span><br>
<span class="quotelev2">&gt; &gt; # Check &amp;test_alloc() for byslot or bynode
</span><br>
<span class="quotelev2">&gt; &gt; exec = mpirun @alloc@ -np &amp;test_np() @mca@ &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt; &gt; parameters = &amp;MPI::OMPI::find_mpirun_params(&amp;test_command_line(), \
</span><br>
<span class="quotelev2">&gt; &gt;                                             &amp;test_executable())
</span><br>
<span class="quotelev2">&gt; &gt; network = &amp;MPI::OMPI::find_network(&amp;test_command_line(), &amp;test_executable())
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;--bynode&quot;, &quot;--byslot&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; mca = &amp;enumerate( \
</span><br>
<span class="quotelev2">&gt; &gt;         &quot;--mca btl sm,tcp,self &quot; . @common_params@, \
</span><br>
<span class="quotelev2">&gt; &gt;         &quot;--mca btl tcp,self &quot; . @common_params@, \
</span><br>
<span class="quotelev2">&gt; &gt;         &quot;--mca btl sm,openib,self &quot; . @common_params@, \
</span><br>
<span class="quotelev2">&gt; &gt;         &quot;--mca btl sm,openib,self --mca mpi_leave_pinned 1 &quot; . @common_params@, \
</span><br>
<span class="quotelev2">&gt; &gt;         &quot;--mca btl openib,self &quot; . @common_params@, \
</span><br>
<span class="quotelev2">&gt; &gt;         &quot;--mca btl openib,self --mca mpi_leave_pinned 1 &quot; . @common_params@, \
</span><br>
<span class="quotelev2">&gt; &gt;         &quot;--mca btl openib,self --mca mpi_leave_pinned_pipeline 1 &quot; . @common_params@, \
</span><br>
<span class="quotelev2">&gt; &gt;         &quot;--mca btl openib,self --mca btl_openib_use_srq 1 &quot; . @common_params@)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # v1.2 has a problem with striping across heterogeneous ports right now:
</span><br>
<span class="quotelev2">&gt; &gt; # <a href="https://svn.open-mpi.org/trac/ompi/ticket/1125">https://svn.open-mpi.org/trac/ompi/ticket/1125</a>.  Also keep the coll
</span><br>
<span class="quotelev2">&gt; &gt; # bakeoff tests on DDR only.
</span><br>
<span class="quotelev2">&gt; &gt; common_params = &quot;--mca btl_tcp_if_include ib0 --mca oob_tcp_if_include ib0 --mca btl_openib_if_include mthca0 --mca mpi_paffinity_alone 1&quot; . \
</span><br>
<span class="quotelev2">&gt; &gt;         &amp;if(&amp;or(&amp;eq(&amp;mpi_get_name(), &quot;ompi-nightly-v1.2&quot;), \
</span><br>
<span class="quotelev2">&gt; &gt;                 &amp;eq(&amp;mpi_get_name(), &quot;ompi-released-v1.2&quot;)), \
</span><br>
<span class="quotelev2">&gt; &gt;                 &quot;--mca btl_openib_max_btls 1&quot;, &quot;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # It is important that the after_each_exec step is a single
</span><br>
<span class="quotelev2">&gt; &gt; # command/line so that MTT will launch it directly (instead of via a
</span><br>
<span class="quotelev2">&gt; &gt; # temporary script).  This is because the &quot;srun&quot; command is
</span><br>
<span class="quotelev2">&gt; &gt; # (intentionally) difficult to kill in some cases.  See
</span><br>
<span class="quotelev2">&gt; &gt; # <a href="https://svn.open-mpi.org/trac/mtt/changeset/657">https://svn.open-mpi.org/trac/mtt/changeset/657</a> for details.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; after_each_exec = &amp;if(&amp;ne(&quot;&quot;, &amp;getenv(&quot;SLURM_NNODES&quot;)), &quot;srun -N &quot; . &amp;getenv(&quot;SLURM_NNODES&quot;)) /home/mpiteam/svn/ompi-tests/cisco/mtt/after_each_exec.pl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI Details: MPICH1]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Launching through SLURM.  From
</span><br>
<span class="quotelev2">&gt; &gt; # <a href="http://www.llnl.gov/linux/slurm/quickstart.html">http://www.llnl.gov/linux/slurm/quickstart.html</a>.
</span><br>
<span class="quotelev2">&gt; &gt; exec = srun @alloc@ -n &amp;test_np() --mpi=mpich1_p4 &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev2">&gt; &gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev2">&gt; &gt; #exec = mpirun -np &amp;test_np() -machinefile &amp;hostfile() &amp;test_executable()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; network = loopback,ethernet
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # In this SLURM example, if each node has 4 CPUs, telling SLURM to
</span><br>
<span class="quotelev2">&gt; &gt; # launching &quot;by node&quot; means specifying that each MPI process will use 4
</span><br>
<span class="quotelev2">&gt; &gt; # CPUs.
</span><br>
<span class="quotelev2">&gt; &gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI Details: MPICH2]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev2">&gt; &gt; # ensure that multiple mpd's on the same node don't conflict (or never
</span><br>
<span class="quotelev2">&gt; &gt; # happen).
</span><br>
<span class="quotelev2">&gt; &gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev2">&gt; &gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev2">&gt; &gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; network = loopback,ethernet,shmem
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # In this SLURM example, if each node has 4 CPUs, telling SLURM to
</span><br>
<span class="quotelev2">&gt; &gt; # launching &quot;by node&quot; means specifying that each MPI process will use 4
</span><br>
<span class="quotelev2">&gt; &gt; # CPUs.
</span><br>
<span class="quotelev2">&gt; &gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI Details: MVAPICH1]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Launching through SLURM.  From
</span><br>
<span class="quotelev2">&gt; &gt; # <a href="http://www.llnl.gov/linux/slurm/quickstart.html">http://www.llnl.gov/linux/slurm/quickstart.html</a>.
</span><br>
<span class="quotelev2">&gt; &gt; exec = srun @alloc@ -n &amp;test_np() --mpi=mvapich &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev2">&gt; &gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev2">&gt; &gt; #exec = mpirun -np &amp;test_np() --machinefile &amp;hostfile() &amp;test_executable()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
</span><br>
<span class="quotelev2">&gt; &gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev2">&gt; &gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI Details: MVAPICH2]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev2">&gt; &gt; # ensure that multiple mpd's on the same node don't conflict (or never
</span><br>
<span class="quotelev2">&gt; &gt; # happen).
</span><br>
<span class="quotelev2">&gt; &gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev2">&gt; &gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev2">&gt; &gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
</span><br>
<span class="quotelev2">&gt; &gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev2">&gt; &gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI Details: MPICH-MX]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Launching through SLURM.  From
</span><br>
<span class="quotelev2">&gt; &gt; # <a href="http://www.llnl.gov/linux/slurm/quickstart.html">http://www.llnl.gov/linux/slurm/quickstart.html</a>.
</span><br>
<span class="quotelev2">&gt; &gt; exec = srun @alloc@ -n &amp;test_np() --mpi=mpichgm &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt; &gt; network = mx
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev2">&gt; &gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev2">&gt; &gt; #exec = mpirun -np &amp;test_np() --machinefile &amp;hostfile() &amp;test_executable()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
</span><br>
<span class="quotelev2">&gt; &gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev2">&gt; &gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 4&quot;, &quot;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI Details: Intel MPI]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Need a before_any_exec step to launch MPDs
</span><br>
<span class="quotelev2">&gt; &gt; before_any_exec = &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt; &gt; h=`hostname`
</span><br>
<span class="quotelev2">&gt; &gt; file=mtt-hostlist.$$
</span><br>
<span class="quotelev2">&gt; &gt; rm -f $file
</span><br>
<span class="quotelev2">&gt; &gt; # If we're allocating by node, get each hostname once.  Otherwise, get
</span><br>
<span class="quotelev2">&gt; &gt; # each hostname as many times as we have slots on that node.
</span><br>
<span class="quotelev2">&gt; &gt; srun hostname | uniq &gt; $file
</span><br>
<span class="quotelev2">&gt; &gt; # Add localhost if it's not in there (e.g., srun -A)
</span><br>
<span class="quotelev2">&gt; &gt; local=`grep $h $file`
</span><br>
<span class="quotelev2">&gt; &gt; touch /tmp/mtt-mpiexec-options.$SLURM_JOBID
</span><br>
<span class="quotelev2">&gt; &gt; if test &quot;$local&quot; = &quot;&quot;; then
</span><br>
<span class="quotelev2">&gt; &gt;    echo $h &gt;&gt; $file
</span><br>
<span class="quotelev2">&gt; &gt;    echo -nolocal &gt; /tmp/mpiexec-options.$SLURM_JOBID
</span><br>
<span class="quotelev2">&gt; &gt; fi
</span><br>
<span class="quotelev2">&gt; &gt; num=`wc -l $file | awk '{ print $1 }'`
</span><br>
<span class="quotelev2">&gt; &gt; mpdboot -n $num -r ssh --verbose --file=$file
</span><br>
<span class="quotelev2">&gt; &gt; mpdtrace
</span><br>
<span class="quotelev2">&gt; &gt; rm -f $file
</span><br>
<span class="quotelev2">&gt; &gt; EOF
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Intel MPI seems to default to by-node allocation and I can't figure
</span><br>
<span class="quotelev2">&gt; &gt; # out how to override it.  Sigh.
</span><br>
<span class="quotelev2">&gt; &gt; exec = mpiexec @options@ -n &amp;test_np() ./&amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt; &gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Test both the &quot;normal&quot; collective algorithms and Intel's &quot;fast&quot;
</span><br>
<span class="quotelev2">&gt; &gt; # collective algorithms (their docs state that the &quot;fast&quot; algorithms
</span><br>
<span class="quotelev2">&gt; &gt; # may not be MPI conformant, and may not give the same results between
</span><br>
<span class="quotelev2">&gt; &gt; # multiple runs, assumedly if the process layout is different).
</span><br>
<span class="quotelev2">&gt; &gt; options = &amp;stringify(&amp;cat(&quot;/tmp/mpiexec-options.&quot; . &amp;getenv(&quot;SLURM_JOBID&quot;))) \
</span><br>
<span class="quotelev2">&gt; &gt;           &amp;enumerate(&quot;-genv I_MPI_DEVICE rdssm&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;                      &quot;-genv I_MPI_DEVICE rdssm -genv I_MPI_FAST_COLLECTIVES 1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; after_all_exec = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt; &gt; rm -f /tmp/mpiexec-options.$SLURM_JOBID
</span><br>
<span class="quotelev2">&gt; &gt; mpdallexit
</span><br>
<span class="quotelev2">&gt; &gt; EOT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MPI Details: HP MPI]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # I use MPI_IBV_NO_FORK_SAFE=1 because I'm using RHEL4U4, which
</span><br>
<span class="quotelev2">&gt; &gt; # doesn't have IBV fork() support.  I also have multiple active HCA
</span><br>
<span class="quotelev2">&gt; &gt; # ports and therefore need to give HP MPI a clue on the scheduling of
</span><br>
<span class="quotelev2">&gt; &gt; # ports via MPI_IB_CARD_ORDER.  I got this information via e-mailing
</span><br>
<span class="quotelev2">&gt; &gt; # HP MPI support.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # In SLURM, HP MPI seems to schedule first by node and then by slot.
</span><br>
<span class="quotelev2">&gt; &gt; # So if you have 2 quad-core nodes in your SLURM alloc, if you mpirun
</span><br>
<span class="quotelev2">&gt; &gt; # -np 2, you'll get one proc on each node.  If you mpirun -np 4,
</span><br>
<span class="quotelev2">&gt; &gt; # you'll get MCW ranks 0 and 1 on the first node and MCA ranks 2 and 3
</span><br>
<span class="quotelev2">&gt; &gt; # on the second node.  This is pretty much exactly what we want, so we
</span><br>
<span class="quotelev2">&gt; &gt; # don't need to check &amp;test_alloc() here.
</span><br>
<span class="quotelev2">&gt; &gt; exec = mpirun -IBV -e MPI_IBV_NO_FORK_SAFE=1 -e MPI_IB_CARD_ORDER=0:0 -srun -n&amp;test_np() ./&amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt; &gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; # Test get phase
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test get: netpipe]
</span><br>
<span class="quotelev2">&gt; &gt; module = Download
</span><br>
<span class="quotelev2">&gt; &gt; download_url = <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test get: osu]
</span><br>
<span class="quotelev2">&gt; &gt; module = SVN
</span><br>
<span class="quotelev2">&gt; &gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/osu">https://svn.open-mpi.org/svn/ompi-tests/trunk/osu</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test get: imb]
</span><br>
<span class="quotelev2">&gt; &gt; module = SVN
</span><br>
<span class="quotelev2">&gt; &gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test get: skampi]
</span><br>
<span class="quotelev2">&gt; &gt; module = SVN
</span><br>
<span class="quotelev2">&gt; &gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test get: nbcbench]
</span><br>
<span class="quotelev2">&gt; &gt; module = SVN
</span><br>
<span class="quotelev2">&gt; &gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/nbcbench">https://svn.open-mpi.org/svn/ompi-tests/trunk/nbcbench</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; # Test build phase
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test build: netpipe]
</span><br>
<span class="quotelev2">&gt; &gt; test_get = netpipe
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt; stderr_save_lines = 100
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Shell
</span><br>
<span class="quotelev2">&gt; &gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt; &gt; make mpi
</span><br>
<span class="quotelev2">&gt; &gt; EOT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test build: osu]
</span><br>
<span class="quotelev2">&gt; &gt; test_get = osu
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt; stderr_save_lines = 100
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Shell
</span><br>
<span class="quotelev2">&gt; &gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt; &gt; make osu_latency osu_bw osu_bibw
</span><br>
<span class="quotelev2">&gt; &gt; EOT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test build: imb]
</span><br>
<span class="quotelev2">&gt; &gt; test_get = imb
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Shell
</span><br>
<span class="quotelev2">&gt; &gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt; &gt; cd src
</span><br>
<span class="quotelev2">&gt; &gt; make clean IMB-MPI1
</span><br>
<span class="quotelev2">&gt; &gt; EOT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test build: skampi]
</span><br>
<span class="quotelev2">&gt; &gt; test_get = skampi
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt; stderr_save_lines = 100
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Shell
</span><br>
<span class="quotelev2">&gt; &gt; # Set EVERYONE_CAN_MPI_IO for HP MPI
</span><br>
<span class="quotelev2">&gt; &gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt; &gt; make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
</span><br>
<span class="quotelev2">&gt; &gt; EOT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test build: nbcbench]
</span><br>
<span class="quotelev2">&gt; &gt; test_get = nbcbench
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt; stderr_save_lines = 100
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module = Shell
</span><br>
<span class="quotelev2">&gt; &gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt; EOT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; # Test Run phase
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test run: netpipe]
</span><br>
<span class="quotelev2">&gt; &gt; test_build = netpipe
</span><br>
<span class="quotelev2">&gt; &gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt; &gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev2">&gt; &gt; timeout = 10:00
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt; &gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev2">&gt; &gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt; np = 2
</span><br>
<span class="quotelev2">&gt; &gt; alloc = node
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt; &gt; analyze_module = NetPipe
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; simple_pass:tests = NPmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test run: osu]
</span><br>
<span class="quotelev2">&gt; &gt; test_build = osu
</span><br>
<span class="quotelev2">&gt; &gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt; &gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev2">&gt; &gt; timeout = 10:00
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt; &gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev2">&gt; &gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt; np = 2
</span><br>
<span class="quotelev2">&gt; &gt; alloc = node
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt; &gt; analyze_module = OSU
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; simple_pass:tests = osu_bw osu_latency osu_bibw
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test run: imb]
</span><br>
<span class="quotelev2">&gt; &gt; test_build = imb
</span><br>
<span class="quotelev2">&gt; &gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt; &gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev2">&gt; &gt; timeout = 10:00
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt; &gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev2">&gt; &gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; argv = -npmin &amp;test_np() &amp;enumerate(&quot;PingPong&quot;, &quot;PingPing&quot;, &quot;Sendrecv&quot;, &quot;Exchange&quot;, &quot;Allreduce&quot;, &quot;Reduce&quot;, &quot;Reduce_scatter&quot;, &quot;Allgather&quot;, &quot;Allgatherv&quot;, &quot;Alltoall&quot;, &quot;Bcast&quot;, &quot;Barrier&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt; &gt; analyze_module = IMB
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; simple_pass:tests = src/IMB-MPI1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test run: skampi]
</span><br>
<span class="quotelev2">&gt; &gt; test_build = skampi
</span><br>
<span class="quotelev2">&gt; &gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt; &gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev2">&gt; &gt; timeout = 10:00
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt; &gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev2">&gt; &gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt; &gt; analyze_module = SKaMPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; simple_pass:tests = skampi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Test run: nbcbench]
</span><br>
<span class="quotelev2">&gt; &gt; test_build = nbcbench
</span><br>
<span class="quotelev2">&gt; &gt; pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt; &gt; timeout = -1
</span><br>
<span class="quotelev2">&gt; &gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt; &gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev2">&gt; &gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt; &gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt; &gt; analyze_module = NBCBench
</span><br>
<span class="quotelev2">&gt; &gt; simple_pass:tests = nbcbench
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; argv = -p &amp;test_np()-&amp;test_np() -s 1-1048576 -v -t \
</span><br>
<span class="quotelev2">&gt; &gt;     &amp;enumerate(&quot;MPI_Allgatherv&quot;, &quot;MPI_Allgather&quot;, &quot;MPI_Allreduce&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;MPI_Alltoall&quot;, &quot;MPI_Alltoallv&quot;, &quot;MPI_Barrier&quot;, &quot;MPI_Bcast&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;MPI_Gather&quot;, &quot;MPI_Gatherv&quot;, &quot;MPI_Reduce&quot;, &quot;MPI_Reduce_scatter&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;MPI_Scan&quot;, &quot;MPI_Scatter&quot;, &quot;MPI_Scatterv&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; # Reporter phase
</span><br>
<span class="quotelev2">&gt; &gt; #======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Reporter: IU database]
</span><br>
<span class="quotelev2">&gt; &gt; module = MTTDatabase
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt; &gt; # Change this to be the username and password for your submit user.
</span><br>
<span class="quotelev2">&gt; &gt; # Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_username = you must set this value
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_password = you must set this value
</span><br>
<span class="quotelev2">&gt; &gt; # Change this to be some short string identifying your cluster.
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_platform = you must set this value
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_debug_filename = mttdb_debug_file_perf
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # This is a backup reporter; it also writes results to a local text
</span><br>
<span class="quotelev2">&gt; &gt; # file
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [Reporter: text file backup]
</span><br>
<span class="quotelev2">&gt; &gt; module = TextFile
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; EOT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; textfile_summary_footer =
</span><br>
<span class="quotelev2">&gt; &gt; textfile_detail_header =
</span><br>
<span class="quotelev2">&gt; &gt; textfile_detail_footer =
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; textfile_textwrap = 78
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>In reply to:</strong> <a href="0718.php">Ethan Mallove: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<!-- nextthread="start" -->
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
