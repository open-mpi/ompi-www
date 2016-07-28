<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 13:25:16 2006" -->
<!-- isoreceived="20060719172516" -->
<!-- sent="Wed, 19 Jul 2006 13:25:13 -0400" -->
<!-- isosent="20060719172513" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] perfbase.php not slurping test run data" -->
<!-- id="44BE6AF9.4010608_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFBB5047_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-19 13:25:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>In reply to:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Reply:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote On 07/18/06 19:43,:
<br>
<span class="quotelev1">&gt; I would try this manually, without the php script in between.
</span><br>
<span class="quotelev1">&gt; Specifically:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I would modify the .php script to write out a file
</span><br>
<span class="quotelev1">&gt; 2. send a submit through the .php file
</span><br>
<span class="quotelev1">&gt; 3. examine the resulting file and ensure that all the fields match up to
</span><br>
<span class="quotelev1">&gt; what you think they should be
</span><br>
<span class="quotelev1">&gt; 4. manually submit this file to perfbase and see what happens
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I can't get it to work outside of the php script either:
<br>
<p>$ date
<br>
Wed Jul 19 12:34:49 EDT 2006
<br>
$ cat pb.in | perfbase input -v -i -d www/inp_test_run_correctness.xml -
<br>
#* importing data from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- (parsed according to www/inp_test_run_correctness.xml)
<br>
#* Parsing input description from XML file www/inp_test_run_correctness.xml
<br>
#* Processing data file  -
<br>
#+ Creating new run with index 5
<br>
$ cat pb.in
<br>
hostname: burl-ct-v20z-0
<br>
os_name: SunOS
<br>
os_version: SunOS 5.10
<br>
platform_hardware: i86pc
<br>
platform_type: solaris-10
<br>
submit_timestamp: Mon Jul 17 18:30:48 2006
<br>
mpi_install_section_name: solaris i386
<br>
mpi_name: ompi-nightly-v1.0
<br>
mpi_version: 1.0.3a1r10793
<br>
mtt_version_major: 0
<br>
mtt_version_minor: 5
<br>
perfbase_xml: inp_test_run_correctness.xml
<br>
phase: Test run
<br>
platform_id: IU Odin cluster
<br>
start_timestamp: Mon Jul 17 18:30:45 2006
<br>
stop_timestamp: Mon Jul 17 18:30:48 2006
<br>
test_build_section_name: trivial
<br>
test_command: mpirun -np 2 --prefix
<br>
/workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
<br>
./f77_hello
<br>
test_message: Passed
<br>
test_name: f77_hello
<br>
test_np: 2
<br>
test_pass: 1
<br>
test_run_section_name: trivial
<br>
merge_stdout_stderr: 0
<br>
mpi_get_section_name: solaris i386
<br>
ENVIRONMENT_BEGIN
<br>
foo = bar
<br>
ENVIRONMENT_END
<br>
STDERR_BEGIN
<br>
blah blah blah
<br>
STDERR_END
<br>
STDOUT_BEGIN
<br>
blah blah blah
<br>
STDOUT_END
<br>
$ perfbase ls -l --exp=test_run_correctness -v
<br>
--show=mtt_version_major,mtt_version_minor,hostname,os_name,os_version,platform_hardware,platform_type,platform_id,environment,mpi_name,mpi_version,mpi_get_section_name,mpi_install_section_name,test_build_section_name,test_run_section_name,merge_stdout_stderr,test_command,test_message,test_name,test_np,test_pass,stderr,stdout,submit_timestamp,start_timestamp,stop_timestamp
<br>
--nvals=999 | tail -2
<br>
5       postgres        2006-07-19 12:34:49.00  0       5       burl-ct-v20z-0
<br>
SunOS   SunOS 5.10      i86pc   solaris-10      IU Odin cluster     foo = bar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi-nightly-v1.0       1.0.3a1r10793   solaris i386    solaris i386
<br>
trivial trivial 0       #no_data#       #no_data#       #no_data#   #no_data#
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#no_data#       #no_data#       #no_data#       2006-07-17 18:30:48.00
<br>
#no_data#       #no_data#
<br>
<p><pre>
---
The timestamp for the perfbase input and ls matches, which shows *something* was
inserted into perfbase, but shouldn't I see &quot;Passed&quot;, &quot;f77_hello&quot;, &quot;2&quot;, etc.
where the perfbase ls output shows #no_data#? (Note: I took the -u option out of
perfbase input to be more &quot;strict&quot; for the time being.)
I'm not able to insert data into one of the problematic fields with perfbase's
fixed content option (-f name=val). E.g.,
$ cat pb.in | perfbase input -f test_name=f77_hello -v -i -d
www/inp_test_run_correctness.xml -
Tried to delete the experiment and do a re-setup, but that didn't help.
$ perfbase delete --exp=test_run_correctness
$ perfbase setup --desc=www/exp_test_run_correctness.xml
The pattern I see is that the problematic fields are set to
occurrence=&quot;multiple&quot;. For these fields I've set retrigger=yes (which should be
the default) to force an update to occur if the row exists - no luck.
I'm not sure if this is a problem in the exp_*.xml files or the inp_*.xml files?.
Also, how was it determined in the exp*.xml file, which fields were to be a
&quot;parameter&quot; and which were to be a &quot;result&quot;? Looks like the only difference is a
parameter can nest 0 or more &quot;valid&quot; elements.
-Ethan
&gt; That's what I would do.
&gt;  
&gt; 
&gt; 
&gt;&gt;-----Original Message-----
&gt;&gt;From: mtt-users-bounces_at_[hidden] 
&gt;&gt;[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
&gt;&gt;Sent: Tuesday, July 18, 2006 6:33 PM
&gt;&gt;To: mtt-users_at_[hidden]
&gt;&gt;Subject: [MTT users] perfbase.php not slurping test run data
&gt;&gt;
&gt;&gt;perfbase.php seems to only populate perfbase with mpi_install 
&gt;&gt;and test_build
&gt;&gt;data. In other words, data correlating to these files is 
&gt;&gt;getting input to
&gt;&gt;perfbase:
&gt;&gt;
&gt;&gt;  inp_mpi_install.xml
&gt;&gt;  inp_test_build.xml
&gt;&gt;
&gt;&gt;Data correlating to this file is _not_ getting input to perfbase:
&gt;&gt;
&gt;&gt;  inp_test_run_correctness.xml
&gt;&gt;
&gt;&gt;I verified this by looking at the perfbase data with pg_dump 
&gt;&gt;(postgres's
&gt;&gt;command-line tool to dump the entire database), which shows 
&gt;&gt;that there is no
&gt;&gt;data for these fields:
&gt;&gt;
&gt;&gt;    test_pass
&gt;&gt;    test_command
&gt;&gt;    test_name
&gt;&gt;    test_np
&gt;&gt;    test_message
&gt;&gt;    stderr
&gt;&gt;    &quot;stdout&quot;
&gt;&gt;    start_timestamp
&gt;&gt;    stop_timestamp
&gt;&gt;
&gt;&gt;The above fields belong to the rundata table. I can see from 
&gt;&gt;the perfbase
&gt;&gt;--debug output there are UPDATEs/INSERTs into the below tables, but no
&gt;&gt;UPDATEs/INSERTs into rundata:
&gt;&gt;
&gt;&gt;    run_metadata
&gt;&gt;    rundata_once
&gt;&gt;
&gt;&gt;It looks like the data is getting parsed correctly:
&gt;&gt;
&gt;&gt;E.g.,
&gt;&gt;
&gt;&gt;#* checking &lt;named_location&gt;: found 'test_name: '
&gt;&gt;#* parsing &lt;named_location&gt; 'test_name: '
&gt;&gt;   content for 'test_name': 'f77_hello'
&gt;&gt;*# Processing line:
&gt;&gt;    test_np: 2
&gt;&gt;#* checking &lt;named_location&gt;: found 'test_np: '
&gt;&gt;#* parsing &lt;named_location&gt; 'test_np: '
&gt;&gt;   content for 'test_np': '2'
&gt;&gt;
&gt;&gt;   ... [snip] ...
&gt;&gt;
&gt;&gt;And there are no error messages from perfbase. Can anyone 
&gt;&gt;give me a tip on how
&gt;&gt;to track down the missing data?
&gt;&gt;
&gt;&gt;-Ethan
&gt;&gt;
&gt;&gt;_______________________________________________
&gt;&gt;mtt-users mailing list
&gt;&gt;mtt-users_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
&gt;&gt;
&gt; 
&gt; 
&gt; _______________________________________________
&gt; mtt-users mailing list
&gt; mtt-users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>In reply to:</strong> <a href="0044.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] perfbase.php not slurping test run data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>Reply:</strong> <a href="0046.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
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
