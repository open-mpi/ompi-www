<?
$subject_val = "Re: [OMPI devel] ompi-ps broken or just changed?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 05:08:10 2009" -->
<!-- isoreceived="20090518090810" -->
<!-- sent="Mon, 18 May 2009 10:09:03 +0100" -->
<!-- isosent="20090518090903" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-ps broken or just changed?" -->
<!-- id="1242637743.19482.6.camel_at_localhost.localdomain" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BFAC48F4-67DE-4B22-A440-C5F150F8B42B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-ps broken or just changed?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 05:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<li><strong>Previous message:</strong> <a href="6058.php">Rainer Keller: "[OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<li><strong>In reply to:</strong> <a href="6057.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6062.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Reply:</strong> <a href="6062.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Reply:</strong> <a href="6063.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No joy I'm afraid,  now I get errors when I run it.  This is a single
<br>
node job run with the command line &quot;mpirun -n 3 ./a.out&quot;.  I've attached
<br>
the strace output and gzipped /tmp files from the machine.  Valgrind on
<br>
the opmi-ps process doesn't show anything interesting.
<br>
<p>[alpha:29942] [[35044,0],0] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in
<br>
file /mnt/home/debian/ashley/code/OpenMPI/ompi-trunk-tes/trunk/orte/util/comm/comm.c at line 242
<br>
[alpha:29942] [[35044,0],0] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in
<br>
file /mnt/home/debian/ashley/code/OpenMPI/ompi-trunk-tes/trunk/orte/tools/orte-ps/orte-ps.c at line 818
<br>
<p>Ashley.
<br>
<p>On Sat, 2009-05-16 at 08:15 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; This is fixed now, Ashley - sorry for the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 15, 2009, at 4:47 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2009-05-14 at 22:49 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It is definitely broken at the moment, Ashley. I have it pretty well
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fixed, but need/want to cleanup some corner cases that have plagued  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; us
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for a long time.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Should have it for you sometime Friday.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok, thanks.  I might try switching to slurm in the mean-time, I know  
</span><br>
<span class="quotelev2">&gt; &gt; my
</span><br>
<span class="quotelev2">&gt; &gt; code works with that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you let me know when it's fixed on or off list and I'll do an
</span><br>
<span class="quotelev2">&gt; &gt; update.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ashley,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<p>
execve(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/bin/ompi-ps&quot;, [&quot;ompi-ps&quot;], [/* 37 vars */]) = 0
<br>
brk(0)                                  = 0x9e61000
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
mmap2(NULL, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb8069000
<br>
access(&quot;/etc/ld.so.preload&quot;, R_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/i686/sse2/cmov/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/i686/sse2/cmov&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/i686/sse2/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/i686/sse2&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/i686/cmov/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/i686/cmov&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/i686/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/i686&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/sse2/cmov/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/sse2/cmov&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/sse2/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/sse2&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/cmov/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/cmov&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/tls&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/i686/sse2/cmov/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/i686/sse2/cmov&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/i686/sse2/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/i686/sse2&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/i686/cmov/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/i686/cmov&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/i686/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/i686&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/sse2/cmov/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/sse2/cmov&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/sse2/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/sse2&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/cmov/libopen-rte.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/cmov&quot;, 0xbfe88440) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-rte.so.0&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0`\253\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=364905, ...}) = 0
<br>
mmap2(NULL, 319200, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb801b000
<br>
mmap2(0xb8066000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x4b) = 0xb8066000
<br>
mmap2(0xb8068000, 3808, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0xb8068000
<br>
close(3)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libnsl.so.1&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/etc/ld.so.cache&quot;, O_RDONLY)      = 3
<br>
fstat64(3, {st_mode=S_IFREG|0644, st_size=58877, ...}) = 0
<br>
mmap2(NULL, 58877, PROT_READ, MAP_PRIVATE, 3, 0) = 0xb800c000
<br>
close(3)                                = 0
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/lib/i686/cmov/libnsl.so.1&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0p1\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0644, st_size=87804, ...}) = 0
<br>
mmap2(NULL, 100328, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb7ff3000
<br>
mmap2(0xb8008000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x14) = 0xb8008000
<br>
mmap2(0xb800a000, 6120, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0xb800a000
<br>
close(3)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libutil.so.1&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/lib/i686/cmov/libutil.so.1&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\340\t\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0644, st_size=9684, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb7ff2000
<br>
mmap2(NULL, 12424, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb7fee000
<br>
mmap2(0xb7ff0000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x1) = 0xb7ff0000
<br>
close(3)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libm.so.6&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/lib/i686/cmov/libm.so.6&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0_at_4\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0644, st_size=149328, ...}) = 0
<br>
mmap2(NULL, 151680, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb7fc8000
<br>
mmap2(0xb7fec000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x23) = 0xb7fec000
<br>
close(3)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libpthread.so.0&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/lib/i686/cmov/libpthread.so.0&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0 H\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=116294, ...}) = 0
<br>
mmap2(NULL, 98772, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb7faf000
<br>
mmap2(0xb7fc4000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x14) = 0xb7fc4000
<br>
mmap2(0xb7fc6000, 4564, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0xb7fc6000
<br>
close(3)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libc.so.6&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/lib/i686/cmov/libc.so.6&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\320h\1\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=1433988, ...}) = 0
<br>
mmap2(NULL, 1439312, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb7e4f000
<br>
mmap2(0xb7fa9000, 12288, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x15a) = 0xb7fa9000
<br>
mmap2(0xb7fac000, 9808, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0xb7fac000
<br>
close(3)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\260\270\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=367269, ...}) = 0
<br>
mmap2(NULL, 310984, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb7e03000
<br>
mmap2(0xb7e4b000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x48) = 0xb7e4b000
<br>
mmap2(0xb7e4d000, 7880, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0xb7e4d000
<br>
close(3)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libdl.so.2&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/lib/i686/cmov/libdl.so.2&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0 \n\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0644, st_size=9676, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb7e02000
<br>
mmap2(NULL, 12408, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb7dfe000
<br>
mmap2(0xb7e00000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x1) = 0xb7e00000
<br>
close(3)                                = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb7dfd000
<br>
set_thread_area({entry_number:-1 -&gt; 6, base_addr:0xb7dfd6c0, limit:1048575, seg_32bit:1, contents:0, read_exec_only:0, limit_in_pages:1, seg_not_present:0, useable:1}) = 0
<br>
open(&quot;/dev/urandom&quot;, O_RDONLY)          = 3
<br>
read(3, &quot;)\356:|&quot;, 4)                   = 4
<br>
close(3)                                = 0
<br>
mprotect(0xb7e00000, 4096, PROT_READ)   = 0
<br>
mprotect(0xb7fa9000, 8192, PROT_READ)   = 0
<br>
mprotect(0xb7fc4000, 4096, PROT_READ)   = 0
<br>
mprotect(0xb7fec000, 4096, PROT_READ)   = 0
<br>
mprotect(0xb7ff0000, 4096, PROT_READ)   = 0
<br>
mprotect(0xb8008000, 4096, PROT_READ)   = 0
<br>
mprotect(0xb8088000, 4096, PROT_READ)   = 0
<br>
munmap(0xb800c000, 58877)               = 0
<br>
set_tid_address(0xb7dfd708)             = 29915
<br>
set_robust_list(0xb7dfd710, 0xc)        = 0
<br>
futex(0xbfe88af0, FUTEX_WAKE_PRIVATE, 1) = 0
<br>
rt_sigaction(SIGRTMIN, {0xb7fb32e0, [], SA_SIGINFO}, NULL, 8) = 0
<br>
rt_sigaction(SIGRT_1, {0xb7fb3710, [], SA_RESTART|SA_SIGINFO}, NULL, 8) = 0
<br>
rt_sigprocmask(SIG_UNBLOCK, [RTMIN RT_1], NULL, 8) = 0
<br>
getrlimit(RLIMIT_STACK, {rlim_cur=8192*1024, rlim_max=RLIM_INFINITY}) = 0
<br>
uname({sys=&quot;Linux&quot;, node=&quot;alpha&quot;, ...}) = 0
<br>
brk(0)                                  = 0x9e61000
<br>
brk(0x9e82000)                          = 0x9e82000
<br>
uname({sys=&quot;Linux&quot;, node=&quot;alpha&quot;, ...}) = 0
<br>
getcwd(&quot;/mnt/home/debian/ashley/code/padb&quot;, 4096) = 34
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/etc/openmpi-mca-params.conf&quot;, O_RDONLY) = 3
<br>
ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0xbfe88658) = -1 ENOTTY (Inappropriate ioctl for device)
<br>
fstat64(3, {st_mode=S_IFREG|0644, st_size=2812, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb801a000
<br>
read(3, &quot;#\n# Copyright (c) 2004-2005 The &quot;..., 8192) = 2812
<br>
read(3, &quot;&quot;, 4096)                       = 0
<br>
read(3, &quot;&quot;, 8192)                       = 0
<br>
ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0xbfe885d8) = -1 ENOTTY (Inappropriate ioctl for device)
<br>
close(3)                                = 0
<br>
munmap(0xb801a000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/.openmpi/mca-params.conf&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
uname({sys=&quot;Linux&quot;, node=&quot;alpha&quot;, ...}) = 0
<br>
rt_sigaction(SIGABRT, NULL, {SIG_DFL, [], 0}, 8) = 0
<br>
rt_sigaction(SIGABRT, {0xb7e34fb0, [], SA_RESETHAND|SA_SIGINFO}, NULL, 8) = 0
<br>
rt_sigaction(SIGBUS, NULL, {SIG_DFL, [], 0}, 8) = 0
<br>
rt_sigaction(SIGBUS, {0xb7e34fb0, [], SA_RESETHAND|SA_SIGINFO}, NULL, 8) = 0
<br>
rt_sigaction(SIGFPE, NULL, {SIG_DFL, [], 0}, 8) = 0
<br>
rt_sigaction(SIGFPE, {0xb7e34fb0, [], SA_RESETHAND|SA_SIGINFO}, NULL, 8) = 0
<br>
rt_sigaction(SIGSEGV, NULL, {SIG_DFL, [], 0}, 8) = 0
<br>
rt_sigaction(SIGSEGV, {0xb7e34fb0, [], SA_RESETHAND|SA_SIGINFO}, NULL, 8) = 0
<br>
getrlimit(RLIMIT_NOFILE, {rlim_cur=1024, rlim_max=1024}) = 0
<br>
getrlimit(RLIMIT_NPROC, {rlim_cur=RLIM_INFINITY, rlim_max=RLIM_INFINITY}) = 0
<br>
getrlimit(RLIMIT_FSIZE, {rlim_cur=RLIM_INFINITY, rlim_max=RLIM_INFINITY}) = 0
<br>
uname({sys=&quot;Linux&quot;, node=&quot;alpha&quot;, ...}) = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi&quot;, O_RDONLY|O_NONBLOCK|O_LARGEFILE|O_DIRECTORY|O_CLOEXEC) = 3
<br>
fstat64(3, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
<br>
fcntl64(3, F_GETFD)                     = 0x1 (flags FD_CLOEXEC)
<br>
getdents(3, /* 133 entries */, 4096)    = 4072
<br>
getdents(3, /* 7 entries */, 4096)      = 224
<br>
getdents(3, /* 0 entries */, 4096)      = 0
<br>
close(3)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_LARGEFILE|O_DIRECTORY|O_CLOEXEC) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_paffinity_linux.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_paffinity_linux.la&quot;, O_RDONLY) = 3
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=1057, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb801a000
<br>
read(3, &quot;# mca_paffinity_linux.la - a lib&quot;..., 4096) = 1057
<br>
read(3, &quot;&quot;, 4096)                       = 0
<br>
close(3)                                = 0
<br>
munmap(0xb801a000, 4096)                = 0
<br>
futex(0xb7e0106c, FUTEX_WAKE_PRIVATE, 2147483647) = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_paffinity_linux.so&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0 \n\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=24561, ...}) = 0
<br>
mmap2(NULL, 17344, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb8016000
<br>
mmap2(0xb801a000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x4) = 0xb801a000
<br>
close(3)                                = 0
<br>
sched_getaffinity(0, 128,  { 3 })       = 4
<br>
sched_setaffinity(0, 4,  { bf8f73ec })  = -1 EFAULT (Bad address)
<br>
access(&quot;/sys/devices/system/cpu&quot;, R_OK|X_OK) = 0
<br>
open(&quot;/sys/devices/system/cpu&quot;, O_RDONLY|O_NONBLOCK|O_LARGEFILE|O_DIRECTORY|O_CLOEXEC) = 3
<br>
fstat64(3, {st_mode=S_IFDIR|0755, st_size=0, ...}) = 0
<br>
getdents(3, /* 11 entries */, 4096)     = 224
<br>
getdents(3, /* 0 entries */, 4096)      = 0
<br>
close(3)                                = 0
<br>
open(&quot;/sys/devices/system/cpu/cpu0/online&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/sys/devices/system/cpu/cpu0/topology/core_id&quot;, O_RDONLY) = 3
<br>
read(3, &quot;0\n&quot;, 7)                       = 2
<br>
close(3)                                = 0
<br>
open(&quot;/sys/devices/system/cpu/cpu0/topology/physical_package_id&quot;, O_RDONLY) = 3
<br>
read(3, &quot;0\n&quot;, 7)                       = 2
<br>
close(3)                                = 0
<br>
open(&quot;/sys/devices/system/cpu/cpu1/online&quot;, O_RDONLY) = 3
<br>
read(3, &quot;1\n&quot;, 7)                       = 2
<br>
close(3)                                = 0
<br>
open(&quot;/sys/devices/system/cpu/cpu1/topology/core_id&quot;, O_RDONLY) = 3
<br>
read(3, &quot;0\n&quot;, 7)                       = 2
<br>
close(3)                                = 0
<br>
open(&quot;/sys/devices/system/cpu/cpu1/topology/physical_package_id&quot;, O_RDONLY) = 3
<br>
read(3, &quot;0\n&quot;, 7)                       = 2
<br>
close(3)                                = 0
<br>
mmap2(NULL, 4198400, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb79fc000
<br>
munmap(0xb79fc000, 4198400)             = 0
<br>
mmap2(NULL, 1052672, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb7cfc000
<br>
munmap(0xb7cfc000, 1052672)             = 0
<br>
mmap2(NULL, 4096, PROT_READ, MAP_FILE|MAP_ANONYMOUS, -1, 0) = -1 EINVAL (Invalid argument)
<br>
munmap(0xffffffff, 4096)                = -1 EINVAL (Invalid argument)
<br>
open(&quot;/proc/cpuinfo&quot;, O_RDONLY)         = 3
<br>
fstat64(3, {st_mode=S_IFREG|0444, st_size=0, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb8014000
<br>
_llseek(3, 0, [0], SEEK_SET)            = 0
<br>
read(3, &quot;processor\t: 0\nvendor_id\t: Genuin&quot;..., 1024) = 1024
<br>
read(3, &quot; fpu vme de pse tsc msr pae mce &quot;..., 1024) = 264
<br>
read(3, &quot;&quot;, 1024)                       = 0
<br>
_llseek(3, 0, [0], SEEK_SET)            = 0
<br>
read(3, &quot;processor\t: 0\nvendor_id\t: Genuin&quot;..., 1024) = 1024
<br>
close(3)                                = 0
<br>
munmap(0xb8014000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_carto_auto_detect.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_carto_auto_detect.la&quot;, O_RDONLY) = 3
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=1069, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb8015000
<br>
read(3, &quot;# mca_carto_auto_detect.la - a l&quot;..., 4096) = 1069
<br>
read(3, &quot;&quot;, 4096)                       = 0
<br>
close(3)                                = 0
<br>
munmap(0xb8015000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_carto_auto_detect.so&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\220\6\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=7631, ...}) = 0
<br>
mmap2(NULL, 7088, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb8014000
<br>
mmap2(0xb8015000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0) = 0xb8015000
<br>
close(3)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_carto_file.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_carto_file.la&quot;, O_RDONLY) = 3
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=1027, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb8013000
<br>
read(3, &quot;# mca_carto_file.la - a libtool &quot;..., 4096) = 1027
<br>
read(3, &quot;&quot;, 4096)                       = 0
<br>
close(3)                                = 0
<br>
munmap(0xb8013000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_carto_file.so&quot;, O_RDONLY) = 3
<br>
read(3, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\260\r\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(3, {st_mode=S_IFREG|0755, st_size=25096, ...}) = 0
<br>
mmap2(NULL, 17196, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0xb800f000
<br>
mmap2(0xb8013000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x4) = 0xb8013000
<br>
close(3)                                = 0
<br>
munmap(0xb800f000, 17196)               = 0
<br>
gettimeofday({1242637260, 71594}, NULL) = 0
<br>
socketpair(PF_FILE, SOCK_STREAM, 0, [3, 4]) = 0
<br>
fcntl64(3, F_SETFD, FD_CLOEXEC)         = 0
<br>
fcntl64(4, F_SETFD, FD_CLOEXEC)         = 0
<br>
fcntl64(3, F_SETFL, O_RDONLY|O_NONBLOCK) = 0
<br>
uname({sys=&quot;Linux&quot;, node=&quot;alpha&quot;, ...}) = 0
<br>
brk(0x9ea4000)                          = 0x9ea4000
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_env.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_env.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1009, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb8013000
<br>
read(5, &quot;# mca_ess_env.la - a libtool lib&quot;..., 4096) = 1009
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb8013000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_env.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0 \v\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=11666, ...}) = 0
<br>
mmap2(NULL, 10332, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb8011000
<br>
mmap2(0xb8013000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1) = 0xb8013000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_hnp.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_hnp.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1009, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb8010000
<br>
read(5, &quot;# mca_ess_hnp.la - a libtool lib&quot;..., 4096) = 1009
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb8010000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_hnp.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0`\30\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=20538, ...}) = 0
<br>
mmap2(NULL, 13244, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb800d000
<br>
mmap2(0xb8010000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x3) = 0xb8010000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_singleton.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_singleton.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1045, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800c000
<br>
read(5, &quot;# mca_ess_singleton.la - a libto&quot;..., 4096) = 1045
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800c000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_singleton.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\300\r\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=13665, ...}) = 0
<br>
mmap2(NULL, 11868, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7dfa000
<br>
mmap2(0xb7dfc000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1) = 0xb7dfc000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_slave.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_slave.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1021, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800c000
<br>
read(5, &quot;# mca_ess_slave.la - a libtool l&quot;..., 4096) = 1021
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800c000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_slave.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\240\10\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=9850, ...}) = 0
<br>
mmap2(NULL, 4796, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7df8000
<br>
mmap2(0xb7df9000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1) = 0xb7df9000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_slurm.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_slurm.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1021, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800c000
<br>
read(5, &quot;# mca_ess_slurm.la - a libtool l&quot;..., 4096) = 1021
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800c000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_slurm.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0 \f\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=12362, ...}) = 0
<br>
mmap2(NULL, 10940, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7df5000
<br>
mmap2(0xb7df7000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1) = 0xb7df7000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_slurmd.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_slurmd.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1027, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800c000
<br>
read(5, &quot;# mca_ess_slurmd.la - a libtool &quot;..., 4096) = 1027
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800c000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_slurmd.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0P\f\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=13570, ...}) = 0
<br>
mmap2(NULL, 12064, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7df2000
<br>
mmap2(0xb7df4000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1) = 0xb7df4000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_tool.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_tool.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1015, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800c000
<br>
read(5, &quot;# mca_ess_tool.la - a libtool li&quot;..., 4096) = 1015
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800c000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_ess_tool.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0@\7\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=8139, ...}) = 0
<br>
mmap2(NULL, 7676, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7df0000
<br>
mmap2(0xb7df1000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0) = 0xb7df1000
<br>
close(5)                                = 0
<br>
munmap(0xb8011000, 10332)               = 0
<br>
munmap(0xb800d000, 13244)               = 0
<br>
munmap(0xb7dfa000, 11868)               = 0
<br>
munmap(0xb7df8000, 4796)                = 0
<br>
munmap(0xb7df5000, 10940)               = 0
<br>
munmap(0xb7df2000, 12064)               = 0
<br>
rt_sigaction(SIGCHLD, {0xb7e20420, [CHLD], SA_RESTART}, {SIG_DFL, [], 0}, 8) = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_plm_rsh.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_plm_rsh.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1009, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb8013000
<br>
read(5, &quot;# mca_plm_rsh.la - a libtool lib&quot;..., 4096) = 1009
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb8013000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_plm_rsh.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\240\33\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=30032, ...}) = 0
<br>
mmap2(NULL, 25920, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb800d000
<br>
mmap2(0xb8013000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x5) = 0xb8013000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_plm_slurm.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_plm_slurm.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1021, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800c000
<br>
read(5, &quot;# mca_plm_slurm.la - a libtool l&quot;..., 4096) = 1021
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800c000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_plm_slurm.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0000\23\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=16920, ...}) = 0
<br>
mmap2(NULL, 14420, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7df9000
<br>
mmap2(0xb7dfc000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2) = 0xb7dfc000
<br>
close(5)                                = 0
<br>
getcwd(&quot;/mnt/home/debian/ashley/code/padb&quot;, 4097) = 34
<br>
stat64(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/bin//ssh&quot;, 0xbfe87674) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/usr/local/bin/ssh&quot;, 0xbfe87674) = -1 ENOENT (No such file or directory)
<br>
stat64(&quot;/usr/bin/ssh&quot;, {st_mode=S_IFREG|0755, st_size=332928, ...}) = 0
<br>
stat64(&quot;//usr/bin/ssh&quot;, {st_mode=S_IFREG|0755, st_size=332928, ...}) = 0
<br>
munmap(0xb7df9000, 14420)               = 0
<br>
munmap(0xb800d000, 25920)               = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_rml_oob.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_rml_oob.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1009, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb8013000
<br>
read(5, &quot;# mca_rml_oob.la - a libtool lib&quot;..., 4096) = 1009
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb8013000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_rml_oob.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\340\r\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=23274, ...}) = 0
<br>
mmap2(NULL, 20404, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb800f000
<br>
mmap2(0xb8013000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x3) = 0xb8013000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_oob_tcp.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_oob_tcp.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1009, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800e000
<br>
read(5, &quot;# mca_oob_tcp.la - a libtool lib&quot;..., 4096) = 1009
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800e000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_oob_tcp.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\240\36\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=66651, ...}) = 0
<br>
mmap2(NULL, 55956, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7de2000
<br>
mmap2(0xb7def000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0xd) = 0xb7def000
<br>
close(5)                                = 0
<br>
socket(PF_INET, SOCK_DGRAM, IPPROTO_IP) = 5
<br>
ioctl(5, SIOCGIFCONF, {64, {{&quot;lo&quot;, {AF_INET, inet_addr(&quot;127.0.0.1&quot;)}}, {&quot;wlan0&quot;, {AF_INET, inet_addr(&quot;192.168.1.67&quot;)}}}}) = 0
<br>
ioctl(5, SIOCGIFCONF, {64, {{&quot;lo&quot;, {AF_INET, inet_addr(&quot;127.0.0.1&quot;)}}, {&quot;wlan0&quot;, {AF_INET, inet_addr(&quot;192.168.1.67&quot;)}}}}) = 0
<br>
ioctl(5, SIOCGIFFLAGS, {ifr_name=&quot;lo&quot;, ifr_flags=IFF_UP|IFF_LOOPBACK|IFF_RUNNING}) = 0
<br>
ioctl(5, SIOCGIFINDEX, {ifr_name=&quot;lo&quot;, ifr_index=1}) = 0
<br>
ioctl(5, SIOCGIFADDR, {ifr_name=&quot;lo&quot;, ifr_addr={AF_INET, inet_addr(&quot;127.0.0.1&quot;)}}) = 0
<br>
ioctl(5, SIOCGIFNETMASK, {ifr_name=&quot;lo&quot;, ifr_netmask={AF_INET, inet_addr(&quot;255.0.0.0&quot;)}}) = 0
<br>
ioctl(5, SIOCGIFFLAGS, {ifr_name=&quot;wlan0&quot;, ifr_flags=IFF_UP|IFF_BROADCAST|IFF_RUNNING|IFF_MULTICAST}) = 0
<br>
ioctl(5, SIOCGIFINDEX, {ifr_name=&quot;wlan0&quot;, ifr_index=4}) = 0
<br>
ioctl(5, SIOCGIFADDR, {ifr_name=&quot;wlan0&quot;, ifr_addr={AF_INET, inet_addr(&quot;192.168.1.67&quot;)}}) = 0
<br>
ioctl(5, SIOCGIFNETMASK, {ifr_name=&quot;wlan0&quot;, ifr_netmask={AF_INET, inet_addr(&quot;255.255.255.0&quot;)}}) = 0
<br>
close(5)                                = 0
<br>
open(&quot;/proc/net/if_inet6&quot;, O_RDONLY)    = 5
<br>
fstat64(5, {st_mode=S_IFREG|0444, st_size=0, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800e000
<br>
read(5, &quot;00000000000000000000000000000001&quot;..., 1024) = 108
<br>
read(5, &quot;&quot;, 1024)                       = 0
<br>
read(5, &quot;&quot;, 1024)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800e000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_binomial.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_binomial.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1057, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800e000
<br>
read(5, &quot;# mca_routed_binomial.la - a lib&quot;..., 4096) = 1057
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800e000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_binomial.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\200\16\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=17373, ...}) = 0
<br>
mmap2(NULL, 15556, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7df9000
<br>
mmap2(0xb7dfc000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2) = 0xb7dfc000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_direct.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_direct.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1045, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800e000
<br>
read(5, &quot;# mca_routed_direct.la - a libto&quot;..., 4096) = 1045
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800e000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_direct.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\200\7\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=9642, ...}) = 0
<br>
mmap2(NULL, 4900, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb800d000
<br>
mmap2(0xb800e000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1) = 0xb800e000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_linear.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_linear.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1045, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800c000
<br>
read(5, &quot;# mca_routed_linear.la - a libto&quot;..., 4096) = 1045
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800c000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_linear.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0P\r\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=15109, ...}) = 0
<br>
mmap2(NULL, 13552, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7df5000
<br>
mmap2(0xb7df8000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2) = 0xb7df8000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_radix.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_radix.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1039, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800c000
<br>
read(5, &quot;# mca_routed_radix.la - a libtoo&quot;..., 4096) = 1039
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800c000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_radix.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\300\16\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=17498, ...}) = 0
<br>
mmap2(NULL, 15652, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7dde000
<br>
mmap2(0xb7de1000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2) = 0xb7de1000
<br>
close(5)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_slave.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_slave.la&quot;, O_RDONLY) = 5
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=1039, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800c000
<br>
read(5, &quot;# mca_routed_slave.la - a libtoo&quot;..., 4096) = 1039
<br>
read(5, &quot;&quot;, 4096)                       = 0
<br>
close(5)                                = 0
<br>
munmap(0xb800c000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_routed_slave.so&quot;, O_RDONLY) = 5
<br>
read(5, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\360\6\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(5, {st_mode=S_IFREG|0755, st_size=9618, ...}) = 0
<br>
mmap2(NULL, 4940, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5, 0) = 0xb7df3000
<br>
mmap2(0xb7df4000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1) = 0xb7df4000
<br>
close(5)                                = 0
<br>
munmap(0xb800d000, 4900)                = 0
<br>
munmap(0xb7df5000, 13552)               = 0
<br>
munmap(0xb7dde000, 15652)               = 0
<br>
munmap(0xb7df3000, 4940)                = 0
<br>
nanosleep({0, 0}, NULL)                 = 0
<br>
socket(PF_INET, SOCK_STREAM, IPPROTO_IP) = 5
<br>
setsockopt(5, SOL_TCP, TCP_NODELAY, [1], 4) = 0
<br>
setsockopt(5, SOL_SOCKET, SO_SNDBUF, [131072], 4) = 0
<br>
setsockopt(5, SOL_SOCKET, SO_RCVBUF, [131072], 4) = 0
<br>
socket(PF_NETLINK, SOCK_RAW, 0)         = 6
<br>
bind(6, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 0
<br>
getsockname(6, {sa_family=AF_NETLINK, pid=29915, groups=00000000}, [12]) = 0
<br>
time(NULL)                              = 1242637260
<br>
sendto(6, &quot;\24\0\0\0\26\0\1\3\314#\21J\0\0\0\0\0\0\0\0&quot;, 20, 0, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 20
<br>
recvmsg(6, {msg_name(12)={sa_family=AF_NETLINK, pid=0, groups=00000000}, msg_iov(1)=[{&quot;0\0\0\0\24\0\2\0\314#\21J\333t\0\0\2\10\200\376\1\0\0\0\10\0\1\0\177\0\0\1&quot;..., 4096}], msg_controllen=0, msg_flags=0}, 0) = 108
<br>
recvmsg(6, {msg_name(12)={sa_family=AF_NETLINK, pid=0, groups=00000000}, msg_iov(1)=[{&quot;@\0\0\0\24\0\2\0\314#\21J\333t\0\0\n\200\200\376\1\0\0\0\24\0\1\0\0\0\0\0&quot;..., 4096}], msg_controllen=0, msg_flags=0}, 0) = 128
<br>
recvmsg(6, {msg_name(12)={sa_family=AF_NETLINK, pid=0, groups=00000000}, msg_iov(1)=[{&quot;\24\0\0\0\3\0\2\0\314#\21J\333t\0\0\0\0\0\0\1\0\0\0\24\0\1\0\0\0\0\0&quot;..., 4096}], msg_controllen=0, msg_flags=0}, 0) = 20
<br>
close(6)                                = 0
<br>
setsockopt(5, SOL_SOCKET, SO_REUSEADDR, [0], 4) = 0
<br>
bind(5, {sa_family=AF_INET, sin_port=htons(0), sin_addr=inet_addr(&quot;0.0.0.0&quot;)}, 16) = 0
<br>
getsockname(5, {sa_family=AF_INET, sin_port=htons(41269), sin_addr=inet_addr(&quot;0.0.0.0&quot;)}, [16]) = 0
<br>
listen(5, 128)                          = 0
<br>
fcntl64(5, F_GETFL)                     = 0x2 (flags O_RDWR)
<br>
fcntl64(5, F_SETFL, O_RDWR|O_NONBLOCK)  = 0
<br>
socket(PF_INET6, SOCK_STREAM, IPPROTO_IP) = 6
<br>
setsockopt(6, SOL_TCP, TCP_NODELAY, [1], 4) = 0
<br>
setsockopt(6, SOL_SOCKET, SO_SNDBUF, [131072], 4) = 0
<br>
setsockopt(6, SOL_SOCKET, SO_RCVBUF, [131072], 4) = 0
<br>
socket(PF_NETLINK, SOCK_RAW, 0)         = 7
<br>
bind(7, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 0
<br>
getsockname(7, {sa_family=AF_NETLINK, pid=29915, groups=00000000}, [12]) = 0
<br>
time(NULL)                              = 1242637260
<br>
sendto(7, &quot;\24\0\0\0\26\0\1\3\314#\21J\0\0\0\0\0\0\0\0&quot;, 20, 0, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 20
<br>
recvmsg(7, {msg_name(12)={sa_family=AF_NETLINK, pid=0, groups=00000000}, msg_iov(1)=[{&quot;0\0\0\0\24\0\2\0\314#\21J\333t\0\0\2\10\200\376\1\0\0\0\10\0\1\0\177\0\0\1&quot;..., 4096}], msg_controllen=0, msg_flags=0}, 0) = 108
<br>
recvmsg(7, {msg_name(12)={sa_family=AF_NETLINK, pid=0, groups=00000000}, msg_iov(1)=[{&quot;@\0\0\0\24\0\2\0\314#\21J\333t\0\0\n\200\200\376\1\0\0\0\24\0\1\0\0\0\0\0&quot;..., 4096}], msg_controllen=0, msg_flags=0}, 0) = 128
<br>
recvmsg(7, {msg_name(12)={sa_family=AF_NETLINK, pid=0, groups=00000000}, msg_iov(1)=[{&quot;\24\0\0\0\3\0\2\0\314#\21J\333t\0\0\0\0\0\0\1\0\0\0\24\0\1\0\0\0\0\0&quot;..., 4096}], msg_controllen=0, msg_flags=0}, 0) = 20
<br>
close(7)                                = 0
<br>
setsockopt(6, SOL_IPV6, IPV6_V6ONLY, [0], 4) = 0
<br>
setsockopt(6, SOL_SOCKET, SO_REUSEADDR, [0], 4) = 0
<br>
bind(6, {sa_family=AF_INET6, sin6_port=htons(0), inet_pton(AF_INET6, &quot;::&quot;, &amp;sin6_addr), sin6_flowinfo=0, sin6_scope_id=0}, 28) = 0
<br>
getsockname(6, {sa_family=AF_INET6, sin6_port=htons(34709), inet_pton(AF_INET6, &quot;::&quot;, &amp;sin6_addr), sin6_flowinfo=0, sin6_scope_id=0}, [28]) = 0
<br>
listen(6, 128)                          = 0
<br>
fcntl64(6, F_GETFL)                     = 0x2 (flags O_RDWR)
<br>
fcntl64(6, F_SETFL, O_RDWR|O_NONBLOCK)  = 0
<br>
getuid32()                              = 1000
<br>
socket(PF_FILE, 0x80801 /* SOCK_??? */, 0) = 7
<br>
connect(7, {sa_family=AF_FILE, path=&quot;/var/run/nscd/socket&quot;}, 110) = -1 ENOENT (No such file or directory)
<br>
close(7)                                = 0
<br>
socket(PF_FILE, 0x80801 /* SOCK_??? */, 0) = 7
<br>
connect(7, {sa_family=AF_FILE, path=&quot;/var/run/nscd/socket&quot;}, 110) = -1 ENOENT (No such file or directory)
<br>
close(7)                                = 0
<br>
open(&quot;/etc/nsswitch.conf&quot;, O_RDONLY)    = 7
<br>
fstat64(7, {st_mode=S_IFREG|0644, st_size=513, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800e000
<br>
read(7, &quot;# /etc/nsswitch.conf\n#\n# Example&quot;..., 4096) = 513
<br>
read(7, &quot;&quot;, 4096)                       = 0
<br>
close(7)                                = 0
<br>
munmap(0xb800e000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libnss_compat.so.2&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/etc/ld.so.cache&quot;, O_RDONLY)      = 7
<br>
fstat64(7, {st_mode=S_IFREG|0644, st_size=58877, ...}) = 0
<br>
mmap2(NULL, 58877, PROT_READ, MAP_PRIVATE, 7, 0) = 0xb7dd3000
<br>
close(7)                                = 0
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/lib/i686/cmov/libnss_compat.so.2&quot;, O_RDONLY) = 7
<br>
read(7, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\20\16\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(7, {st_mode=S_IFREG|0644, st_size=30436, ...}) = 0
<br>
mmap2(NULL, 33356, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7, 0) = 0xb7dca000
<br>
mmap2(0xb7dd1000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x6) = 0xb7dd1000
<br>
close(7)                                = 0
<br>
mprotect(0xb7dd1000, 4096, PROT_READ)   = 0
<br>
munmap(0xb7dd3000, 58877)               = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libnss_nis.so.2&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/etc/ld.so.cache&quot;, O_RDONLY)      = 7
<br>
fstat64(7, {st_mode=S_IFREG|0644, st_size=58877, ...}) = 0
<br>
mmap2(NULL, 58877, PROT_READ, MAP_PRIVATE, 7, 0) = 0xb7dd3000
<br>
close(7)                                = 0
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/lib/i686/cmov/libnss_nis.so.2&quot;, O_RDONLY) = 7
<br>
read(7, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0@\31\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(7, {st_mode=S_IFREG|0644, st_size=38444, ...}) = 0
<br>
mmap2(NULL, 41532, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7, 0) = 0xb7dbf000
<br>
mmap2(0xb7dc8000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x8) = 0xb7dc8000
<br>
close(7)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/libnss_files.so.2&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
access(&quot;/etc/ld.so.nohwcap&quot;, F_OK)      = -1 ENOENT (No such file or directory)
<br>
open(&quot;/lib/i686/cmov/libnss_files.so.2&quot;, O_RDONLY) = 7
<br>
read(7, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\20\31\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(7, {st_mode=S_IFREG|0644, st_size=42504, ...}) = 0
<br>
mmap2(NULL, 45720, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7, 0) = 0xb7db3000
<br>
mmap2(0xb7dbd000, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x9) = 0xb7dbd000
<br>
close(7)                                = 0
<br>
mprotect(0xb7dbd000, 4096, PROT_READ)   = 0
<br>
mprotect(0xb7dc8000, 4096, PROT_READ)   = 0
<br>
munmap(0xb7dd3000, 58877)               = 0
<br>
open(&quot;/etc/passwd&quot;, O_RDONLY|O_CLOEXEC) = 7
<br>
fcntl64(7, F_GETFD)                     = 0x1 (flags FD_CLOEXEC)
<br>
_llseek(7, 0, [0], SEEK_CUR)            = 0
<br>
fstat64(7, {st_mode=S_IFREG|0644, st_size=1320, ...}) = 0
<br>
mmap2(NULL, 1320, PROT_READ, MAP_SHARED, 7, 0) = 0xb800e000
<br>
_llseek(7, 1320, [1320], SEEK_SET)      = 0
<br>
munmap(0xb800e000, 1320)                = 0
<br>
close(7)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_iof_hnp.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_iof_hnp.la&quot;, O_RDONLY) = 7
<br>
fstat64(7, {st_mode=S_IFREG|0755, st_size=1009, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800e000
<br>
read(7, &quot;# mca_iof_hnp.la - a libtool lib&quot;..., 4096) = 1009
<br>
read(7, &quot;&quot;, 4096)                       = 0
<br>
close(7)                                = 0
<br>
munmap(0xb800e000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_iof_hnp.so&quot;, O_RDONLY) = 7
<br>
read(7, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0000\r\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(7, {st_mode=S_IFREG|0755, st_size=21387, ...}) = 0
<br>
mmap2(NULL, 19252, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7, 0) = 0xb7df4000
<br>
mmap2(0xb7df8000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x3) = 0xb7df8000
<br>
close(7)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_iof_orted.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_iof_orted.la&quot;, O_RDONLY) = 7
<br>
fstat64(7, {st_mode=S_IFREG|0755, st_size=1021, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800e000
<br>
read(7, &quot;# mca_iof_orted.la - a libtool l&quot;..., 4096) = 1021
<br>
read(7, &quot;&quot;, 4096)                       = 0
<br>
close(7)                                = 0
<br>
munmap(0xb800e000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_iof_orted.so&quot;, O_RDONLY) = 7
<br>
read(7, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0\20\v\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(7, {st_mode=S_IFREG|0755, st_size=16997, ...}) = 0
<br>
mmap2(NULL, 15436, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7, 0) = 0xb7dde000
<br>
mmap2(0xb7de1000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x2) = 0xb7de1000
<br>
close(7)                                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_iof_tool.ompi_info&quot;, O_RDONLY) = -1 ENOENT (No such file or directory)
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_iof_tool.la&quot;, O_RDONLY) = 7
<br>
fstat64(7, {st_mode=S_IFREG|0755, st_size=1015, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb800e000
<br>
read(7, &quot;# mca_iof_tool.la - a libtool li&quot;..., 4096) = 1015
<br>
read(7, &quot;&quot;, 4096)                       = 0
<br>
close(7)                                = 0
<br>
munmap(0xb800e000, 4096)                = 0
<br>
open(&quot;/mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_iof_tool.so&quot;, O_RDONLY) = 7
<br>
read(7, &quot;\177ELF\1\1\1\0\0\0\0\0\0\0\0\0\3\0\3\0\1\0\0\0p\7\0\0004\0\0\0&quot;..., 512) = 512
<br>
fstat64(7, {st_mode=S_IFREG|0755, st_size=10497, ...}) = 0
<br>
mmap2(NULL, 9772, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7, 0) = 0xb800c000
<br>
mmap2(0xb800e000, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x1) = 0xb800e000
<br>
close(7)                                = 0
<br>
munmap(0xb7df4000, 19252)               = 0
<br>
munmap(0xb7dde000, 15436)               = 0
<br>
stat64(&quot;/tmp/openmpi-sessions-ashley_at_alpha_0&quot;, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
<br>
open(&quot;/tmp/openmpi-sessions-ashley_at_alpha_0&quot;, O_RDONLY|O_NONBLOCK|O_LARGEFILE|O_DIRECTORY|O_CLOEXEC) = 7
<br>
fstat64(7, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
<br>
getdents(7, /* 3 entries */, 4096)      = 52
<br>
open(&quot;/tmp/openmpi-sessions-ashley_at_alpha_0/34946/contact.txt&quot;, O_RDONLY) = 8
<br>
fstat64(8, {st_mode=S_IFREG|0644, st_size=44, ...}) = 0
<br>
mmap2(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb7df8000
<br>
read(8, &quot;2290221056.0;tcp://192.168.1.67:&quot;..., 4096) = 44
<br>
close(8)                                = 0
<br>
munmap(0xb7df8000, 4096)                = 0
<br>
socket(PF_NETLINK, SOCK_RAW, 0)         = 8
<br>
bind(8, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 0
<br>
getsockname(8, {sa_family=AF_NETLINK, pid=29915, groups=00000000}, [12]) = 0
<br>
time(NULL)                              = 1242637260
<br>
sendto(8, &quot;\24\0\0\0\26\0\1\3\314#\21J\0\0\0\0\0\0\0\0&quot;, 20, 0, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 20
<br>
recvmsg(8, {msg_name(12)={sa_family=AF_NETLINK, pid=0, groups=00000000}, msg_iov(1)=[{&quot;0\0\0\0\24\0\2\0\314#\21J\333t\0\0\2\10\200\376\1\0\0\0\10\0\1\0\177\0\0\1&quot;..., 4096}], msg_controllen=0, msg_flags=0}, 0) = 108
<br>
recvmsg(8, {msg_name(12)={sa_family=AF_NETLINK, pid=0, groups=00000000}, msg_iov(1)=[{&quot;@\0\0\0\24\0\2\0\314#\21J\333t\0\0\n\200\200\376\1\0\0\0\24\0\1\0\0\0\0\0&quot;..., 4096}], msg_controllen=0, msg_flags=0}, 0) = 128
<br>
recvmsg(8, {msg_name(12)={sa_family=AF_NETLINK, pid=0, groups=00000000}, msg_iov(1)=[{&quot;\24\0\0\0\3\0\2\0\314#\21J\333t\0\0\0\0\0\0\1\0\0\0\24\0\1\0\0\0\0\0&quot;..., 4096}], msg_controllen=0, msg_flags=0}, 0) = 20
<br>
close(8)                                = 0
<br>
getdents(7, /* 0 entries */, 4096)      = 0
<br>
close(7)                                = 0
<br>
socket(PF_INET, SOCK_STREAM, IPPROTO_IP) = 7
<br>
setsockopt(7, SOL_TCP, TCP_NODELAY, [1], 4) = 0
<br>
setsockopt(7, SOL_SOCKET, SO_SNDBUF, [131072], 4) = 0
<br>
setsockopt(7, SOL_SOCKET, SO_RCVBUF, [131072], 4) = 0
<br>
fcntl64(7, F_GETFL)                     = 0x2 (flags O_RDWR)
<br>
fcntl64(7, F_SETFL, O_RDWR|O_NONBLOCK)  = 0
<br>
connect(7, {sa_family=AF_INET, sin_port=htons(56375), sin_addr=inet_addr(&quot;192.168.1.67&quot;)}, 16) = -1 EINPROGRESS (Operation now in progress)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLOUT}], 4, 1000) = 1 ([{fd=7, revents=POLLOUT}])
<br>
getsockopt(7, SOL_SOCKET, SO_ERROR, [0], [4]) = 0
<br>
send(7, &quot;\0\0\0\0\0\0\0\0\210\311\0\0\0\0\0\0\210\202\0\0\0\0\0\0\0\0\0\2\0\0\0\0&quot;..., 36, 0) = 36
<br>
sched_yield()                           = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN}], 4, 1000) = 1 ([{fd=7, revents=POLLIN}])
<br>
recv(7, &quot;\0\0\0\0\0\0\0\0\210\202\0\0\0\0\0\0\210\311\0\0\0\0\0\0\0\0\0\2\0\0\0\0&quot;..., 36, 0) = 36
<br>
sched_yield()                           = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN|POLLOUT}], 4, 1000) = 1 ([{fd=7, revents=POLLOUT}])
<br>
writev(7, [{&quot;\210\311\0\0\0\0\0\0\210\311\0\0\0\0\0\0\210\202\0\0\0\0\0\0\0\0\0\4\0\0\0\&quot;&quot;..., 36}, {&quot;\210\311\0\0\0\0\0\0\210\202\0\0\0\0\0\0\0\0\0\1&quot;, 20}, {&quot;\0\0\0\1\16\0\0\0\1\377\377\377\376\0&quot;, 14}], 3) = 70
<br>
sched_yield()                           = 0
<br>
gettimeofday({1242637260, 218442}, NULL) = 0
<br>
gettimeofday({1242637260, 218559}, NULL) = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN}], 4, 10) = 1 ([{fd=7, revents=POLLIN}])
<br>
gettimeofday({1242637260, 218837}, NULL) = 0
<br>
readv(7, [{&quot;\210\202\0\0\0\0\0\0\210\202\0\0\0\0\0\0\210\311\0\0\0\0\0\0\0\0\0\4\0\0\1\246&quot;..., 36}], 1) = 36
<br>
readv(7, [{&quot;\210\202\0\0\0\0\0\0\210\311\0\0\0\0\0\0\0\0\0\32\0\0\0\1\0\0\0\1\0\0\0\1&quot;..., 422}], 1) = 422
<br>
sched_yield()                           = 0
<br>
writev(7, [{&quot;\210\311\0\0\0\0\0\0\210\311\0\0\0\0\0\0\210\202\0\0\0\0\0\0\0\0\0\4\0\0\0\&quot;&quot;..., 36}, {&quot;\210\311\0\0\0\0\0\0\210\202\0\0\0\0\0\0\0\0\0\1&quot;, 20}, {&quot;\0\0\0\1\17\0\0\0\1\0\0\0\0\0&quot;, 14}], 3) = 70
<br>
gettimeofday({1242637260, 222078}, NULL) = 0
<br>
gettimeofday({1242637260, 222243}, NULL) = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN}], 4, 10) = 1 ([{fd=7, revents=POLLIN}])
<br>
gettimeofday({1242637260, 222560}, NULL) = 0
<br>
readv(7, [{&quot;\210\202\0\0\0\0\0\0\210\202\0\0\0\0\0\0\210\311\0\0\0\0\0\0\0\0\0\4\0\0\0F&quot;..., 36}], 1) = 36
<br>
readv(7, [{&quot;\210\202\0\0\0\0\0\0\210\311\0\0\0\0\0\0\0\0\0\32\0\0\0\1\10_V\31\0\0\0\1&quot;..., 70}], 1) = 70
<br>
sched_yield()                           = 0
<br>
mmap2(NULL, 561864704, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0x965dd000
<br>
write(2, &quot;[alpha:29915] [[35017,0],0] ORTE&quot;..., 186) = 186
<br>
munmap(0x965dd000, 561864704)           = 0
<br>
write(2, &quot;[alpha:29915] [[35017,0],0] ORTE&quot;..., 193) = 193
<br>
rt_sigaction(SIGCHLD, {SIG_DFL, [CHLD], SA_RESTART}, {0xb7e20420, [CHLD], SA_RESTART}, 8) = 0
<br>
munmap(0xb800c000, 9772)                = 0
<br>
munmap(0xb7df9000, 15556)               = 0
<br>
shutdown(5, 2 /* send and receive */)   = 0
<br>
close(5)                                = 0
<br>
shutdown(6, 2 /* send and receive */)   = 0
<br>
close(6)                                = 0
<br>
shutdown(7, 2 /* send and receive */)   = 0
<br>
close(7)                                = 0
<br>
munmap(0xb7de2000, 55956)               = 0
<br>
munmap(0xb800f000, 20404)               = 0
<br>
munmap(0xb7df0000, 7676)                = 0
<br>
close(3)                                = 0
<br>
close(4)                                = 0
<br>
munmap(0xb8014000, 7088)                = 0
<br>
munmap(0xb8016000, 17344)               = 0
<br>
exit_group(0)                           = ?
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6059/ompi_tmp.tar.gz">ompi_tmp.tar.gz</a>
</ul>
<!-- attachment="ompi_tmp.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<li><strong>Previous message:</strong> <a href="6058.php">Rainer Keller: "[OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<li><strong>In reply to:</strong> <a href="6057.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6062.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Reply:</strong> <a href="6062.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Reply:</strong> <a href="6063.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
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
