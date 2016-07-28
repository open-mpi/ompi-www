<?
$subject_val = "Re: [OMPI devel] Scalability of openib modex";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 09:26:41 2008" -->
<!-- isoreceived="20080331132641" -->
<!-- sent="Mon, 31 Mar 2008 09:26:29 -0400" -->
<!-- isosent="20080331132629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Scalability of openib modex" -->
<!-- id="F2F03FE5-F8D9-4133-8175-0ECC5ED17A08_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C41641D2.CDF5%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Scalability of openib modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 09:26:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3573.php">Josh Hursey: "[OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
<li><strong>In reply to:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2008, at 9:22 AM, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Thanks Jeff. It appears to me that the first approach to reducing  
</span><br>
<span class="quotelev1">&gt; modex data
</span><br>
<span class="quotelev1">&gt; makes the most sense and has the largest impact - I would advocate  
</span><br>
<span class="quotelev1">&gt; pursuing
</span><br>
<span class="quotelev1">&gt; it first. We can look at further refinements later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Along that line, one thing we also exchange in the modex (not IB  
</span><br>
<span class="quotelev1">&gt; specific)
</span><br>
<span class="quotelev1">&gt; is hostname and arch. This is in the ompi/proc/proc.c code. It seems  
</span><br>
<span class="quotelev1">&gt; to me
</span><br>
<span class="quotelev1">&gt; that this is also wasteful and can be removed. The daemons already  
</span><br>
<span class="quotelev1">&gt; have that
</span><br>
<span class="quotelev1">&gt; info for the job and can easily &quot;drop&quot; it into each proc - there is no
</span><br>
<span class="quotelev1">&gt; reason to send it around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll take a look at cleaning that up, ensuring we don't &quot;break&quot;  
</span><br>
<span class="quotelev1">&gt; daemonless
</span><br>
<span class="quotelev1">&gt; environments, along with the other things underway.
</span><br>
<p>Sounds perfect.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/28/08 11:37 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've had this conversation independently with several people now, so
</span><br>
<span class="quotelev2">&gt;&gt; I'm sending it to the list rather than continuing to have the same
</span><br>
<span class="quotelev2">&gt;&gt; conversation over and over.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As most of you know, Jon and I are working on the new openib
</span><br>
<span class="quotelev2">&gt;&gt; &quot;CPC&quot; (connect pseudo-component) stuff in /tmp-public/openib-cpc2.
</span><br>
<span class="quotelev2">&gt;&gt; There are two main reasons for it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Add support for RDMA CM (they need it for iWarp support)
</span><br>
<span class="quotelev2">&gt;&gt; 2. Add support for IB CM (which will hopefully be a more scalable
</span><br>
<span class="quotelev2">&gt;&gt; connect system as compared to the current RML/OOB-based method of
</span><br>
<span class="quotelev2">&gt;&gt; making IB QPs)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When complete, there will be 4 CPCs: RDMA CM, IB CM, OOB, and XOOB
</span><br>
<span class="quotelev2">&gt;&gt; (same as OOB but with ConnectX XRC extensions).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RDMA CM has some known scaling issues, and at least some known
</span><br>
<span class="quotelev2">&gt;&gt; workarounds -- I won't discuss the merits/drawbacks of RDMA CM here.
</span><br>
<span class="quotelev2">&gt;&gt; IB CM has unknown scaling characteristics, but seems to look good on
</span><br>
<span class="quotelev2">&gt;&gt; paper (e.g., it uses UD for a 3-way handshake to make an IB QP).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the trunk, it's a per-MPI process decision as to which CPC you'll
</span><br>
<span class="quotelev2">&gt;&gt; use.  Per ticket #1191, one of the goals of the /tmp-public branch is
</span><br>
<span class="quotelev2">&gt;&gt; to make CPC decision be a per-openib-BTL-module decision.  So you can
</span><br>
<span class="quotelev2">&gt;&gt; mix iWarp and IB hardware in a single host, for example.  This fits  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; quite well with the &quot;mpirun should work out of the box&quot; philosophy of
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the openib BTL, each BTL module is paired with a specific HCA/NIC
</span><br>
<span class="quotelev2">&gt;&gt; (verbs) port.  And depending on the interface hardware and software,
</span><br>
<span class="quotelev2">&gt;&gt; one or more CPCs may be available for each.  Hence, for each BTL
</span><br>
<span class="quotelev2">&gt;&gt; module in each MPI process, we may send one or more CPC connect
</span><br>
<span class="quotelev2">&gt;&gt; information blobs in the modex (note that the oob and xoob CPCs don't
</span><br>
<span class="quotelev2">&gt;&gt; need to send anything additional in the modex).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jon and I are actually getting closer to completion on the branch,  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; it seems to be working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In conjunction with several other scalability discussions that are
</span><br>
<span class="quotelev2">&gt;&gt; ongoing right now, several of us have toyed with two basic ideas to
</span><br>
<span class="quotelev2">&gt;&gt; improve scalability of job launch / startup:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. the possibility of eliminating the modex altogether (e.g., have
</span><br>
<span class="quotelev2">&gt;&gt; ORTE dump enough information to each MPI process to figure out/
</span><br>
<span class="quotelev2">&gt;&gt; calculate/locally lookup [in local files?] BTL addressing information
</span><br>
<span class="quotelev2">&gt;&gt; for all peers in MPI_COMM_WORLD, etc.), a la Portals.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. reducing the amount of data in the modex.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One obvious idea for #2 is to have only one process on each host send
</span><br>
<span class="quotelev2">&gt;&gt; all/the majority of openib BTL modex information for that host.  The
</span><br>
<span class="quotelev2">&gt;&gt; rationale here is that all MPI processes on a single host will share
</span><br>
<span class="quotelev2">&gt;&gt; much of the same BTL addressing information, so why send it N times?
</span><br>
<span class="quotelev2">&gt;&gt; Local rank 0 can modex send all/the majority of the modex for the
</span><br>
<span class="quotelev2">&gt;&gt; openib BTL modules; local ranks 1-N can either send nothing or a
</span><br>
<span class="quotelev2">&gt;&gt; [very] small piece of differentiating information (e.g., IBCM service
</span><br>
<span class="quotelev2">&gt;&gt; ID).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This effectively makes the modex info for the openib BTL scale with
</span><br>
<span class="quotelev2">&gt;&gt; the number of nodes, not the number of processes.  This can be a big
</span><br>
<span class="quotelev2">&gt;&gt; win in terms of overall modex size that needs to be both gathered and
</span><br>
<span class="quotelev2">&gt;&gt; bcast.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I worked up a spreadsheet showing the current size of the modex in  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; openib-cpc2 branch right now (using some &quot;somewhat&quot; contrived machine
</span><br>
<span class="quotelev2">&gt;&gt; size/ppn/port combinations), and then compared it to the size after
</span><br>
<span class="quotelev2">&gt;&gt; implementing the #2 idea shown above (see attached PDF).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also included a 3rd comparison for if Jon/I are able to reduce the
</span><br>
<span class="quotelev2">&gt;&gt; CPC modex blob sizes -- we don't know yet if that'll work or not.   
</span><br>
<span class="quotelev2">&gt;&gt; But
</span><br>
<span class="quotelev2">&gt;&gt; the numbers show that reducing the blobs by a few bytes clearly has
</span><br>
<span class="quotelev2">&gt;&gt; [much] less of an impact than the &quot;eliminating redundant modex
</span><br>
<span class="quotelev2">&gt;&gt; information&quot; idea, so we'll work on that one first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, reducing the modex size, paired with other ongoing ORTE
</span><br>
<span class="quotelev2">&gt;&gt; scalability efforts, may obviate the need to eliminate the modex (at
</span><br>
<span class="quotelev2">&gt;&gt; least for now...).  Or, more specifically, efforts for eliminating  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; modex can be pushed to beyond v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, the same ideas can apply to other BTLs.  We're only  
</span><br>
<span class="quotelev2">&gt;&gt; working
</span><br>
<span class="quotelev2">&gt;&gt; on the openib BTL for now.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3573.php">Josh Hursey: "[OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
<li><strong>In reply to:</strong> <a href="3571.php">Ralph H Castain: "Re: [OMPI devel] Scalability of openib modex"</a>
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
