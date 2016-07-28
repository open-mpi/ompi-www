<?
$subject_val = "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  1 06:42:04 2006" -->
<!-- isoreceived="20060701104204" -->
<!-- sent="Sat, 01 Jul 2006 12:42:47 +0200" -->
<!-- isosent="20060701104247" -->
<!-- name="openmpi-user" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)" -->
<!-- id="44A651A7.8060309_at_fraka-mp.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)" -->
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
<strong>From:</strong> openmpi-user (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-01 06:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1519.php">Bert Wesarg: "[OMPI users] MPI_Op_reduce()"</a>
<li><strong>Previous message:</strong> <a href="../../2006/06/1517.php">Brian Barrett: "Re: [OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2006/06/1475.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<li><strong>Reply:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@ Terry (and All)!
<br>
<p>Enclose you'll find a (minor) bugfix with respect to the BUS_ADRALN I've 
<br>
reported recently when submitting jobs to the XGrid with OpenMPI 1.1. 
<br>
The BUS_ADRALN error on SPARC systems might be caused by a similar code 
<br>
segment. For the &quot;bugfix&quot; see line 55ff of the attached code file 
<br>
pls_xgrid_cliemt.m
<br>
<p>I haven't check this yet, but it's very likely that the same code 
<br>
segment causes the BUS_ADRALN error in the trunk-tarballs when 
<br>
submitting jobs to with XGrid with those releases.
<br>
<p>Hope this will help you, too, Eric.
<br>
<p>Frank
<br>
<p>
<br><p>
/*
<br>
&nbsp;* Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
<br>
&nbsp;*                         University Research and Technology
<br>
&nbsp;*                         Corporation.  All rights reserved.
<br>
&nbsp;* Copyright (c) 2004-2005 The University of Tennessee and The University
<br>
&nbsp;*                         of Tennessee Research Foundation.  All rights
<br>
&nbsp;*                         reserved.
<br>
&nbsp;* Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
<br>
&nbsp;*                         University of Stuttgart.  All rights reserved.
<br>
&nbsp;* Copyright (c) 2004-2005 The Regents of the University of California.
<br>
&nbsp;*                         All rights reserved.
<br>
&nbsp;* $COPYRIGHT$
<br>
&nbsp;* 
<br>
&nbsp;* Additional copyrights may follow
<br>
&nbsp;* 
<br>
&nbsp;* $HEADER$
<br>
&nbsp;*/
<br>
<p>#import &quot;orte_config.h&quot;
<br>
<p>#import &lt;stdio.h&gt;
<br>
<p>#import &quot;orte/mca/pls/base/base.h&quot;
<br>
#import &quot;orte/orte_constants.h&quot;
<br>
#import &quot;orte/mca/ns/ns.h&quot;
<br>
#import &quot;orte/mca/ras/base/ras_base_node.h&quot;
<br>
#import &quot;orte/mca/gpr/gpr.h&quot;
<br>
#import &quot;orte/mca/rml/rml.h&quot;
<br>
#import &quot;opal/util/path.h&quot;
<br>
<p>#import &quot;pls_xgrid_client.h&quot;
<br>
<p>char **environ;
<br>
<p>/**
<br>
&nbsp;* Set the daemons name in the registry.
<br>
&nbsp;*/
<br>
<p>static int
<br>
mca_pls_xgrid_set_node_name(orte_ras_node_t* node, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_jobid_t jobid, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_process_name_t* name)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_gpr_value_t *values[1], *value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_gpr_keyval_t *kv;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char* jobid_string;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;values[0] = OBJ_NEW(orte_gpr_value_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == values[0]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
//  BUS_ADRALIN error in line value-&gt;cnt = 1, if value isn't assigned first
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value = values[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value-&gt;cnt = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value-&gt;addr_mode = ORTE_GPR_OVERWRITE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value-&gt;segment = strdup(ORTE_NODE_SEGMENT);
<br>
//  value = values[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value-&gt;keyvals = (orte_gpr_keyval_t**)malloc(value-&gt;cnt * sizeof(orte_gpr_keyval_t*));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == value-&gt;keyvals) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value-&gt;keyvals[0] = OBJ_NEW(orte_gpr_keyval_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == value-&gt;keyvals[0]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;kv = value-&gt;keyvals[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(rc = orte_ns.convert_jobid_to_string(&amp;jobid_string, jobid))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(rc = orte_schema.get_node_tokens(&amp;(value-&gt;tokens), &amp;(value-&gt;num_tokens), 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;node_cellid, node-&gt;node_name))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(jobid_string);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;(kv-&gt;key), &quot;%s-%s&quot;, ORTE_NODE_BOOTPROXY_KEY, jobid_string);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;kv-&gt;value = OBJ_NEW(orte_data_value_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == kv-&gt;value) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;kv-&gt;value-&gt;type = ORTE_NAME;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (rc = orte_dss.copy(&amp;(kv-&gt;value-&gt;data), name, ORTE_NAME))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;rc = orte_gpr.put(1, values);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(ORTE_SUCCESS != rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(value);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
}
<br>
<p><p>@implementation PlsXGridClient
<br>
<p>/* init / finalize */
<br>
-(id) init
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return [self initWithControllerHostname: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AndControllerPassword: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AndOrted: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AndCleanup: 1];
<br>
}
<br>
<p>-(id) initWithControllerHostname: (char*) hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AndControllerPassword: (char*) password
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AndOrted: (char*) ortedname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AndCleanup: (int) val
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (self = [super init]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* class-specific initialization goes here */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;state_cond, opal_condition_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;state_mutex, opal_mutex_t);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != password) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;controller_password = [NSString stringWithCString: password];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != hostname) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;controller_hostname = [NSString stringWithCString: hostname];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cleanup = val;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != ortedname) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orted = [NSString stringWithCString: ortedname];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_jobs = [NSMutableDictionary dictionary];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return self;
<br>
}
<br>
<p><p>-(void) dealloc
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* if supposed to clean up jobs, do so */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cleanup) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSArray *keys = [active_jobs allKeys];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSEnumerator *enumerator = [keys objectEnumerator];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSString *key;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XGJob *job;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XGActionMonitor *actionMonitor;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (key = [enumerator nextObject]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;job = [grid jobForIdentifier: [active_jobs objectForKey: key]];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;actionMonitor = [job performDeleteAction];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (XGActionMonitorOutcomeNone == [actionMonitor outcome]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* we should have a result - find out if it worked */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (XGActionMonitorOutcomeSuccess != [actionMonitor outcome]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSError *err = [actionMonitor error];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;orte:pls:xgrid: cleanup failed: %s\n&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[[err localizedFailureReason] cString]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* need to shut down connection */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[connection finalize];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;state_mutex);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;state_cond);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[super dealloc];
<br>
}
<br>
<p><p>/* accessors */
<br>
-(NSString*) getOrted
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return orted;
<br>
}
<br>
<p><p>-(void) setOrtedAsCString: (char*) name
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orted = [NSString stringWithCString: name];
<br>
}
<br>
<p><p>-(void) setControllerPasswordAsCString: (char*) name
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;controller_password = [NSString stringWithCString: name];
<br>
}
<br>
<p><p>-(void) setControllerHostnameAsCString: (char*) password
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;controller_hostname = [NSString stringWithCString: password];
<br>
}
<br>
<p><p>-(void) setCleanUp: (int) val
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cleanup = val;
<br>
}
<br>
<p><p>/* interface for launch */
<br>
-(int) connect
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;connection = [[[XGConnection alloc] initWithHostname: controller_hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;portnumber:0] autorelease];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;authenticator = [[[XGTwoWayRandomAuthenticator alloc] init] autorelease];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* this seems to be hard coded */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[authenticator setUsername:@&quot;one-xgrid-client&quot;];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[authenticator setPassword:controller_password];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[connection setAuthenticator:authenticator];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[connection setDelegate: self];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* get us connected */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_mutex_lock(&amp;state_mutex);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[connection open];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while ([connection state] == XGConnectionStateOpening) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait(&amp;state_cond, &amp;state_mutex);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_mutex_unlock(&amp;state_mutex);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;opal_output(orte_pls_base.pls_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;pls: xgrid: connection name: %s&quot;, [[connection name] cString]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;controller = [[XGController alloc] initWithConnection:connection];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;grid = [controller defaultGrid];
<br>
#if 0 /* gives a warning - need to figure out &quot;right way&quot; */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_output(orte_pls_base.pls_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;pls: xgrid: grid name: %s&quot;, [[grid name] cString]);
<br>
#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
}
<br>
<p><p>-(int) launchJob:(orte_jobid_t) jobid
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t nodes, mapping_list;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t *item;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t num_nodes;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_vpid_t vpid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *orted_path;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* find orted */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orted_path = opal_path_findv((char*) [orted cString], 0, environ, NULL); 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* query the list of nodes allocated to the job */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;nodes, opal_list_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;mapping_list, opal_list_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ret = orte_rmaps_base_mapped_node_query(&amp;mapping_list, &amp;nodes, jobid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != ret) goto cleanup;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* allocate vpids for the daemons */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;num_nodes = opal_list_get_size(&amp;nodes);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (num_nodes == 0) return ORTE_ERR_BAD_PARAM;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ret = orte_ns.reserve_range(0, num_nodes, &amp;vpid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != ret) goto cleanup;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* build up the array of task specifications */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NSMutableDictionary *taskSpecifications = [NSMutableDictionary dictionary];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (item =  opal_list_get_first(&amp;nodes);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item != opal_list_get_end(&amp;nodes);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item =  opal_list_get_next(item)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_ras_node_t* node = (orte_ras_node_t*)item;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_process_name_t* name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *name_str, *nsuri, *gpruri;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = orte_ns.create_process_name(&amp;name, node-&gt;node_cellid, 0, vpid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ORTE_SUCCESS != ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = orte_ns.get_proc_name_string(&amp;name_str, name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != orte_process_info.ns_replica_uri) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nsuri = strdup(orte_process_info.ns_replica_uri);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nsuri = orte_rml.get_uri();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != orte_process_info.gpr_replica_uri) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gpruri = strdup(orte_process_info.gpr_replica_uri);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gpruri = orte_rml.get_uri();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSMutableDictionary *task = [NSMutableDictionary dictionary];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[task setObject: [NSString stringWithCString: orted_path]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forKey: XGJobSpecificationCommandKey];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSArray *taskArguments = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[NSArray arrayWithObjects: @&quot;--no-daemonize&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@&quot;--bootproxy&quot;, [NSString stringWithFormat: @&quot;%d&quot;, jobid],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@&quot;--name&quot;, [NSString stringWithCString: name_str],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@&quot;--nodename&quot;, [NSString stringWithCString: node-&gt;node_name],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@&quot;--nsreplica&quot;, [NSString stringWithCString: nsuri],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@&quot;--gprreplica&quot;, [NSString stringWithCString: gpruri],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nil];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[task setObject: taskArguments forKey: XGJobSpecificationArgumentsKey];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[taskSpecifications setObject: task 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forKey: [NSString stringWithFormat: @&quot;%d&quot;, i]];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* add the node name into the registery */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pls_xgrid_set_node_name(node, jobid, name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(name_str); free(nsuri); free(gpruri);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vpid++; i++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* job specification */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NSMutableDictionary *jobSpecification = [NSMutableDictionary dictionary];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[jobSpecification setObject:XGJobSpecificationTypeTaskListValue 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forKey:XGJobSpecificationTypeKey];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[jobSpecification setObject: [NSString stringWithFormat: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@&quot;org.open-mpi.pls.xgrid&quot;]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forKey:XGJobSpecificationSubmissionIdentifierKey];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[jobSpecification setObject: [NSString stringWithFormat: @&quot;Open MPI Job %d&quot;, jobid]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forKey:XGJobSpecificationNameKey];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[jobSpecification setObject:taskSpecifications 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forKey:XGJobSpecificationTaskSpecificationsKey];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Submit the request and get our monitor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XGActionMonitor *actionMonitor = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[controller performSubmitJobActionWithJobSpecification: jobSpecification
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gridIdentifier: [grid identifier]];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* wait until we have some idea if job succeeded or not */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (XGActionMonitorOutcomeNone == [actionMonitor outcome]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* we should have a result - find out if it worked */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (XGActionMonitorOutcomeSuccess == [actionMonitor outcome]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = ORTE_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {	
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSError *err = [actionMonitor error];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;orte:pls:xgrid: launch failed: %s\n&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[[err localizedFailureReason] cString]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = ORTE_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* save the XGJob identifier somewhere we can get to it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[active_jobs setObject: [[actionMonitor results] objectForKey: @&quot;jobIdentifier&quot;]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forKey: [NSString stringWithFormat: @&quot;%d&quot;, jobid]];
<br>
<p>cleanup:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while(NULL != (item = opal_list_remove_first(&amp;nodes))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(item);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;nodes);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;while(NULL != (item = opal_list_remove_first(&amp;mapping_list))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(item);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;mapping_list);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
}
<br>
<p><p>-(int) terminateJob: (orte_jobid_t) jobid
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int ret;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* get our grid */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XGJob *job = [grid jobForIdentifier: [active_jobs objectForKey:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[NSString stringWithFormat: @&quot;%d&quot;, jobid]]];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;XGActionMonitor *actionMonitor = [job performStopAction];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (XGActionMonitorOutcomeNone == [actionMonitor outcome]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* we should have a result - find out if it worked */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (XGActionMonitorOutcomeSuccess == [actionMonitor outcome]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = ORTE_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {	
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSError *err = [actionMonitor error];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;orte:pls:xgrid: terminate failed: %s\n&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[[err localizedFailureReason] cString]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = ORTE_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
}
<br>
<p><p>/* delegate for changes */
<br>
-(void) connectionDidOpen:(XGConnection*) connection
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_broadcast(&amp;state_cond);
<br>
}
<br>
<p><p>-(void) connectionDidNotOpen:(XGConnection*) connection withError: (NSError*) error
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_output(orte_pls_base.pls_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;pls: xgrid: got connectionDidNotOpen message&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_broadcast(&amp;state_cond);
<br>
}
<br>
<p><p>-(void) connectionDidClose:(XGConnection*) connection;
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_output(orte_pls_base.pls_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;pls: xgrid: got connectionDidClose message&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_broadcast(&amp;state_cond);
<br>
}
<br>
<p>@end
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1519.php">Bert Wesarg: "[OMPI users] MPI_Op_reduce()"</a>
<li><strong>Previous message:</strong> <a href="../../2006/06/1517.php">Brian Barrett: "Re: [OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2006/06/1475.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<li><strong>Reply:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
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
