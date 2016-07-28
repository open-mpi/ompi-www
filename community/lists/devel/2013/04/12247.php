<?
$subject_val = "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 21:33:54 2013" -->
<!-- isoreceived="20130405013354" -->
<!-- sent="Thu, 4 Apr 2013 21:33:38 -0400" -->
<!-- isosent="20130405013338" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class" -->
<!-- id="5C691E518F345F4882FAB9E9839E60BA17FC42E735_at_EXCHMB.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16QOFxmT=vCMM7bdCFXSwe-AYebHck18JaCYcCX0xiYBw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 21:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12248.php">Ralph Castain: "[OMPI devel] v1.7 patches"</a>
<li><strong>Previous message:</strong> <a href="12246.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="12246.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12249.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>Thanks for  the testing and  note ! I already contacted mlnx folks.
<br>
<p>Regards,
<br>
Pasha
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Paul Hargrove
<br>
Sent: Thursday, April 04, 2013 9:16 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class
<br>
<p>Ralph,
<br>
<p>You are welcome.
<br>
I am already in &quot;testing mode&quot; today as I am preparing for my own release at the end of the month.
<br>
With the scripts I have it takes less than a minute to launch a test such as these, and later I get email when the test completes.
<br>
<p>For anybody else that is interested in how this bug went (relatively) unnoticed:
<br>
I found that not only did I need XRC, but I also needed to configure with --enable-static to reproduce the problem.
<br>
I suspect that if Mellanox added --enable-static to an existing MTT configuration this would not have remained unfixed for so long.
<br>
<p>-Paul
<br>
<p>On Thu, Apr 4, 2013 at 5:52 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Thanks Paul!!
<br>
<p>As always, much appreciated.
<br>
<p>On Apr 4, 2013, at 4:41 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Pasha,
<br>
<p>Your fix appears to work.
<br>
<p>My previous testing that reproduced the problem was against the 1.7 tarball.
<br>
So, for good measure I tested BOTH last night's trunk tarball and the one Ralph created earlier today:
<br>
<p>openmpi-1.9r28284.tar.bz2
<br>
FAILS in the manner reported previously:
<br>
&nbsp;&nbsp;CCLD     libmpi.la&lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt;
<br>
mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0): multiple definition of `ib_address_t_class'
<br>
mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0): first defined here
<br>
collect2: ld returned 1 exit status
<br>
<p>openmpi-1.9r28290.tar.bz2
<br>
PASSES
<br>
$ make all
<br>
$ make install
<br>
$ make check
<br>
<p>-Paul
<br>
<p>On Thu, Apr 4, 2013 at 3:12 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Available on the web site now:
<br>
<p><a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p><p>On Apr 4, 2013, at 2:13 PM, &quot;Shamis, Pavel&quot; &lt;shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will prepare a tarball for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Computer Science Research Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2013, at 5:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&lt;mailto:phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have at least one system where I can reproduce the problem, but don't have up-to-date autotools.
</span><br>
<span class="quotelev1">&gt; So, I can only test from a tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If somebody can roll me a tarball of r28289 I can test ASAP.
</span><br>
<span class="quotelev1">&gt; Otherwise I'll try to remember to test from tonight's trunk nightly once it appears.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 4, 2013 at 1:30 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;&lt;mailto:shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I pushed a bugfix to trunk (r28289). I don't have an access to a platform with XRC (MOFED) installation, so this is a &quot;blind&quot; bugfix. If you have a system with XRC, please test this revision. Hopefully this resolves the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; - Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2013, at 3:28 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is being addressed - however, for now, try configuring it with  &quot;--disable-openib-connectx-xrc&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 4, 2013, at 10:32 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sadly, the IB folks never fixed this - sigh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll fix it in the trunk and then CMR it for 1.7. Unfortunately, it requires that you have both IB and XRC to see it, which us non-IB-vendors in the devel community don't.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 4, 2013, at 9:44 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me try and dig into it a bit - sadly, my access to IB machines is sorely limited at the moment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 4, 2013, at 9:37 AM, Paul Kapinos &lt;kapinos_at_[hidden]&lt;mailto:kapinos_at_[hidden]&gt;&lt;mailto:kapinos_at_[hidden]&lt;mailto:kapinos_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Got the same error on all builds (4 compiler, with and without trheading support, 64 and 32bit) on our systems, effectively prohibiting the building of the 1.7 release.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any idea how to workaround this?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Need more logs?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 08/06/12 19:41, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Looks like the type is defined twice - once in ompi/mca/common/ofacm/common_ofacm_xoob.h and another time in ./ompi/mca/btl/openib/btl_openib_xrc.h.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 6, 2012, at 11:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't have XRC support in my kernels, so it wouldn't show up for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Did someone have 2 instances of the ib_address_t class?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 6, 2012, at 1:17 PM, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyone else seeing this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCLD   libmpi.la&lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt;&lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0): multiple definition of `ib_address_t_class'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0): first defined here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&lt;mailto:devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&lt;mailto:jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&lt;mailto:devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&lt;mailto:devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel: +49 241/80-24915&lt;tel:%2B49%20241%2F80-24915&gt;&lt;tel:%2B49%20241%2F80-24915&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&lt;mailto:devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&lt;mailto:devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&lt;mailto:devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;&lt;mailto:PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&lt;mailto:devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12247/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12248.php">Ralph Castain: "[OMPI devel] v1.7 patches"</a>
<li><strong>Previous message:</strong> <a href="12246.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="12246.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12249.php">Paul Kapinos: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
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
