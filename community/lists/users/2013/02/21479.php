<?
$subject_val = "[OMPI users] High cpu usage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 10:34:57 2013" -->
<!-- isoreceived="20130228153457" -->
<!-- sent="Thu, 28 Feb 2013 16:34:33 +0100" -->
<!-- isosent="20130228153433" -->
<!-- name="Bokassa" -->
<!-- email="bokassa_at_[hidden]" -->
<!-- subject="[OMPI users] High cpu usage" -->
<!-- id="CAEgXUHkNFHjjbJkzb-jj956+_HqguCG2gVP2jGMWghtHv+ZwmQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] High cpu usage<br>
<strong>From:</strong> Bokassa (<em>bokassa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 10:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21480.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Previous message:</strong> <a href="21478.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21486.php">Jingcha Joba: "Re: [OMPI users] High cpu usage"</a>
<li><strong>Reply:</strong> <a href="21486.php">Jingcha Joba: "Re: [OMPI users] High cpu usage"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21505.php">Bokassa: "Re: [OMPI users] High cpu usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I notice that a simple MPI program in which rank 0 sends 4 bytes to each
<br>
rank and receives a reply uses a
<br>
&nbsp;&nbsp;&nbsp;considerable amount of CPU in system call.s
<br>
<p>&nbsp;&nbsp;&nbsp;% time     seconds  usecs/call     calls    errors syscall
<br>
------ ----------- ----------- --------- --------- ----------------
<br>
&nbsp;61.10    0.016719           3      5194           gettimeofday
<br>
&nbsp;20.77    0.005683           2      2596           epoll_wait
<br>
&nbsp;18.13    0.004961           2      2595           sched_yield
<br>
&nbsp;&nbsp;0.00    0.000000           0         4           write
<br>
&nbsp;&nbsp;0.00    0.000000           0         4           stat
<br>
&nbsp;&nbsp;0.00    0.000000           0         2           readv
<br>
&nbsp;&nbsp;0.00    0.000000           0         2           writev
<br>
------ ----------- ----------- --------- --------- ----------------
<br>
100.00    0.027363                 10397           total
<br>
<p>and
<br>
<p>&nbsp;&nbsp;Process 2512 attached - interrupt to quit
<br>
16:32:17.793039 sched_yield()           = 0 &lt;0.000078&gt;
<br>
16:32:17.793276 gettimeofday({1362065537, 793330}, NULL) = 0 &lt;0.000070&gt;
<br>
16:32:17.793460 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000114&gt;
<br>
16:32:17.793712 gettimeofday({1362065537, 793773}, NULL) = 0 &lt;0.000097&gt;
<br>
16:32:17.793914 sched_yield()           = 0 &lt;0.000089&gt;
<br>
16:32:17.794107 gettimeofday({1362065537, 794157}, NULL) = 0 &lt;0.000083&gt;
<br>
16:32:17.794292 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000072&gt;
<br>
16:32:17.794457 gettimeofday({1362065537, 794541}, NULL) = 0 &lt;0.000115&gt;
<br>
16:32:17.794695 sched_yield()           = 0 &lt;0.000079&gt;
<br>
16:32:17.794877 gettimeofday({1362065537, 794927}, NULL) = 0 &lt;0.000081&gt;
<br>
16:32:17.795062 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000079&gt;
<br>
16:32:17.795244 gettimeofday({1362065537, 795294}, NULL) = 0 &lt;0.000082&gt;
<br>
16:32:17.795432 sched_yield()           = 0 &lt;0.000096&gt;
<br>
16:32:17.795761 gettimeofday({1362065537, 795814}, NULL) = 0 &lt;0.000079&gt;
<br>
16:32:17.795940 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000080&gt;
<br>
16:32:17.796123 gettimeofday({1362065537, 796191}, NULL) = 0 &lt;0.000121&gt;
<br>
16:32:17.796388 sched_yield()           = 0 &lt;0.000127&gt;
<br>
16:32:17.796635 gettimeofday({1362065537, 796722}, NULL) = 0 &lt;0.000121&gt;
<br>
16:32:17.796951 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000089&gt;
<br>
<p>What is the purpose of this behavior.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21479/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21480.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Previous message:</strong> <a href="21478.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21486.php">Jingcha Joba: "Re: [OMPI users] High cpu usage"</a>
<li><strong>Reply:</strong> <a href="21486.php">Jingcha Joba: "Re: [OMPI users] High cpu usage"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21505.php">Bokassa: "Re: [OMPI users] High cpu usage"</a>
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
