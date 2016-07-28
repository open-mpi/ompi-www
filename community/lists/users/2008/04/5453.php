<?
$subject_val = "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 16:07:17 2008" -->
<!-- isoreceived="20080422200717" -->
<!-- sent="Tue, 22 Apr 2008 22:07:03 +0200" -->
<!-- isosent="20080422200703" -->
<!-- name="gildo.rex_at_[hidden]" -->
<!-- email="gildo.rex_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found" -->
<!-- id="20080422200703.62350_at_gmx.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found" -->
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
<strong>From:</strong> <a href="mailto:gildo.rex_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20with%20program-execution	with	OpenMPI:	Orted:%20command%20not%20found"><em>gildo.rex_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-22 16:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5454.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5452.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5454.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5454.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5455.php">George Bosilca: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>the problem is almost solved!
<br>
<p><span class="quotelev3">&gt; &gt;&gt; Make sure you're using the &quot;right&quot; mpirun.  If you have both MPICH  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI installed, you need to install them into the different
</span><br>
<span class="quotelev3">&gt; &gt;&gt; directories.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am sure. I have separate VMware-instances installed in order to  
</span><br>
<span class="quotelev2">&gt; &gt; avoid any interdependencies. Although I'd like to have MPICH and  
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI installed on the same machines in the future to keep my  
</span><br>
<span class="quotelev2">&gt; &gt; efforts for maintenance small, I invested these endeavors for the  
</span><br>
<span class="quotelev2">&gt; &gt; first.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would  be grateful, if you could advice me about a clean setup for  
</span><br>
<span class="quotelev2">&gt; &gt; a machine with both MPICH and OpenMPI installed, but I don't want to  
</span><br>
<span class="quotelev2">&gt; &gt; mix up things here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All you need to do is install them both into separate prefixes (e.g., / 
</span><br>
<span class="quotelev1">&gt; opt/openmpi and /opt/mpich).  Then when you're using them, ensure that  
</span><br>
<span class="quotelev1">&gt; your PATH / LD_LIBRARY_PATH is set consistently across all nodes, or  
</span><br>
<span class="quotelev1">&gt; if using Open MPI, use the options listed in the &quot;What if I can't  
</span><br>
<span class="quotelev1">&gt; modify my PATH and/or LD_LIBRARY_PATH?&quot; FAQ entry (I'm particularly  
</span><br>
<span class="quotelev1">&gt; fond of the --enable-mpirun-prefix-by-default option).
</span><br>
<p>Ah, thats good news! My concern is, as I also want to use performance-benchmarks, which are specifically compiled for an installation of MPI, that these benchmarks will not work properly anymore. E.g. Intel IMB Benchmark or mpptest. Would it be a valid solution, to compile these benchmarks new when switching between MPICH and OpenMPI?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As for not finding the &quot;orted&quot; on the remote nodes, it simply means
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that your PATH / LD_LIBRARY_PATH is not set properly on the remote
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes.  See:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My PATH should be set properly. As I wrote before:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;
</span><br>
<span class="quotelev2">&gt; &gt; The &quot;orted&quot;-executable resides as well as the &quot;mpirun&quot;- and  
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpiexec&quot;-executables in the directory /home/stephan/openmpi- 
</span><br>
<span class="quotelev2">&gt; &gt; install. &quot;orted&quot; is also found by &quot;which orted&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; &quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've exported it with the following command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  export PATH=/home/stephan/openmpi-install/bin:$PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do I get you right:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You advice me, to export the /home/stephan/openmpi-install/lib- 
</span><br>
<span class="quotelev2">&gt; &gt; directory to LD_LIBRARY_PATH too? I can try this at home this evening.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  But the point is that if you're not using something like -- 
</span><br>
<span class="quotelev1">&gt; enable-mpirun-prefix-by-default, then you need to set this PATH and  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH on *all* nodes
</span><br>
<span class="quotelev1">&gt; (e.g., in your shell setup files).  It is not sufficient to export  
</span><br>
<span class="quotelev1">&gt; PATH on just the node where you invoke mpirun.  See the FAQ entries  
</span><br>
<span class="quotelev1">&gt; for more details.
</span><br>
<p>I've set the second Path using the command
<br>
<p>&nbsp;export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/stephan/openmpi-install/lib/
<br>
<p>The test shows up, that the export worked:
<br>
<p>&nbsp;&nbsp;stephan_at_openmpivmwaretest1:~&gt; echo $LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;:/home/stephan/openmpi-install/lib/
<br>
<p>(on both nodes)
<br>
<p>Then I used the --prefix-option:
<br>
<p>&nbsp;&nbsp;mpirun --prefix /home/stephan/openmpi-install -np 2 --hostfile 
<br>
&nbsp;&nbsp;/home/stephan/mpd.hosts /bin/hostname 
<br>
<p>and suddenly it worked!!!
<br>
<p>But why didn't the export work?
<br>
<p>Thanks so far to all of you!
<br>
<p>Kind regards and good night!
<br>
<p>Stephan
<br>
<pre>
-- 
Psst! Geheimtipp: Online Games kostenlos spielen bei den GMX Free Games! 
<a href="http://games.entertainment.gmx.net/de/entertainment/games/free">http://games.entertainment.gmx.net/de/entertainment/games/free</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5454.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5452.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5454.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5454.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5455.php">George Bosilca: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
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
