<?
$subject_val = "[OMPI users] another problem with slot-list and openmpi-v2.x-dev-1441-g402abf9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 07:37:58 2016" -->
<!-- isoreceived="20160523113758" -->
<!-- sent="Mon, 23 May 2016 13:37:38 +0200" -->
<!-- isosent="20160523113738" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] another problem with slot-list and openmpi-v2.x-dev-1441-g402abf9" -->
<!-- id="1a658a6c-c462-f768-4db9-aef77d2207d0_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] another problem with slot-list and openmpi-v2.x-dev-1441-g402abf9<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 07:37:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29278.php">Siegmar Gross: "[OMPI users] problem with slot-list and openmpi-v2.x-dev-1441-g402abf9"</a>
<li><strong>Previous message:</strong> <a href="29276.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I installed openmpi-v2.x-dev-1441-g402abf9 on my &quot;SUSE Linux Enterprise
<br>
Server 12 (x86_64)&quot; with Sun C 5.14  and gcc-6.1.0. Unfortunately I
<br>
don't get the expected output with &quot;--slot-list&quot;. It's the same behaviour
<br>
for both compilers.
<br>
<p><p>loki hello_2 114 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler 
<br>
absolute:&quot;            OPAL repo revision: v2.x-dev-1441-g402abf9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
<br>
<p><p><p>I get the expected output for 1 slave process, although it takes very
<br>
long (11 seconds).
<br>
<p>loki hello_2 115 time mpiexec --slot-list 0:0-5,1:0-5 --host loki -np 1 
<br>
hello_2_mpi : --host loki -np 1 hello_2_slave_mpi
<br>
Process 0 of 2 running on loki
<br>
Process 1 of 2 running on loki
<br>
<p><p>Now 1 slave tasks are sending greetings.
<br>
<p>Greetings from task 1:
<br>
&nbsp;&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;&nbsp;msg length:          132 characters
<br>
&nbsp;&nbsp;&nbsp;message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname:          loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;operating system:  Linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release:           3.12.55-52.42-default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processor:         x86_64
<br>
<p>11.680u 1.416s 0:13.07 100.1%	0+0k 0+824io 4pf+0w
<br>
<p><p><p><p>I don't get the expected output for two slave processes.
<br>
<p>loki hello_2 116 time mpiexec --slot-list 0:0-5,1:0-5 --host loki -np 1 
<br>
hello_2_mpi : --host loki -np 2 hello_2_slave_mpi
<br>
Process 0 of 2 running on loki
<br>
Process 1 of 2 running on loki
<br>
<p><p>Now 1 slave tasks are sending greetings.
<br>
<p>Greetings from task 1:
<br>
&nbsp;&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;&nbsp;msg length:          132 characters
<br>
&nbsp;&nbsp;&nbsp;message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname:          loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;operating system:  Linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release:           3.12.55-52.42-default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processor:         x86_64
<br>
<p>21.744u 2.348s 0:24.07 100.0%	0+0k 0+728io 4pf+0w
<br>
<p><p><p><p>I get no output and the program doesn't terminate for three slave processes.
<br>
<p>loki hello_2 117 time mpiexec --slot-list 0:0-5,1:0-5 --host loki -np 1 
<br>
hello_2_mpi : --host loki -np 3 hello_2_slave_mpi
<br>
^C968.460u 51.124s 5:42.13 298.0%	0+0k 0+984io 5pf+0w
<br>
loki hello_2 118
<br>
<p><p><p>I would be grateful, if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29277/hello_2_mpi.c">hello_2_mpi.c</a>
</ul>
<!-- attachment="hello_2_mpi.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29277/hello_2_slave_mpi.c">hello_2_slave_mpi.c</a>
</ul>
<!-- attachment="hello_2_slave_mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29278.php">Siegmar Gross: "[OMPI users] problem with slot-list and openmpi-v2.x-dev-1441-g402abf9"</a>
<li><strong>Previous message:</strong> <a href="29276.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
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
