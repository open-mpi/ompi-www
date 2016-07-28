<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 10 10:02:24 2005" -->
<!-- isoreceived="20050310150224" -->
<!-- sent="Thu, 10 Mar 2005 15:58:07 +0100" -->
<!-- isosent="20050310145807" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="[O-MPI users] [Fwd: Re: The case for an MPI ABI]" -->
<!-- id="4230607F.8030608_at_fft.be" -->
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
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-10 09:58:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0013.php">Jeff Squyres: "Re: [O-MPI users] How's it going?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As posted on comp.parallel.mpi, I also wanted to forward this message to 
<br>
users_at_[hidden] because I think it is relavent to the (undoubtly 
<br>
upcoming) mpich2 &lt;-&gt; open-mpi discussion.
<br>
<p>&lt;quote&gt;
<br>
Greg Lindahl wrote:
<br>
<span class="quotelev1">&gt; The first question is: Does an ABI provide enough benefit for people
</span><br>
<span class="quotelev1">&gt; to care? 
</span><br>
<p>I care a _lot_ !
<br>
<p><p><span class="quotelev1">&gt; To care enough to sit on a committee?
</span><br>
<p>Abolutely. Only we're a small SME and thus we need to strategically
<br>
choose the 'fights' that are most important to us. I would really want
<br>
to join but I'm afraid that a small SME as ours can do little against
<br>
the giants that are involved in MPI.
<br>
<p>I sure hope you go ahead with this idea and will certainly follow the
<br>
discussion.
<br>
<p>OTOH I once heard Intel is working on defining a ABI in cooperation with
<br>
the mpich guys. I believe mpich2 also should allow to change the backend
<br>
(specific to the switch) when launching the application. OpenMPI also is
<br>
working on this but OpenMPI and mpich2 will not be compatible however.
<br>
So there are several efforts but now I think it's important to sync them.
<br>
<p><p>Greg Lindahl wrote:
<br>
<span class="quotelev1">&gt; Recently there's been a little chatter on the Beowulf cluster computing
</span><br>
<span class="quotelev1">&gt; mailing list about an MPI ABI, an application *binary* interface, so that
</span><br>
<span class="quotelev1">&gt; programs could automagically be used with any MPI chosen at run-time,
</span><br>
<span class="quotelev1">&gt; instead of today's compile-time choice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first question is: Does an ABI provide enough benefit for people
</span><br>
<span class="quotelev1">&gt; to care? To care enough to sit on a committee?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; If the answer is &quot;yes&quot;, then I think we'll have one. The minimum
</span><br>
<span class="quotelev1">&gt; technical issues revolve around the contents of &lt;mpi.h&gt; and the names
</span><br>
<span class="quotelev1">&gt; of shared libraries. The amount of work for MPICH or OpenMPI to
</span><br>
<span class="quotelev1">&gt; support that part of an ABI is modest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; If we wanted to go farther, I have a strawman proposal which addresses
</span><br>
<span class="quotelev1">&gt; a generic startup procedure which would allow user applications, MPI
</span><br>
<span class="quotelev1">&gt; implementations, and queue systems to all live in peace and harmony.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; This talk, which I gave last week at the OpenIB meeting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; <a href="http://www.openib.org/docs/oib_wkshp_022005/mpi-abi-pathscale-lindahl.pdf">http://www.openib.org/docs/oib_wkshp_022005/mpi-abi-pathscale-lindahl.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; mostly talks about why we need an ABI, who wins and loses as a result
</span><br>
<span class="quotelev1">&gt; of having one, and the pieces that could be in it. Please give it a
</span><br>
<span class="quotelev1">&gt; look.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; -- greg
</span><br>
<p>&lt;/quote&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0013.php">Jeff Squyres: "Re: [O-MPI users] How's it going?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0015.php">Larry Stewart: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
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
