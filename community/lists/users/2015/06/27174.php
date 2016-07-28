<?
$subject_val = "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 21:17:57 2015" -->
<!-- isoreceived="20150623011757" -->
<!-- sent="Mon, 22 Jun 2015 21:17:55 -0400" -->
<!-- isosent="20150623011755" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?" -->
<!-- id="5588B3C3.7030100_at_aol.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="SN2PR0701MB8143DF554FF1F267BDF3F2ED9A10_at_SN2PR0701MB814.namprd07.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-22 21:17:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27175.php">Jeff Layton: "[OMPI users] Problem getting job to start"</a>
<li><strong>Previous message:</strong> <a href="27173.php">Brice Goglin: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27172.php">Belgin, Mehmet: "[OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/22/2015 6:06 PM, Belgin, Mehmet wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Abaqus documentation suggests that it may be possible to run it using
</span><br>
<span class="quotelev1">&gt; an external MPI stack, and I am hoping to make it work with our stock
</span><br>
<span class="quotelev1">&gt; openmpi/1.8.4 that knows how to talk with the scheduler's hwloc.
</span><br>
<span class="quotelev1">&gt; Unfortunately, however, all of my attempts failed miserably so far (no
</span><br>
<span class="quotelev1">&gt; specific instructions for openmpi).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was wondering if anyone had success with getting Abaqus running with
</span><br>
<span class="quotelev1">&gt; openmpi. Even the information of whether it is possible or not will
</span><br>
<span class="quotelev1">&gt; help us a great deal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Data types encodings are incompatible between openmpi and mpich
<br>
derivatives, and, I think, with the HP or Platform-MPI normally used by
<br>
past Abaqus releases.  You should be looking at Abaqus release notes for
<br>
your version.
<br>
Comparing include files between the various MPI families should give you
<br>
a clue about type encoding compatibility.  Lack of instructions for
<br>
openmpi probably means something.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27174/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27175.php">Jeff Layton: "[OMPI users] Problem getting job to start"</a>
<li><strong>Previous message:</strong> <a href="27173.php">Brice Goglin: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27172.php">Belgin, Mehmet: "[OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
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
