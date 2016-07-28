<?
$subject_val = "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 11:07:58 2012" -->
<!-- isoreceived="20120201160758" -->
<!-- sent="Wed, 01 Feb 2012 08:07:52 -0800" -->
<!-- isosent="20120201160752" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun: How to print STDOUT of just one process?" -->
<!-- id="4F296358.2000903_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKpxCzL4perw6hz+zGGC52NaaTKx1g14R2kK9wo=aeHmLWbEbw_at_mail.gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 11:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18348.php">Noam Bernstein: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>In reply to:</strong> <a href="18346.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18351.php">Paul Kapinos: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/1/2012 7:59 AM, Frank wrote:
<br>
<span class="quotelev1">&gt; When running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 2&lt;prg&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the STDOUT streams of both processes are combined and are displayed by
</span><br>
<span class="quotelev1">&gt; the shell. In such an interleaved format its hard to tell what line
</span><br>
<span class="quotelev1">&gt; comes from which node.
</span><br>
As far as this part goes, there is also &quot;mpirun --tag-output&quot;.  Check 
<br>
the mpirun man page.
<br>
<span class="quotelev1">&gt; Is there a way to have mpirun just merger STDOUT of one process to its
</span><br>
<span class="quotelev1">&gt; STDOUT stream?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18348.php">Noam Bernstein: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>In reply to:</strong> <a href="18346.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18351.php">Paul Kapinos: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
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
