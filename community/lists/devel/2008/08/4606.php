<?
$subject_val = "Re: [OMPI devel] Still seeing hangs in OMPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 15:34:31 2008" -->
<!-- isoreceived="20080822193431" -->
<!-- sent="Fri, 22 Aug 2008 21:34:15 +0200" -->
<!-- isosent="20080822193415" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still seeing hangs in OMPI 1.3" -->
<!-- id="8D6066D2-9D86-4C54-8FA1-7A5ABEB57BD9_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48AF106C.7070403_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still seeing hangs in OMPI 1.3<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-22 15:34:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4607.php">Patrick Farrell: "[OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4605.php">Rolf vandeVaart: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="4605.php">Rolf vandeVaart: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>You're absolutely right. I don't know how this didn't get into the  
<br>
merge ... Anyway, I just corrected the mistake. Now the 1.3 should be  
<br>
[really] working.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 22, 2008, at 9:15 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; Hi George:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did some more experimenting.  Just copying over the btl_sm_fifo.h  
</span><br>
<span class="quotelev1">&gt; file was not enough.  I also had to make this change (which I found  
</span><br>
<span class="quotelev1">&gt; in the trunk) to the btl_sm_component.c file. After that, my hangs  
</span><br>
<span class="quotelev1">&gt; went away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; burpen-csx10-0 164 =&gt;svn diff btl_sm_component.c
</span><br>
<span class="quotelev1">&gt; Index: btl_sm_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- btl_sm_component.c  (revision 19393)
</span><br>
<span class="quotelev1">&gt; +++ btl_sm_component.c  (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -389,9 +389,7 @@
</span><br>
<span class="quotelev1">&gt;            opal_atomic_lock(fifo-&gt;tail_lock);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        hdr = (mca_btl_sm_hdr_t*)ompi_cb_fifo_read_from_tail(&amp;fifo- 
</span><br>
<span class="quotelev2">&gt; &gt;tail-&gt;cb_fifo,
</span><br>
<span class="quotelev1">&gt; -                                                             fifo- 
</span><br>
<span class="quotelev2">&gt; &gt;tail-&gt;cb_overflow,
</span><br>
<span class="quotelev1">&gt; -                                                              
</span><br>
<span class="quotelev1">&gt; &amp;useless );
</span><br>
<span class="quotelev1">&gt; +        hdr = (mca_btl_sm_hdr_t*)ompi_fifo_read_from_tail(fifo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /* release thread lock */
</span><br>
<span class="quotelev1">&gt;        if(opal_using_threads()) {
</span><br>
<span class="quotelev1">&gt; burpen-csx10-0 165 =&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; George:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are still seeing hangs in OMPI 1.3 which I assume are due to the  
</span><br>
<span class="quotelev2">&gt;&gt; PML issue.  However, we do not see it in the trunk.  My  
</span><br>
<span class="quotelev2">&gt;&gt; investigation is early, but I am wondering if the merge of the  
</span><br>
<span class="quotelev2">&gt;&gt; changes into v1.3 may be missing a file.  From the original fix in  
</span><br>
<span class="quotelev2">&gt;&gt; the trunk, I see the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Changeset 19309 (trunk)
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm.c  (modified)  (2 diffs)
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_component.c (modified) (7 diffs)
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_fifo.h (modified) (1 diff)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the ompi v1.3 I see this:
</span><br>
<span class="quotelev2">&gt;&gt; Changeset 19378 (v1.3)
</span><br>
<span class="quotelev2">&gt;&gt; btl/sm/btl_sm.c (modified) (1 diff)
</span><br>
<span class="quotelev2">&gt;&gt; btl/sm/btl_sm_component.c (modified) (2 diffs)
</span><br>
<span class="quotelev2">&gt;&gt; coll/sm/coll_sm_module.c (modified) (1 diff)
</span><br>
<span class="quotelev2">&gt;&gt; pml/ob1/pml_ob1_sendreq.c (modified) (1 diff)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 1.3 changeset has those two extra files, but they were just  
</span><br>
<span class="quotelev2">&gt;&gt; formatting fixes.  So, my concern is the missing btl_sm_fifo.h  
</span><br>
<span class="quotelev2">&gt;&gt; change in 1.3.  I have not tried it out yet, but wanted to see if  
</span><br>
<span class="quotelev2">&gt;&gt; anyone else is still seeing 1.3 hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4606/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4607.php">Patrick Farrell: "[OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4605.php">Rolf vandeVaart: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="4605.php">Rolf vandeVaart: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
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
