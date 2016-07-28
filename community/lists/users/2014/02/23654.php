<?
$subject_val = "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 07:35:07 2014" -->
<!-- isoreceived="20140226123507" -->
<!-- sent="Wed, 26 Feb 2014 21:34:55 +0900" -->
<!-- isosent="20140226123455" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.7.5 and &amp;quot;--map-by&amp;quot; new syntax" -->
<!-- id="OF6F616DD0.B4413FB9-ON49257C8B.0043B960-49257C8B.00452277_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D440BE95-7437-4E08-8CC8-FEA5727FF4A4_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%201.7.5%20and%20&amp;amp;quot;--map-by&amp;amp;quot;%20new%20syntax"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-26 07:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Previous message:</strong> <a href="23653.php">Filippo Spiga: "[OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>In reply to:</strong> <a href="23653.php">Filippo Spiga: "[OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Reply:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, this help message might be just a simple mistake.
<br>
<p>Please try: mpirun -np 20 --map-by ppr:5:socket -bind-to core osu_alltoall
<br>
<p>There's no available explanation yet as far as I know, because it's still
<br>
alfa version.
<br>
<p>Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am playing with Open MPI 1.7.5 and with the &quot;--map-by&quot; option but I am
</span><br>
not sure I am doing thing correctly despite I am following the instruction.
<br>
Here what I got
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun -np 20 --npersocket 5 -bind-to core osu_alltoall
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev1">&gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Command line options:
</span><br>
<span class="quotelev1">&gt; Deprecated:  --npersocket, -npersocket
</span><br>
<span class="quotelev1">&gt; Replacement: --map-by socket:PPR=N
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Equivalent MCA parameter:
</span><br>
<span class="quotelev1">&gt; Deprecated:  rmaps_base_n_persocket, rmaps_ppr_n_persocket
</span><br>
<span class="quotelev1">&gt; Replacement: rmaps_base_mapping_policy=socket:PPR=N
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev1">&gt; Please update to the new syntax.
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after changing according to the instructions I see
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 24 --map-by socket:PPR=5 -bind-to core osu_alltoall
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; The mapping request contains an unrecognized modifier:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request: socket:PPR=5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check your request and try again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; [tesla49:30459] [[29390,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
ess_hnp_module.c at line 510
<br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
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
<span class="quotelev1">&gt; orte_rmaps_base_open failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value Bad parameter (-5) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any place where the new syntax is explained?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; F
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc. - HPC  Application Specialist
</span><br>
<span class="quotelev1">&gt; High Performance Computing Service, University of Cambridge (UK)
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hpc.cam.ac.uk/">http://www.hpc.cam.ac.uk/</a> ~ <a href="http://filippospiga.me">http://filippospiga.me</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are
</span><br>
CONFIDENTIAL and may be privileged or otherwise protected from disclosure.
<br>
The contents are not to be disclosed to anyone other than the
<br>
<span class="quotelev1">&gt; addressee. Unauthorized recipients are requested to preserve this
</span><br>
confidentiality and to advise the sender immediately of any error in
<br>
transmission.&quot;
<br>
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
<li><strong>Next message:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Previous message:</strong> <a href="23653.php">Filippo Spiga: "[OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>In reply to:</strong> <a href="23653.php">Filippo Spiga: "[OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Reply:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
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
