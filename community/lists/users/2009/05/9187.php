<?
$subject_val = "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 10:54:48 2009" -->
<!-- isoreceived="20090504145448" -->
<!-- sent="Mon, 4 May 2009 16:54:42 +0200" -->
<!-- isosent="20090504145442" -->
<!-- name="Ricardo Fern&#225;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX" -->
<!-- id="ebd2bd0b0905040754k13c3e72br55ccfb8abdbb5262_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ebd2bd0b0903201032if440891lc209dadd73c3b2fb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-04 10:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9188.php">Bogdan Costescu: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="9186.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8534.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9188.php">Bogdan Costescu: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="9188.php">Bogdan Costescu: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="9239.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I finally have opportunity to run the imb-3.2 benchmark over myrinet I am
<br>
running in a cluster of 16 node Xservers connected with myrinet 15 of them
<br>
are 8core ones and the last one is a 4 cores one. Having a limit of 124
<br>
process
<br>
I have run the test with the bynode option so from the 2 to the 16 process
<br>
test is always running 1 process by node.
<br>
<p>the following test  pingpong, pingping, sendrecv, exchange presents a strong
<br>
drop in performance with the 64k packet size.
<br>
<p>any idea where I should look for the cause.
<br>
<p>Ricardo
<br>
<p>On Fri, Mar 20, 2009 at 7:32 PM, Ricardo Fern&#225;ndez-Perea &lt;
<br>
rfernandezperea_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is the F-2M but I think for inter-node communication should be
</span><br>
<span class="quotelev1">&gt; equivalents.
</span><br>
<span class="quotelev1">&gt; I have not run and MPI pingpong benchmark yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The truth is I have a 10 days travel coming next week and I thought I can
</span><br>
<span class="quotelev1">&gt; take some optimization   &quot;light reading&quot; with me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so I know what I must look for  when I came back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ricardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 20, 2009 at 5:10 PM, Scott Atchley &lt;atchley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 20, 2009, at 11:33 AM, Ricardo Fern&#225;ndez-Perea wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This are the results initially
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running 1000 iterations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Length   Latency(us)    Bandwidth(MB/s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        0       2.738          0.000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        1       2.718          0.368
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        2       2.707          0.739
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1048576    4392.217        238.735
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2097152    8705.028        240.913
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  4194304   17359.166        241.619
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with  export MX_RCACHE=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running 1000 iterations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Length   Latency(us)    Bandwidth(MB/s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        0       2.731          0.000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        1       2.705          0.370
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        2       2.719          0.736
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1048576    4265.846        245.807
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2097152    8491.122        246.982
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  4194304   16953.997        247.393
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ricardo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am assuming that these are PCI-X NICs. Given the latency and bandwidth,
</span><br>
<span class="quotelev2">&gt;&gt; are these &quot;D&quot; model NICs (see the top of the mx_info output)? If so, that
</span><br>
<span class="quotelev2">&gt;&gt; looks about as good as you can expect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you run Intel MPI Benchmark (IMB) or another MPI pingpong type
</span><br>
<span class="quotelev2">&gt;&gt; benchmark?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scott
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9187/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9187/IMB1-Exchange.results">IMB1-Exchange.results</a>
</ul>
<!-- attachment="IMB1-Exchange.results" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9187/IMB1-PingPing.results">IMB1-PingPing.results</a>
</ul>
<!-- attachment="IMB1-PingPing.results" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9187/IMB1-PingPong.results">IMB1-PingPong.results</a>
</ul>
<!-- attachment="IMB1-PingPong.results" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9187/IMB1-Sendrecv.results">IMB1-Sendrecv.results</a>
</ul>
<!-- attachment="IMB1-Sendrecv.results" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9188.php">Bogdan Costescu: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="9186.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8534.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9188.php">Bogdan Costescu: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="9188.php">Bogdan Costescu: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="9239.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
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
