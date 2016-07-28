<?
$subject_val = "Re: [OMPI devel] libevent socket code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 12:50:43 2012" -->
<!-- isoreceived="20120425165043" -->
<!-- sent="Wed, 25 Apr 2012 10:50:35 -0600" -->
<!-- isosent="20120425165035" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libevent socket code" -->
<!-- id="49CDA59B-9B64-4B1E-B7A8-4E8E9FEFCB2E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1204251043000.25930_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libevent socket code<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 12:50:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10927.php">Nathan Hjelm: "[OMPI devel] libevent socket code"</a>
<li><strong>In reply to:</strong> <a href="10927.php">Nathan Hjelm: "[OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Reply:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can't it be done with configuring --without-libevent-sockets or some such thing? I really hate munging the code directly as it creates lots of support issues and makes it harder to upgrade.
<br>
<p><p>On Apr 25, 2012, at 10:45 AM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Anyone object if I #if 0 out all the socket code in libevent. We see lots of static compilation warnings because of that code and nothing in openmpi uses it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="10927.php">Nathan Hjelm: "[OMPI devel] libevent socket code"</a>
<li><strong>In reply to:</strong> <a href="10927.php">Nathan Hjelm: "[OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Reply:</strong> <a href="10929.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
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
