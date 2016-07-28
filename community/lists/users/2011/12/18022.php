<?
$subject_val = "Re: [OMPI users] Clean install fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 07:51:33 2011" -->
<!-- isoreceived="20111221125133" -->
<!-- sent="Wed, 21 Dec 2011 07:51:26 -0500" -->
<!-- isosent="20111221125126" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Clean install fails" -->
<!-- id="874A8BD5-4BF0-4A8D-90DA-E060DF652DDC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201112211236.pBLCaeKb019406_at_milliways.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Clean install fails<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 07:51:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18021.php">Rushton Martin: "[OMPI users] Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18021.php">Rushton Martin: "[OMPI users] Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your OMPI install looks busted. Can you send all the info listed in the &quot;support&quot; section on the OMPI web site?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Dec 21, 2011, at 7:37 AM, &quot;Rushton Martin&quot; &lt;JMRUSHTON_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've just completed installing OpenSuSE 12.1 on a standalone node.
</span><br>
<span class="quotelev1">&gt; Using the bundled GCC and OpenMPI the user code fails.  I've reduced the
</span><br>
<span class="quotelev1">&gt; problem to that below, but without the source I'm not sure what
</span><br>
<span class="quotelev1">&gt; orte_init is after.  Using mpirun -np 1 or -np 2 both fail in the same
</span><br>
<span class="quotelev1">&gt; way.  Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat test.f
</span><br>
<span class="quotelev1">&gt;        END
</span><br>
<span class="quotelev1">&gt; $ gfortran -o test-f test.f
</span><br>
<span class="quotelev1">&gt; $ ./test-f
</span><br>
<span class="quotelev1">&gt; $ echo $?
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; $ mpirun ./test-f
</span><br>
<span class="quotelev1">&gt; [isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
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
<span class="quotelev1">&gt;  orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orterun.c at line 543
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin Rushton
</span><br>
<span class="quotelev1">&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev1">&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev1">&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.QinetiQ.com
</span><br>
<span class="quotelev1">&gt; QinetiQ - Delivering customer-focused solutions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev1">&gt; This email and any attachments to it may be confidential and are
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual to whom it is 
</span><br>
<span class="quotelev1">&gt; addressed. If you are not the intended recipient of this email,
</span><br>
<span class="quotelev1">&gt; you must neither take any action based upon its contents, nor 
</span><br>
<span class="quotelev1">&gt; copy or show it to anyone. Please contact the sender if you 
</span><br>
<span class="quotelev1">&gt; believe you have received this email in error. QinetiQ may 
</span><br>
<span class="quotelev1">&gt; monitor email traffic data and also the content of email for 
</span><br>
<span class="quotelev1">&gt; the purposes of security. QinetiQ Limited (Registered in England
</span><br>
<span class="quotelev1">&gt; &amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
</span><br>
<span class="quotelev1">&gt; Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
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
<li><strong>Next message:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18021.php">Rushton Martin: "[OMPI users] Clean install fails"</a>
<li><strong>In reply to:</strong> <a href="18021.php">Rushton Martin: "[OMPI users] Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18023.php">Rushton Martin: "Re: [OMPI users] UC  Clean install fails"</a>
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
