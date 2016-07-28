<?
$subject_val = "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 11:24:41 2009" -->
<!-- isoreceived="20090305162441" -->
<!-- sent="Thu, 05 Mar 2009 11:24:37 -0500" -->
<!-- isosent="20090305162437" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?" -->
<!-- id="49AFFCC5.1030902_at_scalableinformatics.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D18FB84F-6DC3-4BBD-806D-D8108C256DEF_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 11:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8325.php">justin oppenheim: "[OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8323.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>In reply to:</strong> <a href="8322.php">Ralph Castain: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8329.php">Gus Correa: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8329.php">Gus Correa: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8330.php">Gerry Creager: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ummm....not to put gasoline on the fire, but...if the data exchange is 
</span><br>
<span class="quotelev1">&gt; blocking, why do you need to call a barrier op first? Just use an 
</span><br>
<span class="quotelev1">&gt; appropriate blocking data exchange call (collective or whatever) and it 
</span><br>
<span class="quotelev1">&gt; will &quot;barrier&quot; anyway.
</span><br>
<p>Since I don't run these codes, I would have to defer to those that do.
<br>
<p>This said, I am not sure if they are running the coupling as two 
<br>
separate MPI codes or as one code sharing a communications handle or 
<br>
whatnot else.
<br>
<p>I do agree that letting the data exchange provide a (natural) barrier 
<br>
makes a great deal of sense, though the codes may not be amenable to 
<br>
this mode of operations.  Gerry could likely shed light on this.
<br>
<p><p><p><p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423 x121
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8325.php">justin oppenheim: "[OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8323.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>In reply to:</strong> <a href="8322.php">Ralph Castain: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8329.php">Gus Correa: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8329.php">Gus Correa: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8330.php">Gerry Creager: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
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
