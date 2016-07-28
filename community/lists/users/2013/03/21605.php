<?
$subject_val = "[OMPI users] mpirun trouble through ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 24 16:50:53 2013" -->
<!-- isoreceived="20130324205053" -->
<!-- sent="Sun, 24 Mar 2013 21:50:49 +0100" -->
<!-- isosent="20130324205049" -->
<!-- name="Baptiste Robert" -->
<!-- email="baptisterobert38_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun trouble through ssh" -->
<!-- id="CAGEWhg_ODm6aOq3PMs5=YUNP=K6=xzjTWDw8nSB=ThNA2J698Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun trouble through ssh<br>
<strong>From:</strong> Baptiste Robert (<em>baptisterobert38_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-24 16:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21606.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21604.php">Ralph Castain: "Re: [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21606.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Reply:</strong> <a href="21606.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody !
<br>
<p>Here's my problem. I've installed openmpi on my two machines running on
<br>
fedora 17. I've set the path and LD_LIBRARY_PATH correctly, mpirun and
<br>
mpicc work on the two machines without trouble.
<br>
<p>My problem is when I try to run the helloWorld on all node through ssh
<br>
(already configure with certificate) nothing append, I've to kill mpi to
<br>
get the prompt back.
<br>
<p>I launched this command : mpirun -d -host myRemoteNode -n 2 hello_c
<br>
And this give me :
<br>
<p>[baptiste_at_baptiste RE51]$ mpirun -d -hostfile hosts hello_c
<br>
[baptiste.thinkFed:02666] procdir:
<br>
/tmp/openmpi-sessions-baptiste_at_baptiste.thinkFed_0/53471/0/0
<br>
[baptiste.thinkFed:02666] jobdir:
<br>
/tmp/openmpi-sessions-baptiste_at_baptiste.thinkFed_0/53471/0
<br>
[baptiste.thinkFed:02666] top: openmpi-sessions-baptiste_at_baptiste.thinkFed_0
<br>
[baptiste.thinkFed:02666] tmp: /tmp
<br>
[roommateServer:01102] procdir:
<br>
/tmp/openmpi-sessions-baptiste_at_roommateServer_0/53471/0/1
<br>
[roommateServer:01102] jobdir:
<br>
/tmp/openmpi-sessions-baptiste_at_roommateServer_0/53471/0
<br>
[roommateServer:01102] top: openmpi-sessions-baptiste_at_roommateServer_0
<br>
[roommateServer:01102] tmp: /tmp
<br>
<p>And nothing else. But if I run the hello_c on a single machine,
<br>
separately, the job is done and work well.
<br>
<p>If anyone have an idea it would be awesome.. I don't have a clue why
<br>
it isn't work.
<br>
<p>Thank.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21605/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21606.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21604.php">Ralph Castain: "Re: [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21606.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Reply:</strong> <a href="21606.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
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
