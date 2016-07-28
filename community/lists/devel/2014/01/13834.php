<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 23:49:26 2014" -->
<!-- isoreceived="20140122044926" -->
<!-- sent="Tue, 21 Jan 2014 20:49:23 -0800" -->
<!-- isosent="20140122044923" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="CAAvDA14=H3B3KOLqX=g-aZ-MQysh9Czy7PudZXipb1FbtkPW_w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D23744A7-EF59-46AF-AA78-947903D2A67F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 23:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13835.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Previous message:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Looks like we may be getting closer, but are not quite there:
<br>
<p>&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
<p>&nbsp;&nbsp;&nbsp;BIND(C, name=&quot;ompi_type_create_hindexed_block_f&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf95-1690 pathf95: ERROR OMPI_TYPE_CREATE_HINDEXED_BLOCK_F, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30361/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h,
<br>
Line = 605, Column = 17
<br>
&nbsp;&nbsp;NAME= specifier in BIND clause requires scalar character constant
<br>
<p>pathf95-1044 pathf95: INTERNAL OMPI_COMM_CREATE_KEYVAL_F, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30361/ompi/mpi/fortran/use-mpi-f08/mpi-f-interfaces-bind.h,
<br>
Line = 1242, Column = 38
<br>
&nbsp;&nbsp;Internal : Unexpected ATP_PGM_UNIT in check_interoperable_pgm_unit()
<br>
make[2]: *** [mpi-f08.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/global/scratch2/sd/hargrove/OMPI/openmpi-1.7-latest-linux-x86_64-pathcc-4.0/BLD/ompi/mpi/fortran/use-mpi-f08'
<br>
<p>The first error appears likely to be due to the 33-character name for the C
<br>
binding.
<br>
Not sure if that is a limitation allowed by the fortran spec, or an
<br>
arbitrary limitation in this compiler.
<br>
<p>The &quot;Internal&quot; may be a show-stopper (not OMPI's fault), unless it goes
<br>
away once the prior error is resolved.
<br>
<p>-Paul
<br>
<p><p>On Tue, Jan 21, 2014 at 5:05 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I'm glad you did this test; it pulled on a thread which eventually led me
</span><br>
<span class="quotelev1">&gt; to realize that I fix I made on the trunk (and took to v1.7) for gfortran
</span><br>
<span class="quotelev1">&gt; 4.9 was just the Wrong Thing to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've now reverted that fix on trunk/v1.7, which should put us in a good
</span><br>
<span class="quotelev1">&gt; position for pathscale.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It leaves us with a problem for gfortran 4.9, but that's not yet released.
</span><br>
<span class="quotelev1">&gt;  So the plan is to release OMPI 1.7.4 knowing that it will be broken for
</span><br>
<span class="quotelev1">&gt; gfortran 4.9 (which makes an even stronger case for
</span><br>
<span class="quotelev1">&gt; --disable-mpi-fortran-08), and plan to fix it in the 1.7.5 (or 1.8 if we
</span><br>
<span class="quotelev1">&gt; skip 1.7.5) timeframe (which should hopefully be soon).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll work on the --disable-mpi-fortran-08 switch tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2014, at 8:02 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW: PathScale 3.2.99 compilers yield the same complaints.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jan 17, 2014 at 4:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Building the v1.7 tarball (1.7.4rc2r30303) with the PathScale compilers
</span><br>
<span class="quotelev1">&gt; (v4.0.12.1) I hit the errors shown below.  I've attached config.log and
</span><br>
<span class="quotelev1">&gt; configure's stdout.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;We don't care about that compiler&quot; is an acceptable (to me) answer, but
</span><br>
<span class="quotelev1">&gt; I am reporting this for completeness.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   PPFC     mpi-f08-interfaces-callbacks.lo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; module mpi_f08_interfaces_callbacks
</span><br>
<span class="quotelev2">&gt; &gt;        ^
</span><br>
<span class="quotelev2">&gt; &gt; pathf95-855 pathf95: ERROR MPI_F08_INTERFACES_CALLBACKS, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 9, Column = 8
</span><br>
<span class="quotelev2">&gt; &gt;   The compiler has detected errors in module
</span><br>
<span class="quotelev1">&gt; &quot;MPI_F08_INTERFACES_CALLBACKS&quot;.  No module information file will be created
</span><br>
<span class="quotelev1">&gt; for this module.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev2">&gt; &gt; pathf95-1691 pathf95: ERROR MPI_COMM_COPY_ATTR_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 66, Column = 75
</span><br>
<span class="quotelev2">&gt; &gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  ^
</span><br>
<span class="quotelev2">&gt; &gt; pathf95-1691 pathf95: ERROR MPI_WIN_COPY_ATTR_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 89, Column = 74
</span><br>
<span class="quotelev2">&gt; &gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev2">&gt; &gt; pathf95-1691 pathf95: ERROR MPI_TYPE_COPY_ATTR_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 112, Column = 75
</span><br>
<span class="quotelev2">&gt; &gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SUBROUTINE MPI_Grequest_cancel_function(extra_state,complete,ierror)
</span><br>
<span class="quotelev1">&gt; BIND(C)
</span><br>
<span class="quotelev2">&gt; &gt;                                                     ^
</span><br>
<span class="quotelev2">&gt; &gt; pathf95-1691 pathf95: ERROR MPI_GREQUEST_CANCEL_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 184, Column = 53
</span><br>
<span class="quotelev2">&gt; &gt;   For &quot;COMPLETE&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pathf95: PathScale(TM) Fortran Version 4.0.12.1 (f14) Fri Jan 17, 2014
</span><br>
<span class="quotelev1">&gt;  16:32:38
</span><br>
<span class="quotelev2">&gt; &gt; pathf95: 406 source lines
</span><br>
<span class="quotelev2">&gt; &gt; pathf95: 5 Error(s), 0 Warning(s), 0 Other message(s), 0 ANSI(s)
</span><br>
<span class="quotelev2">&gt; &gt; pathf95: &quot;explain pathf95-message number&quot; gives more information about
</span><br>
<span class="quotelev1">&gt; each message
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [mpi-f08-interfaces-callbacks.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/global/scratch2/sd/hargrove/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/BLD/ompi/mpi/fortran/base'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/global/scratch2/sd/hargrove/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/BLD/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13835.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Previous message:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
