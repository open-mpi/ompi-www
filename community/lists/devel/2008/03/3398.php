<?
$subject_val = "Re: [OMPI devel] Fwd: OpenMPI changes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 15:52:45 2008" -->
<!-- isoreceived="20080306205245" -->
<!-- sent="Thu, 6 Mar 2008 15:52:32 -0500" -->
<!-- isosent="20080306205232" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: OpenMPI changes" -->
<!-- id="2BCF3AD8-9E9D-419F-AB0D-5AB92D3D14BC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D5726FDC-9AC9-4203-9C4D-0B7E984F94C1_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: OpenMPI changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 15:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3399.php">Ralf Wildenhues: "[OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<li><strong>Previous message:</strong> <a href="3397.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<li><strong>In reply to:</strong> <a href="3379.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2008, at 1:50 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Looking back through the mailing list, I can only see two references
</span><br>
<span class="quotelev1">&gt; that seem relevant to this. One was titled &quot;Major reduction in ORTE&quot;
</span><br>
<span class="quotelev1">&gt; and does allude to the event model changes. The other &quot;OMPI/ORTE and
</span><br>
<span class="quotelev1">&gt; tools&quot; talks about &quot;alternative methods of interaction&quot;. Neither
</span><br>
<span class="quotelev1">&gt; mentions changes to the spawning and
</span><br>
<p>I thought that the subject &quot;major reduction in ORTE&quot; would have been  
<br>
an eyebrow-raiser.  I'm not trying to be snarky; my only point is that  
<br>
if you have a stake in using ORTE, it would probably be worthwhile to  
<br>
monitor what is happening and raise your hand / be part of the  
<br>
community to help shape its direction.  We all know that open source ! 
<br>
= free.
<br>
<p>Perhaps you and Brad can have lunch every once in a while to discuss  
<br>
ORTE.  :-)
<br>
<p><span class="quotelev1">&gt; I/O forwarding functionality
</span><br>
<span class="quotelev1">&gt; (that I can see),
</span><br>
<p>FWIW: nothing has changed with regards to I/O forwarding functionality  
<br>
or APIs (other than a big pile of bug fixes somewhere in the middle of  
<br>
the 1.2 series).  Ralph mentioned recently that it doesn't work beyond  
<br>
the model that mpirun uses (e.g., having multiple taps for the same  
<br>
stdout), but it *never* has.  We have some open bugs in trac about  
<br>
this, but no one has fixed them yet.
<br>
<p>If I ever get the time, I'd like to do *lots* of things with IOF, but  
<br>
I don't know when that will happen...
<br>
<p><span class="quotelev1">&gt; or that this would be the exclusive mechanism for
</span><br>
<span class="quotelev1">&gt; interaction. In the future (assuming there are more changes), it would
</span><br>
<span class="quotelev1">&gt; be helpful if there was at least some information about what specific
</span><br>
<span class="quotelev1">&gt; API's are being removed.
</span><br>
<p>I can't speak for Ralph, but I think if anyone had asked, I'm guessing  
<br>
that he would have been happy to have provided whatever information he  
<br>
had.  However, I'm not entirely sure that it was possible to know  
<br>
everything that was going to happen when first embarking on this &quot;ORTE  
<br>
reduction&quot; journey -- I seem to recall that questions and problems  
<br>
arose along the way that caused shifting of ORTE plans during the  
<br>
reduction / reorganization.
<br>
<p>I think there were *some* updates about this stuff on the mailing list  
<br>
and on the weekly teleconferences, but I wasn't aware that anyone  
<br>
outside of OMPI cared about the ORTE underneath OMPI -- so at least I  
<br>
never bothered to re-broadcast outside of our group...  :-\
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3399.php">Ralf Wildenhues: "[OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<li><strong>Previous message:</strong> <a href="3397.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<li><strong>In reply to:</strong> <a href="3379.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
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
