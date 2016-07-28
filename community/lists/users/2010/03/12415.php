<?
$subject_val = "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 21:59:00 2010" -->
<!-- isoreceived="20100324015900" -->
<!-- sent="Tue, 23 Mar 2010 22:58:55 -0300" -->
<!-- isosent="20100324015855" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters" -->
<!-- id="9108753b1003231858k779757caqcdd16704c17d41b1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="958403f51003230925y25682af2k4cad30aad9498ec9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 21:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12416.php">Anton Starikov: "[OMPI users] strange problem with OpenMPI + rankfile + Intel compiler 11.0.074 + centos/fedora-12"</a>
<li><strong>Previous message:</strong> <a href="12414.php">fengguang tian: "[OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>In reply to:</strong> <a href="12410.php">fengguang tian: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 23, 2010 at 1:25 PM, fengguang tian &lt;fernyabc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; now, I set $HOME as shared directory, but when doing ompi-checkpoint, it
</span><br>
<span class="quotelev1">&gt; shows:(nimbus1 is the remote machine in
</span><br>
<span class="quotelev1">&gt; my cluster)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nimbus1:12630] opal_os_dirpath_create: Error: Unable to create the
</span><br>
<span class="quotelev1">&gt; sub-directory (/home/mpiu/ompi_global_snapshot_1662.ckpt/0) of
</span><br>
<span class="quotelev1">&gt; (/home/mpiu/ompi_global_snapshot_1662.ckpt/0/opal_snapshot_4.ckpt), mkdir
</span><br>
<span class="quotelev1">&gt; failed [1]
</span><br>
<span class="quotelev1">&gt; [nimbus1:12630] Error: No metadata filename specified!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; why is that?
</span><br>
<p>The error is described in the error message...
<br>
<p>[nimbus1:12630] opal_os_dirpath_create: Error: Unable to create the
<br>
sub-directory (/home/mpiu/ompi_global_snapshot_1662.ckpt/0) of
<br>
(/home/mpiu/ompi_global_snapshot_1662.ckpt/0/opal_snapshot_4.ckpt),
<br>
mkdir failed [1]
<br>
<p>If the number between brackets is errno, that is EPERM, &quot;Operation not
<br>
permitted&quot;. Most likely the user running mpirun doesn't have the
<br>
necessary privileges to write to the shared file system (i.e., the
<br>
file system is mounted read-only or you don't have write access to the
<br>
directory or something of that sort).
<br>
<p>Also, please make sure you don't post the same issue twice to the mailing list.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12416.php">Anton Starikov: "[OMPI users] strange problem with OpenMPI + rankfile + Intel compiler 11.0.074 + centos/fedora-12"</a>
<li><strong>Previous message:</strong> <a href="12414.php">fengguang tian: "[OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>In reply to:</strong> <a href="12410.php">fengguang tian: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
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
