<?
$subject_val = "[OMPI devel] SCTP noisy failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 18:58:14 2007" -->
<!-- isoreceived="20071212235814" -->
<!-- sent="Wed, 12 Dec 2007 18:57:59 -0500" -->
<!-- isosent="20071212235759" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] SCTP noisy failure" -->
<!-- id="9F4EC53A-DEC5-4DBE-9E26-EB3DA9B46FB3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] SCTP noisy failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 18:57:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2833.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2831.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2833.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2833.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After the exclusivity change today, I notice that I am getting  
<br>
warnings for *every* mpirun from the SCTP BTL on RHEL4:
<br>
<p>[15:52] svbu-mpi:~/mpi % mpirun -np 2 hello
<br>
[svbu-mpi.cisco.com][1,0][btl_sctp_component.c: 
<br>
615:mca_btl_sctp_component_create_listen] socket() failed with errno=94
<br>
[svbu-mpi.cisco.com][1,1][btl_sctp_component.c: 
<br>
615:mca_btl_sctp_component_create_listen] socket() failed with errno=94
<br>
Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
<br>
Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
<br>
[15:52] svbu-mpi:~/mpi %
<br>
<p>Can these be turned off?  I have a default RHEL4 system -- I haven't  
<br>
done anything special to enable / disable SCTP.  Is there a less noisy  
<br>
way to tell that SCTP is not enabled on a system?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2833.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2831.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2833.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2833.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
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
