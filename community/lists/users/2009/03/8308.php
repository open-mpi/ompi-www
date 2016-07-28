<?
$subject_val = "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 01:54:35 2009" -->
<!-- isoreceived="20090305065435" -->
<!-- sent="Thu, 5 Mar 2009 01:54:29 -0500" -->
<!-- isosent="20090305065429" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit" -->
<!-- id="cb60cbc40903042254q6f9a57ebrb96c93ab20e2f66a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37177.128.165.0.81.1236183023.squirrel_at_webmail.lanl.gov" -->
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
<strong>Date:</strong> 2009-03-05 01:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8307.php">Shinta Bonnefoy: "[OMPI users] Runtime error only on one node."</a>
<li><strong>In reply to:</strong> <a href="8287.php">Ralph H. Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8331.php">Jeff Squyres: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="8331.php">Jeff Squyres: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The fortran application I'm using here is the CPMD-3.11.
<br>
<p>I don't think the processor is Nehalem:
<br>
<p>Intel(R) Xeon(R) CPU           X5472  @ 3.00GHz
<br>
<p>Installation procedure was same on both the clusters. I've not set mpi_affinity.
<br>
<p>This is a memory intensive application, but this job was not using
<br>
that much amount of memory.
<br>
<p>Regarding CPU &amp; ELAPSED TIMEs, the CPU TIME should be greater than
<br>
ELAPSED TIME in general (for a parallel program). Right?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p><p>On Wed, Mar 4, 2009 at 11:10 AM, Ralph H. Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It would also help to have some idea how you installed and ran this -
</span><br>
<span class="quotelev1">&gt; e.g., did you set mpi_paffinity_alone so that the processes would bind to
</span><br>
<span class="quotelev1">&gt; their processors? That could explain the cpu vs. elapsed time since it
</span><br>
<span class="quotelev1">&gt; helps the processes from being swapped out as much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your Intel processors are I assume not the new Nehalem/I7 ones? The older
</span><br>
<span class="quotelev2">&gt;&gt; quad-core ones are seriously memory bandwidth limited when running a
</span><br>
<span class="quotelev2">&gt;&gt; memory
</span><br>
<span class="quotelev2">&gt;&gt; intensive application. That might explain why using all 8 cores per node
</span><br>
<span class="quotelev2">&gt;&gt; slows down your calculation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why do you get such a difference between cpu time and elapsed time? Is
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; code doing any file IO or maybe waiting for one of the processors? Do you
</span><br>
<span class="quotelev2">&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking communication wherever possible?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mattijs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 04 March 2009 05:46, Sangamesh B wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now LAM-MPI is also installed and tested the fortran application by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running with LAM-MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But LAM-MPI is performing still worse than Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No of nodes:3 cores per node:8  total core: 3*8=24
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        CPU TIME :    1 HOURS 51 MINUTES 23.49 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ELAPSED TIME :    7 HOURS 28 MINUTES  2.23 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No of nodes:6  cores used per node:4  total core: 6*4=24
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        CPU TIME :    0 HOURS 51 MINUTES 50.41 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ELAPSED TIME :    6 HOURS  6 MINUTES 38.67 SECONDS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help/suggetsions to diagnose this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sangamesh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Feb 25, 2009 at 12:51 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Dear All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    A fortran application is installed with Open MPI-1.3 + Intel
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; compilers on a Rocks-4.3 cluster with Intel Xeon Dual socket Quad core
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; processor @ 3GHz (8cores/node).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    The time consumed for different tests over a Gigabit connected
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; nodes are as follows: (Each node has 8 GB memory).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; No of Nodes used:6  No of cores used/node:4 total mpi processes:24
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;       CPU TIME :    1 HOURS 19 MINUTES 14.39 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   ELAPSED TIME :    2 HOURS 41 MINUTES  8.55 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; No of Nodes used:6  No of cores used/node:8 total mpi processes:48
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;       CPU TIME :    4 HOURS 19 MINUTES 19.29 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   ELAPSED TIME :    9 HOURS 15 MINUTES 46.39 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; No of Nodes used:3  No of cores used/node:8 total mpi processes:24
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;       CPU TIME :    2 HOURS 41 MINUTES 27.98 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   ELAPSED TIME :    4 HOURS 21 MINUTES  0.24 SECONDS
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; But the same application performs well on another Linux cluster with
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; LAM-MPI-7.1.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; No of Nodes used:6  No of cores used/node:4 total mpi processes:24
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; CPU TIME :    1hours:30min:37.25s
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ELAPSED TIME  1hours:51min:10.00S
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; No of Nodes used:12  No of cores used/node:4 total mpi processes:48
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; CPU TIME :    0hours:46min:13.98s
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ELAPSED TIME  1hours:02min:26.11s
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; No of Nodes used:6  No of cores used/node:8 total mpi processes:48
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; CPU TIME :     1hours:13min:09.17s
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ELAPSED TIME  1hours:47min:14.04s
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; So there is a huge difference between CPU TIME &amp; ELAPSED TIME for Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI jobs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Note: On the same cluster Open MPI gives better performance for
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; inifiniband nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; What could be the problem for Open MPI over Gigabit?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Any flags need to be used?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Or is it not that good to use Open MPI on Gigabit?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Sangamesh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mattijs Janssens
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenCFD Ltd.
</span><br>
<span class="quotelev2">&gt;&gt; 9 Albert Road,
</span><br>
<span class="quotelev2">&gt;&gt; Caversham,
</span><br>
<span class="quotelev2">&gt;&gt; Reading RG4 7AN.
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +44 (0)118 9471030
</span><br>
<span class="quotelev2">&gt;&gt; Email: M.Janssens_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="http://www.OpenCFD.co.uk">http://www.OpenCFD.co.uk</a>
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8307.php">Shinta Bonnefoy: "[OMPI users] Runtime error only on one node."</a>
<li><strong>In reply to:</strong> <a href="8287.php">Ralph H. Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8331.php">Jeff Squyres: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="8331.php">Jeff Squyres: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
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
