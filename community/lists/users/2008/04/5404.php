<?
$subject_val = "Re: [OMPI users] mpicc -showme:compile output (possible bug report)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 13:03:56 2008" -->
<!-- isoreceived="20080416170356" -->
<!-- sent="Wed, 16 Apr 2008 13:03:37 -0400" -->
<!-- isosent="20080416170337" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc -showme:compile output (possible bug report)" -->
<!-- id="96B671F5-74B5-4402-83EB-565FCC181F0E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c02b565a0804160638o79a62cf2hd8b47b0cff89d72d_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-16 13:03:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5405.php">Terry Frankcombe: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5403.php">Mark Kosmowski: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>In reply to:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5405.php">Terry Frankcombe: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5405.php">Terry Frankcombe: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2008, at 9:38 AM, Crni Gorac wrote:
<br>
<span class="quotelev2">&gt;&gt; mpicc (and friends) typically do not output -I only for &quot;special&quot;
</span><br>
<span class="quotelev2">&gt;&gt; directories, such as /usr/include, because adding -I/usr/include may
</span><br>
<span class="quotelev2">&gt;&gt; subvert the compiler's normal include directory search order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On my machine, &quot;mpicc -showme:compile&quot; outputs  &quot;-pthread&quot; only.
</span><br>
<p>This would seem to indicate that OMPI is specifically choosing not to  
<br>
display the -I/whatever flag, most likely because it would have been - 
<br>
I/usr/include (or similar).
<br>
<p><span class="quotelev1">&gt; I guess CMake is modeling MPI recognizing after MPICH, and that &quot;-I&quot;
</span><br>
<span class="quotelev1">&gt; flags appears in &quot;mpicc -showme:compile&quot; output there; tried to check
</span><br>
<span class="quotelev1">&gt; that, but latest MPICH (1.0.7) won't even compile on my machine...  In
</span><br>
<span class="quotelev1">&gt; any case, I reported the issue to the CMake bug tracker too.
</span><br>
<p><p>Ok.  If OMPI is installed with a prefix of /usr, I don't anticipate us  
<br>
changing this behavior -- this exception is specifically implemented  
<br>
to not subvert the normal compiler include directory search order.   
<br>
Note, too, that the same issue will occur with -L in the --showme:link  
<br>
line -- we don't display -L/usr/lib for the same reasons as described  
<br>
above.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5405.php">Terry Frankcombe: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5403.php">Mark Kosmowski: "Re: [OMPI users] open mpi on smp"</a>
<li><strong>In reply to:</strong> <a href="5402.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5405.php">Terry Frankcombe: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5405.php">Terry Frankcombe: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
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
