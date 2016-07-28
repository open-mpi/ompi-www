<?
$subject_val = "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 17:16:54 2010" -->
<!-- isoreceived="20101108221654" -->
<!-- sent="Mon, 08 Nov 2010 17:16:51 -0500" -->
<!-- isosent="20101108221651" -->
<!-- name="DongInn Kim" -->
<!-- email="dikim_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Best way to run ftb_database_server and ftb_agent" -->
<!-- id="4CD876D3.3060906_at_osl.iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="079475AE-B2ED-421A-98CB-11B603F0860D_at_cisco.com" -->
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
<strong>Date:</strong> 2010-11-08 17:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0531.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0531.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, thank you.
<br>
<p>BTW, I have looked at the ompi-core-perf-testing.ini file which seems to have used the mpi detail sections and I tried to use it in our ftb.ini file but I still get the same warning message.
<br>
<p>*** Test Run phase starting
<br>
<span class="quotelev2">&gt;&gt; Test Run [ftb]
</span><br>
<span class="quotelev2">&gt;&gt; Running with [ftb-nightly-trunk] / [0.6.2] / [platform]
</span><br>
*** WARNING: Unable to find MPI details section for [MPI Install: platform;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skipping
<br>
*** Run test phase complete
<br>
<span class="quotelev2">&gt;&gt; Phase: Test Run
</span><br>
&nbsp;&nbsp;&nbsp;Started:       Mon Nov  8 17:10:30 2010
<br>
&nbsp;&nbsp;&nbsp;Stopped:       Mon Nov  8 17:10:31 2010
<br>
&nbsp;&nbsp;&nbsp;Elapsed:       00:00:01 0.02u 0.06s
<br>
&nbsp;&nbsp;&nbsp;Total elapsed: 00:00:01 0.02u 0.06s
<br>
<span class="quotelev2">&gt;&gt; Phase: Trim
</span><br>
&nbsp;&nbsp;&nbsp;Started:       Mon Nov  8 17:10:31 2010
<br>
&nbsp;&nbsp;&nbsp;Stopped:       Mon Nov  8 17:10:31 2010
<br>
&nbsp;&nbsp;&nbsp;Elapsed:       00:00:00 0.00u 0.00s
<br>
&nbsp;&nbsp;&nbsp;Total elapsed: 00:00:01 0.02u 0.06s
<br>
*** Reporter finalizing
<br>
*** Reporter finalized
<br>
<p><p>Here is the entry in the new ftb.ini file.
<br>
#----------------------------------------------------------------------                                               
<br>
<p>[MPI Details: platform] 
<br>
<p># Need a before_any_exec step to test all the FTB example tests                                                       
<br>
before_any_exec = &lt;&lt;EOF
<br>
install_dir=&amp;test_prefix_pretty()                                                                                     
<br>
ftb_server_daemon=&quot;$install_dir/sbin/ftb_database_server&quot;                                                             
<br>
ftb_agent_daemon=&quot;$install_dir/sbin/ftb_agent&quot;                                                                        
<br>
$ftb_server_daemon &amp;
<br>
$ftb_agent_daemon 
<br>
EOF
<br>
<p>after_all_exec = &lt;&lt;EOT                                                                                                
<br>
ftb_db_pid=`pgrep ftb_database_server`
<br>
kill $ftb_db_pid
<br>
ftb_agent_pid=`pgrep ftb_agent`                                                                                       
<br>
kill $ftb_agent_pid
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>I have tried to replace &quot;platform&quot; with &quot;FTB&quot; in &quot;[MPI Details: platform]&quot; but it still did not work.
<br>
<p>Any helps on this?
<br>
<p>Regards,
<br>
<p><p>On 11/8/10 3:42 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for jumping in late -- been swamped recently...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the MPI details section, there's 4 fields that should let you do what you want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; before_any_exec -- run once before all the tests in a given Test Run
</span><br>
<span class="quotelev1">&gt; before_each_exec -- run once before every single exec (including all variants)
</span><br>
<span class="quotelev1">&gt; after_each_exec -- run after after every single exec (include all variants)
</span><br>
<span class="quotelev1">&gt; after_all_exec -- run after all tests in a given Test Run section have completed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you can use the before_any_exec / after_all_exec to launch the daemons once at the beginning and then take them down, or you can use before_each_exec / after_each_exec to launch the daemons before each test and then take them down at the end of that test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm assuming that the *each* variants will cause your tests to run much slower.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see that we don't have an MPI Details section on the wiki describing these parameters.  Sorry!  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
- DongInn
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Previous message:</strong> <a href="0531.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>In reply to:</strong> <a href="0531.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<li><strong>Reply:</strong> <a href="0533.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
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
