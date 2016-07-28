<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 27 08:59:31 2007" -->
<!-- isoreceived="20070427125931" -->
<!-- sent="Fri, 27 Apr 2007 14:59:26 +0200" -->
<!-- isosent="20070427125926" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="[OMPI users] [PATCH] small build fix for gm btl" -->
<!-- id="5711d990704270559j2d6a1d7et9d170936252cf190_at_mail.gmail.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-27 08:59:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3156.php">G&#246;tz Waschk: "[OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I've found a bug trying to build openmpi 1.2.1 with progress threads
<br>
and gm btl support. Gcc had no problem with the missing header but
<br>
pgcc 7.0 complained. Check the attached patch.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3157/openmpi-1.2.1-btl-gm-pthread.patch">openmpi-1.2.1-btl-gm-pthread.patch</a>
</ul>
<!-- attachment="openmpi-1.2.1-btl-gm-pthread.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3156.php">G&#246;tz Waschk: "[OMPI users] Problem running hpcc with a threaded BLAS"</a>
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
