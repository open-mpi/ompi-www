<?
$subject_val = "Re: [OMPI devel] RFC: Diagnostoc framework for MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 19:16:33 2009" -->
<!-- isoreceived="20090526231633" -->
<!-- sent="Tue, 26 May 2009 16:16:15 -0700" -->
<!-- isosent="20090526231615" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Diagnostoc framework for MPI" -->
<!-- id="4A1C783F.2080700_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1243316029.2634.7.camel_at_frecb000730.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Diagnostoc framework for MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 19:16:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6095.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6083.php">Nadia Derbey: "[OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt;What: Warn the administrator when unusual events are occurring too
</span><br>
<span class="quotelev1">&gt;frequently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Why: Such unusual events might be the symptom of some problem that can
</span><br>
<span class="quotelev1">&gt;easily be fixed (by a better tuning, for example)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Before Sun HPC ClusterTools adopted the Open MPI code base (that is, CT6 
<br>
and earlier), there was some performance analysis support called 
<br>
MPProf.  See 
<br>
<a href="http://docs.sun.com/source/819-4134-10/profile.html#pgfId-999249">http://docs.sun.com/source/819-4134-10/profile.html#pgfId-999249</a> .  The 
<br>
key characteristic was supposed to be that it would be very easy to 
<br>
use:  set an environment variable before running; run a report generator 
<br>
afterwards;  report is self explanatory;  data volumes were relatively 
<br>
small and so easy to manage.
<br>
<p>One part in particular seemed germane to your RFC:  advice on 
<br>
implementation-specific environment variables.  See 
<br>
<a href="http://docs.sun.com/source/819-4134-10/profile.html#pgfId-1000209">http://docs.sun.com/source/819-4134-10/profile.html#pgfId-1000209</a> .  Sun 
<br>
MPI had instrumentation embedded in it that looked for various 
<br>
&quot;performance conditions&quot;.  Then, in post processing, the report 
<br>
generator would translate that information into user-actionable 
<br>
feedback.  At least, that was the concept.  The idea would be that all 
<br>
user feedback should include:
<br>
<p>*) a brief explanation of what happened (&quot;you ran out of postboxes... 
<br>
see Appendix A.1.b.23 of user guide if you really dare to understand 
<br>
what this means&quot;)
<br>
*) an estimate of how important this is (&quot;we think this cost you 10% 
<br>
performance&quot;)
<br>
*) a concise description of what to do to improve performance and 
<br>
discussion of ramifications (&quot;set the environment variable 
<br>
MPI_NUMPOSTBOX to 256 and rerun, this will cost about 50 Mbyte more 
<br>
memory per process&quot;)
<br>
<p>The feedback need not be limited to environment variables or 
<br>
implementation-specific conditions.  E.g., perhaps one could detect when 
<br>
MPI_Ssend is used in place of MPI_Send and how much performance 
<br>
(unneeded synchronization) that cost.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6095.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6083.php">Nadia Derbey: "[OMPI devel] RFC: Diagnostoc framework for MPI"</a>
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
