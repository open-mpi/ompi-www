<?
$subject_val = "Re: [OMPI users] Performance scaled messaging and random crashes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 13:55:39 2012" -->
<!-- isoreceived="20120629175539" -->
<!-- sent="Fri, 29 Jun 2012 13:55:34 -0400" -->
<!-- isosent="20120629175534" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance scaled messaging and random crashes" -->
<!-- id="4FEDEC16.4070700_at_ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8511929E-EF6B-400B-95EF-C8CEACC8AB79_at_cisco.com" -->
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
<strong>Date:</strong> 2012-06-29 13:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19707.php">Secretan Yves: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19706.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Reply:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thank you for the direction.
<br>
<p>I installed Open-MPI 1.6 and the program is also crashing with 1.6.
<br>
<p>Could there be a bug in my code ?
<br>
<p>I don't see how disabling PSM would make the bug go away if the bug
<br>
is in my code.
<br>
<p><p>Open-MPI configure command
<br>
<p>module load gcc/4.5.3
<br>
<p>./configure \
<br>
--prefix=/sb/project/nne-790-ab/software/Open-MPI/1.6/Build \
<br>
--with-openib \
<br>
--with-psm \
<br>
--with-tm=/software/tools/torque/ \
<br>
| tee configure.log
<br>
<p><p>Versions
<br>
<p>module load gcc/4.5.3
<br>
module load /sb/project/nne-790-ab/software/modulefiles/mpi/Open-MPI/1.6
<br>
module load /sb/project/nne-790-ab/software/modulefiles/apps/ray/2.0.0
<br>
<p><p><p>PSM parameters
<br>
<p>guillimin&gt; ompi_info -a|grep psm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: psm (MCA v2.0, API v2.0, Component v1.6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_connect_timeout&quot; (current 
<br>
value: &lt;180&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_debug&quot; (current value: 
<br>
&lt;1&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_ib_unit&quot; (current value: 
<br>
&lt;-1&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_ib_port&quot; (current value: 
<br>
&lt;0&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_ib_service_level&quot; (current 
<br>
value: &lt;0&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_ib_pkey&quot; (current value: 
<br>
&lt;32767&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_ib_service_id&quot; (current 
<br>
value: &lt;0x1000117500000000&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_path_query&quot; (current 
<br>
value: &lt;none&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_priority&quot; (current value: 
<br>
&lt;0&gt;, data source: default value)
<br>
<p><p>Thank you.
<br>
<p><p>S&#233;bastien Boisvert
<br>
<p><p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; The Open MPI 1.4 series is now deprecated.  Can you upgrade to Open MPI 1.6?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 29, 2012, at 9:02 AM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using Open-MPI 1.4.3 compiled with gcc 4.5.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The library:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libpsm_infinipath.so.1.14: ELF 64-bit LSB shared object, AMD x86-64, version 1 (SYSV), not stripped
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, PSM is the native transport for InfiniPath.  It is faster than the InfiniBand verbs support on the same hardware.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What version of Open MPI are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 28, 2012, at 10:03 PM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am getting random crashes (segmentation faults) on a super computer (guillimin)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using 3 nodes with 12 cores per node. The same program (Ray) runs without any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem on the other super computers I use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The interconnect is &quot;InfiniBand: QLogic Corp. InfiniPath QME7342 QDR HCA&quot; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the messages transit using &quot;performance scaled messaging&quot; (PSM) which I think is some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sort of replacement to Infiniband verbs although I am not sure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Adding '--mca mtl ^psm' to the Open-MPI mpiexec program options solves
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem, but increases the latency from 20 microseconds to 55 microseconds.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There seems to be some sort of message corruption during the transit, but I can not rule out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other explanations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have no idea what is going on and why disabling PSM solves the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Versions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module load gcc/4.5.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module load openmpi/1.4.3-gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Command that randomly crashes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec -n 36 -output-filename MiSeq-bug-2012-06-28.1 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ray -k 31 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -o MiSeq-bug-2012-06-28.1 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -p \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fastq \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fastq
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Command that completes successfully
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec -n 36 -output-filename  psm-bug-2012-06-26-hotfix.1 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mca mtl ^psm \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ray -k 31 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -o psm-bug-2012-06-26-hotfix.1 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -p \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fastq \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fastq
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; S&#233;bastien Boisvert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19707.php">Secretan Yves: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19706.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Reply:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
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
