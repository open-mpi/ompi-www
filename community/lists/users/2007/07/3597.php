<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul  8 20:41:05 2007" -->
<!-- isoreceived="20070709004105" -->
<!-- sent="Sun, 8 Jul 2007 20:40:44 -0400" -->
<!-- isosent="20070709004044" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I run MPI and non MPI programs together" -->
<!-- id="200707082040.45058.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="001301c7c1bf$2e196900$0380a8c0_at_EMU" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-08 20:40:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3598.php">Neville Clark: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Previous message:</strong> <a href="3596.php">Neville Clark: "[OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>In reply to:</strong> <a href="3596.php">Neville Clark: "[OMPI users] Can I run MPI and non MPI programs together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3598.php">Neville Clark: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Reply:</strong> <a href="3598.php">Neville Clark: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sunday 08 July 2007 08:22:04 pm Neville Clark wrote:
<br>
<span class="quotelev1">&gt; I have openmpi installed and running, but have a need to run non mpi
</span><br>
<span class="quotelev1">&gt; programs (3rd party software for which I don't have the source) together
</span><br>
<span class="quotelev1">&gt; with mpi programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have managed to simplify the problem down to the following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; JobA
</span><br>
<span class="quotelev1">&gt; int main(.)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Starting JobA\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI::Init();
</span><br>
<span class="quotelev1">&gt;     printf(&quot;JobA Init done\n&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; JobB
</span><br>
<span class="quotelev1">&gt; Int main(.)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Starting JobB\n&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And running with
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl tcp,self,sm -np 1 -host lyre JobA  : -np 1 -host lyre JobB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output is the two messages &quot;Starting .&quot; message and then hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would appear that the MPI::Init() is waiting for all Ranks to call
</span><br>
<span class="quotelev1">&gt; MPI::Init() before continuing.
</span><br>
This is correct. You cannot run both mpi and non-mpi processes like this 
<br>
together. The best you can do is run mpirun twice.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note the above works as expected if we run either two JobAs or two
</span><br>
<span class="quotelev1">&gt; JobBs. Only have a problem if there is a mixture of JobAs and JobBs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way around this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance Neville
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3598.php">Neville Clark: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Previous message:</strong> <a href="3596.php">Neville Clark: "[OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>In reply to:</strong> <a href="3596.php">Neville Clark: "[OMPI users] Can I run MPI and non MPI programs together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3598.php">Neville Clark: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Reply:</strong> <a href="3598.php">Neville Clark: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
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
