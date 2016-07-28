<?
$subject_val = "[OMPI users] #cpus/socket";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 03:07:37 2011" -->
<!-- isoreceived="20110913070737" -->
<!-- sent="Tue, 13 Sep 2011 09:07:32 +0200" -->
<!-- isosent="20110913070732" -->
<!-- name="nn3003" -->
<!-- email="nn3003_at_[hidden]" -->
<!-- subject="[OMPI users] #cpus/socket" -->
<!-- id="20110913090732.E59A7147_at_pobox.sk" -->
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
<strong>Subject:</strong> [OMPI users] #cpus/socket<br>
<strong>From:</strong> nn3003 (<em>nn3003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 03:07:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17243.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17248.php">Peter Kjellström: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Reply:</strong> <a href="17248.php">Peter Kjellström: "Re: [OMPI users] #cpus/socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello !
<br>
&#194;&#160;
<br>
I am running wrf model on 4x AMD 6172 which is 12 core CPU. I use OpenMPI 1.4.3 and libgomp 4.3.4. I have binaries compiled for shared-memory and distributed-memory (OpenMP and OpenMPI)
<br>
I use following command
<br>
mpirun -np 4 --cpus-per-proc 6 --report-bindings --bysocket wrf.exe
<br>
It works ok and in top i see there are 4 wrf.exe and each has 6 threads on cpu0-5 12-17 24-29 36-41
<br>
However, if I want to run 8 or more e.g.
<br>
mpirun -np 4 --cpus-per-proc 12 --report-bindings --bysocket wrf.exe
<br>
I get error
<br>
Your job has requested more cpus per process(rank) than there
<br>
are cpus in a socket:
<br>
&#194;&#160; Cpus/rank: 8
<br>
&#194;&#160; #cpus/socket: 6
<br>
&#194;&#160;
<br>
Why is that ? There are 12 cores per socket in AMD 6172.
<br>
&#194;&#160;
<br>
Thank you for help !
<br>
&#194;&#160;
<br>
&#194;&#160;
<br>
&#194;&#160;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17243.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17248.php">Peter Kjellström: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Reply:</strong> <a href="17248.php">Peter Kjellström: "Re: [OMPI users] #cpus/socket"</a>
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
