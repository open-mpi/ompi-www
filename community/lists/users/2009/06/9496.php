<?
$subject_val = "[OMPI users] Spawn and OpenFabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 11:38:00 2009" -->
<!-- isoreceived="20090602153800" -->
<!-- sent="Tue, 02 Jun 2009 11:37:53 -0400" -->
<!-- isosent="20090602153753" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="[OMPI users] Spawn and OpenFabrics" -->
<!-- id="1243957073.3239.39.camel_at_alpaca.lan" -->
<!-- inreplyto="6FDB9035-F698-4AF6-A5B2-06E7E52BC259_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] Spawn and OpenFabrics<br>
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 11:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9495.php">Jeff Squyres: "Re: [OMPI users] Fedora install problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Reply:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-05-19 at 08:29 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; fork() support in OpenFabrics has always been dicey -- it can lead to  
</span><br>
<span class="quotelev1">&gt; random behavior like this.  Supposedly it works in a specific set of  
</span><br>
<span class="quotelev1">&gt; circumstances, but I don't have a recent enough kernel on my machines  
</span><br>
<span class="quotelev1">&gt; to test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's best not to use calls to system() if they can be avoided.   
</span><br>
<span class="quotelev1">&gt; Indeed, Open MPI v1.3.x will warn you if you create a child process  
</span><br>
<span class="quotelev1">&gt; after MPI_INIT when using OpenFabrics networks.
</span><br>
<p>My C++ OMPI program uses system() to invoke an external mesh partitioner
<br>
program after MPI_INIT is called. Sometimes (with frustrating
<br>
randomness), on systems using OFED the system() call fails with EFAULT
<br>
(Bad address). The linux kernel appears to feel that the execve()
<br>
function is being passed a string which isn't in the process' address
<br>
space. The exec string is constructed immediately before calling
<br>
system() like this:
<br>
<p>std::stringstream ss;
<br>
ss &lt;&lt; &quot;partitioner_program &quot; &lt;&lt; COMM_WORLD_SIZE;
<br>
system( ss.str().c_str() );
<br>
<p>Could this behavior related to this admonition?
<br>
<p>Also, would MPI_COMM_SPAWN suffer from the same difficulties?
<br>
<p>Thanks,
<br>
Allen
<br>
<p><pre>
-- 
Allen Barnett
E-Mail: allen_at_[hidden]
Skype:  allenbarnett
Ph:     518-887-2930
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9495.php">Jeff Squyres: "Re: [OMPI users] Fedora install problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Reply:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
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
