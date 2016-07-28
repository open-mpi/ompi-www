<?
$subject_val = "[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 15:00:14 2013" -->
<!-- isoreceived="20130708190014" -->
<!-- sent="Mon, 8 Jul 2013 21:00:10 +0200" -->
<!-- isosent="20130708190010" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries" -->
<!-- id="CAHYyVz6nHOwokQ5tTTDTXoBDPTV17GHiHp953ix9yz3DY2gU7A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 15:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12545.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12548.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't checked that yet, however, from my experience, creating a
<br>
shared library manually from the same compiled objects never was a
<br>
problem at a later stage, it's usually because of Makefile's
<br>
inconsistent dependencies ordering:
<br>
<p>$ uname -srvmo
<br>
CYGWIN_NT-6.1 1.7.21(0.267/5/3) 2013-06-28 10:03 x86_64 Cygwin
<br>
<p>&lt;code&gt;
<br>
Making all in debuggers
<br>
make[2]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/debuggers'
<br>
&nbsp;&nbsp;CC       libdebuggers_la-ompi_debuggers.lo
<br>
&nbsp;&nbsp;CCLD     libdebuggers.la
<br>
&nbsp;&nbsp;CC       ompi_debugger_canary.lo
<br>
&nbsp;&nbsp;CCLD     libompi_debugger_canary.la
<br>
&nbsp;&nbsp;CC       libompi_dbg_msgq_la-ompi_msgq_dll.lo
<br>
&nbsp;&nbsp;CC       libompi_dbg_msgq_la-ompi_common_dll.lo
<br>
&nbsp;&nbsp;CCLD     libompi_dbg_msgq.la
<br>
libtool: warning: undefined symbols not allowed in
<br>
x86_64-unknown-cygwin shared libraries
<br>
make[2]: Leaving directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/debuggers'
<br>
&lt;/code&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12545.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12547.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Reply:</strong> <a href="12548.php">marco atzeri: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
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
