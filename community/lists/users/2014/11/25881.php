<?
$subject_val = "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 27 08:22:28 2014" -->
<!-- isoreceived="20141127132228" -->
<!-- sent="Thu, 27 Nov 2014 14:22:07 +0100" -->
<!-- isosent="20141127132207" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="CAAbhqc6gRwnnaK3+ET5F+LaLb0htvQd4uJ+9LcFokYjOtZ-xsg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1DB5B5AC-74B3-45EE-AD10-D8E179CDC914_at_cisco.com" -->
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
<strong>Date:</strong> 2014-11-27 08:22:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25882.php">Dave Love: "[OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Previous message:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25885.php">Nick Papior Andersen: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25885.php">Nick Papior Andersen: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No worries :)
<br>
<p>2014-11-27 14:20 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Many thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that it's a holiday week here in the US -- I'm only on for a short
</span><br>
<span class="quotelev1">&gt; time here this morning; I'll likely disappear again shortly until next
</span><br>
<span class="quotelev1">&gt; week.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2014, at 8:12 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sure, I will make the changes and commit to make them OMPI specific.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will post forward my problems on the devel list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will keep you posted. :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2014-11-27 13:58 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 26, 2014, at 2:08 PM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here is my commit-msg:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We can now split communicators based on hwloc full capabilities up to
</span><br>
<span class="quotelev1">&gt; BOARD.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I.e.:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HWTHREAD,CORE,L1CACHE,L2CACHE,L3CACHE,SOCKET,NUMA,NODE,BOARD
</span><br>
<span class="quotelev3">&gt; &gt; &gt; where NODE is the same as SHARED.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Maybe what I did could be useful somehow?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I mean to achieve the effect one could do:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; comm_split_type(MPI_COMM_TYPE_Node,comm)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; create new group from all nodes not belonging to this group.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This can even be more fine tuned if one wishes to create a group of
</span><br>
<span class="quotelev1">&gt; &quot;master&quot; cores on each node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will say that there was a lot of debate about this kind of
</span><br>
<span class="quotelev1">&gt; functionality at the MPI Forum.  The problem is that although x86-based
</span><br>
<span class="quotelev1">&gt; clusters are quite common these days, they are not the only kind of
</span><br>
<span class="quotelev1">&gt; machines used for HPC out there, and the exact definitions of these kinds
</span><br>
<span class="quotelev1">&gt; of concepts (hwthread, core, lXcache, socket, numa, ...etc.) can vary
</span><br>
<span class="quotelev1">&gt; between architectures.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hence, the compromise was to just have MPI_COMM_TYPE_SHARED, where the
</span><br>
<span class="quotelev1">&gt; resulting communicator contains processes that share a single memory space.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, since OMPI uses hwloc for all of its supported
</span><br>
<span class="quotelev1">&gt; architectures, it might be worthwhile to have an OMPI extension for
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_TYPE_&lt;foo&gt; for the various different types.  One could/should
</span><br>
<span class="quotelev1">&gt; only use these new constants if the OPEN_MPI macro is defined and is 1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And *that* being said, one of the goals of MPI is portability, so anyone
</span><br>
<span class="quotelev1">&gt; using these constants would inherently non-portable.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have not been able to compile it due to my autogen.pl giving me
</span><br>
<span class="quotelev1">&gt; some errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What kind of errors?  (we might want to move this discussion to the
</span><br>
<span class="quotelev1">&gt; devel list...)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  However, I think it should compile just fine.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you think it could be useful?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If interested you can find my, single commit branch, at:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/zerothi/ompi">https://github.com/zerothi/ompi</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This looks interesting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you file a pull requests against the ompi master, and send something
</span><br>
<span class="quotelev1">&gt; to the devel list about this functionality?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd still strongly suggest renaming these constants to the &quot;OMPI_&quot; to
</span><br>
<span class="quotelev1">&gt; differentiate them from standard MPI constants / functionality.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25878.php">http://www.open-mpi.org/community/lists/users/2014/11/25878.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25879.php">http://www.open-mpi.org/community/lists/users/2014/11/25879.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25880.php">http://www.open-mpi.org/community/lists/users/2014/11/25880.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25882.php">Dave Love: "[OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Previous message:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25885.php">Nick Papior Andersen: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25885.php">Nick Papior Andersen: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
