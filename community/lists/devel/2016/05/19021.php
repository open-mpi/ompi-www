<?
$subject_val = "Re: [OMPI devel] modex getting corrupted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 02:13:17 2016" -->
<!-- isoreceived="20160523061317" -->
<!-- sent="Mon, 23 May 2016 02:13:14 -0400" -->
<!-- isosent="20160523061314" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] modex getting corrupted" -->
<!-- id="CAHXxYDgYM3jBK1d7Pk+Xyew0Fe1LDG296u59OUNO7-jz7YmqxQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A43CC069-7096-458D-BFFD-58CDED16C567_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] modex getting corrupted<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 02:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19022.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Previous message:</strong> <a href="19020.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>In reply to:</strong> <a href="19019.php">Ralph Castain: "Re: [OMPI devel] modex getting corrupted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19022.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Reply:</strong> <a href="19022.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph
<br>
<p>Thanks for your input. The routine that does the send is this:
<br>
<p>static int btl_lf_modex_send(lfgroup lfgroup)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *grp_name = lf_get_group_name(lfgroup, NULL, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf_modex_t lf_modex;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;strncpy(lf_modex.grp_name, grp_name, GRP_NAME_MAX_LEN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_MODEX_SEND(rc, OPAL_PMIX_GLOBAL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_btl_lf_component.super.btl_version,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(char *)&amp;lf_modex, sizeof(lf_modex));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
}
<br>
<p>This routine is called from the component init routine
<br>
(mca_btl_lf_component_init()). I have verified that the values in the modex
<br>
(lf_modex) are correct.
<br>
<p>The receive happens in proc_create, and I call it like this:
<br>
OPAL_MODEX_RECV(rc, &amp;mca_btl_lf_component.super.btl_version,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;opal_proc-&gt;proc_name, (uint8_t **)&amp;module_proc-&gt;proc_modex,
<br>
&amp;size);
<br>
<p>In here, I get junk value in proc_modex. If I pass a buffer that was
<br>
malloc()'ed in place of module_proc-&gt;proc_modex, I still get bad data.
<br>
<p><p>Thanks again for your help.
<br>
<p>Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p>On Sat, May 21, 2016 at 8:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Please provide the exact code used for both send/recv - you likely have an
</span><br>
<span class="quotelev1">&gt; error in the syntax
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 20, 2016, at 9:36 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a naive question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My 'cluster' consists of two nodes, connected back to back with a
</span><br>
<span class="quotelev1">&gt; proprietary link as well as GbE (over a switch).
</span><br>
<span class="quotelev1">&gt; I am calling OPAL_MODEX_SEND() and the modex consists of just this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct modex
</span><br>
<span class="quotelev1">&gt; {char name[20], unsigned mtu};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mtu field is not currently being used. I bzero() the struct and have
</span><br>
<span class="quotelev1">&gt; verified that the value being written to the 'name' field (this is similar
</span><br>
<span class="quotelev1">&gt; to a PKEY for infiniband; the driver will translate this to a unique
</span><br>
<span class="quotelev1">&gt; integer) is correct at the sending end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I do a OPAL_MODEX_RECV(), the value is completely corrupted. However,
</span><br>
<span class="quotelev1">&gt; the size of the modex message is still correct (24 bytes)
</span><br>
<span class="quotelev1">&gt; What could I be doing wrong? (Both nodes are little endian x86_64 machines)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19012.php">http://www.open-mpi.org/community/lists/devel/2016/05/19012.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19019.php">http://www.open-mpi.org/community/lists/devel/2016/05/19019.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19021/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19022.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Previous message:</strong> <a href="19020.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>In reply to:</strong> <a href="19019.php">Ralph Castain: "Re: [OMPI devel] modex getting corrupted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19022.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Reply:</strong> <a href="19022.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
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
