<?
$subject_val = "Re: [OMPI devel] VT support for 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 25 06:47:41 2011" -->
<!-- isoreceived="20110625104741" -->
<!-- sent="Sat, 25 Jun 2011 06:47:33 -0400" -->
<!-- isosent="20110625104733" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT support for 1.5" -->
<!-- id="A0B10155-F35B-407F-8146-B982D61AE0D2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201106221629.10760.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-25 06:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9416.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9414.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9391.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9347.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>On Jun 22, 2011, at 10:29 AM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; The CMR #2814 fixes the problem by renaming the internal VT library 'libutil.a' 
</span><br>
<span class="quotelev1">&gt; to 'libvt_util.a' to prevent name conflicts with dependency libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that's the safest way even I preferred the libtool patch. I'm not 
</span><br>
<span class="quotelev1">&gt; sure whether the patch is correct or not - it may break some other 
</span><br>
<span class="quotelev1">&gt; functionality.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday 10 June 2011 15:29:08 Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 10, 2011, at 5:16 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are different ways to fix the problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Apply the attached patch on ltmain.sh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This patch excludes the target library name from searching *.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does your patch work for vpath builds, too?  If so, isn't this something
</span><br>
<span class="quotelev2">&gt;&gt; that should be submitted upstream?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Rename the VT's libutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would prevents name conflicts with dependency libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is my preference; can't it just be renamed to libvtutil or something?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Clear list of dependency libraries when building VT's libutil.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This could be done by adding LIBS= to the Makefile.am in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/contrib/vt/vt/util/. The VT's libutil has no dependencies to other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries except libc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That seems like it would work, but feels a bit hack-ish.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. Perform &quot;make clean&quot; or remove ompi/contrib/vt/vt/util/libutil.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after re- configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nonsense - it cannot be required from the user.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Agreed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My favorite suggestion is 1. It would be just another patch in addition
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the set of Libtool patches invoked by autogen.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Keep in mind that most (all?) of those are for handling older versions of
</span><br>
<span class="quotelev2">&gt;&gt; the GNU Autotools, and/or for patches that have been submitted upstream
</span><br>
<span class="quotelev2">&gt;&gt; but are not part of an official release yet.  Or, they are for v1.5.x
</span><br>
<span class="quotelev2">&gt;&gt; where we have &quot;locked in&quot; the versions of the GNU autotools for the entire
</span><br>
<span class="quotelev2">&gt;&gt; series and won't upgrade, even if never versions fix the things we've put
</span><br>
<span class="quotelev2">&gt;&gt; in patches for.
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9416.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9414.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9391.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9347.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
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
