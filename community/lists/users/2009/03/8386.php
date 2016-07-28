<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 15:50:59 2009" -->
<!-- isoreceived="20090310195059" -->
<!-- sent="Tue, 10 Mar 2009 15:50:40 -0400" -->
<!-- isosent="20090310195040" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="BAA8D566-1B5F-40FA-8FBA-8AD380602590_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B68E57.8040500_at_ap.smu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 15:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8387.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>In reply to:</strong> <a href="8379.php">Serge: "[OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8391.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="8391.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9099.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, binary compatibility between Open MPI release versions  
<br>
has never been guaranteed (even between subreleases).
<br>
<p>That being said, we have fixed this issue and expect to support binary  
<br>
compatibility between Open MPI releases starting with v1.3.2 (v1.3.1  
<br>
should be released soon; we're aiming for v1.3.2 towards the beginning  
<br>
of next month).
<br>
<p><p><p>On Mar 10, 2009, at 11:59 AM, Serge wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a number of applications built with Open MPI 1.2 in a shared
</span><br>
<span class="quotelev1">&gt; multi-user environment. The Open MPI library upgrade has been always
</span><br>
<span class="quotelev1">&gt; transparent and painless within the v1.2 branch. Now we would like to
</span><br>
<span class="quotelev1">&gt; switch to Open MPI 1.3 as seamlessly. However, an application built  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; ompi v1.2 will not run with the 1.3 library; the typical error  
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt; are given below. Apparently, the type ompi_communicator_t has changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Symbol `ompi_mpi_comm_null' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; Symbol `ompi_mpi_comm_world' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I have to rebuild all the applications with Open MPI 1.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better way to do a smooth upgrade?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = Serge
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8387.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>In reply to:</strong> <a href="8379.php">Serge: "[OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8391.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="8391.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9099.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
