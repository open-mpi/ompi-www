<?
$subject_val = "Re: [OMPI devel] modex getting corrupted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 02:23:33 2016" -->
<!-- isoreceived="20160523062333" -->
<!-- sent="Mon, 23 May 2016 02:23:31 -0400" -->
<!-- isosent="20160523062331" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] modex getting corrupted" -->
<!-- id="CAHXxYDhcSp4ZeXTzK8EmB9K2TYuiPafzcyNtMzUHr0SkaQxGUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDgYM3jBK1d7Pk+Xyew0Fe1LDG296u59OUNO7-jz7YmqxQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-23 02:23:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19023.php">Jeff Squyres (jsquyres): "[OMPI devel] Github having issues ATM..."</a>
<li><strong>Previous message:</strong> <a href="19021.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>In reply to:</strong> <a href="19021.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph and all
<br>
<p>Please ignore this mail. It is indeed due to a syntax error in my code.
<br>
Sorry for the noise; I'll be more careful with my homework from now on.
<br>
<p>Best regards
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p>On Mon, May 23, 2016 at 2:13 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your input. The routine that does the send is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int btl_lf_modex_send(lfgroup lfgroup)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     char *grp_name = lf_get_group_name(lfgroup, NULL, 0);
</span><br>
<span class="quotelev1">&gt;     btl_lf_modex_t lf_modex;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt;     strncpy(lf_modex.grp_name, grp_name, GRP_NAME_MAX_LEN);
</span><br>
<span class="quotelev1">&gt;     OPAL_MODEX_SEND(rc, OPAL_PMIX_GLOBAL,
</span><br>
<span class="quotelev1">&gt;                     &amp;mca_btl_lf_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt;                     (char *)&amp;lf_modex, sizeof(lf_modex));
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This routine is called from the component init routine
</span><br>
<span class="quotelev1">&gt; (mca_btl_lf_component_init()). I have verified that the values in the modex
</span><br>
<span class="quotelev1">&gt; (lf_modex) are correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The receive happens in proc_create, and I call it like this:
</span><br>
<span class="quotelev1">&gt; OPAL_MODEX_RECV(rc, &amp;mca_btl_lf_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt;                &amp;opal_proc-&gt;proc_name, (uint8_t
</span><br>
<span class="quotelev1">&gt; **)&amp;module_proc-&gt;proc_modex, &amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In here, I get junk value in proc_modex. If I pass a buffer that was
</span><br>
<span class="quotelev1">&gt; malloc()'ed in place of module_proc-&gt;proc_modex, I still get bad data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, May 21, 2016 at 8:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please provide the exact code used for both send/recv - you likely have
</span><br>
<span class="quotelev2">&gt;&gt; an error in the syntax
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 20, 2016, at 9:36 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a naive question:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My 'cluster' consists of two nodes, connected back to back with a
</span><br>
<span class="quotelev2">&gt;&gt; proprietary link as well as GbE (over a switch).
</span><br>
<span class="quotelev2">&gt;&gt; I am calling OPAL_MODEX_SEND() and the modex consists of just this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct modex
</span><br>
<span class="quotelev2">&gt;&gt; {char name[20], unsigned mtu};
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mtu field is not currently being used. I bzero() the struct and have
</span><br>
<span class="quotelev2">&gt;&gt; verified that the value being written to the 'name' field (this is similar
</span><br>
<span class="quotelev2">&gt;&gt; to a PKEY for infiniband; the driver will translate this to a unique
</span><br>
<span class="quotelev2">&gt;&gt; integer) is correct at the sending end.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I do a OPAL_MODEX_RECV(), the value is completely corrupted.
</span><br>
<span class="quotelev2">&gt;&gt; However, the size of the modex message is still correct (24 bytes)
</span><br>
<span class="quotelev2">&gt;&gt; What could I be doing wrong? (Both nodes are little endian x86_64
</span><br>
<span class="quotelev2">&gt;&gt; machines)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19012.php">http://www.open-mpi.org/community/lists/devel/2016/05/19012.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19019.php">http://www.open-mpi.org/community/lists/devel/2016/05/19019.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19023.php">Jeff Squyres (jsquyres): "[OMPI devel] Github having issues ATM..."</a>
<li><strong>Previous message:</strong> <a href="19021.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>In reply to:</strong> <a href="19021.php">dpchoudh .: "Re: [OMPI devel] modex getting corrupted"</a>
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
