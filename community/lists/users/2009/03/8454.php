<?
$subject_val = "Re: [OMPI users] core dump while running openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 21:03:12 2009" -->
<!-- isoreceived="20090315010312" -->
<!-- sent="Sun, 15 Mar 2009 12:03:01 +1100" -->
<!-- isosent="20090315010301" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core dump while running openmpi" -->
<!-- id="1237078981.5887.27.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="800720.25827.qm_at_web82703.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] core dump while running openmpi<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 21:03:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8455.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8453.php">George Bosilca: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>In reply to:</strong> <a href="8451.php">Ted Yu: "[OMPI users] core dump while running openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like I'm the first to say it: 1.1.1 is very, very old.
<br>
<p>Are you saying that you want to install with 1.1.1 because your code is
<br>
known to work with it, or that it's known not to work with later
<br>
versions (1.3 is released)?
<br>
<p>Either way, a later OMPI version is what you want.  If your app doesn't
<br>
work with a later version you need to work out why and fix it.
<br>
<p><p><p>On Sat, 2009-03-14 at 13:08 -0700, Ted Yu wrote:
<br>
<span class="quotelev1">&gt; Hi there:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to install an old version of openmpi 1.1.1 on a 32 bit
</span><br>
<span class="quotelev1">&gt; cluster and running a program with it.  This program runs fine for
</span><br>
<span class="quotelev1">&gt; another 64 bit cluster which has openmpi 1.1.1 installed, but when
</span><br>
<span class="quotelev1">&gt; running this on the 32 bit cluster, I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /var/spool/pbs/mom_priv/jobs/282832.borg.SC: line 37: 13154
</span><br>
<span class="quotelev1">&gt; Segmentation fault      (core
</span><br>
<span class="quotelev1">&gt; dumped) /ul/tedhyu/openmpi/openmpi-1.1.1/install/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -machinefile ${PBS_NODEFILE} -np ${NPROCS} ${CODE}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anybody encountered this error before?  If you have any advice, it
</span><br>
<span class="quotelev1">&gt; would be much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ted
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8455.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8453.php">George Bosilca: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>In reply to:</strong> <a href="8451.php">Ted Yu: "[OMPI users] core dump while running openmpi"</a>
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
