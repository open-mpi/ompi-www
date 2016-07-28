<?
$subject_val = "Re: [OMPI users] Multiple Subnet MPI Fail";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 09:47:16 2010" -->
<!-- isoreceived="20101122144716" -->
<!-- sent="Mon, 22 Nov 2010 09:46:38 -0500" -->
<!-- isosent="20101122144638" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple Subnet MPI Fail" -->
<!-- id="4CEA824E.80408_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CEA7E28.3030603_at_parsci.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple Subnet MPI Fail<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 09:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14861.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14859.php">Paul Monday (Parallel Scientific): "[OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>In reply to:</strong> <a href="14859.php">Paul Monday (Parallel Scientific): "[OMPI users] Multiple Subnet MPI Fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14868.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>Reply:</strong> <a href="14868.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're gonna have to use a protocol that can route through a machine, 
<br>
OFED User Verbs (ie openib) does not do this.  The only way I know of to 
<br>
do this via OMPI is with the tcp btl.
<br>
<p>--td
<br>
<p>On 11/22/2010 09:28 AM, Paul Monday (Parallel Scientific) wrote:
<br>
<span class="quotelev1">&gt; We've been using OpenMPI in a switched environment with success, but 
</span><br>
<span class="quotelev1">&gt; we've moved to a point to point environment to do some work.  Some of 
</span><br>
<span class="quotelev1">&gt; the nodes cannot talk directly to one another, sort of like this with 
</span><br>
<span class="quotelev1">&gt; computers A,B, C with A having two ports:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A(1)(opensm)------&gt;B
</span><br>
<span class="quotelev1">&gt; A(2)(opensm)------&gt;C
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B is not connected to C in any way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we try to run our OpenMPI program we are receiving:
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[1581,1],5]) is on host: pg-B
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[1581,1],0]) is on host: pg-C
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope I'm not being overly naive but, is their a way to join the 
</span><br>
<span class="quotelev1">&gt; subnets at the MPI layer?  It seems like IP over IB would be too high 
</span><br>
<span class="quotelev1">&gt; up the stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul Monday
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14860/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14861.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14859.php">Paul Monday (Parallel Scientific): "[OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>In reply to:</strong> <a href="14859.php">Paul Monday (Parallel Scientific): "[OMPI users] Multiple Subnet MPI Fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14868.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>Reply:</strong> <a href="14868.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
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
