<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 11:51:47 2008" -->
<!-- isoreceived="20080723155147" -->
<!-- sent="Wed, 23 Jul 2008 11:51:41 -0400" -->
<!-- isosent="20080723155141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM" -->
<!-- id="A542FA3D-AD36-45A3-A8A6-DC9C6B7D0C9E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990807230840r3e9edb73k4601f3e6d5e3ed40_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 11:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4417.php">George Bosilca: "[OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4415.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4413.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it may well be...
<br>
<p>It needs to handle the case where paffinity can return &quot;Sorry, I don't  
<br>
have this information for you.&quot;
<br>
<p><p>On Jul 23, 2008, at 11:40 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; can this also be a reason for seqv on NUMA nodes(#1382) , that I  
</span><br>
<span class="quotelev1">&gt; cant recreate ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/23/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: On Jul 23,  
</span><br>
<span class="quotelev1">&gt; 2008, at 10:37 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to work for me too.  What is interesting is my  
</span><br>
<span class="quotelev1">&gt; experiments have shown that if you run on RH5.1 you don't need to  
</span><br>
<span class="quotelev1">&gt; set mpi_yield_when_idle to 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this makes sense -- on RHEL5.1, it's a much newer Linux kernel  
</span><br>
<span class="quotelev1">&gt; and PLPA works as expected there.  So ODLS uses the values that PLPA  
</span><br>
<span class="quotelev1">&gt; passes back and all is good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On older Linux kernels, we're effectively returning &quot;not supported&quot;  
</span><br>
<span class="quotelev1">&gt; from paffinity, and therefore ODLS (rightly) assumes that it can't  
</span><br>
<span class="quotelev1">&gt; know anything and puts us into the &quot;oversubscribed&quot; state.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on a fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="4417.php">George Bosilca: "[OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4415.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4413.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
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
