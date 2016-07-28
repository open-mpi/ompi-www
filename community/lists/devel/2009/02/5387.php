<?
$subject_val = "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  7 15:30:07 2009" -->
<!-- isoreceived="20090207203007" -->
<!-- sent="Sat, 7 Feb 2009 15:30:01 -0500" -->
<!-- isosent="20090207203001" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV" -->
<!-- id="440F9158-CA39-4517-A31F-574F05A70AF1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0902071219170.5259_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-07 15:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5388.php">N.M. Maclaren: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5386.php">Brian W. Barrett: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>In reply to:</strong> <a href="5386.php">Brian W. Barrett: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5388.php">N.M. Maclaren: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5388.php">N.M. Maclaren: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2009, at 12:23 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev2">&gt;&gt; End result: I guess I'm a little surprised that the difference is  
</span><br>
<span class="quotelev2">&gt;&gt; that clear -- does a function call really take 10ns?  I'm also  
</span><br>
<span class="quotelev2">&gt;&gt; surprised that the layered C version has significantly more jitter  
</span><br>
<span class="quotelev2">&gt;&gt; than the non-layered version; I can't really explain that.  I'd  
</span><br>
<span class="quotelev2">&gt;&gt; welcome anyone else replicating experiment and/or eyeballing my  
</span><br>
<span class="quotelev2">&gt;&gt; code to make sure I didn't bork something up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is significantly higher than I would have expected for a single  
</span><br>
<span class="quotelev1">&gt; function call.  When I did all the component tests a couple years  
</span><br>
<span class="quotelev1">&gt; ago, a function call into a shared library was about 5ns on an Intel  
</span><br>
<span class="quotelev1">&gt; Xeon (pre-Core 2 design) and about 2.5 on an AMD Opteron.
</span><br>
<p><p>Good; I'm not crazy for thinking that this is a little too obvious --  
<br>
it smells like I did something wrong.  Could someone eyeball these  
<br>
files and see if I missed anything obvious:
<br>
<p><a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/fortran/file/tip/ompi/mpi/f77/send_f.c">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/fortran/file/tip/ompi/mpi/f77/send_f.c</a>
<br>
<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/fortran/file/tip/ompi/mpi/f77/recv_f.c">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/fortran/file/tip/ompi/mpi/f77/recv_f.c</a>
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
<li><strong>Next message:</strong> <a href="5388.php">N.M. Maclaren: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5386.php">Brian W. Barrett: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>In reply to:</strong> <a href="5386.php">Brian W. Barrett: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5388.php">N.M. Maclaren: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5388.php">N.M. Maclaren: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV"</a>
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
