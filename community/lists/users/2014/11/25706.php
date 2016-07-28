<?
$subject_val = "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 11:50:25 2014" -->
<!-- isoreceived="20141107165025" -->
<!-- sent="Fri, 07 Nov 2014 16:50:21 +0000" -->
<!-- isosent="20141107165021" -->
<!-- name="Steven Eliuk" -->
<!-- email="s.eliuk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast" -->
<!-- id="D0823800.1E288%s.eliuk_at_samsung.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="ac71cd8766074931aa1475d492fce34d_at_HQMAIL102.nvidia.com" -->
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
<strong>Date:</strong> 2014-11-07 11:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25707.php">Blosch, Edwin L: "[OMPI users] Question on mapping processes to hosts file"</a>
<li><strong>Previous message:</strong> <a href="25705.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>In reply to:</strong> <a href="25704.php">Rolf vandeVaart: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of	MPI_Ibcast"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me clarify as that wasn&#146;t very clear&#133; if we enable, or disable, GDR it doesn&#146;t make a difference. Seems to be in the base code,
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
<p><p>From: Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Thursday, November 6, 2014 at 10:18 AM
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast
<br>
<p>The CUDA person is now responding.  I will try and reproduce.  I looked through the zip file but did not see the mpirun command.   Can this be reproduced with &#150;np 4 running across four nodes?
<br>
Also, in your original message you wrote &#147;Likewise, it doesn't matter if I enable CUDA support or not. &#147;  Can you provide more detail about what that means?
<br>
Thanks
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, November 06, 2014 1:05 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast
<br>
<p>I was hoping our CUDA person would respond, but in the interim - I would suggest trying the nightly 1.8.4 tarball as we are getting ready to release it, and I know there were some CUDA-related patches since 1.8.1
<br>
<p><a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
<br>
<p><p>On Nov 5, 2014, at 4:45 PM, Steven Eliuk &lt;s.eliuk_at_[hidden]&lt;mailto:s.eliuk_at_[hidden]&gt;&gt; wrote:
<br>
<p>OpenMPI: 1.8.1 with CUDA RDMA&#133;
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25695.php">http://www.open-mpi.org/community/lists/users/2014/11/25695.php</a>
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25706/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25707.php">Blosch, Edwin L: "[OMPI users] Question on mapping processes to hosts file"</a>
<li><strong>Previous message:</strong> <a href="25705.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>In reply to:</strong> <a href="25704.php">Rolf vandeVaart: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of	MPI_Ibcast"</a>
<!-- nextthread="start" -->
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
