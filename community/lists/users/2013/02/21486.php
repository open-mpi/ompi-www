<?
$subject_val = "Re: [OMPI users] High cpu usage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 11:43:04 2013" -->
<!-- isoreceived="20130228164304" -->
<!-- sent="Thu, 28 Feb 2013 08:42:56 -0800" -->
<!-- isosent="20130228164256" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] High cpu usage" -->
<!-- id="42064147-9053-4595-A228-7D3C6054CE50_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 11:42:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21487.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21485.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>In reply to:</strong> <a href="21479.php">Bokassa: "[OMPI users] High cpu usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21505.php">Bokassa: "Re: [OMPI users] High cpu usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ,
<br>
<p>First, I don't see any cpu utilization but %time (of a function wrt others  in a process/application).
<br>
Generally for high cpu utilization, there could be many reason. Two of them that comes to my mind is,
<br>
<p>1. Depends on the network stack, eg. the &quot;tcp&quot; way will use more CPU than the &quot;openib&quot; way.
<br>
2. Polling is generally good for performance but comes with a penalty of high CPU utilization.
<br>
<p>Also not sure if a context switch costs CPU utilization, if so gettimeofday could be a reason as for each call there is a user to kernel switch and back to user.
<br>
<p><p><pre>
--
Joba
Sent from my iPhone
On Feb 28, 2013, at 7:34 AM, Bokassa &lt;bokassa_at_[hidden]&gt; wrote:
&gt; Hi,
&gt;   I notice that a simple MPI program in which rank 0 sends 4 bytes to each rank and receives a reply uses a 
&gt;   considerable amount of CPU in system call.s
&gt; 
&gt;   % time     seconds  usecs/call     calls    errors syscall
&gt; ------ ----------- ----------- --------- --------- ----------------
&gt; 61.10    0.016719           3      5194           gettimeofday
&gt; 20.77    0.005683           2      2596           epoll_wait
&gt; 18.13    0.004961           2      2595           sched_yield
&gt;  0.00    0.000000           0         4           write
&gt;  0.00    0.000000           0         4           stat
&gt;  0.00    0.000000           0         2           readv
&gt;  0.00    0.000000           0         2           writev
&gt; ------ ----------- ----------- --------- --------- ----------------
&gt; 100.00    0.027363                 10397           total
&gt; 
&gt; and
&gt; 
&gt;  Process 2512 attached - interrupt to quit
&gt; 16:32:17.793039 sched_yield()           = 0 &lt;0.000078&gt;
&gt; 16:32:17.793276 gettimeofday({1362065537, 793330}, NULL) = 0 &lt;0.000070&gt;
&gt; 16:32:17.793460 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000114&gt;
&gt; 16:32:17.793712 gettimeofday({1362065537, 793773}, NULL) = 0 &lt;0.000097&gt;
&gt; 16:32:17.793914 sched_yield()           = 0 &lt;0.000089&gt;
&gt; 16:32:17.794107 gettimeofday({1362065537, 794157}, NULL) = 0 &lt;0.000083&gt;
&gt; 16:32:17.794292 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000072&gt;
&gt; 16:32:17.794457 gettimeofday({1362065537, 794541}, NULL) = 0 &lt;0.000115&gt;
&gt; 16:32:17.794695 sched_yield()           = 0 &lt;0.000079&gt;
&gt; 16:32:17.794877 gettimeofday({1362065537, 794927}, NULL) = 0 &lt;0.000081&gt;
&gt; 16:32:17.795062 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000079&gt;
&gt; 16:32:17.795244 gettimeofday({1362065537, 795294}, NULL) = 0 &lt;0.000082&gt;
&gt; 16:32:17.795432 sched_yield()           = 0 &lt;0.000096&gt;
&gt; 16:32:17.795761 gettimeofday({1362065537, 795814}, NULL) = 0 &lt;0.000079&gt;
&gt; 16:32:17.795940 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000080&gt;
&gt; 16:32:17.796123 gettimeofday({1362065537, 796191}, NULL) = 0 &lt;0.000121&gt;
&gt; 16:32:17.796388 sched_yield()           = 0 &lt;0.000127&gt;
&gt; 16:32:17.796635 gettimeofday({1362065537, 796722}, NULL) = 0 &lt;0.000121&gt;
&gt; 16:32:17.796951 epoll_wait(4, {}, 32, 0) = 0 &lt;0.000089&gt;
&gt; 
&gt; What is the purpose of this behavior.
&gt; 
&gt; Thanks,
&gt;            David
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21487.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21485.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>In reply to:</strong> <a href="21479.php">Bokassa: "[OMPI users] High cpu usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21505.php">Bokassa: "Re: [OMPI users] High cpu usage"</a>
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
