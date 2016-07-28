<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 19:23:15 2014" -->
<!-- isoreceived="20140401232315" -->
<!-- sent="Tue, 1 Apr 2014 16:23:14 -0700" -->
<!-- isosent="20140401232314" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="CAMD57odEFhX=UeU7hbbV2Oiaosq-Di9f_VZBZJWHADpe1BcTpg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1Kya+K5D4RWqDiQA1wcKOcOjqoDE2weQeDb0JTv5VP-PwsQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-04-01 19:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14445.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14443.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under	managed state by Torque"</a>
<li><strong>In reply to:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14445.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14445.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14446.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are expecting the user to put quotes around the string, then you
<br>
better tell them that in the help message. Otherwise, they would do what I
<br>
did - simply list the envars with a space in-between, and everything fails.
<br>
<p>Also, you need to update mpirun.1in to reflect this new option or else
<br>
nobody will know about it :-)
<br>
<p>However, looking at your example leaves me totally puzzled. Why are these
<br>
not just MCA params to begin with, in which case we don't need another
<br>
duplicate mechanism for setting them?
<br>
<p>We should only be setting envars that have nothing to do with OMPI, not
<br>
setting OMPI-related envars - anything OMPI related is supposed to be an
<br>
MCA param.
<br>
<p><p><p>On Tue, Apr 1, 2014 at 4:16 PM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; not sure what you mean, could you please provide example?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; comma is used often as part of the value, here is a example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca base_env_list &quot;HCOLL_BCOL=basesmuma,mlnx_p2p HCOLL_SBGP=basesmuma,p2p
</span><br>
<span class="quotelev1">&gt; HCOLL_ML_USE_KNOMIAL_ALLREDUCE=1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 2, 2014 at 2:12 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This change just looks wrong - you can't split the variables on a &quot;space&quot;
</span><br>
<span class="quotelev2">&gt;&gt; as there is no way to know how many variables there might be, and thus how
</span><br>
<span class="quotelev2">&gt;&gt; to parse the rest of the cmd line. At best, you need a comma-delimited list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please fix this!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 1, 2014 at 2:14 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2014-04-01 17:14:31 EDT (Tue, 01 Apr 2014)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 31302
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31302">https://svn.open-mpi.org/trac/ompi/changeset/31302</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal: add mca param to control ranks env variables
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add -mca base_env_list &quot;var1=val1 var2=val2 ...&quot; mca parameter that can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be used in mca param files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or with -am app.conf mpirun commandline to set rank env variables with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca mechanism
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed by Elena, reviewed by Miked
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmr=v1.8.1:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/mca/base/help-mca-var.txt |     5 +++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/mca/base/mca_base_var.c   |    36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/mca/base/mca_base_var.h   |     2 ++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/orte/tools/orterun/orterun.c   |     2 ++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    4 files changed, 45 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/base/help-mca-var.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/base/help-mca-var.txt        Tue Apr  1 16:57:12 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        (r31301)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/base/help-mca-var.txt        2014-04-01 17:14:31 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Tue, 01 Apr 2014)      (r31302)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -121,3 +121,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Value:      %s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Source:     %s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +[incorrect-env-list-param]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +The format of mca_base_env_list parameter is incorrect. It should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +VAR1=VAL1 VAR2=VAL2 VAR3=VAL3 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  Value:      %s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/base/mca_base_var.c  Tue Apr  1 16:57:12 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (r31301)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/base/mca_base_var.c  2014-04-01 17:14:31 EDT (Tue, 01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apr 2014)      (r31302)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -61,6 +61,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static char *mca_base_var_override_file = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static char *mca_base_var_file_prefix = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static char *mca_base_param_file_path = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static char *mca_base_env_list = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static bool mca_base_var_suppress_override_warning = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static opal_list_t mca_base_var_file_values;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static opal_list_t mca_base_var_override_values;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -259,6 +260,41 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +int mca_base_var_process_env_list(char ***context_env)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int i, ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    char** tokens;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    char* ptr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    char* param, *value;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    ret = mca_base_var_register (&quot;opal&quot;, &quot;mca&quot;, &quot;base&quot;, &quot;env_list&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                 &quot;Set SHELL env variables&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                 MCA_BASE_VAR_TYPE_STRING, NULL, 0, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                 MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;mca_base_env_list);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if ((0 &gt; ret) || (NULL == mca_base_env_list)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    tokens = opal_argv_split(mca_base_env_list, ' ');
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (NULL != tokens) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        for (i = 0; NULL != tokens[i]; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            if (NULL == (ptr = strchr(tokens[i], '='))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                opal_show_help(&quot;help-mca-var.txt&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;incorrect-env-list-param&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        true, mca_base_env_list);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                opal_argv_free(tokens);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                return OPAL_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                param = strdup(tokens[i]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                value = strchr(param, '=');
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                *value = '\0';
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                value++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                opal_setenv(param, value, false, context_env);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                free(param);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        opal_argv_free(tokens);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return OPAL_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static int mca_base_var_cache_files(bool rel_path_search)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      char *tmp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/base/mca_base_var.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/base/mca_base_var.h  Tue Apr  1 16:57:12 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (r31301)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/base/mca_base_var.h  2014-04-01 17:14:31 EDT (Tue, 01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apr 2014)      (r31302)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -716,6 +716,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OPAL_DECLSPEC int mca_base_var_dump(int vari, char ***out,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_var_dump_type_t output_type);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OPAL_DECLSPEC int mca_base_var_process_env_list(char ***context_env);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  END_C_DECLS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif /* OPAL_MCA_BASE_VAR_H */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/orte/tools/orterun/orterun.c  Tue Apr  1 16:57:12 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (r31301)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/tools/orterun/orterun.c  2014-04-01 17:14:31 EDT (Tue, 01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apr 2014)      (r31302)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1628,6 +1628,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          goto cleanup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mca_base_cmd_line_process_args(&amp;cmd_line, app_env, &amp;global_mca_env);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    mca_base_var_process_env_list(app_env);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Is there an appfile in here? */
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14441.php">http://www.open-mpi.org/community/lists/devel/2014/04/14441.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14442.php">http://www.open-mpi.org/community/lists/devel/2014/04/14442.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14445.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14443.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under	managed state by Torque"</a>
<li><strong>In reply to:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14445.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14445.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Reply:</strong> <a href="14446.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
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
