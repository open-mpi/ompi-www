<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 18:45:39 2009" -->
<!-- isoreceived="20090721224539" -->
<!-- sent="Tue, 21 Jul 2009 18:45:10 -0400" -->
<!-- isosent="20090721224510" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723" -->
<!-- id="F3A6B177-1E27-4069-A200-105B9000FCCD_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="046441A1-0131-4326-826B-7F894C17DD80_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 18:45:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6477.php">Jeff Squyres: "[OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6476.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6480.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Reply:</strong> <a href="6480.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2009, at 6:31 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; This commit appears to have broken the build system for Mac OSX.  
</span><br>
<span class="quotelev1">&gt; Could you please fix it - since it only supports Solaris and Linux,  
</span><br>
<span class="quotelev1">&gt; how about setting it so it continues to work in other environments??
</span><br>
<p>That was the intent of the configure.m4 script in that directory.  It  
<br>
is supposed to check for the existence of some files in /proc, which  
<br>
should not exist on a Mac.  Could you send me the relevant portion of  
<br>
the config.log on Mac OSX?
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6477.php">Jeff Squyres: "[OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6476.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6480.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Reply:</strong> <a href="6480.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
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
