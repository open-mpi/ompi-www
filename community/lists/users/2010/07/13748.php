<?
$subject_val = "Re: [OMPI users] Help on the big picture..";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 15:42:33 2010" -->
<!-- isoreceived="20100722194233" -->
<!-- sent="Thu, 22 Jul 2010 15:42:24 -0400" -->
<!-- isosent="20100722194224" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on the big picture.." -->
<!-- id="4C489F20.80408_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimVSAboC8ir1vMjPHSpohDdVZR4cVlDiH04rekA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-22 15:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13749.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13747.php">Cristobal Navarro: "[OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="13747.php">Cristobal Navarro: "[OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13750.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13750.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Cristobal
<br>
<p>You may want to take a look at PETSc,
<br>
which has all the machinery for linear algebra that
<br>
you need, can easily attach a variety of Linear Algebra packages,
<br>
including those in the diagram you sent and more,
<br>
builds on top of MPI, and can even build MPI for you, if you prefer.
<br>
It has C and Fortran interfaces, and if I remember right,
<br>
you can build it alternatively with a C++ interface.
<br>
You can choose from real or complex scalars,
<br>
depending on your target problem (e.g. if you are going to do
<br>
signal/image processing with FFTs, you want complex scalars).
<br>
I don't know if it has high level commands to deal with
<br>
data structures (like trees that you mentioned), but it may.
<br>
<p><a href="http://www.mcs.anl.gov/petsc/petsc-as/">http://www.mcs.anl.gov/petsc/petsc-as/</a>
<br>
<p>My $0.02
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
<p>Cristobal Navarro wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am designing a solution to one of my programs, which mixes some tree
</span><br>
<span class="quotelev1">&gt; generation, matrix operatons, eigenvaluies, among other tasks.
</span><br>
<span class="quotelev1">&gt; i have to paralellize all of this for a cluster of 4 nodes (32 cores),
</span><br>
<span class="quotelev1">&gt; and what i first thought was MPI as a blind choice, but after looking
</span><br>
<span class="quotelev1">&gt; at this picture
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://dl.dropbox.com/u/6380744/clusterLibs.png">http://dl.dropbox.com/u/6380744/clusterLibs.png</a> ( On the picture,
</span><br>
<span class="quotelev1">&gt; openMP is missing.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i decided to take a break and sit down, think what best suits to my needs.
</span><br>
<span class="quotelev1">&gt; Adittionally, i am not familiar with Fortran, so i search for C/C++ libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what are your experiences, what aspects of your proyect do you
</span><br>
<span class="quotelev1">&gt; consider when choosing, is a good practice to mix these libraries in
</span><br>
<span class="quotelev1">&gt; one same proyect?
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
<li><strong>Next message:</strong> <a href="13749.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13747.php">Cristobal Navarro: "[OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="13747.php">Cristobal Navarro: "[OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13750.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13750.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
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
