<?
$subject_val = "[OMPI users] Build on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 17 01:07:03 2016" -->
<!-- isoreceived="20160417050703" -->
<!-- sent="Sun, 17 Apr 2016 01:07:01 -0400" -->
<!-- isosent="20160417050701" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Build on FreeBSD" -->
<!-- id="CAHXxYDiC=JSmdcoNppOkpdq+OZTbT8trRcQTXP+UuLE4_kL0-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Build on FreeBSD<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-17 01:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28941.php">dpchoudh .: "[OMPI users] openib failover"</a>
<li><strong>Previous message:</strong> <a href="28939.php">Dorier, Matthieu: "[OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I understand that FreeBSD is not a supported platform, so this may be an
<br>
irrelevant piece of information, but let me pass it on anyway in the hope
<br>
that it might be useful to somebody.
<br>
<p>OpenMPI 1.10.2 (release) successfully compiles on FreeBSD 10.2 (except for
<br>
a minor issue of setting LD_LIBRARY_PATH for Fortran compilation).
<br>
<p>However, the trunk does not build, and the error is as follows:
<br>
<p>Making all in mca/patcher/linux
<br>
&nbsp;&nbsp;CC       patcher_linux_module.lo
<br>
patcher_linux_module.c:44:5: error: expected specifier-qualifier-list
<br>
before 'ElfW'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ElfW(Xword)        size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
patcher_linux_module.c:48:5: error: expected specifier-qualifier-list
<br>
before 'ElfW'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ElfW(Rela)         *tab;
<br>
<p>&lt;And many more similar, snipped for brevity&gt;
<br>
<p>It looks like the file and directory where this issue occurs is a new
<br>
addition in the master branch (for release 2.x, I presume); it does not
<br>
exist in 1.10.2
<br>
<p>I know nothing about the intent of the new code, and it looks like it is
<br>
meant for Linux (only?) anyway, but somehow the autotools is pulling it in
<br>
for FreeBSD as well.
<br>
<p>Thanks
<br>
Durga
<br>
<p><p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28940/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28941.php">dpchoudh .: "[OMPI users] openib failover"</a>
<li><strong>Previous message:</strong> <a href="28939.php">Dorier, Matthieu: "[OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
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
