<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 10:25:03 2014" -->
<!-- isoreceived="20141112152503" -->
<!-- sent="Wed, 12 Nov 2014 15:18:29 +0000" -->
<!-- isosent="20141112151829" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="874mu4la62.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="814E6D361B66804FBF146E8AB57FE1CC2E32A628_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 10:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25772.php">Liu Jianyu: "[OMPI users] Question on tunning OFED kernel parameter for Mellanox 56G IB"</a>
<li><strong>Previous message:</strong> <a href="25770.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;SLIM H.A.&quot; &lt;h.a.slim_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Dear Reuti and Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is the output of the run for openmpi 1.8.3 with this line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS --display-map --display-allocation --cpus-per-proc 1 $exe
</span><br>
<p>-np is redundant with tight integration unless you're using fewer than
<br>
NSLOTS from SGE.
<br>
<p><span class="quotelev1">&gt; ompi_info | grep psm
</span><br>
<span class="quotelev1">&gt; gives                 MCA mtl: psm (MCA v2.0, API v2.0, Component v1.8.3)
</span><br>
<span class="quotelev1">&gt; because the intercoonect is TrueScale/QLogic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv OMPI_MCA_mtl &quot;psm&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is set in the script.
</span><br>
<p>It should select that anyhow, though it's worth defaulting it in
<br>
openmpi-mca-params.conf in case something goes awry and you end up with
<br>
openib, or even tcp, instead of psm.  (I've known inconsistent library
<br>
versions cause psm not to load.)
<br>
<p><span class="quotelev1">&gt; This is the PE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pe_name           orte
</span><br>
<span class="quotelev1">&gt; slots             4000
</span><br>
<span class="quotelev1">&gt; user_lists        NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<p>&quot;none&quot; is a better choice, now the default.
<br>
<p><span class="quotelev1">&gt; allocation_rule   $fill_up
</span><br>
<p>fill_up is potentially problematic with PSM -- at least the old stuff we
<br>
have.  You tend to run out of contexts(?) with multiple jobs on the node
<br>
and I couldn't get it to behave by setting environment variables.
<br>
<p><span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots     min
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25772.php">Liu Jianyu: "[OMPI users] Question on tunning OFED kernel parameter for Mellanox 56G IB"</a>
<li><strong>Previous message:</strong> <a href="25770.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
