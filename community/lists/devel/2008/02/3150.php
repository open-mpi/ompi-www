<?
$subject_val = "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 01:56:45 2008" -->
<!-- isoreceived="20080207065645" -->
<!-- sent="Thu, 7 Feb 2008 01:56:44 -0500" -->
<!-- isosent="20080207065644" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk" -->
<!-- id="20080207065644.GV3275_at_benten.cs.indiana.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C3CFE084.4511%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk<br>
<strong>From:</strong> Torsten Hoefler (<em>torsten.hoefler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 01:56:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3151.php">Muhammad Atif: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<li><strong>Previous message:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3147.php">Ralph Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3148.php">Brian Barrett: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<span class="quotelev1">&gt; I don't have an opinion either way on this specific proposal. However, I do
</span><br>
<span class="quotelev1">&gt; have a growing concern over the number of packages being added to the
</span><br>
<span class="quotelev1">&gt; system, all of which want to &quot;build by default&quot;. The build time is already
</span><br>
<span class="quotelev1">&gt; long and rapidly growing, and our code distribution is correspondingly
</span><br>
<span class="quotelev1">&gt; increasing in size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I therefore would like to raise two areas for thought:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Do we need to, at some point, begin to ask if all these packages -have-
</span><br>
<span class="quotelev1">&gt; to be included as source code in our code base? Can we devise a means such
</span><br>
<span class="quotelev1">&gt; that people could download them separately and link the libraries to us in
</span><br>
<span class="quotelev1">&gt; some other fashion?
</span><br>
yes, they can of course. It's actually a very similar discussion as for
<br>
VT - it's all about usability and ease of use. And also getting into the
<br>
testing cycles etc.
<br>
<p><span class="quotelev1">&gt; 2. Have we applied the &quot;rational thought&quot; filter here - i.e., are we
</span><br>
<span class="quotelev1">&gt; building by default what a large percentage of the user community will use,
</span><br>
<span class="quotelev1">&gt; or are we building by default all things that somebody, somewhere, someday
</span><br>
<span class="quotelev1">&gt; -might- use? If the latter, is that really how we want to define the
</span><br>
<span class="quotelev1">&gt; &quot;default&quot; build?
</span><br>
I do not know how large the user base will be. I know of some
<br>
applications that implement their own non-blocking versions of
<br>
collective operations. However, building those things does not really do
<br>
any harm. 
<br>
<p><span class="quotelev1">&gt; For example, as a first step on #2, wouldn't it make more sense to at least
</span><br>
<span class="quotelev1">&gt; have the build system -not- build some things by default when in &quot;developer&quot;
</span><br>
<span class="quotelev1">&gt; mode, but build by default when doing an optimized installation? This would
</span><br>
<span class="quotelev1">&gt; save those of us who have to build frequently from all the time penalties of
</span><br>
<span class="quotelev1">&gt; building things we have no use for in our daily work (which is becoming a
</span><br>
<span class="quotelev1">&gt; significant part of the code base), while retaining this &quot;build everything
</span><br>
<span class="quotelev1">&gt; conceivable&quot; approach. I suggest this only because, while I certainly -can-
</span><br>
<span class="quotelev1">&gt; turn it all &quot;off&quot;, the number of options required to turn off all these
</span><br>
<span class="quotelev1">&gt; unneeded &quot;default&quot; code areas is becoming large, and constantly seems to be
</span><br>
<span class="quotelev1">&gt; growing.
</span><br>
Yes, I would agree to this. Not that I disagree on your other points,
<br>
but they certainly have to be decided by the community. And as far as I
<br>
know, the community agreed on having non-blocking collectives on the
<br>
&quot;roadmap&quot; for 1.3. The question is if we do want this on our feature
<br>
list or not (cf. ROMIO, it's also perfectly fine as a separate library,
<br>
but we bundle it just because the standard says so). We just decided to
<br>
use the &quot;light&quot; and less error-prone variant to do this (the other idea
<br>
was to extend the coll modules to offer non-blocking collective
<br>
support). 
<br>
<p>Best,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
Indiana University    | <a href="http://www.indiana.edu">http://www.indiana.edu</a>
Open Systems Lab      | <a href="http://osl.iu.edu/">http://osl.iu.edu/</a>
150 S. Woodlawn Ave.  | Bloomington, IN, 474045-7104 | USA
Lindley Hall Room 135 | +01 (812) 855-3608
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3151.php">Muhammad Atif: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<li><strong>Previous message:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3147.php">Ralph Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3148.php">Brian Barrett: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
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
