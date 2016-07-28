<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 18:16:34 2008" -->
<!-- isoreceived="20080922221634" -->
<!-- sent="Mon, 22 Sep 2008 18:16:28 -0400" -->
<!-- isosent="20080922221628" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="94D2F131-60D5-48C3-9E8B-F0EFA94F9178_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48535380809221508gfb0b518gf3dd75ebf098aba6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 18:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6676.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6675.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2008, at 6:08 PM, Brian Harker wrote:
<br>
<p><span class="quotelev1">&gt; Here's the config.log file...now that I look through it more
</span><br>
<span class="quotelev1">&gt; carefully, I see some errors that I didn't see when watching
</span><br>
<span class="quotelev1">&gt; ./configure scroll by...still don't know what to do though.  :(
</span><br>
<p>Not to worry; there are many tests in configure that are designed to  
<br>
fail.  So it's not a problem to see lots of failures in config.log.
<br>
<p>I see that it did use ifort for both the F77 and F90 compilers; that's  
<br>
what I wanted to check with configure output and config.log.
<br>
<p>Per Doug's comment, if OMPI is not re-compiling the Fortran module  
<br>
when you reconfigure with a new fortran compiler, that is likely a  
<br>
bug.  Can you &quot;make clean all install&quot; and see if it works?  If not,  
<br>
send all the output here (see <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>  
<br>
for instructions; please compress).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6676.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6675.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
