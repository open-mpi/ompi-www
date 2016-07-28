<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 17:54:10 2006" -->
<!-- isoreceived="20060602215410" -->
<!-- sent="Fri, 2 Jun 2006 17:53:03 -0400" -->
<!-- isosent="20060602215303" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler" -->
<!-- id="F235545B-2E90-4434-AEE2-728D6E3F07CA_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.63.0606021415110.10849_at_www.beowulf.uwo.ca" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 17:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1373.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1371.php">Ralph Castain: "Re: [OMPI users] OpenMPI on VxWorks?"</a>
<li><strong>In reply to:</strong> <a href="1368.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to build OMPI  (1.1a9r10177)  with nag f95  5.0(414)  with  
<br>
out any problems.  To configure it be sure to use:
<br>
&nbsp;&nbsp;FCFLAGS='-mismatch -w'   That is the only really big change,  I did  
<br>
use a prefix path to pbs (for tm)  I also use portland for both my c  
<br>
and c++ compiler.  Here if my full configure, its mostlikly useless  
<br>
to you, but somthing will make sence to you:
<br>
<p>./configure --prefix=/home/software/rhel4/openmpi-1.1a8-nag --with- 
<br>
tm=/home/software/torque-2.0.0p8/ FC=/afs/engin.umich.edu/caen/rhel_4/ 
<br>
nag/bin/f95 F77=/afs/engin.umich.edu/caen/rhel_4/nag/bin/f95  
<br>
FCFLAGS=&quot;-mismatch -w&quot; CC=pgcc CXX=pgCC
<br>
<p>Some things i found, you cant have FCFLAGS have -O3  your mpif90 will  
<br>
segfault.
<br>
<p>Currently though we have problems with OMPI with nag though.   So if  
<br>
some devs have some in sight into this problem would be help.
<br>
Heres the problem,  the package builds fine,  on execution the  
<br>
following error is given:
<br>
<p>-bash-3.00$ mpirun -np 2 SWMF.exe
<br>
[nyx-login.engin.umich.edu:06116] *** An error occurred in MPI_Comm_rank
<br>
[nyx-login.engin.umich.edu:06116] *** on communicator MPI_COMM_WORLD
<br>
[nyx-login.engin.umich.edu:06116] *** MPI_ERR_COMM: invalid communicator
<br>
[nyx-login.engin.umich.edu:06116] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
1 additional process aborted (not shown)
<br>
<p>I know there were some similar messages on the list sooner,  Is this  
<br>
a known problem? If so is a fix in the works? And last is there a  
<br>
timeline for such a fix?
<br>
Brock
<br>
<p><p>On Jun 2, 2006, at 2:32 PM, Doug Roberts wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello, I have tried openmpi-1.1a9r10177 and make is still crashing at
</span><br>
<span class="quotelev1">&gt; the same point, although the error message has change as shown in the
</span><br>
<span class="quotelev1">&gt; next snippet. I've attached the config.log, config.out and make.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/opt/openmpi/openmpi-1.1a9r10177.bld/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; ./scripts/mpi-f90-interfaces.h.sh /opt/openmpi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.1a9r10177.bld/ompi/mpi/f90 &gt; mpi-f90-interfaces.h
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
<span class="quotelev1">&gt; mpi.o mpi.f90
</span><br>
<span class="quotelev1">&gt; Extension: mpi.f90: DOUBLE COMPLEX keyword
</span><br>
<span class="quotelev1">&gt; Extension: mpi-f90-interfaces.h, line 1512: Byte count on numeric  
</span><br>
<span class="quotelev1">&gt; data type
</span><br>
<span class="quotelev1">&gt;            detected at *@1
</span><br>
<span class="quotelev1">&gt; Extension: mpi-f90-interfaces.h, line 1519: Byte count on numeric  
</span><br>
<span class="quotelev1">&gt; data type
</span><br>
<span class="quotelev1">&gt;            detected at *@2
</span><br>
<span class="quotelev1">&gt; Extension: mpi-f90-interfaces.h, line 1526: Byte count on numeric  
</span><br>
<span class="quotelev1">&gt; data type
</span><br>
<span class="quotelev1">&gt;            detected at *@4
</span><br>
<span class="quotelev1">&gt; Extension: mpi-f90-interfaces.h, line 1533: Byte count on numeric  
</span><br>
<span class="quotelev1">&gt; data type
</span><br>
<span class="quotelev1">&gt;            detected at *@8
</span><br>
<span class="quotelev1">&gt; Extension: mpi-f90-interfaces.h, line 1540: Byte count on numeric  
</span><br>
<span class="quotelev1">&gt; data type
</span><br>
<span class="quotelev1">&gt;            detected at *@4
</span><br>
<span class="quotelev1">&gt; Extension: mpi-f90-interfaces.h, line 1547: Byte count on numeric  
</span><br>
<span class="quotelev1">&gt; data type
</span><br>
<span class="quotelev1">&gt;            detected at *@8
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; -Doug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres \(jsquyres\) (jsquyres_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-06-01 17:37:36
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was actually reported earlier today (off list). It was the  
</span><br>
<span class="quotelev2">&gt;&gt; result
</span><br>
<span class="quotelev2">&gt;&gt; of a botched merge from the trunk to the v1.1 branch. I have fixed  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; issue as of r10171 (it was a one-line mistake); the fix should  
</span><br>
<span class="quotelev2">&gt;&gt; show up
</span><br>
<span class="quotelev2">&gt;&gt; in the snapshot tarballs tonight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; Date: Thu, 1 Jun 2006 16:45:50 -0400 (EDT)
</span><br>
<span class="quotelev1">&gt; From: Doug Roberts &lt;roberpj_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, I'm using the NAGWare Fortran 95 compiler Release 5.0(414), but  
</span><br>
<span class="quotelev1">&gt; make
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
<span class="quotelev1">&gt; /opt/openmpi/openmpi-1.1a9r10157.bld/ompi/mpi/f90 &gt; mpi-f90- 
</span><br>
<span class="quotelev1">&gt; interfaces.h
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
<span class="quotelev1">&gt;        detected at SUBROUTINE_at_MPI_TYPE_NULL_DELETE_FN
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument TYPE
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument IERR
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
</span><br>
<span class="quotelev1">&gt; EXTRA_STATE
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
</span><br>
<span class="quotelev1">&gt; ATTRIBUTE_VAL_OUT
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
</span><br>
<span class="quotelev1">&gt; TYPE_KEYVAL
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt; Error: attr_fn-f90-interfaces.h, line 26: MPI_TYPE_NULL_COPY_FN has
</span><br>
<span class="quotelev1">&gt; already been declared EXTERNAL
</span><br>
<span class="quotelev1">&gt;        detected at SUBROUTINE_at_MPI_TYPE_NULL_COPY_FN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help greatly appreciated,
</span><br>
<span class="quotelev1">&gt; -Doug
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1373.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1371.php">Ralph Castain: "Re: [OMPI users] OpenMPI on VxWorks?"</a>
<li><strong>In reply to:</strong> <a href="1368.php">Doug Roberts: "[OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
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
