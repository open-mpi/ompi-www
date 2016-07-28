<?
$subject_val = "Re: [OMPI users] Where to start with MPI on OSX?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 02:48:04 2012" -->
<!-- isoreceived="20121109074804" -->
<!-- sent="Thu, 08 Nov 2012 23:47:58 -0800" -->
<!-- isosent="20121109074758" -->
<!-- name="shiny knight" -->
<!-- email="theshinyknight_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where to start with MPI on OSX?" -->
<!-- id="0ED62E64-EC37-473B-B27C-124AFC806004_at_me.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="233991BB0A63144DB26533193F9D8301163FDD_at_nawechlkez06v.nadsuswe.nads.navy.mil" -->
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
<strong>Date:</strong> 2012-11-09 02:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20684.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20684.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20684.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your replies.
<br>
<p>I use Snow Leopard, running ompi_info returns an error (command not found).
<br>
<p>I was looking for installers and I remember that I have installed MPICH2 if I recall correctly (I didn't knew about openMPI until today), so I have mpicc installed.
<br>
<p>Should I remove MPICH2 and install OpenMPI?
<br>
<p>So I can use any of the tutorials already out there? Is there some in particular that explains well the basics? I am planning to write my own wrapper for Objective-C, so maybe other mac users could benefit from it (never learned C properly, started directly with C++). I've also purchased today a book called &quot;parallel programming with MPI (Peter Pacheco), so I can start to learn the basics.
<br>
<p>OF course if anyone is using a mac and want to share their hello world, I will be more than happy to check them. So far I had no luck running even a basic app (and it is quite disappointing to see that there are examples for OpenCL even on the Apple dev documentation, while there is not that much around for MPI).
<br>
<p>tried to run &quot;mpicc -ObjC -framework Foundation -framework CoreLocation&quot;, but I get an error (symbols not found).
<br>
<p><p><p>On Nov 8, 2012, at 3:55 PM, Beatty, Daniel D CIV NAVAIR, 474300D wrote:
<br>
<p><span class="quotelev1">&gt; Greetings ladies and gentlemen,
</span><br>
<span class="quotelev1">&gt; I believe that the last version of OSX to have OpenMPI shipped with the dev tools or the OS was Snow Leopard.  That version I believe was version OMPI 1.29.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am starting to get back to working with MPI myself.  The last time I worked with MPI, I basically wrapped the C function into Objective-C.  Often I would let Objective-C do the marshaling for me, and have MPI do the message passing itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have read that OMPI from source works on Mountain Lion, but there are some dependencies to make it work with LLVM and to make GCC-Fortran transition to LLVM.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there are some gurus out there who have done this fill us with wisdom.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; V/R,
</span><br>
<span class="quotelev1">&gt; Dan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 08, 2012 15:09
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Where to start with MPI on OSX?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 08.11.2012 um 23:25 schrieb shiny knight:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've discovered MPI recently, and I would like to start to write some applications to use it's potential.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now the problem is that I use a mac, and I see no tutorials or books that are targeting OSX, so I was wondering if you could give me some pointers about where to find info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I use Xcode; from what I can understand, MPI uses C, so I need to use a console application template for Xcode. I do not see any wrapper for Objective-C, so I assume that C is the only language used for MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is also C++ and Fortran support, while the C++ interface is deprecated as the C one will do here too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any info that you can give me; I really like the idea to use MPI for scientific applications, but I am totally new to this (I have experience in C++ on Windows, and a bit of Objective-C on mac). I would love to see tutorials that explains how to do simple apps on mac using MPI, but if they exist, they are very well hidden :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With some versions of OS X it's installed already - well an older version. Can you issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on the command line? As MPI is a standard which is not targeting any specific platform, most of the tutorials should apply here too, as long as they don't access any OS specific functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For an Objective-C application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc -ObjC -framework Foundation -framework CoreLocation ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20684.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20682.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20684.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Reply:</strong> <a href="20684.php">Reuti: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
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
