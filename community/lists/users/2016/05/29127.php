<?
$subject_val = "[OMPI users] problem compiling Java programs with openmpi-v1.10.2-176-g9d45e07";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 04:30:58 2016" -->
<!-- isoreceived="20160507083058" -->
<!-- sent="Sat, 7 May 2016 10:30:48 +0200" -->
<!-- isosent="20160507083048" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem compiling Java programs with openmpi-v1.10.2-176-g9d45e07" -->
<!-- id="4ece957f-d5c7-8132-217c-a3b7e1cd937a_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem compiling Java programs with openmpi-v1.10.2-176-g9d45e07<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 04:30:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29128.php">Siegmar Gross: "[OMPI users] slot-list breaks for openmpi-v1.10.2-176-g9d45e07 on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29126.php">Siegmar Gross: "[OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-v1.10.2-176-g9d45e07 on my &quot;SUSE Linux
<br>
Enterprise Server 12 (x86_64)&quot; with Sun C 5.13  and gcc-5.3.0.
<br>
Unfortunately I have a problem compiling Java programs.
<br>
<p><p>loki java 124 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-176-g9d45e07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
loki java 125 mpijavac BcastIntMain.java
<br>
BcastIntMain.java:44: error: cannot find symbol
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid	  = MPI.COMM_WORLD.getRank ();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;symbol:   variable COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;location: class MPI
<br>
BcastIntMain.java:52: error: cannot find symbol
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.bcast (intValue, 1, MPI.INT, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;symbol:   variable INT
<br>
&nbsp;&nbsp;&nbsp;location: class MPI
<br>
BcastIntMain.java:52: error: cannot find symbol
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.bcast (intValue, 1, MPI.INT, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;symbol:   variable COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;location: class MPI
<br>
3 errors
<br>
loki java 126
<br>
<p><p>loki java 110 dir /usr/local/openmpi-1.10.3_64_cc/lib64/*.jar
<br>
-rw-r--r-- 1 root root 60876 May  6 13:05 
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/mpi.jar
<br>
loki java 111 javac -version
<br>
javac 1.8.0_66
<br>
loki java 112
<br>
<p><p><p>I have the same problem with openmpi-v2.x-dev-1404-g74d8ea0 and with
<br>
openmpi-dev-4010-g6c9d65c and I would be grateful, if somebody can fix
<br>
the problem. Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><hr>
<ul>
<li>text/x-java attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29127/BcastIntMain.java">BcastIntMain.java</a>
</ul>
<!-- attachment="BcastIntMain.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29128.php">Siegmar Gross: "[OMPI users] slot-list breaks for openmpi-v1.10.2-176-g9d45e07 on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29126.php">Siegmar Gross: "[OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
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
