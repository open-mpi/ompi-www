<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 28 16:55:28 2006" -->
<!-- isoreceived="20060728205528" -->
<!-- sent="Fri, 28 Jul 2006 16:55:24 -0400" -->
<!-- isosent="20060728205524" -->
<!-- name="Dan Lipsitt" -->
<!-- email="danlipsitt_at_[hidden]" -->
<!-- subject="[OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file" -->
<!-- id="b3a7efa90607281355s5f7c57f4j4cab95fa23fae0f8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Dan Lipsitt (<em>danlipsitt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-28 16:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1692.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<li><strong>Previous message:</strong> <a href="1690.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1692.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<li><strong>Reply:</strong> <a href="1692.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;get the following error when I attempt to run an mpi program (called
<br>
&quot;first&quot;, in this case) across several nodes (it works on a single
<br>
node):
<br>
<p>$ mpirun -np 3 --hostfile /tmp/nodes ./first
<br>
./first: error while loading shared libraries: libmpi.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
<p>My library path looks okay and I am able to run other programs,
<br>
including listing the supposedly missing library:
<br>
<p>$ echo $LD_LIBRARY_PATH
<br>
/opt/openmpi/1.1/lib/
<br>
$ mpirun -np 3 --hostfile /tmp/nodes uptime
<br>
&nbsp;16:42:51 up 22 days,  3:14, 10 users,  load average: 0.01, 0.02, 0.04
<br>
&nbsp;19:49:32 up  1:36,  0 users,  load average: 0.00, 0.00, 0.00
<br>
&nbsp;19:40:01 up  1:37,  0 users,  load average: 0.00, 0.00, 0.00
<br>
$ mpirun -np 3 --hostfile /tmp/nodes ls -l /opt/openmpi/1.1/lib/libmpi.so*
<br>
lrwxrwxrwx  1 root root      15 Jul 13 15:44
<br>
/opt/openmpi/1.1/lib/libmpi.so -&gt; libmpi.so.0.0.0
<br>
lrwxrwxrwx  1 root root      15 Jul 13 15:44
<br>
/opt/openmpi/1.1/lib/libmpi.so.0 -&gt; libmpi.so.0.0.0
<br>
-rwxr-xr-x  1 root root 6157698 Jul 12 18:08
<br>
/opt/openmpi/1.1/lib/libmpi.so.0.0.0
<br>
lrwxrwxrwx  1 root root      15 Jul 26 16:17
<br>
/opt/openmpi/1.1/lib/libmpi.so -&gt; libmpi.so.0.0.0
<br>
lrwxrwxrwx  1 root root      15 Jul 26 16:17
<br>
/opt/openmpi/1.1/lib/libmpi.so.0 -&gt; libmpi.so.0.0.0
<br>
-rwxr-xr-x  1 root root 6157698 Jul 12 18:08
<br>
/opt/openmpi/1.1/lib/libmpi.so.0.0.0
<br>
lrwxrwxrwx  1 root root      15 Jul 26 13:50
<br>
/opt/openmpi/1.1/lib/libmpi.so -&gt; libmpi.so.0.0.0
<br>
lrwxrwxrwx  1 root root      15 Jul 26 13:50
<br>
/opt/openmpi/1.1/lib/libmpi.so.0 -&gt; libmpi.so.0.0.0
<br>
-rwxr-xr-x  1 root root 6157698 Jul 12 18:08
<br>
/opt/openmpi/1.1/lib/libmpi.so.0.0.0
<br>
<p>Any suggestions?
<br>
<p>Thanks,
<br>
Dan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1692.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<li><strong>Previous message:</strong> <a href="1690.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1692.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<li><strong>Reply:</strong> <a href="1692.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
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
