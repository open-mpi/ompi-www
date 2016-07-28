<?
$subject_val = "[OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 17 21:01:02 2013" -->
<!-- isoreceived="20131118020102" -->
<!-- sent="Mon, 18 Nov 2013 11:01:23 +0900" -->
<!-- isosent="20131118020123" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager" -->
<!-- id="OFD966DBCC.C3341DA9-ON49257C27.0007F2C3-49257C27.000B156A_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D3D16D98-ACD8-499E-B6CA-788DC548EF76_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi-1.7.4a1r29646%20with%20-hostfile%20option%20under%20Torque%20manager"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-11-17 21:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23001.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>In reply to:</strong> <a href="22995.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23001.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Reply:</strong> <a href="23001.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>This is the continuous story of &quot;Segmentation fault in oob_tcp.c of
<br>
openmpi-1.7.4a1r29646&quot;.
<br>
<p>I found the cause.
<br>
<p>Firstly, I noticed that your hostfile can work and mine can not.
<br>
<p>Your host file:
<br>
cat hosts
<br>
bend001 slots=12
<br>
<p>My host file:
<br>
cat hosts
<br>
node08
<br>
node08
<br>
...(total 8 lines)
<br>
<p>I modified my script file to add &quot;slots=1&quot; to each line of my hostfile
<br>
just before launching mpirun. Then it worked.
<br>
<p>My host file(modified):
<br>
cat hosts
<br>
node08 slots=1
<br>
node08 slots=1
<br>
...(total 8 lines)
<br>
<p>Secondary, I confirmed that there's a slight difference between
<br>
orte/util/hostfile/hostfile.c of 1.7.3 and that of 1.7.4a1r29646.
<br>
<p>$ diff
<br>
hostfile.c.org ../../../../openmpi-1.7.3/orte/util/hostfile/hostfile.c
<br>
394,401c394,399
<br>
&lt;     if (got_count) {
<br>
&lt;         node-&gt;slots_given = true;
<br>
&lt;     } else if (got_max) {
<br>
&lt;         node-&gt;slots = node-&gt;slots_max;
<br>
&lt;         node-&gt;slots_given = true;
<br>
&lt;     } else {
<br>
&lt;         /* should be set by obj_new, but just to be clear */
<br>
&lt;         node-&gt;slots_given = false;
<br>
<pre>
---
&gt;     if (!got_count) {
&gt;         if (got_max) {
&gt;             node-&gt;slots = node-&gt;slots_max;
&gt;         } else {
&gt;             ++node-&gt;slots;
&gt;         }
....
Finally, I added the line 402 below just as a tentative trial.
Then, it worked.
cat -n orte/util/hostfile/hostfile.c:
   ...
   394      if (got_count) {
   395          node-&gt;slots_given = true;
   396      } else if (got_max) {
   397          node-&gt;slots = node-&gt;slots_max;
   398          node-&gt;slots_given = true;
   399      } else {
   400          /* should be set by obj_new, but just to be clear */
   401          node-&gt;slots_given = false;
   402          ++node-&gt;slots; /* added by tmishima */
   403      }
   ...
Please fix the problem properly, because it's just based on my
random guess. It's related to the treatment of hostfile where slots
information is not given.
Regards,
Tetsuya Mishima
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23001.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>In reply to:</strong> <a href="22995.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23001.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Reply:</strong> <a href="23001.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
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
