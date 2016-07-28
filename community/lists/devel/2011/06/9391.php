<?
$subject_val = "Re: [OMPI devel] VT support for 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 10:29:16 2011" -->
<!-- isoreceived="20110622142916" -->
<!-- sent="Wed, 22 Jun 2011 16:29:09 +0200" -->
<!-- isosent="20110622142909" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT support for 1.5" -->
<!-- id="201106221629.10760.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9BA5432E-F373-4A6A-885D-1430FE546DAD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT support for 1.5<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-22 10:29:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9392.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24805"</a>
<li><strong>Previous message:</strong> <a href="9390.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
<li><strong>In reply to:</strong> <a href="9356.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9415.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Reply:</strong> <a href="9415.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The CMR #2814 fixes the problem by renaming the internal VT library 'libutil.a' 
<br>
to 'libvt_util.a' to prevent name conflicts with dependency libraries.
<br>
<p>I believe that's the safest way even I preferred the libtool patch. I'm not 
<br>
sure whether the patch is correct or not - it may break some other 
<br>
functionality.
<br>
<p>Matthias
<br>
<p>On Friday 10 June 2011 15:29:08 Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 10, 2011, at 5:16 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; There are different ways to fix the problem:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. Apply the attached patch on ltmain.sh.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This patch excludes the target library name from searching *.la
</span><br>
<span class="quotelev2">&gt; &gt; libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does your patch work for vpath builds, too?  If so, isn't this something
</span><br>
<span class="quotelev1">&gt; that should be submitted upstream?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. Rename the VT's libutil
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This would prevents name conflicts with dependency libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is my preference; can't it just be renamed to libvtutil or something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3. Clear list of dependency libraries when building VT's libutil.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This could be done by adding LIBS= to the Makefile.am in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/contrib/vt/vt/util/. The VT's libutil has no dependencies to other
</span><br>
<span class="quotelev2">&gt; &gt; libraries except libc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That seems like it would work, but feels a bit hack-ish.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 4. Perform &quot;make clean&quot; or remove ompi/contrib/vt/vt/util/libutil.la
</span><br>
<span class="quotelev2">&gt; &gt; after re- configure.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Nonsense - it cannot be required from the user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My favorite suggestion is 1. It would be just another patch in addition
</span><br>
<span class="quotelev2">&gt; &gt; to the set of Libtool patches invoked by autogen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep in mind that most (all?) of those are for handling older versions of
</span><br>
<span class="quotelev1">&gt; the GNU Autotools, and/or for patches that have been submitted upstream
</span><br>
<span class="quotelev1">&gt; but are not part of an official release yet.  Or, they are for v1.5.x
</span><br>
<span class="quotelev1">&gt; where we have &quot;locked in&quot; the versions of the GNU autotools for the entire
</span><br>
<span class="quotelev1">&gt; series and won't upgrade, even if never versions fix the things we've put
</span><br>
<span class="quotelev1">&gt; in patches for.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9392.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24805"</a>
<li><strong>Previous message:</strong> <a href="9390.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
<li><strong>In reply to:</strong> <a href="9356.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9415.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Reply:</strong> <a href="9415.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
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
