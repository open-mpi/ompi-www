<?
$subject_val = "Re: [OMPI devel] Proc modex change";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 20:08:26 2008" -->
<!-- isoreceived="20080326000826" -->
<!-- sent="Tue, 25 Mar 2008 20:08:14 -0400" -->
<!-- isosent="20080326000814" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proc modex change" -->
<!-- id="94F74608-A7F9-4F0F-B26F-A844CC3BD39E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0803201300430.10931_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Proc modex change<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 20:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3524.php">Jeff Squyres: "Re: [OMPI devel] Using coverity results"</a>
<li><strong>In reply to:</strong> <a href="3482.php">Brian W. Barrett: "[OMPI devel] Proc modex change"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds reasonable to me.  Anyone else care?
<br>
<p>On Mar 20, 2008, at 2:03 PM, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know why we go through the modex receive and for the  
</span><br>
<span class="quotelev1">&gt; local process in ompi_proc_get_info()?  It doesn't seem like it's  
</span><br>
<span class="quotelev1">&gt; necessary, and it causes some problems on platforms that don't  
</span><br>
<span class="quotelev1">&gt; implement the modex (since it zeros out useful information  
</span><br>
<span class="quotelev1">&gt; determined during the init step).  If no one has any objections, I'd  
</span><br>
<span class="quotelev1">&gt; like to commit the attached patch that fixes that problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; proc_local_no_modex 
</span><br>
<span class="quotelev1">&gt; .diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<li><strong>Previous message:</strong> <a href="3524.php">Jeff Squyres: "Re: [OMPI devel] Using coverity results"</a>
<li><strong>In reply to:</strong> <a href="3482.php">Brian W. Barrett: "[OMPI devel] Proc modex change"</a>
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
