<?
$subject_val = "Re: [OMPI users] SHARED Memory----------------";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 00:20:26 2009" -->
<!-- isoreceived="20090423042026" -->
<!-- sent="Wed, 22 Apr 2009 21:20:05 -0700" -->
<!-- isosent="20090423042005" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SHARED Memory----------------" -->
<!-- id="49EFEC75.60806_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49EFE2C9.6070104_at_umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] SHARED Memory----------------<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 00:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9043.php">Tsung Han Shie: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>In reply to:</strong> <a href="9042.php">Elvedin Trnjanin: "Re: [OMPI users] SHARED Memory----------------"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Reply:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Reply:</strong> <a href="9048.php">shan axida: "[OMPI users] MPI_Bcast from OpenMPI"</a>
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
Just to clarify (since "send to self" strikes me as confusing)...<br>
<br>
If you're talking about using shared memory for point-to-point MPI
message passing, OMPI typically uses it automatically between two
processes on the same node.&nbsp; It is *not* used for a process sending to
itself.&nbsp; There is a well-written FAQ (in my arrogant opinion!) at
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> -- e.g.,
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=sm#sm-btl">http://www.open-mpi.org/faq/?category=sm#sm-btl</a> .<br>
<br>
If you're talking about some other use of shared memory, let us know
what you had in mind.<br>
<br>
Elvedin Trnjanin wrote:
<blockquote cite="mid49EFE2C9.6070104@umn.edu" type="cite">
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
Shared memory is used for send-to-self scenarios such as if you're
making use of multiple slots on the same machine.<br>
  <br>
shan axida wrote:
  <blockquote cite="mid:656642.90282.qm@web62008.mail.re1.yahoo.com"
 type="cite">
    <style type="text/css"><!-- DIV {margin:0px;} --></style>
    <div
 style="font-family: 'times new roman','new york',times,serif; font-size: 12pt;">
    <div>Any body know how to make use of shared memory in OpenMPI
implementation?</div>
    </div>
  </blockquote>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9043.php">Tsung Han Shie: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>In reply to:</strong> <a href="9042.php">Elvedin Trnjanin: "Re: [OMPI users] SHARED Memory----------------"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Reply:</strong> <a href="9045.php">shan axida: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>Reply:</strong> <a href="9048.php">shan axida: "[OMPI users] MPI_Bcast from OpenMPI"</a>
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
