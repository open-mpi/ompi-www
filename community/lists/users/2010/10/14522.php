<?
$subject_val = "Re: [OMPI users] Question about MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 06:17:39 2010" -->
<!-- isoreceived="20101021101739" -->
<!-- sent="Thu, 21 Oct 2010 06:17:36 -0400" -->
<!-- isosent="20101021101736" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Barrier" -->
<!-- id="B32F6EEB-1725-413F-B5C5-B9B26FA1058F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=ng2qYwsVKub=XZG5QtLeia37NTOvz5jeCURf=_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about MPI_Barrier<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 06:17:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14523.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14521.php">Siegmar Gross: "[OMPI users] some warnings and failures building and testing openmpi-1.5"</a>
<li><strong>In reply to:</strong> <a href="14512.php">Storm Zhang: "[OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14527.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14527.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2010, at 5:51 PM, Storm Zhang wrote:
<br>
<p><span class="quotelev1">&gt; I need to measure t2-t1 to see the time spent on the code A between these two MPI_Barriers. I notice that if I comment code B, the time seems much less the original time (almost half). How does it happen? What is a possible reason for it? I have no idea.
</span><br>
<p>I'm not sure what you're asking here -- do you mean that if you put some comments in code B, it takes much less time than if you don't put comments?  If so, then the comments have nothing to do with the execution run-time -- something else is going on that is causing the delay.  Some questions:
<br>
<p>- how long does it take to execute code B -- microseconds, or seconds, or ...?
<br>
- how many processes are involved?
<br>
- what are you doing in code B; is it communication intensive and/or do you synchronize with other processes?
<br>
- are you doing your timings on otherwise-empty machines?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14523.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14521.php">Siegmar Gross: "[OMPI users] some warnings and failures building and testing openmpi-1.5"</a>
<li><strong>In reply to:</strong> <a href="14512.php">Storm Zhang: "[OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14527.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14527.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
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
