<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 15:23:59 2007" -->
<!-- isoreceived="20070719192359" -->
<!-- sent="Thu, 19 Jul 2007 15:23:54 -0400" -->
<!-- isosent="20070719192354" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516" -->
<!-- id="1DE24548-7E4F-49A1-A973-54365B34463F_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707191900.l6JJ07UL023698_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-07-19 15:23:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<li><strong>Previous message:</strong> <a href="1952.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<li><strong>Reply:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a *BIG DOUBT* about this approach. The problem will lead to  
<br>
some really strange situations, as we change the LD_LIBRARY_PATH of a  
<br>
process in the middle of the run. As a result the place from where we  
<br>
load dynamic libraries before and after this call will potentially  
<br>
became different.
<br>
<p>It looks to me that the correct fix should set the PATH and  
<br>
LD_LIBRARY_PATH only after the fork that will execve the child  
<br>
process and not before. So, instead of having this code in the  
<br>
orterun, we should have it in the ODLS ... But then the ODLS will  
<br>
have to different behaviors: the case where the ODLS inherit the  
<br>
environment from the orted [and then everything is already correctly  
<br>
set because the orted did it] and the case it inherit the environment  
<br>
from the orterun [and where the PATH and LD_LIBRARY_PATH are not yet  
<br>
set].
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jul 19, 2007, at 3:00 PM, rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2007-07-19 15:00:06 EDT (Thu, 19 Jul 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15516
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15516">https://svn.open-mpi.org/trac/ompi/changeset/15516</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Ensure that the LD_LIBRARY_PATH and PATH get properly set for procs  
</span><br>
<span class="quotelev1">&gt; locally spawned by mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/tools/orterun/orterun.c |    55 ++++++++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++++++--
</span><br>
<span class="quotelev1">&gt;    1 files changed, 52 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orterun/orterun.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orterun/orterun.c	2007-07-19 15:00:06 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 19 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -22,6 +22,8 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte_config.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/orte_constants.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;  #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; @@ -61,8 +63,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/version.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/runtime/opal.h&quot;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#include &quot;orte/orte_constants.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/util/os_path.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/class/orte_pointer_array.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -351,7 +352,6 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Setup MCA params */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      /* Check for some &quot;global&quot; command line params */
</span><br>
<span class="quotelev1">&gt;      parse_globals(argc, argv, &amp;cmd_line);
</span><br>
<span class="quotelev1">&gt;      OBJ_DESTRUCT(&amp;cmd_line);
</span><br>
<span class="quotelev1">&gt; @@ -400,6 +400,55 @@
</span><br>
<span class="quotelev1">&gt;          return rc;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /* If we have a prefix, then modify the PATH and
</span><br>
<span class="quotelev1">&gt; +        LD_LIBRARY_PATH environment variables in our copy. This
</span><br>
<span class="quotelev1">&gt; +        will ensure that any locally-spawned children will
</span><br>
<span class="quotelev1">&gt; +        have our executables and libraries in their path
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        For now, default to the prefix_dir provided in the first  
</span><br>
<span class="quotelev1">&gt; app_context.
</span><br>
<span class="quotelev1">&gt; +        Since there always MUST be at least one app_context, we  
</span><br>
<span class="quotelev1">&gt; are safe in
</span><br>
<span class="quotelev1">&gt; +        doing this.
</span><br>
<span class="quotelev1">&gt; +    */
</span><br>
<span class="quotelev1">&gt; +    if (NULL != apps[0]-&gt;prefix_dir) {
</span><br>
<span class="quotelev1">&gt; +        char *oldenv, *newenv, *lib_base, *bin_base;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        lib_base = opal_basename(opal_install_dirs.libdir);
</span><br>
<span class="quotelev1">&gt; +        bin_base = opal_basename(opal_install_dirs.bindir);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* Reset PATH */
</span><br>
<span class="quotelev1">&gt; +        newenv = opal_os_path( false, apps[0]-&gt;prefix_dir,  
</span><br>
<span class="quotelev1">&gt; bin_base, NULL );
</span><br>
<span class="quotelev1">&gt; +        oldenv = getenv(&quot;PATH&quot;);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != oldenv) {
</span><br>
<span class="quotelev1">&gt; +            char *temp;
</span><br>
<span class="quotelev1">&gt; +            asprintf(&amp;temp, &quot;%s:%s&quot;, newenv, oldenv );
</span><br>
<span class="quotelev1">&gt; +            free( newenv );
</span><br>
<span class="quotelev1">&gt; +            newenv = temp;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        opal_setenv(&quot;PATH&quot;, newenv, true, &amp;orte_launch_environ);
</span><br>
<span class="quotelev1">&gt; +        if (orte_debug_flag) {
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;%s: reset PATH: %s&quot;, orterun_basename,  
</span><br>
<span class="quotelev1">&gt; newenv);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        free(newenv);
</span><br>
<span class="quotelev1">&gt; +        free(bin_base);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* Reset LD_LIBRARY_PATH */
</span><br>
<span class="quotelev1">&gt; +        newenv = opal_os_path( false, apps[0]-&gt;prefix_dir,  
</span><br>
<span class="quotelev1">&gt; lib_base, NULL );
</span><br>
<span class="quotelev1">&gt; +        oldenv = getenv(&quot;LD_LIBRARY_PATH&quot;);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != oldenv) {
</span><br>
<span class="quotelev1">&gt; +            char* temp;
</span><br>
<span class="quotelev1">&gt; +            asprintf(&amp;temp, &quot;%s:%s&quot;, newenv, oldenv);
</span><br>
<span class="quotelev1">&gt; +            free(newenv);
</span><br>
<span class="quotelev1">&gt; +            newenv = temp;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        opal_setenv(&quot;LD_LIBRARY_PATH&quot;, newenv, true,  
</span><br>
<span class="quotelev1">&gt; &amp;orte_launch_environ);
</span><br>
<span class="quotelev1">&gt; +        if (orte_debug_flag) {
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;%s: reset LD_LIBRARY_PATH: %s&quot;,
</span><br>
<span class="quotelev1">&gt; +                        orterun_basename, newenv);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        free(newenv);
</span><br>
<span class="quotelev1">&gt; +        free(lib_base);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* since we are a daemon, we should *always* yield the  
</span><br>
<span class="quotelev1">&gt; processor when idle */
</span><br>
<span class="quotelev1">&gt;      opal_progress_set_yield_when_idle(true);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<li><strong>Previous message:</strong> <a href="1952.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<li><strong>Reply:</strong> <a href="1954.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
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
