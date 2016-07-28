<?
$subject_val = "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 19:30:26 2015" -->
<!-- isoreceived="20151107003026" -->
<!-- sent="Fri, 6 Nov 2015 19:30:21 -0500" -->
<!-- isosent="20151107003021" -->
<!-- name="Saurabh T" -->
<!-- email="saurabh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7" -->
<!-- id="DUB123-W15DAB415C38A722EAD0887B1170_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB123-W277E10D68105F9CF37EE35B1280_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7<br>
<strong>From:</strong> Saurabh T (<em>saurabh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-06 19:30:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="28015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7"</a>
<li><strong>In reply to:</strong> <a href="28014.php">Saurabh T: "[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) (jsquyres_at_[hidden])
&gt; Date: 2015-11-06 18:02:42
&gt;
&gt; Both of these seem to be issues with libnl, which is a dependent library
&gt; that Open MPI uses.

Based on your email, I found this message and thread:
<a href="https://www.open-mpi.org/community/lists/devel/2015/08/17812.php">https://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
which says the problem is with a conflict between libnl and libnl3, and gives a workaround, i.e. to use
--without-verbs
during configure. Both my cases work with this option. Thank you.

Sorry for the copy paste, I did not enable mail delivery.

saurabh


----------------------------------------
&gt; From: saurabh_at_[hidden]
&gt; To: users_at_[hidden]
&gt; Subject: Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7
&gt; Date: Fri, 6 Nov 2015 17:44:06 -0500
&gt;
&gt; Hi,
&gt;
&gt; On Redhat Enterprise Linux 7, I am facing the following problems.
&gt;
&gt; 1. With OpenMPI 1.8.8, everything builds, but the following error appears on running:
&gt; orterun -np 2 hello_cxx
&gt; hello_cxx: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
&gt; hello_cxx: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
&gt; --------------------------------------------------------------------------
&gt; orterun noticed that process rank 0 with PID 18229 on node sim18 exited on signal 6 (Aborted).
&gt; --------------------------------------------------------------------------
&gt;
&gt; 2. With OpenMPI 1.10.1, there is a failure to compile oshmem_info:
&gt; /bin/ld: ../../../oshmem/.libs/liboshmem.a(memheap_base_static.o): undefined reference to symbol '_end'
&gt; /bin/ld: note: '_end' is defined in DSO /lib64/libnl-route-3.so.200 so try adding it to the linker command line
&gt; /lib64/libnl-route-3.so.200: could not read symbols: Invalid operation
&gt; collect2: error: ld returned 1 exit status
&gt; make[2]: *** [oshmem_info] Error 1
&gt;
&gt; Is rhel7 not supported with OpenMPI?
&gt;
&gt; saurabh
&gt;
 		 	   		  </span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="28015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7"</a>
<li><strong>In reply to:</strong> <a href="28014.php">Saurabh T: "[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
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
