<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 08:46:29 2013" -->
<!-- isoreceived="20130205134629" -->
<!-- sent="Tue, 5 Feb 2013 13:46:14 +0000" -->
<!-- isosent="20130205134614" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC69EE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD317DD65E_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 08:46:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12107.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a typo in my btl_tcp_if_exclude such that it was effectively
<br>
<p>&nbsp;&nbsp;mpirun --mca btl_tco_if_exclude bogus ...
<br>
<p>instead of ignoring the actual interface I wanted to ignore.  And since I wasn't ignoring the special loopback device that I have on some machines, every single MPI job hung because they tried to use those interfaces to communicate with processes on other nodes that that interface could not reach.
<br>
<p><p><p>On Feb 4, 2013, at 5:56 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm confused; why is it disastrous to have an interface in if_exclude that doesn't exist?  I can see it being a problem if we don't exclude something in the list, but the other way is (in my opinion) harmless but with a useful use case...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: 	Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent:	Monday, February 04, 2013 06:47 PM Mountain Standard Time
</span><br>
<span class="quotelev1">&gt; To:	Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject:	[EXTERNAL] Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 4, 2013, at 2:03 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The two behaviors you describe for include and exclude do not look conflicting to me. Inclusion is a strong request, the user enforce the usage of a specific interface. If the interface is not available, then we have a problem. Exclude on the other side, must enforce that a specific interface is not in use, fact that can be quite simple if the interface is not available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still maintain that it's equally disastrous if you don't exclude the correct interfaces (I lost 2 nights of MTT because of this!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not a fan of the nowarn option. Seems like a lot of code with limited interest, especially if we only plan to support it in TCP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a good point -- I wonder what openib (and others?) do who support *_if_include and *_if_exclude notation.  Do they warn / error if you specify an invalid interface?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you need specialized arguments for some of your nodes here is what I do: rename the binaries to .orig, and use the original name to create a sh script that will change the value of mca_param_files to something based on the host name (if such a file exists) and then call the .orig executable. Works like a charm., even when a batch scheduler is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That will still be quite difficult to do in MTT.  Remember: all the tests that are run in MTT are shared across all of us via the ompi-tests SVN repo.  Are you suggesting that I alias every test in the ompi-tests SVN with a public script that you should run that should look for some site-specific MCA override param file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12108.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12107.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
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
