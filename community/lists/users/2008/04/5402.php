<?
$subject_val = "Re: [OMPI users] mpicc -showme:compile output (possible bug report)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 09:38:36 2008" -->
<!-- isoreceived="20080416133836" -->
<!-- sent="Wed, 16 Apr 2008 15:38:30 +0200" -->
<!-- isosent="20080416133830" -->
<!-- name="Crni Gorac" -->
<!-- email="cgorac_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc -showme:compile output (possible bug report)" -->
<!-- id="c02b565a0804160638o79a62cf2hd8b47b0cff89d72d_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="90F3790B-4871-4365-9C26-1AE91D547D90_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc -showme:compile output (possible bug report)<br>
<strong>From:</strong> Crni Gorac (<em>cgorac_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-16 09:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5403.php">Mark Kosmowski: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>Previous message:</strong> <a href="5401.php">Jozef K&#225;&#232;er: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>In reply to:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 16, 2008 at 2:18 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; What exactly does mpicc --showme:compile output?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpicc (and friends) typically do not output -I only for &quot;special&quot;
</span><br>
<span class="quotelev1">&gt;  directories, such as /usr/include, because adding -I/usr/include may
</span><br>
<span class="quotelev1">&gt;  subvert the compiler's normal include directory search order.
</span><br>
<p>On my machine, &quot;mpicc -showme:compile&quot; outputs  &quot;-pthread&quot; only.
<br>
<p>I guess CMake is modeling MPI recognizing after MPICH, and that &quot;-I&quot;
<br>
flags appears in &quot;mpicc -showme:compile&quot; output there; tried to check
<br>
that, but latest MPICH (1.0.7) won't even compile on my machine...  In
<br>
any case, I reported the issue to the CMake bug tracker too.
<br>
<p>Regards.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5403.php">Mark Kosmowski: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>Previous message:</strong> <a href="5401.php">Jozef K&#225;&#232;er: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>In reply to:</strong> <a href="5400.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
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
