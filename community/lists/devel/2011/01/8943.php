<?
$subject_val = "Re: [OMPI devel] OFED question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 28 13:47:26 2011" -->
<!-- isoreceived="20110128184726" -->
<!-- sent="Fri, 28 Jan 2011 13:47:20 -0500" -->
<!-- isosent="20110128184720" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OFED question" -->
<!-- id="3C022862-BF4B-4518-B6DA-CF92D3A933C0_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D421E21.4030204_at_lbl.gov" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-28 13:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8944.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8942.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8941.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8939.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The command line actually is not so magic, but unfortunately we have never had time to complete btl_openib_receive_queue documentation. In the follow ticket you may find some initial documentation: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1260">https://svn.open-mpi.org/trac/ompi/ticket/1260</a>
<br>
It may be good idea define some user friendly flag to switch to XRC or even SRQ.
<br>
&nbsp;
<br>
Regards,
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jan 27, 2011, at 8:38 PM, Paul H. Hargrove wrote:
&gt; 
&gt; RFE:  Could OMPI implement a short-hand for Pasha's following magical 
&gt; incantation?
&gt; 
&gt; On 1/27/2011 5:34 PM, Shamis, Pavel wrote:
&gt;&gt; --mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32
&gt; 
&gt; -- 
&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
&gt; Future Technologies Group
&gt; HPC Research Department                   Tel: +1-510-495-2352
&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8944.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8942.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8941.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8939.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
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
