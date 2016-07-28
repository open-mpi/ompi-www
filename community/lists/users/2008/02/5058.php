<?
$subject_val = "Re: [OMPI users] Openmpi with SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 11:49:01 2008" -->
<!-- isoreceived="20080221164901" -->
<!-- sent="Thu, 21 Feb 2008 11:48:49 -0500" -->
<!-- isosent="20080221164849" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi with SGE" -->
<!-- id="47BDAB71.3060208_at_Sun.COM" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 11:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5059.php">R.C.Pasianot: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>Previous message:</strong> <a href="5057.php">Kevin Durda: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>In reply to:</strong> <a href="5047.php">Neeraj Chourasia: "[OMPI users] Openmpi with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5117.php">Reuti: "Re: [OMPI users] Openmpi with SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not quite sure. It seems that your AR (advance reservation) 
<br>
snapshot3 build is a bit new, and it may be a problem coming from it. I 
<br>
am not quite familiar with this new SGE feature. I'd ping the gridengine 
<br>
list to check on that error message coming from execd.
<br>
<p>Neeraj Chourasia wrote:
<br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I am facing problem while calling mpirun in a loop when using with 
</span><br>
<span class="quotelev1">&gt; SGE. My sge version is SGE6.1AR_snapshot3. The script i am submitting 
</span><br>
<span class="quotelev1">&gt; via sge is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
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
<span class="quotelev1">&gt; &quot;############################################################################################&quot;
</span><br>
<span class="quotelev1">&gt;         echo &quot;Iteration :$i&quot;
</span><br>
<span class="quotelev1">&gt;         /usr/local/openmpi-1.2.4/bin/mpirun -np $NP -hostfile 
</span><br>
<span class="quotelev1">&gt; $TMP/machines send
</span><br>
<span class="quotelev1">&gt;         let &quot;i+=1&quot;
</span><br>
<span class="quotelev1">&gt;         echo 
</span><br>
<span class="quotelev1">&gt; &quot;############################################################################################&quot;
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now above script runs well for 15-20 iteration and then fails with 
</span><br>
<span class="quotelev1">&gt; following message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------Error 
</span><br>
<span class="quotelev1">&gt; Message-------------------------------------------------------------------
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
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i do ssh to n101, there is no orted and qrsh_starter running. While 
</span><br>
<span class="quotelev1">&gt; checking its spool file, i came across following message
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------Execd spool Error 
</span><br>
<span class="quotelev1">&gt; Message---------------------------------
</span><br>
<span class="quotelev1">&gt; |execd|n101|E|no free queue for job 3869 of user neeraj_at_n199 (localhost 
</span><br>
<span class="quotelev1">&gt; = n101)
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------------------------
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
<span class="quotelev1">&gt; Singapore Tour 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://adworks.rediff.com/cgi-bin/AdWorks/click.cgi/www.rediff.com/signature-home.htm/1050715198&#64;Middle5/2041799_2034533/2041733/1?PARTNER=3&amp;OAS_QUERY=null">http://adworks.rediff.com/cgi-bin/AdWorks/click.cgi/www.rediff.com/signature-home.htm/1050715198&#64;Middle5/2041799_2034533/2041733/1?PARTNER=3&amp;OAS_QUERY=null</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5059.php">R.C.Pasianot: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>Previous message:</strong> <a href="5057.php">Kevin Durda: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>In reply to:</strong> <a href="5047.php">Neeraj Chourasia: "[OMPI users] Openmpi with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5117.php">Reuti: "Re: [OMPI users] Openmpi with SGE"</a>
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
