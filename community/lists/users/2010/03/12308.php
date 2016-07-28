<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 18:50:47 2010" -->
<!-- isoreceived="20100310235047" -->
<!-- sent="Wed, 10 Mar 2010 18:50:37 -0500" -->
<!-- isosent="20100310235037" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="4B98304D.3060903_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4B982286.8000204_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-03-10 18:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12307.php">Terry Frankcombe: "Re: [OMPI users] Problem with private variables in modules"</a>
<li><strong>In reply to:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Derek
<br>
<p>PS - The same book &quot;MPI the complete reference&quot; has a thorough
<br>
description of MPI types in Chapter 3.
<br>
You may want to create and use a MPI_TYPE_VECTOR with the
<br>
appropriate count, blocklength, and stride, to exchange all the
<br>
&quot;0..Z&quot; overlap slices in a single swoop.
<br>
(If I understood right, this is your main concern.)
<br>
<p>However, in my experience, huge messages
<br>
(i.e. tens or hundreds of megabytes) can be a problem.
<br>
If your array overlap section set is huge,
<br>
it may be better to send the slices one by one in a loop.
<br>
<p>Also, I wonder why you want to decompose on both X and Y (&quot;pencils&quot;),
<br>
and not only X (&quot;books&quot;),
<br>
which may give you a smaller/simpler domain decomposition
<br>
and communication footprint.
<br>
Whether you can or cannot do this way depends on your
<br>
computation, which I don't know about.
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
<p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Derek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Typically in the domain decomposition codes we have here
</span><br>
<span class="quotelev1">&gt; (atmosphere, oceans, climate)
</span><br>
<span class="quotelev1">&gt; there is an overlap across the boundaries of subdomains.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unless your computation is so &quot;embarrassingly parallel&quot;  that
</span><br>
<span class="quotelev1">&gt; each process can operate from start to end totally independent from
</span><br>
<span class="quotelev1">&gt; the others, you should expect such an overlap,
</span><br>
<span class="quotelev1">&gt; but you didn't tell what computation you want to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The width of the overlap depends on the computation being done.
</span><br>
<span class="quotelev1">&gt; For instance, in a two-point stencil finite difference PDE solver
</span><br>
<span class="quotelev1">&gt; the overlap may have width one, but for broader FD stencils you
</span><br>
<span class="quotelev1">&gt; will need broader overlaps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The redundant calculations of overlap points on neighbor subdomains
</span><br>
<span class="quotelev1">&gt; in general cannot be avoided.
</span><br>
<span class="quotelev1">&gt; Exchanging the overlap data across neighbor subdomain processes
</span><br>
<span class="quotelev1">&gt; cannot be avoided either.
</span><br>
<span class="quotelev1">&gt; However, **full overlap slices** are exchanged after each computational
</span><br>
<span class="quotelev1">&gt; step (in our case here a time step).
</span><br>
<span class="quotelev1">&gt; It is not a point-by-point exchange as you suggested.
</span><br>
<span class="quotelev1">&gt; Overlap exchange does limit the usefulness/efficiency
</span><br>
<span class="quotelev1">&gt; of using too many subdomains (e.g. if your overlap-to-useful-data
</span><br>
<span class="quotelev1">&gt; ratio gets close to 100%).
</span><br>
<span class="quotelev1">&gt; However, is not as detrimental as you imagined based on your 
</span><br>
<span class="quotelev1">&gt; point-by-point exchange conjecture.
</span><br>
<span class="quotelev1">&gt; If your domain is 100x100x100 and you split in subdomain slices
</span><br>
<span class="quotelev1">&gt; across 5 processes, with a 1-point overlap (on each side)
</span><br>
<span class="quotelev1">&gt; you will have a 2x5/100 = 10% waste due to overlap calculations
</span><br>
<span class="quotelev1">&gt; (plus the MPI communication cost/time),
</span><br>
<span class="quotelev1">&gt; but your problem is still being solved in (almost) 1/5 of the time
</span><br>
<span class="quotelev1">&gt; it would take in serial mode.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since your array seems to fit nicely in Cartesian coordinates,
</span><br>
<span class="quotelev1">&gt; you could use the MPI functions that create and explore
</span><br>
<span class="quotelev1">&gt; the Cartesian domain topology.
</span><br>
<span class="quotelev1">&gt; For details, see Chapter 6, section 6.5 of &quot;MPI, The complete Reference,
</span><br>
<span class="quotelev1">&gt; Volume 1, The MPI Core, 2nd. Ed.,
</span><br>
<span class="quotelev1">&gt; by M. Snir, S. Otto, S. Huss-Lederman, D. Walker, and J. Dongarra,
</span><br>
<span class="quotelev1">&gt; MIT Press, 1998.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, this tutorial from Indiana University solves the 2D diffusion
</span><br>
<span class="quotelev1">&gt; equation (first serial, then parallel with MPI) and may help.
</span><br>
<span class="quotelev1">&gt; Unfortunately they don't use the MPI Cartesian functions, though:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://rc.uits.iu.edu/hpa/mpi_tutorial/s2_diffusion_math_limited.html">http://rc.uits.iu.edu/hpa/mpi_tutorial/s2_diffusion_math_limited.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe there are other examples in the web,
</span><br>
<span class="quotelev1">&gt; check the LLNL site:
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/mpi/">https://computing.llnl.gov/tutorials/mpi/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The book
</span><br>
<span class="quotelev1">&gt; &quot;Parallel Programming with MPI, by Peter Pacheco,
</span><br>
<span class="quotelev1">&gt; Morgan Kauffman, 1997&quot; has worked out examples also.
</span><br>
<span class="quotelev1">&gt; An abridged version is available here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.usfca.edu/~peter/ppmpi/">http://www.cs.usfca.edu/~peter/ppmpi/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cole, Derek E wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all. I am relatively new to MPI, and so this may be covered 
</span><br>
<span class="quotelev2">&gt;&gt; somewhere else, but I can&#146;t seem to find any links to tutorials 
</span><br>
<span class="quotelev2">&gt;&gt; mentioning any specifics, so perhaps someone here can help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In C, I have a 3D array that I have dynamically allocated and access 
</span><br>
<span class="quotelev2">&gt;&gt; like Array[x][y][z]. I was hoping to calculate a subsection for each 
</span><br>
<span class="quotelev2">&gt;&gt; processor to work on,  of size nx in the x dimension, ny in the y 
</span><br>
<span class="quotelev2">&gt;&gt; dimension, and the full Z dimension. Starting at Array[sx][sy][0] and 
</span><br>
<span class="quotelev2">&gt;&gt; going to Array[ex][ey][z] where ey-sy=ny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the best way to do this? I am able to calculate the 
</span><br>
<span class="quotelev2">&gt;&gt; neighboring processors and assign a sub-section of the XY dimensions 
</span><br>
<span class="quotelev2">&gt;&gt; to each processor, however I am having problems with sharing the 
</span><br>
<span class="quotelev2">&gt;&gt; border information of the arrays with the other processors. I don&#146;t 
</span><br>
<span class="quotelev2">&gt;&gt; really want to have to do a MPI_Send for each of the 0..Z slices&#146;s 
</span><br>
<span class="quotelev2">&gt;&gt; border information. I&#146;d kind of like to process all of the Z, then 
</span><br>
<span class="quotelev2">&gt;&gt; share the full &#147;face&#148; of the border information with the neighbor 
</span><br>
<span class="quotelev2">&gt;&gt; processor. For example, if process 1 was the right neighbor of process 
</span><br>
<span class="quotelev2">&gt;&gt; zero, I&#146;d want process zero to send Subarray[0..nx][ny][0..Z](the 
</span><br>
<span class="quotelev2">&gt;&gt; right most face) to processor 1&#146;s left-most face..assuming the X-Y 
</span><br>
<span class="quotelev2">&gt;&gt; plane was your screen, and the Z dimension extended into the screen.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If anyone has any information that talks about how to use the MPI data 
</span><br>
<span class="quotelev2">&gt;&gt; types, or some other method, or wants to talk about how this might be 
</span><br>
<span class="quotelev2">&gt;&gt; done, I&#146;m all ears.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know it is hard to talk about without pictures, so if you all like, 
</span><br>
<span class="quotelev2">&gt;&gt; I can post a picture explaning what I want to do. Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Derek
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12307.php">Terry Frankcombe: "Re: [OMPI users] Problem with private variables in modules"</a>
<li><strong>In reply to:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
