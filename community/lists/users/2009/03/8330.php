<?
$subject_val = "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 14:56:35 2009" -->
<!-- isoreceived="20090305195635" -->
<!-- sent="Thu, 05 Mar 2009 13:56:30 -0600" -->
<!-- isosent="20090305195630" -->
<!-- name="Gerry Creager" -->
<!-- email="gerry.creager_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?" -->
<!-- id="49B02E6E.8070106_at_tamu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49AFFCC5.1030902_at_scalableinformatics.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?<br>
<strong>From:</strong> Gerry Creager (<em>gerry.creager_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 14:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8331.php">Jeff Squyres: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8329.php">Gus Correa: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8324.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8326.php">Eugene Loh: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joe Landman wrote:
<br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ummm....not to put gasoline on the fire, but...if the data exchange is 
</span><br>
<span class="quotelev2">&gt;&gt; blocking, why do you need to call a barrier op first? Just use an 
</span><br>
<span class="quotelev2">&gt;&gt; appropriate blocking data exchange call (collective or whatever) and 
</span><br>
<span class="quotelev2">&gt;&gt; it will &quot;barrier&quot; anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I don't run these codes, I would have to defer to those that do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This said, I am not sure if they are running the coupling as two 
</span><br>
<span class="quotelev1">&gt; separate MPI codes or as one code sharing a communications handle or 
</span><br>
<span class="quotelev1">&gt; whatnot else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do agree that letting the data exchange provide a (natural) barrier 
</span><br>
<span class="quotelev1">&gt; makes a great deal of sense, though the codes may not be amenable to 
</span><br>
<span class="quotelev1">&gt; this mode of operations.  Gerry could likely shed light on this.
</span><br>
<p>What we do is to invoke one of several barrier methods.  The two codes 
<br>
we are working with have very different time-steps and different CFL 
<br>
limits, as well as having simplified physics in one vice the other.  Gus 
<br>
is more eloquent than I in his explanation, but I didn't want to dilute 
<br>
his comments with mine.
<br>
<p>Simply, we have to calculate exchange points, and we can 
<br>
programmatically use a barrier call as one of several possible solutions 
<br>
to creating a state where we're waiting for exchange to occur.  Use of 
<br>
MpiBarrier came before I started working on this project and I've not 
<br>
gotten to the point that I'm willing to rewrite it (it's working).
<br>
<p>When coupling ocean and atmosphere models one has to consider the time 
<br>
constants of the media.  We see a time constant of minutes to small 
<br>
numbers of hours to resolve a phenomenon in the atmosphere, while for 
<br>
the ocean, it's 10's of hours to days.  Thus, the timesteps don't 
<br>
oincide often, and when they DO coincide, it's when we want to exchange 
<br>
data.
<br>
<p>With regard to the models in question, WRF is essentially a monolith for 
<br>
th is purpose, for atmosphere, land surface, and tropo/stratosphere.  We 
<br>
run ROMS to incorporate the fluid ocean and sea ice.  The exchange is 
<br>
flux data and wind forcings.  We're running as a climate simulation, 
<br>
meaning there are several explicit conditions that simplify (mostly) our 
<br>
calculations compared to _weather_ simulations.
<br>
<p>Use of a natural barrier would be better but that means it's harder for 
<br>
us to get 100 years of simulation time (or more) accomplished when we 
<br>
have to add natural barriers and restarts.
<br>
<p>gc
<br>
<pre>
-- 
Gerry Creager -- gerry.creager_at_[hidden]
Texas Mesonet -- AATLT, Texas A&amp;M University
Cell: 979.229.5301 Office: 979.458.4020 FAX: 979.862.3983
Office: 1700 Research Parkway Ste 160, TAMU, College Station, TX 77843
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8331.php">Jeff Squyres: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8329.php">Gus Correa: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8324.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8326.php">Eugene Loh: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
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
