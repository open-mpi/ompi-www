<?
$subject_val = "Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 20:59:55 2013" -->
<!-- isoreceived="20130425005955" -->
<!-- sent="Thu, 25 Apr 2013 00:59:50 +0000" -->
<!-- isosent="20130425005950" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LDFLAGS &amp;amp; static compilation &amp;amp; linking" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4404F299_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2E47DDD62F84E4CAF40AFFA65C0843C0270C84E69E8_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 20:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21789.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21787.php">W Spector: "[OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21720.php">Ilias Miroslav: "[OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the huge latency in reply.
<br>
<p>I assume that you know that static linking is not for the meek -- there are many twists and turns and pitfalls (e.g., <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-static-mpi-apps">http://www.open-mpi.org/faq/?category=openfabrics#ib-static-mpi-apps</a>).
<br>
<p>Did you also try --disable-dlopen?  That will disable OMPI's use of libltdl, which will add things like -ldl and friends.
<br>
<p><p><p>On Apr 12, 2013, at 3:53 PM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear experts,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to prepare static installation of OpenMPI 1.6.4 on Scientific Linux 6  (similar thread here <a href="http://www.open-mpi.org/community/lists/users/2012/01/18249.php">http://www.open-mpi.org/community/lists/users/2012/01/18249.php</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I applied configuration commands:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/milias/bin/ompi_intel_static CXX=icpc CC=icc F77=ifort FC=ifort --without-memory-manager LDFLAGS=--static THREAD_LDFLAGS=-Wl,--no-export-dynamic --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/milias/bin/ompi_intel_static CXX=icpc CC=icc F77=ifort FC=ifort --without-memory-manager LDFLAGS=--static  --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but all generated Makefile(s) contain problematic LDFLAGS = -export-dynamic --static. I need  either LDFLAGS=--static or LDFLAGS=--static -Wl,--no-export-dynamic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the Scientific Linux 6 compilation of this short test program, test.c:
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;        return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is crashing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc --static -Wl,--export-dynamic  test.c 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: dynamic STT_GNU_IFUNC symbol `strcmp' with pointer equality in `/usr/lib/gcc/x86_64-redhat-linux/4.4.6/../../../../lib64/libc.a(strcmp.o)' can not be used when making an executable; recompile with -fPIE and relink with -pie
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but &quot;gcc --static test.c&quot; works fine. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the failure due to wrong LDFLAGS, which are too many in Makefile(s) to be fixed by hand:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/milias/bin/openmpi_intel_static/openmpi-1.6.4/opal/util/if.c:1042: warning: Using 'gethostbyname' in statically linked applications requir es at runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(dlopen.o): In function `vm_open':
</span><br>
<span class="quotelev1">&gt; /home/milias/bin/openmpi_intel_static/openmpi-1.6.4/opal/libltdl/loaders/dlopen.c:194: warning: Using 'dlopen' in statically linked applications  requires at runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; ld: dynamic STT_GNU_IFUNC symbol `strcmp' with pointer equality in `/usr/lib/gcc/x86_64-redhat-linux/4.4.6/../../../../lib64/libc.a(strcmp.o)' c an not be used when making an executable; recompile with -fPIE and relink with -pie
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/milias/bin/openmpi_intel_static/openmpi-1.6.4/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/milias/bin/openmpi_intel_static/openmpi-1.6.4/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help on how to purify LDFLAGS ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best, Miro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21789.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21787.php">W Spector: "[OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21720.php">Ilias Miroslav: "[OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
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
