<?
$subject_val = "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 17:27:32 2010" -->
<!-- isoreceived="20101108222732" -->
<!-- sent="Mon, 8 Nov 2010 17:27:26 -0500" -->
<!-- isosent="20101108222726" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Best way to run ftb_database_server and ftb_agent" -->
<!-- id="3A8646D9-5FDB-4A08-AF2C-F300F1B24FEE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD876D3.3060906_at_osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 17:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you executing an MPI Get section?
<br>
<p>I believe that the mpi_details section is filled in via the MPI Get phase and then propagated down through all the other phases (i.e., each of the other phases looks allll the way back to their corresponding mpi get phase to find the mpi_details value).
<br>
<p><p>On Nov 8, 2010, at 5:16 PM, DongInn Kim wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, I have looked at the ompi-core-perf-testing.ini file which seems to have used the mpi detail sections and I tried to use it in our ftb.ini file but I still get the same warning message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Test Run phase starting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Test Run [ftb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running with [ftb-nightly-trunk] / [0.6.2] / [platform]
</span><br>
<span class="quotelev1">&gt; *** WARNING: Unable to find MPI details section for [MPI Install: platform;
</span><br>
<span class="quotelev1">&gt;    skipping
</span><br>
<span class="quotelev1">&gt; *** Run test phase complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phase: Test Run
</span><br>
<span class="quotelev1">&gt;   Started:       Mon Nov  8 17:10:30 2010
</span><br>
<span class="quotelev1">&gt;   Stopped:       Mon Nov  8 17:10:31 2010
</span><br>
<span class="quotelev1">&gt;   Elapsed:       00:00:01 0.02u 0.06s
</span><br>
<span class="quotelev1">&gt;   Total elapsed: 00:00:01 0.02u 0.06s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phase: Trim
</span><br>
<span class="quotelev1">&gt;   Started:       Mon Nov  8 17:10:31 2010
</span><br>
<span class="quotelev1">&gt;   Stopped:       Mon Nov  8 17:10:31 2010
</span><br>
<span class="quotelev1">&gt;   Elapsed:       00:00:00 0.00u 0.00s
</span><br>
<span class="quotelev1">&gt;   Total elapsed: 00:00:01 0.02u 0.06s
</span><br>
<span class="quotelev1">&gt; *** Reporter finalizing
</span><br>
<span class="quotelev1">&gt; *** Reporter finalized
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the entry in the new ftb.ini file.
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------                                               
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: platform] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Need a before_any_exec step to test all the FTB example tests                                                       
</span><br>
<span class="quotelev1">&gt; before_any_exec = &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; install_dir=&amp;test_prefix_pretty()                                                                                     
</span><br>
<span class="quotelev1">&gt; ftb_server_daemon=&quot;$install_dir/sbin/ftb_database_server&quot;                                                             
</span><br>
<span class="quotelev1">&gt; ftb_agent_daemon=&quot;$install_dir/sbin/ftb_agent&quot;                                                                        
</span><br>
<span class="quotelev1">&gt; $ftb_server_daemon &amp;
</span><br>
<span class="quotelev1">&gt; $ftb_agent_daemon 
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after_all_exec = &lt;&lt;EOT                                                                                                
</span><br>
<span class="quotelev1">&gt; ftb_db_pid=`pgrep ftb_database_server`
</span><br>
<span class="quotelev1">&gt; kill $ftb_db_pid
</span><br>
<span class="quotelev1">&gt; ftb_agent_pid=`pgrep ftb_agent`                                                                                       
</span><br>
<span class="quotelev1">&gt; kill $ftb_agent_pid
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried to replace &quot;platform&quot; with &quot;FTB&quot; in &quot;[MPI Details: platform]&quot; but it still did not work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any helps on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/8/10 3:42 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for jumping in late -- been swamped recently...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the MPI details section, there's 4 fields that should let you do what you want.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; before_any_exec -- run once before all the tests in a given Test Run
</span><br>
<span class="quotelev2">&gt;&gt; before_each_exec -- run once before every single exec (including all variants)
</span><br>
<span class="quotelev2">&gt;&gt; after_each_exec -- run after after every single exec (include all variants)
</span><br>
<span class="quotelev2">&gt;&gt; after_all_exec -- run after all tests in a given Test Run section have completed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So you can use the before_any_exec / after_all_exec to launch the daemons once at the beginning and then take them down, or you can use before_each_exec / after_each_exec to launch the daemons before each test and then take them down at the end of that test.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm assuming that the *each* variants will cause your tests to run much slower.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see that we don't have an MPI Details section on the wiki describing these parameters.  Sorry!  :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; - DongInn
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0532.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0534.php">DongInn Kim: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
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
