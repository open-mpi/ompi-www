<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 23 05:48:37 2005" -->
<!-- isoreceived="20050823104837" -->
<!-- sent="Tue, 23 Aug 2005 12:48:24 +0200" -->
<!-- isosent="20050823104824" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="[O-MPI users] how do you select which network/trasport to use at run-time?" -->
<!-- id="200508231248.32637.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
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
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-23 05:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Previous message:</strong> <a href="0113.php">Brian Barrett: "Re: [O-MPI users] problem with configure with daily svn tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Reply:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>First I'd like to say that I'm really happy and excited that public access to 
<br>
svn is now open :-)
<br>
<p>Here is what went fine: check-out, autogen, configure, make, ompi_info and 
<br>
simple mpi app (both build and run!!!)
<br>
<p>Now I'd like to control over which channels/transports/networks the data 
<br>
flows... I configured and built ompi against mvapi (mellanox ibgd-1.8.0) and 
<br>
as far as I can tell it went well. Judging by the behaviour of the tests I 
<br>
have done it defaults to tcp (over ethernet in my case). How do I select 
<br>
mvapi?
<br>
<p>Here's some detailed information:
<br>
ompi-version: 1.0a1r6976
<br>
configure  : --prefix=/usr/local/openmpi-svn6976/intel-8.1e-027 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-btl-mvapi=/opt/ibgd/driver/infinihost
<br>
compilers  : icc, ifort 8.1.027 (64-bit for em64t)
<br>
os         : centos-4.1 64-bit (el4u1 rebuild)
<br>
kernel     : 2.6.9-11smp
<br>
mvapi      : mellanox ibgd-1.8.0
<br>
ompi_info | grep -i mvapi:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool : mvapi (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl   : mvapi (MCA v1.0, API v1.0, Component v1.0)
<br>
hardware   : dual Xeon Nocona 2 GiB mem, mell. pci-exress HCAs
<br>
<p>tia,
<br>
&nbsp;Peter
<br>
<p><pre>
-- 
------------------------------------------------------------
  Peter Kjellstr&#246;m               |
  National Supercomputer Centre  |
  Sweden                         | <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0114/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Previous message:</strong> <a href="0113.php">Brian Barrett: "Re: [O-MPI users] problem with configure with daily svn tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Reply:</strong> <a href="0115.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
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
