<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 03:32:06 2007" -->
<!-- isoreceived="20070117083206" -->
<!-- sent="Wed, 17 Jan 2007 09:31:52 +0100" -->
<!-- isosent="20070117083152" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ld_library_path not being updated" -->
<!-- id="20070117083152.GH6619_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5b7094580701161722i11909cebp7027729846aa12db_at_mail.gmail.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 03:31:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2474.php">Robin Humble: "[OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2472.php">eddie168: "[OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2469.php">Brian Budge: "[OMPI users]  ld_library_path not being updated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2477.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Reply:</strong> <a href="2477.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 16, 2007 at 05:22:35PM -0800, Brian Budge wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<p>Hi!
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; If I run from host-0:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 -host host-0 myprogram
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no problems, but if I run
</span><br>
<span class="quotelev2">&gt; &gt;mpirun -np 4 -host host-1 myprogram
</span><br>
<span class="quotelev1">&gt; error while loading shared libraries: libSGUL.so: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<p><span class="quotelev2">&gt; &gt;mpirun -np 1 -host host-1 ldd myprogram
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         libSGUL.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libOpenMesh_Core.so =&gt; not found
</span><br>
<p>Obviously, you'll need these libs on host-1. Even more, they need
<br>
to be found in a system library dir (e.g. /usr/lib) or somewhere
<br>
inside LD_LIBRARY_PATH. I guess you already know that.
<br>
<p><span class="quotelev1">&gt; If I run the following, however, I see that my LD_LIBRARY_PATH is correct:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 1 -host burn-0 echo $LD_LIBRARY_PATH
</span><br>
<p>The variable is expanded on the calling host:
<br>
<p>adi_at_ipc654:~$ echo $HOSTNAME
<br>
ipc654
<br>
adi_at_ipc654:~$ mpirun -np 1 -host amun3 echo $HOSTNAME
<br>
ipc654
<br>
<p>In other words: you're echoing your local LD_LIBRARY_PATH. If this
<br>
should be the same on host-1, either set it in your login scripts
<br>
(on host-1) or export it with -x:
<br>
<p>host-0:~$ mpirun -x LD_LIBRARY_PATH -host host-1 your_prog
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2474.php">Robin Humble: "[OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2472.php">eddie168: "[OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2469.php">Brian Budge: "[OMPI users]  ld_library_path not being updated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2477.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Reply:</strong> <a href="2477.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
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
