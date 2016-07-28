<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 01:07:14 2007" -->
<!-- isoreceived="20070712050714" -->
<!-- sent="Thu, 12 Jul 2007 13:07:07 +0800" -->
<!-- isosent="20070712050707" -->
<!-- name="Isaac Huang" -->
<!-- email="iclaymore_at_[hidden]" -->
<!-- subject="[OMPI users] read send buffer before a send operation completes" -->
<!-- id="d2bbffd00707112207u4c4a515bubf081f693dcb8170_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Isaac Huang (<em>iclaymore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 01:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3662.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3660.php">Tisham Dhar: "[OMPI users] Windows Build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3664.php">Jeff Squyres: "Re: [OMPI users] read send buffer before a send operation completes"</a>
<li><strong>Reply:</strong> <a href="3664.php">Jeff Squyres: "Re: [OMPI users] read send buffer before a send operation completes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's prohibited by the standard to read send buffer before a send
<br>
operation completes, and I understand the theoretical rationale behind
<br>
it.
<br>
<p>I'm currently layering a protocol stack on top of MPI, and this
<br>
protocol allows a buffer to be read by multiple peers concurrently.
<br>
Thus for strict conformance I can either serialize read access to such
<br>
buffers or just make memory copies - neither approach is optimal. I'm
<br>
wondering that whether there is any practical exploitation of this
<br>
restriction - Is there an Open MPI BTL driver (or whatever it is
<br>
called in the Open MPI architecture) that really unmaps pages that are
<br>
totally contained inside the communication buffer from the application
<br>
address space while doing DMA?
<br>
<p>If the answer is none or very rare, then I'll perhaps just dismiss it
<br>
as a red herring and big headache can be avoided.
<br>
<p>Thanks,
<br>
Isaac
<br>
<p><pre>
-- 
Regards, Isaac
()  ascii ribbon campaign - against html e-mail
/\                        - against microsoft attachments
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3662.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3660.php">Tisham Dhar: "[OMPI users] Windows Build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3664.php">Jeff Squyres: "Re: [OMPI users] read send buffer before a send operation completes"</a>
<li><strong>Reply:</strong> <a href="3664.php">Jeff Squyres: "Re: [OMPI users] read send buffer before a send operation completes"</a>
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
