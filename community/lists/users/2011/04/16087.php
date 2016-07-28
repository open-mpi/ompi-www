<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 17:16:21 2011" -->
<!-- isoreceived="20110403211621" -->
<!-- sent="Sun, 3 Apr 2011 16:16:16 -0500" -->
<!-- isosent="20110403211616" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="BANLkTi=Ma8aEy5WJhgCJ9Gt_dgVti3mstg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F74CA951-419F-4D23-BA04-9C6AE3910D53_at_open-mpi.org" -->
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
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-03 17:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16088.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16086.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16088.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It most certainly will! That mpirun on nodeB is executing under the ssh from
</span><br>
<span class="quotelev1">&gt; nodeA, so when that ssh session is killed, it automatically kills everything
</span><br>
<span class="quotelev1">&gt; run underneath it. And when mpirun dies, so does the job it was running, as
</span><br>
<span class="quotelev1">&gt; per above.
</span><br>
<span class="quotelev1">&gt; You can prove this to yourself rather easily. Just ssh to a remote node and
</span><br>
<span class="quotelev1">&gt; execute any command that lingers for awhile - say something simple like
</span><br>
<span class="quotelev1">&gt; &quot;sleep&quot;. Then kill the ssh and do a &quot;ps&quot; on the remote node. I guarantee
</span><br>
<span class="quotelev1">&gt; that the command will have died.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Nope, it does not, I just tested it (which I had done before). Doing a
<br>
kill on the ssh only kills the ssh
<br>
pstree -ulma712
<br>
-+= 00001 root init [3]
<br>
&nbsp;|-+= 18226 lma712 bash -c cd /home/lma712/MgO;time mpirun -x LD_LIBRARY_PATH -
<br>
&nbsp;| \-+- 18240 lma712 mpirun -x LD_LIBRARY_PATH -x PATH -np 4 -machinefile .mach
<br>
&nbsp;|   |--- 18243 lma712 /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_2.def
<br>
&nbsp;|   \--- 18242 lma712 /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_2.def
<br>
<p>(As I was writing this, David Singleton demonstrated this a different
<br>
way with just a sleep command.)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Research is to see what everybody else has seen, and to think what
nobody else has thought
Albert Szent-Gyorgi
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16088.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16086.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16088.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
