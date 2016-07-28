<?
$subject_val = "[OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 13 08:40:23 2010" -->
<!-- isoreceived="20101113134023" -->
<!-- sent="Sat, 13 Nov 2010 14:40:14 +0100" -->
<!-- isosent="20101113134014" -->
<!-- name="Nicolai Stange" -->
<!-- email="nicolai.stange_at_[hidden]" -->
<!-- subject="[OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken" -->
<!-- id="1289655614.2199.4.camel_at_nic-desktop" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken<br>
<strong>From:</strong> Nicolai Stange (<em>nicolai.stange_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-13 08:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14751.php">Vasiliy G Tolstov: "[OMPI users] source code for presentation/papers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14935.php">George Bosilca: "Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<li><strong>Reply:</strong> <a href="14935.php">George Bosilca: "Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>gcc 4.5.1 with -O2 optimizes the 'ret = newval' away because %0 is
<br>
declared as being write only.
<br>
Fix is attached.
<br>
<p>Regards
<br>
<p>Nicolai
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14752/02_fix_atomic_cmpset_64.diff">02_fix_atomic_cmpset_64.diff</a>
</ul>
<!-- attachment="02_fix_atomic_cmpset_64.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14751.php">Vasiliy G Tolstov: "[OMPI users] source code for presentation/papers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14935.php">George Bosilca: "Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<li><strong>Reply:</strong> <a href="14935.php">George Bosilca: "Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
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
