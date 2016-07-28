<?
$subject_val = "Re: [MTT users] mtt reports arrive without subject.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 10:33:51 2008" -->
<!-- isoreceived="20080110153351" -->
<!-- sent="Thu, 10 Jan 2008 10:33:40 -0500" -->
<!-- isosent="20080110153340" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt reports arrive without subject." -->
<!-- id="20080110153340.GQ17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="478615AE.3030407_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [MTT users] mtt reports arrive without subject.<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 10:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Previous message:</strong> <a href="0477.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0475.php">Pavel Shamis (Pasha): "[MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Reply:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pasha,
<br>
<p>I confess that I don't use the Email reporter. I think the
<br>
email_subject is out-of-date. Try this:
<br>
<p>&nbsp;&nbsp;email_subject = MPI test results: &amp;current_section()
<br>
<p>I'm unsure about the empty email body, but have an idea.
<br>
What does this output for you?
<br>
<p>&nbsp;&nbsp;$ which Mail mailx mail rmail mutt elm
<br>
<p>I'm guessing the problem is that your mail agent has a
<br>
problem with doing this:
<br>
<p>&nbsp;&nbsp;$ cat foo.txt | &lt;mail-agent&gt; -s &quot;MTT Mail Test&quot; pasha_at_[hidden]
<br>
&nbsp;&nbsp;$ cat foo.txt
<br>
&nbsp;&nbsp;Subject:
<br>
&nbsp;&nbsp;start_timestamp: blah blah
<br>
&nbsp;&nbsp;...
<br>
<p>The body of the mail message *should* be something like this:
<br>
<p>&nbsp;&nbsp;Subject: MPI test results: mpi install: mpi-developer
<br>
&nbsp;&nbsp;start_timestamp: Thu Jan  3 16:35:53 2008
<br>
&nbsp;&nbsp;bitness: 4
<br>
&nbsp;&nbsp;compiler_name: sun
<br>
&nbsp;&nbsp;compiler_version: 5.9 2007/07/12;
<br>
&nbsp;&nbsp;configure_arguments: blah blah ...
<br>
&nbsp;&nbsp;duration: 0 seconds
<br>
&nbsp;&nbsp;endian: 0
<br>
&nbsp;&nbsp;ENVIRONMENT_BEGIN
<br>
&nbsp;&nbsp;prepend_path PATH /ws/ompi-tools/SUNWspro/SOS12-ML/bin
<br>
&nbsp;&nbsp;ENVIRONMENT_END
<br>
&nbsp;&nbsp;exit_signal: -1
<br>
&nbsp;&nbsp;exit_value: 0
<br>
&nbsp;&nbsp;merge_stdout_stderr: 1
<br>
&nbsp;&nbsp;mpi_install_section_name: mpi-developer
<br>
&nbsp;&nbsp;mpi_name: ompi-nightly-v1.0
<br>
&nbsp;&nbsp;mpi_version: 1.0.3a1r11129
<br>
&nbsp;&nbsp;os_version: s10x_u4wos_12
<br>
&nbsp;&nbsp;phase: MPI Install
<br>
&nbsp;&nbsp;result_message: blah blah ...
<br>
&nbsp;&nbsp;start_timestamp: Thu Jan  3 16:37:16 2008
<br>
&nbsp;&nbsp;test_result: 0
<br>
&nbsp;&nbsp;vpath_mode: 0
<br>
<p>Regards,
<br>
Ethan
<br>
<p><p><p>On Thu, Jan/10/2008 02:55:10PM, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm running MTT trunk (r1126) and I'm getting mail reports without any 
</span><br>
<span class="quotelev1">&gt; subject.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In ini file I have:
</span><br>
<span class="quotelev1">&gt; [Reporter: send email]
</span><br>
<span class="quotelev1">&gt; module = Email
</span><br>
<span class="quotelev1">&gt; email_to = pasha_at_[hidden]
</span><br>
<span class="quotelev1">&gt; email_subject = MPI test results: $phase / $sectiona
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In mail body I got:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject:
</span><br>
<span class="quotelev1">&gt; start_timestamp: Thu Jan 10 12:25:56 2008
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
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
<li><strong>Next message:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Previous message:</strong> <a href="0477.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0475.php">Pavel Shamis (Pasha): "[MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Reply:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
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
