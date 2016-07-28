<?
$subject_val = "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 09:47:33 2016" -->
<!-- isoreceived="20160714134733" -->
<!-- sent="Thu, 14 Jul 2016 09:47:31 -0400" -->
<!-- isosent="20160714134731" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.10.2 and PGI 15.9" -->
<!-- id="CABOsP2PLaRTKHdciEDWEv0b36F=_mAg-SXCk-SEBM8cMsV_qTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5tSA3uND9K3mvTs8QwoK0GT4GPw6OSLu1XLUk2TU6yFyw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.10.2 and PGI 15.9<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-14 09:47:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29663.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29661.php">larkym: "[OMPI users] Ssh launch code"</a>
<li><strong>In reply to:</strong> <a href="29636.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29663.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29663.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have 1.10.3 unpacked, ran through the configure using the same command
<br>
line options as 1.10.2
<br>
<p>but it fails even earlier in the make process at
<br>
<p>Entering openmpi-1.10.3/opal/asm
<br>
CPPAS atomic-asm.lo
<br>
This licensed Software was made available from Nvidia Corportation
<br>
under a time-limited beta license the beta license expires on jun 1 2015
<br>
any attempt to use this product after jun 1 2015 is a violation of the terms
<br>
of the PGI end user license agreement.
<br>
<p><p><p><p><p>On Mon, Jul 11, 2016 at 9:11 AM, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Can you try the latest 1.10.3 instead ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, do you have a license for the pgCC C++ compiler ?
</span><br>
<span class="quotelev1">&gt; fwiw, FreePGI on OSX has no C++ license and PGI C and gnu g++ does not work
</span><br>
<span class="quotelev1">&gt; together out of the box, hopefully I will have a fix ready sometimes this
</span><br>
<span class="quotelev1">&gt; week
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday, July 11, 2016, Michael Di Domenico &lt;mdidomenico4_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to get openmpi compiled using the PGI compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the configure goes through and the code starts to compile, but then
</span><br>
<span class="quotelev2">&gt;&gt; gets hung up with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; entering: openmpi-1.10.2/opal/mca/common/pmi
</span><br>
<span class="quotelev2">&gt;&gt; CC common_pmi.lo
</span><br>
<span class="quotelev2">&gt;&gt; CCLD libmca_common_pmi.la
</span><br>
<span class="quotelev2">&gt;&gt; pgcc-Error-Unknown switch: - pthread
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29635.php">http://www.open-mpi.org/community/lists/users/2016/07/29635.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29636.php">http://www.open-mpi.org/community/lists/users/2016/07/29636.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29663.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29661.php">larkym: "[OMPI users] Ssh launch code"</a>
<li><strong>In reply to:</strong> <a href="29636.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29663.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29663.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
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
