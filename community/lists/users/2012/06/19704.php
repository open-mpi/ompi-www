<?
$subject_val = "Re: [OMPI users] Performance scaled messaging and random crashes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 07:30:19 2012" -->
<!-- isoreceived="20120629113019" -->
<!-- sent="Fri, 29 Jun 2012 07:30:14 -0400" -->
<!-- isosent="20120629113014" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance scaled messaging and random crashes" -->
<!-- id="881346C7-C48C-4D50-BA65-D717B95F2877_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FED0CD7.2000307_at_ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance scaled messaging and random crashes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 07:30:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19705.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19703.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19701.php">S&#233;bastien Boisvert: "[OMPI users] Performance scaled messaging and random crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19705.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Reply:</strong> <a href="19705.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Reply:</strong> <a href="19719.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, PSM is the native transport for InfiniPath.  It is faster than the InfiniBand verbs support on the same hardware.
<br>
<p>What version of Open MPI are you using?
<br>
<p><p>On Jun 28, 2012, at 10:03 PM, S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting random crashes (segmentation faults) on a super computer (guillimin)
</span><br>
<span class="quotelev1">&gt; using 3 nodes with 12 cores per node. The same program (Ray) runs without any
</span><br>
<span class="quotelev1">&gt; problem on the other super computers I use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The interconnect is &quot;InfiniBand: QLogic Corp. InfiniPath QME7342 QDR HCA&quot; and
</span><br>
<span class="quotelev1">&gt; the messages transit using &quot;performance scaled messaging&quot; (PSM) which I think is some
</span><br>
<span class="quotelev1">&gt; sort of replacement to Infiniband verbs although I am not sure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding '--mca mtl ^psm' to the Open-MPI mpiexec program options solves
</span><br>
<span class="quotelev1">&gt; the problem, but increases the latency from 20 microseconds to 55 microseconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There seems to be some sort of message corruption during the transit, but I can not rule out
</span><br>
<span class="quotelev1">&gt; other explanations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no idea what is going on and why disabling PSM solves the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Versions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module load gcc/4.5.3
</span><br>
<span class="quotelev1">&gt; module load openmpi/1.4.3-gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Command that randomly crashes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -n 36 -output-filename MiSeq-bug-2012-06-28.1 \
</span><br>
<span class="quotelev1">&gt; Ray -k 31 \
</span><br>
<span class="quotelev1">&gt; -o MiSeq-bug-2012-06-28.1 \
</span><br>
<span class="quotelev1">&gt; -p \
</span><br>
<span class="quotelev1">&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fastq \
</span><br>
<span class="quotelev1">&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fastq
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Command that completes successfully
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -n 36 -output-filename  psm-bug-2012-06-26-hotfix.1 \
</span><br>
<span class="quotelev1">&gt; --mca mtl ^psm \
</span><br>
<span class="quotelev1">&gt; Ray -k 31 \
</span><br>
<span class="quotelev1">&gt; -o psm-bug-2012-06-26-hotfix.1 \
</span><br>
<span class="quotelev1">&gt; -p \
</span><br>
<span class="quotelev1">&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fastq \
</span><br>
<span class="quotelev1">&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fastq
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; S&#233;bastien Boisvert
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19705.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19703.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19701.php">S&#233;bastien Boisvert: "[OMPI users] Performance scaled messaging and random crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19705.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Reply:</strong> <a href="19705.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Reply:</strong> <a href="19719.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
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
