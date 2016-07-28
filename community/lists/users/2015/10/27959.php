<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 12:01:57 2015" -->
<!-- isoreceived="20151030160157" -->
<!-- sent="Fri, 30 Oct 2015 17:02:12 +0100" -->
<!-- isosent="20151030160212" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="56339484.6010706_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="871tcctqlg.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel<br>
<strong>From:</strong> Fabian Wein (<em>fabian.wein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 12:02:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27960.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27958.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27957.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27964.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27964.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27971.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/30/2015 02:48 PM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Fabian Wein &lt;fabian.wein_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a valid test?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -n 4 hostname
</span><br>
<span class="quotelev2">&gt;&gt; leo
</span><br>
<span class="quotelev2">&gt;&gt; leo
</span><br>
<span class="quotelev2">&gt;&gt; leo
</span><br>
<span class="quotelev2">&gt;&gt; leo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, unless you turned off the default binding -- to socket? check the
</span><br>
<span class="quotelev1">&gt; mpirun man page -- it worked, but the &quot;numa&quot; level failed.  I don't know
</span><br>
<span class="quotelev1">&gt; if that level has to exist, and there have been bugs in that area
</span><br>
<span class="quotelev1">&gt; before.  Running lstopo might be useful, and checking that you're
</span><br>
<span class="quotelev1">&gt; picking up the right hwloc dynamic library.
</span><br>
<p>Sorry, I don't understand. Where is hwloc dynamically linked? I made 
<br>
now sure I
<br>
have only one type of libhwloc.so and libnuma.so on the system (there 
<br>
were versions
<br>
of an older date). Is a a way to check the lib if it has the feature?
<br>
<p>mpiexec only links libnuma which was actually the old version and is 
<br>
now the one I
<br>
build from the numactl source by myself.
<br>
<p>ldd /opt/openmpi-1.10.0-gcc/bin/mpiexec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007ffffdbaa000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.12 =&gt; /opt/openmpi-1.10.0-gcc/lib/libopen-rte.so.12 
<br>
(0x00007fbfdae58000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.13 =&gt; /opt/openmpi-1.10.0-gcc/lib/libopen-pal.so.13 
<br>
(0x00007fbfdab78000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 
<br>
(0x00007fbfda958000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007fbfda590000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libnuma.so.1 
<br>
(0x00007fbfda380000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007fbfda178000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib/x86_64-linux-gnu/librt.so.1 (0x00007fbfd9f70000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007fbfd9d68000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007fbfdb0d8000)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What happens if you try to bind to sockets, assuming you don't want to
</span><br>
<span class="quotelev1">&gt; bind to cores?  [I don't understand why the default isn't to cores when
</span><br>
<span class="quotelev1">&gt; you have only one process per core.]
</span><br>
<p>bind-to cpu and socket bring the same error as bind-to numa.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27960.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27958.php">Ralph Castain: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27957.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27964.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27964.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27971.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
