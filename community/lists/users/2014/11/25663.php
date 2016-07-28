<?
$subject_val = "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 13:02:38 2014" -->
<!-- isoreceived="20141103180238" -->
<!-- sent="Mon, 3 Nov 2014 10:02:34 -0800" -->
<!-- isosent="20141103180234" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast" -->
<!-- id="DA85810F-370F-4F0C-B556-634EB80ACD29_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D07CF805.1E0A8%s.eliuk_at_samsung.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 13:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25664.php">Jeff Squyres (jsquyres): "[OMPI users] Fwd: [Open MPI Announce] Open MPI at SC14"</a>
<li><strong>Previous message:</strong> <a href="25662.php">Steven Eliuk: "[OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>In reply to:</strong> <a href="25662.php">Steven Eliuk: "[OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25695.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Reply:</strong> <a href="25695.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which version of OMPI were you testing?
<br>
<p><span class="quotelev1">&gt; On Nov 3, 2014, at 9:14 AM, Steven Eliuk &lt;s.eliuk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We were using OpenMPI for some testing, everything works fine but randomly, MPI_Ibcast()
</span><br>
<span class="quotelev1">&gt; takes long time to finish. We have a standalone program just to test it.  The following 
</span><br>
<span class="quotelev1">&gt; is the profiling results of the simple test program on our cluster:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ibcast 604 mb takes 103 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 608 mb takes 106 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 612 mb takes 105 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 616 mb takes 105 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 620 mb takes 107 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 624 mb takes 107 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 628 mb takes 108 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 632 mb takes 110 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 636 mb takes 110 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 640 mb takes 7437 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 644 mb takes 115 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 648 mb takes 111 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 652 mb takes 112 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 656 mb takes 112 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 660 mb takes 114 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 664 mb takes 114 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 668 mb takes 115 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 672 mb takes 116 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 676 mb takes 116 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 680 mb takes 116 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 684 mb takes 122 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 688 mb takes 7385 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 692 mb takes 8729 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 696 mb takes 120 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 700 mb takes 124 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 704 mb takes 121 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 708 mb takes 8240 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 712 mb takes 122 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 716 mb takes 123 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 720 mb takes 123 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 724 mb takes 124 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 728 mb takes 125 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 732 mb takes 125 ms
</span><br>
<span class="quotelev1">&gt; Ibcast 736 mb takes 126 ms
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, Ibcast takes a long to finish and it's totally random.
</span><br>
<span class="quotelev1">&gt; The same program was compiled and tested with MVAPICH2-gdr but it went smoothly.
</span><br>
<span class="quotelev1">&gt; Both tests were running exclusively on our four nodes cluster without contention. Likewise, it doesn't matter 
</span><br>
<span class="quotelev1">&gt; if I enable CUDA support or not.  The followings are the configuration of our server:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have four nodes in this test, each with one K40 GPU and connected with mellanox IB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please find attached config details and some sample code&#133;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kindest Regards,
</span><br>
<span class="quotelev1">&gt; &#151;
</span><br>
<span class="quotelev1">&gt; Steven Eliuk, Ph.D. Comp Sci,
</span><br>
<span class="quotelev1">&gt; Advanced Software Platforms Lab,
</span><br>
<span class="quotelev1">&gt; SRA - SV,
</span><br>
<span class="quotelev1">&gt; Samsung Electronics,
</span><br>
<span class="quotelev1">&gt; 1732 North First Street,
</span><br>
<span class="quotelev1">&gt; San Jose, CA 95112,
</span><br>
<span class="quotelev1">&gt; Work: +1 408-652-1976,
</span><br>
<span class="quotelev1">&gt; Work: +1 408-544-5781 Wednesdays,
</span><br>
<span class="quotelev1">&gt; Cell: +1 408-819-4407.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;Ibcast_config_details.txt.zip&gt;&lt;Ibcast_SampleCode.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25662.php">http://www.open-mpi.org/community/lists/users/2014/11/25662.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25663/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25664.php">Jeff Squyres (jsquyres): "[OMPI users] Fwd: [Open MPI Announce] Open MPI at SC14"</a>
<li><strong>Previous message:</strong> <a href="25662.php">Steven Eliuk: "[OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>In reply to:</strong> <a href="25662.php">Steven Eliuk: "[OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25695.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Reply:</strong> <a href="25695.php">Steven Eliuk: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
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
