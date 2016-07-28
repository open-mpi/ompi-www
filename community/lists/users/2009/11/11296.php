<?
$subject_val = "Re: [OMPI users] How to install openmpi to suportthread_level_multiple?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 19:58:47 2009" -->
<!-- isoreceived="20091201005847" -->
<!-- sent="Mon, 30 Nov 2009 19:58:41 -0500" -->
<!-- isosent="20091201005841" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to install openmpi to suportthread_level_multiple?" -->
<!-- id="DF2DAD50-FBA5-4509-9200-7179DA9791AC_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="675d290b0911242237v372a549fo2ad57364c764c923_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to install openmpi to suportthread_level_multiple?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-30 19:58:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11297.php">Jeff Squyres: "Re: [OMPI users] Programming help required in Interleavingcomputation+communication !"</a>
<li><strong>Previous message:</strong> <a href="11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11278.php">Vivek Satpute: "Re: [OMPI users] How to install openmpi to suport thread_level_multiple?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to configure and build Open MPI with the --enable-mpi-threads  
<br>
configure switch.  It is off by default.  Specifically:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --enable-mpi-threads ...
<br>
<p>Note that not all features are supported with --enable-mpi-threads --  
<br>
see the README file for more details.
<br>
<p><p>On Nov 25, 2009, at 1:37 AM, Vivek Satpute wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As much as I know about OMPI, THREAD_LEVEL_MULTIPLE value is set to  
</span><br>
<span class="quotelev1">&gt; &quot;yes&quot; by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Vivek
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 24, 2009 at 11:04 PM, Lu&#237;s Miranda &lt;luistm_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to install openmpi to suport thread_level_multiple?
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11297.php">Jeff Squyres: "Re: [OMPI users] Programming help required in Interleavingcomputation+communication !"</a>
<li><strong>Previous message:</strong> <a href="11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11278.php">Vivek Satpute: "Re: [OMPI users] How to install openmpi to suport thread_level_multiple?"</a>
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
