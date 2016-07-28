<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 15:06:43 2010" -->
<!-- isoreceived="20100312200643" -->
<!-- sent="Fri, 12 Mar 2010 15:06:33 -0500" -->
<!-- isosent="20100312200633" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="4B9A9EC9.8070503_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF850B82C2_at_HVXMSPA.us.lmco.com" -->
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
<strong>Date:</strong> 2010-03-12 15:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12334.php">vaibhav dutt: "[OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12332.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12332.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12338.php">Prentice Bisbal: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12338.php">Prentice Bisbal: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12344.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Cole, Jed
<br>
<p>I don't have much direct experience with PETSc.
<br>
I mostly troubleshooted other people's PETSc programs,
<br>
and observed their performance.
<br>
What I noticed is:
<br>
1) PETSc's learning curve is as steep if not steeper than MPI, and
<br>
2) PETSc codes seem to be slower (or have more overhead)
<br>
than codes written directly in MPI.
<br>
Jed seems to have a different perception of PETSc, though,
<br>
and is more enthusiastic about it.
<br>
<p>Admittedly, I don't have any direct comparison
<br>
(i.e. the same exact code implemented via PETSc and via MPI),
<br>
to support what I said above.
<br>
<p>However, it is true that PETSc comes with a big toolbox,
<br>
and a large number of solvers.
<br>
PETSc is also very flexible, you can attach a variety of other
<br>
packages to it (most linear algebra stuff, sparse matrices, etc, etc).
<br>
<p>The PETSc fans here love its ability to
<br>
prototype complex algorithms in relatively little time.
<br>
I don't know if it should be used for production code, though,
<br>
and I don't even know if your code is meant to run efficiently
<br>
in production mode.
<br>
<p>OTOH, if you have a clean and good serial code already developed,
<br>
I think it won't be a big deal to parallelize it directly
<br>
with MPI, assuming that the core algorithm (your Gauss-Seidel solver)
<br>
fits the remaining code in a well structured way.
<br>
<p>As per the previous discussion on this thread,
<br>
if you don't plan to use a very large number of processors,
<br>
you can parallelize in X &quot;books&quot;
<br>
(see the IU and LLNL diffusion equation example I sent you),
<br>
which is probably the simplest approach,
<br>
and still get a decent performance.
<br>
(For many processors / small subdomains, use XY &quot;pencils instead.)
<br>
<p>With X &quot;book&quot; subdomains you won't need to create MPI types.
<br>
You can use the very array sections (pointer and size, assuming
<br>
they sit in contiguous memory) in the MPI functions.
<br>
<p>To read/write initial/final data you can use a master/slave scheme,
<br>
where process rank 0 (master) reads the whole thing,
<br>
then use MPI_Scatter[v] to distribute the data
<br>
to the other process ranks.
<br>
(Rank 0 can still do part of
<br>
the computational work also.)
<br>
At the end, all processes use MPI_Gather[v] to return the
<br>
results to rank 0, who writes the results to disk.
<br>
<p>At each time step you exchange halo/ghost sections across
<br>
neighbor subdomains, using MPI_Send/MPI_Recv,
<br>
or MPI_SendRecv.
<br>
Even better if you use non-blocking calls
<br>
MPI_ISend/MPI_[I]Recv/MPI_Wait[all].
<br>
Read about the advantages of non-blocking communication
<br>
in the &quot;MPI The Complete Reference, Vol 1&quot; book that I suggested
<br>
to you.
<br>
<p>You can do the bookkeeping of &quot;which subdomain/process_rank is my
<br>
left neighbor?&quot; etc, yourself, if you create domain neighbor
<br>
tables when the program initializes.
<br>
Alternatively, and more elegantly, you can use the MPI
<br>
Cartesian topology functions to take care of this for you.
<br>
<p>The description above is probably a very simple minded approach to
<br>
parallelization.
<br>
However, it should work with a decent performance,
<br>
and won't take too much effort or time to develop.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
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
<p>Cole, Derek E wrote:
<br>
<span class="quotelev1">&gt; I actually am only working on this code because it is what 
</span><br>
someone wants. I would have probably chosen a
<br>
different solver as  well.
<br>
We do have some vector machines though that this will probably run on.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did a lot of memory work already in the serial code to speed 
</span><br>
it up pretty significantly.
<br>
I also have to a little careful of what other
<br>
libraries are introduced.
<br>
I am reading up on PETSc to see how flexible it is.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the responses
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jed Brown [mailto:five9a2_at_[hidden]] On Behalf Of Jed Brown
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, March 11, 2010 1:00 PM
</span><br>
<span class="quotelev1">&gt; To: Cole, Derek E; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 3D domain decomposition with MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 11 Mar 2010 12:44:01 -0500, &quot;Cole, Derek E&quot; &lt;derek.e.cole_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am replying to this via the daily-digest message I got. Sorry it 
</span><br>
<span class="quotelev2">&gt;&gt; wasn't sooner... I didn't realize I was getting replies until I got 
</span><br>
<span class="quotelev2">&gt;&gt; the digest. Does anyone know how to change it so I get the emails as 
</span><br>
<span class="quotelev2">&gt;&gt; you all send them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log in at the bottom and edit options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am doing a Red-black Gauss-Seidel algorithm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that red-black Guss-Seidel is a terrible algorithm on cache-based hardware, it only makes sense on vector hardware.  The reason for this is that the whole point is to approximate a dense action (the inverse of a matrix), but the red-black ordering causes this action to be purely local.  A sequential ordering, on the other hand, is like a dense lower-triangular operation, which tends to be much closer to a real inverse.  In parallel, you do these sequential sweeps on each process, and communicate when you're done.  The memory performance will be twice as good, and the algorithm will converge in fewer iterations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The ghost points are what I was trying to figure for moving this into 
</span><br>
<span class="quotelev2">&gt;&gt; the 3rd dimension. Thanks for adding some concrete-ness to my idea of 
</span><br>
<span class="quotelev2">&gt;&gt; exactly how much overhead is involved. The test domains I am computing 
</span><br>
<span class="quotelev2">&gt;&gt; on are on the order of 100*50*50 or so. This is why I am trying to 
</span><br>
<span class="quotelev2">&gt;&gt; limit the overhead of the MPI communication. I am in the process of 
</span><br>
<span class="quotelev2">&gt;&gt; finding out exactly how big the domains may become, so that I can 
</span><br>
<span class="quotelev2">&gt;&gt; adjust the algorithm accordingly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The difficulty is for small subdomains.  If you have large subdomains, then parallel overhead will almost always be small.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I understand what you mean by pencils versus books, I don't think 
</span><br>
<span class="quotelev2">&gt;&gt; that will work for these types of calculations will it? Maybe a better 
</span><br>
<span class="quotelev2">&gt;&gt; explanation of what you mean by a pencil versus a book. If I was going 
</span><br>
<span class="quotelev2">&gt;&gt; to solve a sub-matrix of the XY plane for all Z-values, what is that 
</span><br>
<span class="quotelev2">&gt;&gt; considered?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would be a &quot;book&quot; or &quot;slab&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still recommend using PETSc rather than reproducing standard code to call MPI directly for this, it will handle all the decomposition and updates, and has the advantage that you'll be able to use much better algorithms than Gauss-Seidel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
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
<li><strong>Next message:</strong> <a href="12334.php">vaibhav dutt: "[OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12332.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12332.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12338.php">Prentice Bisbal: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12338.php">Prentice Bisbal: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12344.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
