<?
$subject_val = "Re: [OMPI users] Where to start with MPI on OSX?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 09:37:52 2012" -->
<!-- isoreceived="20121115143752" -->
<!-- sent="Thu, 15 Nov 2012 09:37:47 -0500" -->
<!-- isosent="20121115143747" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where to start with MPI on OSX?" -->
<!-- id="CAPa_DOBpKopKtfxeDPraZRzvrHstwTszq8aJya=jMeLs6uFkmQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B126CB8A-75E7-4C65-A8F3-C7012F57501C_at_me.com" -->
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
<strong>Date:</strong> 2012-11-15 09:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20722.php">Number Cruncher: "[OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20720.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20720.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20685.php">Jeff Squyres: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make sure the mpicc commands are in your path. Most likely the permissions
<br>
are too restrictive on the commands. Make sure they're all group/world read
<br>
&amp; execute (I set them with chmod 755 ...)
<br>
<p>As for XCode, I cheat. Since I build multi-platform, I use CMake or SCons.
<br>
In one case, I setup XCode as an external compile project, and then use
<br>
scons as the compile command. And since you're using &quot;import&quot; you must be
<br>
compiling in Objective-C, of which, I can provide no assistance
<br>
(c/c++/python).
<br>
<p>Mark
<br>
<p>On Thu, Nov 15, 2012 at 2:20 AM, shiny knight &lt;theshinyknight_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Mark,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Figured out that I had both pointing to the same location....removed
</span><br>
<span class="quotelev1">&gt; MPICH2 by hand, as you mentioned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Installed OMPI and it works finally (via console thou).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Altho I gotta use sudo before the mpicc or mpiexec, or I get nothing (plus
</span><br>
<span class="quotelev1">&gt; I gotta be in the dir where I installed OMPI to use the commands...not sure
</span><br>
<span class="quotelev1">&gt; if this is right or if I gotta make changes somewhere...I would like to
</span><br>
<span class="quotelev1">&gt; call these commands like I do for grep and other commands ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the next obstacle is to find out how to let Xcode to see the MPI
</span><br>
<span class="quotelev1">&gt; libraries; I can run programs via terminal, but if I try to run them in
</span><br>
<span class="quotelev1">&gt; Xcode I get an error because it cannot find MPI.h; even if i do a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #import &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that it should work but I am probably missing something....how
</span><br>
<span class="quotelev1">&gt; are you able to use MPI on Xcode? Gotta change some build settings?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 12, 2012, at 7:29 AM, Mark Bolstad wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may want to see if you have MacPorts installed. Typically (but not
</span><br>
<span class="quotelev1">&gt; always), /opt/local is from a MacPorts installation. If it is then it's
</span><br>
<span class="quotelev1">&gt; very easy to remove mpich and install openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To check for MacPorts, see if /opt/local/bin/port exists. Then,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo port uninstall --follow-dependencies mpich2
</span><br>
<span class="quotelev1">&gt; sudo port install openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI, I'm using OpenMPI 1.6 with XCode 4.5.2 on 10.8.2 and it works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 9, 2012 at 6:55 PM, shiny knight &lt;theshinyknight_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Reuti for the sample.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the latest Xcode available on the Apple dev center; Xcode 4
</span><br>
<span class="quotelev2">&gt;&gt; probably?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that the reason why nothing happens is because the code runs via
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2; tried to launch mpicc with the -echo flag and i see in the output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -I/opt/local/include/mpich2 -L/opt/local/lib -lpmpich -lmpich -lopa -lmpl
</span><br>
<span class="quotelev2">&gt;&gt; -lpthread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which makes me think that i am using MPICH2; I just need to figure out
</span><br>
<span class="quotelev2">&gt;&gt; how to remove it now...found a dir in opt/local/include that is called
</span><br>
<span class="quotelev2">&gt;&gt; mpich2 but I am not sure if is enough to just delete that dir.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  When I have installed OpenMPI I followed the instructions on this site:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://sites.google.com/site/dwhipp/tutorials/installing-open-mpi-on-mac-os-x">https://sites.google.com/site/dwhipp/tutorials/installing-open-mpi-on-mac-os-x</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While for MPICH2 I've followed this one:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mpitutorial.com/installing-mpich2/">http://www.mpitutorial.com/installing-mpich2/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Most likely I've put them on top of each other and messed up both
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 9, 2012, at 2:32 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Am 09.11.2012 um 08:47 schrieb shiny knight:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks for your replies.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I use Snow Leopard, running ompi_info returns an error (command not
</span><br>
<span class="quotelev2">&gt;&gt; found).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm on this version too. Which version of Xcode do you use - &quot;Xcode
</span><br>
<span class="quotelev2">&gt;&gt; 3.2.6 and iOS SDK 4.3&quot;? Attached is a small file which I can compile with
</span><br>
<span class="quotelev2">&gt;&gt; the mentioned command.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ mpicc demo.m -o demo -O0 -ObjC -framework Foundation -framework
</span><br>
<span class="quotelev2">&gt;&gt; CoreLocation
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ mpiexec -np 2 ./demo
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I was looking for installers and I remember that I have installed
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2 if I recall correctly (I didn't knew about openMPI until today), so
</span><br>
<span class="quotelev2">&gt;&gt; I have mpicc installed.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Should I remove MPICH2 and install OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Yes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Different MPI implementations have to be installed in different
</span><br>
<span class="quotelev2">&gt;&gt; locations and the paths set accordingly. Also note, that an application
</span><br>
<span class="quotelev2">&gt;&gt; compiled with Open MPI can't be started with MPICH2 `mpiexec` and vice
</span><br>
<span class="quotelev2">&gt;&gt; versa. Well, yes - it could be started but it will only run in serial in
</span><br>
<span class="quotelev2">&gt;&gt; all instances like you can start any application with `mpiexec`. As `mpicc`
</span><br>
<span class="quotelev2">&gt;&gt; is only a wrapper to provide additonal paths arguments to -I/-L/-l, all
</span><br>
<span class="quotelev2">&gt;&gt; usual options apply. In principle MPI applications can also be compiled by
</span><br>
<span class="quotelev2">&gt;&gt; a plain gcc, but then you have to take care of all the necessary libraries
</span><br>
<span class="quotelev2">&gt;&gt; on your own.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;demo.m&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20721/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20722.php">Number Cruncher: "[OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20720.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20720.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20685.php">Jeff Squyres: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
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
