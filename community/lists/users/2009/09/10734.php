<?
$subject_val = "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 21:46:23 2009" -->
<!-- isoreceived="20090923014623" -->
<!-- sent="Tue, 22 Sep 2009 21:46:11 -0400" -->
<!-- isosent="20090923014611" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?" -->
<!-- id="6BB3B329-0262-4843-997C-D3FADBA6B483_at_scinet.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6BEC49C3-13CD-483C-8170-AF0E8CFBABDE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 21:46:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10735.php">Rahul Nabar: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10733.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10732.php">Jeff Squyres: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10736.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Jeff:
<br>
<p>I wish I had your problems reproducing this.  This problem apparently  
<br>
rears its head when OpenMPI is compiled with the intel compilers, as  
<br>
well, but only ~1% of the time.  Unfortunately, we have users who  
<br>
launch ~1400 single-node jobs at a go.   So they see on order a dozen  
<br>
or two jobs hang per suite of simulations when using the defaults, but  
<br>
their problem goes away when they use -mca btl self,tcp, or when they  
<br>
use sm but set the number of fifos to np-1.
<br>
<p>At first I had assumed it was a new-ish-architecture thing, as we  
<br>
first saw the problem on the Nehalem Xeon E5540 nodes, but the sample  
<br>
program hangs in exactly the same way on a Harpertown (E5430) machine  
<br>
as well.   So I've been assuming that this is a real problem that for  
<br>
whatever reason is just exposed more with this particular version of  
<br>
this particular compiler.  I'd love to be wrong and for it to be  
<br>
something strange but easily changed in our environment that is  
<br>
causing this.
<br>
<p>Running with your suggested test change, eg
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leftneighbour = rank-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (leftneighbour .eq. -1) then
<br>
!          leftneighbour = nprocs-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leftneighbour = MPI_PROC_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rightneighbour = rank+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rightneighbour .eq. nprocs) then
<br>
!          rightneighbour = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rightneighbour = MPI_PROC_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>like so:
<br>
mpirun -np 6 -mca btl self,sm,tcp ./diffusion-mpi
<br>
<p>I do seem to get different behaviour.  With OpenMPI 1.3.2, the program  
<br>
frequently runs to completion, but when it does so it hangs at the  
<br>
end, which hadn't happened before -- attaching gdb to a process tells  
<br>
me that it's hanging in mpi_finalize;
<br>
(gdb) where
<br>
#0  0x00002b3635ecb51f in poll () from /lib64/libc.so.6
<br>
#1  0x00002b3634bd87c1 in poll_dispatch () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libopen-pal.so.0
<br>
#2  0x00002b3634bd7659 in opal_event_base_loop () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libopen-pal.so.0
<br>
#3  0x00002b3634bcc189 in opal_progress () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libopen-pal.so.0
<br>
#4  0x00002b3636d7cf15 in barrier () from /scinet/gpc/mpi/openmpi/ 
<br>
1.3.2-gcc-v4.4.0-ofed/lib/openmpi/mca_grpcomm_bad.so
<br>
#5  0x00002b363470158b in ompi_mpi_finalize () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi.so.0
<br>
#6  0x00002b36344bb529 in pmpi_finalize__ () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi_f77.so.0
<br>
#7  0x0000000000400f99 in MAIN__ ()
<br>
#8  0x0000000000400fda in main (argc=1, argv=0x7fff3e3908c8)  
<br>
at ../../../gcc-4.4.0/libgfortran/fmain.c:21
<br>
(gdb)
<br>
<p>The rest of the time  (maybe 1/4 of the time?) it hangs mid-run, in  
<br>
the sendrecv:
<br>
(gdb) where
<br>
#0  0x00002b2bb44b4230 in mca_pml_ob1_send () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/openmpi/mca_pml_ob1.so
<br>
#1  0x00002b2baf47d296 in PMPI_Sendrecv () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi.so.0
<br>
#2  0x00002b2baf215540 in pmpi_sendrecv__ () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi_f77.so.0
<br>
#3  0x0000000000400ea6 in MAIN__ ()
<br>
#4  0x0000000000400fda in main (argc=1, argv=0x7fff62d9b9c8)  
<br>
at ../../../gcc-4.4.0/libgfortran/fmain.c:21
<br>
<p><p>When running with OpenMPI 1.3.3, I get hangs in the program  
<br>
significantly _more_ often with this change than before, typically in  
<br>
the sendrecv again
<br>
<p>#0  0x00002aeb89d6cf2b in mca_btl_sm_component_progress () from / 
<br>
scinet/gpc/mpi/openmpi/1.3.3-gcc-v4.4.0-ofed/lib/openmpi/mca_btl_sm.so
<br>
#1  0x00002aeb849bd14a in opal_progress () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.3-gcc-v4.4.0-ofed/lib/libopen-pal.so.0
<br>
#2  0x00002aeb8954f235 in mca_pml_ob1_send () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.3-gcc-v4.4.0-ofed/lib/openmpi/mca_pml_ob1.so
<br>
#3  0x00002aeb84516586 in PMPI_Sendrecv () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.3-gcc-v4.4.0-ofed/lib/libmpi.so.0
<br>
#4  0x00002aeb842ae5b0 in pmpi_sendrecv__ () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.3-gcc-v4.4.0-ofed/lib/libmpi_f77.so.0
<br>
#5  0x0000000000400ea6 in MAIN__ ()
<br>
#6  0x0000000000400fda in main (argc=1, argv=0x7fff12a13068)  
<br>
at ../../../gcc-4.4.0/libgfortran/fmain.c:21
<br>
<p>but again occasionally in the finalize, and (unlike with 1.3.2)  
<br>
occasional successful runs through completion.
<br>
<p>Again, running the program with both versions of openmpi without sm
<br>
mpirun -np 6 -mca btl self,tcp  ./diffusion-mpi
<br>
<p>or with num_fifos=(np-1):
<br>
mpirun -np 6 -mca btl self,sm -mca btl_sm_num_fifos 5 ./diffusion-mpi
<br>
<p>seems to work fine.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<p>On 2009-09-22, at 8:52PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Johnathan --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying; thanks for posting again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm actually unable to replicate your problem.  :-(  I have a new  
</span><br>
<span class="quotelev1">&gt; intel 8 core X5570 box; I'm running at np6 and np8 on both Open MPI  
</span><br>
<span class="quotelev1">&gt; 1.3.2 and 1.3.3 and am not seeing the problem you're seeing.  I even  
</span><br>
<span class="quotelev1">&gt; made your sample program worse -- I made a and b be 100,000 element  
</span><br>
<span class="quotelev1">&gt; real arrays (increasing the count args in MPI_SENDRECV to 100,000 as  
</span><br>
<span class="quotelev1">&gt; well), and increased nsteps to 150,000,000.  No hangs.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The version of the compiler *usually* isn't significant, so gcc 4.x  
</span><br>
<span class="quotelev1">&gt; should be fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, the sm flow control issue was a significant fix, but the  
</span><br>
<span class="quotelev1">&gt; blocking nature of MPI_SENDRECV means that you shouldn't have run  
</span><br>
<span class="quotelev1">&gt; into the problems that were fixed (the main issues had to do with  
</span><br>
<span class="quotelev1">&gt; fast senders exhausting resources of slow receivers -- but  
</span><br>
<span class="quotelev1">&gt; MPI_SENDRECV is synchronous so the senders should always be matching  
</span><br>
<span class="quotelev1">&gt; the speed of the receivers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just for giggles, what happens if you change
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (leftneighbour .eq. -1) then
</span><br>
<span class="quotelev1">&gt;         leftneighbour = nprocs-1
</span><br>
<span class="quotelev1">&gt;      endif
</span><br>
<span class="quotelev1">&gt;      if (rightneighbour .eq. nprocs) then
</span><br>
<span class="quotelev1">&gt;         rightneighbour = 0
</span><br>
<span class="quotelev1">&gt;      endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (leftneighbour .eq. -1) then
</span><br>
<span class="quotelev1">&gt;         leftneighbour = MPI_PROC_NULL
</span><br>
<span class="quotelev1">&gt;      endif
</span><br>
<span class="quotelev1">&gt;      if (rightneighbour .eq. nprocs) then
</span><br>
<span class="quotelev1">&gt;         rightneighbour = MPI_PROC_NULL
</span><br>
<span class="quotelev1">&gt;      endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2009, at 5:09 PM, Jonathan Dursi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Continuing the conversation with myself:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Google pointed me to Trac ticket #1944, which spoke of deadlocks in  
</span><br>
<span class="quotelev2">&gt;&gt; looped collective operations; there is no collective operation  
</span><br>
<span class="quotelev2">&gt;&gt; anywhere in this sample code, but trying one of the suggested  
</span><br>
<span class="quotelev2">&gt;&gt; workarounds/clues:  that is, setting btl_sm_num_fifos to at least  
</span><br>
<span class="quotelev2">&gt;&gt; (np-1) seems to make things work quite reliably, for both OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.2 and 1.3.3; that is, while this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 6 -mca btl sm,self ./diffusion-mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; invariably hangs (at random-seeming numbers of iterations) with  
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.3.2 and sometimes hangs (maybe 10% of the time, again  
</span><br>
<span class="quotelev2">&gt;&gt; seemingly randomly) with 1.3.3,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 6 -mca btl tcp,self ./diffusion-mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 6 -mca btl_sm_num_fifos 5 -mca btl sm,self ./diffusion-mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; always succeeds, with (as one might guess) the second being much  
</span><br>
<span class="quotelev2">&gt;&gt; faster...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	Jonathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jonathan Dursi     &lt;ljdursi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p><pre>
-- 
Jonathan Dursi &lt;ljdursi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10735.php">Rahul Nabar: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10733.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10732.php">Jeff Squyres: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10736.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
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
