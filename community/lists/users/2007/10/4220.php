<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 08:11:31 2007" -->
<!-- isoreceived="20071016121131" -->
<!-- sent="Tue, 16 Oct 2007 08:10:07 -0400" -->
<!-- isosent="20071016121007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="7C05A1CE-A646-4A77-802F-A3ED268ECC20_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6ce0ac130710101427p5b0e96e8ye078bca34fe6d386_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-16 08:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4219.php">Oleg Morajko: "Re: [OMPI users] Tool communication"</a>
<li><strong>In reply to:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<b>
<font color="red">Editor's note</font>:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    The tables in this post are available on the OMPI wiki in a much more readable format:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a>
<pre>
                                            OMPI DSO
                 libmpi        OMPI DSO     components
    App linked   includes      components   depend on
    against      components?   available?   libmpi.so?   Result
    ----------   -----------   ----------   ----------   ----------
1.  libmpi.so        no           no            NA       won't run
2.  libmpi.so        no           yes           no       yes
3.  libmpi.so        no           yes           yes      yes (*1*)
4.  libmpi.so        yes          no            NA       yes
5.  libmpi.so        yes          yes           no       maybe (*2*)
6.  libmpi.so        yes          yes           yes      maybe (*3*)
    ----------  ------------  ----------  ------------   ----------
7.  libmpi.a         no           no            NA       won't run
8.  libmpi.a         no           yes           no       yes (*4*)
9.  libmpi.a         no           yes           yes      no (*5*)
10. libmpi.a         yes          no            NA       yes
11. libmpi.a         yes          yes           no       maybe (*6*)
12. libmpi.a         yes          yes           yes      no (*7*)
    ----------  ------------  ----------  ------------   --------
13. libmpi.so        no           no            NA       won't run
14. libmpi.so        no           yes           no       no (*8*)
15. libmpi.so        no           yes           yes      maybe (*9*)
16. libmpi.so        yes          no            NA       ok
17. libmpi.so        yes          yes           no       no (*10*)
18. libmpi.so        yes          yes           yes      maybe (*11*)
    ----------  ------------  ----------  ------------   ----------
19. libmpi.a         no           no            NA       won't run
20. libmpi.a         no           yes           no       no (*12*)
21. libmpi.a         no           yes           yes      no (*13*)
22. libmpi.a         yes          no            NA       ok
23. libmpi.a         yes          yes           no       no (*14*)
24. libmpi.a         yes          yes           yes      no (*15*)
    ----------  ------------  ----------  ------------   --------
</pre>
<p>
<b>
<font color="red">Editor's note</font>:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    The tables in this post are available on the OMPI wiki in a much more readable format:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a>
<br>
<br>
<p>
On Oct 12, 2007, at 3:5 PM, Brian Granger wrote:
<br>
<span class="quotelev2">&gt; &gt; My guess is that Rmpi is dynamically loading libmpi.so, but not
</span><br>
<span class="quotelev2">&gt; &gt; specifying the RTLD_GLOBAL flag. This means that libmpi.so is not
</span><br>
<span class="quotelev2">&gt; &gt; available to the components the way it should be, and all goes
</span><br>
<span class="quotelev2">&gt; &gt; downhill from there. It only mostly works because we do something
</span><br>
<span class="quotelev2">&gt; &gt; silly with how we link most of our components, and Linux is just
</span><br>
<span class="quotelev2">&gt; &gt; smart enough to cover our rears (thankfully).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In mpi4py, libmpi.so is linked in at compile time, not loaded using
</span><br>
<span class="quotelev1">&gt; dlopen. Granted, the resulting mpi4py binary is loaded into python
</span><br>
<span class="quotelev1">&gt; using dlopen.
</span><br>
<p>I believe that means that libmpi.so will be loaded as an indirect  
<br>
dependency of mpi4py.  See the table below.
<br>
<p><span class="quotelev2">&gt; &gt; The pt2pt component (rightly) does not have a -lmpi in its link
</span><br>
<span class="quotelev2">&gt; &gt; line. The other components that use symbols in libmpi.so (wrongly)
</span><br>
<span class="quotelev2">&gt; &gt; do have a -lmpi in their link line. This can cause some problems on
</span><br>
<span class="quotelev2">&gt; &gt; some platforms (Linux tends to do dynamic linking / dynamic loading
</span><br>
<span class="quotelev2">&gt; &gt; better than most). That's why only the pt2pt component fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did this change from 1.2.3 to 1.2.4?
</span><br>
<p>No:
<br>
<p>% diff openmpi-1.2.3/ompi/mca/osc/pt2pt/Makefile.am openmpi-1.2.4/ 
<br>
ompi/mca/osc/pt2pt/Makefile.am
<br>
%
<br>
<p><span class="quotelev2">&gt; &gt; Solutions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Someone could make the pt2pt osc component link in libmpi.so
</span><br>
<span class="quotelev2">&gt; &gt; like the rest of the components and hope that no one ever
</span><br>
<span class="quotelev2">&gt; &gt; tries this on a non-friendly platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't the openmpi build system be able to figure this stuff out on
</span><br>
<span class="quotelev1">&gt; a per platform basis?
</span><br>
<p>I believe that this would not be useful -- see the tables and  
<br>
conclusions below.
<br>
<p><span class="quotelev2">&gt; &gt; - Debian (and all Rmpi users) could configure Open MPI with the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --disable-dlopen flag and ignore the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there disadvantages to this approach?
</span><br>
<p>You won't be able to add more OMPI components to your existing  
<br>
installation (e.g., 3rd party components).  But that's probably ok,  
<br>
at least for now -- not many people are distributing 3rd party OMPI  
<br>
components.
<br>
<p><span class="quotelev2">&gt; &gt; - Someone could fix Rmpi to dlopen libmpi.so with the RTLD_GLOBAL
</span><br>
<span class="quotelev2">&gt; &gt; flag and fix the problem properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, my main problem with this solution is that it means I must both
</span><br>
<span class="quotelev1">&gt; link to libmpi at compile time and load it dynamically using dlopen.
</span><br>
<span class="quotelev1">&gt; This doesn't seem right. Also, it makes it impossible on OS X to
</span><br>
<span class="quotelev1">&gt; avoid setting LD_LIBRARY_PATH (OS X doesn't have rpath). Being able
</span><br>
<span class="quotelev1">&gt; to use openmpi without setting LD_LIBRARY_PATH is important.
</span><br>
<p>This is a very complex issue.  Here's the possibilities that I see...  
<br>
(prepare for confusion!)
<br>
<p>======================================================================== 
<br>
==
<br>
<p>This first table represents what happens in the following scenarios:
<br>
<p>- compile an application against Open MPI's libmpi, or
<br>
- compile an &quot;application&quot; DSO that is dlopen'ed with RTLD_GLOBAL, or
<br>
- explicitly dlopen Open MPI's libmpi with RTLD_GLOBAL
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI DSO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi        OMPI DSO     components
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;App linked   includes      components   depend on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;against      components?   available?   libmpi.so?   Result
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----------   -----------   ----------   ----------   ----------
<br>
1.  libmpi.so        no           no            NA       won't run
<br>
2.  libmpi.so        no           yes           no       yes
<br>
3.  libmpi.so        no           yes           yes      yes (*1*)
<br>
4.  libmpi.so        yes          no            NA       yes
<br>
5.  libmpi.so        yes          yes           no       maybe (*2*)
<br>
6.  libmpi.so        yes          yes           yes      maybe (*3*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----------  ------------  ----------  ------------   ----------
<br>
7.  libmpi.a         no           no            NA       won't run
<br>
8.  libmpi.a         no           yes           no       yes (*4*)
<br>
9.  libmpi.a         no           yes           yes      no (*5*)
<br>
10. libmpi.a         yes          no            NA       yes
<br>
11. libmpi.a         yes          yes           no       maybe (*6*)
<br>
12. libmpi.a         yes          yes           yes      no (*7*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----------  ------------  ----------  ------------   --------
<br>
<p>All libmpi.a scenarios assume that libmpi.so is also available.
<br>
<p>In the OMPI v1.2 series, most components link against libmpi.so, but
<br>
some do not (it's our mistake for not being uniform).
<br>
<p>(*1*) As far as we know, this works on all platforms that have dlopen
<br>
(i.e., almost everywhere).  But we've only tested (recently) Linux,
<br>
OSX, and Solaris.  These 3 dynamic loaders are smart enough to realize
<br>
that they only need to load libmpi.so once (i.e., that the implicit
<br>
dependency of libmpi.so brought in by the components is the same
<br>
libmpi.so that is already loaded), so everything works fine.
<br>
<p>(*2*) If the *same* component is both in libmpi and available as a
<br>
DSO, the same symbols will be defined twice when the component is
<br>
dlopen'ed and Badness will ensure.  If the components are different,
<br>
all platforms should be ok.
<br>
<p>(*3*) Same caveat as (*2*) about if a components is both in libmpi and
<br>
available as a DSO.  Same as (*1*) for whether libmpi.so is loaded
<br>
multiple times by the dynamic loader or not.
<br>
<p>(*4*) Only works if the application was compiled with the equivalent
<br>
of the GNU linker's --whole-archive flag.
<br>
<p>(*5*) This does not work because libmpi.a will be loaded and libmpi.so
<br>
will also be pulled in as a dependency of the components.  As such,
<br>
all the data structures in libmpi will [attempt to] be in the process
<br>
twice: the &quot;main libmpi&quot; will have one set and the libmpi pulled in by
<br>
the component dependencies will have a different set.  Nothing good will
<br>
come of that: possibly dynamic linker run-time symbol conflicts or
<br>
possibly two separate copies of the symbols.  Both possibilities are
<br>
Bad.
<br>
<p>(*6*) Same caveat as (*2*) about if a components is both in libmpi and
<br>
available as a DSO.
<br>
<p>(*7*) Same problem as (*5*).
<br>
<p>======================================================================== 
<br>
==
<br>
<p>This second table represents what happens in the following scenarios:
<br>
<p>- compile an &quot;application&quot; DSO that is dlopen'ed with RTLD_LOCAL, or
<br>
- explicitly dlopen Open MPI's libmpi with RTLD_LOCAL
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI DSO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;App          libmpi        OMPI DSO     components
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DSO linked   includes      components   depend on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;against      components?   available?   libmpi.so?   Result
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----------   -----------   ----------   ----------   ----------
<br>
13. libmpi.so        no           no            NA       won't run
<br>
14. libmpi.so        no           yes           no       no (*8*)
<br>
15. libmpi.so        no           yes           yes      maybe (*9*)
<br>
16. libmpi.so        yes          no            NA       ok
<br>
17. libmpi.so        yes          yes           no       no (*10*)
<br>
18. libmpi.so        yes          yes           yes      maybe (*11*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----------  ------------  ----------  ------------   ----------
<br>
19. libmpi.a         no           no            NA       won't run
<br>
20. libmpi.a         no           yes           no       no (*12*)
<br>
21. libmpi.a         no           yes           yes      no (*13*)
<br>
22. libmpi.a         yes          no            NA       ok
<br>
23. libmpi.a         yes          yes           no       no (*14*)
<br>
24. libmpi.a         yes          yes           yes      no (*15*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----------  ------------  ----------  ------------   --------
<br>
<p>All libmpi.a scenarios assume that libmpi.so is also available.
<br>
<p>(*8*) This does not work because the OMPI DSOs require symbols in
<br>
libmpi that will not be able to be found because libmpi.so was not
<br>
loaded in the global scope.
<br>
<p>(*9*) This is a fun case: the Linux dynamic linker is smart enough to
<br>
make it work, but others likely will not.  What happens is that
<br>
libmpi.so is loaded in a LOCAL scope, but then OMPI dlopens its own
<br>
DSOs that require symbols from libmpi.  The Linux linker figures this
<br>
out and resolves the required symbols from the already-loaded LOCAL
<br>
libmpi.so.  Other linkers will fail to figure out that there is a
<br>
libmpi.so already loaded in the process and will therefore load a 2nd
<br>
copy.  This results in the problems cited in (*5*).
<br>
<p>(*10*) This does not work either a) because of the caveat stated in
<br>
(*2*) or b) because the unresolved symbol issue stated in (*8*).
<br>
<p>(*11*) This may not work either because of the caveat stated in (*2*)
<br>
or because the duplicate libmpi.so issue cited in (*9*).  If you are
<br>
using the Linux linker, then (*9*) is not an issue, and it should
<br>
work.
<br>
<p>(*12*) Essentially the same as the unresolved symbol issue cited in
<br>
(*8*), but with libmpi.a instead of libmpi.so.
<br>
<p>(*13*) Worse than (*9*); the Linux linker will not figure this one out
<br>
because the libmpi.so symbols are not part of &quot;libmpi&quot; -- they are
<br>
simply part of the application DSO and therefore there's no way for
<br>
the linker to know that by loading libmpi.so, it's going to be loading
<br>
a 2nd set of the same symbols that are already in the process.  Hence,
<br>
we devolve down to the duplicate symbol issue cited in (*5*).
<br>
<p>(*14*) This does not work either a) because of the caveat stated in
<br>
(*2*) or b) because the unresolved symbols issue stated in (*8*).
<br>
<p>(*15*) This may not work either because of the caveat stated in (*2*)
<br>
or because the duplicate libmpi.so issue cited in (*13*).
<br>
<p>======================================================================== 
<br>
==
<br>
<p>(I'm going to put this data on the OMPI web site somewhere because it  
<br>
took me all day yesterday to get it straight in my head and type it  
<br>
out :-) )
<br>
<p>In the OMPI v1.2 series, most OMPI configurations fall into scenarios  
<br>
2 and 3 (as I mentioned above, we have some components that link  
<br>
against libmpi and others that don't -- our mistake for not being  
<br>
consistent).
<br>
<p>The problematic scenario that the R and Python MPI plugins are  
<br>
running into is 14 because the osc_pt2pt component does *not* link  
<br>
against libmpi.  Most of the rest of our components do link against  
<br>
libmpi, and therefore fall into scenario 15, and therefore work on  
<br>
Linux (but possibly not elsewhere).
<br>
<p>With all this being said, if you are looking for a general solution  
<br>
for the Python and R plugins, dlopen() of libmpi with RTLD_GLOBAL  
<br>
before MPI_INIT seems to be the way to go.  Specifically, even if we  
<br>
updated osc_pt2pt to link against libmpi, that will work on Linux,  
<br>
but not elsewhere.  dlopen'ing libmpi with GLOBAL seems to be the  
<br>
most portable solution.
<br>
<p>Indeed, table 1 also suggests that we should change our components  
<br>
(as Brian suggests) to all *not* link against libmpi, because then  
<br>
we'll gain the ability to work properly with a static libmpi.a,  
<br>
putting OMPI's common usage into scenarios 2 and 8 (which is better  
<br>
than the 2, 3, 8, and 9 scenarios that are used today, which means we  
<br>
don't work with libmpi.a).
<br>
<p>...but I think that this would break the current R and Python plugins  
<br>
until they put in the explicit call to dlopen().
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4219.php">Oleg Morajko: "Re: [OMPI users] Tool communication"</a>
<li><strong>In reply to:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
