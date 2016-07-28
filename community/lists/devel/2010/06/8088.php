<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 03:43:22 2010" -->
<!-- isoreceived="20100610074322" -->
<!-- sent="Thu, 10 Jun 2010 09:47:50 +0200 (CEST)" -->
<!-- isosent="20100610074750" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="alpine.DEB.2.00.1006100929350.3820_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3FEBC6E7-8E9D-4F44-A5A5-D6DF95EE9A84_at_cisco.com" -->
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
<strong>Date:</strong> 2010-06-10 03:47:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8087.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8085.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8094.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 9 Jun 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 9, 2010, at 3:26 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; System V shared memory cleanup is a concern only if a process dies in
</span><br>
<span class="quotelev2">&gt;&gt; between shmat and shmctl IPC_RMID.  Shared memory segment cleanup
</span><br>
<span class="quotelev2">&gt;&gt; should happen automagically in most cases, including abnormal process
</span><br>
<span class="quotelev2">&gt;&gt; termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Umm... right.  Duh.  I knew that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So -- we're good!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's open the discussion of making sysv the default on systems that support the IPC_RMID behavior (which, AFAIK, is only Linux)...
</span><br>
I'm sorry, but I think System V has many disadvantages over mmap.
<br>
<p>1. As discussed before, cleaning is not as easy as for a file. It is a 
<br>
good thing to remove the shm segment after creation, but since problems 
<br>
often happen during shmget/shmat, there's still a high risk of letting 
<br>
things behind.
<br>
<p>2. There are limits in the kernel you need to grow (kernel.shmall, 
<br>
kernel.shmmax). On most linux distribution, shmmax is 32MB, which does 
<br>
not permit the sysv mechanism to work. Mmapped files are unlimited.
<br>
<p>3. Each shm segment is identified by a 32 bit integer. This namespace is 
<br>
small (and non-intuitive, as opposed to a file name), and the probability 
<br>
for a collision is not null, especially when you start creating multiple 
<br>
shared memory segments (for collectives, one-sided operations, ...).
<br>
<p>So, I'm a bit reluctant to work with System V mechanisms again. I don't 
<br>
think there is a *real* reason for System V to be faster than mmap, since 
<br>
it should just be memory. I'd rather find out why mmap is slower.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8087.php">Paul H. Hargrove: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8085.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8089.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8094.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
