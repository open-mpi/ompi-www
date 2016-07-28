<?
$subject_val = "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 07:11:38 2010" -->
<!-- isoreceived="20100211121138" -->
<!-- sent="Thu, 11 Feb 2010 06:10:31 -0600" -->
<!-- isosent="20100211121031" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA170566E4_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 07:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7406.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7404.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure with zero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7406.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7406.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7408.php">Eugene Loh: "Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I misparsed your reply. Yes, bcast(1) *can* sync if it wants to. I don't have a spec handy to check if bcast(0) is defined or not (similar to reduce). If it is, then sure, it could sync as well. 
<br>

<br>
My previous point was that barrier is the only collective that is *required* to synchronize. 
<br>

<br>
-jms 
<br>
Sent from my PDA. No type good.
<br>

<br>
________________________________
<br>

<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt; 
<br>
To: devel_at_[hidden] &lt;devel_at_[hidden]&gt; 
<br>
Sent: Thu Feb 11 07:04:59 2010
<br>
Subject: Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL 
<br>

<br>

<br>

<br>
Where does bcast(1) synchronize?
<br>

<br>
(Oops on typo - if reduce(1) wasn't defined, that definitely would be bad :) )
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Wed Feb 10 12:50:03 2010
<br>
Subject: Re: [OMPI devel] failure with zero-lengthReduce()andbothsbuf=rbuf=NULL
<br>

<br>
On 10 February 2010 14:19, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 10, 2010, at 11:59 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If I remember correctly, the HPCC pingpong test synchronizes occasionally by
</span><br>
<span class="quotelev3">&gt;&gt; &gt; having one process send a zero-byte broadcast to all other processes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  What's a zero-byte broadcast?  Well, some MPIs apparently send no data, but
</span><br>
<span class="quotelev3">&gt;&gt; &gt; do have synchronization semantics.  (No non-root process can exit before the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; root process has entered.)  Other MPIs treat the zero-byte broadcasts as
</span><br>
<span class="quotelev3">&gt;&gt; &gt; no-ops;  there is no synchronization and then timing results from the HPCC
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pingpong test are very misleading.  So far as I can tell, the MPI standard
</span><br>
<span class="quotelev3">&gt;&gt; &gt; doesn't address which behavior is correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yep... for p2p communication things are more clear (and behavior more
</span><br>
<span class="quotelev2">&gt;&gt; consistens in the MPI's out there) regarding zero-length messages...
</span><br>
<span class="quotelev2">&gt;&gt; IMHO, collectives should be non-op only in the sense that no actual
</span><br>
<span class="quotelev2">&gt;&gt; reduction is made because there are no elements to operate on. I mean,
</span><br>
<span class="quotelev2">&gt;&gt; if Reduce(count=1) implies a sync, Reduce(count=0) should also imply a
</span><br>
<span class="quotelev2">&gt;&gt; sync...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to disagree again.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The *only* MPI collective operation that guarantees a synchronization is barrier.  The lack of synchronization guarantee for all other collective operations is very explicit in the MPI spec.
</span><br>

<br>
Of course.
<br>

<br>
<span class="quotelev1">&gt; Hence, it is perfectly valid for an MPI implementation to do something like a no-op when no data transfer actually needs to take place
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>
So you say that an MPI implementation is free to do make a sync in
<br>
case of Bcast(count=1), but not in the case of Bcast(count=0) ? I
<br>
could agree that such behavior is technically correct regarding the
<br>
MPI standard... But it makes me feel a bit uncomfortable... OK, in the
<br>
end, the change on semantic depending on message sizes is comparable
<br>
to the blocking/nonblocking one for  MPI_Send(count=10^8) versus
<br>
Send(count=1).
<br>

<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (except, of course, the fact that Reduce(count=1) isn't defined ;-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>
You likely meant Reduce(count=0) ... Good catch ;-)
<br>

<br>

<br>
PS: The following question is unrelated to this thread, but my
<br>
curiosity+laziness cannot resist... Does Open MPI has some MCA
<br>
parameter to add a synchronization at every collective call?
<br>

<br>
--
<br>
Lisandro Dalcin
<br>
---------------
<br>
Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
<br>
Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
<br>
Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
<br>
PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
<br>
Tel/Fax: +54-(0)342-451.1594
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7405/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7406.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7404.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure with zero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7406.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7406.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7408.php">Eugene Loh: "Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
