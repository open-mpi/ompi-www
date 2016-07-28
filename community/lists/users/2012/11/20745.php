<?
$subject_val = "Re: [OMPI users] PBS jobs with OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 18:07:58 2012" -->
<!-- isoreceived="20121119230758" -->
<!-- sent="Mon, 19 Nov 2012 18:07:44 -0500" -->
<!-- isosent="20121119230744" -->
<!-- name="mariana Vargas" -->
<!-- email="mmarianav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS jobs with OPENMPI" -->
<!-- id="69EAF04F-44EB-406E-B06D-6838FABC9834_at_yahoo.com.mx" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="50AAB4C6.70205_at_byu.edu" -->
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
<strong>From:</strong> mariana Vargas (<em>mmarianav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 18:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20746.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20744.php">Lloyd Brown: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="20744.php">Lloyd Brown: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks
<br>
<p>In fact I compiled without this option, I send the script without  
<br>
specifying the hostfile and it seems to be working, but I'afraid it is  
<br>
not pararelizing and instead it is computed N times de same procedure,  
<br>
=(
<br>
I will see the result in a 30 min...
<br>
<p>On Nov 19, 2012, at 5:37 PM, Lloyd Brown wrote:
<br>
<p><span class="quotelev1">&gt; As far as I know, the mpdboot is not needed with OpenMPI.  You should
</span><br>
<span class="quotelev1">&gt; just be able to call mpirun or mpiexec directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your OpenMPI installation was compiled to use the TM API with  
</span><br>
<span class="quotelev1">&gt; Torque,
</span><br>
<span class="quotelev1">&gt; you just do it like this, and it figures it all out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun myprogram
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, you will need to supply the number of nodes and nodefile,
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NP=`wc -l $PBS_NODEFILE | awk '{print $1}'`
</span><br>
<span class="quotelev1">&gt; mpirun -n $NP -hostfile $PBS_NODEFILE myprogram
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/19/2012 03:28 PM, Mariana Vargas Magana wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all
</span><br>
<span class="quotelev2">&gt;&gt; Help !! I have to send a job using #PBS and in the script example  
</span><br>
<span class="quotelev2">&gt;&gt; there is something like this because the cluster is using MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; In my case i nee Openmpi to run my code so I installed locally, in  
</span><br>
<span class="quotelev2">&gt;&gt; this case anyone knows what it is the equivalent of this commands  
</span><br>
<span class="quotelev2">&gt;&gt; because it is not recognized like that...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpdboot -n ${NNODES} -f ${PBS_NODEFILE} -v --remcons
</span><br>
<span class="quotelev2">&gt;&gt; Thanks !!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mariana
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="20746.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20744.php">Lloyd Brown: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="20744.php">Lloyd Brown: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
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
