<?
$subject_val = "Re: [OMPI devel] cpu stride and offset for processor binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 10:05:48 2008" -->
<!-- isoreceived="20080206150548" -->
<!-- sent="Wed, 6 Feb 2008 10:05:07 -0500" -->
<!-- isosent="20080206150507" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] cpu stride and offset for processor binding" -->
<!-- id="4EB8D759-C438-4436-A9DF-68FA87D100E3_at_cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CAE14BC1_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] cpu stride and offset for processor binding<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 10:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3135.php">Resat Umit Payli: "[OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>Previous message:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>In reply to:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the goal was to allow manual specification of this stuff  
<br>
(E.g., in a text file) even though it could be fairly unwieldy in some  
<br>
cases (specifying every core in every machine).  Then use the  
<br>
experiences learned from that to work on better syntax / specification  
<br>
mechanisms.
<br>
<p><p>On Feb 6, 2008, at 3:13 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; We are working right now on the new RMAPS component to allow rank  
</span><br>
<span class="quotelev1">&gt; mapping according to the host : socket : core.
</span><br>
<span class="quotelev1">&gt; This component will be general and flexible. You will need to  
</span><br>
<span class="quotelev1">&gt; support the rankmap file in the command line that looks similar to  
</span><br>
<span class="quotelev1">&gt; hostfile and the component will do the rest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#215;&#158;&#215;&#144;&#215;&#170;: devel-bounces_at_[hidden] &#215;&#145;&#215;&#169;&#215;&#157; Pak Lui
</span><br>
<span class="quotelev1">&gt; &#215;&#160;&#215;&#169;&#215;&#156;&#215;&#151;: &#215;&#147; 06/02/2008 02:01
</span><br>
<span class="quotelev1">&gt; &#215;&#144;&#215;&#156;: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &#215;&#160;&#215;&#149;&#215;&#169;&#215;&#144;: [OMPI devel] cpu stride and offset for processor binding
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to implement something in the paffinity:solaris that would
</span><br>
<span class="quotelev1">&gt; allow me to specify the cpu id with striding (aka in a sequence) when
</span><br>
<span class="quotelev1">&gt; selecting which cpu ids to bind. e.g. For a cpu set that looks like
</span><br>
<span class="quotelev1">&gt; this: { 0 1 2 3 4 5 6 7 }, and stride is to 2, and offset is to 1  
</span><br>
<span class="quotelev1">&gt; (which
</span><br>
<span class="quotelev1">&gt; means start at pos 1), then ranks will bind to the cpus in the  
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev1">&gt; order: { 1 3 5 7 2 4 6 0 }. The obvious intent is to take advantage of
</span><br>
<span class="quotelev1">&gt; the perf by allocating the ranks in a certain order on multi-core  
</span><br>
<span class="quotelev1">&gt; systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But then we realized this may be implemented elsewhere outside the
</span><br>
<span class="quotelev1">&gt; solaris paffinity code. I see something in trac #1023 that may allow  
</span><br>
<span class="quotelev1">&gt; me
</span><br>
<span class="quotelev1">&gt; to specify a cpuid or cores in a range but it doesn't seem to allow me
</span><br>
<span class="quotelev1">&gt; specify the cpu id to bind in strides. And with that, rank  
</span><br>
<span class="quotelev1">&gt; specification
</span><br>
<span class="quotelev1">&gt; may seem to be doable, but I may end up entering a long list of cpu  
</span><br>
<span class="quotelev1">&gt; ids
</span><br>
<span class="quotelev1">&gt; in strides manually, if the machine happens to have many cpus. Plus
</span><br>
<span class="quotelev1">&gt; another down side is that Solaris doesn't seem to have stable  
</span><br>
<span class="quotelev1">&gt; interface
</span><br>
<span class="quotelev1">&gt; for me to extract out the core/socket information from the kernel. So
</span><br>
<span class="quotelev1">&gt; striding might be the only way for me to go for now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some unspoken feature that's coming down the pipe that may
</span><br>
<span class="quotelev1">&gt; allow me to specify cpuids in a sequence, or we already have some
</span><br>
<span class="quotelev1">&gt; feature like that that I didn't know about? I look around but I don't
</span><br>
<span class="quotelev1">&gt; see anything like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
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
<li><strong>Next message:</strong> <a href="3135.php">Resat Umit Payli: "[OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>Previous message:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>In reply to:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
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
