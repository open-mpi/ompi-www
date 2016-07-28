<?
$subject_val = "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 19:45:25 2014" -->
<!-- isoreceived="20141106004525" -->
<!-- sent="Thu, 06 Nov 2014 00:45:21 +0000" -->
<!-- isosent="20141106004521" -->
<!-- name="Steven Eliuk" -->
<!-- email="s.eliuk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast" -->
<!-- id="D080047F.1E1DE%s.eliuk_at_samsung.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="DA85810F-370F-4F0C-B556-634EB80ACD29_at_gmail.com" -->
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
<strong>From:</strong> Steven Eliuk (<em>s.eliuk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 19:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>In reply to:</strong> <a href="25663.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25703.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Reply:</strong> <a href="25703.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI: 1.8.1 with CUDA RDMA&#133;
<br>
<p>Thanks sir and sorry for the late response,
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
<p><p>From: Ralph Castain &lt;rhc.openmpi_at_[hidden]&lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Monday, November 3, 2014 at 10:02 AM
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast
<br>
<p>Which version of OMPI were you testing?
<br>
<p>On Nov 3, 2014, at 9:14 AM, Steven Eliuk &lt;s.eliuk_at_[hidden]&lt;mailto:s.eliuk_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hello,
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
<p>&lt;Ibcast_config_details.txt.zip&gt;&lt;Ibcast_SampleCode.cpp&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25662.php">http://www.open-mpi.org/community/lists/users/2014/11/25662.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25696.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>In reply to:</strong> <a href="25663.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25703.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Reply:</strong> <a href="25703.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
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
