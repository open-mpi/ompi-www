<?
$subject_val = "Re: [OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 10:55:26 2009" -->
<!-- isoreceived="20090722145526" -->
<!-- sent="Wed, 22 Jul 2009 10:55:21 -0400 (EDT)" -->
<!-- isosent="20090722145521" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autodetect broken" -->
<!-- id="alpine.DEB.1.10.0907221031550.12286_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0030EF4F-99EA-4F5F-9502-94FE84A9CC5E_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autodetect broken<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 10:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6496.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>In reply to:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6505.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6505.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The current autodetect implementation seems like the wrong approach to me. 
<br>
I'm rather unhappy the base functionality was hacked up like it was 
<br>
without any advanced notice or questions about original design intent. 
<br>
We seem to have a set of base functions which are now more unreadable than 
<br>
before, overly complex, and which leak memory.
<br>
<p>The intent of the installdirs framework was to allow this type of 
<br>
behavior, but without rehacking all this infer crap into base.  The 
<br>
autodetect component should just set $prefix in the set of functions it 
<br>
returns (and possibly libdir and bindir if you really want, which might 
<br>
actually make sense if you guess wrong), and let the expansion code take 
<br>
over from there.  The general thought on how this would work went 
<br>
something like:
<br>
<p>&nbsp;&nbsp;- Run after config
<br>
&nbsp;&nbsp;- If determine you have a special $prefix, set the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_instal_dirs.prefix to NULL (yes, it's a bit of a hack) and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;set your special prefix.
<br>
&nbsp;&nbsp;- Same with bindir and libdir if needed
<br>
&nbsp;&nbsp;- Let expansion (which runs after all components have had the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;chance to fill in their fields) expand out with your special
<br>
&nbsp;&nbsp;&nbsp;&nbsp;data
<br>
<p>And the base stays simple, the components do all the heavy lifting, and 
<br>
life is happy.  I would not be opposed to putting in a &quot;find expaneded 
<br>
part&quot; type function that takes two strings like &quot;${prefix}/lib&quot; and 
<br>
&quot;/usr/local/lib&quot; and returns &quot;/usr/local&quot; being added to the base so that 
<br>
other autodetect-style components don't need to handle such a case, but 
<br>
that's about the extent of the base changes I think are appropriate.
<br>
<p>Finally, a first quick code review reveals a couple of problems:
<br>
<p>&nbsp;&nbsp;- We don't AC_SUBST variables adding .lo files to build sources in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI.  Instead, we use AM_CONDITIONALS to add sources as needed.
<br>
&nbsp;&nbsp;- Obviously, there's a problem with the _happy variable name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;consistency in configure.m4
<br>
&nbsp;&nbsp;- There's a naming convention issue - files should all start with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_installdirs_autodetect_, and a number of the added files
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do not.
<br>
&nbsp;&nbsp;- From a finding code standpoint, I'd rather walkcontext.c and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;backtrace.c be one file with #ifs - for such short functions,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;it makes it more obvious that it's just portability implementations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of the same function.
<br>
<p>I'd be happy to discuss the issues further or review any code before it 
<br>
gets committed.  But I think the changes as they exist today (even with 
<br>
bugs fixed) aren't consistent with what the installdirs framework was 
<br>
trying to accomplish and should be reworked.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6496.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>In reply to:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6505.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6505.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
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
