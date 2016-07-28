<?
$subject_val = "Re: [OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 20:58:35 2009" -->
<!-- isoreceived="20090603005835" -->
<!-- sent="Tue, 02 Jun 2009 20:58:25 -0400" -->
<!-- isosent="20090603005825" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi and processor affinity" -->
<!-- id="4A25CAB1.1050608_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1243985459.11346.13.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi and processor affinity<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 20:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9502.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9500.php">Iftikhar Rathore: "[OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9500.php">Iftikhar Rathore: "[OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Iftikhar
<br>
<p>Iftikhar Rathore wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; We are using openmpi version 1.2.8 (packaged with ofed-1.4). I am trying
</span><br>
<span class="quotelev1">&gt; to run hpl-2.0 (linpak). We have two intel quad core CPU's in all our
</span><br>
<span class="quotelev1">&gt; server (8 total cores)  and all hosts in the hostfile have lines that
</span><br>
<span class="quotelev1">&gt; look like &quot;10.100.0.227 slots=8max_slots=8&quot;.
</span><br>
<p>Is this a typo on your email or on your hostfile?
<br>
<p><span class="quotelev1"> &gt; look like &quot;10.100.0.227 slots=8max_slots=8&quot;.
</span><br>
<p>There should be blank space between the number of slots and max_slots:
<br>
<p>10.100.0.227 slots=8 max_slots=8
<br>
<p>Another possibility is that you may be inadvertently using another
<br>
mpirun on the system.
<br>
<p>A third possibility:
<br>
Does your HPL.dat file require 896 processors?
<br>
The product P x Q on each (P,Q) pair should match 896.
<br>
If it is less, HPL will run on less processors, i.e., on P x Q only.
<br>
(If it is more, HPL will issue an error message and stop.)
<br>
Is this what is happening?
<br>
<p>A fourth one ...:
<br>
Are you sure processor affinity is not correct?
<br>
Do the processes drift across the cores?
<br>
Typing 1 on top is not enough to clarify this.
<br>
To see the process-to-core map on top,
<br>
type &quot;f&quot; (for fields),
<br>
then &quot;j&quot; (to display the CPU/core number),
<br>
and wait for several minutes to see if processor/core (header &quot;P&quot;)
<br>
and the process ID (header &quot;PID&quot;),
<br>
drift or not.
<br>
<p>Even when I launch less processes than the available/requested cores
<br>
&quot;--mca mpi_paffinity_alone 1&quot; works right here,
<br>
as I just checked, with P=4 and Q=1 on HPL.dat
<br>
and with -np 8 on mpiexec.
<br>
<p>**
<br>
<p>I recently ran a bunch of HPL tests with --mca mpi_paffinity_alone 1
<br>
and OpenMPI 1.3.2, built from source, and the processor affinity seems
<br>
to work (i.e., the processes stick to the cores).
<br>
Building from source quite simple, and would give you the latest OpenMPI.
<br>
<p>I don't know if 1.2.8 (which you are using)
<br>
has a problem with mpi_paffinity_alone,
<br>
but the OpenMPI developers may clarify this.
<br>
<p><p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now when I use mpirun (even with --mca mpi_paffinity_alone 1) it does
</span><br>
<span class="quotelev1">&gt; not keep the affinity, the processes seem to gravitate towards first
</span><br>
<span class="quotelev1">&gt; four cores (using top and hitting 1). I know I do have MCA paffinity
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_devi DLR_WB_88]# ompi_info | grep paffinity
</span><br>
<span class="quotelev1">&gt; [devi.cisco.com:26178] mca: base: component_find: unable to open btl openib: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command line I am using is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # mpirun -nolocal -np 896 -v  --mca mpi_paffinity_alone 1 -hostfile /mnt/apps/hosts/896_8slots /mnt/apps/bin/xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I doing something wrong and is there a way to confirm cpu affinity besides hitting &quot;1&quot; on top.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_devi DLR_WB_88]# mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.2.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9502.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9500.php">Iftikhar Rathore: "[OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9500.php">Iftikhar Rathore: "[OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
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
