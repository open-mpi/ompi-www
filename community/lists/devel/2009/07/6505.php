<?
$subject_val = "Re: [OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 13:46:50 2009" -->
<!-- isoreceived="20090722174650" -->
<!-- sent="Wed, 22 Jul 2009 13:46:24 -0400" -->
<!-- isosent="20090722174624" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autodetect broken" -->
<!-- id="B1E73E76-49B0-4BCC-8B2C-7364F9DB6F2C_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0907221031550.12286_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 13:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6506.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6504.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6497.php">Brian W. Barrett: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 22, 2009, at 10:55 AM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; The current autodetect implementation seems like the wrong approach  
</span><br>
<span class="quotelev1">&gt; to me. I'm rather unhappy the base functionality was hacked up like  
</span><br>
<span class="quotelev1">&gt; it was without any advanced notice or questions about original  
</span><br>
<span class="quotelev1">&gt; design intent. We seem to have a set of base functions which are now  
</span><br>
<span class="quotelev1">&gt; more unreadable than before, overly complex, and which leak memory.
</span><br>
<p>First, I should apologize for my procedural misstep.  I had asked my  
<br>
group here at Sun whether I should do an RFC or something, and I guess  
<br>
I didn't make my question clear enough.  I was under the impression  
<br>
that I should check something in and let people comment on it.
<br>
<p>That being said, I would argue that there are good reasons for adding  
<br>
some complexity to the base component:
<br>
<p>1. The pre-existing implementation of expansion is broken (although  
<br>
the cases for which it is broken are somewhat obscure).
<br>
<p>2. The autodetect component cannot set more than one directory without  
<br>
some knowledge of the relationships amongst the various directories.   
<br>
Giving it that knowledge would violate the independence of the  
<br>
components.
<br>
<p>You can see #1 by doing &quot;OPAL_PREFIX='${datarootdir}/..'  
<br>
OPAL_DATAROOTDIR='/opt/SUNWhpc/HPC8.2/share' mpirun hostname&quot; (if you  
<br>
have installed in /opt/SUNWhpc/HPC8.2).  Yes, I know, &quot;Why would  
<br>
anyone do that?&quot;  Nonetheless, I find that a poor excuse for having a  
<br>
bug in the code.
<br>
<p>To expand on #2 a little, consider the case where OpenMPI is  
<br>
configured with &quot;--prefix=/path/one --libdir=/path/two&quot;.  We can tell  
<br>
that libopen-pal is in /path/two, but it is not correct to assume that  
<br>
the prefix is therefore /path.  (Unfortunately, there is code in  
<br>
OpenMPI that does make that sort of assumption -- see orterun.c.)  We  
<br>
need information from the config component to avoid making incorrect  
<br>
assumptions.
<br>
<p>There are, of course, alternate ways of getting to the same point.   
<br>
But it is not feasible simply to leave the design of the base  
<br>
component unchanged.  (More on that below.)
<br>
<p>As for readability, I am always open to constructive suggestions as to  
<br>
how to make code more readable.  I didn't fix the memory leak because  
<br>
I hadn't yet found a way to do that without decreasing readability.
<br>
<p><span class="quotelev1">&gt; The intent of the installdirs framework was to allow this type of  
</span><br>
<span class="quotelev1">&gt; behavior, but without rehacking all this infer crap into base.  The  
</span><br>
<span class="quotelev1">&gt; autodetect component should just set $prefix in the set of functions  
</span><br>
<span class="quotelev1">&gt; it returns (and possibly libdir and bindir if you really want, which  
</span><br>
<span class="quotelev1">&gt; might actually make sense if you guess wrong), and let the expansion  
</span><br>
<span class="quotelev1">&gt; code take over from there.  The general thought on how this would  
</span><br>
<span class="quotelev1">&gt; work went something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Run after config
</span><br>
<span class="quotelev1">&gt; - If determine you have a special $prefix, set the
</span><br>
<span class="quotelev1">&gt;   opal_instal_dirs.prefix to NULL (yes, it's a bit of a hack) and
</span><br>
<span class="quotelev1">&gt;   set your special prefix.
</span><br>
<span class="quotelev1">&gt; - Same with bindir and libdir if needed
</span><br>
<span class="quotelev1">&gt; - Let expansion (which runs after all components have had the
</span><br>
<span class="quotelev1">&gt;   chance to fill in their fields) expand out with your special
</span><br>
<span class="quotelev1">&gt;   data
</span><br>
<p>If we run the autodetect component after config, and allow it to  
<br>
override values that are already in opal_install_dirs, then there will  
<br>
be no way for users to have environment variables take precedence.   
<br>
(Let's say someone runs with OPAL_LIBDIR=/foo.  The autodetect  
<br>
component will not know whether opal_install_dirs.libdir has been set  
<br>
by the env component or by the config component.)
<br>
<p>Moreover, if the user has used an environment variable to override one  
<br>
of the paths in the config component, then the autodetect component  
<br>
may make the wrong inference.  For example, let's say someone runs  
<br>
with OPAL_LIBDIR=/foo.  The autodetect component finds libopen-pal in / 
<br>
usr/renamed/lib, and sets opal_install_dirs.libdir to /usr/renamed/ 
<br>
lib.  However, it has to use the config component's idea of libdir  
<br>
(e.g., ${exec_prefix}/lib) to correctly infer that prefix should be / 
<br>
usr/renamed.  Since it only has /foo from the environment variable, it  
<br>
will have to decide that it cannot infer the prefix.
<br>
<p>All of this will lead to behavior that users will have trouble  
<br>
diagnosing.  While I appreciate simple code, I think that a simple  
<br>
user interface is more important.
<br>
<p>We could add some infrastructure so that the autodetect component can  
<br>
figure out the provenance of each field in opal_install_dirs, but that  
<br>
would make the boundary between the base component and the autodetect  
<br>
component unclear.
<br>
<p><span class="quotelev1">&gt; And the base stays simple, the components do all the heavy lifting,  
</span><br>
<span class="quotelev1">&gt; and life is happy.
</span><br>
<p>Except in the cases where it doesn't work.
<br>
<p><span class="quotelev1">&gt;  I would not be opposed to putting in a &quot;find expaneded part&quot; type  
</span><br>
<span class="quotelev1">&gt; function that takes two strings like &quot;${prefix}/lib&quot; and &quot;/usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib&quot; and returns &quot;/usr/local&quot; being added to the base so that other  
</span><br>
<span class="quotelev1">&gt; autodetect-style components don't need to handle such a case, but  
</span><br>
<span class="quotelev1">&gt; that's about the extent of the base changes I think are appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, a first quick code review reveals a couple of problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - We don't AC_SUBST variables adding .lo files to build sources in
</span><br>
<span class="quotelev1">&gt;   OMPI.  Instead, we use AM_CONDITIONALS to add sources as needed.
</span><br>
<span class="quotelev1">&gt; - Obviously, there's a problem with the _happy variable name
</span><br>
<span class="quotelev1">&gt;   consistency in configure.m4
</span><br>
<span class="quotelev1">&gt; - There's a naming convention issue - files should all start with
</span><br>
<span class="quotelev1">&gt;   opal_installdirs_autodetect_, and a number of the added files
</span><br>
<span class="quotelev1">&gt;   do not.
</span><br>
<p>Thanks.  I will fix those.
<br>
<p><span class="quotelev1">&gt; - From a finding code standpoint, I'd rather walkcontext.c and
</span><br>
<span class="quotelev1">&gt;   backtrace.c be one file with #ifs - for such short functions,
</span><br>
<span class="quotelev1">&gt;   it makes it more obvious that it's just portability implementations
</span><br>
<span class="quotelev1">&gt;   of the same function.
</span><br>
<p>I'm afraid we'll just have to disagree on the aesthetics of this.  I  
<br>
find that #ifs almost always make code harder to follow.
<br>
<p>However, I'm willing to hold my nose if necessary.
<br>
<p><span class="quotelev1">&gt; I'd be happy to discuss the issues further or review any code before  
</span><br>
<span class="quotelev1">&gt; it gets committed.  But I think the changes as they exist today  
</span><br>
<span class="quotelev1">&gt; (even with bugs fixed) aren't consistent with what the installdirs  
</span><br>
<span class="quotelev1">&gt; framework was trying to accomplish and should be reworked.
</span><br>
<p>Let's discuss this off-alias.  I have set the reply-to field  
<br>
accordingly.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6506.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6504.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6497.php">Brian W. Barrett: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
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
