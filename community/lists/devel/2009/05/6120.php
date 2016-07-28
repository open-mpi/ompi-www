<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 11:43:04 2009" -->
<!-- isoreceived="20090527154304" -->
<!-- sent="Wed, 27 May 2009 11:42:54 -0400" -->
<!-- isosent="20090527154254" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285" -->
<!-- id="6CC466B2-361F-43CD-AD84-F02EE6265289_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905270043.n4R0hssd028565_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 11:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6121.php">Roberto Ammendola: "[OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<li><strong>Previous message:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6131.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<li><strong>Reply:</strong> <a href="6131.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>This patch is not correct. First it adds a significant overhead in  
<br>
terms of if in the critical path (3 more ifs per char in the output  
<br>
stream), and second it will generate random segfaults.
<br>
<p>The test for the orte_xml_output can be centralized in just one if,  
<br>
reducing the overhead to one if per byte, or the whole loop can be  
<br>
duplicated and the test can be done only once per message.
<br>
<p>For the second problem, the correct solution is a little bit more  
<br>
complex. One should check that k is small enough to replace one char  
<br>
by 5 without overwriting after the end of the output buffer.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 26, 2009, at 20:43 , rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2009-05-26 20:43:54 EDT (Tue, 26 May 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21285
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21285">https://svn.open-mpi.org/trac/ompi/changeset/21285</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Modify the xml output per devel-list discussion with Greg Watson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/base/iof_base_output.c |    13 +++++++++++++
</span><br>
<span class="quotelev1">&gt;   1 files changed, 13 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/iof/base/iof_base_output.c
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
<span class="quotelev1">&gt; --- trunk/orte/mca/iof/base/iof_base_output.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/iof/base/iof_base_output.c	2009-05-26 20:43:54  
</span><br>
<span class="quotelev1">&gt; EDT (Tue, 26 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -170,6 +170,19 @@
</span><br>
<span class="quotelev1">&gt;                     output-&gt;data[k++] = starttag[j];
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; +        } else if (orte_xml_output &amp;&amp; '&amp;' == data[i]) {
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = '&amp;';
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = 'a';
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = 'm';
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = 'p';
</span><br>
<span class="quotelev1">&gt; +        } else if (orte_xml_output &amp;&amp; '&lt;' == data[i]) {
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = '&amp;';
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = 'l';
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = 't';
</span><br>
<span class="quotelev1">&gt; +        } else if (orte_xml_output &amp;&amp; '&gt;' == data[i]) {
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = '&amp;';
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = 'g';
</span><br>
<span class="quotelev1">&gt; +            output-&gt;data[k++] = 't';
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt;             output-&gt;data[k++] = data[i];
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6121.php">Roberto Ammendola: "[OMPI devel] bug in MCA_PML_OB1_RECV_REQUEST_UNPACK()"</a>
<li><strong>Previous message:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6131.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<li><strong>Reply:</strong> <a href="6131.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
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
