<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 23 11:31:52 2007" -->
<!-- isoreceived="20070523153152" -->
<!-- sent="Wed, 23 May 2007 11:31:48 -0400" -->
<!-- isosent="20070523153148" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Strange schema error" -->
<!-- id="3EFE52E1-6919-46F0-A3E4-261A36DAD977_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C279B5CF.93FC%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-23 11:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1571.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Previous message:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>In reply to:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1571.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Reply:</strong> <a href="1571.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't looked at this at all, but that line changed in r6813 which  
<br>
was Aug. 2005 so I would guess the problem is elsewhere. However with  
<br>
the recent ORTE changes maybe this is a side effect.
<br>
<p>-- Josh
<br>
<p><p>On May 23, 2007, at 11:11 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Just a quick glance (running out door) - it looks like Josh  
</span><br>
<span class="quotelev1">&gt; commented out a
</span><br>
<span class="quotelev1">&gt; critical piece of code in the rds hostfile component at line 442.  
</span><br>
<span class="quotelev1">&gt; It loads
</span><br>
<span class="quotelev1">&gt; the cell info into the name service so it can correctly respond to  
</span><br>
<span class="quotelev1">&gt; the query
</span><br>
<span class="quotelev1">&gt; you cite below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might try restoring that code - if you do, check to be sure you  
</span><br>
<span class="quotelev1">&gt; still
</span><br>
<span class="quotelev1">&gt; get a local_cellid=0 to be safe. If not, I'll have to fix it later  
</span><br>
<span class="quotelev1">&gt; today for
</span><br>
<span class="quotelev1">&gt; you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm unaware of any recent changes, though, that would have caused that
</span><br>
<span class="quotelev1">&gt; behavior to suddenly surface - unless this got changed recently?  
</span><br>
<span class="quotelev1">&gt; Certainly,
</span><br>
<span class="quotelev1">&gt; nothing I installed in the last few days would have caused it to  
</span><br>
<span class="quotelev1">&gt; appear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been running the trunk on both my Mac and odin for the last  
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev1">&gt; days without incident.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/23/07 8:41 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Starting from yesterday I'm unable to run any Open MPI application. I
</span><br>
<span class="quotelev2">&gt;&gt; get an error in the schema URM component, which complain about a
</span><br>
<span class="quotelev2">&gt;&gt; missing something ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:01083] [0,0,0] ORTE_ERROR_LOG: Not found in file ../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi-trunk/orte/mca/schema/base/schema_base_fns.c at line 163
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:01083] [0,0,0] ORTE_ERROR_LOG: Not found in file ../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi-trunk/orte/mca/rds/base/rds_base_registry_fns.c at line 81
</span><br>
<span class="quotelev2">&gt;&gt; [dancer:01083] [0,0,0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../../ompi-trunk/orte/mca/rmgr/urm/rmgr_urm.c at  
</span><br>
<span class="quotelev2">&gt;&gt; line 398
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only thing I'm doing which is not completely default is that I
</span><br>
<span class="quotelev2">&gt;&gt; specify the rds_hostfile_path in my Open MPI configuration file. I
</span><br>
<span class="quotelev2">&gt;&gt; trim down the host file as well as the config file to their bare
</span><br>
<span class="quotelev2">&gt;&gt; minimum but the errors is still popping up. I tried to reinstall
</span><br>
<span class="quotelev2">&gt;&gt; everything cleanly from the beginning but it didn't solve any issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm the only one having issues right now ? Any idea on how to  
</span><br>
<span class="quotelev2">&gt;&gt; solve it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1571.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Previous message:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>In reply to:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1571.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Reply:</strong> <a href="1571.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
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
