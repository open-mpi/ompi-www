<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  7 16:42:44 2012" -->
<!-- isoreceived="20120507204244" -->
<!-- sent="Mon, 7 May 2012 20:42:39 +0000" -->
<!-- isosent="20120507204239" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="03F9BE07-0944-445E-B298-7DAD5B68A310_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOf_+-XQN21QGLOLKtuCNfbN0Qv_2iEOQqd69GQSrW_W=SyUQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the execution time calculation<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-07 16:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19210.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open-mpi.org site"</a>
<li><strong>In reply to:</strong> <a href="19207.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2012, at 2:39 PM, Jingcha Joba wrote:
<br>
<p><span class="quotelev1">&gt; OK.This explains that if a process gets &quot;migrated&quot; from one CPU to another, the time is not &quot;affected&quot;. But it still doesn't explain if the process gets scheduled back to the same CPU.
</span><br>
<p>MPI_Wtime() doesn't tell you any of this stuff.  It just tells you the time *right now*.  Basically, MPI_Wtime() can be used to compute wall-clock timings (which are really the only relevant timings when measuring delivered performance, anyway).
<br>
<p>What happens before or after that is not covered in the scope of MPI_Wtime().
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19210.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open-mpi.org site"</a>
<li><strong>In reply to:</strong> <a href="19207.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
