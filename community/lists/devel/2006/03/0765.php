<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 18 20:31:42 2006" -->
<!-- isoreceived="20060319013142" -->
<!-- sent="Sat, 18 Mar 2006 18:31:34 -0700" -->
<!-- isosent="20060319013134" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] app contexts broken on trunk?" -->
<!-- id="441CB476.4020303_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4E3FF8B-5F17-41B3-9A4D-461154C89CAF_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-18 20:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0766.php">Brian Barrett: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Previous message:</strong> <a href="0764.php">Brian Barrett: "[OMPI devel] app contexts broken on trunk?"</a>
<li><strong>In reply to:</strong> <a href="0764.php">Brian Barrett: "[OMPI devel] app contexts broken on trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0766.php">Brian Barrett: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Reply:</strong> <a href="0766.php">Brian Barrett: "Re: [OMPI devel] app contexts broken on trunk?"</a>
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
Yo Brian<br>
<br>
Was this running on a single machine or on multiple nodes? Reason I'm
asking is to try and see if the problem (a) is in mpirun not properly
parsing the command line, or (b) is in the dss pack/unpack routines for
that data type. If everything works right on a single machine, then we
know it must be in option (b).<br>
<br>
Ralph<br>
<br>
Brian Barrett wrote:
<blockquote cite="midC4E3FF8B-5F17-41B3-9A4D-461154C89CAF@open-mpi.org"
 type="cite">
  <pre wrap="">I think something is wrong with app contexts on the trunk.  The  
example below seems to run uptime twice rather than running uptime  
then hostname as I would expect.

[18:18] brbarret@frood:ttyp1 ~% mpirun -np 1 uptime : -np 1 hostname
18:18  up 12 days,  9:27, 2 users, load averages: 0.02 0.10 0.09
18:18  up 12 days,  9:27, 2 users, load averages: 0.02 0.10 0.09
[18:18] brbarret@frood:ttyp1 ~%

Brian
_______________________________________________
devel mailing list
<a class="moz-txt-link-abbreviated" href="mailto:devel@open-mpi.org">devel@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0766.php">Brian Barrett: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Previous message:</strong> <a href="0764.php">Brian Barrett: "[OMPI devel] app contexts broken on trunk?"</a>
<li><strong>In reply to:</strong> <a href="0764.php">Brian Barrett: "[OMPI devel] app contexts broken on trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0766.php">Brian Barrett: "Re: [OMPI devel] app contexts broken on trunk?"</a>
<li><strong>Reply:</strong> <a href="0766.php">Brian Barrett: "Re: [OMPI devel] app contexts broken on trunk?"</a>
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
