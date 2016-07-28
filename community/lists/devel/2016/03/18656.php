<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 23:27:08 2016" -->
<!-- isoreceived="20160302042708" -->
<!-- sent="Wed, 2 Mar 2016 13:27:10 +0900" -->
<!-- isosent="20160302042710" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="56D66B9E.8070608_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BBA48FC6-54E5-4377-B6E4-9F49C427115A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: warn if running a debug build<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 23:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18658.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
be &quot;me-friendly&quot; :-)
<br>
i explicitly configure with --enable-debug --enable-picky from git, so i 
<br>
(hopefully) know what i am doing and do not want any warning.
<br>
<p>iirc, cisco mtt does that too, and i am not sure you would want a 
<br>
warning and/or update your mtt config.
<br>
<p>this is not a strong opinion, and i am fine with setting a parameter (i 
<br>
will likely soon forget i set that) in a config file.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/2/2016 1:21 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Mar 1, 2016, at 10:17 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In this case, should we only display the warning if debug build was implicit ?
</span><br>
<span class="quotelev2">&gt;&gt; for example, ./configure from git would display the warning (implicit debug),
</span><br>
<span class="quotelev2">&gt;&gt; but ./configure --enable-debug would not (explicit debug), regardless we built from git or a tarball
</span><br>
<span class="quotelev1">&gt; We don't currently distinguish between these two cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the rationale for only warning on implicit debug builds?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18658.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
