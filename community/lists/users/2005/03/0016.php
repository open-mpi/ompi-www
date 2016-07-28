<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 10 20:11:02 2005" -->
<!-- isoreceived="20050311011102" -->
<!-- sent="Thu, 10 Mar 2005 17:06:27 -0800" -->
<!-- isosent="20050311010627" -->
<!-- name="Greg Lindahl" -->
<!-- email="lindahl_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]" -->
<!-- id="20050311010627.GA2093_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="42307AB0.5070805_at_sicortex.com" -->
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
<strong>From:</strong> Greg Lindahl (<em>lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-10 20:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0025.php">Neil Storer: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 10, 2005 at 11:49:52AM -0500, Larry Stewart wrote:
<br>
<p><span class="quotelev1">&gt; The presentation ignores the issue of instruction set.  Even within
</span><br>
<span class="quotelev1">&gt; the x86 family we have IA-32, EMT 64, and AMD-64.
</span><br>
<p>Larry,
<br>
<p>Thanks for sending some interesting comments.
<br>
<p>The presentation wasn't intended to be all things to all people. One
<br>
approach would be to start with only x86 and AMD64/EMT64; that would
<br>
cover most of the market. I don't think an ABI has to include all
<br>
processor families to succeed.
<br>
<p><span class="quotelev1">&gt; Beyond that, we have the situation where toolchains have
</span><br>
<span class="quotelev1">&gt; incompatible formats and calling standards, even for the same
</span><br>
<span class="quotelev1">&gt; architecture.  Shall we standardize on GCC? On IFC? (I note EKOPATH
</span><br>
<span class="quotelev1">&gt; is GNU compatible.)
</span><br>
<p>On Linux for x86 and AMD64/EM64T, gcc, icc, and pathcc and C++ are all
<br>
directly compatible.
<br>
<p>The Fortrans are compatible enough that a single MPI library can deal
<br>
with all.  The calling convention stuff happens to work because MPI
<br>
doesn't happen to have any calls that hit the &quot;f2c abi&quot; issue. The
<br>
underscore thing can be handled with multiple symbols for each entry
<br>
point. The command-line startup thing can be worked around by a clever
<br>
hack (tm) that I will be happy to share.
<br>
<p><span class="quotelev1">&gt; Beyond that, an ABI stifles performance.  The compiler (in principle
</span><br>
<span class="quotelev1">&gt; at least) could do interprocedural optimizations between the
</span><br>
<span class="quotelev1">&gt; application and MPI libraries.  Or inlining.
</span><br>
<p>I'm not proposing that an ABI be used 100% of the time. And the only
<br>
commercial compiler publically talking about doing such a thing in
<br>
production is PathScale, so I think I'd be the first to complain if it
<br>
actually hurt us -- it doesn't. We expect that ISVs will likely choose
<br>
the official ABI by default, or the better performance but
<br>
non-official ABI if they want. No one is stifled.
<br>
<p>Another important group who isn't stifled is vendors of new
<br>
interconnect. Today a vendor of a new interconnect can sell easily to
<br>
anyone who recompiles everything, but anyone who doesn't recompile is
<br>
hard. Intel, Scali, Scyld, Verari, and HP are all out trying to
<br>
convince the &quot;we distribute binaries&quot; community that their MPI is the
<br>
right one to standardize on. A new interconnect vendor will lose in a
<br>
world where a closed-source MPI is the standard for the &quot;we distribute
<br>
binary&quot; community.
<br>
<p><span class="quotelev1">&gt; Even just shipping code as binary forces the vendor into poorly
</span><br>
<span class="quotelev1">&gt; optimized code, in order to assure functionality on different models
</span><br>
<span class="quotelev1">&gt; of machines.
</span><br>
<p>How much have you talked to ISVs? Most *like* being able to ship a
<br>
single binary for their application, because they'd rather lose
<br>
performance on a particular processor sub-model than do more testing.
<br>
We are encouraged by AMD to improve our EM64T performance so that ISVs
<br>
can use a single compiler and generate a single binary that's good on
<br>
both AMD64 and EM64T. AMD even has helped with performance engineering!
<br>
<p>But there's no need argue this point, it's not really relevant to the
<br>
MPI ABI issue, and the people who prefer distributing binaries are
<br>
going to continue to do so no matter if there's an MPI ABI or not.
<br>
<p><span class="quotelev1">&gt; Use the source.
</span><br>
<p>If you'd like to use the source, then please continue to do so. The
<br>
people who find the idea of an ABI compelling are the people listed in
<br>
the presentation: ISVs, and open source projects which want to
<br>
distribute flexible binary RPMs because their typical user doesn't
<br>
want to recompile.
<br>
<p>On the flip side, groups such as the OpenMPI project would gain by
<br>
supporting an ABI because they'd be able to run with applications
<br>
&quot;built for MPICH&quot; without having to recompile. The OpenMPI folks may
<br>
not find this compelling; your typical programmer at the national labs
<br>
doesn't mind recompiling. But if you wanted to do a study of whether
<br>
or not OpenMPI improved the performance of some ISV code, I assure you
<br>
that an ABI would make that a lot easier.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0025.php">Neil Storer: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
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
