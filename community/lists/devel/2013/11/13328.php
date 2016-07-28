<?
$subject_val = "Re: [OMPI devel] CUDA support not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 09:02:04 2013" -->
<!-- isoreceived="20131125140204" -->
<!-- sent="Mon, 25 Nov 2013 06:02:01 -0800" -->
<!-- isosent="20131125140201" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support not working?" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360083EF2A3_at_HQMAIL02.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BB12C791-326F-43AF-882F-5451E3C57972_at_capsec.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CUDA support not working?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 09:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13329.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Previous message:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>In reply to:</strong> <a href="13324.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13326.php">Matthias Jurenz: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me know of any other issues you are seeing.  Ralph fixed the issue with ob1 and we will move that into Open MPI 1.7.4.  
<br>
Not sure why I never saw that issue.  Will investigate some more.
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of J&#246;rg
</span><br>
<span class="quotelev1">&gt;Bornschein
</span><br>
<span class="quotelev1">&gt;Sent: Monday, November 25, 2013 7:41 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] CUDA support not working?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 25.11.2013, at 07:34, Solibakke Per Bjarte &lt;Per.B.Solibakke_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For version 1.7.3 and 1.7.4a1r29747 and CUDA-support..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --with-cuda -with-hwloc -enable-shared and the use of -VT ] Running
</span><br>
<span class="quotelev2">&gt;&gt; without VT:
</span><br>
<span class="quotelev2">&gt;&gt;             Error: /usr/local/lib/openmpi/mca_pml_obl.so: undefined
</span><br>
<span class="quotelev2">&gt;&gt; symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;..
</span><br>
<span class="quotelev2">&gt;&gt; Suggestions for option specifications. I have followed the e-mail
</span><br>
<span class="quotelev2">&gt;&gt; correspondence between J&#246;rg Bornschein, Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have changed the Makefile.am before ./configure according to
</span><br>
<span class="quotelev2">&gt;&gt; attached diff.pml However, nothing helps for neither 1.7.3 nor
</span><br>
<span class="quotelev2">&gt;&gt; 1.7.4a1r29747
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;After patching Makefile.am, did you regenerate the automake/autoconf by
</span><br>
<span class="quotelev1">&gt;running ./autogen.sh at the top-level?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   j
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13329.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Previous message:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>In reply to:</strong> <a href="13324.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13326.php">Matthias Jurenz: "Re: [OMPI devel] CUDA support not working?"</a>
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
