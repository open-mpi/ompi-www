<?
$subject_val = "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 10:37:15 2014" -->
<!-- isoreceived="20141201153715" -->
<!-- sent="Mon, 1 Dec 2014 15:37:14 +0000" -->
<!-- isosent="20141201153714" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="8F18684A-588D-4379-83E9-2B85C5FC27D8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkWKFfQiW6=G4TgCpiYBJxHa3ucfFERgy1FmeEXR2BcUrw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 10:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25894.php">Rob Latham: "Re: [OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<li><strong>Previous message:</strong> <a href="25892.php">Siegmar Gross: "[OMPI users] error building openmpi-v1.8.3-202-gb568b6e with Solaris Studio 12.4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25886.php">George Bosilca: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25901.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25901.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 28, 2014, at 11:58 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The same functionality can be trivially achieved at the user level using Adam's approach. If we provide a shortcut in Open MPI, we should emphasize this is an MPI extension, and offer the opportunity to other MPI to provide a compatible support
</span><br>
<p>Are you referring to something Adam Moody proposed?  Or some other Adam?
<br>
<p><span class="quotelev1">&gt; Thus, I would name all new types MPIX_ instead of OMPI_ and remove them from the default mpi.h (or &quot;include mpi&quot;) to force the users to use mpiext.h and &quot;include mpiext&quot; in order to be able to access them.
</span><br>
<p>FWIW, we've traditionally named Open MPI-specific extensions &quot;OMPI_&quot; instead of &quot;MPIX_&quot; (which can be confused with other MPI implementation extensions).
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
<li><strong>Next message:</strong> <a href="25894.php">Rob Latham: "Re: [OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<li><strong>Previous message:</strong> <a href="25892.php">Siegmar Gross: "[OMPI users] error building openmpi-v1.8.3-202-gb568b6e with Solaris Studio 12.4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25886.php">George Bosilca: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25901.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25901.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
