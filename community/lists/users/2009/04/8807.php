<?
$subject_val = "Re: [OMPI users] &quot; MPI can not open file?&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 09:03:16 2009" -->
<!-- isoreceived="20090407130316" -->
<!-- sent="Tue, 7 Apr 2009 07:03:06 -0600" -->
<!-- isosent="20090407130306" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot; MPI can not open file?&amp;quot;" -->
<!-- id="183C7A1D-F6CE-459A-ACA6-661F7FDBAA32_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DB4552.5050606_at_meduniwien.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot; MPI can not open file?&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 09:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8808.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8806.php">Bernhard Knapp: "Re: [OMPI users] &quot; MPI can not open file?&quot;"</a>
<li><strong>In reply to:</strong> <a href="8806.php">Bernhard Knapp: "Re: [OMPI users] &quot; MPI can not open file?&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI doesn't do anything wrt your file, so it can only be a question  
<br>
of (a) is your file on the remote machine, and (b) what directory it  
<br>
is in relative to where your process starts.
<br>
<p>Try just running pwd with mpirun and see what directory you are in.  
<br>
The you can ssh to that node and do an &quot;ls&quot; and see if the file is  
<br>
there.
<br>
<p><p>On Apr 7, 2009, at 6:21 AM, Bernhard Knapp wrote:
<br>
<p><span class="quotelev1">&gt; Dear Ralph and other users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried both versions with the relative path and with the -wdir  
</span><br>
<span class="quotelev1">&gt; option but in both cases the error is still the same. Additionally I  
</span><br>
<span class="quotelev1">&gt; tried to simply start the job in my home directory but it does not  
</span><br>
<span class="quotelev1">&gt; help either ... any other ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thx
</span><br>
<span class="quotelev1">&gt; Bernhard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bknapp_at_quoVadis04 testSet]$ mpirun -np 8 -machinefile /home/bknapp/ 
</span><br>
<span class="quotelev1">&gt; scripts/machinefile.txt mdrun -np 8 -nice 0 -s gromacsRuns/testSet/ 
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr -o gromacsRuns/testSet/ 
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.trr -c gromacsRuns/testSet/ 
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.pdb -g gromacsRuns/testSet/ 
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.log -e gromacsRuns/testSet/ 
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.edr -v
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bknapp_at_quoVadis04 testSet]$ mpirun -np 8 -machinefile /home/bknapp/ 
</span><br>
<span class="quotelev1">&gt; scripts/machinefile.txt mdrun -np 8 -nice 0 -s  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr -o  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.trr -c  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.pdb -g  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.log -e  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.edr -v -wdir /home/bknapp/ 
</span><br>
<span class="quotelev1">&gt; gromacsRuns/testSet/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back Off! I just backed up  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.log to ./ 
</span><br>
<span class="quotelev1">&gt; #1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.log.15#
</span><br>
<span class="quotelev1">&gt; Getting Loaded...
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Program mdrun, VERSION 4.0.3
</span><br>
<span class="quotelev1">&gt; Source code file: gmxfio.c, line: 736
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can not open file:
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;My Brothers are Protons (Protons!), My Sisters are Neurons  
</span><br>
<span class="quotelev1">&gt; (Neurons)&quot; (Gogol Bordello)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error on node 0, will try to stop all the nodes
</span><br>
<span class="quotelev1">&gt; Halting parallel program mdrun on CPU 0 out of 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcq#318: &quot;My Brothers are Protons (Protons!), My Sisters are Neurons  
</span><br>
<span class="quotelev1">&gt; (Neurons)&quot; (Gogol Bordello)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 4313 on
</span><br>
<span class="quotelev1">&gt; node 192.168.0.103 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume you are running in a non-managed environment and so are using
</span><br>
<span class="quotelev1">&gt; ssh for your launcher? Could you tell us what version of OMPI you are
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that ssh drops you in your home directory, not your
</span><br>
<span class="quotelev1">&gt; current working directory. Thus, the path to any file you specify must
</span><br>
<span class="quotelev1">&gt; be relative to your home directory. Alternatively, you can specify the
</span><br>
<span class="quotelev1">&gt; desired current working directory on the mpirun cmd line. Do a &quot;man
</span><br>
<span class="quotelev1">&gt; mpirun&quot; to find the specific option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd have to check, but we may have corrected this in recent versions
</span><br>
<span class="quotelev1">&gt; (or a soon-to-be-released one) so that we automatically move you to
</span><br>
<span class="quotelev1">&gt; the cwd after the daemon is started. However, I know that we didn't do
</span><br>
<span class="quotelev1">&gt; that in some earlier versions - perhaps in the 1.2.x series as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2009, at 5:05 AM, Bernhard Knapp wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to get a parallel job of the gromacs software started.
</span><br>
<span class="quotelev2">&gt;&gt; MPI seems to boot fine but unfortunately it seems not to be able to
</span><br>
<span class="quotelev2">&gt;&gt; open a specified file although it is definitly in the directory
</span><br>
<span class="quotelev2">&gt;&gt; where the job is started. I also changed the file permissions to 777
</span><br>
<span class="quotelev2">&gt;&gt; but it does not affect the result. Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers
</span><br>
<span class="quotelev2">&gt;&gt; Bernhard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bknapp_at_quoVadis04 testSet]$ mpirun -np 8 -machinefile /home/ 
</span><br>
<span class="quotelev2">&gt;&gt; bknapp/
</span><br>
<span class="quotelev2">&gt;&gt; scripts/machinefile.txt mdrun -np 8 -nice 0 -s
</span><br>
<span class="quotelev2">&gt;&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr -o
</span><br>
<span class="quotelev2">&gt;&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.trr -c
</span><br>
<span class="quotelev2">&gt;&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.pdb -g
</span><br>
<span class="quotelev2">&gt;&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.log -e
</span><br>
<span class="quotelev2">&gt;&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.edr -v
</span><br>
<span class="quotelev2">&gt;&gt; bknapp_at_192.168.0.103's password:
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=8, MYRANK=1, HOSTNAME=quoVadis04
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=8, MYRANK=3, HOSTNAME=quoVadis04
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=8, MYRANK=7, HOSTNAME=quoVadis04
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=8, MYRANK=0, HOSTNAME=quoVadis03
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=8, MYRANK=4, HOSTNAME=quoVadis03
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=8, MYRANK=6, HOSTNAME=quoVadis03
</span><br>
<span class="quotelev2">&gt;&gt; NODEID=4 argc=16
</span><br>
<span class="quotelev2">&gt;&gt; NNODES=8, MYRANK=2, HOSTNAME=quoVadis03
</span><br>
<span class="quotelev2">&gt;&gt; NODEID=1 argc=16
</span><br>
<span class="quotelev2">&gt;&gt; NODEID=3 argc=16
</span><br>
<span class="quotelev2">&gt;&gt; NODEID=7 argc=16
</span><br>
<span class="quotelev2">&gt;&gt; NODEID=2 argc=16
</span><br>
<span class="quotelev2">&gt;&gt; NODEID=6 argc=16
</span><br>
<span class="quotelev2">&gt;&gt; NODEID=0 argc=16
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; with errorcode -1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Program mdrun, VERSION 4.0.3
</span><br>
<span class="quotelev2">&gt;&gt; Source code file: gmxfio.c, line: 736
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can not open file:
</span><br>
<span class="quotelev2">&gt;&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;I Need a Little Poison&quot; (Throwing Muses)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error on node 0, will try to stop all the nodes
</span><br>
<span class="quotelev2">&gt;&gt; Halting parallel program mdrun on CPU 0 out of 8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcq#108: &quot;I Need a Little Poison&quot; (Throwing Muses)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 3777 on
</span><br>
<span class="quotelev2">&gt;&gt; node 192.168.0.103 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bknapp_at_quoVadis04 testSet]$ ll
</span><br>
<span class="quotelev2">&gt;&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
</span><br>
<span class="quotelev2">&gt;&gt; -rwxrwxrwx 1 bknapp bknapp 6118424 2009-03-13 09:44
</span><br>
<span class="quotelev2">&gt;&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
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
<li><strong>Next message:</strong> <a href="8808.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8806.php">Bernhard Knapp: "Re: [OMPI users] &quot; MPI can not open file?&quot;"</a>
<li><strong>In reply to:</strong> <a href="8806.php">Bernhard Knapp: "Re: [OMPI users] &quot; MPI can not open file?&quot;"</a>
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
