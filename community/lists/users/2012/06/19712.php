<?
$subject_val = "Re: [OMPI users] Performance scaled messaging and random crashes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 14:21:49 2012" -->
<!-- isoreceived="20120629182149" -->
<!-- sent="Fri, 29 Jun 2012 14:21:45 -0400" -->
<!-- isosent="20120629182145" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance scaled messaging and random crashes" -->
<!-- id="4FEDF239.90702_at_ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB710DB5907_at_FMSMSX107.amr.corp.intel.com" -->
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
<strong>Date:</strong> 2012-06-29 14:21:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19719.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The latency of 20 microseconds is for 4000-byte messages
<br>
going from MPI rank A to MPI rank B and then back to MPI rank A.
<br>
<p>For a one-way trip, it is 10 microseconds.
<br>
<p>And the latency for 1-byte messages
<br>
from MPI rank A to MPI rank B is already below 3 microseconds.
<br>
<p><p>I will contact you off-list.
<br>
<p>Thank you.
<br>
<p><p>Elken, Tom a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Sebastien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Infinipath / PSM software that was developed by PathScale/QLogic is now part of Intel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll advise you off-list about how to contact our customer support so we can gather information about your software installation and work to resolve your issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 20 microseconds latency you are getting with Open MPI / PSM is still way too high, so there may be some network issue which needs to be solved first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of S&#233;bastien Boisvert
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, June 29, 2012 10:56 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Performance scaled messaging and random crashes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for the direction.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed Open-MPI 1.6 and the program is also crashing with 1.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could there be a bug in my code ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't see how disabling PSM would make the bug go away if the bug is in my
</span><br>
<span class="quotelev2">&gt;&gt; code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI configure command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module load gcc/4.5.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/sb/project/nne-790-ab/software/Open-MPI/1.6/Build \ --with-openib
</span><br>
<span class="quotelev2">&gt;&gt; \ --with-psm \ --with-tm=/software/tools/torque/ \
</span><br>
<span class="quotelev2">&gt;&gt; | tee configure.log
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
<span class="quotelev2">&gt;&gt; module load /sb/project/nne-790-ab/software/modulefiles/mpi/Open-MPI/1.6
</span><br>
<span class="quotelev2">&gt;&gt; module load /sb/project/nne-790-ab/software/modulefiles/apps/ray/2.0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PSM parameters
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; guillimin&gt;  ompi_info -a|grep psm
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: psm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: parameter &quot;mtl_psm_connect_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value:&lt;180&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: parameter &quot;mtl_psm_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: parameter &quot;mtl_psm_ib_unit&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;-1&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: parameter &quot;mtl_psm_ib_port&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: parameter &quot;mtl_psm_ib_service_level&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value:&lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: parameter &quot;mtl_psm_ib_pkey&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;32767&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: parameter &quot;mtl_psm_ib_service_id&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value:&lt;0x1000117500000000&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: parameter &quot;mtl_psm_path_query&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value:&lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA mtl: parameter &quot;mtl_psm_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; S&#233;bastien Boisvert
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Open MPI 1.4 series is now deprecated.  Can you upgrade to Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.6?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 29, 2012, at 9:02 AM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using Open-MPI 1.4.3 compiled with gcc 4.5.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The library:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/libpsm_infinipath.so.1.14: ELF 64-bit LSB shared object,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AMD x86-64, version 1 (SYSV), not stripped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes, PSM is the native transport for InfiniPath.  It is faster than the
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand verbs support on the same hardware.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 28, 2012, at 10:03 PM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am getting random crashes (segmentation faults) on a super
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; computer (guillimin) using 3 nodes with 12 cores per node. The same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; program (Ray) runs without any problem on the other super computers I
</span><br>
<span class="quotelev2">&gt;&gt; use.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The interconnect is &quot;InfiniBand: QLogic Corp. InfiniPath QME7342
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; QDR HCA&quot; and the messages transit using &quot;performance scaled
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; messaging&quot; (PSM) which I think is some sort of replacement to Infiniband
</span><br>
<span class="quotelev2">&gt;&gt; verbs although I am not sure.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Adding '--mca mtl ^psm' to the Open-MPI mpiexec program options
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; solves the problem, but increases the latency from 20 microseconds to 55
</span><br>
<span class="quotelev2">&gt;&gt; microseconds.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There seems to be some sort of message corruption during the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; transit, but I can not rule out other explanations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have no idea what is going on and why disabling PSM solves the problem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Versions
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; module load gcc/4.5.3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; module load openmpi/1.4.3-gcc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Command that randomly crashes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiexec -n 36 -output-filename MiSeq-bug-2012-06-28.1 \ Ray -k 31 \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -o MiSeq-bug-2012-06-28.1 \ -p \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fast
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; q \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fast
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; q
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Command that completes successfully
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiexec -n 36 -output-filename  psm-bug-2012-06-26-hotfix.1 \ --mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtl ^psm \ Ray -k 31 \ -o psm-bug-2012-06-26-hotfix.1 \ -p \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R1.fast
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; q \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; data-for-system-tests/ecoli-MiSeq/MiSeq_Ecoli_MG1655_110527_R2.fast
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; q
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; S&#233;bastien Boisvert
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="19713.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19711.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19709.php">Elken, Tom: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19719.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
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
