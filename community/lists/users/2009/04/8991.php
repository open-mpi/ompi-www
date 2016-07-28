<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 19:19:10 2009" -->
<!-- isoreceived="20090420231910" -->
<!-- sent="Mon, 20 Apr 2009 19:19:01 -0400" -->
<!-- isosent="20090420231901" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49ED02E5.6070806_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904200934i4b05bd05s9eeb65a901e882ab_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-20 19:19:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8992.php">ESTEBAN MENESES ROJAS: "[OMPI users] Automatic checkpoint/restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8990.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>In reply to:</strong> <a href="8983.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Amjad, list
<br>
<p>HPL has some quirks to install, as I just found out.
<br>
It can be done, though.
<br>
I had used a precompiled version of HPL on my Rocks cluster before,
<br>
but that version is no longer being distributed, unfortunately.
<br>
<p>Go to the HPL &quot;setup&quot; directory,
<br>
and run the script &quot;make_generic&quot;.
<br>
This will give you a Make.&lt;arch&gt; template file named Make.UNKNOWN.
<br>
You can rename this file &quot;Make.whatever_arch_you_want&quot;,
<br>
copy it to the HPL top directory,
<br>
and edit it,
<br>
adjusting the important variable definitions to your system.
<br>
<p>For instance, where it says:
<br>
CC           = mpicc
<br>
replace by:
<br>
CC           = /full/path/to/OpenMPI/bin/mpicc
<br>
and so on for ARCH, TOPdir, etc.
<br>
Some 4-6 variables only need to be changed.
<br>
<p>These threads show two examples:
<br>
<p><a href="http://marc.info/?l=npaci-rocks-discussion&amp;m=123264688212088&amp;w=2">http://marc.info/?l=npaci-rocks-discussion&amp;m=123264688212088&amp;w=2</a>
<br>
<a href="http://marc.info/?l=npaci-rocks-discussion&amp;m=123163114922058&amp;w=2">http://marc.info/?l=npaci-rocks-discussion&amp;m=123163114922058&amp;w=2</a>
<br>
<p>You will need also a BLAS (basic linear algebra subprograms) library.
<br>
You may have one already on your computer.
<br>
Do &quot;locate libblas&quot; and &quot;locate libgoto&quot; to search for it.
<br>
<p>If you don't have BLAS, you can download the Goto BLAS library
<br>
and install it, which is what I did:
<br>
<p><a href="http://www.tacc.utexas.edu/resources/software/">http://www.tacc.utexas.edu/resources/software/</a>
<br>
<p>The Goto BLAS is probably the fastest version of BLAS.
<br>
However, you can try also the more traditional BLAS from Netlib:
<br>
<p><a href="http://www.netlib.org/blas/">http://www.netlib.org/blas/</a>
<br>
<p>I found it easier to work with gcc and gfortran (i.e. both BLAS
<br>
and OpenMPI compiled with gcc and gfortran), than to use PGI or Intel
<br>
compilers.  However, I didn't try hard with PGI and Intel.
<br>
<p>Read the HPL TUNNING file to learn how to change/adjust
<br>
the HPL.dat parameters.
<br>
The PxQ value gives you the number of processes for mpiexec.
<br>
<p>***
<br>
<p>The goal of benchmarking is to measure performance under heavy use
<br>
(on a parallel computer using MPI, in the HPL case).
<br>
However, other than performance measurements,
<br>
benchmark programs in general don't produce additional results.
<br>
For instance, HPL does LU factorization of matrices and solves
<br>
linear systems with an efficient parallel algorithm.
<br>
This by itself is great, and is one reason why it is the
<br>
Top500 benchmark:
<br>
<a href="http://en.wikipedia.org/wiki/TOP500">http://en.wikipedia.org/wiki/TOP500</a> and 
<br>
<a href="http://www.top500.org/project/linpack">http://www.top500.org/project/linpack</a> .
<br>
<p>However, within HPL the LU decomposition and the
<br>
linear system solution are not applied to any particular
<br>
concrete problem.
<br>
Only the time it takes to run each part of HPL really matters.
<br>
The matrices are made up of random numbers, if I remember right,
<br>
are totally synthetic, and don't mean anything physical.
<br>
Of course LU factorization has tons of applications, but the goal
<br>
of HPL is not to explore applications, it is just to measure performance
<br>
during the number crunching linear algebra operations using MPI.
<br>
<p>HPL will make the case that your cluster is working,
<br>
and you can tell your professors that it works with
<br>
a performance that you can measure, some X Gflops (see the xhpl output).
<br>
<p>However, if you want also to show to your professors
<br>
that your cluster can be used for applications,
<br>
you may want to run a real world MPI program, say,
<br>
in a research area of your college, be it computational chemistry,
<br>
weather forecast, electrical engineering, structural engineering,
<br>
fluid mechanics, genome research, seismology, etc.
<br>
Depending on which area it is,
<br>
you may find free MPI programs on the Internet.
<br>
<p>My two cents,
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
<p>Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; let me describe what i want to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i had taken linux clustering as my final year engineering project as i m 
</span><br>
<span class="quotelev1">&gt; really iintrested in 0networking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to tell de truth our college does not have any professor with knowledge 
</span><br>
<span class="quotelev1">&gt; of clustering.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the aim of our project was just to make a cluster, which we did. not we 
</span><br>
<span class="quotelev1">&gt; have to show and explain our project to the professors. so i want 
</span><br>
<span class="quotelev1">&gt; somethin to show them how de cluster works... some program or 
</span><br>
<span class="quotelev1">&gt; benchmarking s/w.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hope you got the problem.
</span><br>
<span class="quotelev1">&gt; and thanks again, we really appretiate you patience.
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
<li><strong>Next message:</strong> <a href="8992.php">ESTEBAN MENESES ROJAS: "[OMPI users] Automatic checkpoint/restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8990.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>In reply to:</strong> <a href="8983.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
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
