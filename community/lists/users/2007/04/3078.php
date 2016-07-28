<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 17 09:45:25 2007" -->
<!-- isoreceived="20070417134525" -->
<!-- sent="Tue, 17 Apr 2007 09:45:05 -0400" -->
<!-- isosent="20070417134505" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with system call -- openib error on SNL tbird" -->
<!-- id="8E7AA5B4-486D-4D8C-8DDF-89067A55A546_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F1A65DC9F3C9404DA4B6808E58A56CD004BEFFC9_at_ES22SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2007-04-17 09:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3079.php">Michael: "[OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>Previous message:</strong> <a href="3077.php">Adams, Brian M: "[OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<li><strong>In reply to:</strong> <a href="3077.php">Adams, Brian M: "[OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2007, at 6:48 PM, Adams, Brian M wrote:
<br>
<p><span class="quotelev1">&gt; I am attempting to port Sandia's DAKOTA code from MVAPICH to the  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; OpenMPI/Intel environment on Sandia's thunderbird cluster.  I can
</span><br>
<span class="quotelev1">&gt; successfully build DAKOTA in the default tbird software  
</span><br>
<span class="quotelev1">&gt; environment, but
</span><br>
<span class="quotelev1">&gt; I'm having runtime problems when DAKOTA attempts to make a system  
</span><br>
<span class="quotelev1">&gt; call.
</span><br>
<span class="quotelev1">&gt; Typical output looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:897:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; from an64 to: an64 error polling HP CQ with status LOCAL LENGTH ERROR
</span><br>
<span class="quotelev1">&gt; status number 1 for wr_id 5714048 opcode 0
</span><br>
<p>Unfortunately, making calls to system() or fork() will fail when  
<br>
using the OFED 1.1 stack (such as on thunderbird).  The fun part is  
<br>
that the failure is not immediate; calling fork() or system() will  
<br>
cause odd/interesting errors later in your program (such as what you  
<br>
described above).
<br>
<p>The only way around this is to call fork()/system() before the call  
<br>
to MPI_INIT or after the call to MPI_FINALIZE.
<br>
<p>The OFED 1.2 stack has proper support for fork()/system(), but I  
<br>
don't know what tbird's plans are for upgrading (I doubt it has been  
<br>
discussed yet since OFED 1.2 is still going through its release  
<br>
process -- it's not final yet).
<br>
<p><span class="quotelev1">&gt; Note:  Both programs run fine with MVAPICH on tbird,
</span><br>
<p>This is probably luck; I wouldn't count on it happening reliably.
<br>
<p><span class="quotelev1">&gt; and with OpenMPI or
</span><br>
<span class="quotelev1">&gt; MPICH on my Linux x86_64 SMP workstation.
</span><br>
<p>There are many environments where fork() and system() work fine  
<br>
(e.g., when only using tcp and shared memory), but the OFED 1.1 stack  
<br>
is unfortunately not one of them.
<br>
<p>I wish I had a better answer for you, but I don't.  Sorry!
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
<li><strong>Next message:</strong> <a href="3079.php">Michael: "[OMPI users] OpenMPI 1.1.4 vs. 1.2"</a>
<li><strong>Previous message:</strong> <a href="3077.php">Adams, Brian M: "[OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
<li><strong>In reply to:</strong> <a href="3077.php">Adams, Brian M: "[OMPI users] OpenMPI with system call -- openib error on SNL tbird"</a>
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
