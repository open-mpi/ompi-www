<?
$subject_val = "Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 10 22:18:13 2016" -->
<!-- isoreceived="20160411021813" -->
<!-- sent="Mon, 11 Apr 2016 11:18:10 +0900" -->
<!-- isosent="20160411021810" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris" -->
<!-- id="570B0962.4080103_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5707B8C5.8030702_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building openmpi-dev-3793-g896f857 on Solaris<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-10 22:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28915.php">Tom Rosmond: "[OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Previous message:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28909.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>i fixed that in 
<br>
<a href="https://github.com/open-mpi/ompi/commit/4ab6c8ad56f5e94a93d641e6898c512509d57159.diff">https://github.com/open-mpi/ompi/commit/4ab6c8ad56f5e94a93d641e6898c512509d57159.diff</a>
<br>
<p>/* Solaris has the statfs() function, but not the struct statfs type (!),
<br>
so a bit more test is required to get it working.
<br>
the fix is highly inspired from what is done in opal/util/path.c */
<br>
<p>Thanks for the report,
<br>
<p>Gilles
<br>
<p>On 4/8/2016 10:57 PM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to build openmpi-dev-3793-g896f857 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev1">&gt; 12.1 x86_64) with gcc-5.2.0 and Sun C 5.13. I was successful on
</span><br>
<span class="quotelev1">&gt; my Linux machine, but I got the following errors on both Solaris
</span><br>
<span class="quotelev1">&gt; platforms with both compilers. In my opinion one include file
</span><br>
<span class="quotelev1">&gt; isn't available in the corresponding source code file.
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/sys/statfs.h&quot; contains the structure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunpc1 fd1026 107 more /usr/include/sys/statfs.h
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Structure returned by statfs(2) and fstatfs(2).
</span><br>
<span class="quotelev1">&gt;  * This structure and associated system calls have been replaced
</span><br>
<span class="quotelev1">&gt;  * by statvfs(2) and fstatvfs(2) and will be removed from the system
</span><br>
<span class="quotelev1">&gt;  * in a near-future release.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct  statfs {
</span><br>
<span class="quotelev1">&gt;         short   f_fstyp;        /* File system type */
</span><br>
<span class="quotelev1">&gt;         long    f_bsize;        /* Block size */
</span><br>
<span class="quotelev1">&gt;         long    f_frsize;       /* Fragment size (if supported) */
</span><br>
<span class="quotelev1">&gt;         long    f_blocks;       /* Total number of blocks on file 
</span><br>
<span class="quotelev1">&gt; system */
</span><br>
<span class="quotelev1">&gt;         long    f_bfree;        /* Total number of free blocks */
</span><br>
<span class="quotelev1">&gt;         ino_t   f_files;        /* Total number of file nodes (inodes) */
</span><br>
<span class="quotelev1">&gt;         ino_t   f_ffree;        /* Total number of free file nodes */
</span><br>
<span class="quotelev1">&gt;         char    f_fname[6];     /* Volume name */
</span><br>
<span class="quotelev1">&gt;         char    f_fpack[6];     /* Pack name */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc 44 tail -15 
</span><br>
<span class="quotelev1">&gt; log.make.SunOS.sparc.64_gcc
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc/opal/mca/mpool/hugepage'
</span><br>
<span class="quotelev1">&gt;   CC       mpool_hugepage_module.lo
</span><br>
<span class="quotelev1">&gt;   CC       mpool_hugepage_component.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c: 
</span><br>
<span class="quotelev1">&gt; In function 'mca_mpool_hugepage_find_hugepages':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c:224:27: 
</span><br>
<span class="quotelev1">&gt; error: storage size of 'info' isn't known
</span><br>
<span class="quotelev1">&gt;              struct statfs info;
</span><br>
<span class="quotelev1">&gt;                            ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c:226:13: 
</span><br>
<span class="quotelev1">&gt; warning: implicit declaration of function 'statfs' 
</span><br>
<span class="quotelev1">&gt; [-Wimplicit-function-declaration]
</span><br>
<span class="quotelev1">&gt;              statfs (path, &amp;info);
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpool_hugepage_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc/opal/mca/mpool/hugepage'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-3793-g896f857-SunOS.sparc.64_gcc 45
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-3793-g896f857-SunOS.sparc.64_cc 90 tail -11 
</span><br>
<span class="quotelev1">&gt; log.make.SunOS.sparc.64_cc
</span><br>
<span class="quotelev1">&gt;   CC       mpool_hugepage_module.lo
</span><br>
<span class="quotelev1">&gt;   CC       mpool_hugepage_component.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 224: incomplete struct/union/enum statfs: info
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 226: warning: implicit function declaration: statfs
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 227: improper member use: f_bsize
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-3793-g896f857/opal/mca/mpool/hugepage/mpool_hugepage_component.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpool_hugepage_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_cc/opal/mca/mpool/hugepage'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-3793-g896f857-SunOS.sparc.64_cc/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-3793-g896f857-SunOS.sparc.64_cc 91
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28909.php">http://www.open-mpi.org/community/lists/users/2016/04/28909.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28915.php">Tom Rosmond: "[OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>Previous message:</strong> <a href="28913.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28909.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
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
