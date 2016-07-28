<?
$subject_val = "Re: [OMPI devel] patch for building gm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 16:58:29 2008" -->
<!-- isoreceived="20080103215829" -->
<!-- sent="Thu, 03 Jan 2008 13:55:41 -0800" -->
<!-- isosent="20080103215541" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] patch for building gm btl" -->
<!-- id="477D59DD.5090507_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="477D4D09.4060403_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] patch for building gm btl<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 16:55:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2933.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>In reply to:</strong> <a href="2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2933.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="2933.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick,
<br>
<p>&nbsp;&nbsp;Thanks for the info.
<br>
&nbsp;&nbsp;Jeff and I are working (well Jeff is working anyway) to get MTT setup 
<br>
on my cluster to do MTT builds against both the GM-1.6.4 and GM-2.0.19 
<br>
libs I have installed.  While there is no current development at Myricom 
<br>
for GM, there are still folks with older hardware in the field who are 
<br>
using GM (and in my case will continue to do so until the hardware dies).
<br>
&nbsp;&nbsp;We have only 2 nodes (GM-2.0.19) to run on and Jeff and I have yet to 
<br>
discuss what tests we will run, but it will probably be a very minimal 
<br>
set.  Once we both have MTT setup and running GM tests, we should 
<br>
compare configs to avoid overlap (and thus increase coverage).
<br>
<p>-Paul
<br>
<p>Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Hi Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The fact that this has gone unfixed for 2 months suggests to me that 
</span><br>
<span class="quotelev2">&gt;&gt; nobody is building the GM BTL.  So, how would I go about checking ...
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; a) ...if there exists any periodic build of the GM BTL via MTT?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are deploying MTT on all our clusters. Right now, we use our own MTT 
</span><br>
<span class="quotelev1">&gt; server, but we will report a subset of the test to the OpenMPI server 
</span><br>
<span class="quotelev1">&gt; once everything is working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; c) ...which GM library versions such builds, if any, compile against
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no GM tests currently under our still-evolving MTT setup. Once 
</span><br>
<span class="quotelev1">&gt; we have a working setup, we will run a single Pallas test on 32 nodes 
</span><br>
<span class="quotelev1">&gt; with GM-2.1.28, two 2G NICs per node (single and dual port). There is no 
</span><br>
<span class="quotelev1">&gt; active development on GM, just kernel updates, so the GM version does 
</span><br>
<span class="quotelev1">&gt; not matter much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2933.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>In reply to:</strong> <a href="2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2933.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="2933.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
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
