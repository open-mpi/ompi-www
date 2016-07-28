<?
$subject_val = "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 19:42:30 2015" -->
<!-- isoreceived="20150526234230" -->
<!-- sent="Tue, 26 May 2015 16:42:28 -0700" -->
<!-- isosent="20150526234228" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more" -->
<!-- id="CAMD57oenrbFqoYybLGoq_iBTr-02eHrR=Jpxb+4MdKr=isR=jA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C68FF8B839EAA84D816DFDC8D33EE01BB4D7272F_at_EXSMBX01.GCC.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 19:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>In reply to:</strong> <a href="26945.php">Heerdt, Lanze M.: "[OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know enough about HPL to resolve the problem. However, I would
<br>
suggest that you first just try to run the example programs in the examples
<br>
directory to ensure you have everything working. If they work, then the
<br>
problem is clearly in the HPL arena.
<br>
<p>I do note that your image reports that you have an illegal entry in HPL.dat
<br>
- if the examples work, you might start there.
<br>
<p><p>On Tue, May 26, 2015 at 12:26 PM, Heerdt, Lanze M. &lt;HeerdtLM1_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  I realize this may be a bit off topic, but since what I am doing seems
</span><br>
<span class="quotelev1">&gt; to be a pretty commonly done thing I am hoping to find someone who has done
</span><br>
<span class="quotelev1">&gt; it before/can help since I&#226;&#128;&#153;ve been at my wits end for so long they are
</span><br>
<span class="quotelev1">&gt; calling me Mr. Whittaker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run HPL on a Raspberry Pi cluster. I used the following
</span><br>
<span class="quotelev1">&gt; guides to get to where I am now:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.tinkernut.com/2014/04/make-cluster-computer/">http://www.tinkernut.com/2014/04/make-cluster-computer/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/">http://www.tinkernut.com/2014/05/make-cluster-computer-part-2/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments">https://www.howtoforge.com/tutorial/hpl-high-performance-linpack-benchmark-raspberry-pi/#comments</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and a bit of:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458">https://www.raspberrypi.org/forums/viewtopic.php?p=301458#p301458</a> when
</span><br>
<span class="quotelev1">&gt; the above guide wasn&#226;&#128;&#153;t working
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; basically when I run: &#226;&#128;&#156;mpiexec -machinefile ~/machinefile -n 1 xhpl&#226;&#128;&#157; it
</span><br>
<span class="quotelev1">&gt; works just fine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but when I run &#226;&#128;&#156;mpiexec -machinefile ~/machinefile -n 4 xhpl&#226;&#128;&#157; it errors
</span><br>
<span class="quotelev1">&gt; with the attached image. (if I use &#226;&#128;&#156;mpirun&#226;&#128;&#166;&#226;&#128;&#157; I get the exact same
</span><br>
<span class="quotelev1">&gt; behavior)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Note: I HAVE changed the HPL.dat to have &#226;&#128;&#156;2    Ps&#226;&#128;&#157; and &#226;&#128;&#156;2    Qs&#226;&#128;&#157; from 1
</span><br>
<span class="quotelev1">&gt; and 1 for when I try to run it with 4 processes]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is for a project of mine which I need done by the end of the week so
</span><br>
<span class="quotelev1">&gt; if you see this after 5/29 thank you but don&#226;&#128;&#153;t bother responding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have hpl-2.1, mpi4py-1.3.1, mpich-3.1, and openmpi-1.8.5 at my disposal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the machinefile are the 4 IP addresses of my 4 RPi nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10.15.106.107
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10.15.101.29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10.15.106.108
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10.15.101.30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other information you need I can easily get to you so please do not
</span><br>
<span class="quotelev1">&gt; hesitate to ask. I have nothing else to do but try and get this to work :P
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26945.php">http://www.open-mpi.org/community/lists/users/2015/05/26945.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26948/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26947.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>In reply to:</strong> <a href="26945.php">Heerdt, Lanze M.: "[OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26949.php">Gilles Gouaillardet: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
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
