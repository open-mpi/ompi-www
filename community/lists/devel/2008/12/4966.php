<?
$subject_val = "Re: [OMPI devel] make dependency problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 07:58:59 2008" -->
<!-- isoreceived="20081202125859" -->
<!-- sent="Tue, 2 Dec 2008 07:58:49 -0500" -->
<!-- isosent="20081202125849" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make dependency problem?" -->
<!-- id="83F7689D-31F0-4031-917D-CFCE0631F35E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4931D42D.9040201_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-02 07:58:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4967.php">Brad Benton: "[OMPI devel] Schedule for 1.3 Release Candidates and final Release"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4965.php">Eugene Loh: "[OMPI devel] make dependency problem?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4965.php">Eugene Loh: "[OMPI devel] make dependency problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5019.php">Ralf Wildenhues: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>Reply:</strong> <a href="5019.php">Ralf Wildenhues: "Re: [OMPI devel] make dependency problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird -- the exact opposite happens for me (if I touch btl.h, it  
<br>
automatically rebuilds oodles of stuff, to include bml_r2.c).
<br>
<p>I have dim recollections of Automake disabling dependency tracking by  
<br>
default on Solaris+Solaris compilers (I don't remember the exact issue  
<br>
-- perhaps it was before AM supported the dependency format of the  
<br>
Solaris compilers...?).  Have you tried configuring with --enable- 
<br>
dependency-tracking?
<br>
<p><p><p>On Nov 29, 2008, at 6:45 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I was playing with OMPI and I noticed that if I modified btl.h,  
</span><br>
<span class="quotelev1">&gt; bml_r2.c did not automatically get rebuilt, even though it includes  
</span><br>
<span class="quotelev1">&gt; btl.h.  This caused me all sorts of unnecessary debugging troubles.   
</span><br>
<span class="quotelev1">&gt; In the end, just touching bml_r2.c was enough... it caused bml_r2.c  
</span><br>
<span class="quotelev1">&gt; to be recompiled and to see the changes in btl.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that bml_rc.2 includes btl.h, wouldn't the proper make  
</span><br>
<span class="quotelev1">&gt; dependencies cause bml_rc.c to be recompiled whenever btl.h is  
</span><br>
<span class="quotelev1">&gt; touched?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, it appears that this is not happening and that strikes me as  
</span><br>
<span class="quotelev1">&gt; a problem -- for someone out there to fix.  :^)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4967.php">Brad Benton: "[OMPI devel] Schedule for 1.3 Release Candidates and final Release"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4965.php">Eugene Loh: "[OMPI devel] make dependency problem?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4965.php">Eugene Loh: "[OMPI devel] make dependency problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5019.php">Ralf Wildenhues: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>Reply:</strong> <a href="5019.php">Ralf Wildenhues: "Re: [OMPI devel] make dependency problem?"</a>
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
