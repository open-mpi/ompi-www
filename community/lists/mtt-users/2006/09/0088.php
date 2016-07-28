<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 10 08:39:55 2006" -->
<!-- isoreceived="20060910123955" -->
<!-- sent="Sun, 10 Sep 2006 08:39:51 -0400" -->
<!-- isosent="20060910123951" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Distinct Steps" -->
<!-- id="9F320D2C-7C5D-48A3-99B4-91656B66E3BD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C12749DD.25F98%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-10 08:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0089.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Previous message:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>In reply to:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0089.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Reply:</strong> <a href="0089.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2006, at 4:25 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On 9/8/06 2:02 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to separate the Compile Phase with the Testing  
</span><br>
<span class="quotelev2">&gt;&gt; Phase? I
</span><br>
<span class="quotelev2">&gt;&gt; thought there was but it's not obvious to me how to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  You can specify various switches on the mtt command line (see  
</span><br>
<span class="quotelev1">&gt; &quot;mtt
</span><br>
<span class="quotelev1">&gt; --help&quot;).  More below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Say I want to build 2 branches (trunk, v1.2) on an allocation of 1  
</span><br>
<span class="quotelev2">&gt;&gt; node.
</span><br>
<span class="quotelev2">&gt;&gt; Once that is complete then I want to run the tests on an  
</span><br>
<span class="quotelev2">&gt;&gt; allocation of N
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can do something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mtt --mpi-get --mpi-install --test-get --test-build --file
</span><br>
<span class="quotelev1">&gt; ...whatever... --scratch ...whatever...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will download the MPI, install the MPI, get any test sources,  
</span><br>
<span class="quotelev1">&gt; and build
</span><br>
<span class="quotelev1">&gt; them all against all the MPI's.  Alternatively, you can do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mtt --no-test-run --file ... --scratch ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because really you want to do everything *except* run the tests  
</span><br>
<span class="quotelev1">&gt; (right?).
</span><br>
<p>Awesome that's what I needed. Seems to be working great.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only problem with this is that MTT does not yet support  
</span><br>
<span class="quotelev1">&gt; chaining well;
</span><br>
<span class="quotelev1">&gt; so there's no real notification that the builds have all finished  
</span><br>
<span class="quotelev1">&gt; other than
</span><br>
<span class="quotelev1">&gt; the mtt client finishes.
</span><br>
<p>That level of granularity is fine. I was able to script around it  
<br>
properly.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How to I tell the tests what branches to iterate over and where  
</span><br>
<span class="quotelev2">&gt;&gt; they are
</span><br>
<span class="quotelev2">&gt;&gt; located?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now, MTT will do everything in the INI file -- you can't say  
</span><br>
<span class="quotelev1">&gt; &quot;only do
</span><br>
<span class="quotelev1">&gt; MPI installs A, B, and C&quot; (and assumedly skip some other sections,  
</span><br>
<span class="quotelev1">&gt; such as
</span><br>
<span class="quotelev1">&gt; D, E, and F).  So it would probably be a PITA, but you could have  
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; INI files with different configurations if you need finer-grained  
</span><br>
<span class="quotelev1">&gt; control.
</span><br>
<p>Yea that's what I currently have, I was just wondering if there was a  
<br>
more elegant way.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The script I am trying to create would essentually do the following:
</span><br>
<span class="quotelev2">&gt;&gt;  srun -N 1 -b mtt-build-phase
</span><br>
<span class="quotelev2">&gt;&gt;  wait for it to complete
</span><br>
<span class="quotelev2">&gt;&gt;  srun -N 16 -b mtt-testing-phase
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or something to that effect so we don't allocate all 16 machines  
</span><br>
<span class="quotelev2">&gt;&gt; and let
</span><br>
<span class="quotelev2">&gt;&gt; them idle while the tests are building.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  The only bummer is that we currently provide no assistance on  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; &quot;wait for it to complete&quot; step.  :-\
</span><br>
<p>That's alright, some simple locks and some other logic did the trick  
<br>
here.
<br>
<p>Another question or two.
<br>
<p>- Does MTT support Multiple clients running over the same build tree?  
<br>
For example I have a script that does:
<br>
&nbsp;&nbsp;&nbsp;&lt;snip&gt;
<br>
&nbsp;&nbsp;&nbsp;srun -N 1 -b mtt-build-phase
<br>
&nbsp;&nbsp;&nbsp;wait for it to complete
<br>
&nbsp;&nbsp;&nbsp;srun -N 8 -b mtt-testing-phase
<br>
&nbsp;&nbsp;&nbsp;srun -N 16 -b mtt-testing-phase
<br>
&nbsp;&nbsp;&nbsp;srun -N 32 -b mtt-testing-phase
<br>
&nbsp;&nbsp;&nbsp;&lt;/snip&gt;
<br>
&nbsp;&nbsp;&nbsp;I assume it doesn't, but thought I would ask.
<br>
<p>- Also does MTT support the serialization of the above script? As in:
<br>
&nbsp;&nbsp;&nbsp;&lt;snip&gt;
<br>
&nbsp;&nbsp;&nbsp;srun -N 1 -b mtt-build-phase
<br>
&nbsp;&nbsp;&nbsp;wait for it to complete
<br>
&nbsp;&nbsp;&nbsp;srun -N 8 -b mtt-testing-phase
<br>
&nbsp;&nbsp;&nbsp;wait for it to complete
<br>
&nbsp;&nbsp;&nbsp;srun -N 16 -b mtt-testing-phase
<br>
&nbsp;&nbsp;&nbsp;wait for it to complete
<br>
&nbsp;&nbsp;&nbsp;srun -N 32 -b mtt-testing-phase
<br>
&nbsp;&nbsp;&nbsp;wait for it to complete
<br>
&nbsp;&nbsp;&nbsp;&lt;/snip&gt;
<br>
<p><p>Thanks for all your help,
<br>
Josh
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0089.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Previous message:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>In reply to:</strong> <a href="0087.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0089.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
<li><strong>Reply:</strong> <a href="0089.php">Jeff Squyres: "Re: [MTT users] Distinct Steps"</a>
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
