<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 17:13:53 2011" -->
<!-- isoreceived="20110403211353" -->
<!-- sent="Mon, 04 Apr 2011 07:13:46 +1000" -->
<!-- isosent="20110403211346" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="4D98E30A.7060601_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25400_1301864351_4D98DF9E_25400_19569_1_F74CA951-419F-4D23-BA04-9C6AE3910D53_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/pbsdsh/Torque problem<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-03 17:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16087.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16091.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16091.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; You can prove this to yourself rather easily. Just ssh to a remote node and execute any command that lingers for awhile - say something simple like &quot;sleep&quot;. Then kill the ssh and do a &quot;ps&quot; on the remote node. I guarantee that the command will have died.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hmmmm ...
<br>
<p>vayu1:~ &gt; ssh v37 sleep 600 &amp;
<br>
[1] 30145
<br>
vayu1:~ &gt; kill -9 30145
<br>
[1]  + Suspended (tty input)         ssh v37 sleep 600
<br>
vayu1:~ &gt;
<br>
[1]    Killed                        ssh v37 sleep 600
<br>
vayu1:~ &gt; ssh v37 ps aux | grep dbs900 | grep sleep
<br>
dbs900   18774  0.0  0.0   9360  1348 ?        Ss   07:12   0:00 /bin/tcsh -c sleep 600
<br>
dbs900   18806  0.0  0.0   3800   480 ?        S    07:12   0:00 sleep 600
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16087.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16091.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16091.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
