<?
$subject_val = "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 10:54:27 2008" -->
<!-- isoreceived="20080425145427" -->
<!-- sent="Fri, 25 Apr 2008 16:54:20 +0200" -->
<!-- isosent="20080425145420" -->
<!-- name="Hans Wurst" -->
<!-- email="gildo.rex_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found" -->
<!-- id="20080425145420.327130_at_gmx.net" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found<br>
<strong>From:</strong> Hans Wurst (<em>gildo.rex_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 10:54:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5521.php">Jeff Squyres: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5519.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5521.php">Jeff Squyres: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5521.php">Jeff Squyres: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev3">&gt; &gt;&gt; All you need to do is install them both into separate prefixes  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (e.g., /
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opt/openmpi and /opt/mpich).  Then when you're using them, ensure  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; your PATH / LD_LIBRARY_PATH is set consistently across all nodes, or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if using Open MPI, use the options listed in the &quot;What if I can't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; modify my PATH and/or LD_LIBRARY_PATH?&quot; FAQ entry (I'm particularly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fond of the --enable-mpirun-prefix-by-default option).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ah, thats good news! My concern is, as I also want to use  
</span><br>
<span class="quotelev2">&gt; &gt; performance-benchmarks, which are specifically compiled for an  
</span><br>
<span class="quotelev2">&gt; &gt; installation of MPI, that these benchmarks will not work properly  
</span><br>
<span class="quotelev2">&gt; &gt; anymore. E.g. Intel IMB Benchmark or mpptest. Would it be a valid  
</span><br>
<span class="quotelev2">&gt; &gt; solution, to compile these benchmarks new when switching between  
</span><br>
<span class="quotelev2">&gt; &gt; MPICH and OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI applications are source compatible -- they are not binary  
</span><br>
<span class="quotelev1">&gt; compatible between different implementations.  
</span><br>
<p>ok!
<br>
<p><span class="quotelev1">&gt; So you'll need to  
</span><br>
<span class="quotelev1">&gt; compile your benchmarks for each MPI implementation that you want to  
</span><br>
<span class="quotelev1">&gt; test (i.e., use that MPI's wrapper compilers to compile them).
</span><br>
<p>I'm not conscious about what a MPI wrapper compiler is and how it works.
<br>
<p>Maybe we can discuss this with a little example:
<br>
<p>mpptest requires the current installation path of the MPI-implementation before compiling. When I switch between MPI-implementations, do I have to re-compile the benchmark each time? If not, how do I handle that issue? How do I keep the two compiled executables separate?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've set the second Path using the command
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/stephan/openmpi- 
</span><br>
<span class="quotelev2">&gt; &gt; install/lib/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The test shows up, that the export worked:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  stephan_at_openmpivmwaretest1:~&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;  :/home/stephan/openmpi-install/lib/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (on both nodes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that running an &quot;export&quot; in a shell on a node has no effect for  
</span><br>
<span class="quotelev1">&gt; any other processes on that machine that are not children of that  
</span><br>
<span class="quotelev1">&gt; shell.  Consider that mpirun will end up calling &quot;ssh othernode  
</span><br>
<span class="quotelev1">&gt; orted ....&quot;, which will not have any visibility on whether you  
</span><br>
<span class="quotelev1">&gt; exported an environment variable in some other shell on the same host.
</span><br>
<p>Understood!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Then I used the --prefix-option:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun --prefix /home/stephan/openmpi-install -np 2 --hostfile
</span><br>
<span class="quotelev2">&gt; &gt;  /home/stephan/mpd.hosts /bin/hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and suddenly it worked!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The --prefix option (and friends) make the ssh/rsh command line much  
</span><br>
<span class="quotelev1">&gt; more complex, effectively setting PATH and LD_LIBRARY_PATH for you on  
</span><br>
<span class="quotelev1">&gt; each remote machine before launching orted.
</span><br>
<p>OK, I tried that and it works great. Knowing that, I've got one more question regarding different MPI-Implementations on one node. What is the smartest way to switch between them?
<br>
Changing the PATH's in the .bashrc and rebooting the nodes? Is there a smart way to do that online without reboot? Would it be possible to have two separate users &quot;MPICHuser&quot; and &quot;OpenMPIuser&quot; each with the PATH for the corresponding MPI-implementation&#180;, and launching the processes for the different implementations with these separate users?
<br>
<p>Thanks in advance!
<br>
<p>Stephan
<br>
<pre>
-- 
GMX startet ShortView.de. Hier findest Du Leute mit Deinen Interessen!
Jetzt dabei sein: <a href="http://www.shortview.de/?mc=sv_ext_mf&#64;gmx">http://www.shortview.de/?mc=sv_ext_mf&#64;gmx</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5521.php">Jeff Squyres: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5519.php">Jeff Squyres: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5521.php">Jeff Squyres: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5521.php">Jeff Squyres: "Re: [OMPI users] Problems with	program-execution	with	OpenMPI:	Orted: command not found"</a>
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
