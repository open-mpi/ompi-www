<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 18:54:37 2009" -->
<!-- isoreceived="20090310225437" -->
<!-- sent="Tue, 10 Mar 2009 19:53:53 -0300" -->
<!-- isosent="20090310225353" -->
<!-- name="Serge" -->
<!-- email="skhan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="49B6EF81.6080308_at_ap.smu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAA8D566-1B5F-40FA-8FBA-8AD380602590_at_cisco.com" -->
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
<strong>From:</strong> Serge (<em>skhan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 18:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8392.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="8390.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8392.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="8392.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, it's very good news. If the issue has been fixed, then does 
<br>
it mean that v1.3.2 will allow to run applications compiled with v1.2.9? 
<br>
Or is it starting with v1.3.2 and subsequent releases will be backward 
<br>
compatible with each other?
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Unfortunately, binary compatibility between Open MPI release versions 
</span><br>
<span class="quotelev1">&gt; has never been guaranteed (even between subreleases).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, we have fixed this issue and expect to support binary 
</span><br>
<span class="quotelev1">&gt; compatibility between Open MPI releases starting with v1.3.2 (v1.3.1 
</span><br>
<span class="quotelev1">&gt; should be released soon; we're aiming for v1.3.2 towards the beginning 
</span><br>
<span class="quotelev1">&gt; of next month).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2009, at 11:59 AM, Serge wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a number of applications built with Open MPI 1.2 in a shared
</span><br>
<span class="quotelev2">&gt;&gt; multi-user environment. The Open MPI library upgrade has been always
</span><br>
<span class="quotelev2">&gt;&gt; transparent and painless within the v1.2 branch. Now we would like to
</span><br>
<span class="quotelev2">&gt;&gt; switch to Open MPI 1.3 as seamlessly. However, an application built with
</span><br>
<span class="quotelev2">&gt;&gt; ompi v1.2 will not run with the 1.3 library; the typical error messages
</span><br>
<span class="quotelev2">&gt;&gt; are given below. Apparently, the type ompi_communicator_t has changed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Symbol `ompi_mpi_comm_null' has different size in shared object,
</span><br>
<span class="quotelev2">&gt;&gt; consider re-linking
</span><br>
<span class="quotelev2">&gt;&gt; Symbol `ompi_mpi_comm_world' has different size in shared object,
</span><br>
<span class="quotelev2">&gt;&gt; consider re-linking
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I have to rebuild all the applications with Open MPI 1.3?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a better way to do a smooth upgrade?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; = Serge
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8392.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="8390.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8392.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="8392.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
