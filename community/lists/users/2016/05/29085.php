<?
$subject_val = "[OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 19:40:56 2016" -->
<!-- isoreceived="20160504234056" -->
<!-- sent="Wed, 4 May 2016 19:40:35 -0400" -->
<!-- isosent="20160504234035" -->
<!-- name="Zhen Wang" -->
<!-- email="toddwz_at_[hidden]" -->
<!-- subject="[OMPI users] Isend, Recv and Test" -->
<!-- id="CALb_wBRZsD8+PrrTfrL2+1iW-QV3deNOJgWj3EQt68djDzbLjw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Isend, Recv and Test<br>
<strong>From:</strong> Zhen Wang (<em>toddwz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-04 19:40:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29084.php">Iman Faraji: "[OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having a problem with Isend, Recv and Test in Linux Mint 16 Petra. The
<br>
source is attached.
<br>
<p>Open MPI 1.10.2 is configured with
<br>
./configure --enable-debug --prefix=/home/&lt;me&gt;/Tool/openmpi-1.10.2-debug
<br>
<p>The source is built with
<br>
~/Tool/openmpi-1.10.2-debug/bin/mpiCC a5.cpp
<br>
<p>and run in one node with
<br>
~/Tool/openmpi-1.10.2-debug/bin/mpirun -n 2 ./a.out
<br>
<p>The output is in the end. What puzzles me is why MPI_Test is called so many
<br>
times, and it takes so long to send a message. Am I doing something wrong?
<br>
I'm simulating a more complicated program: MPI 0 Isends data to MPI 1,
<br>
computes (usleep here), and calls Test to check if data are sent. MPI 1
<br>
Recvs data, and computes.
<br>
<p>Thanks in advance.
<br>
<p><p>Best regards,
<br>
Zhen
<br>
<p>MPI 0: Isend of 0 started at 20:32:35.
<br>
MPI 1: Recv of 0 started at 20:32:35.
<br>
MPI 0: MPI_Test of 0 at 20:32:35.
<br>
MPI 0: MPI_Test of 0 at 20:32:35.
<br>
MPI 0: MPI_Test of 0 at 20:32:35.
<br>
MPI 0: MPI_Test of 0 at 20:32:35.
<br>
MPI 0: MPI_Test of 0 at 20:32:35.
<br>
MPI 0: MPI_Test of 0 at 20:32:35.
<br>
MPI 0: MPI_Test of 0 at 20:32:36.
<br>
MPI 0: MPI_Test of 0 at 20:32:36.
<br>
MPI 0: MPI_Test of 0 at 20:32:36.
<br>
MPI 0: MPI_Test of 0 at 20:32:36.
<br>
MPI 0: MPI_Test of 0 at 20:32:36.
<br>
MPI 0: MPI_Test of 0 at 20:32:36.
<br>
MPI 0: MPI_Test of 0 at 20:32:36.
<br>
MPI 0: MPI_Test of 0 at 20:32:36.
<br>
MPI 0: MPI_Test of 0 at 20:32:36.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:37.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:38.
<br>
MPI 0: MPI_Test of 0 at 20:32:39.
<br>
MPI 0: MPI_Test of 0 at 20:32:39.
<br>
MPI 0: MPI_Test of 0 at 20:32:39.
<br>
MPI 0: MPI_Test of 0 at 20:32:39.
<br>
MPI 0: MPI_Test of 0 at 20:32:39.
<br>
MPI 0: MPI_Test of 0 at 20:32:39.
<br>
MPI 1: Recv of 0 finished at 20:32:39.
<br>
MPI 0: MPI_Test of 0 at 20:32:39.
<br>
MPI 0: Isend of 0 finished at 20:32:39.
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29085/a5.cpp">a5.cpp</a>
</ul>
<!-- attachment="a5.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29084.php">Iman Faraji: "[OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
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
