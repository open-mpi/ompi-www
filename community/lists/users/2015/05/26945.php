<?
$subject_val = "[OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 15:27:02 2015" -->
<!-- isoreceived="20150526192702" -->
<!-- sent="Tue, 26 May 2015 19:26:53 +0000" -->
<!-- isosent="20150526192653" -->
<!-- name="Heerdt, Lanze M." -->
<!-- email="HeerdtLM1_at_[hidden]" -->
<!-- subject="[OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more" -->
<!-- id="C68FF8B839EAA84D816DFDC8D33EE01BB4D7272F_at_EXSMBX01.GCC.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C68FF8B839EAA84D816DFDC8D33EE01BB4D72706_at_EXSMBX01.GCC.edu" -->
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
<strong>Subject:</strong> [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more<br>
<strong>From:</strong> Heerdt, Lanze M. (<em>HeerdtLM1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 15:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26946.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26945/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-26945/HPL-error.PNG" alt="HPL-error.PNG
">
<!-- attachment="HPL-error.PNG" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26946.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Reply:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
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
