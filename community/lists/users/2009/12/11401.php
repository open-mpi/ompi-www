<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 12:21:57 2009" -->
<!-- isoreceived="20091203172157" -->
<!-- sent="Thu, 3 Dec 2009 12:21:50 -0500" -->
<!-- isosent="20091203172150" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="5839821C-518D-49E4-AE80-8E6F74AE9F1F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ED1AC9E1-9B44-47BE-A346-5CAA27A4CBF4_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 12:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11402.php">Jed Brown: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11400.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11402.php">Jed Brown: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11402.php">Jed Brown: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11403.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 3, 2009, at 10:56 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; The allocation statement is ok:
</span><br>
<span class="quotelev1">&gt; allocate(vec(vec_size,vec_per_proc*(size-1)))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This allocates memory vec(32768, 2350)
</span><br>
<p>So this allocates 32768 rows, each with 2350 columns -- all stored contiguously in memory, in column-major order.  Does the language/compiler *guarantee* that the entire matrix is contiguous in memory?  Or does it only guarantee that the *columns* are contiguous in memory -- and there may be gaps between successive columns?
<br>
<p>2350 means you're running with 48 procs.
<br>
<p>In the loop:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do irank=1,size-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do ivec=1,vec_per_proc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (6,*) 'irank=',irank,'ivec=',ivec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vec_ind=(irank-1)*vec_per_proc+ivec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV( vec(1,vec_ind), vec_size, MPI_DOUBLE_COMPLEX, irank, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vec_ind, MPI_COMM_WORLD, status, ierror)
<br>
<p>This means that in the first iteration, you're calling:
<br>
<p>irank = 1
<br>
ivec = 1
<br>
vec_ind = (47 - 1) * 50 + 1 = 
<br>
call MPI_RECV(vec(1, 2301), 32768, ...)
<br>
<p>And in the last iteration, you're calling:
<br>
<p>irank = 47
<br>
ivec = 50
<br>
vec_ind = (47 - 1) * 50 + 50 = 
<br>
call MPI_RECV(vec(1, 2350), 32768, ...)
<br>
<p>That doesn't seem right.  If I'm reading this right -- and I very well may not be -- it looks like successive receives will be partially overlaying the previous receive.  Is that what you intended?  Is MPI supposed to overflow the columns properly?  I can see how a problem might occur here if the columns are not actually contiguous in memory...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11402.php">Jed Brown: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11400.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11402.php">Jed Brown: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11402.php">Jed Brown: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11403.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
