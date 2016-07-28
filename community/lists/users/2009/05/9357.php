<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 20:05:10 2009" -->
<!-- isoreceived="20090516000510" -->
<!-- sent="Fri, 15 May 2009 20:05:00 -0400" -->
<!-- isosent="20090516000500" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A0E032C.2020009_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A0DF443.70709_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2009-05-15 20:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9358.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9358.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9358.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9359.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roman
<br>
<p>I googled out and found that CPMD is a molecular dynamics program.
<br>
(What would be of civilization without Google?)
<br>
Unfortunately I kind of wiped off from my mind
<br>
Schrodinger's equation, Quantum Mechanics,
<br>
and the Born approximation,
<br>
which I learned probably before you were born.
<br>
<p>I couldn't find any short description of the CPMD algorithm,
<br>
or a good diagram with the mesh, problem size, whatever that might
<br>
clarify how the algorithm works.
<br>
Hence, it is still hard for me to tell what type of scaling of CPMD
<br>
to expect.
<br>
There must be something in the manual, if you read it.
<br>
<p>However, they do mention mesh size, problem size, etc,
<br>
several times, and if you dig out, you'll find the parameters
<br>
that control scaling.
<br>
The topmost parameter that should control scaling is probably the
<br>
problem size or mesh size, but there may be other things,
<br>
such as their controlling variables &quot;taskgroups&quot;,
<br>
&quot;blocksize states&quot;, etc.
<br>
Not knowing the algorithm I can only guess.
<br>
<p>Anyway, the CPMD manual has
<br>
some recommendations on how to divide the task
<br>
across processors in a meaningful (and efficient) way,
<br>
which you should read:
<br>
<p>CPMD on Parallel Computers
<br>
<p><a href="http://www.cpmd.org/manual/node52.html">http://www.cpmd.org/manual/node52.html</a>
<br>
<p>Paralellizing CPMD with MPI:
<br>
<p><a href="http://www.cpmd.org/manual/node53.html">http://www.cpmd.org/manual/node53.html</a>
<br>
<p>For some reason, all the &quot;CPMD 32 water&quot; benchmarks on their
<br>
web page stop at 32 processors (except for one with 128 processors ran 
<br>
on a Cray-TE-600,
<br>
which is a different beast than a beowulf cluster).
<br>
<p>I suggest that you read the &quot;Parallel Performance&quot; section and figures,
<br>
as some sentences clearly indicate that some problem sizes are not
<br>
large enough to require more than a few tens of processors:
<br>
<p><a href="http://www.theochem.ruhr-uni-bochum.de/~axel.kohlmeyer/cpmd-bench.html">http://www.theochem.ruhr-uni-bochum.de/~axel.kohlmeyer/cpmd-bench.html</a>
<br>
<a href="http://www.theochem.ruhr-uni-bochum.de/~axel.kohlmeyer/cpmd-bench.html#parallel">http://www.theochem.ruhr-uni-bochum.de/~axel.kohlmeyer/cpmd-bench.html#parallel</a>
<br>
<p>Is this perhaps because the size of the problem doesn't justify using
<br>
more than 32 processors?
<br>
What is the meaning of the &quot;32&quot; on &quot;CPMD 32 water&quot;?
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
1=
<br>
Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Roman
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just a guess.
</span><br>
<span class="quotelev1">&gt; Is this a domain decomposition code?
</span><br>
<span class="quotelev1">&gt; (I never heard about &quot;cpmd 32 waters&quot; before, sorry.)
</span><br>
<span class="quotelev1">&gt; Is it based on finite differences, finite volume, finite element?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it is, once the size of the subdomains becomes too small compared to
</span><br>
<span class="quotelev1">&gt; the size of the halo around them, the overhead required to calculate
</span><br>
<span class="quotelev1">&gt; your solution for the halo swamps the whole calculation,
</span><br>
<span class="quotelev1">&gt; and scaling degrades.
</span><br>
<span class="quotelev1">&gt; This is not an MPI scaling problem, this is intrinsic to the domain
</span><br>
<span class="quotelev1">&gt; decomposition technique.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Typically this happens as the number of processors reach some high 
</span><br>
<span class="quotelev1">&gt; number (which depends on the size of the problem).
</span><br>
<span class="quotelev1">&gt; So, what you are seeing may not be a problem with OpenMPI scaling,
</span><br>
<span class="quotelev1">&gt; but just that your problem is not large enough to require the use of, 
</span><br>
<span class="quotelev1">&gt; say, 48 or 64 processors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For instance, imagine a 1D problem with a grid with 1024 points,
</span><br>
<span class="quotelev1">&gt; that require a 2 grid point overlap (halo) on the left and right
</span><br>
<span class="quotelev1">&gt; of any subdomain to be calculated in parallel (i.e. decomposing the 
</span><br>
<span class="quotelev1">&gt; domain in parts).
</span><br>
<span class="quotelev1">&gt; If you divide the domain across two processors only, each processor
</span><br>
<span class="quotelev1">&gt; has to work not on 1024/2=512 points, but on 512+2+2=516 points.
</span><br>
<span class="quotelev1">&gt; The calculation on the two processors gets an overhead of 2*(2+2)=8 grid
</span><br>
<span class="quotelev1">&gt; points,w.r.t. the same calculation done on a single processor.
</span><br>
<span class="quotelev1">&gt; This is an overhead of 8/1024=0.8% only, so using 2 processors
</span><br>
<span class="quotelev1">&gt; will speedup the calculation by a factor close to 2 (but slightly lower).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if you divide the same problem across 64 subdomains (i.e 64 
</span><br>
<span class="quotelev1">&gt; processors), the size of each subdomain is 1024/64=16,
</span><br>
<span class="quotelev1">&gt; plus 2 halo grid point on each side, i.e. 20 grid points.
</span><br>
<span class="quotelev1">&gt; So the overhead is much higher now,  4/16=25%.
</span><br>
<span class="quotelev1">&gt; Dividing the problem across 64 processors will not speed it up by
</span><br>
<span class="quotelev1">&gt; a factor of 64, but by much less.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every domain decomposition program that we have here shows this
</span><br>
<span class="quotelev1">&gt; effect.  If we give them more processors they scale well, up
</span><br>
<span class="quotelev1">&gt; to a point (say 16 or 32 processors, for a reasonably sized problem). 
</span><br>
<span class="quotelev1">&gt; However, beyond that point the scaling slowly flattens out.
</span><br>
<span class="quotelev1">&gt; When you go and look at the grid size and the
</span><br>
<span class="quotelev1">&gt; large number of processors,
</span><br>
<span class="quotelev1">&gt; you realize that most of the effort is being done to calculate halos,
</span><br>
<span class="quotelev1">&gt; i.e. on overhead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On top of that, there is the overhead due to MPI communication, of
</span><br>
<span class="quotelev1">&gt; course, but it is likely that the halo overhead is the dominant factor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would guess other classes of problems and parallel methods of solution
</span><br>
<span class="quotelev1">&gt; also have the same problem that domain decomposition shows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this perhaps what is going on with your test code?
</span><br>
<span class="quotelev1">&gt; Take a look at the code to see what it is doing,
</span><br>
<span class="quotelev1">&gt; and in particularly, what is the problem size.
</span><br>
<span class="quotelev1">&gt; See if it really makes sense to distribute it over 64 processors,
</span><br>
<span class="quotelev1">&gt; of if a smaller number would be the right choice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, if the program allows you to change the problem size,
</span><br>
<span class="quotelev1">&gt; try the test again with a larger problem size
</span><br>
<span class="quotelev1">&gt; (say, two or four times bigger),
</span><br>
<span class="quotelev1">&gt; and then go up to a large number of processors also.
</span><br>
<span class="quotelev1">&gt; With a larger problem size the scaling may be better too
</span><br>
<span class="quotelev1">&gt; (but the runtimes will grow as well).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, since you are using Infiniband, and I wonder if all the
</span><br>
<span class="quotelev1">&gt; nodes connect to each other with the same latency, or if some
</span><br>
<span class="quotelev1">&gt; pairs of nodes have higher latency to communicate.
</span><br>
<span class="quotelev1">&gt; On a single switch hopefully the latency is the same for all pairs of 
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt; However, if you connect two switches, for instance, nodes that
</span><br>
<span class="quotelev1">&gt; are on switch A will probably have a larger latency to talk
</span><br>
<span class="quotelev1">&gt; to nodes on switch B, I suppose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope it helps.
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
<span class="quotelev1">&gt; Roman Martonak wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I observe very poor scaling with openmpi on HP blade system consisting
</span><br>
<span class="quotelev2">&gt;&gt; of 8 blades (each having 2 quad-core AMD Barcelona 2.2 GHz CPU) and
</span><br>
<span class="quotelev2">&gt;&gt; interconnected with Infiniband fabric. When running the standard cpmd
</span><br>
<span class="quotelev2">&gt;&gt; 32 waters test, I observe the following scaling (the numbers are
</span><br>
<span class="quotelev2">&gt;&gt; elapsed time)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2.6:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using full blades (8 cores per blade)
</span><br>
<span class="quotelev2">&gt;&gt; np8            7 MINUTES 26.40 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; np16        4 MINUTES 19.91 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; np32        2 MINUTES 55.51 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; np48            2 MINUTES 38.18 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; np64            3 MINUTES 19.78 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried also openmpi-1.2.8 and openmpi-1.3 and it is about the same,
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3 is somewhat better for 32 cores but in all cases there is
</span><br>
<span class="quotelev2">&gt;&gt; practically no scaling beyond 4 blades (32 cores) and running on 64
</span><br>
<span class="quotelev2">&gt;&gt; cores is a disaster. With Intel MPI, however, I get the following
</span><br>
<span class="quotelev2">&gt;&gt; numbers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Intel MPI-3.2.1.009
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using full blades (8 cores per blade)
</span><br>
<span class="quotelev2">&gt;&gt; np8    7 MINUTES 23.19 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; np16    4 MINUTES 22.17 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; np32    2 MINUTES 50.07 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; np48    1 MINUTES 42.87 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt; np64    1 MINUTES 23.76 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so there is reasonably good scaling up to 64 cores. I am running with
</span><br>
<span class="quotelev2">&gt;&gt; the option
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_paffinity_alone 1, I have tried also -mca btl_openib_use_srq
</span><br>
<span class="quotelev2">&gt;&gt; 1 but it had only marginal effect. With mvapich I get similar scaling
</span><br>
<span class="quotelev2">&gt;&gt; as with Intel MPI. The system is running the Rocksclusters
</span><br>
<span class="quotelev2">&gt;&gt; distribution 5.1 with the mellanox ofed-1.4 roll. I would be grateful
</span><br>
<span class="quotelev2">&gt;&gt; if somebody could suggest me what could be the origin of the problem
</span><br>
<span class="quotelev2">&gt;&gt; and how to tune openmpi to get better scaling.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Roman
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
<li><strong>Next message:</strong> <a href="9358.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9358.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9358.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9359.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
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
