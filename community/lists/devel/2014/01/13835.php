<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 23:54:25 2014" -->
<!-- isoreceived="20140122045425" -->
<!-- sent="Tue, 21 Jan 2014 20:54:23 -0800" -->
<!-- isosent="20140122045423" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64" -->
<!-- id="CAAvDA16vFdOF0sysE9pi6O1wHk=S_acgdMQkFHHFp6UD49rmEA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FB6328EF-577F-4D64-ACFB-F8B2E1260835_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 23:54:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13836.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Not surprisingly (given their common ancestry), the Open64 fortran compiler
<br>
is now failing with essentially the same errors as I reported for
<br>
PathScale-4.0 a few minutes ago.
<br>
<p>&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
<p>&nbsp;&nbsp;&nbsp;use :: mpi_f08_types, only : MPI_ADDRESS_KIND
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
openf95-1690 openf90: ERROR OMPI_TYPE_CREATE_HINDEXED_BLOCK_F, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-open64/openmpi-1.7.4rc2r30361/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h,
<br>
Line = 606, Column = 17
<br>
&nbsp;&nbsp;NAME= specifier in BIND clause requires scalar character constant
<br>
<p>openf95-1044 openf90: INTERNAL OMPI_COMM_CREATE_KEYVAL_F, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-open64/openmpi-1.7.4rc2r30361/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h,
<br>
Line = 1243, Column = 38
<br>
&nbsp;&nbsp;Internal : Unexpected ATP_PGM_UNIT in check_interoperable_pgm_unit()
<br>
openf90 INTERNAL ERROR:
<br>
/global/project/projectdirs/ftg/x86_open64-4.5.1/lib/gcc-lib/x86_64-open64-linux/4.5.1/mfef95
<br>
returned non-zero status 1
<br>
make[2]: *** [mpi-f08.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/global/scratch2/sd/hargrove/OMPI/openmpi-1.7-latest-linux-x86_64-open64/BLD/ompi/mpi/fortran/use-mpi-f08'
<br>
<p><p>-Paul
<br>
<p><p><p>On Tue, Jan 21, 2014 at 1:55 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry, due to craziness and the holiday yesterday, the amended Fortran
</span><br>
<span class="quotelev1">&gt; BIND(C) checks didn't get committed to the v1.7 branch until earlier today.
</span><br>
<span class="quotelev1">&gt;  So they'll be in tonight's tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks to me like the Open64 compilers won't pass the BIND(C) checks,
</span><br>
<span class="quotelev1">&gt; and we should be ok.  Can you verify tonight?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for adding --disable-mpi-fortran-08... maybe.  I'd still prefer the
</span><br>
<span class="quotelev1">&gt; configure script to just Do The Right Thing.  But I see your point for
</span><br>
<span class="quotelev1">&gt; handling the one-off cases where it doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2014, at 7:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Building the v1.7 tarball (1.7.4rc2r30303) with AMD's Open64 compilers
</span><br>
<span class="quotelev1">&gt; (v4.5.2) I hit the errors shown in the attached make.log (too long to
</span><br>
<span class="quotelev1">&gt; cut-and-paste).
</span><br>
<span class="quotelev2">&gt; &gt; I've also attached config.log and configure's stdout.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;We don't care about that compiler&quot; is an acceptable (to me) answer, but
</span><br>
<span class="quotelev1">&gt; I am reporting this for completeness.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff may need to do more work on the configure probes for F08 support.
</span><br>
<span class="quotelev2">&gt; &gt; OR, why not provide --disable-mpi-f08 ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;configure.stdout.bz2&gt;&lt;config.log.bz2&gt;&lt;make.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13836.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
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
