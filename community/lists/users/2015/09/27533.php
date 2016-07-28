<?
$subject_val = "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 11:06:57 2015" -->
<!-- isoreceived="20150903150657" -->
<!-- sent="Thu, 03 Sep 2015 17:04:59 +0200" -->
<!-- isosent="20150903150459" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)" -->
<!-- id="55E8619B.6020301_at_dkrz.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAbhqc7z1WQ3oLZN-KBCPP0_4KryvYAOfwiZqE8gOz4114O01w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 11:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27534.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27532.php">Nick Papior: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27528.php">Nick Papior: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27530.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On 09/03/15 16:52, Nick Papior wrote:
<br>
<span class="quotelev1">&gt; When you change environment, that is change between OpenMPI and Intel MPI, or
</span><br>
<span class="quotelev1">&gt; compiler, it is recommended that you recompile everything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is a module, you cannot mix these between compilers/environments, sadly the
</span><br>
<span class="quotelev1">&gt; Fortran specification does not enforce a strict module format which is why this
</span><br>
<span class="quotelev1">&gt; is necessary.
</span><br>
<p>this is sensible because the ISO Fortran standard also does not enforce the 
<br>
memory layout of descriptors that get passed around in a Fortran program, so 
<br>
having a module from one compiler work in another cannot work unless a common 
<br>
ABI for arguments is agreed upon (like it was for Fortran 77, where the SysV ABI 
<br>
is pretty consistently used).
<br>
<p>Because Fortran modules (introduced in Fortran 90) supply more semantics than 
<br>
the Fortran 77 mpif.h it's often useful to 'use mpi' than 'include &quot;mpif.h&quot;'.
<br>
<p><span class="quotelev1">&gt; 2015-09-03 14:43 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:diego.avesani_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dear Jeff, Dear all,
</span><br>
<span class="quotelev1">&gt;     I normaly use &quot;USE MPI&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This is the answar fro intel HPC forum:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /If you are switching between intel and openmpi you must remember not to mix
</span><br>
<span class="quotelev1">&gt;     environment.  You might use modules to manage this.  As the data types
</span><br>
<span class="quotelev1">&gt;     encodings differ, you must take care that all objects are built against the
</span><br>
<span class="quotelev1">&gt;     same headers./
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Could someone explain me what are these modules and how I can use them?
</span><br>
<p>This refers to the 'modules' software package[1] (different from Fortran 
<br>
modules) which simplifies having multiple versions of the same and different 
<br>
software packages with the same commands around.
<br>
<p>It's typically used in server environments where an upgrade for all 
<br>
users/dependent software packages is non-trivial.
<br>
<p>Regards, Thomas
<br>
<p>[1] <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27533/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27534.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27532.php">Nick Papior: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27528.php">Nick Papior: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27530.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
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
