<?
$subject_val = "[OMPI devel] Bugfix for pending zero byte packages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 16:41:06 2013" -->
<!-- isoreceived="20130404204106" -->
<!-- sent="Thu, 04 Apr 2013 22:40:58 +0200" -->
<!-- isosent="20130404204058" -->
<!-- name="Martin SCHREIBER" -->
<!-- email="martin.schreiber_at_[hidden]" -->
<!-- subject="[OMPI devel] Bugfix for pending zero byte packages" -->
<!-- id="1365108058.2390.11.camel_at_laptop42" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Bugfix for pending zero byte packages<br>
<strong>From:</strong> Martin SCHREIBER (<em>martin.schreiber_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 16:40:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12239.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12237.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of	ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12299.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>Reply:</strong> <a href="12299.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers,
<br>
<p>it seems that for messages of size 0 no convertor is created due to
<br>
optimizations issues.
<br>
However, this is not considered in MCA_PML_OB1_SEND_REQUEST_RESET when
<br>
processing pending send requests.
<br>
<p>A fix (or something similar) for this issue is provided below. Please be
<br>
aware, that I'm not an OpenMPI developer and that e. g. req_bytes_packed
<br>
is the wrong field to check.
<br>
<p>If you have any questions or if you need any further information (stack
<br>
trace, etc.), don't hesitate to ask!
<br>
<p>Best regards &amp; thank you for developing OpenMPI,
<br>
<p>Martin
<br>
<p><p><p><p><p><p>affected versions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.6.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and probably versions below
<br>
<p><p>file which needs a fix:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pml_ob1_sendreq.h
<br>
<p><p>Inserting the if statement of the code-snippet below fixes the problem for me.
<br>
<p><p>#define MCA_PML_OB1_SEND_REQUEST_RESET(sendreq)                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check for zero-package since convertor is not created for zero-size packages */      \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (sendreq-&gt;req_send.req_bytes_packed &gt; 0)                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{                                                                          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t _position = 0;                                                  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_convertor_set_position(&amp;sendreq-&gt;req_send.req_base.req_convertor, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;_position);                               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert( 0 == _position );                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><pre>
-- 
Dipl.-Inf. Martin Schreiber
Chair of Scientific Computing, <a href="http://www5.in.tum.de">http://www5.in.tum.de</a>
Technische Universit&#195;&#164;t M&#195;&#188;nchen, Fakult&#195;&#164;t f&#195;&#188;r Informatik
Boltzmannstr. 3 / Zi. 2.5.57, 85748 Garching, Germany
Phone: +49-89-289-18630, Fax: +49-89-289-18607
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12239.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12237.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of	ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12299.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
<li><strong>Reply:</strong> <a href="12299.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bugfix for pending zero byte packages"</a>
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
