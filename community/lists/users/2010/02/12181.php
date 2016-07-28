<?
$subject_val = "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 12:46:51 2010" -->
<!-- isoreceived="20100227174651" -->
<!-- sent="Sat, 27 Feb 2010 10:46:42 -0700" -->
<!-- isosent="20100227174642" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in mca_odls_default.so with &amp;gt; ~100 process." -->
<!-- id="819D69DB-7332-4286-A48C-F8D6DAFBB2BB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B8925FE.4020207_at_oliford.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-27 12:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12182.php">TRINH Minh Hieu: "[OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12180.php">Hammad Siddiqi: "[OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>In reply to:</strong> <a href="12177.php">Oliver Ford: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I modified the patch (it missed a few places, some minor changes in implementation, etc) and committed it to the developer's trunk. I'll check with the release managers to see if this is something they want in the 1.4 series, or if they would rather defer it to the 1.5 series due out soon.
<br>
<p>Thanks!
<br>
<p>On Feb 27, 2010, at 7:02 AM, Oliver Ford wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, the system won't like this. Your approach makes it look like you are launching 136 app_contexts. We currently only support up to 128 app_contexts. I don't think anyone anticipated somebody trying to use the system this way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can expand the number to something larger. Will have to see how big a change it requires (mostly a question of how many places are touched) before we know what release this might show up in.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; The app_context allocation is all dynamic so is fine, the problem that 'app_idx' (various structures and code) which appears to be some kind of index mapping is defined as int8_t, so everything goes negative after 128 - hence the segfault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is a patch to the openmpi-1.4.1 taball on the website to make it all int32_t, which I've tested and works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also attached a patch for the current SVN head, which compiles but I can't test it because the current SVN head doesn't work for me at all at present (for an appfile with less than 128 entries).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry to send this here rather than the dev list, but I don't really have the time to sign up and get involved at the moment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps a bit,
</span><br>
<span class="quotelev1">&gt; Oliver
</span><br>
<span class="quotelev1">&gt; diff -ur openmpi-1.4.1/orte/mca/odls/base/odls_base_default_fns.c openmpi-1.4.1-new/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.4.1/orte/mca/odls/base/odls_base_default_fns.c	2009-12-08 20:36:37.000000000 +0000
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.4.1-new/orte/mca/odls/base/odls_base_default_fns.c	2010-02-27 12:21:14.000000000 +0000
</span><br>
<span class="quotelev1">&gt; @@ -74,7 +74,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/odls/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/odls/base/odls_private.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -static int8_t *app_idx;
</span><br>
<span class="quotelev1">&gt; +static int32_t *app_idx;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* IT IS CRITICAL THAT ANY CHANGE IN THE ORDER OF THE INFO PACKED IN
</span><br>
<span class="quotelev1">&gt;  * THIS FUNCTION BE REFLECTED IN THE CONSTRUCT_CHILD_LIST PARSER BELOW
</span><br>
<span class="quotelev1">&gt; @@ -1555,7 +1577,7 @@
</span><br>
<span class="quotelev1">&gt;     nrank = 0;
</span><br>
<span class="quotelev1">&gt;     opal_dss.pack(&amp;buffer, &amp;nrank, 1, ORTE_NODE_RANK);  /* node rank */
</span><br>
<span class="quotelev1">&gt;     one8 = 0;
</span><br>
<span class="quotelev1">&gt; -    opal_dss.pack(&amp;buffer, &amp;one8, 1, OPAL_INT8);  /* app_idx */
</span><br>
<span class="quotelev1">&gt; +    opal_dss.pack(&amp;buffer, &amp;one32, 1, OPAL_INT32);  /* app_idx */
</span><br>
<span class="quotelev1">&gt;     jobdat-&gt;pmap = (opal_byte_object_t*)malloc(sizeof(opal_byte_object_t));
</span><br>
<span class="quotelev1">&gt;     opal_dss.unload(&amp;buffer, (void**)&amp;jobdat-&gt;pmap-&gt;bytes, &amp;jobdat-&gt;pmap-&gt;size);
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;buffer);
</span><br>
<span class="quotelev1">&gt; diff -ur openmpi-1.4.1/orte/runtime/orte_globals.h openmpi-1.4.1-new/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.4.1/orte/runtime/orte_globals.h	2009-12-08 20:36:44.000000000 +0000
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.4.1-new/orte/runtime/orte_globals.h	2010-02-27 12:30:20.000000000 +0000
</span><br>
<span class="quotelev1">&gt; @@ -137,7 +137,7 @@
</span><br>
<span class="quotelev1">&gt;     /** Parent object */
</span><br>
<span class="quotelev1">&gt;     opal_object_t super;
</span><br>
<span class="quotelev1">&gt;     /** Unique index when multiple apps per job */
</span><br>
<span class="quotelev1">&gt; -    int8_t idx;
</span><br>
<span class="quotelev1">&gt; +    int32_t idx;
</span><br>
<span class="quotelev1">&gt;     /** Absolute pathname of argv[0] */
</span><br>
<span class="quotelev1">&gt;     char   *app;
</span><br>
<span class="quotelev1">&gt;     /** Number of copies of this process that are to be launched */
</span><br>
<span class="quotelev1">&gt; @@ -382,7 +382,7 @@
</span><br>
<span class="quotelev1">&gt;     /* exit code */
</span><br>
<span class="quotelev1">&gt;     orte_exit_code_t exit_code;
</span><br>
<span class="quotelev1">&gt;     /* the app_context that generated this proc */
</span><br>
<span class="quotelev1">&gt; -    int8_t app_idx;
</span><br>
<span class="quotelev1">&gt; +    int32_t app_idx;
</span><br>
<span class="quotelev1">&gt;     /* a cpu list, if specified by the user */
</span><br>
<span class="quotelev1">&gt;     char *slot_list;
</span><br>
<span class="quotelev1">&gt;     /* pointer to the node where this proc is executing */
</span><br>
<span class="quotelev1">&gt; diff -ur openmpi-1.4.1/orte/util/nidmap.c openmpi-1.4.1-new/orte/util/nidmap.c
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.4.1/orte/util/nidmap.c	2009-12-08 20:36:44.000000000 +0000
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.4.1-new/orte/util/nidmap.c	2010-02-27 12:23:18.000000000 +0000
</span><br>
<span class="quotelev1">&gt; @@ -589,7 +589,7 @@
</span><br>
<span class="quotelev1">&gt;     int32_t *nodes;
</span><br>
<span class="quotelev1">&gt;     orte_proc_t **procs;
</span><br>
<span class="quotelev1">&gt;     orte_vpid_t i;
</span><br>
<span class="quotelev1">&gt; -    int8_t *tmp;
</span><br>
<span class="quotelev1">&gt; +    int32_t *tmp;
</span><br>
<span class="quotelev1">&gt;     opal_buffer_t buf;
</span><br>
<span class="quotelev1">&gt;     orte_local_rank_t *lrank;
</span><br>
<span class="quotelev1">&gt;     orte_node_rank_t *nrank;
</span><br>
<span class="quotelev1">&gt; @@ -645,11 +645,11 @@
</span><br>
<span class="quotelev1">&gt;     free(nrank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* transfer and pack the app_idx in one pack */
</span><br>
<span class="quotelev1">&gt; -    tmp = (int8_t*)malloc(jdata-&gt;num_procs);
</span><br>
<span class="quotelev1">&gt; +    tmp = (int32_t*)malloc(jdata-&gt;num_procs * sizeof(int32_t));
</span><br>
<span class="quotelev1">&gt;     for (i=0; i &lt; jdata-&gt;num_procs; i++) {
</span><br>
<span class="quotelev1">&gt;         tmp[i] = procs[i]-&gt;app_idx;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = opal_dss.pack(&amp;buf, tmp, jdata-&gt;num_procs, OPAL_INT8))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = opal_dss.pack(&amp;buf, tmp, jdata-&gt;num_procs, OPAL_INT32))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; @@ -664,7 +665,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int orte_util_decode_pidmap(opal_byte_object_t *bo, orte_vpid_t *nprocs,
</span><br>
<span class="quotelev1">&gt; -                            opal_value_array_t *procs, int8_t **app_idx,
</span><br>
<span class="quotelev1">&gt; +                            opal_value_array_t *procs, int32_t **app_idx,
</span><br>
<span class="quotelev1">&gt;                             char ***slot_str)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     orte_vpid_t i, num_procs;
</span><br>
<span class="quotelev1">&gt; @@ -672,7 +673,7 @@
</span><br>
<span class="quotelev1">&gt;     int32_t *nodes;
</span><br>
<span class="quotelev1">&gt;     orte_local_rank_t *local_rank;
</span><br>
<span class="quotelev1">&gt;     orte_node_rank_t *node_rank;
</span><br>
<span class="quotelev1">&gt; -    int8_t *idx;
</span><br>
<span class="quotelev1">&gt; +    int32_t *idx;
</span><br>
<span class="quotelev1">&gt;     orte_std_cntr_t n;
</span><br>
<span class="quotelev1">&gt;     opal_buffer_t buf;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt; @@ -746,10 +747,10 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* allocate memory for app_idx */
</span><br>
<span class="quotelev1">&gt; -    idx = (int8_t*)malloc(num_procs);
</span><br>
<span class="quotelev1">&gt; +    idx = (int32_t*)malloc(num_procs * sizeof(int32_t));
</span><br>
<span class="quotelev1">&gt;     /* unpack app_idx in one shot */
</span><br>
<span class="quotelev1">&gt;     n=num_procs;
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = opal_dss.unpack(&amp;buf, idx, &amp;n, OPAL_INT8))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = opal_dss.unpack(&amp;buf, idx, &amp;n, OPAL_INT32))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; diff -ur openmpi-1.4.1/orte/util/nidmap.h openmpi-1.4.1-new/orte/util/nidmap.h
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.4.1/orte/util/nidmap.h	2009-12-08 20:36:44.000000000 +0000
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.4.1-new/orte/util/nidmap.h	2010-02-27 11:59:52.000000000 +0000
</span><br>
<span class="quotelev1">&gt; @@ -49,7 +49,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC int orte_util_encode_pidmap(orte_job_t *jdata, opal_byte_object_t *boptr);
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC int orte_util_decode_pidmap(opal_byte_object_t *boptr, orte_vpid_t *num_procs,
</span><br>
<span class="quotelev1">&gt; -                                          opal_value_array_t *procs, int8_t **app_idx,
</span><br>
<span class="quotelev1">&gt; +                                          opal_value_array_t *procs, int32_t **app_idx,
</span><br>
<span class="quotelev1">&gt;                                           char ***slot_str);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/odls/base/odls_base_default_fns.c	(revision 22725)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/odls/base/odls_base_default_fns.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -89,9 +89,8 @@
</span><br>
<span class="quotelev1">&gt;     orte_job_map_t *map;
</span><br>
<span class="quotelev1">&gt;     opal_buffer_t *wireup;
</span><br>
<span class="quotelev1">&gt;     opal_byte_object_t bo, *boptr;
</span><br>
<span class="quotelev1">&gt; -    int32_t numbytes, *tmp32;
</span><br>
<span class="quotelev1">&gt; +    int32_t numbytes, *tmp32A, *tmp32B;
</span><br>
<span class="quotelev1">&gt;     int8_t flag;
</span><br>
<span class="quotelev1">&gt; -    int8_t *tmp;
</span><br>
<span class="quotelev1">&gt;     orte_vpid_t i;
</span><br>
<span class="quotelev1">&gt;     int j;
</span><br>
<span class="quotelev1">&gt;     orte_daemon_cmd_flag_t command;
</span><br>
<span class="quotelev1">&gt; @@ -386,25 +385,25 @@
</span><br>
<span class="quotelev1">&gt;     free(bo.bytes);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* transfer and pack the app_idx and restart arrays for this job */
</span><br>
<span class="quotelev1">&gt; -    tmp = (int8_t*)malloc(jdata-&gt;num_procs);
</span><br>
<span class="quotelev1">&gt; -    tmp32 = (int32_t*)malloc(jdata-&gt;num_procs * sizeof(int32_t));
</span><br>
<span class="quotelev1">&gt; +    tmp32A = (int32_t*)malloc(jdata-&gt;num_procs * sizeof(int32_t));
</span><br>
<span class="quotelev1">&gt; +    tmp32B = (int32_t*)malloc(jdata-&gt;num_procs * sizeof(int32_t));
</span><br>
<span class="quotelev1">&gt;     for (j=0, i=0; i &lt; jdata-&gt;num_procs &amp;&amp; j &lt; jdata-&gt;procs-&gt;size; j++) {
</span><br>
<span class="quotelev1">&gt;         if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(jdata-&gt;procs, j))) {
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        tmp[i] = proc-&gt;app_idx;
</span><br>
<span class="quotelev1">&gt; -        tmp32[i++] = proc-&gt;restarts;
</span><br>
<span class="quotelev1">&gt; +        tmp32A[i] = proc-&gt;app_idx;
</span><br>
<span class="quotelev1">&gt; +        tmp32B[i++] = proc-&gt;restarts;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = opal_dss.pack(data, tmp, jdata-&gt;num_procs, OPAL_INT8))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = opal_dss.pack(data, tmp32A, jdata-&gt;num_procs, OPAL_INT32))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    free(tmp);
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = opal_dss.pack(data, tmp32, jdata-&gt;num_procs, OPAL_INT32))) {
</span><br>
<span class="quotelev1">&gt; +    free(tmp32A);
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = opal_dss.pack(data, tmp32B, jdata-&gt;num_procs, OPAL_INT32))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    free(tmp32);
</span><br>
<span class="quotelev1">&gt; +    free(tmp32B);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* are there cpu_list strings? */
</span><br>
<span class="quotelev1">&gt;     if (jdata-&gt;map-&gt;cpu_lists) {
</span><br>
<span class="quotelev1">&gt; @@ -579,7 +578,7 @@
</span><br>
<span class="quotelev1">&gt;     opal_buffer_t alert;
</span><br>
<span class="quotelev1">&gt;     opal_list_item_t *item;
</span><br>
<span class="quotelev1">&gt;     int8_t flag;
</span><br>
<span class="quotelev1">&gt; -    int8_t *app_idx=NULL;
</span><br>
<span class="quotelev1">&gt; +    int32_t *app_idx=NULL;
</span><br>
<span class="quotelev1">&gt;     int32_t *restarts=NULL;
</span><br>
<span class="quotelev1">&gt;     char **slot_str=NULL;
</span><br>
<span class="quotelev1">&gt;     orte_jobid_t debugger;
</span><br>
<span class="quotelev1">&gt; @@ -643,8 +642,8 @@
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         /* fake an app_idx array */
</span><br>
<span class="quotelev1">&gt; -        app_idx = (int8_t*)malloc(jobdat-&gt;num_procs * sizeof(int8_t));
</span><br>
<span class="quotelev1">&gt; -        memset(app_idx, 0, jobdat-&gt;num_procs * sizeof(int8_t));
</span><br>
<span class="quotelev1">&gt; +        app_idx = (int32_t*)malloc(jobdat-&gt;num_procs * sizeof(int32_t));
</span><br>
<span class="quotelev1">&gt; +        memset(app_idx, 0, jobdat-&gt;num_procs * sizeof(int32_t));
</span><br>
<span class="quotelev1">&gt;         /* if we are doing a timing test, store the time the msg was recvd */
</span><br>
<span class="quotelev1">&gt;         if (orte_timing) {
</span><br>
<span class="quotelev1">&gt;             jobdat-&gt;launch_msg_recvd.tv_sec = orte_daemon_msg_recvd.tv_sec;
</span><br>
<span class="quotelev1">&gt; @@ -846,10 +845,10 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* allocate memory for app_idx */
</span><br>
<span class="quotelev1">&gt; -    app_idx = (int8_t*)malloc(jobdat-&gt;num_procs);
</span><br>
<span class="quotelev1">&gt; +    app_idx = (int32_t*)malloc(jobdat-&gt;num_procs * sizeof(int32_t));
</span><br>
<span class="quotelev1">&gt;     /* unpack app_idx in one shot */
</span><br>
<span class="quotelev1">&gt;     cnt=jobdat-&gt;num_procs;
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = opal_dss.unpack(data, app_idx, &amp;cnt, OPAL_INT8))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (rc = opal_dss.unpack(data, app_idx, &amp;cnt, OPAL_INT32))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         goto REPORT_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; @@ -2213,8 +2212,8 @@
</span><br>
<span class="quotelev1">&gt;     opal_dss.pack(&amp;buffer, &amp;lrank, 1, ORTE_LOCAL_RANK);  /* local rank */
</span><br>
<span class="quotelev1">&gt;     nrank = 0;
</span><br>
<span class="quotelev1">&gt;     opal_dss.pack(&amp;buffer, &amp;nrank, 1, ORTE_NODE_RANK);  /* node rank */
</span><br>
<span class="quotelev1">&gt; -    one8 = 0;
</span><br>
<span class="quotelev1">&gt; -    opal_dss.pack(&amp;buffer, &amp;one8, 1, OPAL_INT8);  /* app_idx */
</span><br>
<span class="quotelev1">&gt; +    one32 = 0;
</span><br>
<span class="quotelev1">&gt; +    opal_dss.pack(&amp;buffer, &amp;one32, 1, OPAL_INT32);  /* app_idx */
</span><br>
<span class="quotelev1">&gt;     /* setup a byte object and unload the packed data to it */
</span><br>
<span class="quotelev1">&gt;     bo = (opal_byte_object_t*)malloc(sizeof(opal_byte_object_t));
</span><br>
<span class="quotelev1">&gt;     opal_dss.unload(&amp;buffer, (void**)&amp;bo-&gt;bytes, &amp;bo-&gt;size);
</span><br>
<span class="quotelev1">&gt; Index: orte/runtime/orte_globals.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/runtime/orte_globals.h	(revision 22725)
</span><br>
<span class="quotelev1">&gt; +++ orte/runtime/orte_globals.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -167,7 +167,7 @@
</span><br>
<span class="quotelev1">&gt;     /** Parent object */
</span><br>
<span class="quotelev1">&gt;     opal_object_t super;
</span><br>
<span class="quotelev1">&gt;     /** Unique index when multiple apps per job */
</span><br>
<span class="quotelev1">&gt; -    int8_t idx;
</span><br>
<span class="quotelev1">&gt; +    int32_t idx;
</span><br>
<span class="quotelev1">&gt;     /** Absolute pathname of argv[0] */
</span><br>
<span class="quotelev1">&gt;     char   *app;
</span><br>
<span class="quotelev1">&gt;     /** Number of copies of this process that are to be launched */
</span><br>
<span class="quotelev1">&gt; @@ -423,7 +423,7 @@
</span><br>
<span class="quotelev1">&gt;     /* exit code */
</span><br>
<span class="quotelev1">&gt;     orte_exit_code_t exit_code;
</span><br>
<span class="quotelev1">&gt;     /* the app_context that generated this proc */
</span><br>
<span class="quotelev1">&gt; -    int8_t app_idx;
</span><br>
<span class="quotelev1">&gt; +    int32_t app_idx;
</span><br>
<span class="quotelev1">&gt;     /* a cpu list, if specified by the user */
</span><br>
<span class="quotelev1">&gt;     char *slot_list;
</span><br>
<span class="quotelev1">&gt;     /* pointer to the node where this proc is executing */
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12182.php">TRINH Minh Hieu: "[OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12180.php">Hammad Siddiqi: "[OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>In reply to:</strong> <a href="12177.php">Oliver Ford: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
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
