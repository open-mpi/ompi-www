<?
$subject_val = "Re: [OMPI users] What architecture?  X86_64, that's what architecture!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 12:47:56 2008" -->
<!-- isoreceived="20080317164756" -->
<!-- sent="Mon, 17 Mar 2008 10:47:35 -0600" -->
<!-- isosent="20080317164735" -->
<!-- name="Jim Hill" -->
<!-- email="jimhill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What architecture?  X86_64, that's what architecture!" -->
<!-- id="47DEA0A7.3020008_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EE692354-816B-44C7-90CF-C4B2B61ADBA6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] What architecture?  X86_64, that's what architecture!<br>
<strong>From:</strong> Jim Hill (<em>jimhill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 12:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5210.php">George Bosilca: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5208.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "[OMPI users] Bug with 1.2.5?"</a>
<li><strong>In reply to:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
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
<font face="Arial">Thanks for taking the time to follow up on this.&nbsp;
Apparently there's some kind of issue with PGI and OS X 10.4.11/Intel,
at least according to the guy at Portland Group I've been working
with.&nbsp; Presumably they'll get back to me at some point...<br>
<br>
<br>
Jim<br>
<br>
</font><br>
Brian Barrett wrote:
<blockquote cite="mid:EE692354-816B-44C7-90CF-C4B2B61ADBA6@open-mpi.org"
 type="cite">
  <pre wrap="">On Mar 10, 2008, at 9:15 PM, Jim Hill wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">I'm trying to build a 64-bit 1.2.5 on an 8-core Xeon Mac Pro running  
OS X 10.4.11, with the Portland Group's PGI Workstation 7.1-5  
tools.  The configure script works its magic with a couple of  
modifications to account for PGI's tendency to freak out about F90  
modules.  Upon make, though, I end up dying with a "Wat  
architecture?" error in opal/mca/backtrace/darwin/MoreBacktrace/ 
MoreDebugging/MoreBacktrace.c:128 because (I presume) a 64-bit Xeon  
build isn't a PPC, a PPC64, or an X86.

Is this something that's been seen by others?  I'm not the world's  
greatest software stud and this is just a step along the path to my  
real objective, which is making my own software run on this beast  
machine of mine.

Suggestions, tips, and clever insults are welcome.  Thanks,
    </pre>
  </blockquote>
  <pre wrap=""><!---->
The configure script should have prevented that from happening (and  
indeed does with the GNU compilers).  I don't have a copy of the PGI  
compilers for OS X to test with, so I can't debug this without some  
more information.  What changes did you make to configure, what  
options did you specify to configure, and what was the full output of  
configure?

Thanks,

Brian

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5210.php">George Bosilca: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5208.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "[OMPI users] Bug with 1.2.5?"</a>
<li><strong>In reply to:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
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
