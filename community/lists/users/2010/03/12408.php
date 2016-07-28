<?
$subject_val = "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 11:55:30 2010" -->
<!-- isoreceived="20100323155530" -->
<!-- sent="Tue, 23 Mar 2010 10:55:25 -0500" -->
<!-- isosent="20100323155525" -->
<!-- name="fengguang tian" -->
<!-- email="fernyabc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI" -->
<!-- id="958403f51003230855w56ce7e7cl86d37c61a991529c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9108753b1003230834w31da614co86b51f6ff08651a6_at_mail.gmail.com" -->
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
<strong>From:</strong> fengguang tian (<em>fernyabc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 11:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12409.php">Junwei Huang: "[OMPI users] error depends on the number of processors"</a>
<li><strong>Previous message:</strong> <a href="12407.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use mpirun -np 50 -am ft-enable-cr --mca snapc_base_global_snapshot_dir
<br>
--hostfile .mpihostfile xxxx
<br>
to store the global checkpoint snapshot into the shared
<br>
directory:/mirror,but the problems are still there,
<br>
when ompi-checkpoint, the mpirun is still not killed,it is hanging
<br>
there.when doing ompi-restart, it shows:
<br>
<p>mpiu_at_nimbus:/mirror$ ompi-restart ompi_global_snapshot_333.ckpt/
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (ompi_global_snapshot_333.ckpt/) is invalid because
<br>
either you have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>cheers
<br>
fengguang
<br>
<p>On Tue, Mar 23, 2010 at 10:34 AM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Mar 23, 2010 at 12:27 PM, fengguang tian &lt;fernyabc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have created the shared file system. but I created a /mirror at root
</span><br>
<span class="quotelev2">&gt; &gt; directory,not at the $HOME directory,is that the
</span><br>
<span class="quotelev2">&gt; &gt; problem? thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Others might be able to give you more a accurate explanation. The way
</span><br>
<span class="quotelev1">&gt; I understood it, in OpenMPI 1.4, you need to write all checkpoints to
</span><br>
<span class="quotelev1">&gt; a single, shared location. That's why you generally want a shared file
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I'm pretty sure you can change the directory to which the
</span><br>
<span class="quotelev1">&gt; checkpoints are written. If you $HOME isn't a shared directory, you
</span><br>
<span class="quotelev1">&gt; can point OpenMPI to write the checkpoints to the shared directory
</span><br>
<span class="quotelev1">&gt; instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OpenMPI 1.5 (unstable), some magic allows you to create the
</span><br>
<span class="quotelev1">&gt; checkpoints and restore them without a shared directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12408/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12409.php">Junwei Huang: "[OMPI users] error depends on the number of processors"</a>
<li><strong>Previous message:</strong> <a href="12407.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
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
