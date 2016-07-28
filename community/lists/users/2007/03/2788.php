<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 13 06:33:00 2007" -->
<!-- isoreceived="20070313103300" -->
<!-- sent="Tue, 13 Mar 2007 12:31:54 +0200" -->
<!-- isosent="20070313103154" -->
<!-- name="David Minor" -->
<!-- email="david-m_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fun with threading" -->
<!-- id="FCB44A2146B78C479695CF9CCA7EEA8701BA5825_at_excg-isl01" -->
<!-- charset="windows-1255" -->
<!-- inreplyto="[OMPI users] Fun with threading" -->
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
<strong>From:</strong> David Minor (<em>david-m_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-13 06:31:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2789.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2787.php">Mike Houston: "[OMPI users] Fun with threading"</a>
<li><strong>Maybe in reply to:</strong> <a href="2787.php">Mike Houston: "[OMPI users] Fun with threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2800.php">Ralph H Castain: "Re: [OMPI users] Fun with threading"</a>
<li><strong>Reply:</strong> <a href="2800.php">Ralph H Castain: "Re: [OMPI users] Fun with threading"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like bad news about the threading. That's probably what's hanging me as well. We're running clusters of multi-core smp's, our app NEEDS multi-threading. It'd be nice to get an &quot;official&quot; reply on this from someone on the dev team.
<br>
-David
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Mike Houston
<br>
Sent: Tuesday, March 13, 2007 5:52 AM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] Fun with threading
<br>
<p>At least with 1.1.4, I'm having a heck of a time with enabling 
<br>
multi-threading.  Configuring with --with-threads=posix 
<br>
--enable-mpi-threads --enable-progress-threads leads to mpirun just 
<br>
hanging, even when not launching MPI apps, i.e. mpirun -np 1 hostname, 
<br>
and I can't crtl-c to kill it, I have to kill -9 it.  Removing progress 
<br>
threads support results in the same behavior.  Removing 
<br>
--enable-mpi-threads gets mpirun working again, but not the thread 
<br>
protection I need.
<br>
<p>What is the status for multi thread support?  It looks like it's still 
<br>
largely untested from my reading of the mailing lists.  We actually have 
<br>
an application that would be much easier to deal with if we could have 
<br>
two threads in a process both using MPI.  Funneling everything through a 
<br>
single processor creates a locking nightmare, and generally means we 
<br>
will be forced to spin checking a IRecv and the status of a data 
<br>
structure instead of having one thread happily sitting on a blocking 
<br>
receive and the other watching the data structure, basically pissing 
<br>
away a processor that we could be using to do something useful.  (We are 
<br>
basically doing a simplified version of DSM and we need to respond to 
<br>
remote data requests).
<br>
<p>At the moment, it seems that when running without threading support 
<br>
enabled, if we only post a receive on a single thread, things are mostly 
<br>
happy, except if one thread in process sends to the other thread in the 
<br>
same process who has posted a receive.  Under TCP, the send fails with:
<br>
<p>*** An error occurred in MPI_Send
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_INTERN: internal error
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed with errno=104
<br>
<p>SM has undefined results.
<br>
<p>Obviously I'm playing fast and loose, which is why I'm attempting to get 
<br>
threading support to work to see if it solve the headaches.  If you 
<br>
really want to have some fun, have a posted MPI_Recv on one thread and 
<br>
issue an MPI_Barrier on the other (with SM):
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x1c
<br>
[0] func:/usr/lib/libopal.so.0 [0xc030f4]
<br>
[1] func:/lib/tls/libpthread.so.0 [0x46f93890]
<br>
[2] 
<br>
func:/usr/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_frag_match+0xb08) 
<br>
[0x14ec38]
<br>
[3] 
<br>
func:/usr/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_frag_callback+0x2f9) 
<br>
[0x14f7e9]
<br>
[4] 
<br>
func:/usr/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0xa87) 
<br>
[0x806c07]
<br>
[5] func:/usr/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x39) [0x510c69]
<br>
[6] func:/usr/lib/libopal.so.0(opal_progress+0x69) [0xbecc39]
<br>
[7] func:/usr/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x785) [0x14d675]
<br>
[8] 
<br>
func:/usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual_localcompleted+0x8c) 
<br>
[0x5cc3fc]
<br>
[9] 
<br>
func:/usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_two_procs+0x76) 
<br>
[0x5ceef6]
<br>
[10] 
<br>
func:/usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_dec_fixed+0x38) 
<br>
[0x5cc638]
<br>
[11] func:/usr/lib/libmpi.so.0(PMPI_Barrier+0xe9) [0x29a1b9]
<br>
<p>-Mike
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2789.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2787.php">Mike Houston: "[OMPI users] Fun with threading"</a>
<li><strong>Maybe in reply to:</strong> <a href="2787.php">Mike Houston: "[OMPI users] Fun with threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2800.php">Ralph H Castain: "Re: [OMPI users] Fun with threading"</a>
<li><strong>Reply:</strong> <a href="2800.php">Ralph H Castain: "Re: [OMPI users] Fun with threading"</a>
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
