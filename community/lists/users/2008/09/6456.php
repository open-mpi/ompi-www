<?
$subject_val = "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 10:00:31 2008" -->
<!-- isoreceived="20080902140031" -->
<!-- sent="Tue, 02 Sep 2008 10:00:20 -0400" -->
<!-- isosent="20080902140020" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7" -->
<!-- id="48BD46F4.6090007_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3007E301-36E7-4BEA-AE91-F5F82FE748BA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-02 10:00:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6457.php">Vincent Rotival: "[OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6455.php">Brock Palen: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6450.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6449.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/29/08 19:27, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 29, 2008, at 10:48 AM, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the file mpicxx.cc there is a declaration near the bottom that 
</span><br>
<span class="quotelev2">&gt;&gt; looks like this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; const int LOCK_SHARED = MPI_LOCK_SHARED;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The preprocessor is going through that file and replacing LOCK_SHARED 
</span><br>
<span class="quotelev2">&gt;&gt; with 0x01.  Then when it tries to compile it you are trying to compile 
</span><br>
<span class="quotelev2">&gt;&gt; a line that looks like this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; const int 0x01 = 2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is why you see the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  This hasn't changed in mpicxx.cc for a long time.  What made it 
</span><br>
<span class="quotelev1">&gt; get activated now?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I think I touched upon this in my earlier post.  There was a change in 
<br>
/usr/include/sys/synch.h Solaris header file. And one of the changes was 
<br>
adding the following line.
<br>
<p>#define	LOCK_SHARED	0x01		/* same as USYNC_PROCESS */
<br>
<p>Therefore, we are seeing it on later versions of Solaris.
<br>
<p>Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6457.php">Vincent Rotival: "[OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6455.php">Brock Palen: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6450.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6449.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
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
