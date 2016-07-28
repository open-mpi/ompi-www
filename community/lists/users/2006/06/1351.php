<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 17:37:44 2006" -->
<!-- isoreceived="20060601213744" -->
<!-- sent="Thu, 1 Jun 2006 17:37:36 -0400" -->
<!-- isosent="20060601213736" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95Compiler" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C3E8_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95Compiler" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 17:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1352.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixeddimensions"</a>
<li><strong>Previous message:</strong> <a href="1350.php">Jonathan Blocksom: "[OMPI users] mkfifo failure in mca_btl_sm_component_init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings.
<br>
<p>This was actually reported earlier today (off list).  It was the result
<br>
of a botched merge from the trunk to the v1.1 branch.  I have fixed the
<br>
issue as of r10171 (it was a one-line mistake); the fix should show up
<br>
in the snapshot tarballs tonight. 
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Doug Roberts
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 01, 2006 4:46 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] openmpi-1.1a9r10157 Fails to build with 
</span><br>
<span class="quotelev1">&gt; Nag f95Compiler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, I'm using the NAGWare Fortran 95 compiler Release 
</span><br>
<span class="quotelev1">&gt; 5.0(414), but make
</span><br>
<span class="quotelev1">&gt; fails as shown in the snippet below.  I've attached the config.log,
</span><br>
<span class="quotelev1">&gt; config.out and make.out files. The system is a dual processor Opteron
</span><br>
<span class="quotelev1">&gt; server running a 2.6 x86_64 linux kernel and has a myrinet mx based
</span><br>
<span class="quotelev1">&gt; interconnect which i define at configure time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/opt/openmpi/openmpi-1.1a9r10157.bld/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; ./scripts/mpi-f90-interfaces.h.sh
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/openmpi-1.1a9r10157.bld/ompi/mpi/f90 &gt; 
</span><br>
<span class="quotelev1">&gt; mpi-f90-interfaces.h
</span><br>
<span class="quotelev1">&gt; ***************************************************************
</span><br>
<span class="quotelev1">&gt; * Compiling the mpi.f90 file may take a few minutes.
</span><br>
<span class="quotelev1">&gt; * This is quite normal -- do not be alarmed if the compile
</span><br>
<span class="quotelev1">&gt; * process seems to 'hang' at this point for several minutes.
</span><br>
<span class="quotelev1">&gt; ***************************************************************
</span><br>
<span class="quotelev1">&gt; f95 -I../../../ompi/include -I../../../ompi/include -I. -I.  -c -I. -o
</span><br>
<span class="quotelev1">&gt; mpi.o  mpi.f90
</span><br>
<span class="quotelev1">&gt; Extension: mpi.f90: DOUBLE COMPLEX keyword
</span><br>
<span class="quotelev1">&gt; Error: attr_fn-f90-interfaces.h, line 21: MPI_TYPE_NULL_DELETE_FN has
</span><br>
<span class="quotelev1">&gt; already been declared EXTERNAL
</span><br>
<span class="quotelev1">&gt;         detected at SUBROUTINE_at_MPI_TYPE_NULL_DELETE_FN
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument TYPE
</span><br>
<span class="quotelev1">&gt;           detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument IERR
</span><br>
<span class="quotelev1">&gt;           detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
</span><br>
<span class="quotelev1">&gt; EXTRA_STATE
</span><br>
<span class="quotelev1">&gt;           detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
</span><br>
<span class="quotelev1">&gt; ATTRIBUTE_VAL_OUT
</span><br>
<span class="quotelev1">&gt;           detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
</span><br>
<span class="quotelev1">&gt; TYPE_KEYVAL
</span><br>
<span class="quotelev1">&gt;           detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Error: attr_fn-f90-interfaces.h, line 26: MPI_TYPE_NULL_COPY_FN has
</span><br>
<span class="quotelev1">&gt; already been declared EXTERNAL
</span><br>
<span class="quotelev1">&gt;         detected at SUBROUTINE_at_MPI_TYPE_NULL_COPY_FN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help greatly appreciated,
</span><br>
<span class="quotelev1">&gt; -Doug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1352.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixeddimensions"</a>
<li><strong>Previous message:</strong> <a href="1350.php">Jonathan Blocksom: "[OMPI users] mkfifo failure in mca_btl_sm_component_init"</a>
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
