<?
$subject_val = "Re: [OMPI users] How to debug Open MPI programs with gdb";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 12:19:36 2010" -->
<!-- isoreceived="20100422161936" -->
<!-- sent="Thu, 22 Apr 2010 10:19:27 -0600" -->
<!-- isosent="20100422161927" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to debug Open MPI programs with gdb" -->
<!-- id="5B92653D-CAFB-48FF-83B1-40FD11EF767F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="201004221805.33294.nemanja.ilic.81_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to debug Open MPI programs with gdb<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 12:19:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12734.php">Jed Brown: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12732.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12731.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12734.php">Jed Brown: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think the &quot;debugger&quot; option to mpirun will work with gdb - I believe it is intended to work with parallel debuggers such as Totalview. Looking at the code, I certainly can't see how gdb would work correctly with it.
<br>
<p>There is an mpirun option &quot;-xterm&quot; which will launch the xterm windows automatically for you, but that doesn't resolve your problem as it basically does what you are doing  manually.
<br>
<p>It is unclear why you can't run gdb this way on a remote computer. Is something wrong with xterm? Do you not have an xterm client running on your remote computer?
<br>
<p>On Apr 22, 2010, at 10:05 AM, &#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic) wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI 1.4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Nemanja Ilic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 22 April 2010 16:44:13 you wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What version of OMPI are you using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 22, 2010, at 5:11 AM, &#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to debug with command: &quot;mpirun -debugger gdb -debug -np 4 my_program&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Surely,  it starts the debugger, but it doesn't start the debugging nor it loads any of the my_program threads into the debugger. If I start debugging manually (&quot;file my_program&quot;, then &quot;run&quot;), I can start only one thread of my_program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the contrary when I debug with &quot;mpirun -np 4 xterm -e gdb my_mpi_application&quot; the four debugger windows are started with separate thread each, just as it should be.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since I will be using debugger on a remote computer I can only run gdb in console mode. Can anyone help me with this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nemanja Ilic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12734.php">Jed Brown: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12732.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12731.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12734.php">Jed Brown: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
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
