<?
$subject_val = "Re: [OMPI users] network timeout";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 24 10:02:19 2012" -->
<!-- isoreceived="20121124150219" -->
<!-- sent="Sat, 24 Nov 2012 07:02:12 -0800" -->
<!-- isosent="20121124150212" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] network timeout" -->
<!-- id="E6356D3B-4525-4DF6-B854-98DD2F8466FE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50B08C99.7060208_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] network timeout<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-24 10:02:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20761.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20759.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20758.php">marco atzeri: "[OMPI users] network timeout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20947.php">marco atzeri: "Re: [OMPI users] network timeout"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20947.php">marco atzeri: "Re: [OMPI users] network timeout"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try limiting the interfaces we use to see if that's really the problem. I forget if cygwin has &quot;ifconfig&quot; or not, but use a tool to report the networks, and then start excluding them by adding
<br>
<p>-mca oob_tcp_if_exclude foo,bar
<br>
<p>to your cmd line until you find the one that is causing the hang. That will (a) confirm that it is a network timeout issue, and (b) which network is causing the problem.
<br>
<p><p>On Nov 24, 2012, at 1:00 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; on cygwin running on localhost on standalone computer I noticed
</span><br>
<span class="quotelev1">&gt; a large time discrepancy when the computer is connected or not to
</span><br>
<span class="quotelev1">&gt; the network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Physical Connected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; marco_at_MARCOATZERI /pub/devel/openmpi/examples
</span><br>
<span class="quotelev1">&gt; $ time mpirun -n 4 ./hello_c.exe
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real    1m14.568s
</span><br>
<span class="quotelev1">&gt; user    0m1.496s
</span><br>
<span class="quotelev1">&gt; sys     0m2.602s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOT connected (all interface down)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ time mpirun -n 4 ./hello_c.exe
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real    0m3.323s
</span><br>
<span class="quotelev1">&gt; user    0m1.480s
</span><br>
<span class="quotelev1">&gt; sys     0m2.118s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess the 1 minute is due to some time of timeout.
</span><br>
<span class="quotelev1">&gt; Is such delay present on any other platform ?
</span><br>
<span class="quotelev1">&gt; Any workaround to remove it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20761.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20759.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20758.php">marco atzeri: "[OMPI users] network timeout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20947.php">marco atzeri: "Re: [OMPI users] network timeout"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20947.php">marco atzeri: "Re: [OMPI users] network timeout"</a>
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
