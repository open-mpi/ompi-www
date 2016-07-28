<?
$subject_val = "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 08:01:58 2016" -->
<!-- isoreceived="20160317120158" -->
<!-- sent="Thu, 17 Mar 2016 21:01:57 +0900" -->
<!-- isosent="20160317120157" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?" -->
<!-- id="CAAkFZ5tnH93Ff2hf=7yiHz_J9XXU7g=E1y1pq4mzFxTTEb_VVA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 08:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18709.php">Howard: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Previous message:</strong> <a href="18707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18704.php">dpchoudh .: "[OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
if you did not configure with --disable-dlopen, you need to make install
<br>
from opal/mca/btl/If
<br>
if not, you need make install from your top builddir
<br>
<p>you can
<br>
mpirun --mca btl_base_verbose 100 ...
<br>
to see if your btl was found and did not somehow disqualify itself
<br>
(for example because it's priority is zero)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, March 17, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18709.php">Howard: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Previous message:</strong> <a href="18707.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18704.php">dpchoudh .: "[OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
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
