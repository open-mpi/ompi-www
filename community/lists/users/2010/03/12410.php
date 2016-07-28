<?
$subject_val = "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 12:25:25 2010" -->
<!-- isoreceived="20100323162525" -->
<!-- sent="Tue, 23 Mar 2010 11:25:20 -0500" -->
<!-- isosent="20100323162520" -->
<!-- name="fengguang tian" -->
<!-- email="fernyabc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters" -->
<!-- id="958403f51003230925y25682af2k4cad30aad9498ec9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9108753b1003230837w7774d0d7m47a4b1a7a3296b71_at_mail.gmail.com" -->
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
<strong>From:</strong> fengguang tian (<em>fernyabc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 12:25:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Previous message:</strong> <a href="12409.php">Junwei Huang: "[OMPI users] error depends on the number of processors"</a>
<li><strong>In reply to:</strong> <a href="12406.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12415.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Reply:</strong> <a href="12415.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
now, I set $HOME as shared directory, but when doing ompi-checkpoint, it
<br>
shows:(nimbus1 is the remote machine in
<br>
my cluster)
<br>
<p>[nimbus1:12630] opal_os_dirpath_create: Error: Unable to create the
<br>
sub-directory (/home/mpiu/ompi_global_snapshot_1662.ckpt/0) of
<br>
(/home/mpiu/ompi_global_snapshot_1662.ckpt/0/opal_snapshot_4.ckpt), mkdir
<br>
failed [1]
<br>
[nimbus1:12630] Error: No metadata filename specified!
<br>
<p>why is that?
<br>
<p>cheers
<br>
fengguang
<br>
<p>On Tue, Mar 23, 2010 at 10:37 AM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Mar 23, 2010 at 12:24 PM, fengguang tian &lt;fernyabc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using open-mpi and blcr in a cluster of 3 machines, and the
</span><br>
<span class="quotelev1">&gt; checkpoint
</span><br>
<span class="quotelev2">&gt; &gt; and restart work fine in single machine,but when doing checkpoint in
</span><br>
<span class="quotelev2">&gt; &gt; clusters environment, the ompi-checkpoint hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besdies what has been said in another thread (regarding 1.4 and
</span><br>
<span class="quotelev1">&gt; checkpointing to shared directories), you might want to make sure your
</span><br>
<span class="quotelev1">&gt; app is terminated if you send a SIGTERM to it. Some apps might ignore
</span><br>
<span class="quotelev1">&gt; SIGTERM or handle it in a way that does not cause the apps to quit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint --term is simply ompi-checkpoint + sending SIGTERM to
</span><br>
<span class="quotelev1">&gt; the application (not sure whether SIGTERM is sent to each process
</span><br>
<span class="quotelev1">&gt; individually or not).
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Previous message:</strong> <a href="12409.php">Junwei Huang: "[OMPI users] error depends on the number of processors"</a>
<li><strong>In reply to:</strong> <a href="12406.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12415.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Reply:</strong> <a href="12415.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
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
