<?
$subject_val = "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 07:43:07 2015" -->
<!-- isoreceived="20151130124307" -->
<!-- sent="Mon, 30 Nov 2015 10:43:03 -0200" -->
<!-- isosent="20151130124303" -->
<!-- name="Felipe ." -->
<!-- email="philip.fm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce" -->
<!-- id="CACvpwa_YB=X3vJU3dJDfPN=aUMVr4R5GjY=TH1VJBmHQbkvDrg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A7089B6F-C9FC-4052-95CB-8AD47B80F555_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-11-30 07:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28124.php">Jeff Squyres (jsquyres): "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28122.php">Surivinta Surivinta: "Re: [OMPI users] Where can i find a report paper for analyzing MPI complexity"</a>
<li><strong>In reply to:</strong> <a href="28120.php">Ralph Castain: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply, Ralph.
<br>
<p>Now I think it is clearer to me why it could be so much slower. The reason
<br>
would be that the blocking algorithm for reduction has a implementation
<br>
very different than the non-blocking.
<br>
<p>Since there are lots of ways to implement it, are there options to tune the
<br>
non-blocking reduction algorithm and its parameters?
<br>
<p>Something like the ones we have for the blocking versions, for instance:
<br>
&quot;coll_tuned_allreduce_algorithm&quot;, &quot;coll_tuned_reduce_algorithm&quot;, etc.
<br>
<p><pre>
--
Felipe
2015-11-27 18:20 GMT-02:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
&gt; One thing you might want to keep in mind is that &#226;&#128;&#156;non-blocking&#226;&#128;&#157; doesn&#226;&#128;&#153;t
&gt; mean &#226;&#128;&#156;asynchronous progress&#226;&#128;&#157;. The API may not block, but the communications
&gt; only progress whenever you actually call down into the library.
&gt;
&gt; So if you are calling a non-blocking collective, and then make additional
&gt; calls into MPI only rarely, you should expect to see slower performance.
&gt;
&gt; We are working on providing async progress on all operations, but I don&#226;&#128;&#153;t
&gt; believe much (if any) of it is in the release branches so far.
&gt;
&gt;
&gt; On Nov 27, 2015, at 11:37 AM, Felipe . &lt;philip.fm_at_[hidden]&gt; wrote:
&gt;
&gt; &gt;Try and do a variable amount of work for every process, I see non-blocking
&gt;
&gt; &gt;as a way to speed-up communication if they arrive individually to the
&gt; call.
&gt; &gt;Please always have this at the back of your mind when doing this.
&gt;
&gt; I tried to simplify the problem at the explanation. The
&gt; &quot;local_computation&quot; is variable among different processes, so there is load
&gt; imbalance in the real problem.
&gt; The microbenchmark was just a way to test the overhead, which was really
&gt; much greater than expectations.
&gt;
&gt; &gt;Surely non-blocking has overhead, and if the communication time is low, so
&gt;
&gt; &gt;will the overhead be much higher.
&gt;
&gt; Off course there is. But for my case, which is a real HPC application for
&gt; seismic data processing, it was prohibitive and strangely high.
&gt;
&gt; &gt;You haven't specified what nx*ny*nz is, and hence your &quot;slower&quot; and
&gt; &gt;&quot;faster&quot; makes &quot;no sense&quot;... And hence your questions are difficult to
&gt; &gt;answer, basically &quot;it depends&quot;.
&gt;
&gt; On my tests, I used nx = 700, ny = 200,  nz = 60, total_iter = 1000. val
&gt; is a real(4) array. This is basically the same sizeas the real application.
&gt; Since I used the same values for all tests, it is reasonable to analyze
&gt; the results.
&gt; What I meant with question 1 was: overheads so high are expected?
&gt;
&gt; The microbenchmark is attached to this e-mail.
&gt;
&gt; The detailed result was (using 11 nodes):
&gt;
&gt; openmpi blocking:
&gt;  ==================================
&gt;  [RESULT] Reduce time =  21.790411
&gt;  [RESULT] Total  time =  24.977373
&gt;  ==================================
&gt;
&gt; openmpi non-blocking:
&gt;  ==================================
&gt;  [RESULT] Reduce time =  97.332792
&gt;  [RESULT] Total  time = 100.470874
&gt;  ==================================
&gt;
&gt; Intel MPI + blocking:
&gt;  ==================================
&gt;  [RESULT] Reduce time =  17.587828
&gt;  [RESULT] Total  time =  20.655875
&gt;  ==================================
&gt;
&gt;
&gt; Intel MPI + non-blocking:
&gt;  ==================================
&gt;  [RESULT] Reduce time =  49.483195
&gt;  [RESULT] Total  time =  52.642514
&gt;  ==================================
&gt;
&gt; Thanks in advance.
&gt;
&gt; 2015-11-27 14:57 GMT-02:00 Felipe . &lt;philip.fm_at_[hidden]&gt;:
&gt;
&gt;&gt; Hello!
&gt;&gt;
&gt;&gt; I have a program that basically is (first implementation):
&gt;&gt; for i in N:
&gt;&gt;   local_computation(i)
&gt;&gt;   mpi_allreduce(in_place, i)
&gt;&gt;
&gt;&gt; In order to try to mitigate the implicit barrier of the mpi_allreduce, I
&gt;&gt; tried to start an mpi_Iallreduce. Like this(second implementation):
&gt;&gt; for i in N:
&gt;&gt;   local_computation(i)
&gt;&gt;   j = i
&gt;&gt;   if i is not first:
&gt;&gt;     mpi_wait(request)
&gt;&gt;   mpi_Iallreduce(in_place, j, request)
&gt;&gt;
&gt;&gt; The result was that the second was a lot worse. The processes spent 3
&gt;&gt; times more time on the mpi_wait than on the mpi_allreduce from the first
&gt;&gt; implementation. I know it could be worst, but not that much.
&gt;&gt;
&gt;&gt; So, I made a microbenchmark to stress this, in Fortran. Here is the
&gt;&gt; implementation:
&gt;&gt; Blocking:
&gt;&gt; do i = 1, total_iter ! [
&gt;&gt;     t_0 = mpi_wtime()
&gt;&gt;
&gt;&gt;     call mpi_allreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM,
&gt;&gt; MPI_COMM_WORLD, ierror)
&gt;&gt;     if (ierror .ne. 0) then ! [
&gt;&gt;         write(*,*) &quot;Error in line &quot;, __LINE__, &quot; rank = &quot;, rank
&gt;&gt;         call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
&gt;&gt;     end if ! ]
&gt;&gt;     t_reduce = t_reduce + (mpi_wtime() - t_0)
&gt;&gt; end do ! ]
&gt;&gt;
&gt;&gt; Non-Blocking:
&gt;&gt; do i = 1, total_iter ! [
&gt;&gt;     t_0 = mpi_wtime()
&gt;&gt;     call mpi_iallreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM,
&gt;&gt; MPI_COMM_WORLD, request, ierror)
&gt;&gt;     if (ierror .ne. 0) then ! [
&gt;&gt;         write(*,*) &quot;Error in line &quot;, __LINE__, &quot; rank = &quot;, rank
&gt;&gt;         call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
&gt;&gt;     end if ! ]
&gt;&gt;     t_reduce = t_reduce + (mpi_wtime() - t_0)
&gt;&gt;
&gt;&gt;     t_0 = mpi_wtime()
&gt;&gt;     call mpi_wait(request, status, ierror)
&gt;&gt;     if (ierror .ne. 0) then ! [
&gt;&gt;         write(*,*) &quot;Error in line &quot;, __LINE__, &quot; rank = &quot;, rank
&gt;&gt;         call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
&gt;&gt;     end if ! ]
&gt;&gt;     t_reduce = t_reduce + (mpi_wtime() - t_0)
&gt;&gt;
&gt;&gt; end do ! ]
&gt;&gt;
&gt;&gt; The non-blocking was about five times slower. I tried Intel's MPI and it
&gt;&gt; was of 3 times, instead of 5.
&gt;&gt;
&gt;&gt; Question 1: Do you think that all this overhead makes sense?
&gt;&gt;
&gt;&gt; Question 2: Why is there so much overhead for non-blocking collective
&gt;&gt; calls?
&gt;&gt;
&gt;&gt; Question 3: Can I change the algorithm for the non-blocking allReduce to
&gt;&gt; improve this?
&gt;&gt;
&gt;&gt;
&gt;&gt; Best regards,
&gt;&gt; --
&gt;&gt; Felipe
&gt;&gt;
&gt;
&gt; &lt;Teste_AllReduce.F90&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28119.php">http://www.open-mpi.org/community/lists/users/2015/11/28119.php</a>
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28120.php">http://www.open-mpi.org/community/lists/users/2015/11/28120.php</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28123/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28124.php">Jeff Squyres (jsquyres): "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28122.php">Surivinta Surivinta: "Re: [OMPI users] Where can i find a report paper for analyzing MPI complexity"</a>
<li><strong>In reply to:</strong> <a href="28120.php">Ralph Castain: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
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
