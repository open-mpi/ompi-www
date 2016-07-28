<?
$subject_val = "[OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 26 14:08:49 2014" -->
<!-- isoreceived="20141126190849" -->
<!-- sent="Wed, 26 Nov 2014 19:08:27 +0000" -->
<!-- isosent="20141126190827" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="CAAbhqc52eaQsS_Oc7aaOwbAQRiWyMBiZVuSLpuyseisG0V--dA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc5cU6CdKqPD5svdDTuRzWwa6RBtuJ_TobOqxq0J9RC52w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-26 14:08:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25875.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25873.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph (all ;))
<br>
<p>In regards of these posts and due to you adding it to your todo list.
<br>
<p>I wanted to do something similarly and implemented a &quot;quick fix&quot;.
<br>
I wanted to create a communicator per node, and then create a window to
<br>
allocate an array in shared memory, however, I came to short in the current
<br>
implementation, and hence needed the &quot;per-socket&quot;.
<br>
<p>I implemented a way to create communicators using the comm_split_type and
<br>
rely on the HWloc types.
<br>
<p>Here is my commit-msg:
<br>
&quot;
<br>
We can now split communicators based on hwloc full capabilities up to BOARD.
<br>
I.e.:
<br>
HWTHREAD,CORE,L1CACHE,L2CACHE,L3CACHE,SOCKET,NUMA,NODE,BOARD
<br>
where NODE is the same as SHARED.
<br>
&quot;
<br>
<p>Maybe what I did could be useful somehow?
<br>
I mean to achieve the effect one could do:
<br>
comm_split_type(MPI_COMM_TYPE_Node,comm)
<br>
create new group from all nodes not belonging to this group.
<br>
This can even be more fine tuned if one wishes to create a group of
<br>
&quot;master&quot; cores on each node.
<br>
<p>I have not been able to compile it due to my autogen.pl giving me some
<br>
errors. However, I think it should compile just fine.
<br>
<p>Do you think it could be useful?
<br>
<p>If interested you can find my, single commit branch, at:
<br>
<a href="https://github.com/zerothi/ompi">https://github.com/zerothi/ompi</a>
<br>
<p>It is very little that has changed.
<br>
<p><p>2014-11-26 1:18 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; We should probably create an MPI extension that exposes the internal
</span><br>
<span class="quotelev1">&gt; database so you can just get the info as it is already present, and it
</span><br>
<span class="quotelev1">&gt; seems a shame to execute a collective operation just to re-create it. I&#226;&#128;&#153;ll
</span><br>
<span class="quotelev1">&gt; put it on my &#226;&#128;&#156;to-do&#226;&#128;&#157; list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2014, at 4:14 PM, Teranishi, Keita &lt;knteran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adam,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the suggestion.  I was using my own tokenizer (or those from
</span><br>
<span class="quotelev1">&gt; boost) to extract node ID numbers, but your approach is more generic and
</span><br>
<span class="quotelev1">&gt; serves my own purpose.  For the time being I will try to leverage the SCR
</span><br>
<span class="quotelev1">&gt; source, and will ask you if I need any further assistance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; From: &lt;Moody&gt;, &quot;Adam T.&quot; &lt;moody20_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, November 25, 2014 at 3:09 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [EXTERNAL] Re: [OMPI users] How to find MPI ranks located in
</span><br>
<span class="quotelev1">&gt; remote nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Keita,
</span><br>
<span class="quotelev1">&gt; There is no MPI API to do this from within an MPI application.  One method
</span><br>
<span class="quotelev1">&gt; I have used for this purpose is to create a function that executes an
</span><br>
<span class="quotelev1">&gt; MPI_Comm_split operation using a string as a color value.  As output, it
</span><br>
<span class="quotelev1">&gt; returns a communicator containing all procs that specified the same string
</span><br>
<span class="quotelev1">&gt; as the calling proc.  To get a comm of all procs on the same node on a
</span><br>
<span class="quotelev1">&gt; Linux system, I pass in the value of gethostname().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an example, see scr_split.h/c from the SCR library at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hpc/scr">https://github.com/hpc/scr</a> &lt;<a href="https://github.com/hpc/scr">https://github.com/hpc/scr</a>.&gt;  That
</span><br>
<span class="quotelev1">&gt; implementation uses a bitonic sort along with scan operations to execute
</span><br>
<span class="quotelev1">&gt; the split.  You can also accomplish this with hashing.  If you need this
</span><br>
<span class="quotelev1">&gt; type of functionality, I have a cleaned-up copy that I could send you
</span><br>
<span class="quotelev1">&gt; without all of the SCR related code.
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, November 25, 2014 2:38 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] How to find MPI ranks located in remote nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every process has a complete map of where every process in the job is
</span><br>
<span class="quotelev1">&gt; located - not sure if there is an MPI API for accessing it, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2014, at 2:32 PM, Teranishi, Keita &lt;knteran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying  to figure out a way for each local MPI rank to identify the
</span><br>
<span class="quotelev1">&gt; ranks located in physically remote nodes (just different nodes) of cluster
</span><br>
<span class="quotelev1">&gt; or MPPs such as Cray.  I am using MPI_Get_processor_name to get the node
</span><br>
<span class="quotelev1">&gt; ID, but it requires some processing to map MPI rank to the node ID.  Is
</span><br>
<span class="quotelev1">&gt; there any better ways doing this using MPI-2.2 (or earlier) capabilities?
</span><br>
<span class="quotelev1">&gt; It will be great if I can easily get a list of MPI ranks in the same
</span><br>
<span class="quotelev1">&gt; physical node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25868.php">http://www.open-mpi.org/community/lists/users/2014/11/25868.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25872.php">http://www.open-mpi.org/community/lists/users/2014/11/25872.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25873.php">http://www.open-mpi.org/community/lists/users/2014/11/25873.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25875.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25873.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
