<?
$subject_val = "[OMPI users] oob-tcp problem, unreachable in orted_comm";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  6 12:18:48 2009" -->
<!-- isoreceived="20090606161848" -->
<!-- sent="Sat, 06 Jun 2009 18:18:27 +0200" -->
<!-- isosent="20090606161827" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] oob-tcp problem, unreachable in orted_comm" -->
<!-- id="1244305107.7024.10.camel_at_y-boda.ydc.se" -->
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
<strong>Subject:</strong> [OMPI users] oob-tcp problem, unreachable in orted_comm<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-06 12:18:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9557.php">Ralph Castain: "Re: [OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<li><strong>Previous message:</strong> <a href="9555.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9557.php">Ralph Castain: "Re: [OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<li><strong>Reply:</strong> <a href="9557.php">Ralph Castain: "Re: [OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just got this in a user job.
<br>
Any idea why it complains like this.
<br>
The original error was the infamous &quot;RETRY EXCEEDED ERROR&quot; but instead
<br>
of killing the job it showed this and never died.
<br>
I have never seen this happen before.
<br>
<p>openmpi 1.3.2, built with intel 10.1
<br>
This binary is used ALOT (+50% of the system walltime) and has never
<br>
shown this specific problem and rarely the &quot;Retry exceeded error&quot;
<br>
either.
<br>
<p>[p-bc2503.hpc2n.umu.se:11892] [[34820,0],0]-[[34820,0],1] oob-tcp:
<br>
Communication
<br>
&nbsp;retries exceeded.  Can not communicate with peer
<br>
[p-bc2503.hpc2n.umu.se:11892] [[34820,0],0] ORTE_ERROR_LOG: Unreachable
<br>
in file 
<br>
orted/orted_comm.c at line 130
<br>
[p-bc2503.hpc2n.umu.se:11892] [[34820,0],0] ORTE_ERROR_LOG: Unreachable
<br>
in file 
<br>
orted/orted_comm.c at line 130
<br>
[p-bc2503.hpc2n.umu.se:11892] [[34820,0],0]-[[34820,0],1] oob-tcp:
<br>
Communication
<br>
&nbsp;retries exceeded.  Can not communicate with peer
<br>
<p><p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9557.php">Ralph Castain: "Re: [OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<li><strong>Previous message:</strong> <a href="9555.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9557.php">Ralph Castain: "Re: [OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
<li><strong>Reply:</strong> <a href="9557.php">Ralph Castain: "Re: [OMPI users] oob-tcp problem, unreachable in orted_comm"</a>
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
