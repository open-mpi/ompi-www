<?
$subject_val = "Re: [OMPI users] OpenMPI + BLCR + LSF integration";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 31 11:00:25 2013" -->
<!-- isoreceived="20130331150025" -->
<!-- sent="Sun, 31 Mar 2013 08:00:17 -0700" -->
<!-- isosent="20130331150017" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI + BLCR + LSF integration" -->
<!-- id="9AD6C42C-FD26-4D47-8A77-ECB3892CA1C7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CACATR0Y8voKVPdVU_GnNFiaF9CC2Gav8Ry+RO-UV-oNFbshnMQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI + BLCR + LSF integration<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-31 11:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21643.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21641.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Maybe in reply to:</strong> <a href="21629.php">Jorge Naranjo Bouzas: "[OMPI users] OpenMPI + BLCR + LSF integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, now that's a little different failure mode than your original description. If it works without CR enabled, then the launcher is working just fine. The problem is in the checkpoint/restart integration.
<br>
<p>There are some things that get initialized differently under CR, but I have no idea what they do or why they would have a problem when launched by LSF. I'm afraid our CR person has moved on to other pastures, so there is little we can do to help at this stage.
<br>
<p>If you can run it with rsh, then perhaps that would be adequate? Afraid that's the best I can offer :-(
<br>
<p><p>On Mar 31, 2013, at 1:18 AM, Jorge Naranjo Bouzas &lt;jonarbo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your quick response ... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried version 1.4.5  with the same result  ..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What changes did you make to version 1.7 ? Would that apply for 1.6 as well?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have bounded the failure to the file 
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/lsf/plm_lsf_module.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; precisely  the &quot;lsb_launch&quot; call :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if (lsb_launch(nodelist_argv, argv, LSF_DJOB_REPLACE_ENV | LSF_DJOB_NOWAIT, env) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; } 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; apparently, when enabling CR,  this call  gets stalled and the code seems to keep waiting in :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* wait for daemons to callback */
</span><br>
<span class="quotelev1">&gt;    if (ORTE_SUCCESS !=
</span><br>
<span class="quotelev1">&gt;       (rc = orte_plm_base_daemon_callback(map-&gt;num_new_daemons))) {
</span><br>
<span class="quotelev1">&gt;       OPAL_OUTPUT_VERBOSE((1, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt;                         &quot;%s plm:lsf: daemon launch failed for job %s on error %s&quot;,
</span><br>
<span class="quotelev1">&gt;                         ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt;                         ORTE_JOBID_PRINT(active_job), ORTE_ERROR_NAME(rc)));
</span><br>
<span class="quotelev1">&gt;        goto cleanup;
</span><br>
<span class="quotelev1">&gt;    } 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For both cases (with and without &quot;-am ft-enable-cr&quot; option) I have dumped the values of &quot;nodelist_argv&quot; , &quot;argv&quot; and &quot;env&quot; and the only significative differences (other than the PID or JOBID ) are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt; argv = orted -mca ess lsf -mca orte_ess_jobid 2036989952 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;2036989952.0;tcp://172.29.1.79:41940;tcp://10.34.1.79:41940&quot;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; argv = orted -mca ess lsf -mca orte_ess_jobid 2116943872 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;2116943872.0;tcp://172.29.1.79:58063;tcp://10.34.1.79:58063&quot; -mca mca_base_param_file_prefix ft-enable-cr -mca mca_base_param_file_path /opt/share/mpi-openmpi/1.4.5-gcc-4.6.0/el6/x86_64/share/openmpi/amca-param-sets:/home/naranjja/Tests/BLCR -mca mca_base_param_file_path_force /home/naranjja/Tests/BLCR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_mca_base_param_file_prefix=ft-enable-cr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When run without &quot;-am ft-enable-cr&quot; it works but when I enable it, the processes are never started ... :S
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jorge
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Mar 30, 2013 at 6:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It is quite likely that the lsf integration on the 1.6 series is broken. We don't have a way to test it any more (all our LSF access is gone). I recently was briefly given access to an LSF machine and fixed it for the 1.7 series, but that series doesn't support checkpoint/restart.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2013, at 1:01 AM, Jorge Naranjo Bouzas &lt;jonarbo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are having problems integrating BLCR + OpenMPI + LSF in a linux cluster with Infiniband
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We compiled OpenMPI version 1.6 with gcc version 4.6.0 ... The configure line was like:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/share/mpi-openmpi/1.6-gcc-4.6.0/el6/x86_64 --with-lsf --with-openib --with-blcr=/opt/share/blcrv0.8.4.app/ --with-ft=cr --enable-ft-thread --enable-opal-multi-threads --with-psm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem I am having is that for some reason the ft-enable-cr features freezes my mpi application when I use more that one node. The job is never started ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We narrowed the search down and we noticed that when mpirun is used out of the batch system, it works... but as soon as the mpirun detects the env variable LSB_JOBID and assumes it is under LSF environment, the problem arises... Additionally, if we use &quot;--mca plm rsh&quot; which should deactivate the LSF integration , it works again, as expected...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, or guess is: or there is something misconfigured in our LSF or there is a problem in the plm module inside openmpi ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any hint???
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jorge Naranjo
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21643.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21641.php">Duke Nguyen: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Maybe in reply to:</strong> <a href="21629.php">Jorge Naranjo Bouzas: "[OMPI users] OpenMPI + BLCR + LSF integration"</a>
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
