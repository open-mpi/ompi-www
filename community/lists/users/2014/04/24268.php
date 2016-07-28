<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8 and PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 18:15:12 2014" -->
<!-- isoreceived="20140428221512" -->
<!-- sent="Mon, 28 Apr 2014 22:15:11 +0000" -->
<!-- isosent="20140428221511" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8 and PGI compilers" -->
<!-- id="8A6AEA70-CA92-4CF4-8E4D-B94B383C71B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8AD4F6_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8 and PGI compilers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 18:15:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24269.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="24267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>In reply to:</strong> <a href="24263.php">Hjelm, Nathan T: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24269.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Reply:</strong> <a href="24269.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian: Can you report this bug to PGI and see what they say?
<br>
<p><p>On Apr 27, 2014, at 2:15 PM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I see nothing invalid about that line. It is setting a struct scif_portID from another struct scif_portID which is allowed in C99. The error might be misleading or a compiler bug (PGI has lots of them).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Andrus, Brian Contractor [bdandrus_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 25, 2014 11:22 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OpenMPI 1.8 and PGI compilers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been unable to compile OpenMPI 1.8 using PGI compilers (13.6, 13.10 or 14.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EVERY time, I get the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PGC-S-0094-Illegal type conversion required (btl_scif_component.c: 215)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 14.3-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; make[2]: *** [btl_scif_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone successfully built OpenMPI 1.8 with PGI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, how??
</span><br>
<span class="quotelev1">&gt; I have tried ./configure alone, using &quot;-fast&quot; options, setting -DNO_PGI_OFFSET all to no avail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Andrus
</span><br>
<span class="quotelev1">&gt; ITACS/Research Computing
</span><br>
<span class="quotelev1">&gt; Naval Postgraduate School
</span><br>
<span class="quotelev1">&gt; Monterey, California
</span><br>
<span class="quotelev1">&gt; voice: 831-656-6238
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="24269.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="24267.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>In reply to:</strong> <a href="24263.php">Hjelm, Nathan T: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24269.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Reply:</strong> <a href="24269.php">흆e Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
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
