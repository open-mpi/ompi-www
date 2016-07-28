<?
$subject_val = "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 13:22:53 2009" -->
<!-- isoreceived="20090305182253" -->
<!-- sent="Thu, 05 Mar 2009 13:22:44 -0500" -->
<!-- isosent="20090305182244" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?" -->
<!-- id="49B01874.7080107_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 13:22:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8330.php">Gerry Creager: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8328.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<li><strong>In reply to:</strong> <a href="8324.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8330.php">Gerry Creager: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All
<br>
<p>Joe Landman wrote:
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
<p>In coupled climate models, both paradigms are used:
<br>
MPMD and SPMD.
<br>
<p>MPMD tends to appear in models that have &quot;components&quot; developed by
<br>
different organizations (ocean comes from one national lab,
<br>
the atmosphere from some other place, etc).
<br>
Short from writing all code from scratch,
<br>
one writes a model &quot;coupler&quot; and modifies the &quot;components&quot;
<br>
to talk to each other using the &quot;coupler&quot; as kind of a translator
<br>
or middle man.
<br>
<p>SPMD in general comes from a single organization,
<br>
and are in many cases the children of a master coding plan
<br>
or &quot;framework&quot;.
<br>
This also includes redesign and adaption of previous codes,
<br>
as nobody writes everything from scratch.
<br>
Disguised within those codes there is always the
<br>
&quot;coupler&quot; middle man anyway.
<br>
<p>So, the choice of MPMD or SPMD
<br>
doesn't seem to be made based on software engineering alone,
<br>
but maybe on a tad of politics,
<br>
a bit of convenience and cost savings
<br>
(who wants or can afford to rewrite all that code from scratch?),
<br>
etc.
<br>
<p>It may be just coincidence or my bias in favor of clusters,
<br>
but I found the MPMD codes better structured,
<br>
less monolithic, and they certainly produce executables
<br>
of smaller size than the SPMD codes, which is a good thing if
<br>
you are running on a cluster with limited RAM per core.
<br>
They also tend to run faster, and tend to
<br>
observe &quot;Jeff's rule&quot; at least in part.
<br>
<p>The current global climate model
<br>
schemes have ocean, atmosphere, sea ice, land processes,
<br>
and a mass/energy/momentum flux coupler.
<br>
These may be 5 separate components, or some parts may be
<br>
merged with another
<br>
(e.g. sea ice being a &quot;module&quot; in the ocean code, or land processes
<br>
integrated with the atmosphere).
<br>
Newer schemes may include the biosphere,
<br>
multi-component atmosphere (with stratospheric processes,
<br>
atmospheric chemistry processes, cloud convection,etc),
<br>
solid earth processes (volcanic eruptions,
<br>
carbon sequestration, etc), and the list goes on and on.
<br>
<p>The flux coupler is a natural barrier (bottleneck?),
<br>
as it coordinates the data exchanges across all model components.
<br>
It is present in both MPMD and, in a somewhat disguised way,
<br>
in SPMD schemes.
<br>
<p>Every single component is actually a domain decomposition code.
<br>
This entails the type of natural synchronization during exchanges of
<br>
data across the sub-domain boundaries,
<br>
as somebody else already mentioned.
<br>
<p>However, even within a single component, say the atmosphere,
<br>
there are various physical processes with different
<br>
time and spatial scales (as noted by Gerry and Joe).
<br>
Those processes require some type of
<br>
synchronization to exchange information
<br>
with other physical processes.
<br>
Moreover, these processes tend to be modeled in a sequential,
<br>
rather than parallel way.
<br>
This is the way we think about them, not only the way we code them.
<br>
E.g. first the atmospheric radiation balance &quot;module&quot;
<br>
does its thing, then the atmospheric thermodynamics &quot;module&quot;
<br>
takes over, then the actual dynamics &quot;module&quot;
<br>
calculates the winds, advects moisture, etc.
<br>
This is a somewhat sequential view of how natural processes occur
<br>
that has plenty of natural barriers/synchronization points built in.
<br>
<p>As for Jeff's rule,
<br>
my observation is that there was a significant movement
<br>
to reduce the use of blocking send/recv
<br>
towards using non-blocking calls,
<br>
towards reducing the number of unnecessary barriers
<br>
(although they were not completely weeded out, of course), etc.
<br>
However, this is on a somewhat small scale of coding.
<br>
This &quot;get rid of barriers&quot; action
<br>
tends to be restricted to each &quot;module&quot;
<br>
that represents a specific physical process.
<br>
This is Jeff's rule put to work.
<br>
It is very beneficial,
<br>
and improves code efficiency a lot.
<br>
<p>However, as Durga noticed, Jeff's rule is perhaps hard to
<br>
apply to the large scale.
<br>
As I mentioned, one reason is because the way we think
<br>
about interacting physical processes is (intrinsically ?)
<br>
somewhat sequential, has (natural or conceptual?) barriers
<br>
embedded on it.
<br>
Another reason may be the way these codes are developed,
<br>
say, whether there should be a code architect wizard who designs
<br>
a master plan, or some form of integration and adaption of
<br>
well proven existing code, or something else.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do agree that letting the data exchange provide a (natural) barrier 
</span><br>
<span class="quotelev1">&gt; makes a great deal of sense, though the codes may not be amenable to 
</span><br>
<span class="quotelev1">&gt; this mode of operations.  Gerry could likely shed light on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8330.php">Gerry Creager: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8328.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<li><strong>In reply to:</strong> <a href="8324.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8330.php">Gerry Creager: "Re: [OMPI users] Any scientific	application	heavilyusing	MPI_Barrier?"</a>
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
