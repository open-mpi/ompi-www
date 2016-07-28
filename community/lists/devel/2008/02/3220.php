<?
$subject_val = "[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 15:36:43 2008" -->
<!-- isoreceived="20080212203643" -->
<!-- sent="Tue, 12 Feb 2008 21:36:29 +0100" -->
<!-- isosent="20080212203629" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)" -->
<!-- id="20080212203629.GI11839_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="47A34B74.7000609_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 15:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3221.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3219.php">Jeff Squyres: "Re: [OMPI devel] merging new PLPA to the trunk"</a>
<li><strong>In reply to:</strong> <a href="3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3253.php">Tim Prins: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<li><strong>Reply:</strong> <a href="3253.php">Tim Prins: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 01, 2008 at 11:40:20AM -0500, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Adrian,
</span><br>
<p>Hi!
<br>
<p>Sorry for the late reply and thanks for your testing.
<br>
<p><span class="quotelev1">&gt; 1. There are some warnings when compiling:
</span><br>
<p>I've fixed these issues.
<br>
<p><span class="quotelev1">&gt; 2. If I exclude all my tcp interfaces, the connection fails properly, 
</span><br>
<span class="quotelev1">&gt; but I do get a malloc request for 0 bytes:
</span><br>
<span class="quotelev1">&gt; tprins_at_odin examples]$ mpirun -mca btl tcp,self  -mca btl_tcp_if_exclude 
</span><br>
<span class="quotelev1">&gt; eth0,ib0,lo -np 2 ./ring_c
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (btl_tcp_component.c, 844)
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 0 bytes (btl_tcp_component.c, 844)
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<p>Not my fault, but I guess we could fix it anyway. Should we?
<br>
<p><span class="quotelev1">&gt; 3. If the exclude list does not contain 'lo', or the include list 
</span><br>
<span class="quotelev1">&gt; contains 'lo', the job hangs when using multiple nodes:
</span><br>
<p>That's weird. Loopback interfaces should automatically be excluded right
<br>
from the beginning. See opal/util/if.c.
<br>
<p>I neither know nor haven't checked where things go wrong. Do you want to
<br>
investigate? As already mentioned, this should not happen.
<br>
<p>Can you post the output of &quot;ip a s&quot; or &quot;ifconfig -a&quot;?
<br>
<p><span class="quotelev1">&gt; However, the great news about this patch is that it appears to fix 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1027">https://svn.open-mpi.org/trac/ompi/ticket/1027</a> for me.
</span><br>
<p>It also fixes my #1206. I'd like to merge tmp-public/btl-tcp into the
<br>
trunk, especially before the 1.3 code freeze. Any objections?
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3221.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3219.php">Jeff Squyres: "Re: [OMPI devel] merging new PLPA to the trunk"</a>
<li><strong>In reply to:</strong> <a href="3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3253.php">Tim Prins: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<li><strong>Reply:</strong> <a href="3253.php">Tim Prins: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
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
