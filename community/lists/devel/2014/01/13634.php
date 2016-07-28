<?
$subject_val = "Re: [OMPI devel] trunk - non-portable examples/Makefie";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 12:54:28 2014" -->
<!-- isoreceived="20140109175428" -->
<!-- sent="Thu, 9 Jan 2014 17:54:26 +0000" -->
<!-- isosent="20140109175426" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk - non-portable examples/Makefie" -->
<!-- id="D6DCAFD1-6826-434A-AD02-CCA7A3574FD2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17DNb+Zn8SDdCutn4js6jkre3_ytkQa7kAuebFNCejUKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk - non-portable examples/Makefie<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 12:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13635.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13633.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>In reply to:</strong> <a href="13615.php">Paul Hargrove: "[OMPI devel] trunk - non-portable examples/Makefie"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed <a href="https://svn.open-mpi.org/trac/ompi/ticket/4076">https://svn.open-mpi.org/trac/ompi/ticket/4076</a>.
<br>
<p>On Jan 9, 2014, at 1:14 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With Ralph's fix for opal/util/path.c, I can build the trunk on FreeBSD-9/x86-64.
</span><br>
<span class="quotelev1">&gt; However, building the examples fails with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cp -r $SRCDIR/examples .
</span><br>
<span class="quotelev1">&gt; $ cd examples
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; mpicc -g  hello_c.c  -o hello_c
</span><br>
<span class="quotelev1">&gt; mpicc -g  ring_c.c  -o ring_c
</span><br>
<span class="quotelev1">&gt; mpicc -g  connectivity_c.c  -o connectivity_c
</span><br>
<span class="quotelev1">&gt; shmemcc -g  -o hello_oshmem
</span><br>
<span class="quotelev1">&gt; /usr/lib/crt1.o: In function `_start':
</span><br>
<span class="quotelev1">&gt; crt1.c:(.text+0x8a): undefined reference to `main'
</span><br>
<span class="quotelev1">&gt; *** [hello_oshmem] Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples.
</span><br>
<span class="quotelev1">&gt; *** [mpi] Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Notice the lack of a source file on the failing shmemcc command line!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The commands for SHMEM and Java examples all use &quot;$^&quot;, which is NOT supported by FreeBSD's make.
</span><br>
<span class="quotelev1">&gt; I can work-around this by explicitly using gmake, but a portable Makefile would be a better fix.
</span><br>
<span class="quotelev1">&gt; Since all uses of &quot;$^&quot; are for targets having *exactly* one dependency, it is safe/correct to substitute &quot;$?&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13635.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13633.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>In reply to:</strong> <a href="13615.php">Paul Hargrove: "[OMPI devel] trunk - non-portable examples/Makefie"</a>
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
