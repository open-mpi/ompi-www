<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 10 10:27:10 2010" -->
<!-- isoreceived="20100910142710" -->
<!-- sent="Fri, 10 Sep 2010 07:27:02 -0700" -->
<!-- isosent="20100910142702" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="4C8A4036.3060203_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF783905E4.D59DB1B8-ON8525779A.004A754E-8525779A.004DADB1_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-10 10:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14212.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14212.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14212.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
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
Richard Treumann wrote:
<blockquote
 cite="midOF783905E4.D59DB1B8-ON8525779A.004A754E-8525779A.004DADB1@us.ibm.com"
 type="cite"><br>
  <font face="sans-serif" size="2">Hi Ashley</font>
  <br>
  <br>
  <font face="sans-serif" size="2">I understand the problem with
descriptor
flooding can be serious in an application with unidirectional data
dependancy.
Perhaps we have a different perception of how common that is.</font>
  <br>
</blockquote>
Ashley speculated it was a "significant minority."&nbsp; I don't know what
that means, but it seems like it is a minority (most computations have
causal relationships among the processes holding unbounded imbalances
in check) and yet we end up seeing these exceptions.<br>
<blockquote
 cite="midOF783905E4.D59DB1B8-ON8525779A.004A754E-8525779A.004DADB1@us.ibm.com"
 type="cite"><font face="sans-serif" size="2">I think that
adding some flow control to the application is a better solution than
semantically
redundant barrier.</font></blockquote>
It seems to me there is no difference.&nbsp; Flow control, at this level, is
just semantically redundant synchronization.&nbsp; A barrier is just a
special case of that.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14212.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14212.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14212.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
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
