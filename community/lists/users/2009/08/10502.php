<?
$subject_val = "[OMPI users] Launch jobs with TM, but allocate with node files";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 11:01:42 2009" -->
<!-- isoreceived="20090827150142" -->
<!-- sent="Thu, 27 Aug 2009 11:01:35 -0400" -->
<!-- isosent="20090827150135" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Launch jobs with TM, but allocate with node files" -->
<!-- id="091D39A0-2F64-4861-B6C5-4264EF494007_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Launch jobs with TM, but allocate with node files<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 11:01:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10503.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10501.php">Elvedin Trnjanin: "Re: [OMPI users] VMware and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10507.php">Jeff Squyres: "Re: [OMPI users] Launch jobs with TM, but allocate with node files"</a>
<li><strong>Reply:</strong> <a href="10507.php">Jeff Squyres: "Re: [OMPI users] Launch jobs with TM, but allocate with node files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a case where we need to spwan many (random) allocated MPI jobs  
<br>
within the same PBS job.  (I have talked to the user about changing  
<br>
this behavior).
<br>
<p>The code will work If I do:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;pbsdsh -n $(($GROUP*$JOBSIZE-$JOBSIZE)) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-wdir $PWD/$GROUP   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca plm ^tm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca ras ^tm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--hostfile $PWD/nodefile.$GROUP \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./swjv_aim &amp;
<br>
<p>Problem is, because only the pbs_mom on our system starts with the  
<br>
correct amount of pinned/locked memory for ofed, not using the tm ras  
<br>
causes ofed to fail on us.
<br>
<p>I tried removing --mca plm ^tm  which would think would use tm, to  
<br>
launch processes, read from the nodefile, (which is built dynamically  
<br>
in the PBS script, from PBS_NODEFILE),  when you run though mpirun  
<br>
fails with:
<br>
<p>[nyx0407.engin.umich.edu:07392] plm:tm: failed to poll for a spawned  
<br>
daemon, return status = 17002
<br>
<p>In the pbs_mom logs I see this error:
<br>
08/27/2009 10:53:57;0001;   pbs_mom;Svr;pbs_mom;LOG_ERROR::Bad file  
<br>
descriptor (9) in tm_request, bad header Negative sign on an unsigned  
<br>
datum
<br>
<p>Is there a way to tell openmpi,  start on only these hosts from your  
<br>
PBS job, and start using tm?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10503.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10501.php">Elvedin Trnjanin: "Re: [OMPI users] VMware and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10507.php">Jeff Squyres: "Re: [OMPI users] Launch jobs with TM, but allocate with node files"</a>
<li><strong>Reply:</strong> <a href="10507.php">Jeff Squyres: "Re: [OMPI users] Launch jobs with TM, but allocate with node files"</a>
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
