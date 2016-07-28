<?
$subject_val = "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 10:12:23 2014" -->
<!-- isoreceived="20140226151223" -->
<!-- sent="Wed, 26 Feb 2014 07:10:41 -0800" -->
<!-- isosent="20140226151041" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.7.5 and &amp;quot;--map-by&amp;quot; new syntax" -->
<!-- id="EC94B538-5914-48C4-9715-F442097C5015_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1545E9A0-6C5A-41EF-9D4C-8B45C29367B8_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 10:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23658.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23656.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>In reply to:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My bad - I'll fix the help message. Thanks!
<br>
<p>On Feb 26, 2014, at 6:42 AM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes it works. Information provided by mpirun is confusing but I get the right syntax now. Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; F
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 26, 2014, at 12:34 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi, this help message might be just a simple mistake.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please try: mpirun -np 20 --map-by ppr:5:socket -bind-to core osu_alltoall
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There's no available explanation yet as far as I know, because it's still
</span><br>
<span class="quotelev2">&gt;&gt; alfa version.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am playing with Open MPI 1.7.5 and with the &quot;--map-by&quot; option but I am
</span><br>
<span class="quotelev2">&gt;&gt; not sure I am doing thing correctly despite I am following the instruction.
</span><br>
<span class="quotelev2">&gt;&gt; Here what I got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $mpirun -np 20 --npersocket 5 -bind-to core osu_alltoall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Command line options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Deprecated:  --npersocket, -npersocket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Replacement: --map-by socket:PPR=N
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Equivalent MCA parameter:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Deprecated:  rmaps_base_n_persocket, rmaps_ppr_n_persocket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Replacement: rmaps_base_mapping_policy=socket:PPR=N
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please update to the new syntax.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after changing according to the instructions I see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 24 --map-by socket:PPR=5 -bind-to core osu_alltoall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mapping request contains an unrecognized modifier:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Request: socket:PPR=5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please check your request and try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tesla49:30459] [[29390,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev2">&gt;&gt; ess_hnp_module.c at line 510
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rmaps_base_open failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned value Bad parameter (-5) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any place where the new syntax is explained?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mr. Filippo SPIGA, M.Sc. - HPC  Application Specialist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Service, University of Cambridge (UK)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.hpc.cam.ac.uk/">http://www.hpc.cam.ac.uk/</a> ~ <a href="http://filippospiga.me">http://filippospiga.me</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are
</span><br>
<span class="quotelev2">&gt;&gt; CONFIDENTIAL and may be privileged or otherwise protected from disclosure.
</span><br>
<span class="quotelev2">&gt;&gt; The contents are not to be disclosed to anyone other than the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; addressee. Unauthorized recipients are requested to preserve this
</span><br>
<span class="quotelev2">&gt;&gt; confidentiality and to advise the sender immediately of any error in
</span><br>
<span class="quotelev2">&gt;&gt; transmission.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="23658.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23656.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>In reply to:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
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
