<?
$subject_val = "Re: [OMPI users] Best way to communicate a 2d array with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 15:45:42 2014" -->
<!-- isoreceived="20140822194542" -->
<!-- sent="Fri, 22 Aug 2014 14:45:41 -0500" -->
<!-- isosent="20140822194541" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to communicate a 2d array with Java binding" -->
<!-- id="53F79DE5.2040901_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKXMLdvn8eBbK37kR3LFEKwFCc+xaMKStBqCN087MjxytQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to communicate a 2d array with Java binding<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 15:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25138.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25138.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25138.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/22/2014 02:40 PM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Yes, these are all MPI_DOUBLE
</span><br>
<p>well, yeah, but since you are talking about copying into a &quot;direct 
<br>
buffer&quot; there must be something tricker about the layout than just N*M 
<br>
doubles.
<br>
<p>sometimes people allocate 2d arrays by allocating one array of N 
<br>
elements, then allocating and storing an array of length M in each of 
<br>
the N slots.
<br>
<p>(you can find a dozen of these types of questions on stackoverflow, for 
<br>
example)
<br>
<p>if the java interface allows you to describe with an MPI Datatype,  or 
<br>
if you were working in C or Fortran, you can construct an HINDEXED type 
<br>
(or with very new MPICH, HINDEXED_BLOCK) and send that instead of copying.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 22, 2014 at 3:38 PM, Rob Latham &lt;robl_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:robl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 08/22/2014 10:10 AM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I've a quick question about the usage of Java binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Say there's a 2 dimensional double array (size m x n) that needs
</span><br>
<span class="quotelev1">&gt;         to be
</span><br>
<span class="quotelev1">&gt;         sent to another rank. I see two options to get this done,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         1. Copy values to a direct buffer of size m*n and send it
</span><br>
<span class="quotelev1">&gt;         2. Copy values to a 1D array of size m*n and send it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i have no idea about the java mpi bindings, but can you describe the
</span><br>
<span class="quotelev1">&gt;     type with an mpi datatype?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I guess 2 would internally do the copying to a buffer and use it, so
</span><br>
<span class="quotelev1">&gt;         suggesting 1. is the best option. Is this the case or is there a
</span><br>
<span class="quotelev1">&gt;         better
</span><br>
<span class="quotelev1">&gt;         way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thank you,
</span><br>
<span class="quotelev1">&gt;         Saliya
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _________________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__community/lists/users/2014/08/__25130.php">http://www.open-mpi.org/__community/lists/users/2014/08/__25130.php</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/08/25130.php">http://www.open-mpi.org/community/lists/users/2014/08/25130.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Rob Latham
</span><br>
<span class="quotelev1">&gt;     Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt;     Argonne National Lab, IL USA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__community/lists/users/2014/08/__25135.php">http://www.open-mpi.org/__community/lists/users/2014/08/__25135.php</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/08/25135.php">http://www.open-mpi.org/community/lists/users/2014/08/25135.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25136.php">http://www.open-mpi.org/community/lists/users/2014/08/25136.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25138.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25136.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25138.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25138.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
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
