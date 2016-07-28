<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 03:03:23 2014" -->
<!-- isoreceived="20140508070323" -->
<!-- sent="Thu, 8 May 2014 03:03:21 -0400" -->
<!-- isosent="20140508070321" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="CAMJJpkUXSZdb1THU92fyYbHmPWDBXNXjsyvhG+VM+7z8ErDJTA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8AF9C9_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression with derived datatypes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 03:03:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14744.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14744.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14744.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan, or anybody with access to the target hardware,
<br>
<p>If you can provide a minimalistic output of the applications with and
<br>
without the above-mentioned patch and with mpi_ddt_unpack_debug and
<br>
mpi_ddt_pack_debug, and mpi_ddt_position_debug set to 1, I would try
<br>
to help.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, May 8, 2014 at 2:50 AM, Hjelm, Nathan T &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Since I have a system that has the scif libraries installed I will try to reproduce and see if I can come up with a fix. It will probably be sometime next week at the earliest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 07, 2014 9:03 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] regression with derived datatypes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/05/08 2:15, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if that might also explain the issue reported by Gilles regarding the scif BTL? In his example, the problem only occurred if the message was split across scif and vader. If so, then it might be that splitting messages in general is broken.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; i am afraid there is a misunderstanding :
</span><br>
<span class="quotelev1">&gt; the problem always occur with scif,vader,self (regardless the ompi v1.8
</span><br>
<span class="quotelev1">&gt; version)
</span><br>
<span class="quotelev1">&gt; the problem occurs with scif,self only if r31496 is applied to ompi v1.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my previous email
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14699.php">http://www.open-mpi.org/community/lists/devel/2014/05/14699.php</a>
</span><br>
<span class="quotelev1">&gt; i reported the following interesting fact :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with ompi v1.8 (latest r31678), the following command produces incorrect
</span><br>
<span class="quotelev1">&gt; results :
</span><br>
<span class="quotelev1">&gt; mpirun -host localhost -np 2 --mca btl scif,self ./test_scif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but with ompi v1.8 r31309, the very same command produces correct results
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Elena pointed that r31496 is a suspect. so i took the latest v1.8
</span><br>
<span class="quotelev1">&gt; (r31678) and reverted r31496 and ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -host localhost -np 2 --mca btl scif,self ./test_scif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; works again !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note that the &quot;default&quot;
</span><br>
<span class="quotelev1">&gt; mpirun -host localhost -np 2 --mca btl scif,vader,self ./test_scif
</span><br>
<span class="quotelev1">&gt; still produces incorrect results
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in order to reproduce the issue, a MIC is *not* needed,
</span><br>
<span class="quotelev1">&gt; you only need to install the software stack, load the mic kernel module
</span><br>
<span class="quotelev1">&gt; and make sure you can read/write /dev/mic/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, there are two issues here :
</span><br>
<span class="quotelev1">&gt; 1) r31496 broke something : mpirun -np 2 -host localhost --mca btl
</span><br>
<span class="quotelev1">&gt; scif,self ./test_scif
</span><br>
<span class="quotelev1">&gt; 2) something else never worked : mpirun -np 2 -host localhost --mca btl
</span><br>
<span class="quotelev1">&gt; scif,vader,self ./test_scif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14739.php">http://www.open-mpi.org/community/lists/devel/2014/05/14739.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14742.php">http://www.open-mpi.org/community/lists/devel/2014/05/14742.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14744.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14744.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14744.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
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
