<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  4 16:17:14 2005" -->
<!-- isoreceived="20050804211714" -->
<!-- sent="Thu, 4 Aug 2005 15:17:08 -0600" -->
<!-- isosent="20050804211708" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re:  os x build" -->
<!-- id="EB9E8170-B457-4DE2-ADC4-06DE0A6F3786_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4b1cfba071c8491c35638986b16cca84_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-04 16:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
<li><strong>In reply to:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just checked out a new version and it seems ok. I don't know what  
<br>
the problem was.
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<p>On Aug 4, 2005, at 1:07 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Greg --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did this get resolved?  Sorry -- this slipped by me in inbox...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2005, at 5:56 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Further this email. It appears that libtool now uses the shell
</span><br>
<span class="quotelev2">&gt;&gt; variable _S_ as a line separator instead of the ~ character.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately _S_ never gets set on OS X, hence breaking libtool.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 31, 2005, at 9:10 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone having this problem with the latest build:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in asm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../libtool --mode=link --tag=CC gcc  -g -Wall -Wundef - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wno-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wcomment -pedantic -Wno-long-double -Werror-implicit-function-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration -fno-strict-aliasing   -export-dynamic   -o libasm.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; asm.lo atomic-asm.lo  -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -fr  .libs/libasm.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ar cru .libs/libasm.a  asm.o atomic-asm.o~ranlib .libs/libasm.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ar: atomic-asm.o~ranlib: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [libasm.la] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Something seems to have broken the libtool script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
<li><strong>In reply to:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
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
