<?
$subject_val = "[OMPI users] how to submit parallel job with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 13 03:55:54 2012" -->
<!-- isoreceived="20120913075554" -->
<!-- sent="Thu, 13 Sep 2012 13:07:47 +0530" -->
<!-- isosent="20120913073747" -->
<!-- name="bharati_singh_at_[hidden]" -->
<!-- email="bharati_singh_at_[hidden]" -->
<!-- subject="[OMPI users] how to submit parallel job with openmpi" -->
<!-- id="1347521867.50518d4bd57e4_at_mercury.jncasr.ac.in" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] how to submit parallel job with openmpi<br>
<strong>From:</strong> <a href="mailto:bharati_singh_at_[hidden]?Subject=Re:%20[OMPI%20users]%20how%20to%20submit%20parallel%20job%20with%20openmpi"><em>bharati_singh_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-09-13 03:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20210.php">Ralph Castain: "Re: [OMPI users] how to submit parallel job with openmpi"</a>
<li><strong>Previous message:</strong> <a href="20208.php">Jeff Squyres: "Re: [OMPI users] test for sctp on FreeBSD too narrow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20210.php">Ralph Castain: "Re: [OMPI users] how to submit parallel job with openmpi"</a>
<li><strong>Reply:</strong> <a href="20210.php">Ralph Castain: "Re: [OMPI users] how to submit parallel job with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Openmpi,
<br>
<p>I have Torque integrated with Moab cluster.We use msub command with
<br>
intel mpi . I submit parallel job by using below two scripts.
<br>
<p>$ cat submit1.sh 
<br>
msub -V -N&#194;&#160; name_of_job&#194;&#160;&#194;&#160; -q&#194;&#160; normal64c&#194;&#160; -l nodes=8:ppn=8&#194;&#160; -d&#194;&#160;
<br>
directory_path&#194;&#160;&#194;&#160; -e&#194;&#160; directory_path/err&#194;&#160;&#194;&#160; ./submit2
<br>
<p>$ cat submit2.sh 
<br>
#!/bin/sh
<br>
cat $PBS_NODEFILE |uniq &gt; temp.1
<br>
mpdboot -n `cat temp.1|wc -l` -f temp.1 -r ssh -v
<br>
mpiexec -genv&#194;&#160; I_MPI_DEVICE&#194;&#160; rdma -envall&#194;&#160; -np&#194;&#160; 64&#194;&#160;&#194;&#160;&#194;&#160;
<br>
binary_executable&#194;&#160; &lt; input_filename &gt; output_filename 
<br>
mpdallexit
<br>
<p>We have infiniband interconnection. I have compiled openmpi-1.6 with
<br>
below options
<br>
<p>$ ./configure --prefix=/home/bharati/software/openmpi CC=icc CXX=icpc
<br>
F77=mpif90 --with-tm=/usr/src/torque-2.4.8/src/ --with-openib=/usr
<br>
<p>May I know how can I do the same with openmpi? 
<br>
<p>Thanks &amp; Regards
<br>
Bharati Singh
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20210.php">Ralph Castain: "Re: [OMPI users] how to submit parallel job with openmpi"</a>
<li><strong>Previous message:</strong> <a href="20208.php">Jeff Squyres: "Re: [OMPI users] test for sctp on FreeBSD too narrow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20210.php">Ralph Castain: "Re: [OMPI users] how to submit parallel job with openmpi"</a>
<li><strong>Reply:</strong> <a href="20210.php">Ralph Castain: "Re: [OMPI users] how to submit parallel job with openmpi"</a>
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
