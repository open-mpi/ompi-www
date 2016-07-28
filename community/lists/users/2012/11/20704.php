<?
$subject_val = "Re: [OMPI users] Where to start with MPI on OSX?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 12 10:29:59 2012" -->
<!-- isoreceived="20121112152959" -->
<!-- sent="Mon, 12 Nov 2012 10:29:55 -0500" -->
<!-- isosent="20121112152955" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where to start with MPI on OSX?" -->
<!-- id="CAPa_DOBki-w1cvjT0ZQmnK4tjE3S1yvzMeiwbgZRFYNwx3eRWw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FB8FA780-BBBB-4B3D-86DD-91EAF744A11E_at_me.com" -->
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
<strong>From:</strong> Mark Bolstad (<em>the.render.dude_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-12 10:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20705.php">Craig Tierney: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Previous message:</strong> <a href="20703.php">Iliev, Hristo: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="20697.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20720.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20720.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may want to see if you have MacPorts installed. Typically (but not
<br>
always), /opt/local is from a MacPorts installation. If it is then it's
<br>
very easy to remove mpich and install openmpi.
<br>
<p>To check for MacPorts, see if /opt/local/bin/port exists. Then,
<br>
<p>sudo port uninstall --follow-dependencies mpich2
<br>
sudo port install openmpi
<br>
<p>FYI, I'm using OpenMPI 1.6 with XCode 4.5.2 on 10.8.2 and it works fine.
<br>
<p>Mark
<br>
<p>On Fri, Nov 9, 2012 at 6:55 PM, shiny knight &lt;theshinyknight_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Reuti for the sample.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the latest Xcode available on the Apple dev center; Xcode 4
</span><br>
<span class="quotelev1">&gt; probably?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that the reason why nothing happens is because the code runs via
</span><br>
<span class="quotelev1">&gt; MPICH2; tried to launch mpicc with the -echo flag and i see in the output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/opt/local/include/mpich2 -L/opt/local/lib -lpmpich -lmpich -lopa -lmpl
</span><br>
<span class="quotelev1">&gt; -lpthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which makes me think that i am using MPICH2; I just need to figure out how
</span><br>
<span class="quotelev1">&gt; to remove it now...found a dir in opt/local/include that is called mpich2
</span><br>
<span class="quotelev1">&gt; but I am not sure if is enough to just delete that dir.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When I have installed OpenMPI I followed the instructions on this site:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://sites.google.com/site/dwhipp/tutorials/installing-open-mpi-on-mac-os-x">https://sites.google.com/site/dwhipp/tutorials/installing-open-mpi-on-mac-os-x</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While for MPICH2 I've followed this one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpitutorial.com/installing-mpich2/">http://www.mpitutorial.com/installing-mpich2/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most likely I've put them on top of each other and messed up both
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 9, 2012, at 2:32 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 09.11.2012 um 08:47 schrieb shiny knight:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your replies.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I use Snow Leopard, running ompi_info returns an error (command not
</span><br>
<span class="quotelev1">&gt; found).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm on this version too. Which version of Xcode do you use - &quot;Xcode
</span><br>
<span class="quotelev1">&gt; 3.2.6 and iOS SDK 4.3&quot;? Attached is a small file which I can compile with
</span><br>
<span class="quotelev1">&gt; the mentioned command.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpicc demo.m -o demo -O0 -ObjC -framework Foundation -framework
</span><br>
<span class="quotelev1">&gt; CoreLocation
</span><br>
<span class="quotelev2">&gt; &gt; $ mpiexec -np 2 ./demo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was looking for installers and I remember that I have installed
</span><br>
<span class="quotelev1">&gt; MPICH2 if I recall correctly (I didn't knew about openMPI until today), so
</span><br>
<span class="quotelev1">&gt; I have mpicc installed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Should I remove MPICH2 and install OpenMPI?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Different MPI implementations have to be installed in different
</span><br>
<span class="quotelev1">&gt; locations and the paths set accordingly. Also note, that an application
</span><br>
<span class="quotelev1">&gt; compiled with Open MPI can't be started with MPICH2 `mpiexec` and vice
</span><br>
<span class="quotelev1">&gt; versa. Well, yes - it could be started but it will only run in serial in
</span><br>
<span class="quotelev1">&gt; all instances like you can start any application with `mpiexec`. As `mpicc`
</span><br>
<span class="quotelev1">&gt; is only a wrapper to provide additonal paths arguments to -I/-L/-l, all
</span><br>
<span class="quotelev1">&gt; usual options apply. In principle MPI applications can also be compiled by
</span><br>
<span class="quotelev1">&gt; a plain gcc, but then you have to take care of all the necessary libraries
</span><br>
<span class="quotelev1">&gt; on your own.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;demo.m&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20704/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20705.php">Craig Tierney: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Previous message:</strong> <a href="20703.php">Iliev, Hristo: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="20697.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20720.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20720.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
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
