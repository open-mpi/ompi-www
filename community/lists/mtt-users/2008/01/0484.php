<?
$subject_val = "Re: [MTT users] mtt reports arrive without subject.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 16:03:57 2008" -->
<!-- isoreceived="20080110210357" -->
<!-- sent="Thu, 10 Jan 2008 16:03:27 -0500" -->
<!-- isosent="20080110210327" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt reports arrive without subject." -->
<!-- id="166AC5F4-C2C6-45DC-A166-B9CB2CB2954E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080110194425.GF17031_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 16:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>In reply to:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, you can run quick tests to see if the e-mail reporter is working  
<br>
-- do something like:
<br>
<p>./client/mtt ...your normal MTT command line args... \
<br>
&nbsp;&nbsp;&nbsp;--section trivial --test-build --force --section reporter
<br>
<p>This will just build the &quot;trivial&quot; section (which is just 8 small  
<br>
apps: ring and hello in C, C++, F77, F90) and then submit a report,  
<br>
including the email reporter.
<br>
<p>It's a quick-n-dirty way to test your reporter without doing a full- 
<br>
blown MTT run.
<br>
<p><p><p>On Jan 10, 2008, at 2:44 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Jan/10/2008 06:27:03PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Pasha,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I confess that I don't use the Email reporter. I think the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email_subject is out-of-date. Try this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  email_subject = MPI test results: &amp;current_section()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm unsure about the empty email body, but have an idea.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does this output for you?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ which Mail mailx mail rmail mutt elm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which Mail mailx mail rmail mutt elm
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/Mail
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/mailx
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/mail
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/mutt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm guessing the problem is that your mail agent has a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem with doing this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ cat foo.txt | &lt;mail-agent&gt; -s &quot;MTT Mail Test&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pasha_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ cat foo.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Subject:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  start_timestamp: blah blah
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the command : cat foo.txt  |  /usr/bin/Mail -s &quot;MTT Mail Test&quot;
</span><br>
<span class="quotelev2">&gt;&gt; pasha_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; worked nice for me, I got the mail with the subj.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I might've misread your last email. Did the new
</span><br>
<span class="quotelev1">&gt; email_subject INI parameter from above solve your issue? I'd
</span><br>
<span class="quotelev1">&gt; have to see the --debug output to know why the Subject was
</span><br>
<span class="quotelev1">&gt; blank.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; email_subject = MPI test results: $phase / $sectiona
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In mail body I got:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject:
</span><br>
<span class="quotelev2">&gt;&gt; start_timestamp: Thu Jan 10 12:25:56 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was the body of the email okay, or was it really blank
</span><br>
<span class="quotelev1">&gt; following the start_timestamp line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>In reply to:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
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
