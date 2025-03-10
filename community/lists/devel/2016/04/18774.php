<?
$subject_val = "Re: [OMPI devel] Fwd: psm2 and psm2_ep_open problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 10:32:17 2016" -->
<!-- isoreceived="20160415143217" -->
<!-- sent="Fri, 15 Apr 2016 07:32:13 -0700" -->
<!-- isosent="20160415143213" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: psm2 and psm2_ep_open problems" -->
<!-- id="558A18AD-1919-4C05-BEC1-6F4795FF51B2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj4FVughGG+6PwZ2wUmdzKyvR=oEwnXSjKkKMtZY1yR99A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: psm2 and psm2_ep_open problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-15 10:32:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18773.php">Howard Pritchard: "[OMPI devel] Fwd: psm2 and psm2_ep_open problems"</a>
<li><strong>In reply to:</strong> <a href="18773.php">Howard Pritchard: "[OMPI devel] Fwd: psm2 and psm2_ep_open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18776.php">Ralph Castain: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Reply:</strong> <a href="18776.php">Ralph Castain: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, it did come across the developer list :-)
<br>
<p>Why don&#226;&#128;&#153;t I resolve this by just ensuring that the key we create is properly filled? It&#226;&#128;&#153;s a trivial fix in the PMI ess component
<br>
<p><p><span class="quotelev1">&gt; On Apr 15, 2016, at 7:26 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't copy dev on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- Weitergeleitete Nachricht ----------
</span><br>
<span class="quotelev1">&gt; Von: Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Datum: Donnerstag, 14. April 2016
</span><br>
<span class="quotelev1">&gt; Betreff: psm2 and psm2_ep_open problems
</span><br>
<span class="quotelev1">&gt; An: Open MPI Developers &lt;devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Matias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually I triaged this further.  Open mpi PMI subsystem is actually doing things correctly wrt env variable setting with or without mpi run.  The problem has to do with a psm2  and the fact that on my cluster right now SLURM has only scheduled about 25 jobs.  This results in the unique key PSM2 Mtl is feeding to PSM2 has lots of zeros inthe initial part of the key.  This ends up messing up the epid generated in PSM2.  OFI MTL doesn't have this problem because the PSM2 provider has some of these LSBs set in the value it passes to PSM2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will open a PR to &quot;fix&quot; the PSM2MTL to handle this feature of PSM2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am Donnerstag, 14. April 2016 schrieb Cabral, Matias A :
</span><br>
<span class="quotelev1">&gt; Hi Howard, &lt;&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect this is the known issue that when using SLURM with OMPI and PSM that is discussed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/users/2010/12/15220.php">https://www.open-mpi.org/community/lists/users/2010/12/15220.php</a> &lt;<a href="https://www.open-mpi.org/community/lists/users/2010/12/15220.php">https://www.open-mpi.org/community/lists/users/2010/12/15220.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As per today, orte generates the psm_key, so when using SLURM this does not happen and is necessary to set it in the environment.  Here Ralph explains the workaround:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/users/2010/12/15242.php">https://www.open-mpi.org/community/lists/users/2010/12/15242.php</a> &lt;<a href="https://www.open-mpi.org/community/lists/users/2010/12/15242.php">https://www.open-mpi.org/community/lists/users/2010/12/15242.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you found, epid of 0 is not a valid value. So, basing comments on:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/01org/opa-psm2/blob/master/psm_ep.c">https://github.com/01org/opa-psm2/blob/master/psm_ep.c</a> &lt;<a href="https://github.com/01org/opa-psm2/blob/master/psm_ep.c">https://github.com/01org/opa-psm2/blob/master/psm_ep.c</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the assert of line 832. psmi_ep_open_device()  will do :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                             /*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 * We use a LID of 0 for non-HFI communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 * Since a jobkey is not available from IPS, pull the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 * first 16 bits from the UUID.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 *epid = PSMI_EPID_PACK(((uint16_t *) unique_job_key)[0],
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                                                        (rank &gt;&gt; 3), rank, 0,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                                                        PSMI_HFI_TYPE_DEFAULT, rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  In the particular case you mention below, when there is no HFI (shared memory), rank 0 and the passed key is 0, epid will be 0.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SOLUTION: set
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Set in the environment OMPI_MCA_orte_precondition_transports with a value different than 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _MAC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden] &lt;&gt;] On Behalf Of Howard Pritchard
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 14, 2016 1:10 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List &lt;devel_at_[hidden] &lt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] psm2 and psm2_ep_open problems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we have this brand-new omnipath cluster here at work,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but people are having problem using it on a single node using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun as the job launcher.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The customer wants to use srun to launch jobs not the open mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The customer installed 1.10.1, but I can reproduce the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; problem with v2.x and I'm sure with master, unless I build the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ofi mtl.  ofi mtl works, psm2 mtl doesn't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I downloaded the psm2 code from github and started hacking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What appears to be the problem is that when running on a single 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node one can go through a path in psmi_ep_open_device where
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for a single process job, the value stored into epid is zero.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This results in an assert failing in the __psm2_ep_open_internal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a quick and dirty workaround that doesn't involve fixing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; psm2 MTL?  I could suggest to the sysadmins to install libfabric 1.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and build the openmpi to only have ofi mtl, but perhaps there's
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; another way to get psm2 mtl to work for single node jobs?  I'd prefer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to not ask users to disable psm2 mtl explicitly for their single node jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18773.php">http://www.open-mpi.org/community/lists/devel/2016/04/18773.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18773.php">http://www.open-mpi.org/community/lists/devel/2016/04/18773.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18774/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18773.php">Howard Pritchard: "[OMPI devel] Fwd: psm2 and psm2_ep_open problems"</a>
<li><strong>In reply to:</strong> <a href="18773.php">Howard Pritchard: "[OMPI devel] Fwd: psm2 and psm2_ep_open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18776.php">Ralph Castain: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<li><strong>Reply:</strong> <a href="18776.php">Ralph Castain: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
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
