<?
$subject_val = "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 13:36:29 2015" -->
<!-- isoreceived="20150527173629" -->
<!-- sent="Wed, 27 May 2015 17:36:26 +0000" -->
<!-- isosent="20150527173626" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more" -->
<!-- id="DE3E4DAF-60DE-420C-82E3-DF06693D1FEE_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C68FF8B839EAA84D816DFDC8D33EE01BB4D73D36_at_EXSMBX01.GCC.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-27 13:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26960.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>Previous message:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few points:
<br>

<br>
- Just to clarify: Open MPI and MPICH are entirely different code bases / entirely different MPI implementations.  They both implement the same C and Fortran APIs that can be used by applications (i.e., they're *source code compatible*), but they are otherwise not compatible at all.  Hence, you have to use entirely one MPI implementation or the other (e.g., use Open MPI or use MPICH -- don't use both at the same time).
<br>

<br>
--&gt; That being said, you can build xhpl for Open MPI and rename the executable xhpl.openmpi, and then build xhpl again for MPICH and rename the executable xhpl.mpich, and then you can use the appropriate mpirun or mpiexec to launch the executable that you want to invoke (e.g., use Open MPI's mpirun to launch xhpl.openmpi and use MPICH's mpiexec to launch xhpl.mpich).
<br>

<br>
- In Open MPI, mpirun and mpiexec are sym links to the same executable.  Meaning: they're exactly equivalent.  I don't know offhand if the same is true for MPICH -- I have a dim recollection that MPICH prefers &quot;mpiexec&quot; -- I don't know if they still have &quot;mpirun&quot;.  Check their docs.
<br>

<br>
- ldd takes the absolute name of an executable.  If &quot;mpirun&quot; or &quot;mpiexe&quot; is not in your current directory, you likely need to give its full path (which is why &quot;ldd mpirun&quot; failed; the error message indicates that there is no &quot;mpirun&quot; in the . directory).
<br>

<br>
- The ldd of xhpl shows that it is linked against libmpich -- which is definitely an MPICH library, not an Open MPI library.
<br>

<br>
- Hence, if you're using Open MPI's mpirun and an MPICH-compiled XHPL, this is why things are failing.  You need to use a single MPI implementation's wrapper compilers and mpirun/mpiexec -- you can't build with one MPI implementation and then launch with the other.  Open MPI and MPICH are not compatible in that way.
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On May 27, 2015, at 12:47 PM, Heerdt, Lanze M. &lt;HeerdtLM1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran&lt;ldd and HPLdat.PNG&gt;&lt;-tag-output and ldd.PNG&gt;
</span><br>
mpirun -machinefile ~/machinefile -np 4 -tag-output xhpl and just to be sure I ran the same thing with mpiexec (because I think I have it set up to use mpich and not openmpi, correct if I am wrong but the idea is the same?) and tried the ldd mpirun but that didn&#226;&#128;&#153;t work at all
<br>

<br>
&nbsp;
<br>

<br>
In the second image I got some feedback from the ldd xhpl and also have my HPL.dat shown with p and q equal to 2. Like I said, running with that HPL.dat and
<br>

<br>
mpiexec -machinefile ~/machinefile -n 4 xhpl
<br>

<br>
it just gives me the same error
<br>

<br>
&nbsp;
<br>

<br>
Thank you for responding so quickly by the way :) you guys are a live saver.
<br>

<br>
&nbsp;
<br>

<br>
-Lanze
<br>

<br>
&nbsp;
<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gilles Gouaillardet
<br>
Sent: Tuesday, May 26, 2015 10:08 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more
<br>

<br>
&nbsp;
<br>

<br>
First you can run
<br>
mpirun -machinefile ~/machinefile -np 4 -tag-output xhpl
<br>

<br>
if all tasks report they believe they are task 0, then this is the origin of the problem.
<br>

<br>
then you can run
<br>
ldd mpirun
<br>
ldd xphl
<br>
they should use the same mpi flavor
<br>

<br>
then
<br>
mpirun -machinefile ~/machinefile -np 4 -tag-output ldd xhpl
<br>

<br>
and make sure xhpl use the very same mpi flavor all the nodes
<br>

<br>

<br>
HPL make process can be error prone, especially if you modify some config file / arch in the middle.
<br>
a simple option is to rebuild xhpl from scratch and with OpenMPI
<br>

<br>
you can also post your HPL.dat and i will have a look
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>
On 5/27/2015 10:38 AM, Heerdt, Lanze M. wrote:
<br>

<br>
I have run a hello world program for any number of processes. If I say &#226;&#128;&#156;&#226;&#128;&#147;n 16&#226;&#128;&#157; I get 4 responses from each node saying &#226;&#128;&#156;Hello world! I am process (0-15) of 16 on RPI-0(1-4)&#226;&#128;&#157; so I know the cluster Can work how I want it to. I also tested with just normal hostname and I see the names of each of the 4 Pis as a response.
<br>

<br>
&nbsp;
<br>

<br>
As a response to the illegal entry in HPL.dat, that doesn&#226;&#128;&#153;t really make much sense since I run it just fine with p =1 and q =1, it only says that when I change p and q to 2, which I know is not an illegal entry
<br>

<br>
&nbsp;
<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gilles Gouaillardet
<br>
Sent: Tuesday, May 26, 2015 8:14 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more
<br>

<br>
&nbsp;
<br>

<br>
At first glance, it seems all mpi tasks believe they are rank zero and comm world size is 1 (!)
<br>

<br>
Did you compile xhpl with OpenMPI (and not a stub library for serial version only) ?
<br>
can you make sure there is nothing wrong with your LD_LIBRARY_PATH and you do not mix MPI librairies
<br>
(e.g. OpenMPI mpirun but xhpl ends up using mpich, or the other way around)
<br>

<br>
As already suggested by Ralph, i would start by running a hello world program
<br>
(just print rank and size to confirm it works)
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>

<br>

<br>
On 5/27/2015 8:42 AM, Ralph Castain wrote:
<br>

<br>
I don't know enough about HPL to resolve the problem. However, I would suggest that you first just try to run the example programs in the examples directory to ensure you have everything working. If they work, then the problem is clearly in the HPL arena.
<br>

<br>
&nbsp;
<br>

<br>
I do note that your image reports that you have an illegal entry in HPL.dat - if the examples work, you might start there.
<br>

<br>
&nbsp;
<br>

<br>
&nbsp;
<br>

<br>
On Tue, May 26, 2015 at 12:26 PM, Heerdt, Lanze M. &lt;HeerdtLM1_at_[hidden]&gt; wrote:
<br>

<br>
I realize this may be a bit off topic, but since what I am doing seems to be a pretty commonly done thing I am hoping to find someone who has done it before/can help since I&#226;&#128;&#153;ve been at my wits end for so long they are calling me Mr. Whittaker.
<br>

<br>
&nbsp;
<br>

<br>
I am trying to run HPL on a Raspberry Pi cluster. I used the following guides to get to where I am now:
<br>

<br>
<a href="http://www.tinkernut.com/2014/04/make-cluster-computer/">http://www.tinkernut.com/2014/04/make-cluster-computer/</a>
<br>

<br>
<a href="http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/">http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/</a>
<br>

<br>
<a href="https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments">https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments</a>
<br>

<br>
and a bit of: <a href="https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458">https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458</a> when the above guide wasn&#226;&#128;&#153;t working
<br>

<br>
&nbsp;
<br>

<br>
basically when I run: &#226;&#128;&#156;mpiexec -machinefile ~/machinefile -n 1 xhpl&#226;&#128;&#157; it works just fine
<br>

<br>
but when I run &#226;&#128;&#156;mpiexec -machinefile ~/machinefile -n 4 xhpl&#226;&#128;&#157; it errors with the attached image. (if I use &#226;&#128;&#156;mpirun&#226;&#128;&#166;&#226;&#128;&#157; I get the exact same behavior)
<br>

<br>
[Note: I HAVE changed the HPL.dat to have &#226;&#128;&#156;2    Ps&#226;&#128;&#157; and &#226;&#128;&#156;2    Qs&#226;&#128;&#157; from 1 and 1 for when I try to run it with 4 processes]
<br>

<br>
&nbsp;
<br>

<br>
This is for a project of mine which I need done by the end of the week so if you see this after 5/29 thank you but don&#226;&#128;&#153;t bother responding
<br>

<br>
&nbsp;
<br>

<br>
I have hpl-2.1, mpi4py-1.3.1, mpich-3.1, and openmpi-1.8.5 at my disposal
<br>

<br>
In the machinefile are the 4 IP addresses of my 4 RPi nodes
<br>

<br>
10.15.106.107
<br>

<br>
10.15.101.29
<br>

<br>
10.15.106.108
<br>

<br>
10.15.101.30
<br>

<br>
&nbsp;
<br>

<br>
Any other information you need I can easily get to you so please do not hesitate to ask. I have nothing else to do but try and get this to work :P
<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26945.php">http://www.open-mpi.org/community/lists/users/2015/05/26945.php</a>
<br>

<br>
&nbsp;
<br>

<br>

<br>

<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26948.php">http://www.open-mpi.org/community/lists/users/2015/05/26948.php</a>
<br>
&nbsp;
<br>

<br>

<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26950.php">http://www.open-mpi.org/community/lists/users/2015/05/26950.php</a>
<br>
&nbsp;
<br>

<br>
&lt;ldd and HPLdat.PNG&gt;&lt;-tag-output and ldd.PNG&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26956.php">http://www.open-mpi.org/community/lists/users/2015/05/26956.php</a>
<br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26960.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>Previous message:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
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
