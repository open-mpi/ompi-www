<?
$subject_val = "Re: [OMPI users] Making RPM from source that respects --prefix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 21:36:24 2009" -->
<!-- isoreceived="20091008013624" -->
<!-- sent="Wed, 7 Oct 2009 18:36:20 -0700 (PDT)" -->
<!-- isosent="20091008013620" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Making RPM from source that respects --prefix" -->
<!-- id="509086.98555.qm_at_web57610.mail.re1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.13.1254499205.3911.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Making RPM from source that respects --prefix<br>
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 21:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10896.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>Previous message:</strong> <a href="10894.php">Ralph Castain: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10900.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Reply:</strong> <a href="10900.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff and Kiril,
<br>
<p>Thank you for your responses.  Based on the information you both provided, I was able to get buildrpm to make the OMPI RPM the way I wanted.  I ended up having to define _prefix , _mandir , and _infodir .
<br>
<p>Additionally, I found I had to use --define &quot;shell_scripts_basename mpivars&quot; because without that, when I tried to use mpi-selector, mpi-selector did not find the installation since it specifically seems to look for the shell scripts as mpivars.{sh,csh} rather than mpivars-1.3.3.{sh,csh} as the .spec file builds.  I think the .spec file should be changed to match what mpi-selector expects.
<br>
<p>Jeff, it might also be really useful to have a .spec build option to allow the RPM to register itself as the system default.  I hand-modified the .spec file to do this.  Please let me know if I should register a feature request somewhere more formally.
<br>
<p>Thanks again to you both, and sorry for taking so long to reply.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10896.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>Previous message:</strong> <a href="10894.php">Ralph Castain: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="10871.php">Bill Johnstone: "[OMPI users] Making RPM from source that respects --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10900.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Reply:</strong> <a href="10900.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
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
