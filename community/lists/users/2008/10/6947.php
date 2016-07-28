<?
$subject_val = "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 06:49:00 2008" -->
<!-- isoreceived="20081011104900" -->
<!-- sent="Sat, 11 Oct 2008 14:48:51 +0400" -->
<!-- isosent="20081011104851" -->
<!-- name="Aleksej Saushev" -->
<!-- email="asau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful" -->
<!-- id="87zllbl84s.fsf_at_inbox.ru" -->
<!-- inreplyto="A7334BB6-56C8-4B4C-9A65-6E756779D9CB_at_cisco.com" -->
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
<strong>Date:</strong> 2008-10-11 06:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6948.php">Jeff Squyres: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6946.php">Gus Correa: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hello!
<br>
<p>Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; This is a very strange error; if this error message is from
</span><br>
<span class="quotelev1">&gt; v1.2.7,  then it means that the &quot;rml&quot; framework failed to select
</span><br>
<span class="quotelev1">&gt; a component  properly.  That should not happen, because there is
</span><br>
<span class="quotelev1">&gt; a single rml  component that should always be available for
</span><br>
<span class="quotelev1">&gt; selection (oob).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<p>Sure. Sorry, I overlooked it that time.
<br>
<p>PATH=/usr/bin:/bin:/usr/pkg/bin:/usr/local/bin:/usr/X11R6/bin
<br>
<p>LD_LIBRARY_PATH is unset, RPATH is to be hardcoded into executable,
<br>
and it gets there properly as revealed with stock readelf(1) tool.
<br>
<p><p>The actual message states:
<br>
<p>[asau.local:25752] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
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
[asau.local:25752] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_system_init.c at line 42
<br>
[asau.local:25752] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>configure.log is attached as configure.log.gz (see below).
<br>
<p>Overall configure output when building from pkgsrc framework
<br>
is attached as ompi-conf.log.gz (see below).
<br>
<p>Build output when building from pkgsrc framework is attached as
<br>
ompi-build.log.gz (see below).
<br>
<p>Installation output when installing from pkgsrc framework is
<br>
attached as ompi-in.log.gz (see below).
<br>
<p><p>Additional information.
<br>
<p>pkgsrc framework does work correctly here, it even catches or
<br>
overrides some incompatibilities, when building OpenMPI from the
<br>
same tarball without pkgsrc framework, I get this:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT backtrace_none_component.lo -MD -MP -MF .deps/backtrace_none_component.Tpo -c backtrace_none_component.c  -fPIC -DPIC -o .libs/backtrace_none_component.o
<br>
backtrace_none_component.c:41: error: expected expression before ',' token
<br>
backtrace_none_component.c:51: warning: braces around scalar initializer
<br>
backtrace_none_component.c:51: warning: (near initialization for 'mca_backtrace_none_component.backtracec_version.mca_component_release_version')
<br>
<p><p>Any further directions?
<br>
<p><p>



<br>
<br><p>
<p><pre>
-- 
HE CE3OH...
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6947/configure.log.gz">configure log</a>
</ul>
<!-- attachment="configure.log.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6947/ompi-conf.log.gz">configure output log</a>
</ul>
<!-- attachment="ompi-conf.log.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6947/ompi-build.log.gz">build log</a>
</ul>
<!-- attachment="ompi-build.log.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6947/ompi-in.log.gz">installation output</a>
</ul>
<!-- attachment="ompi-in.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6948.php">Jeff Squyres: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6946.php">Gus Correa: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="6952.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
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
