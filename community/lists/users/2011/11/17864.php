<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 06:05:12 2011" -->
<!-- isoreceived="20111130110512" -->
<!-- sent="Wed, 30 Nov 2011 11:03:03 +0000 (UTC)" -->
<!-- isosent="20111130110303" -->
<!-- name="Jaison Paul" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="loom.20111130T115932-218_at_post.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EDC5949A-0817-4F7B-AECE-98EDDC5BBF25_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh<br>
<strong>From:</strong> Jaison Paul (<em>jmulerik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 06:03:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17863.php">Rob Latham: "Re: [OMPI users] MPI_File_Write"</a>
<li><strong>In reply to:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17866.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc &lt;at&gt; open-mpi.org&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 24, 2011, at 2:00 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Thanks a lot to Ralph and Reuti.
<br>
<p>Actually we are trying to use EC2 nodes as compute nodes and my local PC as host
<br>
node. 
<br>
<p>Happy to know that it is OK to use user&lt;at&gt;somehost.com
<br>
<p>We used that but failed. Would try again. 
<br>
<p>Yes, we have set up .ssh file on remote EC2 hosts. Is there anything else that
<br>
we should be taking care of when dealing with EC2?
<br>
<p>Jaison
<br>
<p><p><span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am 24.11.2011 um 05:26 schrieb Jaison Paul:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to access OpenMPI processes over Internet using ssh and not
</span><br>
quite successful, yet. I believe
<br>
<span class="quotelev1">&gt; that I should be able to do it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have to run one process on my PC and the rest on a remote cluster over
</span><br>
internet. I have set the public keys
<br>
<span class="quotelev1">&gt; (at .ssh/authorized_keys) to access remote nodes without a password.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I use hostfile to run mpi. It will read something like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; localhost
</span><br>
<span class="quotelev3">&gt; &gt;&gt; user &lt;at&gt; remotehost.com
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; this is not a valid syntax for Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This isn't correct - we have long supported that syntax in a hostfile, and
</span><br>
there is no issue with having a
<br>
<span class="quotelev1">&gt; different user name at each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jaison: are you sure your nodes are setup for password-less ssh? In other
</span><br>
words, have you setup your .ssh
<br>
<span class="quotelev1">&gt; files on the remote nodes so they will allow us to ssh a process on them
</span><br>
without providing a password? This is
<br>
<span class="quotelev1">&gt; the typical problem we see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But it fails.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The issue seems to be the user! That is, the user on my PC is different to
</span><br>
that of user at remotehosts. That's
<br>
<span class="quotelev1">&gt; my assumption.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is this the problem? Is there any work-around to solve this issue? Do I
</span><br>
need to have same username at all
<br>
<span class="quotelev1">&gt; nodes to solve this issue?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You can define nicknames for an ssh connection in a file ~/.ssh/config like:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Host foobar
</span><br>
<span class="quotelev2">&gt; &gt;    User baz
</span><br>
<span class="quotelev2">&gt; &gt;    Hostname the.remote.server.demo
</span><br>
<span class="quotelev2">&gt; &gt;    Port 1234
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; While this will work with any nickname for an ssh connection, in your case
</span><br>
the nickname must match the one
<br>
<span class="quotelev1">&gt; specified in the hostfile, as Open MPI won't use this lookup file:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Host remotehost.com
</span><br>
<span class="quotelev2">&gt; &gt;    User user
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ssh should then use the entries therein to initiate the connection. For
</span><br>
details you can have a look at `man ssh_config`.
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users &lt;at&gt; open-mpi.org
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17863.php">Rob Latham: "Re: [OMPI users] MPI_File_Write"</a>
<li><strong>In reply to:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17866.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
