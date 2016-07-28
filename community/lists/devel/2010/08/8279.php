<?
$subject_val = "[OMPI devel] autogen.sh improvements";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 10:54:17 2010" -->
<!-- isoreceived="20100816145417" -->
<!-- sent="Mon, 16 Aug 2010 07:55:38 -0700" -->
<!-- isosent="20100816145538" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] autogen.sh improvements" -->
<!-- id="B523107A-5966-435E-AB40-77F24A344AD8_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] autogen.sh improvements<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 10:55:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8280.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>Previous message:</strong> <a href="8278.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8280.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>Reply:</strong> <a href="8280.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>Reply:</strong> <a href="8421.php">Shamis, Pavel: "Re: [OMPI devel] autogen.sh improvements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just wanted to give the community a heads up that Ralph, Brian, and I are revamping autogen in a Mercurial branch.  I don't know the exact timeline to completion, but it won't be *too* far in the future.  
<br>
<p>We made some core changes, and then made some other changes that necessitated minor edits to many component Makefile.am's and configure.m4's.  So the overall commit will look *much* bigger than it really is.  But it's all good stuff.  :-)
<br>
<p>Here's a list of the intended high-level changes:
<br>
<p>Improvements:
<br>
-------------
<br>
1. &quot;autogen.sh&quot; is now &quot;autogen.pl&quot; (i.e., autogen is now in perl, not Bourne)
<br>
&nbsp;--&gt; We can put a sym link in SVN so that the old name still works, if it's important to people
<br>
2. the project/framework/component discovery is quite a bit faster
<br>
3. the perl code is a LOT easier to maintain (and add features to)
<br>
4. autogen.pl defaults to --no-ompi if ompi/ is not present (which is good for OPAL+ORTE tarballs)
<br>
5. ompi_mca.m4 has been cleaned up a bit, allowing autogen.pl to be a little dumber than autogen.sh
<br>
6. vprotocol components now live in ompi/mca/vprotocol (instead of ompi/mca/pml/v/mca/vprotocol)
<br>
7. a few more &quot;OMPI&quot; name cleanups (e.g., s/ompi/mca/gi and s/ompi/opal/gi where relevant)
<br>
<p>New features:
<br>
-------------
<br>
1. configure.params won't be necessary for components that have no configure.m4 and only have a single Makefile.am
<br>
2. configure.params won't be necessary for components that call AC_CONFIG_FILES themselves in their configure.m4 file
<br>
3. added --enable-mca-only-build=&lt;LIST&gt; option (opposite of --enable-mca-no-build)
<br>
4. autogen.pl accepts --platform=&lt;filename&gt; argument, just like configure
<br>
<p>Dropped features:
<br>
-----------------
<br>
1. component configure.stub files are no longer supported
<br>
2. component compile-time priorities are no longer supported (or necessary)
<br>
3. SVK is no longer supported
<br>
4. it is not possible to run autogen.pl from a component directory
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
<li><strong>Next message:</strong> <a href="8280.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>Previous message:</strong> <a href="8278.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8280.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>Reply:</strong> <a href="8280.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>Reply:</strong> <a href="8421.php">Shamis, Pavel: "Re: [OMPI devel] autogen.sh improvements"</a>
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
