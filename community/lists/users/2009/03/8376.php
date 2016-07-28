<?
$subject_val = "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 07:16:45 2009" -->
<!-- isoreceived="20090310111645" -->
<!-- sent="Tue, 10 Mar 2009 11:16:38 +0000" -->
<!-- isosent="20090310111638" -->
<!-- name="Igor Kozin" -->
<!-- email="i.n.kozin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node" -->
<!-- id="fd21f64d0903100416k6aa4f1b3pdc9e863d9a50220c_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="cb60cbc40903092105o719f855bv9dbbfab31b262416_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node<br>
<strong>From:</strong> Igor Kozin (<em>i.n.kozin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 07:16:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Previous message:</strong> <a href="8375.php">&#197;ke Sandgren: "[OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<li><strong>In reply to:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Reply:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sangamesh,
<br>
As far as I can tell there should be no difference if you run CPMD on a
<br>
single node whether with or without ib. One easy thing that you could do is
<br>
to repeat your runs on the infiniband node(s) with and without infiniband
<br>
using --mca btl ^tcp and --mca btl ^openib respectively. But since you are
<br>
using a single node I doubt it will make any difference.
<br>
<p>I agree with Jeff that there are many factors you need to be sure of. Please
<br>
note that not only your elapsed times but also your CPU times are different.
<br>
Furthermore the difference in communication times as indicated in your CPMD
<br>
outputs can not be the only reason for the difference in the elapsed times.
<br>
CPMD, MKL, and compiler versions, memory bandwidth, i/o and rogue processes
<br>
running on a node could be the differentiating factors.
<br>
<p>The standard wat32 benchmark is a good test for a single node. You can find
<br>
our benchmarking results here if you want to compare yours
<br>
<a href="http://www.cse.scitech.ac.uk/disco/dbd/index.html">http://www.cse.scitech.ac.uk/disco/dbd/index.html</a>
<br>
<p>Regards,
<br>
<p>INK
<br>
<p>2009/3/10 Sangamesh B &lt;forum.san_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello Ralph &amp; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    This is the same issue - but this time the job is running on a single
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The two systems on which the jobs are run, have the same hardware/OS
</span><br>
<span class="quotelev1">&gt; configuration. The only differences are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One node has 4 GB RAM and it is part of infiniband connected nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other node has 8 GB RAM and it is part of gigabit connected nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For both jobs only 4 processes are used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the processes are run on a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But why the GB node is taking more time than IB node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {ELAPSED TIME = WALL CLOCK TIME}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope you are now clear with the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;  On Mon, Mar 9, 2009 at 10:56 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It depends on the characteristics of the nodes in question.  You mention
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; CPU speeds and the RAM, but there are other factors as well: cache size,
</span><br>
<span class="quotelev2">&gt; &gt; memory architecture, how many MPI processes you're running, etc.  Memory
</span><br>
<span class="quotelev2">&gt; &gt; access patterns, particularly across UMA machines like clovertown and
</span><br>
<span class="quotelev2">&gt; &gt; follow-in intel architectures can really get bogged down by the RAM
</span><br>
<span class="quotelev2">&gt; &gt; bottlneck (all 8 cores hammering on memory simultaneously via a single
</span><br>
<span class="quotelev2">&gt; &gt; memory bus).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 9, 2009, at 10:30 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear Open MPI team,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      With Open MPI-1.3, the fortran application CPMD is installed on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rocks-4.3 cluster - Dual Processor Quad core Xeon @ 3 GHz. (8 cores
</span><br>
<span class="quotelev3">&gt; &gt;&gt; per node)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Two jobs (4 processes job) are run on two nodes, separately - one node
</span><br>
<span class="quotelev3">&gt; &gt;&gt; has a ib connection ( 4 GB RAM)  and the other node has gigabit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; connection (8 GB RAM).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Note that, the network-connectivity may not be or not required to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; used as the two jobs are running in stand alone mode.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since the jobs are running on single node - no intercommunication
</span><br>
<span class="quotelev3">&gt; &gt;&gt; between nodes - so the performance of both the jobs should be same
</span><br>
<span class="quotelev3">&gt; &gt;&gt; irrespective of network connectivity. But here this is not the case.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The gigabit job is taking double the time of infiniband job.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Following are the details of two jobs:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Infiniband Job:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      CPU TIME :    0 HOURS 10 MINUTES 21.71 SECONDS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ELAPSED TIME :    0 HOURS 10 MINUTES 23.08 SECONDS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  ***      CPMD| SIZE OF THE PROGRAM IS  301192/ 571044 kBYTES ***
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gigabit Job:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       CPU TIME :    0 HOURS 12 MINUTES  7.93 SECONDS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ELAPSED TIME :    0 HOURS 21 MINUTES  0.07 SECONDS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  ***      CPMD| SIZE OF THE PROGRAM IS  123420/ 384344 kBYTES ***
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; More details are attached here in a file.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why there is a long difference between CPU TIME and ELAPSED TIME for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gigabit job?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This could be an issue with Open MPI itself. What could be the reason?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any flags need to be set?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sangamesh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;cpmd_gb_ib_1node&gt;&lt;ATT3915213.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Previous message:</strong> <a href="8375.php">&#197;ke Sandgren: "[OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<li><strong>In reply to:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Reply:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
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
