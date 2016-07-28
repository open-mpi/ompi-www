<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 06:37:01 2005" -->
<!-- isoreceived="20051012113701" -->
<!-- sent="Wed, 12 Oct 2005 13:36:22 +0200" -->
<!-- isosent="20051012113622" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf" -->
<!-- id="434CF536.1090307_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1129115113.10323.160.camel_at_localhost.localdomain" -->
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
<strong>Date:</strong> 2005-10-12 06:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Toon Knapen: "[O-MPI users] MorphMPI based on fortran itf (was: MPI ABI)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0184.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe reply:</strong> <a href="0184.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe reply:</strong> <a href="0199.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; The second problem is that of linking, most MPI vendors already have
</span><br>
<span class="quotelev1">&gt; MPI_Init in their own library, having another library with it's own
</span><br>
<span class="quotelev1">&gt; wrapper MPI_Init in it is going to lead to a whole world of pain to do
</span><br>
<span class="quotelev1">&gt; with dynamic linking and symbol resolution.  This is not something that
</span><br>
<span class="quotelev1">&gt; has ever been done before to the best of my knowledge and there is a
</span><br>
<span class="quotelev1">&gt; very good reason for that.
</span><br>
<p>Right but the header file of the MorphMPI library could define
<br>
MorphMPI_Init for instance to avoid this. Additionally it could generate
<br>
the necessary macro's (*if* the user requests this) to automatically
<br>
convert all it's calls to MPI_Init to MorphMPI_Init. Of course one
<br>
should be sure that this is done in the whole application or not at all
<br>
but there are easy ways to verify that.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thirdly is the performance issue, any MPI vendor worth his salt tries
</span><br>
<span class="quotelev1">&gt; very hard to reduce the number of function calls and library's between
</span><br>
<span class="quotelev1">&gt; the application and the network, adding another one is a step in the
</span><br>
<span class="quotelev1">&gt; wrong direction.  This may not matter so much for ethernet clusters but
</span><br>
<span class="quotelev1">&gt; certainly for some people the software stack accounts for a surprising
</span><br>
<span class="quotelev1">&gt; percentage of &quot;network&quot; latency.
</span><br>
<p>Do you really think one extra function call would make a difference to
<br>
the level of being unacceptable? If that is the case MPI libraries would
<br>
only be available as archives instead of dynamic libraries because a
<br>
call to a dynamic library also costs an extra dereference.
<br>
<p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Toon Knapen: "[O-MPI users] MorphMPI based on fortran itf (was: MPI ABI)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0184.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe reply:</strong> <a href="0184.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Maybe reply:</strong> <a href="0199.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
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
