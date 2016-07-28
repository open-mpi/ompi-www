<?
$subject_val = "[OMPI users] PGI 10.9 build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 07:09:26 2011" -->
<!-- isoreceived="20110315110926" -->
<!-- sent="Tue, 15 Mar 2011 07:09:22 -0400" -->
<!-- isosent="20110315110922" -->
<!-- name="Ben Miller" -->
<!-- email="bmiller_at_[hidden]" -->
<!-- subject="[OMPI users] PGI 10.9 build failures" -->
<!-- id="4D7F48E2.3010108_at_mail.eecis.udel.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] PGI 10.9 build failures<br>
<strong>From:</strong> Ben Miller (<em>bmiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 07:09:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15865.php">Jeff Squyres: "Re: [OMPI users] PGI 10.9 build failures"</a>
<li><strong>Previous message:</strong> <a href="15863.php">Jeff Squyres: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15865.php">Jeff Squyres: "Re: [OMPI users] PGI 10.9 build failures"</a>
<li><strong>Reply:</strong> <a href="15865.php">Jeff Squyres: "Re: [OMPI users] PGI 10.9 build failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am building OFED-1.5.3 on CentOS 5.5 (OFED-1.5.2 build fine) and succeeds
<br>
except for openmpi_pgi (OpenMPI 1.4.3).  For version 10.9 of the pgi 
<br>
compilers I get:
<br>
<p>configure: WARNING: Your compiler does not support offsetof macro
<br>
configure: error: Configure: Cannot continue
<br>
error: Bad exit status from /var/tmp/rpm-tmp.66872 (%build)
<br>
<p>I tried two fixes I found in the web for this offsetof error (about a year
<br>
old), but they both failed in the same way.
<br>
<p>We are licensed up to 11.1 for pgi, but both mvapich2 and openmpi fail for it.
<br>
Looks like that bug is fixed in 11.2.
<br>
<p>Any idea what is wrong with openmpi and pgi 10.9?
<br>
<p>thanks,
<br>
Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15865.php">Jeff Squyres: "Re: [OMPI users] PGI 10.9 build failures"</a>
<li><strong>Previous message:</strong> <a href="15863.php">Jeff Squyres: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15865.php">Jeff Squyres: "Re: [OMPI users] PGI 10.9 build failures"</a>
<li><strong>Reply:</strong> <a href="15865.php">Jeff Squyres: "Re: [OMPI users] PGI 10.9 build failures"</a>
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
