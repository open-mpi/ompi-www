<?
$subject_val = "Re: [OMPI users] mpicc -showme:compile output (possible bug report)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 00:36:58 2008" -->
<!-- isoreceived="20080417043658" -->
<!-- sent="Thu, 17 Apr 2008 14:36:44 +1000" -->
<!-- isosent="20080417043644" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc -showme:compile output (possible bug report)" -->
<!-- id="1208407004.5376.0.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="96B671F5-74B5-4402-83EB-565FCC181F0E_at_cisco.com" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 00:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5406.php">Rodriguez, Jose: "[OMPI users] fortran90 and c++ wrappers don't work"</a>
<li><strong>Previous message:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>In reply to:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5407.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5407.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Given that discussion, might I suggest an (untested) workaround would be
<br>
to --prefix OpenMPI into a non-standard location?
<br>
<p><p><p>On Wed, 2008-04-16 at 13:03 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 16, 2008, at 9:38 AM, Crni Gorac wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpicc (and friends) typically do not output -I only for &quot;special&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; directories, such as /usr/include, because adding -I/usr/include may
</span><br>
<span class="quotelev3">&gt; &gt;&gt; subvert the compiler's normal include directory search order.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On my machine, &quot;mpicc -showme:compile&quot; outputs  &quot;-pthread&quot; only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would seem to indicate that OMPI is specifically choosing not to  
</span><br>
<span class="quotelev1">&gt; display the -I/whatever flag, most likely because it would have been - 
</span><br>
<span class="quotelev1">&gt; I/usr/include (or similar).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I guess CMake is modeling MPI recognizing after MPICH, and that &quot;-I&quot;
</span><br>
<span class="quotelev2">&gt; &gt; flags appears in &quot;mpicc -showme:compile&quot; output there; tried to check
</span><br>
<span class="quotelev2">&gt; &gt; that, but latest MPICH (1.0.7) won't even compile on my machine...  In
</span><br>
<span class="quotelev2">&gt; &gt; any case, I reported the issue to the CMake bug tracker too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.  If OMPI is installed with a prefix of /usr, I don't anticipate us  
</span><br>
<span class="quotelev1">&gt; changing this behavior -- this exception is specifically implemented  
</span><br>
<span class="quotelev1">&gt; to not subvert the normal compiler include directory search order.   
</span><br>
<span class="quotelev1">&gt; Note, too, that the same issue will occur with -L in the --showme:link  
</span><br>
<span class="quotelev1">&gt; line -- we don't display -L/usr/lib for the same reasons as described  
</span><br>
<span class="quotelev1">&gt; above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5406.php">Rodriguez, Jose: "[OMPI users] fortran90 and c++ wrappers don't work"</a>
<li><strong>Previous message:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>In reply to:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5407.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Reply:</strong> <a href="5407.php">Crni Gorac: "Re: [OMPI users] mpicc -showme:compile output (possible bug report)"</a>
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
