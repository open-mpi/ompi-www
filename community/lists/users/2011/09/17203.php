<?
$subject_val = "Re: [OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 11:35:49 2011" -->
<!-- isoreceived="20110908153549" -->
<!-- sent="Thu, 08 Sep 2011 08:35:34 -0700" -->
<!-- isosent="20110908153534" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_BARRIER" -->
<!-- id="4E68E0C6.6050801_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C994AD42-6AEC-4BAD-A549-2E394A010BA4_at_coria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_BARRIER<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 11:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17202.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17201.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should know OMPI better than I do, but generally, when you make an MPI 
<br>
call, you could be diving into all kinds of other stuff.  E.g., with 
<br>
non-blocking point-to-point operations, a message might make progress 
<br>
during another MPI call.  E.g.,
<br>
<p>MPI_Irecv(recv_req)
<br>
MPI_Isend(send_req)
<br>
MPI_Wait(send_req)
<br>
MPI_Wait(recv_req)
<br>
<p>A receive is started in one call and completed in another, but it's 
<br>
quite possible that most of the data transfer (and waiting time) occurs 
<br>
while the program is in the calls associated with the send.  The 
<br>
accounting gets tricky.
<br>
<p>So, I'm guessing during the second barrier, MPI is busy making progress 
<br>
on the pending non-blocking point-to-point operations, where progress is 
<br>
possible.  It isn't purely a barrier operation.
<br>
<p>On 9/8/2011 8:04 AM, Ghislain Lartigue wrote:
<br>
<span class="quotelev1">&gt; This behavior happens at every call (first and following)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my code (simplified):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ================================================================
</span><br>
<span class="quotelev1">&gt; start_time = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; call mpi_ext_barrier()
</span><br>
<span class="quotelev1">&gt; new_time = MPI_Wtime()-start_time
</span><br>
<span class="quotelev1">&gt; write(local_time,'(F9.1)') new_time*1.0e9_WP/(36.0_WP*36.0_WP*36.0_WP)
</span><br>
<span class="quotelev1">&gt; call print_message(&quot;CAST GHOST DATA2 LOOP 1 barrier &quot;//trim(local_time),0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              do conn_index_id=1, Nconn(conn_type_id)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    ! loop over data
</span><br>
<span class="quotelev1">&gt;                    this_data =&gt;  block%data
</span><br>
<span class="quotelev1">&gt;                    do while (associated(this_data))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                          MPI_IRECV(...)
</span><br>
<span class="quotelev1">&gt;                          MPI_ISEND(...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    this_data =&gt;  this_data%next
</span><br>
<span class="quotelev1">&gt;                    enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; start_time = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; call mpi_ext_barrier()
</span><br>
<span class="quotelev1">&gt; new_time = MPI_Wtime()-start_time
</span><br>
<span class="quotelev1">&gt; write(local_time,'(F9.1)') new_time*1.0e9_WP/(36.0_WP*36.0_WP*36.0_WP)
</span><br>
<span class="quotelev1">&gt; call print_message(&quot;CAST GHOST DATA2 LOOP 2 barrier &quot;//trim(local_time),0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           done=.false.
</span><br>
<span class="quotelev1">&gt;           counter = 0
</span><br>
<span class="quotelev1">&gt;           do while (.not.done)
</span><br>
<span class="quotelev1">&gt;              do ireq=1,nreq
</span><br>
<span class="quotelev1">&gt;                 if (recv_req(ireq)/=MPI_REQUEST_NULL) then
</span><br>
<span class="quotelev1">&gt;                    call MPI_TEST(recv_req(ireq),found,mystatus,icommerr)
</span><br>
<span class="quotelev1">&gt;                    if (found) then
</span><br>
<span class="quotelev1">&gt;                       call ....
</span><br>
<span class="quotelev1">&gt;                       counter=counter+1
</span><br>
<span class="quotelev1">&gt;                    endif
</span><br>
<span class="quotelev1">&gt;                 endif
</span><br>
<span class="quotelev1">&gt;              enddo
</span><br>
<span class="quotelev1">&gt;              if (counter==nreq) then
</span><br>
<span class="quotelev1">&gt;                 done=.true.
</span><br>
<span class="quotelev1">&gt;              endif
</span><br>
<span class="quotelev1">&gt;           enddo
</span><br>
<span class="quotelev1">&gt; ================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first call to the barrier works perfectly fine, but the second one gives the strange behavior...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ghislain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 8 sept. 2011 &#224; 16:53, Eugene Loh a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/8/2011 7:42 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will check that, but as I said in first email, this strange behaviour happens only in one place in my code.
</span><br>
<span class="quotelev2">&gt;&gt; Is the strange behavior on the first time, or much later on?  (You seem to imply later on, but I thought I'd ask.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree the behavior is noteworthy, but it's plausible and there's not enough information to explain it based solely on what you've said.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is one scenario.  I don't know if it applies to you since I know very little about what you're doing.  I think with VampirTrace, you can collect performance data into large buffers.  Occasionally, the buffers need to be flushed to disk.  VampirTrace will wait for a good opportunity to do so -- e.g., a global barrier.  So, you execute lots of barriers, but suddenly you hit one where VT wants to flush to disk.  This takes a long time and everyone in the barrier spends a long time in the barrier.  Then, execution resumes and barrier performance looks again like what it used to look like.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, there are various scenarios to explain what you see.  More information would be needed to decide which applies to you.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17202.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17201.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
