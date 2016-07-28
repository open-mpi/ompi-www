<?
$subject_val = "[OMPI users] Process doesn't exit on remote machine when using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 10:44:55 2010" -->
<!-- isoreceived="20100524144455" -->
<!-- sent="Mon, 24 May 2010 15:44:50 +0100" -->
<!-- isosent="20100524144450" -->
<!-- name="Rajnesh Jindel" -->
<!-- email="rajnesh.jindel_at_[hidden]" -->
<!-- subject="[OMPI users] Process doesn't exit on remote machine when using hostfile" -->
<!-- id="AANLkTimwb04EN2w9J4jhRyEblUGIcgRsiXE5bvpAfKjT_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Process doesn't exit on remote machine when using hostfile<br>
<strong>From:</strong> Rajnesh Jindel (<em>rajnesh.jindel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 10:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="13141.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13155.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Reply:</strong> <a href="13155.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I specify the hosts separately on the commandline, as follows, the
<br>
process completes as expected.
<br>
mpirun -np 8 -host remotehost,localhost myapp
<br>
Output appears for the localhost and a textfile is created on the remotehost
<br>
<p>However when I use a hostfile the remote processes never complete. I can see
<br>
the output from the local processes and by remote login I can see that that
<br>
processes are being started on the remote machine but never complete.
<br>
<p>The is a simple reduce example using boost.mpi (v1.43) I'm using windows 7
<br>
x64 pro on both machines and openmpi 1.4.2 the hostfile and athe app are in
<br>
the same locaion on both machines.
<br>
<p>Any idea why this is happening?
<br>
<p>Raj
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13142/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="13141.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13155.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Reply:</strong> <a href="13155.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
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
