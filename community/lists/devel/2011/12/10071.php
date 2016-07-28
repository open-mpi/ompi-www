<?
$subject_val = "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 11:10:37 2011" -->
<!-- isoreceived="20111213161037" -->
<!-- sent="Tue, 13 Dec 2011 11:10:33 -0500" -->
<!-- isosent="20111213161033" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5" -->
<!-- id="455EFE1C-986F-4474-8B5A-DB8D00B7458D_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL3GGtrrnekQ2Ne=btfe-E-c9FzH7GZzLAAtY+5HbHJ+ntFNVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 11:10:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10072.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<li><strong>Previous message:</strong> <a href="10070.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10069.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10074.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10074.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are investigating. A fix will be hopefully provided soon.
<br>
<p>Thanks for the report,
<br>
&nbsp;&nbsp;george.
<br>
<p>On Dec 13, 2011, at 00:25 , Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; nope
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 12, 2011 at 10:40 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Do we have the same issue in the trunk?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2011, at 12:49 , Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; after removing my debug prints - the correct line is 448
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 12, 2011 at 7:46 PM, Mike Dubman &lt;mike.ompi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Hi guys,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The latest v1.5 from trunk, compiled in debug mode yields following error with openib.
</span><br>
<span class="quotelev2">&gt;&gt; The quick blame leads to the following commit:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; r25616 | bosilca | 2011-12-10 00:18:16 +0200 (Sat, 10 Dec 2011) | 4 lines
</span><br>
<span class="quotelev2">&gt;&gt; Fixes #2930: CMR: memcpy() w/overlapping addresses in btl_openib_connect_oob.c
</span><br>
<span class="quotelev2">&gt;&gt; Patch attached to the ticket.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: boo12   Num procs: 8
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 2
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 4
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 6
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 8
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 10
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 12
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 14
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Data for node: boo11   Num procs: 8
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 3
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 5
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 7
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 9
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 11
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 13
</span><br>
<span class="quotelev2">&gt;&gt;     Process OMPI jobid: [35908,1] Process rank: 15
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  =============================================================
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (btl_openib_endpoint.c, 452)
</span><br>
<span class="quotelev2">&gt;&gt; FYI
</span><br>
<span class="quotelev2">&gt;&gt; M
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
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10072.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<li><strong>Previous message:</strong> <a href="10070.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10069.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10074.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10074.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
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
