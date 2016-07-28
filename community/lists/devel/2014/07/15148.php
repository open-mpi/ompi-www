<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base	orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 13:14:47 2014" -->
<!-- isoreceived="20140715171447" -->
<!-- sent="Tue, 15 Jul 2014 17:14:45 +0000" -->
<!-- isosent="20140715171445" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base	orte/tools/orterun" -->
<!-- id="1877E310-E569-4A42-8786-0F709EC0EE9C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140709003825.B6215160AFF_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base	orte/tools/orterun<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 13:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15149.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit (and the subsequent amendments to the feature) doesn't appear to support escaping the separator.  A later commit allows you to change the separator character, which helps, but AFAICS you still can't actually escape the separator itself.  That seems like a real deficiency to me...
<br>
<p>Furthermore, I really like the &quot;-x&quot; argument and I'm sad to see that it's being deprecated in favor of a much clunkier syntax.  Is there a good reason we can't keep the &quot;-x&quot; syntax and only complain when there is a conflict with the mca_base_env_list variable?
<br>
<p>-Dave
<br>
<p>On Jul 8, 2014, at 7:38 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev1">&gt; Date: 2014-07-08 20:38:25 EDT (Tue, 08 Jul 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32163
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32163">https://svn.open-mpi.org/trac/ompi/changeset/32163</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Opal: add a new MCA parameter that allows the user to specify a list of environment variables. This parameter will become the standard mechanism by which environment variables are set for OMPI applications replacing the -x option.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun ... -x env_foo1=val1 -x env_foo2 -x env_foo3=val3  should now be expressed as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun ... -mca mca_base_env_list env_foo1=val1+env_foo2+env_foo3=val3. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The motivation for doing this is so that a list of environment variables may be set via standard MCA mechanisms such as mca parameter files, amca lists, etc. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This feature was developed by Elena Shipunova and was reviewed by Josh Ladd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/base/help-mca-var.txt      |    11 ++++++++                                
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/base/mca_base_var.c        |    52 ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/help-orterun.txt |    13 +++++++++                               
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/orterun.c        |     7 +++++                                   
</span><br>
<span class="quotelev1">&gt;   4 files changed, 82 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/help-mca-var.txt
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/help-mca-var.txt	Tue Jul  8 20:10:04 2014	(r32162)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/help-mca-var.txt	2014-07-08 20:38:25 EDT (Tue, 08 Jul 2014)	(r32163)
</span><br>
<span class="quotelev1">&gt; @@ -121,3 +121,14 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Value:      %s
</span><br>
<span class="quotelev1">&gt;   Source:     %s
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +[incorrect-env-list-param]
</span><br>
<span class="quotelev1">&gt; +WARNING: The format of MCA parameter &quot;mca_base_env_list&quot; is a plus-sign (+) delimited
</span><br>
<span class="quotelev1">&gt; +list of VAR=VAL and/or VAR instances, e.g.: -mca mca_base_env_list VAR1=VAL1+VAR2+VAR3=VAL3;... 
</span><br>
<span class="quotelev1">&gt; +If a variable, VAR, is listed but not explicitly assigned a value in the command line, VAR will 
</span><br>
<span class="quotelev1">&gt; +be assigned the value set in the executing environment.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +The following environment variable was listed unassigned in &quot;mca_base_env_list&quot;, but was
</span><br>
<span class="quotelev1">&gt; +not found in your environment:
</span><br>
<span class="quotelev1">&gt; +  Variable:             %s
</span><br>
<span class="quotelev1">&gt; +  MCA variable value:   %s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/mca_base_var.c	Tue Jul  8 20:10:04 2014	(r32162)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/mca_base_var.c	2014-07-08 20:38:25 EDT (Tue, 08 Jul 2014)	(r32163)
</span><br>
<span class="quotelev1">&gt; @@ -62,6 +62,7 @@
</span><br>
<span class="quotelev1">&gt; static char *mca_base_var_override_file = NULL;
</span><br>
<span class="quotelev1">&gt; static char *mca_base_var_file_prefix = NULL;
</span><br>
<span class="quotelev1">&gt; static char *mca_base_param_file_path = NULL;
</span><br>
<span class="quotelev1">&gt; +static char *mca_base_env_list = NULL;
</span><br>
<span class="quotelev1">&gt; static bool mca_base_var_suppress_override_warning = false;
</span><br>
<span class="quotelev1">&gt; static opal_list_t mca_base_var_file_values;
</span><br>
<span class="quotelev1">&gt; static opal_list_t mca_base_var_override_values;
</span><br>
<span class="quotelev1">&gt; @@ -123,6 +124,7 @@
</span><br>
<span class="quotelev1">&gt; static int var_set_initial (mca_base_var_t *var);
</span><br>
<span class="quotelev1">&gt; static int var_get (int vari, mca_base_var_t **var_out, bool original);
</span><br>
<span class="quotelev1">&gt; static int var_value_string (mca_base_var_t *var, char **value_string);
</span><br>
<span class="quotelev1">&gt; +static int mca_base_var_process_env_list(void);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * classes
</span><br>
<span class="quotelev1">&gt; @@ -255,11 +257,61 @@
</span><br>
<span class="quotelev1">&gt;         mca_base_var_initialized = true; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         mca_base_var_cache_files(false);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* set nesessary env variables for external usage */
</span><br>
<span class="quotelev1">&gt; +        mca_base_var_process_env_list();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +static int mca_base_var_process_env_list(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int i, ret;
</span><br>
<span class="quotelev1">&gt; +    char** tokens;
</span><br>
<span class="quotelev1">&gt; +    char* ptr;
</span><br>
<span class="quotelev1">&gt; +    char* param, *value;
</span><br>
<span class="quotelev1">&gt; +    ret = mca_base_var_register (&quot;opal&quot;, &quot;mca&quot;, &quot;base&quot;, &quot;env_list&quot;,
</span><br>
<span class="quotelev1">&gt; +                                 &quot;Set SHELL env variables&quot;,
</span><br>
<span class="quotelev1">&gt; +                                 MCA_BASE_VAR_TYPE_STRING, NULL, 0, 0, OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev1">&gt; +                                 MCA_BASE_VAR_SCOPE_READONLY, &amp;mca_base_env_list);
</span><br>
<span class="quotelev1">&gt; +    if ((0 &gt; ret) || (NULL == mca_base_env_list)) {
</span><br>
<span class="quotelev1">&gt; +        return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    tokens = opal_argv_split(mca_base_env_list, '+');
</span><br>
<span class="quotelev1">&gt; +    if (NULL != tokens) {
</span><br>
<span class="quotelev1">&gt; +        for (i = 0; NULL != tokens[i]; i++) {
</span><br>
<span class="quotelev1">&gt; +            if (NULL == (ptr = strchr(tokens[i], '='))) {
</span><br>
<span class="quotelev1">&gt; +                value = getenv(tokens[i]);
</span><br>
<span class="quotelev1">&gt; +                if (NULL != value) {
</span><br>
<span class="quotelev1">&gt; +                    if (NULL != strchr(value, '=')) {
</span><br>
<span class="quotelev1">&gt; +                        param = strdup(value);
</span><br>
<span class="quotelev1">&gt; +                        value = strchr(param, '=');
</span><br>
<span class="quotelev1">&gt; +                        *value = '\0';
</span><br>
<span class="quotelev1">&gt; +                        value++;
</span><br>
<span class="quotelev1">&gt; +                        opal_setenv(param, value, true, &amp;environ);
</span><br>
<span class="quotelev1">&gt; +                        free(param);
</span><br>
<span class="quotelev1">&gt; +                    } else {
</span><br>
<span class="quotelev1">&gt; +                        opal_setenv(tokens[i], value, true, &amp;environ);
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                } else {
</span><br>
<span class="quotelev1">&gt; +                    opal_show_help(&quot;help-mca-var.txt&quot;, &quot;incorrect-env-list-param&quot;,
</span><br>
<span class="quotelev1">&gt; +                            true, tokens[i], mca_base_env_list);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +            } else {
</span><br>
<span class="quotelev1">&gt; +                param = strdup(tokens[i]);
</span><br>
<span class="quotelev1">&gt; +                value = strchr(param, '=');
</span><br>
<span class="quotelev1">&gt; +                *value = '\0';
</span><br>
<span class="quotelev1">&gt; +                value++;
</span><br>
<span class="quotelev1">&gt; +                opal_setenv(param, value, true, &amp;environ);
</span><br>
<span class="quotelev1">&gt; +                free(param);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        opal_argv_free(tokens);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; static int mca_base_var_cache_files(bool rel_path_search)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     char *tmp;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orterun/help-orterun.txt
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orterun/help-orterun.txt	Tue Jul  8 20:10:04 2014	(r32162)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orterun/help-orterun.txt	2014-07-08 20:38:25 EDT (Tue, 08 Jul 2014)	(r32163)
</span><br>
<span class="quotelev1">&gt; @@ -649,4 +649,15 @@
</span><br>
<span class="quotelev1">&gt; The job will now be aborted. Please check your code and/or
</span><br>
<span class="quotelev1">&gt; adjust/remove the job execution time limit (as specified
</span><br>
<span class="quotelev1">&gt; by MPIEXEC_TIMEOUT in your environment).
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +[orterun:deprecated-env-set]
</span><br>
<span class="quotelev1">&gt; +WARNING: The mechanism by which environment variables are passed to OMPI is changing!!
</span><br>
<span class="quotelev1">&gt; +Specifically, beginning in the 1.9.x/2.0.x series, using &quot;-x&quot; to set environment 
</span><br>
<span class="quotelev1">&gt; +variables is deprecated. Please use the &quot;mca_base_env_list&quot; MCA parameter. With this new 
</span><br>
<span class="quotelev1">&gt; +mechanism, mpirun ... -x env_foo1=bar1 -x env_foo2=bar2 -x env_foo3 ...
</span><br>
<span class="quotelev1">&gt; +becomes: mpirun ... -mca mca_base_env_list env_foo1=bar1+env_foo2=bar2+env_foo3 ...
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +[orterun:conflict-env-set]
</span><br>
<span class="quotelev1">&gt; +ERROR: You have attempted to pass environment variables to OMPI with both the &quot;-x&quot; method (deprecated starting 
</span><br>
<span class="quotelev1">&gt; +in the 1.9.x/2.0.x series) and by setting the MCA parameter &quot;mca_base_env_list&quot;. OMPI does not support mixing
</span><br>
<span class="quotelev1">&gt; +these two methods. Please choose one method and try launching your job again. You job will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orterun/orterun.c	Tue Jul  8 20:10:04 2014	(r32162)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orterun/orterun.c	2014-07-08 20:38:25 EDT (Tue, 08 Jul 2014)	(r32163)
</span><br>
<span class="quotelev1">&gt; @@ -1722,6 +1722,13 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Did the user request to export any environment variables on the cmd line? */
</span><br>
<span class="quotelev1">&gt;     if (opal_cmd_line_is_taken(&amp;cmd_line, &quot;x&quot;)) {
</span><br>
<span class="quotelev1">&gt; +        char* env_set_flag = getenv(&quot;OMPI_MCA_mca_base_env_list&quot;);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != env_set_flag) {
</span><br>
<span class="quotelev1">&gt; +            orte_show_help(&quot;help-orterun.txt&quot;, &quot;orterun:conflict-env-set&quot;, false);
</span><br>
<span class="quotelev1">&gt; +            return ORTE_ERR_FATAL;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            orte_show_help(&quot;help-orterun.txt&quot;, &quot;orterun:deprecated-env-set&quot;, false);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;         j = opal_cmd_line_get_ninsts(&amp;cmd_line, &quot;x&quot;);
</span><br>
<span class="quotelev1">&gt;         for (i = 0; i &lt; j; ++i) {
</span><br>
<span class="quotelev1">&gt;             param = opal_cmd_line_get_param(&amp;cmd_line, &quot;x&quot;, i, 0);
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
<li><strong>Next message:</strong> <a href="15149.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15151.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
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
