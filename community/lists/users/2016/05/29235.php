<?
$subject_val = "[OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 18:16:08 2016" -->
<!-- isoreceived="20160518221608" -->
<!-- sent="Wed, 18 May 2016 22:16:05 +0000" -->
<!-- isosent="20160518221605" -->
<!-- name="Ryan Novosielski" -->
<!-- email="novosirj_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?" -->
<!-- id="FFF67B34-6932-4D0C-8B29-2442382E2598_at_rutgers.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?<br>
<strong>From:</strong> Ryan Novosielski (<em>novosirj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-18 18:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Previous message:</strong> <a href="29234.php">Xiaolong Cui: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Reply:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Reply:</strong> <a href="29255.php">Dave Love: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I&#226;&#128;&#153;m getting the following message:
<br>
<p><pre>
---
WARNING: It appears that your OpenFabrics subsystem is configured to only
allow registering part of your physical memory.  This can cause MPI jobs to
run with erratic performance, hang, and/or crash.
This may be caused by your OpenFabrics vendor limiting the amount of
physical memory that can be registered.  You should investigate the
relevant Linux kernel module parameters that control how much physical
memory can be registered, and increase them to allow registering all
physical memory on your machine.
See this Open MPI FAQ item for more information on these Linux kernel module
parameters:
   <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
 Local host:              node045.cluster.example.com
 Registerable memory:     32768 MiB
 Total memory:            130636 MiB
Your MPI job will continue, but may be behave poorly and/or hang.
---
I&#226;&#128;&#153;m pretty sure this is no longer relevant (having read Roland&#226;&#128;&#153;s messages about it from a couple of years ago now). Can you please confirm that for me, and then let me know if there is any way that I can silence this old copy of OpenMPI that I need to use with some software that depends on it for some reason? It is causing my users to report it as an issue pretty regularly.
Thanks!
--
____
|| \\UTGERS,  	 |---------------------------*O*---------------------------
||_// the State	 |         Ryan Novosielski - novosirj_at_[hidden]
|| \\ University | Sr. Technologist - 973/972.0922 (2x0922) ~*~ RBHS Campus
||  \\    of NJ	 | Office of Advanced Research Computing - MSB C630, Newark
    `'

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29235/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Previous message:</strong> <a href="29234.php">Xiaolong Cui: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Reply:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Reply:</strong> <a href="29255.php">Dave Love: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
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
