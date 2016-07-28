<?
$subject_val = "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 13:18:40 2016" -->
<!-- isoreceived="20160614171840" -->
<!-- sent="Tue, 14 Jun 2016 13:18:33 -0400" -->
<!-- isosent="20160614171833" -->
<!-- name="Llolsten Kaonga" -->
<!-- email="llk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
<!-- id="002201d1c660$c775c800$56615800$_at_soft-forge.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D385989A.B0111%Grigory.Shamov_at_ad.umanitoba.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?<br>
<strong>From:</strong> Llolsten Kaonga (<em>llk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 13:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29438.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29443.php">Ryan Novosielski: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29443.php">Ryan Novosielski: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29449.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29510.php">Dave Love: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Grigory,
<br>
<p>I am not sure what Redhat does exactly but when you install the OS, there is
<br>
always an InfiniBand Support module during the installation process. We
<br>
never check/install that module when we do OS installations because it is
<br>
usually several versions of OFED behind (almost obsolete).
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Grigory Shamov
<br>
Sent: Tuesday, June 14, 2016 12:21 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any
<br>
suggestions?
<br>
<p><p><p>On 2016-06-14, 3:42 AM, &quot;users on behalf of Peter Kjellstr&#246;m&quot;
<br>
&lt;users-bounces_at_[hidden] on behalf of cap_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Mon, 13 Jun 2016 19:04:59 -0400
</span><br>
<span class="quotelev1">&gt;Mehmet Belgin &lt;mehmet.belgin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have not upgraded our OFED stack for a very long time, and still 
</span><br>
<span class="quotelev2">&gt;&gt; running on an ancient version (1.5.4.1, yeah we know). We are now 
</span><br>
<span class="quotelev2">&gt;&gt; considering a big jump from this version to a tested and stable 
</span><br>
<span class="quotelev2">&gt;&gt; recent version and would really appreciate any suggestions from the 
</span><br>
<span class="quotelev2">&gt;&gt; community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Some thoughts on the subject.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Not installing an external ibstack is quite attractive imo.
</span><br>
<span class="quotelev1">&gt;  RHEL/CentOS stack (not based on any direct OFED version) works fine
</span><br>
<span class="quotelev1">&gt;  for us. It simplifies cluster maintenance (kernel updates etc.).
</span><br>
<p><p>I am curious on how Redhat stack is &#179;not based on any direct OFED version&#178;? 
<br>
Doesn&#185;t Redhat just ship an old OFED build, or they do their own changes to
<br>
it like to the kernel?
<br>
<p><pre>
--
Grigory Shamov
Westgrid/ComputeCanada Site Lead
University of Manitoba
E2-588 EITC Building,
(204) 474-9625
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post:
<a href="http://www.open-mpi.org/community/lists/users/2016/06/29436.php">http://www.open-mpi.org/community/lists/users/2016/06/29436.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29438.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29443.php">Ryan Novosielski: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29443.php">Ryan Novosielski: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29449.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29510.php">Dave Love: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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
