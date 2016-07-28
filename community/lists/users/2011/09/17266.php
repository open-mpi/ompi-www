<?
$subject_val = "Re: [OMPI users] Problem running under SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 17:27:13 2011" -->
<!-- isoreceived="20110913212713" -->
<!-- sent="Tue, 13 Sep 2011 23:27:03 +0200" -->
<!-- isosent="20110913212703" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running under SGE" -->
<!-- id="5B7C70C5-64DE-4A49-967F-71D9E42D0BCD_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275E483599_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem running under SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 17:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17265.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17264.php">Blosch, Edwin L: "[OMPI users] Problem running under SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17272.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 13.09.2011 um 23:18 schrieb Blosch, Edwin L:
<br>
<p><span class="quotelev1">&gt; I&#146;m able to run this command below from an interactive shell window:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;path&gt;/bin/mpirun --machinefile mpihosts.dat &#150;np 16 &#150;mca plm_rsh_agent /usr/bin/rsh &#150;x MPI_ENVIRONMENT=1 ./test_setup
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; but it does not work if I put it into a shell script and &#145;qsub&#146; that script to SGE.  I get the message shown at the bottom of this post. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;ve tried everything I can think of.  I would welcome any hints on how to proceed. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For what it&#146;s worth, this OpenMPI is 1.4.3 and I built it on another system.  I am setting and exporting OPAL_PREFIX and as I said, all works fine interactively just not in batch.  It was built with &#150;disable-shared and I don&#146;t see any shared libs under openmpi/lib, and I&#146;ve done &#145;ldd&#146; from within the script, on both the application executable and on the orterun command; no unresolved shared libraries.  So I don&#146;t think the error message hinting at LD_LIBRARY_PATH issues is pointing me in the right direction.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for any guidance,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p>Oh, I missed this:
<br>
<p><p><span class="quotelev1">&gt; error: executing task of job 139362 failed: execution daemon on host &quot;f8312&quot; didn't accept task
</span><br>
<p>did you supply a machinefile on your own? In a proper SGE integration it's running in a parallel environment. You defined and requested one? The error looks like it was started in a PE, but tried to access a node not granted for the actual job
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 2818) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
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
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17265.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17264.php">Blosch, Edwin L: "[OMPI users] Problem running under SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17272.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
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
