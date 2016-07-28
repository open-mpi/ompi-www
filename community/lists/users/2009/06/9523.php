<?
$subject_val = "Re: [OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 12:03:07 2009" -->
<!-- isoreceived="20090603160307" -->
<!-- sent="Wed, 3 Jun 2009 12:02:49 -0400" -->
<!-- isosent="20090603160249" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi and processor affinity" -->
<!-- id="4B61AF82-1B4F-4A6A-BB0E-B2BB06CE7B98_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1244043627.4668.53.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi and processor affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 12:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
<li><strong>In reply to:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9525.php">Ralph Castain: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9525.php">Ralph Castain: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2009, at 11:40 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; Wasn't there a discussion about this recently on the list, OMPI binds
</span><br>
<span class="quotelev1">&gt; during MPI_Init() so it's possible for memory to be allocated on the
</span><br>
<span class="quotelev1">&gt; wrong quad, the discussion was about moving the binding to the orte
</span><br>
<span class="quotelev1">&gt; process as I recall?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes.  It's been fixed in OMPI devel trunk.  I'm not sure it made it to  
<br>
the v1.3 branch, but it's definitely not in a released version yet.
<br>
<p>I *thought* that HPL did all allocation after MPI_INIT.  But I could  
<br>
be wrong.  If so, then using numactl to bind before the MPI app starts  
<br>
will likely give better results -- you're right (until we get our  
<br>
fixes in such that we bind pre-main).
<br>
<p>Regardless, if something is *changing* the affinity after MPI_INIT,  
<br>
then there's little OMPI can do about that.
<br>
<p><span class="quotelev2">&gt; &gt;From my testing of process affinity you tend to get much more  
</span><br>
<span class="quotelev1">&gt; consistent
</span><br>
<span class="quotelev1">&gt; results with it on and much more unpredictable results with it off,  
</span><br>
<span class="quotelev1">&gt; I'd
</span><br>
<span class="quotelev1">&gt; questing that it's working properly if you are seeing a 88-93% range  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9524.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
<li><strong>In reply to:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9525.php">Ralph Castain: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9525.php">Ralph Castain: "Re: [OMPI users] Openmpi and processor affinity"</a>
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
