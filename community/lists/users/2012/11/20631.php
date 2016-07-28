<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  3 16:39:03 2012" -->
<!-- isoreceived="20121103203903" -->
<!-- sent="Sat, 3 Nov 2012 16:38:58 -0400" -->
<!-- isosent="20121103203858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released" -->
<!-- id="D9DEDDC1-27CD-4F7E-BA3B-756C0A86C6DC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50942B9D.5000103_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-03 16:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20632.php">Jens Glaser: "[OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20630.php">Adam DeConinck: "[OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>In reply to:</strong> <a href="20627.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20642.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Reply:</strong> <a href="20642.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Crud.  You are correct.
<br>
<p>The VERSION string for the f90 library was incorrectly updated to 4:0:1; it should have been updated to 4:0:3.
<br>
<p>I have fixed this for v1.6.4.  I'm *anticipating* that there aren't may people who will be bitten by this, so for the time being, at least, I'm publishing this workaround:
<br>
<p>1. Download Open MPI v1.6.3
<br>
2. Untar it, configure it
<br>
3. BEFORE you build it (but AFTER you ran configure!), edit ompi/mpi/f90/Makefile
<br>
4. Change line 1212 from
<br>
<p>libmpi_f90_so_version = 4:0:1
<br>
<p>to
<br>
<p>libmpi_f90_so_version = 4:0:3
<br>
<p>5. Then make the &quot;all&quot; and &quot;install&quot; targets as usual.
<br>
<p>If this workaround suffices for those affected, I'd prefer to release v1.6.4 with this fix after Supercomputing (i.e., early/mid December).  Please let me know.
<br>
<p><p><p>On Nov 2, 2012, at 4:22 PM, Orion Poplawski wrote:
<br>
<p><span class="quotelev1">&gt; On 10/30/2012 05:22 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to the next release in the stable release series: Open MPI version 1.6.3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Version 1.6.3 is a minor bugfix release. All users are encouraged to upgrade to v1.6.3 when possible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that v1.6.3 is ABI compatible with the entire v1.5.x and v1.6.x series, but is not ABI compatible with the v1.4.x series. See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for a description of Open MPI's release methodology.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that there was a soname bump for libmpi_f90.so from .1 to .3 so it's not strictly ABI compatible at least for Fortran code - unless the bump was a mistake?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder Office                  FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20632.php">Jens Glaser: "[OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20630.php">Adam DeConinck: "[OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>In reply to:</strong> <a href="20627.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20642.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Reply:</strong> <a href="20642.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
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
