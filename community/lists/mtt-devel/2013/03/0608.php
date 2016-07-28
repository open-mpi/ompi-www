<?
$subject_val = "Re: [MTT devel] MTT feature request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 28 09:33:54 2013" -->
<!-- isoreceived="20130328133354" -->
<!-- sent="Thu, 28 Mar 2013 09:33:39 -0400 (EDT)" -->
<!-- isosent="20130328133339" -->
<!-- name="Thomas Naughton" -->
<!-- email="naughtont_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT feature request" -->
<!-- id="alpine.OSX.2.01.1303280931550.13837_at_tigger.ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3489C1D2-2603-4632-B298-21A39F399F8E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT feature request<br>
<strong>From:</strong> Thomas Naughton (<em>naughtont_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-28 09:33:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/04/0609.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT feature request"</a>
<li><strong>In reply to:</strong> <a href="0607.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT feature request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/04/0609.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/04/0609.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; Sorry for the delay in replying to this; somehow this mail slipped by me.
</span><br>
<p>No problem-o.   :-)
<br>
<p>Yes, I just updated local checkout and appears to be just fine 
<br>
with latest trunk.
<br>
<p>Thanks,
<br>
--tjn
<br>
<p>&nbsp;&nbsp;_________________________________________________________________________
<br>
&nbsp;&nbsp;&nbsp;Thomas Naughton                                      naughtont_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;Research Associate                                   (865) 576-4184
<br>
<p><p>On Thu, 28 Mar 2013, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the delay in replying to this; somehow this mail slipped by me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm all for what you described. Does your patch still apply to the current trunk?  (Texteeporter was just recently split up a bit)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2013, at 10:07 PM, &quot;Thomas Naughton&quot; &lt;naughtont_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First, thank you for MTT!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was curious if you would be willing to add a basic feature related to
</span><br>
<span class="quotelev2">&gt;&gt; detailed emails.  Basically, we only want the detailed test results if
</span><br>
<span class="quotelev2">&gt;&gt; something fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Initially I thought I could use an &amp;if() funclet on the
</span><br>
<span class="quotelev2">&gt;&gt; 'email_detailed_report' field, but it turns out the summary value used for
</span><br>
<span class="quotelev2">&gt;&gt; &quot;$overall_mtt_status&quot; generated inside the TextFile reporter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my solution is to just add another field for this case:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     # If true (1), send the detailed report if there were failures
</span><br>
<span class="quotelev2">&gt;&gt;    email_detailed_report_onfail
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a small patch against mtt-trunk (r1590).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; --tjn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev2">&gt;&gt; &lt;email-detailed-report-onfail.patch&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/04/0609.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT feature request"</a>
<li><strong>In reply to:</strong> <a href="0607.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT feature request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/04/0609.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/04/0609.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
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
