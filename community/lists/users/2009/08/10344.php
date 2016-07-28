<?
$subject_val = "[OMPI users] PBS tm error returns";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 01:33:52 2009" -->
<!-- isoreceived="20090813053352" -->
<!-- sent="Thu, 13 Aug 2009 15:33:51 +1000" -->
<!-- isosent="20090813053351" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="[OMPI users] PBS tm error returns" -->
<!-- id="4A83A5BF.6070402_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] PBS tm error returns<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 01:33:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10343.php">Allen Barnett: "[OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10348.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>Reply:</strong> <a href="10348.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>Maybe reply:</strong> <a href="10389.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe this should go to the devel list but I'll start here.
<br>
<p>In tracking the way the PBS tm API propagates error information
<br>
back to clients, I noticed that Open MPI is making an incorrect
<br>
assumption.  (I'm looking 1.3.2.) The relevant code in
<br>
orte/mca/plm/tm/plm_tm_module.c is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* TM poll for all the spawns */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; launched; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = tm_poll(TM_NULL_EVENT, &amp;event, 1, &amp;local_err);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (TM_SUCCESS != rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errno = local_err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;plm:tm: failed to poll for a spawned daemon,&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; return status = %d&quot;, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>My reading of the way the tm API works is that tm_poll() can (will)
<br>
return TM_SUCCESS(0) even when the tm_spawn event being waited on failed,
<br>
i.e. local_err needs to be checked even if rc=0.  It looks like TM_
<br>
errors (rc values) are from tm protocol failures or incorrect calls
<br>
to tm.  local_err is to do with why the actual requested action failed
<br>
and is usually some sort of internal PBSE_ error code.  In fact it's
<br>
probably always PBSE_SYSTEM (15010) - I think it is for tm_spawn().
<br>
<p>Something like the following is probably closer to what is needed.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* TM poll for all the spawns */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; launched; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = tm_poll(TM_NULL_EVENT, &amp;event, 1, &amp;local_err);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (TM_SUCCESS != rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errno = local_err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;plm:tm: failed to poll for a spawned daemon,&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; return status = %d&quot;, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (local_err!=0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errno = local_err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;plm:tm: failed to spawn daemon,&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; error code = %d&quot;, errno );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I checked torque 2.3.3 to confirm that it's tm behaviour is the same as
<br>
OpenPBS in this respect. No idea about PBSPro.
<br>
<p><p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10343.php">Allen Barnett: "[OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10348.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>Reply:</strong> <a href="10348.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>Maybe reply:</strong> <a href="10389.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
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
