<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 12:50:08 2010" -->
<!-- isoreceived="20100210175008" -->
<!-- sent="Wed, 10 Feb 2010 14:50:03 -0300" -->
<!-- isosent="20100210175003" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL" -->
<!-- id="e7ba66e41002100950v526b70f1t308af062fc0a1ba9_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B3198E48-8A2E-48B7-AEFA-0B69645FB3D5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 12:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7400.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7400.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7400.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<span class="quotelev3">&gt;&gt; &gt; &#194;&#160;What's a zero-byte broadcast? &#194;&#160;Well, some MPIs apparently send no data, but
</span><br>
<span class="quotelev3">&gt;&gt; &gt; do have synchronization semantics. &#194;&#160;(No non-root process can exit before the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; root process has entered.) &#194;&#160;Other MPIs treat the zero-byte broadcasts as
</span><br>
<span class="quotelev3">&gt;&gt; &gt; no-ops; &#194;&#160;there is no synchronization and then timing results from the HPCC
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pingpong test are very misleading. &#194;&#160;So far as I can tell, the MPI standard
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
<span class="quotelev1">&gt; Sorry to disagree again. &#194;&#160;:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The *only* MPI collective operation that guarantees a synchronization is barrier. &#194;&#160;The lack of synchronization guarantee for all other collective operations is very explicit in the MPI spec.
</span><br>
<p>Of course.
<br>
<p><span class="quotelev1">&gt; Hence, it is perfectly valid for an MPI implementation to do something like a no-op when no data transfer actually needs to take place
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So you say that an MPI implementation is free to do make a sync in
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
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (except, of course, the fact that Reduce(count=1) isn't defined ;-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You likely meant Reduce(count=0) ... Good catch ;-)
<br>
<p><p>PS: The following question is unrelated to this thread, but my
<br>
curiosity+laziness cannot resist... Does Open MPI has some MCA
<br>
parameter to add a synchronization at every collective call?
<br>
<p><pre>
-- 
Lisandro Dalcin
---------------
Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7400.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7400.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7400.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
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
