<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 16:20:25 2007" -->
<!-- isoreceived="20070719202025" -->
<!-- sent="Thu, 19 Jul 2007 16:20:16 -0400" -->
<!-- isosent="20070719202016" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516" -->
<!-- id="6D3B0016-3346-42FE-96FB-61472694AE2D_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2C51BB1.A14F%rhc_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 16:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1956.php">Ralph H Castain: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Previous message:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<li><strong>In reply to:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, you're right. You store them in the launch environment, which  
<br>
will be used later by the ODLS to setup the environment for the child.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 19, 2007, at 3:46 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; I believe you may have misunderstood the change. I don't change  
</span><br>
<span class="quotelev1">&gt; anyone's
</span><br>
<span class="quotelev1">&gt; path in the middle of the run. I only alter the environment that  
</span><br>
<span class="quotelev1">&gt; the odls
</span><br>
<span class="quotelev1">&gt; uses to launch the child processes, and that gets applied to the  
</span><br>
<span class="quotelev1">&gt; child at
</span><br>
<span class="quotelev1">&gt; execve time. Mpirun's environment remains unchanged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'm not sure I understand your issue...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/19/07 1:23 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a *BIG DOUBT* about this approach. The problem will lead to
</span><br>
<span class="quotelev2">&gt;&gt; some really strange situations, as we change the LD_LIBRARY_PATH of a
</span><br>
<span class="quotelev2">&gt;&gt; process in the middle of the run. As a result the place from where we
</span><br>
<span class="quotelev2">&gt;&gt; load dynamic libraries before and after this call will potentially
</span><br>
<span class="quotelev2">&gt;&gt; became different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks to me that the correct fix should set the PATH and
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH only after the fork that will execve the child
</span><br>
<span class="quotelev2">&gt;&gt; process and not before. So, instead of having this code in the
</span><br>
<span class="quotelev2">&gt;&gt; orterun, we should have it in the ODLS ... But then the ODLS will
</span><br>
<span class="quotelev2">&gt;&gt; have to different behaviors: the case where the ODLS inherit the
</span><br>
<span class="quotelev2">&gt;&gt; environment from the orted [and then everything is already correctly
</span><br>
<span class="quotelev2">&gt;&gt; set because the orted did it] and the case it inherit the environment
</span><br>
<span class="quotelev2">&gt;&gt; from the orterun [and where the PATH and LD_LIBRARY_PATH are not yet
</span><br>
<span class="quotelev2">&gt;&gt; set].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 19, 2007, at 3:00 PM, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-07-19 15:00:06 EDT (Thu, 19 Jul 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 15516
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15516">https://svn.open-mpi.org/trac/ompi/changeset/15516</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ensure that the LD_LIBRARY_PATH and PATH get properly set for procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locally spawned by mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/orte/tools/orterun/orterun.c |    55 ++++++++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++++++++++++++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1 files changed, 52 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/orte/tools/orterun/orterun.c (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/tools/orterun/orterun.c 2007-07-19 15:00:06 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Thu, 19 Jul 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -22,6 +22,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &quot;orte_config.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &quot;orte/orte_constants.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -61,8 +63,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &quot;opal/version.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &quot;opal/runtime/opal.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#include &quot;orte/orte_constants.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &quot;opal/util/os_path.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &quot;orte/class/orte_pointer_array.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -351,7 +352,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Setup MCA params */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Check for some &quot;global&quot; command line params */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      parse_globals(argc, argv, &amp;cmd_line);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_DESTRUCT(&amp;cmd_line);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -400,6 +400,55 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* If we have a prefix, then modify the PATH and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        LD_LIBRARY_PATH environment variables in our copy. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        will ensure that any locally-spawned children will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        have our executables and libraries in their path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        For now, default to the prefix_dir provided in the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app_context.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        Since there always MUST be at least one app_context, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are safe in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        doing this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (NULL != apps[0]-&gt;prefix_dir) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        char *oldenv, *newenv, *lib_base, *bin_base;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        lib_base = opal_basename(opal_install_dirs.libdir);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        bin_base = opal_basename(opal_install_dirs.bindir);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* Reset PATH */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        newenv = opal_os_path( false, apps[0]-&gt;prefix_dir,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin_base, NULL );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        oldenv = getenv(&quot;PATH&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (NULL != oldenv) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            char *temp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            asprintf(&amp;temp, &quot;%s:%s&quot;, newenv, oldenv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            free( newenv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            newenv = temp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        opal_setenv(&quot;PATH&quot;, newenv, true, &amp;orte_launch_environ);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (orte_debug_flag) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            opal_output(0, &quot;%s: reset PATH: %s&quot;, orterun_basename,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; newenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        free(newenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        free(bin_base);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* Reset LD_LIBRARY_PATH */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        newenv = opal_os_path( false, apps[0]-&gt;prefix_dir,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib_base, NULL );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        oldenv = getenv(&quot;LD_LIBRARY_PATH&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (NULL != oldenv) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            char* temp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            asprintf(&amp;temp, &quot;%s:%s&quot;, newenv, oldenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            free(newenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            newenv = temp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        opal_setenv(&quot;LD_LIBRARY_PATH&quot;, newenv, true,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;orte_launch_environ);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (orte_debug_flag) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            opal_output(0, &quot;%s: reset LD_LIBRARY_PATH: %s&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        orterun_basename, newenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        free(newenv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        free(lib_base);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* since we are a daemon, we should *always* yield the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor when idle */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      opal_progress_set_yield_when_idle(true);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="1956.php">Ralph H Castain: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Previous message:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<li><strong>In reply to:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<!-- nextthread="start" -->
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
