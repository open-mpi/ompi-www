<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 16:00:06 2011" -->
<!-- isoreceived="20110403200006" -->
<!-- sent="Sun, 3 Apr 2011 15:00:00 -0500" -->
<!-- isosent="20110403200000" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="BANLkTi=i-GmJU-tjJGdUz-UQTA5KXOwfUw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F8CAF544-F614-49AB-B3E8-16E6E2C7113D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-04-03 16:00:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Apr 3, 2011 at 11:41 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2011, at 9:34 AM, Laurence Marks wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Apr 3, 2011 at 9:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 3, 2011, at 8:14 AM, Laurence Marks wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me expand on this slightly (in response to Ralph Castain's posting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- I had digest mode set). As currently constructed a shellscript in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Wien2k (www.wien2k.at) launches a series of tasks using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ($remote $remotemachine &quot;cd $PWD;$t $ttt;rm -f .lock_$lockfile[$p]&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; .time1_$loop &amp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where the standard setting for &quot;remote&quot; is &quot;ssh&quot;, remotemachine is the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appropriate host, &quot;t&quot; is &quot;time&quot; and &quot;ttt&quot; is a concatenation of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; commands, for instance when using 2 cores on one node for Task1, 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores on 2 nodes for Task2 and 2 cores on 1 node for Task3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Task1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machine1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_1.def
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Task2:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -v -x LD_LIBRARY_PATH -x PATH -np 4 -machinefile .machine2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_2.def
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Task3:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machine3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_3.def
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is a stable script, works under SGI, linux, mvapich and many
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; others using ssh or rsh (although I've never myself used it with rsh).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is general purpose, i.e. will work to run just 1 task on 8x8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes/cores or 8 parallel tasks on 8 nodes all with 8 cores or any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scatter of nodes/cores.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; According to some, ssh is becoming obsolete within supercomputers and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the &quot;replacement&quot; is pbsdsh at least under Torque.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Somebody is playing an April Fools joke on you. The majority of supercomputers use ssh as their sole launch mechanism, and I have seen no indication that anyone intends to change that situation. That said, Torque is certainly popular and a good environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alas, it is not an April fools joke, to quote from
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml">http://www.bear.bham.ac.uk/bluebear/pbsdsh.shtml</a>
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pbsdsh can be used as a replacement for an ssh or rsh command which
</span><br>
<span class="quotelev2">&gt;&gt; invokes a user command on a worker machine. Some applications expect
</span><br>
<span class="quotelev2">&gt;&gt; the availability of rsh or ssh &#194;&#160;in order to invoke parts of the
</span><br>
<span class="quotelev2">&gt;&gt; computation on the sister worker nodes of the main worker. Using
</span><br>
<span class="quotelev2">&gt;&gt; pbsdsh instead is necessary on this cluster because direct use of ssh
</span><br>
<span class="quotelev2">&gt;&gt; or rsh is not allowed, for accounting and security reasons.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, but that is an administrative decision by a single organization - not the global supercomputer industry. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not using that computer. A scenario that I have come across is
</span><br>
<span class="quotelev2">&gt;&gt; that when a msub job is killed because it has exceeded it's Walltime
</span><br>
<span class="quotelev2">&gt;&gt; mpi tasks spawned by ssh may not be terminated because (so I am told)
</span><br>
<span class="quotelev2">&gt;&gt; Torque does not know about them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not true with OMPI. Torque will kill mpirun, which will in turn cause all MPI procs to die. Yes, it's true that Torque won't know about the MPI procs itself. However, OMPI is designed such that termination of mpirun by the resource manager will cause all apps to die.
</span><br>
<p>How does Torque on NodeA know that an mpi launched on NodeB by ssh
<br>
should be killed? OMPI is designed (from what I can see) for all
<br>
mpirun to be started from the same node, not distributed mpi launched
<br>
independently from multiple nodes. I am not certain that killing the
<br>
ssh on NodeA will in fact terminate a mpi launched on NodeB (i.e. by
<br>
ssh NodeB mpirun AAA...) with OMPI. For certain qdel does not do this,
<br>
in moab canceljob might (but I suspect not).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
