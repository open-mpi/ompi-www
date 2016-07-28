<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 23:06:36 2014" -->
<!-- isoreceived="20140128040636" -->
<!-- sent="Mon, 27 Jan 2014 20:06:31 -0800" -->
<!-- isosent="20140128040631" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output" -->
<!-- id="12D27BA6-E035-4A51-A373-CE6E6CE22EDE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF770C0408.8055B4DD-ON49257C6E.0013BE1A-49257C6E.0014BECC_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 23:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23484.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23484.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23484.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid it is too late for 1.7.4 as I have locked that down, barring any last-second smoke test failures. I'll give this some thought for 1.7.5, but I'm a little leery of the proposed change. The problem is that ppr comes in thru a different MCA param than the &quot;map-by&quot; param, and hence we can indeed get conflicts that we cannot resolve.
<br>
<p>This is one of those issues that I need to cleanup in general. We've deprecated a number of params due to similar problems - the &quot;ppr&quot; policy is the last one on the list. Needs to somehow be folded into the &quot;map-by&quot; param, though it also influences the number of procs (unlike the other map-by directives).
<br>
<p><p>On Jan 27, 2014, at 7:46 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, it seems you are rounding the final turn to release 1.7.4!
</span><br>
<span class="quotelev1">&gt; I hope this will be my final request for openmpi-1.7.4 as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I mostly use rr_mapper but sometimes use ppr_mapper. I have a simple
</span><br>
<span class="quotelev1">&gt; request to ask you to improve its usability. Namely, I propose to
</span><br>
<span class="quotelev1">&gt; remove redfining-policy-check routine in rmaps_ppr_component.c
</span><br>
<span class="quotelev1">&gt; (the line 130-138) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 130          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev1">&gt; (orte_rmaps_base.mapping)) {
</span><br>
<span class="quotelev1">&gt; 131              /* if a non-default mapping is already specified, then we
</span><br>
<span class="quotelev1">&gt; 132               * have an error
</span><br>
<span class="quotelev1">&gt; 133               */
</span><br>
<span class="quotelev1">&gt; 134              orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;redefining-policy&quot;, true, &quot;mapping&quot;,
</span><br>
<span class="quotelev1">&gt; 135                             &quot;PPR&quot;, orte_rmaps_base_print_mapping
</span><br>
<span class="quotelev1">&gt; (orte_rmaps_base.mapping));
</span><br>
<span class="quotelev1">&gt; 136              ORTE_SET_MAPPING_DIRECTIVE(orte_rmaps_base.mapping,
</span><br>
<span class="quotelev1">&gt; ORTE_MAPPING_CONFLICTED);
</span><br>
<span class="quotelev1">&gt; 137              return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; 138          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reasons are as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) The final mapper to be used should be selected by the priority set
</span><br>
<span class="quotelev1">&gt; by system or mca param. The ppr_priority is fixed to be 90 and the
</span><br>
<span class="quotelev1">&gt; rr_priority can be set by mca param(default = 10).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) If we set &quot;rmaps_base_mapping_policy = something&quot; in
</span><br>
<span class="quotelev1">&gt; mca-params.conf, -ppr option is always refused by this check as
</span><br>
<span class="quotelev1">&gt; below:
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage demos]$ mpirun -np 2 -ppr 1:socket
</span><br>
<span class="quotelev1">&gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Conflicting directives for mapping policy are causing the policy
</span><br>
<span class="quotelev1">&gt; to be redefined:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  New policy:   PPR
</span><br>
<span class="quotelev1">&gt;  Prior policy:  BYSOCKET
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please check that only one policy is defined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) This fix does not seem to affect any other behavior as far as
</span><br>
<span class="quotelev1">&gt; I confirmed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regard,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kewl - thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 27, 2014, at 4:08 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, Ralph. I quickly checked the fix. It worked fine for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I fixed that in today's final cleanup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 27, 2014, at 3:17 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As for the NEWS - it is actually already correct. We default to map-by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core, not slot, as of 1.7.4.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it correct? As far as I browse the source code, map-by slot is used
</span><br>
<span class="quotelev1">&gt; if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; np &lt;=2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mishima_at_manage openmpi-1.7.4rc2r30425]$ cat -n
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  107              /* default based on number of procs */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  108              if (nprocs &lt;= 2) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  109                  opal_output_verbose(5,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  110                                      &quot;mca:rmaps mapping not
</span><br>
<span class="quotelev1">&gt; given -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using byslot&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  111                  ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_MAPPING_BYSLOT);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  112              } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  113                  opal_output_verbose(5,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  114                                      &quot;mca:rmaps mapping not
</span><br>
<span class="quotelev1">&gt; given -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using bysocket&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  115                  ORTE_SET_MAPPING_POLICY(map-&gt;mapping,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_MAPPING_BYSOCKET);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  116              }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 26, 2014, at 3:02 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried latest nightly snapshots of openmpi-1.7.4rc2r30425.tar.gz.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Almost everything works fine, except that the unexpected output
</span><br>
<span class="quotelev1">&gt; appears
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mishima_at_node04 ~]$ mpirun -cpus-per-proc 4 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; App launch reported: 3 (out of 3) daemons - 8 (out of 12) procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You dropped the if-statement checking &quot;orte_report_launch_progress&quot; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plm_base_receive.c @ r30423, which causes the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- orte/mca/plm/base/plm_base_receive.c.org2014-01-25
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 11:51:59.000000000 +0900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ orte/mca/plm/base/plm_base_receive.c2014-01-26
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 12:20:10.000000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -315,9 +315,11 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           /* record that we heard back from a daemon during app
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           if (running &amp;&amp; NULL != jdata) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               jdata-&gt;num_daemons_reported++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                if (orte_report_launch_progress) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    if (0 == jdata-&gt;num_daemons_reported % 100 ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        jdata-&gt;num_daemons_reported ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_process_info.num_procs) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        ORTE_ACTIVATE_JOB_STATE(jdata,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_JOB_STATE_REPORT_PROGRESS);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           /* prepare for next job */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S. It's also better to change the line 65 in NEWS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 64   * Mapping:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 65   *   if #procs &lt;= 2, default to map-by core  -&gt; map-by slot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                  ^^^^^^^^^^^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 66   *   if #procs &gt; 2, default to map-by socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="23484.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="23482.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23484.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Reply:</strong> <a href="23484.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
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
