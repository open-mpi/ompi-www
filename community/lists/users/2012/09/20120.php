<?
$subject_val = "Re: [OMPI users] what is a &quot;node&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  4 10:23:53 2012" -->
<!-- isoreceived="20120904142353" -->
<!-- sent="Tue, 4 Sep 2012 10:23:48 -0400" -->
<!-- isosent="20120904142348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is a &amp;quot;node&amp;quot;?" -->
<!-- id="5744FC23-9745-4525-A2DF-1979F0E3ACC3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+dv2NEPgwG8V5XU5xUVSPMc=bWsHwZca98Wa1E5j77K0+1vYQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] what is a &quot;node&quot;?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-04 10:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20121.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20119.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>In reply to:</strong> <a href="20091.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2012, at 7:33 AM, Zbigniew Koza wrote:
<br>
<p><span class="quotelev1">&gt; the new syntax works well (I used &quot;man mpirun&quot;, which displayed the old syntax).
</span><br>
<span class="quotelev1">&gt; Also, the report displayed by --report-binding is far more human-readable than in previous versions of OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Out of curiosity, and also to supress the warning, I installed the libnuma-dev package with libnuma.so and libnuma.a libraries, but the warning remains. 
</span><br>
<span class="quotelev1">&gt; Does it mean I should recompile OpenMPI to get rid of this warning? 
</span><br>
<p>I'm a little confused by your mails and questions.
<br>
<p>Your first mail indicated that you were running OMPI v1.4.3.  Did you upgrade to another version (e.g., 1.7.x or 1.9.x)?  I ask because you said the new syntax worked, but it shouldn't have back in the 1.4.x series.  It doesn't in the 1.6.x series, either.
<br>
<p>Just to clarify, we do development of Open MPI in pairs of series:
<br>
<p>- 1.3.x: ancient &quot;feature&quot; OMPI series, evolved into 1.4.x
<br>
&nbsp;&nbsp;- 1.4.x: previous stable OMPI series, evolved from 1.3.x
<br>
<p>- 1.5.x: previous &quot;feature&quot; OMPI series, evolved into 1.6.x
<br>
&nbsp;&nbsp;- 1.6.x: current stable OMPI series, evolved from 1.5.x
<br>
<p>- 1.7.x: upcoming &quot;feature&quot; OMPI series (not yet released)
<br>
&nbsp;&nbsp;- 1.8.x: does not yet exist, but will someday be the evolution of 1.7.x
<br>
<p>- 1.9.x: Open MPI development HEAD
<br>
<p>Is there any possibility that you're mixing and matching OMPI versions here?  E.g., did you see the OMPI v1.4 mpirun(1) man page?
<br>
<p>Also, yes, if you installed libnuma after installing Open MPI, then you'll need to re-build Open MPI.  That being said, Open MPI 1.6 and beyond does not require libnuma for process binding.  It does need libnuma for memory binding, though (hwloc uses libnuma behind the scenes for memory binding; libnuma is currently the only public API for memory binding in Linux).
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
<li><strong>Next message:</strong> <a href="20121.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20119.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>In reply to:</strong> <a href="20091.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
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
