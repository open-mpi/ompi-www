<?
$subject_val = "Re: [OMPI users] MPI_Bcast from OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 12:26:40 2009" -->
<!-- isoreceived="20090423162640" -->
<!-- sent="Thu, 23 Apr 2009 09:26:14 -0700" -->
<!-- isosent="20090423162614" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast from OpenMPI" -->
<!-- id="49F096A6.9090800_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="172351.88821.qm_at_web62006.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast from OpenMPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 12:26:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Previous message:</strong> <a href="9072.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9065.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9082.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9082.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
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
Okay.&nbsp; So, going back to Jeff's second surprise, we have 256 Mbyte/2.5
sec = 100 Mbyte/sec = 1 Gbit/sec (sloppy math).&nbsp; So, without getting
into details of what we're measuring/reporting here, there doesn't on
the face of it appear to be anything wrong with the baseline
performance.&nbsp; Jeff was right that 256K doubles should have been faster,
but 256 Mbyte... seems reasonable.<br>
<br>
So, the remaining mystery is the 6x or so spike at 128 Mbyte.&nbsp; Dunno.&nbsp;
How important is it to resolve that mystery?<br>
<br>
shan axida wrote:
<blockquote cite="mid172351.88821.qm@web62006.mail.re1.yahoo.com"
 type="cite">
  <style type="text/css"><!-- DIV {margin:0px;} --></style>
  <div
 style="font-family: 'times new roman','new york',times,serif; font-size: 12pt;">
  <div>Sorry, I had a mistake in calculation.</div>
  <div>Not 131072 (double) but&nbsp;131072 KB.</div>
  <div>It means around 128 MB.</div>
  <div>&nbsp;</div>
  <div
 style="font-family: times new roman,new york,times,serif; font-size: 12pt;"><b><span
 style="font-weight: bold;">From:</span></b> Jeff Squyres
<a class="moz-txt-link-rfc2396E" href="mailto:jsquyres@cisco.com">&lt;jsquyres@cisco.com&gt;</a><b><span style="font-weight: bold;"><br>
To:</span></b> Open MPI Users <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a><b><span
 style="font-weight: bold;"><br>
Sent:</span></b> Thursday, April 23, 2009 8:23:52 PM<b><span
 style="font-weight: bold;"><br>
Subject:</span></b> Re: [OMPI users] MPI_Bcast from OpenMPI<br>
  <div style="font-family: arial,helvetica,sans-serif; font-size: 13px;"><br>
Very strange; 6 seconds for a 1MB broadcast over 64 processes is *way*
too long.&nbsp; Even 2.5 sec at 2MB seems too long</div>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Previous message:</strong> <a href="9072.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9065.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9082.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9082.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
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
