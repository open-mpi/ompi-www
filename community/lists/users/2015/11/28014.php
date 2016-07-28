<?
$subject_val = "[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 17:44:10 2015" -->
<!-- isoreceived="20151106224410" -->
<!-- sent="Fri, 6 Nov 2015 17:44:06 -0500" -->
<!-- isosent="20151106224406" -->
<!-- name="Saurabh T" -->
<!-- email="saurabh_at_[hidden]" -->
<!-- subject="[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7" -->
<!-- id="DUB123-W277E10D68105F9CF37EE35B1280_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7<br>
<strong>From:</strong> Saurabh T (<em>saurabh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-06 17:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7"</a>
<li><strong>Previous message:</strong> <a href="28013.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7"</a>
<li><strong>Reply:</strong> <a href="28015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7"</a>
<li><strong>Reply:</strong> <a href="28016.php">Saurabh T: "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

On Redhat Enterprise Linux 7, I am facing the following problems.

1. With OpenMPI 1.8.8, everything builds, but the following error appears on running:
orterun -np 2 hello_cxx
hello_cxx: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
hello_cxx: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
--------------------------------------------------------------------------
orterun noticed that process rank 0 with PID 18229 on node sim18 exited on signal 6 (Aborted).
--------------------------------------------------------------------------

2. With OpenMPI 1.10.1, there is a failure to compile oshmem_info:
/bin/ld: ../../../oshmem/.libs/liboshmem.a(memheap_base_static.o): undefined reference to symbol '_end'
/bin/ld: note: '_end' is defined in DSO /lib64/libnl-route-3.so.200 so try adding it to the linker command line
/lib64/libnl-route-3.so.200: could not read symbols: Invalid operation
collect2: error: ld returned 1 exit status
make[2]: *** [oshmem_info] Error 1

Is rhel7 not supported with OpenMPI?

saurabh
 		 	   		  <br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7"</a>
<li><strong>Previous message:</strong> <a href="28013.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7"</a>
<li><strong>Reply:</strong> <a href="28015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7"</a>
<li><strong>Reply:</strong> <a href="28016.php">Saurabh T: "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
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
