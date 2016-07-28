<?
$subject_val = "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 22:05:43 2007" -->
<!-- isoreceived="20071201030543" -->
<!-- sent="Fri, 30 Nov 2007 19:05:38 -0800" -->
<!-- isosent="20071201030538" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?" -->
<!-- id="df8c8a6d0711301905o1283ad42m23cae2db4133151d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="003b01c827aa$d13871c0$64e1dd8c_at_windom" -->
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
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-30 22:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4571.php">George Bosilca: "Re: [OMPI users] Shared memory communication limits parallelism?"</a>
<li><strong>Previous message:</strong> <a href="4569.php">Jo&#195;&#163;o Luis Silva: "[OMPI users] Shared memory communication limits parallelism?"</a>
<li><strong>In reply to:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4580.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4580.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your response!
<br>
<p>Just to clarify some things for my understanding:
<br>
<p>Do users load a single module that specifies both compiler and mpi
<br>
version (as opposed to loading two different modules, one for
<br>
complier, and one for mpi)?
<br>
<p>So, if the MPI implementations need to be built separately for each
<br>
compiler, what about other software packages that users' link against?
<br>
&nbsp;For example, as far as I know, there are not seperate versions of
<br>
libc for each compiler (but I may be ignorant here....please correct
<br>
me if I'm wrong).  How about other packages that code #includes?  How
<br>
do I know when something needs to be compiled separately vs one
<br>
version for everyone?
<br>
<p>Another thing that I'm still not quite clear on:  Can I have all
<br>
versions of the various MPI libraries in the ld path at once (so the
<br>
user doesn't have to &quot;select&quot; the correct one somehow prior to code
<br>
execution)?
<br>
<p>Are there any tricks to building/installing all this stuff in a fairly
<br>
automated manner?
<br>
<p>Thanks again!
<br>
--Jim
<br>
<p>On Nov 15, 2007 9:13 AM, Katherine Holcomb &lt;kholcomb_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; We have almost exactly the situation you describe with our clusters.  I'm
</span><br>
<span class="quotelev1">&gt; not the system administrator but I am the one who actually writes the module
</span><br>
<span class="quotelev1">&gt; scripts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is best to compile OpenMPI (and any other MPI) with each compiler
</span><br>
<span class="quotelev1">&gt; separately; this is especially necessary for the Fortran and C++ bindings.
</span><br>
<span class="quotelev1">&gt; We simply have a directory layout like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/intel
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/pgi
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/gnu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To compile OpenMPI with a different compiler, you can use environment
</span><br>
<span class="quotelev1">&gt; variables such as (for the Intel compiler)
</span><br>
<span class="quotelev1">&gt; FC=ifort
</span><br>
<span class="quotelev1">&gt; F90=ifort
</span><br>
<span class="quotelev1">&gt; CC=icc
</span><br>
<span class="quotelev1">&gt; CXX=icpc
</span><br>
<span class="quotelev1">&gt; You set these within the %build part of the rpm spec file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similarly for MPICH2.  (I would recommend MPICH2 over MPICH1 at this point.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Users load a module to select a compiler+MPI combination.  Loading the
</span><br>
<span class="quotelev1">&gt; appropriate module sets the path for the version of mpicc/cxx/f90 chosen by
</span><br>
<span class="quotelev1">&gt; the user.  That in turn knows where its associated libraries live.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most users link MPI libraries statically.  If dynamic libraries are needed
</span><br>
<span class="quotelev1">&gt; then they can be added to LD_LIBRARY_PATH by the module script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am away from my office until after the Thanksgiving holiday but if you
</span><br>
<span class="quotelev1">&gt; email me personally
</span><br>
<span class="quotelev1">&gt;  then, I can send you some sample module scripts.  I can also send you some
</span><br>
<span class="quotelev1">&gt; sample spec files for the rpms we use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Jim Kusznir&quot; &lt;jkusznir_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 15, 2007 11:54 AM
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Suggestions on multi-compiler/multi-mpi build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to set up a cluster for a group of users with very
</span><br>
<span class="quotelev2">&gt; &gt; different needs.  So far, it looks like I need gcc, pgi, and intel to
</span><br>
<span class="quotelev2">&gt; &gt; work with openmpi and mpich, with each user able to control what
</span><br>
<span class="quotelev2">&gt; &gt; combination they get.  This is turning out to be much more difficult
</span><br>
<span class="quotelev2">&gt; &gt; than I expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Someone has pointed me to enviornment-modules (&quot;Modules&quot;), which looks
</span><br>
<span class="quotelev2">&gt; &gt; like it will be a critical part of the solution.  I even noticed that
</span><br>
<span class="quotelev2">&gt; &gt; the provided openmpi.spec file has some direct support for modules,
</span><br>
<span class="quotelev2">&gt; &gt; which makes me quite happy!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I still have many questions about how to set things up.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First, I get the impression that openmpi will need to be compiled with
</span><br>
<span class="quotelev2">&gt; &gt; each compiler that will use it.  If this is true, I'm not quite sure
</span><br>
<span class="quotelev2">&gt; &gt; how to go about it.  I could install in different directories for the
</span><br>
<span class="quotelev2">&gt; &gt; user commands, but what about the libraries?  I don't think I have a
</span><br>
<span class="quotelev2">&gt; &gt; feesable way of selecting which library to use on the fly on the
</span><br>
<span class="quotelev2">&gt; &gt; entire cluster for each user, so it seems like it would be better to
</span><br>
<span class="quotelev2">&gt; &gt; have all the libraries available.  In addition, I will need RPMs to
</span><br>
<span class="quotelev2">&gt; &gt; deploy efficiently on the cluster.  I suspect I can change the
</span><br>
<span class="quotelev2">&gt; &gt; versioning info and build with each compiler, but at this point, I
</span><br>
<span class="quotelev2">&gt; &gt; don't even know how to reliably select what compiler rpmbuild will use
</span><br>
<span class="quotelev2">&gt; &gt; (I've only succeeded in using gcc).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Finally, using modules, how do I set it up so that if a user changes
</span><br>
<span class="quotelev2">&gt; &gt; compilers, but stays with openmpi, it will load the correct openmpi
</span><br>
<span class="quotelev2">&gt; &gt; paths?  I know I can set up the openmpi module file to load after the
</span><br>
<span class="quotelev2">&gt; &gt; compiler module and based on that select different paths based on the
</span><br>
<span class="quotelev2">&gt; &gt; currently-loaded compiler module.  If the user changes the compiler
</span><br>
<span class="quotelev2">&gt; &gt; module, will that cause the mpi module to also be reloaded so the new
</span><br>
<span class="quotelev2">&gt; &gt; settings will be loaded?  Or do I need this at all?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for all your help!
</span><br>
<span class="quotelev2">&gt; &gt; --Jim
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4571.php">George Bosilca: "Re: [OMPI users] Shared memory communication limits parallelism?"</a>
<li><strong>Previous message:</strong> <a href="4569.php">Jo&#195;&#163;o Luis Silva: "[OMPI users] Shared memory communication limits parallelism?"</a>
<li><strong>In reply to:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4580.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4580.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
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
