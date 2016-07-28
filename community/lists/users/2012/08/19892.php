<?
$subject_val = "Re: [OMPI users] UC Permission denied, please try again.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 11:43:52 2012" -->
<!-- isoreceived="20120803154352" -->
<!-- sent="Fri, 3 Aug 2012 20:43:47 +0500" -->
<!-- isosent="20120803154347" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC Permission denied, please try again." -->
<!-- id="CAMvdAsLbCbTvsmV=5DsTPa4ZT9uTZCpG4sfLw-3hX_aV=iUAdQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="609E7602-F9B9-4CB8-B8BA-3B96DFE2EAE6_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] UC Permission denied, please try again.<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 11:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19893.php">PattiMichelle: "[OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Previous message:</strong> <a href="19891.php">Jeff Squyres: "[OMPI users] MPI-3.0 public draft and call for comments"</a>
<li><strong>In reply to:</strong> <a href="19889.php">Reuti: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21043.php">Yixuan: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21043.php">Yixuan: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Reuti
<br>
<p>Platform Cluster Manager PCM was used to build cluster, I am not familiar
<br>
with the queuing system, However ssh works between the nodes without
<br>
paraphrase and between master nodes as other compute nodes, the problem is
<br>
with one node
<br>
<p>On Thu, Aug 2, 2012 at 9:07 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 02.08.2012 um 17:57 schrieb Syed Ahsan Ali:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes all the compute nodes are NFS mounted with the master node, so
</span><br>
<span class="quotelev1">&gt; everthing is same, all other nodes are accessible on ssh without password.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using a queuing system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SSH could be setup to work from the master node without passphrase, but
</span><br>
<span class="quotelev1">&gt; not between the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Aug 2, 2012 at 1:09 PM, John Hearns &lt;hearnsj_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On 02/08/2012, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yes the issue has been diagnosed. I can ssh them but they are asking
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; passwords
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You need to configure 'passwordless ssh'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can we assume that your home directory is shared across all cluster
</span><br>
<span class="quotelev1">&gt; nodes?
</span><br>
<span class="quotelev2">&gt; &gt; That means when you log into a cluster node the directory which is
</span><br>
<span class="quotelev2">&gt; &gt; your Unix 'home directory' has exactly the same files as on the
</span><br>
<span class="quotelev2">&gt; &gt; cluster head node?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then you need to configure passwordless ssh
</span><br>
<span class="quotelev2">&gt; &gt; Use this as a starting point:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev2">&gt; &gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Research &amp; Development Division
</span><br>
<span class="quotelev2">&gt; &gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev2">&gt; &gt; Phone # off  +92518358714
</span><br>
<span class="quotelev2">&gt; &gt; Cell # +923155145014
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19893.php">PattiMichelle: "[OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Previous message:</strong> <a href="19891.php">Jeff Squyres: "[OMPI users] MPI-3.0 public draft and call for comments"</a>
<li><strong>In reply to:</strong> <a href="19889.php">Reuti: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21043.php">Yixuan: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21043.php">Yixuan: "Re: [OMPI users] UC Permission denied, please try again."</a>
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
