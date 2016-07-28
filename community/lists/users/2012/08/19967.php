<?
$subject_val = "Re: [OMPI users] MPI/FORTRAN on a cluster system";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 12:51:34 2012" -->
<!-- isoreceived="20120820165134" -->
<!-- sent="Mon, 20 Aug 2012 12:51:24 -0400" -->
<!-- isosent="20120820165124" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI/FORTRAN on a cluster system" -->
<!-- id="50326B0C.40406_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="811C2380-6864-468E-ACD8-1BFF944F4723_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI/FORTRAN on a cluster system<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 12:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19968.php">Jeff Squyres: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Previous message:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>In reply to:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/20/2012 11:39 AM, Noam Bernstein wrote:
<br>
<span class="quotelev1">&gt; On Aug 20, 2012, at 11:12 AM, David Warren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The biggest issue you may have is that gnu fortran does not support all the fortran constructs that all the others do. Most fortrans have supported the standard plus the DEC extentions. Gnu fortran does not quite get all the standards.Intel fortran does support them all, and I believe that portland group and absoft may also.
</span><br>
<span class="quotelev1">&gt; In my experience most recent versions of gfortran (at least 4.5, maybe earlier)
</span><br>
<span class="quotelev1">&gt; support  about as large a set of standards as anything else (with the exception of a
</span><br>
<span class="quotelev1">&gt; few  F2003 things, but then again, (almost) no one supports those comprehensively).
</span><br>
<span class="quotelev1">&gt; Definitely all of F95 + approved extensions.  Non-standard extensions (DEC,
</span><br>
<span class="quotelev1">&gt; Cray Pointers pre F2003) are another matter - I don't know about those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 													Noam
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
Hi Bill
<br>
<p>I think gfortran supports 'Cray pointers'.
<br>
&nbsp;From the quite old gfortran 4.1.2 man page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-fcray-pointer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enables the Cray pointer extension, which provides a C-like 
<br>
pointer.
<br>
<p>My recollection is that it also supports some DEC extensions,
<br>
particularly those related to 'Cray pointers' [LOC, etc], but I may be 
<br>
wrong.
<br>
<p>If the code is F77 with some tidbits of C++, you probably don't need to 
<br>
worry about gfortran having all the
<br>
F90/95/3003/2008 features.
<br>
You could try to simply adjust your Makefile to point to the OpenMPI 
<br>
compiler wrappers,
<br>
i.e., F77=mpif77 [or FC depending on the Makefile]
<br>
and CXX=mpicxx [or whatever macro/variable your Makefile uses the C++ 
<br>
compiler].
<br>
Using the compiler wrappers you don't need to specify library or include 
<br>
directories, and life becomes much easier.
<br>
If the Makefile somehow forces you to specify these things,
<br>
find out what libraries and includes you really need by looking at the 
<br>
output of these commands:
<br>
mpif77 --show
<br>
mpicxx --show
<br>
You could try this just for kicks,  It may work out of the box, as Jeff 
<br>
suggested, if the program is really portable.
<br>
<p>You may need to use full paths [or tweak with your PATH to point right] 
<br>
to the OpenMPI compiler wrappers,
<br>
in case there are various different MPI flavors installed in your cluster.
<br>
Likewise when you launch the program with mpiexec, make sure it points 
<br>
to the OpenMPI flavor you want.
<br>
Mixing different MPIs is a common source of frustration.
<br>
<p>Make sure your OpenMPI was built with the underlying Gnu compilers, and 
<br>
that the F77 and C++ interface were built
<br>
[you must have the mpif77 and mpicxx wrappers at least].
<br>
Otherwise, it is easy to build OpenMPI from source, with support for 
<br>
your cluster's bells and whistles
<br>
[e.g. Infinband/OFED, Torque or SGE resource managers].
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 08/20/2012 10:02 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 19, 2012, at 12:11 PM, Bill Mulberry wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a large program written in FORTRAN 77 with a couple of routines
</span><br>
<span class="quotelev2">&gt;&gt; written in C++.  It has MPI commands built into it to run on a large scale
</span><br>
<span class="quotelev2">&gt;&gt; multiprocessor IBM systems.  I am now having the task of transferring this
</span><br>
<span class="quotelev2">&gt;&gt; program over to a cluster system.  Both the multiprocessor and cluster
</span><br>
<span class="quotelev2">&gt;&gt; system has linux hosted on them.  The Cluster system has GNU FORTRAN and GNU
</span><br>
<span class="quotelev2">&gt;&gt; C compilers on it.  I am told the Cluster has openmpi.  I am wondering if
</span><br>
<span class="quotelev2">&gt;&gt; anybody out there has had to do the same task and if so what I can expect
</span><br>
<span class="quotelev2">&gt;&gt; from this.  Will I be expected to make some big changes, etc.?  Any advice
</span><br>
<span class="quotelev2">&gt;&gt; will be appreciated.
</span><br>
<span class="quotelev1">&gt; MPI and Fortran are generally portable, meaning that if you wrote a correct MPI Fortran application, it should be immediately portable to a new system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, many applications are accidentally/inadvertently not correct.  For example, when you try to compile your application on a Linux cluster with Open MPI, you'll find that you accidentally used a Fortran construct that was specific to IBM's Fortran compiler and is not portable.  Similarly, when you run the application, you may find that inadvertently you used an implicit assumption for IBM's MPI implementation that isn't true for Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...or you may find that everything just works, and you can raise a toast to the portability gods.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I expect that your build / compile / link procedure may change a bit from the old system to the new system.  In Open MPI, you should be able to use &quot;mpif77&quot; and/or &quot;mpif90&quot; to compile and link everything.  No further MPI-related flags are necessary (no need to -I to specify where mpif.h is located, no need to -lmpi, ...etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19968.php">Jeff Squyres: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>Previous message:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>In reply to:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<!-- nextthread="start" -->
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
