<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 22:46:37 2014" -->
<!-- isoreceived="20140128034637" -->
<!-- sent="Tue, 28 Jan 2014 12:46:17 +0900" -->
<!-- isosent="20140128034617" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output" -->
<!-- id="OF770C0408.8055B4DD-ON49257C6E.0013BE1A-49257C6E.0014BECC_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FF517430-0019-454B-BEF3-4DF02F2B5A5B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi-1.7.4rc2r30425%20produces%20unexpected%20output"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-27 22:46:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23483.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23483.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23483.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, it seems you are rounding the final turn to release 1.7.4!
<br>
I hope this will be my final request for openmpi-1.7.4 as well.
<br>
<p>I mostly use rr_mapper but sometimes use ppr_mapper. I have a simple
<br>
request to ask you to improve its usability. Namely, I propose to
<br>
remove redfining-policy-check routine in rmaps_ppr_component.c
<br>
(the line 130-138) :
<br>
<p>130          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
<br>
(orte_rmaps_base.mapping)) {
<br>
131              /* if a non-default mapping is already specified, then we
<br>
132               * have an error
<br>
133               */
<br>
134              orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
<br>
&quot;redefining-policy&quot;, true, &quot;mapping&quot;,
<br>
135                             &quot;PPR&quot;, orte_rmaps_base_print_mapping
<br>
(orte_rmaps_base.mapping));
<br>
136              ORTE_SET_MAPPING_DIRECTIVE(orte_rmaps_base.mapping,
<br>
ORTE_MAPPING_CONFLICTED);
<br>
137              return ORTE_ERR_SILENT;
<br>
138          }
<br>
<p>The reasons are as follows:
<br>
<p>1) The final mapper to be used should be selected by the priority set
<br>
by system or mca param. The ppr_priority is fixed to be 90 and the
<br>
rr_priority can be set by mca param(default = 10).
<br>
<p>2) If we set &quot;rmaps_base_mapping_policy = something&quot; in
<br>
mca-params.conf, -ppr option is always refused by this check as
<br>
below:
<br>
[mishima_at_manage demos]$ mpirun -np 2 -ppr 1:socket
<br>
~/mis/openmpi/demos/myprog
<br>
--------------------------------------------------------------------------
<br>
Conflicting directives for mapping policy are causing the policy
<br>
to be redefined:
<br>
<p>&nbsp;&nbsp;New policy:   PPR
<br>
&nbsp;&nbsp;Prior policy:  BYSOCKET
<br>
<p>Please check that only one policy is defined.
<br>
<p>3) This fix does not seem to affect any other behavior as far as
<br>
I confirmed.
<br>
<p>Regard,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Kewl - thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2014, at 4:08 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Ralph. I quickly checked the fix. It worked fine for me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I fixed that in today's final cleanup
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 27, 2014, at 3:17 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As for the NEWS - it is actually already correct. We default to map-by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; core, not slot, as of 1.7.4.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is it correct? As far as I browse the source code, map-by slot is used
</span><br>
if
<br>
<span class="quotelev3">&gt; &gt;&gt; np &lt;=2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mishima_at_manage openmpi-1.7.4rc2r30425]$ cat -n
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   107              /* default based on number of procs */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   108              if (nprocs &lt;= 2) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   109                  opal_output_verbose(5,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   110                                      &quot;mca:rmaps mapping not
</span><br>
given -
<br>
<span class="quotelev3">&gt; &gt;&gt; using byslot&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   111                  ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_MAPPING_BYSLOT);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   112              } else {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   113                  opal_output_verbose(5,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   114                                      &quot;mca:rmaps mapping not
</span><br>
given -
<br>
<span class="quotelev3">&gt; &gt;&gt; using bysocket&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   115                  ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_MAPPING_BYSOCKET);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   116              }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 26, 2014, at 3:02 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I tried latest nightly snapshots of openmpi-1.7.4rc2r30425.tar.gz.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Almost everything works fine, except that the unexpected output
</span><br>
appears
<br>
<span class="quotelev3">&gt; &gt;&gt; as below:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mishima_at_node04 ~]$ mpirun -cpus-per-proc 4 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt; App launch reported: 3 (out of 3) daemons - 8 (out of 12) procs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You dropped the if-statement checking &quot;orte_report_launch_progress&quot; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; plm_base_receive.c @ r30423, which causes the problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- orte/mca/plm/base/plm_base_receive.c.org2014-01-25
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 11:51:59.000000000 +0900
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ orte/mca/plm/base/plm_base_receive.c2014-01-26
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 12:20:10.000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +0900
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -315,9 +315,11 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            /* record that we heard back from a daemon during app
</span><br>
<span class="quotelev3">&gt; &gt;&gt; launch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            if (running &amp;&amp; NULL != jdata) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                jdata-&gt;num_daemons_reported++;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                    jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -                    ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                if (orte_report_launch_progress) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                    if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                        jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                        ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                    }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            /* prepare for next job */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; P.S. It's also better to change the line 65 in NEWS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 64   * Mapping:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 65   *   if #procs &lt;= 2, default to map-by core  -&gt; map-by slot
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                   ^^^^^^^^^^^
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 66   *   if #procs &gt; 2, default to map-by socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23483.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23481.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23483.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23483.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
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
