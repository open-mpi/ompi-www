<?
$subject_val = "[OMPI users] Xgrid and choosing agents...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 11 10:56:14 2009" -->
<!-- isoreceived="20090711145614" -->
<!-- sent="Sat, 11 Jul 2009 07:56:08 -0700" -->
<!-- isosent="20090711145608" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="[OMPI users] Xgrid and choosing agents..." -->
<!-- id="A6282054-7BCC-4261-9822-AD080B5A68EA_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Xgrid and choosing agents...<br>
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-11 10:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI users] And anyone know what limits connections?"</a>
<li><strong>Previous message:</strong> <a href="9915.php">John R. Cary: "[OMPI users] And anyone know what limits connections?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9918.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9918.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Sorry in advance if these are naive questions - I'm not experienced in  
<br>
running a grid...
<br>
<p>I'm using openMPI on 4  duo Quad-core Xeon xserves.  The 8 cores mimic  
<br>
16 cores and show up in xgrid as each agent having 16 processors.   
<br>
However, the processing speed goes down as the used processors exceeds  
<br>
8, so if possible I'd prefer to not have more than 8 processors  
<br>
working on each machine at a time.
<br>
<p>Unfortunately, if I submit a 16-processor job to xgrid it all goes to  
<br>
&quot;xserve03&quot;.  Or even worse, it does so if I submit two separate 8- 
<br>
processor jobs.  Is there anyway to steer jobs to less-busy agents?
<br>
<p>I tried making a hostfile and then specifying the host, but I get:
<br>
<p>/usr/local/openmpi/bin/mpirun -n 8 --hostfile hostfile --host  
<br>
xserve01.local ../build/mitgcmuv
<br>
<p>Some of the requested hosts are not included in the current allocation  
<br>
for the
<br>
application:
<br>
&nbsp;&nbsp;&nbsp;../build/mitgcmuv
<br>
The requested hosts were:
<br>
&nbsp;&nbsp;&nbsp;xserve01.local
<br>
<p>so I assume --host doesn't work with xgrid?
<br>
<p>Is a reasonable alternative to simply not use xgrid and rely on ssh?
<br>
<p>Thanks,  Jody
<br>
<p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak">http://web.uvic.ca/~jklymak</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI users] And anyone know what limits connections?"</a>
<li><strong>Previous message:</strong> <a href="9915.php">John R. Cary: "[OMPI users] And anyone know what limits connections?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9918.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9918.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
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
