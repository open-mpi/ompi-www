<?
$subject_val = "Re: [OMPI users] How to check OMPI is using IB or not?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 10:21:55 2010" -->
<!-- isoreceived="20100127152155" -->
<!-- sent="Wed, 27 Jan 2010 07:23:39 -0800" -->
<!-- isosent="20100127152339" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check OMPI is using IB or not?" -->
<!-- id="4B605A7B.3030705_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45441544.886661264576251036.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to check OMPI is using IB or not?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-27 10:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11898.php">Jaison Paul: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11896.php">Sangamesh B: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>In reply to:</strong> <a href="11895.php">Brett Pemberton: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You could also rule Ethernet (TCP) out.  E.g.,
<br>
<p>mpirun --mca btl self,openib ./a.out
<br>
<p>Or, if you wanted the opposite (Ethernet/TCP, but not IB), then
<br>
<p>mpirun --mca btl self,tcp ./a.out
<br>
<p><span class="quotelev2">&gt;&gt;If an infiniband network is configured successfully, how to confirm
</span><br>
<span class="quotelev2">&gt;&gt;that Open MPI is using infiniband, not other ethernet network
</span><br>
<span class="quotelev2">&gt;&gt;available?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11898.php">Jaison Paul: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11896.php">Sangamesh B: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
<li><strong>In reply to:</strong> <a href="11895.php">Brett Pemberton: "Re: [OMPI users] How to check OMPI is using IB or not?"</a>
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
