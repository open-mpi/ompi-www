<?
$subject_val = "Re: [OMPI users] MPI/FORTRAN on a cluster system";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 11:12:23 2012" -->
<!-- isoreceived="20120820151223" -->
<!-- sent="Mon, 20 Aug 2012 08:12:18 -0700" -->
<!-- isosent="20120820151218" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI/FORTRAN on a cluster system" -->
<!-- id="CAPNKQopBzqNzzeXc48BcBJgGfzqGu1sRXU8o2iFxsK+0qXiryg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="!&amp;amp;!AAAAAAAAAAAYAAAAAAAAACo6WO/PMklHk2zETp/yOVnCgAAAEAAAAMNNTWY6GGJBsPimMOmuj3oBAAAAAA==_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI/FORTRAN on a cluster system<br>
<strong>From:</strong> David Warren (<em>warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 11:12:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Previous message:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="19956.php">Bill Mulberry: "[OMPI users] MPI/FORTRAN on a cluster system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Reply:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The biggest issue you may have is that gnu fortran does not support all the
<br>
fortran constructs that all the others do. Most fortrans have supported the
<br>
standard plus the DEC extentions. Gnu fortran does not quite get all the
<br>
standards.Intel fortran does support them all, and I believe that portland
<br>
group and absoft may also.
<br>
<p>On Sun, Aug 19, 2012 at 9:11 AM, Bill Mulberry &lt;ocnoptcs_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a large program written in FORTRAN 77 with a couple of routines
</span><br>
<span class="quotelev1">&gt; written in C++.  It has MPI commands built into it to run on a large scale
</span><br>
<span class="quotelev1">&gt; multiprocessor IBM systems.  I am now having the task of transferring this
</span><br>
<span class="quotelev1">&gt; program over to a cluster system.  Both the multiprocessor and cluster
</span><br>
<span class="quotelev1">&gt; system has linux hosted on them.  The Cluster system has GNU FORTRAN and
</span><br>
<span class="quotelev1">&gt; GNU
</span><br>
<span class="quotelev1">&gt; C compilers on it.  I am told the Cluster has openmpi.  I am wondering if
</span><br>
<span class="quotelev1">&gt; anybody out there has had to do the same task and if so what I can expect
</span><br>
<span class="quotelev1">&gt; from this.  Will I be expected to make some big changes, etc.?  Any advice
</span><br>
<span class="quotelev1">&gt; will be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Warren
University of Washington
206 543-0954
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Previous message:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="19956.php">Bill Mulberry: "[OMPI users] MPI/FORTRAN on a cluster system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<li><strong>Reply:</strong> <a href="19966.php">Noam Bernstein: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
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
