<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 13 09:33:36 2006" -->
<!-- isoreceived="20061213143336" -->
<!-- sent="Wed, 13 Dec 2006 07:33:26 -0700" -->
<!-- isosent="20061213143326" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F6103_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Pernode request" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-13 09:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2358.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2356.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2358.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2358.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Being consistent makes sense to me.  Question though, if we set:
<br>
<pre>
---
OMPI_MCA_rmaps_base_schedule_policy=node
---
Would that still map -npernode allocations on a bynode basis too?  I
think it should.
What's funny is how the old mpirun w/ rsh or ssh from long ago in mpich,
used to basically map by node mapping, and we've come to see us mapping
byslot now.  Dang those smp systems. :-)
-cdm
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] 
&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
&gt; Sent: Wednesday, December 13, 2006 6:57 AM
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] Pernode request
&gt; 
&gt; 
&gt; 
&gt; 
&gt; On 12/12/06 9:18 AM, &quot;Maestas, Christopher Daniel&quot; 
&gt; &lt;cdmaest_at_[hidden]&gt;
&gt; wrote:
&gt; 
&gt; &gt; Ralph,
&gt; &gt; 
&gt; &gt; I figured I should of run an mpi program ...here's what it 
&gt; does (seems
&gt; &gt; to be by-X-slot style):
&gt; &gt; ---
&gt; &gt; $ /apps/x86_64/system/mpiexec-0.82/bin/mpiexec -npernode 2 mpi_hello
&gt; &gt; Hello, I am node an41 with rank 0
&gt; &gt; Hello, I am node an41 with rank 1
&gt; &gt; Hello, I am node an39 with rank 4
&gt; &gt; Hello, I am node an40 with rank 2
&gt; &gt; Hello, I am node an38 with rank 6
&gt; &gt; Hello, I am node an39 with rank 5
&gt; &gt; Hello, I am node an38 with rank 7
&gt; &gt; Hello, I am node an40 with rank 3
&gt; &gt; ---
&gt; 
&gt; Clearly mapping by slot here. Question: our default mapping 
&gt; mode is by slot,
&gt; as this example also shows. I could turn the npernode 
&gt; behavior around from
&gt; what I previously described - we could default to mapping by 
&gt; slot (as we do
&gt; normally, and in concert with what mpiexec appears to be 
&gt; doing), and let
&gt; users provide the &quot;-bynode&quot; option to change to mapping by node.
&gt; 
&gt; This wouldn't have any affect on the pernode behavior since 
&gt; that option only
&gt; maps one proc/node anyway (so mapping by slot or by node 
&gt; yields the same
&gt; result).
&gt; 
&gt; It seems to me this would be more consistent. Make sense?
&gt; Ralph
&gt; 
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2358.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2356.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2358.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2358.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
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
