<?
$subject_val = "Re: [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 19 15:03:35 2009" -->
<!-- isoreceived="20091019190335" -->
<!-- sent="Mon, 19 Oct 2009 15:03:30 -0400" -->
<!-- isosent="20091019190330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard" -->
<!-- id="49998867-219E-457A-AA08-B828C91D1E04_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DAE1B913-A32D-46A8-9224-251F988953F2_at_pop.lowtem.hokudai.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-19 15:03:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10928.php">Sangamesh B: "[OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10926.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun failure"</a>
<li><strong>In reply to:</strong> <a href="10919.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the followup; I was actually off all last week and didn't  
<br>
get a chance to post a reply before dropping offline -- I was just  
<br>
going to say that I have had no problems building and running on Snow  
<br>
Leopard.
<br>
<p>Glad you identified the problem -- the solution is now googleable for  
<br>
others who may run into the same issue.
<br>
<p><p>On Oct 16, 2009, at 3:13 AM, Hakime Seddik wrote:
<br>
<p><span class="quotelev1">&gt; Following my previous post regarding the problems that i am having to
</span><br>
<span class="quotelev1">&gt; compile OpenMPI 1.3.3 on Snow Leopard, I found a way to fix the  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I was trying to compile OpenMPI, I used the -ftree-vectorize
</span><br>
<span class="quotelev1">&gt; compiler switch, which actually was the cause of the compilation
</span><br>
<span class="quotelev1">&gt; failure. Removing it fixed the problem and Open MPI 1.3.3 compiles now
</span><br>
<span class="quotelev1">&gt; fine. Note that this only affects Open MPI version 1.3 and higher.
</span><br>
<span class="quotelev1">&gt; Using the -ftree-vectorize switch when compiling Open MPI 1.2.9 does
</span><br>
<span class="quotelev1">&gt; not make any problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope it helps, if someone else is having the same issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hakime Seddik
</span><br>
<span class="quotelev1">&gt; Glacier and Ice Sheet Research Group
</span><br>
<span class="quotelev1">&gt; Tel:+81-(0)90-6263-4074
</span><br>
<span class="quotelev1">&gt; email: hakime_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Institute of Low Temperature Science
</span><br>
<span class="quotelev1">&gt; Hokkaido University, Kita-19, Nishi-8, Kita-ku
</span><br>
<span class="quotelev1">&gt; Sapporo 060-0819. Japan
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10928.php">Sangamesh B: "[OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10926.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun failure"</a>
<li><strong>In reply to:</strong> <a href="10919.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
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
