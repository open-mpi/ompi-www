<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 16 20:22:41 2007" -->
<!-- isoreceived="20070117012241" -->
<!-- sent="Tue, 16 Jan 2007 17:22:35 -0800" -->
<!-- isosent="20070117012235" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="[OMPI users]  ld_library_path not being updated" -->
<!-- id="5b7094580701161722i11909cebp7027729846aa12db_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-16 20:22:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2470.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>Previous message:</strong> <a href="2468.php">Brock Palen: "[OMPI users] openmpi on altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Reply:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I'm having a bit of an issue with my library paths and mpi that I can't
<br>
quite seem to resolve.
<br>
<p>If I run from host-0:
<br>
<span class="quotelev1">&gt; mpirun -np 4 -host host-0 myprogram
</span><br>
<p>I have no problems, but if I run
<br>
<span class="quotelev1">&gt;mpirun -np 4 -host host-1 myprogram
</span><br>
<p>I get an error like this:
<br>
error while loading shared libraries: libSGUL.so: cannot open shared object
<br>
file: No such file or directory
<br>
<p>I can see that it can't find two of my shared library files when I execute
<br>
this:
<br>
<span class="quotelev1">&gt;mpirun -np 1 -host host-1 ldd myprogram
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-gate.so.1 =&gt;  (0xb7f48000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libSGUL.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libguile.so.12 =&gt; /usr/lib/libguile.so.12 (0xb7e96000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libOpenMesh_Core.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_cxx.so.0 =&gt; /usr/lib/libmpi_cxx.so.0 (0xb7e7e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/lib/libmpi.so.0 (0xb7dd9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;liborte.so.0 =&gt; /usr/lib/liborte.so.0 (0xb7d92000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopal.so.0 =&gt; /usr/lib/libopal.so.0 (0xb7d45000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0xb7d41000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0xb7d2b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0xb7d27000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0xb7d01000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libstdc++.so.6 =&gt;
<br>
/usr/lib/gcc/i686-pc-linux-gnu/4.1.1/libstdc++.so.6 (0xb7c22000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /usr/lib/gcc/i686-pc-linux-gnu/4.1.1/libgcc_s.so.1
<br>
(0xb7c18000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xb7c01000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0xb7adb000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libguile-ltdl.so.1 =&gt; /usr/lib/libguile-ltdl.so.1 (0xb7ad6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libqthreads.so.12 =&gt; /usr/lib/libqthreads.so.12 (0xb7ad3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libcrypt.so.1 =&gt; /lib/libcrypt.so.1 (0xb7aa5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux.so.2 (0xb7f49000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-gate.so.1 =&gt;  (0xb7f23000)
<br>
<p>If I run the following, however, I see that my LD_LIBRARY_PATH is correct:
<br>
<span class="quotelev1">&gt; mpirun -np 1 -host burn-0 echo $LD_LIBRARY_PATH
</span><br>
<p>/usr/local/lib32:/home/budge/local/lib:/home/budge/projects/mgi_tony/build/lib
<br>
<p>For now I've had to resort to making mpi run a wrapper script which sets my
<br>
LD_LIBRARY_PATH, but naturally this isn't ideal.  Does anyone have an idea
<br>
what this is or how I can fix it?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2469/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2470.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>Previous message:</strong> <a href="2468.php">Brock Palen: "[OMPI users] openmpi on altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Reply:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
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
