<?
$subject_val = "Re: [OMPI users] top question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 11:07:32 2009" -->
<!-- isoreceived="20090603150732" -->
<!-- sent="Wed, 03 Jun 2009 08:07:21 -0700" -->
<!-- isosent="20090603150721" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] top question" -->
<!-- id="4A2691A9.6040101_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090603073249.qp0njw1t44ckogg0_at_webmail.coas.oregonstate.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] top question<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 11:07:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9517.php">Jeff Squyres: "Re: [OMPI users] Hypre"</a>
<li><strong>Previous message:</strong> <a href="9515.php">naveed: "[OMPI users] Hypre"</a>
<li><strong>In reply to:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
tsilva_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the explanation. I am using GigEth + Open MPI and the  
</span><br>
<span class="quotelev1">&gt; buffered MPI_BSend. I had already noticed that top behaved 
</span><br>
<span class="quotelev1">&gt; differently  on another cluster with Infinibandb + MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the only option to find out how much time each process is waiting  
</span><br>
<span class="quotelev1">&gt; around seems to be to profile the code. Will gprof show me anything  
</span><br>
<span class="quotelev1">&gt; useful or will I have to use a more sophisticated (any free ones?)  
</span><br>
<span class="quotelev1">&gt; parallel profiler?
</span><br>
<p>Another frequently asked question!  I can try to add a FAQ 
<br>
entry/category.  There are a number of free options including
<br>
<p>TAU <a href="http://www.cs.uoregon.edu/research/tau/home.php">http://www.cs.uoregon.edu/research/tau/home.php</a>
<br>
mpiP <a href="http://mpip.sourceforge.net/">http://mpip.sourceforge.net/</a>
<br>
FPMPI <a href="http://www.mcs.anl.gov/research/projects/fpmpi/WWW/index.html">http://www.mcs.anl.gov/research/projects/fpmpi/WWW/index.html</a>
<br>
IPM <a href="http://ipm-hpc.sourceforge.net/">http://ipm-hpc.sourceforge.net/</a>
<br>
Sun Studio <a href="http://developers.sun.com/sunstudio/">http://developers.sun.com/sunstudio/</a>
<br>
<p>The only one I've really used is Sun Studio.
<br>
<p>Jumpshot *might* work with Open MPI, I forget.  Or, it might be more an 
<br>
MPICH tool.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9517.php">Jeff Squyres: "Re: [OMPI users] Hypre"</a>
<li><strong>Previous message:</strong> <a href="9515.php">naveed: "[OMPI users] Hypre"</a>
<li><strong>In reply to:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
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
