<?
$subject_val = "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 17:14:10 2013" -->
<!-- isoreceived="20130404211410" -->
<!-- sent="Thu, 4 Apr 2013 17:13:44 -0400" -->
<!-- isosent="20130404211344" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class" -->
<!-- id="B9A76395-D3F5-4E8D-AAC5-C1D094D2B113_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16F4VX0_Km2mPrM8n8z9jWBmEmjiQU_aP4hFPz30toykQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-04-04 17:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12241.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12239.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="12239.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12242.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12242.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>I will prepare a tarball for you.
<br>
<p>Thanks !
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Apr 4, 2013, at 5:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
Pasha,
I have at least one system where I can reproduce the problem, but don't have up-to-date autotools.
So, I can only test from a tarball.
If somebody can roll me a tarball of r28289 I can test ASAP.
Otherwise I'll try to remember to test from tonight's trunk nightly once it appears.
-Paul
On Thu, Apr 4, 2013 at 1:30 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;&gt; wrote:
I pushed a bugfix to trunk (r28289). I don't have an access to a platform with XRC (MOFED) installation, so this is a &quot;blind&quot; bugfix. If you have a system with XRC, please test this revision. Hopefully this resolves the problem.
Regards,
- Pavel (Pasha) Shamis
On Apr 4, 2013, at 3:28 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
&gt; This is being addressed - however, for now, try configuring it with  &quot;--disable-openib-connectx-xrc&quot;
&gt;
&gt; On Apr 4, 2013, at 10:32 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
&gt;
&gt;&gt; Sadly, the IB folks never fixed this - sigh.
&gt;&gt;
&gt;&gt; I'll fix it in the trunk and then CMR it for 1.7. Unfortunately, it requires that you have both IB and XRC to see it, which us non-IB-vendors in the devel community don't.
&gt;&gt;
&gt;&gt;
&gt;&gt; On Apr 4, 2013, at 9:44 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
&gt;&gt;
&gt;&gt;&gt; Let me try and dig into it a bit - sadly, my access to IB machines is sorely limited at the moment.
&gt;&gt;&gt;
&gt;&gt;&gt; On Apr 4, 2013, at 9:37 AM, Paul Kapinos &lt;kapinos_at_[hidden]&lt;mailto:kapinos_at_[hidden]&gt;&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Got the same error on all builds (4 compiler, with and without trheading support, 64 and 32bit) on our systems, effectively prohibiting the building of the 1.7 release.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Any idea how to workaround this?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Need more logs?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Best
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On 08/06/12 19:41, Gutierrez, Samuel K wrote:
&gt;&gt;&gt;&gt;&gt; Looks like the type is defined twice - once in ompi/mca/common/ofacm/common_ofacm_xoob.h and another time in ./ompi/mca/btl/openib/btl_openib_xrc.h.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Sam
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; On Aug 6, 2012, at 11:23 AM, Jeff Squyres wrote:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I don't have XRC support in my kernels, so it wouldn't show up for me.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Did someone have 2 instances of the ib_address_t class?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; On Aug 6, 2012, at 1:17 PM, Gutierrez, Samuel K wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyone else seeing this?
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Creating mpi/man/man3/OpenMPI.3 man page...
&gt;&gt;&gt;&gt;&gt;&gt;&gt; CCLD   libmpi.la&lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0): multiple definition of `ib_address_t_class'
&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0): first defined here
&gt;&gt;&gt;&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sam
&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
&gt;&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
&gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
&gt;&gt;&gt;&gt; Tel: +49 241/80-24915&lt;tel:%2B49%20241%2F80-24915&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;
&gt;&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12241.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12239.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>In reply to:</strong> <a href="12239.php">Paul Hargrove: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12242.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="12242.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of	ib_address_t_class"</a>
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
