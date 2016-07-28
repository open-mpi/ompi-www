<?
$subject_val = "Re: [OMPI users] Binding width affects allgatherv performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 10:19:44 2015" -->
<!-- isoreceived="20150706141944" -->
<!-- sent="Mon, 6 Jul 2015 07:19:38 -0700" -->
<!-- isosent="20150706141938" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Binding width affects allgatherv performance?" -->
<!-- id="C2C13FF8-E4F4-43EC-B18E-2A2F145101E5_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+ssbKWijey3UnboKAXT6BTVYLG2XD+8BgQZtiMJXh63EYV_fw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Binding width affects allgatherv performance?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-06 10:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27260.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Previous message:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>In reply to:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you checked where the procs are actually bound? I&#226;&#128;&#153;m wondering if you don&#226;&#128;&#153;t wind up somehow with a proc bound to cores on different sockets
<br>
<p><span class="quotelev1">&gt; On Jul 6, 2015, at 7:06 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just checking if anyone has experienced a similar situation or has any pointers to understand this. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you 
</span><br>
<span class="quotelev1">&gt; Saliya 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2015 9:27 PM, &quot;Saliya Ekanayake&quot; &lt;esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting strange performance results for allgatherv operation for the same number of procs and data, but with varying binding width. For example here are two cases with about 180x difference in performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each machine has 4 sockets each with 6 cores totaling 24 cores per node (topology attached).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case 1
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 12 procs per node each bound to 1 core times 30 nodes --&gt; 1929 ms
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case 2
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 12 procs per node each bound to 2 cores times 30 nodes --&gt; 357209 ms
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another set of variations for 2 procs per node and 4 procs per node is given below in the chart. Is such variation expected with binding width? I am a bit puzzled and would appreciate any help to understand this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 &lt;tel:812-391-4914&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a> &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27258.php">http://www.open-mpi.org/community/lists/users/2015/07/27258.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27258.php">http://www.open-mpi.org/community/lists/users/2015/07/27258.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27259/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27260.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Previous message:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>In reply to:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
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
