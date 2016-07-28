<?
$subject_val = "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 10:19:19 2009" -->
<!-- isoreceived="20091007141919" -->
<!-- sent="Wed, 07 Oct 2009 10:19:00 -0400" -->
<!-- isosent="20091007141900" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&amp;lt; x &amp;lt; 128k)" -->
<!-- id="4ACCA354.9000800_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ACB5EBF.1090403_at_sun.com" -->
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
<strong>Date:</strong> 2009-10-07 10:19:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6935.php">Jeff Squyres: "[OMPI devel] Branch for v1.5"</a>
<li><strong>In reply to:</strong> <a href="6934.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Reply:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Were you suggesting that the proposed new parameter 
<br>
&quot;max_rdma_single_rget&quot; be set by the individual btls similar to 
<br>
&quot;btl_eager_limit&quot;?  Seems to me to that is the better approach if I am 
<br>
to move forward with this.
<br>
<p>-DON
<br>
<p>On 10/06/09 11:14, Don Kerr wrote:
<br>
<span class="quotelev1">&gt; I agree there is probably a larger issue here and yes this is somewhat 
</span><br>
<span class="quotelev1">&gt; specific but where as OB1 appears to have multiple protocols depending 
</span><br>
<span class="quotelev1">&gt; on the capabilities of the BTLs I would not characterize as an IB 
</span><br>
<span class="quotelev1">&gt; centric problem. Maybe OB1 RDMA problem. There is a clear benefit from 
</span><br>
<span class="quotelev1">&gt; modifying this specific case. Do you think its not worth making 
</span><br>
<span class="quotelev1">&gt; incremental improvements while also attacking a potential bigger issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/06/09 10:52, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Don,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems a very IB centric problem (and solution) going up in the 
</span><br>
<span class="quotelev2">&gt;&gt; PML. Moreover, I noticed that independent on the BTL we have some 
</span><br>
<span class="quotelev2">&gt;&gt; problems with the multi-rail performance. As an example on a cluster 
</span><br>
<span class="quotelev2">&gt;&gt; with 3 GB cards we get the same performance is I enable 2 or 3. 
</span><br>
<span class="quotelev2">&gt;&gt; Didn't had time to look into the details, but this might be a more 
</span><br>
<span class="quotelev2">&gt;&gt; general problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 6, 2009, at 09:51 , Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I intend to make the change suggested in this ticket to the trunk.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The change does not impact single rail, tested with openib btl, case 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and does improve dual rail case. Since it does involve performance 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I am adding a OB1 mca parameter just wanted to check if anyone 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was interested or had an issue with it before I committed the change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6935.php">Jeff Squyres: "[OMPI devel] Branch for v1.5"</a>
<li><strong>In reply to:</strong> <a href="6934.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Reply:</strong> <a href="6937.php">George Bosilca: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
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
