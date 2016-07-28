<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 19:01:32 2009" -->
<!-- isoreceived="20090515230132" -->
<!-- sent="Fri, 15 May 2009 19:01:23 -0400" -->
<!-- isosent="20090515230123" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A0DF443.70709_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d21ea44c0905151520r1d365880h21b7fd4d1e8e4c09_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling problem with openmpi<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 19:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9357.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9355.php">Roman Martonak: "[OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9355.php">Roman Martonak: "[OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9357.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9357.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roman
<br>
<p>Just a guess.
<br>
Is this a domain decomposition code?
<br>
(I never heard about &quot;cpmd 32 waters&quot; before, sorry.)
<br>
Is it based on finite differences, finite volume, finite element?
<br>
<p>If it is, once the size of the subdomains becomes too small compared to
<br>
the size of the halo around them, the overhead required to calculate
<br>
your solution for the halo swamps the whole calculation,
<br>
and scaling degrades.
<br>
This is not an MPI scaling problem, this is intrinsic to the domain
<br>
decomposition technique.
<br>
<p>Typically this happens as the number of processors reach some high 
<br>
number (which depends on the size of the problem).
<br>
So, what you are seeing may not be a problem with OpenMPI scaling,
<br>
but just that your problem is not large enough to require the use of, 
<br>
say, 48 or 64 processors.
<br>
<p>For instance, imagine a 1D problem with a grid with 1024 points,
<br>
that require a 2 grid point overlap (halo) on the left and right
<br>
of any subdomain to be calculated in parallel (i.e. decomposing the 
<br>
domain in parts).
<br>
If you divide the domain across two processors only, each processor
<br>
has to work not on 1024/2=512 points, but on 512+2+2=516 points.
<br>
The calculation on the two processors gets an overhead of 2*(2+2)=8 grid
<br>
points,w.r.t. the same calculation done on a single processor.
<br>
This is an overhead of 8/1024=0.8% only, so using 2 processors
<br>
will speedup the calculation by a factor close to 2 (but slightly lower).
<br>
<p>However, if you divide the same problem across 64 subdomains (i.e 64 
<br>
processors), the size of each subdomain is 1024/64=16,
<br>
plus 2 halo grid point on each side, i.e. 20 grid points.
<br>
So the overhead is much higher now,  4/16=25%.
<br>
Dividing the problem across 64 processors will not speed it up by
<br>
a factor of 64, but by much less.
<br>
<p>Every domain decomposition program that we have here shows this
<br>
effect.  If we give them more processors they scale well, up
<br>
to a point (say 16 or 32 processors, for a reasonably sized problem). 
<br>
However, beyond that point the scaling slowly flattens out.
<br>
When you go and look at the grid size and the
<br>
large number of processors,
<br>
you realize that most of the effort is being done to calculate halos,
<br>
i.e. on overhead.
<br>
<p>On top of that, there is the overhead due to MPI communication, of
<br>
course, but it is likely that the halo overhead is the dominant factor.
<br>
<p>I would guess other classes of problems and parallel methods of solution
<br>
also have the same problem that domain decomposition shows.
<br>
<p>Is this perhaps what is going on with your test code?
<br>
Take a look at the code to see what it is doing,
<br>
and in particularly, what is the problem size.
<br>
See if it really makes sense to distribute it over 64 processors,
<br>
of if a smaller number would be the right choice.
<br>
<p>Also, if the program allows you to change the problem size,
<br>
try the test again with a larger problem size
<br>
(say, two or four times bigger),
<br>
and then go up to a large number of processors also.
<br>
With a larger problem size the scaling may be better too
<br>
(but the runtimes will grow as well).
<br>
<p><p>Finally, since you are using Infiniband, and I wonder if all the
<br>
nodes connect to each other with the same latency, or if some
<br>
pairs of nodes have higher latency to communicate.
<br>
On a single switch hopefully the latency is the same for all pairs of nodes.
<br>
However, if you connect two switches, for instance, nodes that
<br>
are on switch A will probably have a larger latency to talk
<br>
to nodes on switch B, I suppose.
<br>
<p>I hope it helps.
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
<p><p>Roman Martonak wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I observe very poor scaling with openmpi on HP blade system consisting
</span><br>
<span class="quotelev1">&gt; of 8 blades (each having 2 quad-core AMD Barcelona 2.2 GHz CPU) and
</span><br>
<span class="quotelev1">&gt; interconnected with Infiniband fabric. When running the standard cpmd
</span><br>
<span class="quotelev1">&gt; 32 waters test, I observe the following scaling (the numbers are
</span><br>
<span class="quotelev1">&gt; elapsed time)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.6:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using full blades (8 cores per blade)
</span><br>
<span class="quotelev1">&gt; np8            7 MINUTES 26.40 SECONDS
</span><br>
<span class="quotelev1">&gt; np16        4 MINUTES 19.91 SECONDS
</span><br>
<span class="quotelev1">&gt; np32        2 MINUTES 55.51 SECONDS
</span><br>
<span class="quotelev1">&gt; np48            2 MINUTES 38.18 SECONDS
</span><br>
<span class="quotelev1">&gt; np64            3 MINUTES 19.78 SECONDS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried also openmpi-1.2.8 and openmpi-1.3 and it is about the same,
</span><br>
<span class="quotelev1">&gt; openmpi-1.3 is somewhat better for 32 cores but in all cases there is
</span><br>
<span class="quotelev1">&gt; practically no scaling beyond 4 blades (32 cores) and running on 64
</span><br>
<span class="quotelev1">&gt; cores is a disaster. With Intel MPI, however, I get the following
</span><br>
<span class="quotelev1">&gt; numbers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel MPI-3.2.1.009
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using full blades (8 cores per blade)
</span><br>
<span class="quotelev1">&gt; np8    7 MINUTES 23.19 SECONDS
</span><br>
<span class="quotelev1">&gt; np16    4 MINUTES 22.17 SECONDS
</span><br>
<span class="quotelev1">&gt; np32    2 MINUTES 50.07 SECONDS
</span><br>
<span class="quotelev1">&gt; np48    1 MINUTES 42.87 SECONDS
</span><br>
<span class="quotelev1">&gt; np64    1 MINUTES 23.76 SECONDS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so there is reasonably good scaling up to 64 cores. I am running with
</span><br>
<span class="quotelev1">&gt; the option
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_alone 1, I have tried also -mca btl_openib_use_srq
</span><br>
<span class="quotelev1">&gt; 1 but it had only marginal effect. With mvapich I get similar scaling
</span><br>
<span class="quotelev1">&gt; as with Intel MPI. The system is running the Rocksclusters
</span><br>
<span class="quotelev1">&gt; distribution 5.1 with the mellanox ofed-1.4 roll. I would be grateful
</span><br>
<span class="quotelev1">&gt; if somebody could suggest me what could be the origin of the problem
</span><br>
<span class="quotelev1">&gt; and how to tune openmpi to get better scaling.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Roman
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
<li><strong>Next message:</strong> <a href="9357.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9355.php">Roman Martonak: "[OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9355.php">Roman Martonak: "[OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9357.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9357.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
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
