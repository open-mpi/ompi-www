<?
$subject_val = "Re: [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 08:11:31 2009" -->
<!-- isoreceived="20090303131131" -->
<!-- sent="Tue, 3 Mar 2009 08:11:23 -0500" -->
<!-- isosent="20090303131123" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length." -->
<!-- id="C1E98472-C0B1-4AD1-9A79-136960765450_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1235046585-20248-3-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 08:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5556.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Previous message:</strong> <a href="5554.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5467.php">Bert Wesarg: "[OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done.
<br>
<p>On Feb 19, 2009, at 7:29 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; From: Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asprintf returns the length of the written header, use this as the  
</span><br>
<span class="quotelev1">&gt; length.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Bert Wesarg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte/tools/orte-ps/orte-ps.c |    3 +--
</span><br>
<span class="quotelev1">&gt; 1 file changed, 1 insertion(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --quilt old/orte/tools/orte-ps/orte-ps.c new/orte/tools/orte-ps/ 
</span><br>
<span class="quotelev1">&gt; orte-ps.c
</span><br>
<span class="quotelev1">&gt; --- old/orte/tools/orte-ps/orte-ps.c
</span><br>
<span class="quotelev1">&gt; +++ new/orte/tools/orte-ps/orte-ps.c
</span><br>
<span class="quotelev1">&gt; @@ -392,8 +392,7 @@ static int pretty_print(orte_ps_mpirun_i
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * Print header
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    asprintf(&amp;header, &quot;Information from mpirun %s&quot;,  
</span><br>
<span class="quotelev1">&gt; ORTE_JOBID_PRINT(hnpinfo-&gt;hnp-&gt;name.jobid));
</span><br>
<span class="quotelev1">&gt; -    len_hdr = strlen(header);
</span><br>
<span class="quotelev1">&gt; +    len_hdr = asprintf(&amp;header, &quot;Information from mpirun %s&quot;,  
</span><br>
<span class="quotelev1">&gt; ORTE_JOBID_PRINT(hnpinfo-&gt;hnp-&gt;name.jobid));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf(&quot;\n\n%s\n&quot;, header);
</span><br>
<span class="quotelev1">&gt;     free(header);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5556.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Previous message:</strong> <a href="5554.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5467.php">Bert Wesarg: "[OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
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
