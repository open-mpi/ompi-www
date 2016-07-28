<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  7 23:17:39 2009" -->
<!-- isoreceived="20090908031739" -->
<!-- sent="Tue, 8 Sep 2009 13:17:28 +1000 (EST)" -->
<!-- isosent="20090908031728" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="772449531.2550891252379848267.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="873702347.2550871252379815130.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-07 23:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6795.php">Thomas Ropars: "[OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6793.php">Ralf Wildenhues: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Let me point out the obvious since this has plagued
</span><br>
<span class="quotelev1">&gt; us at LANL with regard to this concept. If a user
</span><br>
<span class="quotelev1">&gt; wants to do something different, all they have to
</span><br>
<span class="quotelev1">&gt; do is download and build their own copy of OMPI.
</span><br>
<p>One possibility may be to have OMPI honour a config
<br>
file in /etc by default as well as the ones in $prefix,
<br>
so if a user built their own copy then they would have
<br>
to hack the code in order to disable the check.
<br>
<p>I also really liked the idea of OMPI outputing a
<br>
message if a user tried to override a locked param,
<br>
much better to explain why something is bad rather
<br>
than just saying &quot;no&quot; (especially if you can say
<br>
&quot;no, but you could try...&quot;).
<br>
<p>cheers!
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6795.php">Thomas Ropars: "[OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6793.php">Ralf Wildenhues: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
