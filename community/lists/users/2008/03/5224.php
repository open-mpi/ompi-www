<?
$subject_val = "Re: [OMPI users] SIGSEGV error.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 07:19:02 2008" -->
<!-- isoreceived="20080318111902" -->
<!-- sent="Tue, 18 Mar 2008 07:18:52 -0400" -->
<!-- isosent="20080318111852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV error." -->
<!-- id="872223CB-2CB8-4F9D-8129-EAEDAC547404_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080318021651.28249.qmail_at_f4mail-235-135.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGSEGV error.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 07:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5225.php">Giovani Faccin: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>Previous message:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5221.php">balaji srinivas: "[OMPI users] SIGSEGV error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5225.php">Giovani Faccin: "Re: [OMPI users] SIGSEGV error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 17, 2008, at 10:16 PM, balaji srinivas wrote:
<br>
<p><span class="quotelev1">&gt; I am new to MPI. The outline of my code is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(r==0)
</span><br>
<span class="quotelev1">&gt; function1()
</span><br>
<span class="quotelev1">&gt; else if(r==1)
</span><br>
<span class="quotelev1">&gt; function2()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where r is the rank and functions are included in the .h files.  
</span><br>
<span class="quotelev1">&gt; There are no compilation errors. I get the SIGSEGV error while  
</span><br>
<span class="quotelev1">&gt; running.
</span><br>
<span class="quotelev1">&gt; Pls help. how to solve this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&nbsp;From your description, it is impossible to tell if this is an MPI  
<br>
issue or not.  You should probably use standard debugging techniques,  
<br>
such as using a debugger, examining core files, etc.  See <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a> 
<br>
&nbsp;&nbsp;if you need some suggestions for debugging in parallel.
<br>
<p><span class="quotelev1">&gt; 2) how to find the execution time of a mpi program. in C we have
</span><br>
<span class="quotelev1">&gt; clock_t start=clock() at the beginning and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ((double)clock() - start) / CLOCKS_PER_SEC) at the end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I don't quite understand your question -- is your use of clock()  
<br>
reporting incorrect wall clock times?
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
<li><strong>Next message:</strong> <a href="5225.php">Giovani Faccin: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>Previous message:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5221.php">balaji srinivas: "[OMPI users] SIGSEGV error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5225.php">Giovani Faccin: "Re: [OMPI users] SIGSEGV error."</a>
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
