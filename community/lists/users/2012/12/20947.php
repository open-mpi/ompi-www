<?
$subject_val = "Re: [OMPI users] network timeout";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 13:34:50 2012" -->
<!-- isoreceived="20121213183450" -->
<!-- sent="Thu, 13 Dec 2012 19:34:38 +0100" -->
<!-- isosent="20121213183438" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] network timeout" -->
<!-- id="50CA1FBE.5070803_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E6356D3B-4525-4DF6-B854-98DD2F8466FE_at_open-mpi.org" -->
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
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-13 13:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20948.php">Siegmar Gross: "[OMPI users] problem with data transfer in a heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="20946.php">Shamis, Pavel: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20760.php">Ralph Castain: "Re: [OMPI users] network timeout"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/24/2012 4:02 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Try limiting the interfaces we use to see if that's really the problem. I forget if cygwin has &quot;ifconfig&quot; or not, but use a tool to report the networks, and then start excluding them by adding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca oob_tcp_if_exclude foo,bar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to your cmd line until you find the one that is causing the hang. That will (a) confirm that it is a network timeout issue, and (b) which network is causing the problem.
</span><br>
<p>Ralph,
<br>
I was unable to exclude in this way the interface using
<br>
one of the several &quot;strange&quot; name windows use for the interfaces
<br>
<p>&nbsp;&nbsp;&nbsp;{258B6C87-9B24-477D-A5D1-97AE07FEABAB}
<br>
&nbsp;&nbsp;&nbsp;NPF_{258B6C87-9B24-477D-A5D1-97AE07FEABAB}
<br>
<p><p>But I found the root cause: The driver of the Vodafone USB InternetKey.
<br>
<p>So for the next one hitting the same or similar issues:
<br>
in theory the interface was disabled, but it seems that when queried
<br>
the driver tries to contact Vodafone servers through any active interface .
<br>
Thanks to Wireshark I was able to notice the driver polling behaviour.
<br>
<p>After removing all versions of the driver ( following [1] ) ,
<br>
the delay disappeared.
<br>
<p>$ time  orterun    -n 4 ./hello_c.exe
<br>
Hello, world, I am 0 of 4
<br>
Hello, world, I am 2 of 4
<br>
Hello, world, I am 1 of 4
<br>
Hello, world, I am 3 of 4
<br>
<p>real    0m2.552s
<br>
user    0m0.933s
<br>
sys     0m1.774s
<br>
<p><p>[1] <a href="http://www.petri.co.il/removing-old-drivers-from-vista-and-windows7.htm">http://www.petri.co.il/removing-old-drivers-from-vista-and-windows7.htm</a>
<br>
<p>Regards
<br>
Marco
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 24, 2012, at 1:00 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on cygwin running on localhost on standalone computer I noticed
</span><br>
<span class="quotelev2">&gt;&gt; a large time discrepancy when the computer is connected or not to
</span><br>
<span class="quotelev2">&gt;&gt; the network.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Physical Connected:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; marco_at_MARCOATZERI /pub/devel/openmpi/examples
</span><br>
<span class="quotelev2">&gt;&gt; $ time mpirun -n 4 ./hello_c.exe
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real    1m14.568s
</span><br>
<span class="quotelev2">&gt;&gt; user    0m1.496s
</span><br>
<span class="quotelev2">&gt;&gt; sys     0m2.602s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOT connected (all interface down)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ time mpirun -n 4 ./hello_c.exe
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real    0m3.323s
</span><br>
<span class="quotelev2">&gt;&gt; user    0m1.480s
</span><br>
<span class="quotelev2">&gt;&gt; sys     0m2.118s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess the 1 minute is due to some time of timeout.
</span><br>
<span class="quotelev2">&gt;&gt; Is such delay present on any other platform ?
</span><br>
<span class="quotelev2">&gt;&gt; Any workaround to remove it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Marco
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20948.php">Siegmar Gross: "[OMPI users] problem with data transfer in a heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="20946.php">Shamis, Pavel: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20760.php">Ralph Castain: "Re: [OMPI users] network timeout"</a>
<!-- nextthread="start" -->
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
