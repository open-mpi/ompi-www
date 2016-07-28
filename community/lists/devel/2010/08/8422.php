<?
$subject_val = "Re: [OMPI devel] autogen.sh improvements";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 11:18:00 2010" -->
<!-- isoreceived="20100831151800" -->
<!-- sent="Tue, 31 Aug 2010 09:17:50 -0600" -->
<!-- isosent="20100831151750" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen.sh improvements" -->
<!-- id="7E63CD5B-D369-4404-A581-BBE290907AF8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="17DC9B4D-4E74-42FB-8C22-F056E6156DC8_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autogen.sh improvements<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 11:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8423.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8421.php">Shamis, Pavel: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>In reply to:</strong> <a href="8421.php">Shamis, Pavel: "Re: [OMPI devel] autogen.sh improvements"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, they are in a bitbucket repo:
<br>
<p><a href="https://bitbucket.org/rhc/ompi-agen">https://bitbucket.org/rhc/ompi-agen</a>
<br>
<p><p>On Aug 31, 2010, at 9:08 AM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the autogen changes are public available? I would like to see the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2010, at 10:55 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just wanted to give the community a heads up that Ralph, Brian, and I are revamping autogen in a Mercurial branch.  I don't know the exact timeline to completion, but it won't be *too* far in the future.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We made some core changes, and then made some other changes that necessitated minor edits to many component Makefile.am's and configure.m4's.  So the overall commit will look *much* bigger than it really is.  But it's all good stuff.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's a list of the intended high-level changes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Improvements:
</span><br>
<span class="quotelev2">&gt;&gt; -------------
</span><br>
<span class="quotelev2">&gt;&gt; 1. &quot;autogen.sh&quot; is now &quot;autogen.pl&quot; (i.e., autogen is now in perl, not Bourne)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; We can put a sym link in SVN so that the old name still works, if it's important to people
</span><br>
<span class="quotelev2">&gt;&gt; 2. the project/framework/component discovery is quite a bit faster
</span><br>
<span class="quotelev2">&gt;&gt; 3. the perl code is a LOT easier to maintain (and add features to)
</span><br>
<span class="quotelev2">&gt;&gt; 4. autogen.pl defaults to --no-ompi if ompi/ is not present (which is good for OPAL+ORTE tarballs)
</span><br>
<span class="quotelev2">&gt;&gt; 5. ompi_mca.m4 has been cleaned up a bit, allowing autogen.pl to be a little dumber than autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; 6. vprotocol components now live in ompi/mca/vprotocol (instead of ompi/mca/pml/v/mca/vprotocol)
</span><br>
<span class="quotelev2">&gt;&gt; 7. a few more &quot;OMPI&quot; name cleanups (e.g., s/ompi/mca/gi and s/ompi/opal/gi where relevant)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; New features:
</span><br>
<span class="quotelev2">&gt;&gt; -------------
</span><br>
<span class="quotelev2">&gt;&gt; 1. configure.params won't be necessary for components that have no configure.m4 and only have a single Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; 2. configure.params won't be necessary for components that call AC_CONFIG_FILES themselves in their configure.m4 file
</span><br>
<span class="quotelev2">&gt;&gt; 3. added --enable-mca-only-build=&lt;LIST&gt; option (opposite of --enable-mca-no-build)
</span><br>
<span class="quotelev2">&gt;&gt; 4. autogen.pl accepts --platform=&lt;filename&gt; argument, just like configure
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dropped features:
</span><br>
<span class="quotelev2">&gt;&gt; -----------------
</span><br>
<span class="quotelev2">&gt;&gt; 1. component configure.stub files are no longer supported
</span><br>
<span class="quotelev2">&gt;&gt; 2. component compile-time priorities are no longer supported (or necessary)
</span><br>
<span class="quotelev2">&gt;&gt; 3. SVK is no longer supported
</span><br>
<span class="quotelev2">&gt;&gt; 4. it is not possible to run autogen.pl from a component directory
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
<li><strong>Next message:</strong> <a href="8423.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8421.php">Shamis, Pavel: "Re: [OMPI devel] autogen.sh improvements"</a>
<li><strong>In reply to:</strong> <a href="8421.php">Shamis, Pavel: "Re: [OMPI devel] autogen.sh improvements"</a>
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
