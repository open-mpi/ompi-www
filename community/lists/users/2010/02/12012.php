<?
$subject_val = "[OMPI users] libtool compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 17:25:31 2010" -->
<!-- isoreceived="20100204222531" -->
<!-- sent="Thu, 4 Feb 2010 15:25:26 -0700 (MST)" -->
<!-- isosent="20100204222526" -->
<!-- name="Peter C. Lichtner" -->
<!-- email="lichtner_at_[hidden]" -->
<!-- subject="[OMPI users] libtool compile error" -->
<!-- id="45473.130.55.127.2.1265322326.squirrel_at_webmail.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] libtool compile error<br>
<strong>From:</strong> Peter C. Lichtner (<em>lichtner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 17:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12013.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="12011.php">Barrett, Brian W: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
<li><strong>Reply:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to compile openmpi-1.4.1 on MacOSX 10.5.8 using Absoft Fortran
<br>
90 11.0 and gcc --version i686-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple
<br>
Inc. build 5493). I get the following error:
<br>
<p>make
<br>
...
<br>
<p>Making all in mca/io/romio
<br>
Making all in romio
<br>
Making all in include
<br>
make[4]: Nothing to be done for `all'.
<br>
Making all in adio
<br>
Making all in common
<br>
/bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
<br>
-I../../adio/include  -DOMPI_BUILDING=1
<br>
-I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/../../../../..
<br>
-I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/../../../../../opal/include
<br>
-I../../../../../../../opal/include -I../../../../../../../ompi/include
<br>
-I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/include
<br>
-I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/adio/include
<br>
-D_REENTRANT  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing 
<br>
-DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H  -I../../include -MT ad_aggregate.lo
<br>
-MD -MP -MF .deps/ad_aggregate.Tpo -c -o ad_aggregate.lo ad_aggregate.c
<br>
../../libtool: line 460: CDPATH: command not found
<br>
/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/libtool: line
<br>
460: CDPATH: command not found
<br>
/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/libtool: line
<br>
1138: func_opt_split: command not found
<br>
libtool: Version mismatch error.  This is libtool 2.2.6b, but the
<br>
libtool: definition of this LT_INIT comes from an older release.
<br>
libtool: You should recreate aclocal.m4 with macros from libtool 2.2.6b
<br>
libtool: and run autoconf again.
<br>
make[5]: *** [ad_aggregate.lo] Error 63
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>Any help appreciated.
<br>
...Peter
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12013.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="12011.php">Barrett, Brian W: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
<li><strong>Reply:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
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
