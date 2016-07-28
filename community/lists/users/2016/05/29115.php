<?
$subject_val = "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 08:20:44 2016" -->
<!-- isoreceived="20160506122044" -->
<!-- sent="Fri, 6 May 2016 14:20:33 +0200" -->
<!-- isosent="20160506122033" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)" -->
<!-- id="eca12f0e-c30f-e45e-bae1-caaf973d68ab_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="f9c32661-c072-6991-bed4-9d11fe9f1b7e_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 08:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29116.php">Dave Love: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29114.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>In reply to:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29134.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>today I'm building all current versions with both compilers on
<br>
my machines. Unfortunately it takes some hours, because especially
<br>
my Solaris Sparc machine is old and slow. Yesterday I've had problems
<br>
using two Sparc machines and nothing else. Tonight the new versions
<br>
will be copied to all machines so that I can test them tomorrow.
<br>
<p>Are the following two commands equivalent? Is the second one correct,
<br>
if &quot;loki&quot; has two sockets with six cores each?
<br>
<p>mpiexec -np 3 --host loki,loki,loki hello_1_mpi
<br>
mpiexec -np 3 --host loki --slot-list 0:0-5,1:0-5 hello_1_mpi
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>Am 06.05.2016 um 10:36 schrieb Gilles Gouaillardet:
<br>
<span class="quotelev1">&gt; Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was unable to reproduce the issue with one solaris 11 x86_64 VM and one
</span><br>
<span class="quotelev1">&gt; linux x86_64 VM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what is the minimal configuration you need to reproduce the issue ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are you able to reproduce the issue with only x86_64 nodes ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was under the impression that solaris vs linux is the issue, but is big vs
</span><br>
<span class="quotelev1">&gt; little endian instead ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29116.php">Dave Love: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29114.php">Dave Love: "Re: [OMPI users] barrier algorithm 5"</a>
<li><strong>In reply to:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29134.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
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
