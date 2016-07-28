<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 11:48:06 2009" -->
<!-- isoreceived="20090527154806" -->
<!-- sent="Wed, 27 May 2009 08:48:04 -0700" -->
<!-- isosent="20090527154804" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="4A1D60B4.7050103_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905271816.06625.gkanis_at_ipta.demokritos.gr" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 11:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
vasilis wrote:
<blockquote cite="mid200905271816.06625.gkanis@ipta.demokritos.gr"
 type="cite">
  <blockquote type="cite">
    <pre wrap="">Rank 0 accumulates all the res_cpu values into a single array, res.  It
starts with its own res_cpu and then adds all other processes.  When
np=2, that means the order is prescribed.  When np&gt;2, the order is no
longer prescribed and some floating-point rounding variations can start
to occur.
    </pre>
  </blockquote>
  <pre wrap=""><!---->Yes you are right. Now, the question is why would these floating-point rounding 
variations occur for np&gt;2? It cannot be  due to a not prescribed order!!
  </pre>
</blockquote>
The accumulation of res_cpu into res starts with rank 0 and then
handles everyone else in arbitrary order (due to MPI_ANY_SOURCE).&nbsp; With
np=2, this means the order is fully deterministic (0 then 1).&nbsp; With
np&gt;2, the order is no longer deterministic.&nbsp; E.g., for np=3, you
could have 0 then 1 then 2, or you could have 0 then 2 then 1.<br>
<br>
Here is another version of the code, without MPI_ANY_SOURCE nor
MPI_ANY_TAG:<br>
<br>
if( mumps_par%MYID .eq. 0 ) THEN<br>
&nbsp;&nbsp;&nbsp; do jw = 0, nsize-1<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if ( jw /= 0 ) then<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call
MPI_recv(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,jw,5,MPI_COMM_WORLD,status1,ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_recv(&nbsp; res_cpu,total_unknowns&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
,MPI_DOUBLE_PRECISION,jw,6,MPI_COMM_WORLD,status2,ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_recv(&nbsp;
row_cpu,total_elem_cpu*unique,MPI_INTEGER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
,jw,7,MPI_COMM_WORLD,status3,ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_recv(&nbsp;
col_cpu,total_elem_cpu*unique,MPI_INTEGER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
,jw,8,MPI_COMM_WORLD,status4,ierr)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; end if<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; res&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (:&nbsp;&nbsp; ) = res&nbsp; (:&nbsp;&nbsp; )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +&nbsp;&nbsp; res_cpu(:)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jacob&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (:,jw) = jacob(:,jw)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + jacob_cpu(:)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; position_col(:,jw) = position_col(:,jw) +&nbsp;&nbsp; col_cpu(:)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; position_row(:,jw) = position_row(:,jw) +&nbsp;&nbsp; row_cpu(:)<br>
&nbsp;&nbsp;&nbsp; end do<br>
else<br>
&nbsp;&nbsp;&nbsp; call
MPI_Send(jacob_cpu,total_elem_cpu*unique,MPI_DOUBLE_PRECISION,0,5,MPI_COMM_WORLD,ierr)<br>
&nbsp;&nbsp;&nbsp; call MPI_Send(&nbsp; res_cpu,total_unknowns&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
,MPI_DOUBLE_PRECISION,0,6,MPI_COMM_WORLD,ierr)<br>
&nbsp;&nbsp;&nbsp; call MPI_Send(&nbsp; row_cpu,total_elem_cpu*unique,MPI_INTEGER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
,0,7,MPI_COMM_WORLD,ierr)<br>
&nbsp;&nbsp;&nbsp; call MPI_Send(&nbsp; col_cpu,total_elem_cpu*unique,MPI_INTEGER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
,0,8,MPI_COMM_WORLD,ierr)<br>
end if <br>
<br>
<blockquote cite="mid200905271816.06625.gkanis@ipta.demokritos.gr"
 type="cite">
  <blockquote type="cite">
    <pre wrap="">P.S.  It seems to me that you could use MPI collective operations to
implement what you're doing.  E.g., something like:
    </pre>
  </blockquote>
  <pre wrap=""><!---->I could use these operations for the res variable (Will it make the summation 
any faster?).</pre>
</blockquote>
Potentially faster.&nbsp; It allows the underlying MPI implementation to
introduce optimizations (also potentially leading to the nondeterminism
as you have observed!).&nbsp; The other reason to use collective operations,
however, is to make your code more readable.<br>
<blockquote cite="mid200905271816.06625.gkanis@ipta.demokritos.gr"
 type="cite">
  <pre wrap="">But, I can not use them for the other 3 variables.
  </pre>
</blockquote>
You can use an MPI_Gather operation to gather the data to rank 0 and
then perform the summation on-node.&nbsp; You need to decide (based on
performance, readability, etc.) if you want to make that change.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
