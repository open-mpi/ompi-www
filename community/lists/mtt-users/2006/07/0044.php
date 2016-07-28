<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 18 19:43:26 2006" -->
<!-- isoreceived="20060718234326" -->
<!-- sent="Tue, 18 Jul 2006 19:43:20 -0400" -->
<!-- isosent="20060718234320" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] perfbase.php not slurping test run data" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFBB5047_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] perfbase.php not slurping test run data" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-18 19:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Previous message:</strong> <a href="0043.php">Ethan Mallove: "[MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Maybe in reply to:</strong> <a href="0043.php">Ethan Mallove: "[MTT users] perfbase.php not slurping test run data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Reply:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would try this manually, without the php script in between.
<br>
Specifically:
<br>
<p>1. I would modify the .php script to write out a file
<br>
2. send a submit through the .php file
<br>
3. examine the resulting file and ensure that all the fields match up to
<br>
what you think they should be
<br>
4. manually submit this file to perfbase and see what happens
<br>
<p>That's what I would do.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, July 18, 2006 6:33 PM
</span><br>
<span class="quotelev1">&gt; To: mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [MTT users] perfbase.php not slurping test run data
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; perfbase.php seems to only populate perfbase with mpi_install 
</span><br>
<span class="quotelev1">&gt; and test_build
</span><br>
<span class="quotelev1">&gt; data. In other words, data correlating to these files is 
</span><br>
<span class="quotelev1">&gt; getting input to
</span><br>
<span class="quotelev1">&gt; perfbase:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   inp_mpi_install.xml
</span><br>
<span class="quotelev1">&gt;   inp_test_build.xml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data correlating to this file is _not_ getting input to perfbase:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   inp_test_run_correctness.xml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I verified this by looking at the perfbase data with pg_dump 
</span><br>
<span class="quotelev1">&gt; (postgres's
</span><br>
<span class="quotelev1">&gt; command-line tool to dump the entire database), which shows 
</span><br>
<span class="quotelev1">&gt; that there is no
</span><br>
<span class="quotelev1">&gt; data for these fields:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     test_pass
</span><br>
<span class="quotelev1">&gt;     test_command
</span><br>
<span class="quotelev1">&gt;     test_name
</span><br>
<span class="quotelev1">&gt;     test_np
</span><br>
<span class="quotelev1">&gt;     test_message
</span><br>
<span class="quotelev1">&gt;     stderr
</span><br>
<span class="quotelev1">&gt;     &quot;stdout&quot;
</span><br>
<span class="quotelev1">&gt;     start_timestamp
</span><br>
<span class="quotelev1">&gt;     stop_timestamp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The above fields belong to the rundata table. I can see from 
</span><br>
<span class="quotelev1">&gt; the perfbase
</span><br>
<span class="quotelev1">&gt; --debug output there are UPDATEs/INSERTs into the below tables, but no
</span><br>
<span class="quotelev1">&gt; UPDATEs/INSERTs into rundata:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     run_metadata
</span><br>
<span class="quotelev1">&gt;     rundata_once
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like the data is getting parsed correctly:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #* checking &lt;named_location&gt;: found 'test_name: '
</span><br>
<span class="quotelev1">&gt; #* parsing &lt;named_location&gt; 'test_name: '
</span><br>
<span class="quotelev1">&gt;    content for 'test_name': 'f77_hello'
</span><br>
<span class="quotelev1">&gt; *# Processing line:
</span><br>
<span class="quotelev1">&gt;     test_np: 2
</span><br>
<span class="quotelev1">&gt; #* checking &lt;named_location&gt;: found 'test_np: '
</span><br>
<span class="quotelev1">&gt; #* parsing &lt;named_location&gt; 'test_np: '
</span><br>
<span class="quotelev1">&gt;    content for 'test_np': '2'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ... [snip] ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And there are no error messages from perfbase. Can anyone 
</span><br>
<span class="quotelev1">&gt; give me a tip on how
</span><br>
<span class="quotelev1">&gt; to track down the missing data?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Previous message:</strong> <a href="0043.php">Ethan Mallove: "[MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Maybe in reply to:</strong> <a href="0043.php">Ethan Mallove: "[MTT users] perfbase.php not slurping test run data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Reply:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
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
