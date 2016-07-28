<?
$subject_val = "Re: [OMPI users] all2all algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 13:56:22 2009" -->
<!-- isoreceived="20090414175622" -->
<!-- sent="Tue, 14 Apr 2009 13:55:10 -0400" -->
<!-- isosent="20090414175510" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] all2all algorithms" -->
<!-- id="7E0A4AC6-6769-4B38-854A-5FA62FCC38A3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1239564010.1288.15.camel_at_alder.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] all2all algorithms<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 13:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8911.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8880.php">Tom Rosmond: "[OMPI users] all2all algorithms"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George can speak more definitively about this.
<br>
<p>In general, our &quot;tuned&quot; coll component (plugin) does exactly these  
<br>
kinds of determinations to figure out which algorithm to use at  
<br>
runtime.  Not only are communicator process counts involved, but also  
<br>
size of message is considered.  I count 5 different all2all algorithms  
<br>
in our tuned module (but George will have to speak about how each one  
<br>
is chosen).  U. Tennessee published some papers on their method; they  
<br>
basically hard-coded minimized selection tables based on oodles of  
<br>
runs and empirical data.
<br>
<p>If you'd like to look at the code, it's here in the tree:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/coll/tuned/coll_tuned_alltoall.c">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/coll/tuned/coll_tuned_alltoall.c</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(v1.3 release branch)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/coll/tuned/coll_tuned_alltoall.c">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/coll/tuned/coll_tuned_alltoall.c</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(development trunk)
<br>
<p>I don't think there's much difference between the two, but they can  
<br>
drift since v1.3 is the release branch and the trunk is active  
<br>
development.
<br>
<p><p>On Apr 12, 2009, at 3:20 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; I am curious about the algorithm(s) used in the OpenMPI  
</span><br>
<span class="quotelev1">&gt; implementations
</span><br>
<span class="quotelev1">&gt; of the all2all and all2allv.  As many of you know, there are alternate
</span><br>
<span class="quotelev1">&gt; algorithms for all2all type operations, such as that of Plimpton, et  
</span><br>
<span class="quotelev1">&gt; al
</span><br>
<span class="quotelev1">&gt; (2006), that basically exchange latency costs for bandwidth costs,  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; pays big dividends for large processor numbers, e.g. 100's or 1000's.
</span><br>
<span class="quotelev1">&gt; Does OpenMPI, or any other MPI distributions, test for processor count
</span><br>
<span class="quotelev1">&gt; and switch to such an all2all algorithm at some point?  I realize the
</span><br>
<span class="quotelev1">&gt; switchover point would be very much a function of the architecture,  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; so could be a risky decision in some cases.  Nevertheless, has it been
</span><br>
<span class="quotelev1">&gt; considered?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8913.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8911.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8880.php">Tom Rosmond: "[OMPI users] all2all algorithms"</a>
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
