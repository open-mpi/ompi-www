<?
$subject_val = "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 17:38:16 2016" -->
<!-- isoreceived="20160316213816" -->
<!-- sent="Wed, 16 Mar 2016 17:38:15 -0400" -->
<!-- isosent="20160316213815" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?" -->
<!-- id="CAHXxYDjzvTgtcYNzpzvrYW0JJCkbfBFp_PKEKjUr4qmw1FTMog_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDjjAwVxXEv2_Qy=2UHCoJuLSNFcS56o10GkoDdmSFf5wQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 17:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Previous message:</strong> <a href="18704.php">dpchoudh .: "[OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18704.php">dpchoudh .: "[OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Reply:</strong> <a href="18707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>Anyone willing to help?  :-)
<br>
<p>I now have a follow up question:
<br>
I was trying to figure this out myself by taking the backtrace from the
<br>
BTLs that do work, and found that, since most of the internal functions are
<br>
not exported, the backtraces contain just the addresses which are not all
<br>
that helpful (this is even after building with --enable-debug.) This is
<br>
going back to a question that I myself asked recently, and I am now finding
<br>
out the answer the hard way!
<br>
<p>Is there any way that all the internal functions, not explicitly declared
<br>
'static' can be made visible?
<br>
<p>Thanks
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p>On Wed, Mar 16, 2016 at 12:52 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about asking too many 101 level question, but here is another one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a BTL layer code, called 'lf' that is ready for unit testing; it
</span><br>
<span class="quotelev1">&gt; compiles with the OMPI tool chain (by doing a ./configure; make from the
</span><br>
<span class="quotelev1">&gt; top level directory) and have the basic data transport calls implemented.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I 'hook up' the BTL to the OMPI call chain?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I do the following:
</span><br>
<span class="quotelev1">&gt; mpirin -np 2 --hostfile ~/hostfile -mca btl lf,self ./NPmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it fails to run and the gist of the failure is that it does not even
</span><br>
<span class="quotelev1">&gt; attempt connecting with the 'lf' BTL (the error says: 'BTLs attempted:
</span><br>
<span class="quotelev1">&gt; self')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 'lf' NIC, and RDMA capable card, also has a TCP/IP interface and
</span><br>
<span class="quotelev1">&gt; replacing 'lf' with 'tcp' in the above command *does* work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18705/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Previous message:</strong> <a href="18704.php">dpchoudh .: "[OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18704.php">dpchoudh .: "[OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Reply:</strong> <a href="18707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
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
