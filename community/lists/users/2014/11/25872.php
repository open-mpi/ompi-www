<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 19:15:04 2014" -->
<!-- isoreceived="20141126001504" -->
<!-- sent="Wed, 26 Nov 2014 00:14:43 +0000" -->
<!-- isosent="20141126001443" -->
<!-- name="Teranishi, Keita" -->
<!-- email="knteran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="D09A5ACC.80F86%knteran_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="146586E3640BBF4D9507B00739F551A61C210DD9_at_PRDEXMBX-02.the-lab.llnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> Teranishi, Keita (<em>knteran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 19:14:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25873.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25871.php">Moody, Adam T.: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25871.php">Moody, Adam T.: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25873.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25873.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adam,
<br>
<p>Thanks for the suggestion.  I was using my own tokenizer (or those from boost) to extract node ID numbers, but your approach is more generic and serves my own purpose.  For the time being I will try to leverage the SCR source, and will ask you if I need any further assistance.
<br>
<p>Best Regards,
<br>
-----------------------------------------------------------------------------
<br>
Keita Teranishi
<br>
Principal Member of Technical Staff
<br>
Scalable Modeling and Analysis Systems
<br>
Sandia National Laboratories
<br>
Livermore, CA 94551
<br>
+1 (925) 294-3738
<br>
<p><p>From: &lt;Moody&gt;, &quot;Adam T.&quot; &lt;moody20_at_[hidden]&lt;mailto:moody20_at_[hidden]&gt;&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Tuesday, November 25, 2014 at 3:09 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: [EXTERNAL] Re: [OMPI users] How to find MPI ranks located in remote nodes?
<br>
<p>Hi Keita,
<br>
There is no MPI API to do this from within an MPI application.  One method I have used for this purpose is to create a function that executes an MPI_Comm_split operation using a string as a color value.  As output, it returns a communicator containing all procs that specified the same string as the calling proc.  To get a comm of all procs on the same node on a Linux system, I pass in the value of gethostname().
<br>
<p>As an example, see scr_split.h/c from the SCR library at <a href="https://github.com/hpc/scr<https://github.com/hpc/scr">https://github.com/hpc/scr<https://github.com/hpc/scr</a>.&gt;  That implementation uses a bitonic sort along with scan operations to execute the split.  You can also accomplish this with hashing.  If you need this type of functionality, I have a cleaned-up copy that I could send you without all of the SCR related code.
<br>
-Adam
<br>
<p><p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Tuesday, November 25, 2014 2:38 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] How to find MPI ranks located in remote nodes?
<br>
<p>Every process has a complete map of where every process in the job is located - not sure if there is an MPI API for accessing it, though.
<br>
<p><p>On Nov 25, 2014, at 2:32 PM, Teranishi, Keita &lt;knteran_at_[hidden]&lt;mailto:knteran_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi,
<br>
<p>I am trying  to figure out a way for each local MPI rank to identify the ranks located in physically remote nodes (just different nodes) of cluster or MPPs such as Cray.  I am using MPI_Get_processor_name to get the node ID, but it requires some processing to map MPI rank to the node ID.  Is there any better ways doing this using MPI-2.2 (or earlier) capabilities?   It will be great if I can easily get a list of MPI ranks in the same physical node.
<br>
<p>Thanks,
<br>
-----------------------------------------------------------------------------
<br>
Keita Teranishi
<br>
Principal Member of Technical Staff
<br>
Scalable Modeling and Analysis Systems
<br>
Sandia National Laboratories
<br>
Livermore, CA 94551
<br>
+1 (925) 294-3738
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25868.php">http://www.open-mpi.org/community/lists/users/2014/11/25868.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25872/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25873.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25871.php">Moody, Adam T.: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25871.php">Moody, Adam T.: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25873.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25873.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
