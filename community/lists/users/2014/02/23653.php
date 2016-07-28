<?
$subject_val = "[OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 06:55:30 2014" -->
<!-- isoreceived="20140226115530" -->
<!-- sent="Wed, 26 Feb 2014 11:55:28 +0000" -->
<!-- isosent="20140226115528" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.7.5 and &amp;quot;--map-by&amp;quot; new syntax" -->
<!-- id="D440BE95-7437-4E08-8CC8-FEA5727FF4A4_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 06:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23654.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Previous message:</strong> <a href="23652.php">jody: "Re: [OMPI users] run a program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23654.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Reply:</strong> <a href="23654.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am playing with Open MPI 1.7.5 and with the &quot;--map-by&quot; option but I am not sure I am doing thing correctly despite I am following the instruction. Here what I got
<br>
<p>$mpirun -np 20 --npersocket 5 -bind-to core osu_alltoall 
<br>
--------------------------------------------------------------------------
<br>
The following command line options and corresponding MCA parameter have
<br>
been deprecated and replaced as follows:
<br>
<p>&nbsp;&nbsp;Command line options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  --npersocket, -npersocket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: --map-by socket:PPR=N
<br>
<p>&nbsp;&nbsp;Equivalent MCA parameter:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  rmaps_base_n_persocket, rmaps_ppr_n_persocket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: rmaps_base_mapping_policy=socket:PPR=N
<br>
<p>The deprecated forms *will* disappear in a future version of Open MPI.
<br>
Please update to the new syntax.
<br>
--------------------------------------------------------------------------
<br>
<p><p>after changing according to the instructions I see
<br>
<p>$ mpirun -np 24 --map-by socket:PPR=5 -bind-to core osu_alltoall
<br>
<p>--------------------------------------------------------------------------
<br>
The mapping request contains an unrecognized modifier:
<br>
<p>&nbsp;&nbsp;Request: socket:PPR=5
<br>
<p>Please check your request and try again.
<br>
--------------------------------------------------------------------------
<br>
[tesla49:30459] [[29390,0],0] ORTE_ERROR_LOG: Bad parameter in file ess_hnp_module.c at line 510
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_rmaps_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Bad parameter (-5) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>Is there any place where the new syntax is explained? 
<br>
<p>Thanks in advance
<br>
F
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc. - HPC  Application Specialist
High Performance Computing Service, University of Cambridge (UK)
<a href="http://www.hpc.cam.ac.uk/">http://www.hpc.cam.ac.uk/</a> ~ <a href="http://filippospiga.me">http://filippospiga.me</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23654.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Previous message:</strong> <a href="23652.php">jody: "Re: [OMPI users] run a program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23654.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Reply:</strong> <a href="23654.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
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
