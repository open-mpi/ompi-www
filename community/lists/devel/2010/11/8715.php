<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 23:20:40 2010" -->
<!-- isoreceived="20101124042040" -->
<!-- sent="Tue, 23 Nov 2010 23:20:44 -0500" -->
<!-- isosent="20101124042044" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="1290572444.29265.0.camel_at_godzilla" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CEC85BE.4070105_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 23:20:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8716.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8714.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8714.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8708.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you !
<br>
<p>Your support is outstanding !
<br>
<p>Le mardi 23 novembre 2010 &#195;&#160; 22:25 -0500, Eugene Loh a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Ya, it sounds like we should fix this eager limit help text so that others aren't misled. We did say &quot;attempt&quot;, but that's probably a bit too subtle. 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Eugene - iirc: this is in the btl base (or some other central location) because it's shared between all btls. 
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; The cited text was from the OMPI FAQ (&quot;Tuning&quot; / &quot;sm&quot; section, item 6).  
</span><br>
<span class="quotelev1">&gt; I made the change in r1309.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In ompi/mca/btl/base/btl_base_mca.c, I added the phrase &quot;including 
</span><br>
<span class="quotelev1">&gt; header&quot; to both
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;rndv_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt; &quot;Size (in bytes, including header) of \&quot;phase 1\&quot; fragment sent for all 
</span><br>
<span class="quotelev1">&gt; large messages (must be &gt;= 0 and &lt;= eager_limit)&quot;
</span><br>
<span class="quotelev1">&gt; module-&gt;btl_rndv_eager_limit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;eager_limit&quot;
</span><br>
<span class="quotelev1">&gt; &quot;Maximum size (in bytes, including header) of \&quot;short\&quot; messages (must 
</span><br>
<span class="quotelev1">&gt; be &gt;= 1).&quot;
</span><br>
<span class="quotelev1">&gt; module-&gt;btl_eager_limit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but I left
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;max_send_size&quot;
</span><br>
<span class="quotelev1">&gt; &quot;Maximum size (in bytes) of a single \&quot;phase 2\&quot; fragment of a long 
</span><br>
<span class="quotelev1">&gt; message when using the pipeline protocol (must be &gt;= 1)&quot;
</span><br>
<span class="quotelev1">&gt; module-&gt;btl_max_send_size
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alone (for some combination of lukewarm reasons).  Changes are in r24085.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
M. S&#195;&#169;bastien Boisvert
&#195;&#137;tudiant au doctorat en physiologie-endocrinologie &#195;&#160; l'Universit&#195;&#169; Laval
Boursier des Instituts de recherche en sant&#195;&#169; du Canada
&#195;&#137;quipe du Professeur Jacques Corbeil
Centre de recherche en infectiologie de l'Universit&#195;&#169; Laval
Local R-61B
2705, boulevard Laurier
Qu&#195;&#169;bec, Qu&#195;&#169;bec
Canada G1V 4G2
T&#195;&#169;l&#195;&#169;phone: 418 525 4444 46342
Courriel: SEB_at_[hidden]
Web: <a href="http://boisvert.info">http://boisvert.info</a>
&quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8716.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8714.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8714.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8708.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
