<?
$subject_val = "Re: [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined	symbol hcoll_group_destroy_notify";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 22:08:04 2014" -->
<!-- isoreceived="20140409020804" -->
<!-- sent="Wed, 9 Apr 2014 02:08:00 +0000" -->
<!-- isosent="20140409020800" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Was &amp;quot;hcoll destruction via MPI attribute&amp;quot;: undefined	symbol hcoll_group_destroy_notify" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3ED31332_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADkWibcDYWF5dpwWBqcZLMAYMq0tYZR-FnJHFaumjLS=SanwXg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined	symbol hcoll_group_destroy_notify<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 22:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14481.php">Jeff Squyres (jsquyres): "[OMPI devel] Face-to-face OMPI dev meeting: doodle"</a>
<li><strong>Previous message:</strong> <a href="14479.php">Anthony Alba: "[OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>In reply to:</strong> <a href="14479.php">Anthony Alba: "[OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In order to run with OMPI 1.8, we need to get you the latest HCOLL drop. Mike Dubman can handle this for you. He will be back in the office Thursday sometime.
<br>
<p>Best,
<br>
<p>Josh
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Anthony Alba
<br>
Sent: Tuesday, April 08, 2014 9:59 PM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify
<br>
<p>Running OMPI 1.8 with Mellanox OFED 2.1-1.0.6, with --with-hcoll=/opt/mellanox/hcoll
<br>
<p><p>The symbol hcoll_group_destroy_notify() is used in
<br>
<p>ompi/mca/coll/hcoll/coll_hcoll_module.c
<br>
<p>but I cannot find it exported anywhere. It is not in /opt/mellanox/hcoll/lib/lib*so
<br>
<p>nm /opt/mellanox/hcoll/lib/lib*so | grep group_destroy
<br>
<p>returns nothing.
<br>
<p>MOFED contains hcoll-2.0.472-1.x86_64.
<br>
<p><p><a href="http://www.open-mpi.org/community/lists/devel/2014/01/13622.php">http://www.open-mpi.org/community/lists/devel/2014/01/13622.php</a>
<br>
<p>- Anthony
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14481.php">Jeff Squyres (jsquyres): "[OMPI devel] Face-to-face OMPI dev meeting: doodle"</a>
<li><strong>Previous message:</strong> <a href="14479.php">Anthony Alba: "[OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>In reply to:</strong> <a href="14479.php">Anthony Alba: "[OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify"</a>
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
