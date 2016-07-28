<?
$subject_val = "[OMPI users] configure  blcr errors openmpi 1.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 31 10:04:29 2011" -->
<!-- isoreceived="20111031140429" -->
<!-- sent="Mon, 31 Oct 2011 15:04:38 +0100" -->
<!-- isosent="20111031140438" -->
<!-- name="vlad_at_[hidden]" -->
<!-- email="vlad_at_[hidden]" -->
<!-- subject="[OMPI users] configure  blcr errors openmpi 1.4.4" -->
<!-- id="f4a32d7679c607ef3b2092730073f501.squirrel_at_webmail.cosy.sbg.ac.at" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] configure  blcr errors openmpi 1.4.4<br>
<strong>From:</strong> <a href="mailto:vlad_at_[hidden]?Subject=Re:%20[OMPI%20users]%20configure%20%20blcr%20errors%20openmpi%201.4.4"><em>vlad_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-10-31 10:04:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<li><strong>Previous message:</strong> <a href="17652.php">Yue Guan: "Re: [OMPI users] successful story of building openmpi on cygwin?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<li><strong>Reply:</strong> <a href="17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi !
<br>
<p>I am trying to compile  openmpi 1.4.4 with  Torque, Infiniband and blcr
<br>
checkpoint support  on  Puias Linux 6.x  (free derivate of RHEL 6x).
<br>
<p>all packages of blcr  are installed  (including header files blcr-devel)
<br>
<p>even torque ..
<br>
<p>torque-libs,  openib libraries are found ..
<br>
<p>But, when  executing the ./configure script it does not find  the right
<br>
libraries and header files even though they are located  under  the
<br>
specified path.
<br>
<p>&nbsp;./configure --with-tm=/usr/local/ --with-openib
<br>
--prefix=/usr/mpi/gcc/openmpi-1.4.4  --with-blcr-libdir=/usr/lib64/
<br>
--with-blcr=/usr
<br>
<p><p>last few lines of output of   the ./configure run :
<br>
<p>&quot;..
<br>
checking for MCA component crs:blcr compile mode... dso
<br>
checking --with-blcr value... sanity check ok (/usr)
<br>
checking --with-blcr-libdir value... sanity check ok (/usr/lib64/)
<br>
configure: WARNING: BLCR support requested but not found.  Perhaps you
<br>
need to specify the location of the BLCR libraries.
<br>
configure: error: Aborting.
<br>
..&quot;
<br>
<p><p>[root_at_gpu01 openmpi-1.4.4]# rpm -ql blcr-devel
<br>
/usr/include/blcr_common.h
<br>
/usr/include/blcr_errcodes.h[root_at_gpu01 openmpi-1.4.4]#[root_at_gpu01
<br>
openmpi-1.4.4]# rpm  -ql blcr-libs
<br>
/usr/lib64/libcr.so.0
<br>
/usr/lib64/libcr.so.0.5.2
<br>
/usr/lib64/libcr_omit.so.0
<br>
/usr/lib64/libcr_omit.so.0.5.2
<br>
/usr/lib64/libcr_run.so.0
<br>
/usr/lib64/libcr_run.so.0.5.2
<br>
/usr/share/doc/blcr-libs-0.8.2 rpm  -ql blcr-libs
<br>
/usr/lib64/libcr.so.0
<br>
/usr/lib64/libcr.so.0.5.2
<br>
/usr/lib64/libcr_omit.so.0
<br>
/usr/lib64/libcr_omit.so.0.5.2
<br>
/usr/lib64/libcr_run.so.0
<br>
/usr/lib64/libcr_run.so.0.5.2
<br>
/usr/share/doc/blcr-libs-0.8.2
<br>
/usr/include/blcr_ioctl.h
<br>
/usr/include/blcr_proc.h
<br>
/usr/include/libcr.h
<br>
/usr/lib64/libcr.so
<br>
/usr/lib64/libcr_omit.so
<br>
/usr/lib64/libcr_run.so
<br>
/usr/share/doc/blcr-devel-0.8.2
<br>
...&quot;
<br>
<p>&quot;..
<br>
[root_at_gpu01 openmpi-1.4.4]# rpm  -ql blcr-libs
<br>
/usr/lib64/libcr.so.0
<br>
/usr/lib64/libcr.so.0.5.2
<br>
/usr/lib64/libcr_omit.so.0
<br>
/usr/lib64/libcr_omit.so.0.5.2
<br>
/usr/lib64/libcr_run.so.0
<br>
/usr/lib64/libcr_run.so.0.5.2
<br>
/usr/share/doc/blcr-libs-0.8.2
<br>
..&quot;
<br>
<p><p>So, how can I  set  the right options  for my  requests  in the
<br>
configure-script what exactly is it looking for (concerning blcr files ..)
<br>
<p>Any help is appreciated,
<br>
<p>Thanks and greetings from Salzburg/Austria/Europe
<br>
<p>Vlad Popa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<li><strong>Previous message:</strong> <a href="17652.php">Yue Guan: "Re: [OMPI users] successful story of building openmpi on cygwin?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<li><strong>Reply:</strong> <a href="17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
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
