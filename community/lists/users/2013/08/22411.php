<?
$subject_val = "[OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  1 09:38:04 2013" -->
<!-- isoreceived="20130801133804" -->
<!-- sent="Thu, 01 Aug 2013 15:37:47 +0200" -->
<!-- isosent="20130801133747" -->
<!-- name="gpaulus" -->
<!-- email="gpaulus_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery" -->
<!-- id="2ae0d9c61e6ea3e525523d302cbb849c_at_imapproxy.vub.ac.be" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> gpaulus (<em>gpaulus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-01 09:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Previous message:</strong> <a href="22410.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All:
<br>
<p>I'm trying to &quot;configure&quot; OpenMPI 1.7.2 on a 64 bit Linux platform 
<br>
(Scientific Linux 6.4, kernel 2.6.32-358.14.1.el6.x86_64). Configure is 
<br>
able to find clapack.h in /usr/local/include but does not find the 
<br>
library libclapack.so (or libclapack.a) stored in /usr/local/lib64. I 
<br>
have put LDFLAGS=&quot;-L/usr/local/lib64&quot; in the configure script, to no 
<br>
avail. I also put /usr/local/lib64 in LD_LIBRARY_PATH at the shell level 
<br>
but to no avail as well; adding an entry in /etc/ld.so.conf.d did not 
<br>
help. Even copying the library to /usr/lib64 did not help configure. And 
<br>
although the header file was found in /usr/local/include, putting the 
<br>
library in /usr/local/lib did not improve things.
<br>
<p>I would be grateful to whomever can help me understand the problem.
<br>
<p>In attachment:
<br>
gnubuild.bz2: the script invoking configure with all the options
<br>
config.out.bz2: the output of the configure run
<br>
<p>Regards,
<br>
<p>Guy Paulus
<br>
<p><p>

<br><p>
<p><p><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="../../att-22411/gnubuild.bz2__size_7374">gnubuild.bz2__size_7374</a>
</ul>
<!-- attachment="gnubuild.bz2__size_7374" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="../../att-22411/config.out.bz2__size_19757">config.out.bz2__size_19757</a>
</ul>
<!-- attachment="config.out.bz2__size_19757" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Previous message:</strong> <a href="22410.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
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
