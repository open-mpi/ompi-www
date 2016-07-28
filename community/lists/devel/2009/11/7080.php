<?
$subject_val = "Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 16:17:04 2009" -->
<!-- isoreceived="20091103211704" -->
<!-- sent="Tue, 3 Nov 2009 16:16:59 -0500" -->
<!-- isosent="20091103211659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system" -->
<!-- id="8208F288-56A1-4CD0-9277-24C25C6CA2A1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AEFF468.3020705_at_informatik.tu-cottbus.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 16:16:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7081.php">Jeff Squyres: "[OMPI devel] 1.3.4 blocker"</a>
<li><strong>Previous message:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="7074.php">Christian Bendele: "[OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2009, at 4:14 AM, Christian Bendele wrote:
<br>
<p><span class="quotelev1">&gt; i am trying to compile some kind of 3rd party btl module into my
</span><br>
<span class="quotelev1">&gt; openmpi. I got the 1.3.3 release tarball, and i can now successfully
</span><br>
<span class="quotelev1">&gt; call autogen.sh, configure and build after downgrading autoconf and
</span><br>
<span class="quotelev1">&gt; friends to the exact versions suggested on the hacking site (i had the
</span><br>
<span class="quotelev1">&gt; most recent versions installed before, which would cause make to fail
</span><br>
<span class="quotelev1">&gt; when autogen.sh was called before).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I believe the fixes for that (needing to downgrade) will be in 1.3.4,  
<br>
if you care.  :-)
<br>
<p>The SVN development trunk definitely works with the most recent  
<br>
autotools.
<br>
<p><span class="quotelev1">&gt; The btl module directory I have here contains Makefile.am and
</span><br>
<span class="quotelev1">&gt; Makefile.in whose contents look very similar to those in the mca/btl/ 
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev1">&gt; directory for example. Among other things the Makefile.am contains a
</span><br>
<span class="quotelev1">&gt; automake &quot;if OMPI_BUILD_mybtlmodule_DSO&quot; (looks exactly the same in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; tcp module directory).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Check out this wiki page for making new components in the OMPI tree:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
<br>
<p><span class="quotelev1">&gt; Copying my module directory into ompi/mca/btl and running autogen.sh
</span><br>
<span class="quotelev1">&gt; would just ignore it. I am absolutely lost in all this autoconf and
</span><br>
<span class="quotelev1">&gt; automake build chaos (as it seems to me), but trying to analyse
</span><br>
<span class="quotelev1">&gt; autogen.sh i figured (from the process_framework() function) that a  
</span><br>
<span class="quotelev1">&gt; mca
</span><br>
<span class="quotelev1">&gt; subdir has to contain one of configure.in, configure.params and
</span><br>
<span class="quotelev1">&gt; configure.ac to be recognized. I copied configure.params as it is from
</span><br>
<span class="quotelev1">&gt; the tcp directory, as it seems fitting (containing just one single  
</span><br>
<span class="quotelev1">&gt; line:
</span><br>
<span class="quotelev1">&gt; &quot;PARAM_CONFIG_FILES=&quot;Makefile&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Correct.  Hopefully the wiki pages explains this better than needing  
<br>
to analyze autogen.sh...
<br>
<p><span class="quotelev1">&gt; Now running autogen.sh does indeed recognize the directory  
</span><br>
<span class="quotelev1">&gt; containing my
</span><br>
<span class="quotelev1">&gt; btl module. It fails, however, with the line
</span><br>
<span class="quotelev1">&gt; &quot;ompi/mca/btl/mybtlmodule/Makefile.am:40: OMPI_BUILD_btl_mymodule_DSO
</span><br>
<span class="quotelev1">&gt; does not appear in AM_CONDITIONAL&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I vaguely know what that means, and i was half expecting something  
</span><br>
<span class="quotelev1">&gt; like
</span><br>
<span class="quotelev1">&gt; this, but I can not find where those AM_CONDITIONALs are defined.  
</span><br>
<span class="quotelev1">&gt; Since
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You shouldn't need to define these -- autogen.sh should define all the  
<br>
relevant AM_CONDITIONAL's.
<br>
<p>Check that wiki page and see if it answers your questions.  Ping back  
<br>
here if not.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7081.php">Jeff Squyres: "[OMPI devel] 1.3.4 blocker"</a>
<li><strong>Previous message:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="7074.php">Christian Bendele: "[OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
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
