<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 19:12:37 2014" -->
<!-- isoreceived="20140401231237" -->
<!-- sent="Tue, 1 Apr 2014 16:12:35 -0700" -->
<!-- isosent="20140401231235" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="CAMD57ocjwEdvmMcydFsoQoK3PUj_dUkgfyRrZ_yWv8SKaK8L1w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140401211431.D423E15F571_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 19:12:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14440.php">Allan Wu: "[OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This change just looks wrong - you can't split the variables on a &quot;space&quot;
<br>
as there is no way to know how many variables there might be, and thus how
<br>
to parse the rest of the cmd line. At best, you need a comma-delimited list.
<br>
<p>Please fix this!
<br>
Ralph
<br>
<p><p><p>On Tue, Apr 1, 2014 at 2:14 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2014-04-01 17:14:31 EDT (Tue, 01 Apr 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 31302
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31302">https://svn.open-mpi.org/trac/ompi/changeset/31302</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; opal: add mca param to control ranks env variables
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; add -mca base_env_list &quot;var1=val1 var2=val2 ...&quot; mca parameter that can be
</span><br>
<span class="quotelev1">&gt; used in mca param files
</span><br>
<span class="quotelev1">&gt; or with -am app.conf mpirun commandline to set rank env variables with mca
</span><br>
<span class="quotelev1">&gt; mechanism
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fixed by Elena, reviewed by Miked
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cmr=v1.8.1:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/base/help-mca-var.txt |     5 +++++
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/base/mca_base_var.c   |    36
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/base/mca_base_var.h   |     2 ++
</span><br>
<span class="quotelev1">&gt;    trunk/orte/tools/orterun/orterun.c   |     2 ++
</span><br>
<span class="quotelev1">&gt;    4 files changed, 45 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/help-mca-var.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/help-mca-var.txt        Tue Apr  1 16:57:12 2014
</span><br>
<span class="quotelev1">&gt;      (r31301)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/help-mca-var.txt        2014-04-01 17:14:31 EDT
</span><br>
<span class="quotelev1">&gt; (Tue, 01 Apr 2014)      (r31302)
</span><br>
<span class="quotelev1">&gt; @@ -121,3 +121,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Value:      %s
</span><br>
<span class="quotelev1">&gt;    Source:     %s
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +[incorrect-env-list-param]
</span><br>
<span class="quotelev1">&gt; +The format of mca_base_env_list parameter is incorrect. It should be
</span><br>
<span class="quotelev1">&gt; +VAR1=VAL1 VAR2=VAL2 VAR3=VAL3 ...
</span><br>
<span class="quotelev1">&gt; +  Value:      %s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/mca_base_var.c  Tue Apr  1 16:57:12 2014
</span><br>
<span class="quotelev1">&gt;  (r31301)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/mca_base_var.c  2014-04-01 17:14:31 EDT (Tue, 01
</span><br>
<span class="quotelev1">&gt; Apr 2014)      (r31302)
</span><br>
<span class="quotelev1">&gt; @@ -61,6 +61,7 @@
</span><br>
<span class="quotelev1">&gt;  static char *mca_base_var_override_file = NULL;
</span><br>
<span class="quotelev1">&gt;  static char *mca_base_var_file_prefix = NULL;
</span><br>
<span class="quotelev1">&gt;  static char *mca_base_param_file_path = NULL;
</span><br>
<span class="quotelev1">&gt; +static char *mca_base_env_list = NULL;
</span><br>
<span class="quotelev1">&gt;  static bool mca_base_var_suppress_override_warning = false;
</span><br>
<span class="quotelev1">&gt;  static opal_list_t mca_base_var_file_values;
</span><br>
<span class="quotelev1">&gt;  static opal_list_t mca_base_var_override_values;
</span><br>
<span class="quotelev1">&gt; @@ -259,6 +260,41 @@
</span><br>
<span class="quotelev1">&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +int mca_base_var_process_env_list(char ***context_env)
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
<span class="quotelev1">&gt; +                                 MCA_BASE_VAR_TYPE_STRING, NULL, 0, 0,
</span><br>
<span class="quotelev1">&gt; OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev1">&gt; +                                 MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; &amp;mca_base_env_list);
</span><br>
<span class="quotelev1">&gt; +    if ((0 &gt; ret) || (NULL == mca_base_env_list)) {
</span><br>
<span class="quotelev1">&gt; +        return ret;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    tokens = opal_argv_split(mca_base_env_list, ' ');
</span><br>
<span class="quotelev1">&gt; +    if (NULL != tokens) {
</span><br>
<span class="quotelev1">&gt; +        for (i = 0; NULL != tokens[i]; i++) {
</span><br>
<span class="quotelev1">&gt; +            if (NULL == (ptr = strchr(tokens[i], '='))) {
</span><br>
<span class="quotelev1">&gt; +                opal_show_help(&quot;help-mca-var.txt&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;incorrect-env-list-param&quot;,
</span><br>
<span class="quotelev1">&gt; +                        true, mca_base_env_list);
</span><br>
<span class="quotelev1">&gt; +                opal_argv_free(tokens);
</span><br>
<span class="quotelev1">&gt; +                return OPAL_ERROR;
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
<span class="quotelev1">&gt; +                opal_setenv(param, value, false, context_env);
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
<span class="quotelev1">&gt;  static int mca_base_var_cache_files(bool rel_path_search)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      char *tmp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/mca_base_var.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/mca_base_var.h  Tue Apr  1 16:57:12 2014
</span><br>
<span class="quotelev1">&gt;  (r31301)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/mca_base_var.h  2014-04-01 17:14:31 EDT (Tue, 01
</span><br>
<span class="quotelev1">&gt; Apr 2014)      (r31302)
</span><br>
<span class="quotelev1">&gt; @@ -716,6 +716,8 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  OPAL_DECLSPEC int mca_base_var_dump(int vari, char ***out,
</span><br>
<span class="quotelev1">&gt; mca_base_var_dump_type_t output_type);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +OPAL_DECLSPEC int mca_base_var_process_env_list(char ***context_env);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  END_C_DECLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #endif /* OPAL_MCA_BASE_VAR_H */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orterun/orterun.c  Tue Apr  1 16:57:12 2014
</span><br>
<span class="quotelev1">&gt;  (r31301)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orterun/orterun.c  2014-04-01 17:14:31 EDT (Tue, 01
</span><br>
<span class="quotelev1">&gt; Apr 2014)      (r31302)
</span><br>
<span class="quotelev1">&gt; @@ -1628,6 +1628,8 @@
</span><br>
<span class="quotelev1">&gt;          goto cleanup;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      mca_base_cmd_line_process_args(&amp;cmd_line, app_env, &amp;global_mca_env);
</span><br>
<span class="quotelev1">&gt; +    mca_base_var_process_env_list(app_env);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Is there an appfile in here? */
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14441/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14440.php">Allan Wu: "[OMPI devel] Problem of running 'mpirun' on a cross-compiled openmpi-1.6.5 for armv7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
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
