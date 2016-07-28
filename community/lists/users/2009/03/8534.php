<?
$subject_val = "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 13:32:39 2009" -->
<!-- isoreceived="20090320173239" -->
<!-- sent="Fri, 20 Mar 2009 18:32:34 +0100" -->
<!-- isosent="20090320173234" -->
<!-- name="Ricardo Fern&#225;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX" -->
<!-- id="ebd2bd0b0903201032if440891lc209dadd73c3b2fb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3370204-4EA2-48E2-A8DE-92EE7C2BBC4A_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX<br>
<strong>From:</strong> Ricardo Fern&#225;ndez-Perea (<em>rfernandezperea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 13:32:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8535.php">Ethan Mallove: "[OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9187.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9187.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is the F-2M but I think for inter-node communication should be
<br>
equivalents.
<br>
I have not run and MPI pingpong benchmark yet.
<br>
<p>The truth is I have a 10 days travel coming next week and I thought I can
<br>
take some optimization   &quot;light reading&quot; with me.
<br>
<p>so I know what I must look for  when I came back.
<br>
<p>Ricardo
<br>
<p><p>On Fri, Mar 20, 2009 at 5:10 PM, Scott Atchley &lt;atchley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 20, 2009, at 11:33 AM, Ricardo Fern&#225;ndez-Perea wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This are the results initially
</span><br>
<span class="quotelev2">&gt;&gt; Running 1000 iterations.
</span><br>
<span class="quotelev2">&gt;&gt;   Length   Latency(us)    Bandwidth(MB/s)
</span><br>
<span class="quotelev2">&gt;&gt;        0       2.738          0.000
</span><br>
<span class="quotelev2">&gt;&gt;        1       2.718          0.368
</span><br>
<span class="quotelev2">&gt;&gt;        2       2.707          0.739
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  1048576    4392.217        238.735
</span><br>
<span class="quotelev2">&gt;&gt;  2097152    8705.028        240.913
</span><br>
<span class="quotelev2">&gt;&gt;  4194304   17359.166        241.619
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with  export MX_RCACHE=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running 1000 iterations.
</span><br>
<span class="quotelev2">&gt;&gt;   Length   Latency(us)    Bandwidth(MB/s)
</span><br>
<span class="quotelev2">&gt;&gt;        0       2.731          0.000
</span><br>
<span class="quotelev2">&gt;&gt;        1       2.705          0.370
</span><br>
<span class="quotelev2">&gt;&gt;        2       2.719          0.736
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  1048576    4265.846        245.807
</span><br>
<span class="quotelev2">&gt;&gt;  2097152    8491.122        246.982
</span><br>
<span class="quotelev2">&gt;&gt;  4194304   16953.997        247.393
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ricardo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am assuming that these are PCI-X NICs. Given the latency and bandwidth,
</span><br>
<span class="quotelev1">&gt; are these &quot;D&quot; model NICs (see the top of the mx_info output)? If so, that
</span><br>
<span class="quotelev1">&gt; looks about as good as you can expect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you run Intel MPI Benchmark (IMB) or another MPI pingpong type
</span><br>
<span class="quotelev1">&gt; benchmark?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8535.php">Ethan Mallove: "[OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9187.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9187.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
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
