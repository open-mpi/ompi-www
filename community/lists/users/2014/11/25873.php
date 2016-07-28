<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 19:19:02 2014" -->
<!-- isoreceived="20141126001902" -->
<!-- sent="Tue, 25 Nov 2014 16:18:56 -0800" -->
<!-- isosent="20141126001856" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="397F379F-1937-432D-99BB-B2472EAA1CB0_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D09A5ACC.80F86%knteran_at_sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 19:18:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25874.php">Nick Papior Andersen: "[OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25872.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25872.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We should probably create an MPI extension that exposes the internal database so you can just get the info as it is already present, and it seems a shame to execute a collective operation just to re-create it. I&#226;&#128;&#153;ll put it on my &#226;&#128;&#156;to-do&#226;&#128;&#157; list.
<br>
<p><p><span class="quotelev1">&gt; On Nov 25, 2014, at 4:14 PM, Teranishi, Keita &lt;knteran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adam,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the suggestion.  I was using my own tokenizer (or those from boost) to extract node ID numbers, but your approach is more generic and serves my own purpose.  For the time being I will try to leverage the SCR source, and will ask you if I need any further assistance.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Keita Teranishi
</span><br>
<span class="quotelev1">&gt; Principal Member of Technical Staff
</span><br>
<span class="quotelev1">&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; Livermore, CA 94551
</span><br>
<span class="quotelev1">&gt; +1 (925) 294-3738
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: &lt;Moody&gt;, &quot;Adam T.&quot; &lt;moody20_at_[hidden] &lt;mailto:moody20_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, November 25, 2014 at 3:09 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [EXTERNAL] Re: [OMPI users] How to find MPI ranks located in remote nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Keita,
</span><br>
<span class="quotelev1">&gt; There is no MPI API to do this from within an MPI application.  One method I have used for this purpose is to create a function that executes an MPI_Comm_split operation using a string as a color value.  As output, it returns a communicator containing all procs that specified the same string as the calling proc.  To get a comm of all procs on the same node on a Linux system, I pass in the value of gethostname().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As an example, see scr_split.h/c from the SCR library at <a href="https://github.com/hpc/scr">https://github.com/hpc/scr</a> &lt;<a href="https://github.com/hpc/scr">https://github.com/hpc/scr</a>.&gt;  That implementation uses a bitonic sort along with scan operations to execute the split.  You can also accomplish this with hashing.  If you need this type of functionality, I have a cleaned-up copy that I could send you without all of the SCR related code.
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 25, 2014 2:38 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to find MPI ranks located in remote nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every process has a complete map of where every process in the job is located - not sure if there is an MPI API for accessing it, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2014, at 2:32 PM, Teranishi, Keita &lt;knteran_at_[hidden] &lt;mailto:knteran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying  to figure out a way for each local MPI rank to identify the ranks located in physically remote nodes (just different nodes) of cluster or MPPs such as Cray.  I am using MPI_Get_processor_name to get the node ID, but it requires some processing to map MPI rank to the node ID.  Is there any better ways doing this using MPI-2.2 (or earlier) capabilities?   It will be great if I can easily get a list of MPI ranks in the same physical node.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Keita Teranishi
</span><br>
<span class="quotelev2">&gt;&gt; Principal Member of Technical Staff
</span><br>
<span class="quotelev2">&gt;&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; Livermore, CA 94551
</span><br>
<span class="quotelev2">&gt;&gt; +1 (925) 294-3738
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25868.php">http://www.open-mpi.org/community/lists/users/2014/11/25868.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25868.php">http://www.open-mpi.org/community/lists/users/2014/11/25868.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25872.php">http://www.open-mpi.org/community/lists/users/2014/11/25872.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25872.php">http://www.open-mpi.org/community/lists/users/2014/11/25872.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25874.php">Nick Papior Andersen: "[OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25872.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25872.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
