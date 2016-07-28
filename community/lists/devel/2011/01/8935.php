<?
$subject_val = "Re: [OMPI devel] OFED question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 18:01:17 2011" -->
<!-- isoreceived="20110127230117" -->
<!-- sent="Thu, 27 Jan 2011 15:00:38 -0800" -->
<!-- isosent="20110127230038" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OFED question" -->
<!-- id="4D41F916.9020607_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B98E2954-DB9B-42D7-8908-F00A0291D890_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OFED question<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 18:00:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8936.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8934.php">Barrett, Brian W: "[OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8934.php">Barrett, Brian W: "[OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8936.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>&nbsp;&nbsp;&nbsp;The ability to control the number of available QPs will vary by 
<br>
vendor.  Unless things have changed in recent years, Mellanox's firmware 
<br>
tools allow one the modify the limit but at the inconvenience of 
<br>
reburning the firmware.  I know of no other way and know nothing about 
<br>
other vendors.
<br>
<p>-Paul
<br>
<p>On 1/27/2011 2:56 PM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On one of our clusters, we're seeing the following on one of our applications, I believe using Open MPI 1.4.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [xxx:27545] *** An error occurred in MPI_Scatterv
</span><br>
<span class="quotelev1">&gt; [xxx:27545] *** on communicator MPI COMMUNICATOR 5 DUP FROM 4
</span><br>
<span class="quotelev1">&gt; [xxx:27545] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [xxx:27545] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [xxx][[31806,1],0][connect/btl_openib_connect_oob.c:857:qp_create_one] error creating qp errno says Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 27545 on
</span><br>
<span class="quotelev1">&gt; node rs1891 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem goes away if we modify the eager protocol msg sizes so that there are only two QPs necessary instead of the default 4.  Is there a way to bump up the number of QPs that can be created on a node, assuming the issue is just running out of available QPs?  If not, any other thoughts on working around the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;    Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;    Sandia National Laboratories
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8936.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8934.php">Barrett, Brian W: "[OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8934.php">Barrett, Brian W: "[OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8936.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
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
