<?
$subject_val = "Re: [OMPI users] non-functional mpif90 compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  1 05:16:31 2013" -->
<!-- isoreceived="20131001091631" -->
<!-- sent="Tue, 1 Oct 2013 09:16:28 +0000" -->
<!-- isosent="20131001091628" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] non-functional mpif90 compiler" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F911B69_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMp0y1UpG06gM4cRyyx=FL4B8Bn-z3u1TFmX0vTSpf+a4dFdnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] non-functional mpif90 compiler<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-01 05:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22744.php">sudhirs_at_[hidden]: "Re: [OMPI users] line 60: echo: write error: No space left on device"</a>
<li><strong>Previous message:</strong> <a href="22742.php">Damiano Natali: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>In reply to:</strong> <a href="22742.php">Damiano Natali: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22747.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Reply:</strong> <a href="22747.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using a TCP network for MPI communications, static is fine.  
<br>
<p>However, if you're trying to use an OS-bypass network such as InfiniBand, RoCE, or iWARP, using static libraries can be somewhat of a nightmare (because of how the OpenFabrics Verbs support libraries work).  Specifically, I don't see the &quot;openib&quot; BTL plugin in your ompi_info output, meaning that your Open MPI installation is not capable of using InfiniBand/RoCE/iWARP.
<br>
<p>So just be aware that with your current builds, you're basically TCP-only.
<br>
<p><p>On Oct 1, 2013, at 3:34 AM, Damiano Natali &lt;damiano.natali_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gus, today I noticed there was another ompi directory in my path and maybe it gave some strange errors so I put the new ompi installation at the first place in PATH and LD_LIBRARY_PATH before the building and everything went nicely!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, as you and Jeff said, the problem was in having the rigth paths!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your support!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damiano
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p.s. Building static libraries didn't result in any problem so far!
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
<li><strong>Next message:</strong> <a href="22744.php">sudhirs_at_[hidden]: "Re: [OMPI users] line 60: echo: write error: No space left on device"</a>
<li><strong>Previous message:</strong> <a href="22742.php">Damiano Natali: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>In reply to:</strong> <a href="22742.php">Damiano Natali: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22747.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Reply:</strong> <a href="22747.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
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
