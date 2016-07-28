<?
$subject_val = "Re: [OMPI users] OpenMPI and Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 12:25:35 2011" -->
<!-- isoreceived="20110321162535" -->
<!-- sent="Mon, 21 Mar 2011 10:22:49 -0600" -->
<!-- isosent="20110321162249" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Torque" -->
<!-- id="C459A414-B324-4AE8-89F5-57228AACAA7E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikiO9YxHZ=g-RfAWEUpnxBuEGFLXbwoouspiKOv_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and Torque<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 12:22:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15932.php">David Turner: "[OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Previous message:</strong> <a href="15930.php">Ralph Castain: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15920.php">Randall Svancara: "[OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15936.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15936.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you run anything under TM? Try running &quot;hostname&quot; directly from Torque to see if anything works at all.
<br>
<p>The error message is telling you that the Torque daemon on the remote node reported a failure when trying to launch the OMPI daemon. Could be that Torque isn't setup to forward environments so the OMPI daemon isn't finding required libs. You could directly run &quot;printenv&quot; to see how your remote environ is being setup.
<br>
<p>Could be that the tmp dir lacks correct permissions for a user to create the required directories. The OMPI daemon tries to create a session directory in the tmp dir, so failure to do so would indeed cause the launch to fail. You can specify the tmp dir with a cmd line option to mpirun. See &quot;mpirun -h&quot; for info.
<br>
<p><p>On Mar 21, 2011, at 12:21 AM, Randall Svancara wrote:
<br>
<p><span class="quotelev1">&gt; I have a question about using OpenMPI and Torque on stateless nodes.
</span><br>
<span class="quotelev1">&gt; I have compiled openmpi 1.4.3 with --with-tm=/usr/local
</span><br>
<span class="quotelev1">&gt; --without-slurm using intel compiler version 11.1.075.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run a simple &quot;hello world&quot; mpi program, I am receiving the
</span><br>
<span class="quotelev1">&gt; following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node164:11193] plm:tm: failed to poll for a spawned daemon, return
</span><br>
<span class="quotelev1">&gt; status = 17002
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         node163 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node159 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node158 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node157 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node156 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node155 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node154 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node152 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node151 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node150 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;         node149 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if I include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca plm rsh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The job runs just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure what the problem is with torque or openmpi that prevents
</span><br>
<span class="quotelev1">&gt; the process from launching on remote nodes.  I have posted to the
</span><br>
<span class="quotelev1">&gt; torque list and someone suggested that it may be temporary directory
</span><br>
<span class="quotelev1">&gt; space that can be causing issues.  I have 100MB allocated to /tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas as to why I am having this problem would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Randall Svancara
</span><br>
<span class="quotelev1">&gt; <a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15932.php">David Turner: "[OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Previous message:</strong> <a href="15930.php">Ralph Castain: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15920.php">Randall Svancara: "[OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15936.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15936.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
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
