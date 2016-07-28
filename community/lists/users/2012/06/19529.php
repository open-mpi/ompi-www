<?
$subject_val = "Re: [OMPI users] Plans for cmake with non-Windows?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 10:27:59 2012" -->
<!-- isoreceived="20120613142759" -->
<!-- sent="Wed, 13 Jun 2012 10:27:54 -0400" -->
<!-- isosent="20120613142754" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Plans for cmake with non-Windows?" -->
<!-- id="C516D085-D6C2-4B10-B020-C03CDEFC4E57_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FD8A226.7060705_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Plans for cmake with non-Windows?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 10:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19530.php">Ralph Castain: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19528.php">John R. Cary: "[OMPI users] Plans for cmake with non-Windows?"</a>
<li><strong>In reply to:</strong> <a href="19528.php">John R. Cary: "[OMPI users] Plans for cmake with non-Windows?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2012, at 10:22 AM, John R. Cary wrote:
<br>
<p><span class="quotelev1">&gt; I noted that the download openmpi-1.6 cannot be configured
</span><br>
<span class="quotelev1">&gt; with CMake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there plans for making it configurable with CMake?
</span><br>
<p><p>Never say &quot;never&quot;, but there are no plans for that at the moment.  
<br>
<p>The GNU Autotools are our primary configure/build system; cmake is currently only used for Windows builds due to issues in trying to use the Autotools on Windows (Shiqing would have the supply the details here).
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
<li><strong>Next message:</strong> <a href="19530.php">Ralph Castain: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Previous message:</strong> <a href="19528.php">John R. Cary: "[OMPI users] Plans for cmake with non-Windows?"</a>
<li><strong>In reply to:</strong> <a href="19528.php">John R. Cary: "[OMPI users] Plans for cmake with non-Windows?"</a>
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
