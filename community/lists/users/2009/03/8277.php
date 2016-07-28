<?
$subject_val = "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 00:46:46 2009" -->
<!-- isoreceived="20090304054646" -->
<!-- sent="Wed, 4 Mar 2009 11:16:38 +0530" -->
<!-- isosent="20090304054638" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit" -->
<!-- id="cb60cbc40903032146r2b6357f4gf339e39b3159ba5d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40902242321u3df21d52w8102e91ae1017353_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 00:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8278.php">Yury Tarasievich: "[OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Previous message:</strong> <a href="8276.php">Nathan Baca: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8192.php">Sangamesh B: "[OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Now LAM-MPI is also installed and tested the fortran application by
<br>
running with LAM-MPI.
<br>
<p>But LAM-MPI is performing still worse than Open MPI
<br>
<p>No of nodes:3 cores per node:8  total core: 3*8=24
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    1 HOURS 51 MINUTES 23.49 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    7 HOURS 28 MINUTES  2.23 SECONDS
<br>
<p>No of nodes:6  cores used per node:4  total core: 6*4=24
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    0 HOURS 51 MINUTES 50.41 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    6 HOURS  6 MINUTES 38.67 SECONDS
<br>
<p>Any help/suggetsions to diagnose this problem.
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p>On Wed, Feb 25, 2009 at 12:51 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;A fortran application is installed with Open MPI-1.3 + Intel
</span><br>
<span class="quotelev1">&gt; compilers on a Rocks-4.3 cluster with Intel Xeon Dual socket Quad core
</span><br>
<span class="quotelev1">&gt; processor @ 3GHz (8cores/node).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;The time consumed for different tests over a Gigabit connected
</span><br>
<span class="quotelev1">&gt; nodes are as follows: (Each node has 8 GB memory).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No of Nodes used:6 &#160;No of cores used/node:4 total mpi processes:24
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; CPU TIME : &#160; &#160;1 HOURS 19 MINUTES 14.39 SECONDS
</span><br>
<span class="quotelev1">&gt; &#160; ELAPSED TIME : &#160; &#160;2 HOURS 41 MINUTES &#160;8.55 SECONDS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No of Nodes used:6 &#160;No of cores used/node:8 total mpi processes:48
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; CPU TIME : &#160; &#160;4 HOURS 19 MINUTES 19.29 SECONDS
</span><br>
<span class="quotelev1">&gt; &#160; ELAPSED TIME : &#160; &#160;9 HOURS 15 MINUTES 46.39 SECONDS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No of Nodes used:3 &#160;No of cores used/node:8 total mpi processes:24
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; CPU TIME : &#160; &#160;2 HOURS 41 MINUTES 27.98 SECONDS
</span><br>
<span class="quotelev1">&gt; &#160; ELAPSED TIME : &#160; &#160;4 HOURS 21 MINUTES &#160;0.24 SECONDS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the same application performs well on another Linux cluster with
</span><br>
<span class="quotelev1">&gt; LAM-MPI-7.1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No of Nodes used:6 &#160;No of cores used/node:4 total mpi processes:24
</span><br>
<span class="quotelev1">&gt; CPU TIME : &#160; &#160;1hours:30min:37.25s
</span><br>
<span class="quotelev1">&gt; ELAPSED TIME &#160;1hours:51min:10.00S
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No of Nodes used:12 &#160;No of cores used/node:4 total mpi processes:48
</span><br>
<span class="quotelev1">&gt; CPU TIME : &#160; &#160;0hours:46min:13.98s
</span><br>
<span class="quotelev1">&gt; ELAPSED TIME &#160;1hours:02min:26.11s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No of Nodes used:6 &#160;No of cores used/node:8 total mpi processes:48
</span><br>
<span class="quotelev1">&gt; CPU TIME : &#160; &#160; 1hours:13min:09.17s
</span><br>
<span class="quotelev1">&gt; ELAPSED TIME &#160;1hours:47min:14.04s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there is a huge difference between CPU TIME &amp; ELAPSED TIME for Open MPI jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: On the same cluster Open MPI gives better performance for
</span><br>
<span class="quotelev1">&gt; inifiniband nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be the problem for Open MPI over Gigabit?
</span><br>
<span class="quotelev1">&gt; Any flags need to be used?
</span><br>
<span class="quotelev1">&gt; Or is it not that good to use Open MPI on Gigabit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8278.php">Yury Tarasievich: "[OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Previous message:</strong> <a href="8276.php">Nathan Baca: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8192.php">Sangamesh B: "[OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
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
