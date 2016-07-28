<?
$subject_val = "Re: [OMPI users] Openmpi with SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  1 16:22:00 2008" -->
<!-- isoreceived="20080301212200" -->
<!-- sent="Sat, 1 Mar 2008 22:20:18 +0100" -->
<!-- isosent="20080301212018" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi with SGE" -->
<!-- id="E4BF7277-425E-4B55-B3E3-FF4D08166D57_at_staff.uni-marburg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080219114917.9712.qmail_at_webmail29.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi with SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-01 16:20:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5118.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>Previous message:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI users] Loopback Communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5047.php">Neeraj Chourasia: "[OMPI users] Openmpi with SGE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 19.02.2008 um 12:49 schrieb Neeraj Chourasia:
<br>
<p><span class="quotelev1">&gt;     I am facing problem while calling mpirun in a loop when using  
</span><br>
<span class="quotelev1">&gt; with SGE. My sge version is SGE6.1AR_snapshot3. The script i am  
</span><br>
<span class="quotelev1">&gt; submitting via sge is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt; let i=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while [ $i -lt 100 ]
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;         echo  
</span><br>
<span class="quotelev1">&gt; &quot;##################################################################### 
</span><br>
<span class="quotelev1">&gt; #######################&quot;
</span><br>
<span class="quotelev1">&gt;         echo &quot;Iteration :$i&quot;
</span><br>
<span class="quotelev1">&gt;         /usr/local/openmpi-1.2.4/bin/mpirun -np $NP -hostfile $TMP/ 
</span><br>
<span class="quotelev1">&gt; machines send
</span><br>
<span class="quotelev1">&gt;         let &quot;i+=1&quot;
</span><br>
<span class="quotelev1">&gt;         echo  
</span><br>
<span class="quotelev1">&gt; &quot;##################################################################### 
</span><br>
<span class="quotelev1">&gt; #######################&quot;
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now above script runs well for 15-20 iteration and then fails with  
</span><br>
<span class="quotelev1">&gt; following message
</span><br>
<p>in a Tight Integration in SGE the qrsh on the slave node has to  
<br>
perfom some housekeeping, e.g. removing the $TMPDIR (would be an RFE  
<br>
to do this only once atv the end of the job. a) saves time, b) some  
<br>
parallel jobs need persistent $TMPDIR on the slave nodes which must  
<br>
for now be implemented by hand).
<br>
<p>Could you put a wait of some seconds after the mpirun before the next  
<br>
iteration? Maybe it will help.
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; -------------------------Error  
</span><br>
<span class="quotelev1">&gt; Message--------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; error: executing task of job 3869 failed: execution daemon on host  
</span><br>
<span class="quotelev1">&gt; &quot;n101&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt; [n199:11989] ERROR: A daemon on node n101 failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [n199:11989] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [n199:11989] ERROR: the 'qstat -t' command on the Grid Engine tasks.
</span><br>
<span class="quotelev1">&gt; [n199:11989] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt; [n199:11989] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [n199:11989] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When i do ssh to n101, there is no orted and qrsh_starter running.  
</span><br>
<span class="quotelev1">&gt; While checking its spool file, i came across following message
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------Execd spool Error  
</span><br>
<span class="quotelev1">&gt; Message---------------------------------
</span><br>
<span class="quotelev1">&gt; |execd|n101|E|no free queue for job 3869 of user neeraj_at_n199  
</span><br>
<span class="quotelev1">&gt; (localhost = n101)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be the reason for it.
</span><br>
<span class="quotelev1">&gt; While checking the mailing list, i come across following link
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2007/03/2771.php">http://www.open-mpi.org/community/lists/users/2007/03/2771.php</a>
</span><br>
<span class="quotelev1">&gt; but, i dont think its the same problem. Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Neeraj
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5118.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>Previous message:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI users] Loopback Communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5047.php">Neeraj Chourasia: "[OMPI users] Openmpi with SGE"</a>
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
