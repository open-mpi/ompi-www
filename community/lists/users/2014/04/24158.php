<?
$subject_val = "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 14:38:10 2014" -->
<!-- isoreceived="20140411183810" -->
<!-- sent="Sat, 12 Apr 2014 02:38:10 +0800" -->
<!-- isosent="20140411183810" -->
<!-- name="Anthony Alba" -->
<!-- email="ascanio.alba7_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Troubleshooting mpirun with tree spawn hang" -->
<!-- id="CADkWibcxFJSnCYYy+FQqpH7XcJwqORUJfrEL41kfGSv_91AM3g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1F81ACEE-6D02-40CB-B5EC-DCD68E0A4E50_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Troubleshooting mpirun with tree spawn hang<br>
<strong>From:</strong> Anthony Alba (<em>ascanio.alba7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 14:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24159.php">Anthony Alba: "[OMPI users] OpenMPI PMI2 with SLURM 14.03 not working"</a>
<li><strong>Previous message:</strong> <a href="24157.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>In reply to:</strong> <a href="24154.php">Ralph Castain: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ooops I meant = false.
<br>
<p>Thanks for the tip, it turns out the fault lay in a specific node that
<br>
required oob_tcp_if_include to be set.
<br>
<p>On Friday, 11 April 2014, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm a little confused - the &quot;no_tree_spawn=true&quot; option means that we are
</span><br>
<span class="quotelev1">&gt; *not* using tree spawn, and so mpirun is directly launching each daemon
</span><br>
<span class="quotelev1">&gt; onto its node. Thus, this requires that the host mpirun is on be able to
</span><br>
<span class="quotelev1">&gt; ssh to every other host in the allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can debug the rsh launcher by setting &quot;-mca plm_base_verbose 5
</span><br>
<span class="quotelev1">&gt; --debug-daemons&quot; on the cmd line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2014, at 9:50 PM, Anthony Alba &lt;ascanio.alba7_at_[hidden]&lt;javascript:;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to troubleshoot
</span><br>
<span class="quotelev2">&gt; &gt; plm_rsh_no_tree_spawn=true hang?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a set of passwordless-ssh nodes, each node can ssh into any
</span><br>
<span class="quotelev1">&gt; other., i.e.,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for h1 in A B C D; do for h2 in A B C D; do ssh $h1 ssh $h2 hostname;
</span><br>
<span class="quotelev1">&gt; done; done
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; works perfectly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Generally tree spawn works, however there is one host where
</span><br>
<span class="quotelev2">&gt; &gt; launching  mpirun with tree spawn hangs as soon as there are 6 or more
</span><br>
<span class="quotelev1">&gt; host (with launch node also in the host list). If the launcher is not in
</span><br>
<span class="quotelev1">&gt; the host list the hang happens with five hosts.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Anthony
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24159.php">Anthony Alba: "[OMPI users] OpenMPI PMI2 with SLURM 14.03 not working"</a>
<li><strong>Previous message:</strong> <a href="24157.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>In reply to:</strong> <a href="24154.php">Ralph Castain: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
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
