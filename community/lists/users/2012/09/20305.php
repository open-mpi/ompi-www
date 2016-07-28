<?
$subject_val = "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 09:38:28 2012" -->
<!-- isoreceived="20120925133828" -->
<!-- sent="Tue, 25 Sep 2012 13:38:23 +0000" -->
<!-- isosent="20120925133823" -->
<!-- name="Tom Bryan (tombry)" -->
<!-- email="tombry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi test program &amp;quot;ring&amp;quot; failed: blocked at MPI_Send" -->
<!-- id="CC872B27.75F6%tombry_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9A28D233-588E-4038-BE4D-4B1512E9D6F2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send<br>
<strong>From:</strong> Tom Bryan (tombry) (<em>tombry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 09:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20304.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="20304.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20323.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20323.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/25/12 9:10 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt;problem, so i fixed it using &quot;--mca btl_tcp_if_include bond0&quot; because I
</span><br>
<span class="quotelev2">&gt;&gt;know this is the high speed network interface I should use on each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Glad it works for you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If you're not using those interfaces (they might be related to Xen, or
</span><br>
<span class="quotelev1">&gt;something like that?), you might want to disable them.
</span><br>
<p>YMMV, but on our RHEL machines, I believe that the virbr0 interface is
<br>
coming from the libvirt package.
<br>
<p>---Tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20304.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="20304.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20323.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20323.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
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
