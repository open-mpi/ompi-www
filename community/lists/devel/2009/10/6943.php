<?
$subject_val = "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 11:45:44 2009" -->
<!-- isoreceived="20091008154544" -->
<!-- sent="Thu, 8 Oct 2009 11:45:33 -0400" -->
<!-- isosent="20091008154533" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&amp;lt; x &amp;lt; 128k)" -->
<!-- id="F9D9FA89-4D6A-45DD-AA36-C0867DF824A5_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ACDFEC2.7070707_at_sun.com" -->
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
<strong>Date:</strong> 2009-10-08 11:45:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6944.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<li><strong>Previous message:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>In reply to:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6948.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Reply:</strong> <a href="6948.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don,
<br>
<p>I think we can do something slightly different that will satisfy  
<br>
everybody.
<br>
<p>How about a solution where each BTL will define a limit where a  
<br>
message will never be shared with another BTL? We can have two such  
<br>
limits, one for the send protocol and one for the RMA (it will apply  
<br>
either to PUT or GET operations based on the BTL support and PML  
<br>
decision).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 8, 2009, at 11:01 , Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/07/09 13:52, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Don,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that a particular BTL doesn't have the knowledge  
</span><br>
<span class="quotelev2">&gt;&gt; about the other selected BTL, so allowing the BTLs to set this  
</span><br>
<span class="quotelev2">&gt;&gt; limit is not as easy as it sound. However, in the case two  
</span><br>
<span class="quotelev2">&gt;&gt; identical BTLs are selected and that they are the only ones, this  
</span><br>
<span class="quotelev2">&gt;&gt; clearly is a better approach.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If this parameter is set at the PML level, I can't imagine how we  
</span><br>
<span class="quotelev2">&gt;&gt; figure out the correct value depending on the BTLs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see this as a pretty strong restriction. How do we know we set a  
</span><br>
<span class="quotelev2">&gt;&gt; value that make sense?
</span><br>
<span class="quotelev1">&gt; OK, I now see why setting at btl level is difficult. And for the  
</span><br>
<span class="quotelev1">&gt; case of multiple btls which are also different component types,  
</span><br>
<span class="quotelev1">&gt; however unlikely that is,  a pml setting will not be optimal for both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 7, 2009, at 10:19 , Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Were you suggesting that the proposed new parameter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;max_rdma_single_rget&quot; be set by the individual btls similar to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;btl_eager_limit&quot;?  Seems to me to that is the better approach if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am to move forward with this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/06/09 11:14, Don Kerr wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I agree there is probably a larger issue here and yes this is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; somewhat specific but where as OB1 appears to have multiple  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; protocols depending on the capabilities of the BTLs I would not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; characterize as an IB centric problem. Maybe OB1 RDMA problem.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is a clear benefit from modifying this specific case. Do  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you think its not worth making incremental improvements while  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also attacking a potential bigger issue?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 10/06/09 10:52, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Don,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This seems a very IB centric problem (and solution) going up in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the PML. Moreover, I noticed that independent on the BTL we have  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some problems with the multi-rail performance. As an example on  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a cluster with 3 GB cards we get the same performance is I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; enable 2 or 3. Didn't had time to look into the details, but  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this might be a more general problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 6, 2009, at 09:51 , Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I intend to make the change suggested in this ticket to the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk.  The change does not impact single rail, tested with  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openib btl, case and does improve dual rail case. Since it does  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; involve performance and I am adding a OB1 mca parameter just  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wanted to check if anyone was interested or had an issue with  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it before I committed the change.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -DON
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6944.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22077"</a>
<li><strong>Previous message:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>In reply to:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6948.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Reply:</strong> <a href="6948.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
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
