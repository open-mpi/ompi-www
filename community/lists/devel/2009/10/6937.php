<?
$subject_val = "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 13:52:21 2009" -->
<!-- isoreceived="20091007175221" -->
<!-- sent="Wed, 7 Oct 2009 13:52:10 -0400" -->
<!-- isosent="20091007175210" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&amp;lt; x &amp;lt; 128k)" -->
<!-- id="96128DE1-1235-4CE8-9E18-19DFEEBB0404_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ACCA354.9000800_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 13:52:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6938.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
<li><strong>Previous message:</strong> <a href="6936.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>In reply to:</strong> <a href="6936.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Reply:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don,
<br>
<p>The problem is that a particular BTL doesn't have the knowledge about  
<br>
the other selected BTL, so allowing the BTLs to set this limit is not  
<br>
as easy as it sound. However, in the case two identical BTLs are  
<br>
selected and that they are the only ones, this clearly is a better  
<br>
approach.
<br>
<p>If this parameter is set at the PML level, I can't imagine how we  
<br>
figure out the correct value depending on the BTLs.
<br>
<p>I see this as a pretty strong restriction. How do we know we set a  
<br>
value that make sense?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 7, 2009, at 10:19 , Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Were you suggesting that the proposed new parameter  
</span><br>
<span class="quotelev1">&gt; &quot;max_rdma_single_rget&quot; be set by the individual btls similar to  
</span><br>
<span class="quotelev1">&gt; &quot;btl_eager_limit&quot;?  Seems to me to that is the better approach if I  
</span><br>
<span class="quotelev1">&gt; am to move forward with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/06/09 11:14, Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I agree there is probably a larger issue here and yes this is  
</span><br>
<span class="quotelev2">&gt;&gt; somewhat specific but where as OB1 appears to have multiple  
</span><br>
<span class="quotelev2">&gt;&gt; protocols depending on the capabilities of the BTLs I would not  
</span><br>
<span class="quotelev2">&gt;&gt; characterize as an IB centric problem. Maybe OB1 RDMA problem.  
</span><br>
<span class="quotelev2">&gt;&gt; There is a clear benefit from modifying this specific case. Do you  
</span><br>
<span class="quotelev2">&gt;&gt; think its not worth making incremental improvements while also  
</span><br>
<span class="quotelev2">&gt;&gt; attacking a potential bigger issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -DON
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/06/09 10:52, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Don,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This seems a very IB centric problem (and solution) going up in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the PML. Moreover, I noticed that independent on the BTL we have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some problems with the multi-rail performance. As an example on a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster with 3 GB cards we get the same performance is I enable 2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or 3. Didn't had time to look into the details, but this might be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a more general problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 6, 2009, at 09:51 , Don Kerr wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I intend to make the change suggested in this ticket to the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk.  The change does not impact single rail, tested with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openib btl, case and does improve dual rail case. Since it does  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; involve performance and I am adding a OB1 mca parameter just  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wanted to check if anyone was interested or had an issue with it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before I committed the change.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6938.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
<li><strong>Previous message:</strong> <a href="6936.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>In reply to:</strong> <a href="6936.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Reply:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
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
