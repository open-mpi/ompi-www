<?
$subject_val = "[OMPI users] Performance scaled messaging and random crashes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 28 22:03:07 2012" -->
<!-- isoreceived="20120629020307" -->
<!-- sent="Thu, 28 Jun 2012 22:03:03 -0400" -->
<!-- isosent="20120629020303" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI users] Performance scaled messaging and random crashes" -->
<!-- id="4FED0CD7.2000307_at_ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Performance scaled messaging and random crashes<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-28 22:03:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19700.php">David Warren: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19704.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Reply:</strong> <a href="19704.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am getting random crashes (segmentation faults) on a super computer 
<br>
(guillimin)
<br>
using 3 nodes with 12 cores per node. The same program (Ray) runs 
<br>
without any
<br>
problem on the other super computers I use.
<br>
<p>The interconnect is &quot;InfiniBand: QLogic Corp. InfiniPath QME7342 QDR 
<br>
HCA&quot; and
<br>
the messages transit using &quot;performance scaled messaging&quot; (PSM) which I 
<br>
think is some
<br>
sort of replacement to Infiniband verbs although I am not sure.
<br>
<p>Adding '--mca mtl ^psm' to the Open-MPI mpiexec program options solves
<br>
the problem, but increases the latency from 20 microseconds to 55 
<br>
microseconds.
<br>
<p>There seems to be some sort of message corruption during the transit, 
<br>
but I can not rule out
<br>
other explanations.
<br>
<p><p>I have no idea what is going on and why disabling PSM solves the problem.
<br>
<p><p>Versions
<br>
<p>module load gcc/4.5.3
<br>
module load openmpi/1.4.3-gcc
<br>
<p><p>Command that randomly crashes
<br>
<p>mpiexec -n 36 -output-filename MiSeq-bug-2012-06-28.1 \
<br>
Ray -k 31 \
<br>
-o MiSeq-bug-2012-06-28.1 \
<br>
-p \
<br>
data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fastq \
<br>
data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fastq
<br>
<p><p>Command that completes successfully
<br>
<p>mpiexec -n 36 -output-filename  psm-bug-2012-06-26-hotfix.1 \
<br>
--mca mtl ^psm \
<br>
Ray -k 31 \
<br>
-o psm-bug-2012-06-26-hotfix.1 \
<br>
-p \
<br>
data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fastq \
<br>
data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fastq
<br>
<p><p><p>S&#233;bastien Boisvert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19700.php">David Warren: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19704.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Reply:</strong> <a href="19704.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
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
