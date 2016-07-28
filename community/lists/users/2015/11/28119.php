<?
$subject_val = "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 27 14:37:56 2015" -->
<!-- isoreceived="20151127193756" -->
<!-- sent="Fri, 27 Nov 2015 17:37:53 -0200" -->
<!-- isosent="20151127193753" -->
<!-- name="Felipe ." -->
<!-- email="philip.fm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce" -->
<!-- id="CACvpwa8=5FYvd43+YQaKmm8Eo85JC1+Wpbp5tPoc4r5OB641+w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CACvpwa-Nq9ZExJD3A8+ZD4K3FRZaga4VrTHcETMXk2AFWYcO2A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce<br>
<strong>From:</strong> Felipe . (<em>philip.fm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-27 14:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28120.php">Ralph Castain: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Previous message:</strong> <a href="28118.php">Nick Papior: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>In reply to:</strong> <a href="28117.php">Felipe .: "[OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28120.php">Ralph Castain: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Reply:</strong> <a href="28120.php">Ralph Castain: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;Try and do a variable amount of work for every process, I see non-blocking
</span><br>
<span class="quotelev1">&gt;as a way to speed-up communication if they arrive individually to the
</span><br>
call.
<br>
<span class="quotelev1">&gt;Please always have this at the back of your mind when doing this.
</span><br>
<p>I tried to simplify the problem at the explanation. The &quot;local_computation&quot;
<br>
is variable among different processes, so there is load imbalance in the
<br>
real problem.
<br>
The microbenchmark was just a way to test the overhead, which was really
<br>
much greater than expectations.
<br>
<p><span class="quotelev1">&gt;Surely non-blocking has overhead, and if the communication time is low, so
</span><br>
<span class="quotelev1">&gt;will the overhead be much higher.
</span><br>
<p>Off course there is. But for my case, which is a real HPC application for
<br>
seismic data processing, it was prohibitive and strangely high.
<br>
<p><span class="quotelev1">&gt;You haven't specified what nx*ny*nz is, and hence your &quot;slower&quot; and
</span><br>
<span class="quotelev1">&gt;&quot;faster&quot; makes &quot;no sense&quot;... And hence your questions are difficult to
</span><br>
<span class="quotelev1">&gt;answer, basically &quot;it depends&quot;.
</span><br>
<p>On my tests, I used nx = 700, ny = 200,  nz = 60, total_iter = 1000. val is
<br>
a real(4) array. This is basically the same sizeas the real application.
<br>
Since I used the same values for all tests, it is reasonable to analyze the
<br>
results.
<br>
What I meant with question 1 was: overheads so high are expected?
<br>
<p>The microbenchmark is attached to this e-mail.
<br>
<p>The detailed result was (using 11 nodes):
<br>
<p>openmpi blocking:
<br>
&nbsp;==================================
<br>
&nbsp;[RESULT] Reduce time =  21.790411
<br>
&nbsp;[RESULT] Total  time =  24.977373
<br>
&nbsp;==================================
<br>
<p>openmpi non-blocking:
<br>
&nbsp;==================================
<br>
&nbsp;[RESULT] Reduce time =  97.332792
<br>
&nbsp;[RESULT] Total  time = 100.470874
<br>
&nbsp;==================================
<br>
<p>Intel MPI + blocking:
<br>
&nbsp;==================================
<br>
&nbsp;[RESULT] Reduce time =  17.587828
<br>
&nbsp;[RESULT] Total  time =  20.655875
<br>
&nbsp;==================================
<br>
<p><p>Intel MPI + non-blocking:
<br>
&nbsp;==================================
<br>
&nbsp;[RESULT] Reduce time =  49.483195
<br>
&nbsp;[RESULT] Total  time =  52.642514
<br>
&nbsp;==================================
<br>
<p>Thanks in advance.
<br>
<p>2015-11-27 14:57 GMT-02:00 Felipe . &lt;philip.fm_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a program that basically is (first implementation):
</span><br>
<span class="quotelev1">&gt; for i in N:
</span><br>
<span class="quotelev1">&gt;   local_computation(i)
</span><br>
<span class="quotelev1">&gt;   mpi_allreduce(in_place, i)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to try to mitigate the implicit barrier of the mpi_allreduce, I
</span><br>
<span class="quotelev1">&gt; tried to start an mpi_Iallreduce. Like this(second implementation):
</span><br>
<span class="quotelev1">&gt; for i in N:
</span><br>
<span class="quotelev1">&gt;   local_computation(i)
</span><br>
<span class="quotelev1">&gt;   j = i
</span><br>
<span class="quotelev1">&gt;   if i is not first:
</span><br>
<span class="quotelev1">&gt;     mpi_wait(request)
</span><br>
<span class="quotelev1">&gt;   mpi_Iallreduce(in_place, j, request)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The result was that the second was a lot worse. The processes spent 3
</span><br>
<span class="quotelev1">&gt; times more time on the mpi_wait than on the mpi_allreduce from the first
</span><br>
<span class="quotelev1">&gt; implementation. I know it could be worst, but not that much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I made a microbenchmark to stress this, in Fortran. Here is the
</span><br>
<span class="quotelev1">&gt; implementation:
</span><br>
<span class="quotelev1">&gt; Blocking:
</span><br>
<span class="quotelev1">&gt; do i = 1, total_iter ! [
</span><br>
<span class="quotelev1">&gt;     t_0 = mpi_wtime()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     call mpi_allreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, ierror)
</span><br>
<span class="quotelev1">&gt;     if (ierror .ne. 0) then ! [
</span><br>
<span class="quotelev1">&gt;         write(*,*) &quot;Error in line &quot;, __LINE__, &quot; rank = &quot;, rank
</span><br>
<span class="quotelev1">&gt;         call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
</span><br>
<span class="quotelev1">&gt;     end if ! ]
</span><br>
<span class="quotelev1">&gt;     t_reduce = t_reduce + (mpi_wtime() - t_0)
</span><br>
<span class="quotelev1">&gt; end do ! ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Non-Blocking:
</span><br>
<span class="quotelev1">&gt; do i = 1, total_iter ! [
</span><br>
<span class="quotelev1">&gt;     t_0 = mpi_wtime()
</span><br>
<span class="quotelev1">&gt;     call mpi_iallreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, request, ierror)
</span><br>
<span class="quotelev1">&gt;     if (ierror .ne. 0) then ! [
</span><br>
<span class="quotelev1">&gt;         write(*,*) &quot;Error in line &quot;, __LINE__, &quot; rank = &quot;, rank
</span><br>
<span class="quotelev1">&gt;         call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
</span><br>
<span class="quotelev1">&gt;     end if ! ]
</span><br>
<span class="quotelev1">&gt;     t_reduce = t_reduce + (mpi_wtime() - t_0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     t_0 = mpi_wtime()
</span><br>
<span class="quotelev1">&gt;     call mpi_wait(request, status, ierror)
</span><br>
<span class="quotelev1">&gt;     if (ierror .ne. 0) then ! [
</span><br>
<span class="quotelev1">&gt;         write(*,*) &quot;Error in line &quot;, __LINE__, &quot; rank = &quot;, rank
</span><br>
<span class="quotelev1">&gt;         call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
</span><br>
<span class="quotelev1">&gt;     end if ! ]
</span><br>
<span class="quotelev1">&gt;     t_reduce = t_reduce + (mpi_wtime() - t_0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end do ! ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The non-blocking was about five times slower. I tried Intel's MPI and it
</span><br>
<span class="quotelev1">&gt; was of 3 times, instead of 5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question 1: Do you think that all this overhead makes sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question 2: Why is there so much overhead for non-blocking collective
</span><br>
<span class="quotelev1">&gt; calls?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question 3: Can I change the algorithm for the non-blocking allReduce to
</span><br>
<span class="quotelev1">&gt; improve this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Felipe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28119/Teste_AllReduce.F90">Teste_AllReduce.F90</a>
</ul>
<!-- attachment="Teste_AllReduce.F90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28120.php">Ralph Castain: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Previous message:</strong> <a href="28118.php">Nick Papior: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>In reply to:</strong> <a href="28117.php">Felipe .: "[OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28120.php">Ralph Castain: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Reply:</strong> <a href="28120.php">Ralph Castain: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
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
