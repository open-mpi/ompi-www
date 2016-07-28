<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 10 11:54:08 2005" -->
<!-- isoreceived="20050310165408" -->
<!-- sent="Thu, 10 Mar 2005 11:49:52 -0500" -->
<!-- isosent="20050310164952" -->
<!-- name="Larry Stewart" -->
<!-- email="larry.stewart_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]" -->
<!-- id="42307AB0.5070805_at_sicortex.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4230607F.8030608_at_fft.be" -->
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
<strong>From:</strong> Larry Stewart (<em>larry.stewart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-10 11:49:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Toon Knapen: "[O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0014.php">Toon Knapen: "[O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Toon Knapen wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg Lindahl wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.openib.org/docs/oib_wkshp_022005/mpi-abi-pathscale-lindahl.pdf">http://www.openib.org/docs/oib_wkshp_022005/mpi-abi-pathscale-lindahl.pdf</a> 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mostly talks about why we need an ABI, who wins and loses as a result
</span><br>
<span class="quotelev2">&gt;&gt; of having one, and the pieces that could be in it. Please give it a
</span><br>
<span class="quotelev2">&gt;&gt; look.
</span><br>
The presentation ignores the issue of instruction set.  Even within the 
<br>
x86 family
<br>
we have IA-32, EMT 64, and AMD-64.
<br>
<p>Beyond that, there are IA-64 and PowerPC clusters with interesting 
<br>
market share, plus the
<br>
odd PlayStation MIPS machines.
<br>
<p>Beyond that, we have the situation where toolchains have incompatible 
<br>
formats and
<br>
calling standards, even for the same architecture.  Shall we standardize 
<br>
on GCC? On
<br>
IFC? (I note EKOPATH is GNU compatible.)
<br>
<p>Beyond that, an ABI stifles performance.  The compiler (in principle at 
<br>
least)
<br>
could do interprocedural optimizations between the application and MPI 
<br>
libraries.
<br>
Or inlining.
<br>
<p>Even just shipping code as binary forces the vendor into poorly 
<br>
optimized code, in order
<br>
to assure functionality on different models of machines.  RPMs are not 
<br>
usually compiled
<br>
with -O3 -pipe -fomit-frame-pointer, for example.  And what about -g?  
<br>
Take a look
<br>
at the way gentoo systems regularly trounce other distributions in 
<br>
performance.
<br>
Optimization makes a difference.
<br>
<p>Use the source.
<br>
<p>-Larry
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Toon Knapen: "[O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0014.php">Toon Knapen: "[O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
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
