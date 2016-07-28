<?
$subject_val = "Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  3 19:09:52 2008" -->
<!-- isoreceived="20080204000952" -->
<!-- sent="Sun, 3 Feb 2008 19:09:45 -0500" -->
<!-- isosent="20080204000945" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error" -->
<!-- id="A1DB843A-F95C-4661-8346-98A67A0EE957_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0802020935040.16169_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-03 19:09:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Previous message:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4950.php">Lydia Heck: "[OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lydia,
<br>
<p>This message means that the TCP driver try to send some illegal  
<br>
buffer. Look like the send failed while sending 16 bytes, which is  
<br>
pretty uncommon. What is this application? Do you get the same error  
<br>
message when running with fewer nodes?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Feb 2, 2008, at 4:37 AM, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In one of our big runs (512 cpus) the code fails and produces on a  
</span><br>
<span class="quotelev1">&gt; list
</span><br>
<span class="quotelev1">&gt; of nodes the following type of error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have searched the FAQs but could not find an answer there.
</span><br>
<span class="quotelev1">&gt; There are difficulties getting the code to run because of its shear  
</span><br>
<span class="quotelev1">&gt; size
</span><br>
<span class="quotelev1">&gt; but there is no other indication of the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does the following error message mean the some of the nodes have  
</span><br>
<span class="quotelev1">&gt; given up?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error
</span><br>
<span class="quotelev1">&gt; ([361eca8[m2234][0,1,283][m2317, 16][0,)
</span><br>
<span class="quotelev1">&gt;        1Bad address,422(3)
</span><br>
<span class="quotelev1">&gt; ][[
</span><br>
<span class="quotelev1">&gt; /ws/hpc-ct-7.1/builds/7.1.build-ct7.1-003c/ompi-ct7.1/ompi/mca/btl/ 
</span><br>
<span class="quotelev1">&gt; tcp/btl_tcp_frag.c:114:mca_btl_tcp
</span><br>
<span class="quotelev1">&gt; _frag_send]
</span><br>
<span class="quotelev1">&gt; /ws/hpc-ct-7.1/builds/7.1.build-ct7.1-003c/ompi-ct7.1/ompi/mca/btl/ 
</span><br>
<span class="quotelev1">&gt; tcp/btl_tcp_frag.c[m22
</span><br>
<span class="quotelev1">&gt; 41][0,1,430][m2140[m2152][0,1,150][mca_btl_tcp_frag_send: writev  
</span><br>
<span class="quotelev1">&gt; error (3c759a8,
</span><br>
<span class="quotelev1">&gt; 16)
</span><br>
<span class="quotelev1">&gt;        Bad address(3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4952/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Previous message:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4950.php">Lydia Heck: "[OMPI users] mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error"</a>
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
