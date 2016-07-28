<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 09:51:28 2009" -->
<!-- isoreceived="20090507135128" -->
<!-- sent="Thu, 7 May 2009 09:50:45 -0400" -->
<!-- isosent="20090507135045" -->
<!-- name="Mehdi Bozzo-Rey" -->
<!-- email="mbozzore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="531893A968B34D40B36C7A6445BC828A025C5821_at_catoexm06.noam.corp.platform.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="735F8681-75FF-41E9-BBCA-9FA41F60B828_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF launch with OpenMPI<br>
<strong>From:</strong> Mehdi Bozzo-Rey (<em>mbozzore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 09:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9257.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9255.php">pat.o'bryant_at_[hidden]: "[OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>In reply to:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9257.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I just tried it: OpenMPI 1.3.2 (compiled with no LSF support)/ LSF 7.0.4
<br>
and the PJL framework (-a openmpi / mpirun.lsf) and everything looks
<br>
fine.
<br>
<p>Cheers,
<br>
<p>Mehdi
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: May-05-09 9:38 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] LSF launch with OpenMPI
<br>
<p>On May 5, 2009, at 9:25 AM, Jeroen Kleijer wrote:
<br>
<p><span class="quotelev1">&gt; If you wish to submit to lsf using its native commands (bsub) you  
</span><br>
<span class="quotelev1">&gt; can do the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsub -q ${QUEUE} -a openmpi -n ${CPUS} &quot;mpirun.lsf  -x PATH -x  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH -x MPI_BUFFER_SIZE ${COMMAND} ${OPTIONS}&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should be noted that in this case you don't call OpenMPI's mpirun  
</span><br>
<span class="quotelev1">&gt; directly but use the mpirun.lsf, a wrapper script provided by LSF.  
</span><br>
<span class="quotelev1">&gt; This wrapper script takes care of setting the necessary environment  
</span><br>
<span class="quotelev1">&gt; variables and eventually calls the correct mpirun. (the option &quot;-a  
</span><br>
<span class="quotelev1">&gt; openmpi&quot; tells LSF that we're using OpenMPI so don't try to  
</span><br>
<span class="quotelev1">&gt; autodetect)
</span><br>
<p>I had forgotten about this.
<br>
<p>I should ask my LSF contacts if this method still works with Open MPI  
<br>
v1.3 (which natively supports LSF), or whether strange / interesting  
<br>
failures occur because of the integration that mpirun.lsf does ends up  
<br>
effectively conflicting with what OMPI's mpirun does internally...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9257.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9255.php">pat.o'bryant_at_[hidden]: "[OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>In reply to:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9257.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
