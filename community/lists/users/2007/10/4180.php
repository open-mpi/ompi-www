<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 09:16:17 2007" -->
<!-- isoreceived="20071009131617" -->
<!-- sent="Tue, 09 Oct 2007 09:16:16 -0400" -->
<!-- isosent="20071009131616" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query regarding GPR" -->
<!-- id="470B7F20.2070309_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071009092037.13182.qmail_at_webmail50.rediffmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 09:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4181.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4179.php">Neeraj Chourasia: "[OMPI users] Query regarding GPR"</a>
<li><strong>In reply to:</strong> <a href="4179.php">Neeraj Chourasia: "[OMPI users] Query regarding GPR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Neeraj,
<br>
<p>The GPR is maintained in the mpirun (orterun) process. The data is then 
<br>
distributed via the RML/OOB.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>Neeraj Chourasia wrote:
<br>
<span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I have a doubt regarding ORTE. One of the major functionality of 
</span><br>
<span class="quotelev1">&gt; orte is to maintain GPR, which subscribes and publishes information to 
</span><br>
<span class="quotelev1">&gt; the universe. I have a doubt saying, when we submit job from a machine, 
</span><br>
<span class="quotelev1">&gt; where does GPR gets created? Is it on the submit machine (HNP)?
</span><br>
<span class="quotelev1">&gt; if YES, then how does compute node gets the information of the same 
</span><br>
<span class="quotelev1">&gt; during execution ? Does it use OOB for it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Neeraj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4181.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4179.php">Neeraj Chourasia: "[OMPI users] Query regarding GPR"</a>
<li><strong>In reply to:</strong> <a href="4179.php">Neeraj Chourasia: "[OMPI users] Query regarding GPR"</a>
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
