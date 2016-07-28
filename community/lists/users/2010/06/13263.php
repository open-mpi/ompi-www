<?
$subject_val = "[OMPI users] Collective component priorities and sm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 00:43:54 2010" -->
<!-- isoreceived="20100609044354" -->
<!-- sent="Wed, 09 Jun 2010 00:43:43 -0400" -->
<!-- isosent="20100609044343" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Collective component priorities and sm" -->
<!-- id="4C0F1BFF.4060405_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Collective component priorities and sm<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 00:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13264.php">Grzegorz Maj: "[OMPI users] Specifying slots in rankfile"</a>
<li><strong>Previous message:</strong> <a href="13262.php">Gus Correa: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13270.php">Jeff Squyres: "Re: [OMPI users] Collective component priorities and sm"</a>
<li><strong>Reply:</strong> <a href="13270.php">Jeff Squyres: "Re: [OMPI users] Collective component priorities and sm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI experts
<br>
<p>I am confused about the role and values of priorities set to
<br>
the OpenMPI collective components, and why the shared memory (sm)
<br>
collective component disqualifies itself (apparently by default).
<br>
I describe the problem, then ask a some questions, if you have the
<br>
patience to read.
<br>
<p>I am using OpenMPI 1.4.2 with default MCA settings.
<br>
I am running the job in a single node.
<br>
I use &quot;mpirun -mca btl sm,self&quot;, since this is a single-node job.
<br>
<p>In my naive view, I expected all MPI functions to use shared memory.
<br>
However, here are selected lines from the
<br>
verbose output of my mpirun command,
<br>
which tell what happens better than I could do:
<br>
<p>*************
<br>
<p>btl_self_priority=0 (default value)
<br>
btl_sm_priority=0 (default value)
<br>
<p>[Note that 'sm' and 'self' 'btl' priorities
<br>
are tied at zero (by default).]
<br>
<p>coll_basic_priority=10 (default value)
<br>
coll_hierarch_priority=0 (default value)
<br>
coll_inter_priority=40 (default value)
<br>
coll_self_priority=75 (default value)
<br>
coll_sm_priority=0 (default value)
<br>
coll_sync_priority=50 (default value)
<br>
coll_tuned_priority=30 (default value)
<br>
<p>[Note that 'coll' priorities are *not* tied,
<br>
'self' is maximum (75), and 'sm' is minimum (0).]
<br>
<p>coll:sm:comm_query (0/MPI_COMM_WORLD): priority too low; disqualifying 
<br>
myself
<br>
coll:sm:comm_query (3/MPI_COMMUNICATOR 3): priority too low; 
<br>
disqualifying myself
<br>
<p>[Therefore, 'sm' seems to give up working in collectives ... :( ]
<br>
<p>coll:base:comm_select: Checking all available modules
<br>
coll:base:comm_select: component available: basic, priority: 10
<br>
coll:base:comm_select: component not available: hierarch
<br>
coll:base:comm_select: component not available: inter
<br>
coll:base:comm_select: component not available: self
<br>
coll:base:comm_select: component not available: sm
<br>
coll:base:comm_select: component available: sync, priority: 50
<br>
coll:base:comm_select: component available: tuned, priority: 30
<br>
coll:base:comm_select: Checking all available modules
<br>
coll:base:comm_select: component available: basic, priority: 10
<br>
coll:base:comm_select: component not available: hierarch
<br>
coll:base:comm_select: component not available: inter
<br>
coll:base:comm_select: component available: self, priority: 75
<br>
<p>[Eventually 'sm', 'inter', and 'hierarch' seem to go out of business,
<br>
whereas 'basic', 'sync' and 'tuned' hang in there.
<br>
It is awkward that 'self' claims both to
<br>
be available and not available!]
<br>
<p>So, who's in first?
<br>
Self, basic, other?
<br>
<p>*************
<br>
<p>I confess I am in complete confusion.
<br>
<p>My naive questions:
<br>
<p>1) Are the &quot;coll&quot; priorities above (default values) the best choices
<br>
when I run in a single node, or were they chosen for a general
<br>
situation when the job runs across node boundaries?
<br>
<p>2) Why does &quot;self&quot; have the largest value (75)?
<br>
<p>3) Does it mean that all collectives will use the
<br>
self/loopback mechanism for communication?
<br>
How about 'basic' and the rest of the gang with smaller priorities?
<br>
<p>4) Is it a good idea to set the 'sm' priority to a value
<br>
larger than 75 (to beat &quot;self&quot; and take over the collective functions)?
<br>
<p>(I am trying it right now.)
<br>
<p>5) In this case, will the collectives only use &quot;sm&quot;?
<br>
<p>6) Will this improve or degrade performance ?
<br>
<p>7) Is there any literature where I can learn
<br>
more about these OpenMPI collective priorities?
<br>
<p>(I couldn't find anything about it on the FAQs.
<br>
Actually, a group of FAQ about collectives would be very helpful.)
<br>
<p>Thank you,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13264.php">Grzegorz Maj: "[OMPI users] Specifying slots in rankfile"</a>
<li><strong>Previous message:</strong> <a href="13262.php">Gus Correa: "Re: [OMPI users] Res:  Res:  Res:  Res:  Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13270.php">Jeff Squyres: "Re: [OMPI users] Collective component priorities and sm"</a>
<li><strong>Reply:</strong> <a href="13270.php">Jeff Squyres: "Re: [OMPI users] Collective component priorities and sm"</a>
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
