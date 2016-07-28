<?
$subject_val = "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  9 23:48:29 2011" -->
<!-- isoreceived="20110310044829" -->
<!-- sent="Thu, 10 Mar 2011 13:48:35 +0900" -->
<!-- isosent="20110310044835" -->
<!-- name="Clark Britan" -->
<!-- email="c.britan.j2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses" -->
<!-- id="1299732515.1765.12.camel_at_azbil01" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4D7650F4.8030700_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Clark Britan (<em>c.britan.j2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-09 23:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15829.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15827.php">Jack Bryan: "[OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15839.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>Reply:</strong> <a href="15839.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for the reply and you are correct about the error. Here is a
<br>
summary of what happened, with an additional question at the end. 
<br>
<p>I originally installed lam-mpi to run FDS, as suggested in the FDS
<br>
manual. Everything works smoothly with lam-mpi, but on the lam-mpi
<br>
website it suggests trying the newer open mpi, so I downloaded it. Then
<br>
when I tried to run FDS in parallel using open mpi, I got the error that
<br>
I mentioned in the previous email. I then deleted lam-mpi and tried
<br>
running again using open mpi and I got an error saying that FDS was
<br>
looking for the lam-mpi help file and that it couldn't find it. So, that
<br>
leads me to believe that the pre-compiled version of FDS was compiled
<br>
against lam-mpi (not sure if &quot;compiled against lam-mpi&quot; is the right
<br>
wording) and therefore will not work with open mpi. I spent some time
<br>
trying to compile the FDS source code with the open mpi compilers, but I
<br>
realised this is quite difficult. 
<br>
<p>Is open mpi significantly better than lam-mpi? I.e. should I continue my
<br>
efforts in trying to run FDS with open mpi? And if so, would compiling
<br>
the FDS source code using the open mpi compilers solve the problem?
<br>
<p>Thanks for the help.
<br>
<p>Regards,
<br>
<p>Clark
<br>
<p>On Tue, 2011-03-08 at 10:53 -0500, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This usually indicates a mismatch of MPI installations - eg, you compiled against one MPI installation but then accidentally used the mpirun from a different MPI installation. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 8, 2011, at 4:36 AM, &quot;Clark Britan&quot; &lt;c.britan.j2_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I just installed OpenMPI on my Linux Ubuntu 10.04 LTS 64 bit computer. I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; downloaded the most recent version of OpenMPI and ran the configure and make
</span><br>
<span class="quotelev3">&gt; &gt;&gt; commands. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I then tried to run a CFD software called FDS using 2 of the 12 available
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processors (single node) as a test. I split my computational domain into two
</span><br>
<span class="quotelev3">&gt; &gt;&gt; meshes, as explained in the FDS manual and would like to run each mesh on a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; separate core. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When I run the command mpirun -np 2 fds5_mpi_linux_64 room_fire.fds I get
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the following error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 of 0 is running on comp1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 of 0 is running on comp1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mesh 1 is assigned to Process 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Error: MPI_PROCESS greater than total number of processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why are two instances of the same process run instead of two separate
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processes? What I expect to see after running the above command is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 of 1 is running on comp1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 1 of 1 is running on comp1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mesh 1 is assigned to Process 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mesh 2 is assigned to Process 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any idea what is going on? Thanks for the help.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kind Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Clark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Clark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any chances that MPI_PROCESS was not properly set in your FDS parameter 
</span><br>
<span class="quotelev1">&gt; file?
</span><br>
<span class="quotelev1">&gt; I am not familiar to the FDS software, but it looks like MPI_PROCESS is
</span><br>
<span class="quotelev1">&gt; part of the FDS setup, and the error message seems to complain
</span><br>
<span class="quotelev1">&gt; of a mismatch w.r.t. the number of processes (-np 2).
</span><br>
<span class="quotelev1">&gt; Maybe it takes a default value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, if you just want to check your OpenMPI functionality, download
</span><br>
<span class="quotelev1">&gt; the OpenMPI source code, compile (with mpicc) and run (with mpirun)
</span><br>
<span class="quotelev1">&gt; the hello_c.c, connectivity_c.c, and ring_c.c programs in the 'examples'
</span><br>
<span class="quotelev1">&gt; directory.  This will at least tell you if the problem is in OpenMPI or
</span><br>
<span class="quotelev1">&gt; in FDS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="15829.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15827.php">Jack Bryan: "[OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15812.php">Gus Correa: "Re: [OMPI users] Two Instances of Same Process Rather Than Two	SeparateProcesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15839.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>Reply:</strong> <a href="15839.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
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
