<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 10:36:22 2015" -->
<!-- isoreceived="20150415143622" -->
<!-- sent="Wed, 15 Apr 2015 07:36:16 -0700" -->
<!-- isosent="20150415143616" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0" -->
<!-- id="95BC2F1A-042F-40EE-AEC6-86F442468932_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CANhOtjaiewpN6UqcqKcCRsmH-pRaExw2nC0Jj18aes09WRa2Pw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 10:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17227.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Previous message:</strong> <a href="17225.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>In reply to:</strong> <a href="17225.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17227.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Reply:</strong> <a href="17227.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Reply:</strong> <a href="17229.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Soooo&#226;&#128;&#166;.are you going to restore the rest of it? Or are we asking Nathan to refile it without that one piece?
<br>
<p><p><span class="quotelev1">&gt; On Apr 15, 2015, at 7:26 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't need to revert the whole commit, just to fix this small part. I proposed a fast fix for that in the PR but probably we need to fix it more intellectually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Elena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 15, 2015 at 6:08 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m really puzzled - I saw where you fixed the one part of this commit that caused a problem for you. But what happened to the rest of it? Was it really necessary to revert the entire thing, or was it only that piece that caused a problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 15, 2015, at 5:41 AM, gitdub_at_[hidden] &lt;mailto:gitdub_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt; &gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt; &gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The branch, revert-520-valgrind_cleanness has been created
</span><br>
<span class="quotelev2">&gt; &gt;        at  7a8a4a0c945f1918094caf57bca62cf1f263bfba (commit)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://github.com/open-mpi/ompi/commit/7a8a4a0c945f1918094caf57bca62cf1f263bfba">https://github.com/open-mpi/ompi/commit/7a8a4a0c945f1918094caf57bca62cf1f263bfba</a> &lt;<a href="https://github.com/open-mpi/ompi/commit/7a8a4a0c945f1918094caf57bca62cf1f263bfba">https://github.com/open-mpi/ompi/commit/7a8a4a0c945f1918094caf57bca62cf1f263bfba</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 7a8a4a0c945f1918094caf57bca62cf1f263bfba
</span><br>
<span class="quotelev2">&gt; &gt; Author: Mike Dubman &lt;miked_at_[hidden] &lt;mailto:miked_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Wed Apr 15 15:41:27 2015 +0300
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Revert &quot;fix memory leaks and valgrind errors&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mpi/tool/finalize.c b/ompi/mpi/tool/finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; index 38a0ce3..7efec79 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mpi/tool/finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mpi/tool/finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -37,15 +37,6 @@ int MPI_T_finalize (void)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (0 == --mpit_init_count) {
</span><br>
<span class="quotelev2">&gt; &gt;         (void) ompi_info_close_components ();
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -        if ((!ompi_mpi_initialized || ompi_mpi_finalized) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; -            (NULL != ompi_mpi_main_thread)) {
</span><br>
<span class="quotelev2">&gt; &gt; -            /* we are not between MPI_Init and MPI_Finalize so we
</span><br>
<span class="quotelev2">&gt; &gt; -             * have to free the ompi_mpi_main_thread */
</span><br>
<span class="quotelev2">&gt; &gt; -            OBJ_RELEASE(ompi_mpi_main_thread);
</span><br>
<span class="quotelev2">&gt; &gt; -            ompi_mpi_main_thread = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;         (void) opal_finalize_util ();
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt; &gt; index 81fef2a..dbc800b 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1,4 +1,3 @@
</span><br>
<span class="quotelev2">&gt; &gt; -/* -*- Mode: C; c-basic-offset:4 ; indent-tabs-mode:nil -*- */
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2004-2010 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt; &gt;  *                         University Research and Technology
</span><br>
<span class="quotelev2">&gt; &gt; @@ -11,7 +10,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt; &gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2006-2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; - * Copyright (c) 2006-2015 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2006-2013 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev2">&gt; &gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2006-2009 University of Houston. All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2008-2009 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; @@ -343,10 +342,7 @@ void ompi_mpi_thread_level(int requested, int *provided)
</span><br>
<span class="quotelev2">&gt; &gt;             ompi_mpi_thread_provided = *provided = requested;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if (!ompi_mpi_main_thread) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ompi_mpi_main_thread = opal_thread_get_self();
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_mpi_main_thread = opal_thread_get_self();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ompi_mpi_thread_multiple = (ompi_mpi_thread_provided ==
</span><br>
<span class="quotelev2">&gt; &gt;                                 MPI_THREAD_MULTIPLE);
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/mca/base/mca_base_var.c b/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev2">&gt; &gt; index fe6a87e..67511f3 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/base/mca_base_var.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -67,8 +67,7 @@ static char *mca_base_var_file_prefix = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; static char *mca_base_envar_file_prefix = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; static char *mca_base_param_file_path = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; static char *mca_base_env_list = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -#define MCA_BASE_ENV_LIST_SEP_DEFAULT &quot;;&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -static char *mca_base_env_list_sep = MCA_BASE_ENV_LIST_SEP_DEFAULT;
</span><br>
<span class="quotelev2">&gt; &gt; +static char *mca_base_env_list_sep = &quot;;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; static char *mca_base_env_list_internal = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; static bool mca_base_var_suppress_override_warning = false;
</span><br>
<span class="quotelev2">&gt; &gt; static opal_list_t mca_base_var_file_values;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -274,8 +273,6 @@ int mca_base_var_init(void)
</span><br>
<span class="quotelev2">&gt; &gt;                                      &quot;Set SHELL env variables&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                      MCA_BASE_VAR_TYPE_STRING, NULL, 0, 0, OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev2">&gt; &gt;                                      MCA_BASE_VAR_SCOPE_READONLY, &amp;mca_base_env_list);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -        mca_base_env_list_sep = MCA_BASE_ENV_LIST_SEP_DEFAULT;
</span><br>
<span class="quotelev2">&gt; &gt;         (void)mca_base_var_register (&quot;opal&quot;, &quot;mca&quot;, &quot;base&quot;, &quot;env_list_delimiter&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                      &quot;Set SHELL env variables delimiter. Default: semicolon ';'&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                      MCA_BASE_VAR_TYPE_STRING, NULL, 0, 0, OPAL_INFO_LVL_3,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -433,7 +430,6 @@ static int mca_base_var_cache_files(bool rel_path_search)
</span><br>
<span class="quotelev2">&gt; &gt;     if (OPAL_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt; &gt;         return ret;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     mca_base_envar_files = strdup(mca_base_var_files);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     (void) mca_base_var_register_synonym (ret, &quot;opal&quot;, &quot;mca&quot;, NULL, &quot;param_files&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1135,15 +1131,11 @@ int mca_base_var_finalize(void)
</span><br>
<span class="quotelev2">&gt; &gt;         if (NULL != mca_base_var_file_list) {
</span><br>
<span class="quotelev2">&gt; &gt;             opal_argv_free(mca_base_var_file_list);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; -        mca_base_var_file_list = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         (void) mca_base_var_group_finalize ();
</span><br>
<span class="quotelev2">&gt; &gt;         (void) mca_base_pvar_finalize ();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_DESTRUCT(&amp;mca_base_var_index_hash);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -        free (mca_base_envar_files);
</span><br>
<span class="quotelev2">&gt; &gt; -        mca_base_envar_files = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* All done */
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1249,31 +1241,15 @@ static int fixup_files(char **file_list, char * path, bool rel_path_search, char
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int read_files(char *file_list, opal_list_t *file_values, char sep)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    char **tmp = opal_argv_split(file_list, sep);
</span><br>
<span class="quotelev2">&gt; &gt; -    int i, count, ret;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if (!tmp) {
</span><br>
<span class="quotelev2">&gt; &gt; -        return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    if (mca_base_var_file_list) {
</span><br>
<span class="quotelev2">&gt; &gt; -        count = opal_argv_count (mca_base_var_file_list);
</span><br>
<span class="quotelev2">&gt; &gt; -        ret = opal_argv_insert (&amp;mca_base_var_file_list, count, tmp);
</span><br>
<span class="quotelev2">&gt; &gt; -        if (OPAL_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt; &gt; -            return ret;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -        opal_argv_free (tmp);
</span><br>
<span class="quotelev2">&gt; &gt; -    } else {
</span><br>
<span class="quotelev2">&gt; &gt; -        mca_base_var_file_list = tmp;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    count = opal_argv_count(mca_base_var_file_list);
</span><br>
<span class="quotelev2">&gt; &gt; +    int i, count;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Iterate through all the files passed in -- read them in reverse
</span><br>
<span class="quotelev2">&gt; &gt;        order so that we preserve unix/shell path-like semantics (i.e.,
</span><br>
<span class="quotelev2">&gt; &gt;        the entries farthest to the left get precedence) */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_base_var_file_list = opal_argv_split(file_list, sep);
</span><br>
<span class="quotelev2">&gt; &gt; +    count = opal_argv_count(mca_base_var_file_list);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     for (i = count - 1; i &gt;= 0; --i) {
</span><br>
<span class="quotelev2">&gt; &gt;         mca_base_parse_paramfile(mca_base_var_file_list[i], file_values);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/mca/btl/vader/btl_vader_component.c b/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev2">&gt; &gt; index 9363d47..e25035a 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/btl/vader/btl_vader_component.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -209,7 +209,6 @@ static int mca_btl_vader_component_register (void)
</span><br>
<span class="quotelev2">&gt; &gt;                                            &quot;single_copy_mechanism&quot;, &quot;Single copy mechanism to use (defaults to best available)&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                            MCA_BASE_VAR_TYPE_INT, new_enum, 0, MCA_BASE_VAR_FLAG_SETTABLE,
</span><br>
<span class="quotelev2">&gt; &gt;                                            OPAL_INFO_LVL_3, MCA_BASE_VAR_SCOPE_GROUP, &amp;mca_btl_vader_component.single_copy_mechanism);
</span><br>
<span class="quotelev2">&gt; &gt; -    OBJ_RELEASE(new_enum);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if OPAL_BTL_VADER_HAVE_KNEM
</span><br>
<span class="quotelev2">&gt; &gt;     /* Currently disabling DMA mode by default; it's not clear that this is useful in all applications and architectures. */
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/mca/installdirs/base/installdirs_base_components.c b/opal/mca/installdirs/base/installdirs_base_components.c
</span><br>
<span class="quotelev2">&gt; &gt; index 4ae3a0f..33a92db 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/installdirs/base/installdirs_base_components.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/installdirs/base/installdirs_base_components.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -164,7 +164,6 @@ opal_installdirs_base_close(void)
</span><br>
<span class="quotelev2">&gt; &gt;     free(opal_install_dirs.opaldatadir);
</span><br>
<span class="quotelev2">&gt; &gt;     free(opal_install_dirs.opallibdir);
</span><br>
<span class="quotelev2">&gt; &gt;     free(opal_install_dirs.opalincludedir);
</span><br>
<span class="quotelev2">&gt; &gt; -    memset (&amp;opal_install_dirs, 0, sizeof (opal_install_dirs));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     return mca_base_framework_components_close (&amp;opal_installdirs_base_framework, NULL);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/runtime/opal_finalize.c b/opal/runtime/opal_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; index 5a12398..b6d67bd 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/runtime/opal_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/runtime/opal_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -104,9 +104,6 @@ opal_finalize_util(void)
</span><br>
<span class="quotelev2">&gt; &gt;     /* finalize the class/object system */
</span><br>
<span class="quotelev2">&gt; &gt;     opal_class_finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    free (opal_process_info.nodename);
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_process_info.nodename = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/runtime/opal_init.c b/opal/runtime/opal_init.c
</span><br>
<span class="quotelev2">&gt; &gt; index 7ae32a4..89d6600 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/runtime/opal_init.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/runtime/opal_init.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -303,6 +303,11 @@ opal_init_util(int* pargc, char*** pargv)
</span><br>
<span class="quotelev2">&gt; &gt;         goto return_error;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +    if (OPAL_SUCCESS != (ret = opal_net_init())) {
</span><br>
<span class="quotelev2">&gt; &gt; +        error = &quot;opal_net_init&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        goto return_error;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     /* Setup the parameter system */
</span><br>
<span class="quotelev2">&gt; &gt;     if (OPAL_SUCCESS != (ret = mca_base_var_init())) {
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;mca_base_var_init&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -315,11 +320,6 @@ opal_init_util(int* pargc, char*** pargv)
</span><br>
<span class="quotelev2">&gt; &gt;         goto return_error;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    if (OPAL_SUCCESS != (ret = opal_net_init())) {
</span><br>
<span class="quotelev2">&gt; &gt; -        error = &quot;opal_net_init&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; -        goto return_error;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     /* pretty-print stack handlers */
</span><br>
<span class="quotelev2">&gt; &gt;     if (OPAL_SUCCESS != (ret = opal_util_register_stackhandlers())) {
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;opal_util_register_stackhandlers&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/runtime/opal_params.c b/opal/runtime/opal_params.c
</span><br>
<span class="quotelev2">&gt; &gt; index ff28a0c..3b4d4a7 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/runtime/opal_params.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/runtime/opal_params.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -231,7 +231,6 @@ int opal_register_params(void)
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if OPAL_ENABLE_TIMING
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_timing_sync_file = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     (void) mca_base_var_register (&quot;opal&quot;, &quot;opal&quot;, NULL, &quot;timing_sync_file&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                   &quot;Clock synchronisation information generated by mpisync tool. You don't need to touch this if you use mpirun_prof tool.&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                   MCA_BASE_VAR_TYPE_STRING, NULL, 0, 0,
</span><br>
<span class="quotelev2">&gt; &gt; @@ -241,14 +240,12 @@ int opal_register_params(void)
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output(0, &quot;Cannot read file %s containing clock synchronisation information\n&quot;, opal_timing_sync_file);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_timing_output = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     (void) mca_base_var_register (&quot;opal&quot;, &quot;opal&quot;, NULL, &quot;timing_output&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                   &quot;The name of output file for timing information. If this parameter is not set then output will be directed into OPAL debug channel.&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                   MCA_BASE_VAR_TYPE_STRING, NULL, 0, 0,
</span><br>
<span class="quotelev2">&gt; &gt;                                   OPAL_INFO_LVL_9, MCA_BASE_VAR_SCOPE_ALL,
</span><br>
<span class="quotelev2">&gt; &gt;                                   &amp;opal_timing_output);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_timing_overhead = true;
</span><br>
<span class="quotelev2">&gt; &gt;     (void) mca_base_var_register (&quot;opal&quot;, &quot;opal&quot;, NULL, &quot;timing_overhead&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                   &quot;Timing framework introduce additional overhead (malloc's mostly).&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                                   &quot; The time spend in such costly routines is measured and may be accounted&quot;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -283,6 +280,9 @@ int opal_register_params(void)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int opal_deregister_params(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_signal_string = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_net_private_ipv4 = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_set_max_sys_limits = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     opal_register_done = false;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/runtime/orte_init.c b/orte/runtime/orte_init.c
</span><br>
<span class="quotelev2">&gt; &gt; index 678a66c..cc47927 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/runtime/orte_init.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/runtime/orte_init.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -182,8 +182,7 @@ int orte_init(int* pargc, char*** pargv, orte_proc_type_t flags)
</span><br>
<span class="quotelev2">&gt; &gt;     if (NULL != opal_process_info.nodename) {
</span><br>
<span class="quotelev2">&gt; &gt;         free(opal_process_info.nodename);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -    /* opal_finalize_util will call free on this pointer so set from strdup */
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_process_info.nodename = strdup (orte_process_info.nodename);
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_process_info.nodename = orte_process_info.nodename;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* setup the dstore framework */
</span><br>
<span class="quotelev2">&gt; &gt;     if (ORTE_SUCCESS != (ret = mca_base_framework_open(&amp;opal_dstore_base_framework, 0))) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits_at_[hidden] &lt;mailto:ompi-commits_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17224.php">http://www.open-mpi.org/community/lists/devel/2015/04/17224.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17224.php">http://www.open-mpi.org/community/lists/devel/2015/04/17224.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17225.php">http://www.open-mpi.org/community/lists/devel/2015/04/17225.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17226/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17227.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Previous message:</strong> <a href="17225.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>In reply to:</strong> <a href="17225.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17227.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Reply:</strong> <a href="17227.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Reply:</strong> <a href="17229.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
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
