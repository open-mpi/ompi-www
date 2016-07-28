<?
$subject_val = "Re: [OMPI users] Problems in compiling a code with dynamic linking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 05:35:11 2016" -->
<!-- isoreceived="20160324093511" -->
<!-- sent="Thu, 24 Mar 2016 10:35:01 +0100" -->
<!-- isosent="20160324093501" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in compiling a code with dynamic linking" -->
<!-- id="56F3B4C5.20502_at_dkrz.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56F34F70.3050604_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in compiling a code with dynamic linking<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 05:35:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28817.php">Tim Prince: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28813.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On 03/24/2016 03:22 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; it seems /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh is only available
</span><br>
<span class="quotelev1">&gt; on your login/frontend nodes,
</span><br>
<span class="quotelev1">&gt; but not on your compute nodes.
</span><br>
<span class="quotelev1">&gt; you might be luckier with
</span><br>
<span class="quotelev1">&gt; /opt/intel/mkl/bin/mklvars.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an other option is to
</span><br>
<span class="quotelev1">&gt; ldd /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI
</span><br>
<span class="quotelev1">&gt; on your login node, and explicitly set the LD_LIBRARY_PATH in your PBS script
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if /opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 is available on your compute
</span><br>
<span class="quotelev1">&gt; nodes, you might want to append
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath,/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64
</span><br>
<span class="quotelev1">&gt; to LIB
</span><br>
<span class="quotelev1">&gt; /* if you do that, keep in mind you might not automatically use the most up to
</span><br>
<span class="quotelev1">&gt; date mkl lib when they get upgraded by your sysadmin */
</span><br>
<p>We found the most reliable solution was to have in the place ifort/icc/icpc 
<br>
reside to have a file for each compiler named ifort.cfg, icc.cfg and icpc.cfg 
<br>
respectively that contains a single line like this:
<br>
<p>-Wl,-rpath,/path/to/intel/compiler/install/lib/intel64,-rpath,/path/to/intel/compiler/install/mkl/lib/intel64
<br>
<p>that lets individual users still override the run-time library version used with 
<br>
LD_LIBRARY_PATH, but setting it is no longer needed for regular users who get 
<br>
binaries that also work when they haven't setup the environment for some 
<br>
specific intel compiler. An alternative is static linking but that has other 
<br>
downsides.
<br>
<p>Regards,
<br>
Thomas Jahns
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28816/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28817.php">Tim Prince: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28813.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
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
