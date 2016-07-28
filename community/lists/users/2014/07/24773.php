<?
$subject_val = "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 14:01:01 2014" -->
<!-- isoreceived="20140715180101" -->
<!-- sent="Tue, 15 Jul 2014 14:01:01 -0400" -->
<!-- isosent="20140715180101" -->
<!-- name="Na Zhang" -->
<!-- email="nkuzhangna_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1" -->
<!-- id="CAFbC_ZKedqtrEqUStMaRpn4E579rghUQT9cEuOiYH=k9M+6sKQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFbC_ZKKJhhfBGBH-ePuydu_cC3qbJeFBMK=HfaSw+351wg=fg_at_mail.gmail.com" -->
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
<strong>From:</strong> Na Zhang (<em>nkuzhangna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 14:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24774.php">Amy Hawke: "[OMPI users] mpi and open-mpi newbie question - connect btl choices"</a>
<li><strong>Previous message:</strong> <a href="24772.php">Na Zhang: "[OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24772.php">Na Zhang: "[OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24775.php">Elken, Tom: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24775.php">Elken, Tom: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Forgot to add the config info about the tests in previous post.
<br>
<p>We have FDR IB, two nodes (HP DL 380 G8 sever) communicating through a
<br>
Mellanox Switch, RDMA mode, hyperthreading enabled.
<br>
<p>Thanks,
<br>
Na Zhang
<br>
<p><p>On Tue, Jul 15, 2014 at 12:00 PM, Na Zhang &lt;nkuzhangna_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear developers and users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run OSU benchmark tests (like osu_latency, osu_bw, etc)
</span><br>
<span class="quotelev1">&gt;  with Open MPI. While I was able to run the tests with both versions
</span><br>
<span class="quotelev1">&gt; (1.6.5, 1.8.1, same default build), I got disparate performance results.
</span><br>
<span class="quotelev1">&gt; Please see data below. I wonder what reason would cause the performance
</span><br>
<span class="quotelev1">&gt; difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And also, I was trying to run the tests with latest release 1.8.2, got the
</span><br>
<span class="quotelev1">&gt; warning like below, and got the results similar to version 1.8.1. How can I
</span><br>
<span class="quotelev1">&gt; avoid this warning?
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Node:  hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Na Zhang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Version 1.6.5*
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v4.3
</span><br>
<span class="quotelev1">&gt; # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                       1.83
</span><br>
<span class="quotelev1">&gt; 1                       1.11
</span><br>
<span class="quotelev1">&gt; 2                       1.11
</span><br>
<span class="quotelev1">&gt; 4                       1.11
</span><br>
<span class="quotelev1">&gt; 8                       1.13
</span><br>
<span class="quotelev1">&gt; 16                      1.15
</span><br>
<span class="quotelev1">&gt; 32                      1.17
</span><br>
<span class="quotelev1">&gt; 64                      1.22
</span><br>
<span class="quotelev1">&gt; 128                     1.54
</span><br>
<span class="quotelev1">&gt; 256                     1.73
</span><br>
<span class="quotelev1">&gt; 512                     1.90
</span><br>
<span class="quotelev1">&gt; 1024                    2.24
</span><br>
<span class="quotelev1">&gt; 2048                    2.93
</span><br>
<span class="quotelev1">&gt; 4096                    3.59
</span><br>
<span class="quotelev1">&gt; 8192                    4.96
</span><br>
<span class="quotelev1">&gt; 16384                   7.81
</span><br>
<span class="quotelev1">&gt; 32768                  11.22
</span><br>
<span class="quotelev1">&gt; 65536                  18.18
</span><br>
<span class="quotelev1">&gt; 131072                 32.10
</span><br>
<span class="quotelev1">&gt; 262144                 59.91
</span><br>
<span class="quotelev1">&gt; 524288                115.56
</span><br>
<span class="quotelev1">&gt; 1048576               226.84
</span><br>
<span class="quotelev1">&gt; 2097152               449.71
</span><br>
<span class="quotelev1">&gt; 4194304               894.75
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Version 1.8.1*
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v4.3
</span><br>
<span class="quotelev1">&gt; # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                       0.22
</span><br>
<span class="quotelev1">&gt; 1                       0.27
</span><br>
<span class="quotelev1">&gt; 2                       0.27
</span><br>
<span class="quotelev1">&gt; 4                       0.27
</span><br>
<span class="quotelev1">&gt; 8                       0.27
</span><br>
<span class="quotelev1">&gt; 16                      0.28
</span><br>
<span class="quotelev1">&gt; 32                      0.28
</span><br>
<span class="quotelev1">&gt; 64                      0.31
</span><br>
<span class="quotelev1">&gt; 128                     0.44
</span><br>
<span class="quotelev1">&gt; 256                     0.47
</span><br>
<span class="quotelev1">&gt; 512                     0.48
</span><br>
<span class="quotelev1">&gt; 1024                    0.60
</span><br>
<span class="quotelev1">&gt; 2048                    0.83
</span><br>
<span class="quotelev1">&gt; 4096                    1.30
</span><br>
<span class="quotelev1">&gt; 8192                    1.95
</span><br>
<span class="quotelev1">&gt; 16384                   3.45
</span><br>
<span class="quotelev1">&gt; 32768                   5.79
</span><br>
<span class="quotelev1">&gt; 65536                   8.88
</span><br>
<span class="quotelev1">&gt; 131072                 15.79
</span><br>
<span class="quotelev1">&gt; 262144                 28.78
</span><br>
<span class="quotelev1">&gt; 524288                 53.50
</span><br>
<span class="quotelev1">&gt; 1048576               104.09
</span><br>
<span class="quotelev1">&gt; 2097152               202.54
</span><br>
<span class="quotelev1">&gt; 4194304               398.43
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24773/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24774.php">Amy Hawke: "[OMPI users] mpi and open-mpi newbie question - connect btl choices"</a>
<li><strong>Previous message:</strong> <a href="24772.php">Na Zhang: "[OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24772.php">Na Zhang: "[OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24775.php">Elken, Tom: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24775.php">Elken, Tom: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
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
