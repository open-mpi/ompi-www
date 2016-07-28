<?
$subject_val = "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 13:00:07 2010" -->
<!-- isoreceived="20100323170007" -->
<!-- sent="Tue, 23 Mar 2010 14:00:02 -0300" -->
<!-- isosent="20100323170002" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI" -->
<!-- id="9108753b1003231000v6d45772ejd45da5ef4d38eab4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="958403f51003230855w56ce7e7cl86d37c61a991529c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 13:00:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12413.php">Rolf vandeVaarrt: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Previous message:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>In reply to:</strong> <a href="12408.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 23, 2010 at 12:55 PM, fengguang tian &lt;fernyabc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use mpirun -np 50 -am ft-enable-cr --mca snapc_base_global_snapshot_dir
</span><br>
<span class="quotelev1">&gt; --hostfile .mpihostfile xxxx
</span><br>
<span class="quotelev1">&gt; to store the global checkpoint snapshot into the shared
</span><br>
<span class="quotelev1">&gt; directory:/mirror,but the problems are still there,
</span><br>
<span class="quotelev1">&gt; when ompi-checkpoint, the mpirun is still not killed,it is hanging
</span><br>
<span class="quotelev1">&gt; there.when doing ompi-restart, it shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiu_at_nimbus:/mirror$ ompi-restart ompi_global_snapshot_333.ckpt/
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (ompi_global_snapshot_333.ckpt/) is invalid because
</span><br>
<span class="quotelev1">&gt; either you have not provided a filename
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; Please see --help for usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>Have you tried OpenMPI 1.5? I got it to work with 1.5, but not with
<br>
1.4 (but then I didn't try 1.4 with a shared filesystem).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12413.php">Rolf vandeVaarrt: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Previous message:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>In reply to:</strong> <a href="12408.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
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
