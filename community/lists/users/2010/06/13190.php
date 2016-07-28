<?
$subject_val = "[OMPI users] 1.4.2 build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  1 17:27:45 2010" -->
<!-- isoreceived="20100601212745" -->
<!-- sent="Tue, 01 Jun 2010 15:27:40 -0600" -->
<!-- isosent="20100601212740" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] 1.4.2 build problem" -->
<!-- id="4C057B4C.5000206_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-01 17:27:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13191.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13189.php">Shiqing Fan: "Re: [OMPI users] heterogeneous cluster setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13195.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>Reply:</strong> <a href="13195.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After patching, I get:
<br>
<p>make[3]: Entering directory 
<br>
`/scr_iter/cary/facetspkgs/builds/openmpi-1.4.2/nodl/ompi/contrib/vt/vt'
<br>
make[3]: *** No rule to make target 
<br>
`/scr_iter/cary/facetspkgs/builds/openmpi/ompi/contrib/vt/vt/m4/acinclude.compinst.m4', 
<br>
needed by 
<br>
`/scr_iter/cary/facetspkgs/builds/openmpi/ompi/contrib/vt/vt/Makefile.in'.  
<br>
Stop.
<br>
make[3]: Leaving directory 
<br>
`/scr_iter/cary/facetspkgs/builds/openmpi-1.4.2/nodl/ompi/contrib/vt/vt'
<br>
<p>configured with
<br>
<p>/scr_iter/cary/facetspkgs/builds/openmpi/configure 
<br>
--prefix=/usr/local/contrib/openmpi-1.4.2-nodl CC='gcc' CXX='g++' 
<br>
FC='gfortran' F77='gfortran' --enable-static --with-pic --disable-dlopen 
<br>
--with-wrapper-ldflags=-Wl,-rpath,/usr/local/contrib/openmpi-1.4.2-nodl/lib  
<br>
--with-valgrind=/usr/local/contrib/valgrind
<br>
<p>on
<br>
<p>iter.cary$ uname -a; gcc --version
<br>
Linux iter.txcorp.com 2.6.29.4-167.fc11.x86_64 #1 SMP Wed May 27 
<br>
17:27:08 EDT 2009 x86_64 x86_64 x86_64 GNU/Linux
<br>
gcc (GCC) 4.4.0 20090506 (Red Hat 4.4.0-4)
<br>
<p>I will try
<br>
<p>--enable-contrib-no-build=vt
<br>
<p>FYI....John Cary
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13191.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13189.php">Shiqing Fan: "Re: [OMPI users] heterogeneous cluster setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13195.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>Reply:</strong> <a href="13195.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
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
