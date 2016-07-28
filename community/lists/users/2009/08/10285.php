<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 23:49:02 2009" -->
<!-- isoreceived="20090811034902" -->
<!-- sent="Mon, 10 Aug 2009 20:48:56 -0700" -->
<!-- isosent="20090811034856" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="83DADF9D-C8DF-409F-A77B-50EC5723B991_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E029B10C-ECF3-4D3E-BE0C-538C3887AAD2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-08-10 23:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10286.php">Craig Plaisance: "[OMPI users] problem configuring with torque"</a>
<li><strong>Previous message:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10-Aug-09, at 8:03 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Interesting! Well, I always make sure I have my personal OMPI build  
</span><br>
<span class="quotelev1">&gt; before any system stuff, and I work exclusively on Mac OS-X:
</span><br>
<p><span class="quotelev1">&gt; Note that I always configure with --prefix=somewhere-in-my-own-dir,  
</span><br>
<span class="quotelev1">&gt; never to a system directory. Avoids this kind of confusion.
</span><br>
<p>Yeah, I did configure --prefix=/usr/local/openmpi
<br>
<p><span class="quotelev1">&gt; What the errors are saying is that we are picking up components from  
</span><br>
<span class="quotelev1">&gt; a very old version of OMPI that is distributed by Apple. It may or  
</span><br>
<span class="quotelev1">&gt; may not be causing confusion for the system - hard to tell. However,  
</span><br>
<span class="quotelev1">&gt; the fact that it is the IO forwarding subsystem that is picking them  
</span><br>
<span class="quotelev1">&gt; up, and the fact that you aren't seeing any output from your job,  
</span><br>
<span class="quotelev1">&gt; makes me a tad suspicious.
</span><br>
<p>Me too!
<br>
<p><span class="quotelev1">&gt; Can you run other jobs? In other words, do you get stdout/stderr  
</span><br>
<span class="quotelev1">&gt; from other programs you run, or does every MPI program hang (even  
</span><br>
<span class="quotelev1">&gt; simple ones)? If it is just your program, then it could just be that  
</span><br>
<span class="quotelev1">&gt; your application is hanging before any output is generated. Can you  
</span><br>
<span class="quotelev1">&gt; have it print something to stderr right when it starts?
</span><br>
<p>No simple ones, like the examples I gave before, run fine, just with  
<br>
the suspicious warnings.
<br>
<p>I'm running a big general circulation model (MITgcm).  Under normal  
<br>
conditions it spits something out almost right away, and that is not  
<br>
being done here.  STDOUT.0001 etc are all opened, but nothing is put  
<br>
into them.
<br>
<p>I'm pretty sure I'm compliling the gcm properly:
<br>
<p>otool -L mitgcmuv
<br>
mitgcmuv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi/lib/libmpi_f77.0.dylib (compatibility version  
<br>
1.0.0, current version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi/lib/libmpi.0.dylib (compatibility version 1.0.0,  
<br>
current version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi/lib/libopen-rte.0.dylib (compatibility version  
<br>
1.0.0, current version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi/lib/libopen-pal.0.dylib (compatibility version  
<br>
1.0.0, current version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libutil.dylib (compatibility version 1.0.0, current version  
<br>
1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/lib/libgfortran.3.dylib (compatibility version 4.0.0,  
<br>
current version 4.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/lib/libgcc_s.1.dylib (compatibility version 1.0.0, current  
<br>
version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current  
<br>
version 111.1.3)
<br>
<p>Thanks,  Jody
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2009, at 8:53 PM, Klymak Jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10-Aug-09, at 6:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check your LD_LIBRARY_PATH - there is an earlier version of OMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in your path that is interfering with operation (i.e., it comes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before your 1.3.3 installation).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmmm, The OS X faq says not to do this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Note that there is no need to add Open MPI's libdir to  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH; Open MPI's shared library build process  
</span><br>
<span class="quotelev2">&gt;&gt; automatically uses the &quot;rpath&quot; mechanism to automatically find the  
</span><br>
<span class="quotelev2">&gt;&gt; correct shared libraries (i.e., the ones associated with this  
</span><br>
<span class="quotelev2">&gt;&gt; build, vs., for example, the OS X-shipped OMPI shared libraries).  
</span><br>
<span class="quotelev2">&gt;&gt; Also note that we specifically do not recommend adding Open MPI's  
</span><br>
<span class="quotelev2">&gt;&gt; libdir to DYLD_LIBRARY_PATH.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=osx">http://www.open-mpi.org/faq/?category=osx</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regardless, if I set either, and run ompi_info I still get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [saturna.cluster:94981] mca: base: component_find: iof  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized  
</span><br>
<span class="quotelev2">&gt;&gt; (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt; [saturna.cluster:94981] mca: base: component_find: iof  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_iof_svc&quot; uses an MCA interface that is not recognized  
</span><br>
<span class="quotelev2">&gt;&gt; (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo $DYLD_LIBRARY_PATH $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/lib: /usr/local/openmpi/lib:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I'm afraid I'm stumped again.  I suppose I could go clean out  
</span><br>
<span class="quotelev2">&gt;&gt; all the libraries in /usr/lib/...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again, sorry to be a pain...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,  Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 10, 2009, at 7:38 PM, Klymak Jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --display-allocation -pernode --display-map hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gives me the output below.  Simple jobs seem to run, but the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MITgcm does not, either under ssh or torque.  It hangs at some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; early point in execution before anything is written, so its hard  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for me to tell what the error is.  Could these MCA warnings have  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anything to do with it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've recompiled the gcm with -L /usr/local/openmpi/lib, so  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hopefully that catches the right library.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mca_ras_dash_host&quot; uses an MCA interface that is not recogniz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mca_ras_hostfile&quot; uses an MCA interface that is not recognize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; d (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mca_ras_localhost&quot; uses an MCA interface that is not recogniz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ed (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: ras  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mca_ras_xgrid&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: iof  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [xserve02.local:38126] mca: base: component_find: iof  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mca_iof_svc&quot; uses an MCA interface that is not recognized (co
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mponent MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: xserve02.local    Num slots: 8    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: xserve01.local    Num slots: 8    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: xserve02.local    Num procs: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Process OMPI jobid: [20967,1] Process rank: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: xserve01.local    Num procs: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Process OMPI jobid: [20967,1] Process rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [xserve01.cluster:38518] mca: base: component_find: iof  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mca_iof_proxy&quot; uses an MCA interface that is not recognized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [xserve01.cluster:38518] mca: base: component_find: iof  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mca_iof_svc&quot; uses an MCA interface that is not recognized (
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xserve02.local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xserve01.cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10285/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10286.php">Craig Plaisance: "[OMPI users] problem configuring with torque"</a>
<li><strong>Previous message:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
