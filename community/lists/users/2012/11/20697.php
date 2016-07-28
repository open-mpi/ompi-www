<?
$subject_val = "Re: [OMPI users] Where to start with MPI on OSX?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 18:55:26 2012" -->
<!-- isoreceived="20121109235526" -->
<!-- sent="Fri, 09 Nov 2012 15:55:14 -0800" -->
<!-- isosent="20121109235514" -->
<!-- name="shiny knight" -->
<!-- email="theshinyknight_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where to start with MPI on OSX?" -->
<!-- id="FB8FA780-BBBB-4B3D-86DD-91EAF744A11E_at_me.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3F473E41-E907-42D2-8488-5B6DB9701C10_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Where to start with MPI on OSX?<br>
<strong>From:</strong> shiny knight (<em>theshinyknight_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-09 18:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20698.php">Lim Jiew Meng: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>Previous message:</strong> <a href="20696.php">George Bosilca: "Re: [OMPI users] gathering problem"</a>
<li><strong>In reply to:</strong> <a href="20684.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20700.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20700.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20704.php">Mark Bolstad: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Reuti for the sample.
<br>
<p>I have the latest Xcode available on the Apple dev center; Xcode 4 probably?
<br>
<p>I think that the reason why nothing happens is because the code runs via MPICH2; tried to launch mpicc with the -echo flag and i see in the output
<br>
<p>-I/opt/local/include/mpich2 -L/opt/local/lib -lpmpich -lmpich -lopa -lmpl -lpthread
<br>
<p>which makes me think that i am using MPICH2; I just need to figure out how to remove it now...found a dir in opt/local/include that is called mpich2 but I am not sure if is enough to just delete that dir.
<br>
<p><p>&nbsp;When I have installed OpenMPI I followed the instructions on this site:
<br>
<p><a href="https://sites.google.com/site/dwhipp/tutorials/installing-open-mpi-on-mac-os-x">https://sites.google.com/site/dwhipp/tutorials/installing-open-mpi-on-mac-os-x</a>
<br>
<p>While for MPICH2 I've followed this one:
<br>
<p><a href="http://www.mpitutorial.com/installing-mpich2/">http://www.mpitutorial.com/installing-mpich2/</a>
<br>
<p>Most likely I've put them on top of each other and messed up both
<br>
<p><p><p>On Nov 9, 2012, at 2:32 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 09.11.2012 um 08:47 schrieb shiny knight:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your replies.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I use Snow Leopard, running ompi_info returns an error (command not found).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm on this version too. Which version of Xcode do you use - &quot;Xcode 3.2.6 and iOS SDK 4.3&quot;? Attached is a small file which I can compile with the mentioned command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc demo.m -o demo -O0 -ObjC -framework Foundation -framework CoreLocation
</span><br>
<span class="quotelev1">&gt; $ mpiexec -np 2 ./demo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was looking for installers and I remember that I have installed MPICH2 if I recall correctly (I didn't knew about openMPI until today), so I have mpicc installed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should I remove MPICH2 and install OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Different MPI implementations have to be installed in different locations and the paths set accordingly. Also note, that an application compiled with Open MPI can't be started with MPICH2 `mpiexec` and vice versa. Well, yes - it could be started but it will only run in serial in all instances like you can start any application with `mpiexec`. As `mpicc` is only a wrapper to provide additonal paths arguments to -I/-L/-l, all usual options apply. In principle MPI applications can also be compiled by a plain gcc, but then you have to take care of all the necessary libraries on your own.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;demo.m&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="20698.php">Lim Jiew Meng: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>Previous message:</strong> <a href="20696.php">George Bosilca: "Re: [OMPI users] gathering problem"</a>
<li><strong>In reply to:</strong> <a href="20684.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20700.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20700.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20704.php">Mark Bolstad: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
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
