<?
$subject_val = "Re: [OMPI users] Help: Infiniband interface hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 11:59:10 2009" -->
<!-- isoreceived="20090902155910" -->
<!-- sent="Wed, 2 Sep 2009 18:59:04 +0300" -->
<!-- isosent="20090902155904" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Infiniband interface hang" -->
<!-- id="453d39990909020859o5b5ec340m53d189216410733b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="289665360909020406p293bf4a5hb4e708e614e24e95_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: Infiniband interface hang<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 11:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10562.php">guosong: "[OMPI users] Help!"</a>
<li><strong>Previous message:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>In reply to:</strong> <a href="10557.php">Lee Amy: "[OMPI users] Help: Infiniband interface hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10564.php">Lee Amy: "Re: [OMPI users] Help: Infiniband interface hang"</a>
<li><strong>Reply:</strong> <a href="10564.php">Lee Amy: "Re: [OMPI users] Help: Infiniband interface hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
have you tried running hostname
<br>
$mpirun -np 2 --mca btl openib,self --host node1,node2 hostname
<br>
if it hangs, it's not Open MPI problem, check your setup,
<br>
especially check your firewall settings and disable it.
<br>
<p>On Wed, Sep 2, 2009 at 2:06 PM, Lee Amy &lt;openlinuxsource_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encountered a very very confused problem when running IMB via two
</span><br>
<span class="quotelev1">&gt; nodes by using IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS: RHEL 5.2
</span><br>
<span class="quotelev1">&gt; OFED Version: 1.4.1
</span><br>
<span class="quotelev1">&gt; MPI: OpenMPI 1.3.2 (OFED owned)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run IMB-MPI1 provided by OFED OpenMPI tests. The command line is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca btl openib,self --host node1,node2 IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After that the machine hangs and no output, and I cannot see any exist
</span><br>
<span class="quotelev1">&gt; mpirun related programs. Then I use Ctrl-C to stop the hang process.
</span><br>
<span class="quotelev1">&gt; Following messages are reported when I press Ctrl-C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        node2 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use strace to get some detailed messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===Strace output start===
</span><br>
<span class="quotelev1">&gt; execve(&quot;/usr/mpi/gcc/openmpi-1.3.2/bin/mpirun&quot;, [&quot;mpirun&quot;, &quot;-np&quot;, &quot;2&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;--mca&quot;, &quot;btl&quot;, &quot;openib,self&quot;, &quot;--host&quot;, &quot;node1,node2&quot;, &quot;IMB-MPI1&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;pingpong&quot;], [/* 26 vars */]) = 0
</span><br>
<span class="quotelev1">&gt; brk(0)                                  = 0x1e45a000
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaaab000
</span><br>
<span class="quotelev1">&gt; uname({sys=&quot;Linux&quot;, node=&quot;node1&quot;, ...}) = 0
</span><br>
<span class="quotelev1">&gt; access(&quot;/etc/ld.so.preload&quot;, R_OK)      = -1 ENOENT (No such file or
</span><br>
<span class="quotelev1">&gt; directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/tls/x86_64/libopen-rte.so.0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/tls/x86_64&quot;, 0x7ffff43b6080) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/tls/libopen-rte.so.0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/tls&quot;, 0x7ffff43b6080) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/x86_64/libopen-rte.so.0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/x86_64&quot;, 0x7ffff43b6080) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/libopen-rte.so.0&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\0\316\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=1308252, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaaac000
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2382848, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaaad000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaaaaef000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaaacee000, 16384, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x41000) = 0x2aaaaacee000
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaaacf2000, 3072, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0x2aaaaacf2000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/libopen-pal.so.0&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\300\337\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=1398411, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2562984, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaacf3000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaaad3f000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaaaf3f000, 12288, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x4c000) = 0x2aaaaaf3f000
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaaaf42000, 142248, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0x2aaaaaf42000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/libdl.so.2&quot;, O_RDONLY) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/ld.so.cache&quot;, O_RDONLY)      = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0644, st_size=184283, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 184283, PROT_READ, MAP_PRIVATE, 3, 0) = 0x2aaaaaf65000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/lib64/libdl.so.2&quot;, O_RDONLY)     = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0
</span><br>
<span class="quotelev1">&gt; \16\300F:\0\0\0&quot;..., 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=23520, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a46c00000, 2109728, PROT_READ|PROT_EXEC,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0x3a46c00000
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a46c02000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a46e02000, 8192, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x2000) = 0x3a46e02000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/libnsl.so.1&quot;, O_RDONLY) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/lib64/libnsl.so.1&quot;, O_RDONLY)    = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\260@@M:\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=114520, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaf92000
</span><br>
<span class="quotelev1">&gt; mmap(0x3a4d400000, 2194128, PROT_READ|PROT_EXEC,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0x3a4d400000
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a4d415000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a4d614000, 8192, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x14000) = 0x3a4d614000
</span><br>
<span class="quotelev1">&gt; mmap(0x3a4d616000, 6864, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0x3a4d616000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/libutil.so.1&quot;, O_RDONLY) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/lib64/libutil.so.1&quot;, O_RDONLY)   = 3
</span><br>
<span class="quotelev1">&gt; read(3,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\240\16\240R:\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=18312, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a52a00000, 2105616, PROT_READ|PROT_EXEC,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0x3a52a00000
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a52a02000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a52c01000, 8192, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x1000) = 0x3a52c01000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/libm.so.6&quot;, O_RDONLY) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/lib64/libm.so.6&quot;, O_RDONLY)      = 3
</span><br>
<span class="quotelev1">&gt; read(3,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\200&gt;\200F:\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=615136, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a46800000, 2629848, PROT_READ|PROT_EXEC,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0x3a46800000
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a46882000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a46a81000, 8192, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x81000) = 0x3a46a81000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/libpthread.so.0&quot;, O_RDONLY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/lib64/libpthread.so.0&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0
</span><br>
<span class="quotelev1">&gt; W\0G:\0\0\0&quot;..., 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=141336, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaf93000
</span><br>
<span class="quotelev1">&gt; mmap(0x3a47000000, 2200432, PROT_READ|PROT_EXEC,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0x3a47000000
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a47015000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a47214000, 8192, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x14000) = 0x3a47214000
</span><br>
<span class="quotelev1">&gt; mmap(0x3a47216000, 13168, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0x3a47216000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/libc.so.6&quot;, O_RDONLY) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/lib64/libc.so.6&quot;, O_RDONLY)      = 3
</span><br>
<span class="quotelev1">&gt; read(3,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\240\331AF:\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=1687464, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a46400000, 3469464, PROT_READ|PROT_EXEC,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_DENYWRITE, 3, 0) = 0x3a46400000
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a46546000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x3a46746000, 20480, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x146000) = 0x3a46746000
</span><br>
<span class="quotelev1">&gt; mmap(0x3a4674b000, 16536, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_ANONYMOUS, -1, 0) = 0x3a4674b000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaf94000
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaf95000
</span><br>
<span class="quotelev1">&gt; arch_prctl(ARCH_SET_FS, 0x2aaaaaf94cf0) = 0
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a46746000, 16384, PROT_READ) = 0
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a47214000, 4096, PROT_READ) = 0
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a46a81000, 4096, PROT_READ) = 0
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a52c01000, 4096, PROT_READ) = 0
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a4d614000, 4096, PROT_READ) = 0
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a46e02000, 4096, PROT_READ) = 0
</span><br>
<span class="quotelev1">&gt; mprotect(0x3a45e19000, 4096, PROT_READ) = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaaaf65000, 184283)          = 0
</span><br>
<span class="quotelev1">&gt; set_tid_address(0x2aaaaaf94d80)         = 6192
</span><br>
<span class="quotelev1">&gt; set_robust_list(0x2aaaaaf94d90, 0x18)   = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGRTMIN, {0x3a47005350, [], SA_RESTORER|SA_SIGINFO,
</span><br>
<span class="quotelev1">&gt; 0x3a4700de60}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGRT_1, {0x3a470052a0, [],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART|SA_SIGINFO, 0x3a4700de60}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_UNBLOCK, [RTMIN RT_1], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; getrlimit(RLIMIT_STACK, {rlim_cur=10240*1024, rlim_max=RLIM_INFINITY}) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/sys/class/infiniband&quot;, {st_mode=S_IFDIR|0755, st_size=0, ...}) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/sys/class/infiniband&quot;, {st_mode=S_IFDIR|0755, st_size=0, ...}) = 0
</span><br>
<span class="quotelev1">&gt; brk(0)                                  = 0x1e45a000
</span><br>
<span class="quotelev1">&gt; brk(0x1e47b000)                         = 0x1e47b000
</span><br>
<span class="quotelev1">&gt; uname({sys=&quot;Linux&quot;, node=&quot;node1&quot;, ...}) = 0
</span><br>
<span class="quotelev1">&gt; getcwd(&quot;/usr/mpi/gcc/openmpi-1.3.2/tests/IMB-3.1&quot;, 4096) = 41
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/etc/openmpi-mca-params.conf&quot;, O_RDONLY) =
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0x7ffff43b67d0) = -1 ENOTTY
</span><br>
<span class="quotelev1">&gt; (Inappropriate ioctl for device)
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0644, st_size=2812, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaf65000
</span><br>
<span class="quotelev1">&gt; read(3, &quot;#\n# Copyright (c) 2004-2005 The &quot;..., 8192) = 2812
</span><br>
<span class="quotelev1">&gt; read(3, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; read(3, &quot;&quot;, 8192)                       = 0
</span><br>
<span class="quotelev1">&gt; ioctl(3, SNDCTL_TMR_TIMEBASE or TCGETS, 0x7ffff43b67a0) = -1 ENOTTY
</span><br>
<span class="quotelev1">&gt; (Inappropriate ioctl for device)
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaaaf65000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/mca-params.conf&quot;, O_RDONLY) = -1 ENOENT (No such
</span><br>
<span class="quotelev1">&gt; file or directory)
</span><br>
<span class="quotelev1">&gt; uname({sys=&quot;Linux&quot;, node=&quot;node1&quot;, ...}) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGABRT, NULL, {SIG_DFL}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGABRT, {0x2aaaaad22470, [],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_ONESHOT|SA_SIGINFO, 0x3a4700de60}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGBUS, NULL, {SIG_DFL}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGBUS, {0x2aaaaad22470, [],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_ONESHOT|SA_SIGINFO, 0x3a4700de60}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGFPE, NULL, {SIG_DFL}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGFPE, {0x2aaaaad22470, [],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_ONESHOT|SA_SIGINFO, 0x3a4700de60}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGSEGV, NULL, {SIG_DFL}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGSEGV, {0x2aaaaad22470, [],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_ONESHOT|SA_SIGINFO, 0x3a4700de60}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; getrlimit(RLIMIT_NOFILE, {rlim_cur=1024, rlim_max=1024}) = 0
</span><br>
<span class="quotelev1">&gt; getrlimit(RLIMIT_NPROC, {rlim_cur=70*1024, rlim_max=70*1024}) = 0
</span><br>
<span class="quotelev1">&gt; getrlimit(RLIMIT_FSIZE, {rlim_cur=RLIM_INFINITY, rlim_max=RLIM_INFINITY}) =
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; getcwd(&quot;/usr/mpi/gcc/openmpi-1.3.2/tests/IMB-3.1&quot;, 4097) = 41
</span><br>
<span class="quotelev1">&gt; uname({sys=&quot;Linux&quot;, node=&quot;node1&quot;, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_paffinity_linux.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_paffinity_linux.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=1025, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaf65000
</span><br>
<span class="quotelev1">&gt; read(3, &quot;# mca_paffinity_linux.la - a lib&quot;..., 4096) = 1025
</span><br>
<span class="quotelev1">&gt; read(3, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaaaf65000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; futex(0x3a46e0310c, FUTEX_WAKE, 2147483647) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_paffinity_linux.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0`\16\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=65944, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2115040, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaaf96000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaaaf9a000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaab19a000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x4000) = 0x2aaaab19a000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; sched_getaffinity(0, 128,  { ff, 0, 0, 0 }) = 32
</span><br>
<span class="quotelev1">&gt; sched_setaffinity(0, 32,  { 16e47080, 16e47080, 16e47080, 16e47080 })
</span><br>
<span class="quotelev1">&gt; = -1 EFAULT (Bad address)
</span><br>
<span class="quotelev1">&gt; access(&quot;/sys/devices/system/cpu&quot;, R_OK|X_OK) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFDIR|0755, st_size=0, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 11 entries */, 4096)     = 288
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu0/online&quot;, O_RDONLY) = -1 ENOENT (No
</span><br>
<span class="quotelev1">&gt; such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu0/topology/core_id&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;0\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu0/topology/physical_package_id&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;0\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu1/online&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu1/topology/core_id&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;0\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu1/topology/physical_package_id&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu2/online&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu2/topology/core_id&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu2/topology/physical_package_id&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;0\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu3/online&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu3/topology/core_id&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu3/topology/physical_package_id&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu4/online&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu4/topology/core_id&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;2\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu4/topology/physical_package_id&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;0\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu5/online&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu5/topology/core_id&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;2\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu5/topology/physical_package_id&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu6/online&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu6/topology/core_id&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;3\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu6/topology/physical_package_id&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;0\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu7/online&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu7/topology/core_id&quot;, O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;3\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/sys/devices/system/cpu/cpu7/topology/physical_package_id&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 3
</span><br>
<span class="quotelev1">&gt; read(3, &quot;1\n&quot;, 7)                       = 2
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4198400, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS,
</span><br>
<span class="quotelev1">&gt; -1, 0) = 0x2aaaab19b000
</span><br>
<span class="quotelev1">&gt; mremap(0x2aaaab19b000, 4198400, 4198400, MREMAP_MAYMOVE) = 0x2aaaab19b000
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab19b000, 4198400)         = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 1052672, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS,
</span><br>
<span class="quotelev1">&gt; -1, 0) = 0x2aaaab19b000
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab19b000, 1052672)         = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ, MAP_FILE|MAP_ANONYMOUS, -1, 0) = -1 EINVAL
</span><br>
<span class="quotelev1">&gt; (Invalid argument)
</span><br>
<span class="quotelev1">&gt; munmap(0xffffffffffffffff, 4096)        = -1 EINVAL (Invalid argument)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/proc/cpuinfo&quot;, O_RDONLY)         = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0444, st_size=0, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab19c000
</span><br>
<span class="quotelev1">&gt; lseek(3, 0, SEEK_SET)                   = 0
</span><br>
<span class="quotelev1">&gt; read(3, &quot;processor\t: 0\nvendor_id\t: Genuin&quot;..., 4096) = 3738
</span><br>
<span class="quotelev1">&gt; read(3, &quot;processor\t: 6\nvendor_id\t: Genuin&quot;..., 4096) = 1246
</span><br>
<span class="quotelev1">&gt; read(3, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; lseek(3, 0, SEEK_SET)                   = 0
</span><br>
<span class="quotelev1">&gt; read(3, &quot;processor\t: 0\nvendor_id\t: Genuin&quot;..., 4096) = 3738
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab19c000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(3, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_carto_auto_detect.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_carto_auto_detect.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=1037, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab19b000
</span><br>
<span class="quotelev1">&gt; read(3, &quot;# mca_carto_auto_detect.la - a l&quot;..., 4096) = 1037
</span><br>
<span class="quotelev1">&gt; read(3, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab19b000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_carto_auto_detect.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\200\10\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=18544, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2101136, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab19b000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaab19c000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaab39b000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0) = 0x2aaaab39b000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_carto_file.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_carto_file.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=995, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab39c000
</span><br>
<span class="quotelev1">&gt; read(3, &quot;# mca_carto_file.la - a libtool &quot;..., 4096) = 995
</span><br>
<span class="quotelev1">&gt; read(3, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab39c000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_carto_file.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 3
</span><br>
<span class="quotelev1">&gt; read(3,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\340\20\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(3, {st_mode=S_IFREG|0755, st_size=56278, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2113304, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 3,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab39c000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaab3a0000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaab59f000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 3, 0x3000) = 0x2aaaab59f000
</span><br>
<span class="quotelev1">&gt; close(3)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab39c000, 2113304)         = 0
</span><br>
<span class="quotelev1">&gt; socketpair(PF_FILE, SOCK_STREAM, 0, [3, 4]) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; fcntl(4, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; fcntl(3, F_SETFL, O_RDONLY|O_NONBLOCK)  = 0
</span><br>
<span class="quotelev1">&gt; uname({sys=&quot;Linux&quot;, node=&quot;node1&quot;, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_env.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_env.la&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=977, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab39c000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_ess_env.la - a libtool lib&quot;..., 4096) = 977
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab39c000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_env.so&quot;, O_RDONLY) =
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\220\16\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=34152, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2106776, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab39c000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaab39e000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaab59e000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2000) = 0x2aaaab59e000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_hnp.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_hnp.la&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=977, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab59f000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_ess_hnp.la - a libtool lib&quot;..., 4096) = 977
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab59f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_hnp.so&quot;, O_RDONLY) =
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; read(5, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0@
</span><br>
<span class="quotelev1">&gt; \34\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=48962, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2110944, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab59f000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaab5a2000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaab7a2000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x3000) = 0x2aaaab7a2000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_singleton.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_singleton.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1013, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab7a3000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_ess_singleton.la - a libto&quot;..., 4096) = 1013
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab7a3000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_singleton.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\340\22\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=40183, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2107640, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab7a3000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaab7a6000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaab9a5000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2000) = 0x2aaaab9a5000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_slurm.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_slurm.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=989, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab9a6000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_ess_slurm.la - a libtool l&quot;..., 4096) = 989
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab9a6000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_slurm.so&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0p\20\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=35830, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2106808, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab9a6000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaab9a8000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaabba8000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2000) = 0x2aaaabba8000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_tool.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_tool.la&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=983, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabba9000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_ess_tool.la - a libtool li&quot;..., 4096) = 983
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabba9000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ess_tool.so&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; read(5, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0P\t\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=24983, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2102304, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabba9000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaabbaa000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaabdaa000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1000) = 0x2aaaabdaa000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab39c000, 2106776)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab7a3000, 2107640)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab9a6000, 2106808)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabba9000, 2102304)         = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2aaaaad10790, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x3a464300a0}, {SIG_DFL}, 8) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_plm_rsh.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_plm_rsh.la&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=977, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab39c000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_plm_rsh.la - a libtool lib&quot;..., 4096) = 977
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab39c000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_plm_rsh.so&quot;, O_RDONLY) =
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; read(5, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0P%\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=92774, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2123936, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab7a3000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaab7a9000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaab9a9000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x6000) = 0x2aaaab9a9000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_plm_slurm.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_plm_slurm.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=989, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab9aa000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_plm_slurm.la - a libtool l&quot;..., 4096) = 989
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab9aa000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_plm_slurm.so&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\340\26\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=44441, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2108632, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab9aa000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaab9ad000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaabbac000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2000) = 0x2aaaabbac000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; getcwd(&quot;/usr/mpi/gcc/openmpi-1.3.2/tests/IMB-3.1&quot;, 4097) = 41
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/mpi/gcc/openmpi-1.3.2/bin/ssh&quot;, 0x7ffff43b56c0) = -1 ENOENT
</span><br>
<span class="quotelev1">&gt; (No such file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/lib64/qt-3.3/bin/ssh&quot;, 0x7ffff43b56c0) = -1 ENOENT (No such
</span><br>
<span class="quotelev1">&gt; file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/kerberos/sbin/ssh&quot;, 0x7ffff43b56c0) = -1 ENOENT (No such
</span><br>
<span class="quotelev1">&gt; file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/kerberos/bin/ssh&quot;, 0x7ffff43b56c0) = -1 ENOENT (No such
</span><br>
<span class="quotelev1">&gt; file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/local/sbin/ssh&quot;, 0x7ffff43b56c0) = -1 ENOENT (No such file
</span><br>
<span class="quotelev1">&gt; or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/local/bin/ssh&quot;, 0x7ffff43b56c0) = -1 ENOENT (No such file
</span><br>
<span class="quotelev1">&gt; or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/sbin/ssh&quot;, 0x7ffff43b56c0)       = -1 ENOENT (No such file or
</span><br>
<span class="quotelev1">&gt; directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/bin/ssh&quot;, 0x7ffff43b56c0)        = -1 ENOENT (No such file or
</span><br>
<span class="quotelev1">&gt; directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/sbin/ssh&quot;, 0x7ffff43b56c0)   = -1 ENOENT (No such file or
</span><br>
<span class="quotelev1">&gt; directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/usr/bin/ssh&quot;, {st_mode=S_IFREG|0755, st_size=300392, ...}) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;//usr/bin/ssh&quot;, {st_mode=S_IFREG|0755, st_size=300392, ...}) = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab9aa000, 2108632)         = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rml_oob.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rml_oob.la&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=977, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab9aa000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_rml_oob.la - a libtool lib&quot;..., 4096) = 977
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab9aa000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rml_oob.so&quot;, O_RDONLY) =
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; read(5, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0@
</span><br>
<span class="quotelev1">&gt; \23\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=114648, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2116736, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaab9aa000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaab9af000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaabbae000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x4000) = 0x2aaaabbae000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_oob_tcp.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_oob_tcp.la&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=977, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabbaf000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_oob_tcp.la - a libtool lib&quot;..., 4096) = 977
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabbaf000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_oob_tcp.so&quot;, O_RDONLY) =
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; read(5, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\0&amp;\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=223428, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2153112, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabbaf000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaabbbc000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaabdbb000, 8192, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0xc000) = 0x2aaaabdbb000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_INET, SOCK_DGRAM, IPPROTO_IP) = 5
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFCONF, {200, {{&quot;lo&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;127.0.0.1&quot;)}}, {&quot;eth0&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;192.168.0.1&quot;)}}, {&quot;eth1&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;192.168.1.1&quot;)}}, {&quot;ib0&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;11.11.11.1&quot;)}}, {&quot;virbr0&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;192.168.122.1&quot;)}}}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFCONF, {200, {{&quot;lo&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;127.0.0.1&quot;)}}, {&quot;eth0&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;192.168.0.1&quot;)}}, {&quot;eth1&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;192.168.1.1&quot;)}}, {&quot;ib0&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;11.11.11.1&quot;)}}, {&quot;virbr0&quot;, {AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;192.168.122.1&quot;)}}}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFFLAGS, {ifr_name=&quot;lo&quot;,
</span><br>
<span class="quotelev1">&gt; ifr_flags=IFF_UP|IFF_LOOPBACK|IFF_RUNNING}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFINDEX, {ifr_name=&quot;lo&quot;, ifr_index=1}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFADDR, {ifr_name=&quot;lo&quot;, ifr_addr={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;127.0.0.1&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFNETMASK, {ifr_name=&quot;lo&quot;, ifr_netmask={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;255.0.0.0&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFFLAGS, {ifr_name=&quot;eth0&quot;,
</span><br>
<span class="quotelev1">&gt; ifr_flags=IFF_UP|IFF_BROADCAST|IFF_MULTICAST}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFINDEX, {ifr_name=&quot;eth0&quot;, ifr_index=2}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFADDR, {ifr_name=&quot;eth0&quot;, ifr_addr={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;192.168.0.1&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFNETMASK, {ifr_name=&quot;eth0&quot;, ifr_netmask={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;255.255.255.0&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFFLAGS, {ifr_name=&quot;eth1&quot;,
</span><br>
<span class="quotelev1">&gt; ifr_flags=IFF_UP|IFF_BROADCAST|IFF_RUNNING|IFF_MULTICAST}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFINDEX, {ifr_name=&quot;eth1&quot;, ifr_index=3}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFADDR, {ifr_name=&quot;eth1&quot;, ifr_addr={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;192.168.1.1&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFNETMASK, {ifr_name=&quot;eth1&quot;, ifr_netmask={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;255.255.255.0&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFFLAGS, {ifr_name=&quot;ib0&quot;,
</span><br>
<span class="quotelev1">&gt; ifr_flags=IFF_UP|IFF_BROADCAST|IFF_RUNNING|IFF_MULTICAST}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFINDEX, {ifr_name=&quot;ib0&quot;, ifr_index=5}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFADDR, {ifr_name=&quot;ib0&quot;, ifr_addr={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;11.11.11.1&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFNETMASK, {ifr_name=&quot;ib0&quot;, ifr_netmask={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;255.255.255.0&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFFLAGS, {ifr_name=&quot;virbr0&quot;,
</span><br>
<span class="quotelev1">&gt; ifr_flags=IFF_UP|IFF_BROADCAST|IFF_RUNNING|IFF_MULTICAST}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFINDEX, {ifr_name=&quot;virbr0&quot;, ifr_index=6}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFADDR, {ifr_name=&quot;virbr0&quot;, ifr_addr={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;192.168.122.1&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; ioctl(5, SIOCGIFNETMASK, {ifr_name=&quot;virbr0&quot;, ifr_netmask={AF_INET,
</span><br>
<span class="quotelev1">&gt; inet_addr(&quot;255.255.255.0&quot;)}}) = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/proc/net/if_inet6&quot;, O_RDONLY)    = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0444, st_size=0, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabdbd000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;00000000000000000000000000000001&quot;..., 4096) = 216
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabdbd000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; brk(0x1e4a3000)                         = 0x1e4a3000
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_routed_binomial.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_routed_binomial.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1025, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabdbd000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_routed_binomial.la - a lib&quot;..., 4096) = 1025
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabdbd000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_routed_binomial.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\220\25\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=62147, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2112648, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabdbd000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaabdc1000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaabfc0000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x3000) = 0x2aaaabfc0000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_routed_direct.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_routed_direct.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1013, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabfc1000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_routed_direct.la - a libto&quot;..., 4096) = 1013
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabfc1000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_routed_direct.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\220\21\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=55652, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2109112, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabfc1000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaabfc4000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac1c3000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2000) = 0x2aaaac1c3000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_routed_linear.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_routed_linear.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1013, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_routed_linear.la - a libto&quot;..., 4096) = 1013
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_routed_linear.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\320\22\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=52361, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2111208, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaac1c7000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac3c7000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x3000) = 0x2aaaac3c7000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabfc1000, 2109112)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 2111208)         = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_grpcomm_bad.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_grpcomm_bad.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1001, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabfc1000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_grpcomm_bad.la - a libtool&quot;..., 4096) = 1001
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabfc1000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_grpcomm_bad.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\340\r\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=43713, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2107352, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaabfc1000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaabfc4000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac1c3000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2000) = 0x2aaaac1c3000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_grpcomm_basic.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_grpcomm_basic.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1013, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_grpcomm_basic.la - a libto&quot;..., 4096) = 1013
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_grpcomm_basic.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\260\r\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=43462, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2107192, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaac1c7000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac3c6000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x2000) = 0x2aaaac3c6000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 2107192)         = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ras_slurm.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ras_slurm.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=989, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_ras_slurm.la - a libtool l&quot;..., 4096) = 989
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_ras_slurm.so&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0000\f\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=33212, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2105136, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaac1c6000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac3c5000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1000) = 0x2aaaac3c5000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 2105136)         = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rmaps_rank_file.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rmaps_rank_file.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1025, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_rmaps_rank_file.la - a lib&quot;..., 4096) = 1025
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rmaps_rank_file.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0
</span><br>
<span class="quotelev1">&gt; \20\0\0\0\0\0\0&quot;..., 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=73568, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2116896, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaac1c9000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac3c8000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x4000) = 0x2aaaac3c8000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rmaps_round_robin.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rmaps_round_robin.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1037, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac3c9000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_rmaps_round_robin.la - a l&quot;..., 4096) = 1037
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac3c9000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rmaps_round_robin.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0p\10\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=34451, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2103728, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac3c9000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaac3cb000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac5ca000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1000) = 0x2aaaac5ca000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rmaps_seq.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rmaps_seq.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=989, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac5cb000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_rmaps_seq.la - a libtool l&quot;..., 4096) = 989
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac5cb000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_rmaps_seq.so&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 5
</span><br>
<span class="quotelev1">&gt; read(5, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0@
</span><br>
<span class="quotelev1">&gt; \t\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=32512, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2103232, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac5cb000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaac5cd000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac7cc000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1000) = 0x2aaaac7cc000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 2116896)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac5cb000, 2103232)         = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_errmgr_default.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_errmgr_default.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1019, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_errmgr_default.la - a libt&quot;..., 4096) = 1019
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_errmgr_default.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\300\7\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=25027, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2101104, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac1c4000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaac1c5000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac3c4000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0) = 0x2aaaac3c4000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_odls_default.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_odls_default.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=1007, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac3c5000
</span><br>
<span class="quotelev1">&gt; read(5, &quot;# mca_odls_default.la - a libtoo&quot;..., 4096) = 1007
</span><br>
<span class="quotelev1">&gt; read(5, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac3c5000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_odls_default.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5
</span><br>
<span class="quotelev1">&gt; read(5,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\260\17\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFREG|0755, st_size=31558, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2104840, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 5,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac5cb000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaac5cd000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaac7cc000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 5, 0x1000) = 0x2aaaac7cc000
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; nanosleep({0, 0}, NULL)                 = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_INET, SOCK_STREAM, IPPROTO_IP) = 5
</span><br>
<span class="quotelev1">&gt; setsockopt(5, SOL_TCP, TCP_NODELAY, [1], 4) = 0
</span><br>
<span class="quotelev1">&gt; setsockopt(5, SOL_SOCKET, SO_SNDBUF, [131072], 4) = 0
</span><br>
<span class="quotelev1">&gt; setsockopt(5, SOL_SOCKET, SO_RCVBUF, [131072], 4) = 0
</span><br>
<span class="quotelev1">&gt; setsockopt(5, SOL_SOCKET, SO_REUSEADDR, [0], 4) = 0
</span><br>
<span class="quotelev1">&gt; bind(5, {sa_family=AF_INET, sin_port=htons(0),
</span><br>
<span class="quotelev1">&gt; sin_addr=inet_addr(&quot;0.0.0.0&quot;)}, 16) = 0
</span><br>
<span class="quotelev1">&gt; getsockname(5, {sa_family=AF_INET, sin_port=htons(57967),
</span><br>
<span class="quotelev1">&gt; sin_addr=inet_addr(&quot;0.0.0.0&quot;)}, [16]) = 0
</span><br>
<span class="quotelev1">&gt; listen(5, 128)                          = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_GETFL)                       = 0x2 (flags O_RDWR)
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFL, O_RDWR|O_NONBLOCK)    = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_INET6, SOCK_STREAM, IPPROTO_IP) = 6
</span><br>
<span class="quotelev1">&gt; setsockopt(6, SOL_TCP, TCP_NODELAY, [1], 4) = 0
</span><br>
<span class="quotelev1">&gt; setsockopt(6, SOL_SOCKET, SO_SNDBUF, [131072], 4) = 0
</span><br>
<span class="quotelev1">&gt; setsockopt(6, SOL_SOCKET, SO_RCVBUF, [131072], 4) = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_NETLINK, SOCK_RAW, 0)         = 7
</span><br>
<span class="quotelev1">&gt; bind(7, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 0
</span><br>
<span class="quotelev1">&gt; getsockname(7, {sa_family=AF_NETLINK, pid=6192, groups=00000000},
</span><br>
<span class="quotelev1">&gt; [4294967308]) = 0
</span><br>
<span class="quotelev1">&gt; sendto(7, &quot;\24\0\0\0\26\0\1\3\31\220\237J\0\0\0\0\0\0\0\0&quot;, 20, 0,
</span><br>
<span class="quotelev1">&gt; {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 20
</span><br>
<span class="quotelev1">&gt; recvmsg(7, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;&lt;\0\0\0\24\0\2\0\31\220\237J0\30\0\0\2\10\200\376\1\0\0\0\10\0\1\0\177\0\0\1&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 332
</span><br>
<span class="quotelev1">&gt; recvmsg(7, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;@\0\0\0\24\0\2\0\31\220\237J0\30\0\0\n\200\200\376\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 256
</span><br>
<span class="quotelev1">&gt; recvmsg(7, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;\24\0\0\0\3\0\2\0\31\220\237J0\30\0\0\0\0\0\0\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 20
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; setsockopt(6, SOL_IPV6, IPV6_V6ONLY, [0], 4) = 0
</span><br>
<span class="quotelev1">&gt; setsockopt(6, SOL_SOCKET, SO_REUSEADDR, [0], 4) = 0
</span><br>
<span class="quotelev1">&gt; bind(6, {sa_family=AF_INET6, sin6_port=htons(0), inet_pton(AF_INET6,
</span><br>
<span class="quotelev1">&gt; &quot;::&quot;, &amp;sin6_addr), sin6_flowinfo=0, sin6_scope_id=0}, 28) = 0
</span><br>
<span class="quotelev1">&gt; getsockname(6, {sa_family=AF_INET6, sin6_port=htons(43361),
</span><br>
<span class="quotelev1">&gt; inet_pton(AF_INET6, &quot;::&quot;, &amp;sin6_addr), sin6_flowinfo=0,
</span><br>
<span class="quotelev1">&gt; sin6_scope_id=0}, [28]) = 0
</span><br>
<span class="quotelev1">&gt; listen(6, 128)                          = 0
</span><br>
<span class="quotelev1">&gt; fcntl(6, F_GETFL)                       = 0x2 (flags O_RDWR)
</span><br>
<span class="quotelev1">&gt; fcntl(6, F_SETFL, O_RDWR|O_NONBLOCK)    = 0
</span><br>
<span class="quotelev1">&gt; getuid()                                = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_FILE, SOCK_STREAM, 0)         = 7
</span><br>
<span class="quotelev1">&gt; fcntl(7, F_GETFL)                       = 0x2 (flags O_RDWR)
</span><br>
<span class="quotelev1">&gt; fcntl(7, F_SETFL, O_RDWR|O_NONBLOCK)    = 0
</span><br>
<span class="quotelev1">&gt; connect(7, {sa_family=AF_FILE, path=&quot;/var/run/nscd/socket&quot;}, 110) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_FILE, SOCK_STREAM, 0)         = 7
</span><br>
<span class="quotelev1">&gt; fcntl(7, F_GETFL)                       = 0x2 (flags O_RDWR)
</span><br>
<span class="quotelev1">&gt; fcntl(7, F_SETFL, O_RDWR|O_NONBLOCK)    = 0
</span><br>
<span class="quotelev1">&gt; connect(7, {sa_family=AF_FILE, path=&quot;/var/run/nscd/socket&quot;}, 110) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/nsswitch.conf&quot;, O_RDONLY)    = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0644, st_size=1696, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac7cd000
</span><br>
<span class="quotelev1">&gt; read(7, &quot;#\n# /etc/nsswitch.conf\n#\n# An ex&quot;..., 4096) = 1696
</span><br>
<span class="quotelev1">&gt; read(7, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac7cd000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/libnss_files.so.2&quot;, O_RDONLY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/ld.so.cache&quot;, O_RDONLY)      = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0644, st_size=184283, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 184283, PROT_READ, MAP_PRIVATE, 7, 0) = 0x2aaaac7cd000
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/lib64/libnss_files.so.2&quot;, O_RDONLY) = 7
</span><br>
<span class="quotelev1">&gt; read(7, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\0
</span><br>
<span class="quotelev1">&gt; \0\0\0\0\0\0&quot;..., 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=53880, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2139432, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac7fa000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaac804000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaaca03000, 8192, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x9000) = 0x2aaaaca03000
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaaca03000, 4096, PROT_READ) = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac7cd000, 184283)          = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/passwd&quot;, O_RDONLY)           = 7
</span><br>
<span class="quotelev1">&gt; fcntl(7, F_GETFD)                       = 0
</span><br>
<span class="quotelev1">&gt; fcntl(7, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0644, st_size=2713, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac7cd000
</span><br>
<span class="quotelev1">&gt; read(7, &quot;root:x:0:0:root:/root:/bin/bash\n&quot;..., 4096) = 2713
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac7cd000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0/0&quot;, 0x7ffff43b6810) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0/0&quot;, 0x7ffff43b67e0) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; mkdir(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0/0&quot;, 0700) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp&quot;, {st_mode=S_IFDIR|S_ISVTX|0777, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0&quot;, {st_mode=S_IFDIR|0700,
</span><br>
<span class="quotelev1">&gt; st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336&quot;, 0x7ffff43b67e0) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; mkdir(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336&quot;, 0700) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0&quot;, 0x7ffff43b67e0) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; mkdir(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0&quot;, 0700) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0/0&quot;, 0x7ffff43b67e0) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; mkdir(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0/0&quot;, 0700) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/contact.txt&quot;,
</span><br>
<span class="quotelev1">&gt; O_WRONLY|O_CREAT|O_TRUNC, 0666) = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0644, st_size=0, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac7cd000
</span><br>
<span class="quotelev1">&gt; write(7, &quot;1398276096.0;tcp://192.168.0.1:5&quot;..., 115) = 115
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac7cd000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(7, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(7, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(7, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(7, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_iof_hnp.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_iof_hnp.la&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=977, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaac7cd000
</span><br>
<span class="quotelev1">&gt; read(7, &quot;# mca_iof_hnp.la - a libtool lib&quot;..., 4096) = 977
</span><br>
<span class="quotelev1">&gt; read(7, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac7cd000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_iof_hnp.so&quot;, O_RDONLY) =
</span><br>
<span class="quotelev1">&gt; 7
</span><br>
<span class="quotelev1">&gt; read(7,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\300\21\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=102370, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2115144, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaaca05000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaaca09000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaacc09000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x4000) = 0x2aaaacc09000
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_iof_orted.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_iof_orted.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=989, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaacc0a000
</span><br>
<span class="quotelev1">&gt; read(7, &quot;# mca_iof_orted.la - a libtool l&quot;..., 4096) = 989
</span><br>
<span class="quotelev1">&gt; read(7, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaacc0a000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_iof_orted.so&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 7
</span><br>
<span class="quotelev1">&gt; read(7,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\360\16\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=79150, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2110824, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaacc0a000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaacc0d000, 2097152, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaace0d000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x3000) = 0x2aaaace0d000
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_iof_tool.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_iof_tool.la&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=983, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0e000
</span><br>
<span class="quotelev1">&gt; read(7, &quot;# mca_iof_tool.la - a libtool li&quot;..., 4096) = 983
</span><br>
<span class="quotelev1">&gt; read(7, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0e000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_iof_tool.so&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 7
</span><br>
<span class="quotelev1">&gt; read(7, &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0p\n\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=46002, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2104072, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0e000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaace10000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaad00f000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x1000) = 0x2aaaad00f000
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaacc0a000, 2110824)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0e000, 2104072)         = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(7, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(7, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(7, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(7, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_filem_rsh.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_filem_rsh.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=989, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaacc0a000
</span><br>
<span class="quotelev1">&gt; read(7, &quot;# mca_filem_rsh.la - a libtool l&quot;..., 4096) = 989
</span><br>
<span class="quotelev1">&gt; read(7, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaacc0a000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_filem_rsh.so&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 7
</span><br>
<span class="quotelev1">&gt; read(7,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\260\25\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=70248, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2116640, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaacc0a000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaacc0f000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaace0e000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0x4000) = 0x2aaaace0e000
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFDIR|0755, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(7, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(7, /* 99 entries */, 4096)     = 4088
</span><br>
<span class="quotelev1">&gt; getdents(7, /* 25 entries */, 4096)     = 1000
</span><br>
<span class="quotelev1">&gt; getdents(7, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/root/.openmpi/components&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_notifier_syslog.ompi_info&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_notifier_syslog.la&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 7
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=1025, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(7, &quot;# mca_notifier_syslog.la - a lib&quot;..., 4096) = 1025
</span><br>
<span class="quotelev1">&gt; read(7, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/lib64/openmpi/mca_notifier_syslog.so&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 7
</span><br>
<span class="quotelev1">&gt; read(7,
</span><br>
<span class="quotelev1">&gt; &quot;\177ELF\2\1\1\0\0\0\0\0\0\0\0\0\3\0&gt;\0\1\0\0\0\20\7\0\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 832) = 832
</span><br>
<span class="quotelev1">&gt; fstat(7, {st_mode=S_IFREG|0755, st_size=16817, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 2100960, PROT_READ|PROT_EXEC, MAP_PRIVATE|MAP_DENYWRITE, 7,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; mprotect(0x2aaaace10000, 2093056, PROT_NONE) = 0
</span><br>
<span class="quotelev1">&gt; mmap(0x2aaaad00f000, 4096, PROT_READ|PROT_WRITE,
</span><br>
<span class="quotelev1">&gt; MAP_PRIVATE|MAP_FIXED|MAP_DENYWRITE, 7, 0) = 0x2aaaad00f000
</span><br>
<span class="quotelev1">&gt; close(7)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 2100960)         = 0
</span><br>
<span class="quotelev1">&gt; pipe([7, 8])                            = 0
</span><br>
<span class="quotelev1">&gt; pipe([9, 10])                           = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGTERM, {0x2aaaaad10790, [TERM], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x3a464300a0}, {SIG_IGN}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGINT, {0x2aaaaad10790, [INT], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x3a464300a0}, {SIG_IGN}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR1, {0x2aaaaad10790, [USR1], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x3a464300a0}, {SIG_DFL}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR2, {0x2aaaaad10790, [USR2], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x3a464300a0}, {SIG_DFL}, 8) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/dev/urandom&quot;, {st_mode=S_IFCHR|0444, st_rdev=makedev(1, 9), ...}) =
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/dev/urandom&quot;, O_RDONLY)          = 11
</span><br>
<span class="quotelev1">&gt; read(11, &quot;\270\270C\306JT%\312\246lKk\221_\334\221&quot;, 16) = 16
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_NETLINK, SOCK_RAW, 0)         = 11
</span><br>
<span class="quotelev1">&gt; bind(11, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 0
</span><br>
<span class="quotelev1">&gt; getsockname(11, {sa_family=AF_NETLINK, pid=6192, groups=00000000},
</span><br>
<span class="quotelev1">&gt; [4294967308]) = 0
</span><br>
<span class="quotelev1">&gt; sendto(11, &quot;\24\0\0\0\26\0\1\3\31\220\237J\0\0\0\0\0\0\0\0&quot;, 20, 0,
</span><br>
<span class="quotelev1">&gt; {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 20
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;&lt;\0\0\0\24\0\2\0\31\220\237J0\30\0\0\2\10\200\376\1\0\0\0\10\0\1\0\177\0\0\1&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 332
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;@\0\0\0\24\0\2\0\31\220\237J0\30\0\0\n\200\200\376\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 256
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;\24\0\0\0\3\0\2\0\31\220\237J0\30\0\0\0\0\0\0\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 20
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_FILE, SOCK_STREAM, 0)         = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFL)                      = 0x2 (flags O_RDWR)
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFL, O_RDWR|O_NONBLOCK)   = 0
</span><br>
<span class="quotelev1">&gt; connect(11, {sa_family=AF_FILE, path=&quot;/var/run/nscd/socket&quot;}, 110) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_FILE, SOCK_STREAM, 0)         = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFL)                      = 0x2 (flags O_RDWR)
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFL, O_RDWR|O_NONBLOCK)   = 0
</span><br>
<span class="quotelev1">&gt; connect(11, {sa_family=AF_FILE, path=&quot;/var/run/nscd/socket&quot;}, 110) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/resolv.conf&quot;, O_RDONLY)      = 11
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=0, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;&quot;, 4096)                      = 0
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; uname({sys=&quot;Linux&quot;, node=&quot;node1&quot;, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/hosts&quot;, O_RDONLY)            = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFD)                      = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=226, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;# Do not remove the following li&quot;..., 4096) = 226
</span><br>
<span class="quotelev1">&gt; read(11, &quot;&quot;, 4096)                      = 0
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/hosts&quot;, O_RDONLY)            = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFD)                      = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=226, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;# Do not remove the following li&quot;..., 4096) = 226
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_NETLINK, SOCK_RAW, 0)         = 11
</span><br>
<span class="quotelev1">&gt; bind(11, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 0
</span><br>
<span class="quotelev1">&gt; getsockname(11, {sa_family=AF_NETLINK, pid=6192, groups=00000000},
</span><br>
<span class="quotelev1">&gt; [4294967308]) = 0
</span><br>
<span class="quotelev1">&gt; sendto(11, &quot;\24\0\0\0\26\0\1\3\31\220\237J\0\0\0\0\0\0\0\0&quot;, 20, 0,
</span><br>
<span class="quotelev1">&gt; {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 20
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;&lt;\0\0\0\24\0\2\0\31\220\237J0\30\0\0\2\10\200\376\1\0\0\0\10\0\1\0\177\0\0\1&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 332
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;@\0\0\0\24\0\2\0\31\220\237J0\30\0\0\n\200\200\376\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 256
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;\24\0\0\0\3\0\2\0\31\220\237J0\30\0\0\0\0\0\0\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 20
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/hosts&quot;, O_RDONLY)            = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFD)                      = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=226, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;# Do not remove the following li&quot;..., 4096) = 226
</span><br>
<span class="quotelev1">&gt; read(11, &quot;&quot;, 4096)                      = 0
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/hosts&quot;, O_RDONLY)            = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFD)                      = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=226, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;# Do not remove the following li&quot;..., 4096) = 226
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_NETLINK, SOCK_RAW, 0)         = 11
</span><br>
<span class="quotelev1">&gt; bind(11, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 0
</span><br>
<span class="quotelev1">&gt; getsockname(11, {sa_family=AF_NETLINK, pid=6192, groups=00000000},
</span><br>
<span class="quotelev1">&gt; [4294967308]) = 0
</span><br>
<span class="quotelev1">&gt; sendto(11, &quot;\24\0\0\0\26\0\1\3\31\220\237J\0\0\0\0\0\0\0\0&quot;, 20, 0,
</span><br>
<span class="quotelev1">&gt; {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 20
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;&lt;\0\0\0\24\0\2\0\31\220\237J0\30\0\0\2\10\200\376\1\0\0\0\10\0\1\0\177\0\0\1&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 332
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;@\0\0\0\24\0\2\0\31\220\237J0\30\0\0\n\200\200\376\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 256
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;\24\0\0\0\3\0\2\0\31\220\237J0\30\0\0\0\0\0\0\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 20
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/hosts&quot;, O_RDONLY)            = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFD)                      = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=226, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;# Do not remove the following li&quot;..., 4096) = 226
</span><br>
<span class="quotelev1">&gt; read(11, &quot;&quot;, 4096)                      = 0
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/hosts&quot;, O_RDONLY)            = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFD)                      = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=226, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;# Do not remove the following li&quot;..., 4096) = 226
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; socket(PF_NETLINK, SOCK_RAW, 0)         = 11
</span><br>
<span class="quotelev1">&gt; bind(11, {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 0
</span><br>
<span class="quotelev1">&gt; getsockname(11, {sa_family=AF_NETLINK, pid=6192, groups=00000000},
</span><br>
<span class="quotelev1">&gt; [17598768545653587980]) = 0
</span><br>
<span class="quotelev1">&gt; sendto(11, &quot;\24\0\0\0\26\0\1\3\31\220\237J\0\0\0\0\0\0\0\0&quot;, 20, 0,
</span><br>
<span class="quotelev1">&gt; {sa_family=AF_NETLINK, pid=0, groups=00000000}, 12) = 20
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;&lt;\0\0\0\24\0\2\0\31\220\237J0\30\0\0\2\10\200\376\1\0\0\0\10\0\1\0\177\0\0\1&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 332
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;@\0\0\0\24\0\2\0\31\220\237J0\30\0\0\n\200\200\376\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 256
</span><br>
<span class="quotelev1">&gt; recvmsg(11, {msg_name(12)={sa_family=AF_NETLINK, pid=0,
</span><br>
<span class="quotelev1">&gt; groups=00000000},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msg_iov(1)=[{&quot;\24\0\0\0\3\0\2\0\31\220\237J0\30\0\0\0\0\0\0\1\0\0\0\24\0\1\0\0\0\0\0&quot;...,
</span><br>
<span class="quotelev1">&gt; 4096}], msg_controllen=0, msg_flags=0}, 0) = 20
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/hosts&quot;, O_RDONLY)            = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFD)                      = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=226, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;# Do not remove the following li&quot;..., 4096) = 226
</span><br>
<span class="quotelev1">&gt; read(11, &quot;&quot;, 4096)                      = 0
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/hosts&quot;, O_RDONLY)            = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFD)                      = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=226, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;# Do not remove the following li&quot;..., 4096) = 226
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; getuid()                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/etc/passwd&quot;, O_RDONLY)           = 11
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_GETFD)                      = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFREG|0644, st_size=2713, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(11, &quot;root:x:0:0:root:/root:/bin/bash\n&quot;..., 4096) = 2713
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; clone(child_stack=0,
</span><br>
<span class="quotelev1">&gt; flags=CLONE_CHILD_CLEARTID|CLONE_CHILD_SETTID|SIGCHLD,
</span><br>
<span class="quotelev1">&gt; child_tidptr=0x2aaaaaf94d80) = 6193
</span><br>
<span class="quotelev1">&gt; wait4(-1, 0x7ffff43b68b4, WNOHANG, NULL) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = -1 EINTR (Interrupted system call)
</span><br>
<span class="quotelev1">&gt; --- SIGCHLD (Child exited) @ 0 (0) ---
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2aaaaad10790, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x3a464300a0}, {0x2aaaaad10790, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x3a464300a0}, 8) = 0
</span><br>
<span class="quotelev1">&gt; sendto(3, &quot;a&quot;, 1, 0, NULL, 0)           = 1
</span><br>
<span class="quotelev1">&gt; rt_sigreturn(0x3)                       = -1 EINTR (Interrupted system
</span><br>
<span class="quotelev1">&gt; call)
</span><br>
<span class="quotelev1">&gt; wait4(-1, [{WIFEXITED(s) &amp;&amp; WEXITSTATUS(s) == 0}], WNOHANG, NULL) = 6193
</span><br>
<span class="quotelev1">&gt; wait4(-1, 0x7ffff43b67f4, WNOHANG, NULL) = -1 ECHILD (No child processes)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN, revents=POLLIN}, {fd=5, events=POLLIN},
</span><br>
<span class="quotelev1">&gt; {fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}],
</span><br>
<span class="quotelev1">&gt; 5, 1000) = 1
</span><br>
<span class="quotelev1">&gt; recvfrom(4, &quot;a&quot;, 100, 0, NULL, NULL)    = 1
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}], 5,
</span><br>
<span class="quotelev1">&gt; 1000) = -1 EINTR (Interrupted system call)
</span><br>
<span class="quotelev1">&gt; --- SIGINT (Interrupt) @ 0 (0) ---
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGINT, {0x2aaaaad10790, [INT], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x3a464300a0}, {0x2aaaaad10790, [INT], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x3a464300a0}, 8) = 0
</span><br>
<span class="quotelev1">&gt; sendto(3, &quot;a&quot;, 1, 0, NULL, 0)           = 1
</span><br>
<span class="quotelev1">&gt; rt_sigreturn(0x3)                       = -1 EINTR (Interrupted system
</span><br>
<span class="quotelev1">&gt; call)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN, revents=POLLIN}, {fd=5, events=POLLIN},
</span><br>
<span class="quotelev1">&gt; {fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=9, events=POLLIN}],
</span><br>
<span class="quotelev1">&gt; 5, 0) = 1
</span><br>
<span class="quotelev1">&gt; recvfrom(4, &quot;a&quot;, 100, 0, NULL, NULL)    = 1
</span><br>
<span class="quotelev1">&gt; write(2, &quot;mpirun: killing job...\n\n&quot;, 24) = 24
</span><br>
<span class="quotelev1">&gt; write(8, &quot;\1\0\0\0&quot;, 4)                 = 4
</span><br>
<span class="quotelev1">&gt; close(8)                                = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=7, events=POLLIN, revents=POLLIN|POLLHUP}, {fd=9,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}], 5, 0) = 1
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/share/openmpi/help-orterun.txt&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 8
</span><br>
<span class="quotelev1">&gt; ioctl(8, SNDCTL_TMR_TIMEBASE or TCGETS, 0x7ffff43b6310) = -1 ENOTTY
</span><br>
<span class="quotelev1">&gt; (Inappropriate ioctl for device)
</span><br>
<span class="quotelev1">&gt; fstat(8, {st_mode=S_IFREG|0644, st_size=13260, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(8, &quot;# -*- text -*-\n#\n# Copyright (c)&quot;..., 8192) = 8192
</span><br>
<span class="quotelev1">&gt; close(8)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; write(2, &quot;--------------------------------&quot;..., 249) = 249
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=9, events=POLLIN}], 4, 0) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=9, events=POLLIN}], 4, 0) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=9, events=POLLIN}], 4, 2) = 0
</span><br>
<span class="quotelev1">&gt; write(10, &quot;\1\0\0\0&quot;, 4)                = 4
</span><br>
<span class="quotelev1">&gt; close(10)                               = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=9, events=POLLIN, revents=POLLIN|POLLHUP}], 4,
</span><br>
<span class="quotelev1">&gt; 1000) = 1
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGTERM, {SIG_IGN}, {0x2aaaaad10790, [TERM],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3a464300a0}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGINT, {SIG_IGN}, {0x2aaaaad10790, [INT],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3a464300a0}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR1, {SIG_DFL}, {0x2aaaaad10790, [USR1],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3a464300a0}, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR2, {SIG_DFL}, {0x2aaaaad10790, [USR2],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3a464300a0}, 8) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/mpi/gcc/openmpi-1.3.2/share/openmpi/help-orterun.txt&quot;, O_RDONLY)
</span><br>
<span class="quotelev1">&gt; = 8
</span><br>
<span class="quotelev1">&gt; ioctl(8, SNDCTL_TMR_TIMEBASE or TCGETS, 0x7ffff43b6220) = -1 ENOTTY
</span><br>
<span class="quotelev1">&gt; (Inappropriate ioctl for device)
</span><br>
<span class="quotelev1">&gt; fstat(8, {st_mode=S_IFREG|0644, st_size=13260, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4096, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1,
</span><br>
<span class="quotelev1">&gt; 0) = 0x2aaaace0f000
</span><br>
<span class="quotelev1">&gt; read(8, &quot;# -*- text -*-\n#\n# Copyright (c)&quot;..., 8192) = 8192
</span><br>
<span class="quotelev1">&gt; read(8, &quot;n error:\n\nError name: %s\nNode: %&quot;..., 8192) = 5068
</span><br>
<span class="quotelev1">&gt; read(8, &quot;&quot;, 4096)                       = 0
</span><br>
<span class="quotelev1">&gt; close(8)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaace0f000, 4096)            = 0
</span><br>
<span class="quotelev1">&gt; write(2, &quot;--------------------------------&quot;..., 325) = 325
</span><br>
<span class="quotelev1">&gt; write(2, &quot;\tnode2 - daemon did not report b&quot;..., 50) = 50
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336&quot;,
</span><br>
<span class="quotelev1">&gt; {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 8
</span><br>
<span class="quotelev1">&gt; fstat(8, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(8, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(8, /* 4 entries */, 4096)      = 104
</span><br>
<span class="quotelev1">&gt; unlink(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/contact.txt&quot;) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0&quot;,
</span><br>
<span class="quotelev1">&gt; {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 10
</span><br>
<span class="quotelev1">&gt; fstat(10, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(10, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; getdents(10, /* 3 entries */, 4096)     = 72
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0/0&quot;,
</span><br>
<span class="quotelev1">&gt; {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0/0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 11
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; getdents(11, /* 2 entries */, 4096)     = 48
</span><br>
<span class="quotelev1">&gt; getdents(11, /* 0 entries */, 4096)     = 0
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0/0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 11
</span><br>
<span class="quotelev1">&gt; fstat(11, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(11, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; getdents(11, /* 2 entries */, 4096)     = 48
</span><br>
<span class="quotelev1">&gt; getdents(11, /* 0 entries */, 4096)     = 0
</span><br>
<span class="quotelev1">&gt; close(11)                               = 0
</span><br>
<span class="quotelev1">&gt; rmdir(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0/0&quot;) = 0
</span><br>
<span class="quotelev1">&gt; getdents(10, /* 0 entries */, 4096)     = 0
</span><br>
<span class="quotelev1">&gt; close(10)                               = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 10
</span><br>
<span class="quotelev1">&gt; fstat(10, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(10, F_SETFD, FD_CLOEXEC)          = 0
</span><br>
<span class="quotelev1">&gt; getdents(10, /* 2 entries */, 4096)     = 48
</span><br>
<span class="quotelev1">&gt; getdents(10, /* 0 entries */, 4096)     = 0
</span><br>
<span class="quotelev1">&gt; close(10)                               = 0
</span><br>
<span class="quotelev1">&gt; rmdir(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336/0&quot;) = 0
</span><br>
<span class="quotelev1">&gt; getdents(8, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(8)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 8
</span><br>
<span class="quotelev1">&gt; fstat(8, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(8, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(8, /* 2 entries */, 4096)      = 48
</span><br>
<span class="quotelev1">&gt; getdents(8, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(8)                                = 0
</span><br>
<span class="quotelev1">&gt; rmdir(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336&quot;) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0&quot;, {st_mode=S_IFDIR|0700,
</span><br>
<span class="quotelev1">&gt; st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 8
</span><br>
<span class="quotelev1">&gt; fstat(8, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(8, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(8, /* 6 entries */, 4096)      = 176
</span><br>
<span class="quotelev1">&gt; getdents(8, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(8)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 8
</span><br>
<span class="quotelev1">&gt; fstat(8, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(8, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(8, /* 6 entries */, 4096)      = 176
</span><br>
<span class="quotelev1">&gt; close(8)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0/21336&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = -1 ENOENT (No such file or
</span><br>
<span class="quotelev1">&gt; directory)
</span><br>
<span class="quotelev1">&gt; unlink(&quot;/openmpi-sessions-root_at_node1_0/contact.txt&quot;) = -1 ENOENT (No
</span><br>
<span class="quotelev1">&gt; such file or directory)
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaacc0a000, 2116640)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac5cb000, 2104840)         = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {SIG_DFL}, {0x2aaaaad10790, [CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3a464300a0}, 8) = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaaca05000, 2115144)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac3c9000, 2103728)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab7a3000, 2123936)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaac1c4000, 2101104)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabfc1000, 2107352)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabdbd000, 2112648)         = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; close(6)                                = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaabbaf000, 2153112)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab9aa000, 2116736)         = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/openmpi-sessions-root_at_node1_0/1398276096/0&quot;, 0x7ffff43b6320) =
</span><br>
<span class="quotelev1">&gt; -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/openmpi-sessions-root_at_node1_0/1398276096/0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = -1 ENOENT (No such file or
</span><br>
<span class="quotelev1">&gt; directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/openmpi-sessions-root_at_node1_0/1398276096&quot;, 0x7ffff43b6320) = -1
</span><br>
<span class="quotelev1">&gt; ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;/openmpi-sessions-root_at_node1_0/1398276096&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = -1 ENOENT (No such file or
</span><br>
<span class="quotelev1">&gt; directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;openmpi-sessions-root_at_node1_0&quot;, 0x7ffff43b6320) = -1 ENOENT (No
</span><br>
<span class="quotelev1">&gt; such file or directory)
</span><br>
<span class="quotelev1">&gt; open(&quot;openmpi-sessions-root_at_node1_0&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY)
</span><br>
<span class="quotelev1">&gt; = -1 ENOENT (No such file or directory)
</span><br>
<span class="quotelev1">&gt; stat(&quot;/tmp/openmpi-sessions-root_at_node1_0&quot;, {st_mode=S_IFDIR|0700,
</span><br>
<span class="quotelev1">&gt; st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 6 entries */, 4096)      = 176
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 0 entries */, 4096)      = 0
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-root_at_node1_0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = 5
</span><br>
<span class="quotelev1">&gt; fstat(5, {st_mode=S_IFDIR|0700, st_size=4096, ...}) = 0
</span><br>
<span class="quotelev1">&gt; fcntl(5, F_SETFD, FD_CLOEXEC)           = 0
</span><br>
<span class="quotelev1">&gt; getdents(5, /* 6 entries */, 4096)      = 176
</span><br>
<span class="quotelev1">&gt; close(5)                                = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/openmpi-sessions-root_at_node1_0/1398276096/0&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY|O_NONBLOCK|O_DIRECTORY) = -1 ENOENT (No such file or
</span><br>
<span class="quotelev1">&gt; directory)
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab59f000, 2110944)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaab19b000, 2101136)         = 0
</span><br>
<span class="quotelev1">&gt; munmap(0x2aaaaaf96000, 2115040)         = 0
</span><br>
<span class="quotelev1">&gt; exit_group(1)                           = ?
</span><br>
<span class="quotelev1">&gt; ===Strace output end===
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use OpenMPI 1.3.3 to run, here's my configure parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix-by-default-mpirun --prefix=/usr/local/openmpi
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, after install the latest OpenMPI I still encounter this
</span><br>
<span class="quotelev1">&gt; problem. Programs hang without any output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anyone show me some tips to solve that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Amy
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10561/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10562.php">guosong: "[OMPI users] Help!"</a>
<li><strong>Previous message:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>In reply to:</strong> <a href="10557.php">Lee Amy: "[OMPI users] Help: Infiniband interface hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10564.php">Lee Amy: "Re: [OMPI users] Help: Infiniband interface hang"</a>
<li><strong>Reply:</strong> <a href="10564.php">Lee Amy: "Re: [OMPI users] Help: Infiniband interface hang"</a>
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
