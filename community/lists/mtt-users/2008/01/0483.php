<?
$subject_val = "Re: [MTT users] mtt reports arrive without subject.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 14:44:34 2008" -->
<!-- isoreceived="20080110194434" -->
<!-- sent="Thu, 10 Jan 2008 14:44:25 -0500" -->
<!-- isosent="20080110194425" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt reports arrive without subject." -->
<!-- id="20080110194425.GF17031_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47864757.1080102_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-01-10 14:44:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0484.php">Jeff Squyres: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0482.php">Jeff Squyres: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0484.php">Jeff Squyres: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Reply:</strong> <a href="0484.php">Jeff Squyres: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Reply:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan/10/2008 06:27:03PM, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Pasha,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I confess that I don't use the Email reporter. I think the
</span><br>
<span class="quotelev2">&gt; &gt; email_subject is out-of-date. Try this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   email_subject = MPI test results: &amp;current_section()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm unsure about the empty email body, but have an idea.
</span><br>
<span class="quotelev2">&gt; &gt; What does this output for you?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   $ which Mail mailx mail rmail mutt elm
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; which Mail mailx mail rmail mutt elm
</span><br>
<span class="quotelev1">&gt; /usr/bin/Mail
</span><br>
<span class="quotelev1">&gt; /usr/bin/mailx
</span><br>
<span class="quotelev1">&gt; /usr/bin/mail
</span><br>
<span class="quotelev1">&gt; /usr/bin/mutt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm guessing the problem is that your mail agent has a
</span><br>
<span class="quotelev2">&gt; &gt; problem with doing this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   $ cat foo.txt | &lt;mail-agent&gt; -s &quot;MTT Mail Test&quot; pasha_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;   $ cat foo.txt
</span><br>
<span class="quotelev2">&gt; &gt;   Subject:
</span><br>
<span class="quotelev2">&gt; &gt;   start_timestamp: blah blah
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; the command : cat foo.txt  |  /usr/bin/Mail -s &quot;MTT Mail Test&quot; 
</span><br>
<span class="quotelev1">&gt; pasha_at_[hidden]
</span><br>
<span class="quotelev1">&gt; worked nice for me, I got the mail with the subj.
</span><br>
<p><p>I might've misread your last email. Did the new
<br>
email_subject INI parameter from above solve your issue? I'd
<br>
have to see the --debug output to know why the Subject was
<br>
blank.
<br>
<p><p><span class="quotelev1">&gt; ...
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
<p><p>Was the body of the email okay, or was it really blank
<br>
following the start_timestamp line?
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p><span class="quotelev1">&gt;
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
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha
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
<li><strong>Next message:</strong> <a href="0484.php">Jeff Squyres: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0482.php">Jeff Squyres: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0484.php">Jeff Squyres: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Reply:</strong> <a href="0484.php">Jeff Squyres: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Reply:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
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
