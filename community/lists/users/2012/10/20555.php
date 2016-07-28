<?
$subject_val = "Re: [OMPI users] openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 12:19:39 2012" -->
<!-- isoreceived="20121027161939" -->
<!-- sent="Sat, 27 Oct 2012 12:19:34 -0400" -->
<!-- isosent="20121027161934" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi shared memory feature" -->
<!-- id="8D76A92E-D0AE-4367-B697-423565CC7413_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1351349351.72227.YahooMailNeo_at_web111718.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi shared memory feature<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-27 12:19:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20556.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20554.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20552.php">Mahmood Naderan: "[OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2012, at 10:49 AM, Mahmood Naderan wrote:
<br>
<p><span class="quotelev1">&gt; Why openmpi uses shared memory model?
</span><br>
<p>Because communicating through shared memory when sending messages between processes on the same server is far faster than going through a network stack.
<br>
<p><span class="quotelev1">&gt; this can be disabled though by setting &quot;--mca ^sm&quot;. 
</span><br>
<span class="quotelev1">&gt; It seems that by default openmpi uses such feature (shared memory backing files) which is strange.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mahmood
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20556.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20554.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20552.php">Mahmood Naderan: "[OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
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
