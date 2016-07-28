<?
$subject_val = "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function..";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 01:37:23 2015" -->
<!-- isoreceived="20151217063723" -->
<!-- sent="Thu, 17 Dec 2015 15:37:16 +0900" -->
<!-- isosent="20151217063716" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.." -->
<!-- id="5672581C.2020009_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAMMxCZpczN0=VX+_vBu531L=5_2C=y4DgYFK6oP5+nh9pvxiA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function..<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 01:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>In reply to:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
the v1.10 series was fixed from 1.10.1
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>$ git log --grep=57d3b832972a9d914a7c2067a526dfa3df1dbb34
<br>
commit e1ceb4e5f9dadb44edb77662a13058c9b3746505
<br>
Author: Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
<br>
Date:   Fri Oct 2 10:35:21 2015 -0600
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;op: allow user operations in ompi_3buff_op_reduce
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This commit allows user operations to be used in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_3buff_op_reduce function. This fixes an issue identified in:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14586.php">http://www.open-mpi.org/community/lists/devel/2014/04/14586.php</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27769.php">http://www.open-mpi.org/community/lists/users/2015/10/27769.php</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The fix is to copy source1 into the target then call the user op
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function with source2 and target.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fixes #966
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(cherry picked from commit 
<br>
open-mpi/ompi_at_57d3b832972a9d914a7c2067a526dfa3df1dbb34)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signed-off-by: Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
<br>
<p><p>On 12/17/2015 3:33 PM, Udayanga Wickramasinghe wrote:
<br>
<span class="quotelev1">&gt; I tried with 1.10.0, and is failing still. I will need to check 
</span><br>
<span class="quotelev1">&gt; whether it works for later releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Udayanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 16, 2015 at 5:24 PM, Nathan Hjelm &lt;hjelmn_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I think this is fixed in the 1.10 series. We will not be making
</span><br>
<span class="quotelev1">&gt;     any more
</span><br>
<span class="quotelev1">&gt;     updates to the 1.8 series so you will need to update to 1.10 to
</span><br>
<span class="quotelev1">&gt;     get the
</span><br>
<span class="quotelev1">&gt;     fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Wed, Dec 16, 2015 at 02:48:45PM -0500, Udayanga Wickramasinghe
</span><br>
<span class="quotelev1">&gt;     wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;    Hi all,
</span><br>
<span class="quotelev2">&gt;     &gt;    I have a custom MPI_Op function which I use within a non
</span><br>
<span class="quotelev1">&gt;     blocking version
</span><br>
<span class="quotelev2">&gt;     &gt;    of all_reduce(). When executing the mpi program I am seeing a
</span><br>
<span class="quotelev1">&gt;     segfault
</span><br>
<span class="quotelev2">&gt;     &gt;    thrown from libNBC. It seems like this is a known issue in
</span><br>
<span class="quotelev1">&gt;     openMPI atleast
</span><br>
<span class="quotelev2">&gt;     &gt;    [1]. Is this somehow fixed in a later release version of
</span><br>
<span class="quotelev1">&gt;     openmpi ? I am
</span><br>
<span class="quotelev2">&gt;     &gt;    using 1.8.4.
</span><br>
<span class="quotelev2">&gt;     &gt;    Thanks
</span><br>
<span class="quotelev2">&gt;     &gt;    Udayanga
</span><br>
<span class="quotelev2">&gt;     &gt;    [1]
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14588.php">http://www.open-mpi.org/community/lists/devel/2014/04/14588.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/12/28167.php">http://www.open-mpi.org/community/lists/users/2015/12/28167.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/12/28170.php">http://www.open-mpi.org/community/lists/users/2015/12/28170.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28172.php">http://www.open-mpi.org/community/lists/users/2015/12/28172.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28173/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28174.php">Eric Chamberland: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>In reply to:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
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
