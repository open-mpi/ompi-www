<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19599";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 12:37:05 2008" -->
<!-- isoreceived="20080922163705" -->
<!-- sent="Mon, 22 Sep 2008 12:36:58 -0400" -->
<!-- isosent="20080922163658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19599" -->
<!-- id="D36A97E5-CF8F-4885-AA86-D0E7DE6F80D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809221620.m8MGKLPI026013_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19599<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 12:36:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4678.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4676.php">Timothy Kaiser: "[OMPI devel] proper way to shut down orted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ken --
<br>
<p>Can you please also apply this to the trunk?
<br>
<p>Thanks.
<br>
<p>On Sep 22, 2008, at 12:20 PM, matney_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: matney
</span><br>
<span class="quotelev1">&gt; Date: 2008-09-22 12:20:18 EDT (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 19599
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19599">https://svn.open-mpi.org/trac/ompi/changeset/19599</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add #include for stdio.h to allow make check to run with gcc 4.2.4 (on
</span><br>
<span class="quotelev1">&gt; Cray XT platform).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   branches/v1.3/test/datatype/checksum.c |     1 +
</span><br>
<span class="quotelev1">&gt;   branches/v1.3/test/datatype/position.c |     1 +
</span><br>
<span class="quotelev1">&gt;   2 files changed, 2 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/test/datatype/checksum.c
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/test/datatype/checksum.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/test/datatype/checksum.c	2008-09-22 12:20:18 EDT  
</span><br>
<span class="quotelev1">&gt; (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -15,6 +15,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/datatype/datatype.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/datatype/datatype_checksum.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.3/test/datatype/position.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.3/test/datatype/position.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.3/test/datatype/position.c	2008-09-22 12:20:18 EDT  
</span><br>
<span class="quotelev1">&gt; (Mon, 22 Sep 2008)
</span><br>
<span class="quotelev1">&gt; @@ -11,6 +11,7 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/datatype/convertor.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/datatype/datatype.h&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4678.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4676.php">Timothy Kaiser: "[OMPI devel] proper way to shut down orted"</a>
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
