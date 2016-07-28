<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 14:42:39 2006" -->
<!-- isoreceived="20060906184239" -->
<!-- sent="Wed, 06 Sep 2006 12:42:36 -0600" -->
<!-- isosent="20060906184236" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Probable MPI2 bug?" -->
<!-- id="1157568156.22686.74.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="44FF080C.5070603_at_reachone.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-06 14:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1834.php">Brignone, Sergio: "[OMPI users] problems when creating library for AIX"</a>
<li><strong>Previous message:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>In reply to:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2006-09-06 at 10:40 -0700, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I notice in the OMPI_INFO output the following parameters that seem
</span><br>
<span class="quotelev1">&gt; relevant to this problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically the 'self_max_send_size=262144', which I assume is the
</span><br>
<span class="quotelev1">&gt; maximum size (bytes?) message a processor can send to itself.  None of
</span><br>
<span class="quotelev1">&gt; the messages in my above tests approached this limit.  However, I am
</span><br>
<span class="quotelev1">&gt; puzzled by this, because the program below runs correctly for
</span><br>
<span class="quotelev1">&gt; ridiculously large message sizes (as shown 200 Mbytes).
</span><br>
<p>The self_max_send_size is the maximum size of a fragment that can be
<br>
sent with that btl.  The upper layer (the PML for point-to-point or the
<br>
one-sided component) is responsible for fragmenting the message into
<br>
small enough chunks.  There are actually a couple of papers on our web
<br>
site about how we do this (and even a bit of why we do it).  I'm pretty
<br>
sure this isn't the problem -- I think the one-sided implementation
<br>
violating an assumption of the point-to-point semantics internally,
<br>
which is causing the badness.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1834.php">Brignone, Sergio: "[OMPI users] problems when creating library for AIX"</a>
<li><strong>Previous message:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>In reply to:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
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
