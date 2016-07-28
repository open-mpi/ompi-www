<?
$subject_val = "[OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 12:14:45 2014" -->
<!-- isoreceived="20141103171445" -->
<!-- sent="Mon, 03 Nov 2014 17:14:42 +0000" -->
<!-- isosent="20141103171442" -->
<!-- name="Steven Eliuk" -->
<!-- email="s.eliuk_at_[hidden]" -->
<!-- subject="[OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast" -->
<!-- id="D07CF805.1E0A8%s.eliuk_at_samsung.com" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast<br>
<strong>From:</strong> Steven Eliuk (<em>s.eliuk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 12:14:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25663.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25661.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25663.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Reply:</strong> <a href="25663.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We were using OpenMPI for some testing, everything works fine but randomly, MPI_Ibcast()
<br>
takes long time to finish. We have a standalone program just to test it.  The following
<br>
is the profiling results of the simple test program on our cluster:
<br>
<p>Ibcast 604 mb takes 103 ms
<br>
Ibcast 608 mb takes 106 ms
<br>
Ibcast 612 mb takes 105 ms
<br>
Ibcast 616 mb takes 105 ms
<br>
Ibcast 620 mb takes 107 ms
<br>
Ibcast 624 mb takes 107 ms
<br>
Ibcast 628 mb takes 108 ms
<br>
Ibcast 632 mb takes 110 ms
<br>
Ibcast 636 mb takes 110 ms
<br>
Ibcast 640 mb takes 7437 ms
<br>
Ibcast 644 mb takes 115 ms
<br>
Ibcast 648 mb takes 111 ms
<br>
Ibcast 652 mb takes 112 ms
<br>
Ibcast 656 mb takes 112 ms
<br>
Ibcast 660 mb takes 114 ms
<br>
Ibcast 664 mb takes 114 ms
<br>
Ibcast 668 mb takes 115 ms
<br>
Ibcast 672 mb takes 116 ms
<br>
Ibcast 676 mb takes 116 ms
<br>
Ibcast 680 mb takes 116 ms
<br>
Ibcast 684 mb takes 122 ms
<br>
Ibcast 688 mb takes 7385 ms
<br>
Ibcast 692 mb takes 8729 ms
<br>
Ibcast 696 mb takes 120 ms
<br>
Ibcast 700 mb takes 124 ms
<br>
Ibcast 704 mb takes 121 ms
<br>
Ibcast 708 mb takes 8240 ms
<br>
Ibcast 712 mb takes 122 ms
<br>
Ibcast 716 mb takes 123 ms
<br>
Ibcast 720 mb takes 123 ms
<br>
Ibcast 724 mb takes 124 ms
<br>
Ibcast 728 mb takes 125 ms
<br>
Ibcast 732 mb takes 125 ms
<br>
Ibcast 736 mb takes 126 ms
<br>
<p>As you can see, Ibcast takes a long to finish and it's totally random.
<br>
The same program was compiled and tested with MVAPICH2-gdr but it went smoothly.
<br>
Both tests were running exclusively on our four nodes cluster without contention. Likewise, it doesn't matter
<br>
if I enable CUDA support or not.  The followings are the configuration of our server:
<br>
<p>We have four nodes in this test, each with one K40 GPU and connected with mellanox IB.
<br>
<p>Please find attached config details and some sample code&#133;
<br>
<p>Kindest Regards,
<br>
&#151;
<br>
Steven Eliuk, Ph.D. Comp Sci,
<br>
Advanced Software Platforms Lab,
<br>
SRA - SV,
<br>
Samsung Electronics,
<br>
1732 North First Street,
<br>
San Jose, CA 95112,
<br>
Work: +1 408-652-1976,
<br>
Work: +1 408-544-5781 Wednesdays,
<br>
Cell: +1 408-819-4407.
<br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25662/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25662/Ibcast_config_details.txt.zip">Ibcast_config_details.txt.zip</a>
</ul>
<!-- attachment="Ibcast_config_details.txt.zip" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25662/Ibcast_SampleCode.cpp">Ibcast_SampleCode.cpp</a>
</ul>
<!-- attachment="Ibcast_SampleCode.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25663.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25661.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25663.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Reply:</strong> <a href="25663.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
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
