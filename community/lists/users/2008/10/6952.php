<?
$subject_val = "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 08:39:40 2008" -->
<!-- isoreceived="20081011123940" -->
<!-- sent="Sat, 11 Oct 2008 08:39:34 -0400" -->
<!-- isosent="20081011123934" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful" -->
<!-- id="8E4F716A-E0FA-4D60-BF7B-389C8D119ECE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87zllbl84s.fsf_at_inbox.ru" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-11 08:39:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6951.php">Jeff Squyres: "Re: [OMPI users] where is opal_install_dirs?"</a>
<li><strong>In reply to:</strong> <a href="6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2008, at 6:48 AM, Aleksej Saushev wrote:
<br>
<p><span class="quotelev1">&gt; The actual message states:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [asau.local:25752] [NO-NAME] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 182
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>Hmm.  Even with all your output, I still don't see what could be  
<br>
causing this -- the oob rml plugin was compiled and installed just  
<br>
fine.  Do you see an oob rml line in the output of ompi_info?
<br>
<p>Is there a chance that there's some dependent library of oob_rml that  
<br>
is available on your head/build node, but not available on your back- 
<br>
end nodes?  (that would be pretty odd, though)
<br>
<p>Bummer -- it looks like we have a bug in the debugging output for when  
<br>
rml plugins are selected -- so I can't just give you an mpirun command  
<br>
line that will output some additional diagnostic information.  Do you  
<br>
mind getting your hands dirty in a little code?  If so, edit this  
<br>
file: orte/mca/rml/base/rml_base_select.c and change all instances of
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(xxx, orte_rml_base.rml_output, ...)
<br>
to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opaL_output(orte_rml_base.rml_output, ...)
<br>
<p>And then compile/install that with (this is a shortcut; of course, you  
<br>
can do a top-level &quot;make install&quot; to install it, but it's a bit  
<br>
overkill for what we need for this bit):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cd orte/rml
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cd ../..
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make install-am
<br>
<p>Then run with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca rml_base_debug 100 ...
<br>
<p>And see what the output tells you.  When I do this with a successful  
<br>
run, my output looks like this:
<br>
<p><pre>
----
[5:38] svbu-mpi:~/mpi % mpirun -np 1 --mca rml_base_debug 100 hello
[svbu-mpi.cisco.com:02087] orte_rml_base_select: initializing rml  
component oob
[svbu-mpi030:10587] orte_rml_base_select: initializing rml component oob
stdout: Hello, world!  I am 0 of 1 (svbu-mpi030)
stderr: Hello, world!  I am 0 of 1 (svbu-mpi030)
[5:39] svbu-mpi:~/mpi %
-----
(my &quot;hello&quot; program simply prints out the hello world message on both  
stdout/stderr)
&gt; Additional information.
&gt;
&gt; pkgsrc framework does work correctly here, it even catches or
&gt; overrides some incompatibilities, when building OpenMPI from the
&gt; same tarball without pkgsrc framework, I get this:
&gt;
&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/ 
&gt; include -I../../../../orte/include -I../../../../ompi/include - 
&gt; I../../../.. -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
&gt; pthread -MT backtrace_none_component.lo -MD -MP -MF .deps/ 
&gt; backtrace_none_component.Tpo -c backtrace_none_component.c  -fPIC - 
&gt; DPIC -o .libs/backtrace_none_component.o
&gt; backtrace_none_component.c:41: error: expected expression before ','  
&gt; token
&gt; backtrace_none_component.c:51: warning: braces around scalar  
&gt; initializer
&gt; backtrace_none_component.c:51: warning: (near initialization for  
&gt; 'mca_backtrace_none_component 
&gt; .backtracec_version.mca_component_release_version')
That's also odd.  I don't see any problems in the source code in this  
particular area.  What is the output of this area of the code when  
compiled with -E?  It should show some obvious problem.
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6951.php">Jeff Squyres: "Re: [OMPI users] where is opal_install_dirs?"</a>
<li><strong>In reply to:</strong> <a href="6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
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
