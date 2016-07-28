<?
$subject_val = "Re: [MTT users] Splitting build and run phases";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 09:38:03 2009" -->
<!-- isoreceived="20090501133803" -->
<!-- sent="Fri, 01 May 2009 09:37:22 -0400" -->
<!-- isosent="20090501133722" -->
<!-- name="Matney Sr, Kenneth D." -->
<!-- email="matneykdsr_at_[hidden]" -->
<!-- subject="Re: [MTT users] Splitting build and run phases" -->
<!-- id="537C6C0940C6C143AA46A88946B8541711AD0CDA_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C61F716C.4AB5%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [MTT users] Splitting build and run phases<br>
<strong>From:</strong> Matney Sr, Kenneth D. (<em>matneykdsr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 09:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0686.php">Avneesh Pant: "[MTT users] MTT account request"</a>
<li><strong>Previous message:</strong> <a href="0684.php">Jeff Squyres: "Re: [MTT users] Splitting build and run phases"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/04/0683.php">Barrett, Brian W: "[MTT users] Splitting build and run phases"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At ORNL, I do this (when I have time to run MTT and time
<br>
to check the results).  What I do is set up my script to 
<br>
check to see if it is in a batch job.   If so, it runs 
<br>
the tests, like so:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt         --verbose                                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--print-time                                         \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--no-mpi-phases --no-test-get --no-test-build        \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--scratch   ${SW_BLDDIR}                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--file      ${HOME}/mtt-jaguarpf/ornl-pgi.ini
<br>
<p>But, if not in a batch job, it builds OMPI and the tests, by:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt         --verbose                                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--print-time                                         \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--no-test-run                                        \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--scratch   ${SW_BLDDIR}                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--file      ${HOME}/mtt-jaguarpf/ornl-pgi.ini
<br>
<p>In addition, I have the script, when it is not in a batch job submit
<br>
itself as a batch job, when it finishes building.  So, basically, I
<br>
can fire off the build script and go work on other things.
<br>
-- Ken
<br>
<p><p><p>-----Original Message-----
<br>
From: mtt-users-bounces_at_[hidden]
<br>
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Barrett, Brian W
<br>
Sent: Thursday, April 30, 2009 5:17 PM
<br>
To: user list for the MPI Testing Tool
<br>
Subject: [MTT users] Splitting build and run phases
<br>
<p>Hi all -
<br>
<p>I have what's probably a stupid question, but I couldn't find the answer
<br>
on
<br>
the wiki.
<br>
<p>I've currently been building OMPI and the tests then running the tests
<br>
all
<br>
in the same MTT run, all in a batch job.  The problem is, that means
<br>
I've
<br>
got a bunch of nodes reserved while building OMPI, which I can't
<br>
actually
<br>
use.
<br>
<p>Is there any way to split the two phases (build and run) so that I can
<br>
build
<br>
outside of the batch job, get the reservation, and run the tests?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
--
   Brian W. Barrett
   Dept. 1423: Scalable System Software
   Sandia National Laboratories
_______________________________________________
mtt-users mailing list
mtt-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0686.php">Avneesh Pant: "[MTT users] MTT account request"</a>
<li><strong>Previous message:</strong> <a href="0684.php">Jeff Squyres: "Re: [MTT users] Splitting build and run phases"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/04/0683.php">Barrett, Brian W: "[MTT users] Splitting build and run phases"</a>
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
