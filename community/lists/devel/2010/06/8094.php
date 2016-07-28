<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 10:59:57 2010" -->
<!-- isoreceived="20100610145957" -->
<!-- sent="Thu, 10 Jun 2010 08:59:52 -0600" -->
<!-- isosent="20100610145952" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="CBE38EAC-6353-407E-A421-D8846CC34BBE_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 10:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8095.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8093.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8088.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 10, 2010, at 1:47 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 9 Jun 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2010, at 3:26 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System V shared memory cleanup is a concern only if a process dies  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between shmat and shmctl IPC_RMID.  Shared memory segment cleanup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should happen automagically in most cases, including abnormal  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
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
<span class="quotelev2">&gt;&gt; Let's open the discussion of making sysv the default on systems  
</span><br>
<span class="quotelev2">&gt;&gt; that support the IPC_RMID behavior (which, AFAIK, is only Linux)...
</span><br>
<span class="quotelev1">&gt; I'm sorry, but I think System V has many disadvantages over mmap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. As discussed before, cleaning is not as easy as for a file. It is  
</span><br>
<span class="quotelev1">&gt; a good thing to remove the shm segment after creation, but since  
</span><br>
<span class="quotelev1">&gt; problems often happen during shmget/shmat, there's still a high risk  
</span><br>
<span class="quotelev1">&gt; of letting things behind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. There are limits in the kernel you need to grow (kernel.shmall,  
</span><br>
<span class="quotelev1">&gt; kernel.shmmax).
</span><br>
<p>I agree that this is a disadvantage, but changing shmall and shmmax  
<br>
limits is *only* as painful as having a system admin change a few  
<br>
settings (okay, it's painful ;-) ).
<br>
<p><span class="quotelev1">&gt; On most linux distribution, shmmax is 32MB, which does not permit  
</span><br>
<span class="quotelev1">&gt; the sysv mechanism to work. Mmapped files are unlimited.
</span><br>
<p>Not necessarily true.  If a user *really* wanted to use sysv and their  
<br>
system's shmmax limit was 32MB, they could just add -mca  
<br>
mpool_sm_min_size 33550000 and everything would work properly.  I do  
<br>
understand, however, that this may not be ideal and may have  
<br>
performance implications.
<br>
<p>Based on this, I'm leaning towards the default behavior that we  
<br>
currently have in the trunk:
<br>
<p>- sysv disabled by default
<br>
- use mmap, unless sysv is explicitly requested by the user
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Each shm segment is identified by a 32 bit integer. This  
</span><br>
<span class="quotelev1">&gt; namespace is small (and non-intuitive, as opposed to a file name),  
</span><br>
<span class="quotelev1">&gt; and the probability for a collision is not null, especially when you  
</span><br>
<span class="quotelev1">&gt; start creating multiple shared memory segments (for collectives, one- 
</span><br>
<span class="quotelev1">&gt; sided operations, ...).
</span><br>
<p>I'm not sure if collisions are a problem.  I'm using  
<br>
shmget(IPC_PRIVATE), so I'm guessing once I've asked for more than ~  
<br>
2^16 keys, things will fail.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I'm a bit reluctant to work with System V mechanisms again. I  
</span><br>
<span class="quotelev1">&gt; don't think there is a *real* reason for System V to be faster than  
</span><br>
<span class="quotelev1">&gt; mmap, since it should just be memory. I'd rather find out why mmap  
</span><br>
<span class="quotelev1">&gt; is slower.
</span><br>
<p>Jeff and I talked, and we are going to hack something together that  
<br>
uses shm_open and friends and incorporates more sophisticated fallback  
<br>
mechanisms if a particular component fails initialization.  Once we  
<br>
are done with that work, would you be willing to conduct another  
<br>
similar performance study that incorporates all sm mechanisms?
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
&gt;
&gt; Sylvain
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8094/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8095.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8093.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8088.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
