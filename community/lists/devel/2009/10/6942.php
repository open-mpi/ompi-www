<?
$subject_val = "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 11:01:31 2009" -->
<!-- isoreceived="20091008150131" -->
<!-- sent="Thu, 08 Oct 2009 11:01:22 -0400" -->
<!-- isosent="20091008150122" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&amp;lt; x &amp;lt; 128k)" -->
<!-- id="4ACDFEC2.7070707_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="96128DE1-1235-4CE8-9E18-19DFEEBB0404_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 11:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6941.php">Eugene Loh: "Re: [OMPI devel] how should processes be mapped to nodes?"</a>
<li><strong>In reply to:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Reply:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/07/09 13:52, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Don,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that a particular BTL doesn't have the knowledge about 
</span><br>
<span class="quotelev1">&gt; the other selected BTL, so allowing the BTLs to set this limit is not 
</span><br>
<span class="quotelev1">&gt; as easy as it sound. However, in the case two identical BTLs are 
</span><br>
<span class="quotelev1">&gt; selected and that they are the only ones, this clearly is a better 
</span><br>
<span class="quotelev1">&gt; approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this parameter is set at the PML level, I can't imagine how we 
</span><br>
<span class="quotelev1">&gt; figure out the correct value depending on the BTLs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see this as a pretty strong restriction. How do we know we set a 
</span><br>
<span class="quotelev1">&gt; value that make sense?
</span><br>
OK, I now see why setting at btl level is difficult. And for the case of 
<br>
multiple btls which are also different component types, however unlikely 
<br>
that is,  a pml setting will not be optimal for both.
<br>
<p>-DON
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2009, at 10:19 , Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Were you suggesting that the proposed new parameter 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;max_rdma_single_rget&quot; be set by the individual btls similar to 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_eager_limit&quot;?  Seems to me to that is the better approach if I 
</span><br>
<span class="quotelev2">&gt;&gt; am to move forward with this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -DON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/06/09 11:14, Don Kerr wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree there is probably a larger issue here and yes this is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somewhat specific but where as OB1 appears to have multiple 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; protocols depending on the capabilities of the BTLs I would not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; characterize as an IB centric problem. Maybe OB1 RDMA problem. There 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a clear benefit from modifying this specific case. Do you think 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its not worth making incremental improvements while also attacking a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; potential bigger issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/06/09 10:52, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Don,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This seems a very IB centric problem (and solution) going up in the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PML. Moreover, I noticed that independent on the BTL we have some 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems with the multi-rail performance. As an example on a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cluster with 3 GB cards we get the same performance is I enable 2 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or 3. Didn't had time to look into the details, but this might be a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more general problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 6, 2009, at 09:51 , Don Kerr wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I intend to make the change suggested in this ticket to the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk.  The change does not impact single rail, tested with openib 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl, case and does improve dual rail case. Since it does involve 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; performance and I am adding a OB1 mca parameter just wanted to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; check if anyone was interested or had an issue with it before I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; committed the change.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6941.php">Eugene Loh: "Re: [OMPI devel] how should processes be mapped to nodes?"</a>
<li><strong>In reply to:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Reply:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
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
