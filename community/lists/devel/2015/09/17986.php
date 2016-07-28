<?
$subject_val = "Re: [OMPI devel] Cross-job disconnect is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 17:07:06 2015" -->
<!-- isoreceived="20150908210706" -->
<!-- sent="Tue, 8 Sep 2015 21:06:58 +0000" -->
<!-- isosent="20150908210658" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross-job disconnect is broken" -->
<!-- id="F65CEE68-2575-40DC-8B8C-C4AF1953EBBE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVOkpaOGRB=sKCr6pGU6cpPJurqWTRm4D05ZJJm3u=bcQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Cross-job disconnect is broken<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 17:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17987.php">Ralph Castain: "[OMPI devel] Slurm support in master"</a>
<li><strong>Previous message:</strong> <a href="17985.php">Ralph Castain: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>In reply to:</strong> <a href="17984.php">George Bosilca: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2015, at 4:59 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why would anyone use connect/accept (or join) between processes on the same job? The only environment where such a functionality makes sense is where disjoint applications (think computing part and the visualization part) are able to connect together. There are application that use such a model, but I bet they don't use OMPI.
</span><br>
<p>FWIW, we have a few tests that use this functionality, IIRC.  I think it make it easy to test various code paths (i.e., we don't *actually* have to spawn - we could create intercommunicators and/or test the accept/connect and join code paths, etc.).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17987.php">Ralph Castain: "[OMPI devel] Slurm support in master"</a>
<li><strong>Previous message:</strong> <a href="17985.php">Ralph Castain: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>In reply to:</strong> <a href="17984.php">George Bosilca: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
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
