<?
$subject_val = "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 10:53:42 2011" -->
<!-- isoreceived="20110308155342" -->
<!-- sent="Tue, 08 Mar 2011 10:53:24 -0500" -->
<!-- isosent="20110308155324" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses" -->
<!-- id="4D7650F4.8030700_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CDDCF047-FAE5-44EA-916F-F535CCC0E5A7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 10:53:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15813.php">Eugene Loh: "[OMPI users] multi-threaded programming"</a>
<li><strong>Previous message:</strong> <a href="15811.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>In reply to:</strong> <a href="15811.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15828.php">Clark Britan: "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>Reply:</strong> <a href="15828.php">Clark Britan: "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; This usually indicates a mismatch of MPI installations - eg, you compiled against one MPI installation but then accidentally used the mpirun from a different MPI installation. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 8, 2011, at 4:36 AM, &quot;Clark Britan&quot; &lt;c.britan.j2_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just installed OpenMPI on my Linux Ubuntu 10.04 LTS 64 bit computer. I
</span><br>
<span class="quotelev2">&gt;&gt; downloaded the most recent version of OpenMPI and ran the configure and make
</span><br>
<span class="quotelev2">&gt;&gt; commands. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I then tried to run a CFD software called FDS using 2 of the 12 available
</span><br>
<span class="quotelev2">&gt;&gt; processors (single node) as a test. I split my computational domain into two
</span><br>
<span class="quotelev2">&gt;&gt; meshes, as explained in the FDS manual and would like to run each mesh on a
</span><br>
<span class="quotelev2">&gt;&gt; separate core. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run the command mpirun -np 2 fds5_mpi_linux_64 room_fire.fds I get
</span><br>
<span class="quotelev2">&gt;&gt; the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 0 is running on comp1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 0 is running on comp1
</span><br>
<span class="quotelev2">&gt;&gt; Mesh 1 is assigned to Process 0
</span><br>
<span class="quotelev2">&gt;&gt; Error: MPI_PROCESS greater than total number of processes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why are two instances of the same process run instead of two separate
</span><br>
<span class="quotelev2">&gt;&gt; processes? What I expect to see after running the above command is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 1 is running on comp1
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 of 1 is running on comp1
</span><br>
<span class="quotelev2">&gt;&gt; Mesh 1 is assigned to Process 0
</span><br>
<span class="quotelev2">&gt;&gt; Mesh 2 is assigned to Process 1
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what is going on? Thanks for the help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Clark
</span><br>
<p>Hi Clark
<br>
<p>Any chances that MPI_PROCESS was not properly set in your FDS parameter 
<br>
file?
<br>
I am not familiar to the FDS software, but it looks like MPI_PROCESS is
<br>
part of the FDS setup, and the error message seems to complain
<br>
of a mismatch w.r.t. the number of processes (-np 2).
<br>
Maybe it takes a default value.
<br>
<p>Also, if you just want to check your OpenMPI functionality, download
<br>
the OpenMPI source code, compile (with mpicc) and run (with mpirun)
<br>
the hello_c.c, connectivity_c.c, and ring_c.c programs in the 'examples'
<br>
directory.  This will at least tell you if the problem is in OpenMPI or
<br>
in FDS.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15813.php">Eugene Loh: "[OMPI users] multi-threaded programming"</a>
<li><strong>Previous message:</strong> <a href="15811.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>In reply to:</strong> <a href="15811.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15828.php">Clark Britan: "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>Reply:</strong> <a href="15828.php">Clark Britan: "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
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
