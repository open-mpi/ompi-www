<?
$subject_val = "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  9 15:02:20 2013" -->
<!-- isoreceived="20131209200220" -->
<!-- sent="Mon, 9 Dec 2013 12:01:51 -0800" -->
<!-- isosent="20131209200151" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)" -->
<!-- id="8AD3393A-94FE-4BE4-82D9-2D251E98A2DF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131209194119.GE12961_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-09 15:01:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13406.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13404.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13404.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see - okay, I removed it separately.
<br>
<p><p>On Dec 9, 2013, at 11:41 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; No, I removed an existing conflict from that file. It has been committed
</span><br>
<span class="quotelev1">&gt; with a conflict in the copyright statement. This patch removes it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 09, 2013 at 10:08:49AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Oh, and note that you have an unresolved conflict in this patch!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 9, 2013, at 5:38 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/orte/mca/rml/oob/rml_oob_component.c b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index dd539cd..b91f4a3 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/mca/rml/oob/rml_oob_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -11,11 +11,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&lt;&lt;&lt;&lt;&lt;&lt;&lt; .mine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - * Copyright (c) 2011-2012 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -=======
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Copyright (c) 2011-2013 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt;&gt;&gt;&gt;&gt;&gt;&gt; .r28253
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13406.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13404.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13404.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13333.php">Adrian Reber: "[OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile again. (void value not ignored)"</a>
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
