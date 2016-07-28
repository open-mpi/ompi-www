<?
$subject_val = "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 11:10:27 2009" -->
<!-- isoreceived="20090304161027" -->
<!-- sent="Wed, 4 Mar 2009 09:10:23 -0700 (MST)" -->
<!-- isosent="20090304161023" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit" -->
<!-- id="37177.128.165.0.81.1236183023.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200903041602.22971.m.janssens_at_opencfd.co.uk" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 11:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8288.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Previous message:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>In reply to:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8308.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="8308.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would also help to have some idea how you installed and ran this -
<br>
e.g., did you set mpi_paffinity_alone so that the processes would bind to
<br>
their processors? That could explain the cpu vs. elapsed time since it
<br>
helps the processes from being swapped out as much.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; Your Intel processors are I assume not the new Nehalem/I7 ones? The older
</span><br>
<span class="quotelev1">&gt; quad-core ones are seriously memory bandwidth limited when running a
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt; intensive application. That might explain why using all 8 cores per node
</span><br>
<span class="quotelev1">&gt; slows down your calculation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why do you get such a difference between cpu time and elapsed time? Is
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev1">&gt; code doing any file IO or maybe waiting for one of the processors? Do you
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; non-blocking communication wherever possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mattijs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday 04 March 2009 05:46, Sangamesh B wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now LAM-MPI is also installed and tested the fortran application by
</span><br>
<span class="quotelev2">&gt;&gt; running with LAM-MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But LAM-MPI is performing still worse than Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No of nodes:3 cores per node:8  total core: 3*8=24
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        CPU TIME :    1 HOURS 51 MINUTES 23.49 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;    ELAPSED TIME :    7 HOURS 28 MINUTES  2.23 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No of nodes:6  cores used per node:4  total core: 6*4=24
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        CPU TIME :    0 HOURS 51 MINUTES 50.41 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;    ELAPSED TIME :    6 HOURS  6 MINUTES 38.67 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help/suggetsions to diagnose this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 25, 2009 at 12:51 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear All,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;A fortran application is installed with Open MPI-1.3 + Intel
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compilers on a Rocks-4.3 cluster with Intel Xeon Dual socket Quad core
</span><br>
<span class="quotelev3">&gt;&gt; &gt; processor @ 3GHz (8cores/node).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;The time consumed for different tests over a Gigabit connected
</span><br>
<span class="quotelev3">&gt;&gt; &gt; nodes are as follows: (Each node has 8 GB memory).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; No of Nodes used:6 &#160;No of cores used/node:4 total mpi processes:24
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; CPU TIME : &#160; &#160;1 HOURS 19 MINUTES 14.39 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; ELAPSED TIME : &#160; &#160;2 HOURS 41 MINUTES &#160;8.55 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; No of Nodes used:6 &#160;No of cores used/node:8 total mpi processes:48
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; CPU TIME : &#160; &#160;4 HOURS 19 MINUTES 19.29 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; ELAPSED TIME : &#160; &#160;9 HOURS 15 MINUTES 46.39 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; No of Nodes used:3 &#160;No of cores used/node:8 total mpi processes:24
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; CPU TIME : &#160; &#160;2 HOURS 41 MINUTES 27.98 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; ELAPSED TIME : &#160; &#160;4 HOURS 21 MINUTES &#160;0.24 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But the same application performs well on another Linux cluster with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; LAM-MPI-7.1.3
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; No of Nodes used:6 &#160;No of cores used/node:4 total mpi processes:24
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CPU TIME : &#160; &#160;1hours:30min:37.25s
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ELAPSED TIME &#160;1hours:51min:10.00S
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; No of Nodes used:12 &#160;No of cores used/node:4 total mpi processes:48
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CPU TIME : &#160; &#160;0hours:46min:13.98s
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ELAPSED TIME &#160;1hours:02min:26.11s
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; No of Nodes used:6 &#160;No of cores used/node:8 total mpi processes:48
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CPU TIME : &#160; &#160; 1hours:13min:09.17s
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ELAPSED TIME &#160;1hours:47min:14.04s
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So there is a huge difference between CPU TIME &amp; ELAPSED TIME for Open
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI jobs.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Note: On the same cluster Open MPI gives better performance for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; inifiniband nodes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What could be the problem for Open MPI over Gigabit?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any flags need to be used?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Or is it not that good to use Open MPI on Gigabit?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mattijs Janssens
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenCFD Ltd.
</span><br>
<span class="quotelev1">&gt; 9 Albert Road,
</span><br>
<span class="quotelev1">&gt; Caversham,
</span><br>
<span class="quotelev1">&gt; Reading RG4 7AN.
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)118 9471030
</span><br>
<span class="quotelev1">&gt; Email: M.Janssens_at_[hidden]
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://www.OpenCFD.co.uk">http://www.OpenCFD.co.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8288.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Previous message:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>In reply to:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8308.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="8308.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
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
