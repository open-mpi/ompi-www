<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 08:42:51 2009" -->
<!-- isoreceived="20090123134251" -->
<!-- sent="Fri, 23 Jan 2009 08:42:44 -0500" -->
<!-- isosent="20090123134244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="3D462F74-1E90-4FAA-B0A7-1FE5041F5E07_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.1.0901231245400.21855_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran 90 Interface<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 08:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5290.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 7:45 AM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD is set to a large integer (1140850688) in MPICH2 so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I  wonder if there is something in HDF5 and/or NetCDF4 that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't  like 0 for the communicator handle. At any rate, you have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given me  some ideas of things to check in the debugger tomorrow.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a  safe way to change what MPI_COMM_WORLD is set to in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No.  Open MPI's Fortran MPI_COMM_WORLD is pretty much hard-wired to  
</span><br>
<span class="quotelev2">&gt;&gt; 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a mistake.  But probably non-trivial to fix.
</span><br>
<p><p>Could you explain what you meant by that?  There is no &quot;fix&quot;; Open  
<br>
MPI's Fortran MPI_COMM_WORLD has always been 0.  More specifically,  
<br>
there is no coordination of the value of MPI_COMM_WORLD between MPI  
<br>
implementations, unless some choose to emulate MPICH (or MPICH2 --  
<br>
because they're different).
<br>
<p>I'm assuming what you're really referring to is the fact that there is  
<br>
no currently binary compatibility between different MPI  
<br>
implementations (forgive me if my assumption is wrong).  There's some  
<br>
debate about this in the MPI Forum right now, but there is a large  
<br>
impasse about creating an ABI.  Every time we ask, there's a small  
<br>
handful of vocal users who say &quot;yes, we want it,&quot; but the vast  
<br>
majority of users (in my experience) either don't care or are  
<br>
vehemently against the idea of an MPI ABI.
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
<li><strong>Next message:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5290.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5287.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
