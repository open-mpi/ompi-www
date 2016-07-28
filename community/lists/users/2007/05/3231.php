<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 20:21:48 2007" -->
<!-- isoreceived="20070510002148" -->
<!-- sent="Wed, 9 May 2007 17:21:43 -0700" -->
<!-- isosent="20070510002143" -->
<!-- name="Mike Tsai" -->
<!-- email="bibibobo_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI and OSU bandwidth benchmark" -->
<!-- id="a672a1190705091721r2319ea56x1add3c6e1b7f4c4f_at_mail.gmail.com" -->
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
<strong>From:</strong> Mike Tsai (<em>bibibobo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 20:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3232.php">Laurent Nguyen: "[OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Previous message:</strong> <a href="3230.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings eveyrong,
<br>
<p>My name is Mike, and I have recently downloaded the OMPI v1.2.1 and decide
<br>
to run the OSU bandwidth benchmark. However, I have noticed a few weird
<br>
things during my run.
<br>
<p>Btw, I am using FreeBSD 6.2.
<br>
<p>The OSU bandwidth test basically pre-post many ISend and IRecv. It tries to
<br>
measure the max. sustainable bandwidth.
<br>
<p>Here is an output (I didn't finish running, but it should be sufficient to
<br>
show the problem that I am seeing):
<br>
<p>Quick system info:
<br>
Two nodes testing (running Intel P4 Xeon 3.2Ghz Hyperthreading disabled,
<br>
1024Mb RAM).
<br>
3 1-Gig NiCs, all Intel Pro em1000(em0 and em2 are the private interfaces (
<br>
10.1.x.x) , while em1 is the public interface)
<br>
<p>----------------------------------
<br>
<p>[myct_at_netbed21 ~/mpich/osu_benchmarks]$ mpirun --mca btl_tcp_if_include em0
<br>
--hostfile ~/mpd.hosts.private --mca btl tcp,self --mca btl_tcp_sndbuf
<br>
233016 --mca btl_tcp_rcvbuf 233016  -np 2 ./osu_bw
<br>
# OSU MPI Bandwidth Test (Version 2.3)
<br>
# Size          Bandwidth (MB/s)
<br>
1               0.12
<br>
2               0.26
<br>
4               0.53
<br>
8               1.06
<br>
16              2.12
<br>
32              4.22
<br>
64              8.26
<br>
128             14.61
<br>
256             28.06
<br>
512             51.27
<br>
1024            82.59
<br>
2048            102.21
<br>
4096            110.53
<br>
8192            114.58
<br>
16384           118.16
<br>
32768           120.71
<br>
65536           33.23
<br>
131072          41.75
<br>
262144          70.42
<br>
524288          82.96
<br>
^Cmpirun: killing job...
<br>
<p>------------------------------
<br>
<p>The rendezvous  threshold is set to 64k by default.
<br>
<p>It seems that when the rendezvous starts, the performance dropped
<br>
tremendously.
<br>
Btw, this is an out-of-box run, I have not tweaked anything except changing
<br>
the socket buffer sizes during runtime.
<br>
Is there something obvious that I am not doing correctly?
<br>
<p>I have also attached the &quot;ompi-info&quot; output.
<br>
<p>Thanks for everything,
<br>
<p>Mike
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3231/ompi_out">ompi_out</a>
</ul>
<!-- attachment="ompi_out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3232.php">Laurent Nguyen: "[OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Previous message:</strong> <a href="3230.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
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
