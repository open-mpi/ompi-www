<?
$subject_val = "Re: [OMPI devel] bug in r26626";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 24 12:39:48 2012" -->
<!-- isoreceived="20120624163948" -->
<!-- sent="Sun, 24 Jun 2012 09:39:40 -0700" -->
<!-- isosent="20120624163940" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in r26626" -->
<!-- id="4FE742CC.6010007_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FE4AE1B.7060408_at_oracle.com" -->
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
<strong>Date:</strong> 2012-06-24 12:39:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11159.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11157.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11153.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for r26638.  Looks like that file still needs a little attention:
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=2073">http://www.open-mpi.org/mtt/index.php?do_redir=2073</a>
<br>
<p>On 6/22/2012 10:40 AM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Looking good.  Just a few more:  btl_udapl_endpoint.c has instances of 
</span><br>
<span class="quotelev1">&gt; seg_len and seg_addr.  udapl may not have much of a future, but for 
</span><br>
<span class="quotelev1">&gt; now it's still there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/22/2012 7:22 AM, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Looks like I missed a few places in udapl and osc. Fixed with r26635 
</span><br>
<span class="quotelev2">&gt;&gt; and r26634. Hopefully thats the last of them outside of btl/vw.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday, June 22, 2012 7:05 AM, TERRY 
</span><br>
<span class="quotelev2">&gt;&gt; DONTJE&lt;terry.dontje_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers; Hjelm, Nathan T
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: bug in r26626
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like compilation of 32 bit platforms is failing due to a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; missing field.  It looks to me that for some reason r26626 deleted 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hdr_segkey in ompi/mca/osc/rdma/osc_rdma_header.h which is used in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the macro OMPI_OSC_RDMA_RDMA_INFO_HDR_NTOH and HTON.  Is there a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reason that hdr_segkey was removed, if so more changes are needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11159.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11157.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11153.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
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
