<?
$subject_val = "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 12:13:27 2007" -->
<!-- isoreceived="20071115171327" -->
<!-- sent="Thu, 15 Nov 2007 12:13:18 -0500" -->
<!-- isosent="20071115171318" -->
<!-- name="Katherine Holcomb" -->
<!-- email="kholcomb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?" -->
<!-- id="003b01c827aa$d13871c0$64e1dd8c_at_windom" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="df8c8a6d0711150854o2e2d4249q304e328a406ed2cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?<br>
<strong>From:</strong> Katherine Holcomb (<em>kholcomb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 12:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4480.php">Jim Kusznir: "[OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="4480.php">Jim Kusznir: "[OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have almost exactly the situation you describe with our clusters.  I'm 
<br>
not the system administrator but I am the one who actually writes the module 
<br>
scripts.
<br>
<p>It is best to compile OpenMPI (and any other MPI) with each compiler 
<br>
separately; this is especially necessary for the Fortran and C++ bindings. 
<br>
We simply have a directory layout like
<br>
<p>/opt/openmpi/intel
<br>
/opt/openmpi/pgi
<br>
/opt/openmpi/gnu
<br>
<p>etc.
<br>
<p>To compile OpenMPI with a different compiler, you can use environment 
<br>
variables such as (for the Intel compiler)
<br>
FC=ifort
<br>
F90=ifort
<br>
CC=icc
<br>
CXX=icpc
<br>
You set these within the %build part of the rpm spec file.
<br>
<p>Similarly for MPICH2.  (I would recommend MPICH2 over MPICH1 at this point.)
<br>
<p>Users load a module to select a compiler+MPI combination.  Loading the 
<br>
appropriate module sets the path for the version of mpicc/cxx/f90 chosen by 
<br>
the user.  That in turn knows where its associated libraries live.
<br>
<p>Most users link MPI libraries statically.  If dynamic libraries are needed 
<br>
then they can be added to LD_LIBRARY_PATH by the module script.
<br>
<p>I am away from my office until after the Thanksgiving holiday but if you 
<br>
email me personally
<br>
&nbsp;then, I can send you some sample module scripts.  I can also send you some 
<br>
sample spec files for the rpms we use.
<br>
<p>----- Original Message ----- 
<br>
From: &quot;Jim Kusznir&quot; &lt;jkusznir_at_[hidden]&gt;
<br>
To: &lt;users_at_[hidden]&gt;
<br>
Sent: Thursday, November 15, 2007 11:54 AM
<br>
Subject: [OMPI users] Suggestions on multi-compiler/multi-mpi build?
<br>
<p><p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to set up a cluster for a group of users with very
</span><br>
<span class="quotelev1">&gt; different needs.  So far, it looks like I need gcc, pgi, and intel to
</span><br>
<span class="quotelev1">&gt; work with openmpi and mpich, with each user able to control what
</span><br>
<span class="quotelev1">&gt; combination they get.  This is turning out to be much more difficult
</span><br>
<span class="quotelev1">&gt; than I expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Someone has pointed me to enviornment-modules (&quot;Modules&quot;), which looks
</span><br>
<span class="quotelev1">&gt; like it will be a critical part of the solution.  I even noticed that
</span><br>
<span class="quotelev1">&gt; the provided openmpi.spec file has some direct support for modules,
</span><br>
<span class="quotelev1">&gt; which makes me quite happy!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I still have many questions about how to set things up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, I get the impression that openmpi will need to be compiled with
</span><br>
<span class="quotelev1">&gt; each compiler that will use it.  If this is true, I'm not quite sure
</span><br>
<span class="quotelev1">&gt; how to go about it.  I could install in different directories for the
</span><br>
<span class="quotelev1">&gt; user commands, but what about the libraries?  I don't think I have a
</span><br>
<span class="quotelev1">&gt; feesable way of selecting which library to use on the fly on the
</span><br>
<span class="quotelev1">&gt; entire cluster for each user, so it seems like it would be better to
</span><br>
<span class="quotelev1">&gt; have all the libraries available.  In addition, I will need RPMs to
</span><br>
<span class="quotelev1">&gt; deploy efficiently on the cluster.  I suspect I can change the
</span><br>
<span class="quotelev1">&gt; versioning info and build with each compiler, but at this point, I
</span><br>
<span class="quotelev1">&gt; don't even know how to reliably select what compiler rpmbuild will use
</span><br>
<span class="quotelev1">&gt; (I've only succeeded in using gcc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, using modules, how do I set it up so that if a user changes
</span><br>
<span class="quotelev1">&gt; compilers, but stays with openmpi, it will load the correct openmpi
</span><br>
<span class="quotelev1">&gt; paths?  I know I can set up the openmpi module file to load after the
</span><br>
<span class="quotelev1">&gt; compiler module and based on that select different paths based on the
</span><br>
<span class="quotelev1">&gt; currently-loaded compiler module.  If the user changes the compiler
</span><br>
<span class="quotelev1">&gt; module, will that cause the mpi module to also be reloaded so the new
</span><br>
<span class="quotelev1">&gt; settings will be loaded?  Or do I need this at all?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all your help!
</span><br>
<span class="quotelev1">&gt; --Jim
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
<li><strong>Next message:</strong> <a href="4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4480.php">Jim Kusznir: "[OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="4480.php">Jim Kusznir: "[OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
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
