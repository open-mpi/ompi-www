<?
$subject_val = "[OMPI users] Open MPI backwards incompatibility issue in statically linked program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 13 16:30:13 2016" -->
<!-- isoreceived="20160213213013" -->
<!-- sent="Sat, 13 Feb 2016 22:30:13 +0100" -->
<!-- isosent="20160213213013" -->
<!-- name="Kim Walisch" -->
<!-- email="kim.walisch_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI backwards incompatibility issue in statically linked program" -->
<!-- id="CAE_DJ12PS_W9tQH_ShWKhkCcr8F4Kr5ZN1Rgo_SMD3sdpL7=Pg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI backwards incompatibility issue in statically linked program<br>
<strong>From:</strong> Kim Walisch (<em>kim.walisch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-13 16:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28523.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Previous message:</strong> <a href="28521.php">Ralph Castain: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28523.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Reply:</strong> <a href="28523.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In order to make life of my users easier I have built a fully
<br>
statically linked version of my primecount program. So the program
<br>
also statically links against Open MPI. I have built this binary on
<br>
CentOS-7-x86_64 using gcc. The good news is that the binary runs
<br>
without any issues on Ubuntu 15.10 x64 (uses mpiexec (OpenRTE) 1.10.2).
<br>
<p>The bad news is that the binary does not work on Ubuntu 14.04 x64
<br>
which uses mpiexec (OpenRTE) 1.6.5. Here is the error message:
<br>
<p><p>$ mpirun -n 1 ./primecount 1e10 -t1
<br>
[ip-XXX:02671] [[8243,0],0] mca_oob_tcp_recv_handler: invalid message type:
<br>
15
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
ubuntu_at_ip-XXX:~$ mpiexec --version
<br>
mpiexec (OpenRTE) 1.6.5
<br>
<p><p>Questions:
<br>
<p>1) Is this backwards incompatibility issue an Open MPI bug?
<br>
<p>2) Can I expect that my binary will work with future mpiexec
<br>
versions &gt;= 1.10 (which it was built with)?
<br>
<p>Thanks and best regards,
<br>
Kim
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28522/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28523.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Previous message:</strong> <a href="28521.php">Ralph Castain: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28523.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Reply:</strong> <a href="28523.php">Nick Papior: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
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
