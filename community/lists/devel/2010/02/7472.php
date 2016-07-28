<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 16:19:50 2010" -->
<!-- isoreceived="20100223211950" -->
<!-- sent="Tue, 23 Feb 2010 16:19:45 -0500" -->
<!-- isosent="20100223211945" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="7858B9F5-FB1C-435A-BA0D-74F906C748B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="236B18D117B37C449E470367EFCEC00303B6F1467784_at_EXCHMB.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 16:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7473.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7471.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>In reply to:</strong> <a href="7470.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer and I talked about this specific issue on the phone a day or three ago and he assures me that you guys will still be able to do this, even with the One Big Libmpi plan.
<br>
<p><p>On Feb 23, 2010, at 3:20 PM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; As you know, I would like to be able to slurp in run time support different than orte.  So as long as it is not hard to do this, I am fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tue Feb 23 13:05:29 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 23, 2010, at 12:58 PM, Graham, Richard L. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Will we still have the option to build individual libraries, is we opt for this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will still have individual libraries; it's just that libopen-rte will include libopen-pal, and libmpi will include libopen-rte (which will include libopen-pal).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you need something different?
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7473.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7471.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>In reply to:</strong> <a href="7470.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
