<?
$subject_val = "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 11:33:15 2009" -->
<!-- isoreceived="20090320153315" -->
<!-- sent="Fri, 20 Mar 2009 16:33:10 +0100" -->
<!-- isosent="20090320153310" -->
<!-- name="Ricardo Fern&#225;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX" -->
<!-- id="ebd2bd0b0903200833j140417a5m63ee327b96dc7487_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62868E09-9B0E-4CF7-9613-6820F5A8ABCF_at_myri.com" -->
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
<strong>Date:</strong> 2009-03-20 11:33:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8531.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="8531.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 20, 2009 at 2:21 PM, Scott Atchley &lt;atchley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 20, 2009, at 5:59 AM, Ricardo Fern&#225;ndez-Perea wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running DL_POLY in various Xserver 8 processor with a myrinet
</span><br>
<span class="quotelev2">&gt;&gt; network.using mx-1.2.7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I keep in the same node the process scales reasonably well but in
</span><br>
<span class="quotelev2">&gt;&gt; the moment I hit the network ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will like to try to maximize  the mx network before trying to touch the
</span><br>
<span class="quotelev2">&gt;&gt; program code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you run mx_pingpong between the nodes to determine what raw
</span><br>
<span class="quotelev1">&gt; performance you are getting?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For each pair of machines, run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host foo:
</span><br>
<span class="quotelev1">&gt; $ mx_pingpong -s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host bar:
</span><br>
<span class="quotelev1">&gt; $ mx_pingpong -d foo -S 0 -E 5000000 -M 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where &quot;-d foo&quot; means the MX hostname of foo. It could be foo or foo:0 (or
</span><br>
<span class="quotelev1">&gt; foo:1 if you have two NICs, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.myri.com/serve/cache/455.html">http://www.myri.com/serve/cache/455.html</a> for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Repeat the above after setting MX_RCACHE=1 on both hosts.
</span><br>
<p>This are the results
<br>
initially
<br>
Running 1000 iterations.
<br>
&nbsp;&nbsp;&nbsp;Length   Latency(us)    Bandwidth(MB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0       2.738          0.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       2.718          0.368
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2       2.707          0.739
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4       2.715          1.474
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8       2.719          2.943
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16       2.748          5.822
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32       2.814         11.370
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64       3.333         19.199
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128       3.808         33.609
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256       6.069         42.185
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512       8.101         63.206
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024      11.841         86.483
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048      16.100        127.205
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096      24.942        164.221
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192      44.332        184.788
<br>
&nbsp;&nbsp;&nbsp;&nbsp;16384      83.784        195.550
<br>
&nbsp;&nbsp;&nbsp;&nbsp;32768     150.186        218.182
<br>
&nbsp;&nbsp;&nbsp;&nbsp;65536     318.591        205.706
<br>
&nbsp;&nbsp;&nbsp;131072     591.277        221.676
<br>
&nbsp;&nbsp;&nbsp;262144    1128.918        232.208
<br>
&nbsp;&nbsp;&nbsp;524288    2215.368        236.660
<br>
&nbsp;&nbsp;1048576    4392.217        238.735
<br>
&nbsp;&nbsp;2097152    8705.028        240.913
<br>
&nbsp;&nbsp;4194304   17359.166        241.619
<br>
<p>with  export MX_RCACHE=1
<br>
<p>Running 1000 iterations.
<br>
&nbsp;&nbsp;&nbsp;Length   Latency(us)    Bandwidth(MB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0       2.731          0.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       2.705          0.370
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2       2.719          0.736
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4       2.703          1.480
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8       2.709          2.953
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16       2.743          5.833
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32       2.811         11.386
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64       3.336         19.188
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128       3.815         33.552
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256       6.029         42.465
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512       8.082         63.347
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024      11.814         86.677
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048      16.113        127.098
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096      24.945        164.205
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192      44.354        184.696
<br>
&nbsp;&nbsp;&nbsp;&nbsp;16384      83.769        195.587
<br>
&nbsp;&nbsp;&nbsp;&nbsp;32768     150.183        218.187
<br>
&nbsp;&nbsp;&nbsp;&nbsp;65536     299.793        218.604
<br>
&nbsp;&nbsp;&nbsp;131072     561.008        233.637
<br>
&nbsp;&nbsp;&nbsp;262144    1093.738        239.677
<br>
&nbsp;&nbsp;&nbsp;524288    2150.151        243.838
<br>
&nbsp;&nbsp;1048576    4265.846        245.807
<br>
&nbsp;&nbsp;2097152    8491.122        246.982
<br>
&nbsp;&nbsp;4194304   16953.997        247.393
<br>
<p>Ricardo
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is there some place where I can check what the mca params really means?
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone give me a hint where it would be better to look to optimize
</span><br>
<span class="quotelev2">&gt;&gt; OMPI1.3 for macosx?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ricardo
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8532/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8531.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="8531.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="8533.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
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
