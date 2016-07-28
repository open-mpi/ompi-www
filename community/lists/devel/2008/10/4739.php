<?
$subject_val = "Re: [OMPI devel] Should visibility and memchecker abort configure?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 14:02:05 2008" -->
<!-- isoreceived="20081006180205" -->
<!-- sent="Mon, 6 Oct 2008 12:01:58 -0600" -->
<!-- isosent="20081006180158" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Should visibility and memchecker abort configure?" -->
<!-- id="3AE94E0C-59AD-4214-8E18-DC8BD45D9223_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DB730703-8FB0-4936-B5C4-19DE7B887756_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 14:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4740.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not exactly - see below
<br>
<p>On Oct 6, 2008, at 11:56 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think the real issue here is that --enable-debug (or the presence  
</span><br>
<span class="quotelev1">&gt; of the .svn or .hg directories) *implies* several other options,  
</span><br>
<span class="quotelev1">&gt; such as --enable-visibility and --enable-memchecker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I understand it: the user has *not* specifically asked for -- 
</span><br>
<span class="quotelev1">&gt; enable-visibility, but is getting a failure if it can't be delivered  
</span><br>
<span class="quotelev1">&gt; because --enable-debug was specified.  Is that right?  If so, that's  
</span><br>
<span class="quotelev1">&gt; downright weird -- because I configure/compile with the PGI  
</span><br>
<span class="quotelev1">&gt; compilers with --enable-debug and simply get a build that does not  
</span><br>
<span class="quotelev1">&gt; include visibility (i.e., &quot;ompi_info | grep visibil&quot; results in  
</span><br>
<span class="quotelev1">&gt; &quot;Symbol visibility support: no&quot;) -- the configure/build does not  
</span><br>
<span class="quotelev1">&gt; abort.
</span><br>
<p>Not quite. In this case, we specifically did include --enable- 
<br>
visibility so that it would be there for those compilers that support  
<br>
it. We didn't realize that visibility was going to be included for a  
<br>
debug build even if we -didn't-  request it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, I agree that if the memchecker/valgrind component  
</span><br>
<span class="quotelev1">&gt; cannot deliver what it should, it should disable itself silently/ 
</span><br>
<span class="quotelev1">&gt; without error *unless* the valgrind component was specifically  
</span><br>
<span class="quotelev1">&gt; requested (which, in this case, it sounds like it was not).  So if  
</span><br>
<span class="quotelev1">&gt; we're not doing that, it's a bug.
</span><br>
<p>Yes, in this case it is a bug. Shiqing is on holiday, but already  
<br>
contacted me about it. We'll deal with it upon his return.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2008, at 5:15 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you allow me my 2 cents:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At configure time, it is possible to distinguish between several
</span><br>
<span class="quotelev2">&gt;&gt; different user inputs:
</span><br>
<span class="quotelev2">&gt;&gt; - the user typed --enable-foo,
</span><br>
<span class="quotelev2">&gt;&gt; - the user typed --disable-foo or --enable-foo=no,
</span><br>
<span class="quotelev2">&gt;&gt; - the user typed --enable-foo=ARG (ARG is available for further
</span><br>
<span class="quotelev2">&gt;&gt; inspection),
</span><br>
<span class="quotelev2">&gt;&gt; - the user used none of the above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IIUC you have already sorted out the visibility issue by using the  
</span><br>
<span class="quotelev2">&gt;&gt; last,
</span><br>
<span class="quotelev2">&gt;&gt; and the memchecker issue is about having an incompatible version
</span><br>
<span class="quotelev2">&gt;&gt; installed.  One typical semantics would be to not try to use the  
</span><br>
<span class="quotelev2">&gt;&gt; feature
</span><br>
<span class="quotelev2">&gt;&gt; at all if --disable-foo was explicitly passed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4740.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>In reply to:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
