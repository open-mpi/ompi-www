<?
$subject_val = "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 27 08:13:15 2014" -->
<!-- isoreceived="20141127131315" -->
<!-- sent="Thu, 27 Nov 2014 14:12:54 +0100" -->
<!-- isosent="20141127131254" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="CAAbhqc5jm8_FWbYuzJzQa5ds2P-hhQ_fj8D+bYxZG5iF48O95g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1CC96C96-A3E1-498A-90F3-8B80F612DE45_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-27 08:12:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, I will make the changes and commit to make them OMPI specific.
<br>
<p>I will post forward my problems on the devel list.
<br>
<p>I will keep you posted. :)
<br>
<p>2014-11-27 13:58 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Nov 26, 2014, at 2:08 PM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is my commit-msg:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;
</span><br>
<span class="quotelev2">&gt; &gt; We can now split communicators based on hwloc full capabilities up to
</span><br>
<span class="quotelev1">&gt; BOARD.
</span><br>
<span class="quotelev2">&gt; &gt; I.e.:
</span><br>
<span class="quotelev2">&gt; &gt; HWTHREAD,CORE,L1CACHE,L2CACHE,L3CACHE,SOCKET,NUMA,NODE,BOARD
</span><br>
<span class="quotelev2">&gt; &gt; where NODE is the same as SHARED.
</span><br>
<span class="quotelev2">&gt; &gt; &quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Maybe what I did could be useful somehow?
</span><br>
<span class="quotelev2">&gt; &gt; I mean to achieve the effect one could do:
</span><br>
<span class="quotelev2">&gt; &gt; comm_split_type(MPI_COMM_TYPE_Node,comm)
</span><br>
<span class="quotelev2">&gt; &gt; create new group from all nodes not belonging to this group.
</span><br>
<span class="quotelev2">&gt; &gt; This can even be more fine tuned if one wishes to create a group of
</span><br>
<span class="quotelev1">&gt; &quot;master&quot; cores on each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will say that there was a lot of debate about this kind of functionality
</span><br>
<span class="quotelev1">&gt; at the MPI Forum.  The problem is that although x86-based clusters are
</span><br>
<span class="quotelev1">&gt; quite common these days, they are not the only kind of machines used for
</span><br>
<span class="quotelev1">&gt; HPC out there, and the exact definitions of these kinds of concepts
</span><br>
<span class="quotelev1">&gt; (hwthread, core, lXcache, socket, numa, ...etc.) can vary between
</span><br>
<span class="quotelev1">&gt; architectures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, the compromise was to just have MPI_COMM_TYPE_SHARED, where the
</span><br>
<span class="quotelev1">&gt; resulting communicator contains processes that share a single memory space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, since OMPI uses hwloc for all of its supported
</span><br>
<span class="quotelev1">&gt; architectures, it might be worthwhile to have an OMPI extension for
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_TYPE_&lt;foo&gt; for the various different types.  One could/should
</span><br>
<span class="quotelev1">&gt; only use these new constants if the OPEN_MPI macro is defined and is 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And *that* being said, one of the goals of MPI is portability, so anyone
</span><br>
<span class="quotelev1">&gt; using these constants would inherently non-portable.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have not been able to compile it due to my autogen.pl giving me some
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What kind of errors?  (we might want to move this discussion to the devel
</span><br>
<span class="quotelev1">&gt; list...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  However, I think it should compile just fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you think it could be useful?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If interested you can find my, single commit branch, at:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/zerothi/ompi">https://github.com/zerothi/ompi</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks interesting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you file a pull requests against the ompi master, and send something
</span><br>
<span class="quotelev1">&gt; to the devel list about this functionality?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd still strongly suggest renaming these constants to the &quot;OMPI_&quot; to
</span><br>
<span class="quotelev1">&gt; differentiate them from standard MPI constants / functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25878.php">http://www.open-mpi.org/community/lists/users/2014/11/25878.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
