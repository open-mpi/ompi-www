<?
$subject_val = "Re: [OMPI devel] Bugfix for pending zero byte packages";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 21:31:32 2013" -->
<!-- isoreceived="20130425013132" -->
<!-- sent="Wed, 24 Apr 2013 18:31:24 -0700" -->
<!-- isosent="20130425013124" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bugfix for pending zero byte packages" -->
<!-- id="28D552FE-A321-40A1-9577-BB1EA726B61C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4404F17A_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bugfix for pending zero byte packages<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 21:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>Previous message:</strong> <a href="12299.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>In reply to:</strong> <a href="12299.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>Reply:</strong> <a href="12301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was already resolved - Nathan applied it, and it has been moved into v1.7
<br>
<p>On Apr 24, 2013, at 5:53 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George / Brian / Nathan --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you guys comment on this patch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2013, at 4:40 PM, Martin SCHREIBER &lt;martin.schreiber_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear developers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it seems that for messages of size 0 no convertor is created due to
</span><br>
<span class="quotelev2">&gt;&gt; optimizations issues.
</span><br>
<span class="quotelev2">&gt;&gt; However, this is not considered in MCA_PML_OB1_SEND_REQUEST_RESET when
</span><br>
<span class="quotelev2">&gt;&gt; processing pending send requests.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A fix (or something similar) for this issue is provided below. Please be
</span><br>
<span class="quotelev2">&gt;&gt; aware, that I'm not an OpenMPI developer and that e. g. req_bytes_packed
</span><br>
<span class="quotelev2">&gt;&gt; is the wrong field to check.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you have any questions or if you need any further information (stack
</span><br>
<span class="quotelev2">&gt;&gt; trace, etc.), don't hesitate to ask!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards &amp; thank you for developing OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Martin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; affected versions:
</span><br>
<span class="quotelev2">&gt;&gt; 	openmpi-1.7
</span><br>
<span class="quotelev2">&gt;&gt; 	openmpi-1.6.4
</span><br>
<span class="quotelev2">&gt;&gt; 	and probably versions below
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; file which needs a fix:
</span><br>
<span class="quotelev2">&gt;&gt; 	pml_ob1_sendreq.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Inserting the if statement of the code-snippet below fixes the problem for me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define MCA_PML_OB1_SEND_REQUEST_RESET(sendreq)                                \
</span><br>
<span class="quotelev2">&gt;&gt;       /* check for zero-package since convertor is not created for zero-size packages */      \
</span><br>
<span class="quotelev2">&gt;&gt;       if (sendreq-&gt;req_send.req_bytes_packed &gt; 0)                                \
</span><br>
<span class="quotelev2">&gt;&gt;   {                                                                          \
</span><br>
<span class="quotelev2">&gt;&gt;       size_t _position = 0;                                                  \
</span><br>
<span class="quotelev2">&gt;&gt;       opal_convertor_set_position(&amp;sendreq-&gt;req_send.req_base.req_convertor, \
</span><br>
<span class="quotelev2">&gt;&gt;                                   &amp;_position);                               \
</span><br>
<span class="quotelev2">&gt;&gt;       assert( 0 == _position );                                              \
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inf. Martin Schreiber
</span><br>
<span class="quotelev2">&gt;&gt; Chair of Scientific Computing, <a href="http://www5.in.tum.de">http://www5.in.tum.de</a>
</span><br>
<span class="quotelev2">&gt;&gt; Technische Universit&#228;t M&#252;nchen, Fakult&#228;t f&#252;r Informatik
</span><br>
<span class="quotelev2">&gt;&gt; Boltzmannstr. 3 / Zi. 2.5.57, 85748 Garching, Germany
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +49-89-289-18630, Fax: +49-89-289-18607
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>Previous message:</strong> <a href="12299.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>In reply to:</strong> <a href="12299.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>Reply:</strong> <a href="12301.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
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
