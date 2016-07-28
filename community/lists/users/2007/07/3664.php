<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 10:29:08 2007" -->
<!-- isoreceived="20070712142908" -->
<!-- sent="Thu, 12 Jul 2007 10:28:43 -0400" -->
<!-- isosent="20070712142843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] read send buffer before a send operation completes" -->
<!-- id="B47BA4AC-C212-42FB-BCEE-D59199CE19CE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d2bbffd00707112207u4c4a515bubf081f693dcb8170_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-12 10:28:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3665.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3663.php">Shiqing Fan: "Re: [OMPI users] Windows Build"</a>
<li><strong>In reply to:</strong> <a href="3661.php">Isaac Huang: "[OMPI users] read send buffer before a send operation completes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At the moment, I believe that this should be safe in Open MPI (read a  
<br>
buffer that is currently being sent).  No claims about the future,  
<br>
though.  :-)
<br>
<p><p>On Jul 12, 2007, at 1:07 AM, Isaac Huang wrote:
<br>
<p><span class="quotelev1">&gt; It's prohibited by the standard to read send buffer before a send
</span><br>
<span class="quotelev1">&gt; operation completes, and I understand the theoretical rationale behind
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently layering a protocol stack on top of MPI, and this
</span><br>
<span class="quotelev1">&gt; protocol allows a buffer to be read by multiple peers concurrently.
</span><br>
<span class="quotelev1">&gt; Thus for strict conformance I can either serialize read access to such
</span><br>
<span class="quotelev1">&gt; buffers or just make memory copies - neither approach is optimal. I'm
</span><br>
<span class="quotelev1">&gt; wondering that whether there is any practical exploitation of this
</span><br>
<span class="quotelev1">&gt; restriction - Is there an Open MPI BTL driver (or whatever it is
</span><br>
<span class="quotelev1">&gt; called in the Open MPI architecture) that really unmaps pages that are
</span><br>
<span class="quotelev1">&gt; totally contained inside the communication buffer from the application
</span><br>
<span class="quotelev1">&gt; address space while doing DMA?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the answer is none or very rare, then I'll perhaps just dismiss it
</span><br>
<span class="quotelev1">&gt; as a red herring and big headache can be avoided.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Isaac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, Isaac
</span><br>
<span class="quotelev1">&gt; ()  ascii ribbon campaign - against html e-mail
</span><br>
<span class="quotelev1">&gt; /\                        - against microsoft attachments
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
<li><strong>Next message:</strong> <a href="3665.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3663.php">Shiqing Fan: "Re: [OMPI users] Windows Build"</a>
<li><strong>In reply to:</strong> <a href="3661.php">Isaac Huang: "[OMPI users] read send buffer before a send operation completes"</a>
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
