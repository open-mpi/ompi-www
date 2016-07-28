<?
$subject_val = "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 28 20:04:25 2012" -->
<!-- isoreceived="20120629000425" -->
<!-- sent="Thu, 28 Jun 2012 17:04:00 -0700" -->
<!-- isosent="20120629000400" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6" -->
<!-- id="CADEJBEUgBU2QXxnnKzLgOoSg7chx_KCQQoBsRygumFJO9e+G6A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5FB73073-4F59-4A0E-AAEF-30B779BF0C9A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6<br>
<strong>From:</strong> Yong Qin (<em>yong.qin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-28 20:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19700.php">David Warren: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19698.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19703.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19703.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to Jeff, we now have a bug registered with the segv issue.
<br>
<p>Now we are moving to the testing with a myrinet onboard, but we are
<br>
also having some unexpected issues.
<br>
<p>1. If we don't specify which BTL to use, my understanding is that it
<br>
should pick up the mx btl if openib is not available. However it
<br>
doesn't look like this is the case. So it falls back to tcp from the
<br>
following example.
<br>
<p>[yqin_at_n0026.hbar]$ mpirun -np 2 -H n0026.hbar,n0027.hbar ./osu_latency
<br>
CMA: no RDMA devices found
<br>
--------------------------------------------------------------------------
<br>
[[59254,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: OpenFabrics (openib)
<br>
&nbsp;&nbsp;Host: n0026.hbar
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
CMA: no RDMA devices found
<br>
# OSU MPI Latency Test (Version 2.0)
<br>
# Size      Latency (us)
<br>
0           45.86
<br>
1           46.57
<br>
2           46.61
<br>
4           46.79
<br>
...
<br>
<p>2. If we specify the mx btl, it spits an error although it seems to
<br>
run fine after that.
<br>
<p>[yqin_at_n0026.hbar]$ mpirun -np 2 -H n0026.hbar,n0027.hbar -mca btl
<br>
mx,sm,self ./osu_latency
<br>
mx_finalize() called while some endpoints are still open.
<br>
[n0026.hbar:02045] Error in mx_finalize (error Busy)
<br>
mx_finalize() called while some endpoints are still open.
<br>
[n0027.hbar:02175] Error in mx_finalize (error Busy)
<br>
# OSU MPI Latency Test (Version 2.0)
<br>
# Size      Latency (us)
<br>
0           3.85
<br>
1           4.27
<br>
2           4.27
<br>
4           4.31
<br>
...
<br>
<p>3. If we disable openib btl, it falls back to #2.
<br>
<p>[yqin_at_n0026.hbar]$ mpirun -np 2 -H n0026.hbar,n0027.hbar -mca btl
<br>
^openib ./osu_latency
<br>
mx_finalize() called while some endpoints are still open.
<br>
[n0026.hbar:02051] Error in mx_finalize (error Busy)
<br>
mx_finalize() called while some endpoints are still open.
<br>
[n0027.hbar:02198] Error in mx_finalize (error Busy)
<br>
# OSU MPI Latency Test (Version 2.0)
<br>
# Size      Latency (us)
<br>
0           3.84
<br>
1           4.24
<br>
2           4.25
<br>
4           4.29
<br>
...
<br>
<p>Note this is also different behavior than the old gm btl because we
<br>
have always had both btl's built in and the proper one will be picked
<br>
up based on which device is actually onboard. Can anybody whether this
<br>
is a also a bug, or some parameters that we can set so that it will do
<br>
the select automatically? Also that error message &quot;mx_finalize&quot;
<br>
doesn't look right either.
<br>
<p>Thanks,
<br>
<p>Yong
<br>
<p>On Fri, Jun 15, 2012 at 6:41 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jun 11, 2012, at 7:48 PM, Yong Qin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ah, I guess my original understanding of PML was wrong. Adding &quot;-mca
</span><br>
<span class="quotelev2">&gt;&gt; pml ob1&quot; does help to ease the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the README for a little more discussion about this issue. &#160;There can only be 1 PML in use by a given MPI job -- using &quot;--mca pml ob1&quot; forces the use of the &quot;ob1&quot; PML (i.e., the BTLs), as opposed to the &quot;cm&quot; MTL (i.e., the MTLs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But the question still
</span><br>
<span class="quotelev2">&gt;&gt; remains. Why ompi decided to use the mx BTL in the first place, given
</span><br>
<span class="quotelev2">&gt;&gt; there's no physical device onboard at all? This behavior is completely
</span><br>
<span class="quotelev2">&gt;&gt; different than the original gm BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's not what is actually happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI *built* with MX support, and it therefore assumes that you will likely want to use it. &#160;So it *warns* you when there is no MX device available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, I have recently run into the issue you are seeing: if OMPI 1.6 warns you that there is no high-speed device available (openib in my case), it then segv's (which it obviously shouldn't -- it should warn and then die gracefully). &#160;I'll open a ticket on this behavior. &#160;It's not a common scenario, but we still shouldn't segv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My first guess is that this has something to do with the memory manager... but that's a guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="19700.php">David Warren: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19698.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19703.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19703.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
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
