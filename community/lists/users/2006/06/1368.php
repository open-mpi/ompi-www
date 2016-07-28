<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 14:32:47 2006" -->
<!-- isoreceived="20060602183247" -->
<!-- sent="Fri, 2 Jun 2006 14:32:45 -0400 (EDT)" -->
<!-- isosent="20060602183245" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler" -->
<!-- id="Pine.LNX.4.63.0606021415110.10849_at_www.beowulf.uwo.ca" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 14:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Previous message:</strong> <a href="1367.php">Ali Eghlima: "[OMPI users] OpenMPI on VxWorks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1372.php">Brock Palen: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Reply:</strong> <a href="1372.php">Brock Palen: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, I have tried openmpi-1.1a9r10177 and make is still crashing at
<br>
the same point, although the error message has change as shown in the
<br>
next snippet. I've attached the config.log, config.out and make.out
<br>
<p>make[4]: Entering directory
<br>
`/opt/openmpi/openmpi-1.1a9r10177.bld/ompi/mpi/f90'
<br>
./scripts/mpi-f90-interfaces.h.sh 
<br>
/opt/openmpi/openmpi-1.1a9r10177.bld/ompi/mpi/f90 &gt; mpi-f90-interfaces.h
<br>
***************************************************************
<br>
* Compiling the mpi.f90 file may take a few minutes.
<br>
* This is quite normal -- do not be alarmed if the compile
<br>
* process seems to 'hang' at this point for several minutes.
<br>
***************************************************************
<br>
f95 -I../../../ompi/include -I../../../ompi/include -I. -I.  -c -I. -o
<br>
mpi.o mpi.f90
<br>
Extension: mpi.f90: DOUBLE COMPLEX keyword
<br>
Extension: mpi-f90-interfaces.h, line 1512: Byte count on numeric data type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at *@1
<br>
Extension: mpi-f90-interfaces.h, line 1519: Byte count on numeric data type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at *@2
<br>
Extension: mpi-f90-interfaces.h, line 1526: Byte count on numeric data type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at *@4
<br>
Extension: mpi-f90-interfaces.h, line 1533: Byte count on numeric data type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at *@8
<br>
Extension: mpi-f90-interfaces.h, line 1540: Byte count on numeric data type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at *@4
<br>
Extension: mpi-f90-interfaces.h, line 1547: Byte count on numeric data type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at *@8
<br>
Many thanks,
<br>
-Doug
<br>
<p><p>---------- Forwarded message ----------
<br>
<span class="quotelev1">&gt; From: Jeff Squyres \(jsquyres\) (jsquyres_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2006-06-01 17:37:36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was actually reported earlier today (off list). It was the result
</span><br>
<span class="quotelev1">&gt; of a botched merge from the trunk to the v1.1 branch. I have fixed the
</span><br>
<span class="quotelev1">&gt; issue as of r10171 (it was a one-line mistake); the fix should show up
</span><br>
<span class="quotelev1">&gt; in the snapshot tarballs tonight.
</span><br>
<p><p>---------- Forwarded message ----------
<br>
Date: Thu, 1 Jun 2006 16:45:50 -0400 (EDT)
<br>
From: Doug Roberts &lt;roberpj_at_[hidden]&gt;
<br>
To: users_at_[hidden]
<br>
Subject: openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler
<br>
<p>Hi, I'm using the NAGWare Fortran 95 compiler Release 5.0(414), but make
<br>
fails as shown in the snippet below.  I've attached the config.log,
<br>
config.out and make.out files. The system is a dual processor Opteron
<br>
server running a 2.6 x86_64 linux kernel and has a myrinet mx based
<br>
interconnect which i define at configure time.
<br>
<p>make[4]: Entering directory
<br>
`/opt/openmpi/openmpi-1.1a9r10157.bld/ompi/mpi/f90'
<br>
./scripts/mpi-f90-interfaces.h.sh
<br>
/opt/openmpi/openmpi-1.1a9r10157.bld/ompi/mpi/f90 &gt; mpi-f90-interfaces.h
<br>
***************************************************************
<br>
* Compiling the mpi.f90 file may take a few minutes.
<br>
* This is quite normal -- do not be alarmed if the compile
<br>
* process seems to 'hang' at this point for several minutes.
<br>
***************************************************************
<br>
f95 -I../../../ompi/include -I../../../ompi/include -I. -I.  -c -I. -o
<br>
mpi.o  mpi.f90
<br>
Extension: mpi.f90: DOUBLE COMPLEX keyword
<br>
Error: attr_fn-f90-interfaces.h, line 21: MPI_TYPE_NULL_DELETE_FN has
<br>
already been declared EXTERNAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at SUBROUTINE_at_MPI_TYPE_NULL_DELETE_FN
<br>
Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument TYPE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
<br>
Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument IERR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
<br>
Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
<br>
EXTRA_STATE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
<br>
Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
<br>
ATTRIBUTE_VAL_OUT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
<br>
Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
<br>
TYPE_KEYVAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
<br>
Error: attr_fn-f90-interfaces.h, line 26: MPI_TYPE_NULL_COPY_FN has
<br>
already been declared EXTERNAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;detected at SUBROUTINE_at_MPI_TYPE_NULL_COPY_FN
<br>
<p>Any help greatly appreciated,
<br>
-Doug
<br>

<br><hr>
<ul>
<li>APPLICATION/X-GZIP attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1368/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1369.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>Previous message:</strong> <a href="1367.php">Ali Eghlima: "[OMPI users] OpenMPI on VxWorks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1372.php">Brock Palen: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Reply:</strong> <a href="1372.php">Brock Palen: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
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
