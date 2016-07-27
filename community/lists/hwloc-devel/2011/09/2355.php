<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  2 13:44:00 2011" -->
<!-- isoreceived="20110902174400" -->
<!-- sent="Fri, 2 Sep 2011 14:43:50 -0300" -->
<!-- isosent="20110902174350" -->
<!-- name="Marcelo Alaniz" -->
<!-- email="malaniz_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="20110902174350.GA12055_at_mhost" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2751463B-2EAA-433E-ACFA-F0DB93E01F50_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Marcelo Alaniz (<em>malaniz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-02 13:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2356.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3747)"</a>
<li><strong>Previous message:</strong> <a href="2354.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2352.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2353.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 02, 2011 at 05:57:11AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; JSON: sure, it's an easy format, but we're not really targeting web-ish kinds of things here, are we?  
</span><br>
The format isn't only for web-ish. A lot of embebbed apps use it.
<br>
I send an example in attach and use this site to do it: 
<br>
<a href="http://www.thomasfrank.se/xml_to_json.html">http://www.thomasfrank.se/xml_to_json.html</a>
<br>
<p>Cheers! 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; YAML: ya, that's also an easy format.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the goal here is to do something utterly trivial that has no support library requirement.  Unless someone has specific requirements for these formats, I'm ok with a totally trivial and not-necessarily-compatibilte-with-anyone-else's-format format.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 1, 2011, at 9:38 PM, Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt; &gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 02/09/11 01:30, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any chance that a lighter-weight, simple string
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parsing module could be added to hwloc?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What about something based on YAML ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.yaml.org/spec/1.2/spec.html">http://www.yaml.org/spec/1.2/spec.html</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Designed to be easy to read by a human..
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - -- 
</span><br>
<span class="quotelev2">&gt; &gt;    Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt; &gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev2">&gt; &gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt; &gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev2">&gt; &gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; iEYEARECAAYFAk5gM5YACgkQO2KABBYQAh8LAgCgh9dBLor3Sfiw8PCDvffZxjN1
</span><br>
<span class="quotelev2">&gt; &gt; j/YAnjB9vno4MY34DSxOwWT45yyU29y/
</span><br>
<span class="quotelev2">&gt; &gt; =/FPJ
</span><br>
<span class="quotelev2">&gt; &gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Degree Alaniz Marcelo
Frontend Development 
HPC PhD Student

</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/json attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2355/out.json">out.json</a>
</ul>
<!-- attachment="out.json" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2355/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2356.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3747)"</a>
<li><strong>Previous message:</strong> <a href="2354.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2352.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2353.php">Samuel Thibault: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
