<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 07:57:56 2009" -->
<!-- isoreceived="20090428115756" -->
<!-- sent="Tue, 28 Apr 2009 07:57:50 -0400" -->
<!-- isosent="20090428115750" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="196322D8-B9AE-43F7-A964-5DFC60E7DD2F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3F808113-5EA7-4624-89C4-D36F46D6B07F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 07:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9113.php">Sergiy Khan: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9113.php">Sergiy Khan: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9113.php">Sergiy Khan: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 28, 2009, at 7:50 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'd be fascinated to understand how this works. There are multiple
</span><br>
<span class="quotelev1">&gt; function calls in MPI_Init, for example, that simply don't exist in
</span><br>
<span class="quotelev1">&gt; 1.3.x. There are references to fields in structures that are no longer
</span><br>
<span class="quotelev1">&gt; present, though the structure itself does still exist. Etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It should be ok (from this perspective, at least -- I think it'll  
<br>
crater due to other reasons) -- he has two separate installs of OMPI:
<br>
<p>/opt/ompi-1.2
<br>
/opt/ompi-1.3
<br>
<p>He builds his app with /opt/ompi-1.2/bin/mpicc.
<br>
<p>But then he sets his LD_LIBRARY_PATH to /opt/ompi-1.3/lib/ and runs  
<br>
his app with /opt/ompi-1.3/bin/mpirun.  This means his app will run- 
<br>
time link against /opt/ompi-1.3/lib/libmpi.so.  That libmpi.so has an  
<br>
explicit linker dependency on the /opt/ompi-1.3/lib/libopen-rte.so,  
<br>
which then depends on /opt/ompi-1.3/lib/libopen-pal.so.
<br>
<p>Hence, he's pulling in the libopen-rte.so and libopen-pal that  
<br>
correspond with the libmpi.so that he's linking against.  So at least  
<br>
he'll get internal consistency there.
<br>
<p>As I mentioned before, I think it'll fail for other reasons :-), but I  
<br>
*think* it should pick up a consistent set of libmpi.so, libopen- 
<br>
rte.so, and libopen-pal.so...
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
<li><strong>Next message:</strong> <a href="9113.php">Sergiy Khan: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9113.php">Sergiy Khan: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9113.php">Sergiy Khan: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
