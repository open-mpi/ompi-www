<?
$subject_val = "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 06:29:09 2011" -->
<!-- isoreceived="20110308112909" -->
<!-- sent="Tue, 8 Mar 2011 06:28:44 -0500" -->
<!-- isosent="20110308112844" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses" -->
<!-- id="CDDCF047-FAE5-44EA-916F-F535CCC0E5A7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110308093522.3E6E6AC058_at_agmls.azbil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 06:28:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
<li><strong>Previous message:</strong> <a href="15810.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="15809.php">Clark Britan: "[OMPI users] Two Instances of Same Process Rather Than Two Separate Processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
<li><strong>Reply:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually indicates a mismatch of MPI installations - eg, you compiled against one MPI installation but then accidentally used the mpirun from a different MPI installation. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Mar 8, 2011, at 4:36 AM, &quot;Clark Britan&quot; &lt;c.britan.j2_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just installed OpenMPI on my Linux Ubuntu 10.04 LTS 64 bit computer. I
</span><br>
<span class="quotelev1">&gt; downloaded the most recent version of OpenMPI and ran the configure and make
</span><br>
<span class="quotelev1">&gt; commands. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then tried to run a CFD software called FDS using 2 of the 12 available
</span><br>
<span class="quotelev1">&gt; processors (single node) as a test. I split my computational domain into two
</span><br>
<span class="quotelev1">&gt; meshes, as explained in the FDS manual and would like to run each mesh on a
</span><br>
<span class="quotelev1">&gt; separate core. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run the command mpirun -np 2 fds5_mpi_linux_64 room_fire.fds I get
</span><br>
<span class="quotelev1">&gt; the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 0 of 0 is running on comp1
</span><br>
<span class="quotelev1">&gt; Process 0 of 0 is running on comp1
</span><br>
<span class="quotelev1">&gt; Mesh 1 is assigned to Process 0
</span><br>
<span class="quotelev1">&gt; Error: MPI_PROCESS greater than total number of processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why are two instances of the same process run instead of two separate
</span><br>
<span class="quotelev1">&gt; processes? What I expect to see after running the above command is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 0 of 1 is running on comp1
</span><br>
<span class="quotelev1">&gt; Process 1 of 1 is running on comp1
</span><br>
<span class="quotelev1">&gt; Mesh 1 is assigned to Process 0
</span><br>
<span class="quotelev1">&gt; Mesh 2 is assigned to Process 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what is going on? Thanks for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Clark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
<li><strong>Previous message:</strong> <a href="15810.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>In reply to:</strong> <a href="15809.php">Clark Britan: "[OMPI users] Two Instances of Same Process Rather Than Two Separate Processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
<li><strong>Reply:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
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
