<?
$subject_val = "Re: [OMPI devel] allocating sm memory with page alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 30 12:55:33 2008" -->
<!-- isoreceived="20080830165533" -->
<!-- sent="Sat, 30 Aug 2008 12:55:27 -0400" -->
<!-- isosent="20080830165527" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] allocating sm memory with page alignment" -->
<!-- id="537C6C0940C6C143AA46A88946B854170C4E6556_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] allocating sm memory with page alignment" -->
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
<strong>Subject:</strong> Re: [OMPI devel] allocating sm memory with page alignment<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-30 12:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4622.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Maybe in reply to:</strong> <a href="4621.php">Eugene Loh: "[OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not looked at the code in a long time, so not sure how many things have changed ...  In general what you are suggesting is reasonable.  However, especially on large machines you also need to worry about memory locality, so should allocate from memory pools that are appropriately located.  I expect that memory allocated on a per-socket basis would do.  Having said that, I have no clue how easy this is to implement within the current code base, but expect you can rely on first-touch after the procs are locked down to simplify the implementation.
<br>
<p>Rich
<br>
<p>----- Original Message -----
<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
<br>
To: devel_at_[hidden] &lt;devel_at_[hidden]&gt;
<br>
Sent: Fri Aug 29 20:52:10 2008
<br>
Subject: [OMPI devel] allocating sm memory with page alignment
<br>
<p>(I'm new to Open MPI.)
<br>
<p>I'm looking at the sm BTL.
<br>
<p>In mca_btl_sm_add_procs(), there's a loop over peer processes, with a 
<br>
call to ompi_fifo_init().  That is, one call to ompi_fifo_init() for 
<br>
each connection (sender/receiver pair).
<br>
<p>In ompi_fifo_init(), there's an allocation of 
<br>
sizeof(ompi_cb_fifo_wrapper_t), and a call to ompi_cb_fifo_init(), which 
<br>
in turn has two allocations:  one of a bunch of pointers and another of 
<br>
sizeof(ompi_cb_fifo_ctl_t).
<br>
<p>In short, for each connection, there are three allocations:
<br>
<p>*) sizeof(ompi_cb_fifo_wrapper_t)... about 64 bytes on LP64
<br>
*) a bunch of pointers... about 1 Kbyte on LP64
<br>
*) sizeof(ompi_cb_fifo_ctl_t)... about 12 bytes
<br>
<p>Let me say this yet another way.  For N local processes, there are 
<br>
N*(N-1) per-connection allocations, most of which are 64 bytes or smaller.
<br>
<p>BUT, in ompi_fifo_init() and ompi_cb_fifo_init(), we ask for page 
<br>
alignment of each allocation.  Further, in mca_mpool_sm_alloc() that 
<br>
alignment is further reinforced to be on page boundaries.
<br>
<p>As the number of local processes increases, therefore these 
<br>
per-connection allocations become very costly.  For 8K pages, for 
<br>
example, and 100 on-node processes, we're talking 3*100*100*8K = 240 
<br>
Mbytes.  For 512 on-node processes (yes, we have nodes this big), that's 
<br>
6 Gbyte... most of which is unused.  (E.g., allocating more than an 8K 
<br>
page when we only need 64 or 12 bytes.)
<br>
<p>Okay, long intro.  Let me start with a short question:  do we really 
<br>
need page alignment for these allocations?  Would cacheline alignment be 
<br>
okay?
<br>
<p>(I imagine I'll have follow-up questions once the answers start to roll in.)
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4622.php">Jeff Squyres: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Maybe in reply to:</strong> <a href="4621.php">Eugene Loh: "[OMPI devel] allocating sm memory with page alignment"</a>
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
