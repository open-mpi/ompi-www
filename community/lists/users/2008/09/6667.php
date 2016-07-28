<?
$subject_val = "Re: [OMPI users] conflict among differenv MPIs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 14:49:02 2008" -->
<!-- isoreceived="20080922184902" -->
<!-- sent="Mon, 22 Sep 2008 11:48:57 -0700 (PDT)" -->
<!-- isosent="20080922184857" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] conflict among differenv MPIs" -->
<!-- id="649110.39928.qm_at_web34804.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0D1C2629-8EBA-41C1-B905-77A2F4C3E58B_at_cisco.com" -->
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
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 14:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6668.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6668.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6668.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not using any of the files that exist in /usr/local/include, this doesn't even show on my PATH and my mpicc -show tells that the openmpi path is correct. I dont know what to do, I have contacted the technician to hide or delete /usr/local/include...Millions of thanks for ur replies and patience. I'll keep you updated!
<br>
<p>--- On Mon, 9/22/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] conflict among differenv MPIs
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, September 22, 2008, 11:28 AM
<br>
<p>On Sep 22, 2008, at 2:12 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; I am gonna kill myself :( i dont know what the problem is... I 'm  
</span><br>
<span class="quotelev1">&gt; gonna explain the details again, please bare me and help me :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok yes I used mpic++. Actually I checked mpicxx -show and the path  
</span><br>
<span class="quotelev1">&gt; were correct. let me describe my problem again.
</span><br>
<span class="quotelev1">&gt; When I run my code (after making sure that openmpi is installed  
</span><br>
<span class="quotelev1">&gt; correctly and all the env varibles are set properly), i get the  
</span><br>
<span class="quotelev1">&gt; following error which is when I make a call to the following function:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; int CommPhyMPI:: physicalGetSize() const {
</span><br>
<span class="quotelev1">&gt; int size ;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt; return size ;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt; The errors i get are the follwoing:
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; [DeepThought:31144] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [DeepThought:31144] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [DeepThought:31144] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [DeepThought:31144] Failing at address: 0xcf
</span><br>
<span class="quotelev1">&gt; [DeepThought:31144] [ 0] /lib/tls/libpthread.so.0 [0xc16f80]
</span><br>
<span class="quotelev1">&gt; [DeepThought:31144] [ 1] /nfs/sjafer/phd/openMPI/latest_cd+ 
</span><br>
<span class="quotelev1">&gt; +_timewarp/cd++(physicalGetId__C10CommPhyMPI+0x14) [0x8305880]
</span><br>
<p>This *likely* indicates that you are mixing MPI implementations.
<br>
<p><span class="quotelev1">&gt; So I thought that maybe my problem is that when I include
</span><br>
&quot;mpi.h&quot; in  
<br>
<span class="quotelev1">&gt; my source code, it picks the wrong one. So in my source code instead  
</span><br>
<span class="quotelev1">&gt; of just saying include &quot;mpi.h&quot; I put the path too, so it looks
</span><br>
like  
<br>
<span class="quotelev1">&gt; =&gt; &quot;include /opt/openmpi/1.2.7/include/mpi.h&quot;, and now when I
</span><br>
run my  
<br>
<span class="quotelev1">&gt; code aftre this change, aside from errors which I will paste below,  
</span><br>
<span class="quotelev1">&gt; i get a warning that shows mpi.h in mpicxx.h is the wrong one from  
</span><br>
<span class="quotelev1">&gt; usr/local/include and not from /opt/openmpi/...
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; In file included from /usr/local/include/mpidefs.h:49,
</span><br>
<p>What is /usr/local/include/mpidefs.h?  Is that part of your application?
<br>
<p><span class="quotelev1">&gt; from /usr/local/include/mpi.h:230,
</span><br>
<p>This definitely indicates that you're including the wrong file.
<br>
<p>I don't know what the exact cause of your problem is, but it seems  
<br>
like you are somehow mixing multiple mpi.h files together.  This can  
<br>
definitely lead to segv's at run time.
<br>
<p>As I think I indicated before, I think your best solution is likely to  
<br>
uninstall MPICH from /usr/local and install it somewhere else (e.g., / 
<br>
opt/mpich).  Then the compiler won't automatically pick up header  
<br>
files from MPICH (it shouldn't do that anyway, but there seems to be  
<br>
some confusion on your system, so who knows?).
<br>
<p>You should probably get your local system administrator involved; they  
<br>
can actually see exactly what is happening on your system, diagnose  
<br>
the default compiler include paths, etc.  But I'd try moving the MPICH  
<br>
install first.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
      
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6667/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6668.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6666.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6668.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6668.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
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
