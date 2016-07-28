<?
$subject_val = "Re: [OMPI users] High cpu usage";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 13:49:18 2013" -->
<!-- isoreceived="20130305184918" -->
<!-- sent="Tue, 5 Mar 2013 19:48:55 +0100" -->
<!-- isosent="20130305184855" -->
<!-- name="Bokassa" -->
<!-- email="bokassa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] High cpu usage" -->
<!-- id="CAEgXUHki806Rj57dxkT=gfrxZUj9Aftj6gkiuPFN3Q6En3E_Og_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEgXUHkNFHjjbJkzb-jj956+_HqguCG2gVP2jGMWghtHv+ZwmQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] High cpu usage<br>
<strong>From:</strong> Bokassa (<em>bokassa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 13:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21506.php">Smith, Brian E.: "[OMPI users] Strange IO issues in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="21504.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21479.php">Bokassa: "[OMPI users] High cpu usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I was wondering if there is any way to reduce the cpu usage the
<br>
openmpi seems to spend in the busy wait loop.
<br>
Thanks,
<br>
<p>/David
<br>
<p><p>On Thu, Feb 28, 2013 at 4:34 PM, Bokassa &lt;bokassa_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;    I notice that a simple MPI program in which rank 0 sends 4 bytes to
</span><br>
<span class="quotelev1">&gt; each rank and receives a reply uses a
</span><br>
<span class="quotelev1">&gt;    considerable amount of CPU in system call.s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    % time     seconds  usecs/call     calls    errors syscall
</span><br>
<span class="quotelev1">&gt; ------ ----------- ----------- --------- --------- ----------------
</span><br>
<span class="quotelev1">&gt;  61.10    0.016719           3      5194           gettimeofday
</span><br>
<span class="quotelev1">&gt;  20.77    0.005683           2      2596           epoll_wait
</span><br>
<span class="quotelev1">&gt;  18.13    0.004961           2      2595           sched_yield
</span><br>
<span class="quotelev1">&gt;   0.00    0.000000           0         4           write
</span><br>
<span class="quotelev1">&gt;   0.00    0.000000           0         4           stat
</span><br>
<span class="quotelev1">&gt;   0.00    0.000000           0         2           readv
</span><br>
<span class="quotelev1">&gt;   0.00    0.000000           0         2           writev
</span><br>
<span class="quotelev1">&gt; ------ ----------- ----------- --------- --------- ----------------
</span><br>
<span class="quotelev1">&gt; 100.00    0.027363                 10397           total
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 2512 attached - interrupt to quit
</span><br>
<span class="quotelev1">&gt; 16:32:17.793039 sched_yield()           = 0 &lt;0.000078&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.793276 gettimeofday({1362065537, 793330}, NULL) = 0 &lt;0.000070&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.793460 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000114&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.793712 gettimeofday({1362065537, 793773}, NULL) = 0 &lt;0.000097&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.793914 sched_yield()           = 0 &lt;0.000089&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.794107 gettimeofday({1362065537, 794157}, NULL) = 0 &lt;0.000083&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.794292 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000072&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.794457 gettimeofday({1362065537, 794541}, NULL) = 0 &lt;0.000115&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.794695 sched_yield()           = 0 &lt;0.000079&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.794877 gettimeofday({1362065537, 794927}, NULL) = 0 &lt;0.000081&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.795062 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000079&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.795244 gettimeofday({1362065537, 795294}, NULL) = 0 &lt;0.000082&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.795432 sched_yield()           = 0 &lt;0.000096&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.795761 gettimeofday({1362065537, 795814}, NULL) = 0 &lt;0.000079&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.795940 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000080&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.796123 gettimeofday({1362065537, 796191}, NULL) = 0 &lt;0.000121&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.796388 sched_yield()           = 0 &lt;0.000127&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.796635 gettimeofday({1362065537, 796722}, NULL) = 0 &lt;0.000121&gt;
</span><br>
<span class="quotelev1">&gt; 16:32:17.796951 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000089&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the purpose of this behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;             David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21506.php">Smith, Brian E.: "[OMPI users] Strange IO issues in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="21504.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21479.php">Bokassa: "[OMPI users] High cpu usage"</a>
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
