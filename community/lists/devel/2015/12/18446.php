<?
$subject_val = "Re: [OMPI devel] Open MPI v1.10.2rc1 available";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 17:27:00 2015" -->
<!-- isoreceived="20151221222700" -->
<!-- sent="Tue, 22 Dec 2015 07:26:59 +0900" -->
<!-- isosent="20151221222659" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.10.2rc1 available" -->
<!-- id="CAAkFZ5tjXcs9BsKfZs51Cp-dYMe3+PUht8f39N8rp8noRfJ8vg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17SLvyko_bE-5L=WB0Vw=mY=uypFkvHSZ3nS9Ac1LuaKw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v1.10.2rc1 available<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 17:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>In reply to:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Reply:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul and Orion,
<br>
<p>the fix has been merged into v1.10.
<br>
I will issue a separate pr for v2.x since this issue is impacting quite a
<br>
lot of openmpi users
<br>
<p>Sorry for the inconvenience,
<br>
<p>Gilles
<br>
<p>On Tuesday, December 22, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Orion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The FCFLAGS_save issue was been fixed in master over the weekend and the
</span><br>
<span class="quotelev1">&gt; appropriate PRs filed for v1.10 and v2.0 (and may already have been merged).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 21, 2015 at 9:52 AM, Orion Poplawski &lt;orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','orion_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/19/2015 09:35 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello folks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Don&#226;&#128;&#153;t want your holiday to be too boring, so we are also making
</span><br>
<span class="quotelev2">&gt;&gt; available the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.10.2 release candidate for review. We won&#226;&#128;&#153;t release until sometime in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; January, but hopefully some of you will have a chance to test it in the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; meantime. You&#226;&#128;&#153;ll find it in the usual place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seeing the following on Fedora Rawhide with gcc 5.3.1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking size of Fortran type(test_mpi_handle)... configure: WARNING:
</span><br>
<span class="quotelev2">&gt;&gt; Could
</span><br>
<span class="quotelev2">&gt;&gt; not determine size of type(test_mpi_handle)
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: See config.log for details
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; config.log shows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:59062: checking size of Fortran type(test_mpi_handle)
</span><br>
<span class="quotelev2">&gt;&gt; configure:59132: gcc -DNDEBUG -O2 -g -pipe -Wall -Werror=format-security
</span><br>
<span class="quotelev2">&gt;&gt; -Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector-strong
</span><br>
<span class="quotelev2">&gt;&gt; --param=ssp-buffer-size=4 -grecord-gcc-switches
</span><br>
<span class="quotelev2">&gt;&gt; -specs=/usr/lib/rpm/redhat/redhat-hardened-cc1 -m64 -mtune=generic
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev2">&gt;&gt; configure:59139: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:59149: gfortran   conftestf.f90 conftest.o -o conftest
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-z,relro
</span><br>
<span class="quotelev2">&gt;&gt; -specs=/usr/lib/rpm/redhat/redhat-hardened-ld
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: /tmp/ccCHL5mV.o: relocation R_X86_64_32 against `.rodata'
</span><br>
<span class="quotelev2">&gt;&gt; can not
</span><br>
<span class="quotelev2">&gt;&gt; be used when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/ccCHL5mV.o: error adding symbols: Bad value
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; configure:59156: $? = 1
</span><br>
<span class="quotelev2">&gt;&gt; configure:59177: here is the Fortran program:
</span><br>
<span class="quotelev2">&gt;&gt; program fsize
</span><br>
<span class="quotelev2">&gt;&gt; type, BIND(C) :: test_mpi_handle
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: MPI_VAL
</span><br>
<span class="quotelev2">&gt;&gt; end type test_mpi_handle
</span><br>
<span class="quotelev2">&gt;&gt;    external size
</span><br>
<span class="quotelev2">&gt;&gt;    type(test_mpi_handle) :: x(2)
</span><br>
<span class="quotelev2">&gt;&gt;    call size(x(1),x(2))
</span><br>
<span class="quotelev2">&gt;&gt; end program
</span><br>
<span class="quotelev2">&gt;&gt; configure:59186: WARNING: Could not determine size of
</span><br>
<span class="quotelev2">&gt;&gt; type(test_mpi_handle)
</span><br>
<span class="quotelev2">&gt;&gt; configure:59188: WARNING: See config.log for details
</span><br>
<span class="quotelev2">&gt;&gt; configure:59190: error: Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is triggered by the use of hardening flags in Fedora builds - but the
</span><br>
<span class="quotelev2">&gt;&gt; problem seems to be that something is resetting FCFLAGS to empty during
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; configure processes by the time this step is reached.  I believe this is
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_FORTRAN_CHECK_USE_ONLY from
</span><br>
<span class="quotelev2">&gt;&gt; ./openmpi-1.10.2rc1/config/ompi_fortran_check_use_only.m4.  FCFLAGS gets
</span><br>
<span class="quotelev2">&gt;&gt; set to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     FCFLAGS=$FCFLAGS_save
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but nothing appears to be setting FCFLAGS_save.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev2">&gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev2">&gt;&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev2">&gt;&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','orion_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18444.php">http://www.open-mpi.org/community/lists/devel/2015/12/18444.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18446/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>In reply to:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Reply:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
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
