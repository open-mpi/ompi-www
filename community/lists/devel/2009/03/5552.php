<?
$subject_val = "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 07:34:06 2009" -->
<!-- isoreceived="20090303123406" -->
<!-- sent="Tue, 3 Mar 2009 07:33:59 -0500" -->
<!-- isosent="20090303123359" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak" -->
<!-- id="27170AD5-8918-4D97-B733-6780A628945E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="36ca99e90903022326y6ef029acsabf8465faac33035_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 07:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5553.php">George Bosilca: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Previous message:</strong> <a href="5551.php">Jeff Squyres: "Re: [OMPI devel] help-orte-top.txt: add missing ["</a>
<li><strong>In reply to:</strong> <a href="5546.php">Bert Wesarg: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops; this got missed.
<br>
<p>Thanks for the reminder; applied in r20694.
<br>
<p><p>On Mar 3, 2009, at 2:26 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; 2009/2/19 Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; From: Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Free the memory alocated by the call to asprintf.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  orte/tools/orte-ps/orte-ps.c |    1 +
</span><br>
<span class="quotelev2">&gt;&gt;  1 file changed, 1 insertion(+)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --quilt old/orte/tools/orte-ps/orte-ps.c new/orte/tools/orte- 
</span><br>
<span class="quotelev2">&gt;&gt; ps/orte-ps.c
</span><br>
<span class="quotelev2">&gt;&gt; --- old/orte/tools/orte-ps/orte-ps.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ new/orte/tools/orte-ps/orte-ps.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -396,6 +396,7 @@ static int pretty_print(orte_ps_mpirun_i
</span><br>
<span class="quotelev2">&gt;&gt;     len_hdr = strlen(header);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%s\n&quot;, header);
</span><br>
<span class="quotelev2">&gt;&gt; +    free(header);
</span><br>
<span class="quotelev2">&gt;&gt;     for (i=0; i &lt; len_hdr; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;%c&quot;, '-');
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ping.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5553.php">George Bosilca: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Previous message:</strong> <a href="5551.php">Jeff Squyres: "Re: [OMPI devel] help-orte-top.txt: add missing ["</a>
<li><strong>In reply to:</strong> <a href="5546.php">Bert Wesarg: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
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
