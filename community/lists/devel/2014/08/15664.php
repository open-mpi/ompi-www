<?
$subject_val = "Re: [OMPI devel] OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 08:40:16 2014" -->
<!-- isoreceived="20140819124016" -->
<!-- sent="Tue, 19 Aug 2014 21:39:49 +0900" -->
<!-- isosent="20140819123949" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers" -->
<!-- id="urfmwlyb17ya3at8dvffyvap.1408451989229_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-19 08:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15665.php">Ralph Castain: "[OMPI devel] v1.8.2 release delayed one week"</a>
<li><strong>Previous message:</strong> <a href="15663.php">George Bosilca: "Re: [OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r32551 now detects this limitation and automatically disable oshmem profile. I am now revamping the patch for v1.8
<br>
<p>Gilles
<br>
<p>Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;In the case of PGI compilers prior to 13, a workaround is to configure with --disable-oshmem-profile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2014/08/18 16:21, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Josh, Paul, the problem with old PGI compilers comes from the preprocessor (!) with pgi 12.10 : oshmem/shmem/fortran/start_pes_f.c SHMEM_GENERATE_WEAK_BINDINGS(START_PES, start_pes) gets expanded as #pragma weak START_PES = PSTART_PES SHMEM_GENERATE_WEAK_PRAGMA ( weak start_pes_ = pstart_pes_ ) whereas with pgi 14.7, it gets expanded as #pragma weak START_PES = PSTART_PES #pragma weak start_pes_ = pstart_pes_ #pragma weak start_pes__ = pstart_pes__ from oshmem/shmem/fortran/profile/pbindings.h : #define SHMEM_GENERATE_WEAK_PRAGMA(x) _Pragma(#x) #define SHMEM_GENERATE_WEAK_BINDINGS(UPPER_NAME, lower_name) \ SHMEM_GENERATE_WEAK_PRAGMA(weak UPPER_NAME = P ## UPPER_NAME) \ SHMEM_GENERATE_WEAK_PRAGMA(weak lower_name ## _ = p ## lower_name ## _) \ SHMEM_GENERATE_WEAK_PRAGMA(weak lower_name ## __ = p ## lower_name ## __) a workaround is to manually expand the SHMEM_GENERATE_WEAK_BINDINGS macro and replace SHMEM_GENERATE_WEAK_BINDINGS(START_PES, start_pes) with SHMEM_GENERATE_WEAK_PRAGMA(weak START_PES = PSTART_PES) SHMEM_GENERATE_WEAK_PRAGMA(weak start_pes_ = pstart_pes_) SHMEM_GENERATE_WEAK_PRAGMA(weak start_pes__ = pstart_pes__) /* i was unable to get something that works by simply replacing the definition of the SHMEM_GENERATE_WEAK_BINDINGS macro */ of course, this would have to be repeated in all the source files ... Cheers, Gilles On 2014/08/15 3:44, Paul Hargrove wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Josh, The specific compilers that caused the most problems are the older PGI compilers (any before 13.x). In this case the user has the option to update their compiler to 13.10 or newer. There are also issues with IBM's xlf. For the IBM compiler I have never found a version that builds/links the MPI f08 bindings, and now also find no version that can link the OSHMEM fortran bindings. -Paul -Paul On Thu, Aug 14, 2014 at 11:30 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We will update the README accordingly. Thank you, Paul. Josh On Thu, Aug 14, 2014 at 10:00 AM, Jeff Squyres (jsquyres) &lt; jsquyres_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Good points. Mellanox -- can you update per Paul's suggestions? On Aug 13, 2014, at 8:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The following is NOT a bug report. This is just an observation that may deserve some text in the README. I've reported issues in the past with some Fortran compilers (mostly 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;older XLC and PGI) which either cannot build the &quot;use mpi_f08&quot; module, or cannot correctly link to it (and sometimes this fails only if configured with --enable-debug). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Testing the OSHMEM Fortran bindings (enabled by default on Linux) I 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;have found several compilers which fail to link the examples (hello_oshmemfh and ring_oshmemfh). I reported one specific instance (with xlc-11/xlf-13) back in February: <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14057.php">http://www.open-mpi.org/community/lists/devel/2014/02/14057.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So far I have these failures only on platforms where the Fortran 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;compiler is *known* to be broken for the MPI f90 and/or f08 bindings. Specifically, all the failing platforms are ones on which either: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;+ Configure determines (without my help) that FC cannot build the F90 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and/or F08 modules. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;OR + I must pass --enable-mpi-fortran=usempi or --enable-mpi-fortran=mpifh 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;for cases configure cannot detect. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So, I do *not* believe there is anything wrong with the OSHMEM code, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;which is why I started this post with &quot;The following is NOT a bug report&quot;. However, I have two recommendations to make: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1) Documentation The README says just: --disable-oshmem-fortran Disable building only the Fortran OSHMEM bindings. So, I recommend adding a sentence there referencing the &quot;Compiler 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Notes&quot; section of the README which has details on some known bad Fortran compilers. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2) Configure: As I noted above, at least some of the failures are on platforms where 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;configure has determined it cannot build the f08 MPI bindings. So, maybe there is something that could be done at configure time to disqualify some Fortran compilers from building the OSHMEM fotran bindings, too. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Paul -- Paul H. Hargrove PHHargrove_at_[hidden] Future Technologies Group Computer and Data Sciences Department Tel: +1-510-495-2352 Lawrence Berkeley National Laboratory Fax: +1-510-486-6900 _______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/devel/2014/08/15643.php">http://www.open-mpi.org/community/lists/devel/2014/08/15643.php</a> -- Jeff Squyres jsquyres_at_[hidden] For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> _______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15650.php">http://www.open-mpi.org/community/lists/devel/2014/08/15650.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15653.php">http://www.open-mpi.org/community/lists/devel/2014/08/15653.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15654.php">http://www.open-mpi.org/community/lists/devel/2014/08/15654.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15661.php">http://www.open-mpi.org/community/lists/devel/2014/08/15661.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15664/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15665.php">Ralph Castain: "[OMPI devel] v1.8.2 release delayed one week"</a>
<li><strong>Previous message:</strong> <a href="15663.php">George Bosilca: "Re: [OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
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
