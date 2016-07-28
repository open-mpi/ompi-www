<?
$subject_val = "[OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 17:02:09 2013" -->
<!-- isoreceived="20130131220209" -->
<!-- sent="Thu, 31 Jan 2013 22:02:04 +0000" -->
<!-- isosent="20130131220204" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;pml_ob1_sendreq.c:188 FATAL&amp;quot; errors" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC079D_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-31 17:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="12091.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and	forward	on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>Reply:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm seeing a LOT of these on errors on the trunk:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;pml_ob1_sendreq.c:188 FATAL
<br>
<p>The job then hangs.  I see this starting at np=6 across 2 nodes, using only the TCP and SM BTLs.  This is not happening on v1.6 or v1.7.  Line 188 in pml_ob1_sendreq.c is when someone calls mca_pml_ob1_match_completion_free() with a non-OMPI_SUCCESS status.
<br>
<p>*** Is anyone else seeing this?
<br>
<p>My configure is very straightforward:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/home/jsquyres/bogus --disable-dlopen --disable-vt
<br>
<p>I notice that this is only happening in optimized builds; it is not happening when I do a normal developer / debug build.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="12091.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and	forward	on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>Reply:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
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
