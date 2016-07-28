<?
$subject_val = "[OMPI devel] RFC: Calling ibv_fork_init() in the openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  6 10:15:04 2013" -->
<!-- isoreceived="20131206151504" -->
<!-- sent="Fri, 6 Dec 2013 15:15:02 +0000" -->
<!-- isosent="20131206151502" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Calling ibv_fork_init() in the openib BTL" -->
<!-- id="C7BD7D0B-DF6F-44C8-8E01-4FDEC7454039_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Calling ibv_fork_init() in the openib BTL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-06 10:15:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13396.php">Ralph Castain: "[OMPI devel] OSHMEM to 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13394.php">Josh Hursey: "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To those who care about the openib BTL...
<br>
<p>SHORT VERSION
<br>
-------------
<br>
<p>Do you really want to call ibv_fork_init() in the openib BTL by default?
<br>
<p>MORE DETAIL
<br>
-----------
<br>
<p>Rolf V. pointed out to me yesterday that we're calling ibv_fork_init() in the openib BTL.  He asked if we did the same in the usnic BTL.  We don't, and here's why:
<br>
<p>1. it adds a slight performance penalty for ibv_reg_mr/ibv_dereg_mr
<br>
2. the only thing ibv_fork_init() protects against is the child sending from memory that it thinks should already be registered:
<br>
<p>-----
<br>
MPI_Init(...)
<br>
if (0 == fork()) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ibv_post_send(some_previously_pinned_buffer, ...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// ^^ this can't work because the buffer is *not* pinned in the child
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// (for lack of a longer explanation here)
<br>
}
<br>
-----
<br>
<p>3. ibv_fork_init() is not intended to protect against a child invoking an MPI function (if they do that; they get what they deserve!).
<br>
<p>Note that #2 can't happen, because MPI doesn't expose its protection domains, queue pairs, or registrations (or any of its verbs constructs) at all.  
<br>
<p>Hence, all ibv_fork_init() does is a) impose a performance penalty, and b) make memory physically unavailable in a child process, such that:
<br>
<p><pre>
----
ibv_fork_init();
a = malloc(...);
a[0] = 17;
ibv_reg_mr(a, ...);
if (0 == fork()) {
    printf(&quot;this is a[0]: %d\n&quot;, a[0]);
    // ^^ This will segv
}
-----
But the registered memory may actually be useful in the child.
So I just thought I'd pass this along, and ask the openib-caring people of the world if you really still want to be calling ibv_fork_init() by default in the openib BTL.
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13396.php">Ralph Castain: "[OMPI devel] OSHMEM to 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13394.php">Josh Hursey: "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to compile again. (send_*_nb)"</a>
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
