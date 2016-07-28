<?
$subject_val = "[OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 01:38:07 2009" -->
<!-- isoreceived="20090324053807" -->
<!-- sent="Tue, 24 Mar 2009 08:37:55 +0300 (MSK)" -->
<!-- isosent="20090324053755" -->
<!-- name="Sergey E. Koposov" -->
<!-- email="math_at_[hidden]" -->
<!-- subject="[OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty" -->
<!-- id="alpine.LRH.1.10.0903240802110.15037_at_lnfm1.sai.msu.ru" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty<br>
<strong>From:</strong> Sergey E. Koposov (<em>math_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-24 01:37:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5696.php">George Bosilca: "Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>Previous message:</strong> <a href="5694.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5696.php">George Bosilca: "Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>Reply:</strong> <a href="5696.php">George Bosilca: "Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I've found that openmpi-1.3.1 segfaults when the the shell field in the 
<br>
passwd file is empty.
<br>
<p>So I take the simple program which does nothing:
<br>
--------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
main (int argc, char **argv) {
<br>
int nworkers, whoami, i, errcode;
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;whoami);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;nworkers);
<br>
printf(&quot;%d %d &quot;,whoami, nworkers);
<br>
MPI_Finalize();
<br>
}
<br>
----------------------------------
<br>
Compile it. And run it.
<br>
I get the segfault:
<br>
----------------------------------
<br>
[fortune:05346] *** Process received signal ***
<br>
[fortune:05346] Signal: Segmentation fault (11)
<br>
[fortune:05346] Signal code: Address not mapped (1)
<br>
[fortune:05346] Failing at address: 0x1
<br>
[fortune:05346] [ 0] [0xffffe40c]
<br>
[fortune:05346] [ 1] /usr/lib/openmpi/mca_plm_rsh.so [0xb7f9baa1]
<br>
[fortune:05346] [ 2] /usr/lib/openmpi/mca_plm_rsh.so [0xb7f9d291]
<br>
[fortune:05346] [ 3] /usr/bin/mpirun [0x804a8cb]
<br>
[fortune:05346] [ 4] /usr/bin/mpirun [0x8049ff2]
<br>
[fortune:05346] [ 5] /lib/libc.so.6(__libc_start_main+0xe0) [0xb7d56390]
<br>
[fortune:05346] [ 6] /usr/bin/mpirun [0x8049f71]
<br>
[fortune:05346] *** End of error message ***
<br>
--------------------------
<br>
Here is the gdb backtrace:
<br>
------------------------------
<br>
0xb7dc08c1 in strcmp () from /lib/libc.so.6
<br>
(gdb) bt
<br>
#0  0xb7dc08c1 in strcmp () from /lib/libc.so.6
<br>
#1  0xb7f0ecc9 in find_shell (shell=0x8074b95 &quot;&quot;) at plm_rsh_module.c:1459
<br>
#2  0xb7f0ce8b in setup_launch (argcptr=0xbfce5960, argvptr=0xbfce5968,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nodename=0x80795c0 &quot;fortune&quot;, node_name_index1=0xbfce5970,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc_vpid_index=0xbfce596c, prefix_dir=0x805b028 &quot;/tmp/openmpi_inst&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at plm_rsh_module.c:376
<br>
#3  0xb7f0e181 in orte_plm_rsh_launch (jdata=0x80539a8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at plm_rsh_module.c:1051
<br>
#4  0x0804a8eb in orterun (argc=4, argv=0xbfce5b74) at orterun.c:680
<br>
#5  0x0804a012 in main (argc=Cannot access memory at address 0x1
<br>
) at main.c:13
<br>
(gdb)
<br>
---------------------------
<br>
It is clear that the segfault comes from the fact that the shell field 
<br>
in getpwuid(getuid()) is  empty. (as it is in /etc/passwd too). As far as 
<br>
I understand the empty shell field in passwd file is perfectly correct and 
<br>
is an alias for /bin/sh (see man 5 passwd).
<br>
<p>So, I guess in that case the setup_launch() function should just have
<br>
an additional check for an empty pw_shell. Something like this:
<br>
-----------------------------------------------
<br>
--- openmpi-1.3.1/orte/mca/plm/rsh/plm_rsh_module.c.orig        2009-03-24 06:22:06.000000000 +0100
<br>
+++ openmpi-1.3.1/orte/mca/plm/rsh/plm_rsh_module.c     2009-03-24 06:24:07.000000000 +0100
<br>
@@ -372,8 +372,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help( &quot;help-plm-rsh.txt&quot;, &quot;unknown-user&quot;, true, (int)getuid() );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERR_FATAL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-        param = p-&gt;pw_shell;
<br>
-        local_shell = find_shell(p-&gt;pw_shell);
<br>
+        if (!((p-&gt;pw_shell)[0]))
<br>
+            param=&quot;/bin/sh&quot;;
<br>
+        else
<br>
+            param = p-&gt;pw_shell;
<br>
+        local_shell = find_shell(param);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If we didn't find it in getpwuid(), try looking at the $SHELL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;environment variable (see <a href="https://svn.open-mpi.org/trac/ompi/ticket/1060">https://svn.open-mpi.org/trac/ompi/ticket/1060</a>)
<br>
----------------------
<br>
<p>Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sergey
<br>
<p>*******************************************************************
<br>
Sergey E. Koposov
<br>
Max Planck Institute for Astronomy/Cambridge Institute for Astronomy/Sternberg Astronomical Institute
<br>
Tel: +49-6221-528-349
<br>
Web: <a href="http://lnfm1.sai.msu.ru/~math">http://lnfm1.sai.msu.ru/~math</a>
<br>
E-mail: math_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5696.php">George Bosilca: "Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>Previous message:</strong> <a href="5694.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5696.php">George Bosilca: "Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
<li><strong>Reply:</strong> <a href="5696.php">George Bosilca: "Re: [OMPI devel] seg fault in openmpi-1.3.1 when shell in passwd is empty"</a>
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
