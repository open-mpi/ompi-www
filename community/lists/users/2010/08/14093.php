<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 23 21:39:33 2010" -->
<!-- isoreceived="20100824013933" -->
<!-- sent="Mon, 23 Aug 2010 18:39:29 -0700 (PDT)" -->
<!-- isosent="20100824013929" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="276291.50350.qm_at_web50802.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF4FCA91A9.57546BFD-ON85257788.008085AF-85257788.0081FF7C_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-23 21:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14094.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>Previous message:</strong> <a href="14092.php">Jeff Squyres: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>In reply to:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14096.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14096.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14108.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have had a similar load related problem with Bcast.&#160; I don't know what caused it though.&#160; With this one, what about the possibility of a buffer overrun or network saturation?
<br>
<p><p>--- On Tue, 24/8/10, Richard Treumann &lt;treumann_at_[hidden]&gt; wrote:
<br>
<p>From: Richard Treumann &lt;treumann_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Tuesday, 24 August, 2010, 9:39 AM
<br>
<p><p>It is hard to imagine how a total data
load of 41,943,040 bytes could be a problem. That
is really not much data. By the time the BCAST is done, each task (except
root) will have received a single half meg message form one sender. That
is not much.

<br>
<p>IMB does shift the root so some tasks may be in iteration
9 while some are still in iteration 8 or 7 but a 1/2 meg message should
use rendezvous protocol so no message will be injected into the network
until the destination task is ready to receive it.

<br>
<p>Any task can be in only one MPI_Bcast at a time so
the total active data cannot ever exceed the 41,943,040 bytes, no matter
how fast the MPI_Bcast loop tries to iterate.

<br>
<p>(There are MPI_Bcast algorithms that chunk the data
into smaller messages but even with those algorithms, the total concurrent
load will not exceed 41,943,040 bytes.)

<br>
<p><p>Dick Treumann &#160;- &#160;MPI Team
&#160; &#160; &#160; &#160; &#160; 
<br>
<p><p><p><p><p>users-bounces_at_[hidden] wrote on 08/23/2010 05:09:56
PM:
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><p><span class="quotelev1">&gt; On Sun, Aug 22, 2010 at 9:57 PM, Randolph Pullen
&lt;randolph_pullen_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14094.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>Previous message:</strong> <a href="14092.php">Jeff Squyres: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>In reply to:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14096.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14096.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14108.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
