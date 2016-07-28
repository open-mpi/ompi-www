<?
$subject_val = "Re: [OMPI users] Performance scaled messaging and random crashes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 30 21:25:30 2012" -->
<!-- isoreceived="20120701012530" -->
<!-- sent="Sat, 30 Jun 2012 21:25:26 -0400" -->
<!-- isosent="20120701012526" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance scaled messaging and random crashes" -->
<!-- id="4FEFA706.6040105_at_ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="881346C7-C48C-4D50-BA65-D717B95F2877_at_cisco.com" -->
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
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-30 21:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19720.php">Sébastien Boisvert: "[OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>Previous message:</strong> <a href="19718.php">Secretan Yves: "[OMPI users] RE : fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19704.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Just to give an update on the list:
<br>
<p>Today, I implemented message data reliability verification in my code using
<br>
the CRC32 algorithm.
<br>
<p>Without PSM, everything runs fine.
<br>
<p>With PSM, I get these errors:
<br>
<p>Error: RayPlatform detected a message corruption !
<br>
&nbsp;&nbsp;Tag: RAY_MPI_TAG_REQUEST_VERTEX_COVERAGE_REPLY
<br>
&nbsp;&nbsp;Source: 3
<br>
&nbsp;&nbsp;Destination: 3
<br>
&nbsp;&nbsp;sizeof(MessageUnit): 8
<br>
&nbsp;&nbsp;Count (excluding checksum): 1
<br>
&nbsp;&nbsp;Expected checksum (CRC32): ea
<br>
&nbsp;&nbsp;Actual checksum (CRC32): 4f3b6143
<br>
<p>Error: RayPlatform detected a message corruption !
<br>
&nbsp;&nbsp;Tag: RAY_MPI_TAG_GET_READ_MATE
<br>
&nbsp;&nbsp;Source: 4
<br>
&nbsp;&nbsp;Destination: 4
<br>
&nbsp;&nbsp;sizeof(MessageUnit): 8
<br>
&nbsp;&nbsp;Count (excluding checksum): 1
<br>
&nbsp;&nbsp;Expected checksum (CRC32): f4240
<br>
&nbsp;&nbsp;Actual checksum (CRC32): 0
<br>
<p>Error: RayPlatform detected a message corruption !
<br>
&nbsp;&nbsp;Tag: RAY_MPI_TAG_REQUEST_VERTEX_COVERAGE_REPLY
<br>
&nbsp;&nbsp;Source: 5
<br>
&nbsp;&nbsp;Destination: 5
<br>
&nbsp;&nbsp;sizeof(MessageUnit): 8
<br>
&nbsp;&nbsp;Count (excluding checksum): 7
<br>
&nbsp;&nbsp;Expected checksum (CRC32): dd94edd5
<br>
<p>Error: RayPlatform detected a message corruption !
<br>
&nbsp;&nbsp;Tag: RAY_MPI_TAG_GET_VERTEX_EDGES_COMPACT
<br>
&nbsp;&nbsp;Source: 5
<br>
&nbsp;&nbsp;Destination: 5
<br>
&nbsp;&nbsp;sizeof(MessageUnit): 8
<br>
&nbsp;&nbsp;Count (excluding checksum): 2
<br>
&nbsp;&nbsp;Expected checksum (CRC32): e80f2c45
<br>
&nbsp;&nbsp;Actual checksum (CRC32): 0
<br>
<p>Error: RayPlatform detected a message corruption !
<br>
&nbsp;&nbsp;Tag: RAY_MPI_TAG_GET_VERTEX_EDGES_COMPACT_REPLY
<br>
&nbsp;&nbsp;Source: 5
<br>
&nbsp;&nbsp;Destination: 5
<br>
&nbsp;&nbsp;sizeof(MessageUnit): 8
<br>
&nbsp;&nbsp;Count (excluding checksum): 2
<br>
&nbsp;&nbsp;Expected checksum (CRC32): 42
<br>
&nbsp;&nbsp;Actual checksum (CRC32): a906f61
<br>
<p>Error: RayPlatform detected a message corruption !
<br>
&nbsp;&nbsp;Tag: RAY_MPI_TAG_REQUEST_VERTEX_COVERAGE
<br>
&nbsp;&nbsp;Source: 12
<br>
&nbsp;&nbsp;Destination: 12
<br>
&nbsp;&nbsp;sizeof(MessageUnit): 8
<br>
&nbsp;&nbsp;Count (excluding checksum): 3
<br>
&nbsp;&nbsp;Expected checksum (CRC32): 5b6f1504
<br>
&nbsp;&nbsp;Actual checksum (CRC32): d5b3049a
<br>
<p>Error: RayPlatform detected a message corruption !
<br>
&nbsp;&nbsp;Tag: RAY_MPI_TAG_REQUEST_VERTEX_READS
<br>
&nbsp;&nbsp;Source: 27
<br>
&nbsp;&nbsp;Destination: 27
<br>
&nbsp;&nbsp;sizeof(MessageUnit): 8
<br>
&nbsp;&nbsp;Count (excluding checksum): 5
<br>
&nbsp;&nbsp;Expected checksum (CRC32): fc01eda4
<br>
&nbsp;&nbsp;Actual checksum (CRC32): 0
<br>
<p><p>I guess this is when the Open-MPI PML (point-to-point messaging layer)
<br>
dr (data reliability) would be helpful.
<br>
<p><p>I now have a open case with the QLogic support.
<br>
<p><p>Thank you for your help.
<br>
<p><p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Yes, PSM is the native transport for InfiniPath.  It is faster than the InfiniBand verbs support on the same hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 28, 2012, at 10:03 PM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting random crashes (segmentation faults) on a super computer (guillimin)
</span><br>
<span class="quotelev2">&gt;&gt; using 3 nodes with 12 cores per node. The same program (Ray) runs without any
</span><br>
<span class="quotelev2">&gt;&gt; problem on the other super computers I use.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The interconnect is &quot;InfiniBand: QLogic Corp. InfiniPath QME7342 QDR HCA&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; the messages transit using &quot;performance scaled messaging&quot; (PSM) which I think is some
</span><br>
<span class="quotelev2">&gt;&gt; sort of replacement to Infiniband verbs although I am not sure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Adding '--mca mtl ^psm' to the Open-MPI mpiexec program options solves
</span><br>
<span class="quotelev2">&gt;&gt; the problem, but increases the latency from 20 microseconds to 55 microseconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There seems to be some sort of message corruption during the transit, but I can not rule out
</span><br>
<span class="quotelev2">&gt;&gt; other explanations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have no idea what is going on and why disabling PSM solves the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Versions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module load gcc/4.5.3
</span><br>
<span class="quotelev2">&gt;&gt; module load openmpi/1.4.3-gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Command that randomly crashes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -n 36 -output-filename MiSeq-bug-2012-06-28.1 \
</span><br>
<span class="quotelev2">&gt;&gt; Ray -k 31 \
</span><br>
<span class="quotelev2">&gt;&gt; -o MiSeq-bug-2012-06-28.1 \
</span><br>
<span class="quotelev2">&gt;&gt; -p \
</span><br>
<span class="quotelev2">&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fastq \
</span><br>
<span class="quotelev2">&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fastq
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Command that completes successfully
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -n 36 -output-filename  psm-bug-2012-06-26-hotfix.1 \
</span><br>
<span class="quotelev2">&gt;&gt; --mca mtl ^psm \
</span><br>
<span class="quotelev2">&gt;&gt; Ray -k 31 \
</span><br>
<span class="quotelev2">&gt;&gt; -o psm-bug-2012-06-26-hotfix.1 \
</span><br>
<span class="quotelev2">&gt;&gt; -p \
</span><br>
<span class="quotelev2">&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fastq \
</span><br>
<span class="quotelev2">&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fastq
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; S&#233;bastien Boisvert
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19720.php">Sébastien Boisvert: "[OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>Previous message:</strong> <a href="19718.php">Secretan Yves: "[OMPI users] RE : fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19704.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
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
