<?
$subject_val = "[OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 12:00:16 2014" -->
<!-- isoreceived="20140715160016" -->
<!-- sent="Tue, 15 Jul 2014 12:00:15 -0400" -->
<!-- isosent="20140715160015" -->
<!-- name="Na Zhang" -->
<!-- email="nkuzhangna_at_[hidden]" -->
<!-- subject="[OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1" -->
<!-- id="CAFbC_ZKKJhhfBGBH-ePuydu_cC3qbJeFBMK=HfaSw+351wg=fg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1<br>
<strong>From:</strong> Na Zhang (<em>nkuzhangna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 12:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24771.php">Ricardo Fern&#195;&#161;ndez-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers and users,
<br>
<p>I am trying to run OSU benchmark tests (like osu_latency, osu_bw, etc)
<br>
&nbsp;with Open MPI. While I was able to run the tests with both versions
<br>
(1.6.5, 1.8.1, same default build), I got disparate performance results.
<br>
Please see data below. I wonder what reason would cause the performance
<br>
difference.
<br>
<p>And also, I was trying to run the tests with latest release 1.8.2, got the
<br>
warning like below, and got the results similar to version 1.8.1. How can I
<br>
avoid this warning?
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
<p>*Version 1.6.5*
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
<p>*Version 1.8.1*
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24772/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24771.php">Ricardo Fern&#195;&#161;ndez-Perea: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
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
