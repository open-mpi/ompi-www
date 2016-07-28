<?
$subject_val = "[OMPI devel] Scalability of openib modex";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 13:37:26 2008" -->
<!-- isoreceived="20080328173726" -->
<!-- sent="Fri, 28 Mar 2008 13:37:11 -0400" -->
<!-- isosent="20080328173711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Scalability of openib modex" -->
<!-- id="67281C10-CCFD-45AE-BF21-3504995AF7B7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Scalability of openib modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-28 13:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3561.php">aguillen_at_[hidden]: "Re: [OMPI devel] MATLAB interface"</a>
<li><strong>Previous message:</strong> <a href="3559.php">Tony Breeds: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
<li><strong>Reply:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've had this conversation independently with several people now, so  
<br>
I'm sending it to the list rather than continuing to have the same  
<br>
conversation over and over.  :-)
<br>
<p>------
<br>
<p>As most of you know, Jon and I are working on the new openib  
<br>
&quot;CPC&quot; (connect pseudo-component) stuff in /tmp-public/openib-cpc2.   
<br>
There are two main reasons for it:
<br>
<p>1. Add support for RDMA CM (they need it for iWarp support)
<br>
2. Add support for IB CM (which will hopefully be a more scalable  
<br>
connect system as compared to the current RML/OOB-based method of  
<br>
making IB QPs)
<br>
<p>When complete, there will be 4 CPCs: RDMA CM, IB CM, OOB, and XOOB  
<br>
(same as OOB but with ConnectX XRC extensions).
<br>
<p>RDMA CM has some known scaling issues, and at least some known  
<br>
workarounds -- I won't discuss the merits/drawbacks of RDMA CM here.   
<br>
IB CM has unknown scaling characteristics, but seems to look good on  
<br>
paper (e.g., it uses UD for a 3-way handshake to make an IB QP).
<br>
<p>On the trunk, it's a per-MPI process decision as to which CPC you'll  
<br>
use.  Per ticket #1191, one of the goals of the /tmp-public branch is  
<br>
to make CPC decision be a per-openib-BTL-module decision.  So you can  
<br>
mix iWarp and IB hardware in a single host, for example.  This fits in  
<br>
quite well with the &quot;mpirun should work out of the box&quot; philosophy of  
<br>
Open MPI.
<br>
<p>In the openib BTL, each BTL module is paired with a specific HCA/NIC  
<br>
(verbs) port.  And depending on the interface hardware and software,  
<br>
one or more CPCs may be available for each.  Hence, for each BTL  
<br>
module in each MPI process, we may send one or more CPC connect  
<br>
information blobs in the modex (note that the oob and xoob CPCs don't  
<br>
need to send anything additional in the modex).
<br>
<p>Jon and I are actually getting closer to completion on the branch, and  
<br>
it seems to be working.
<br>
<p>In conjunction with several other scalability discussions that are  
<br>
ongoing right now, several of us have toyed with two basic ideas to  
<br>
improve scalability of job launch / startup:
<br>
<p>1. the possibility of eliminating the modex altogether (e.g., have  
<br>
ORTE dump enough information to each MPI process to figure out/ 
<br>
calculate/locally lookup [in local files?] BTL addressing information  
<br>
for all peers in MPI_COMM_WORLD, etc.), a la Portals.
<br>
<p>2. reducing the amount of data in the modex.
<br>
<p>One obvious idea for #2 is to have only one process on each host send  
<br>
all/the majority of openib BTL modex information for that host.  The  
<br>
rationale here is that all MPI processes on a single host will share  
<br>
much of the same BTL addressing information, so why send it N times?   
<br>
Local rank 0 can modex send all/the majority of the modex for the  
<br>
openib BTL modules; local ranks 1-N can either send nothing or a  
<br>
[very] small piece of differentiating information (e.g., IBCM service  
<br>
ID).
<br>
<p>This effectively makes the modex info for the openib BTL scale with  
<br>
the number of nodes, not the number of processes.  This can be a big  
<br>
win in terms of overall modex size that needs to be both gathered and  
<br>
bcast.
<br>
<p>I worked up a spreadsheet showing the current size of the modex in the  
<br>
openib-cpc2 branch right now (using some &quot;somewhat&quot; contrived machine  
<br>
size/ppn/port combinations), and then compared it to the size after  
<br>
implementing the #2 idea shown above (see attached PDF).
<br>
<p>I also included a 3rd comparison for if Jon/I are able to reduce the  
<br>
CPC modex blob sizes -- we don't know yet if that'll work or not.  But  
<br>
the numbers show that reducing the blobs by a few bytes clearly has  
<br>
[much] less of an impact than the &quot;eliminating redundant modex  
<br>
information&quot; idea, so we'll work on that one first.
<br>
<p>Additionally, reducing the modex size, paired with other ongoing ORTE  
<br>
scalability efforts, may obviate the need to eliminate the modex (at  
<br>
least for now...).  Or, more specifically, efforts for eliminating the  
<br>
modex can be pushed to beyond v1.3.
<br>
<p>Of course, the same ideas can apply to other BTLs.  We're only working  
<br>
on the openib BTL for now.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3560/modex-sizes.pdf">modex-sizes.pdf</a>
</ul>
<!-- attachment="modex-sizes.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3561.php">aguillen_at_[hidden]: "Re: [OMPI devel] MATLAB interface"</a>
<li><strong>Previous message:</strong> <a href="3559.php">Tony Breeds: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
<li><strong>Reply:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
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
