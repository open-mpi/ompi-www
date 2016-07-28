<?
$subject_val = "Re: [OMPI devel] BTL receive callback";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 12:19:21 2009" -->
<!-- isoreceived="20090721161921" -->
<!-- sent="Tue, 21 Jul 2009 12:19:12 -0400" -->
<!-- isosent="20090721161912" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL receive callback" -->
<!-- id="2E31FEDF-8AD0-4304-93F3-FD8191884F65_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090721175543.10915o0v9hx0trlr_at_mail.tu-chemnitz.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL receive callback<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 12:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6474.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6472.php">Sebastian Rinke: "[OMPI devel] BTL receive callback"</a>
<li><strong>In reply to:</strong> <a href="6472.php">Sebastian Rinke: "[OMPI devel] BTL receive callback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6474.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Reply:</strong> <a href="6474.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on your code the only reason I can imagine for the second send  
<br>
to never be triggered is that the request is considered completed at  
<br>
that point.
<br>
<p>I can't imagine how the free is called without a prior send. If I look  
<br>
at the code pml_ob1_sendreq.c:1061, the free is only called when the  
<br>
send fails, but it is always preceded by a send.
<br>
<p>Can you check the return values of the ompi_convertor_pack and  
<br>
prepare_src please?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 21, 2009, at 11:55 , Sebastian Rinke wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am developing a new BTL component (Open MPI v1.3.2) for a new 3D- 
</span><br>
<span class="quotelev1">&gt; torus interconnect. During a simple message transfer of 16362 B  
</span><br>
<span class="quotelev1">&gt; between two nodes with MPI_Send(), MPI_Recv() I encounter the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sender:
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. prepare_src() size: 16304 reserve: 32
</span><br>
<span class="quotelev1">&gt;   -&gt; alloc() size: 16336
</span><br>
<span class="quotelev1">&gt;   -&gt; ompi_convertor_pack(): 16304
</span><br>
<span class="quotelev1">&gt; 2. send()
</span><br>
<span class="quotelev1">&gt; 3. component_progress()
</span><br>
<span class="quotelev1">&gt;   -&gt; send cb ()
</span><br>
<span class="quotelev1">&gt;   -&gt; free()
</span><br>
<span class="quotelev1">&gt; 4. component_progress()
</span><br>
<span class="quotelev1">&gt;   -&gt; recv cb ()
</span><br>
<span class="quotelev1">&gt;      -&gt; prepare_src() size: 58 reserve: 32
</span><br>
<span class="quotelev1">&gt;         -&gt; alloc() size: 90
</span><br>
<span class="quotelev1">&gt;         -&gt; ompi_convertor_pack(): 58
</span><br>
<span class="quotelev1">&gt;      -&gt; free() size: 90  Send is missing !!!
</span><br>
<span class="quotelev1">&gt; 5. NO PROGRESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The receiver:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. component_progress()
</span><br>
<span class="quotelev1">&gt;   -&gt; recv cb ()
</span><br>
<span class="quotelev1">&gt;      -&gt; alloc() size: 32
</span><br>
<span class="quotelev1">&gt;      -&gt; send()
</span><br>
<span class="quotelev1">&gt; 2. component_progress()
</span><br>
<span class="quotelev1">&gt;   -&gt; send cb ()
</span><br>
<span class="quotelev1">&gt;   -&gt; free() size: 32
</span><br>
<span class="quotelev1">&gt; 3. component_progress() for ever !!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that after prepare_src() for the 2nd fragment, the
</span><br>
<span class="quotelev1">&gt; sender calls free() instead of send() in its recv cb. Thus, the 2nd
</span><br>
<span class="quotelev1">&gt; fragment is not being transmitted.
</span><br>
<span class="quotelev1">&gt; As a consequence, the receiver waits for the 2nd fragment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have found that mca_pml_ob1_recv_frag_callback_ack() is  the
</span><br>
<span class="quotelev1">&gt; corresponding recv cb. Before diving into the ob1 code,
</span><br>
<span class="quotelev1">&gt; could you tell me under which conditions this cb calls free()  
</span><br>
<span class="quotelev1">&gt; instead of send()
</span><br>
<span class="quotelev1">&gt; so that I can get an idea of where to look for errors in my BTL  
</span><br>
<span class="quotelev1">&gt; component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sebastian Rinke
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
<li><strong>Next message:</strong> <a href="6474.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6472.php">Sebastian Rinke: "[OMPI devel] BTL receive callback"</a>
<li><strong>In reply to:</strong> <a href="6472.php">Sebastian Rinke: "[OMPI devel] BTL receive callback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6474.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Reply:</strong> <a href="6474.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
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
