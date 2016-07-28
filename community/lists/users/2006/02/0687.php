<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 23 12:42:59 2006" -->
<!-- isoreceived="20060223174259" -->
<!-- sent="Thu, 23 Feb 2006 18:41:55 +0100" -->
<!-- isosent="20060223174155" -->
<!-- name="Emanuel Ziegler" -->
<!-- email="eziegler_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hangs" -->
<!-- id="1140716515.31021.14.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Emanuel Ziegler (<em>eziegler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-23 12:41:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0688.php">Konstantin Kudin: "[OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Previous message:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0692.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0692.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I finally installed OpenMPI 1.0.2-a7 with libibverbs-1.0-rc5 and
<br>
libmthca-1.0-rc5 on Debian sarge with kernel 2.6.15 (from
<br>
www.backports.org) in order to use InfiniBand.
<br>
<p>While InfiniBand seems to be working (ping with IPoIB works perfectly),
<br>
the mpirun/orterun command causes trouble using rsh as well as ssh.
<br>
The /usr/local/etc/openmpi-default-hostfile contains
<br>
&nbsp;&nbsp;&nbsp;node01 slots=2
<br>
&nbsp;&nbsp;&nbsp;node02 slots=2
<br>
Both hosts are completely identical (apart from network config) and the
<br>
problem is symmetric.
<br>
Although I can execute commands (all on node01) like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -np 1 hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node01
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ rsh node02 hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node02
<br>
the command
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -np 4 hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node01
<br>
hangs. After pressing Ctrl+C it stops, but gives no hint about the cause
<br>
of the problem.
<br>
An output of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun --debug -np 4 hostname
<br>
can be found in the attachment. The important line seems to be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[node02:12018] [0,0,2]-[0,0,0] mca_oob_tcp_peer_complete_connect:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;connect() failed with errno=113
<br>
Unfortunately, I don't know what errno=113 means, but obviously it's a
<br>
TCP problem.
<br>
<p>It doesn't seem to matter if orted runs or not. No processes are
<br>
launched on the remote host.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Emanuel
<br>
<p><p>


<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0687/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0687/mpirun_debug.out.gz">mpirun_debug.out.gz</a>
</ul>
<!-- attachment="mpirun_debug.out.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0687/ompi_info.out.gz">ompi_info.out.gz</a>
</ul>
<!-- attachment="ompi_info.out.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0688.php">Konstantin Kudin: "[OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Previous message:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0692.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="0692.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs"</a>
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
