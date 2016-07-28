<?
$subject_val = "Re: [OMPI users] Hooks for Collective's sync/transfer activity?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 11:21:43 2009" -->
<!-- isoreceived="20090812152143" -->
<!-- sent="Wed, 12 Aug 2009 08:22:00 -0700" -->
<!-- isosent="20090812152200" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hooks for Collective's sync/transfer activity?" -->
<!-- id="4A82DE18.7080703_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f51436a752f2c467f058be0aed754136.squirrel_at_webmail.univie.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hooks for Collective's sync/transfer activity?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 11:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10324.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10322.php">Rainer Keller: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>In reply to:</strong> <a href="10321.php">Manfred Muecke: "[OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Manfred Muecke wrote:
<br>
<p><span class="quotelev1">&gt;I would like to understand in more detail how much time some collective
</span><br>
<span class="quotelev1">&gt;communication calls really spend waiting for the last process to enter. I
</span><br>
<span class="quotelev1">&gt;know this can be done by logging entry times for each process, but I
</span><br>
<span class="quotelev1">&gt;wonder if there is a better and more efficient way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
&quot;Better and more efficient&quot; depends on various considerations.  For some 
<br>
set of considerations, an expedient solution would be to write PMPI 
<br>
wrappers for the collectives in question where you force the collective 
<br>
operation to perform a barrier first.  Then, just look at how much time 
<br>
is spent in such barriers.  I don't know if that particular approach 
<br>
works for you.
<br>
<p>E.g.,
<br>
<p>int MPI_Allreduce() {
<br>
&nbsp;&nbsp;PMPI_Barrier();
<br>
&nbsp;&nbsp;return PMPI_Allreduce();
<br>
}
<br>
<p>with the appropriate dressings.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10324.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10322.php">Rainer Keller: "Re: [OMPI users] Hooks for Collective's sync/transfer activity?"</a>
<li><strong>In reply to:</strong> <a href="10321.php">Manfred Muecke: "[OMPI users] Hooks for Collective's sync/transfer activity?"</a>
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
