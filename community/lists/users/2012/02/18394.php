<?
$subject_val = "Re: [OMPI users] IO performance";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  4 10:19:34 2012" -->
<!-- isoreceived="20120204151934" -->
<!-- sent="Sat, 04 Feb 2012 10:19:23 -0500" -->
<!-- isosent="20120204151923" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IO performance" -->
<!-- id="4F2D4C7B.4040204_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1328294781.4280.32.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IO performance<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-04 10:19:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18395.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>Previous message:</strong> <a href="18393.php">Jeff Squyres: "Re: [OMPI users] mpi_abort_delay"</a>
<li><strong>In reply to:</strong> <a href="18387.php">Tom Rosmond: "[OMPI users] IO performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18403.php">Rob Latham: "Re: [OMPI users] IO performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/03/2012 01:46 PM, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; Recently the organization I work for bought a modest sized Linux cluster
</span><br>
<span class="quotelev1">&gt; for running large atmospheric data assimilation systems.  In my
</span><br>
<span class="quotelev1">&gt; experience a glaring problem with systems of this kind is poor IO
</span><br>
<span class="quotelev1">&gt; performance.  Typically they have 2 types of network: 1) A high speed,
</span><br>
<p>(we are biased given that we design, build, and sell these types of high 
<br>
performance storage)
<br>
<p>Couldn't agree more, high performance in storage systems is often 
<br>
mostly/completely overlooked, and when not, poorly designed/implemented. 
<br>
&nbsp;&nbsp;Its rare we see good implementations.
<br>
<p><span class="quotelev1">&gt; low latency, e.g. Infiniband, network dedicated to MPI communications,
</span><br>
<span class="quotelev1">&gt; and, 2) A lower speed network, e.g 1Gb or 10Gb ethernet, for IO.  On
</span><br>
<span class="quotelev1">&gt; clusters this second network is usually the basis for a global parallel
</span><br>
<span class="quotelev1">&gt; file system (GPFS), through which nearly all IO traffic must pass.  So
</span><br>
<span class="quotelev1">&gt; the IO performance of applications such as ours is completely dependent
</span><br>
<span class="quotelev1">&gt; on the speed of the GPFS, and therefore on the network hardware it uses.
</span><br>
<p>Ouch.  10GbE should be pretty reasonable for high performance traffic, 
<br>
as long as your servers have multiple ports that can be accessed in 
<br>
parallel, and that they are capable of driving data at these rates. 
<br>
When people do focus on the issues mentioned, they usually solve the 
<br>
first of these, and their design to handle the second is broken.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have seen that a cluster with a GPFS based on a 1Gb network is
</span><br>
<span class="quotelev1">&gt; painfully slow for our applications, and of course with a 10Gb network
</span><br>
<span class="quotelev1">&gt; is much better.  Therefore we are making the case to the IT staff that
</span><br>
<span class="quotelev1">&gt; all our systems should have GPFS running on 10Gb networks.  Some of them
</span><br>
<span class="quotelev1">&gt; have a hard time accepting this, since they don't really understand the
</span><br>
<span class="quotelev1">&gt; requirements of our applications.
</span><br>
<p>Well, yes.  I don't expect someone used to dealing with desktops, mail 
<br>
servers, etc. to really grasp why you need a very high bandwidth very 
<br>
low latency network for messages or storage.  If you see their stacked 
<br>
switch architectures, you might shudder to think that these are 
<br>
replicated in cluster environments (they are when IT has a hand in 
<br>
designing them).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With all of this, here is my MPI related question.  I recently added an
</span><br>
<span class="quotelev1">&gt; option to use MPI-IO to do the heavy IO lifting in our applications.  I
</span><br>
<span class="quotelev1">&gt; would like to know what the relative importance of the dedicated MPI
</span><br>
<span class="quotelev1">&gt; network vis-a-vis the GPFS network for typical MPIIO collective reads
</span><br>
<span class="quotelev1">&gt; and writes.  I assume there must be some hand-off of data between the
</span><br>
<span class="quotelev1">&gt; networks during the process, but how is it done, and are there any rules
</span><br>
<span class="quotelev1">&gt; to help understand it.  Any insights would be welcome.
</span><br>
<p>We'd recommend all storage be used over the fast networks (10GbE and 
<br>
Infiniband).  Fairly painless to configure.  This said, I guess one of 
<br>
my concerns would be the design of the storage servers ... I am guessing 
<br>
they may not be able to even come close to saturating a 10GbE 
<br>
connection, never mind an Infiniband connection.
<br>
<p>All this said, you might find an audience that can help with the 
<br>
operational aspects of this better on the beowulf list than here on the 
<br>
OpenMPI list.  Certainly OpenMPI list is a great place to discuss the 
<br>
MPI-IO side of things, but the performance side of the system design 
<br>
(outside of MPI) might be better located on a different list.
<br>
<p>Just a suggestion ...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.  I am running with Open-mpi 1.4.2.
</span><br>
<p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics Inc.
email: landman_at_[hidden]
web  : <a href="http://scalableinformatics.com">http://scalableinformatics.com</a>
        <a href="http://scalableinformatics.com/sicluster">http://scalableinformatics.com/sicluster</a>
phone: +1 734 786 8423 x121
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18395.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>Previous message:</strong> <a href="18393.php">Jeff Squyres: "Re: [OMPI users] mpi_abort_delay"</a>
<li><strong>In reply to:</strong> <a href="18387.php">Tom Rosmond: "[OMPI users] IO performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18403.php">Rob Latham: "Re: [OMPI users] IO performance"</a>
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
