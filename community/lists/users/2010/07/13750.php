<?
$subject_val = "Re: [OMPI users] Help on the big picture..";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 17:06:31 2010" -->
<!-- isoreceived="20100722210631" -->
<!-- sent="Thu, 22 Jul 2010 17:06:06 -0400" -->
<!-- isosent="20100722210606" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on the big picture.." -->
<!-- id="AANLkTinu6Lu5S4zel6eLeqWrwNN9apw99xrCYCDB-oJ0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C489F20.80408_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 17:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13751.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13749.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13748.php">Gus Correa: "Re: [OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13752.php">amjad ali: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13752.php">amjad ali: "Re: [OMPI users] Help on the big picture.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks
<br>
<p>im looking at the manual, seems good.
<br>
i think now the picture is more clear.
<br>
<p>i have a very custom algorithm, local problem of research,
<br>
paralelizable, thats where openMPI enters.
<br>
then, at some point on the program, all the computation traduces to
<br>
numeric (double) matrix operations, eigenvalues and derivatives. thats
<br>
where a library like PETSc makes its appearance. or a lower level
<br>
solution would be GSL and manually implement paralelism with MPI.
<br>
<p>in case someone chooses, a highlevel library like PETSc and some low
<br>
level openMPI for its custom algorithms, is there a race for MPI
<br>
problem?
<br>
<p>On Thu, Jul 22, 2010 at 3:42 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Cristobal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may want to take a look at PETSc,
</span><br>
<span class="quotelev1">&gt; which has all the machinery for linear algebra that
</span><br>
<span class="quotelev1">&gt; you need, can easily attach a variety of Linear Algebra packages,
</span><br>
<span class="quotelev1">&gt; including those in the diagram you sent and more,
</span><br>
<span class="quotelev1">&gt; builds on top of MPI, and can even build MPI for you, if you prefer.
</span><br>
<span class="quotelev1">&gt; It has C and Fortran interfaces, and if I remember right,
</span><br>
<span class="quotelev1">&gt; you can build it alternatively with a C++ interface.
</span><br>
<span class="quotelev1">&gt; You can choose from real or complex scalars,
</span><br>
<span class="quotelev1">&gt; depending on your target problem (e.g. if you are going to do
</span><br>
<span class="quotelev1">&gt; signal/image processing with FFTs, you want complex scalars).
</span><br>
<span class="quotelev1">&gt; I don't know if it has high level commands to deal with
</span><br>
<span class="quotelev1">&gt; data structures (like trees that you mentioned), but it may.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/petsc/petsc-as/">http://www.mcs.anl.gov/petsc/petsc-as/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02
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
<span class="quotelev1">&gt; Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i am designing a solution to one of my programs, which mixes some tree
</span><br>
<span class="quotelev2">&gt;&gt; generation, matrix operatons, eigenvaluies, among other tasks.
</span><br>
<span class="quotelev2">&gt;&gt; i have to paralellize all of this for a cluster of 4 nodes (32 cores),
</span><br>
<span class="quotelev2">&gt;&gt; and what i first thought was MPI as a blind choice, but after looking
</span><br>
<span class="quotelev2">&gt;&gt; at this picture
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://dl.dropbox.com/u/6380744/clusterLibs.png">http://dl.dropbox.com/u/6380744/clusterLibs.png</a> ( On the picture,
</span><br>
<span class="quotelev2">&gt;&gt; openMP is missing.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i decided to take a break and sit down, think what best suits to my needs.
</span><br>
<span class="quotelev2">&gt;&gt; Adittionally, i am not familiar with Fortran, so i search for C/C++
</span><br>
<span class="quotelev2">&gt;&gt; libraries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what are your experiences, what aspects of your proyect do you
</span><br>
<span class="quotelev2">&gt;&gt; consider when choosing, is a good practice to mix these libraries in
</span><br>
<span class="quotelev2">&gt;&gt; one same proyect?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13751.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13749.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13748.php">Gus Correa: "Re: [OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13752.php">amjad ali: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13752.php">amjad ali: "Re: [OMPI users] Help on the big picture.."</a>
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
