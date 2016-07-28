<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 23 07:36:50 2013" -->
<!-- isoreceived="20130823113650" -->
<!-- sent="Fri, 23 Aug 2013 12:36:31 +0100" -->
<!-- isosent="20130823113631" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="87k3jcprk0.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPqNE2UcMNcHdwHWCKgzUcc+CC810F8uKpYBbSnat_aUA_j1nw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-23 07:36:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22546.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22544.php">Noah Knowles: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>In reply to:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22546.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22546.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John Hearns &lt;hearnsj_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Agree with what you say Dave.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding not wanting jobs to use certsin cores ie. reserving low-numbered
</span><br>
<span class="quotelev1">&gt; cores for OS processes then surely a good way forward is to use a 'boot
</span><br>
<span class="quotelev1">&gt; cpuset' of one or two cores and let your jobs run on the rest of the cores.
</span><br>
<p>Maybe, if you make sure the resource manager knows about it, and users
<br>
don't mind losing the cores, presumably resulting in a cock-eyed MPI
<br>
process distribution.  Is it really necessary, compared with simply
<br>
using core binding?
<br>
<p>I'd expect the bulk of overheads to be due to the resource manager,
<br>
especially if it tracks things by grovelling /proc frequently, not to
<br>
the OS.  In cases I've measured, it's typically ~1%, depending on
<br>
parameters, scaling more slowly than core count.
<br>
<p><span class="quotelev1">&gt; You're right about cpusets being helpful with 'badly behaved' jobs.
</span><br>
<span class="quotelev1">&gt; War stories some other time!
</span><br>
<p>Well [trying to bring this on topic], things got much more sanitary here
<br>
after I replaced the wretched Streamline-supplied setup with tight
<br>
integration of OMPI under SGE and then made the SGE core binding
<br>
inherited by OMPI work sensibly with partially full nodes.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22546.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22544.php">Noah Knowles: "Re: [OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>In reply to:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22546.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22546.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
