<?
$subject_val = "Re: [OMPI users] Proper way to stop MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  3 11:26:14 2011" -->
<!-- isoreceived="20111003152614" -->
<!-- sent="Mon, 3 Oct 2011 11:26:05 -0400" -->
<!-- isosent="20111003152605" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Proper way to stop MPI process" -->
<!-- id="4E0D21D0-A7C9-4371-B5AF-8C1554AF78C4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALKntY33pjGyaTuas86ANQPRy-iWEW8dKiLCzazgn9+pstxPuA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Proper way to stop MPI process<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-03 11:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17493.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17491.php">Dmitry N. Mikushin: "Re: [OMPI users] [SOLVED] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>In reply to:</strong> <a href="17488.php">Xin Tong: "Re: [OMPI users] Proper way to stop MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17520.php">Reuti: "Re: [OMPI users] Proper way to stop MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to double check this -- mpirun shouldn't be waiting on you hitting return.  Check to make sure you don't just have line-buffered output in python, or somesuch.  Or better yet, check from python that the PID has actually disappeared and don't rely on stdout, or something like that.
<br>
<p><p>On Oct 2, 2011, at 8:35 AM, Xin Tong wrote:
<br>
<p><span class="quotelev1">&gt; I am using 1.4.3. I send the sigterm from a python script. Then I wait, the processes do not terminate until i keep pressing enter on the keyboard. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Xin 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 30, 2011 at 10:10 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Sigterm should work - what version are you using?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2011, at 1:40 PM, Xin Tong &lt;xerox.time.tech_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering what the proper way of stop a mpirun process and the child process it created. I tried to send SIGTERM,  it does not respond to it ? What kind of signal should I be sending to it ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Xin
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17493.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17491.php">Dmitry N. Mikushin: "Re: [OMPI users] [SOLVED] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>In reply to:</strong> <a href="17488.php">Xin Tong: "Re: [OMPI users] Proper way to stop MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17520.php">Reuti: "Re: [OMPI users] Proper way to stop MPI process"</a>
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
