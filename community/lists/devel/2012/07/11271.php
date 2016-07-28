<?
$subject_val = "Re: [OMPI devel] openib compiler warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 13:57:21 2012" -->
<!-- isoreceived="20120710175721" -->
<!-- sent="Tue, 10 Jul 2012 13:57:17 -0400" -->
<!-- isosent="20120710175717" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib compiler warnings" -->
<!-- id="4FFC6CFD.9020201_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BF017A91-B45E-4BEE-B016-60662DBA17A9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib compiler warnings<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-10 13:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11272.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="11270.php">Jeff Squyres: "[OMPI devel] openib compiler warnings"</a>
<li><strong>In reply to:</strong> <a href="11270.php">Jeff Squyres: "[OMPI devel] openib compiler warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11272.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<li><strong>Reply:</strong> <a href="11272.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/10/2012 12:50 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm getting these compiler warnings on the SVN trunk HEAD (r26776):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_openib.c: In function 'mca_btl_openib_put':
</span><br>
<span class="quotelev1">&gt; btl_openib.c:1652: warning: assignment makes integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt; btl_openib.c: In function 'mca_btl_openib_get':
</span><br>
<span class="quotelev1">&gt; btl_openib.c:1734: warning: assignment makes integer from pointer without a cast
</span><br>
This is mine, I'll fix.
<br>
<p><span class="quotelev1">&gt; connect/btl_openib_connect_udcm.c:948: warning: 'i_initiate' defined but not used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11272.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="11270.php">Jeff Squyres: "[OMPI devel] openib compiler warnings"</a>
<li><strong>In reply to:</strong> <a href="11270.php">Jeff Squyres: "[OMPI devel] openib compiler warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11272.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<li><strong>Reply:</strong> <a href="11272.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
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
