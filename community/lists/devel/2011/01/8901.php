<?
$subject_val = "Re: [OMPI devel] Building Open MPI components outside of the sourcetree";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 19 19:41:30 2011" -->
<!-- isoreceived="20110120004130" -->
<!-- sent="Wed, 19 Jan 2011 19:39:23 -0500" -->
<!-- isosent="20110120003923" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building Open MPI components outside of the sourcetree" -->
<!-- id="6DF33BCE-C30A-4BCF-BCDC-11450F1035CC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="790F1D5B-8839-4072-AEF3-20EEFAD90569_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Building Open MPI components outside of the sourcetree<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-19 19:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8902.php">Terry Dontje: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8900.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8899.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8904.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the sourcetree"</a>
<li><strong>Reply:</strong> <a href="8904.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the sourcetree"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd rather not setup another SVN repo. Where should it go in the current OMPI SVN?
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Jan 19, 2011, at 5:01 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2011, at 16:44 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Where should it be on the main web site?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Documentation section look like a good place to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It needs to be in a repo somewhere; it may change over time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The source code can be hosted at Indiana in the same way ompi-tests and ompi-docs are hosted. However, I don't expect this code to drastically change every other day, so providing a tar on a webpage should be good enough. To be more precise on this point, as we only allow big modification of the build system between major releases I expect to only maintain 3 template (stable, unstable and trunk).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 19, 2011, at 4:38 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This stuff should be directly on the main Open MPI website. Not as a link to bitbucket, but as a webpage and 3 tars.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 19, 2011, at 15:43 , Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Over the years, a few parties have wanted to be able to build Open MPI components outside of the official source tree (e.g., they are developing their own components outside of OMPI's SVN).  We've typically said &quot;use --with-devel-headers&quot;, but a) never really provided a full example of how to do this, and b) never acknowledged that using --with-devel-headers is somewhat of a pain.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That ends now.  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am publishing a bitbucket repo of three example &quot;tcp2&quot; BTL components.  They are almost exact copies of the real TCP BTL component, but have had their configury updated to enable them to be built outside of the Open MPI source tree:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. A component for the v1.4 Open MPI tree
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. A component for the v1.5/v1.6 Open MPI tree
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. A component for the trunk/v1.7 (as of r24265) Open MPI tree
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Each of these example components support the --with-devel-headers method as well as a new method: --with-openmpi-source=DIR (i.e., where you specify the corresponding Open MPI source directory, and the component builds against that).  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are three different components because the configury between each of them are a bit different.  Look at the configure.ac in the version that you care about to see examples of how to get the relevant CPPFLAGS / CFLAGS that you need to build your component.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the bitbucket repo:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://bitbucket.org/jsquyres/build-ompi-components-outside-of-source-tree">https://bitbucket.org/jsquyres/build-ompi-components-outside-of-source-tree</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There's a top-level README.txt file in the repo that explains a bit more.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Enjoy!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8902.php">Terry Dontje: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8900.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8899.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8904.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the sourcetree"</a>
<li><strong>Reply:</strong> <a href="8904.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the sourcetree"</a>
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
