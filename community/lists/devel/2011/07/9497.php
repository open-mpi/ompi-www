<?
$subject_val = "[OMPI devel] OpenMPI with NAG compiler and gcc 4.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 10:32:42 2011" -->
<!-- isoreceived="20110711143242" -->
<!-- sent="Mon, 11 Jul 2011 10:32:37 -0400" -->
<!-- isosent="20110711143237" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI with NAG compiler and gcc 4.6" -->
<!-- id="57337578-2D3B-425E-A762-06CE23D8540C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1AB18B.9050508_at_nag.co.uk" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI with NAG compiler and gcc 4.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 10:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9498.php">Jeff Squyres: "[OMPI devel] Wrong version of flex in nightly tarballs last night"</a>
<li><strong>Previous message:</strong> <a href="9496.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(moved over from the users list; this is definitely a better fit for the devel list...)
<br>
<p><p>On Jul 11, 2011, at 4:17 AM, Ning Li wrote:
<br>
<p><span class="quotelev1">&gt; I am willing to help test OpenMPI with the NAG compiler from time to time but not sure how. If you could give me specific instructions I am very happy to help.
</span><br>
<p>Ping me off the list and I can get you started.  The MPI Testing Tool (MTT) is a little complicated to configure, but once you have done so, it can run in a fully automated fashion with little care and feeding required.
<br>
<p><span class="quotelev1">&gt; As for this technical issue, I did some research online. It appears that a later version of Libtool (probably 2.2.10+) added support to NAG Fortran compiler. There are discussions at <a href="http://lists.gnu.org/archive/html/bug-libtool/2010-09/msg00002.html">http://lists.gnu.org/archive/html/bug-libtool/2010-09/msg00002.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The relevant section of code (which I found from Libtool 2.4) looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      nagfor*)
</span><br>
<span class="quotelev1">&gt; 	# NAG Fortran compiler
</span><br>
<span class="quotelev1">&gt; 	_LT_TAGVAR(lt_prog_compiler_wl, $1)='-Wl,-Wl,,'
</span><br>
<span class="quotelev1">&gt; 	_LT_TAGVAR(lt_prog_compiler_pic, $1)='-PIC'
</span><br>
<span class="quotelev1">&gt; 	_LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The basic idea here is that nagfor calls gcc (not ld directly) for linking so there are two stages of parameter passing, so the rather strange looking '-Wl,-Wl,,' flag.
</span><br>
<p>Gotcha.  
<br>
<p>OMPI v1.5.x uses Libtool 2.2.6b, unfortunately -- it is highly unlikely that we can upgrade this in the middle of a release series.  Indeed, LT made some significant changes after 2.2.6b that would require fairly extensive changes to OMPI v1.5's build system.  So upgrading is not likely.
<br>
<p>But patching is fine -- we already have several patches in place for various Autotool bugs / back ports.  Could you prepare a patch, perchance?  OMPI's autogen.sh script applies such patches (our autogen.sh script runs autoconf/automake/etc. -- autogen.sh is only necessary for developers who get SVN checkouts; it's already been run for official OMPI release tarballs).  More on patching below.
<br>
<p>FWIW, the current OMPI SVN trunk has already been upgraded to LT 2.4; so hypothetically the problem should be fixed there.  Could you try a trunk nightly tarball and see if it works with the NAG compiler?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p><span class="quotelev1">&gt; I can see that in OpenMPI 1.5.3 source, the $OPENMPI_DIR/config/libtool.m4 file does not contain the above code. I have not nuch experience using Libtool so I don't know how to fix this. Simply adding the new code does not seem to work.
</span><br>
<p>It's a little more convoluted, unfortunately.  The contents of libtool.m4 are only added to OMPI's &quot;configure&quot; script when &quot;autogen.sh&quot; is run.  There's likely a magic place where the patch has to be added in the sequence of events in autogen.sh.
<br>
<p>If you can find the right place to patch in libtool.m4, try manually editing configure to put the fix in there, too (i.e., you should be able to find enough context from libtool.m4 to find the Right place(s) in configure).  If that works, send the libtool.m4 patch along and I can see about putting it in the Right place in autogen.sh.
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
<li><strong>Next message:</strong> <a href="9498.php">Jeff Squyres: "[OMPI devel] Wrong version of flex in nightly tarballs last night"</a>
<li><strong>Previous message:</strong> <a href="9496.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
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
