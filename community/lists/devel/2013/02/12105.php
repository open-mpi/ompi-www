<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 20:46:05 2013" -->
<!-- isoreceived="20130205014605" -->
<!-- sent="Tue, 5 Feb 2013 01:45:59 +0000" -->
<!-- isosent="20130205014559" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC6514_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkUFOzbxScUN1F25smSMayjaM6V0CyHLqayDgrYPckLRow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 20:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12106.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<li><strong>Previous message:</strong> <a href="12104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<li><strong>In reply to:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2013, at 2:03 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The two behaviors you describe for include and exclude do not look conflicting to me. Inclusion is a strong request, the user enforce the usage of a specific interface. If the interface is not available, then we have a problem. Exclude on the other side, must enforce that a specific interface is not in use, fact that can be quite simple if the interface is not available.
</span><br>
<p>I still maintain that it's equally disastrous if you don't exclude the correct interfaces (I lost 2 nights of MTT because of this!).
<br>
<p><span class="quotelev1">&gt; I'm not a fan of the nowarn option. Seems like a lot of code with limited interest, especially if we only plan to support it in TCP.
</span><br>
<p>This is a good point -- I wonder what openib (and others?) do who support *_if_include and *_if_exclude notation.  Do they warn / error if you specify an invalid interface?
<br>
<p><span class="quotelev1">&gt; If you need specialized arguments for some of your nodes here is what I do: rename the binaries to .orig, and use the original name to create a sh script that will change the value of mca_param_files to something based on the host name (if such a file exists) and then call the .orig executable. Works like a charm., even when a batch scheduler is used.
</span><br>
<p>That will still be quite difficult to do in MTT.  Remember: all the tests that are run in MTT are shared across all of us via the ompi-tests SVN repo.  Are you suggesting that I alias every test in the ompi-tests SVN with a public script that you should run that should look for some site-specific MCA override param file?
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
<li><strong>Next message:</strong> <a href="12106.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<li><strong>Previous message:</strong> <a href="12104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<li><strong>In reply to:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
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
