<?
$subject_val = "Re: [OMPI devel] Should visibility and memchecker abort configure?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 13:56:16 2008" -->
<!-- isoreceived="20081006175616" -->
<!-- sent="Mon, 6 Oct 2008 13:56:10 -0400" -->
<!-- isosent="20081006175610" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Should visibility and memchecker abort configure?" -->
<!-- id="DB730703-8FB0-4936-B5C4-19DE7B887756_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081005091548.GA14780_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Should visibility and memchecker abort configure?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 13:56:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4739.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4737.php">Lenny Verkhovsky: "Re: [OMPI devel] rdma_connect() failure"</a>
<li><strong>In reply to:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4739.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4739.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the real issue here is that --enable-debug (or the presence of  
<br>
the .svn or .hg directories) *implies* several other options, such as  
<br>
--enable-visibility and --enable-memchecker.
<br>
<p>As I understand it: the user has *not* specifically asked for --enable- 
<br>
visibility, but is getting a failure if it can't be delivered because  
<br>
--enable-debug was specified.  Is that right?  If so, that's downright  
<br>
weird -- because I configure/compile with the PGI compilers with -- 
<br>
enable-debug and simply get a build that does not include visibility  
<br>
(i.e., &quot;ompi_info | grep visibil&quot; results in &quot;Symbol visibility  
<br>
support: no&quot;) -- the configure/build does not abort.
<br>
<p>Additionally, I agree that if the memchecker/valgrind component cannot  
<br>
deliver what it should, it should disable itself silently/without  
<br>
error *unless* the valgrind component was specifically requested  
<br>
(which, in this case, it sounds like it was not).  So if we're not  
<br>
doing that, it's a bug.
<br>
<p><p><p>On Oct 5, 2008, at 5:15 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you allow me my 2 cents:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At configure time, it is possible to distinguish between several
</span><br>
<span class="quotelev1">&gt; different user inputs:
</span><br>
<span class="quotelev1">&gt; - the user typed --enable-foo,
</span><br>
<span class="quotelev1">&gt; - the user typed --disable-foo or --enable-foo=no,
</span><br>
<span class="quotelev1">&gt; - the user typed --enable-foo=ARG (ARG is available for further
</span><br>
<span class="quotelev1">&gt;  inspection),
</span><br>
<span class="quotelev1">&gt; - the user used none of the above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIUC you have already sorted out the visibility issue by using the  
</span><br>
<span class="quotelev1">&gt; last,
</span><br>
<span class="quotelev1">&gt; and the memchecker issue is about having an incompatible version
</span><br>
<span class="quotelev1">&gt; installed.  One typical semantics would be to not try to use the  
</span><br>
<span class="quotelev1">&gt; feature
</span><br>
<span class="quotelev1">&gt; at all if --disable-foo was explicitly passed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="4739.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4737.php">Lenny Verkhovsky: "Re: [OMPI devel] rdma_connect() failure"</a>
<li><strong>In reply to:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4739.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4739.php">Ralph Castain: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
