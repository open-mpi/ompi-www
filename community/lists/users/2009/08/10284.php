<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 23:03:43 2009" -->
<!-- isoreceived="20090811030343" -->
<!-- sent="Mon, 10 Aug 2009 21:03:27 -0600" -->
<!-- isosent="20090811030327" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="E029B10C-ECF3-4D3E-BE0C-538C3887AAD2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6DAE4963-03B7-4F1B-BD4C-D03E84DEFFA7_at_uvic.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 23:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10285.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10285.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10285.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10292.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting! Well, I always make sure I have my personal OMPI build  
<br>
before any system stuff, and I work exclusively on Mac OS-X:
<br>
<p>rhc$ echo $PATH
<br>
/Library/Frameworks/Python.framework/Versions/Current/bin:/Users/rhc/ 
<br>
openmpi/bin:/Users/rhc/bin:/opt/local/bin:/usr/X11R6/bin:/usr/local/ 
<br>
bin:/opt/local/bin:/opt/local/sbin:/bin:/sbin:/usr/bin:/usr/sbin:/usr/ 
<br>
local/bin:/usr/texbin
<br>
<p>rhc$ echo $LD_LIBRARY_PATH
<br>
/Users/rhc/openmpi/lib:/Users/rhc/lib:/opt/local/lib:/usr/X11R6/lib:/ 
<br>
usr/local/lib:
<br>
<p>Note that I always configure with --prefix=somewhere-in-my-own-dir,  
<br>
never to a system directory. Avoids this kind of confusion.
<br>
<p>What the errors are saying is that we are picking up components from a  
<br>
very old version of OMPI that is distributed by Apple. It may or may  
<br>
not be causing confusion for the system - hard to tell. However, the  
<br>
fact that it is the IO forwarding subsystem that is picking them up,  
<br>
and the fact that you aren't seeing any output from your job, makes me  
<br>
a tad suspicious.
<br>
<p>Can you run other jobs? In other words, do you get stdout/stderr from  
<br>
other programs you run, or does every MPI program hang (even simple  
<br>
ones)? If it is just your program, then it could just be that your  
<br>
application is hanging before any output is generated. Can you have it  
<br>
print something to stderr right when it starts?
<br>
<p><p>On Aug 10, 2009, at 8:53 PM, Klymak Jody wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10-Aug-09, at 6:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check your LD_LIBRARY_PATH - there is an earlier version of OMPI in  
</span><br>
<span class="quotelev2">&gt;&gt; your path that is interfering with operation (i.e., it comes before  
</span><br>
<span class="quotelev2">&gt;&gt; your 1.3.3 installation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmmm, The OS X faq says not to do this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Note that there is no need to add Open MPI's libdir to  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH; Open MPI's shared library build process  
</span><br>
<span class="quotelev1">&gt; automatically uses the &quot;rpath&quot; mechanism to automatically find the  
</span><br>
<span class="quotelev1">&gt; correct shared libraries (i.e., the ones associated with this build,  
</span><br>
<span class="quotelev1">&gt; vs., for example, the OS X-shipped OMPI shared libraries). Also note  
</span><br>
<span class="quotelev1">&gt; that we specifically do not recommend adding Open MPI's libdir to  
</span><br>
<span class="quotelev1">&gt; DYLD_LIBRARY_PATH.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=osx">http://www.open-mpi.org/faq/?category=osx</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, if I set either, and run ompi_info I still get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:94981] mca: base: component_find: iof  
</span><br>
<span class="quotelev1">&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized  
</span><br>
<span class="quotelev1">&gt; (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:94981] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
</span><br>
<span class="quotelev1">&gt; uses an MCA interface that is not recognized (component MCA v1.0.0 ! 
</span><br>
<span class="quotelev1">&gt; = supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo $DYLD_LIBRARY_PATH $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/lib: /usr/local/openmpi/lib:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'm afraid I'm stumped again.  I suppose I could go clean out all  
</span><br>
<span class="quotelev1">&gt; the libraries in /usr/lib/...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again, sorry to be a pain...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 10, 2009, at 7:38 PM, Klymak Jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --display-allocation -pernode --display-map hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gives me the output below.  Simple jobs seem to run, but the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MITgcm does not, either under ssh or torque.  It hangs at some  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; early point in execution before anything is written, so its hard  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for me to tell what the error is.  Could these MCA warnings have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything to do with it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've recompiled the gcm with -L /usr/local/openmpi/lib, so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hopefully that catches the right library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_ras_dash_host&quot; uses an MCA interface that is not recogniz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_ras_hostfile&quot; uses an MCA interface that is not recognize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; d (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_ras_localhost&quot; uses an MCA interface that is not recogniz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_ras_xgrid&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: iof  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: iof  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_iof_svc&quot; uses an MCA interface that is not recognized (co
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mponent MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: xserve02.local    Num slots: 8    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: xserve01.local    Num slots: 8    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: xserve02.local    Num procs: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Process OMPI jobid: [20967,1] Process rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: xserve01.local    Num procs: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Process OMPI jobid: [20967,1] Process rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xserve01.cluster:38518] mca: base: component_find: iof  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xserve01.cluster:38518] mca: base: component_find: iof  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_iof_svc&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve02.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve01.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10285.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10283.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10285.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10285.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10292.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
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
