<?
$subject_val = "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 08:07:48 2010" -->
<!-- isoreceived="20100225130748" -->
<!-- sent="Thu, 25 Feb 2010 08:07:43 -0500" -->
<!-- isosent="20100225130743" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?" -->
<!-- id="CC635819-C221-4FE0-A254-BEC9EB48A50B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="632a27d11002250414h791f8b0dsdb7996b781326368_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 08:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7488.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7486.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7485.php">hu yaohui: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2010, at 7:14 AM, hu yaohui wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot! i got it.Could you introduce some more materials for me to get better understood of the following functions:
</span><br>
<span class="quotelev1">&gt; (1):/ompi/mca/pml/ob1/pml_ob1.c/mca_pml_ob1_add_procs
</span><br>
<p>This is just the OB1 function to add new peer processes.  It's called by the MPI layer -- e.g., during MPI_INIT, MPI_COMM_SPAWN, etc.
<br>
<p><span class="quotelev1">&gt; (2):/ompi/mca/bml/r2/bml_r2.c/mca_bml_r2_add_procs
</span><br>
<p>The BML is the BTL Multiplexing Layer.  It's just a multiplexer for marshalling multiple BTL's together.  It has no message passing functionality in itself -- it just finds and dispatches to underlying BTL's.
<br>
<p><span class="quotelev1">&gt; (3):/ompi/mca/btl/tcp/btl_tcp.c/mca_btl_tcp_add_procs
</span><br>
<p>Check out the description of the BTL add_procs function in ompi/mca/btl/btl.h.  This is the TCP BTL component's add_procs function.  Every BTL has one.
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
<li><strong>Next message:</strong> <a href="7488.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7486.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7485.php">hu yaohui: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
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
