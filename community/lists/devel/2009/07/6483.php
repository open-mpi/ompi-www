<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 19:49:08 2009" -->
<!-- isoreceived="20090721234908" -->
<!-- sent="Tue, 21 Jul 2009 19:49:02 -0400" -->
<!-- isosent="20090721234902" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723" -->
<!-- id="24982CE7-0C21-4CE4-A46F-5CCEB37F95A2_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5BD307E7-C70C-4D60-A678-A99B8AA3A0F1_at_cisco.com" -->
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
<strong>Date:</strong> 2009-07-21 19:49:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6484.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6482.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6480.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2009, at 7:35 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; However, I see that autodetect configure.m4 is checking  
</span><br>
<span class="quotelev1">&gt; $backtrace_installdirs_happy -- which seems like a no-no.  The  
</span><br>
<span class="quotelev1">&gt; ordering of framework / component configure.m4 scripts is not  
</span><br>
<span class="quotelev1">&gt; guaranteed, so it's not a good idea to check the output of another  
</span><br>
<span class="quotelev1">&gt; configure.m4's macro.
</span><br>
<p>Grrr, I thought I had changed all those to findpc_happy.  Well, that's  
<br>
easy enough to fix.  I don't see how it could result in the component  
<br>
being built when it isn't supposed to be, though.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6484.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6482.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6480.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
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
