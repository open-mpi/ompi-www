<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 21:43:45 2016" -->
<!-- isoreceived="20160505014345" -->
<!-- sent="Thu, 5 May 2016 10:43:44 +0900" -->
<!-- isosent="20160505014344" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="CAAkFZ5uhd1UQG5vA_UOyvb7fEDn+nFue5HgqXffr9na2dbcYmA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALb_wBRZsD8+PrrTfrL2+1iW-QV3deNOJgWj3EQt68djDzbLjw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Isend, Recv and Test<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-04 21:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29087.php">Giacomo Rossi: "[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29085.php">Zhen Wang: "[OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29085.php">Zhen Wang: "[OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note there is no progress thread in openmpi 1.10
<br>
from a pragmatic point of view, that means that for &quot;large&quot; messages, no
<br>
data is sent in MPI_Isend, and the data is sent when MPI &quot;progresses&quot; e.g.
<br>
call a MPI_Test, MPI_Probe, MPI_Recv or some similar subroutine.
<br>
in your example, the data is transferred after the first usleep completes.
<br>
<p>that being said, it takes quite a while, and there could be an issue.
<br>
what if you use MPI_Send instead () ?
<br>
what if you send/Recv a large message first (to &quot;warmup&quot; connections),
<br>
MPI_Barrier, and then start your MPI_Isend ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Thursday, May 5, 2016, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having a problem with Isend, Recv and Test in Linux Mint 16 Petra. The
</span><br>
<span class="quotelev1">&gt; source is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI 1.10.2 is configured with
</span><br>
<span class="quotelev1">&gt; ./configure --enable-debug --prefix=/home/&lt;me&gt;/Tool/openmpi-1.10.2-debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The source is built with
</span><br>
<span class="quotelev1">&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpiCC a5.cpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and run in one node with
</span><br>
<span class="quotelev1">&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpirun -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output is in the end. What puzzles me is why MPI_Test is called so
</span><br>
<span class="quotelev1">&gt; many times, and it takes so long to send a message. Am I doing something
</span><br>
<span class="quotelev1">&gt; wrong? I'm simulating a more complicated program: MPI 0 Isends data to MPI
</span><br>
<span class="quotelev1">&gt; 1, computes (usleep here), and calls Test to check if data are sent. MPI 1
</span><br>
<span class="quotelev1">&gt; Recvs data, and computes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Zhen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 0 started at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 0 started at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 0 finished at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 0 finished at 20:32:39.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29086/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29087.php">Giacomo Rossi: "[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29085.php">Zhen Wang: "[OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29085.php">Zhen Wang: "[OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
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
