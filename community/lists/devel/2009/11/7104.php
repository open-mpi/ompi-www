<?
$subject_val = "Re: [OMPI devel] RFC: Revamped topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 10:03:41 2009" -->
<!-- isoreceived="20091109150341" -->
<!-- sent="Mon, 9 Nov 2009 10:03:36 -0500" -->
<!-- isosent="20091109150336" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Revamped topo framework" -->
<!-- id="2E771D19-1786-4191-9792-4259A26C7D52_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="58BA9438-2222-41A1-9CF2-1E8CD575AEBB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Revamped topo framework<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 10:03:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7105.php">Christian Bendele: "[OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Previous message:</strong> <a href="7103.php">Graham, Richard L.: "[OMPI devel] Mpi_wait()"</a>
<li><strong>In reply to:</strong> <a href="7089.php">Jeff Squyres: "[OMPI devel] RFC: Revamped topo framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As an FYI on this RFC, the implementation of the new MPI-2.2 topology  
<br>
functions is taking a little longer than expected.
<br>
<p>Especially with the Forum meeting later this week and SC09 next week,  
<br>
it may be a little time before I completely finish it and commit it  
<br>
back to the trunk (I mention this because the RFC times out today).
<br>
<p><p><p>On Nov 4, 2009, at 9:13 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Revamp the topo framework to be more consistent with the rest  
</span><br>
<span class="quotelev1">&gt; of the code base
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: The code was ancient, inconsistent with the rest of the code  
</span><br>
<span class="quotelev1">&gt; base, and had some latent bugs.  It would actually have been  
</span><br>
<span class="quotelev1">&gt; impossible to have a 2nd topo component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: Now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mca/topo/*, ompi/debuggers/*, ompi/communicator/*, ompi/ 
</span><br>
<span class="quotelev1">&gt; mpi/c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB Monday, 9 Nov 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As discussed a few days ago on this list, I revamped the OMPI topo  
</span><br>
<span class="quotelev1">&gt; framework to make it more modern / like all the other frameworks (it  
</span><br>
<span class="quotelev1">&gt; was written way back near the very beginning of this project and has  
</span><br>
<span class="quotelev1">&gt; barely been modified since).  I fixed some latent bugs (which  
</span><br>
<span class="quotelev1">&gt; weren't evident because we only have the 1 topo component -- unity)  
</span><br>
<span class="quotelev1">&gt; and made the selection scheme much more consistent with the rest of  
</span><br>
<span class="quotelev1">&gt; the code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code can be found here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://bitbucket.org/jsquyres/ompi-topo-fixes/">http://bitbucket.org/jsquyres/ompi-topo-fixes/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a patch against the SVN trunk, r22197.  If no one has  
</span><br>
<span class="quotelev1">&gt; any objections / suggestions / comments, I plan to commit this work  
</span><br>
<span class="quotelev1">&gt; by COB next Monday, 9 Nov 2009.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This RFC has a short timeout because I expect this to not be  
</span><br>
<span class="quotelev1">&gt; controversial and I already mentioned this on the list a few days ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;topo-revamp.patch&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7105.php">Christian Bendele: "[OMPI devel] opal_convertor / ompi_convertor"</a>
<li><strong>Previous message:</strong> <a href="7103.php">Graham, Richard L.: "[OMPI devel] Mpi_wait()"</a>
<li><strong>In reply to:</strong> <a href="7089.php">Jeff Squyres: "[OMPI devel] RFC: Revamped topo framework"</a>
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
