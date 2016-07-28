<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 15:03:45 2014" -->
<!-- isoreceived="20140715190345" -->
<!-- sent="Tue, 15 Jul 2014 22:03:43 +0300" -->
<!-- isosent="20140715190343" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="CAAO1KyZFON2b-SFCcPaRGozKR_Or_CBcWmaW9=BRUdbF-FyH8g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1877E310-E569-4A42-8786-0F709EC0EE9C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 15:03:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15150.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15148.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base	orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
these are two separate issues:
<br>
<p>1. -x var=val (or -mca opal_base_envlist var=val) will work in the same way
<br>
opal_base_envlist does the same as &quot;-x&quot; and can be used in the very same
<br>
fashion as -x
<br>
<p>2. When list of vars is passed with help of opal_base_envlist, the escaping
<br>
is possible but escaped char should differ from delimiter char.
<br>
<p>I think -x should stay as shotrt-form alias for -mca opal_base_envlist
<br>
var=val and -mca opal_base_envlist var.
<br>
on dev meeting it was decided to deprecate it as some point.
<br>
<p><p><p><p>On Tue, Jul 15, 2014 at 8:14 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; This commit (and the subsequent amendments to the feature) doesn't appear
</span><br>
<span class="quotelev1">&gt; to support escaping the separator.  A later commit allows you to change the
</span><br>
<span class="quotelev1">&gt; separator character, which helps, but AFAICS you still can't actually
</span><br>
<span class="quotelev1">&gt; escape the separator itself.  That seems like a real deficiency to me...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Furthermore, I really like the &quot;-x&quot; argument and I'm sad to see that it's
</span><br>
<span class="quotelev1">&gt; being deprecated in favor of a much clunkier syntax.  Is there a good
</span><br>
<span class="quotelev1">&gt; reason we can't keep the &quot;-x&quot; syntax and only complain when there is a
</span><br>
<span class="quotelev1">&gt; conflict with the mca_base_env_list variable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2014, at 7:38 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2014-07-08 20:38:25 EDT (Tue, 08 Jul 2014)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 32163
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32163">https://svn.open-mpi.org/trac/ompi/changeset/32163</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Opal: add a new MCA parameter that allows the user to specify a list of
</span><br>
<span class="quotelev1">&gt; environment variables. This parameter will become the standard mechanism by
</span><br>
<span class="quotelev1">&gt; which environment variables are set for OMPI applications replacing the -x
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun ... -x env_foo1=val1 -x env_foo2 -x env_foo3=val3  should now be
</span><br>
<span class="quotelev1">&gt; expressed as
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun ... -mca mca_base_env_list env_foo1=val1+env_foo2+env_foo3=val3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The motivation for doing this is so that a list of environment variables
</span><br>
<span class="quotelev1">&gt; may be set via standard MCA mechanisms such as mca parameter files, amca
</span><br>
<span class="quotelev1">&gt; lists, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This feature was developed by Elena Shipunova and was reviewed by Josh
</span><br>
<span class="quotelev1">&gt; Ladd.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/opal/mca/base/help-mca-var.txt      |    11 ++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/opal/mca/base/mca_base_var.c        |    52
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/tools/orterun/help-orterun.txt |    13 +++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/orte/tools/orterun/orterun.c        |     7 +++++
</span><br>
<span class="quotelev2">&gt; &gt;   4 files changed, 82 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/opal/mca/base/help-mca-var.txt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/opal/mca/base/help-mca-var.txt      Tue Jul  8 20:10:04 2014
</span><br>
<span class="quotelev1">&gt;      (r32162)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/opal/mca/base/help-mca-var.txt      2014-07-08 20:38:25 EDT
</span><br>
<span class="quotelev1">&gt; (Tue, 08 Jul 2014)      (r32163)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -121,3 +121,14 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Value:      %s
</span><br>
<span class="quotelev2">&gt; &gt;   Source:     %s
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +[incorrect-env-list-param]
</span><br>
<span class="quotelev2">&gt; &gt; +WARNING: The format of MCA parameter &quot;mca_base_env_list&quot; is a plus-sign
</span><br>
<span class="quotelev1">&gt; (+) delimited
</span><br>
<span class="quotelev2">&gt; &gt; +list of VAR=VAL and/or VAR instances, e.g.: -mca mca_base_env_list
</span><br>
<span class="quotelev1">&gt; VAR1=VAL1+VAR2+VAR3=VAL3;...
</span><br>
<span class="quotelev2">&gt; &gt; +If a variable, VAR, is listed but not explicitly assigned a value in
</span><br>
<span class="quotelev1">&gt; the command line, VAR will
</span><br>
<span class="quotelev2">&gt; &gt; +be assigned the value set in the executing environment.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +The following environment variable was listed unassigned in
</span><br>
<span class="quotelev1">&gt; &quot;mca_base_env_list&quot;, but was
</span><br>
<span class="quotelev2">&gt; &gt; +not found in your environment:
</span><br>
<span class="quotelev2">&gt; &gt; +  Variable:             %s
</span><br>
<span class="quotelev2">&gt; &gt; +  MCA variable value:   %s
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/opal/mca/base/mca_base_var.c        Tue Jul  8 20:10:04 2014
</span><br>
<span class="quotelev1">&gt;      (r32162)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/opal/mca/base/mca_base_var.c        2014-07-08 20:38:25 EDT
</span><br>
<span class="quotelev1">&gt; (Tue, 08 Jul 2014)      (r32163)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -62,6 +62,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; static char *mca_base_var_override_file = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; static char *mca_base_var_file_prefix = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; static char *mca_base_param_file_path = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +static char *mca_base_env_list = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; static bool mca_base_var_suppress_override_warning = false;
</span><br>
<span class="quotelev2">&gt; &gt; static opal_list_t mca_base_var_file_values;
</span><br>
<span class="quotelev2">&gt; &gt; static opal_list_t mca_base_var_override_values;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -123,6 +124,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; static int var_set_initial (mca_base_var_t *var);
</span><br>
<span class="quotelev2">&gt; &gt; static int var_get (int vari, mca_base_var_t **var_out, bool original);
</span><br>
<span class="quotelev2">&gt; &gt; static int var_value_string (mca_base_var_t *var, char **value_string);
</span><br>
<span class="quotelev2">&gt; &gt; +static int mca_base_var_process_env_list(void);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * classes
</span><br>
<span class="quotelev2">&gt; &gt; @@ -255,11 +257,61 @@
</span><br>
<span class="quotelev2">&gt; &gt;         mca_base_var_initialized = true;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         mca_base_var_cache_files(false);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        /* set nesessary env variables for external usage */
</span><br>
<span class="quotelev2">&gt; &gt; +        mca_base_var_process_env_list();
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +static int mca_base_var_process_env_list(void)
</span><br>
<span class="quotelev2">&gt; &gt; +{
</span><br>
<span class="quotelev2">&gt; &gt; +    int i, ret;
</span><br>
<span class="quotelev2">&gt; &gt; +    char** tokens;
</span><br>
<span class="quotelev2">&gt; &gt; +    char* ptr;
</span><br>
<span class="quotelev2">&gt; &gt; +    char* param, *value;
</span><br>
<span class="quotelev2">&gt; &gt; +    ret = mca_base_var_register (&quot;opal&quot;, &quot;mca&quot;, &quot;base&quot;, &quot;env_list&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                                 &quot;Set SHELL env variables&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                                 MCA_BASE_VAR_TYPE_STRING, NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt; OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev2">&gt; &gt; +                                 MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; &amp;mca_base_env_list);
</span><br>
<span class="quotelev2">&gt; &gt; +    if ((0 &gt; ret) || (NULL == mca_base_env_list)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    tokens = opal_argv_split(mca_base_env_list, '+');
</span><br>
<span class="quotelev2">&gt; &gt; +    if (NULL != tokens) {
</span><br>
<span class="quotelev2">&gt; &gt; +        for (i = 0; NULL != tokens[i]; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; +            if (NULL == (ptr = strchr(tokens[i], '='))) {
</span><br>
<span class="quotelev2">&gt; &gt; +                value = getenv(tokens[i]);
</span><br>
<span class="quotelev2">&gt; &gt; +                if (NULL != value) {
</span><br>
<span class="quotelev2">&gt; &gt; +                    if (NULL != strchr(value, '=')) {
</span><br>
<span class="quotelev2">&gt; &gt; +                        param = strdup(value);
</span><br>
<span class="quotelev2">&gt; &gt; +                        value = strchr(param, '=');
</span><br>
<span class="quotelev2">&gt; &gt; +                        *value = '\0';
</span><br>
<span class="quotelev2">&gt; &gt; +                        value++;
</span><br>
<span class="quotelev2">&gt; &gt; +                        opal_setenv(param, value, true, &amp;environ);
</span><br>
<span class="quotelev2">&gt; &gt; +                        free(param);
</span><br>
<span class="quotelev2">&gt; &gt; +                    } else {
</span><br>
<span class="quotelev2">&gt; &gt; +                        opal_setenv(tokens[i], value, true, &amp;environ);
</span><br>
<span class="quotelev2">&gt; &gt; +                    }
</span><br>
<span class="quotelev2">&gt; &gt; +                } else {
</span><br>
<span class="quotelev2">&gt; &gt; +                    opal_show_help(&quot;help-mca-var.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;incorrect-env-list-param&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; +                            true, tokens[i], mca_base_env_list);
</span><br>
<span class="quotelev2">&gt; &gt; +                }
</span><br>
<span class="quotelev2">&gt; &gt; +            } else {
</span><br>
<span class="quotelev2">&gt; &gt; +                param = strdup(tokens[i]);
</span><br>
<span class="quotelev2">&gt; &gt; +                value = strchr(param, '=');
</span><br>
<span class="quotelev2">&gt; &gt; +                *value = '\0';
</span><br>
<span class="quotelev2">&gt; &gt; +                value++;
</span><br>
<span class="quotelev2">&gt; &gt; +                opal_setenv(param, value, true, &amp;environ);
</span><br>
<span class="quotelev2">&gt; &gt; +                free(param);
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt; +        opal_argv_free(tokens);
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; +}
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; static int mca_base_var_cache_files(bool rel_path_search)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     char *tmp;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/tools/orterun/help-orterun.txt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/tools/orterun/help-orterun.txt Tue Jul  8 20:10:04 2014
</span><br>
<span class="quotelev1">&gt;      (r32162)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/tools/orterun/help-orterun.txt 2014-07-08 20:38:25 EDT
</span><br>
<span class="quotelev1">&gt; (Tue, 08 Jul 2014)      (r32163)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -649,4 +649,15 @@
</span><br>
<span class="quotelev2">&gt; &gt; The job will now be aborted. Please check your code and/or
</span><br>
<span class="quotelev2">&gt; &gt; adjust/remove the job execution time limit (as specified
</span><br>
<span class="quotelev2">&gt; &gt; by MPIEXEC_TIMEOUT in your environment).
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +[orterun:deprecated-env-set]
</span><br>
<span class="quotelev2">&gt; &gt; +WARNING: The mechanism by which environment variables are passed to
</span><br>
<span class="quotelev1">&gt; OMPI is changing!!
</span><br>
<span class="quotelev2">&gt; &gt; +Specifically, beginning in the 1.9.x/2.0.x series, using &quot;-x&quot; to set
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; +variables is deprecated. Please use the &quot;mca_base_env_list&quot; MCA
</span><br>
<span class="quotelev1">&gt; parameter. With this new
</span><br>
<span class="quotelev2">&gt; &gt; +mechanism, mpirun ... -x env_foo1=bar1 -x env_foo2=bar2 -x env_foo3 ...
</span><br>
<span class="quotelev2">&gt; &gt; +becomes: mpirun ... -mca mca_base_env_list
</span><br>
<span class="quotelev1">&gt; env_foo1=bar1+env_foo2=bar2+env_foo3 ...
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +[orterun:conflict-env-set]
</span><br>
<span class="quotelev2">&gt; &gt; +ERROR: You have attempted to pass environment variables to OMPI with
</span><br>
<span class="quotelev1">&gt; both the &quot;-x&quot; method (deprecated starting
</span><br>
<span class="quotelev2">&gt; &gt; +in the 1.9.x/2.0.x series) and by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt; &quot;mca_base_env_list&quot;. OMPI does not support mixing
</span><br>
<span class="quotelev2">&gt; &gt; +these two methods. Please choose one method and try launching your job
</span><br>
<span class="quotelev1">&gt; again. You job will now abort.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/orte/tools/orterun/orterun.c        Tue Jul  8 20:10:04 2014
</span><br>
<span class="quotelev1">&gt;      (r32162)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/orte/tools/orterun/orterun.c        2014-07-08 20:38:25 EDT
</span><br>
<span class="quotelev1">&gt; (Tue, 08 Jul 2014)      (r32163)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1722,6 +1722,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Did the user request to export any environment variables on the
</span><br>
<span class="quotelev1">&gt; cmd line? */
</span><br>
<span class="quotelev2">&gt; &gt;     if (opal_cmd_line_is_taken(&amp;cmd_line, &quot;x&quot;)) {
</span><br>
<span class="quotelev2">&gt; &gt; +        char* env_set_flag = getenv(&quot;OMPI_MCA_mca_base_env_list&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        if (NULL != env_set_flag) {
</span><br>
<span class="quotelev2">&gt; &gt; +            orte_show_help(&quot;help-orterun.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;orterun:conflict-env-set&quot;, false);
</span><br>
<span class="quotelev2">&gt; &gt; +            return ORTE_ERR_FATAL;
</span><br>
<span class="quotelev2">&gt; &gt; +        } else {
</span><br>
<span class="quotelev2">&gt; &gt; +            orte_show_help(&quot;help-orterun.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;orterun:deprecated-env-set&quot;, false);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt;         j = opal_cmd_line_get_ninsts(&amp;cmd_line, &quot;x&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;         for (i = 0; i &lt; j; ++i) {
</span><br>
<span class="quotelev2">&gt; &gt;             param = opal_cmd_line_get_param(&amp;cmd_line, &quot;x&quot;, i, 0);
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15148.php">http://www.open-mpi.org/community/lists/devel/2014/07/15148.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15151/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15150.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15148.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base	orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
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
