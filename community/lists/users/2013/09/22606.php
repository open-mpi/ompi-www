<?
$subject_val = "Re: [OMPI users] Changing directory from /tmp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 13:21:57 2013" -->
<!-- isoreceived="20130904172157" -->
<!-- sent="Wed, 4 Sep 2013 10:21:53 -0700" -->
<!-- isosent="20130904172153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing directory from /tmp" -->
<!-- id="B2FD4E9F-089E-4861-8530-2DD1E127C669_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0B202E20-82B9-4215-8AE3-889765A126B9_at_stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Changing directory from /tmp<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 13:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22607.php">Gus Correa: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>Previous message:</strong> <a href="22605.php">Lee-Ping Wang: "[OMPI users] Changing directory from /tmp"</a>
<li><strong>In reply to:</strong> <a href="22605.php">Lee-Ping Wang: "[OMPI users] Changing directory from /tmp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22608.php">Reuti: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>Reply:</strong> <a href="22608.php">Reuti: "Re: [OMPI users] Changing directory from /tmp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you can specify it with OMPI_TMPDIR in your environment, or &quot;-mca orte_tmpdir_base &lt;foo&gt;&quot; on your cmd line
<br>
<p><p>On Sep 4, 2013, at 10:13 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a few clusters I am running into an issue where a temporary directory cannot be created due to the root filesystem being full, causing mpirun to crash.  Would it be possible to change the location where this directory is being created?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-109-4.local:12055] opal_os_dirpath_create: Error: Unable to create the sub-directory (/tmp/openmpi-sessions-leeping_at_compute-109-4.local_0) of (/tmp/openmpi-sessions-leeping_at_compute-109-4.local_0/28512/0/0), mkdir failed [1]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
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
<li><strong>Next message:</strong> <a href="22607.php">Gus Correa: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>Previous message:</strong> <a href="22605.php">Lee-Ping Wang: "[OMPI users] Changing directory from /tmp"</a>
<li><strong>In reply to:</strong> <a href="22605.php">Lee-Ping Wang: "[OMPI users] Changing directory from /tmp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22608.php">Reuti: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>Reply:</strong> <a href="22608.php">Reuti: "Re: [OMPI users] Changing directory from /tmp"</a>
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
