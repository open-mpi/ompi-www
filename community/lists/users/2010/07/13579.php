<?
$subject_val = "Re: [OMPI users] Dynamic process tutorials?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 11 02:53:21 2010" -->
<!-- isoreceived="20100711065321" -->
<!-- sent="Sun, 11 Jul 2010 08:53:15 +0200" -->
<!-- isosent="20100711065315" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic process tutorials?" -->
<!-- id="AANLkTimDmnCFVSYc4J4QybpOivySJ5yVuucrnHOJXJt5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikYjGA0Qjqq0uP7ttgD8q-7cI4u4PmTpmyy73or_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic process tutorials?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-11 02:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13578.php">Eugene Loh: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13562.php">Brian Budge: "[OMPI users] Dynamic process tutorials?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13590.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Reply:</strong> <a href="13590.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian
<br>
When you spawn processes with MPI_Comm_spawn(), one of the arguments
<br>
will be set to an intercommunicator of thes spawner and the spawnees.
<br>
You can use this intercommunicator as the communicator argument
<br>
in the MPI_functions.
<br>
<p>Jody
<br>
On Fri, Jul 9, 2010 at 5:56 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been looking at the dynamic process features of mpi-2.&#160; I have managed
</span><br>
<span class="quotelev1">&gt; to actually launch processes using spawn, but haven't seen examples for
</span><br>
<span class="quotelev1">&gt; actually communicating once these processes are launched.&#160; I am additionally
</span><br>
<span class="quotelev1">&gt; interested in how processes created through multiple spawn calls can
</span><br>
<span class="quotelev1">&gt; communicate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know of resources that describe these topics?&#160; My google-fu must
</span><br>
<span class="quotelev1">&gt; not be up to par :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &#160; Brian
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13580.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13578.php">Eugene Loh: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13562.php">Brian Budge: "[OMPI users] Dynamic process tutorials?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13590.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Reply:</strong> <a href="13590.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
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
