<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 11:20:16 2007" -->
<!-- isoreceived="20071016152016" -->
<!-- sent="Tue, 16 Oct 2007 09:20:10 -0600" -->
<!-- isosent="20071016152010" -->
<!-- name="Brian Granger" -->
<!-- email="ellisonbg.net_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="6ce0ac130710160820i14e1fe20o3627da6f7febf9cf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7C05A1CE-A646-4A77-802F-A3ED268ECC20_at_cisco.com" -->
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
<strong>From:</strong> Brian Granger (<em>ellisonbg.net_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-16 11:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Wow, that is quite a study of the different options.  I will spend
<br>
some time looking over things to better understand the (complex)
<br>
situation.  I will also talk with Lisandro Dalcin about what he thinks
<br>
the best approach is for mpi4py.  One question though.  You said that
<br>
nothing had changed in this respect from 1.2.3 to 1.2.4, but 1.2.3
<br>
doesn't show the problem.  Does this make sense?
<br>
<p>Brian
<br>
<p>On 10/16/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 12, 2007, at 3:5 PM, Brian Granger wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My guess is that Rmpi is dynamically loading libmpi.so, but not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; specifying the RTLD_GLOBAL flag. This means that libmpi.so is not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; available to the components the way it should be, and all goes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; downhill from there. It only mostly works because we do something
</span><br>
<span class="quotelev3">&gt; &gt; &gt; silly with how we link most of our components, and Linux is just
</span><br>
<span class="quotelev3">&gt; &gt; &gt; smart enough to cover our rears (thankfully).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In mpi4py, libmpi.so is linked in at compile time, not loaded using
</span><br>
<span class="quotelev2">&gt; &gt; dlopen. Granted, the resulting mpi4py binary is loaded into python
</span><br>
<span class="quotelev2">&gt; &gt; using dlopen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that means that libmpi.so will be loaded as an indirect
</span><br>
<span class="quotelev1">&gt; dependency of mpi4py.  See the table below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The pt2pt component (rightly) does not have a -lmpi in its link
</span><br>
<span class="quotelev3">&gt; &gt; &gt; line. The other components that use symbols in libmpi.so (wrongly)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; do have a -lmpi in their link line. This can cause some problems on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; some platforms (Linux tends to do dynamic linking / dynamic loading
</span><br>
<span class="quotelev3">&gt; &gt; &gt; better than most). That's why only the pt2pt component fails.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did this change from 1.2.3 to 1.2.4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % diff openmpi-1.2.3/ompi/mca/osc/pt2pt/Makefile.am openmpi-1.2.4/
</span><br>
<span class="quotelev1">&gt; ompi/mca/osc/pt2pt/Makefile.am
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Solutions:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Someone could make the pt2pt osc component link in libmpi.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; like the rest of the components and hope that no one ever
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tries this on a non-friendly platform.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't the openmpi build system be able to figure this stuff out on
</span><br>
<span class="quotelev2">&gt; &gt; a per platform basis?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that this would not be useful -- see the tables and
</span><br>
<span class="quotelev1">&gt; conclusions below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Debian (and all Rmpi users) could configure Open MPI with the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --disable-dlopen flag and ignore the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are there disadvantages to this approach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You won't be able to add more OMPI components to your existing
</span><br>
<span class="quotelev1">&gt; installation (e.g., 3rd party components).  But that's probably ok,
</span><br>
<span class="quotelev1">&gt; at least for now -- not many people are distributing 3rd party OMPI
</span><br>
<span class="quotelev1">&gt; components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Someone could fix Rmpi to dlopen libmpi.so with the RTLD_GLOBAL
</span><br>
<span class="quotelev3">&gt; &gt; &gt; flag and fix the problem properly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Again, my main problem with this solution is that it means I must both
</span><br>
<span class="quotelev2">&gt; &gt; link to libmpi at compile time and load it dynamically using dlopen.
</span><br>
<span class="quotelev2">&gt; &gt; This doesn't seem right. Also, it makes it impossible on OS X to
</span><br>
<span class="quotelev2">&gt; &gt; avoid setting LD_LIBRARY_PATH (OS X doesn't have rpath). Being able
</span><br>
<span class="quotelev2">&gt; &gt; to use openmpi without setting LD_LIBRARY_PATH is important.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a very complex issue.  Here's the possibilities that I see...
</span><br>
<span class="quotelev1">&gt; (prepare for confusion!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This first table represents what happens in the following scenarios:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - compile an application against Open MPI's libmpi, or
</span><br>
<span class="quotelev1">&gt; - compile an &quot;application&quot; DSO that is dlopen'ed with RTLD_GLOBAL, or
</span><br>
<span class="quotelev1">&gt; - explicitly dlopen Open MPI's libmpi with RTLD_GLOBAL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                              OMPI DSO
</span><br>
<span class="quotelev1">&gt;                   libmpi        OMPI DSO     components
</span><br>
<span class="quotelev1">&gt;      App linked   includes      components   depend on
</span><br>
<span class="quotelev1">&gt;      against      components?   available?   libmpi.so?   Result
</span><br>
<span class="quotelev1">&gt;      ----------   -----------   ----------   ----------   ----------
</span><br>
<span class="quotelev1">&gt; 1.  libmpi.so        no           no            NA       won't run
</span><br>
<span class="quotelev1">&gt; 2.  libmpi.so        no           yes           no       yes
</span><br>
<span class="quotelev1">&gt; 3.  libmpi.so        no           yes           yes      yes (*1*)
</span><br>
<span class="quotelev1">&gt; 4.  libmpi.so        yes          no            NA       yes
</span><br>
<span class="quotelev1">&gt; 5.  libmpi.so        yes          yes           no       maybe (*2*)
</span><br>
<span class="quotelev1">&gt; 6.  libmpi.so        yes          yes           yes      maybe (*3*)
</span><br>
<span class="quotelev1">&gt;      ----------  ------------  ----------  ------------   ----------
</span><br>
<span class="quotelev1">&gt; 7.  libmpi.a         no           no            NA       won't run
</span><br>
<span class="quotelev1">&gt; 8.  libmpi.a         no           yes           no       yes (*4*)
</span><br>
<span class="quotelev1">&gt; 9.  libmpi.a         no           yes           yes      no (*5*)
</span><br>
<span class="quotelev1">&gt; 10. libmpi.a         yes          no            NA       yes
</span><br>
<span class="quotelev1">&gt; 11. libmpi.a         yes          yes           no       maybe (*6*)
</span><br>
<span class="quotelev1">&gt; 12. libmpi.a         yes          yes           yes      no (*7*)
</span><br>
<span class="quotelev1">&gt;      ----------  ------------  ----------  ------------   --------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All libmpi.a scenarios assume that libmpi.so is also available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the OMPI v1.2 series, most components link against libmpi.so, but
</span><br>
<span class="quotelev1">&gt; some do not (it's our mistake for not being uniform).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*1*) As far as we know, this works on all platforms that have dlopen
</span><br>
<span class="quotelev1">&gt; (i.e., almost everywhere).  But we've only tested (recently) Linux,
</span><br>
<span class="quotelev1">&gt; OSX, and Solaris.  These 3 dynamic loaders are smart enough to realize
</span><br>
<span class="quotelev1">&gt; that they only need to load libmpi.so once (i.e., that the implicit
</span><br>
<span class="quotelev1">&gt; dependency of libmpi.so brought in by the components is the same
</span><br>
<span class="quotelev1">&gt; libmpi.so that is already loaded), so everything works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*2*) If the *same* component is both in libmpi and available as a
</span><br>
<span class="quotelev1">&gt; DSO, the same symbols will be defined twice when the component is
</span><br>
<span class="quotelev1">&gt; dlopen'ed and Badness will ensure.  If the components are different,
</span><br>
<span class="quotelev1">&gt; all platforms should be ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*3*) Same caveat as (*2*) about if a components is both in libmpi and
</span><br>
<span class="quotelev1">&gt; available as a DSO.  Same as (*1*) for whether libmpi.so is loaded
</span><br>
<span class="quotelev1">&gt; multiple times by the dynamic loader or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*4*) Only works if the application was compiled with the equivalent
</span><br>
<span class="quotelev1">&gt; of the GNU linker's --whole-archive flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*5*) This does not work because libmpi.a will be loaded and libmpi.so
</span><br>
<span class="quotelev1">&gt; will also be pulled in as a dependency of the components.  As such,
</span><br>
<span class="quotelev1">&gt; all the data structures in libmpi will [attempt to] be in the process
</span><br>
<span class="quotelev1">&gt; twice: the &quot;main libmpi&quot; will have one set and the libmpi pulled in by
</span><br>
<span class="quotelev1">&gt; the component dependencies will have a different set.  Nothing good will
</span><br>
<span class="quotelev1">&gt; come of that: possibly dynamic linker run-time symbol conflicts or
</span><br>
<span class="quotelev1">&gt; possibly two separate copies of the symbols.  Both possibilities are
</span><br>
<span class="quotelev1">&gt; Bad.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*6*) Same caveat as (*2*) about if a components is both in libmpi and
</span><br>
<span class="quotelev1">&gt; available as a DSO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*7*) Same problem as (*5*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This second table represents what happens in the following scenarios:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - compile an &quot;application&quot; DSO that is dlopen'ed with RTLD_LOCAL, or
</span><br>
<span class="quotelev1">&gt; - explicitly dlopen Open MPI's libmpi with RTLD_LOCAL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                              OMPI DSO
</span><br>
<span class="quotelev1">&gt;      App          libmpi        OMPI DSO     components
</span><br>
<span class="quotelev1">&gt;      DSO linked   includes      components   depend on
</span><br>
<span class="quotelev1">&gt;      against      components?   available?   libmpi.so?   Result
</span><br>
<span class="quotelev1">&gt;      ----------   -----------   ----------   ----------   ----------
</span><br>
<span class="quotelev1">&gt; 13. libmpi.so        no           no            NA       won't run
</span><br>
<span class="quotelev1">&gt; 14. libmpi.so        no           yes           no       no (*8*)
</span><br>
<span class="quotelev1">&gt; 15. libmpi.so        no           yes           yes      maybe (*9*)
</span><br>
<span class="quotelev1">&gt; 16. libmpi.so        yes          no            NA       ok
</span><br>
<span class="quotelev1">&gt; 17. libmpi.so        yes          yes           no       no (*10*)
</span><br>
<span class="quotelev1">&gt; 18. libmpi.so        yes          yes           yes      maybe (*11*)
</span><br>
<span class="quotelev1">&gt;      ----------  ------------  ----------  ------------   ----------
</span><br>
<span class="quotelev1">&gt; 19. libmpi.a         no           no            NA       won't run
</span><br>
<span class="quotelev1">&gt; 20. libmpi.a         no           yes           no       no (*12*)
</span><br>
<span class="quotelev1">&gt; 21. libmpi.a         no           yes           yes      no (*13*)
</span><br>
<span class="quotelev1">&gt; 22. libmpi.a         yes          no            NA       ok
</span><br>
<span class="quotelev1">&gt; 23. libmpi.a         yes          yes           no       no (*14*)
</span><br>
<span class="quotelev1">&gt; 24. libmpi.a         yes          yes           yes      no (*15*)
</span><br>
<span class="quotelev1">&gt;      ----------  ------------  ----------  ------------   --------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All libmpi.a scenarios assume that libmpi.so is also available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*8*) This does not work because the OMPI DSOs require symbols in
</span><br>
<span class="quotelev1">&gt; libmpi that will not be able to be found because libmpi.so was not
</span><br>
<span class="quotelev1">&gt; loaded in the global scope.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*9*) This is a fun case: the Linux dynamic linker is smart enough to
</span><br>
<span class="quotelev1">&gt; make it work, but others likely will not.  What happens is that
</span><br>
<span class="quotelev1">&gt; libmpi.so is loaded in a LOCAL scope, but then OMPI dlopens its own
</span><br>
<span class="quotelev1">&gt; DSOs that require symbols from libmpi.  The Linux linker figures this
</span><br>
<span class="quotelev1">&gt; out and resolves the required symbols from the already-loaded LOCAL
</span><br>
<span class="quotelev1">&gt; libmpi.so.  Other linkers will fail to figure out that there is a
</span><br>
<span class="quotelev1">&gt; libmpi.so already loaded in the process and will therefore load a 2nd
</span><br>
<span class="quotelev1">&gt; copy.  This results in the problems cited in (*5*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*10*) This does not work either a) because of the caveat stated in
</span><br>
<span class="quotelev1">&gt; (*2*) or b) because the unresolved symbol issue stated in (*8*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*11*) This may not work either because of the caveat stated in (*2*)
</span><br>
<span class="quotelev1">&gt; or because the duplicate libmpi.so issue cited in (*9*).  If you are
</span><br>
<span class="quotelev1">&gt; using the Linux linker, then (*9*) is not an issue, and it should
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*12*) Essentially the same as the unresolved symbol issue cited in
</span><br>
<span class="quotelev1">&gt; (*8*), but with libmpi.a instead of libmpi.so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*13*) Worse than (*9*); the Linux linker will not figure this one out
</span><br>
<span class="quotelev1">&gt; because the libmpi.so symbols are not part of &quot;libmpi&quot; -- they are
</span><br>
<span class="quotelev1">&gt; simply part of the application DSO and therefore there's no way for
</span><br>
<span class="quotelev1">&gt; the linker to know that by loading libmpi.so, it's going to be loading
</span><br>
<span class="quotelev1">&gt; a 2nd set of the same symbols that are already in the process.  Hence,
</span><br>
<span class="quotelev1">&gt; we devolve down to the duplicate symbol issue cited in (*5*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*14*) This does not work either a) because of the caveat stated in
</span><br>
<span class="quotelev1">&gt; (*2*) or b) because the unresolved symbols issue stated in (*8*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*15*) This may not work either because of the caveat stated in (*2*)
</span><br>
<span class="quotelev1">&gt; or because the duplicate libmpi.so issue cited in (*13*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I'm going to put this data on the OMPI web site somewhere because it
</span><br>
<span class="quotelev1">&gt; took me all day yesterday to get it straight in my head and type it
</span><br>
<span class="quotelev1">&gt; out :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the OMPI v1.2 series, most OMPI configurations fall into scenarios
</span><br>
<span class="quotelev1">&gt; 2 and 3 (as I mentioned above, we have some components that link
</span><br>
<span class="quotelev1">&gt; against libmpi and others that don't -- our mistake for not being
</span><br>
<span class="quotelev1">&gt; consistent).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problematic scenario that the R and Python MPI plugins are
</span><br>
<span class="quotelev1">&gt; running into is 14 because the osc_pt2pt component does *not* link
</span><br>
<span class="quotelev1">&gt; against libmpi.  Most of the rest of our components do link against
</span><br>
<span class="quotelev1">&gt; libmpi, and therefore fall into scenario 15, and therefore work on
</span><br>
<span class="quotelev1">&gt; Linux (but possibly not elsewhere).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With all this being said, if you are looking for a general solution
</span><br>
<span class="quotelev1">&gt; for the Python and R plugins, dlopen() of libmpi with RTLD_GLOBAL
</span><br>
<span class="quotelev1">&gt; before MPI_INIT seems to be the way to go.  Specifically, even if we
</span><br>
<span class="quotelev1">&gt; updated osc_pt2pt to link against libmpi, that will work on Linux,
</span><br>
<span class="quotelev1">&gt; but not elsewhere.  dlopen'ing libmpi with GLOBAL seems to be the
</span><br>
<span class="quotelev1">&gt; most portable solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, table 1 also suggests that we should change our components
</span><br>
<span class="quotelev1">&gt; (as Brian suggests) to all *not* link against libmpi, because then
</span><br>
<span class="quotelev1">&gt; we'll gain the ability to work properly with a static libmpi.a,
</span><br>
<span class="quotelev1">&gt; putting OMPI's common usage into scenarios 2 and 8 (which is better
</span><br>
<span class="quotelev1">&gt; than the 2, 3, 8, and 9 scenarios that are used today, which means we
</span><br>
<span class="quotelev1">&gt; don't work with libmpi.a).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...but I think that this would break the current R and Python plugins
</span><br>
<span class="quotelev1">&gt; until they put in the explicit call to dlopen().
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
