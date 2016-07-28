<?
$subject_val = "Re: [OMPI devel] bug in r26626";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 22 13:40:48 2012" -->
<!-- isoreceived="20120622174048" -->
<!-- sent="Fri, 22 Jun 2012 10:40:43 -0700" -->
<!-- isosent="20120622174043" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in r26626" -->
<!-- id="4FE4AE1B.7060408_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D71516FEFEFF_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in r26626<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-22 13:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11154.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>In reply to:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11158.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Reply:</strong> <a href="11158.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking good.  Just a few more:  btl_udapl_endpoint.c has instances of 
<br>
seg_len and seg_addr.  udapl may not have much of a future, but for now 
<br>
it's still there.
<br>
<p>On 6/22/2012 7:22 AM, Hjelm, Nathan T wrote:
<br>
<span class="quotelev1">&gt; Looks like I missed a few places in udapl and osc. Fixed with r26635 and r26634. Hopefully thats the last of them outside of btl/vw.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, June 22, 2012 7:05 AM, TERRY DONTJE&lt;terry.dontje_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers; Hjelm, Nathan T
</span><br>
<span class="quotelev2">&gt;&gt; Subject: bug in r26626
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like compilation of 32 bit platforms is failing due to a missing field.  It looks to me that for some reason r26626 deleted hdr_segkey in ompi/mca/osc/rdma/osc_rdma_header.h which is used in the macro OMPI_OSC_RDMA_RDMA_INFO_HDR_NTOH and HTON.  Is there a reason that hdr_segkey was removed, if so more changes are needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11154.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>In reply to:</strong> <a href="11152.php">Hjelm, Nathan T: "Re: [OMPI devel] bug in r26626"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11158.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>Reply:</strong> <a href="11158.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
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
