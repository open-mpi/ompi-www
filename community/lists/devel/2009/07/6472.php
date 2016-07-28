<?
$subject_val = "[OMPI devel] BTL receive callback";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 11:55:47 2009" -->
<!-- isoreceived="20090721155547" -->
<!-- sent="Tue, 21 Jul 2009 17:55:43 +0200" -->
<!-- isosent="20090721155543" -->
<!-- name="Sebastian Rinke" -->
<!-- email="rinke_at_[hidden]" -->
<!-- subject="[OMPI devel] BTL receive callback" -->
<!-- id="20090721175543.10915o0v9hx0trlr_at_mail.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] BTL receive callback<br>
<strong>From:</strong> Sebastian Rinke (<em>rinke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 11:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6471.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Reply:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Reply:</strong> <a href="6507.php">Don Kerr: "Re: [OMPI devel] BTL receive callback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am developing a new BTL component (Open MPI v1.3.2) for a new  
<br>
3D-torus interconnect. During a simple message transfer of 16362 B  
<br>
between two nodes with MPI_Send(), MPI_Recv() I encounter the following:
<br>
<p>The sender:
<br>
-----------
<br>
<p>1. prepare_src() size: 16304 reserve: 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-&gt; alloc() size: 16336
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-&gt; ompi_convertor_pack(): 16304
<br>
2. send()
<br>
3. component_progress()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-&gt; send cb ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-&gt; free()
<br>
4. component_progress()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-&gt; recv cb ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; prepare_src() size: 58 reserve: 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; alloc() size: 90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; ompi_convertor_pack(): 58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; free() size: 90  Send is missing !!!
<br>
5. NO PROGRESS
<br>
<p>The receiver:
<br>
-------------
<br>
<p>1. component_progress()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-&gt; recv cb ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; alloc() size: 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; send()
<br>
2. component_progress()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-&gt; send cb ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-&gt; free() size: 32
<br>
3. component_progress() for ever !!!
<br>
<p>The problem is that after prepare_src() for the 2nd fragment, the
<br>
sender calls free() instead of send() in its recv cb. Thus, the 2nd
<br>
fragment is not being transmitted.
<br>
As a consequence, the receiver waits for the 2nd fragment.
<br>
<p>I have found that mca_pml_ob1_recv_frag_callback_ack() is  the
<br>
corresponding recv cb. Before diving into the ob1 code,
<br>
could you tell me under which conditions this cb calls free() instead  
<br>
of send()
<br>
so that I can get an idea of where to look for errors in my BTL component.
<br>
<p>Thank you very much in advance.
<br>
<p>Sebastian Rinke
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6471.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Reply:</strong> <a href="6473.php">George Bosilca: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Reply:</strong> <a href="6507.php">Don Kerr: "Re: [OMPI devel] BTL receive callback"</a>
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
