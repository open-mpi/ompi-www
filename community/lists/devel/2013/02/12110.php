<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 10:26:01 2013" -->
<!-- isoreceived="20130205152601" -->
<!-- sent="Tue, 5 Feb 2013 15:25:30 +0000" -->
<!-- isosent="20130205152530" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD317DD8E5_at_EXMB01.srn.sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC69EE_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 10:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12111.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12109.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12109.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12111.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12111.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess I can see that, but I have the opposite use case; I have a device
<br>
on some nodes and not others that I want to ignore, so I set
<br>
btl_tcp_if_exclude to include that device.  It would be totally
<br>
counter-intuitive to have a giant warning because of that.
<br>
<p>Brian
<br>
<p>On 2/5/13 6:46 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I had a typo in my btl_tcp_if_exclude such that it was effectively
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun --mca btl_tco_if_exclude bogus ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;instead of ignoring the actual interface I wanted to ignore.  And since I
</span><br>
<span class="quotelev1">&gt;wasn't ignoring the special loopback device that I have on some machines,
</span><br>
<span class="quotelev1">&gt;every single MPI job hung because they tried to use those interfaces to
</span><br>
<span class="quotelev1">&gt;communicate with processes on other nodes that that interface could not
</span><br>
<span class="quotelev1">&gt;reach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 4, 2013, at 5:56 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm confused; why is it disastrous to have an interface in if_exclude
</span><br>
<span class="quotelev2">&gt;&gt;that doesn't exist?  I can see it being a problem if we don't exclude
</span><br>
<span class="quotelev2">&gt;&gt;something in the list, but the other way is (in my opinion) harmless but
</span><br>
<span class="quotelev2">&gt;&gt;with a useful use case...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: 	Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent:	Monday, February 04, 2013 06:47 PM Mountain Standard Time
</span><br>
<span class="quotelev2">&gt;&gt; To:	Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject:	[EXTERNAL] Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -
</span><br>
<span class="quotelev2">&gt;&gt;trunk/ompi/mca/btl/tcp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 4, 2013, at 2:03 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The two behaviors you describe for include and exclude do not look
</span><br>
<span class="quotelev3">&gt;&gt;&gt;conflicting to me. Inclusion is a strong request, the user enforce the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;usage of a specific interface. If the interface is not available, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;we have a problem. Exclude on the other side, must enforce that a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;specific interface is not in use, fact that can be quite simple if the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;interface is not available.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I still maintain that it's equally disastrous if you don't exclude the
</span><br>
<span class="quotelev2">&gt;&gt;correct interfaces (I lost 2 nights of MTT because of this!).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not a fan of the nowarn option. Seems like a lot of code with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;limited interest, especially if we only plan to support it in TCP.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a good point -- I wonder what openib (and others?) do who
</span><br>
<span class="quotelev2">&gt;&gt;support *_if_include and *_if_exclude notation.  Do they warn / error if
</span><br>
<span class="quotelev2">&gt;&gt;you specify an invalid interface?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you need specialized arguments for some of your nodes here is what
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I do: rename the binaries to .orig, and use the original name to create
</span><br>
<span class="quotelev3">&gt;&gt;&gt;a sh script that will change the value of mca_param_files to something
</span><br>
<span class="quotelev3">&gt;&gt;&gt;based on the host name (if such a file exists) and then call the .orig
</span><br>
<span class="quotelev3">&gt;&gt;&gt;executable. Works like a charm., even when a batch scheduler is used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That will still be quite difficult to do in MTT.  Remember: all the
</span><br>
<span class="quotelev2">&gt;&gt;tests that are run in MTT are shared across all of us via the ompi-tests
</span><br>
<span class="quotelev2">&gt;&gt;SVN repo.  Are you suggesting that I alias every test in the ompi-tests
</span><br>
<span class="quotelev2">&gt;&gt;SVN with a public script that you should run that should look for some
</span><br>
<span class="quotelev2">&gt;&gt;site-specific MCA override param file?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12110/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12111.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12109.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12109.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12111.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12111.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
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
