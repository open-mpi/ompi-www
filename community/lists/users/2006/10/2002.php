<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 12:37:50 2006" -->
<!-- isoreceived="20061018163750" -->
<!-- sent="Wed, 18 Oct 2006 08:37:39 -0800" -->
<!-- isosent="20061018163739" -->
<!-- name="Dan Cardin" -->
<!-- email="dcardin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world" -->
<!-- id="1161189459.6775.7.camel_at_hermes" -->
<!-- inreplyto="E382691C-8320-4156-B151-BA7D42C96893_at_open-mpi.org" -->
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
<strong>From:</strong> Dan Cardin (<em>dcardin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 12:37:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2003.php">Lydia Heck: "[OMPI users] job fails to terminate"</a>
<li><strong>Previous message:</strong> <a href="2001.php">Lydia Heck: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>In reply to:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Reply:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found my problem. I installed my openmpi onto an nfs share that
<br>
resides on another machine. If I login to the machine where the nfs
<br>
share is physically I can compile and run the hello world. 
<br>
<p>This is my first cluster build. Does anyone have a suggestion how I can
<br>
keeps this on a nfs share and make it work? Thank you 
<br>
<p>Mac os x 10.3 cluster
<br>
<p>-dan
<br>
<p>On Tue, 2006-10-17 at 22:15 -0600, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Oct 17, 2006, at 6:41 PM, Dan Cardin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello all, I have installed openmpi on a small apple panther cluster.
</span><br>
<span class="quotelev2">&gt; &gt; The install went smoothly but when I compile a program with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpicc helloworld.c -o hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No files or message are ever generated. Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of Open MPI are you using?  Also, what is the output of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpicc -showme
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2003.php">Lydia Heck: "[OMPI users] job fails to terminate"</a>
<li><strong>Previous message:</strong> <a href="2001.php">Lydia Heck: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>In reply to:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Reply:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
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
