<?
$subject_val = "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 06:40:03 2011" -->
<!-- isoreceived="20110310114003" -->
<!-- sent="Thu, 10 Mar 2011 06:39:48 -0500" -->
<!-- isosent="20110310113948" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses" -->
<!-- id="7558C770-615F-4ACE-BBAC-65B9D4DE37FA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1299732515.1765.12.camel_at_azbil01" -->
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
<strong>Date:</strong> 2011-03-10 06:39:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15840.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15838.php">George Markomanolis: "[OMPI users] Understanding the buffering of small messages with tcp network"</a>
<li><strong>In reply to:</strong> <a href="15828.php">Clark Britan: "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
LAM/MPI is dead; all the developers (including me) moved to Open MPI years ago (literally). 
<br>
<p>Most of LAM's good ideas have been absorbed into Open MPI. 
<br>
<p>Switching from LAM to Open MPI is theoretically pretty easy - both use the same-named wrapper compilers (mpicc, mpif77, etc). You should be able to simply change your path to point to the Open MPI wrappers instead of the LAM wrappers and then build as you normally would. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Mar 9, 2011, at 11:52 PM, &quot;Clark Britan&quot; &lt;c.britan.j2_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply and you are correct about the error. Here is a
</span><br>
<span class="quotelev1">&gt; summary of what happened, with an additional question at the end. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I originally installed lam-mpi to run FDS, as suggested in the FDS
</span><br>
<span class="quotelev1">&gt; manual. Everything works smoothly with lam-mpi, but on the lam-mpi
</span><br>
<span class="quotelev1">&gt; website it suggests trying the newer open mpi, so I downloaded it. Then
</span><br>
<span class="quotelev1">&gt; when I tried to run FDS in parallel using open mpi, I got the error that
</span><br>
<span class="quotelev1">&gt; I mentioned in the previous email. I then deleted lam-mpi and tried
</span><br>
<span class="quotelev1">&gt; running again using open mpi and I got an error saying that FDS was
</span><br>
<span class="quotelev1">&gt; looking for the lam-mpi help file and that it couldn't find it. So, that
</span><br>
<span class="quotelev1">&gt; leads me to believe that the pre-compiled version of FDS was compiled
</span><br>
<span class="quotelev1">&gt; against lam-mpi (not sure if &quot;compiled against lam-mpi&quot; is the right
</span><br>
<span class="quotelev1">&gt; wording) and therefore will not work with open mpi. I spent some time
</span><br>
<span class="quotelev1">&gt; trying to compile the FDS source code with the open mpi compilers, but I
</span><br>
<span class="quotelev1">&gt; realised this is quite difficult. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is open mpi significantly better than lam-mpi? I.e. should I continue my
</span><br>
<span class="quotelev1">&gt; efforts in trying to run FDS with open mpi? And if so, would compiling
</span><br>
<span class="quotelev1">&gt; the FDS source code using the open mpi compilers solve the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Clark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2011-03-08 at 10:53 -0500, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This usually indicates a mismatch of MPI installations - eg, you compiled against one MPI installation but then accidentally used the mpirun from a different MPI installation. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 8, 2011, at 4:36 AM, &quot;Clark Britan&quot; &lt;c.britan.j2_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just installed OpenMPI on my Linux Ubuntu 10.04 LTS 64 bit computer. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; downloaded the most recent version of OpenMPI and ran the configure and make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; commands. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I then tried to run a CFD software called FDS using 2 of the 12 available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors (single node) as a test. I split my computational domain into two
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; meshes, as explained in the FDS manual and would like to run each mesh on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; separate core. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I run the command mpirun -np 2 fds5_mpi_linux_64 room_fire.fds I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 of 0 is running on comp1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 of 0 is running on comp1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mesh 1 is assigned to Process 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Error: MPI_PROCESS greater than total number of processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why are two instances of the same process run instead of two separate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes? What I expect to see after running the above command is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 of 1 is running on comp1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 of 1 is running on comp1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mesh 1 is assigned to Process 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mesh 2 is assigned to Process 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any idea what is going on? Thanks for the help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Clark
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Clark
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any chances that MPI_PROCESS was not properly set in your FDS parameter 
</span><br>
<span class="quotelev2">&gt;&gt; file?
</span><br>
<span class="quotelev2">&gt;&gt; I am not familiar to the FDS software, but it looks like MPI_PROCESS is
</span><br>
<span class="quotelev2">&gt;&gt; part of the FDS setup, and the error message seems to complain
</span><br>
<span class="quotelev2">&gt;&gt; of a mismatch w.r.t. the number of processes (-np 2).
</span><br>
<span class="quotelev2">&gt;&gt; Maybe it takes a default value.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, if you just want to check your OpenMPI functionality, download
</span><br>
<span class="quotelev2">&gt;&gt; the OpenMPI source code, compile (with mpicc) and run (with mpirun)
</span><br>
<span class="quotelev2">&gt;&gt; the hello_c.c, connectivity_c.c, and ring_c.c programs in the 'examples'
</span><br>
<span class="quotelev2">&gt;&gt; directory.  This will at least tell you if the problem is in OpenMPI or
</span><br>
<span class="quotelev2">&gt;&gt; in FDS.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My two cents,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="15840.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15838.php">George Markomanolis: "[OMPI users] Understanding the buffering of small messages with tcp network"</a>
<li><strong>In reply to:</strong> <a href="15828.php">Clark Britan: "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
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
