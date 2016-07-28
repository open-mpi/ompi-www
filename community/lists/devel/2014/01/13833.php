<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 20:05:10 2014" -->
<!-- isoreceived="20140122010510" -->
<!-- sent="Wed, 22 Jan 2014 01:05:08 +0000" -->
<!-- isosent="20140122010508" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="D23744A7-EF59-46AF-AA78-947903D2A67F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15Qfi8qTgzLLMdB+ShDA1X0fVegZLnpVmSU7Wnx7RAAhg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 20:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13832.php">Ralph Castain: "[OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm glad you did this test; it pulled on a thread which eventually led me to realize that I fix I made on the trunk (and took to v1.7) for gfortran 4.9 was just the Wrong Thing to do.
<br>
<p>I've now reverted that fix on trunk/v1.7, which should put us in a good position for pathscale.
<br>
<p>It leaves us with a problem for gfortran 4.9, but that's not yet released.  So the plan is to release OMPI 1.7.4 knowing that it will be broken for gfortran 4.9 (which makes an even stronger case for --disable-mpi-fortran-08), and plan to fix it in the 1.7.5 (or 1.8 if we skip 1.7.5) timeframe (which should hopefully be soon).
<br>
<p>I'll work on the --disable-mpi-fortran-08 switch tomorrow.
<br>
<p><p>On Jan 17, 2014, at 8:02 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: PathScale 3.2.99 compilers yield the same complaints.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 17, 2014 at 4:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Building the v1.7 tarball (1.7.4rc2r30303) with the PathScale compilers (v4.0.12.1) I hit the errors shown below.  I've attached config.log and configure's stdout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;We don't care about that compiler&quot; is an acceptable (to me) answer, but I am reporting this for completeness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PPFC     mpi-f08-interfaces-callbacks.lo
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; module mpi_f08_interfaces_callbacks
</span><br>
<span class="quotelev1">&gt;        ^                   
</span><br>
<span class="quotelev1">&gt; pathf95-855 pathf95: ERROR MPI_F08_INTERFACES_CALLBACKS, File = /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90, Line = 9, Column = 8 
</span><br>
<span class="quotelev1">&gt;   The compiler has detected errors in module &quot;MPI_F08_INTERFACES_CALLBACKS&quot;.  No module information file will be created for this module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                        attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
</span><br>
<span class="quotelev1">&gt;                                                                           ^                   
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_COMM_COPY_ATTR_FUNCTION, File = /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90, Line = 66, Column = 75
</span><br>
<span class="quotelev1">&gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                       attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
</span><br>
<span class="quotelev1">&gt;                                                                          ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_WIN_COPY_ATTR_FUNCTION, File = /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90, Line = 89, Column = 74
</span><br>
<span class="quotelev1">&gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                        attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
</span><br>
<span class="quotelev1">&gt;                                                                           ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_TYPE_COPY_ATTR_FUNCTION, File = /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90, Line = 112, Column = 75
</span><br>
<span class="quotelev1">&gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SUBROUTINE MPI_Grequest_cancel_function(extra_state,complete,ierror) BIND(C)
</span><br>
<span class="quotelev1">&gt;                                                     ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_GREQUEST_CANCEL_FUNCTION, File = /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90, Line = 184, Column = 53
</span><br>
<span class="quotelev1">&gt;   For &quot;COMPLETE&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pathf95: PathScale(TM) Fortran Version 4.0.12.1 (f14) Fri Jan 17, 2014  16:32:38
</span><br>
<span class="quotelev1">&gt; pathf95: 406 source lines
</span><br>
<span class="quotelev1">&gt; pathf95: 5 Error(s), 0 Warning(s), 0 Other message(s), 0 ANSI(s)
</span><br>
<span class="quotelev1">&gt; pathf95: &quot;explain pathf95-message number&quot; gives more information about each message
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08-interfaces-callbacks.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/global/scratch2/sd/hargrove/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/BLD/ompi/mpi/fortran/base'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/global/scratch2/sd/hargrove/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/BLD/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13832.php">Ralph Castain: "[OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13834.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
