<?
$subject_val = "Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 19:54:50 2009" -->
<!-- isoreceived="20091001235450" -->
<!-- sent="Thu, 1 Oct 2009 19:54:43 -0400" -->
<!-- isosent="20091001235443" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew" -->
<!-- id="5ECA85CF-402D-4F2F-8F5B-CD36964DEE86_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1254425256.7098.9.camel_at_y-boda.ydc.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 19:54:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10869.php">Eugene Loh: "Re: [OMPI users] Profiling OpenMPI routines"</a>
<li><strong>Previous message:</strong> <a href="10867.php">Aniruddha Marathe: "[OMPI users] Profiling OpenMPI routines"</a>
<li><strong>In reply to:</strong> <a href="10866.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 1, 2009, at 3:27 PM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; Yes, but perhaps you need to verify that posix_memalign is also
</span><br>
<span class="quotelev1">&gt; intercepted?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Er... right.  Of course.  :-)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/22045">https://svn.open-mpi.org/trac/ompi/changeset/22045</a>
<br>
<p><span class="quotelev1">&gt; I commented on memalign being obsolete since there are a couple of  
</span><br>
<span class="quotelev1">&gt; uses
</span><br>
<span class="quotelev1">&gt; of it in the rest of the openmpi code apart from that particular case.
</span><br>
<span class="quotelev1">&gt; They should probably be changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Some of those are in ROMIO; we don't really want to change those -- it  
<br>
just makes it harder to import new versions (speaking of which, we're  
<br>
due for a ROMIO refresh sometime in the 1.5 series).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10869.php">Eugene Loh: "Re: [OMPI users] Profiling OpenMPI routines"</a>
<li><strong>Previous message:</strong> <a href="10867.php">Aniruddha Marathe: "[OMPI users] Profiling OpenMPI routines"</a>
<li><strong>In reply to:</strong> <a href="10866.php">&#197;ke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesforTotalVIew"</a>
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
