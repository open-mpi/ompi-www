<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 18:11:53 2011" -->
<!-- isoreceived="20110913221153" -->
<!-- sent="Tue, 13 Sep 2011 16:11:45 -0600" -->
<!-- isosent="20110913221145" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE" -->
<!-- id="9CFB355A-5AB7-4430-AB0E-278E3FCA2AB4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275E48365B_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 18:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17269.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17269.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17269.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe this is one of those strange cases that can catch us. The problem is that we still try to use the qrsh launcher - we appear to ignore the --without-sge configure option (it impacts our ability to read the allocation, but not the launcher).
<br>
<p>Try setting the following:
<br>
<p>-mca plm_rsh_disable_qrsh 1
<br>
<p>on your cmd line. That should force it to avoid qrsh, and use rsh instead.
<br>
<p>I'll make a note that we should fix this - if you configure out sge, you shouldn't get the sge launcher.
<br>
<p><p>On Sep 13, 2011, at 3:54 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; This version of OpenMPI I am running was built without any guidance regarding SGE in the configure command, but it was built on a system that did not have SGE, so I would presume support is absent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My hope is that OpenMPI will not attempt to use SGE in any way. But perhaps it is trying to. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I did supply a machinefile on my own.  It is formed on the fly within the submitted script by parsing the PE_HOSTFILE, and I leave the resulting file lying around, and the result appears to be correct, i.e. it includes those nodes (and only those nodes) allocated to the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, September 13, 2011 4:27 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Problem running under SGE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 13.09.2011 um 23:18 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm able to run this command below from an interactive shell window:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;path&gt;/bin/mpirun --machinefile mpihosts.dat -np 16 -mca plm_rsh_agent /usr/bin/rsh -x MPI_ENVIRONMENT=1 ./test_setup
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but it does not work if I put it into a shell script and 'qsub' that script to SGE.  I get the message shown at the bottom of this post. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've tried everything I can think of.  I would welcome any hints on how to proceed. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For what it's worth, this OpenMPI is 1.4.3 and I built it on another system.  I am setting and exporting OPAL_PREFIX and as I said, all works fine interactively just not in batch.  It was built with -disable-shared and I don't see any shared libs under openmpi/lib, and I've done 'ldd' from within the script, on both the application executable and on the orterun command; no unresolved shared libraries.  So I don't think the error message hinting at LD_LIBRARY_PATH issues is pointing me in the right direction.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any guidance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, I missed this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; error: executing task of job 139362 failed: execution daemon on host &quot;f8312&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; did you supply a machinefile on your own? In a proper SGE integration it's running in a parallel environment. You defined and requested one? The error looks like it was started in a PE, but tried to access a node not granted for the actual job
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 2818) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
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
<li><strong>Next message:</strong> <a href="17269.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17267.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17269.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17269.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
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
