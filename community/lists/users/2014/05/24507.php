<?
$subject_val = "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 08:23:06 2014" -->
<!-- isoreceived="20140528122306" -->
<!-- sent="Wed, 28 May 2014 05:23:02 -0700" -->
<!-- isosent="20140528122302" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadly warning &amp;quot;Epoll ADD(4) on fd 2 failed.&amp;quot; ?" -->
<!-- id="8F2C2327-7DF0-4801-B6F0-CA68F9EC264C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F78004A5-E7B4-4071-8F8B-D2F6B28AF547_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 08:23:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24508.php">Lorenzo Donà: "[OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24506.php">Lori 91: "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When next you run, I would just add &quot;-mca plm rsh&quot; to your cmd line. You don't need to rebuild OMPI to avoid issues with the slurm integration. This will still allow OMPI to read the slurm allocation so it knows which nodes to use, but won't use slurm to launch the job.
<br>
<p>If it is a slurm PMI issue, this should resolve it.
<br>
<p><p>On May 28, 2014, at 12:03 AM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 27, 2014, at 6:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So out of curiosity - how was this job launched? Via mpirun or directly using srun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The job has been submitted using mpirun. However Open MPI is compiled with SLURM support (and I start to believe this is might not ideal after all !!!). I have a partial job trace dumped by the process when it died:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 8190 with PID 29319 on node sand-8-39 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line        Source             
</span><br>
<span class="quotelev1">&gt; diag_OMPI-INTEL.x  0000000000537349  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; diag_OMPI-INTEL.x  0000000000535C1E  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; diag_OMPI-INTEL.x  000000000050CF52  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; diag_OMPI-INTEL.x  00000000004F0BB3  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; diag_OMPI-INTEL.x  00000000004BEB99  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libpthread.so.0    00007FE5B5BE5710  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libmlx4-rdmav2.so  00007FE5A8C0A867  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so  00007FE5ADA36644  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.6   00007FE5B288262A  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.so     00007FE5AC344FAF  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libmpi.so.1        00007FE5B5064E7D  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libmpi_mpifh.so.2  00007FE5B531919B  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libelpa.so.0       00007FE5B82EC0CE  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libelpa.so.0       00007FE5B82EBE36  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libelpa.so.0       00007FE5B82EBDFD  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libelpa.so.0       00007FE5B82EC2CD  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libelpa.so.0       00007FE5B82EB798  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libelpa.so.0       00007FE5B82E571A  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; diag_OMPI-INTEL.x  00000000004101C2  MAIN__                    562  dirac_exomol_eigen.f90
</span><br>
<span class="quotelev1">&gt; diag_OMPI-INTEL.x  000000000040A1A6  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libc.so.6          00007FE5B4A89D1D  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; diag_OMPI-INTEL.x  000000000040A099  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (plus many other trace information like this)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No more information that this unfortunately because not everything library has been built using debug flags. The computation is all concentrated in ScaLAPACK and ELPA that I recompiled by myself, I run over 8192 MPI and the memory allocated per MPI process was below 1 GByte (per MPI). My compute nodes have 64 GByte of RAM and 2 eight-core Intel Sandy Bridge. Since 512 nodes are 80% of the cluster I have available for this test, I cannot easily reschedule a repetition of the test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if this message that can be related to libevent may in principle cause this seg fault error. I am working to understand the cause on my side but so far a reduced problem size using less nodes never failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is much appreciated!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; F
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24507/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24508.php">Lorenzo Donà: "[OMPI users] intel compiler and openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24506.php">Lori 91: "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
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
