<?
$subject_val = "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 10:04:41 2010" -->
<!-- isoreceived="20100211150441" -->
<!-- sent="Thu, 11 Feb 2010 10:04:27 -0500" -->
<!-- isosent="20100211150427" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="859DBEA6-3E98-4478-ADAB-0F8AAC95FB10_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA170566E4_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 10:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7408.php">Eugene Loh: "Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7406.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7405.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7414.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2010, at 07:10 , Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; I misparsed your reply. Yes, bcast(1) *can* sync if it wants to. I don't have a spec handy to check if bcast(0) is defined or not (similar to reduce). If it is, then sure, it could sync as well.
</span><br>
<p>I have to disagree here. There are no synchronization in MPI except MPI_Barrier. At best, a bcast(1) is a one way synchronization, as the only knowledge it gives to any rank (except root) is that the root has reached the bcast. No assumptions about the other ranks should be made, as this is strongly dependent on the underlying algorithm, and the upper level do not have a way to know which algorithm is used. Similarly, a reduce(1) is the opposite of the bcast(1), the only certain thing is at the root and it means all other ranks had reached the reduce(1). 
<br>
<p>Therefore, we can argue as much as you want about what the correct arguments of a reduce call should be, a reduce(count=0) is one of the meaningless MPI calls and as such should not be tolerated.
<br>
<p>Anyway, this discussion diverged from its original subject. The standard is pretty clear on what set of arguments are valid, and the fact that the send and receive buffers should be different is one of the strongest requirement (and this independent on what count is). As a courtesy, Open MPI accepts the heresy of a count = zero, but there is __absolutely__ no reason to stop checking the values of the other arguments when this is true. If the user really want to base the logic of his application on such a useless and non-standard statement (reduce(0)) at least he has to have the courtesy to provide a valid set of arguments.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>PS: If I can suggest a correct approach to fix the python bindings I would encourage you to go for the strongest and more meaningful approach, sendbuf should always be different that recvbuf (independent on the value of count).
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt; My previous point was that barrier is the only collective that is *required* to synchronize. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -jms 
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden] &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Thu Feb 11 07:04:59 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where does bcast(1) synchronize?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Oops on typo - if reduce(1) wasn't defined, that definitely would be bad :) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wed Feb 10 12:50:03 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] failure with zero-lengthReduce()andbothsbuf=rbuf=NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10 February 2010 14:19, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 10, 2010, at 11:59 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; If I remember correctly, the HPCC pingpong test synchronizes occasionally by
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; having one process send a zero-byte broadcast to all other processes.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  What's a zero-byte broadcast?  Well, some MPIs apparently send no data, but
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; do have synchronization semantics.  (No non-root process can exit before the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; root process has entered.)  Other MPIs treat the zero-byte broadcasts as
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; no-ops;  there is no synchronization and then timing results from the HPCC
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; pingpong test are very misleading.  So far as I can tell, the MPI standard
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; doesn't address which behavior is correct.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yep... for p2p communication things are more clear (and behavior more
</span><br>
<span class="quotelev3">&gt; &gt;&gt; consistens in the MPI's out there) regarding zero-length messages...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; IMHO, collectives should be non-op only in the sense that no actual
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reduction is made because there are no elements to operate on. I mean,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if Reduce(count=1) implies a sync, Reduce(count=0) should also imply a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sync...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry to disagree again.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The *only* MPI collective operation that guarantees a synchronization is barrier.  The lack of synchronization guarantee for all other collective operations is very explicit in the MPI spec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hence, it is perfectly valid for an MPI implementation to do something like a no-op when no data transfer actually needs to take place
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you say that an MPI implementation is free to do make a sync in
</span><br>
<span class="quotelev1">&gt; case of Bcast(count=1), but not in the case of Bcast(count=0) ? I
</span><br>
<span class="quotelev1">&gt; could agree that such behavior is technically correct regarding the
</span><br>
<span class="quotelev1">&gt; MPI standard... But it makes me feel a bit uncomfortable... OK, in the
</span><br>
<span class="quotelev1">&gt; end, the change on semantic depending on message sizes is comparable
</span><br>
<span class="quotelev1">&gt; to the blocking/nonblocking one for  MPI_Send(count=10^8) versus
</span><br>
<span class="quotelev1">&gt; Send(count=1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (except, of course, the fact that Reduce(count=1) isn't defined ;-) ).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You likely meant Reduce(count=0) ... Good catch ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: The following question is unrelated to this thread, but my
</span><br>
<span class="quotelev1">&gt; curiosity+laziness cannot resist... Does Open MPI has some MCA
</span><br>
<span class="quotelev1">&gt; parameter to add a synchronization at every collective call?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7408.php">Eugene Loh: "Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7406.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7405.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7414.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
