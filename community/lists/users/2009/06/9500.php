<?
$subject_val = "[OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 19:31:04 2009" -->
<!-- isoreceived="20090602233104" -->
<!-- sent="Tue, 02 Jun 2009 16:30:59 -0700" -->
<!-- isosent="20090602233059" -->
<!-- name="Iftikhar Rathore" -->
<!-- email="irathore_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi and processor affinity" -->
<!-- id="1243985459.11346.13.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi and processor affinity<br>
<strong>From:</strong> Iftikhar Rathore (<em>irathore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 19:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9499.php">Danesh Daroui: "Re: [OMPI users] sync problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9502.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
We are using openmpi version 1.2.8 (packaged with ofed-1.4). I am trying
<br>
to run hpl-2.0 (linpak). We have two intel quad core CPU's in all our
<br>
server (8 total cores)  and all hosts in the hostfile have lines that
<br>
look like &quot;10.100.0.227 slots=8max_slots=8&quot;.
<br>
<p>Now when I use mpirun (even with --mca mpi_paffinity_alone 1) it does
<br>
not keep the affinity, the processes seem to gravitate towards first
<br>
four cores (using top and hitting 1). I know I do have MCA paffinity
<br>
available.
<br>
<p>[root_at_devi DLR_WB_88]# ompi_info | grep paffinity
<br>
[devi.cisco.com:26178] mca: base: component_find: unable to open btl openib: file not found (ignored)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.8)
<br>
<p>The command line I am using is:
<br>
<p># mpirun -nolocal -np 896 -v  --mca mpi_paffinity_alone 1 -hostfile /mnt/apps/hosts/896_8slots /mnt/apps/bin/xhpl
<br>
<p>Am I doing something wrong and is there a way to confirm cpu affinity besides hitting &quot;1&quot; on top.
<br>
<p><p>[root_at_devi DLR_WB_88]# mpirun -V
<br>
mpirun (Open MPI) 1.2.8
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><pre>
-- 
Iftikhar Rathore
Technical Marketing Engineer
Server Access Virtualization BU.
Cisco Systems, Inc.
Phone:  +1 408 853 5322
Mobile: +1 636 675 2982
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9499.php">Danesh Daroui: "Re: [OMPI users] sync problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9502.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
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
