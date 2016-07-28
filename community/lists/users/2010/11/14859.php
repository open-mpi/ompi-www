<?
$subject_val = "[OMPI users] Multiple Subnet MPI Fail";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 09:29:03 2010" -->
<!-- isoreceived="20101122142903" -->
<!-- sent="Mon, 22 Nov 2010 07:28:56 -0700" -->
<!-- isosent="20101122142856" -->
<!-- name="Paul Monday (Parallel Scientific)" -->
<!-- email="paul.monday_at_[hidden]" -->
<!-- subject="[OMPI users] Multiple Subnet MPI Fail" -->
<!-- id="4CEA7E28.3030603_at_parsci.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Multiple Subnet MPI Fail<br>
<strong>From:</strong> Paul Monday (Parallel Scientific) (<em>paul.monday_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 09:28:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>Previous message:</strong> <a href="14858.php">Hicham Mouline: "Re: [OMPI users] win32 and linux64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>Reply:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've been using OpenMPI in a switched environment with success, but 
<br>
we've moved to a point to point environment to do some work.  Some of 
<br>
the nodes cannot talk directly to one another, sort of like this with 
<br>
computers A,B, C with A having two ports:
<br>
<p>A(1)(opensm)------&gt;B
<br>
A(2)(opensm)------&gt;C
<br>
<p>B is not connected to C in any way.
<br>
<p>When we try to run our OpenMPI program we are receiving:
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;Process 1 ([[1581,1],5]) is on host: pg-B
<br>
&nbsp;&nbsp;&nbsp;Process 2 ([[1581,1],0]) is on host: pg-C
<br>
&nbsp;&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
<p><p>I hope I'm not being overly naive but, is their a way to join the 
<br>
subnets at the MPI layer?  It seems like IP over IB would be too high up 
<br>
the stack.
<br>
<p>Paul Monday
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>Previous message:</strong> <a href="14858.php">Hicham Mouline: "Re: [OMPI users] win32 and linux64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>Reply:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
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
