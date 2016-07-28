<?
$subject_val = "Re: [OMPI users] Memory corruption?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 09:19:11 2010" -->
<!-- isoreceived="20100108141911" -->
<!-- sent="Fri, 8 Jan 2010 15:20:25 +0100" -->
<!-- isosent="20100108142025" -->
<!-- name="Roy Dragseth" -->
<!-- email="roy.dragseth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory corruption?" -->
<!-- id="201001081520.25946.roy.dragseth_at_uit.no" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200912221310.03942.roy.dragseth_at_uit.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory corruption?<br>
<strong>From:</strong> Roy Dragseth (<em>roy.dragseth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 09:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11722.php">Dong Li: "[OMPI users] problem with progress thread and orte"</a>
<li><strong>Previous message:</strong> <a href="11720.php">Jeff Squyres: "[OMPI users] [PMX:VIRUS] Sophos virus"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11627.php">Roy Dragseth: "[OMPI users] Memory corruption?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have started to scale up one of our codes and sometimes we get messages
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [c9-13.local:31125] Memory 0x2aaab7b64000:217088 cannot be freed from
</span><br>
<span class="quotelev1">&gt; the registration cache. Possible memory corruption.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems like the application runs normally and it does not crash becaus of
</span><br>
<span class="quotelev1">&gt; this.  Should we be worried?  We have tested the code with up to 1700 cores
</span><br>
<span class="quotelev1">&gt; and the message becomes more frequent as we scale up.
</span><br>
<p>Nevermind, this turned out to be an application bug.  A buffer was freed before 
<br>
Isend completed.
<br>
<p>r.
<br>
<p><p><pre>
-- 
  The Computer Center, University of Troms&#248;, N-9037 TROMS&#216; Norway.
	      phone:+47 77 64 41 07, fax:+47 77 64 41 00
        Roy Dragseth, Team Leader, High Performance Computing
	 Direct call: +47 77 64 62 56. email: roy.dragseth_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11722.php">Dong Li: "[OMPI users] problem with progress thread and orte"</a>
<li><strong>Previous message:</strong> <a href="11720.php">Jeff Squyres: "[OMPI users] [PMX:VIRUS] Sophos virus"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11627.php">Roy Dragseth: "[OMPI users] Memory corruption?"</a>
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
