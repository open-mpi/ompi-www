<?
$subject_val = "Re: [OMPI users] Launch jobs with TM, but allocate with node files";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 17:20:13 2009" -->
<!-- isoreceived="20090827212013" -->
<!-- sent="Thu, 27 Aug 2009 17:20:07 -0400" -->
<!-- isosent="20090827212007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Launch jobs with TM, but allocate with node files" -->
<!-- id="95835F86-1022-484F-BFDD-9569A2CF30F3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="091D39A0-2F64-4861-B6C5-4264EF494007_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Launch jobs with TM, but allocate with node files<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 17:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10508.php">Jean Potsam: "[OMPI users] checkpointing 2 or more processes running in parallel"</a>
<li><strong>Previous message:</strong> <a href="10506.php">Bastil2001_at_[hidden]: "[OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="10502.php">Brock Palen: "[OMPI users] Launch jobs with TM, but allocate with node files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock and I talked about this on IM -- the preferred solution would be  
<br>
to set the cluster nodes limits.conf to allow interactive logins to  
<br>
have unlimited locked memory.  That would fix the OFED issue.
<br>
<p>On Aug 27, 2009, at 11:01 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We have a case where we need to spwan many (random) allocated MPI jobs
</span><br>
<span class="quotelev1">&gt; within the same PBS job.  (I have talked to the user about changing
</span><br>
<span class="quotelev1">&gt; this behavior).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code will work If I do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     pbsdsh -n $(($GROUP*$JOBSIZE-$JOBSIZE)) \
</span><br>
<span class="quotelev1">&gt;               mpirun   \
</span><br>
<span class="quotelev1">&gt;               -wdir $PWD/$GROUP   \
</span><br>
<span class="quotelev1">&gt;               --mca plm ^tm \
</span><br>
<span class="quotelev1">&gt;               --mca ras ^tm \
</span><br>
<span class="quotelev1">&gt;               --hostfile $PWD/nodefile.$GROUP \
</span><br>
<span class="quotelev1">&gt;               ./swjv_aim &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem is, because only the pbs_mom on our system starts with the
</span><br>
<span class="quotelev1">&gt; correct amount of pinned/locked memory for ofed, not using the tm ras
</span><br>
<span class="quotelev1">&gt; causes ofed to fail on us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried removing --mca plm ^tm  which would think would use tm, to
</span><br>
<span class="quotelev1">&gt; launch processes, read from the nodefile, (which is built dynamically
</span><br>
<span class="quotelev1">&gt; in the PBS script, from PBS_NODEFILE),  when you run though mpirun
</span><br>
<span class="quotelev1">&gt; fails with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nyx0407.engin.umich.edu:07392] plm:tm: failed to poll for a spawned
</span><br>
<span class="quotelev1">&gt; daemon, return status = 17002
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the pbs_mom logs I see this error:
</span><br>
<span class="quotelev1">&gt; 08/27/2009 10:53:57;0001;   pbs_mom;Svr;pbs_mom;LOG_ERROR::Bad file
</span><br>
<span class="quotelev1">&gt; descriptor (9) in tm_request, bad header Negative sign on an unsigned
</span><br>
<span class="quotelev1">&gt; datum
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to tell openmpi,  start on only these hosts from your
</span><br>
<span class="quotelev1">&gt; PBS job, and start using tm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10508.php">Jean Potsam: "[OMPI users] checkpointing 2 or more processes running in parallel"</a>
<li><strong>Previous message:</strong> <a href="10506.php">Bastil2001_at_[hidden]: "[OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="10502.php">Brock Palen: "[OMPI users] Launch jobs with TM, but allocate with node files"</a>
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
