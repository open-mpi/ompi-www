<?
$subject_val = "Re: [OMPI users] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 13:11:04 2010" -->
<!-- isoreceived="20101216181104" -->
<!-- sent="Thu, 16 Dec 2010 13:10:54 -0500" -->
<!-- isosent="20101216181054" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault" -->
<!-- id="4D0A562E.7060701_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="528EE04830974E42B235D874D8EEAECB0558AF_at_MAR160N1.marin.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 13:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15181.php">Matthias Jurenz: "Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15179.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15151.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vaz, Guilherme wrote:
<br>
<span class="quotelev1">&gt; Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your email. Some more explanation then:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) We have made this estimation of memory already in the past. 
</span><br>
<span class="quotelev1">&gt; My code takes for n*Mcells =&gt; 2.5n*GBRam. So for 1.2MCells we need 3GB Ram. 
</span><br>
<span class="quotelev1">&gt; The problem occurs in one PC with 12GB Ram and 4 cores. So 12GB Ram is enough. 
</span><br>
<span class="quotelev1">&gt; So far (and in the other systems) if we had problems with memory it &quot;just&quot; 
</span><br>
<span class="quotelev1">&gt; starts to swap but did/does not crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Guilherme
<br>
<p>Now you are speaking.  Much better.
<br>
So, you know your problem size, you know how much memory you need,
<br>
at least w.r.t. what you allocate directly.
<br>
<p><span class="quotelev1">&gt; 2) The code is my code, so I am sure that with mpiexec 
</span><br>
<span class="quotelev1">&gt; or without mpiexec the code is the same and that I don't 
</span><br>
<span class="quotelev1">&gt; use OpenMP directly in the code. 
</span><br>
<p>I am a bit surprised that the same code runs with and without mpiexec.
<br>
Do you mean the same executable?
<br>
Or are they different executables, one
<br>
of which you perhaps compile with pre-processor directives to get around
<br>
the MPI calls and make it sequential?
<br>
<p>As for OpenMP it still remains the possibility that the libraries you
<br>
call use threads (with or without OpenMP).
<br>
<p><span class="quotelev1">&gt; But, we also use 
</span><br>
<span class="quotelev1">&gt; Intel MKL libraries together with PETSC linear-system solvers. 
</span><br>
<span class="quotelev1">&gt; I know that MKL tries to start several threads for each MPI process 
</span><br>
<span class="quotelev1">&gt; (yes process not processor). We disable it by setting MKL_NUM_THREADS=1 
</span><br>
<span class="quotelev1">&gt; (otherwise we see immediately in the task manager the several threads starting).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I would catch all the return codes from PETSc calls, print them out if
<br>
in error, and call MPI_Abort, if this is not yet in your code, and keep 
<br>
there at least while you sort out where the problem is.
<br>
If using MKL directly, not via PETSC, do the same with the MKL calls.
<br>
<p><span class="quotelev1">&gt; 3) All the runs are done in a 64bits Intel machine with 4 cores and 12GB Ram. 
</span><br>
<span class="quotelev1">&gt; We don't set any affinity or similar stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I am suprised that it runs with -np 32 on only 4 physical cores,
<br>
which is a lot of oversubscription.
<br>
I wonder if this reduces walltime.
<br>
<p><span class="quotelev1">&gt; 4) I could always start more MPI processes than cores, 
</span><br>
<span class="quotelev1">&gt; as long the memory was enough. And the memory is enough, 
</span><br>
<span class="quotelev1">&gt; otherwise how can the same problem with 2,4,8,16 MPI processes
</span><br>
<span class="quotelev1">&gt; not work and with 32 work. So that is why I thought on stack memory problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5) I will see what gdb says about a core-dump tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus, is this more clear? 
</span><br>
<p>Yes.
<br>
<p>Do you have any tip now?
<br>
<p>No.
<br>
<p>Old tip again:
<br>
Did you monitor memory use with top while the job is running?
<br>
&quot;top -H&quot; shows you all threads.
<br>
<p><span class="quotelev1">&gt; Don't you think 
</span><br>
<span class="quotelev1">&gt; this a stack-memory problem, which btw is already ulimit -s unlimited?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That certainly helps for number crunching,
<br>
although it may not solve your specific problem.
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt; Thanks guys.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guilherme
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, December 16, 2010 5:55 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vaz, Guilherme wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ok, ok. It is indeed a CFD program, and Gus got it right. Number of cells per core means memory per core (sorry for the inaccuracy).
</span><br>
<span class="quotelev2">&gt;&gt; My PC has 12GB of RAM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you do one of those typical engineering calculations, a back of the
</span><br>
<span class="quotelev1">&gt; envelope estimate of how much memory your program needs for a certain
</span><br>
<span class="quotelev1">&gt; problem size?
</span><br>
<span class="quotelev1">&gt; This is the first thing to do.
</span><br>
<span class="quotelev1">&gt; It should tell you whether 12GB is good enough or not.
</span><br>
<span class="quotelev1">&gt; How many cells, how much memory each cell or array or structure takes,
</span><br>
<span class="quotelev1">&gt; etc ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And the same calculation runs fine in an old Ubuntu8.04 32bits with 4GB RAM.
</span><br>
<span class="quotelev2">&gt;&gt; What I find strange is that the same problems runs with 1 core (without evoking mpiexec)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This one is likely to be a totally different version of the code,
</span><br>
<span class="quotelev1">&gt; either serial or threaded (perhaps with OpenMP, NOT OpenMPI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and then for large number of cores/processes, for instance mpiexec -n 32.
</span><br>
<span class="quotelev2">&gt;  &gt; Something in between not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You didn't explain.
</span><br>
<span class="quotelev1">&gt; Are all the runs (1 processor, 4 processors, 32 processors)
</span><br>
<span class="quotelev1">&gt; in  a single machine, or in a cluster?
</span><br>
<span class="quotelev1">&gt; How many computers are used on each run?
</span><br>
<span class="quotelev1">&gt; How much memory does each machine have?
</span><br>
<span class="quotelev1">&gt; Any error messages?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It makes a difference to understand what is going on.
</span><br>
<span class="quotelev1">&gt; You may saturate memory in a single machine (your 4-processor run),
</span><br>
<span class="quotelev1">&gt; but not on, say, four machines (if this is what you mean when you
</span><br>
<span class="quotelev1">&gt; say it runs on 32 processors).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please, clarify.
</span><br>
<span class="quotelev1">&gt; With the current problem description, a solution may not exist,
</span><br>
<span class="quotelev1">&gt; or there may be multiple solutions for multiple and
</span><br>
<span class="quotelev1">&gt; yet not described issues, or the solution may have nothing to do
</span><br>
<span class="quotelev1">&gt; with the description you provided or with MPI.
</span><br>
<span class="quotelev1">&gt; A mathematician would call this an &quot;ill posed problem&quot;,
</span><br>
<span class="quotelev1">&gt; a la Haddamard. :)
</span><br>
<span class="quotelev1">&gt; But that is how debugging parallel programs go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And it is not a bug in the program because it runs in other machines
</span><br>
<span class="quotelev2">&gt;&gt; and the code has not been changed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is no guarantee against bugs.
</span><br>
<span class="quotelev1">&gt; They can creep in depending on the computer environment,
</span><br>
<span class="quotelev1">&gt; how many computers you are using, the number of processors,
</span><br>
<span class="quotelev1">&gt; on any data or parameter that you change,
</span><br>
<span class="quotelev1">&gt; on a bunch of different things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anymore hints?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you try the ones I sent before, regarding stack size,
</span><br>
<span class="quotelev1">&gt; and monitoring memory via &quot;top)?
</span><br>
<span class="quotelev1">&gt; What did you get?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Guilherme
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dr. ir. Guilherme Vaz
</span><br>
<span class="quotelev2">&gt;&gt; CFD Researcher
</span><br>
<span class="quotelev2">&gt;&gt; Research &amp; Development
</span><br>
<span class="quotelev2">&gt;&gt; E mailto:G.Vaz_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; T +31 317 49 33 25
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MARIN
</span><br>
<span class="quotelev2">&gt;&gt; 2, Haagsteeg, P.O. Box 28, 6700 AA Wageningen, The Netherlands
</span><br>
<span class="quotelev2">&gt;&gt; T +31 317 49 39 11, F +31 317 49 32 45, I www.marin.nl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, December 16, 2010 12:46 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe a CFD jargon?
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps the number (not size) of cells in a mesh/grid being handled
</span><br>
<span class="quotelev2">&gt;&gt; by each core/cpu?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no idea what you mean by &quot;cell sizes per core&quot;. Certainly not any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminology within OMPI...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 15, 2010, at 3:47 PM, Vaz, Guilherme wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a problem with openmpi1.3, ifort+mkl v11.1 in Ubuntu10.04
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; systems (32 or 64bit). My code worked in Ubuntu8.04 and works in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RedHat based systems, with slightly different version changes on mkl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and ifort. There were no changes in the source code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem is that the application works for small cell sizes per
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core, but not for large cell sizes per core. And it always works for 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Example: a grid with 1.2Million cells does not work with mpiexec -n 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;my_app&gt; but it works with mpiexec -n 32 &lt;my_app&gt;. It seems that there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is a maximum of cell/core. And it works with &lt;my_app&gt;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this a stack size (or any memory problem)? Should I set the ulimit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -s unlimited not only on my bashrc but also in the ssh environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (and how)? Or is something else?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any clues/tips?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gui
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;imagec393d1.JPG&gt;&lt;image4c4685.JPG&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dr. ir. Guilherme Vaz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CFD Researcher
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Research &amp; Development
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *MARIN*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      2, Haagsteeg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; E G.Vaz_at_[hidden] &lt;mailto:G.Vaz_at_[hidden]&gt;     P.O. Box 28     T +31 317 49 39 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      6700 AA Wageningen      F +31 317 49 32 45
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; T  +31 317 49 33 25  The Netherlands I  www.marin.nl &lt;<a href="http://www.marin.nl">http://www.marin.nl</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="15181.php">Matthias Jurenz: "Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>Previous message:</strong> <a href="15179.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15151.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
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
