<?
$subject_val = "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 21:16:39 2013" -->
<!-- isoreceived="20130405011639" -->
<!-- sent="Thu, 4 Apr 2013 18:16:05 -0700" -->
<!-- isosent="20130405011605" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class" -->
<!-- id="CAAvDA16QOFxmT=vCMM7bdCFXSwe-AYebHck18JaCYcCX0xiYBw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="303E6E7B-4DAB-4FED-B8FC-3A8948F5EF02_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 21:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12247.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12245.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="12245.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12247.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12247.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12249.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>You are welcome.
<br>
I am already in &quot;testing mode&quot; today as I am preparing for my own release
<br>
at the end of the month.
<br>
With the scripts I have it takes less than a minute to launch a test such
<br>
as these, and later I get email when the test completes.
<br>
<p>For anybody else that is interested in how this bug went (relatively)
<br>
unnoticed:
<br>
I found that not only did I need XRC, but I also needed to configure with
<br>
--enable-static to reproduce the problem.
<br>
I suspect that if Mellanox added --enable-static to an existing MTT
<br>
configuration this would not have remained unfixed for so long.
<br>
<p>-Paul
<br>
<p><p>On Thu, Apr 4, 2013 at 5:52 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Paul!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As always, much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2013, at 4:41 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your fix appears to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My previous testing that reproduced the problem was against the 1.7
</span><br>
<span class="quotelev1">&gt; tarball.
</span><br>
<span class="quotelev1">&gt; So, for good measure I tested BOTH last night's trunk tarball and the one
</span><br>
<span class="quotelev1">&gt; Ralph created earlier today:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.9r28284.tar.bz2
</span><br>
<span class="quotelev1">&gt; FAILS in the manner reported previously:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CCLD     libmpi.la
</span><br>
<span class="quotelev1">&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0):
</span><br>
<span class="quotelev1">&gt; multiple definition of `ib_address_t_class'
</span><br>
<span class="quotelev1">&gt; mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0):
</span><br>
<span class="quotelev1">&gt; first defined here
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.9r28290.tar.bz2
</span><br>
<span class="quotelev1">&gt; PASSES
</span><br>
<span class="quotelev1">&gt; $ make all
</span><br>
<span class="quotelev1">&gt; $ make install
</span><br>
<span class="quotelev1">&gt; $ make check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 4, 2013 at 3:12 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Available on the web site now:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 4, 2013, at 2:13 PM, &quot;Shamis, Pavel&quot; &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I will prepare a tarball for you.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks !
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer Science Research Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer Science and Math Division
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Apr 4, 2013, at 5:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Pasha,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have at least one system where I can reproduce the problem, but don't
</span><br>
<span class="quotelev2">&gt;&gt; have up-to-date autotools.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So, I can only test from a tarball.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If somebody can roll me a tarball of r28289 I can test ASAP.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Otherwise I'll try to remember to test from tonight's trunk nightly
</span><br>
<span class="quotelev2">&gt;&gt; once it appears.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Thu, Apr 4, 2013 at 1:30 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; shamisp_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I pushed a bugfix to trunk (r28289). I don't have an access to a
</span><br>
<span class="quotelev2">&gt;&gt; platform with XRC (MOFED) installation, so this is a &quot;blind&quot; bugfix. If you
</span><br>
<span class="quotelev2">&gt;&gt; have a system with XRC, please test this revision. Hopefully this resolves
</span><br>
<span class="quotelev2">&gt;&gt; the problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - Pavel (Pasha) Shamis
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Apr 4, 2013, at 3:28 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; This is being addressed - however, for now, try configuring it with
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;--disable-openib-connectx-xrc&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Apr 4, 2013, at 10:32 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Sadly, the IB folks never fixed this - sigh.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I'll fix it in the trunk and then CMR it for 1.7. Unfortunately, it
</span><br>
<span class="quotelev2">&gt;&gt; requires that you have both IB and XRC to see it, which us non-IB-vendors
</span><br>
<span class="quotelev2">&gt;&gt; in the devel community don't.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Apr 4, 2013, at 9:44 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Let me try and dig into it a bit - sadly, my access to IB machines
</span><br>
<span class="quotelev2">&gt;&gt; is sorely limited at the moment.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; On Apr 4, 2013, at 9:37 AM, Paul Kapinos &lt;kapinos_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:kapinos_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Got the same error on all builds (4 compiler, with and without
</span><br>
<span class="quotelev2">&gt;&gt; trheading support, 64 and 32bit) on our systems, effectively prohibiting
</span><br>
<span class="quotelev2">&gt;&gt; the building of the 1.7 release.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Any idea how to workaround this?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Need more logs?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Best
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; On 08/06/12 19:41, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Looks like the type is defined twice - once in
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/common/ofacm/common_ofacm_xoob.h and another time in
</span><br>
<span class="quotelev2">&gt;&gt; ./ompi/mca/btl/openib/btl_openib_xrc.h.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Aug 6, 2012, at 11:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't have XRC support in my kernels, so it wouldn't show up
</span><br>
<span class="quotelev2">&gt;&gt; for me.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Did someone have 2 instances of the ib_address_t class?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 6, 2012, at 1:17 PM, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyone else seeing this?
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCLD   libmpi.la&lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0):
</span><br>
<span class="quotelev2">&gt;&gt; multiple definition of `ib_address_t_class'
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0):
</span><br>
<span class="quotelev2">&gt;&gt; first defined here
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Tel: +49 241/80-24915&lt;tel:%2B49%20241%2F80-24915&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12247.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12245.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="12245.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12247.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12247.php">Shamis, Pavel: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12249.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
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
