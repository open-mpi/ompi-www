<?
$subject_val = "[OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 17:35:10 2014" -->
<!-- isoreceived="20140128223510" -->
<!-- sent="Tue, 28 Jan 2014 22:35:08 +0000" -->
<!-- isosent="20140128223508" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4" -->
<!-- id="B4E1AF64-D9CC-45F5-8935-0E5F0B2B5E04_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 17:35:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13941.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<li><strong>Reply:</strong> <a href="13943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like Past Jeff was wrong: the removal of the choice buffers from the non-ignore-TKR version of the Fortran mpi module (which is only used for gfortran &lt;=v4.8) *does* cause ABI breakage between 1.7.3 and 1.7.4.  
<br>
<p>Per discussion on the telconf today, we decided that we're going to do this anyway, because it's an MPI-3.0 conformance issue.
<br>
<p>I've added the following to the README in the ABI section:
<br>
<p>* A second bug was discovered after v1.7.3 was released that causes
<br>
&nbsp;&nbsp;ABI to be broken for gfortran users who are using the &quot;mpi&quot; Fortran
<br>
&nbsp;&nbsp;module.  In short, for versions of gfortran that do not support
<br>
&nbsp;&nbsp;&quot;ignore TKR&quot; functionality (i.e., gfortran &lt;=v4.8), Open MPI was
<br>
&nbsp;&nbsp;providing interfaces for MPI subroutines with choice buffers (e.g.,
<br>
&nbsp;&nbsp;MPI_Send) in the Fortran mpi module.  The MPI-3.0 specification
<br>
&nbsp;&nbsp;expressly states not to do this.  To be consistent with MPI-3, Open
<br>
&nbsp;&nbsp;MPI v1.7.4 therefore removed all MPI interfaces with choice buffers
<br>
&nbsp;&nbsp;from the no-ignore-TKR version of the Fortran mpi module, even
<br>
&nbsp;&nbsp;though this breaks ABI between v1.7.3 and v1.7.4.  Affected users
<br>
&nbsp;&nbsp;should be able to recompile their MPI applications with v1.7.4 with
<br>
&nbsp;&nbsp;no changes.
<br>
<p>&nbsp;&nbsp;Other Fortran compilers that provide &quot;ignore TKR&quot; functionality are
<br>
&nbsp;&nbsp;not affected by this change.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13941.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<li><strong>Reply:</strong> <a href="13943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
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
