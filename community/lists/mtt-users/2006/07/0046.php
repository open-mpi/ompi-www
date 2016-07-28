<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 18:05:49 2006" -->
<!-- isoreceived="20060719220549" -->
<!-- sent="Wed, 19 Jul 2006 18:05:26 -0400" -->
<!-- isosent="20060719220526" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] perfbase.php not slurping test run data" -->
<!-- id="44BEACA6.1010408_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44BE6AF9.4010608_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-07-19 18:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0047.php">Ethan Mallove: "[MTT users] nightly results format"</a>
<li><strong>Previous message:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>In reply to:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0047.php">Ethan Mallove: "[MTT users] nightly results format"</a>
<li><strong>Reply:</strong> <a href="0047.php">Ethan Mallove: "[MTT users] nightly results format"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI ...
<br>
<p>We've narrowed this issue down to all results with occurrence=&quot;once&quot; will input,
<br>
but if occurrence=&quot;multiple&quot; - we see #no_data#.
<br>
<p>I posted a question to users_at_perfbase if you're interested in following it there:
<br>
<p><a href="http://perfbase.tigris.org/servlets/ReadMsg?list=users&amp;msgNo=126">http://perfbase.tigris.org/servlets/ReadMsg?list=users&amp;msgNo=126</a>
<br>
<p>-Ethan
<br>
<p><p>Ethan Mallove wrote On 07/19/06 13:25,:
<br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote On 07/18/06 19:43,:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;I would try this manually, without the php script in between.
</span><br>
<span class="quotelev2">&gt;&gt;Specifically:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;1. I would modify the .php script to write out a file
</span><br>
<span class="quotelev2">&gt;&gt;2. send a submit through the .php file
</span><br>
<span class="quotelev2">&gt;&gt;3. examine the resulting file and ensure that all the fields match up to
</span><br>
<span class="quotelev2">&gt;&gt;what you think they should be
</span><br>
<span class="quotelev2">&gt;&gt;4. manually submit this file to perfbase and see what happens
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't get it to work outside of the php script either:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ date
</span><br>
<span class="quotelev1">&gt; Wed Jul 19 12:34:49 EDT 2006
</span><br>
<span class="quotelev1">&gt; $ cat pb.in | perfbase input -v -i -d www/inp_test_run_correctness.xml -
</span><br>
<span class="quotelev1">&gt; #* importing data from
</span><br>
<span class="quotelev1">&gt;     - (parsed according to www/inp_test_run_correctness.xml)
</span><br>
<span class="quotelev1">&gt; #* Parsing input description from XML file www/inp_test_run_correctness.xml
</span><br>
<span class="quotelev1">&gt; #* Processing data file  -
</span><br>
<span class="quotelev1">&gt; #+ Creating new run with index 5
</span><br>
<span class="quotelev1">&gt; $ cat pb.in
</span><br>
<span class="quotelev1">&gt; hostname: burl-ct-v20z-0
</span><br>
<span class="quotelev1">&gt; os_name: SunOS
</span><br>
<span class="quotelev1">&gt; os_version: SunOS 5.10
</span><br>
<span class="quotelev1">&gt; platform_hardware: i86pc
</span><br>
<span class="quotelev1">&gt; platform_type: solaris-10
</span><br>
<span class="quotelev1">&gt; submit_timestamp: Mon Jul 17 18:30:48 2006
</span><br>
<span class="quotelev1">&gt; mpi_install_section_name: solaris i386
</span><br>
<span class="quotelev1">&gt; mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev1">&gt; mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev1">&gt; mtt_version_major: 0
</span><br>
<span class="quotelev1">&gt; mtt_version_minor: 5
</span><br>
<span class="quotelev1">&gt; perfbase_xml: inp_test_run_correctness.xml
</span><br>
<span class="quotelev1">&gt; phase: Test run
</span><br>
<span class="quotelev1">&gt; platform_id: IU Odin cluster
</span><br>
<span class="quotelev1">&gt; start_timestamp: Mon Jul 17 18:30:45 2006
</span><br>
<span class="quotelev1">&gt; stop_timestamp: Mon Jul 17 18:30:48 2006
</span><br>
<span class="quotelev1">&gt; test_build_section_name: trivial
</span><br>
<span class="quotelev1">&gt; test_command: mpirun -np 2 --prefix
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/install
</span><br>
<span class="quotelev1">&gt; ./f77_hello
</span><br>
<span class="quotelev1">&gt; test_message: Passed
</span><br>
<span class="quotelev1">&gt; test_name: f77_hello
</span><br>
<span class="quotelev1">&gt; test_np: 2
</span><br>
<span class="quotelev1">&gt; test_pass: 1
</span><br>
<span class="quotelev1">&gt; test_run_section_name: trivial
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr: 0
</span><br>
<span class="quotelev1">&gt; mpi_get_section_name: solaris i386
</span><br>
<span class="quotelev1">&gt; ENVIRONMENT_BEGIN
</span><br>
<span class="quotelev1">&gt; foo = bar
</span><br>
<span class="quotelev1">&gt; ENVIRONMENT_END
</span><br>
<span class="quotelev1">&gt; STDERR_BEGIN
</span><br>
<span class="quotelev1">&gt; blah blah blah
</span><br>
<span class="quotelev1">&gt; STDERR_END
</span><br>
<span class="quotelev1">&gt; STDOUT_BEGIN
</span><br>
<span class="quotelev1">&gt; blah blah blah
</span><br>
<span class="quotelev1">&gt; STDOUT_END
</span><br>
<span class="quotelev1">&gt; $ perfbase ls -l --exp=test_run_correctness -v
</span><br>
<span class="quotelev1">&gt; --show=mtt_version_major,mtt_version_minor,hostname,os_name,os_version,platform_hardware,platform_type,platform_id,environment,mpi_name,mpi_version,mpi_get_section_name,mpi_install_section_name,test_build_section_name,test_run_section_name,merge_stdout_stderr,test_command,test_message,test_name,test_np,test_pass,stderr,stdout,submit_timestamp,start_timestamp,stop_timestamp
</span><br>
<span class="quotelev1">&gt; --nvals=999 | tail -2
</span><br>
<span class="quotelev1">&gt; 5       postgres        2006-07-19 12:34:49.00  0       5       burl-ct-v20z-0
</span><br>
<span class="quotelev1">&gt; SunOS   SunOS 5.10      i86pc   solaris-10      IU Odin cluster     foo = bar
</span><br>
<span class="quotelev1">&gt;         ompi-nightly-v1.0       1.0.3a1r10793   solaris i386    solaris i386
</span><br>
<span class="quotelev1">&gt; trivial trivial 0       #no_data#       #no_data#       #no_data#   #no_data#
</span><br>
<span class="quotelev1">&gt;     #no_data#       #no_data#       #no_data#       2006-07-17 18:30:48.00
</span><br>
<span class="quotelev1">&gt; #no_data#       #no_data#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The timestamp for the perfbase input and ls matches, which shows *something* was
</span><br>
<span class="quotelev1">&gt; inserted into perfbase, but shouldn't I see &quot;Passed&quot;, &quot;f77_hello&quot;, &quot;2&quot;, etc.
</span><br>
<span class="quotelev1">&gt; where the perfbase ls output shows #no_data#? (Note: I took the -u option out of
</span><br>
<span class="quotelev1">&gt; perfbase input to be more &quot;strict&quot; for the time being.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not able to insert data into one of the problematic fields with perfbase's
</span><br>
<span class="quotelev1">&gt; fixed content option (-f name=val). E.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat pb.in | perfbase input -f test_name=f77_hello -v -i -d
</span><br>
<span class="quotelev1">&gt; www/inp_test_run_correctness.xml -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tried to delete the experiment and do a re-setup, but that didn't help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ perfbase delete --exp=test_run_correctness
</span><br>
<span class="quotelev1">&gt; $ perfbase setup --desc=www/exp_test_run_correctness.xml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The pattern I see is that the problematic fields are set to
</span><br>
<span class="quotelev1">&gt; occurrence=&quot;multiple&quot;. For these fields I've set retrigger=yes (which should be
</span><br>
<span class="quotelev1">&gt; the default) to force an update to occur if the row exists - no luck.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is a problem in the exp_*.xml files or the inp_*.xml files?.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, how was it determined in the exp*.xml file, which fields were to be a
</span><br>
<span class="quotelev1">&gt; &quot;parameter&quot; and which were to be a &quot;result&quot;? Looks like the only difference is a
</span><br>
<span class="quotelev1">&gt; parameter can nest 0 or more &quot;valid&quot; elements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;That's what I would do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Sent: Tuesday, July 18, 2006 6:33 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;To: mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Subject: [MTT users] perfbase.php not slurping test run data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;perfbase.php seems to only populate perfbase with mpi_install 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;and test_build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;data. In other words, data correlating to these files is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;getting input to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;perfbase:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inp_mpi_install.xml
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inp_test_build.xml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Data correlating to this file is _not_ getting input to perfbase:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inp_test_run_correctness.xml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I verified this by looking at the perfbase data with pg_dump 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(postgres's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;command-line tool to dump the entire database), which shows 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;that there is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;data for these fields:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   test_pass
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   test_command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   test_name
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   test_np
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   test_message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   stderr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;stdout&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   start_timestamp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   stop_timestamp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;The above fields belong to the rundata table. I can see from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the perfbase
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--debug output there are UPDATEs/INSERTs into the below tables, but no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;UPDATEs/INSERTs into rundata:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   run_metadata
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   rundata_once
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;It looks like the data is getting parsed correctly:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;E.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;#* checking &lt;named_location&gt;: found 'test_name: '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;#* parsing &lt;named_location&gt; 'test_name: '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  content for 'test_name': 'f77_hello'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;*# Processing line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   test_np: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;#* checking &lt;named_location&gt;: found 'test_np: '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;#* parsing &lt;named_location&gt; 'test_np: '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  content for 'test_np': '2'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ... [snip] ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;And there are no error messages from perfbase. Can anyone 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;give me a tip on how
</span><br>
<span class="quotelev3">&gt;&gt;&gt;to track down the missing data?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0047.php">Ethan Mallove: "[MTT users] nightly results format"</a>
<li><strong>Previous message:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<li><strong>In reply to:</strong> <a href="0045.php">Ethan Mallove: "Re: [MTT users] perfbase.php not slurping test run data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0047.php">Ethan Mallove: "[MTT users] nightly results format"</a>
<li><strong>Reply:</strong> <a href="0047.php">Ethan Mallove: "[MTT users] nightly results format"</a>
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
