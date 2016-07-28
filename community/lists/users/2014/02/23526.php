<?
$subject_val = "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 09:12:29 2014" -->
<!-- isoreceived="20140201141229" -->
<!-- sent="Sat, 1 Feb 2014 14:12:27 +0000" -->
<!-- isosent="20140201141227" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface" -->
<!-- id="0E161B2F-5FCE-429D-BF02-41004892FF0A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52EC0818.2030509_at_hpc2n.umu.se" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-01 09:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23527.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<li><strong>Previous message:</strong> <a href="23525.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23516.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23540.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23540.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>I noted your comment on the ticket so that it doesn't get lost.  I haven't had a chance to look into this yet because we've been focusing on getting 1.7.4 out the door, and this has been identified as a 1.7.5 fix.
<br>
<p><p>On Jan 31, 2014, at 3:31 PM, &#197;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 01/28/2014 08:26 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ok, will do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yesterday, I put in a temporary behavioral test in configure that will exclude ekopath 5.0 in 1.7.4.  We'll remove this behavioral test once OMPI fixes the bug correctly (for 1.7.5).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not 100% sure yet (my F2k3 spec is at work and I'm not) but the ompi_funloc.tar.gz code in <a href="https://svn.open-mpi.org/trac/ompi/ticket/4157">https://svn.open-mpi.org/trac/ompi/ticket/4157</a> seems to be non comformant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   abstract interface
</span><br>
<span class="quotelev1">&gt;     !! This is the prototype for ONE of the MPI callback routines
</span><br>
<span class="quotelev1">&gt;     !
</span><br>
<span class="quotelev1">&gt;     function callback_variant1(val)
</span><br>
<span class="quotelev1">&gt;       integer :: val, callback_variant1
</span><br>
<span class="quotelev1">&gt;     end function
</span><br>
<span class="quotelev1">&gt;   end interface
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   interface
</span><br>
<span class="quotelev1">&gt;     !! This is the OMPI conversion routine for ONE of the MPI callback routines
</span><br>
<span class="quotelev1">&gt;     !
</span><br>
<span class="quotelev1">&gt;      function ompi_funloc_variant1(fn)
</span><br>
<span class="quotelev1">&gt;        use, intrinsic :: iso_c_binding, only: c_funptr
</span><br>
<span class="quotelev1">&gt;        procedure(callback_variant1) :: fn
</span><br>
<span class="quotelev1">&gt;        type(c_funptr) :: ompi_funloc_variant1
</span><br>
<span class="quotelev1">&gt;      end function ompi_funloc_variant1
</span><br>
<span class="quotelev1">&gt;   end interface
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that ompi_funloc_variant1 needs to do IMPORT to have access to the callback_variant1 definition before using it to define &quot;FN&quot;
</span><br>
<span class="quotelev1">&gt; I.e.
</span><br>
<span class="quotelev1">&gt;     !
</span><br>
<span class="quotelev1">&gt;      function ompi_funloc_variant1(fn)
</span><br>
<span class="quotelev1">&gt;        use, intrinsic :: iso_c_binding, only: c_funptr
</span><br>
<span class="quotelev1">&gt;        import
</span><br>
<span class="quotelev1">&gt;        procedure(callback_variant1) :: fn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23527.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<li><strong>Previous message:</strong> <a href="23525.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23516.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23540.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23540.php">흆e Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
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
