<?
$subject_val = "Re: [OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 27 08:51:08 2010" -->
<!-- isoreceived="20100927125108" -->
<!-- sent="Mon, 27 Sep 2010 08:51:03 -0400" -->
<!-- isosent="20100927125103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="246822D3-B277-490F-8FBC-2F092ADE1AC0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=c_HmbPf0gY=pKafy+obP-9MApbuHLnGdAUNsY_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting AUTOMAKE_JOBS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-27 08:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8559.php">Aurélien Bouteiller: "[OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8557.php">Rainer Keller: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>In reply to:</strong> <a href="8556.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2010, at 10:29 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; What I was trying (poorly) to propose is that this capability be done the traditional way of an option. To mimic 'make', I propose that we add a -j option to autogen.pl. If a value is given, then that is the number of parallel automake jobs we run. If no value is given, then we use Jeff's heuristic to determine the number to run. Obviously, setting the automake_jobs envar will have the same effect as -j.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This gives us the best of both worlds while not surprising users. I'd be willing to help implement it, Jeff.
</span><br>
<p>I have no objection; should be easy to implement.  The syntax to set an environment variable in Perl is:
<br>
<p>$ENV{AUTOMAKE_JOBS} = $value;
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
<li><strong>Next message:</strong> <a href="8559.php">Aurélien Bouteiller: "[OMPI devel] Autogen.pl, romio and autoconf 2.66"</a>
<li><strong>Previous message:</strong> <a href="8557.php">Rainer Keller: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>In reply to:</strong> <a href="8556.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
