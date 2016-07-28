<?
$subject_val = "Re: [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 12 19:25:52 2012" -->
<!-- isoreceived="20120312232552" -->
<!-- sent="Tue, 13 Mar 2012 10:25:33 +1100" -->
<!-- isosent="20120312232533" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults" -->
<!-- id="201203131025.33852.samuel_at_unimelb.edu.au" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201203131006.44035.samuel_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults<br>
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-12 19:25:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10711.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10709.php">Chris Samuel: "[OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<li><strong>In reply to:</strong> <a href="10709.php">Chris Samuel: "[OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 13 March 2012 10:06:43 Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Those don't match the values compiled into OMPI 1.4.5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info -a | egrep
</span><br>
<span class="quotelev1">&gt; 'btl_openib_ib_min_rnr_timer|btl_openib_ib_timeout' MCA btl:
</span><br>
<span class="quotelev1">&gt; parameter &quot;btl_openib_ib_min_rnr_timer&quot; (current value: &quot;25&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;  MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;20&quot;,
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<p>Wrong command line, sigh..
<br>
<p># ompi_info -a | egrep 'MCA.*(btl_openib_ib_retry_count|btl_openib_ib_timeout)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;20&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_ib_retry_count&quot; (current value: &quot;7&quot;, data source: default value)
<br>
<p>Even more oddly, the second run of the users job did print
<br>
that 7 and 20 as the defaults.
<br>
<p>I suspect this is likely the result of the user accidentally
<br>
using an earlier version of OMPI, not 1.4.5, for his first run.
<br>
<p>Sorry for the noise!
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
   Christopher Samuel - Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10711.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10709.php">Chris Samuel: "[OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
<li><strong>In reply to:</strong> <a href="10709.php">Chris Samuel: "[OMPI devel] help-mpi-btl-openib.txt needs updating with real btl_openib_ib_min_rnr_timer and btl_openib_ib_timeout defaults"</a>
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
