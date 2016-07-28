<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 11:04:12 2007" -->
<!-- isoreceived="20070315150412" -->
<!-- sent="Thu, 15 Mar 2007 09:04:07 -0600" -->
<!-- isosent="20070315150407" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fun with threading" -->
<!-- id="C21EBC87.821F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FCB44A2146B78C479695CF9CCA7EEA8701BA5825_at_excg-isl01" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-15 11:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2801.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Previous message:</strong> <a href="2799.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- 3rd Call"</a>
<li><strong>In reply to:</strong> <a href="2788.php">David Minor: "Re: [OMPI users] Fun with threading"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to the MPI problems mentioned in here as my area of focus is
<br>
solely on the RTE. With that caveat, I can say that - despite the fact there
<br>
is little thread safety testing in the system - I haven't heard of any
<br>
trouble launching non-MPI apps. We do it regularly, in both threaded and
<br>
non-threaded builds, on a wide variety of clusters and smp's...although I
<br>
confess that I personally build with --disable-progress-thread and other
<br>
threading options &quot;off&quot; given the state of thread safety testing.
<br>
<p>That said, there are several known problems in the 1.1.x code series that
<br>
can result in the system &quot;hanging&quot;. For example, if the system is unable to
<br>
locate the specified application or lacks permissions to execute it on the
<br>
remote node, and the rsh launcher is being used, then it can result in your
<br>
described behavior.
<br>
<p>We have made considerable improvement in that regard in the 1.2 release that
<br>
is expected out momentarily. I've been told that there are no plans to
<br>
provide any more bug fixes for the 1.1 code series - it will basically end
<br>
with the upcoming 1.1.5 release, which does *not* contain fixes for problems
<br>
such as the example I described.
<br>
<p>If you can, therefore, I would suggest upgrading to the 1.2 release (the
<br>
final release candidate is on the site - the official release looks like it
<br>
will be identical to that candidate).
<br>
<p>I'll have to let the team members who focus on the MPI layer address the
<br>
other problems you mentioned.
<br>
<p>Ralph
<br>
<p>On 3/13/07 4:31 AM, &quot;David Minor&quot; &lt;david-m_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sounds like bad news about the threading. That's probably what's hanging me as
</span><br>
<span class="quotelev1">&gt; well. We're running clusters of multi-core smp's, our app NEEDS
</span><br>
<span class="quotelev1">&gt; multi-threading. It'd be nice to get an &quot;official&quot; reply on this from someone
</span><br>
<span class="quotelev1">&gt; on the dev team.
</span><br>
<span class="quotelev1">&gt; -David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Mike Houston
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, March 13, 2007 5:52 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Fun with threading
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At least with 1.1.4, I'm having a heck of a time with enabling
</span><br>
<span class="quotelev1">&gt; multi-threading.  Configuring with --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --enable-progress-threads leads to mpirun just
</span><br>
<span class="quotelev1">&gt; hanging, even when not launching MPI apps, i.e. mpirun -np 1 hostname,
</span><br>
<span class="quotelev1">&gt; and I can't crtl-c to kill it, I have to kill -9 it.  Removing progress
</span><br>
<span class="quotelev1">&gt; threads support results in the same behavior.  Removing
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads gets mpirun working again, but not the thread
</span><br>
<span class="quotelev1">&gt; protection I need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the status for multi thread support?  It looks like it's still
</span><br>
<span class="quotelev1">&gt; largely untested from my reading of the mailing lists.  We actually have
</span><br>
<span class="quotelev1">&gt; an application that would be much easier to deal with if we could have
</span><br>
<span class="quotelev1">&gt; two threads in a process both using MPI.  Funneling everything through a
</span><br>
<span class="quotelev1">&gt; single processor creates a locking nightmare, and generally means we
</span><br>
<span class="quotelev1">&gt; will be forced to spin checking a IRecv and the status of a data
</span><br>
<span class="quotelev1">&gt; structure instead of having one thread happily sitting on a blocking
</span><br>
<span class="quotelev1">&gt; receive and the other watching the data structure, basically pissing
</span><br>
<span class="quotelev1">&gt; away a processor that we could be using to do something useful.  (We are
</span><br>
<span class="quotelev1">&gt; basically doing a simplified version of DSM and we need to respond to
</span><br>
<span class="quotelev1">&gt; remote data requests).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the moment, it seems that when running without threading support
</span><br>
<span class="quotelev1">&gt; enabled, if we only post a receive on a single thread, things are mostly
</span><br>
<span class="quotelev1">&gt; happy, except if one thread in process sends to the other thread in the
</span><br>
<span class="quotelev1">&gt; same process who has posted a receive.  Under TCP, the send fails with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed with errno=104
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SM has undefined results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously I'm playing fast and loose, which is why I'm attempting to get
</span><br>
<span class="quotelev1">&gt; threading support to work to see if it solve the headaches.  If you
</span><br>
<span class="quotelev1">&gt; really want to have some fun, have a posted MPI_Recv on one thread and
</span><br>
<span class="quotelev1">&gt; issue an MPI_Barrier on the other (with SM):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x1c
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/lib/libopal.so.0 [0xc030f4]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib/tls/libpthread.so.0 [0x46f93890]
</span><br>
<span class="quotelev1">&gt; [2] 
</span><br>
<span class="quotelev1">&gt; func:/usr/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_frag_match+0xb08)
</span><br>
<span class="quotelev1">&gt; [0x14ec38]
</span><br>
<span class="quotelev1">&gt; [3] 
</span><br>
<span class="quotelev1">&gt; func:/usr/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_frag_callback+0x2f9)
</span><br>
<span class="quotelev1">&gt; [0x14f7e9]
</span><br>
<span class="quotelev1">&gt; [4] 
</span><br>
<span class="quotelev1">&gt; func:/usr/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0xa87)
</span><br>
<span class="quotelev1">&gt; [0x806c07]
</span><br>
<span class="quotelev1">&gt; [5] func:/usr/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x39) [0x510c69]
</span><br>
<span class="quotelev1">&gt; [6] func:/usr/lib/libopal.so.0(opal_progress+0x69) [0xbecc39]
</span><br>
<span class="quotelev1">&gt; [7] func:/usr/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x785) [0x14d675]
</span><br>
<span class="quotelev1">&gt; [8] 
</span><br>
<span class="quotelev1">&gt; func:/usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual_localc
</span><br>
<span class="quotelev1">&gt; ompleted+0x8c) 
</span><br>
<span class="quotelev1">&gt; [0x5cc3fc]
</span><br>
<span class="quotelev1">&gt; [9] 
</span><br>
<span class="quotelev1">&gt; func:/usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_two_proc
</span><br>
<span class="quotelev1">&gt; s+0x76) 
</span><br>
<span class="quotelev1">&gt; [0x5ceef6]
</span><br>
<span class="quotelev1">&gt; [10] 
</span><br>
<span class="quotelev1">&gt; func:/usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_dec_fixe
</span><br>
<span class="quotelev1">&gt; d+0x38) 
</span><br>
<span class="quotelev1">&gt; [0x5cc638]
</span><br>
<span class="quotelev1">&gt; [11] func:/usr/lib/libmpi.so.0(PMPI_Barrier+0xe9) [0x29a1b9]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Mike
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2801.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Previous message:</strong> <a href="2799.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- 3rd Call"</a>
<li><strong>In reply to:</strong> <a href="2788.php">David Minor: "Re: [OMPI users] Fun with threading"</a>
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
