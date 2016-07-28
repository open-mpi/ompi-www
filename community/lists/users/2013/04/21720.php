<?
$subject_val = "[OMPI users] LDFLAGS &amp; static compilation &amp; linking";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 12 15:57:10 2013" -->
<!-- isoreceived="20130412195710" -->
<!-- sent="Fri, 12 Apr 2013 21:53:53 +0200" -->
<!-- isosent="20130412195353" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="[OMPI users] LDFLAGS &amp;amp; static compilation &amp;amp; linking" -->
<!-- id="C2E47DDD62F84E4CAF40AFFA65C0843C0270C84E69E8_at_MAILBOX2.umb.sk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] LDFLAGS &amp; static compilation &amp; linking<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-12 15:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21721.php">John Chludzinski: "[OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21719.php">Rodrigo G&#243;mez V&#225;zquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<li><strong>Reply:</strong> <a href="21788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear experts,
<br>
<p>I would like to prepare static installation of OpenMPI 1.6.4 on Scientific Linux 6  (similar thread here <a href="http://www.open-mpi.org/community/lists/users/2012/01/18249.php">http://www.open-mpi.org/community/lists/users/2012/01/18249.php</a>).
<br>
<p>I applied configuration commands:
<br>
<p>./configure --prefix=/home/milias/bin/ompi_intel_static CXX=icpc CC=icc F77=ifort FC=ifort --without-memory-manager LDFLAGS=--static THREAD_LDFLAGS=-Wl,--no-export-dynamic --disable-shared --enable-static
<br>
<p>and
<br>
<p>./configure --prefix=/home/milias/bin/ompi_intel_static CXX=icpc CC=icc F77=ifort FC=ifort --without-memory-manager LDFLAGS=--static  --disable-shared --enable-static
<br>
<p>but all generated Makefile(s) contain problematic LDFLAGS = -export-dynamic --static. I need  either LDFLAGS=--static or LDFLAGS=--static -Wl,--no-export-dynamic.
<br>
<p>Why ?
<br>
<p>On the Scientific Linux 6 compilation of this short test program, test.c:
<br>
int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>is crashing:
<br>
<p>gcc --static -Wl,--export-dynamic  test.c 
<br>
/usr/bin/ld: dynamic STT_GNU_IFUNC symbol `strcmp' with pointer equality in `/usr/lib/gcc/x86_64-redhat-linux/4.4.6/../../../../lib64/libc.a(strcmp.o)' can not be used when making an executable; recompile with -fPIE and relink with -pie
<br>
collect2: ld returned 1 exit status
<br>
<p>but &quot;gcc --static test.c&quot; works fine. 
<br>
<p>This is the failure due to wrong LDFLAGS, which are too many in Makefile(s) to be fixed by hand:
<br>
<p>/home/milias/bin/openmpi_intel_static/openmpi-1.6.4/opal/util/if.c:1042: warning: Using 'gethostbyname' in statically linked applications requir es at runtime the shared libraries from the glibc version used for linking
<br>
../../../opal/.libs/libopen-pal.a(dlopen.o): In function `vm_open':
<br>
/home/milias/bin/openmpi_intel_static/openmpi-1.6.4/opal/libltdl/loaders/dlopen.c:194: warning: Using 'dlopen' in statically linked applications  requires at runtime the shared libraries from the glibc version used for linking
<br>
ld: dynamic STT_GNU_IFUNC symbol `strcmp' with pointer equality in `/usr/lib/gcc/x86_64-redhat-linux/4.4.6/../../../../lib64/libc.a(strcmp.o)' c an not be used when making an executable; recompile with -fPIE and relink with -pie
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory `/home/milias/bin/openmpi_intel_static/openmpi-1.6.4/opal/tools/wrappers'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/milias/bin/openmpi_intel_static/openmpi-1.6.4/opal'
<br>
make: *** [install-recursive] Error 1
<br>
<p><p>Any help on how to purify LDFLAGS ?
<br>
<p>Best, Miro
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21721.php">John Chludzinski: "[OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21719.php">Rodrigo G&#243;mez V&#225;zquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<li><strong>Reply:</strong> <a href="21788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
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
