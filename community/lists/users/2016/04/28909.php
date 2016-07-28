<?
$subject_val = "[OMPI users] error building openmpi-dev-3793-g896f857 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 09:57:45 2016" -->
<!-- isoreceived="20160408135745" -->
<!-- sent="Fri, 8 Apr 2016 15:57:25 +0200" -->
<!-- isosent="20160408135725" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-dev-3793-g896f857 on Solaris" -->
<!-- id="5707B8C5.8030702_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-08 09:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28908.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28914.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<li><strong>Reply:</strong> <a href="28914.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build openmpi-dev-3793-g896f857 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
<br>
12.1 x86_64) with gcc-5.2.0 and Sun C 5.13. I was successful on
<br>
my Linux machine, but I got the following errors on both Solaris
<br>
platforms with both compilers. In my opinion one include file
<br>
isn't available in the corresponding source code file.
<br>
&quot;/usr/include/sys/statfs.h&quot; contains the structure.
<br>
<p>sunpc1 fd1026 107 more /usr/include/sys/statfs.h
<br>
...
<br>
/*
<br>
&nbsp;&nbsp;* Structure returned by statfs(2) and fstatfs(2).
<br>
&nbsp;&nbsp;* This structure and associated system calls have been replaced
<br>
&nbsp;&nbsp;* by statvfs(2) and fstatvfs(2) and will be removed from the system
<br>
&nbsp;&nbsp;* in a near-future release.
<br>
&nbsp;&nbsp;*/
<br>
<p>struct  statfs {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;short   f_fstyp;        /* File system type */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long    f_bsize;        /* Block size */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long    f_frsize;       /* Fragment size (if supported) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long    f_blocks;       /* Total number of blocks on file system */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long    f_bfree;        /* Total number of free blocks */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ino_t   f_files;        /* Total number of file nodes (inodes) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ino_t   f_ffree;        /* Total number of free file nodes */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char    f_fname[6];     /* Volume name */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char    f_fpack[6];     /* Pack name */
<br>
};
<br>
...
<br>
<p><p><p>tyr openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc 44 tail -15 log.make.SunOS.sparc.64_gcc
<br>
make[2]: Entering directory `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc/opal/mca/mpool/hugepage'
<br>
&nbsp;&nbsp;&nbsp;CC       mpool_hugepage_module.lo
<br>
&nbsp;&nbsp;&nbsp;CC       mpool_hugepage_component.lo
<br>
../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c: In function 'mca_mpool_hugepage_find_hugepages':
<br>
../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c:224:27: error: storage size of 'info' isn't known
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct statfs info;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c:226:13: warning: implicit declaration of function 'statfs' 
<br>
[-Wimplicit-function-declaration]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;statfs (path, &amp;info);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [mpool_hugepage_component.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc/opal/mca/mpool/hugepage'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc 45
<br>
<p><p><p><p>tyr openmpi-dev-3793-g896f857-SunOS.sparc.64_cc 90 tail -11 log.make.SunOS.sparc.64_cc
<br>
&nbsp;&nbsp;&nbsp;CC       mpool_hugepage_module.lo
<br>
&nbsp;&nbsp;&nbsp;CC       mpool_hugepage_component.lo
<br>
&quot;../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c&quot;, line 224: incomplete struct/union/enum statfs: info
<br>
&quot;../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c&quot;, line 226: warning: implicit function declaration: statfs
<br>
&quot;../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c&quot;, line 227: improper member use: f_bsize
<br>
cc: acomp failed for ../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c
<br>
make[2]: *** [mpool_hugepage_component.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_cc/opal/mca/mpool/hugepage'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_cc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-3793-g896f857-SunOS.sparc.64_cc 91
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28910.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28908.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28914.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<li><strong>Reply:</strong> <a href="28914.php">Gilles Gouaillardet: "Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
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
