<?
$subject_val = "Re: [OMPI users] Undefined symbols with MPI_Get_address";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  6 11:56:20 2013" -->
<!-- isoreceived="20130806155620" -->
<!-- sent="Tue, 6 Aug 2013 15:56:16 +0000" -->
<!-- isosent="20130806155616" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Undefined symbols with MPI_Get_address" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7AC94D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1375803659.1084.6712855.46F9549C_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Undefined symbols with MPI_Get_address<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-06 11:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22451.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22449.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>In reply to:</strong> <a href="22449.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22451.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2013, at 8:40 AM, Hugo Gagnon &lt;opensource.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Does this mean that for now I can just replace the MPI_Get_address calls
</span><br>
<span class="quotelev1">&gt; to MPI_Address?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried it and I got:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $openmpif90 test.f90
</span><br>
<span class="quotelev1">&gt; test.f90:11.32:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_Address(a,address,ierr)
</span><br>
<span class="quotelev1">&gt;                                1
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_address' at
</span><br>
<span class="quotelev1">&gt; (1)
</span><br>
<p>No.  Because in the old/deprecated MPI_Address call, the &quot;address&quot; parameter type is &quot;INTEGER&quot;, not &quot;INTEGER(KIND=MPI_ADDRESS_KIND)&quot;, which typically is not sufficient on 64 bit machines.  :-(  (which is why the MPI Forum introduced the MPI_Get_address function, which uses ADDRESS_KIND, and will be big enough for 64 bit values, etc.)
<br>
<p>You should be able to apply the attached patch to an OMPI 1.7.x tarball to add the MPI_Get_address implementation (which is a little difficult for you because you're installing via macports, but...). 
<br>
<p><span class="quotelev1">&gt; On a unrelated note, I noticed that I always get this generic message
</span><br>
<span class="quotelev1">&gt; for MPI-related compiling errors; is there a way to get more descriptive
</span><br>
<span class="quotelev1">&gt; error messages?
</span><br>
<p>Unfortunately not; this is a compiler message -- it's not from Open MPI.
<br>
<p>It typically means that either a) you have either the wrong subroutine name or b) you have the wrong type for one of the parameters.  Specifically, it means that the compiler was unable to match your source code with any of the interfaces specified in the module file.  In the case above, your code was calling MPI_Address with &quot;address&quot; of type INTEGER(KIND=MPI_ADDRESS_KIND), but the module only has interfaces with MPI_Address with &quot;address&quot; of type INTEGER.  So no match was able to be found.
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
<li><strong>Next message:</strong> <a href="22451.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22449.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>In reply to:</strong> <a href="22449.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22451.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
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
