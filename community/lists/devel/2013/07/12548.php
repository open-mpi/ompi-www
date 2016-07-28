<?
$subject_val = "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 15:14:01 2013" -->
<!-- isoreceived="20130708191401" -->
<!-- sent="Mon, 08 Jul 2013 21:13:53 +0200" -->
<!-- isosent="20130708191353" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries" -->
<!-- id="51DB0F71.8050900_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 15:13:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12549.php">Jeff Squyres (jsquyres): "[OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<li><strong>Previous message:</strong> <a href="12547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12546.php">Vasiliy: "[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12566.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12566.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Il 7/8/2013 9:00 PM, Vasiliy ha scritto:
<br>
<span class="quotelev1">&gt; I haven't checked that yet, however, from my experience, creating a
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
<span class="quotelev1">&gt;    CC       libdebuggers_la-ompi_debuggers.lo
</span><br>
<span class="quotelev1">&gt;    CCLD     libdebuggers.la
</span><br>
<span class="quotelev1">&gt;    CC       ompi_debugger_canary.lo
</span><br>
<span class="quotelev1">&gt;    CCLD     libompi_debugger_canary.la
</span><br>
<span class="quotelev1">&gt;    CC       libompi_dbg_msgq_la-ompi_msgq_dll.lo
</span><br>
<span class="quotelev1">&gt;    CC       libompi_dbg_msgq_la-ompi_common_dll.lo
</span><br>
<span class="quotelev1">&gt;    CCLD     libompi_dbg_msgq.la
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
<p><p>Hi Vasiliy
<br>
how do you called configure ?
<br>
<p>I have not tested 1.9 on cygwin 64, but
<br>
1.7.1 cygwin64 package was built with
<br>
<p>configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-Wl,--export-all-symbols -Wl,-no-undefined&quot;  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-sysv-shmem \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt,libompitrace \
<br>
&nbsp;
<br>
--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
<br>
<p><p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12549.php">Jeff Squyres (jsquyres): "[OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<li><strong>Previous message:</strong> <a href="12547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12546.php">Vasiliy: "[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12566.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12566.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
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
