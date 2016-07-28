<?
$subject_val = "Re: [OMPI devel] psm2 and psm2_ep_open problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 10:04:27 2016" -->
<!-- isoreceived="20160418140427" -->
<!-- sent="Mon, 18 Apr 2016 08:04:25 -0600" -->
<!-- isosent="20160418140425" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] psm2 and psm2_ep_open problems" -->
<!-- id="CAF1Cqj62kRdrJEAjpiJSwaahfV7R18_GNpThT9bT_NMa40HUbg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7D60EA94-B391-427B-80AD-CF15B474AFD9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] psm2 and psm2_ep_open problems<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-18 10:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18782.php">Howard Pritchard: "[OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18780.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18776.php">Ralph Castain: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
please point me to the patch.
<br>
<p>----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Apr 15, 2016 1:04 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a patch that I think will resolve this problem - would you please
</span><br>
<span class="quotelev1">&gt; take a look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 15, 2016, at 7:32 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, it did come across the developer list :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why don&#226;&#128;&#153;t I resolve this by just ensuring that the key we create is
</span><br>
<span class="quotelev1">&gt; properly filled? It&#226;&#128;&#153;s a trivial fix in the PMI ess component
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 15, 2016, at 7:26 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; Von: *Howard Pritchard* &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Datum: Donnerstag, 14. April 2016
</span><br>
<span class="quotelev1">&gt; Betreff: psm2 and psm2_ep_open problems
</span><br>
<span class="quotelev1">&gt; An: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Matias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually I triaged this further.  Open mpi PMI subsystem is actually doing
</span><br>
<span class="quotelev1">&gt; things correctly wrt env variable setting with or without mpi run.  The
</span><br>
<span class="quotelev1">&gt; problem has to do with a psm2  and the fact that on my cluster right now
</span><br>
<span class="quotelev1">&gt; SLURM has only scheduled about 25 jobs.  This results in the unique key
</span><br>
<span class="quotelev1">&gt; PSM2 Mtl is feeding to PSM2 has lots of zeros inthe initial part of the
</span><br>
<span class="quotelev1">&gt; key.  This ends up messing up the epid generated in PSM2.  OFI MTL doesn't
</span><br>
<span class="quotelev1">&gt; have this problem because the PSM2 provider has some of these LSBs set in
</span><br>
<span class="quotelev1">&gt; the value it passes to PSM2.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Howard,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect this is the known issue that when using SLURM with OMPI and PSM
</span><br>
<span class="quotelev2">&gt;&gt; that is discussed here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/community/lists/users/2010/12/15220.php">https://www.open-mpi.org/community/lists/users/2010/12/15220.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As per today, orte generates the psm_key, so when using SLURM this does
</span><br>
<span class="quotelev2">&gt;&gt; not happen and is necessary to set it in the environment.  Here Ralph
</span><br>
<span class="quotelev2">&gt;&gt; explains the workaround:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/community/lists/users/2010/12/15242.php">https://www.open-mpi.org/community/lists/users/2010/12/15242.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As you found, epid of 0 is not a valid value. So, basing comments on:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/01org/opa-psm2/blob/master/psm_ep.c">https://github.com/01org/opa-psm2/blob/master/psm_ep.c</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the assert of line 832. psmi_ep_open_device()  will do :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                             /*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 * We use a LID of 0 for non-HFI
</span><br>
<span class="quotelev2">&gt;&gt; communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 * Since a jobkey is not available from
</span><br>
<span class="quotelev2">&gt;&gt; IPS, pull the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 * first 16 bits from the UUID.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 *epid = PSMI_EPID_PACK(((uint16_t *)
</span><br>
<span class="quotelev2">&gt;&gt; unique_job_key)[0],
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                        (rank
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 3), rank, 0,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                        PSMI_HFI_TYPE_DEFAULT,
</span><br>
<span class="quotelev2">&gt;&gt; rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  In the particular case you mention below, when there is no HFI (shared
</span><br>
<span class="quotelev2">&gt;&gt; memory), rank 0 and the passed key is 0, epid will be 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SOLUTION: set
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Set in the environment OMPI_MCA_orte_precondition_transports with a value
</span><br>
<span class="quotelev2">&gt;&gt; different than 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _MAC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Howard
</span><br>
<span class="quotelev2">&gt;&gt; Pritchard
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Thursday, April 14, 2016 1:10 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Developers List &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* [OMPI devel] psm2 and psm2_ep_open problems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we have this brand-new omnipath cluster here at work,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but people are having problem using it on a single node using
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; srun as the job launcher.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The customer wants to use srun to launch jobs not the open mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The customer installed 1.10.1, but I can reproduce the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; problem with v2.x and I'm sure with master, unless I build the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ofi mtl.  ofi mtl works, psm2 mtl doesn't.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I downloaded the psm2 code from github and started hacking.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What appears to be the problem is that when running on a single
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node one can go through a path in psmi_ep_open_device where
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for a single process job, the value stored into epid is zero.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This results in an assert failing in the __psm2_ep_open_internal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a quick and dirty workaround that doesn't involve fixing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; psm2 MTL?  I could suggest to the sysadmins to install libfabric 1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and build the openmpi to only have ofi mtl, but perhaps there's
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; another way to get psm2 mtl to work for single node jobs?  I'd prefer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to not ask users to disable psm2 mtl explicitly for their single node
</span><br>
<span class="quotelev2">&gt;&gt; jobs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for suggestions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18773.php">http://www.open-mpi.org/community/lists/devel/2016/04/18773.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18776.php">http://www.open-mpi.org/community/lists/devel/2016/04/18776.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18782.php">Howard Pritchard: "[OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18780.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18776.php">Ralph Castain: "Re: [OMPI devel] psm2 and psm2_ep_open problems"</a>
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
