<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul  8 20:56:36 2007" -->
<!-- isoreceived="20070709005636" -->
<!-- sent="Mon, 9 Jul 2007 10:56:28 +1000" -->
<!-- isosent="20070709005628" -->
<!-- name="Neville Clark" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I run MPI and non MPI programs together" -->
<!-- id="000001c7c1c3$fcacb930$0380a8c0_at_EMU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200707082040.45058.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Neville Clark (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-08 20:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3599.php">Berit Hinnemann: "[OMPI users] behi is out of the office."</a>
<li><strong>Previous message:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>In reply to:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
dah, why did I not think of that? So simple.
<br>
Thanks again.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Tim Prins
</span><br>
<span class="quotelev1">&gt; Sent: Monday, 9 July 2007 10:41 AM
</span><br>
<span class="quotelev1">&gt; To: nev_at_[hidden]; Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can I run MPI and non MPI programs together
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sunday 08 July 2007 08:22:04 pm Neville Clark wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have openmpi installed and running, but have a need to run non mpi
</span><br>
<span class="quotelev2">&gt; &gt; programs (3rd party software for which I don't have the source) together
</span><br>
<span class="quotelev2">&gt; &gt; with mpi programs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have managed to simplify the problem down to the following
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; JobA
</span><br>
<span class="quotelev2">&gt; &gt; int main(.)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;Starting JobA\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI::Init();
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;JobA Init done\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; JobB
</span><br>
<span class="quotelev2">&gt; &gt; Int main(.)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     printf(&quot;Starting JobB\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And running with
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -mca btl tcp,self,sm -np 1 -host lyre JobA  : -np 1 -host lyre
</span><br>
<span class="quotelev1">&gt; JobB
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output is the two messages &quot;Starting .&quot; message and then hangs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It would appear that the MPI::Init() is waiting for all Ranks to call
</span><br>
<span class="quotelev2">&gt; &gt; MPI::Init() before continuing.
</span><br>
<span class="quotelev1">&gt; This is correct. You cannot run both mpi and non-mpi processes like this
</span><br>
<span class="quotelev1">&gt; together. The best you can do is run mpirun twice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please note the above works as expected if we run either two JobAs or
</span><br>
<span class="quotelev1">&gt; two
</span><br>
<span class="quotelev2">&gt; &gt; JobBs. Only have a problem if there is a mixture of JobAs and JobBs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way around this problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance Neville
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
<li><strong>Next message:</strong> <a href="3599.php">Berit Hinnemann: "[OMPI users] behi is out of the office."</a>
<li><strong>Previous message:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>In reply to:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
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
