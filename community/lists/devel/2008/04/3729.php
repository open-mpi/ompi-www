<?
$subject_val = "Re: [OMPI devel] Memchecker: breaks trunk again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 10:10:47 2008" -->
<!-- isoreceived="20080421141047" -->
<!-- sent="Mon, 21 Apr 2008 10:10:36 -0400" -->
<!-- isosent="20080421141036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memchecker: breaks trunk again" -->
<!-- id="C54BF08A-5634-4ECC-8B35-ADCEE8793D26_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C431F817.D2A1%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 10:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
<li><strong>Previous message:</strong> <a href="3728.php">Ralph H Castain: "[OMPI devel] Vprotocol build problem"</a>
<li><strong>In reply to:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3731.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3731.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I do not have this problem on OS X (where I do not have Valgrind  
<br>
installed) as of this morning's trunk.  configure correctly determines  
<br>
that valgrind is not present and therefore continues on:
<br>
<p>--- MCA component memchecker:valgrind (m4 configuration macro)
<br>
checking for MCA component memchecker:valgrind compile mode... static
<br>
checking if MCA component memchecker:valgrind can compile... no
<br>
<p>...etc.
<br>
<p>Note that your message indicates that configure thinks that valgrind  
<br>
support was explicitly requested.  In this case, configure thinks,  
<br>
&quot;you explicitly requested it, I cannot provide it, so I should abort  
<br>
rather than give unexpected results.&quot;
<br>
<p>Can you send your full configure output and config.log?
<br>
<p><p>On Apr 21, 2008, at 9:51 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; As an FYI for anyone similarly afflicted:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only solution I have found is to gut the file
</span><br>
<span class="quotelev1">&gt; opal/mca/memchecker/valgrind/configure.m4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # MCA_memchecker_valgrind_CONFIG([action-if-found], [action-if-not- 
</span><br>
<span class="quotelev1">&gt; found])
</span><br>
<span class="quotelev1">&gt; # -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([MCA_memchecker_valgrind_CONFIG],[
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        happy=0                      # none_needed
</span><br>
<span class="quotelev1">&gt;        happy_value=0                # none_needed
</span><br>
<span class="quotelev1">&gt;        memchecker_valgrind_happy=0  # This should suffice to get rid  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;        should_build=2
</span><br>
<span class="quotelev1">&gt;        want_component=0
</span><br>
<span class="quotelev1">&gt; ])dnl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nothing else will allow you to build unless you have the valgrind  
</span><br>
<span class="quotelev1">&gt; headers
</span><br>
<span class="quotelev1">&gt; installed on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/21/08 7:28 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am finding that the memchecker code is again breaking the trunk,
</span><br>
<span class="quotelev2">&gt;&gt; specifically on any machine that does not have valgrind installed.
</span><br>
<span class="quotelev2">&gt;&gt; Apparently, memchecker now forces a requirement for valgrind?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is what I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- MCA component memchecker:valgrind (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt; checking for MCA component memchecker:valgrind compile mode... static
</span><br>
<span class="quotelev2">&gt;&gt; checking checking for the valgrind include directory ... none needed
</span><br>
<span class="quotelev2">&gt;&gt; checking valgrind/valgrind.h usability... no
</span><br>
<span class="quotelev2">&gt;&gt; checking valgrind/valgrind.h presence... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for valgrind/valgrind.h... no
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Could not find valgrind header files, as  
</span><br>
<span class="quotelev2">&gt;&gt; valgrind
</span><br>
<span class="quotelev2">&gt;&gt; support was requested
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could somebody please fix this? I thought we had decided many moons  
</span><br>
<span class="quotelev2">&gt;&gt; ago that
</span><br>
<span class="quotelev2">&gt;&gt; we would not require specific debuggers in default build  
</span><br>
<span class="quotelev2">&gt;&gt; configurations - I
</span><br>
<span class="quotelev2">&gt;&gt; am somewhat surprised, therefore, to find that memchecker is &quot;on&quot; by
</span><br>
<span class="quotelev2">&gt;&gt; default, and now requires valgrind!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried --disable-memchecker, but nothing will allow me to get  
</span><br>
<span class="quotelev2">&gt;&gt; past
</span><br>
<span class="quotelev2">&gt;&gt; this error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
<li><strong>Previous message:</strong> <a href="3728.php">Ralph H Castain: "[OMPI devel] Vprotocol build problem"</a>
<li><strong>In reply to:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3731.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3731.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
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
