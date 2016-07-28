<?
$subject_val = "Re: [OMPI devel] Memchecker: breaks trunk again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 10:26:42 2008" -->
<!-- isoreceived="20080421142642" -->
<!-- sent="Mon, 21 Apr 2008 08:26:27 -0600" -->
<!-- isosent="20080421142627" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memchecker: breaks trunk again" -->
<!-- id="C4320033.D2AB%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C54BF08A-5634-4ECC-8B35-ADCEE8793D26_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memchecker: breaks trunk again<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 10:26:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3732.php">Brian W. Barrett: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
<li><strong>In reply to:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3732.php">Brian W. Barrett: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3732.php">Brian W. Barrett: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3733.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/21/08 8:10 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmm.  I do not have this problem on OS X (where I do not have Valgrind
</span><br>
<span class="quotelev1">&gt; installed) as of this morning's trunk.  configure correctly determines
</span><br>
<span class="quotelev1">&gt; that valgrind is not present and therefore continues on:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component memchecker:valgrind (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component memchecker:valgrind compile mode... static
</span><br>
<span class="quotelev1">&gt; checking if MCA component memchecker:valgrind can compile... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that your message indicates that configure thinks that valgrind
</span><br>
<span class="quotelev1">&gt; support was explicitly requested.  In this case, configure thinks,
</span><br>
<span class="quotelev1">&gt; &quot;you explicitly requested it, I cannot provide it, so I should abort
</span><br>
<span class="quotelev1">&gt; rather than give unexpected results.&quot;
</span><br>
<p>I know that - but I am not explicitly requesting it. In fact, I explicitly
<br>
put --without-valgrind, to no effect.
<br>
<p>Here is what I have discovered may be the source of the problem. I had
<br>
inserted a enable_memchecker=yes line in my platform file. This apparently
<br>
has the unfortunate side effect of now requiring valgrind. IMHO, this should
<br>
not be setup that way per my earlier comment about requiring debuggers
<br>
unless memchecker has absolutely no other way to run - which looking at the
<br>
framework, would not appear to be true.
<br>
<p>I then tried still using my platform file, but adding --disable-memchecker
<br>
to the configure line. The disable request was apparently ignored, at least
<br>
as far as the valgrind part of the request is concerned. The build failed at
<br>
the same point.
<br>
<p>Removing the enable_memchecker=yes line from my platform file allows me to
<br>
successfully navigate configure.
<br>
<p>So it appears to be a combination of memchecker=yes automatically requiring
<br>
valgrind, and the override on the configure line of a param set by a
<br>
platform file not working.
<br>
<p>I can send you some stuff off-list in a little bit, if you still need it.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send your full configure output and config.log?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 21, 2008, at 9:51 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As an FYI for anyone similarly afflicted:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only solution I have found is to gut the file
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/memchecker/valgrind/configure.m4:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # MCA_memchecker_valgrind_CONFIG([action-if-found], [action-if-not-
</span><br>
<span class="quotelev2">&gt;&gt; found])
</span><br>
<span class="quotelev2">&gt;&gt; # -----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; AC_DEFUN([MCA_memchecker_valgrind_CONFIG],[
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        happy=0                      # none_needed
</span><br>
<span class="quotelev2">&gt;&gt;        happy_value=0                # none_needed
</span><br>
<span class="quotelev2">&gt;&gt;        memchecker_valgrind_happy=0  # This should suffice to get rid
</span><br>
<span class="quotelev2">&gt;&gt; of the
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;        should_build=2
</span><br>
<span class="quotelev2">&gt;&gt;        want_component=0
</span><br>
<span class="quotelev2">&gt;&gt; ])dnl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nothing else will allow you to build unless you have the valgrind
</span><br>
<span class="quotelev2">&gt;&gt; headers
</span><br>
<span class="quotelev2">&gt;&gt; installed on your machine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 4/21/08 7:28 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am finding that the memchecker code is again breaking the trunk,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifically on any machine that does not have valgrind installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apparently, memchecker now forces a requirement for valgrind?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is what I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- MCA component memchecker:valgrind (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for MCA component memchecker:valgrind compile mode... static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking checking for the valgrind include directory ... none needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking valgrind/valgrind.h usability... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking valgrind/valgrind.h presence... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for valgrind/valgrind.h... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** Could not find valgrind header files, as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support was requested
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could somebody please fix this? I thought we had decided many moons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ago that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we would not require specific debuggers in default build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configurations - I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am somewhat surprised, therefore, to find that memchecker is &quot;on&quot; by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default, and now requires valgrind!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tried --disable-memchecker, but nothing will allow me to get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; past
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3732.php">Brian W. Barrett: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
<li><strong>In reply to:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3732.php">Brian W. Barrett: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3732.php">Brian W. Barrett: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3733.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
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
