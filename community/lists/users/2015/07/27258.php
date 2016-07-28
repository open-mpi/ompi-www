<?
$subject_val = "Re: [OMPI users] Binding width affects allgatherv performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 10:06:37 2015" -->
<!-- isoreceived="20150706140637" -->
<!-- sent="Mon, 6 Jul 2015 10:06:33 -0400" -->
<!-- isosent="20150706140633" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Binding width affects allgatherv performance?" -->
<!-- id="CA+ssbKWijey3UnboKAXT6BTVYLG2XD+8BgQZtiMJXh63EYV_fw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKXvg+wx5EHNP_qAOUu+nmme-Yx156Oe-L+HPFsvOfzXKA_at_mail.gmail.com" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-06 10:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27259.php">Ralph Castain: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Previous message:</strong> <a href="27257.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>In reply to:</strong> <a href="27245.php">Saliya Ekanayake: "[OMPI users] Binding width affects allgatherv performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27259.php">Ralph Castain: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Reply:</strong> <a href="27259.php">Ralph Castain: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just checking if anyone has experienced a similar situation or has any
<br>
pointers to understand this.
<br>
<p>Thank you
<br>
Saliya
<br>
On Jul 1, 2015 9:27 PM, &quot;Saliya Ekanayake&quot; &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting strange performance results for allgatherv operation for the
</span><br>
<span class="quotelev1">&gt; same number of procs and data, but with varying binding width. For example
</span><br>
<span class="quotelev1">&gt; here are two cases with about 180x difference in performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each machine has 4 sockets each with 6 cores totaling 24 cores per node
</span><br>
<span class="quotelev1">&gt; (topology attached).
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
<span class="quotelev1">&gt; Another set of variations for 2 procs per node and 4 procs per node is
</span><br>
<span class="quotelev1">&gt; given below in the chart. Is such variation expected with binding width? I
</span><br>
<span class="quotelev1">&gt; am a bit puzzled and would appreciate any help to understand this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [image: Inline image 1]
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
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27258/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-27258/image.png" alt="image.png">
<!-- attachment="image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27259.php">Ralph Castain: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Previous message:</strong> <a href="27257.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>In reply to:</strong> <a href="27245.php">Saliya Ekanayake: "[OMPI users] Binding width affects allgatherv performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27259.php">Ralph Castain: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Reply:</strong> <a href="27259.php">Ralph Castain: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
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
