<?
$subject_val = "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 10:21:04 2008" -->
<!-- isoreceived="20081011142104" -->
<!-- sent="Sat, 11 Oct 2008 18:20:58 +0400" -->
<!-- isosent="20081011142058" -->
<!-- name="Aleksej Saushev" -->
<!-- email="asau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful" -->
<!-- id="87ljwvkyb9.fsf_at_inbox.ru" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8E4F716A-E0FA-4D60-BF7B-389C8D119ECE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful<br>
<strong>From:</strong> Aleksej Saushev (<em>asau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-11 10:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On Oct 11, 2008, at 6:48 AM, Aleksej Saushev wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The actual message states:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [asau.local:25752] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init_stage1.c at line 182
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  Even with all your output, I still don't see what could be
</span><br>
<span class="quotelev1">&gt; causing this -- the oob rml plugin was compiled and installed
</span><br>
<span class="quotelev1">&gt; just  fine.  Do you see an oob rml line in the output of
</span><br>
<span class="quotelev1">&gt; ompi_info?
</span><br>
<p>$ ompi_info | grep oob
<br>
[asau.local:00985] mca: base: components_open: Looking for ras components
<br>
[asau.local:00985] mca: base: components_open: distilling ras components
<br>
[asau.local:00985] mca: base: components_open: accepting all ras components
<br>
[asau.local:00985] mca: base: components_open: opening ras components
<br>
[asau.local:00985] mca: base: components_open: found loaded component dash_host
<br>
[asau.local:00985] mca: base: components_open: component dash_host open function successful
<br>
[asau.local:00985] mca: base: components_open: found loaded component gridengine
<br>
[asau.local:00985] mca: base: components_open: component gridengine open function successful
<br>
[asau.local:00985] mca: base: components_open: found loaded component localhost
<br>
[asau.local:00985] mca: base: components_open: component localhost open function successful
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.7)
<br>
<p><span class="quotelev1">&gt; Is there a chance that there's some dependent library of oob_rml
</span><br>
<span class="quotelev1">&gt; that  is available on your head/build node, but not available on
</span><br>
<span class="quotelev1">&gt; your back- 
</span><br>
<span class="quotelev1">&gt; end nodes?  (that would be pretty odd, though)
</span><br>
<p>Very unlikely. Unless you don't install it at &quot;make install&quot; time,
<br>
it is there. Host and target are the same (identical).
<br>
Any particular library (set of libraries) to check?
<br>
<p><span class="quotelev1">&gt; Bummer -- it looks like we have a bug in the debugging output
</span><br>
<span class="quotelev1">&gt; for when  rml plugins are selected -- so I can't just give you
</span><br>
<span class="quotelev1">&gt; an mpirun command  line that will output some additional
</span><br>
<span class="quotelev1">&gt; diagnostic information.  Do you  mind getting your hands dirty
</span><br>
<span class="quotelev1">&gt; in a little code?  If so, edit this  file:
</span><br>
<span class="quotelev1">&gt; orte/mca/rml/base/rml_base_select.c and change all instances of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    opal_output_verbose(xxx, orte_rml_base.rml_output, ...)
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;    opaL_output(orte_rml_base.rml_output, ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then compile/install that with (this is a shortcut; of
</span><br>
<span class="quotelev1">&gt; course, you  can do a top-level &quot;make install&quot; to install it,
</span><br>
<span class="quotelev1">&gt; but it's a bit  overkill for what we need for this bit):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    cd orte/rml
</span><br>
<span class="quotelev1">&gt;    make
</span><br>
<span class="quotelev1">&gt;    cd ../..
</span><br>
<span class="quotelev1">&gt;    make install-am
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then run with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun --mca rml_base_debug 100 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And see what the output tells you.  When I do this with a
</span><br>
<span class="quotelev1">&gt; successful  run, my output looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [5:38] svbu-mpi:~/mpi % mpirun -np 1 --mca rml_base_debug 100 hello
</span><br>
<span class="quotelev1">&gt; [svbu-mpi.cisco.com:02087] orte_rml_base_select: initializing
</span><br>
<span class="quotelev1">&gt; rml  component oob
</span><br>
<span class="quotelev1">&gt; [svbu-mpi030:10587] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev1">&gt; stdout: Hello, world!  I am 0 of 1 (svbu-mpi030)
</span><br>
<span class="quotelev1">&gt; stderr: Hello, world!  I am 0 of 1 (svbu-mpi030)
</span><br>
<span class="quotelev1">&gt; [5:39] svbu-mpi:~/mpi %
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (my &quot;hello&quot; program simply prints out the hello world message on
</span><br>
<span class="quotelev1">&gt; both  stdout/stderr)
</span><br>
<p>$ mpirun --mca rml_base_debug 100 -np 2 skosfile
<br>
[asau.local:09060] mca: base: components_open: Looking for rml components
<br>
[asau.local:09060] mca: base: components_open: distilling rml components
<br>
[asau.local:09060] mca: base: components_open: accepting all rml components
<br>
[asau.local:09060] mca: base: components_open: opening rml components
<br>
[asau.local:09060] mca: base: components_open: found loaded component oob
<br>
[asau.local:09060] mca: base: components_open: component oob open function successful
<br>
[asau.local:09060] orte_rml_base_select: initializing rml component oob
<br>
[asau.local:09060] orte_rml_base_select: init returned failure
<br>
[asau.local:09060] orte_rml_base_select: module oob unloaded
<br>
[asau.local:09060] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[asau.local:09060] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_system_init.c at line 42
<br>
[asau.local:09060] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p><span class="quotelev2">&gt;&gt; Additional information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pkgsrc framework does work correctly here, it even catches or
</span><br>
<span class="quotelev2">&gt;&gt; overrides some incompatibilities, when building OpenMPI from the
</span><br>
<span class="quotelev2">&gt;&gt; same tarball without pkgsrc framework, I get this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing - 
</span><br>
<span class="quotelev2">&gt;&gt; pthread -MT backtrace_none_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; backtrace_none_component.Tpo -c backtrace_none_component.c
</span><br>
<span class="quotelev2">&gt;&gt; -fPIC - 
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o .libs/backtrace_none_component.o
</span><br>
<span class="quotelev2">&gt;&gt; backtrace_none_component.c:41: error: expected expression
</span><br>
<span class="quotelev2">&gt;&gt; before ','  token
</span><br>
<span class="quotelev2">&gt;&gt; backtrace_none_component.c:51: warning: braces around scalar
</span><br>
<span class="quotelev2">&gt;&gt; initializer
</span><br>
<span class="quotelev2">&gt;&gt; backtrace_none_component.c:51: warning: (near initialization
</span><br>
<span class="quotelev2">&gt;&gt; for  'mca_backtrace_none_component
</span><br>
<span class="quotelev2">&gt;&gt; .backtracec_version.mca_component_release_version')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's also odd.  I don't see any problems in the source code in
</span><br>
<span class="quotelev1">&gt; this  particular area.  What is the output of this area of the
</span><br>
<span class="quotelev1">&gt; code when  compiled with -E?  It should show some obvious
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<p>I'll check this a bit later, if you don't object.
<br>
<p><p><pre>
-- 
HE CE3OH...
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="6963.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
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
