<?
$subject_val = "Re: [OMPI users] Questions on MPI I/O and ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 08:07:44 2014" -->
<!-- isoreceived="20140214130744" -->
<!-- sent="Fri, 14 Feb 2014 13:07:42 +0000" -->
<!-- isosent="20140214130742" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions on MPI I/O and ompi_info" -->
<!-- id="B2488913-02C9-4FC5-ABE9-18907C0830C5_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CE8A6AA6-DE8A-4204-8A82-E18F44B73B30_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions on MPI I/O and ompi_info<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 08:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23614.php">Filippo Spiga: "[OMPI users] Configure issue with/without HWLOC when PGI used and CUDA support enabled"</a>
<li><strong>Previous message:</strong> <a href="23612.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="23598.php">Ralph Castain: "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2014, at 7:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...well, a little digging says that we probably didn't do this as thoroughly as we should have :-/
</span><br>
<p>Actually, it works exactly as we designed it... but the reasons for doing so (and its effects) are a bit obscure.
<br>
<p>OMPI imports the ROMIO implementation for MPI I/O functionality.  ROMIO actually includes 2 things: the MPI I/O API (i.e., the MPI_File_* functions, constants, and handles), and the back-end implementation of the MPI I/O API.  In the bundled ROMIO, we only use the latter and disable the former (and let OMPI provide its own MPI_File_* functions, constants, and handles).
<br>
<p>A long time ago, someone had the need to use a newer ROMIO than we bundled in OMPI.  So we created the &quot;turn all MPI I/O functionality off&quot; configure switch.  This not only disables ROMIO, it also disables OMPI's MPI I/O API functions, constants, and handles.  It therefore lets someone use an external ROMIO and let ROMIO provide the MPI_File_* functions, constants, and handles.
<br>
<p>The other option is as you mentioned: just disabling ROMIO.  In the v1.6 series, if you disable ROMIO and try to use an MPI_File_* function, it should fail at run-time. In the v1.7 series, it should transparently switch to use the OMPIO plugin (our implementation of the MPI I/O functionality).
<br>
<p>See the attached PPT for how this looks pictorially.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/vnd.openxmlformats-officedocument.presentationml.presentation attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23613/ompi-mpi-io-functionality.pptx">ompi-mpi-io-functionality.pptx</a>
</ul>
<!-- attachment="ompi-mpi-io-functionality.pptx" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23614.php">Filippo Spiga: "[OMPI users] Configure issue with/without HWLOC when PGI used and CUDA support enabled"</a>
<li><strong>Previous message:</strong> <a href="23612.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="23598.php">Ralph Castain: "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
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
