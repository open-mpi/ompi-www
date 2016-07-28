<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 19:34:34 2009" -->
<!-- isoreceived="20091216003434" -->
<!-- sent="Tue, 15 Dec 2009 18:34:28 -0600" -->
<!-- isosent="20091216003428" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA17056655_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] [OMPI svn-full] svn:open-mpi r22317" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 19:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7235.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7244.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<li><strong>Reply:</strong> <a href="7244.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome!  Does this fix the xgrid support?
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: svn-full-bounces_at_[hidden] &lt;svn-full-bounces_at_[hidden]&gt;
<br>
To: svn-full_at_[hidden] &lt;svn-full_at_[hidden]&gt;
<br>
Sent: Tue Dec 15 19:06:37 2009
<br>
Subject: [OMPI svn-full] svn:open-mpi r22317
<br>

<br>
Author: bosilca
<br>
Date: 2009-12-15 19:06:37 EST (Tue, 15 Dec 2009)
<br>
New Revision: 22317
<br>
URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22317">https://svn.open-mpi.org/trac/ompi/changeset/22317</a>
<br>

<br>
Log:
<br>
Santa's back! Fix all warnings about the deprecated usage of
<br>
stringWithCString as well as the casting issue between NSInteger and
<br>
%d. The first is solved by using stringWithUTF8String, which apparently
<br>
will always give the right answer (sic). The second is fixed as suggested
<br>
by Apple by casting the NSInteger (hint: which by definition is large
<br>
enough to hold a pointer) to a long and use %ld in the printf.
<br>

<br>
Text files modified: 
<br>
&nbsp;&nbsp;&nbsp;trunk/orte/mca/plm/xgrid/src/plm_xgrid_client.m |    32 ++++++++++++++++----------------        
<br>
&nbsp;&nbsp;&nbsp;1 files changed, 16 insertions(+), 16 deletions(-)
<br>

<br>
Modified: trunk/orte/mca/plm/xgrid/src/plm_xgrid_client.m
<br>
==============================================================================
<br>
--- trunk/orte/mca/plm/xgrid/src/plm_xgrid_client.m	(original)
<br>
+++ trunk/orte/mca/plm/xgrid/src/plm_xgrid_client.m	2009-12-15 19:06:37 EST (Tue, 15 Dec 2009)
<br>
@@ -56,14 +56,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;state_mutex, opal_mutex_t);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != password) {
<br>
-	    controller_password = [NSString stringWithCString: password];
<br>
+	    controller_password = [NSString stringWithUTF8String: password];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != hostname) {
<br>
-	    controller_hostname = [NSString stringWithCString: hostname];
<br>
+	    controller_hostname = [NSString stringWithUTF8String: hostname];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cleanup = val;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != ortedname) {
<br>
-	    orted = [NSString stringWithCString: ortedname];
<br>
+	    orted = [NSString stringWithUTF8String: ortedname];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_xgrid_jobs = [NSMutableDictionary dictionary];
<br>
@@ -118,19 +118,19 @@
<br>
&nbsp;
<br>
&nbsp;-(void) setOrtedAsCString: (char*) name
<br>
&nbsp;{
<br>
-    orted = [NSString stringWithCString: name];
<br>
+    orted = [NSString stringWithUTF8String: name];
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;-(void) setControllerPasswordAsCString: (char*) name
<br>
&nbsp;{
<br>
-    controller_password = [NSString stringWithCString: name];
<br>
+    controller_password = [NSString stringWithUTF8String: name];
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;-(void) setControllerHostnameAsCString: (char*) password
<br>
&nbsp;{
<br>
-    controller_hostname = [NSString stringWithCString: password];
<br>
+    controller_hostname = [NSString stringWithUTF8String: password];
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;
<br>
@@ -267,7 +267,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSMutableDictionary *task = [NSMutableDictionary dictionary];
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* fill in applicaton to start */
<br>
-        [task setObject: [NSString stringWithCString: orted_path]
<br>
+        [task setObject: [NSString stringWithUTF8String: orted_path]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forKey: XGJobSpecificationCommandKey];
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* fill in task arguments */
<br>
@@ -281,11 +281,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;orte_plm_rsh: unable to get daemon vpid as string&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-	[taskArguments addObject: [NSString stringWithCString: vpid_string]];
<br>
+	[taskArguments addObject: [NSString stringWithUTF8String: vpid_string]];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(vpid_string);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[taskArguments addObject: @&quot;--nodename&quot;];
<br>
-	[taskArguments addObject: [NSString stringWithCString: nodes[nnode]-&gt;name]];
<br>
+	[taskArguments addObject: [NSString stringWithUTF8String: nodes[nnode]-&gt;name]];
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[task setObject: taskArguments forKey: XGJobSpecificationArgumentsKey];
<br>
&nbsp;
<br>
@@ -393,8 +393,8 @@
<br>
&nbsp;-(void) connectionDidNotOpen:(XGConnection*) myConnection withError: (NSError*) error
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(orte_plm_globals.output,
<br>
-		&quot;orte:plm:xgrid: Controller connection did not open: (%d) %s&quot;,
<br>
-		[error code],
<br>
+		&quot;orte:plm:xgrid: Controller connection did not open: (%ld) %s&quot;,
<br>
+		(long)[error code],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[[error localizedDescription] UTF8String]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_broadcast(&amp;state_cond);
<br>
&nbsp;}
<br>
@@ -411,13 +411,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 530:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 535:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(orte_plm_globals.output,
<br>
-			&quot;orte:plm:xgrid: Connection to XGrid controller failed due to authentication error (%d):&quot;,
<br>
-			[[myConnection error] code]);
<br>
+			&quot;orte:plm:xgrid: Connection to XGrid controller failed due to authentication error (%ld):&quot;,
<br>
+			(long)[[myConnection error] code]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(orte_plm_globals.output,
<br>
-			&quot;orte:plm:xgrid: Connection to XGrid controller unexpectedly closed: (%d) %s&quot;,
<br>
-			[[myConnection error] code],
<br>
+			&quot;orte:plm:xgrid: Connection to XGrid controller unexpectedly closed: (%ld) %s&quot;,
<br>
+			(long)[[myConnection error] code],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[[[myConnection error] localizedDescription] UTF8String]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -443,7 +443,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Note that capacity is a starting capacity, not max */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSMutableArray *ret = [NSMutableArray arrayWithCapacity: argc];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0 ; i &lt; argc ; ++i) {
<br>
-	[ret addObject: [NSString stringWithCString: argv[i]]];
<br>
+	[ret addObject: [NSString stringWithUTF8String: argv[i]]];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != argv) opal_argv_free(argv);
<br>
_______________________________________________
<br>
svn-full mailing list
<br>
svn-full_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7235.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7244.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<li><strong>Reply:</strong> <a href="7244.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
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
