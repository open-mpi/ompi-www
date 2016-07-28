<?
$subject_val = "Re: [OMPI users] conflict among differenv MPIs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 15:31:50 2008" -->
<!-- isoreceived="20080922193150" -->
<!-- sent="Mon, 22 Sep 2008 15:31:34 -0400" -->
<!-- isosent="20080922193134" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] conflict among differenv MPIs" -->
<!-- id="E84E84F2-0C6C-4BD2-B476-A101F1385E27_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="649110.39928.qm_at_web34804.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] conflict among differenv MPIs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 15:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6669.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Previous message:</strong> <a href="6667.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6667.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2008, at 2:48 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; I am not using any of the files that exist in /usr/local/include,  
</span><br>
<span class="quotelev1">&gt; this doesn't even show on my PATH and my mpicc -show tells that the  
</span><br>
<span class="quotelev1">&gt; openmpi path is correct.
</span><br>
<p>/usr/local/include is likely a default include path from the  
<br>
compiler.  So even if you don't reference it directly, the compiler  
<br>
may still be using files from there.  It *shouldn't*, if the same file  
<br>
exists in /opt/openmpi*/include and /usr/local/include/*, but there  
<br>
seems to be some confusion on your machine.
<br>
<p>Note that include directories have nothing to do with your PATH.
<br>
<p><span class="quotelev1">&gt; I dont know what to do, I have contacted the technician to hide or  
</span><br>
<span class="quotelev1">&gt; delete /usr/local/include...Millions of thanks for ur replies and  
</span><br>
<span class="quotelev1">&gt; patience. I'll keep you updated!
</span><br>
<p>Don't just move or hide /usr/local/include -- that will likely break  
<br>
things.  Just uninstall MPICH from /usr/local and re-install it  
<br>
somewhere else.
<br>
<p>Good luck.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Mon, 9/22/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] conflict among differenv MPIs
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, September 22, 2008, 11:28 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 2:12 PM, Shafagh Jafer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am gonna kill myself :( i dont know what the problem is... I 'm
</span><br>
<span class="quotelev2">&gt; &gt; gonna explain the details again, please bare me and help me :(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok yes I used mpic++. Actually I checked mpicxx -show and the path
</span><br>
<span class="quotelev2">&gt; &gt; were correct. let me describe my problem again.
</span><br>
<span class="quotelev2">&gt; &gt; When I run my code (after making sure that openmpi is installed
</span><br>
<span class="quotelev2">&gt; &gt; correctly and all the env varibles are set properly), i get the
</span><br>
<span class="quotelev2">&gt; &gt; following error which is when I make a call to the following  
</span><br>
<span class="quotelev1">&gt; function:
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; int CommPhyMPI:: physicalGetSize() const {
</span><br>
<span class="quotelev2">&gt; &gt; int size ;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev2">&gt; &gt; return size ;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; The errors i get are the follwoing:
</span><br>
<span class="quotelev2">&gt; &gt; =====================
</span><br>
<span class="quotelev2">&gt; &gt; [DeepThought:31144] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [DeepThought:31144] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [DeepThought:31144] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [DeepThought:31144] Failing at address: 0xcf
</span><br>
<span class="quotelev2">&gt; &gt; [DeepThought:31144] [ 0] /lib/tls/libpthread.so.0 [0xc16f80]
</span><br>
<span class="quotelev2">&gt; &gt; [DeepThought:31144] [ 1] /nfs/sjafer/phd/openMPI/latest_cd+
</span><br>
<span class="quotelev2">&gt; &gt; +_timewarp/cd++(physicalGetId__C10CommPhyMPI+0x14) [0x8305880]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This *likely* indicates that you are mixing MPI implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I thought that maybe my problem is that when I include
</span><br>
<span class="quotelev1">&gt; &quot;mpi.h&quot; in
</span><br>
<span class="quotelev2">&gt; &gt; my source code, it picks the wrong one. So in my source code instead
</span><br>
<span class="quotelev2">&gt; &gt; of just saying include &quot;mpi.h&quot; I put the path too, so it looks
</span><br>
<span class="quotelev1">&gt; like
</span><br>
<span class="quotelev2">&gt; &gt; =&gt; &quot;include /opt/openmpi/1.2.7/include/mpi.h&quot;, and now when I
</span><br>
<span class="quotelev1">&gt; run my
</span><br>
<span class="quotelev2">&gt; &gt; code aftre this change, aside from errors which I will paste below,
</span><br>
<span class="quotelev2">&gt; &gt; i get a warning that shows mpi.h in mpicxx.h is the wrong one from
</span><br>
<span class="quotelev2">&gt; &gt; usr/local/include and not from /opt/openmpi/...
</span><br>
<span class="quotelev2">&gt; &gt; ------------------
</span><br>
<span class="quotelev2">&gt; &gt; In file included from /usr/local/include/mpidefs.h:49,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is /usr/local/include/mpidefs.h?  Is that part of your  
</span><br>
<span class="quotelev1">&gt; application?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; from /usr/local/include/mpi.h:230,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This definitely indicates that you're including the wrong file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what the exact cause of your problem is, but it seems
</span><br>
<span class="quotelev1">&gt; like you are somehow mixing multiple mpi.h files together.  This can
</span><br>
<span class="quotelev1">&gt; definitely lead to segv's at run time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I think I indicated before, I think your best solution is likely to
</span><br>
<span class="quotelev1">&gt; uninstall MPICH from /usr/local and install it somewhere else (e.g., /
</span><br>
<span class="quotelev1">&gt; opt/mpich).  Then the compiler won't automatically pick up header
</span><br>
<span class="quotelev1">&gt; files from MPICH (it shouldn't do that anyway, but there seems to be
</span><br>
<span class="quotelev1">&gt; some confusion on your system, so who knows?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should probably get your local system administrator involved; they
</span><br>
<span class="quotelev1">&gt; can actually see exactly what is happening on your system, diagnose
</span><br>
<span class="quotelev1">&gt; the default compiler include paths, etc.  But I'd try moving the MPICH
</span><br>
<span class="quotelev1">&gt; install first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6669.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Previous message:</strong> <a href="6667.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6667.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
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
