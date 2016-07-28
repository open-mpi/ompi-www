<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 04:44:07 2010" -->
<!-- isoreceived="20100610084407" -->
<!-- sent="Thu, 10 Jun 2010 01:43:54 -0700" -->
<!-- isosent="20100610084354" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="4C10A5CA.3080705_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1006100929350.3820_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 04:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8088.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8088.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8091.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8095.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; On Wed, 9 Jun 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2010, at 3:26 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System V shared memory cleanup is a concern only if a process dies in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between shmat and shmctl IPC_RMID.  Shared memory segment cleanup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should happen automagically in most cases, including abnormal process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; termination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Umm... right.  Duh.  I knew that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Really.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So -- we're good!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's open the discussion of making sysv the default on systems that 
</span><br>
<span class="quotelev2">&gt;&gt; support the IPC_RMID behavior (which, AFAIK, is only Linux)...
</span><br>
<span class="quotelev1">&gt; I'm sorry, but I think System V has many disadvantages over mmap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. As discussed before, cleaning is not as easy as for a file. It is a 
</span><br>
<span class="quotelev1">&gt; good thing to remove the shm segment after creation, but since 
</span><br>
<span class="quotelev1">&gt; problems often happen during shmget/shmat, there's still a high risk 
</span><br>
<span class="quotelev1">&gt; of letting things behind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. There are limits in the kernel you need to grow (kernel.shmall, 
</span><br>
<span class="quotelev1">&gt; kernel.shmmax). On most linux distribution, shmmax is 32MB, which does 
</span><br>
<span class="quotelev1">&gt; not permit the sysv mechanism to work. Mmapped files are unlimited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Each shm segment is identified by a 32 bit integer. This namespace 
</span><br>
<span class="quotelev1">&gt; is small (and non-intuitive, as opposed to a file name), and the 
</span><br>
<span class="quotelev1">&gt; probability for a collision is not null, especially when you start 
</span><br>
<span class="quotelev1">&gt; creating multiple shared memory segments (for collectives, one-sided 
</span><br>
<span class="quotelev1">&gt; operations, ...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I'm a bit reluctant to work with System V mechanisms again. I 
</span><br>
<span class="quotelev1">&gt; don't think there is a *real* reason for System V to be faster than 
</span><br>
<span class="quotelev1">&gt; mmap, since it should just be memory. I'd rather find out why mmap is 
</span><br>
<span class="quotelev1">&gt; slower.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>One should not ignore the option of POSIX shared memory: shm_open() and 
<br>
shm_unlink().  When present this mechanism usually does not suffer from 
<br>
the small (eg 32MB) limits of SysV, and uses a &quot;filename&quot; (in an 
<br>
abstract namespace) which can portably be up 14 characters in length.  
<br>
Because shm_unlink() may be called as soon as the final process has done 
<br>
its shm_open() one can get approximately the safety of the IPC_RMID 
<br>
mechanism, but w/o being restricted to Linux.
<br>
<p>I have used POSIX shared memory for another project and found it works 
<br>
well on Linux, Solaris (10 and Open), FreeBSD and AIX.  That is probably 
<br>
a narrow coverage than SysV, but still worth consideration IMHO.  With 
<br>
mmap(), SysV and POSIX (plus XPMEM on the SGI Altix) as mechanisms for 
<br>
sharing memory between processes, I think we have an argument for a 
<br>
full-blown &quot;shared pages&quot; framework as opposed to just a &quot;mpi_common_sm&quot; 
<br>
MCA parameter.  That brings all the  benefits like possibly &quot;failing 
<br>
over&quot; from one component to another (otherwise less desired) one if some 
<br>
limit is exceeded.  For instance, SysV could (for a given set of 
<br>
priorities) be used by default, but mmap-on-real-fs could be 
<br>
automatically selected when the requested/required size exceeds the 
<br>
shmmax value.
<br>
<p>As for why mmap is slower.  When the file is on a real (not tmpfs or 
<br>
other ramdisk) I am 95% certain that this is an artifact of the Linux 
<br>
swapper/pager behavior which is thinking it is being smart by &quot;swapping 
<br>
ahead&quot;.  Even when there is no memory pressure that requires swapping, 
<br>
Linux starts queuing swap I/O for pages to keep the number of &quot;clean&quot; 
<br>
pages up when possible. This results in pages of the shared memory file 
<br>
being written out to the actual block device.  Both the background I/O 
<br>
and the VM metadata updates contribute to the lost time.  I say 95% 
<br>
certain because I have a colleague who looked into this phenomena in 
<br>
another setting and I am recounting what he reported as clearly as I can 
<br>
remember, but might have misunderstood or inserted my own speculation by 
<br>
accident.  A sufficiently motivated investigator (not me) could probably 
<br>
devise an experiment to verify this.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8088.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8088.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8091.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8095.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
