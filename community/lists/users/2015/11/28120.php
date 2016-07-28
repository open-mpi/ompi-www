<?
$subject_val = "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 27 15:20:11 2015" -->
<!-- isoreceived="20151127202011" -->
<!-- sent="Fri, 27 Nov 2015 12:20:05 -0800" -->
<!-- isosent="20151127202005" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce" -->
<!-- id="A7089B6F-C9FC-4052-95CB-8AD47B80F555_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CACvpwa8=5FYvd43+YQaKmm8Eo85JC1+Wpbp5tPoc4r5OB641+w_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-27 15:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28121.php">HI05 Nguyen_Tuan_Anh 20111136 AS K56: "[OMPI users] Where can i find a report paper for analyzing MPI complexity"</a>
<li><strong>Previous message:</strong> <a href="28119.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>In reply to:</strong> <a href="28119.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28123.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Reply:</strong> <a href="28123.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing you might want to keep in mind is that &#226;&#128;&#156;non-blocking&#226;&#128;&#157; doesn&#226;&#128;&#153;t mean &#226;&#128;&#156;asynchronous progress&#226;&#128;&#157;. The API may not block, but the communications only progress whenever you actually call down into the library.
<br>
<p>So if you are calling a non-blocking collective, and then make additional calls into MPI only rarely, you should expect to see slower performance.
<br>
<p>We are working on providing async progress on all operations, but I don&#226;&#128;&#153;t believe much (if any) of it is in the release branches so far.
<br>
<p><p><span class="quotelev1">&gt; On Nov 27, 2015, at 11:37 AM, Felipe . &lt;philip.fm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Try and do a variable amount of work for every process, I see non-blocking 
</span><br>
<span class="quotelev2">&gt; &gt;as a way to speed-up communication if they arrive individually to the call. 
</span><br>
<span class="quotelev2">&gt; &gt;Please always have this at the back of your mind when doing this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to simplify the problem at the explanation. The &quot;local_computation&quot; is variable among different processes, so there is load imbalance in the real problem.
</span><br>
<span class="quotelev1">&gt; The microbenchmark was just a way to test the overhead, which was really much greater than expectations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Surely non-blocking has overhead, and if the communication time is low, so 
</span><br>
<span class="quotelev2">&gt; &gt;will the overhead be much higher. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Off course there is. But for my case, which is a real HPC application for seismic data processing, it was prohibitive and strangely high.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;You haven't specified what nx*ny*nz is, and hence your &quot;slower&quot; and 
</span><br>
<span class="quotelev2">&gt; &gt;&quot;faster&quot; makes &quot;no sense&quot;... And hence your questions are difficult to 
</span><br>
<span class="quotelev2">&gt; &gt;answer, basically &quot;it depends&quot;. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my tests, I used nx = 700, ny = 200,  nz = 60, total_iter = 1000. val is a real(4) array. This is basically the same sizeas the real application.
</span><br>
<span class="quotelev1">&gt; Since I used the same values for all tests, it is reasonable to analyze the results. 
</span><br>
<span class="quotelev1">&gt; What I meant with question 1 was: overheads so high are expected?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The microbenchmark is attached to this e-mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The detailed result was (using 11 nodes):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi blocking:
</span><br>
<span class="quotelev1">&gt;  ==================================
</span><br>
<span class="quotelev1">&gt;  [RESULT] Reduce time =  21.790411
</span><br>
<span class="quotelev1">&gt;  [RESULT] Total  time =  24.977373
</span><br>
<span class="quotelev1">&gt;  ==================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi non-blocking:
</span><br>
<span class="quotelev1">&gt;  ==================================
</span><br>
<span class="quotelev1">&gt;  [RESULT] Reduce time =  97.332792
</span><br>
<span class="quotelev1">&gt;  [RESULT] Total  time = 100.470874
</span><br>
<span class="quotelev1">&gt;  ==================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel MPI + blocking:
</span><br>
<span class="quotelev1">&gt;  ==================================
</span><br>
<span class="quotelev1">&gt;  [RESULT] Reduce time =  17.587828
</span><br>
<span class="quotelev1">&gt;  [RESULT] Total  time =  20.655875
</span><br>
<span class="quotelev1">&gt;  ==================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel MPI + non-blocking:
</span><br>
<span class="quotelev1">&gt;  ==================================
</span><br>
<span class="quotelev1">&gt;  [RESULT] Reduce time =  49.483195
</span><br>
<span class="quotelev1">&gt;  [RESULT] Total  time =  52.642514
</span><br>
<span class="quotelev1">&gt;  ==================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-11-27 14:57 GMT-02:00 Felipe . &lt;philip.fm_at_[hidden] &lt;mailto:philip.fm_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Hello!
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
<span class="quotelev1">&gt; In order to try to mitigate the implicit barrier of the mpi_allreduce, I tried to start an mpi_Iallreduce. Like this(second implementation):
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
<span class="quotelev1">&gt; The result was that the second was a lot worse. The processes spent 3 times more time on the mpi_wait than on the mpi_allreduce from the first implementation. I know it could be worst, but not that much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I made a microbenchmark to stress this, in Fortran. Here is the implementation:
</span><br>
<span class="quotelev1">&gt; Blocking:
</span><br>
<span class="quotelev1">&gt; do i = 1, total_iter ! [
</span><br>
<span class="quotelev1">&gt;     t_0 = mpi_wtime()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     call mpi_allreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM, MPI_COMM_WORLD, ierror)
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
<span class="quotelev1">&gt;     call mpi_iallreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM, MPI_COMM_WORLD, request, ierror)
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
<span class="quotelev1">&gt; The non-blocking was about five times slower. I tried Intel's MPI and it was of 3 times, instead of 5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question 1: Do you think that all this overhead makes sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question 2: Why is there so much overhead for non-blocking collective calls?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question 3: Can I change the algorithm for the non-blocking allReduce to improve this?
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
<span class="quotelev1">&gt; &lt;Teste_AllReduce.F90&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28119.php">http://www.open-mpi.org/community/lists/users/2015/11/28119.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/11/28119.php">http://www.open-mpi.org/community/lists/users/2015/11/28119.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28120/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28121.php">HI05 Nguyen_Tuan_Anh 20111136 AS K56: "[OMPI users] Where can i find a report paper for analyzing MPI complexity"</a>
<li><strong>Previous message:</strong> <a href="28119.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>In reply to:</strong> <a href="28119.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28123.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Reply:</strong> <a href="28123.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
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
