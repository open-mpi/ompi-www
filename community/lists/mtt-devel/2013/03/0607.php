<?
$subject_val = "Re: [MTT devel] MTT feature request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 28 07:54:08 2013" -->
<!-- isoreceived="20130328115408" -->
<!-- sent="Thu, 28 Mar 2013 11:53:56 +0000" -->
<!-- isosent="20130328115356" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT feature request" -->
<!-- id="3489C1D2-2603-4632-B298-21A39F399F8E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.01.1302282155070.32314_at_tigger.ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-28 07:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0608.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<li><strong>Previous message:</strong> <a href="0606.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1607 - in trunk/lib/MTT: Reporter	Values/Functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0608.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<li><strong>Reply:</strong> <a href="0608.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying to this; somehow this mail slipped by me. 
<br>
<p>I'm all for what you described. Does your patch still apply to the current trunk?  (Texteeporter was just recently split up a bit)
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Feb 28, 2013, at 10:07 PM, &quot;Thomas Naughton&quot; &lt;naughtont_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, thank you for MTT!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was curious if you would be willing to add a basic feature related to
</span><br>
<span class="quotelev1">&gt; detailed emails.  Basically, we only want the detailed test results if
</span><br>
<span class="quotelev1">&gt; something fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Initially I thought I could use an &amp;if() funclet on the
</span><br>
<span class="quotelev1">&gt; 'email_detailed_report' field, but it turns out the summary value used for
</span><br>
<span class="quotelev1">&gt; &quot;$overall_mtt_status&quot; generated inside the TextFile reporter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my solution is to just add another field for this case:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # If true (1), send the detailed report if there were failures
</span><br>
<span class="quotelev1">&gt;    email_detailed_report_onfail
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is a small patch against mtt-trunk (r1590).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --tjn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;  Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev1">&gt; &lt;email-detailed-report-onfail.patch&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0608.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<li><strong>Previous message:</strong> <a href="0606.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1607 - in trunk/lib/MTT: Reporter	Values/Functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0608.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
<li><strong>Reply:</strong> <a href="0608.php">Thomas Naughton: "Re: [MTT devel] MTT feature request"</a>
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
