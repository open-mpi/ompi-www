<?
$subject_val = "[OMPI users] What architecture?  X86_64, that's what architecture!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 23:16:05 2008" -->
<!-- isoreceived="20080311031605" -->
<!-- sent="Mon, 10 Mar 2008 21:15:53 -0600" -->
<!-- isosent="20080311031553" -->
<!-- name="Jim Hill" -->
<!-- email="jimhill_at_[hidden]" -->
<!-- subject="[OMPI users] What architecture?  X86_64, that's what architecture!" -->
<!-- id="47D5F969.9070507_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] What architecture?  X86_64, that's what architecture!<br>
<strong>From:</strong> Jim Hill (<em>jimhill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 23:15:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5168.php">Jon Mason: "[OMPI users] Set GID"</a>
<li><strong>Previous message:</strong> <a href="5166.php">Christoph Spielmann: "[OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Reply:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
</head>
<body bgcolor="#ffffff" text="#000000">
<font face="Arial">I'm trying to build a 64-bit 1.2.5 on an 8-core Xeon
Mac Pro running OS X 10.4.11, with the Portland Group's PGI Workstation
7.1-5 tools.&nbsp; The configure script works its magic with a couple of
modifications to account for PGI's tendency to freak out about F90
modules.&nbsp; Upon make, though, I end up dying with a "Wat architecture?"
error in
opal/mca/backtrace/darwin/MoreBacktrace/MoreDebugging/MoreBacktrace.c:128
because (I presume) a 64-bit Xeon build isn't a PPC, a PPC64, or an X86.<br>
<br>
Is this something that's been seen by others?&nbsp; I'm not the world's
greatest software stud and this is just a step along the path to my
real objective, which is making my own software run on this beast
machine of mine.<br>
<br>
Suggestions, tips, and clever insults are welcome.&nbsp; Thanks,<br>
<br>
<br>
Jim<br>
</font>-- <br>
<div class="moz-signature">"Big Jim Cooley came out of the West;
whatever he wanted, he could get." -- Genesis, "Ballad of Big" <br>
<br>
Jim Hill, X-3 | MS T087 TA3/SCC | Vox: 665 3471 | Page: 104-7131 |
<a class="moz-txt-link-abbreviated" href="mailto:jimhill@lanl.gov">jimhill@lanl.gov</a><br>
<br>
This message has been determined to be unclassified. -- JLH, ADC
</div>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5168.php">Jon Mason: "[OMPI users] Set GID"</a>
<li><strong>Previous message:</strong> <a href="5166.php">Christoph Spielmann: "[OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Reply:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
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
