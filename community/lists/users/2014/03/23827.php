<?
$subject_val = "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 23:49:19 2014" -->
<!-- isoreceived="20140313034919" -->
<!-- sent="Thu, 13 Mar 2014 12:48:36 +0900" -->
<!-- isosent="20140313034836" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2" -->
<!-- id="OF484B952C.BBEE780A-ON49257C9A.0013993D-49257C9A.0014FCCE_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFAA34C166.3E35A731-ON49257C99.003915D2-49257C99.0039B0FA_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20ctrl%2Bc%20to%20abort%20a%20job%20with%20openmpi-1.7.5rc2"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-12 23:48:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23828.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23826.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23828.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23828.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, this problem is not fixed completely by today's latest
<br>
ticket #4383, I guess ...
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4383">https://svn.open-mpi.org/trac/ompi/ticket/4383</a>
<br>
<p>For example, in case of returing with ORTE_ERR_SILENT from the line 514
<br>
in rmaps_rr_mapper.c file, the problem still occurs. I executed the job
<br>
under the unmanaged condition - rsh without torque:
<br>
<p>[mishima_at_manage openmpi-1.7.5rc2]$ mpirun -np 6 -host node05,node06
<br>
-nooversubscribe ~/mis/openmpi/demos/myprog
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 6 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;/home/mishima/mis/openmpi/demos/myprog
<br>
<p>Either request fewer slots for your application, or make more slots
<br>
available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
<br>
terminate
<br>
Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
<br>
terminate
<br>
.....
<br>
<p>rmaps_rr_mapper.c:
<br>
&nbsp;&nbsp;&nbsp;509      /* quick check to see if we can map all the procs */
<br>
&nbsp;&nbsp;&nbsp;510      if (num_slots &lt; (app-&gt;num_procs *
<br>
orte_rmaps_base.cpus_per_rank)) {
<br>
&nbsp;&nbsp;&nbsp;511          if (ORTE_MAPPING_NO_OVERSUBSCRIBE &amp;
<br>
ORTE_GET_MAPPING_DIRECTIVE(jdata-&gt;map-&gt;mapping)) {
<br>
&nbsp;&nbsp;&nbsp;512              orte_show_help(&quot;help-orte-rmaps-base.txt&quot;,
<br>
&quot;orte-rmaps-base:alloc-error&quot;,
<br>
&nbsp;&nbsp;&nbsp;513                             true, app-&gt;num_procs, app-&gt;app);
<br>
&nbsp;&nbsp;&nbsp;514              return ORTE_ERR_SILENT;
<br>
&nbsp;&nbsp;&nbsp;515          }
<br>
<p><p>Tetsuya
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23828.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23826.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23828.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23828.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
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
