<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 01:25:05 2009" -->
<!-- isoreceived="20091216062505" -->
<!-- sent="Wed, 16 Dec 2009 01:24:53 -0500" -->
<!-- isosent="20091216062453" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317" -->
<!-- id="DD0E0913-B3DD-4C60-83B5-48348A169EDB_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA17056655_at_XMB-RCD-205.cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 01:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7245.php">George Bosilca: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7243.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>In reply to:</strong> <a href="7236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think so. I had a very modest goal, it was not to fix the xgrid PLM (I'm not that proficient on Objective-C) but to silence the annoying compiler on my MAC. In fact I didn't even test it to see if its working or not, but based on some more or less recent complaints on the user mailing list I guess not.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 15, 2009, at 19:34 , Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Awesome!  Does this fix the xgrid support?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: svn-full-bounces_at_[hidden] &lt;svn-full-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: svn-full_at_[hidden] &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tue Dec 15 19:06:37 2009
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r22317
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-12-15 19:06:37 EST (Tue, 15 Dec 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 22317
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22317">https://svn.open-mpi.org/trac/ompi/changeset/22317</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Santa's back! Fix all warnings about the deprecated usage of
</span><br>
<span class="quotelev1">&gt; stringWithCString as well as the casting issue between NSInteger and
</span><br>
<span class="quotelev1">&gt; %d. The first is solved by using stringWithUTF8String, which apparently
</span><br>
<span class="quotelev1">&gt; will always give the right answer (sic). The second is fixed as suggested
</span><br>
<span class="quotelev1">&gt; by Apple by casting the NSInteger (hint: which by definition is large
</span><br>
<span class="quotelev1">&gt; enough to hold a pointer) to a long and use %ld in the printf.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/xgrid/src/plm_xgrid_client.m |    32 ++++++++++++++++----------------       
</span><br>
<span class="quotelev1">&gt;    1 files changed, 16 insertions(+), 16 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/xgrid/src/plm_xgrid_client.m
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/xgrid/src/plm_xgrid_client.m     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/xgrid/src/plm_xgrid_client.m     2009-12-15 19:06:37 EST (Tue, 15 Dec 2009)
</span><br>
<span class="quotelev1">&gt; @@ -56,14 +56,14 @@
</span><br>
<span class="quotelev1">&gt;         OBJ_CONSTRUCT(&amp;state_mutex, opal_mutex_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (NULL != password) {
</span><br>
<span class="quotelev1">&gt; -           controller_password = [NSString stringWithCString: password];
</span><br>
<span class="quotelev1">&gt; +           controller_password = [NSString stringWithUTF8String: password];
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if (NULL != hostname) {
</span><br>
<span class="quotelev1">&gt; -           controller_hostname = [NSString stringWithCString: hostname];
</span><br>
<span class="quotelev1">&gt; +           controller_hostname = [NSString stringWithUTF8String: hostname];
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         cleanup = val;
</span><br>
<span class="quotelev1">&gt;         if (NULL != ortedname) {
</span><br>
<span class="quotelev1">&gt; -           orted = [NSString stringWithCString: ortedname];
</span><br>
<span class="quotelev1">&gt; +           orted = [NSString stringWithUTF8String: ortedname];
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         active_xgrid_jobs = [NSMutableDictionary dictionary];
</span><br>
<span class="quotelev1">&gt; @@ -118,19 +118,19 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -(void) setOrtedAsCString: (char*) name
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    orted = [NSString stringWithCString: name];
</span><br>
<span class="quotelev1">&gt; +    orted = [NSString stringWithUTF8String: name];
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -(void) setControllerPasswordAsCString: (char*) name
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    controller_password = [NSString stringWithCString: name];
</span><br>
<span class="quotelev1">&gt; +    controller_password = [NSString stringWithUTF8String: name];
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -(void) setControllerHostnameAsCString: (char*) password
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    controller_hostname = [NSString stringWithCString: password];
</span><br>
<span class="quotelev1">&gt; +    controller_hostname = [NSString stringWithUTF8String: password];
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -267,7 +267,7 @@
</span><br>
<span class="quotelev1">&gt;          NSMutableDictionary *task = [NSMutableDictionary dictionary];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* fill in applicaton to start */
</span><br>
<span class="quotelev1">&gt; -        [task setObject: [NSString stringWithCString: orted_path]
</span><br>
<span class="quotelev1">&gt; +        [task setObject: [NSString stringWithUTF8String: orted_path]
</span><br>
<span class="quotelev1">&gt;              forKey: XGJobSpecificationCommandKey];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* fill in task arguments */
</span><br>
<span class="quotelev1">&gt; @@ -281,11 +281,11 @@
</span><br>
<span class="quotelev1">&gt;             opal_output(0, &quot;orte_plm_rsh: unable to get daemon vpid as string&quot;);
</span><br>
<span class="quotelev1">&gt;             goto cleanup;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -       [taskArguments addObject: [NSString stringWithCString: vpid_string]];
</span><br>
<span class="quotelev1">&gt; +       [taskArguments addObject: [NSString stringWithUTF8String: vpid_string]];
</span><br>
<span class="quotelev1">&gt;         free(vpid_string);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         [taskArguments addObject: @&quot;--nodename&quot;];
</span><br>
<span class="quotelev1">&gt; -       [taskArguments addObject: [NSString stringWithCString: nodes[nnode]-&gt;name]];
</span><br>
<span class="quotelev1">&gt; +       [taskArguments addObject: [NSString stringWithUTF8String: nodes[nnode]-&gt;name]];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          [task setObject: taskArguments forKey: XGJobSpecificationArgumentsKey];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -393,8 +393,8 @@
</span><br>
<span class="quotelev1">&gt;  -(void) connectionDidNotOpen:(XGConnection*) myConnection withError: (NSError*) error
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      opal_output(orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt; -               &quot;orte:plm:xgrid: Controller connection did not open: (%d) %s&quot;,
</span><br>
<span class="quotelev1">&gt; -               [error code],
</span><br>
<span class="quotelev1">&gt; +               &quot;orte:plm:xgrid: Controller connection did not open: (%ld) %s&quot;,
</span><br>
<span class="quotelev1">&gt; +               (long)[error code],
</span><br>
<span class="quotelev1">&gt;                 [[error localizedDescription] UTF8String]);
</span><br>
<span class="quotelev1">&gt;      opal_condition_broadcast(&amp;state_cond);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -411,13 +411,13 @@
</span><br>
<span class="quotelev1">&gt;         case 530:
</span><br>
<span class="quotelev1">&gt;         case 535:
</span><br>
<span class="quotelev1">&gt;             opal_output(orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt; -                       &quot;orte:plm:xgrid: Connection to XGrid controller failed due to authentication error (%d):&quot;,
</span><br>
<span class="quotelev1">&gt; -                       [[myConnection error] code]);
</span><br>
<span class="quotelev1">&gt; +                       &quot;orte:plm:xgrid: Connection to XGrid controller failed due to authentication error (%ld):&quot;,
</span><br>
<span class="quotelev1">&gt; +                       (long)[[myConnection error] code]);
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;         default:
</span><br>
<span class="quotelev1">&gt;             opal_output(orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt; -                       &quot;orte:plm:xgrid: Connection to XGrid controller unexpectedly closed: (%d) %s&quot;,
</span><br>
<span class="quotelev1">&gt; -                       [[myConnection error] code],
</span><br>
<span class="quotelev1">&gt; +                       &quot;orte:plm:xgrid: Connection to XGrid controller unexpectedly closed: (%ld) %s&quot;,
</span><br>
<span class="quotelev1">&gt; +                       (long)[[myConnection error] code],
</span><br>
<span class="quotelev1">&gt;                         [[[myConnection error] localizedDescription] UTF8String]);
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; @@ -443,7 +443,7 @@
</span><br>
<span class="quotelev1">&gt;      /* Note that capacity is a starting capacity, not max */
</span><br>
<span class="quotelev1">&gt;      NSMutableArray *ret = [NSMutableArray arrayWithCapacity: argc];
</span><br>
<span class="quotelev1">&gt;      for (i = 0 ; i &lt; argc ; ++i) {
</span><br>
<span class="quotelev1">&gt; -       [ret addObject: [NSString stringWithCString: argv[i]]];
</span><br>
<span class="quotelev1">&gt; +       [ret addObject: [NSString stringWithUTF8String: argv[i]]];
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if (NULL != argv) opal_argv_free(argv);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="7245.php">George Bosilca: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7243.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>In reply to:</strong> <a href="7236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
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
