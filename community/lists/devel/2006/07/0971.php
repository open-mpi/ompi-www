<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 17 16:04:11 2006" -->
<!-- isoreceived="20060717200411" -->
<!-- sent="Mon, 17 Jul 2006 22:05:05 +0200" -->
<!-- isosent="20060717200505" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] Building ompi occasionally touches the source files" -->
<!-- id="20060717200505.GK28805_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-17 16:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0972.php">Christian Kauhaus: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Previous message:</strong> <a href="0970.php">Josh Aune: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0972.php">Christian Kauhaus: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Reply:</strong> <a href="0972.php">Christian Kauhaus: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Reply:</strong> <a href="0976.php">Adrian Knoth: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a bunch of boxes used to test and compile OMPI (we're talking
<br>
about the openmpi-1.1 release).
<br>
<p>Two of them are Debian sarge (current stable), two are
<br>
Debian testing (i386+amd64) and one is Debian unstable (amd64)
<br>
<p>The source is shared via svn, so it's for sure all are using the
<br>
same code.
<br>
<p>I have the following directory layout:
<br>
<p>&nbsp;&nbsp;trunk
<br>
&nbsp;&nbsp;trunk/Makefile
<br>
&nbsp;&nbsp;trunk/src
<br>
&nbsp;&nbsp;trunk/ARCH
<br>
&nbsp;&nbsp;trunk/build/ARCH
<br>
<p>where ARCH is dynamically determined by the Makefile, trunk/src/ contains
<br>
the openmpi-1.1 tarball, trunk/build/ARCH is for building ompi and
<br>
trunk/ARCH is the install directory.
<br>
<p>Everything is fine on the Debian sarge hosts.
<br>
<p>Trouble starts on the Debian testing boxes:
<br>
<p>&nbsp;1. If compiling without my special layout, in other words, just
<br>
&nbsp;&nbsp;&nbsp;&nbsp;untaring, ./configure &amp;&amp; make, everything is fine
<br>
<p>&nbsp;2. If compiling inside my directory layout, the build 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;a) changes the following two files in trunk/src/
<br>
<p>adi_at_ten:~/trunk/src$ svn st
<br>
M      opal/util/show_help_lex.c
<br>
M      opal/util/keyval/keyval_lex.c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;b) fails to complete (see attachment), the errors are all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;related to lex.
<br>
<p>If I chmod -R -w trunk/src/ and call &quot;make&quot;, everything works,
<br>
no build error at all.
<br>
<p><p>And now to the Debian unstable (amd64) box: (I'm not root for
<br>
this machine, so I cannot guarantee for anything.)
<br>
<p>Building without separate builddir works fine, the lex error also
<br>
exists, but I cannot circumvent it with chmod:
<br>
<p>config.status: executing depfiles commands
<br>
config.status: executing pml-direct commands
<br>
config.status: creating ompi/mca/pml/pml_direct_call.h
<br>
rm: cannot remove `/home/adi/trunk/src/opal/util/keyval/keyval_lex.c': Permission denied
<br>
make: *** [/home/adi/trunk/src/opal/util/keyval/keyval_lex.c] Error 1
<br>
<p>I'll attach two files: 
<br>
<p>&nbsp;&nbsp;&nbsp;i386-testing.log.gz   (Debian testing without chmod trick, failing build)
<br>
&nbsp;&nbsp;&nbsp;amd64-unstable.log.gz (Debian unstable with failing chmod trick)
<br>
<p><p>Feel free to ask for more information.
<br>
<p><p><p>TIA
<br>
<p><p>PS: My Makefile sets the following variables to disable autoconf et. al.:
<br>
<p>export ACLOCAL=/bin/true 
<br>
export AMTAR=/bin/true 
<br>
export AUTOCONF=/bin/true
<br>
export AUTOHEADER=/bin/true 
<br>
export AUTOMAKE=/bin/true 
<br>
export MAKEINFO=/bin/true
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Wer andere in die Grube schubst, f&#228;llt selbst nicht rein


</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0971/i386-testing.log.gz">i386-testing.log.gz</a>
</ul>
<!-- attachment="i386-testing.log.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0971/amd64-unstable.log.gz">amd64-unstable.log.gz</a>
</ul>
<!-- attachment="amd64-unstable.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0972.php">Christian Kauhaus: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Previous message:</strong> <a href="0970.php">Josh Aune: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0972.php">Christian Kauhaus: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Reply:</strong> <a href="0972.php">Christian Kauhaus: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Reply:</strong> <a href="0976.php">Adrian Knoth: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
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
