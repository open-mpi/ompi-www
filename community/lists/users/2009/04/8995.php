<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 09:28:30 2009" -->
<!-- isoreceived="20090421132830" -->
<!-- sent="Tue, 21 Apr 2009 09:28:24 -0400" -->
<!-- isosent="20090421132824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="406709D1-73D6-498D-8BA2-A0B2510693B4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a599d60e0904200808j4c0f3a61x9b04bb7a1c6894c5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 09:28:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8996.php">Katz, Jacob: "[OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<li><strong>Previous message:</strong> <a href="8994.php">Richard Treumann: "Re: [OMPI users] Reduce with XOR with MPI_Double"</a>
<li><strong>In reply to:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2009, at 11:08 AM, Ankush Kaul wrote:
<br>
<p><span class="quotelev1">&gt; i try to run mpicc-vt -c hello.c -o hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it gives a error
</span><br>
<span class="quotelev1">&gt; bash: mpicc-vt: command not found
</span><br>
<p><p>It sounds like your Open MPI installation was not built with  
<br>
VampirTrace support.  Note that OMPI only included VT in Open MPI v1.3  
<br>
and later.  When Open MPI is installed with VT support, mpicc-vt  
<br>
should be in $prefix/bin.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8996.php">Katz, Jacob: "[OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<li><strong>Previous message:</strong> <a href="8994.php">Richard Treumann: "Re: [OMPI users] Reduce with XOR with MPI_Double"</a>
<li><strong>In reply to:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
