<?
$subject_val = "Re: [OMPI users] Help on the big picture..";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 19:11:14 2010" -->
<!-- isoreceived="20100722231114" -->
<!-- sent="Thu, 22 Jul 2010 19:11:00 -0400" -->
<!-- isosent="20100722231100" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on the big picture.." -->
<!-- id="4C48D004.3070109_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimoyle_AhfGLcDKJ5A7OKV0Wrmzs8kL3SwOZkSU_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on the big picture..<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 19:11:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13757.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13755.php">amjad ali: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="13753.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13757.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13757.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Cristobal
<br>
<p>Cristobal Navarro wrote:
<br>
<span class="quotelev1">&gt; yes,
</span><br>
<span class="quotelev1">&gt; i was aware of the big difference hehe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now that openMP and openMPI is in talk, i've alwyas wondered if its a
</span><br>
<span class="quotelev1">&gt; good idea to model a solution on the following way, using both openMP
</span><br>
<span class="quotelev1">&gt; and openMPI.
</span><br>
<span class="quotelev1">&gt; suppose you have n nodes, each node has a quadcore, (so you have n*4 processors)
</span><br>
<span class="quotelev1">&gt; launch n proceses acorrding to the n nodes available.
</span><br>
<span class="quotelev1">&gt; set a resource manager like SGE to fill the n*4 slots using round robin.
</span><br>
<span class="quotelev1">&gt; on each process, make use of the other cores available on the node,
</span><br>
<span class="quotelev1">&gt; with openMP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if this is possible, then on each one could make use fo the shared
</span><br>
<span class="quotelev1">&gt; memory model locally at each node, evading unnecesary I/O through the
</span><br>
<span class="quotelev1">&gt; nwetwork, what do you think?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, it is possible, and many of the atmosphere/oceans/climate codes
<br>
that we run is written with this capability. In other areas of
<br>
science and engineering this is probably the case too.
<br>
<p>However, this is not necessarily better/faster/simpler than dedicate all 
<br>
the cores to MPI processes.
<br>
<p>In my view, this is due to:
<br>
<p>1) OpenMP has a different scope than MPI,
<br>
and to some extent is limited by more stringent requirements than MPI;
<br>
<p>2) Most modern MPI implementations (and OpenMPI is an example) use 
<br>
shared memory mechanisms to communicate between processes that reside
<br>
in a single physical node/computer;
<br>
<p>3) Writing hybrid code with MPI and OpenMP requires more effort,
<br>
and much care so as not to let the two forms of parallelism step on
<br>
each other's toes.
<br>
<p>OpenMP operates mostly through compiler directives/pragmas interspersed
<br>
on the code.  For instance, you can parallelize inner loops in no time,
<br>
granted that there are no data dependencies across the commands within 
<br>
the loop.  All it takes is to write one or two directive/pragma lines.
<br>
More than loop parallelization can be done with OpenMP, of course,
<br>
although not as much as can be done with MPI.
<br>
Still, with OpenMP, you are restricted to work in a shared memory 
<br>
environment.
<br>
<p>By contrast, MPI requires more effort to program, but it takes advantage
<br>
of shared memory and networked environments
<br>
(and perhaps extended grids too).
<br>
On areas where MPI-based libraries and APIs (like PETSc) were developed,
<br>
the effort of programming directly with MPI can be reduced,
<br>
by using the library facilities.
<br>
<p>To answer your question in another email, I think
<br>
in principle you can program with PETSc and MPI together.
<br>
<p>I hope this helps.
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
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 22, 2010 at 5:27 PM, amjad ali &lt;amjad11_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Cristobal,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that the pic in <a href="http://dl.dropbox.com/u/6380744/clusterLibs.png">http://dl.dropbox.com/u/6380744/clusterLibs.png</a>
</span><br>
<span class="quotelev2">&gt;&gt; shows that Scalapack is based on what; it only shows which packages
</span><br>
<span class="quotelev2">&gt;&gt; Scalapack uses; hence no OpenMP is there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also be clear about the difference:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OpenMP&quot; is for shared memory parallel programming, while
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OpenMPI&quot; is an implantation of MPI standard (this list is about OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; obviously).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; best
</span><br>
<span class="quotelev2">&gt;&gt; AA.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 22, 2010 at 5:06 PM, Cristobal Navarro &lt;axischire_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; im looking at the manual, seems good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i think now the picture is more clear.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i have a very custom algorithm, local problem of research,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paralelizable, thats where openMPI enters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then, at some point on the program, all the computation traduces to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; numeric (double) matrix operations, eigenvalues and derivatives. thats
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where a library like PETSc makes its appearance. or a lower level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solution would be GSL and manually implement paralelism with MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in case someone chooses, a highlevel library like PETSc and some low
</span><br>
<span class="quotelev3">&gt;&gt;&gt; level openMPI for its custom algorithms, is there a race for MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 22, 2010 at 3:42 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Cristobal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You may want to take a look at PETSc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which has all the machinery for linear algebra that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you need, can easily attach a variety of Linear Algebra packages,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; including those in the diagram you sent and more,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; builds on top of MPI, and can even build MPI for you, if you prefer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It has C and Fortran interfaces, and if I remember right,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you can build it alternatively with a C++ interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can choose from real or complex scalars,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; depending on your target problem (e.g. if you are going to do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signal/image processing with FFTs, you want complex scalars).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know if it has high level commands to deal with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data structures (like trees that you mentioned), but it may.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.mcs.anl.gov/petsc/petsc-as/">http://www.mcs.anl.gov/petsc/petsc-as/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My $0.02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i am designing a solution to one of my programs, which mixes some tree
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; generation, matrix operatons, eigenvaluies, among other tasks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i have to paralellize all of this for a cluster of 4 nodes (32 cores),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and what i first thought was MPI as a blind choice, but after looking
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at this picture
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://dl.dropbox.com/u/6380744/clusterLibs.png">http://dl.dropbox.com/u/6380744/clusterLibs.png</a> ( On the picture,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openMP is missing.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i decided to take a break and sit down, think what best suits to my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; needs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Adittionally, i am not familiar with Fortran, so i search for C/C++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libraries.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what are your experiences, what aspects of your proyect do you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; consider when choosing, is a good practice to mix these libraries in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one same proyect?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="13757.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13755.php">amjad ali: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="13753.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13757.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13757.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
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
