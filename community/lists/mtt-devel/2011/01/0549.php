<?
$subject_val = "Re: [MTT devel] mtt questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 09:07:36 2011" -->
<!-- isoreceived="20110105140736" -->
<!-- sent="Wed, 5 Jan 2011 09:07:31 -0500" -->
<!-- isosent="20110105140731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt questions" -->
<!-- id="D320BEA4-98D6-470F-8923-84C95676425E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=h_H5mUSKLd-+73=acfy7Fh7fTfvmRd0QUvuze_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 09:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2011, at 7:35 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Also, found following inside RunEngine.pm code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Set some thresholds for an early exit
</span><br>
<span class="quotelev1">&gt; my $break_threshold;
</span><br>
<span class="quotelev1">&gt; $break_threshold-&gt;{MTT::Values::PASS}      = Value($ini, $section, &quot;break_threshold_pass&quot;);
</span><br>
<span class="quotelev1">&gt; $break_threshold-&gt;{MTT::Values::FAIL}      = Value($ini, $section, &quot;break_threshold_fail&quot;);
</span><br>
<span class="quotelev1">&gt; $break_threshold-&gt;{MTT::Values::TIMED_OUT} = Value($ini, $section, &quot;break_threshold_timeout&quot;);
</span><br>
<span class="quotelev1">&gt; $break_threshold-&gt;{MTT::Values::SKIPPED}   = Value($ini, $section, &quot;break_threshold_skipped&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but it seems like &quot;break rules&quot; are available per single test section instead of whole mtt session.
</span><br>
<p>Looks like we started this functionality with similar thoughts to what you posted (I dimly recall having such discussions in the past), but didn't really flesh it out.
<br>
<p>If you want to make a better implementation of this functionality, that would be great.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0547.php">Mike Dubman: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
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
