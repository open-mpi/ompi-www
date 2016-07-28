<?
$subject_val = "Re: [OMPI users] Filem could not be found for one user";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 14:43:50 2014" -->
<!-- isoreceived="20140811184350" -->
<!-- sent="Mon, 11 Aug 2014 11:43:49 -0700" -->
<!-- isosent="20140811184349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Filem could not be found for one user" -->
<!-- id="CAMD57of3gR-XTzziXGW9zG_wgAYgXJ=XYsqfz09hGuzJWpYCmg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53E8FFC9.7090409_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Filem could not be found for one user<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 14:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24979.php">Maxime Boissonneault: "[OMPI users] Filem could not be found for one user"</a>
<li><strong>In reply to:</strong> <a href="24979.php">Maxime Boissonneault: "[OMPI users] Filem could not be found for one user"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check their environment for MCA params, and in their home directory for any
<br>
user-level MCA param file
<br>
<p><p><p>On Mon, Aug 11, 2014 at 10:39 AM, Maxime Boissonneault &lt;
<br>
maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am getting a weird error when running mpiexec with one user :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mboisson_at_gpu-k20-14 helios_test]$ mpiexec -np 2 mdrunmpi -ntomp 10 -s
</span><br>
<span class="quotelev1">&gt; prod_s6_01kcal_bb_dr -deffnm testout
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened. This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      gpu-k20-14
</span><br>
<span class="quotelev1">&gt; Framework: filem
</span><br>
<span class="quotelev1">&gt; Component: rsh
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [gpu-k20-14:205673] mca: base: components_register: registering filem
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [gpu-k20-14:205673] [[56298,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 673
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_filem_base_open failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is weird is that this same command works for other users, on the same
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone know what might be going on here ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/">http://www.open-mpi.org/community/lists/users/2014/08/</a>
</span><br>
<span class="quotelev1">&gt; 24979.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24980/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24979.php">Maxime Boissonneault: "[OMPI users] Filem could not be found for one user"</a>
<li><strong>In reply to:</strong> <a href="24979.php">Maxime Boissonneault: "[OMPI users] Filem could not be found for one user"</a>
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
