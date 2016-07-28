<?
$subject_val = "Re: [OMPI users] libtool compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  6 10:49:33 2010" -->
<!-- isoreceived="20100206154933" -->
<!-- sent="Sat, 6 Feb 2010 13:49:28 -0200" -->
<!-- isosent="20100206154928" -->
<!-- name="Caciano Machado" -->
<!-- email="caciano_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libtool compile error" -->
<!-- id="4226a8f1002060749r35abdbf9i3966b588120939d5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45473.130.55.127.2.1265322326.squirrel_at_webmail.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] libtool compile error<br>
<strong>From:</strong> Caciano Machado (<em>caciano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-06 10:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12030.php">Jed Brown: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<li><strong>Previous message:</strong> <a href="12028.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="12012.php">Peter C. Lichtner: "[OMPI users] libtool compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12051.php">Jeff Squyres: "Re: [OMPI users] libtool compile error"</a>
<li><strong>Reply:</strong> <a href="12051.php">Jeff Squyres: "Re: [OMPI users] libtool compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>You can solve this installing libtool 2.2.6b and running autogen.sh.
<br>
<p>Regards,
<br>
Caciano Machado
<br>
<p>On Thu, Feb 4, 2010 at 8:25 PM, Peter C. Lichtner &lt;lichtner_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm trying to compile openmpi-1.4.1 on MacOSX 10.5.8 using Absoft Fortran
</span><br>
<span class="quotelev1">&gt; 90 11.0 and gcc --version i686-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple
</span><br>
<span class="quotelev1">&gt; Inc. build 5493). I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/io/romio
</span><br>
<span class="quotelev1">&gt; Making all in romio
</span><br>
<span class="quotelev1">&gt; Making all in include
</span><br>
<span class="quotelev1">&gt; make[4]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; Making all in adio
</span><br>
<span class="quotelev1">&gt; Making all in common
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC &#160; --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I../../adio/include &#160;-DOMPI_BUILDING=1
</span><br>
<span class="quotelev1">&gt; -I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/../../../../..
</span><br>
<span class="quotelev1">&gt; -I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/../../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../../../opal/include -I../../../../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/include
</span><br>
<span class="quotelev1">&gt; -I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/adio/include
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT &#160;-O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H &#160;-I../../include -MT ad_aggregate.lo
</span><br>
<span class="quotelev1">&gt; -MD -MP -MF .deps/ad_aggregate.Tpo -c -o ad_aggregate.lo ad_aggregate.c
</span><br>
<span class="quotelev1">&gt; ../../libtool: line 460: CDPATH: command not found
</span><br>
<span class="quotelev1">&gt; /Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/libtool: line
</span><br>
<span class="quotelev1">&gt; 460: CDPATH: command not found
</span><br>
<span class="quotelev1">&gt; /Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/libtool: line
</span><br>
<span class="quotelev1">&gt; 1138: func_opt_split: command not found
</span><br>
<span class="quotelev1">&gt; libtool: Version mismatch error. &#160;This is libtool 2.2.6b, but the
</span><br>
<span class="quotelev1">&gt; libtool: definition of this LT_INIT comes from an older release.
</span><br>
<span class="quotelev1">&gt; libtool: You should recreate aclocal.m4 with macros from libtool 2.2.6b
</span><br>
<span class="quotelev1">&gt; libtool: and run autoconf again.
</span><br>
<span class="quotelev1">&gt; make[5]: *** [ad_aggregate.lo] Error 63
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help appreciated.
</span><br>
<span class="quotelev1">&gt; ...Peter
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12030.php">Jed Brown: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<li><strong>Previous message:</strong> <a href="12028.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="12012.php">Peter C. Lichtner: "[OMPI users] libtool compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12051.php">Jeff Squyres: "Re: [OMPI users] libtool compile error"</a>
<li><strong>Reply:</strong> <a href="12051.php">Jeff Squyres: "Re: [OMPI users] libtool compile error"</a>
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
