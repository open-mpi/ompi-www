<?
$subject_val = "Re: [OMPI users] OpenMPI causing WRF to crash";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 20:00:03 2011" -->
<!-- isoreceived="20110805000003" -->
<!-- sent="Thu, 4 Aug 2011 18:59:59 -0500 (CDT)" -->
<!-- isosent="20110804235959" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI causing WRF to crash" -->
<!-- id="660521091.191111.1312502399225.JavaMail.root_at_zimbra.anl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA5F1691.1777%basitali.khan_at_kaust.edu.sa" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI causing WRF to crash<br>
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 19:59:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17022.php">Jeff Squyres: "Re: [OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>Previous message:</strong> <a href="17020.php">Jeff Squyres: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17020.php">Jeff Squyres: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you want to debug this on BGP, you could set BG_COREDUMPONERROR=1
<br>
and look at the backtrace in the light weight core files
<br>
(you probably need to recompile everything with -g).
<br>
<p>A.Chan
<br>
<p>----- Original Message -----
<br>
<span class="quotelev1">&gt; Hi Dmitry,
</span><br>
<span class="quotelev1">&gt; Thanks for a prompt and fairly detailed response. I have also
</span><br>
<span class="quotelev1">&gt; forwarded
</span><br>
<span class="quotelev1">&gt; the email to wrf community in the hope that somebody would have some
</span><br>
<span class="quotelev1">&gt; straight forward solution. I will try to debug the error as suggested
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev1">&gt; you if I would not have much luck from the wrf forum.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basit A. Khan, Ph.D.
</span><br>
<span class="quotelev1">&gt; Postdoctoral Fellow
</span><br>
<span class="quotelev1">&gt; Division of Physical Sciences &amp; Engineering
</span><br>
<span class="quotelev1">&gt; Office# 3204, Level 3, Building 1,
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science &amp; Technology
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah Blvd, Box 2753, Thuwal 23955 &#194;&#173;6900,
</span><br>
<span class="quotelev1">&gt; Kingdom of Saudi Arabia.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office: +966(0)2 808 0276, Mobile: +966(0)5 9538 7592
</span><br>
<span class="quotelev1">&gt; E-mail: basitali.khan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Skype name: basit.a.khan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/3/11 2:46 PM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;5 apparently means one of the WRF's MPI processes has been
</span><br>
<span class="quotelev2">&gt; &gt;unexpectedly terminated, maybe by program decision. No matter, if it
</span><br>
<span class="quotelev2">&gt; &gt;is OpenMPI-specifi
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17022.php">Jeff Squyres: "Re: [OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>Previous message:</strong> <a href="17020.php">Jeff Squyres: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17020.php">Jeff Squyres: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
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
