<?
$subject_val = "[OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 17 16:27:31 2010" -->
<!-- isoreceived="20100417202731" -->
<!-- sent="Sat, 17 Apr 2010 22:27:26 +0200" -->
<!-- isosent="20100417202726" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="[OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept" -->
<!-- id="s2g464cc18f1004171327ub11edb55kd73f97e9f94697b9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-17 16:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12671.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'd like to dynamically create a group of processes communicating via
<br>
MPI. Those processes need to be run without mpirun and create
<br>
intracommunicator after the startup. Any ideas how to do this
<br>
efficiently?
<br>
I came up with a solution in which the processes are connecting one by
<br>
one using MPI_Comm_connect, but unfortunately all the processes that
<br>
are already in the group need to call MPI_Comm_accept. This means that
<br>
when the n-th process wants to connect I need to collect all the n-1
<br>
processes on the MPI_Comm_accept call. After I run about 40 processes
<br>
every subsequent call takes more and more time, which I'd like to
<br>
avoid.
<br>
Another problem in this solution is that when I try to connect 66-th
<br>
process the root of the existing group segfaults on MPI_Comm_accept.
<br>
Maybe it's my bug, but it's weird as everything works fine for at most
<br>
65 processes. Is there any limitation I don't know about?
<br>
My last question is about MPI_COMM_WORLD. When I run my processes
<br>
without mpirun their MPI_COMM_WORLD is the same as MPI_COMM_SELF. Is
<br>
there any way to change MPI_COMM_WORLD and set it to the
<br>
intracommunicator that I've created?
<br>
<p>Thanks,
<br>
Grzegorz Maj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="12671.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="12673.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
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
