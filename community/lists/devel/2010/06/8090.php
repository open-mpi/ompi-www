<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 04:53:43 2010" -->
<!-- isoreceived="20100610085343" -->
<!-- sent="Thu, 10 Jun 2010 10:57:54 +0200 (CEST)" -->
<!-- isosent="20100610085754" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="alpine.DEB.2.00.1006101053310.3820_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C10A5CA.3080705_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 04:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8091.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8092.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8092.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 10 Jun 2010, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; One should not ignore the option of POSIX shared memory: shm_open() and 
</span><br>
<span class="quotelev1">&gt; shm_unlink().  When present this mechanism usually does not suffer from 
</span><br>
<span class="quotelev1">&gt; the small (eg 32MB) limits of SysV, and uses a &quot;filename&quot; (in an 
</span><br>
<span class="quotelev1">&gt; abstract namespace) which can portably be up 14 characters in length. 
</span><br>
<span class="quotelev1">&gt; Because shm_unlink() may be called as soon as the final process has done 
</span><br>
<span class="quotelev1">&gt; its shm_open() one can get approximately the safety of the IPC_RMID 
</span><br>
<span class="quotelev1">&gt; mechanism, but w/o being restricted to Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have used POSIX shared memory for another project and found it works 
</span><br>
<span class="quotelev1">&gt; well on Linux, Solaris (10 and Open), FreeBSD and AIX.  That is probably 
</span><br>
<span class="quotelev1">&gt; a narrow coverage than SysV, but still worth consideration IMHO.
</span><br>
I was just doing research on shm_open() to ensure it had no limitation 
<br>
before introducing it in this thread. You saved me some time !
<br>
<p><span class="quotelev1">&gt; With mmap(), SysV and POSIX (plus XPMEM on the SGI Altix) as mechanisms 
</span><br>
<span class="quotelev1">&gt; for sharing memory between processes, I think we have an argument for a 
</span><br>
<span class="quotelev1">&gt; full-blown &quot;shared pages&quot; framework as opposed to just a &quot;mpi_common_sm&quot; 
</span><br>
<span class="quotelev1">&gt; MCA parameter.  That brings all the benefits like possibly &quot;failing 
</span><br>
<span class="quotelev1">&gt; over&quot; from one component to another (otherwise less desired) one if some 
</span><br>
<span class="quotelev1">&gt; limit is exceeded.  For instance, SysV could (for a given set of 
</span><br>
<span class="quotelev1">&gt; priorities) be used by default, but mmap-on-real-fs could be 
</span><br>
<span class="quotelev1">&gt; automatically selected when the requested/required size exceeds the 
</span><br>
<span class="quotelev1">&gt; shmmax value.
</span><br>
Would be indeed nice.
<br>
<p><span class="quotelev1">&gt; As for why mmap is slower.  When the file is on a real (not tmpfs or other 
</span><br>
<span class="quotelev1">&gt; ramdisk) I am 95% certain that this is an artifact of the Linux swapper/pager 
</span><br>
<span class="quotelev1">&gt; behavior which is thinking it is being smart by &quot;swapping ahead&quot;.  Even when 
</span><br>
<span class="quotelev1">&gt; there is no memory pressure that requires swapping, Linux starts queuing swap 
</span><br>
<span class="quotelev1">&gt; I/O for pages to keep the number of &quot;clean&quot; pages up when possible. This 
</span><br>
<span class="quotelev1">&gt; results in pages of the shared memory file being written out to the actual 
</span><br>
<span class="quotelev1">&gt; block device.  Both the background I/O and the VM metadata updates contribute 
</span><br>
<span class="quotelev1">&gt; to the lost time.  I say 95% certain because I have a colleague who looked 
</span><br>
<span class="quotelev1">&gt; into this phenomena in another setting and I am recounting what he reported 
</span><br>
<span class="quotelev1">&gt; as clearly as I can remember, but might have misunderstood or inserted my own 
</span><br>
<span class="quotelev1">&gt; speculation by accident.  A sufficiently motivated investigator (not me) 
</span><br>
<span class="quotelev1">&gt; could probably devise an experiment to verify this.
</span><br>
Interesting. Do you think this behavior of the linux kernel would change 
<br>
if the file was unlink()ed after attach ?
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8091.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8092.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8092.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
