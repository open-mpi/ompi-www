<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 15:20:50 2010" -->
<!-- isoreceived="20100223202050" -->
<!-- sent="Tue, 23 Feb 2010 15:20:44 -0500" -->
<!-- isosent="20100223202044" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="236B18D117B37C449E470367EFCEC00303B6F1467784_at_EXCHMB.ornl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
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
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 15:20:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7471.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7469.php">Greg Watson: "[OMPI devel] question about pids"</a>
<li><strong>Maybe in reply to:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7472.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7472.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As you know, I would like to be able to slurp in run time support different than orte.  So as long as it is not hard to do this, I am fine.
<br>
<p>Rich
<br>
<p>----- Original Message -----
<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Tue Feb 23 13:05:29 2010
<br>
Subject: Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning
<br>
<p>On Feb 23, 2010, at 12:58 PM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; Will we still have the option to build individual libraries, is we opt for this ?
</span><br>
<p>You will still have individual libraries; it's just that libopen-rte will include libopen-pal, and libmpi will include libopen-rte (which will include libopen-pal).
<br>
<p>Do you need something different?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7471.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7469.php">Greg Watson: "[OMPI devel] question about pids"</a>
<li><strong>Maybe in reply to:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7472.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7472.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
