<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 28 17:09:56 2006" -->
<!-- isoreceived="20060728210956" -->
<!-- sent="Fri, 28 Jul 2006 17:09:39 -0400" -->
<!-- isosent="20060728210939" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file" -->
<!-- id="C0EFF553.BC24%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b3a7efa90607281355s5f7c57f4j4cab95fa23fae0f8_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-28 17:09:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1693.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Previous message:</strong> <a href="1691.php">Dan Lipsitt: "[OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<li><strong>In reply to:</strong> <a href="1691.php">Dan Lipsitt: "[OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few notes:
<br>
<p>1. I'm guessing that your LD_LIBRARY_PATH is not set properly on the remote
<br>
nodes, which is why it can't find libmpi.so on the remote nodes.  Ensure
<br>
that it's set properly on the other side (you'll likely need to modify your
<br>
shell startup files), or use the --prefix functionality in mpirun (which
<br>
will ensure to set your PATH and LD_LIBRARY_PATH properly on remote nodes),
<br>
like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --prefix /opt/openmpi/1.1 -np 3 --hostfile /tmp/hosts ./first
<br>
<p>Or simply supply the full pathname to mpirun (exactly equivalent to
<br>
--prefix):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi/1.1/bin/mpirun -np 3 --hostfile /tmp/hosts ./first
<br>
<p>Or if you're lazy (like me):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;`which mpirun` -np 3 --hostfile /tmp/hosts ./first
<br>
<p>2. Note that your &quot;ls&quot; command was actually shell expanded on the node where
<br>
you ran mpirun, and *then* it was executed on the remote nodes.  This was
<br>
not a problem because the files are actually the same on all nodes, but I
<br>
thought you might want to know that for future reference.
<br>
<p>Hope that helps!
<br>
<p><p>On 7/28/06 4:55 PM, &quot;Dan Lipsitt&quot; &lt;danlipsitt_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  get the following error when I attempt to run an mpi program (called
</span><br>
<span class="quotelev1">&gt; &quot;first&quot;, in this case) across several nodes (it works on a single
</span><br>
<span class="quotelev1">&gt; node):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 3 --hostfile /tmp/nodes ./first
</span><br>
<span class="quotelev1">&gt; ./first: error while loading shared libraries: libmpi.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My library path looks okay and I am able to run other programs,
</span><br>
<span class="quotelev1">&gt; including listing the supposedly missing library:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 3 --hostfile /tmp/nodes uptime
</span><br>
<span class="quotelev1">&gt;  16:42:51 up 22 days,  3:14, 10 users,  load average: 0.01, 0.02, 0.04
</span><br>
<span class="quotelev1">&gt;  19:49:32 up  1:36,  0 users,  load average: 0.00, 0.00, 0.00
</span><br>
<span class="quotelev1">&gt;  19:40:01 up  1:37,  0 users,  load average: 0.00, 0.00, 0.00
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 3 --hostfile /tmp/nodes ls -l /opt/openmpi/1.1/lib/libmpi.so*
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 root root      15 Jul 13 15:44
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/libmpi.so -&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 root root      15 Jul 13 15:44
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/libmpi.so.0 -&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root root 6157698 Jul 12 18:08
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 root root      15 Jul 26 16:17
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/libmpi.so -&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 root root      15 Jul 26 16:17
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/libmpi.so.0 -&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root root 6157698 Jul 12 18:08
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 root root      15 Jul 26 13:50
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/libmpi.so -&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 root root      15 Jul 26 13:50
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/libmpi.so.0 -&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root root 6157698 Jul 12 18:08
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.1/lib/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Dan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1693.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Previous message:</strong> <a href="1691.php">Dan Lipsitt: "[OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
<li><strong>In reply to:</strong> <a href="1691.php">Dan Lipsitt: "[OMPI users] error while loading shared libraries: libmpi.so.0: cannot open shared object file"</a>
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
