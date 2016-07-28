<?
$subject_val = "[OMPI users] O-MPI Support for Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 19:05:43 2012" -->
<!-- isoreceived="20120207000543" -->
<!-- sent="Tue, 7 Feb 2012 11:05:36 +1100" -->
<!-- isosent="20120207000536" -->
<!-- name="James Torossian" -->
<!-- email="j.torossian_at_[hidden]" -->
<!-- subject="[OMPI users] O-MPI Support for Windows 7" -->
<!-- id="000301cce52c$38c26f10$aa474d30$_at_torossian@essetek.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] O-MPI Support for Windows 7<br>
<strong>From:</strong> James Torossian (<em>j.torossian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 19:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18409.php">George Bosilca: "Re: [OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>Previous message:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18410.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18410.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="18420.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am trying to setup Open-MPI across two Windows 7 machines with UAC
<br>
disabled ..
<br>
<p>&nbsp;
<br>
<p>Cygwin with OpenSSH is installed, and I can successfully ssh to each machine
<br>
without entry of username and password:
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$ ssh NanoOneQuad
<br>
<p>Last login: Tue Feb  7 01:42:02 2012 from jimt-pc
<br>
<p>&nbsp;
<br>
<p>JimT_at_NanoOneQuad ~
<br>
<p>$
<br>
<p>&nbsp;
<br>
<p>Regardless of this, mpirun insists on asking for a username and password;
<br>
then asks to save credentials, but if selected, responds with not
<br>
implemented. If saving credentials is not selected, then I can see that the
<br>
task starts on the other machine (in task manager) and that the task runs to
<br>
completion OK:
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$ mpirun -H NanoOneQuad ipconfig.exe
<br>
<p>connecting to NanoOneQuad
<br>
<p>username:JimT
<br>
<p>password:**************
<br>
<p>Save Credential?(Y/N) y
<br>
<p>[JimT-PC:03784] This feature hasn't been implemented yet.
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$ mpirun -H NanoOneQuad ipconfig.exe
<br>
<p>connecting to NanoOneQuad
<br>
<p>username:JimT
<br>
<p>password:**************
<br>
<p>Save Credential?(Y/N) n
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$
<br>
<p>&nbsp;
<br>
<p>Please let me know what I have missed. I have gone through the FAQs and have
<br>
rebuilt the windows version but can't seem to get past this.
<br>
<p>&nbsp;
<br>
<p>Thanks and best regards,
<br>
<p>Jim
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18408/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18409.php">George Bosilca: "Re: [OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>Previous message:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18410.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18410.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="18420.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
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
