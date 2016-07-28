<?
$subject_val = "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 02:13:17 2016" -->
<!-- isoreceived="20160226071317" -->
<!-- sent="Fri, 26 Feb 2016 16:13:15 +0900" -->
<!-- isosent="20160226071315" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1" -->
<!-- id="56CFFB0B.6060501_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHgSaRTdw+Ht1qj+SDyHPvKfg=A7hjWuwV44A+KjMz3V8OGiRw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 02:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28587.php">Monika Hemnani: "[OMPI users] Openmpi on Xilkernel"</a>
<li><strong>Previous message:</strong> <a href="28585.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="28585.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28588.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i recommend you run standard MPI benchmark with both openmpi versions, 
<br>
so we get a better picture of what is happening on your cluster.
<br>
<p>fwiw, such benchmark could be IMB 
<br>
<a href="https://software.intel.com/en-us/articles/intel-mpi-benchmarks">https://software.intel.com/en-us/articles/intel-mpi-benchmarks</a> and/or 
<br>
OSU <a href="http://mvapich.cse.ohio-state.edu/benchmarks/">http://mvapich.cse.ohio-state.edu/benchmarks/</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2/26/2016 3:47 PM, Eva wrote:
<br>
<span class="quotelev1">&gt; I measure communication time for MPI_Send and end2end training time 
</span><br>
<span class="quotelev1">&gt; (including model training and communication time).
</span><br>
<span class="quotelev1">&gt; MPI1.4.1 is faster than MPI1.10.2:
</span><br>
<span class="quotelev1">&gt; MPI_Send+MPI_Recv: 2.83%
</span><br>
<span class="quotelev1">&gt; end2end training time: 8.89%
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-02-26 14:45 GMT+08:00 Eva &lt;wuzhh01_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:wuzhh01_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I measure communication time for MPI_Send and end2end training
</span><br>
<span class="quotelev1">&gt;     time&#239;&#188;&#136;including model training and communication time&#239;&#188;&#137;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Send+MPI_Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     end2end training
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI1.4.1 is faster than MPI1.10.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2.83%
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     8.89%
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2016-02-24 13:49 GMT+08:00 Eva &lt;wuzhh01_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:wuzhh01_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I compile the same program by using 1.4.1 and 1.10.2rc3 and
</span><br>
<span class="quotelev1">&gt;         then run them under the same environment. 1.4.1 is 8.89%
</span><br>
<span class="quotelev1">&gt;         faster than 1.10.2rc3. Is there any official performance
</span><br>
<span class="quotelev1">&gt;         report for each version upgrade?
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28585.php">http://www.open-mpi.org/community/lists/users/2016/02/28585.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28586/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28587.php">Monika Hemnani: "[OMPI users] Openmpi on Xilkernel"</a>
<li><strong>Previous message:</strong> <a href="28585.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="28585.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28588.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
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
