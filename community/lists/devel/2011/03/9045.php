<?
$subject_val = "[OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 11:25:25 2011" -->
<!-- isoreceived="20110310162525" -->
<!-- sent="Thu, 10 Mar 2011 08:23:26 -0800" -->
<!-- isosent="20110310162326" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="4D78FAFE.6030701_at_oracle.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] [Fwd:  multi-threaded test]<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 11:23:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9046.php">Jeff Squyres: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9044.php">Jeff Squyres: "Re: [OMPI devel] affinity MPI extension not included in OMPI 1.5.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9046.php">Jeff Squyres: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9046.php">Jeff Squyres: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9048.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
Any comments on this?&nbsp; We wanted to clean up MPI_THREAD_MULTIPLE
support in the trunk and port these changes back to 1.5.x, but it's
unclear to me what our expectations should be about any
MPI_THREAD_MULTIPLE test succeeding.&nbsp; How do we assess (test) our
changes?&nbsp; Or, should we just hardwire thread support to be off, as we
have done with progress threads?<br>
<br>
-------- Original Message --------
<table border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th align="right" nowrap="nowrap" valign="baseline">Subject: </th>
      <td>[OMPI devel] multi-threaded test</td>
    </tr>
    <tr>
      <th align="right" nowrap="nowrap" valign="baseline">Date: </th>
      <td>Tue, 08 Mar 2011 11:24:20 -0800</td>
    </tr>
    <tr>
      <th align="right" nowrap="nowrap" valign="baseline">From: </th>
      <td>Eugene Loh <a class="moz-txt-link-rfc2396E" href="mailto:eugene.loh@oracle.com">&lt;eugene.loh@oracle.com&gt;</a></td>
    </tr>
    <tr>
      <th align="right" nowrap="nowrap" valign="baseline">To: </th>
      <td>Open MPI Developers <a class="moz-txt-link-rfc2396E" href="mailto:devel@open-mpi.org">&lt;devel@open-mpi.org&gt;</a></td>
    </tr>
  </tbody>
</table>
<br>
<br>
<pre>I've been assigned CMR 2728, which is to apply some thread-support 
changes to 1.5.x.  The trac ticket has amusing language about "needs 
testing".  I'm not sure what that means.  We rather consistently say 
that we don't promise anything with regards to true thread support.  We 
specifically say certain BTLs are off limits and we say things are 
poorly tested and can be expected to break.  Given all that, what does 
it mean to test thread support in OMPI?

One option, specifically in the context of this CMR, is to test only 
configuration options and so on.  I've done this.

Another possibility is to confirm that simple run-time tests of 
multi-threaded message passing succeed.  I'm having trouble with this.

Attached is a simple test.  It passes over sm but fails over TCP.  (One 
or both of the initial messages is not received.)

How high should I set my sights on this?

</pre>
</body>


<p>
#!/bin/csh
<br>
<p>mpicc -xopenmp -m64 -O5 main.c
<br>
<p>mpirun -np 2 --mca btl self,sm  ./a.out
<br>
mpirun -np 2 --mca btl self,tcp ./a.out
<br>
<p><p><p>
<br><p>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9045/main.c">main.c</a>
</ul>
<!-- attachment="main.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9046.php">Jeff Squyres: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9044.php">Jeff Squyres: "Re: [OMPI devel] affinity MPI extension not included in OMPI 1.5.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9046.php">Jeff Squyres: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9046.php">Jeff Squyres: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9048.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
