<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 11:13:44 2010" -->
<!-- isoreceived="20100602151344" -->
<!-- sent="Wed, 02 Jun 2010 17:14:28 +0200" -->
<!-- isosent="20100602151428" -->
<!-- name="guillaume ranquet" -->
<!-- email="guillaume.ranquet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager." -->
<!-- id="4C067554.6010004_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A93FC8E6-1F18-43BA-9FA8-72F4E5E7B9B5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.<br>
<strong>From:</strong> guillaume ranquet (<em>guillaume.ranquet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 11:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13207.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>I snipped some parts of the exchange and responding to 2 mails in this
<br>
one. (this may not be proper netiquette on this ML?)
<br>
<p>On 06/02/2010 03:54 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; What happens if you run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (i.e., MX support is still compiled in, but remove MX from the run-time)
</span><br>
<p>sadly, exactly the same thing :(
<br>
it doesn't seems to disable MX (as the Error message is still there, I'm
<br>
just guessing, as I said I don't really know anything about MPI :-/).
<br>
<p>$ ~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self
<br>
~/bwlat/mpi_helloworld
<br>
[bordeplage-9.bordeaux.grid5000.fr:32664] Error in mx_init (error No MX
<br>
device entry in /dev.)
<br>
Hello world from process 0 of 1
<br>
[bordeplage-9:32664] *** Process received signal ***
<br>
[bordeplage-9:32664] Signal: Segmentation fault (11)
<br>
[bordeplage-9:32664] Signal code: Address not mapped (1)
<br>
[bordeplage-9:32664] Failing at address: 0x7f8410a1b360
<br>
- --------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 32664 on node
<br>
bordeplage-9.bordeaux.grid5000.fr exited on signal 11 (Segmentation fault).
<br>
- --------------------------------------------------------------------------
<br>
<p><p><span class="quotelev1">&gt; I'm still guessing that there's some weird interaction between the memory management of those two plugins (MX and verbs).  I don't know of anyone else who has this kind of configuration where it could be tested / debugged.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per the above suggestion, let's see what happens if you run without MX and/or without openib via mpirun command line option.  If that fixes the problem, that would mean you only have to change command line params when you run -- not have 2 OMPI installs.  Additionally, you might be able to leave both plugins enabled but setenv the OMPI_MCA_memory_ptmalloc2_disable environment variable to 1; this will disable the OMPI memory management stuff.  Note that this is not a normal MCA parameter -- you cannot set it on the command line or in a file; it *must* be set as an environment variable (for boring, technical reasons -- I can explain if you care).
</span><br>
<p>I can also confirm that setting the OMPI_MCA_memory_ptmalloc2_disable
<br>
variable to 1 effectively solves the segfault problem.
<br>
<p>On 06/02/2010 04:24 PM, Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; Does the same error happen if he tries on a MX host that does not have IB?
</span><br>
this node only has a myrinet card,
<br>
<p>$ mpirun ~/bwlat/mpi_helloworld
<br>
warning:regcache incompatible with malloc
<br>
Hello world from process 0 of 1
<br>
<p>note that this is with openmpi-1.4.1
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v2.0.15 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iQEcBAEBAgAGBQJMBnVUAAoJEEzIl7PMEAliLqsIAOfUMffGmBVO2SOadd+roQ3x
<br>
HuqV6N0lhaevO4D1LPsyE6Q+mUtCWrvDgnIkJoBj0q7zAZvzGKxJM42cVNGFkAUp
<br>
3Xaz8oKwW3kZh8JyKLF9+sueuhEeBUhDxjr/25p0P7t2dOP0JeUnscky3hRFipM8
<br>
I9zg5LbOi3DusJ6H81nnttNcQYGtrnZSsJxoRfPKZK+51uyNOt9tfgKzzlh2DJBw
<br>
ddh0OP4cvWoqF3LcLGWBMfebZ16lo9iC8OIZ5xfyvQzVYKXjfX9E25eHH4DARD0j
<br>
Dc6UOvC3G7oqT4k02AYFmVNNou4423sfJ/27dkX+1+d06A2rb6Npg72ImNPD9Us=
<br>
=LxwM
<br>
-----END PGP SIGNATURE-----
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13208/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13207.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13209.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
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
