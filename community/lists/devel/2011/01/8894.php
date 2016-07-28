<?
$subject_val = "[OMPI devel] Building Open MPI components outside of the source tree";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 19 15:43:10 2011" -->
<!-- isoreceived="20110119204310" -->
<!-- sent="Wed, 19 Jan 2011 15:43:06 -0500" -->
<!-- isosent="20110119204306" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Building Open MPI components outside of the source tree" -->
<!-- id="622644B2-E5E3-428E-8401-44A9DA80B82D_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Building Open MPI components outside of the source tree<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-19 15:43:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8895.php">Ralph Castain: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8893.php">George Bosilca: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8897.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>Reply:</strong> <a href="8897.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Over the years, a few parties have wanted to be able to build Open MPI components outside of the official source tree (e.g., they are developing their own components outside of OMPI's SVN).  We've typically said &quot;use --with-devel-headers&quot;, but a) never really provided a full example of how to do this, and b) never acknowledged that using --with-devel-headers is somewhat of a pain.
<br>
<p>That ends now.  :-)
<br>
<p>I am publishing a bitbucket repo of three example &quot;tcp2&quot; BTL components.  They are almost exact copies of the real TCP BTL component, but have had their configury updated to enable them to be built outside of the Open MPI source tree:
<br>
<p>&nbsp;1. A component for the v1.4 Open MPI tree
<br>
&nbsp;2. A component for the v1.5/v1.6 Open MPI tree
<br>
&nbsp;3. A component for the trunk/v1.7 (as of r24265) Open MPI tree
<br>
<p>Each of these example components support the --with-devel-headers method as well as a new method: --with-openmpi-source=DIR (i.e., where you specify the corresponding Open MPI source directory, and the component builds against that).  
<br>
<p>There are three different components because the configury between each of them are a bit different.  Look at the configure.ac in the version that you care about to see examples of how to get the relevant CPPFLAGS / CFLAGS that you need to build your component.
<br>
<p>Here's the bitbucket repo:
<br>
<p>&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/build-ompi-components-outside-of-source-tree">https://bitbucket.org/jsquyres/build-ompi-components-outside-of-source-tree</a>
<br>
<p>There's a top-level README.txt file in the repo that explains a bit more.
<br>
<p>Enjoy!
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8895.php">Ralph Castain: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8893.php">George Bosilca: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8897.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
<li><strong>Reply:</strong> <a href="8897.php">George Bosilca: "Re: [OMPI devel] Building Open MPI components outside of the source tree"</a>
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
