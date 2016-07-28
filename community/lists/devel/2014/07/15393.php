<?
$subject_val = "[OMPI devel] RFC: Change default behavior of calling ibv_fork_init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 10:01:12 2014" -->
<!-- isoreceived="20140731140112" -->
<!-- sent="Thu, 31 Jul 2014 07:01:08 -0700" -->
<!-- isosent="20140731140108" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Change default behavior of calling ibv_fork_init" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360477A1A70_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Change default behavior of calling ibv_fork_init<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 10:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15394.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Change default behavior in openib to not call ibv_fork_init() even if available.
<br>
WHY: There are some strange interactions with ummunotify that cause errors.  In addition, see the additional points below.
<br>
WHEN: After next weekly meeting, August 5, 2014
<br>
DETAILS:  This change will just be a couple of lines.  Current default behavior is to call ibv_fork_init() if support exists. New default behavior is to call it only if asked for.
<br>
Essentially, default setting of btl_openib_want_fork_support will change from -1 (use it if available) to 0 (do not use unless asked for)
<br>
<p><p>Here are details from an earlier post last year.  <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13395.php">http://www.open-mpi.org/community/lists/devel/2013/12/13395.php</a>
<br>
Subject: [OMPI devel] RFC: Calling ibv_fork_init() in the openib BTL
<br>
From: Jeff Squyres (jsquyres) (jsquyres_at_[hidden])
<br>
Date: 2013-12-06 10:15:02
<br>
To those who care about the openib BTL...
<br>
SHORT VERSION
<br>
-------------
<br>
Do you really want to call ibv_fork_init() in the openib BTL by default?
<br>
MORE DETAIL
<br>
-----------
<br>
Rolf V. pointed out to me yesterday that we're calling ibv_fork_init() in the openib BTL. He asked if we did the same in the usnic BTL. We don't, and here's why:
<br>
1. it adds a slight performance penalty for ibv_reg_mr/ibv_dereg_mr
<br>
2. the only thing ibv_fork_init() protects against is the child sending from memory that it thinks should already be registered:
<br>
-----
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
3. ibv_fork_init() is not intended to protect against a child invoking an MPI function (if they do that; they get what they deserve!).
<br>
Note that #2 can't happen, because MPI doesn't expose its protection domains, queue pairs, or registrations (or any of its verbs constructs) at all.
<br>
Hence, all ibv_fork_init() does is a) impose a performance penalty, and b) make memory physically unavailable in a child process, such that:
<br>
<pre>
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
-----------------------------------------------------------------------------------
This email message is for the sole use of the intended recipient(s) and may contain
confidential information.  Any unauthorized review, use, disclosure or distribution
is prohibited.  If you are not the intended recipient, please contact the sender by
reply email and destroy all copies of the original message.
-----------------------------------------------------------------------------------
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15393/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15394.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
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
