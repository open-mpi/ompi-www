<?
$subject_val = "Re: [OMPI devel] BTL receive callback";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 15:45:29 2009" -->
<!-- isoreceived="20090721194529" -->
<!-- sent="Tue, 21 Jul 2009 21:45:22 +0200" -->
<!-- isosent="20090721194522" -->
<!-- name="Sebastian Rinke" -->
<!-- email="rinke_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL receive callback" -->
<!-- id="20090721214522.42742t0trwilu0gi_at_mail.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2E31FEDF-8AD0-4304-93F3-FD8191884F65_at_eecs.utk.edu" -->
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
<strong>From:</strong> Sebastian Rinke (<em>rinke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 15:45:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6475.php">Jeff Squyres: "[OMPI devel] lotsa errors in new autodetect component"</a>
<li><strong>Previous message:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>In reply to:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6507.php">Don Kerr: "Re: [OMPI devel] BTL receive callback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your hint. I found that prepare_src() didn't
<br>
return the correct size, i.e. it did
<br>
<p>ompi_convertor_pack(...,&amp;max_data);
<br>
*size = max_data;
<br>
<p>However, after ompi_convertor_pack(), max_data == 0 thus *size == 0
<br>
and free() is called without a prior send() in pml_ob1_sendreq.c:1064
<br>
<p>I took this order from btl_openib.c's prepare_src().
<br>
So it seems that it doesn't cause any problems there but for me it does.
<br>
<p>Thanks for your help.
<br>
Sebastian.
<br>
<p><p>Quoting George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Based on your code the only reason I can imagine for the second send  
</span><br>
<span class="quotelev1">&gt; to never be triggered is that the request is considered completed at  
</span><br>
<span class="quotelev1">&gt; that point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't imagine how the free is called without a prior send. If I  
</span><br>
<span class="quotelev1">&gt; look at the code pml_ob1_sendreq.c:1061, the free is only called  
</span><br>
<span class="quotelev1">&gt; when the send fails, but it is always preceded by a send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you check the return values of the ompi_convertor_pack and  
</span><br>
<span class="quotelev1">&gt; prepare_src please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2009, at 11:55 , Sebastian Rinke wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I am developing a new BTL component (Open MPI v1.3.2) for a new  
</span><br>
<span class="quotelev2">&gt;&gt; 3D-torus interconnect. During a simple message transfer of 16362 B  
</span><br>
<span class="quotelev2">&gt;&gt; between two nodes with MPI_Send(), MPI_Recv() I encounter the  
</span><br>
<span class="quotelev2">&gt;&gt; following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The sender:
</span><br>
<span class="quotelev2">&gt;&gt; -----------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. prepare_src() size: 16304 reserve: 32
</span><br>
<span class="quotelev2">&gt;&gt;  -&gt; alloc() size: 16336
</span><br>
<span class="quotelev2">&gt;&gt;  -&gt; ompi_convertor_pack(): 16304
</span><br>
<span class="quotelev2">&gt;&gt; 2. send()
</span><br>
<span class="quotelev2">&gt;&gt; 3. component_progress()
</span><br>
<span class="quotelev2">&gt;&gt;  -&gt; send cb ()
</span><br>
<span class="quotelev2">&gt;&gt;  -&gt; free()
</span><br>
<span class="quotelev2">&gt;&gt; 4. component_progress()
</span><br>
<span class="quotelev2">&gt;&gt;  -&gt; recv cb ()
</span><br>
<span class="quotelev2">&gt;&gt;     -&gt; prepare_src() size: 58 reserve: 32
</span><br>
<span class="quotelev2">&gt;&gt;        -&gt; alloc() size: 90
</span><br>
<span class="quotelev2">&gt;&gt;        -&gt; ompi_convertor_pack(): 58
</span><br>
<span class="quotelev2">&gt;&gt;     -&gt; free() size: 90  Send is missing !!!
</span><br>
<span class="quotelev2">&gt;&gt; 5. NO PROGRESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The receiver:
</span><br>
<span class="quotelev2">&gt;&gt; -------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. component_progress()
</span><br>
<span class="quotelev2">&gt;&gt;  -&gt; recv cb ()
</span><br>
<span class="quotelev2">&gt;&gt;     -&gt; alloc() size: 32
</span><br>
<span class="quotelev2">&gt;&gt;     -&gt; send()
</span><br>
<span class="quotelev2">&gt;&gt; 2. component_progress()
</span><br>
<span class="quotelev2">&gt;&gt;  -&gt; send cb ()
</span><br>
<span class="quotelev2">&gt;&gt;  -&gt; free() size: 32
</span><br>
<span class="quotelev2">&gt;&gt; 3. component_progress() for ever !!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that after prepare_src() for the 2nd fragment, the
</span><br>
<span class="quotelev2">&gt;&gt; sender calls free() instead of send() in its recv cb. Thus, the 2nd
</span><br>
<span class="quotelev2">&gt;&gt; fragment is not being transmitted.
</span><br>
<span class="quotelev2">&gt;&gt; As a consequence, the receiver waits for the 2nd fragment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have found that mca_pml_ob1_recv_frag_callback_ack() is  the
</span><br>
<span class="quotelev2">&gt;&gt; corresponding recv cb. Before diving into the ob1 code,
</span><br>
<span class="quotelev2">&gt;&gt; could you tell me under which conditions this cb calls free()  
</span><br>
<span class="quotelev2">&gt;&gt; instead of send()
</span><br>
<span class="quotelev2">&gt;&gt; so that I can get an idea of where to look for errors in my BTL component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian Rinke
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6475.php">Jeff Squyres: "[OMPI devel] lotsa errors in new autodetect component"</a>
<li><strong>Previous message:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>In reply to:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6507.php">Don Kerr: "Re: [OMPI devel] BTL receive callback"</a>
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
