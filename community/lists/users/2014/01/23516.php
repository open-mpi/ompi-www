<?
$subject_val = "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 15:31:23 2014" -->
<!-- isoreceived="20140131203123" -->
<!-- sent="Fri, 31 Jan 2014 21:31:20 +0100" -->
<!-- isosent="20140131203120" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface" -->
<!-- id="52EC0818.2030509_at_hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE9D4067-A6F5-4B93-A65B-9D5AC267DE8E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 15:31:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23517.php">Ross Boylan: "[OMPI users] writev error: Bad address"</a>
<li><strong>Previous message:</strong> <a href="23515.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23489.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/28/2014 08:26 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Ok, will do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yesterday, I put in a temporary behavioral test in configure that will exclude ekopath 5.0 in 1.7.4.  We'll remove this behavioral test once OMPI fixes the bug correctly (for 1.7.5).
</span><br>
<p>I'm not 100% sure yet (my F2k3 spec is at work and I'm not) but the 
<br>
ompi_funloc.tar.gz code in 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/4157">https://svn.open-mpi.org/trac/ompi/ticket/4157</a> seems to be non comformant.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;abstract interface
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!! This is the prototype for ONE of the MPI callback routines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function callback_variant1(val)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: val, callback_variant1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end interface
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;interface
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!! This is the OMPI conversion routine for ONE of the MPI callback 
<br>
routines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function ompi_funloc_variant1(fn)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use, intrinsic :: iso_c_binding, only: c_funptr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procedure(callback_variant1) :: fn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type(c_funptr) :: ompi_funloc_variant1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end function ompi_funloc_variant1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end interface
<br>
<p>I think that ompi_funloc_variant1 needs to do IMPORT to have access to 
<br>
the callback_variant1 definition before using it to define &quot;FN&quot;
<br>
I.e.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function ompi_funloc_variant1(fn)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use, intrinsic :: iso_c_binding, only: c_funptr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;import
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procedure(callback_variant1) :: fn
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23517.php">Ross Boylan: "[OMPI users] writev error: Bad address"</a>
<li><strong>Previous message:</strong> <a href="23515.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23489.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
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
