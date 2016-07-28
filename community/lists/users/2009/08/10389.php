<?
$subject_val = "Re: [OMPI users] PBS tm error returns";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 13:48:21 2009" -->
<!-- isoreceived="20090817174821" -->
<!-- sent="Mon, 17 Aug 2009 11:48:15 -0600" -->
<!-- isosent="20090817174815" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS tm error returns" -->
<!-- id="71d2d8cc0908171048m7eaf9af4rece99520d03591f2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] PBS tm error returns" -->
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
<strong>Date:</strong> 2009-08-17 13:48:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10388.php">Eugene Loh: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="10344.php">David Singleton: "[OMPI users] PBS tm error returns"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David
<br>
<p>You are quite correct. IIRC, we didn't bother checking the local_err because
<br>
we found it to be unreliable - all Torque checks is that the program exec's.
<br>
It doesn't report back an error if it segfaults instantly, for example, or
<br>
aborts because it fails to find a required library. So we added a simple
<br>
timer that declares the launch a failure if the daemon(s) fail to report
<br>
back in a specified time.
<br>
Hi David
<br>
<p>This didn't cause any problems, so I went ahead and put it in our devel
<br>
trunk. Barring any subsequent error reports, I'll move it over to the 1.3
<br>
series.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><p><p><p><span class="quotelev1">&gt; However, it can't hurt to check the flag as well. I'll test it out first
</span><br>
<span class="quotelev1">&gt; just to ensure we don't get false failures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2009, at 11:33 PM, David Singleton wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe this should go to the devel list but I'll start here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In tracking the way the PBS tm API propagates error information
</span><br>
<span class="quotelev2">&gt;&gt; back to clients, I noticed that Open MPI is making an incorrect
</span><br>
<span class="quotelev2">&gt;&gt; assumption.  (I'm looking 1.3.2.) The relevant code in
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/plm/tm/plm_tm_module.c is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   /* TM poll for all the spawns */
</span><br>
<span class="quotelev2">&gt;&gt;   for (i = 0; i &lt; launched; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt;       rc = tm_poll(TM_NULL_EVENT, &amp;event, 1, &amp;local_err);
</span><br>
<span class="quotelev2">&gt;&gt;       if (TM_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt;&gt;           errno = local_err;
</span><br>
<span class="quotelev2">&gt;&gt;           opal_output(0, &quot;plm:tm: failed to poll for a spawned daemon,&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                          &quot; return status = %d&quot;, rc);
</span><br>
<span class="quotelev2">&gt;&gt;           goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My reading of the way the tm API works is that tm_poll() can (will)
</span><br>
<span class="quotelev2">&gt;&gt; return TM_SUCCESS(0) even when the tm_spawn event being waited on failed,
</span><br>
<span class="quotelev2">&gt;&gt; i.e. local_err needs to be checked even if rc=0.  It looks like TM_
</span><br>
<span class="quotelev2">&gt;&gt; errors (rc values) are from tm protocol failures or incorrect calls
</span><br>
<span class="quotelev2">&gt;&gt; to tm.  local_err is to do with why the actual requested action failed
</span><br>
<span class="quotelev2">&gt;&gt; and is usually some sort of internal PBSE_ error code.  In fact it's
</span><br>
<span class="quotelev2">&gt;&gt; probably always PBSE_SYSTEM (15010) - I think it is for tm_spawn().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Something like the following is probably closer to what is needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   /* TM poll for all the spawns */
</span><br>
<span class="quotelev2">&gt;&gt;   for (i = 0; i &lt; launched; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt;       rc = tm_poll(TM_NULL_EVENT, &amp;event, 1, &amp;local_err);
</span><br>
<span class="quotelev2">&gt;&gt;       if (TM_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt;&gt;           errno = local_err;
</span><br>
<span class="quotelev2">&gt;&gt;           opal_output(0, &quot;plm:tm: failed to poll for a spawned daemon,&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                          &quot; return status = %d&quot;, rc);
</span><br>
<span class="quotelev2">&gt;&gt;           goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;     if (local_err!=0) {
</span><br>
<span class="quotelev2">&gt;&gt;           errno = local_err;
</span><br>
<span class="quotelev2">&gt;&gt;           opal_output(0, &quot;plm:tm: failed to spawn daemon,&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                          &quot; error code = %d&quot;, errno );
</span><br>
<span class="quotelev2">&gt;&gt;           goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checked torque 2.3.3 to confirm that it's tm behaviour is the same as
</span><br>
<span class="quotelev2">&gt;&gt; OpenPBS in this respect. No idea about PBSPro.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10389/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10388.php">Eugene Loh: "Re: [OMPI users] Help: How to accomplish processors affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="10344.php">David Singleton: "[OMPI users] PBS tm error returns"</a>
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
