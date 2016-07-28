<?
$subject_val = "Re: [MTT users] mtt reports arrive without subject.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 11:27:09 2008" -->
<!-- isoreceived="20080110162709" -->
<!-- sent="Thu, 10 Jan 2008 18:27:03 +0200" -->
<!-- isosent="20080110162703" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt reports arrive without subject." -->
<!-- id="47864757.1080102_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080110153340.GQ17034_at_sun.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 11:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">Jeff Squyres: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Previous message:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0478.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Reply:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Hi Pasha,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I confess that I don't use the Email reporter. I think the
</span><br>
<span class="quotelev1">&gt; email_subject is out-of-date. Try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   email_subject = MPI test results: &amp;current_section()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm unsure about the empty email body, but have an idea.
</span><br>
<span class="quotelev1">&gt; What does this output for you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ which Mail mailx mail rmail mutt elm
</span><br>
<span class="quotelev1">&gt;   
</span><br>
which Mail mailx mail rmail mutt elm
<br>
/usr/bin/Mail
<br>
/usr/bin/mailx
<br>
/usr/bin/mail
<br>
/usr/bin/mutt
<br>
<p><span class="quotelev1">&gt; I'm guessing the problem is that your mail agent has a
</span><br>
<span class="quotelev1">&gt; problem with doing this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ cat foo.txt | &lt;mail-agent&gt; -s &quot;MTT Mail Test&quot; pasha_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   $ cat foo.txt
</span><br>
<span class="quotelev1">&gt;   Subject:
</span><br>
<span class="quotelev1">&gt;   start_timestamp: blah blah
</span><br>
<span class="quotelev1">&gt;   
</span><br>
the command : cat foo.txt  |  /usr/bin/Mail -s &quot;MTT Mail Test&quot; 
<br>
pasha_at_[hidden]
<br>
worked nice for me, I got the mail with the subj.
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">Jeff Squyres: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Previous message:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0478.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Reply:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
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
