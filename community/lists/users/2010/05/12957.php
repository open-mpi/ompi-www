<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 02:18:09 2010" -->
<!-- isoreceived="20100507061809" -->
<!-- sent="Thu, 06 May 2010 23:18:00 -0700" -->
<!-- isosent="20100507061800" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="4BE3B098.4090308_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="g2u9f8092cc1005062230g26fee76ek19f5426a434d4921_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 02:18:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12958.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Previous message:</strong> <a href="12956.php">Tim Prince: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12985.php">Terry Frankcombe: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12985.php">Terry Frankcombe: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/6/2010 10:30 PM, John Hearns wrote:
<br>
<span class="quotelev1">&gt; On 7 May 2010 03:17, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; Indeed.  I have seen some people have HT enabled in the bios just so that they can have the software option of turning them off via linux -- then you can run with HT and without it and see what it does to your specific codes.
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; I may have missed this on the thread, but how do you do that?
</span><br>
<span class="quotelev1">&gt; The Nehalem systems I have came delivered with HT enabled in the BIOS
</span><br>
<span class="quotelev1">&gt; - I know it is not a real pain to reboot and configure, but it would
</span><br>
<span class="quotelev1">&gt; be a lot easir to leave it on and switch off in software - also if you
</span><br>
<span class="quotelev1">&gt; wanted to do back-to-back testing of performance with/without HT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;    
</span><br>
I don't know what Jeff meant by that, but we haven't seen a feasible way 
<br>
of disabling HT without rebooting and using the BIOS options.  It is 
<br>
feasible to place 1 MPI process or thread per core.  With careful 
<br>
affinity, performance when using 1 logical per core normally is 
<br>
practically the same as with HT disabled.
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12958.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Previous message:</strong> <a href="12956.php">Tim Prince: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12985.php">Terry Frankcombe: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12985.php">Terry Frankcombe: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
