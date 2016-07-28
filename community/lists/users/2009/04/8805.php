<?
$subject_val = "Re: [OMPI users] MPI can not open file?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 07:52:05 2009" -->
<!-- isoreceived="20090407115205" -->
<!-- sent="Tue, 7 Apr 2009 05:51:54 -0600" -->
<!-- isosent="20090407115154" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI can not open file?" -->
<!-- id="8B3955AD-63E9-436A-861D-3E808A4E2E39_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DB3360.8070107_at_meduniwien.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI can not open file?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 07:51:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8806.php">Bernhard Knapp: "Re: [OMPI users] &quot; MPI can not open file?&quot;"</a>
<li><strong>Previous message:</strong> <a href="8804.php">Bernhard Knapp: "[OMPI users] MPI can not open file?"</a>
<li><strong>In reply to:</strong> <a href="8804.php">Bernhard Knapp: "[OMPI users] MPI can not open file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8814.php">Peter Kjellstrom: "Re: [OMPI users] MPI can not open file?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume you are running in a non-managed environment and so are using  
<br>
ssh for your launcher? Could you tell us what version of OMPI you are  
<br>
using?
<br>
<p>The problem is that ssh drops you in your home directory, not your  
<br>
current working directory. Thus, the path to any file you specify must  
<br>
be relative to your home directory. Alternatively, you can specify the  
<br>
desired current working directory on the mpirun cmd line. Do a &quot;man  
<br>
mpirun&quot; to find the specific option.
<br>
<p>I'd have to check, but we may have corrected this in recent versions  
<br>
(or a soon-to-be-released one) so that we automatically move you to  
<br>
the cwd after the daemon is started. However, I know that we didn't do  
<br>
that in some earlier versions - perhaps in the 1.2.x series as well.
<br>
<p>Ralph
<br>
<p><p>On Apr 7, 2009, at 5:05 AM, Bernhard Knapp wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to get a parallel job of the gromacs software started.  
</span><br>
<span class="quotelev1">&gt; MPI seems to boot fine but unfortunately it seems not to be able to  
</span><br>
<span class="quotelev1">&gt; open a specified file although it is definitly in the directory  
</span><br>
<span class="quotelev1">&gt; where the job is started. I also changed the file permissions to 777  
</span><br>
<span class="quotelev1">&gt; but it does not affect the result. Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; Bernhard
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.edr -v
</span><br>
<span class="quotelev1">&gt; bknapp_at_192.168.0.103's password:
</span><br>
<span class="quotelev1">&gt; NNODES=8, MYRANK=1, HOSTNAME=quoVadis04
</span><br>
<span class="quotelev1">&gt; NNODES=8, MYRANK=3, HOSTNAME=quoVadis04
</span><br>
<span class="quotelev1">&gt; NNODES=8, MYRANK=7, HOSTNAME=quoVadis04
</span><br>
<span class="quotelev1">&gt; NNODES=8, MYRANK=0, HOSTNAME=quoVadis03
</span><br>
<span class="quotelev1">&gt; NNODES=8, MYRANK=4, HOSTNAME=quoVadis03
</span><br>
<span class="quotelev1">&gt; NNODES=8, MYRANK=6, HOSTNAME=quoVadis03
</span><br>
<span class="quotelev1">&gt; NODEID=4 argc=16
</span><br>
<span class="quotelev1">&gt; NNODES=8, MYRANK=2, HOSTNAME=quoVadis03
</span><br>
<span class="quotelev1">&gt; NODEID=1 argc=16
</span><br>
<span class="quotelev1">&gt; NODEID=3 argc=16
</span><br>
<span class="quotelev1">&gt; NODEID=7 argc=16
</span><br>
<span class="quotelev1">&gt; NODEID=2 argc=16
</span><br>
<span class="quotelev1">&gt; NODEID=6 argc=16
</span><br>
<span class="quotelev1">&gt; NODEID=0 argc=16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; &quot;I Need a Little Poison&quot; (Throwing Muses)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error on node 0, will try to stop all the nodes
</span><br>
<span class="quotelev1">&gt; Halting parallel program mdrun on CPU 0 out of 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcq#108: &quot;I Need a Little Poison&quot; (Throwing Muses)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 3777 on
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
<span class="quotelev1">&gt; [bknapp_at_quoVadis04 testSet]$ ll  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
</span><br>
<span class="quotelev1">&gt; -rwxrwxrwx 1 bknapp bknapp 6118424 2009-03-13 09:44  
</span><br>
<span class="quotelev1">&gt; 1fyt_PKYVKQNTLELAT_bindingRegionsOnly.md.tpr
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8805/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8806.php">Bernhard Knapp: "Re: [OMPI users] &quot; MPI can not open file?&quot;"</a>
<li><strong>Previous message:</strong> <a href="8804.php">Bernhard Knapp: "[OMPI users] MPI can not open file?"</a>
<li><strong>In reply to:</strong> <a href="8804.php">Bernhard Knapp: "[OMPI users] MPI can not open file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8814.php">Peter Kjellstrom: "Re: [OMPI users] MPI can not open file?"</a>
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
