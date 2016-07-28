<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  1 16:56:34 2005" -->
<!-- isoreceived="20050801215634" -->
<!-- sent="Mon, 1 Aug 2005 15:56:50 -0600" -->
<!-- isosent="20050801215650" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re:  os x build" -->
<!-- id="B99EFAA0-9B97-4081-8B73-A84863021C94_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47AF9CAF-AD55-4568-88AE-684047057EA7_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-01 16:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0062.php">Torsten Hoefler: "Broken --enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="../../2005/07/0060.php">Greg Watson: "os x build"</a>
<li><strong>In reply to:</strong> <a href="../../2005/07/0060.php">Greg Watson: "os x build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
<li><strong>Reply:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Further this email. It appears that libtool now uses the shell  
<br>
variable _S_ as a line separator instead of the ~ character.  
<br>
Unfortunately _S_ never gets set on OS X, hence breaking libtool.
<br>
<p>Greg
<br>
<p>On Jul 31, 2005, at 9:10 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Anyone having this problem with the latest build:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in libltdl
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --mode=link --tag=CC gcc  -g -Wall -Wundef -Wno-
</span><br>
<span class="quotelev1">&gt; long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -
</span><br>
<span class="quotelev1">&gt; Wcomment -pedantic -Wno-long-double -Werror-implicit-function-
</span><br>
<span class="quotelev1">&gt; declaration -fno-strict-aliasing   -export-dynamic   -o libasm.la
</span><br>
<span class="quotelev1">&gt; asm.lo atomic-asm.lo  -lm
</span><br>
<span class="quotelev1">&gt; rm -fr  .libs/libasm.a
</span><br>
<span class="quotelev1">&gt; ar cru .libs/libasm.a  asm.o atomic-asm.o~ranlib .libs/libasm.a
</span><br>
<span class="quotelev1">&gt; ar: atomic-asm.o~ranlib: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libasm.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something seems to have broken the libtool script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0062.php">Torsten Hoefler: "Broken --enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="../../2005/07/0060.php">Greg Watson: "os x build"</a>
<li><strong>In reply to:</strong> <a href="../../2005/07/0060.php">Greg Watson: "os x build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
<li><strong>Reply:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
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
