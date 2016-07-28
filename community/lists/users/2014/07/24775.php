<?
$subject_val = "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 14:54:18 2014" -->
<!-- isoreceived="20140715185418" -->
<!-- sent="Tue, 15 Jul 2014 18:54:16 +0000" -->
<!-- isosent="20140715185416" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB73292486E_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFbC_ZKedqtrEqUStMaRpn4E579rghUQT9cEuOiYH=k9M+6sKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 14:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24776.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="24774.php">Amy Hawke: "[OMPI users] mpi and open-mpi newbie question - connect btl choices"</a>
<li><strong>In reply to:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Na Zhang,
<br>
<p>It seems likely that on your Open MPI 1.8.1 run that you have the 2 ranks running on one host whereas on the 1.6.5 results they are running on 2 hosts.  You should be able to verify that by running top on one of the nodes during the 1.8.1 runs and see if you have 2 or 0 osu_latency processes running on that node.
<br>
<p>Also, it would be useful to see your mpirun or other launch command for your job for both MPI versions.
<br>
<p>Thanks,
<br>
Tom
<br>
<p><p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Na Zhang
<br>
Sent: Tuesday, July 15, 2014 11:01 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1
<br>
<p>Forgot to add the config info about the tests in previous post.
<br>
<p>We have FDR IB, two nodes (HP DL 380 G8 sever) communicating through a Mellanox Switch, RDMA mode, hyperthreading enabled.
<br>
Thanks,
<br>
Na Zhang
<br>
<p>On Tue, Jul 15, 2014 at 12:00 PM, Na Zhang &lt;nkuzhangna_at_[hidden]&lt;mailto:nkuzhangna_at_[hidden]&gt;&gt; wrote:
<br>
Dear developers and users,
<br>
<p>I am trying to run OSU benchmark tests (like osu_latency, osu_bw, etc)  with Open MPI. While I was able to run the tests with both versions (1.6.5, 1.8.1, same default build), I got disparate performance results. Please see data below. I wonder what reason would cause the performance difference.
<br>
<p>And also, I was trying to run the tests with latest release 1.8.2, got the warning like below, and got the results similar to version 1.8.1. How can I avoid this warning?
<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  hostname
<br>
<p>This is a warning only; your job will continue, though performance may
<br>
be degraded.
<br>
--------------------------------------------------------------------------
<br>
<p>Thanks,
<br>
Na Zhang
<br>
<p>Version 1.6.5
<br>
# OSU MPI Latency Test v4.3
<br>
# Size          Latency (us)
<br>
0                       1.83
<br>
1                       1.11
<br>
2                       1.11
<br>
4                       1.11
<br>
8                       1.13
<br>
16                      1.15
<br>
32                      1.17
<br>
64                      1.22
<br>
128                     1.54
<br>
256                     1.73
<br>
512                     1.90
<br>
1024                    2.24
<br>
2048                    2.93
<br>
4096                    3.59
<br>
8192                    4.96
<br>
16384                   7.81
<br>
32768                  11.22
<br>
65536                  18.18
<br>
131072                 32.10
<br>
262144                 59.91
<br>
524288                115.56
<br>
1048576               226.84
<br>
2097152               449.71
<br>
4194304               894.75
<br>
<p>Version 1.8.1
<br>
# OSU MPI Latency Test v4.3
<br>
# Size          Latency (us)
<br>
0                       0.22
<br>
1                       0.27
<br>
2                       0.27
<br>
4                       0.27
<br>
8                       0.27
<br>
16                      0.28
<br>
32                      0.28
<br>
64                      0.31
<br>
128                     0.44
<br>
256                     0.47
<br>
512                     0.48
<br>
1024                    0.60
<br>
2048                    0.83
<br>
4096                    1.30
<br>
8192                    1.95
<br>
16384                   3.45
<br>
32768                   5.79
<br>
65536                   8.88
<br>
131072                 15.79
<br>
262144                 28.78
<br>
524288                 53.50
<br>
1048576               104.09
<br>
2097152               202.54
<br>
4194304               398.43
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24775/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24776.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="24774.php">Amy Hawke: "[OMPI users] mpi and open-mpi newbie question - connect btl choices"</a>
<li><strong>In reply to:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
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
