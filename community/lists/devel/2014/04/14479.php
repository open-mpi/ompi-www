<?
$subject_val = "[OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 21:58:43 2014" -->
<!-- isoreceived="20140409015843" -->
<!-- sent="Wed, 9 Apr 2014 09:58:43 +0800" -->
<!-- isosent="20140409015843" -->
<!-- name="Anthony Alba" -->
<!-- email="ascanio.alba7_at_[hidden]" -->
<!-- subject="[OMPI devel] Was &amp;quot;hcoll destruction via MPI attribute&amp;quot;: undefined symbol hcoll_group_destroy_notify" -->
<!-- id="CADkWibcDYWF5dpwWBqcZLMAYMq0tYZR-FnJHFaumjLS=SanwXg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined symbol hcoll_group_destroy_notify<br>
<strong>From:</strong> Anthony Alba (<em>ascanio.alba7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 21:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14480.php">Joshua Ladd: "Re: [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined	symbol hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="14478.php">Allan Wu: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14480.php">Joshua Ladd: "Re: [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined	symbol hcoll_group_destroy_notify"</a>
<li><strong>Reply:</strong> <a href="14480.php">Joshua Ladd: "Re: [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined	symbol hcoll_group_destroy_notify"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Running OMPI 1.8 with Mellanox OFED 2.1-1.0.6, with
<br>
--with-hcoll=/opt/mellanox/hcoll
<br>
<p><p>The symbol hcoll_group_destroy_notify() is used in
<br>
<p>ompi/mca/coll/hcoll/coll_hcoll_module.c
<br>
<p>but I cannot find it exported anywhere. It is not in
<br>
/opt/mellanox/hcoll/lib/lib*so
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14479/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14480.php">Joshua Ladd: "Re: [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined	symbol hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="14478.php">Allan Wu: "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14480.php">Joshua Ladd: "Re: [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined	symbol hcoll_group_destroy_notify"</a>
<li><strong>Reply:</strong> <a href="14480.php">Joshua Ladd: "Re: [OMPI devel] Was &quot;hcoll destruction via MPI attribute&quot;: undefined	symbol hcoll_group_destroy_notify"</a>
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
