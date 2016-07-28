<?
$subject_val = "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 22:07:41 2015" -->
<!-- isoreceived="20150527020741" -->
<!-- sent="Wed, 27 May 2015 11:07:35 +0900" -->
<!-- isosent="20150527020735" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more" -->
<!-- id="556526E7.4030703_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C68FF8B839EAA84D816DFDC8D33EE01BB4D73BB1_at_EXSMBX01.GCC.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 22:07:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>In reply to:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First you can run
<br>
mpirun -machinefile ~/machinefile -np 4 -tag-output xhpl
<br>
<p>if all tasks report they believe they are task 0, then this is the 
<br>
origin of the problem.
<br>
<p>then you can run
<br>
ldd mpirun
<br>
ldd xphl
<br>
they should use the same mpi flavor
<br>
<p>then
<br>
mpirun -machinefile ~/machinefile -np 4 -tag-output ldd xhpl
<br>
<p>and make sure xhpl use the very same mpi flavor all the nodes
<br>
<p><p>HPL make process can be error prone, especially if you modify some 
<br>
config file / arch in the middle.
<br>
a simple option is to rebuild xhpl from scratch and with OpenMPI
<br>
<p>you can also post your HPL.dat and i will have a look
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/27/2015 10:38 AM, Heerdt, Lanze M. wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have run a hello world program for any number of processes. If I say 
</span><br>
<span class="quotelev1">&gt; &#147;&#150;n 16&#148; I get 4 responses from each node saying &#147;Hello world! I am 
</span><br>
<span class="quotelev1">&gt; process (0-15) of 16 on RPI-0(1-4)&#148; so I know the cluster Can work how 
</span><br>
<span class="quotelev1">&gt; I want it to. I also tested with just normal hostname and I see the 
</span><br>
<span class="quotelev1">&gt; names of each of the 4 Pis as a response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a response to the illegal entry in HPL.dat, that doesn&#146;t really 
</span><br>
<span class="quotelev1">&gt; make much sense since I run it just fine with p =1 and q =1, it only 
</span><br>
<span class="quotelev1">&gt; says that when I change p and q to 2, which I know is not an illegal entry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Gilles 
</span><br>
<span class="quotelev1">&gt; Gouaillardet
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, May 26, 2015 8:14 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Running HPL on RPi cluster, seems like MPI 
</span><br>
<span class="quotelev1">&gt; is somehow not configured properly since it work with 1 node but not more
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At first glance, it seems all mpi tasks believe they are rank zero and 
</span><br>
<span class="quotelev1">&gt; comm world size is 1 (!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you compile xhpl with OpenMPI (and not a stub library for serial 
</span><br>
<span class="quotelev1">&gt; version only) ?
</span><br>
<span class="quotelev1">&gt; can you make sure there is nothing wrong with your LD_LIBRARY_PATH and 
</span><br>
<span class="quotelev1">&gt; you do not mix MPI librairies
</span><br>
<span class="quotelev1">&gt; (e.g. OpenMPI mpirun but xhpl ends up using mpich, or the other way 
</span><br>
<span class="quotelev1">&gt; around)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As already suggested by Ralph, i would start by running a hello world 
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev1">&gt; (just print rank and size to confirm it works)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/27/2015 8:42 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I don't know enough about HPL to resolve the problem. However, I
</span><br>
<span class="quotelev1">&gt;     would suggest that you first just try to run the example programs
</span><br>
<span class="quotelev1">&gt;     in the examples directory to ensure you have everything working.
</span><br>
<span class="quotelev1">&gt;     If they work, then the problem is clearly in the HPL arena.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I do note that your image reports that you have an illegal entry
</span><br>
<span class="quotelev1">&gt;     in HPL.dat - if the examples work, you might start there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Tue, May 26, 2015 at 12:26 PM, Heerdt, Lanze M.
</span><br>
<span class="quotelev1">&gt;     &lt;HeerdtLM1_at_[hidden] &lt;mailto:HeerdtLM1_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I realize this may be a bit off topic, but since what I am
</span><br>
<span class="quotelev1">&gt;         doing seems to be a pretty commonly done thing I am hoping to
</span><br>
<span class="quotelev1">&gt;         find someone who has done it before/can help since I&#146;ve been
</span><br>
<span class="quotelev1">&gt;         at my wits end for so long they are calling me Mr. Whittaker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I am trying to run HPL on a Raspberry Pi cluster. I used the
</span><br>
<span class="quotelev1">&gt;         following guides to get to where I am now:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.tinkernut.com/2014/04/make-cluster-computer/">http://www.tinkernut.com/2014/04/make-cluster-computer/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/">http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments">https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         and a bit of:
</span><br>
<span class="quotelev1">&gt;         <a href="https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458">https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458</a>
</span><br>
<span class="quotelev1">&gt;         when the above guide wasn&#146;t working
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         basically when I run: &#147;mpiexec -machinefile ~/machinefile -n 1
</span><br>
<span class="quotelev1">&gt;         xhpl&#148; it works just fine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         but when I run &#147;mpiexec -machinefile ~/machinefile -n 4 xhpl&#148;
</span><br>
<span class="quotelev1">&gt;         it errors with the attached image. (if I use &#147;mpirun&#133;&#148; I get
</span><br>
<span class="quotelev1">&gt;         the exact same behavior)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         [Note: I HAVE changed the HPL.dat to have &#147;2    Ps&#148; and &#147;2 
</span><br>
<span class="quotelev1">&gt;           Qs&#148; from 1 and 1 for when I try to run it with 4 processes]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         This is for a project of mine which I need done by the end of
</span><br>
<span class="quotelev1">&gt;         the week so if you see this after 5/29 thank you but don&#146;t
</span><br>
<span class="quotelev1">&gt;         bother responding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I have hpl-2.1, mpi4py-1.3.1, mpich-3.1, and openmpi-1.8.5 at
</span><br>
<span class="quotelev1">&gt;         my disposal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         In the machinefile are the 4 IP addresses of my 4 RPi nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         10.15.106.107
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         10.15.101.29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         10.15.106.108
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         10.15.101.30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Any other information you need I can easily get to you so
</span><br>
<span class="quotelev1">&gt;         please do not hesitate to ask. I have nothing else to do but
</span><br>
<span class="quotelev1">&gt;         try and get this to work :P
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/05/26945.php">http://www.open-mpi.org/community/lists/users/2015/05/26945.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/05/26948.php">http://www.open-mpi.org/community/lists/users/2015/05/26948.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26950.php">http://www.open-mpi.org/community/lists/users/2015/05/26950.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26951/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>In reply to:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
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
