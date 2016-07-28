<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 23 11:11:48 2007" -->
<!-- isoreceived="20070523151148" -->
<!-- sent="Wed, 23 May 2007 09:11:43 -0600" -->
<!-- isosent="20070523151143" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Strange schema error" -->
<!-- id="C279B5CF.93FC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CE141A2A-3916-465F-A43A-ABBA0E523D9C_at_cs.utk.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-23 11:11:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1570.php">Josh Hursey: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Previous message:</strong> <a href="1568.php">George Bosilca: "[OMPI devel] Strange schema error"</a>
<li><strong>In reply to:</strong> <a href="1568.php">George Bosilca: "[OMPI devel] Strange schema error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1570.php">Josh Hursey: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Reply:</strong> <a href="1570.php">Josh Hursey: "Re: [OMPI devel] Strange schema error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just a quick glance (running out door) - it looks like Josh commented out a
<br>
critical piece of code in the rds hostfile component at line 442. It loads
<br>
the cell info into the name service so it can correctly respond to the query
<br>
you cite below.
<br>
<p>You might try restoring that code - if you do, check to be sure you still
<br>
get a local_cellid=0 to be safe. If not, I'll have to fix it later today for
<br>
you.
<br>
<p>I'm unaware of any recent changes, though, that would have caused that
<br>
behavior to suddenly surface - unless this got changed recently? Certainly,
<br>
nothing I installed in the last few days would have caused it to appear.
<br>
<p>I've been running the trunk on both my Mac and odin for the last several
<br>
days without incident.
<br>
<p>Ralph
<br>
<p><p>On 5/23/07 8:41 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Starting from yesterday I'm unable to run any Open MPI application. I
</span><br>
<span class="quotelev1">&gt; get an error in the schema URM component, which complain about a
</span><br>
<span class="quotelev1">&gt; missing something ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dancer:01083] [0,0,0] ORTE_ERROR_LOG: Not found in file ../../../../
</span><br>
<span class="quotelev1">&gt; ompi-trunk/orte/mca/schema/base/schema_base_fns.c at line 163
</span><br>
<span class="quotelev1">&gt; [dancer:01083] [0,0,0] ORTE_ERROR_LOG: Not found in file ../../../../
</span><br>
<span class="quotelev1">&gt; ompi-trunk/orte/mca/rds/base/rds_base_registry_fns.c at line 81
</span><br>
<span class="quotelev1">&gt; [dancer:01083] [0,0,0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file ../../../../../ompi-trunk/orte/mca/rmgr/urm/rmgr_urm.c at line 398
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only thing I'm doing which is not completely default is that I
</span><br>
<span class="quotelev1">&gt; specify the rds_hostfile_path in my Open MPI configuration file. I
</span><br>
<span class="quotelev1">&gt; trim down the host file as well as the config file to their bare
</span><br>
<span class="quotelev1">&gt; minimum but the errors is still popping up. I tried to reinstall
</span><br>
<span class="quotelev1">&gt; everything cleanly from the beginning but it didn't solve any issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm the only one having issues right now ? Any idea on how to solve it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
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
<li><strong>Next message:</strong> <a href="1570.php">Josh Hursey: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Previous message:</strong> <a href="1568.php">George Bosilca: "[OMPI devel] Strange schema error"</a>
<li><strong>In reply to:</strong> <a href="1568.php">George Bosilca: "[OMPI devel] Strange schema error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1570.php">Josh Hursey: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Reply:</strong> <a href="1570.php">Josh Hursey: "Re: [OMPI devel] Strange schema error"</a>
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
