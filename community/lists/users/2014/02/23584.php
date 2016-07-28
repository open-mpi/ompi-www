<?
$subject_val = "[OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 19:48:17 2014" -->
<!-- isoreceived="20140212004817" -->
<!-- sent="Wed, 12 Feb 2014 09:47:51 +0900" -->
<!-- isosent="20140212004751" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;bind-to l3chace&amp;quot; with r30643 in ticket #4240 dosen't work" -->
<!-- id="OF43DDD795.F72F978B-ON49257C7D.000295FD-49257C7D.00046F95_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20&amp;amp;quot;bind-to%20l3chace&amp;amp;quot;%20with%20r30643%20in%20ticket%20#4240%20dosen't%20work"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-11 19:47:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23583.php">Ralph Castain: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Reply:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Since the ticket #4240 has been already set as fixed, I'm sending this
<br>
email to you. ( I don't konw I could add comments to the fixed ticket)
<br>
<p>When I tried to bind the process to l3chace, it didn't work like below:
<br>
(the host mangae has the normal topology - not inverted)
<br>
<p>[mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -bind-to l3cache
<br>
-report-bindings ~/mis/openmpi/demos/myprog
<br>
--------------------------------------------------------------------------
<br>
No objects of the specified type were found on at least one node:
<br>
<p>&nbsp;&nbsp;Type: Cache
<br>
&nbsp;&nbsp;Node: manage
<br>
<p>The map cannot be done as specified.
<br>
--------------------------------------------------------------------------
<br>
<p>&quot;-bind-to l1cache/l2cahce&quot; doesn't work as well. At least, I confirmed that
<br>
the openmpi-1.7.4 works with &quot;-bind-to l3cache&quot;.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23583.php">Ralph Castain: "Re: [OMPI users] rankfiles in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Reply:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
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
