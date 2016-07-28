<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 19:47:53 2007" -->
<!-- isoreceived="20070518234753" -->
<!-- sent="Fri, 18 May 2007 16:47:21 -0700" -->
<!-- isosent="20070518234721" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not execute a simple command with openmpi" -->
<!-- id="31EE4671-F047-404C-AAA9-54F4DB76DC61_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="28bb77d30705181638u99bf08ck8360fc7a028dec42_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 19:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3296.php">Steven Truong: "[OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3296.php">Steven Truong: "[OMPI users] Can not execute a simple command with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Reply:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2007, at 4:38 PM, Steven Truong wrote:
<br>
<p><span class="quotelev1">&gt; [struong_at_neptune 4cpu4npar10nsim]$  mpirun --mca btl tcp,self -np 1
</span><br>
<span class="quotelev1">&gt; --host node07 hostname
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<p>As you noted later in your mail, this is the key problem: orted is  
<br>
not found on the remote node.
<br>
<p>Notice that you are currently using the rsh launcher, not the Torque  
<br>
launcher (presumably because you are not inside a Torque job).  What  
<br>
you want to check is:
<br>
<p>rsh node07 which orted
<br>
<p>(or use ssh -- whatever is correct for your cluster)
<br>
<p>I suspect that orted will not be found, and that you'll need to  
<br>
modify your shell startup files to set PATH / LD_LIBRARY_PATH  
<br>
properly.  Note that some shell startup files will exit early if they  
<br>
detect that they are running on a non-interactive login.  See http:// 
<br>
www.open-mpi.org/faq/?category=running#adding-ompi-to-path for more  
<br>
details.
<br>
<p>Alternatively, you can simply use the absolute pathname to mpirun,  
<br>
which Open MPI will interpret to mean that you want OMPI to set the  
<br>
PATH/LD_LIBRARY_PATH on the remote node for you.  Something like this:
<br>
<p>/usr/local/openmpi-1.2.1/bin/mpirun --host node07 hostname
<br>
<p>(note that the &quot;btl&quot; MCA parameter is only relevant for MPI executables)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3296.php">Steven Truong: "[OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3296.php">Steven Truong: "[OMPI users] Can not execute a simple command with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Reply:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
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
