<?
$subject_val = "Re: [OMPI devel] Building Open MPI components outside of the source tree";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 19 16:39:04 2011" -->
<!-- isoreceived="20110119213904" -->
<!-- sent="Wed, 19 Jan 2011 16:38:59 -0500" -->
<!-- isosent="20110119213859" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building Open MPI components outside of the source tree" -->
<!-- id="7DFF79CA-7510-4A96-BB55-41D15B3F895C_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="622644B2-E5E3-428E-8401-44A9DA80B82D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Building Open MPI components outside of the source tree<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-19 16:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8898.php">Jeff Squyres: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>Previous message:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8894.php">Jeff Squyres: "[OMPI devel] Building Open MPI components outside of the source tree"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8898.php">Jeff Squyres: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>Reply:</strong> <a href="8898.php">Jeff Squyres: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This stuff should be directly on the main Open MPI website. Not as a link to bitbucket, but as a webpage and 3 tars.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jan 19, 2011, at 15:43 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Over the years, a few parties have wanted to be able to build Open MPI components outside of the official source tree (e.g., they are developing their own components outside of OMPI's SVN).  We've typically said &quot;use --with-devel-headers&quot;, but a) never really provided a full example of how to do this, and b) never acknowledged that using --with-devel-headers is somewhat of a pain.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That ends now.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am publishing a bitbucket repo of three example &quot;tcp2&quot; BTL components.  They are almost exact copies of the real TCP BTL component, but have had their configury updated to enable them to be built outside of the Open MPI source tree:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. A component for the v1.4 Open MPI tree
</span><br>
<span class="quotelev1">&gt; 2. A component for the v1.5/v1.6 Open MPI tree
</span><br>
<span class="quotelev1">&gt; 3. A component for the trunk/v1.7 (as of r24265) Open MPI tree
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each of these example components support the --with-devel-headers method as well as a new method: --with-openmpi-source=DIR (i.e., where you specify the corresponding Open MPI source directory, and the component builds against that).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are three different components because the configury between each of them are a bit different.  Look at the configure.ac in the version that you care about to see examples of how to get the relevant CPPFLAGS / CFLAGS that you need to build your component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the bitbucket repo:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://bitbucket.org/jsquyres/build-ompi-components-outside-of-source-tree">https://bitbucket.org/jsquyres/build-ompi-components-outside-of-source-tree</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a top-level README.txt file in the repo that explains a bit more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Enjoy!
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8898.php">Jeff Squyres: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>Previous message:</strong> <a href="8896.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8894.php">Jeff Squyres: "[OMPI devel] Building Open MPI components outside of the source tree"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8898.php">Jeff Squyres: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>Reply:</strong> <a href="8898.php">Jeff Squyres: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
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
