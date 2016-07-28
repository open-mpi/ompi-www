<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 16:05:39 2014" -->
<!-- isoreceived="20140414200539" -->
<!-- sent="Mon, 14 Apr 2014 23:05:37 +0300" -->
<!-- isosent="20140414200537" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="CAAO1KybaUzMV7px+Woksc8HTCtWGqmXfB0vz9-p_M_J2cb6dwg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A8427068-0249-4E2C-AABE-9B881949C1CF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 16:05:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14521.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14517.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14513.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hmm... very smart. thanks. seems it can work. will think about it more.
<br>
<p><p>On Mon, Apr 14, 2014 at 10:13 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 14, 2014, at 2:57 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think (+know) that many production environments and OMPI users will be
</span><br>
<span class="quotelev1">&gt; happy to have it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed.  Something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     char version_str[128];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     snprintf(version_str, sizeof(version_str),
</span><br>
<span class="quotelev1">&gt;              &quot;%d.%d.%d&quot;, libusnic_major, libusnic_minor, libusnic_release);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_base_component_var_register(&amp;mca_btl_usnic_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt;                                     &quot;libusnic_version&quot;,
</span><br>
<span class="quotelev1">&gt;                                     &quot;Version of the libusnic library&quot;,
</span><br>
<span class="quotelev1">&gt;                                     MCA_BASE_VAR_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt;                                     NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt;                                     OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev1">&gt;                                     MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt;                                     version_str);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   shell$ ompi_info --param btl usnic --level 9 --parsable | grep version |
</span><br>
<span class="quotelev1">&gt; grep :value:
</span><br>
<span class="quotelev1">&gt;   mca:btl:usnic:param:btl_usnic_libusnic_version:value:1.2.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest level 2 or level 3 for such vars.  They shouldn't be in default
</span><br>
<span class="quotelev1">&gt; level 1 ompi_info output, but it is information that may be required to run
</span><br>
<span class="quotelev1">&gt; correctly, so it should be in the &quot;end user&quot; set of info (i.e., be &lt;= 3).
</span><br>
<span class="quotelev1">&gt;  See <a href="https://svn.open-mpi.org/trac/ompi/wiki/MCAParamLevels">https://svn.open-mpi.org/trac/ompi/wiki/MCAParamLevels</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point: I don't think you need any new infrastructure for this -- you
</span><br>
<span class="quotelev1">&gt; can do it today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14517.php">http://www.open-mpi.org/community/lists/devel/2014/04/14517.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14522/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14523.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14521.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14517.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14513.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
