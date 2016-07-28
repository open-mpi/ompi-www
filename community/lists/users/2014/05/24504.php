<?
$subject_val = "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 03:03:12 2014" -->
<!-- isoreceived="20140528070312" -->
<!-- sent="Wed, 28 May 2014 08:03:08 +0100" -->
<!-- isosent="20140528070308" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadly warning &amp;quot;Epoll ADD(4) on fd 2 failed.&amp;quot; ?" -->
<!-- id="F78004A5-E7B4-4071-8F8B-D2F6B28AF547_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E37011BF-6531-4234-BC0A-EC33D5AE2CF2_at_open-mpi.org" -->
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
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 03:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24505.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="24503.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>In reply to:</strong> <a href="24490.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24507.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Reply:</strong> <a href="24507.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>On May 27, 2014, at 6:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; So out of curiosity - how was this job launched? Via mpirun or directly using srun?
</span><br>
<p><p>The job has been submitted using mpirun. However Open MPI is compiled with SLURM support (and I start to believe this is might not ideal after all !!!). I have a partial job trace dumped by the process when it died:
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 8190 with PID 29319 on node sand-8-39 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>forrtl: error (78): process killed (SIGTERM)
<br>
Image              PC                Routine            Line        Source             
<br>
diag_OMPI-INTEL.x  0000000000537349  Unknown               Unknown  Unknown
<br>
diag_OMPI-INTEL.x  0000000000535C1E  Unknown               Unknown  Unknown
<br>
diag_OMPI-INTEL.x  000000000050CF52  Unknown               Unknown  Unknown
<br>
diag_OMPI-INTEL.x  00000000004F0BB3  Unknown               Unknown  Unknown
<br>
diag_OMPI-INTEL.x  00000000004BEB99  Unknown               Unknown  Unknown
<br>
libpthread.so.0    00007FE5B5BE5710  Unknown               Unknown  Unknown
<br>
libmlx4-rdmav2.so  00007FE5A8C0A867  Unknown               Unknown  Unknown
<br>
mca_btl_openib.so  00007FE5ADA36644  Unknown               Unknown  Unknown
<br>
libopen-pal.so.6   00007FE5B288262A  Unknown               Unknown  Unknown
<br>
mca_pml_ob1.so     00007FE5AC344FAF  Unknown               Unknown  Unknown
<br>
libmpi.so.1        00007FE5B5064E7D  Unknown               Unknown  Unknown
<br>
libmpi_mpifh.so.2  00007FE5B531919B  Unknown               Unknown  Unknown
<br>
libelpa.so.0       00007FE5B82EC0CE  Unknown               Unknown  Unknown
<br>
libelpa.so.0       00007FE5B82EBE36  Unknown               Unknown  Unknown
<br>
libelpa.so.0       00007FE5B82EBDFD  Unknown               Unknown  Unknown
<br>
libelpa.so.0       00007FE5B82EC2CD  Unknown               Unknown  Unknown
<br>
libelpa.so.0       00007FE5B82EB798  Unknown               Unknown  Unknown
<br>
libelpa.so.0       00007FE5B82E571A  Unknown               Unknown  Unknown
<br>
diag_OMPI-INTEL.x  00000000004101C2  MAIN__                    562  dirac_exomol_eigen.f90
<br>
diag_OMPI-INTEL.x  000000000040A1A6  Unknown               Unknown  Unknown
<br>
libc.so.6          00007FE5B4A89D1D  Unknown               Unknown  Unknown
<br>
diag_OMPI-INTEL.x  000000000040A099  Unknown               Unknown  Unknown
<br>
<p>(plus many other trace information like this)
<br>
<p>No more information that this unfortunately because not everything library has been built using debug flags. The computation is all concentrated in ScaLAPACK and ELPA that I recompiled by myself, I run over 8192 MPI and the memory allocated per MPI process was below 1 GByte (per MPI). My compute nodes have 64 GByte of RAM and 2 eight-core Intel Sandy Bridge. Since 512 nodes are 80% of the cluster I have available for this test, I cannot easily reschedule a repetition of the test.
<br>
<p>I wonder if this message that can be related to libevent may in principle cause this seg fault error. I am working to understand the cause on my side but so far a reduced problem size using less nodes never failed.
<br>
<p>Any help is much appreciated!
<br>
<p>Regards,
<br>
F
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24504/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24505.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="24503.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>In reply to:</strong> <a href="24490.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24507.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Reply:</strong> <a href="24507.php">Ralph Castain: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
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
