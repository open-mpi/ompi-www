<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 22:53:22 2009" -->
<!-- isoreceived="20090811025322" -->
<!-- sent="Mon, 10 Aug 2009 19:53:08 -0700" -->
<!-- isosent="20090811025308" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="6DAE4963-03B7-4F1B-BD4C-D03E84DEFFA7_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="221DEB83-82FA-445A-8D47-CFAF26DA13E5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 22:53:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10-Aug-09, at 6:44 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Check your LD_LIBRARY_PATH - there is an earlier version of OMPI in  
</span><br>
<span class="quotelev1">&gt; your path that is interfering with operation (i.e., it comes before  
</span><br>
<span class="quotelev1">&gt; your 1.3.3 installation).
</span><br>
<p>Hmmmm, The OS X faq says not to do this:
<br>
<p>&quot;Note that there is no need to add Open MPI's libdir to  
<br>
LD_LIBRARY_PATH; Open MPI's shared library build process automatically  
<br>
uses the &quot;rpath&quot; mechanism to automatically find the correct shared  
<br>
libraries (i.e., the ones associated with this build, vs., for  
<br>
example, the OS X-shipped OMPI shared libraries). Also note that we  
<br>
specifically do not recommend adding Open MPI's libdir to  
<br>
DYLD_LIBRARY_PATH.&quot;
<br>
<p><a href="http://www.open-mpi.org/faq/?category=osx">http://www.open-mpi.org/faq/?category=osx</a>
<br>
<p>Regardless, if I set either, and run ompi_info I still get:
<br>
<p>[saturna.cluster:94981] mca: base: component_find: iof &quot;mca_iof_proxy&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:94981] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
<p>echo $DYLD_LIBRARY_PATH $LD_LIBRARY_PATH
<br>
/usr/local/openmpi/lib: /usr/local/openmpi/lib:
<br>
<p>So I'm afraid I'm stumped again.  I suppose I could go clean out all  
<br>
the libraries in /usr/lib/...
<br>
<p>Thanks again, sorry to be a pain...
<br>
<p>Cheers,  Jody
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2009, at 7:38 PM, Klymak Jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --display-allocation -pernode --display-map hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gives me the output below.  Simple jobs seem to run, but the MITgcm  
</span><br>
<span class="quotelev2">&gt;&gt; does not, either under ssh or torque.  It hangs at some early point  
</span><br>
<span class="quotelev2">&gt;&gt; in execution before anything is written, so its hard for me to tell  
</span><br>
<span class="quotelev2">&gt;&gt; what the error is.  Could these MCA warnings have anything to do  
</span><br>
<span class="quotelev2">&gt;&gt; with it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've recompiled the gcm with -L /usr/local/openmpi/lib, so  
</span><br>
<span class="quotelev2">&gt;&gt; hopefully that catches the right library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_ras_dash_host&quot; uses an MCA interface that is not recogniz
</span><br>
<span class="quotelev2">&gt;&gt; ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_ras_hostfile&quot; uses an MCA interface that is not recognize
</span><br>
<span class="quotelev2">&gt;&gt; d (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_ras_localhost&quot; uses an MCA interface that is not recogniz
</span><br>
<span class="quotelev2">&gt;&gt; ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_ras_xgrid&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev2">&gt;&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt; [xserve02.local:38126] mca: base: component_find: iof  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev2">&gt;&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt; [xserve02.local:38126] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; uses an MCA interface that is not recognized (co
</span><br>
<span class="quotelev2">&gt;&gt; mponent MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: xserve02.local    Num slots: 8    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: xserve01.local    Num slots: 8    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: xserve02.local    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Process OMPI jobid: [20967,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: xserve01.local    Num procs: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Process OMPI jobid: [20967,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =============================================================
</span><br>
<span class="quotelev2">&gt;&gt; [xserve01.cluster:38518] mca: base: component_find: iof  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized
</span><br>
<span class="quotelev2">&gt;&gt; (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt; [xserve01.cluster:38518] mca: base: component_find: iof  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_iof_svc&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev2">&gt;&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt; xserve02.local
</span><br>
<span class="quotelev2">&gt;&gt; xserve01.cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10283/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10282.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
