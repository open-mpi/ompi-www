<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 16:45:53 2006" -->
<!-- isoreceived="20060601204553" -->
<!-- sent="Thu, 1 Jun 2006 16:45:50 -0400 (EDT)" -->
<!-- isosent="20060601204550" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler" -->
<!-- id="Pine.LNX.4.63.0606011636080.22031_at_www.beowulf.uwo.ca" -->
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
<strong>Date:</strong> 2006-06-01 16:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1350.php">Jonathan Blocksom: "[OMPI users] mkfifo failure in mca_btl_sm_component_init"</a>
<li><strong>Previous message:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm using the NAGWare Fortran 95 compiler Release 5.0(414), but make
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
<li>APPLICATION/X-GZIP attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1349/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1350.php">Jonathan Blocksom: "[OMPI users] mkfifo failure in mca_btl_sm_component_init"</a>
<li><strong>Previous message:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
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
