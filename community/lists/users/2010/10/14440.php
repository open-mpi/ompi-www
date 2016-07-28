<?
$subject_val = "Re: [OMPI users] memory limits on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 01:20:06 2010" -->
<!-- isoreceived="20101012052006" -->
<!-- sent="Mon, 11 Oct 2010 22:19:59 -0700" -->
<!-- isosent="20101012051959" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory limits on remote nodes" -->
<!-- id="4CB3EFFF.7020502_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A0B2C2D8-DF51-48F9-AD3B-23C0D8274DA2_at_open-mpi.org" -->
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
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 01:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14441.php">jody: "Re: [OMPI users] connecting to MPI from outside"</a>
<li><strong>Previous message:</strong> <a href="14439.php">Mahesh Salunkhe: "[OMPI users] connecting to MPI from outside"</a>
<li><strong>In reply to:</strong> <a href="14420.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14442.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14442.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Various people contributed:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; Isn't it possible to set this up in torque/moab directly? In SGE I would simply define h_vmem and it's per slot then; and with a tight integration all Open MPI processes will be children of sge_execd and the limit will be enforced.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could be wrong, but I -think- the issue here is that the soft limits need to be set on a per-job basis.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This I also thought, and `qsub -l h_vmem=4G ...` should do it. It can be requested on a per job basis (with further limits on a queue level if necessary).
</span><br>
<p>Well, this sent me in the right direction.  I believe h_vmem is
<br>
SGE-specific, but our torque environment provides the &quot;pmem&quot;
<br>
(physical memory) and &quot;pvmem&quot; (virtual memory) resources on
<br>
a per-job basis.  These seem to provide exactly the functionality
<br>
we need.
<br>
<p>Sorry to bother you an issue that ended up being independent
<br>
of Open MPI!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14441.php">jody: "Re: [OMPI users] connecting to MPI from outside"</a>
<li><strong>Previous message:</strong> <a href="14439.php">Mahesh Salunkhe: "[OMPI users] connecting to MPI from outside"</a>
<li><strong>In reply to:</strong> <a href="14420.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14442.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14442.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
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
