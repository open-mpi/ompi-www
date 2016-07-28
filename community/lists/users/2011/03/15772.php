<?
$subject_val = "Re: [OMPI users] Basic question on portability";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 12:56:31 2011" -->
<!-- isoreceived="20110301175631" -->
<!-- sent="Tue, 1 Mar 2011 12:56:26 -0500" -->
<!-- isosent="20110301175626" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic question on portability" -->
<!-- id="F1087B77-FA94-48BF-B5D8-AA07E35A2941_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB266444C762_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Basic question on portability<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 12:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15773.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15771.php">Eugene Loh: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>In reply to:</strong> <a href="15770.php">Blosch, Edwin L: "[OMPI users] Basic question on portability"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you will have problems.
<br>
<p>We did not formally introduce ABI compatibility until version 1.3.2.  Meaning: your application compiled with 1.3.2 will successfully link/run against any 1.3.x version &gt;= 1.3.2, and against any 1.4.x version.
<br>
<p>v1.5 broke ABI with the v1.3/v1.4 series, but it will also be stable for the duration of the v1.5/v1.6 series.  
<br>
<p>We have no definite plans yet for v1.7, but it is likely that the ABI story will be the same there, too -- break from v1.5/v1.6 and stable for v1.7/v1.8.
<br>
<p><p>On Mar 1, 2011, at 11:25 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; If I compile against OpenMPI 1.2.8, shared linkage, on one system, then move the executable to another system with OpenMPI 1.4.x or 1.5.x, will I have any problems running the executable?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="15773.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15771.php">Eugene Loh: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>In reply to:</strong> <a href="15770.php">Blosch, Edwin L: "[OMPI users] Basic question on portability"</a>
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
