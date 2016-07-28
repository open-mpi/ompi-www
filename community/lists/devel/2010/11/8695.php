<?
$subject_val = "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 15:06:22 2010" -->
<!-- isoreceived="20101122200622" -->
<!-- sent="Tue, 23 Nov 2010 07:06:14 +1100" -->
<!-- isosent="20101122200614" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT" -->
<!-- id="4CEACD36.3090909_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="30161_1290455569_4CEACA10_30161_175694_1_8B34D357-FE70-4426-B513-BAAF28B2F3BA_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 15:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8696.php">George Bosilca: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Previous message:</strong> <a href="8694.php">Barrett, Brian W: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Maybe in reply to:</strong> <a href="8691.php">Jeff Squyres: "[OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/23/2010 06:47 AM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; Short answer: we need the &quot;extra&quot; decrement at the end of MPI init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long answer: Ok, so I was somewhat wrong :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .... (surprised this didn't show up in testing).
</span><br>
<p>Confirmed with our basic pingpong test:
<br>
<p>vayu2:~/MPI &gt; mpirun -n 2 ./pp142 | head -4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|        Best       |      Average      |       Worst       |        Streaming
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n   (test/loop) |      usec    MB/s |      usec    MB/s |      usec    MB/s | (  average,    worst)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1   (  64/1100) |       0.3   23.56 |       0.4   19.69 |       0.6   14.24 | (      0.4,      0.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2   (  64/1100) |       0.3   46.93 |       0.4   39.43 |       0.5   29.36 | (      0.4,      0.5)
<br>
<p>vayu2:~/MPI &gt; mpirun -n 2 ./pp143 | head -4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|        Best       |      Average      |       Worst       |        Streaming
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n   (test/loop) |      usec    MB/s |      usec    MB/s |      usec    MB/s | (  average,    worst)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1   (  64/1100) |       0.5   16.84 |       0.6   13.72 |       0.8    9.93 | (      0.6,      0.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2   (  64/1100) |       0.5   32.93 |       0.6   26.97 |       0.8   20.01 | (      0.6,      0.8)
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8696.php">George Bosilca: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Previous message:</strong> <a href="8694.php">Barrett, Brian W: "Re: [OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
<li><strong>Maybe in reply to:</strong> <a href="8691.php">Jeff Squyres: "[OMPI devel] Change in OPAL / OMPI DPM system time during MPI_INIT"</a>
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
