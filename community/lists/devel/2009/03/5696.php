<?
$subject_val = "Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 09:28:46 2009" -->
<!-- isoreceived="20090324132846" -->
<!-- sent="Tue, 24 Mar 2009 09:28:37 -0400" -->
<!-- isosent="20090324132837" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty" -->
<!-- id="D42E4816-A3B7-4F73-B5D8-AA244EFD8900_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.LRH.1.10.0903240802110.15037_at_lnfm1.sai.msu.ru" -->
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
<strong>Subject:</strong> Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-24 09:28:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5695.php">Sergey E. Koposov: "[OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>In reply to:</strong> <a href="5695.php">Sergey E. Koposov: "[OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We didn't check the boundaries of the shell string from the structure  
<br>
returned by getpwuid. This should be fixed by commit r20853.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks for your help,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 24, 2009, at 01:37 , Sergey E. Koposov wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've found that openmpi-1.3.1 segfaults when the the shell field in  
</span><br>
<span class="quotelev1">&gt; the passwd file is empty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I take the simple program which does nothing:
</span><br>
<span class="quotelev1">&gt; --------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; main (int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt; int nworkers, whoami, i, errcode;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;whoami);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;nworkers);
</span><br>
<span class="quotelev1">&gt; printf(&quot;%d %d &quot;,whoami, nworkers);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; Compile it. And run it.
</span><br>
<span class="quotelev1">&gt; I get the segfault:
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; [fortune:05346] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [fortune:05346] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [fortune:05346] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [fortune:05346] Failing at address: 0x1
</span><br>
<span class="quotelev1">&gt; [fortune:05346] [ 0] [0xffffe40c]
</span><br>
<span class="quotelev1">&gt; [fortune:05346] [ 1] /usr/lib/openmpi/mca_plm_rsh.so [0xb7f9baa1]
</span><br>
<span class="quotelev1">&gt; [fortune:05346] [ 2] /usr/lib/openmpi/mca_plm_rsh.so [0xb7f9d291]
</span><br>
<span class="quotelev1">&gt; [fortune:05346] [ 3] /usr/bin/mpirun [0x804a8cb]
</span><br>
<span class="quotelev1">&gt; [fortune:05346] [ 4] /usr/bin/mpirun [0x8049ff2]
</span><br>
<span class="quotelev1">&gt; [fortune:05346] [ 5] /lib/libc.so.6(__libc_start_main+0xe0)  
</span><br>
<span class="quotelev1">&gt; [0xb7d56390]
</span><br>
<span class="quotelev1">&gt; [fortune:05346] [ 6] /usr/bin/mpirun [0x8049f71]
</span><br>
<span class="quotelev1">&gt; [fortune:05346] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; Here is the gdb backtrace:
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 0xb7dc08c1 in strcmp () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xb7dc08c1 in strcmp () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0xb7f0ecc9 in find_shell (shell=0x8074b95 &quot;&quot;) at  
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c:1459
</span><br>
<span class="quotelev1">&gt; #2  0xb7f0ce8b in setup_launch (argcptr=0xbfce5960,  
</span><br>
<span class="quotelev1">&gt; argvptr=0xbfce5968,
</span><br>
<span class="quotelev1">&gt;    nodename=0x80795c0 &quot;fortune&quot;, node_name_index1=0xbfce5970,
</span><br>
<span class="quotelev1">&gt;    proc_vpid_index=0xbfce596c, prefix_dir=0x805b028 &quot;/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi_inst&quot;)
</span><br>
<span class="quotelev1">&gt;    at plm_rsh_module.c:376
</span><br>
<span class="quotelev1">&gt; #3  0xb7f0e181 in orte_plm_rsh_launch (jdata=0x80539a8)
</span><br>
<span class="quotelev1">&gt;    at plm_rsh_module.c:1051
</span><br>
<span class="quotelev1">&gt; #4  0x0804a8eb in orterun (argc=4, argv=0xbfce5b74) at orterun.c:680
</span><br>
<span class="quotelev1">&gt; #5  0x0804a012 in main (argc=Cannot access memory at address 0x1
</span><br>
<span class="quotelev1">&gt; ) at main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt; It is clear that the segfault comes from the fact that the shell  
</span><br>
<span class="quotelev1">&gt; field in getpwuid(getuid()) is  empty. (as it is in /etc/passwd  
</span><br>
<span class="quotelev1">&gt; too). As far as I understand the empty shell field in passwd file is  
</span><br>
<span class="quotelev1">&gt; perfectly correct and is an alias for /bin/sh (see man 5 passwd).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I guess in that case the setup_launch() function should just have
</span><br>
<span class="quotelev1">&gt; an additional check for an empty pw_shell. Something like this:
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.3.1/orte/mca/plm/rsh/plm_rsh_module.c.orig         
</span><br>
<span class="quotelev1">&gt; 2009-03-24 06:22:06.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.3.1/orte/mca/plm/rsh/plm_rsh_module.c     2009-03-24  
</span><br>
<span class="quotelev1">&gt; 06:24:07.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -372,8 +372,11 @@
</span><br>
<span class="quotelev1">&gt;         orte_show_help( &quot;help-plm-rsh.txt&quot;, &quot;unknown-user&quot;, true,  
</span><br>
<span class="quotelev1">&gt; (int)getuid() );
</span><br>
<span class="quotelev1">&gt;         return ORTE_ERR_FATAL;
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt; -        param = p-&gt;pw_shell;
</span><br>
<span class="quotelev1">&gt; -        local_shell = find_shell(p-&gt;pw_shell);
</span><br>
<span class="quotelev1">&gt; +        if (!((p-&gt;pw_shell)[0]))
</span><br>
<span class="quotelev1">&gt; +            param=&quot;/bin/sh&quot;;
</span><br>
<span class="quotelev1">&gt; +        else
</span><br>
<span class="quotelev1">&gt; +            param = p-&gt;pw_shell;
</span><br>
<span class="quotelev1">&gt; +        local_shell = find_shell(param);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* If we didn't find it in getpwuid(), try looking at the $SHELL
</span><br>
<span class="quotelev1">&gt;      environment variable (see <a href="https://svn.open-mpi.org/trac/ompi/ticket/1060">https://svn.open-mpi.org/trac/ompi/ticket/1060</a>)
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 	Sergey
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *******************************************************************
</span><br>
<span class="quotelev1">&gt; Sergey E. Koposov
</span><br>
<span class="quotelev1">&gt; Max Planck Institute for Astronomy/Cambridge Institute for Astronomy/ 
</span><br>
<span class="quotelev1">&gt; Sternberg Astronomical Institute
</span><br>
<span class="quotelev1">&gt; Tel: +49-6221-528-349
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://lnfm1.sai.msu.ru/~math">http://lnfm1.sai.msu.ru/~math</a>
</span><br>
<span class="quotelev1">&gt; E-mail: math_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5695.php">Sergey E. Koposov: "[OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>In reply to:</strong> <a href="5695.php">Sergey E. Koposov: "[OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
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
