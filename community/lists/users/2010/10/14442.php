<?
$subject_val = "Re: [OMPI users] memory limits on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 04:17:59 2010" -->
<!-- isoreceived="20101012081759" -->
<!-- sent="Tue, 12 Oct 2010 02:17:49 -0600" -->
<!-- isosent="20101012081749" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory limits on remote nodes" -->
<!-- id="2E0DCA57-7B6C-4512-8541-6AF9AEE5A9F9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CB3EFFF.7020502_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] memory limits on remote nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 04:17:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14443.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Previous message:</strong> <a href="14441.php">jody: "Re: [OMPI users] connecting to MPI from outside"</a>
<li><strong>In reply to:</strong> <a href="14440.php">David Turner: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No problem - I got to learn something too!
<br>
<p><p>On Oct 11, 2010, at 11:19 PM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Various people contributed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Isn't it possible to set this up in torque/moab directly? In SGE I would simply define h_vmem and it's per slot then; and with a tight integration all Open MPI processes will be children of sge_execd and the limit will be enforced.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I could be wrong, but I -think- the issue here is that the soft limits need to be set on a per-job basis.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This I also thought, and `qsub -l h_vmem=4G ...` should do it. It can be requested on a per job basis (with further limits on a queue level if necessary).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, this sent me in the right direction.  I believe h_vmem is
</span><br>
<span class="quotelev1">&gt; SGE-specific, but our torque environment provides the &quot;pmem&quot;
</span><br>
<span class="quotelev1">&gt; (physical memory) and &quot;pvmem&quot; (virtual memory) resources on
</span><br>
<span class="quotelev1">&gt; a per-job basis.  These seem to provide exactly the functionality
</span><br>
<span class="quotelev1">&gt; we need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry to bother you an issue that ended up being independent
</span><br>
<span class="quotelev1">&gt; of Open MPI!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<li><strong>Next message:</strong> <a href="14443.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Previous message:</strong> <a href="14441.php">jody: "Re: [OMPI users] connecting to MPI from outside"</a>
<li><strong>In reply to:</strong> <a href="14440.php">David Turner: "Re: [OMPI users] memory limits on remote nodes"</a>
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
