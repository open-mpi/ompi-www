<?
$subject_val = "Re: [OMPI users] UC Permission denied, please try again.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  2 12:07:31 2012" -->
<!-- isoreceived="20120802160731" -->
<!-- sent="Thu, 2 Aug 2012 18:07:09 +0200" -->
<!-- isosent="20120802160709" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC Permission denied, please try again." -->
<!-- id="609E7602-F9B9-4CB8-B8BA-3B96DFE2EAE6_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMvdAsJi3A+BpupeXDdF4HZVaXDhD56HsSTcYt+-TaF3MmaCHA_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-02 12:07:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19879.php">Grzegorz Maj: "[OMPI users] Using MPI derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="19877.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>In reply to:</strong> <a href="19877.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19881.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Reply:</strong> <a href="19881.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 02.08.2012 um 17:57 schrieb Syed Ahsan Ali:
<br>
<p><span class="quotelev1">&gt; Yes all the compute nodes are NFS mounted with the master node, so everthing is same, all other nodes are accessible on ssh without password.
</span><br>
<p>Are you using a queuing system?
<br>
<p>SSH could be setup to work from the master node without passphrase, but not between the nodes.
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; On Thu, Aug 2, 2012 at 1:09 PM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On 02/08/2012, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Yes the issue has been diagnosed. I can ssh them but they are asking for
</span><br>
<span class="quotelev2">&gt; &gt; passwords
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need to configure 'passwordless ssh'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can we assume that your home directory is shared across all cluster nodes?
</span><br>
<span class="quotelev1">&gt; That means when you log into a cluster node the directory which is
</span><br>
<span class="quotelev1">&gt; your Unix 'home directory' has exactly the same files as on the
</span><br>
<span class="quotelev1">&gt; cluster head node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then you need to configure passwordless ssh
</span><br>
<span class="quotelev1">&gt; Use this as a starting point:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari 
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19879.php">Grzegorz Maj: "[OMPI users] Using MPI derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="19877.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>In reply to:</strong> <a href="19877.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19881.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Reply:</strong> <a href="19881.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
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
