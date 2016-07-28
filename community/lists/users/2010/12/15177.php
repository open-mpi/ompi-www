<?
$subject_val = "Re: [OMPI users] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 11:55:38 2010" -->
<!-- isoreceived="20101216165538" -->
<!-- sent="Thu, 16 Dec 2010 11:55:15 -0500" -->
<!-- isosent="20101216165515" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault" -->
<!-- id="4D0A4473.9080800_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="528EE04830974E42B235D874D8EEAECB0554F0_at_MAR160N1.marin.local" -->
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
<strong>Date:</strong> 2010-12-16 11:55:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vaz, Guilherme wrote:
<br>
<span class="quotelev1">&gt; Ok, ok. It is indeed a CFD program, and Gus got it right. Number of cells per core means memory per core (sorry for the inaccuracy).
</span><br>
<span class="quotelev1">&gt; My PC has 12GB of RAM. 
</span><br>
<p>Can you do one of those typical engineering calculations, a back of the
<br>
envelope estimate of how much memory your program needs for a certain
<br>
problem size?
<br>
This is the first thing to do.
<br>
It should tell you whether 12GB is good enough or not.
<br>
How many cells, how much memory each cell or array or structure takes,
<br>
etc ...
<br>
<p><span class="quotelev1">&gt; And the same calculation runs fine in an old Ubuntu8.04 32bits with 4GB RAM.
</span><br>
<span class="quotelev1">&gt; What I find strange is that the same problems runs with 1 core (without evoking mpiexec) 
</span><br>
<p>This one is likely to be a totally different version of the code,
<br>
either serial or threaded (perhaps with OpenMP, NOT OpenMPI).
<br>
<p><span class="quotelev1">&gt; and then for large number of cores/processes, for instance mpiexec -n 32. 
</span><br>
<span class="quotelev1"> &gt; Something in between not.
</span><br>
<p>You didn't explain.
<br>
Are all the runs (1 processor, 4 processors, 32 processors)
<br>
in  a single machine, or in a cluster?
<br>
How many computers are used on each run?
<br>
How much memory does each machine have?
<br>
Any error messages?
<br>
<p>It makes a difference to understand what is going on.
<br>
You may saturate memory in a single machine (your 4-processor run),
<br>
but not on, say, four machines (if this is what you mean when you
<br>
say it runs on 32 processors).
<br>
<p>Please, clarify.
<br>
With the current problem description, a solution may not exist,
<br>
or there may be multiple solutions for multiple and
<br>
yet not described issues, or the solution may have nothing to do
<br>
with the description you provided or with MPI.
<br>
A mathematician would call this an &quot;ill posed problem&quot;,
<br>
a la Haddamard. :)
<br>
But that is how debugging parallel programs go.
<br>
<p><span class="quotelev1">&gt; And it is not a bug in the program because it runs in other machines 
</span><br>
<span class="quotelev1">&gt; and the code has not been changed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That is no guarantee against bugs.
<br>
They can creep in depending on the computer environment,
<br>
how many computers you are using, the number of processors,
<br>
on any data or parameter that you change,
<br>
on a bunch of different things.
<br>
<p><span class="quotelev1">&gt; Anymore hints?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Did you try the ones I sent before, regarding stack size,
<br>
and monitoring memory via &quot;top)?
<br>
What did you get?
<br>
<p><p><p>Gus
<br>
<p><span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guilherme
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dr. ir. Guilherme Vaz
</span><br>
<span class="quotelev1">&gt; CFD Researcher
</span><br>
<span class="quotelev1">&gt; Research &amp; Development
</span><br>
<span class="quotelev1">&gt; E mailto:G.Vaz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; T +31 317 49 33 25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MARIN
</span><br>
<span class="quotelev1">&gt; 2, Haagsteeg, P.O. Box 28, 6700 AA Wageningen, The Netherlands
</span><br>
<span class="quotelev1">&gt; T +31 317 49 39 11, F +31 317 49 32 45, I www.marin.nl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, December 16, 2010 12:46 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe a CFD jargon?
</span><br>
<span class="quotelev1">&gt; Perhaps the number (not size) of cells in a mesh/grid being handled
</span><br>
<span class="quotelev1">&gt; by each core/cpu?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have no idea what you mean by &quot;cell sizes per core&quot;. Certainly not any
</span><br>
<span class="quotelev2">&gt;&gt; terminology within OMPI...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2010, at 3:47 PM, Vaz, Guilherme wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a problem with openmpi1.3, ifort+mkl v11.1 in Ubuntu10.04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems (32 or 64bit). My code worked in Ubuntu8.04 and works in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RedHat based systems, with slightly different version changes on mkl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and ifort. There were no changes in the source code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that the application works for small cell sizes per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core, but not for large cell sizes per core. And it always works for 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Example: a grid with 1.2Million cells does not work with mpiexec -n 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;my_app&gt; but it works with mpiexec -n 32 &lt;my_app&gt;. It seems that there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a maximum of cell/core. And it works with &lt;my_app&gt;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this a stack size (or any memory problem)? Should I set the ulimit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -s unlimited not only on my bashrc but also in the ssh environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and how)? Or is something else?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any clues/tips?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gui
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;imagec393d1.JPG&gt;&lt;image4c4685.JPG&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dr. ir. Guilherme Vaz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFD Researcher
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research &amp; Development
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *MARIN*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      2, Haagsteeg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E G.Vaz_at_[hidden] &lt;mailto:G.Vaz_at_[hidden]&gt;     P.O. Box 28     T +31 317 49 39 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      6700 AA Wageningen      F +31 317 49 32 45
</span><br>
<span class="quotelev3">&gt;&gt;&gt; T  +31 317 49 33 25  The Netherlands I  www.marin.nl &lt;<a href="http://www.marin.nl">http://www.marin.nl</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
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
