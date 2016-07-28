<?
$subject_val = "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 21:38:39 2015" -->
<!-- isoreceived="20150527013839" -->
<!-- sent="Wed, 27 May 2015 01:38:29 +0000" -->
<!-- isosent="20150527013829" -->
<!-- name="Heerdt, Lanze M." -->
<!-- email="HeerdtLM1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more" -->
<!-- id="C68FF8B839EAA84D816DFDC8D33EE01BB4D73BB1_at_EXSMBX01.GCC.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55650C39.3000607_at_rist.or.jp" -->
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
<strong>From:</strong> Heerdt, Lanze M. (<em>HeerdtLM1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 21:38:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26951.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>In reply to:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26951.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26951.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have run a hello world program for any number of processes. If I say &quot;-n 16&quot; I get 4 responses from each node saying &quot;Hello world! I am process (0-15) of 16 on RPI-0(1-4)&quot; so I know the cluster Can work how I want it to. I also tested with just normal hostname and I see the names of each of the 4 Pis as a response.
<br>
<p>As a response to the illegal entry in HPL.dat, that doesn't really make much sense since I run it just fine with p =1 and q =1, it only says that when I change p and q to 2, which I know is not an illegal entry
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gilles Gouaillardet
<br>
Sent: Tuesday, May 26, 2015 8:14 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more
<br>
<p>At first glance, it seems all mpi tasks believe they are rank zero and comm world size is 1 (!)
<br>
<p>Did you compile xhpl with OpenMPI (and not a stub library for serial version only) ?
<br>
can you make sure there is nothing wrong with your LD_LIBRARY_PATH and you do not mix MPI librairies
<br>
(e.g. OpenMPI mpirun but xhpl ends up using mpich, or the other way around)
<br>
<p>As already suggested by Ralph, i would start by running a hello world program
<br>
(just print rank and size to confirm it works)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/27/2015 8:42 AM, Ralph Castain wrote:
<br>
I don't know enough about HPL to resolve the problem. However, I would suggest that you first just try to run the example programs in the examples directory to ensure you have everything working. If they work, then the problem is clearly in the HPL arena.
<br>
<p>I do note that your image reports that you have an illegal entry in HPL.dat - if the examples work, you might start there.
<br>
<p><p>On Tue, May 26, 2015 at 12:26 PM, Heerdt, Lanze M. &lt;HeerdtLM1_at_[hidden]&lt;mailto:HeerdtLM1_at_[hidden]&gt;&gt; wrote:
<br>
I realize this may be a bit off topic, but since what I am doing seems to be a pretty commonly done thing I am hoping to find someone who has done it before/can help since I've been at my wits end for so long they are calling me Mr. Whittaker.
<br>
<p>I am trying to run HPL on a Raspberry Pi cluster. I used the following guides to get to where I am now:
<br>
<a href="http://www.tinkernut.com/2014/04/make-cluster-computer/">http://www.tinkernut.com/2014/04/make-cluster-computer/</a>
<br>
<a href="http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/">http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/</a>
<br>
<a href="https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments">https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments</a>
<br>
and a bit of: <a href="https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458">https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458</a> when the above guide wasn't working
<br>
<p>basically when I run: &quot;mpiexec -machinefile ~/machinefile -n 1 xhpl&quot; it works just fine
<br>
but when I run &quot;mpiexec -machinefile ~/machinefile -n 4 xhpl&quot; it errors with the attached image. (if I use &quot;mpirun...&quot; I get the exact same behavior)
<br>
[Note: I HAVE changed the HPL.dat to have &quot;2    Ps&quot; and &quot;2    Qs&quot; from 1 and 1 for when I try to run it with 4 processes]
<br>
<p>This is for a project of mine which I need done by the end of the week so if you see this after 5/29 thank you but don't bother responding
<br>
<p>I have hpl-2.1, mpi4py-1.3.1, mpich-3.1, and openmpi-1.8.5 at my disposal
<br>
In the machinefile are the 4 IP addresses of my 4 RPi nodes
<br>
10.15.106.107
<br>
10.15.101.29
<br>
10.15.106.108
<br>
10.15.101.30
<br>
<p>Any other information you need I can easily get to you so please do not hesitate to ask. I have nothing else to do but try and get this to work :P
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26945.php">http://www.open-mpi.org/community/lists/users/2015/05/26945.php</a>
<br>
<p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26948.php">http://www.open-mpi.org/community/lists/users/2015/05/26948.php</a>
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26950/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-26950/Zoop.PNG" alt="Zoop.PNG
">
<!-- attachment="Zoop.PNG" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26951.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>In reply to:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26951.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26951.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
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
