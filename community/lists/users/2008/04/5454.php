<?
$subject_val = "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 16:13:57 2008" -->
<!-- isoreceived="20080422201357" -->
<!-- sent="Tue, 22 Apr 2008 16:13:49 -0400" -->
<!-- isosent="20080422201349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found" -->
<!-- id="69FC42CE-1D56-448B-A5D8-A984319EB905_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080422200703.62350_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 16:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5455.php">George Bosilca: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5453.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5453.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5455.php">George Bosilca: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2008, at 4:07 PM, gildo.rex_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; All you need to do is install them both into separate prefixes  
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., /
</span><br>
<span class="quotelev2">&gt;&gt; opt/openmpi and /opt/mpich).  Then when you're using them, ensure  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; your PATH / LD_LIBRARY_PATH is set consistently across all nodes, or
</span><br>
<span class="quotelev2">&gt;&gt; if using Open MPI, use the options listed in the &quot;What if I can't
</span><br>
<span class="quotelev2">&gt;&gt; modify my PATH and/or LD_LIBRARY_PATH?&quot; FAQ entry (I'm particularly
</span><br>
<span class="quotelev2">&gt;&gt; fond of the --enable-mpirun-prefix-by-default option).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, thats good news! My concern is, as I also want to use  
</span><br>
<span class="quotelev1">&gt; performance-benchmarks, which are specifically compiled for an  
</span><br>
<span class="quotelev1">&gt; installation of MPI, that these benchmarks will not work properly  
</span><br>
<span class="quotelev1">&gt; anymore. E.g. Intel IMB Benchmark or mpptest. Would it be a valid  
</span><br>
<span class="quotelev1">&gt; solution, to compile these benchmarks new when switching between  
</span><br>
<span class="quotelev1">&gt; MPICH and OpenMPI?
</span><br>
<p>MPI applications are source compatible -- they are not binary  
<br>
compatible between different implementations.  So you'll need to  
<br>
compile your benchmarks for each MPI implementation that you want to  
<br>
test (i.e., use that MPI's wrapper compilers to compile them).
<br>
<p><span class="quotelev1">&gt; I've set the second Path using the command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/stephan/openmpi- 
</span><br>
<span class="quotelev1">&gt; install/lib/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test shows up, that the export worked:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  stephan_at_openmpivmwaretest1:~&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;  :/home/stephan/openmpi-install/lib/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (on both nodes)
</span><br>
<p>Note that running an &quot;export&quot; in a shell on a node has no effect for  
<br>
any other processes on that machine that are not children of that  
<br>
shell.  Consider that mpirun will end up calling &quot;ssh othernode  
<br>
orted ....&quot;, which will not have any visibility on whether you  
<br>
exported an environment variable in some other shell on the same host.
<br>
<p><span class="quotelev1">&gt; Then I used the --prefix-option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun --prefix /home/stephan/openmpi-install -np 2 --hostfile
</span><br>
<span class="quotelev1">&gt;  /home/stephan/mpd.hosts /bin/hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and suddenly it worked!!!
</span><br>
<p>The --prefix option (and friends) make the ssh/rsh command line much  
<br>
more complex, effectively setting PATH and LD_LIBRARY_PATH for you on  
<br>
each remote machine before launching orted.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5455.php">George Bosilca: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5453.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5453.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5455.php">George Bosilca: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
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
