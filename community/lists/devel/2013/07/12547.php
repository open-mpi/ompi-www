<?
$subject_val = "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 15:09:31 2013" -->
<!-- isoreceived="20130708190931" -->
<!-- sent="Mon, 8 Jul 2013 19:09:25 +0000" -->
<!-- isosent="20130708190925" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F3DA8_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHYyVz6nHOwokQ5tTTDTXoBDPTV17GHiHp953ix9yz3DY2gU7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 15:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12548.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12546.php">Vasiliy: "[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12546.php">Vasiliy: "[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12564.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12564.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not enough information to know what is going wrong with the debugger library -- all you pasted was a link failure with no surrounding context...
<br>
<p>Don't forget that we officially dropped Windows support in v1.7.  Cygwin supposedly works, but we're not testing it, so I wouldn't be surprised if there's bit rot in there.
<br>
<p>Are you the same Vasily from Mellanox?  If so, are you saying that Mellanox is working to support Open MPI under Cygwin?
<br>
<p><p><p>On Jul 8, 2013, at 3:00 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I haven't checked that yet, however, from my experience, creating a
</span><br>
<span class="quotelev1">&gt; shared library manually from the same compiled objects never was a
</span><br>
<span class="quotelev1">&gt; problem at a later stage, it's usually because of Makefile's
</span><br>
<span class="quotelev1">&gt; inconsistent dependencies ordering:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -srvmo
</span><br>
<span class="quotelev1">&gt; CYGWIN_NT-6.1 1.7.21(0.267/5/3) 2013-06-28 10:03 x86_64 Cygwin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt; Making all in debuggers
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt;  CC       libdebuggers_la-ompi_debuggers.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     libdebuggers.la
</span><br>
<span class="quotelev1">&gt;  CC       ompi_debugger_canary.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     libompi_debugger_canary.la
</span><br>
<span class="quotelev1">&gt;  CC       libompi_dbg_msgq_la-ompi_msgq_dll.lo
</span><br>
<span class="quotelev1">&gt;  CC       libompi_dbg_msgq_la-ompi_common_dll.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     libompi_dbg_msgq.la
</span><br>
<span class="quotelev1">&gt; libtool: warning: undefined symbols not allowed in
</span><br>
<span class="quotelev1">&gt; x86_64-unknown-cygwin shared libraries
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; &lt;/code&gt;
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12548.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12546.php">Vasiliy: "[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12546.php">Vasiliy: "[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12564.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12564.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
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
