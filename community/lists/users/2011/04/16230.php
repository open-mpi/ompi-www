<?
$subject_val = "Re: [OMPI users] OMPI monitor each process behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 12:33:01 2011" -->
<!-- isoreceived="20110413163301" -->
<!-- sent="Wed, 13 Apr 2011 10:32:51 -0600" -->
<!-- isosent="20110413163251" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI monitor each process behavior" -->
<!-- id="ABB69B03-1F8D-4804-B053-59C19E7D8239_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w55D69C8DED166C9B8280A2CBAA0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI monitor each process behavior<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 12:32:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16231.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16229.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>In reply to:</strong> <a href="16228.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16216.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2011, at 10:29 AM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Hi , 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I cannot ssh to a worker node, it means that my program cannot work correctly ? 
</span><br>
<p>No, that's not true. People thought you were on a cluster using ssh as the launcher. From prior notes, you were using Torque, so not being allowed to ssh is just an admin thing.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run it on 32 nodes *4 cores/node parallel processes. But, for larger parallel processes, 
</span><br>
<span class="quotelev1">&gt; 128 nodes * 1 cpu/node, it is killed by signal 9. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a reason ? 
</span><br>
<p>No, it isn't
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 13 Apr 2011 05:59:10 -0700
</span><br>
<span class="quotelev2">&gt; &gt; From: n8tm_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] OMPI monitor each process behavior
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 4/12/2011 8:55 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to monitor the memory usage of each parallel process on a linux
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI cluster.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But, top, ps command cannot help here because they only show the head
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node information.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to follow the behavior of each process on each cluster node.
</span><br>
<span class="quotelev2">&gt; &gt; Did you consider ganglia et al?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I cannot use ssh to access each node.
</span><br>
<span class="quotelev2">&gt; &gt; How can MPI run?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The program takes 8 hours to finish.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Tim Prince
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16230/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16231.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16229.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>In reply to:</strong> <a href="16228.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16216.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
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
