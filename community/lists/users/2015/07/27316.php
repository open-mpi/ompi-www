<?
$subject_val = "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 13:00:28 2015" -->
<!-- isoreceived="20150723170028" -->
<!-- sent="Thu, 23 Jul 2015 18:00:26 +0100" -->
<!-- isosent="20150723170026" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6" -->
<!-- id="871tfyn711.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DB3PR06MB0907760E213F0202A0C99B61C7820_at_DB3PR06MB0907.eurprd06.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 13:00:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27317.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27315.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27312.php">m.delorme_at_[hidden]: "[OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;m.delorme_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Since I don't have the hand on the cluster administration, and the
</span><br>
<span class="quotelev1">&gt; &quot;default&quot; installation of openMPI is an old one,
</span><br>
<p>Perhaps there's a good reason for that, as there is here.
<br>
<p><span class="quotelev1">&gt; I compiled and installed myself Open-MPI 1.8.6 and prepended paths
</span><br>
<span class="quotelev1">&gt; (general and library) to ensure the use of my version of mpi.
</span><br>
<p>Doubtless unhelpful, but my initial response as support staff would be
<br>
(a) why? (b) why didn't you ask us?
<br>
<p><span class="quotelev1">&gt; Open MPI has been configured with the flags --with-sge, and grepping grid engine in ompi_info returns something that looks correct :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.8.6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now when running a simple script, displaying the hostname, on two slots binded on one single node, I get the following message :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [galaxy1:44361] Error: unknown option &quot;--hnp-topo-sig&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<p>I'd say it's clearly not anything in SGE that's segfaulting, and the
<br>
only direct connexion with SGE is tight integration when OMPI arranges
<br>
to use qrsh (though most people seem to know more about SGE than I do
<br>
these days).
<br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<p>Grepping with strings(1) on all the relevant binaries would probably
<br>
indicate that's good advice.  I don't think such arguments are
<br>
documented.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27317.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Previous message:</strong> <a href="27315.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27312.php">m.delorme_at_[hidden]: "[OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
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
