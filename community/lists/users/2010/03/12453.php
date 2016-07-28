<?
$subject_val = "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 11:42:18 2010" -->
<!-- isoreceived="20100329154218" -->
<!-- sent="Mon, 29 Mar 2010 11:42:14 -0400" -->
<!-- isosent="20100329154214" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI" -->
<!-- id="40D3ED6C-34C7-41D2-9D81-ACDD25F72F98_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9108753b1003231000v6d45772ejd45da5ef4d38eab4_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 11:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>Previous message:</strong> <a href="12452.php">Josh Hursey: "Re: [OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;"</a>
<li><strong>In reply to:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2010, at 1:00 PM, Fernando Lemos wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Mar 23, 2010 at 12:55 PM, fengguang tian  
</span><br>
<span class="quotelev1">&gt; &lt;fernyabc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use mpirun -np 50 -am ft-enable-cr --mca  
</span><br>
<span class="quotelev2">&gt;&gt; snapc_base_global_snapshot_dir
</span><br>
<span class="quotelev2">&gt;&gt; --hostfile .mpihostfile xxxx
</span><br>
<span class="quotelev2">&gt;&gt; to store the global checkpoint snapshot into the shared
</span><br>
<span class="quotelev2">&gt;&gt; directory:/mirror,but the problems are still there,
</span><br>
<span class="quotelev2">&gt;&gt; when ompi-checkpoint, the mpirun is still not killed,it is hanging
</span><br>
<span class="quotelev2">&gt;&gt; there.
</span><br>
<p>So the 'ompi-checkpoint' command does not finish? By default 'ompi- 
<br>
checkpoint' does not terminate the MPI job. If you pass the '--term'  
<br>
option to it, then it will.
<br>
<p><p><span class="quotelev2">&gt;&gt; when doing ompi-restart, it shows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiu_at_nimbus:/mirror$ ompi-restart ompi_global_snapshot_333.ckpt/
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Error: The filename (ompi_global_snapshot_333.ckpt/) is invalid  
</span><br>
<span class="quotelev2">&gt;&gt; because
</span><br>
<span class="quotelev2">&gt;&gt; either you have not provided a filename
</span><br>
<span class="quotelev2">&gt;&gt;        or provided an invalid filename.
</span><br>
<span class="quotelev2">&gt;&gt;        Please see --help for usage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Try removing the trailing '/' in the command. The current ompi-restart  
<br>
is not good about differentiating between :
<br>
&nbsp;&nbsp;&nbsp;ompi_global_snapshot_333.ckpt
<br>
and
<br>
&nbsp;&nbsp;&nbsp;ompi_global_snapshot_333.ckpt/
<br>
<p><p><span class="quotelev1">&gt; Have you tried OpenMPI 1.5? I got it to work with 1.5, but not with
</span><br>
<span class="quotelev1">&gt; 1.4 (but then I didn't try 1.4 with a shared filesystem).
</span><br>
<p>I would also suggest trying v1.4 or 1.5 to see if your problems  
<br>
persist with these versions.
<br>
<p>-- Josh
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>Previous message:</strong> <a href="12452.php">Josh Hursey: "Re: [OMPI users] Meaning and the significance of MCA parameter &quot;opal_cr_use_thread&quot;"</a>
<li><strong>In reply to:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
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
