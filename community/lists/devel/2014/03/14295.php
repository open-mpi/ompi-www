<?
$subject_val = "Re: [OMPI devel] Bad parameter in file oob_tcp.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 05:21:05 2014" -->
<!-- isoreceived="20140305102105" -->
<!-- sent="Wed, 05 Mar 2014 11:20:54 +0100" -->
<!-- isosent="20140305102054" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bad parameter in file oob_tcp.c" -->
<!-- id="5316FA86.30800_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57oeknZiMrM=X=9+eVK9Fwgn78WXBcfwz2xY_GJOUbrHPNg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bad parameter in file oob_tcp.c<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-05 05:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mercurial mirror stuck to 02-19-2014"</a>
<li><strong>Previous message:</strong> <a href="14294.php">Guillaume Papaur&#233;: "[OMPI devel] mercurial mirror stuck to 02-19-2014"</a>
<li><strong>In reply to:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14301.php">George Bosilca: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/03/2014 04:06, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The code generating the error is here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          in-&gt;sin_addr.s_addr = inet_addr(host);
</span><br>
<span class="quotelev1">&gt;          if (in-&gt;sin_addr.s_addr == INADDR_ANY) {
</span><br>
<span class="quotelev1">&gt;              return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The address is resolving to INADDR_ANY instead of a regular address.
</span><br>
<span class="quotelev1">&gt; Does cygwin require some other method for resolving a hostname to an IP
</span><br>
<span class="quotelev1">&gt; address?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>in theory should be transparent using the same as windows.
<br>
But I need to understand if there is any difference in formal behavior
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mercurial mirror stuck to 02-19-2014"</a>
<li><strong>Previous message:</strong> <a href="14294.php">Guillaume Papaur&#233;: "[OMPI devel] mercurial mirror stuck to 02-19-2014"</a>
<li><strong>In reply to:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14301.php">George Bosilca: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
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
