<?
$subject_val = "[OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 18:50:55 2016" -->
<!-- isoreceived="20160316225055" -->
<!-- sent="Wed, 16 Mar 2016 22:50:51 +0000" -->
<!-- isosent="20160316225051" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="[OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF2A29F18BA_at_cshsmsgmbx01.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 18:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Previous message:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Reply:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting an error message early on:
<br>
[csclprd3-0-11:17355] [[36373,0],17] plm:rsh: using &quot;/opt/sge/bin/lx-amd64/qrsh -inherit -nostdin -V -verbose&quot; for launching
<br>
unable to write to file /tmp/285019.1.verylong.q/qrsh_error: No space left on device[csclprd3-6-10:18352] [[36373,0],21] plm:rsh: using &quot;/opt/sge/bin/lx-amd64/qrsh -inherit -nostdin -V -verbose&quot; for launching
<br>
<p>According to the OpenMPI FAQ:
<br>
<p>'You may want to alter other parameters, but the important one is &quot;control_slaves&quot;, specifying that the environment has &quot;tight integration&quot;. Note also the lack of a start or stop procedure. The tight integration means that mpirun automatically picks up the slot count to use as a default in place of the '-np' argument, picks up a host file, spawns remote processes via 'qrsh' so that SGE can control and monitor them, and creates and destroys a per-job temporary directory ($TMPDIR), in which Open MPI's directory will be created (by default).'
<br>
<p>When I look at my OpenMPI environment there is no $TMPDIR environment variable.
<br>
<p>How does OpenMPI determine where it's going to put the &quot;per-job temporary directory ($TMPDIR)&quot;? Does it use an SoGE defined environment variable? Is the host file used by OpenMPI spawned in this $TMPDIR temporary directory?
<br>
<p>Bill L.
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28719/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Previous message:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Reply:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
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
