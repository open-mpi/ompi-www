<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 29 23:50:55 2007" -->
<!-- isoreceived="20070930035055" -->
<!-- sent="Sat, 29 Sep 2007 21:50:48 -0600" -->
<!-- isosent="20070930035048" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA" -->
<!-- id="CDBF3429-5052-4064-8205-2A6FE593A596_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0F646EB0-09CA-4E20-BD09-66CD395EA1DE_at_pitt.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-29 23:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4104.php">Mostyn Lewis: "[OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Previous message:</strong> <a href="4102.php">James Conway: "[OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<li><strong>In reply to:</strong> <a href="4102.php">James Conway: "[OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 29, 2007, at 5:15 PM, James Conway wrote:
<br>
<p><span class="quotelev1">&gt; What I notice here is that despite my specification of the Intel
</span><br>
<span class="quotelev1">&gt; compilers on the configure command line (including the correct c++
</span><br>
<span class="quotelev1">&gt; icpc compiler!) the libtool command that fails seems to be using gcc
</span><br>
<span class="quotelev1">&gt; (... --mode=link gcc ...) on the Xgrid sources. This is part of the
</span><br>
<span class="quotelev1">&gt; Modular Component Architecture (MCA) setup (configure.out) and also
</span><br>
<span class="quotelev1">&gt; uses gcc for the compiles:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include -I/Users/conway/
</span><br>
<span class="quotelev1">&gt; programs/openMPI/openmpi-1.2.4/include -I../../../.. -D_REENTRANT -g -
</span><br>
<span class="quotelev1">&gt; O2 -MT src/pls_xgrid_module.lo -MD -MP -MF src/.deps/
</span><br>
<span class="quotelev1">&gt; pls_xgrid_module.Tpo -c src/pls_xgrid_module.m  -fno-common -DPIC -o
</span><br>
<span class="quotelev1">&gt; src/.libs/pls_xgrid_module.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wouldn't expect this, but I can't say if it is intended or not.
</span><br>
<span class="quotelev1">&gt; This particular error can be avoided by excluding xgrid:
</span><br>
<span class="quotelev1">&gt;    ./configure CC=icc CXX=icpc F77=ifort F90=ifort --without-xgrid
</span><br>
<p>The XGrid PLS component is actually written in Objective C, as it  
<br>
needs to use the XGrid Framework, which is in Objective C.  While gcc  
<br>
on OS X is both a C and Objective C compiler, icc is only a C  
<br>
compiler.  So gcc is being invoked as the Objective C compiler in  
<br>
this case.
<br>
<p>Unfortunately, libtool doesn't properly speak Objective C, so when  
<br>
the C compiler and Objective C compiler are different, it can get  
<br>
confused.  We had a workaround for previous 1.2 releases, but with  
<br>
1.2.4, we broke our workaround.  A new, more stable workaround has  
<br>
been committed and should be part of the 1.2.5 release.
<br>
<p>In the meantime, disabling XGrid will obviously work around the issue.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4104.php">Mostyn Lewis: "[OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Previous message:</strong> <a href="4102.php">James Conway: "[OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<li><strong>In reply to:</strong> <a href="4102.php">James Conway: "[OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
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
