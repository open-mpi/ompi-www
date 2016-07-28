<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 10:33:14 2013" -->
<!-- isoreceived="20130205153314" -->
<!-- sent="Tue, 5 Feb 2013 15:33:08 +0000" -->
<!-- isosent="20130205153308" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC6F68_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD317DD8E5_at_EXMB01.srn.sandia.gov" -->
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
<strong>Date:</strong> 2013-02-05 10:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12112.php">Nathan Hjelm: "[OMPI devel] MCA variable system slides and notes"</a>
<li><strong>Previous message:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that's the quandary: I can see both use cases.
<br>
<p>That's why I proposed the &quot;nowarn:&quot; syntax that George hated.  :-)
<br>
<p>Got any other suggestion on how to handle both use cases?
<br>
<p><p><p>On Feb 5, 2013, at 7:25 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I guess I can see that, but I have the opposite use case; I have a device
</span><br>
<span class="quotelev1">&gt; on some nodes and not others that I want to ignore, so I set
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude to include that device.  It would be totally
</span><br>
<span class="quotelev1">&gt; counter-intuitive to have a giant warning because of that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/5/13 6:46 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I had a typo in my btl_tcp_if_exclude such that it was effectively
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tco_if_exclude bogus ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; instead of ignoring the actual interface I wanted to ignore.  And since I
</span><br>
<span class="quotelev2">&gt;&gt; wasn't ignoring the special loopback device that I have on some machines,
</span><br>
<span class="quotelev2">&gt;&gt; every single MPI job hung because they tried to use those interfaces to
</span><br>
<span class="quotelev2">&gt;&gt; communicate with processes on other nodes that that interface could not
</span><br>
<span class="quotelev2">&gt;&gt; reach.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 4, 2013, at 5:56 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm confused; why is it disastrous to have an interface in if_exclude
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that doesn't exist?  I can see it being a problem if we don't exclude
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something in the list, but the other way is (in my opinion) harmless but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a useful use case...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: 	Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent:	Monday, February 04, 2013 06:47 PM Mountain Standard Time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To:	Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject:	[EXTERNAL] Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca/btl/tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 4, 2013, at 2:03 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The two behaviors you describe for include and exclude do not look
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conflicting to me. Inclusion is a strong request, the user enforce the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; usage of a specific interface. If the interface is not available, then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we have a problem. Exclude on the other side, must enforce that a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specific interface is not in use, fact that can be quite simple if the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interface is not available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I still maintain that it's equally disastrous if you don't exclude the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct interfaces (I lost 2 nights of MTT because of this!).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not a fan of the nowarn option. Seems like a lot of code with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; limited interest, especially if we only plan to support it in TCP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a good point -- I wonder what openib (and others?) do who
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support *_if_include and *_if_exclude notation.  Do they warn / error if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you specify an invalid interface?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you need specialized arguments for some of your nodes here is what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do: rename the binaries to .orig, and use the original name to create
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a sh script that will change the value of mca_param_files to something
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; based on the host name (if such a file exists) and then call the .orig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executable. Works like a charm., even when a batch scheduler is used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That will still be quite difficult to do in MTT.  Remember: all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests that are run in MTT are shared across all of us via the ompi-tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SVN repo.  Are you suggesting that I alias every test in the ompi-tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SVN with a public script that you should run that should look for some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; site-specific MCA override param file?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12112.php">Nathan Hjelm: "[OMPI devel] MCA variable system slides and notes"</a>
<li><strong>Previous message:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12110.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
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
