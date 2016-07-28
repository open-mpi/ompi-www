<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 16:51:57 2014" -->
<!-- isoreceived="20140514205157" -->
<!-- sent="Wed, 14 May 2014 16:51:56 -0400" -->
<!-- isosent="20140514205156" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="5373D76C.4050000_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5373D135.9020600_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 16:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24361.php">Jack Stalnaker: "[OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>Previous message:</strong> <a href="24359.php">Maxime Boissonneault: "[OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24359.php">Maxime Boissonneault: "[OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24362.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24362.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/14/2014 04:25 PM, Maxime Boissonneault wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I was compiling OpenMPI 1.8.1 today and I noticed that pretty much every
</span><br>
<span class="quotelev1">&gt; single scheduler has its support enabled by default at configure (except
</span><br>
<span class="quotelev1">&gt; the one I need, which is Torque). Is there a reason for that ? Why not
</span><br>
<span class="quotelev1">&gt; have a single scheduler enabled and require to specify it at configure
</span><br>
<span class="quotelev1">&gt; time ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any reason for me to build with loadlever or slurm if we're
</span><br>
<span class="quotelev1">&gt; using torque ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime Boisssonneault
</span><br>
<p>Hi Maxime
<br>
<p>I haven't tried 1.8.1 yet.
<br>
However, for all previous versions of OMPI I tried, up to 1.6.5,
<br>
all it took to configure it with Torque support was to point configure
<br>
to the Torque installation directory (which is non-standard in my case):
<br>
<p>--with-tm=/opt/torque/bla/bla
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24361.php">Jack Stalnaker: "[OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>Previous message:</strong> <a href="24359.php">Maxime Boissonneault: "[OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24359.php">Maxime Boissonneault: "[OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24362.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24362.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
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
