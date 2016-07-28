<?
$subject_val = "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 16:17:21 2008" -->
<!-- isoreceived="20080422201721" -->
<!-- sent="Tue, 22 Apr 2008 16:17:13 -0400" -->
<!-- isosent="20080422201713" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found" -->
<!-- id="6A01D24A-36F2-46BF-91AD-4AAB6598AED0_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 16:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5456.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5454.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5453.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2008, at 4:07 PM, gildo.rex_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Ah, thats good news! My concern is, as I also want to use  
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
<p>Absolutely!!! Every time you switch from one MPI version to another  
<br>
you have to recompile your tests and/or benchmarks.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I used the --prefix-option:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But why didn't the export work?
</span><br>
<p>What you did change the LD_LIBRARY_PATH locally. When in fact you need  
<br>
to have it set correctly on the remote shells. As you want to switch  
<br>
from one MPI library to another, your task will be a little bit more  
<br>
difficult. Open MPI can easily deal with this either by using the -- 
<br>
prefix argument, or by adding &quot;--enable-orterun-prefix-by-default -- 
<br>
enable-mpirun-prefix-by-default&quot; on the configure.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks so far to all of you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards and good night!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stephan
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Psst! Geheimtipp: Online Games kostenlos spielen bei den GMX Free  
</span><br>
<span class="quotelev1">&gt; Games!
</span><br>
<span class="quotelev1">&gt; <a href="http://games.entertainment.gmx.net/de/entertainment/games/free">http://games.entertainment.gmx.net/de/entertainment/games/free</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5455/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5456.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5454.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5453.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
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
