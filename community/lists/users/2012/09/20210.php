<?
$subject_val = "Re: [OMPI users] how to submit parallel job with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 13 11:26:17 2012" -->
<!-- isoreceived="20120913152617" -->
<!-- sent="Thu, 13 Sep 2012 08:26:08 -0700" -->
<!-- isosent="20120913152608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to submit parallel job with openmpi" -->
<!-- id="B1150160-74B0-499E-B098-9EE692BE5505_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1347521867.50518d4bd57e4_at_mercury.jncasr.ac.in" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to submit parallel job with openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-13 11:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20211.php">William Au: "[OMPI users] hanging in ioctl in solaris 5.10 openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="20209.php">bharati_singh_at_[hidden]: "[OMPI users] how to submit parallel job with openmpi"</a>
<li><strong>In reply to:</strong> <a href="20209.php">bharati_singh_at_[hidden]: "[OMPI users] how to submit parallel job with openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pretty simple, really:
<br>
<p>#!/bin/sh
<br>
mpiexec -np 64 binary_executable &lt; input_filename &gt; output_filename 
<br>
<p>is all you need. We'll pickup the allocation automatically and do all that is required
<br>
<p><p>On Sep 13, 2012, at 12:37 AM, bharati_singh_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello Openmpi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have Torque integrated with Moab cluster.We use msub command with intel mpi . I submit parallel job by using below two scripts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat submit1.sh 
</span><br>
<span class="quotelev1">&gt; msub -V -N  name_of_job   -q  normal64c  -l nodes=8:ppn=8  -d  directory_path   -e  directory_path/err   ./submit2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat submit2.sh 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE |uniq &gt; temp.1
</span><br>
<span class="quotelev1">&gt; mpdboot -n `cat temp.1|wc -l` -f temp.1 -r ssh -v
</span><br>
<span class="quotelev1">&gt; mpiexec -genv  I_MPI_DEVICE  rdma -envall  -np  64    binary_executable  &lt; input_filename &gt; output_filename 
</span><br>
<span class="quotelev1">&gt; mpdallexit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have infiniband interconnection. I have compiled openmpi-1.6 with below options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/bharati/software/openmpi CC=icc CXX=icpc F77=mpif90 --with-tm=/usr/src/torque-2.4.8/src/ --with-openib=/usr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May I know how can I do the same with openmpi? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards
</span><br>
<span class="quotelev1">&gt; Bharati Singh
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20211.php">William Au: "[OMPI users] hanging in ioctl in solaris 5.10 openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="20209.php">bharati_singh_at_[hidden]: "[OMPI users] how to submit parallel job with openmpi"</a>
<li><strong>In reply to:</strong> <a href="20209.php">bharati_singh_at_[hidden]: "[OMPI users] how to submit parallel job with openmpi"</a>
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
