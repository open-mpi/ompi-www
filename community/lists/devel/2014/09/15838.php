<?
$subject_val = "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 10:36:24 2014" -->
<!-- isoreceived="20140916143624" -->
<!-- sent="Tue, 16 Sep 2014 23:36:19 +0900" -->
<!-- isosent="20140916143619" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration" -->
<!-- id="OFE2FC4E8B.17035BEC-ON49257D55.003AC3A4-49257D55.00503F3A_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5403F44C.8010004_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20oshmem-openmpi-1.8.2%20causes%20compile%20error%20with%20-i8(64bit%20fortarn%20integer)%20configuration"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-09-16 10:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15839.php">Jeff Squyres (jsquyres): "[OMPI devel] CONVERSION TO GITHUB"</a>
<li><strong>Previous message:</strong> <a href="15837.php">Artem Polyakov: "[OMPI devel] OPAL timing framework"</a>
<li><strong>In reply to:</strong> <a href="15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15846.php">Ralph Castain: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Reply:</strong> <a href="15846.php">Ralph Castain: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>Your patch looks good to me and I think this issue should be fixed
<br>
in the upcoming openmpi-1.8.3. Could you commit it to the trunk and
<br>
create a CMR for it?
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; Mishima-san,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the root cause is macro expansion does not always occur as one would
</span><br>
<span class="quotelev1">&gt; have expected ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please give a try to the attached patch ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it compiles (at least with gcc) and i made zero tests so far ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/09/01 10:44, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to build openmpi-1.8.2 with PGI fortran and -i8(64bit fortran
</span><br>
int)
<br>
<span class="quotelev2">&gt; &gt; option
</span><br>
<span class="quotelev2">&gt; &gt; as shown below:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure \
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/home/mishima/opt/mpi/openmpi-1.8.2-pgi14.7_int64 \
</span><br>
<span class="quotelev2">&gt; &gt; --enable-abi-breaking-fortran-status-i8-fix \
</span><br>
<span class="quotelev2">&gt; &gt; --with-tm \
</span><br>
<span class="quotelev2">&gt; &gt; --with-verbs \
</span><br>
<span class="quotelev2">&gt; &gt; --disable-ipv6 \
</span><br>
<span class="quotelev2">&gt; &gt; CC=pgcc CFLAGS=&quot;-tp k8-64e -fast&quot; \
</span><br>
<span class="quotelev2">&gt; &gt; CXX=pgCC CXXFLAGS=&quot;-tp k8-64e -fast&quot; \
</span><br>
<span class="quotelev2">&gt; &gt; F77=pgfortran FFLAGS=&quot;-i8 -tp k8-64e -fast&quot; \
</span><br>
<span class="quotelev2">&gt; &gt; FC=pgfortran FCFLAGS=&quot;-i8 -tp k8-64e -fast&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then I saw this compile error in making oshmem at the last stage:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if test ! -r pshmem_real8_swap_f.c ; then \
</span><br>
<span class="quotelev2">&gt; &gt;                 pname=`echo pshmem_real8_swap_f.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev2">&gt; &gt;                 ln -s ../../../../oshmem/shmem/fortran/$pname
</span><br>
<span class="quotelev2">&gt; &gt; pshmem_real8_swap_f.c ; \
</span><br>
<span class="quotelev2">&gt; &gt;         fi
</span><br>
<span class="quotelev2">&gt; &gt;   CC       pshmem_real8_swap_f.lo
</span><br>
<span class="quotelev2">&gt; &gt; if test ! -r pshmem_int4_cswap_f.c ; then \
</span><br>
<span class="quotelev2">&gt; &gt;                 pname=`echo pshmem_int4_cswap_f.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev2">&gt; &gt;                 ln -s ../../../../oshmem/shmem/fortran/$pname
</span><br>
<span class="quotelev2">&gt; &gt; pshmem_int4_cswap_f.c ; \
</span><br>
<span class="quotelev2">&gt; &gt;         fi
</span><br>
<span class="quotelev2">&gt; &gt;   CC       pshmem_int4_cswap_f.lo
</span><br>
<span class="quotelev2">&gt; &gt; PGC-S-0058-Illegal lvalue (pshmem_int4_cswap_f.c: 39)
</span><br>
<span class="quotelev2">&gt; &gt; PGC/x86-64 Linux 14.7-0: compilation completed with severe errors
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [pshmem_int4_cswap_f.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
`/home/mishima/mis/openmpi/openmpi-pgi14.7/int64/openmpi-1.8.2/oshmem/shmem/fortran/profile'
<br>
<p><span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
`/home/mishima/mis/openmpi/openmpi-pgi14.7/int64/openmpi-1.8.2/oshmem/shmem/fortran'
<br>
<p><span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/home/mishima/mis/openmpi/openmpi-pgi14.7/int64/openmpi-1.8.2/oshmem'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I confirmed that it worked if I added configure option of
</span><br>
--disable-oshmem.
<br>
<span class="quotelev2">&gt; &gt; So, I hope that oshmem experts would fix this problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (additional note)
</span><br>
<span class="quotelev2">&gt; &gt; I switched to use gnu compiler and checked with this configuration,
</span><br>
then
<br>
<span class="quotelev2">&gt; &gt; I got the same error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure \
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/home/mishima/opt/mpi/openmpi-1.8.2-gnu_int64 \
</span><br>
<span class="quotelev2">&gt; &gt; --enable-abi-breaking-fortran-status-i8-fix \
</span><br>
<span class="quotelev2">&gt; &gt; --disable-ipv6 \
</span><br>
<span class="quotelev2">&gt; &gt; F77=gfortran \
</span><br>
<span class="quotelev2">&gt; &gt; FC=gfortran \
</span><br>
<span class="quotelev2">&gt; &gt; CC=gcc \
</span><br>
<span class="quotelev2">&gt; &gt; CXX=g++ \
</span><br>
<span class="quotelev2">&gt; &gt; FFLAGS=&quot;-m64 -fdefault-integer-8&quot; \
</span><br>
<span class="quotelev2">&gt; &gt; FCFLAGS=&quot;-m64 -fdefault-integer-8&quot; \
</span><br>
<span class="quotelev2">&gt; &gt; CFLAGS=-m64 \
</span><br>
<span class="quotelev2">&gt; &gt; CXXFLAGS=-m64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt; ....
</span><br>
<span class="quotelev2">&gt; &gt; if test ! -r pshmem_int4_cswap_f.c ; then \
</span><br>
<span class="quotelev2">&gt; &gt;                 pname=`echo pshmem_int4_cswap_f.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev2">&gt; &gt;                 ln -s ../../../../oshmem/shmem/fortran/$pname
</span><br>
<span class="quotelev2">&gt; &gt; pshmem_int4_cswap_f.c ; \
</span><br>
<span class="quotelev2">&gt; &gt;         fi
</span><br>
<span class="quotelev2">&gt; &gt;   CC       pshmem_int4_cswap_f.lo
</span><br>
<span class="quotelev2">&gt; &gt; pshmem_int4_cswap_f.c: In function 'shmem_int4_cswap_f':
</span><br>
<span class="quotelev2">&gt; &gt; pshmem_int4_cswap_f.c:39: error: invalid lvalue in unary '&amp;'
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [pshmem_int4_cswap_f.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/08/15764.php">http://www.open-mpi.org/community/lists/devel/2014/08/15764.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - oshmem.i8.patch_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription:
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/develSearchable">http://www.open-mpi.org/mailman/listinfo.cgi/develSearchable</a> archives:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/09/index.php">http://www.open-mpi.org/community/lists/devel/2014/09/index.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15839.php">Jeff Squyres (jsquyres): "[OMPI devel] CONVERSION TO GITHUB"</a>
<li><strong>Previous message:</strong> <a href="15837.php">Artem Polyakov: "[OMPI devel] OPAL timing framework"</a>
<li><strong>In reply to:</strong> <a href="15765.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15846.php">Ralph Castain: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Reply:</strong> <a href="15846.php">Ralph Castain: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
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
