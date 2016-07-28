<?
$subject_val = "[OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 04:13:49 2016" -->
<!-- isoreceived="20160507081349" -->
<!-- sent="Sat, 7 May 2016 10:13:27 +0200" -->
<!-- isosent="20160507081327" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] slot problem on &amp;quot;SUSE Linux, Enterprise Server 12 (x86_64)&amp;quot;" -->
<!-- id="2d9c581c-8e45-0214-e08b-2492c2b38d45_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 04:13:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29127.php">Siegmar Gross: "[OMPI users] problem compiling Java programs with openmpi-v1.10.2-176-g9d45e07"</a>
<li><strong>Previous message:</strong> <a href="29125.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Reply:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-v1.10.2-176-g9d45e07 on my &quot;SUSE Linux
<br>
Enterprise Server 12 (x86_64)&quot; with Sun C 5.13  and gcc-5.3.0. The
<br>
following programs don't run anymore.
<br>
<p><p>loki hello_2 112 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-176-g9d45e07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
loki hello_2 113 mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki 
<br>
hello_2_slave_mpi
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;&nbsp;hello_2_slave_mpi
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
loki hello_2 114
<br>
<p><p><p>Everything worked as expected with openmpi-v1.10.0-178-gb80f802.
<br>
<p>loki hello_2 114 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.0-178-gb80f802
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
loki hello_2 115 mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki 
<br>
hello_2_slave_mpi
<br>
Process 0 of 3 running on loki
<br>
Process 1 of 3 running on loki
<br>
Process 2 of 3 running on loki
<br>
<p>Now 2 slave tasks are sending greetings.
<br>
<p>Greetings from task 2:
<br>
&nbsp;&nbsp;&nbsp;message type:        3
<br>
...
<br>
<p><p>I have the same problem with openmpi-v2.x-dev-1404-g74d8ea0, if I use
<br>
the following commands.
<br>
<p>mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
<br>
mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,nfs1 hello_2_slave_mpi
<br>
mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki --slot-list 
<br>
0:0-5,1:0-5 hello_2_slave_mpi
<br>
<p><p>I have also the same problem with openmpi-dev-4010-g6c9d65c, if I use
<br>
the following command.
<br>
<p>mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
<br>
<p><p>openmpi-dev-4010-g6c9d65c works as expected with the following commands.
<br>
<p>mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,nfs1 hello_2_slave_mpi
<br>
mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki --slot-list 
<br>
0:0-5,1:0-5 hello_2_slave_mpi
<br>
<p><p>Has the interface changed so that I'm not allowed to use some of my
<br>
commands any longer? I would be grateful, if somebody can fix the
<br>
problem if it is a problem. Thank you very much for any help in
<br>
advance.
<br>
<p><p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29126/hello_2_mpi.c">hello_2_mpi.c</a>
</ul>
<!-- attachment="hello_2_mpi.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29126/hello_2_slave_mpi.c">hello_2_slave_mpi.c</a>
</ul>
<!-- attachment="hello_2_slave_mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29127.php">Siegmar Gross: "[OMPI users] problem compiling Java programs with openmpi-v1.10.2-176-g9d45e07"</a>
<li><strong>Previous message:</strong> <a href="29125.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Reply:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
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
