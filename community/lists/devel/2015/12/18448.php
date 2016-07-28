<?
$subject_val = "Re: [OMPI devel] Open MPI v1.10.2rc1 available";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 19:32:43 2015" -->
<!-- isoreceived="20151222003243" -->
<!-- sent="Tue, 22 Dec 2015 09:32:40 +0900" -->
<!-- isosent="20151222003240" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.10.2rc1 available" -->
<!-- id="56789A28.9020509_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA17Gc_T6h1b8R8pZS3vXJe2TLN+6iQ1As+PWOtU3vggKLg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 19:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18449.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>In reply to:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>this is correct.
<br>
<p>i made PR #864 <a href="https://github.com/open-mpi/ompi-release/pull/864">https://github.com/open-mpi/ompi-release/pull/864</a> so it 
<br>
can be merged asap.
<br>
<p>i also removed it from PR #857. This is a quite large PR to sync fortran 
<br>
stuff from master to v2.x, and it will not be reviewed until the end of 
<br>
the holidays season.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/22/2015 7:38 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looked to me like PR 857 includes this fix.
</span><br>
<span class="quotelev1">&gt; Are you saying you are going to spilt if off from that one (to speed 
</span><br>
<span class="quotelev1">&gt; up the review)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 21, 2015 at 2:26 PM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Paul and Orion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the fix has been merged into v1.10.
</span><br>
<span class="quotelev1">&gt;     I will issue a separate pr for v2.x since this issue is impacting
</span><br>
<span class="quotelev1">&gt;     quite a lot of openmpi users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sorry for the inconvenience,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Tuesday, December 22, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Orion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The FCFLAGS_save issue was been fixed in master over the
</span><br>
<span class="quotelev1">&gt;         weekend and the appropriate PRs filed for v1.10 and v2.0 (and
</span><br>
<span class="quotelev1">&gt;         may already have been merged).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Mon, Dec 21, 2015 at 9:52 AM, Orion Poplawski
</span><br>
<span class="quotelev1">&gt;         &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On 12/19/2015 09:35 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;             &gt; Hello folks
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Don&#146;t want your holiday to be too boring, so we are also
</span><br>
<span class="quotelev1">&gt;             making available the
</span><br>
<span class="quotelev2">&gt;             &gt; v1.10.2 release candidate for review. We won&#146;t release
</span><br>
<span class="quotelev1">&gt;             until sometime in
</span><br>
<span class="quotelev2">&gt;             &gt; January, but hopefully some of you will have a chance to
</span><br>
<span class="quotelev1">&gt;             test it in the
</span><br>
<span class="quotelev2">&gt;             &gt; meantime. You&#146;ll find it in the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Seeing the following on Fedora Rawhide with gcc 5.3.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             checking size of Fortran type(test_mpi_handle)...
</span><br>
<span class="quotelev1">&gt;             configure: WARNING: Could
</span><br>
<span class="quotelev1">&gt;             not determine size of type(test_mpi_handle)
</span><br>
<span class="quotelev1">&gt;             configure: WARNING: See config.log for details
</span><br>
<span class="quotelev1">&gt;             configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             config.log shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             configure:59062: checking size of Fortran
</span><br>
<span class="quotelev1">&gt;             type(test_mpi_handle)
</span><br>
<span class="quotelev1">&gt;             configure:59132: gcc -DNDEBUG -O2 -g -pipe -Wall
</span><br>
<span class="quotelev1">&gt;             -Werror=format-security
</span><br>
<span class="quotelev1">&gt;             -Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector-strong
</span><br>
<span class="quotelev1">&gt;             --param=ssp-buffer-size=4 -grecord-gcc-switches
</span><br>
<span class="quotelev1">&gt;             -specs=/usr/lib/rpm/redhat/redhat-hardened-cc1 -m64
</span><br>
<span class="quotelev1">&gt;             -mtune=generic
</span><br>
<span class="quotelev1">&gt;             -finline-functions -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt;             configure:59139: $? = 0
</span><br>
<span class="quotelev1">&gt;             configure:59149: gfortran   conftestf.f90 conftest.o -o
</span><br>
<span class="quotelev1">&gt;             conftest -Wl,-z,relro
</span><br>
<span class="quotelev1">&gt;             -specs=/usr/lib/rpm/redhat/redhat-hardened-ld
</span><br>
<span class="quotelev1">&gt;             /usr/bin/ld: /tmp/ccCHL5mV.o: relocation R_X86_64_32
</span><br>
<span class="quotelev1">&gt;             against `.rodata' can not
</span><br>
<span class="quotelev1">&gt;             be used when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt;             /tmp/ccCHL5mV.o: error adding symbols: Bad value
</span><br>
<span class="quotelev1">&gt;             collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;             configure:59156: $? = 1
</span><br>
<span class="quotelev1">&gt;             configure:59177: here is the Fortran program:
</span><br>
<span class="quotelev1">&gt;             program fsize
</span><br>
<span class="quotelev1">&gt;             type, BIND(C) :: test_mpi_handle
</span><br>
<span class="quotelev1">&gt;               integer :: MPI_VAL
</span><br>
<span class="quotelev1">&gt;             end type test_mpi_handle
</span><br>
<span class="quotelev1">&gt;                external size
</span><br>
<span class="quotelev1">&gt;                type(test_mpi_handle) :: x(2)
</span><br>
<span class="quotelev1">&gt;                call size(x(1),x(2))
</span><br>
<span class="quotelev1">&gt;             end program
</span><br>
<span class="quotelev1">&gt;             configure:59186: WARNING: Could not determine size of
</span><br>
<span class="quotelev1">&gt;             type(test_mpi_handle)
</span><br>
<span class="quotelev1">&gt;             configure:59188: WARNING: See config.log for details
</span><br>
<span class="quotelev1">&gt;             configure:59190: error: Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             This is triggered by the use of hardening flags in Fedora
</span><br>
<span class="quotelev1">&gt;             builds - but the
</span><br>
<span class="quotelev1">&gt;             problem seems to be that something is resetting FCFLAGS to
</span><br>
<span class="quotelev1">&gt;             empty during the
</span><br>
<span class="quotelev1">&gt;             configure processes by the time this step is reached.  I
</span><br>
<span class="quotelev1">&gt;             believe this is in
</span><br>
<span class="quotelev1">&gt;             OMPI_FORTRAN_CHECK_USE_ONLY from
</span><br>
<span class="quotelev1">&gt;             ./openmpi-1.10.2rc1/config/ompi_fortran_check_use_only.m4.
</span><br>
<span class="quotelev1">&gt;             FCFLAGS gets set to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 FCFLAGS=$FCFLAGS_save
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             but nothing appears to be setting FCFLAGS_save.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             --
</span><br>
<span class="quotelev1">&gt;             Orion Poplawski
</span><br>
<span class="quotelev1">&gt;             Technical Manager 303-415-9701 x222 &lt;tel:303-415-9701%20x222&gt;
</span><br>
<span class="quotelev1">&gt;             NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt;             &lt;tel:303-415-9702&gt;
</span><br>
<span class="quotelev1">&gt;             3380 Mitchell Lane orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             Boulder, CO 80301 <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;             devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18444.php">http://www.open-mpi.org/community/lists/devel/2015/12/18444.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Paul H. Hargrove PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;         Computer Science Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;         &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt;         Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;         &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18446.php">http://www.open-mpi.org/community/lists/devel/2015/12/18446.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18447.php">http://www.open-mpi.org/community/lists/devel/2015/12/18447.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18449.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>In reply to:</strong> <a href="18447.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
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
