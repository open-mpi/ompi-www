<?
$subject_val = "Re: [OMPI users] Need Help for understand heat equation 2D mpi solving version";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 12:36:06 2010" -->
<!-- isoreceived="20101029163606" -->
<!-- sent="Fri, 29 Oct 2010 09:35:31 -0700" -->
<!-- isosent="20101029163531" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need Help for understand heat equation 2D mpi solving version" -->
<!-- id="4CCAF7D3.9020506_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTin6uj5mSCBaH5EeaXwmxHmOz+wPUQXMLsHCGAH9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need Help for understand heat equation 2D mpi solving version<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 12:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="14652.php">Jeff Squyres: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14644.php">christophe petit: "[OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
<!-- nextthread="start" -->
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
christophe petit wrote:<br>
<blockquote
 cite="midAANLkTin6uj5mSCBaH5EeaXwmxHmOz+wPUQXMLsHCGAH9@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">i
am still trying to understand the parallelized version of the heat
equation 2D solving that we saw at school.<br>
I am confused between the shift of the values near to the bounds done
by the "updateBound" routine&nbsp; and the main loop (at line 161 in main
code)&nbsp; which calls the routine "Explicit".<br>
  </blockquote>
  </div>
</blockquote>
Each process "owns" a subdomain of cells, for which it will compute
updated values.&nbsp; The process has storage not only for these cells,
which it owns, but also for a perimeter of cells, whose values need to
be fetched from nearby processes.&nbsp; So, there are two steps.&nbsp; In
"updateBound", processes communicate so that each supplies boundary
values to neighbors and gets boundary values from neighbors.&nbsp; In
"Explicit", the computation (stencil operation) is performed.<br>
<blockquote
 cite="midAANLkTin6uj5mSCBaH5EeaXwmxHmOz+wPUQXMLsHCGAH9@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">For
a given process (say number 1) ( i use 4 here for execution), i send to
the east process (3) the <span lang="en"><span title="">penultimate
column left column, to the north process (0) the </span></span><span
 lang="en"><span title="">penultimate row top ,and to the others
(mpi_proc_null=-2) <br>
    </span></span><span lang="en"><span title="">the penultimate right
column and the </span></span>bottom row. But how the 4&nbsp; processes are
synchronous ?</blockquote>
  </div>
</blockquote>
When UpdateBound is called, neighboring processes are implicitly
synchronized via the MPI_Sendrecv() calls.<br>
<blockquote
 cite="midAANLkTin6uj5mSCBaH5EeaXwmxHmOz+wPUQXMLsHCGAH9@mail.gmail.com"
 type="cite">
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">I
don't understand too why <span lang="en"><span title="">all the
processes go through the solving piece of code</span></span> calling
the "Explicit" routine.<br>
  </blockquote>
  </div>
</blockquote>
The computational domain is distributed among all processes.&nbsp; Each cell
must be updated with the stencil operation.&nbsp; So, each process calls
that computation for the cells that it owns.<br>
<br>
You should be able to get better interactivity at your school than on
this mailing list.&nbsp; Further, your questions at school would help the
instructor get feedback from the students.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14654.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="14652.php">Jeff Squyres: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14644.php">christophe petit: "[OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
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
