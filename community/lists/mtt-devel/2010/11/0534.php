<?
$subject_val = "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 01:00:38 2010" -->
<!-- isoreceived="20101109060038" -->
<!-- sent="Tue, 09 Nov 2010 01:00:33 -0500" -->
<!-- isosent="20101109060033" -->
<!-- name="DongInn Kim" -->
<!-- email="dikim_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Best way to run ftb_database_server and ftb_agent" -->
<!-- id="4CD8E381.6010307_at_osl.iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3A8646D9-5FDB-4A08-AF2C-F300F1B24FEE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Best way to run ftb_database_server and ftb_agent<br>
<strong>From:</strong> DongInn Kim (<em>dikim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 01:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, I did not know that it should be added in the MPI Get phase.
<br>
OK, I tried to add it the MPI Get phase and mpi_details are recognized but I could not have &quot;Test Run&quot; phase run the scripts in before_any_exec and after_all_exec.
<br>
&nbsp;&nbsp;DB&lt;25&gt; p Dumper($self-&gt;{v}{$sect})      
<br>
$VAR1 = { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'program_dir' =&gt; '/u/ftbteam/projects/mtt/client',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'after_all_exec' =&gt; [ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ftb_db_pid=`pgrep ftb_database_server`',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'kill $ftb_db_pid',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ftb_agent_pid=`pgrep ftb_agent`',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'kill $ftb_agent_pid'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'before_any_exec' =&gt; [ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'install_dir=&amp;test_prefix_pretty()',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ftb_server_daemon=&quot;$install_dir/sbin/ftb_database_server&quot;',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ftb_agent_daemon=&quot;$install_dir/sbin/ftb_agent&quot;',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'$ftb_server_daemon &amp;',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'$ftb_agent_daemon'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'program_name' =&gt; '/u/ftbteam/projects/mtt/client/ftt',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ini_section_name' =&gt; 'platform',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ini_name' =&gt; '/u/ftbteam/ftt-runs/odin/20101108-Nightly/ini/g-br-trunk_i-32gccFT_ftb-gen'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
<p>It seems that entries of before_** and after_** are filled in to the steps to run but it could not run because of the malformed syntax.
<br>
So, I removed the entries and then just &quot;touch /tmp/foo&quot; in before_** and after_** but it did not create the empty file /tmp/foo and I got the following errors in the perl debug mode.
<br>
*** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Bizarre copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of ARRAY in leave at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/nfs/rinfs/san/homedirs/ftbteam/projects/mtt/lib/MTT/Values.pm line
<br>
&nbsp;&nbsp;&nbsp;&nbsp;118, &lt;HANDLE&gt; line 63.
<br>
&nbsp;at /nfs/rinfs/san/homedirs/ftbteam/projects/mtt/lib/MTT/Messages.pm line 122
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Messages::Abort('Module aborted: MTT::Test::Specify::Simple:Specify: Bizarre c...') called at /nfs/rinfs/san/homedirs/ftbteam/projects/mtt/lib/MTT/Messages.pm line 85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Messages::Error('Module aborted: MTT::Test::Specify::Simple:Specify: Bizarre c...') called at /nfs/rinfs/san/homedirs/ftbteam/projects/mtt/lib/MTT/Module.pm line 52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Module::Run('MTT::Test::Specify::Simple', 'Specify', 'Config::IniFiles=HASH(0x19dfea0)', 'test run: ftb', 'HASH(0x19ebba0)', 'HASH(0x19e4940)', 'HASH(0x19df600)') called at /nfs/rinfs/san/homedirs/ftbteam/projects/mtt/lib/MTT/Test/Specify.pm line 24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Test::Specify::Specify('Simple', 'Config::IniFiles=HASH(0x19dfea0)', 'test run: ftb', 'HASH(0x19ebba0)', 'HASH(0x19e4940)', 'HASH(0x19df600)') called at /nfs/rinfs/san/homedirs/ftbteam/projects/mtt/lib/MTT/Test/Run.pm line 552
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Test::Run::_do_run('Config::IniFiles=HASH(0x19dfea0)', 'test run: ftb', 'HASH(0x19ebba0)', 'HASH(0x19dfdf0)', 'HASH(0x19e4940)', '/u/ftbteam/ftt-runs/odin/20101109-Nightly/pb_0/installs', '/u/ftbteam/ftt-runs/odin/20101109-Nightly/pb_0/test_runs', 'undef') called at /nfs/rinfs/san/homedirs/ftbteam/projects/mtt/lib/MTT/Test/Run.pm line 200
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Test::Run::Run('Config::IniFiles=HASH(0x19dfea0)', 'Config::IniFiles=HASH(0x19ba940)', '/u/ftbteam/ftt-runs/odin/20101109-Nightly/pb_0/installs', '/u/ftbteam/ftt-runs/odin/20101109-Nightly/pb_0/test_runs', 'undef') called at /u/ftbteam/projects/mtt/client/ftt line 557
<br>
<p>Can you please help this out?
<br>
<p>Regards,   
<br>
<p>On 11/8/10 5:27 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Are you executing an MPI Get section?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that the mpi_details section is filled in via the MPI Get phase and then propagated down through all the other phases (i.e., each of the other phases looks allll the way back to their corresponding mpi get phase to find the mpi_details value).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2010, at 5:16 PM, DongInn Kim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I have looked at the ompi-core-perf-testing.ini file which seems to have used the mpi detail sections and I tried to use it in our ftb.ini file but I still get the same warning message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Test Run phase starting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Test Run [ftb]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Running with [ftb-nightly-trunk] / [0.6.2] / [platform]
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: Unable to find MPI details section for [MPI Install: platform;
</span><br>
<span class="quotelev2">&gt;&gt;    skipping
</span><br>
<span class="quotelev2">&gt;&gt; *** Run test phase complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phase: Test Run
</span><br>
<span class="quotelev2">&gt;&gt;   Started:       Mon Nov  8 17:10:30 2010
</span><br>
<span class="quotelev2">&gt;&gt;   Stopped:       Mon Nov  8 17:10:31 2010
</span><br>
<span class="quotelev2">&gt;&gt;   Elapsed:       00:00:01 0.02u 0.06s
</span><br>
<span class="quotelev2">&gt;&gt;   Total elapsed: 00:00:01 0.02u 0.06s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phase: Trim
</span><br>
<span class="quotelev2">&gt;&gt;   Started:       Mon Nov  8 17:10:31 2010
</span><br>
<span class="quotelev2">&gt;&gt;   Stopped:       Mon Nov  8 17:10:31 2010
</span><br>
<span class="quotelev2">&gt;&gt;   Elapsed:       00:00:00 0.00u 0.00s
</span><br>
<span class="quotelev2">&gt;&gt;   Total elapsed: 00:00:01 0.02u 0.06s
</span><br>
<span class="quotelev2">&gt;&gt; *** Reporter finalizing
</span><br>
<span class="quotelev2">&gt;&gt; *** Reporter finalized
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the entry in the new ftb.ini file.
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------                                               
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI Details: platform] 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Need a before_any_exec step to test all the FTB example tests                                                       
</span><br>
<span class="quotelev2">&gt;&gt; before_any_exec = &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt; install_dir=&amp;test_prefix_pretty()                                                                                     
</span><br>
<span class="quotelev2">&gt;&gt; ftb_server_daemon=&quot;$install_dir/sbin/ftb_database_server&quot;                                                             
</span><br>
<span class="quotelev2">&gt;&gt; ftb_agent_daemon=&quot;$install_dir/sbin/ftb_agent&quot;                                                                        
</span><br>
<span class="quotelev2">&gt;&gt; $ftb_server_daemon &amp;
</span><br>
<span class="quotelev2">&gt;&gt; $ftb_agent_daemon 
</span><br>
<span class="quotelev2">&gt;&gt; EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; after_all_exec = &lt;&lt;EOT                                                                                                
</span><br>
<span class="quotelev2">&gt;&gt; ftb_db_pid=`pgrep ftb_database_server`
</span><br>
<span class="quotelev2">&gt;&gt; kill $ftb_db_pid
</span><br>
<span class="quotelev2">&gt;&gt; ftb_agent_pid=`pgrep ftb_agent`                                                                                       
</span><br>
<span class="quotelev2">&gt;&gt; kill $ftb_agent_pid
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried to replace &quot;platform&quot; with &quot;FTB&quot; in &quot;[MPI Details: platform]&quot; but it still did not work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any helps on this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/8/10 3:42 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for jumping in late -- been swamped recently...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the MPI details section, there's 4 fields that should let you do what you want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before_any_exec -- run once before all the tests in a given Test Run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before_each_exec -- run once before every single exec (including all variants)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after_each_exec -- run after after every single exec (include all variants)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after_all_exec -- run after all tests in a given Test Run section have completed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So you can use the before_any_exec / after_all_exec to launch the daemons once at the beginning and then take them down, or you can use before_each_exec / after_each_exec to launch the daemons before each test and then take them down at the end of that test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm assuming that the *each* variants will cause your tests to run much slower.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see that we don't have an MPI Details section on the wiki describing these parameters.  Sorry!  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; - DongInn
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
- DongInn
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
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
