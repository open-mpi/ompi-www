<?
$subject_val = "[OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 07:54:34 2014" -->
<!-- isoreceived="20141103125434" -->
<!-- sent="Mon, 3 Nov 2014 12:54:29 +0000 (GMT)" -->
<!-- isosent="20141103125429" -->
<!-- name="Mark Dixon" -->
<!-- email="m.c.dixon_at_[hidden]" -->
<!-- subject="[OMPI users] change in behaviour 1.6 -&amp;gt; 1.8 under sge" -->
<!-- id="alpine.GSO.2.00.1411031205310.23393_at_sunserv3" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge<br>
<strong>From:</strong> Mark Dixon (<em>m.c.dixon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 07:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25658.php">Brock Palen: "Re: [OMPI users] orte-ps and orte-top behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Reply:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Reply:</strong> <a href="25661.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>We've started looking at moving to the openmpi 1.8 branch from 1.6 on our 
<br>
CentOS6/Son of Grid Engine cluster and noticed an unexpected difference 
<br>
when binding multiple cores to each rank.
<br>
<p>Has openmpi's definition 'slot' changed between 1.6 and 1.8? It used to 
<br>
mean ranks, but now it appears to mean processing elements (see Details, 
<br>
below).
<br>
<p>Thanks,
<br>
<p>Mark
<br>
<p>PS Also, the man page for 1.8.3 reports that '--bysocket' is deprecated, 
<br>
but it doesn't seem to exist when we try to use it:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun: Error: unknown option &quot;-bysocket&quot;
<br>
&nbsp;&nbsp;&nbsp;Type 'mpirun --help' for usage.
<br>
<p>====== Details ======
<br>
<p>On 1.6.5, we launch with the following core binding options:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --bind-to-core --cpus-per-proc &lt;n&gt; &lt;program&gt;
<br>
&nbsp;&nbsp;&nbsp;mpirun --bind-to-core --bysocket --cpus-per-proc &lt;n&gt; &lt;program&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;where &lt;n&gt; is calculated to maximise the number of cores available to
<br>
&nbsp;&nbsp;&nbsp;use - I guess affectively
<br>
&nbsp;&nbsp;&nbsp;max(1, int(number of cores per node / slots per node requested)).
<br>
<p>&nbsp;&nbsp;&nbsp;openmpi reads the file $PE_HOSTFILE and launches a rank for each slot
<br>
&nbsp;&nbsp;&nbsp;defined in it, binding &lt;n&gt; cores per rank.
<br>
<p>On 1.8.3, we've tried launching with the following core binding options 
<br>
(which we hoped were equivalent):
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -map-by node:PE=&lt;n&gt; &lt;program&gt;
<br>
&nbsp;&nbsp;&nbsp;mpirun -map-by socket:PE=&lt;n&gt; &lt;program&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;openmpi reads the file $PE_HOSTFILE and launches a factor of &lt;n&gt; fewer
<br>
&nbsp;&nbsp;&nbsp;ranks than under 1.6.5. We also notice that, where we wanted a single
<br>
&nbsp;&nbsp;&nbsp;rank on the box and &lt;n&gt; is the number of cores available, openmpi
<br>
&nbsp;&nbsp;&nbsp;refuses to launch and we get the message:
<br>
<p>&nbsp;&nbsp;&nbsp;&quot;There are not enough slots available in the system to satisfy the 1
<br>
&nbsp;&nbsp;&nbsp;slots that were requested by the application&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;I think that error message needs a little work :)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25658.php">Brock Palen: "Re: [OMPI users] orte-ps and orte-top behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Reply:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Reply:</strong> <a href="25661.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
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
