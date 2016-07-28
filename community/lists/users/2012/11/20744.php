<?
$subject_val = "Re: [OMPI users] PBS jobs with OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 17:42:59 2012" -->
<!-- isoreceived="20121119224259" -->
<!-- sent="Mon, 19 Nov 2012 15:37:58 -0700" -->
<!-- isosent="20121119223758" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS jobs with OPENMPI" -->
<!-- id="50AAB4C6.70205_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C255D86F-1D3A-4F22-877A-85AB157200FA_at_yahoo.com.mx" -->
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
<strong>Subject:</strong> Re: [OMPI users] PBS jobs with OPENMPI<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 17:37:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20745.php">mariana Vargas: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="20743.php">Ralph Castain: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="20742.php">Mariana Vargas Magana: "[OMPI users] PBS jobs with OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20745.php">mariana Vargas: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>Reply:</strong> <a href="20745.php">mariana Vargas: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as I know, the mpdboot is not needed with OpenMPI.  You should
<br>
just be able to call mpirun or mpiexec directly.
<br>
<p>If your OpenMPI installation was compiled to use the TM API with Torque,
<br>
you just do it like this, and it figures it all out:
<br>
<p>mpirun myprogram
<br>
<p>Otherwise, you will need to supply the number of nodes and nodefile,
<br>
like this:
<br>
<p>NP=`wc -l $PBS_NODEFILE | awk '{print $1}'`
<br>
mpirun -n $NP -hostfile $PBS_NODEFILE myprogram
<br>
<p><p><p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 11/19/2012 03:28 PM, Mariana Vargas Magana wrote:
<br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt; Help !! I have to send a job using #PBS and in the script example there is something like this because the cluster is using MPICH2 
</span><br>
<span class="quotelev1">&gt; In my case i nee Openmpi to run my code so I installed locally, in this case anyone knows what it is the equivalent of this commands because it is not recognized like that...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpdboot -n ${NNODES} -f ${PBS_NODEFILE} -v --remcons
</span><br>
<span class="quotelev1">&gt; Thanks !!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mariana
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20745.php">mariana Vargas: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="20743.php">Ralph Castain: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="20742.php">Mariana Vargas Magana: "[OMPI users] PBS jobs with OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20745.php">mariana Vargas: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>Reply:</strong> <a href="20745.php">mariana Vargas: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
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
