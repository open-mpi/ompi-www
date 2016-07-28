<?
$subject_val = "[OMPI devel] ROMIO update breaks trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 15:42:40 2013" -->
<!-- isoreceived="20131114204240" -->
<!-- sent="Thu, 14 Nov 2013 12:41:41 -0800" -->
<!-- isosent="20131114204141" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] ROMIO update breaks trunk" -->
<!-- id="72BDFD83-6CE8-4941-A22D-F9C3D7DE7C24_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] ROMIO update breaks trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 15:41:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13266.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Reply:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just in case others are encountering this: the recent ROMIO update contains a line in its configure.ac that breaks the trunk for automake versions less than 1.12:
<br>
<p>&quot;I've looked a bit around online for this, and the consensus generally seems to be that AM_PROG_AR should be added in libtool, not in every configure.ac script out there. It's especially problematic as AM_PROG_AR doesn't exist in automake before 1.12, which means it breaks, among others, with the automake we use to build our distribution tarballs :-)
<br>
<p>See e.g. <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=11401">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=11401</a> for a discussion.&quot;
<br>
<p>I'm going to comment that line out in ompi/mca/io/romio/romio/configure.ac so the trunk can build until someone figures out (a) if it is really needed, and (b) how to correctly add it
<br>
<p>Ralph
<br>
<p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13266.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Reply:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
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
