<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  6 09:22:20 2007" -->
<!-- isoreceived="20070406132220" -->
<!-- sent="Fri, 06 Apr 2007 15:22:11 +0200" -->
<!-- isosent="20070406132211" -->
<!-- name="Werner Van Geit" -->
<!-- email="wernervangeit_at_[hidden]" -->
<!-- subject="[OMPI users] Mixed Apple cluster OpenMPI build problems" -->
<!-- id="C23C1624.E7EB%wernervangeit_at_hotmail.com" -->
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
<strong>From:</strong> Werner Van Geit (<em>wernervangeit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-06 09:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3039.php">Brian W. Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Maybe reply:</strong> <a href="3039.php">Brian W. Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Maybe reply:</strong> <a href="3047.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>In our lab we are installing OpenMPI onto our Apple cluster computer. The
<br>
cluster contains a couple of PowerPC G5 nodes and the new Intel Xeon
<br>
Xserves, all with a clean install of Mac OS X Server 10.4.8 , Xcode 2.4.1
<br>
and Sun Grid Engine 6 (so we're not using XGrid). Since we want to make it 1
<br>
big cluster, we need Universal Binaries of OpenMPI.
<br>
<p>We have been using the script buildpackage.sh available from the
<br>
contrib/dist/macosx-pkg from the openmpi-1.2.tar.gz file. If we run this
<br>
script on an Intel machine, we get fat binaries (checked this with the
<br>
command line &quot;file&quot; command) that run on the Intel machine (we used
<br>
&quot;ompi_info&quot; as the test), but not on the G5 machines. While running
<br>
ompi_info) we get an error:
<br>
<p>dyld: Symbol not found: _lt_libltdlc_LTX_preloaded_symbols
<br>
&nbsp;&nbsp;Referenced from: /tmp/werner/mpi/lib/libopen-pal.0.dylib
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
<p>Trace/BPT trap
<br>
<p>(There are no error @ compile time)
<br>
<p>Also the inverse occurs. If we compile on a G5, again fat binaries of
<br>
everything are created, but now it doesn't run on the Intel anymore, with
<br>
exactly the same error. And it also doesn't run on a G5 unless we make a
<br>
thinner binary (from the fat ones), only containing the ppc and intel code
<br>
(not the ppc64).
<br>
<p>First, we thought that the problem could be caused by the processor
<br>
switching modes from 32 to 64 bit or something, so we compiled everything
<br>
with a modified buildpackage.sh script adding &quot;-m32&quot; to the CFLAGS, CXXFLAGS
<br>
and OBJCFLAGS, but this had no effect, still the same errors @ runtime.
<br>
<p>Then we compiled with &quot;-enable-static&quot; and &quot;-disable-shared&quot; but then the
<br>
error occurred @ compile time. We got an error like &quot; Symbol not found:
<br>
_lt_libltdlc_LTX_preloaded_symbols&quot;.
<br>
<p><p>Since we figured out that this libltdlc is used for the &quot;dlopen&quot;, I disabled
<br>
it by putting &quot;--disable-dlopen&quot; in the buildpackage.sh script. Now
<br>
everything compiles on both Intel and PPC and also runs on both
<br>
architectures.
<br>
But now I can imagine that in the future we might be having problems with
<br>
installing plugins because we disabled the dlopen.
<br>
<p>Do you maybe know if there is another way to compile OpenMPI on our
<br>
configuration, while still enabling dlopen ? (Is the problem maybe caused by
<br>
the fact that there doesn't seem to exist a 64-bit version of
<br>
libltdl.3.dylib and libltdl.a on the OS ? The output of the file command is
<br>
<p>&quot;
<br>
libltdl.3.dylib: Mach-O fat file with 2 architectures
<br>
libltdl.3.dylib (for architecture i386): Mach-O dynamically linked shared
<br>
library i386
<br>
libltdl.3.dylib (for architecture ppc): Mach-O dynamically linked shared
<br>
library ppc
<br>
&quot;
<br>
(so no ppc64)
<br>
<p><p><p>Thank you,
<br>
<p>Werner Van Geit
<br>
<p><pre>
-- 
                         ,,,
                        (o o)
====================oOO==(_)==OOo==================
PhD Student Laboratory for Theoretical Neurobiology
Department of Biomedical Sciences
University of Antwerp (Campus Drie Eiken)
Universiteitsplein 1
B-2610 Wilrijk (Belgium)
Office T5.37
Tel. ++ 32 3 8202610
werner_at_[hidden]

</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3034/buildoutput.txt">buildoutput.txt</a>
</ul>
<!-- attachment="buildoutput.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3035.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Previous message:</strong> <a href="3033.php">Jeff Squyres: "Re: [OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3039.php">Brian W. Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Maybe reply:</strong> <a href="3039.php">Brian W. Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Maybe reply:</strong> <a href="3047.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
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
