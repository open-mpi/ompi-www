<?
$subject_val = "Re: [OMPI users] segfault on finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 09:25:38 2009" -->
<!-- isoreceived="20090926132538" -->
<!-- sent="Sat, 26 Sep 2009 09:25:33 -0400" -->
<!-- isosent="20090926132533" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault on finalize" -->
<!-- id="7A4B5188-A6C9-4BBD-9BA0-D9ABA2FB25E6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ABCCA5C.6010901_at_irisa.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault on finalize<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 09:25:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10774.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_spawn query"</a>
<li><strong>Previous message:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
<li><strong>In reply to:</strong> <a href="10766.php">Thomas Ropars: "[OMPI users] segfault on finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10790.php">Thomas Ropars: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>Reply:</strong> <a href="10790.php">Thomas Ropars: "Re: [OMPI users] segfault on finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a fairly strange place to get an error --  
<br>
mca_base_param_finalize() is where we're tidying up command line  
<br>
parameters.
<br>
<p>There was some memory bugs that have been fixed since 21970.  Can you  
<br>
update?
<br>
<p><p>On Sep 25, 2009, at 9:49 AM, Thomas Ropars wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using r21970 of the trunk on Linux  2.6.18-3-amd64 and gcc version
</span><br>
<span class="quotelev1">&gt; 4.2.3 (Debian 4.2.3-2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I compile open mpi with the default options, it works.
</span><br>
<span class="quotelev1">&gt; But if I use --with-platform=optimized option, then I get a segfault  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; every program I run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==3073==  Access not within mapped region at address 0x30
</span><br>
<span class="quotelev1">&gt; ==3073==    at 0x535544D: mca_base_param_finalize (in
</span><br>
<span class="quotelev1">&gt; /home/tropars/open-mpi/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==3073==    by 0x5339D55: opal_finalize_util (in
</span><br>
<span class="quotelev1">&gt; /home/tropars/open-mpi/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==3073==    by 0x4E5A228: ompi_mpi_finalize (in
</span><br>
<span class="quotelev1">&gt; /home/tropars/open-mpi/install/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==3073==    by 0x400BF2: main (in /home/tropars/open-mpi/tests/ring)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10774.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_spawn query"</a>
<li><strong>Previous message:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
<li><strong>In reply to:</strong> <a href="10766.php">Thomas Ropars: "[OMPI users] segfault on finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10790.php">Thomas Ropars: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>Reply:</strong> <a href="10790.php">Thomas Ropars: "Re: [OMPI users] segfault on finalize"</a>
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
