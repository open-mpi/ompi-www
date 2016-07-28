<?
$subject_val = "[OMPI users] An err in parallel computing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 21:54:06 2012" -->
<!-- isoreceived="20121010015406" -->
<!-- sent="Wed, 10 Oct 2012 09:54:02 +0800" -->
<!-- isosent="20121010015402" -->
<!-- name="Z.Y.Qiu" -->
<!-- email="luoyuan126_at_[hidden]" -->
<!-- subject="[OMPI users] An err in parallel computing" -->
<!-- id="CAE6obBVSY52RzqVUV89fLoVjxtGqVowO+fcOZpAnX30JAG+X1Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] An err in parallel computing<br>
<strong>From:</strong> Z.Y.Qiu (<em>luoyuan126_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 21:54:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20442.php">Hodgess, Erin: "[OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20440.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,everyone! I am trying to install LAMMPS which is linked to openmpi 1.3.3
<br>
on a Linux service.
<br>
I can run simulations in serial computing successfully.But when I submit
<br>
jobs to compute parallelly
<br>
after setting environment in .bash_profile , jobs exit soon with an err.
<br>
The following is the err info.(  I use 8 CPUs and the service use LSF
<br>
platform. &quot; /datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi&quot;
<br>
is the path of my executable file):
<br>
&nbsp;/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: symbol lookup error:
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: undefined symbol:
<br>
__libm_error_support
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: symbol lookup error:
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: undefined symbol:
<br>
__libm_error_support
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: symbol lookup error:
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: undefined symbol:
<br>
__libm_error_support
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: symbol lookup error:
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: undefined symbol:
<br>
__libm_error_support
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: symbol lookup error:
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: undefined symbol:
<br>
__libm_error_support
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: symbol lookup error:
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: undefined symbol:
<br>
__libm_error_support
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: symbol lookup error:
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: undefined symbol:
<br>
__libm_error_support
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: symbol lookup error:
<br>
/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi: undefined symbol:
<br>
__libm_error_support
<br>
--------------------------------------------------------------------------
<br>
mpirun.openmpi has exited due to process rank 6 with PID 21520 on
<br>
node T4601 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun.openmpi (as reported here).
<br>
--------------------------------------------------------------------------
<br>
The following is the script to running parallelly I use :
<br>
#BSUB -W 60
<br>
#BSUB -a openmpi
<br>
#BSUB -n 8
<br>
#BSUB -q x64_small
<br>
#BSUB -J qiuzy
<br>
#BSUB -o m.out
<br>
#BSUB -e m.err
<br>
<p>mpirun.lsf  &quot;/datastore/workspace/zyli/qiuzy/test-3/lmp_openmpi  -in
<br>
in.grastab -log log1.grastab&quot;
<br>
<p>How can i solve it??
<br>
Thank you for your time and  help!!
<br>
<p>yours sincerely
<br>
Z.Y.Qiu
<br>
10/10/2012
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20441/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20442.php">Hodgess, Erin: "[OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20440.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
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
