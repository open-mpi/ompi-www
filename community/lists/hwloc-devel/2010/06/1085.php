<?
$subject_val = "[hwloc-devel] PUs not located under cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 24 12:02:53 2010" -->
<!-- isoreceived="20100624160253" -->
<!-- sent="Thu, 24 Jun 2010 12:02:48 -0400" -->
<!-- isosent="20100624160248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] PUs not located under cores" -->
<!-- id="A1917696-3273-4787-85BF-6EBB80104423_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] PUs not located under cores<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-24 12:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1086.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<li><strong>Previous message:</strong> <a href="1084.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2236)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1086.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<li><strong>Reply:</strong> <a href="1086.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have another problem report for OMPI hwloc support from IBM -- they have a PPC-based machine with output that looks like this:
<br>
<p>-----
<br>
[root_at_p6ihhpc5 tests]# hwloc-info 
<br>
depth 0:        1 Machine (type #1) 
<br>
&nbsp;depth 1:       4 NUMANodes (type #2) 
<br>
&nbsp;&nbsp;depth 2:      64 PUs (type #6) 
<br>
[root_at_p6ihhpc5 tests]# hwloc-ls 
<br>
Machine (123GB) 
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 30GB) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=4) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=5) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=6) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=7) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #8 (phys=8) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #9 (phys=9) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #10 (phys=10) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #11 (phys=11) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #12 (phys=12) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #13 (phys=13) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #14 (phys=14) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #15 (phys=15) 
<br>
&nbsp;&nbsp;NUMANode #1 (phys=1 31GB) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #16 (phys=16) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #17 (phys=17) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #18 (phys=18) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #19 (phys=19) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #20 (phys=20) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #21 (phys=21) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #22 (phys=22) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #23 (phys=23) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #24 (phys=24) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #25 (phys=25) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #26 (phys=26) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #27 (phys=27) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #28 (phys=28) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #29 (phys=29) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #30 (phys=30) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #31 (phys=31) 
<br>
&nbsp;&nbsp;NUMANode #2 (phys=2 31GB) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #32 (phys=32) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #33 (phys=33) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #34 (phys=34) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #35 (phys=35) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #36 (phys=36) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #37 (phys=37) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #38 (phys=38) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #39 (phys=39) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #40 (phys=40) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #41 (phys=41) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #42 (phys=42) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #43 (phys=43) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #44 (phys=44) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #45 (phys=45) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #46 (phys=46) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #47 (phys=47) 
<br>
&nbsp;&nbsp;NUMANode #3 (phys=3 31GB) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #48 (phys=48) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #49 (phys=49) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #50 (phys=50) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #51 (phys=51) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #52 (phys=52) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #53 (phys=53) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #54 (phys=54) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #55 (phys=55) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #56 (phys=56) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #57 (phys=57) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #58 (phys=58) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #59 (phys=59) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #60 (phys=60) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #61 (phys=61) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #62 (phys=62) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #63 (phys=63) 
<br>
-----
<br>
<p>Is that right?  I.e., is it proper that hwloc can return just a pile of PUs under a numa node with no core as an umbrella?
<br>
<p>I can certainly code around this if we expect this kind of output from hwloc -- the current code using hwloc topology info in OMPI assumes that PUs will be under cores.  But before I did that, I wanted to ask if this was expected.
<br>
<p>It might be worth adding a section in hwloc.doxy describing stuff like this (yes, I'm volunteering to write it :-) ) -- that using hwloc can still result in lots of different kinds of outputs, depending on the type of machine you're running on.  Case in point is the above output vs. the output from a typical intel/amd-based machine where you have a topology containing a machine, sockets, various caches, numa nodes, cores, and PU's.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1086.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<li><strong>Previous message:</strong> <a href="1084.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2236)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1086.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
<li><strong>Reply:</strong> <a href="1086.php">Samuel Thibault: "Re: [hwloc-devel] PUs not located under cores"</a>
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
