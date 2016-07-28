<?
$subject_val = "Re: [OMPI users] libtool compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 16:41:27 2010" -->
<!-- isoreceived="20100208214127" -->
<!-- sent="Mon, 8 Feb 2010 16:41:21 -0500" -->
<!-- isosent="20100208214121" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libtool compile error" -->
<!-- id="6A0AD517-3260-4053-8324-54B0D0A24F9C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4226a8f1002060749r35abdbf9i3966b588120939d5_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 16:41:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12052.php">Jeff Squyres: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<li><strong>Previous message:</strong> <a href="12050.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>In reply to:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You shouldn't need to do this in a tarball build.
<br>
<p>Did you run autogen manually, or did you just untar the OMPI tarball and just configure / make?
<br>
<p><p>On Feb 6, 2010, at 10:49 AM, Caciano Machado wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can solve this installing libtool 2.2.6b and running autogen.sh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Caciano Machado
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 4, 2010 at 8:25 PM, Peter C. Lichtner &lt;lichtner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to compile openmpi-1.4.1 on MacOSX 10.5.8 using Absoft Fortran
</span><br>
<span class="quotelev2">&gt; &gt; 90 11.0 and gcc --version i686-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple
</span><br>
<span class="quotelev2">&gt; &gt; Inc. build 5493). I get the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making all in mca/io/romio
</span><br>
<span class="quotelev2">&gt; &gt; Making all in romio
</span><br>
<span class="quotelev2">&gt; &gt; Making all in include
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: Nothing to be done for `all'.
</span><br>
<span class="quotelev2">&gt; &gt; Making all in adio
</span><br>
<span class="quotelev2">&gt; &gt; Making all in common
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt; &gt; -I../../adio/include  -DOMPI_BUILDING=1
</span><br>
<span class="quotelev2">&gt; &gt; -I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/../../../../..
</span><br>
<span class="quotelev2">&gt; &gt; -I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/../../../../../opal/include
</span><br>
<span class="quotelev2">&gt; &gt; -I../../../../../../../opal/include -I../../../../../../../ompi/include
</span><br>
<span class="quotelev2">&gt; &gt; -I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/include
</span><br>
<span class="quotelev2">&gt; &gt; -I/Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/adio/include
</span><br>
<span class="quotelev2">&gt; &gt; -D_REENTRANT  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt; &gt; -DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H  -I../../include -MT ad_aggregate.lo
</span><br>
<span class="quotelev2">&gt; &gt; -MD -MP -MF .deps/ad_aggregate.Tpo -c -o ad_aggregate.lo ad_aggregate.c
</span><br>
<span class="quotelev2">&gt; &gt; ../../libtool: line 460: CDPATH: command not found
</span><br>
<span class="quotelev2">&gt; &gt; /Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/libtool: line
</span><br>
<span class="quotelev2">&gt; &gt; 460: CDPATH: command not found
</span><br>
<span class="quotelev2">&gt; &gt; /Users/lichtner/petsc/openmpi-1.4.1/ompi/mca/io/romio/romio/libtool: line
</span><br>
<span class="quotelev2">&gt; &gt; 1138: func_opt_split: command not found
</span><br>
<span class="quotelev2">&gt; &gt; libtool: Version mismatch error.  This is libtool 2.2.6b, but the
</span><br>
<span class="quotelev2">&gt; &gt; libtool: definition of this LT_INIT comes from an older release.
</span><br>
<span class="quotelev2">&gt; &gt; libtool: You should recreate aclocal.m4 with macros from libtool 2.2.6b
</span><br>
<span class="quotelev2">&gt; &gt; libtool: and run autoconf again.
</span><br>
<span class="quotelev2">&gt; &gt; make[5]: *** [ad_aggregate.lo] Error 63
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; ...Peter
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12052.php">Jeff Squyres: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<li><strong>Previous message:</strong> <a href="12050.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>In reply to:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
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
