<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  8 16:25:09 2006" -->
<!-- isoreceived="20060908202509" -->
<!-- sent="Fri, 08 Sep 2006 16:25:01 -0400" -->
<!-- isosent="20060908202501" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Distinct Steps" -->
<!-- id="C12749DD.25F98%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49574.129.79.245.233.1157738525.squirrel_at_www.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-08 16:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Josh Hursey: "[MTT users] Distinct Steps"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Josh Hursey: "[MTT users] Distinct Steps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Reply:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/8/06 2:02 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is there a way to separate the Compile Phase with the Testing Phase? I
</span><br>
<span class="quotelev1">&gt; thought there was but it's not obvious to me how to do that.
</span><br>
<p>Yes.  You can specify various switches on the mtt command line (see &quot;mtt
<br>
--help&quot;).  More below.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Say I want to build 2 branches (trunk, v1.2) on an allocation of 1 node.
</span><br>
<span class="quotelev1">&gt; Once that is complete then I want to run the tests on an allocation of N
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<p>You can do something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mtt --mpi-get --mpi-install --test-get --test-build --file
<br>
...whatever... --scratch ...whatever...
<br>
<p>This will download the MPI, install the MPI, get any test sources, and build
<br>
them all against all the MPI's.  Alternatively, you can do:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mtt --no-test-run --file ... --scratch ...
<br>
&nbsp;
<br>
Because really you want to do everything *except* run the tests (right?).
<br>
<p>The only problem with this is that MTT does not yet support chaining well;
<br>
so there's no real notification that the builds have all finished other than
<br>
the mtt client finishes.
<br>
<p><span class="quotelev1">&gt; How to I tell the tests what branches to iterate over and where they are
</span><br>
<span class="quotelev1">&gt; located?
</span><br>
<p>Right now, MTT will do everything in the INI file -- you can't say &quot;only do
<br>
MPI installs A, B, and C&quot; (and assumedly skip some other sections, such as
<br>
D, E, and F).  So it would probably be a PITA, but you could have different
<br>
INI files with different configurations if you need finer-grained control.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; The script I am trying to create would essentually do the following:
</span><br>
<span class="quotelev1">&gt;  srun -N 1 -b mtt-build-phase
</span><br>
<span class="quotelev1">&gt;  wait for it to complete
</span><br>
<span class="quotelev1">&gt;  srun -N 16 -b mtt-testing-phase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or something to that effect so we don't allocate all 16 machines and let
</span><br>
<span class="quotelev1">&gt; them idle while the tests are building.
</span><br>
<p>Yes.  The only bummer is that we currently provide no assistance on the
<br>
&quot;wait for it to complete&quot; step.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Previous message:</strong> <a href="0086.php">Josh Hursey: "[MTT users] Distinct Steps"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Josh Hursey: "[MTT users] Distinct Steps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Reply:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
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
