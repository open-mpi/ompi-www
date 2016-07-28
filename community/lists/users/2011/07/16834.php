<?
$subject_val = "Re: [OMPI users] mpi &amp; mac";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 11:20:54 2011" -->
<!-- isoreceived="20110706152054" -->
<!-- sent="Wed, 06 Jul 2011 11:20:50 -0400" -->
<!-- isosent="20110706152050" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi &amp;amp; mac" -->
<!-- id="4E147D52.5040106_at_ias.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAN601uP+AQFyMLnOMd7bWJaUR0ZH9beGXobeGg=kdyDjDKMxyQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi &amp; mac<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 11:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16835.php">Sushil Mishra: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16833.php">Constantinos Makassikis: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>In reply to:</strong> <a href="16833.php">Constantinos Makassikis: "Re: [OMPI users] mpi &amp; mac"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/06/2011 10:42 AM, Constantinos Makassikis wrote:
<br>
<span class="quotelev1">&gt; On Tue, Jul 5, 2011 at 9:48 PM, Robert Sacker &lt;rsacker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rsacker_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I need some help. I'm trying to run C++ code in Xcode on a Mac Pro
</span><br>
<span class="quotelev1">&gt;     Desktop (OS 10.6) and utilize all 8 cores . My ultimate goal is to
</span><br>
<span class="quotelev1">&gt;     be able to run the code on the cluster here on campus. I'm in the
</span><br>
<span class="quotelev1">&gt;     process of converting into C++ the number crunching part of the
</span><br>
<span class="quotelev1">&gt;     stuff I previously wrote in Matlab. 
</span><br>
<span class="quotelev1">&gt;     Is there some documentation that explains how to get started?
</span><br>
<span class="quotelev1">&gt;     Thanks. Bob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure whether this is the relevant mailing list for
</span><br>
<span class="quotelev1">&gt; general parallelization questions ...
</span><br>
<p>Well, general MPI questions not specific to OpenMPI are not uncommon here.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In any case, before converting your Matlab code to C++ try using
</span><br>
<span class="quotelev1">&gt; parallelization features that come with Matlab.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise, after translating your Matlab code to C++, you should
</span><br>
<span class="quotelev1">&gt; consider in the first place getting acquainted with OpenMP and
</span><br>
<span class="quotelev1">&gt; use it to speed up your code on your 8-core machine.
</span><br>
<span class="quotelev1">&gt; OpenMP can be rather straightforward to apply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Afterwards, if necessary, you may look into parallelizing over multiple
</span><br>
<span class="quotelev1">&gt; machines with OpenMPI.
</span><br>
<p>Why not just use MPI for every step? Open MPI can detect when
<br>
communication partners are on the same host and use shared memory for
<br>
improved performance. Not sure how this measures up to OpenMP for
<br>
intra-node communications, but I imagine it can make the programming
<br>
simpler, since only one syntax needs to be learned/used.
<br>
<p>As I said, I don't know the performance difference between MPI and
<br>
OpenMP, so if someone can shed some light...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16835.php">Sushil Mishra: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16833.php">Constantinos Makassikis: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>In reply to:</strong> <a href="16833.php">Constantinos Makassikis: "Re: [OMPI users] mpi &amp; mac"</a>
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
