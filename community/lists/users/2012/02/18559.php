<?
$subject_val = "Re: [OMPI users] IMB-OpenMPI on Centos 6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 05:39:56 2012" -->
<!-- isoreceived="20120227103956" -->
<!-- sent="Mon, 27 Feb 2012 11:38:59 +0100" -->
<!-- isosent="20120227103859" -->
<!-- name="Beat Rubischon" -->
<!-- email="beat_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-OpenMPI on Centos 6" -->
<!-- id="4F4B5D43.5010206_at_0x1b.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACiOAODsJPp57zrNio9X50vaqqmmAnc2LEXo_h-B-tTJmFYD8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-OpenMPI on Centos 6<br>
<strong>From:</strong> Beat Rubischon (<em>beat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 05:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18560.php">Paul Kapinos: "[OMPI users] Environment variables [documentation]"</a>
<li><strong>Previous message:</strong> <a href="18558.php">Venkateswara Rao Dokku: "[OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>In reply to:</strong> <a href="18558.php">Venkateswara Rao Dokku: "[OMPI users] IMB-OpenMPI on Centos 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18595.php">Jeffrey Squyres: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>On 27.02.12 08:10, Venkateswara Rao Dokku wrote:
<br>
<span class="quotelev1">&gt; Our's is a customized OFED stack[Our own Driver specific library and
</span><br>
<span class="quotelev1">&gt; Kernel drivers for the h/w], we use IMB tests for testing the same.
</span><br>
<p><span class="quotelev1">&gt; All the tests [PingPong, Exchange.. etc] stalls after some time with
</span><br>
<span class="quotelev1">&gt; no errors.
</span><br>
<p>I found similar issues with a MLNX_OFED_LINUX-1.5.3 on top of RHEL6.2.
<br>
So far I found a note in the HP documentation [1] about a buggy mlx4
<br>
driver introduced in OFED 1.5.3. The workaround seems to help OpenMPI
<br>
1.5.x too, but still not perfect stable.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]
<br>
<a href="http://h10025.www1.hp.com/ewfrf/wc/document?cc=us&amp;lc=en&amp;dlc=en&amp;tmp_geoLoc=true&amp;docname=c03113904">http://h10025.www1.hp.com/ewfrf/wc/document?cc=us&amp;lc=en&amp;dlc=en&amp;tmp_geoLoc=true&amp;docname=c03113904</a>
<br>
<p>HTH
<br>
Beat
<br>
<p><pre>
-- 
     \|/                           Beat Rubischon &lt;beat_at_[hidden]&gt;
   ( 0-0 )                             <a href="http://www.0x1b.ch/~beat/">http://www.0x1b.ch/~beat/</a>
oOO--(_)--OOo---------------------------------------------------
Meine Erlebnisse, Gedanken und Traeume: <a href="http://www.0x1b.ch/blog/">http://www.0x1b.ch/blog/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18560.php">Paul Kapinos: "[OMPI users] Environment variables [documentation]"</a>
<li><strong>Previous message:</strong> <a href="18558.php">Venkateswara Rao Dokku: "[OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>In reply to:</strong> <a href="18558.php">Venkateswara Rao Dokku: "[OMPI users] IMB-OpenMPI on Centos 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18595.php">Jeffrey Squyres: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
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
