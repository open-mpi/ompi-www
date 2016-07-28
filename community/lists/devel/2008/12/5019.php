<?
$subject_val = "Re: [OMPI devel] make dependency problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  7 07:23:15 2008" -->
<!-- isoreceived="20081207122315" -->
<!-- sent="Sun, 7 Dec 2008 13:23:07 +0100" -->
<!-- isosent="20081207122307" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make dependency problem?" -->
<!-- id="20081207122307.GA22270_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="83F7689D-31F0-4031-917D-CFCE0631F35E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] make dependency problem?<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-07 07:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5018.php">Ralf Wildenhues: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="4966.php">Jeff Squyres: "Re: [OMPI devel] make dependency problem?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Eugene, Jeff,
<br>
<p>the interesting data points here would be the dependency tracking scheme
<br>
selected by automake (CCDEPMODE in ompi/mca/bml/r2/Makefile), with and
<br>
without --enable-dependency-tracking passed to configure.
<br>
<p>Also, the contents of ompi/mca/bml/r2/.deps/bml_r2.Plo, after ensuring
<br>
that a dependency tracking scheme other than &quot;none&quot; is selected, and
<br>
then removing bml_r2.o once and rebuilding.
<br>
<p>Also, which compiler, and version, and which Solaris release?
<br>
<p>Thanks,
<br>
Ralf
<br>
<p>* Jeff Squyres wrote on Tue, Dec 02, 2008 at 01:58:49PM CET:
<br>
<span class="quotelev1">&gt; Weird -- the exact opposite happens for me (if I touch btl.h, it  
</span><br>
<span class="quotelev1">&gt; automatically rebuilds oodles of stuff, to include bml_r2.c).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have dim recollections of Automake disabling dependency tracking by  
</span><br>
<span class="quotelev1">&gt; default on Solaris+Solaris compilers (I don't remember the exact issue  
</span><br>
<span class="quotelev1">&gt; -- perhaps it was before AM supported the dependency format of the  
</span><br>
<span class="quotelev1">&gt; Solaris compilers...?).  Have you tried configuring with --enable- 
</span><br>
<span class="quotelev1">&gt; dependency-tracking?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 29, 2008, at 6:45 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was playing with OMPI and I noticed that if I modified btl.h,  
</span><br>
<span class="quotelev2">&gt;&gt; bml_r2.c did not automatically get rebuilt, even though it includes  
</span><br>
<span class="quotelev2">&gt;&gt; btl.h.  This caused me all sorts of unnecessary debugging troubles.   
</span><br>
<span class="quotelev2">&gt;&gt; In the end, just touching bml_r2.c was enough... it caused bml_r2.c to 
</span><br>
<span class="quotelev2">&gt;&gt; be recompiled and to see the changes in btl.h.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, question:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given that bml_rc.2 includes btl.h, wouldn't the proper make  
</span><br>
<span class="quotelev2">&gt;&gt; dependencies cause bml_rc.c to be recompiled whenever btl.h is  
</span><br>
<span class="quotelev2">&gt;&gt; touched?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, it appears that this is not happening and that strikes me as a 
</span><br>
<span class="quotelev2">&gt;&gt; problem -- for someone out there to fix.  :^)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5018.php">Ralf Wildenhues: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="4966.php">Jeff Squyres: "Re: [OMPI devel] make dependency problem?"</a>
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
