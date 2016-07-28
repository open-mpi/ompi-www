<?
$subject_val = "[OMPI users] Huge memory usage, small messages, 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  6 17:02:58 2014" -->
<!-- isoreceived="20140106220258" -->
<!-- sent="Mon, 6 Jan 2014 23:02:56 +0100" -->
<!-- isosent="20140106220256" -->
<!-- name="Maciej Klimek" -->
<!-- email="maciej.klimek_at_[hidden]" -->
<!-- subject="[OMPI users] Huge memory usage, small messages, 1.6.5" -->
<!-- id="CAAPsG6mXpXwJmQfsRc3Z9FmJ+qgBL0hbeGfTc6Rrv7HYX4WmtA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Huge memory usage, small messages, 1.6.5<br>
<strong>From:</strong> Maciej Klimek (<em>maciej.klimek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-06 17:02:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23325.php">Jeff Squyres (jsquyres): "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23323.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I have a simple program, where one node is supposed to send 3 * 10^5
<br>
4 byte messages to the other node. Sending is done using MPI_Send,
<br>
receiving is done
<br>
using MPI_Recv. The problem which arises while running this program on two
<br>
machines is
<br>
that the sending node is using a lot of memory i.e. &gt;= 19 Gb virtual
<br>
memory, and ~1.5 Gb resident memory. When running two processes on one
<br>
machine, &#239;&#156;&#131;memory usage is a lot smaller.
<br>
<p>I tried also a scenario with sending, fewer messages (like 100), which
<br>
contain more payload (so that the total data send is identical) and memory
<br>
usage was normal.
<br>
<p>I am using OpenMPI 1.6.5.
<br>
Probably I am doing something wrong, could You try to help me?
<br>
(attached the requested outputs of ompi_info)
<br>
Thanks,
<br>
Maciek.
<br>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23324/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23324/ompi_info_all.zip">ompi_info_all.zip</a>
</ul>
<!-- attachment="ompi_info_all.zip" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23324/ompi_info_parsable_master.zip">ompi_info_parsable_master.zip</a>
</ul>
<!-- attachment="ompi_info_parsable_master.zip" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23324/ompi_info_parsable_worker_0.zip">ompi_info_parsable_worker_0.zip</a>
</ul>
<!-- attachment="ompi_info_parsable_worker_0.zip" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23324/ompi_info_parsable_worker_1.zip">ompi_info_parsable_worker_1.zip</a>
</ul>
<!-- attachment="ompi_info_parsable_worker_1.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23325.php">Jeff Squyres (jsquyres): "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23323.php">Ralph Castain: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
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
