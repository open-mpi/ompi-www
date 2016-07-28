<?
$subject_val = "[OMPI users] Openmpi with SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 07:52:59 2008" -->
<!-- isoreceived="20080220125259" -->
<!-- sent="19 Feb 2008 11:49:17 -0000" -->
<!-- isosent="20080219114917" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi with SGE" -->
<!-- id="20080219114917.9712.qmail_at_webmail29.rediffmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi with SGE<br>
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 06:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5046.php">Doug Reeder: "Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5058.php">Pak Lui: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>Reply:</strong> <a href="5058.php">Pak Lui: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5117.php">Reuti: "Re: [OMPI users] Openmpi with SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,&amp;nbsp;&amp;nbsp;&amp;nbsp; I am facing problem while calling mpirun in a loop when using with SGE. My sge version is SGE6.1AR_snapshot3. The script i am submitting via sge is xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxlet i=0while [ $i -lt 100 ]do&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; echo &quot;############################################################################################&quot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; echo &quot;Iteration :$i&quot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; /usr/local/openmpi-1.2.4/bin/mpirun -np $NP -hostfile $TMP/machines send&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; let &quot;i+=1&quot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; echo &quot;############################################################################################&quot;donexxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxNow above script runs well for 15-20 iteration and then fails with following message-------------------------Error Message----------<br>
---------------------------------------------------------error: executing task of job 3869 failed: execution daemon on host &quot;n101&quot; didn't accept task[n199:11989] ERROR: A daemon on node n101 failed to start as expected.[n199:11989] ERROR: There may be more information available from[n199:11989] ERROR: the 'qstat -t' command on the Grid Engine tasks.[n199:11989] ERROR: If the problem persists, please restart the[n199:11989] ERROR: Grid Engine PE job[n199:11989] ERROR: The daemon exited unexpectedly with status 1.-----------------------------------------------------------------------------------------------------------When i do ssh to n101, there is no orted and qrsh_starter running. While checking its spool file, i came across following message-----------------------------------------------Execd spool Error Message---------------------------------|execd|n101|E|no free queue for job 3869 of user neeraj_at_n199 (localhost = n101)--------------------------------------------------------------------------------------<br>
-
<br>
--------------------------------What could be the reason for it.While checking the mailing list, i come across following link&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp; <a href="http://www.open-mpi.org/community/lists/users/2007/03/2771.phpbut">http://www.open-mpi.org/community/lists/users/2007/03/2771.phpbut</a>, i dont think its the same problem. Any help is appreciated.RegardsNeeraj
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5047/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5046.php">Doug Reeder: "Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5058.php">Pak Lui: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>Reply:</strong> <a href="5058.php">Pak Lui: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5117.php">Reuti: "Re: [OMPI users] Openmpi with SGE"</a>
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
