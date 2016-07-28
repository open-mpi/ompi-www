<?
$subject_val = "Re: [OMPI users] Shared memory optimizations in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 10:47:04 2011" -->
<!-- isoreceived="20111122154704" -->
<!-- sent="Tue, 22 Nov 2011 10:46:58 -0500" -->
<!-- isosent="20111122154658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory optimizations in OMPI" -->
<!-- id="25260EB4-D529-4377-A9B9-F2B8C122565C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFQkOS4G_1g4jMACCK31C4+z=_Jm62CoDiqNQKhzMiN+rEBTgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared memory optimizations in OMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 10:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17813.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All the shared memory code is in the &quot;sm&quot; BTL (byte transfer layer) component: ompi/mca/btl/sm.  All the TCP MPI code is in the &quot;tcp&quot; BTL component: ompi/mca/btl/tcp.  Think of &quot;ob1&quot; as the MPI engine that is the bottom of MPI_SEND, MPI_RECV, and friends.  It takes a message to be sent, determines how many BTLs can be used to send it, fragments the message as appropriate, and chooses from one of several different protocols to actually send the message.  It then hands off the fragments of that message to the underlying BTLs to effect the actual transfer.
<br>
<p>So ob1 has no knowledge of shared memory of TCP directly -- it relies on the BTLs to say &quot;yes, I can reach peer X at priority Y&quot;.  For example, both TCP and sm will respond that they can reach a peer that is on the same server node.  But sm will have a higher priority, so it will get all the fragments destined for that process, and TCP will be ignored.
<br>
<p>Remember: all of this is setup during MPI_INIT.  During MPI_SEND (and friends), ob1 (and r2, the BML (BTL multiplexing layer)) is just looking up arrays of pointers and invoking function pointers that were previously setup.
<br>
<p>So you can look into ob1, but be aware that it's all done by function pointers and indirection.  
<br>
<p>Your best bet might well be to look at individual function names in the TCP and SM BTLs and set breakpoints on those.  The file ompi/mca/btl/btl.h provides descriptions of what each of the publicly exported functions from each of the BTL components do; this will give you information about what the functions in the TCP and SM BTLs are doing.
<br>
<p><p>On Nov 22, 2011, at 10:12 AM, Shamik Ganguly wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot Jeff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PIN is a dynamic binary instrumentation tool from Intel. It runs on top of the Binary in the MPI node. When its given function calls to instrument, it will insert trappings before/after that funtion call in the binary of the program you are instrumenting and you can insert your own functions. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am doing some memory address profiling on benchmarks running on MPI and I was using PIN to get the Load/Store addresses. Furthermore I needed to know which LD/ST were coming from actual socket communication and which are coming from shared memory optimizations. So i needed to know which functions/where exactly were they taking that decision so that I can instrument the appropriate MPI library function call (the actual low level function, not the API like MPI_Sends/Recvs) in PIN. Hence I guess I am actually zooming down to a 1000 ft view :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestion is welcome. I will go into the ob1 directory and try to hunt around to see how exactly its being done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shamik
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 22, 2011 at 10:08 AM, Shamik Ganguly &lt;shamik.ganguly_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thanks a lot Jeff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PIN is a dynamic binary instrumentation tool from Intel. It runs on top of the Binary in the MPI node. When its given function calls to instrument, it will insert trappings before/after that funtion call in the binary of the program you are instrumenting and you can insert your own functions. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am doing some memory address profiling on benchmarks running on MPI and I was using PIN to get the Load/Store addresses. Furthermore I needed to know which LD/ST were coming from actual socket communication and which are coming from shared memory optimizations. So i needed to know which functions/where exactly were they taking that decision so that I can instrument the appropriate MPI library function call (the actual low level function, not the API like MPI_Sends/Recvs) in PIN. Hence I guess I am actually zooming down to a 1000 ft view :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will go into the ob1 directory and try to hunt around to see how exactly its being done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shamik
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 22, 2011 at 9:04 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2011, at 1:09 AM, Shamik Ganguly wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I want to trace when the MPI  library prevents an MPI_Send from going to the socket and makes it access shared memory because the target node is on the same chip (CMP). I want to use PIN to trace this. Can you please give me some pointers about which functions are taking this decision so that I can instrument the appropriate library calls in PIN?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's PIN?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The decision is made in the ob1 PML plugin.  Way back during MPI_INIT, each MPI process creates lists of BTLs to use to contact each MPI process peer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When a process is on the same *node* (e.g., a single server) -- not just the same processor socket/chip -- the shared memory BTL is given preference to all other BTLs by use of a priority mechanism.  Hence, the &quot;sm&quot; BTL is put at the front of the BML lists (BML = BTL multiplexing layer -- it's essentially just list management for BTLs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Later, when MPI_SEND comes through, it uses the already-setup BML lists to determine which BTL(s) to use to send a message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's the 50,000 foot view.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Shamik Ganguly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Shamik Ganguly
</span><br>
<span class="quotelev1">&gt; 2nd year, MS (CSE-Hardware), University of Michigan, Ann Arbor
</span><br>
<span class="quotelev1">&gt; B.Tech.(E&amp;ECE), IITKGP (2008)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17813.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
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
