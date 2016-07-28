<?
$subject_val = "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 20:13:59 2015" -->
<!-- isoreceived="20150527001359" -->
<!-- sent="Wed, 27 May 2015 09:13:45 +0900" -->
<!-- isosent="20150527001345" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more" -->
<!-- id="55650C39.3000607_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMD57oenrbFqoYybLGoq_iBTr-02eHrR=Jpxb+4MdKr=isR=jA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-26 20:13:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>In reply to:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At first glance, it seems all mpi tasks believe they are rank zero and 
<br>
comm world size is 1 (!)
<br>
<p>Did you compile xhpl with OpenMPI (and not a stub library for serial 
<br>
version only) ?
<br>
can you make sure there is nothing wrong with your LD_LIBRARY_PATH and 
<br>
you do not mix MPI librairies
<br>
(e.g. OpenMPI mpirun but xhpl ends up using mpich, or the other way around)
<br>
<p>As already suggested by Ralph, i would start by running a hello world 
<br>
program
<br>
(just print rank and size to confirm it works)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 5/27/2015 8:42 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I don't know enough about HPL to resolve the problem. However, I would 
</span><br>
<span class="quotelev1">&gt; suggest that you first just try to run the example programs in the 
</span><br>
<span class="quotelev1">&gt; examples directory to ensure you have everything working. If they 
</span><br>
<span class="quotelev1">&gt; work, then the problem is clearly in the HPL arena.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do note that your image reports that you have an illegal entry in 
</span><br>
<span class="quotelev1">&gt; HPL.dat - if the examples work, you might start there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 26, 2015 at 12:26 PM, Heerdt, Lanze M. &lt;HeerdtLM1_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:HeerdtLM1_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I realize this may be a bit off topic, but since what I am doing
</span><br>
<span class="quotelev1">&gt;     seems to be a pretty commonly done thing I am hoping to find
</span><br>
<span class="quotelev1">&gt;     someone who has done it before/can help since I&#146;ve been at my wits
</span><br>
<span class="quotelev1">&gt;     end for so long they are calling me Mr. Whittaker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am trying to run HPL on a Raspberry Pi cluster. I used the
</span><br>
<span class="quotelev1">&gt;     following guides to get to where I am now:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.tinkernut.com/2014/04/make-cluster-computer/">http://www.tinkernut.com/2014/04/make-cluster-computer/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/">http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments">https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     and a bit of:
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458">https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458</a>
</span><br>
<span class="quotelev1">&gt;     when the above guide wasn&#146;t working
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     basically when I run: &#147;mpiexec -machinefile ~/machinefile -n 1
</span><br>
<span class="quotelev1">&gt;     xhpl&#148; it works just fine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     but when I run &#147;mpiexec -machinefile ~/machinefile -n 4 xhpl&#148; it
</span><br>
<span class="quotelev1">&gt;     errors with the attached image. (if I use &#147;mpirun&#133;&#148; I get the
</span><br>
<span class="quotelev1">&gt;     exact same behavior)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [Note: I HAVE changed the HPL.dat to have &#147;2    Ps&#148; and &#147;2    Qs&#148;
</span><br>
<span class="quotelev1">&gt;     from 1 and 1 for when I try to run it with 4 processes]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This is for a project of mine which I need done by the end of the
</span><br>
<span class="quotelev1">&gt;     week so if you see this after 5/29 thank you but don&#146;t bother
</span><br>
<span class="quotelev1">&gt;     responding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have hpl-2.1, mpi4py-1.3.1, mpich-3.1, and openmpi-1.8.5 at my
</span><br>
<span class="quotelev1">&gt;     disposal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In the machinefile are the 4 IP addresses of my 4 RPi nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     10.15.106.107
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     10.15.101.29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     10.15.106.108
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     10.15.101.30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any other information you need I can easily get to you so please
</span><br>
<span class="quotelev1">&gt;     do not hesitate to ask. I have nothing else to do but try and get
</span><br>
<span class="quotelev1">&gt;     this to work :P
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26945.php">http://www.open-mpi.org/community/lists/users/2015/05/26945.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26948.php">http://www.open-mpi.org/community/lists/users/2015/05/26948.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26949/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>In reply to:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26950.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
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
