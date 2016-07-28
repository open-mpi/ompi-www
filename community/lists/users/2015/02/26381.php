<?
$subject_val = "[OMPI users] Why are the static libs different if compiled with or without dynamic switch?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 14:45:54 2015" -->
<!-- isoreceived="20150224194554" -->
<!-- sent="Tue, 24 Feb 2015 14:45:19 -0500" -->
<!-- isosent="20150224194519" -->
<!-- name="twurgl_at_[hidden]" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="[OMPI users] Why are the static libs different if compiled with or without dynamic switch?" -->
<!-- id="y9b385vxfe8.fsf_at_rds4020.akr.goodyear.com" -->
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
<strong>Subject:</strong> [OMPI users] Why are the static libs different if compiled with or without dynamic switch?<br>
<strong>From:</strong> <a href="mailto:twurgl_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Why%20are%20the%20static%20libs%20different%20if%20compiled%20with%20or%20without%20dynamic%20switch?"><em>twurgl_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-02-24 14:45:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26382.php">vithanousek: "[OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26380.php">George Bosilca: "Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Reply:</strong> <a href="26384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am setting up Openmpi 1.8.4.  The first time I compiled, I had the following:
<br>
<p>version=1.8.4.I1404211913
<br>
./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-vt \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/apps/share/openmpi/$version \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-verbs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-memory-manager=none \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-lsf=/apps/share/LSF/9.1.3/9.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-lsf-libdir=/apps/share/LSF/9.1.3/9.1/linux2.6-glibc2.3-x86_64/lib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=&quot;-shared-intel&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-shared-intel&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-ldflags=&quot;-shared-intel&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-shared-intel&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-ext
<br>
<p>And when installed I get (as a sample): 
<br>
<p>&nbsp;&nbsp;-rw-r--r-- 1 tommy 460g3 6881702 Feb 19 14:58 libmpi.a
<br>
<p>Now the second time I install, I had the same as above for the configure, but
<br>
this time I took out the &quot;--disable-shared&quot; option.
<br>
<p>and again, as a sample 
<br>
<p>&nbsp;&nbsp;-rw-r--r-- 1 tommy 460g3 6641598 Feb 24 13:53 libmpi.a
<br>
<p>Can someone tell me why the static libs are different (sizes) when compiling or
<br>
not compiling the dynamic ones?  Seems to me that static ones should be
<br>
identical.  Is this an issue?
<br>
<p>thanks for any info
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26382.php">vithanousek: "[OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26380.php">George Bosilca: "Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Reply:</strong> <a href="26384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
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
