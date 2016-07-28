<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 13 09:41:45 2006" -->
<!-- isoreceived="20061213144145" -->
<!-- sent="Wed, 13 Dec 2006 07:41:38 -0700" -->
<!-- isosent="20061213144138" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="C1A55F32.666A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F6103_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-13 09:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2359.php">Allen Barnett: "[OMPI users] Relocating an Installation"</a>
<li><strong>Previous message:</strong> <a href="2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/13/06 7:33 AM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Being consistent makes sense to me.  Question though, if we set:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmaps_base_schedule_policy=node
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would that still map -npernode allocations on a bynode basis too?  I
</span><br>
<span class="quotelev1">&gt; think it should.
</span><br>
<p>Sure! All the &quot;-bynode&quot; command line option does, actually, is set that mca
<br>
param... :-)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's funny is how the old mpirun w/ rsh or ssh from long ago in mpich,
</span><br>
<span class="quotelev1">&gt; used to basically map by node mapping, and we've come to see us mapping
</span><br>
<span class="quotelev1">&gt; byslot now.  Dang those smp systems. :-)
</span><br>
<p>Ja, ist definitely confusing...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -cdm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, December 13, 2006 6:57 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Pernode request
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/12/06 9:18 AM, &quot;Maestas, Christopher Daniel&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;cdmaest_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I figured I should of run an mpi program ...here's what it
</span><br>
<span class="quotelev2">&gt;&gt; does (seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be by-X-slot style):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ /apps/x86_64/system/mpiexec-0.82/bin/mpiexec -npernode 2 mpi_hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node an41 with rank 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node an41 with rank 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node an39 with rank 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node an40 with rank 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node an38 with rank 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node an39 with rank 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node an38 with rank 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node an40 with rank 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Clearly mapping by slot here. Question: our default mapping
</span><br>
<span class="quotelev2">&gt;&gt; mode is by slot,
</span><br>
<span class="quotelev2">&gt;&gt; as this example also shows. I could turn the npernode
</span><br>
<span class="quotelev2">&gt;&gt; behavior around from
</span><br>
<span class="quotelev2">&gt;&gt; what I previously described - we could default to mapping by
</span><br>
<span class="quotelev2">&gt;&gt; slot (as we do
</span><br>
<span class="quotelev2">&gt;&gt; normally, and in concert with what mpiexec appears to be
</span><br>
<span class="quotelev2">&gt;&gt; doing), and let
</span><br>
<span class="quotelev2">&gt;&gt; users provide the &quot;-bynode&quot; option to change to mapping by node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This wouldn't have any affect on the pernode behavior since
</span><br>
<span class="quotelev2">&gt;&gt; that option only
</span><br>
<span class="quotelev2">&gt;&gt; maps one proc/node anyway (so mapping by slot or by node
</span><br>
<span class="quotelev2">&gt;&gt; yields the same
</span><br>
<span class="quotelev2">&gt;&gt; result).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me this would be more consistent. Make sense?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2359.php">Allen Barnett: "[OMPI users] Relocating an Installation"</a>
<li><strong>Previous message:</strong> <a href="2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
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
