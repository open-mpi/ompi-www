<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 17:52:00 2010" -->
<!-- isoreceived="20100310225200" -->
<!-- sent="Wed, 10 Mar 2010 17:51:50 -0500" -->
<!-- isosent="20100310225150" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="4B982286.8000204_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF85022818_at_HVXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 3D domain decomposition with MPI<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 17:51:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12307.php">Terry Frankcombe: "Re: [OMPI users] Problem with private variables in modules"</a>
<li><strong>Previous message:</strong> <a href="12305.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Derek
<br>
<p>Typically in the domain decomposition codes we have here
<br>
(atmosphere, oceans, climate)
<br>
there is an overlap across the boundaries of subdomains.
<br>
<p>Unless your computation is so &quot;embarrassingly parallel&quot;  that
<br>
each process can operate from start to end totally independent from
<br>
the others, you should expect such an overlap,
<br>
but you didn't tell what computation you want to do.
<br>
<p>The width of the overlap depends on the computation being done.
<br>
For instance, in a two-point stencil finite difference PDE solver
<br>
the overlap may have width one, but for broader FD stencils you
<br>
will need broader overlaps.
<br>
<p>The redundant calculations of overlap points on neighbor subdomains
<br>
in general cannot be avoided.
<br>
Exchanging the overlap data across neighbor subdomain processes
<br>
cannot be avoided either.
<br>
However, **full overlap slices** are exchanged after each computational
<br>
step (in our case here a time step).
<br>
It is not a point-by-point exchange as you suggested.
<br>
Overlap exchange does limit the usefulness/efficiency
<br>
of using too many subdomains (e.g. if your overlap-to-useful-data
<br>
ratio gets close to 100%).
<br>
However, is not as detrimental as you imagined based on your 
<br>
point-by-point exchange conjecture.
<br>
If your domain is 100x100x100 and you split in subdomain slices
<br>
across 5 processes, with a 1-point overlap (on each side)
<br>
you will have a 2x5/100 = 10% waste due to overlap calculations
<br>
(plus the MPI communication cost/time),
<br>
but your problem is still being solved in (almost) 1/5 of the time
<br>
it would take in serial mode.
<br>
<p>Since your array seems to fit nicely in Cartesian coordinates,
<br>
you could use the MPI functions that create and explore
<br>
the Cartesian domain topology.
<br>
For details, see Chapter 6, section 6.5 of &quot;MPI, The complete Reference,
<br>
Volume 1, The MPI Core, 2nd. Ed.,
<br>
by M. Snir, S. Otto, S. Huss-Lederman, D. Walker, and J. Dongarra,
<br>
MIT Press, 1998.&quot;
<br>
<p>Also, this tutorial from Indiana University solves the 2D diffusion
<br>
equation (first serial, then parallel with MPI) and may help.
<br>
Unfortunately they don't use the MPI Cartesian functions, though:
<br>
<p><a href="http://rc.uits.iu.edu/hpa/mpi_tutorial/s2_diffusion_math_limited.html">http://rc.uits.iu.edu/hpa/mpi_tutorial/s2_diffusion_math_limited.html</a>
<br>
<p>I believe there are other examples in the web,
<br>
check the LLNL site:
<br>
<a href="https://computing.llnl.gov/tutorials/mpi/">https://computing.llnl.gov/tutorials/mpi/</a>
<br>
<p>The book
<br>
&quot;Parallel Programming with MPI, by Peter Pacheco,
<br>
Morgan Kauffman, 1997&quot; has worked out examples also.
<br>
An abridged version is available here
<br>
<a href="http://www.cs.usfca.edu/~peter/ppmpi/">http://www.cs.usfca.edu/~peter/ppmpi/</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Cole, Derek E wrote:
<br>
<span class="quotelev1">&gt; Hi all. I am relatively new to MPI, and so this may be covered somewhere 
</span><br>
<span class="quotelev1">&gt; else, but I can&#146;t seem to find any links to tutorials mentioning any 
</span><br>
<span class="quotelev1">&gt; specifics, so perhaps someone here can help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In C, I have a 3D array that I have dynamically allocated and access 
</span><br>
<span class="quotelev1">&gt; like Array[x][y][z]. I was hoping to calculate a subsection for each 
</span><br>
<span class="quotelev1">&gt; processor to work on,  of size nx in the x dimension, ny in the y 
</span><br>
<span class="quotelev1">&gt; dimension, and the full Z dimension. Starting at Array[sx][sy][0] and 
</span><br>
<span class="quotelev1">&gt; going to Array[ex][ey][z] where ey-sy=ny.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the best way to do this? I am able to calculate the neighboring 
</span><br>
<span class="quotelev1">&gt; processors and assign a sub-section of the XY dimensions to each 
</span><br>
<span class="quotelev1">&gt; processor, however I am having problems with sharing the border 
</span><br>
<span class="quotelev1">&gt; information of the arrays with the other processors. I don&#146;t really want 
</span><br>
<span class="quotelev1">&gt; to have to do a MPI_Send for each of the 0..Z slices&#146;s border 
</span><br>
<span class="quotelev1">&gt; information. I&#146;d kind of like to process all of the Z, then share the 
</span><br>
<span class="quotelev1">&gt; full &#147;face&#148; of the border information with the neighbor processor. For 
</span><br>
<span class="quotelev1">&gt; example, if process 1 was the right neighbor of process zero, I&#146;d want 
</span><br>
<span class="quotelev1">&gt; process zero to send Subarray[0..nx][ny][0..Z](the right most face) to 
</span><br>
<span class="quotelev1">&gt; processor 1&#146;s left-most face..assuming the X-Y plane was your screen, 
</span><br>
<span class="quotelev1">&gt; and the Z dimension extended into the screen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone has any information that talks about how to use the MPI data 
</span><br>
<span class="quotelev1">&gt; types, or some other method, or wants to talk about how this might be 
</span><br>
<span class="quotelev1">&gt; done, I&#146;m all ears.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know it is hard to talk about without pictures, so if you all like, I 
</span><br>
<span class="quotelev1">&gt; can post a picture explaning what I want to do. Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Derek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12307.php">Terry Frankcombe: "Re: [OMPI users] Problem with private variables in modules"</a>
<li><strong>Previous message:</strong> <a href="12305.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12304.php">Cole, Derek E: "[OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
