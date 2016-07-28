<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 10:03:18 2014" -->
<!-- isoreceived="20141010140318" -->
<!-- sent="Fri, 10 Oct 2014 14:03:16 +0000" -->
<!-- isosent="20141010140316" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a" -->
<!-- id="777D29F1-58D1-42A3-9B66-16287CD32E02_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyYkt2mUoqfM79Qy6O6JhonF319K_PNWKyRo9tcSzmGqgw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-10 10:03:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] End of life: Bitbucket and Github read-only SVN mirrors"</a>
<li><strong>Previous message:</strong> <a href="16037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pull requests to release branch"</a>
<li><strong>In reply to:</strong> <a href="16023.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 7, 2014, at 10:08 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, it does not happen in my mtt runs but at customer cluster with no access.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there is an agreement that flow in question is a result of internal bug it is better we caught it earlier and not let garbage in/out but use the power of community to trace it at other mtt setups as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does assert fit better than abort here?
</span><br>
<p>No, that will core dump as well.
<br>
<p>Perhaps this should be an MCA param?
<br>
<p>Do you have the customer have a debug build?  Because this code path is only executed in debug builds.
<br>
<p>Please revert this behavior (it seems incorrect for the reasons I listed in the initial email) and submit an RFC for new behavior.
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="16039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] End of life: Bitbucket and Github read-only SVN mirrors"</a>
<li><strong>Previous message:</strong> <a href="16037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pull requests to release branch"</a>
<li><strong>In reply to:</strong> <a href="16023.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
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
