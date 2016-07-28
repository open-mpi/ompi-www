<?
$subject_val = "Re: [OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 17:19:57 2009" -->
<!-- isoreceived="20090722211957" -->
<!-- sent="Wed, 22 Jul 2009 17:19:50 -0400" -->
<!-- isosent="20090722211950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autodetect broken" -->
<!-- id="609955A2-4925-4261-8289-82CB7F87F3B6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B1E73E76-49B0-4BCC-8B2C-7364F9DB6F2C_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 17:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6510.php">Jeff Squyres: "[OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<li><strong>Previous message:</strong> <a href="6508.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6505.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heh.  The list overrides the reply-to.  :-)
<br>
<p>Agreed -- let's you, me, and Brian discuss off-list and let anyone who  
<br>
cares know what the final solution is that we come up with.
<br>
<p>FWIW, we've become quite fond of developing in mercurial branches and  
<br>
pushing them somewhere to share when you want to get others opinions  
<br>
before committing to the trunk.  bitbucket.org, for example, offers  
<br>
free mercurial hosting.  I use it quite heavily.
<br>
<p><p>On Jul 22, 2009, at 1:46 PM, Iain Bason wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 22, 2009, at 10:55 AM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The current autodetect implementation seems like the wrong approach
</span><br>
<span class="quotelev2">&gt; &gt; to me. I'm rather unhappy the base functionality was hacked up like
</span><br>
<span class="quotelev2">&gt; &gt; it was without any advanced notice or questions about original
</span><br>
<span class="quotelev2">&gt; &gt; design intent. We seem to have a set of base functions which are now
</span><br>
<span class="quotelev2">&gt; &gt; more unreadable than before, overly complex, and which leak memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, I should apologize for my procedural misstep.  I had asked my
</span><br>
<span class="quotelev1">&gt; group here at Sun whether I should do an RFC or something, and I guess
</span><br>
<span class="quotelev1">&gt; I didn't make my question clear enough.  I was under the impression
</span><br>
<span class="quotelev1">&gt; that I should check something in and let people comment on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, I would argue that there are good reasons for adding
</span><br>
<span class="quotelev1">&gt; some complexity to the base component:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The pre-existing implementation of expansion is broken (although
</span><br>
<span class="quotelev1">&gt; the cases for which it is broken are somewhat obscure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The autodetect component cannot set more than one directory without
</span><br>
<span class="quotelev1">&gt; some knowledge of the relationships amongst the various directories.
</span><br>
<span class="quotelev1">&gt; Giving it that knowledge would violate the independence of the
</span><br>
<span class="quotelev1">&gt; components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can see #1 by doing &quot;OPAL_PREFIX='${datarootdir}/..'
</span><br>
<span class="quotelev1">&gt; OPAL_DATAROOTDIR='/opt/SUNWhpc/HPC8.2/share' mpirun hostname&quot; (if you
</span><br>
<span class="quotelev1">&gt; have installed in /opt/SUNWhpc/HPC8.2).  Yes, I know, &quot;Why would
</span><br>
<span class="quotelev1">&gt; anyone do that?&quot;  Nonetheless, I find that a poor excuse for having a
</span><br>
<span class="quotelev1">&gt; bug in the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To expand on #2 a little, consider the case where OpenMPI is
</span><br>
<span class="quotelev1">&gt; configured with &quot;--prefix=/path/one --libdir=/path/two&quot;.  We can tell
</span><br>
<span class="quotelev1">&gt; that libopen-pal is in /path/two, but it is not correct to assume that
</span><br>
<span class="quotelev1">&gt; the prefix is therefore /path.  (Unfortunately, there is code in
</span><br>
<span class="quotelev1">&gt; OpenMPI that does make that sort of assumption -- see orterun.c.)  We
</span><br>
<span class="quotelev1">&gt; need information from the config component to avoid making incorrect
</span><br>
<span class="quotelev1">&gt; assumptions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are, of course, alternate ways of getting to the same point.
</span><br>
<span class="quotelev1">&gt; But it is not feasible simply to leave the design of the base
</span><br>
<span class="quotelev1">&gt; component unchanged.  (More on that below.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for readability, I am always open to constructive suggestions as to
</span><br>
<span class="quotelev1">&gt; how to make code more readable.  I didn't fix the memory leak because
</span><br>
<span class="quotelev1">&gt; I hadn't yet found a way to do that without decreasing readability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The intent of the installdirs framework was to allow this type of
</span><br>
<span class="quotelev2">&gt; &gt; behavior, but without rehacking all this infer crap into base.  The
</span><br>
<span class="quotelev2">&gt; &gt; autodetect component should just set $prefix in the set of functions
</span><br>
<span class="quotelev2">&gt; &gt; it returns (and possibly libdir and bindir if you really want, which
</span><br>
<span class="quotelev2">&gt; &gt; might actually make sense if you guess wrong), and let the expansion
</span><br>
<span class="quotelev2">&gt; &gt; code take over from there.  The general thought on how this would
</span><br>
<span class="quotelev2">&gt; &gt; work went something like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Run after config
</span><br>
<span class="quotelev2">&gt; &gt; - If determine you have a special $prefix, set the
</span><br>
<span class="quotelev2">&gt; &gt;   opal_instal_dirs.prefix to NULL (yes, it's a bit of a hack) and
</span><br>
<span class="quotelev2">&gt; &gt;   set your special prefix.
</span><br>
<span class="quotelev2">&gt; &gt; - Same with bindir and libdir if needed
</span><br>
<span class="quotelev2">&gt; &gt; - Let expansion (which runs after all components have had the
</span><br>
<span class="quotelev2">&gt; &gt;   chance to fill in their fields) expand out with your special
</span><br>
<span class="quotelev2">&gt; &gt;   data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we run the autodetect component after config, and allow it to
</span><br>
<span class="quotelev1">&gt; override values that are already in opal_install_dirs, then there will
</span><br>
<span class="quotelev1">&gt; be no way for users to have environment variables take precedence.
</span><br>
<span class="quotelev1">&gt; (Let's say someone runs with OPAL_LIBDIR=/foo.  The autodetect
</span><br>
<span class="quotelev1">&gt; component will not know whether opal_install_dirs.libdir has been set
</span><br>
<span class="quotelev1">&gt; by the env component or by the config component.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, if the user has used an environment variable to override one
</span><br>
<span class="quotelev1">&gt; of the paths in the config component, then the autodetect component
</span><br>
<span class="quotelev1">&gt; may make the wrong inference.  For example, let's say someone runs
</span><br>
<span class="quotelev1">&gt; with OPAL_LIBDIR=/foo.  The autodetect component finds libopen-pal  
</span><br>
<span class="quotelev1">&gt; in /
</span><br>
<span class="quotelev1">&gt; usr/renamed/lib, and sets opal_install_dirs.libdir to /usr/renamed/
</span><br>
<span class="quotelev1">&gt; lib.  However, it has to use the config component's idea of libdir
</span><br>
<span class="quotelev1">&gt; (e.g., ${exec_prefix}/lib) to correctly infer that prefix should be /
</span><br>
<span class="quotelev1">&gt; usr/renamed.  Since it only has /foo from the environment variable, it
</span><br>
<span class="quotelev1">&gt; will have to decide that it cannot infer the prefix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of this will lead to behavior that users will have trouble
</span><br>
<span class="quotelev1">&gt; diagnosing.  While I appreciate simple code, I think that a simple
</span><br>
<span class="quotelev1">&gt; user interface is more important.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We could add some infrastructure so that the autodetect component can
</span><br>
<span class="quotelev1">&gt; figure out the provenance of each field in opal_install_dirs, but that
</span><br>
<span class="quotelev1">&gt; would make the boundary between the base component and the autodetect
</span><br>
<span class="quotelev1">&gt; component unclear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; And the base stays simple, the components do all the heavy lifting,
</span><br>
<span class="quotelev2">&gt; &gt; and life is happy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Except in the cases where it doesn't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I would not be opposed to putting in a &quot;find expaneded part&quot; type
</span><br>
<span class="quotelev2">&gt; &gt; function that takes two strings like &quot;${prefix}/lib&quot; and &quot;/usr/ 
</span><br>
<span class="quotelev1">&gt; local/
</span><br>
<span class="quotelev2">&gt; &gt; lib&quot; and returns &quot;/usr/local&quot; being added to the base so that other
</span><br>
<span class="quotelev2">&gt; &gt; autodetect-style components don't need to handle such a case, but
</span><br>
<span class="quotelev2">&gt; &gt; that's about the extent of the base changes I think are appropriate.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Finally, a first quick code review reveals a couple of problems:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - We don't AC_SUBST variables adding .lo files to build sources in
</span><br>
<span class="quotelev2">&gt; &gt;   OMPI.  Instead, we use AM_CONDITIONALS to add sources as needed.
</span><br>
<span class="quotelev2">&gt; &gt; - Obviously, there's a problem with the _happy variable name
</span><br>
<span class="quotelev2">&gt; &gt;   consistency in configure.m4
</span><br>
<span class="quotelev2">&gt; &gt; - There's a naming convention issue - files should all start with
</span><br>
<span class="quotelev2">&gt; &gt;   opal_installdirs_autodetect_, and a number of the added files
</span><br>
<span class="quotelev2">&gt; &gt;   do not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.  I will fix those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; - From a finding code standpoint, I'd rather walkcontext.c and
</span><br>
<span class="quotelev2">&gt; &gt;   backtrace.c be one file with #ifs - for such short functions,
</span><br>
<span class="quotelev2">&gt; &gt;   it makes it more obvious that it's just portability  
</span><br>
<span class="quotelev1">&gt; implementations
</span><br>
<span class="quotelev2">&gt; &gt;   of the same function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid we'll just have to disagree on the aesthetics of this.  I
</span><br>
<span class="quotelev1">&gt; find that #ifs almost always make code harder to follow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I'm willing to hold my nose if necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd be happy to discuss the issues further or review any code before
</span><br>
<span class="quotelev2">&gt; &gt; it gets committed.  But I think the changes as they exist today
</span><br>
<span class="quotelev2">&gt; &gt; (even with bugs fixed) aren't consistent with what the installdirs
</span><br>
<span class="quotelev2">&gt; &gt; framework was trying to accomplish and should be reworked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's discuss this off-alias.  I have set the reply-to field
</span><br>
<span class="quotelev1">&gt; accordingly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6510.php">Jeff Squyres: "[OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<li><strong>Previous message:</strong> <a href="6508.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6505.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
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
