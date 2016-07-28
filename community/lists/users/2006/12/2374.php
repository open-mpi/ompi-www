<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec 16 00:15:16 2006" -->
<!-- isoreceived="20061216051516" -->
<!-- sent="Fri, 15 Dec 2006 19:22:55 -0500" -->
<!-- isosent="20061216002255" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can OpenMPI be used with R?" -->
<!-- id="A544A95A-1823-427F-ACBA-1C21DCFE0990_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.63.0612112155440.14890_at_lancaster.engin.umich.edu" -->
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
<strong>Date:</strong> 2006-12-15 19:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2375.php">Jeff Squyres: "Re: [OMPI users] Relocating an Installation"</a>
<li><strong>Previous message:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier Error?"</a>
<li><strong>In reply to:</strong> <a href="2346.php">Andrew J Caird: "Re: [OMPI users] Can OpenMPI be used with R?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if anyone in the current OMPI team has any experience  
<br>
with R (I don't).  Most of the &quot;new language bindings for MPI&quot;  
<br>
packages are implemented as simple wrappers around the C bindings.
<br>
<p>If that is the case with the RMPI package, in principle, it should  
<br>
work fine with Open MPI.  That being said, I don't know how RMPI's  
<br>
configure/build system works.  It may need to be adapted to compile/ 
<br>
link against Open MPI properly.  But then again, if RMPI works with  
<br>
LAM, it may work out of the box with Open MPI (many of LAM's external  
<br>
user UI aspects were derived from LAM).  Specifically, if RMPI  
<br>
compiles with the MPI wrapper compilers (mpicc and friends) and uses  
<br>
proper types for MPI handles (i.e., does not assume that they are  
<br>
integers), it may &quot;just work&quot; with Open MPI.
<br>
<p>But I also agree with the statement that getting the RMPI author  
<br>
involved is a good idea.
<br>
<p><p><p>On Dec 11, 2006, at 9:58 PM, Andrew J Caird wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked into this a few months back, although we have had OK
</span><br>
<span class="quotelev1">&gt; luck using LAM with R/MPI.  I emailed the author of R/MPI, Dr.
</span><br>
<span class="quotelev1">&gt; Hao Yu and his answer was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 25 Sep 2006 21:57:40 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Hao Yu &lt;hyu_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Caird, Andrew J&quot; &lt;acaird_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: Rmpi and OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Andy,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for my slow response to your message. So far I did not
</span><br>
<span class="quotelev2">&gt;&gt; have a chance to look at OpenMPI yet. Will MPICH also move to
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI? If OpenMPI is the way to go, I will find time to
</span><br>
<span class="quotelev2">&gt;&gt; investigate it and port Rmpi to work with OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hao
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps if you mentioned it to him another vote from the
</span><br>
<span class="quotelev1">&gt; community would justify him spending his time on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps; good luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 11 Dec 2006, A Lenzo wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a user of R and have been having trouble with LAM/MPI.  I
</span><br>
<span class="quotelev2">&gt;&gt; am curious as to whether OpenMPI would be a good option for me
</span><br>
<span class="quotelev2">&gt;&gt; to try instead. However, I am unsure as to whether OpenMPI and
</span><br>
<span class="quotelev2">&gt;&gt; R can be used together.  Can someone tell me whether OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; can be used with R or not?  If so, could someone please direct
</span><br>
<span class="quotelev2">&gt;&gt; me to the place where I could download the corresponding R
</span><br>
<span class="quotelev2">&gt;&gt; package?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; A Lenzo
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2375.php">Jeff Squyres: "Re: [OMPI users] Relocating an Installation"</a>
<li><strong>Previous message:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier Error?"</a>
<li><strong>In reply to:</strong> <a href="2346.php">Andrew J Caird: "Re: [OMPI users] Can OpenMPI be used with R?"</a>
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
