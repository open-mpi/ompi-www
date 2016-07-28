<?
$subject_val = "Re: [OMPI users] PBS tm error returns";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 07:43:11 2009" -->
<!-- isoreceived="20090813114311" -->
<!-- sent="Thu, 13 Aug 2009 05:42:52 -0600" -->
<!-- isosent="20090813114252" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS tm error returns" -->
<!-- id="25FC2A69-EAEA-4A12-884E-BEFC2FAD4DDC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A83A5BF.6070402_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] PBS tm error returns<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 07:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10349.php">Josh Hursey: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10347.php">Ralph Castain: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10344.php">David Singleton: "[OMPI users] PBS tm error returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10389.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David
<br>
<p>You are quite correct. IIRC, we didn't bother checking the local_err  
<br>
because we found it to be unreliable - all Torque checks is that the  
<br>
program exec's. It doesn't report back an error if it segfaults  
<br>
instantly, for example, or aborts because it fails to find a required  
<br>
library. So we added a simple timer that declares the launch a failure  
<br>
if the daemon(s) fail to report back in a specified time.
<br>
<p>However, it can't hurt to check the flag as well. I'll test it out  
<br>
first just to ensure we don't get false failures.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Aug 12, 2009, at 11:33 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe this should go to the devel list but I'll start here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In tracking the way the PBS tm API propagates error information
</span><br>
<span class="quotelev1">&gt; back to clients, I noticed that Open MPI is making an incorrect
</span><br>
<span class="quotelev1">&gt; assumption.  (I'm looking 1.3.2.) The relevant code in
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/tm/plm_tm_module.c is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* TM poll for all the spawns */
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; launched; ++i) {
</span><br>
<span class="quotelev1">&gt;        rc = tm_poll(TM_NULL_EVENT, &amp;event, 1, &amp;local_err);
</span><br>
<span class="quotelev1">&gt;        if (TM_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;            errno = local_err;
</span><br>
<span class="quotelev1">&gt;            opal_output(0, &quot;plm:tm: failed to poll for a spawned  
</span><br>
<span class="quotelev1">&gt; daemon,&quot;
</span><br>
<span class="quotelev1">&gt;                           &quot; return status = %d&quot;, rc);
</span><br>
<span class="quotelev1">&gt;            goto cleanup;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My reading of the way the tm API works is that tm_poll() can (will)
</span><br>
<span class="quotelev1">&gt; return TM_SUCCESS(0) even when the tm_spawn event being waited on  
</span><br>
<span class="quotelev1">&gt; failed,
</span><br>
<span class="quotelev1">&gt; i.e. local_err needs to be checked even if rc=0.  It looks like TM_
</span><br>
<span class="quotelev1">&gt; errors (rc values) are from tm protocol failures or incorrect calls
</span><br>
<span class="quotelev1">&gt; to tm.  local_err is to do with why the actual requested action failed
</span><br>
<span class="quotelev1">&gt; and is usually some sort of internal PBSE_ error code.  In fact it's
</span><br>
<span class="quotelev1">&gt; probably always PBSE_SYSTEM (15010) - I think it is for tm_spawn().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something like the following is probably closer to what is needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* TM poll for all the spawns */
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; launched; ++i) {
</span><br>
<span class="quotelev1">&gt;        rc = tm_poll(TM_NULL_EVENT, &amp;event, 1, &amp;local_err);
</span><br>
<span class="quotelev1">&gt;        if (TM_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;            errno = local_err;
</span><br>
<span class="quotelev1">&gt;            opal_output(0, &quot;plm:tm: failed to poll for a spawned  
</span><br>
<span class="quotelev1">&gt; daemon,&quot;
</span><br>
<span class="quotelev1">&gt;                           &quot; return status = %d&quot;, rc);
</span><br>
<span class="quotelev1">&gt;            goto cleanup;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; 	if (local_err!=0) {
</span><br>
<span class="quotelev1">&gt;            errno = local_err;
</span><br>
<span class="quotelev1">&gt;            opal_output(0, &quot;plm:tm: failed to spawn daemon,&quot;
</span><br>
<span class="quotelev1">&gt;                           &quot; error code = %d&quot;, errno );
</span><br>
<span class="quotelev1">&gt;            goto cleanup;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked torque 2.3.3 to confirm that it's tm behaviour is the same  
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; OpenPBS in this respect. No idea about PBSPro.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
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
<li><strong>Next message:</strong> <a href="10349.php">Josh Hursey: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10347.php">Ralph Castain: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10344.php">David Singleton: "[OMPI users] PBS tm error returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10389.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
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
