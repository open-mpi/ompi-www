<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  6 13:09:06 2007" -->
<!-- isoreceived="20070406170906" -->
<!-- sent="Fri, 6 Apr 2007 11:08:51 -0600" -->
<!-- isosent="20070406170851" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Apple cluster OpenMPI build problems" -->
<!-- id="5D10F9B5-C970-4DA1-A594-0844C703D1D0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY134-DAV1734900A115F24688A9576B0640_at_phx.gbl" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-06 13:08:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3040.php">Brian Powell: "[OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Previous message:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Maybe in reply to:</strong> <a href="3034.php">Werner Van Geit: "[OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3047.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi -
<br>
<p>This is pretty odd.  I haven't gotten a chance to make the &quot;official&quot;  
<br>
1.2 OS X package yet, so I havent run into this problem.  I'll try to  
<br>
replicate in the next day or two.  In the mean time, just to make  
<br>
sure, you are using the latest version of XCode, right?
<br>
<p>Brian
<br>
<p><p>On Apr 6, 2007, at 7:22 AM, Werner Van Geit wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our lab we are installing OpenMPI onto our Apple cluster  
</span><br>
<span class="quotelev1">&gt; computer. The
</span><br>
<span class="quotelev1">&gt; cluster contains a couple of PowerPC G5 nodes and the new Intel Xeon
</span><br>
<span class="quotelev1">&gt; Xserves, all with a clean install of Mac OS X Server 10.4.8 , Xcode  
</span><br>
<span class="quotelev1">&gt; 2.4.1
</span><br>
<span class="quotelev1">&gt; and Sun Grid Engine 6 (so we're not using XGrid). Since we want to  
</span><br>
<span class="quotelev1">&gt; make it 1
</span><br>
<span class="quotelev1">&gt; big cluster, we need Universal Binaries of OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been using the script buildpackage.sh available from the
</span><br>
<span class="quotelev1">&gt; contrib/dist/macosx-pkg from the openmpi-1.2.tar.gz file. If we run  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; script on an Intel machine, we get fat binaries (checked this with the
</span><br>
<span class="quotelev1">&gt; command line &quot;file&quot; command) that run on the Intel machine (we used
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info&quot; as the test), but not on the G5 machines. While running
</span><br>
<span class="quotelev1">&gt; ompi_info) we get an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dyld: Symbol not found: _lt_libltdlc_LTX_preloaded_symbols
</span><br>
<span class="quotelev1">&gt;   Referenced from: /tmp/werner/mpi/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trace/BPT trap
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (There are no error @ compile time)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also the inverse occurs. If we compile on a G5, again fat binaries of
</span><br>
<span class="quotelev1">&gt; everything are created, but now it doesn't run on the Intel  
</span><br>
<span class="quotelev1">&gt; anymore, with
</span><br>
<span class="quotelev1">&gt; exactly the same error. And it also doesn't run on a G5 unless we  
</span><br>
<span class="quotelev1">&gt; make a
</span><br>
<span class="quotelev1">&gt; thinner binary (from the fat ones), only containing the ppc and  
</span><br>
<span class="quotelev1">&gt; intel code
</span><br>
<span class="quotelev1">&gt; (not the ppc64).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, we thought that the problem could be caused by the processor
</span><br>
<span class="quotelev1">&gt; switching modes from 32 to 64 bit or something, so we compiled  
</span><br>
<span class="quotelev1">&gt; everything
</span><br>
<span class="quotelev1">&gt; with a modified buildpackage.sh script adding &quot;-m32&quot; to the CFLAGS,  
</span><br>
<span class="quotelev1">&gt; CXXFLAGS
</span><br>
<span class="quotelev1">&gt; and OBJCFLAGS, but this had no effect, still the same errors @  
</span><br>
<span class="quotelev1">&gt; runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then we compiled with &quot;-enable-static&quot; and &quot;-disable-shared&quot; but  
</span><br>
<span class="quotelev1">&gt; then the
</span><br>
<span class="quotelev1">&gt; error occurred @ compile time. We got an error like &quot; Symbol not  
</span><br>
<span class="quotelev1">&gt; found:
</span><br>
<span class="quotelev1">&gt; _lt_libltdlc_LTX_preloaded_symbols&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since we figured out that this libltdlc is used for the &quot;dlopen&quot;, I  
</span><br>
<span class="quotelev1">&gt; disabled
</span><br>
<span class="quotelev1">&gt; it by putting &quot;--disable-dlopen&quot; in the buildpackage.sh script. Now
</span><br>
<span class="quotelev1">&gt; everything compiles on both Intel and PPC and also runs on both
</span><br>
<span class="quotelev1">&gt; architectures.
</span><br>
<span class="quotelev1">&gt; But now I can imagine that in the future we might be having  
</span><br>
<span class="quotelev1">&gt; problems with
</span><br>
<span class="quotelev1">&gt; installing plugins because we disabled the dlopen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you maybe know if there is another way to compile OpenMPI on our
</span><br>
<span class="quotelev1">&gt; configuration, while still enabling dlopen ? (Is the problem maybe  
</span><br>
<span class="quotelev1">&gt; caused by
</span><br>
<span class="quotelev1">&gt; the fact that there doesn't seem to exist a 64-bit version of
</span><br>
<span class="quotelev1">&gt; libltdl.3.dylib and libltdl.a on the OS ? The output of the file  
</span><br>
<span class="quotelev1">&gt; command is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; libltdl.3.dylib: Mach-O fat file with 2 architectures
</span><br>
<span class="quotelev1">&gt; libltdl.3.dylib (for architecture i386): Mach-O dynamically linked  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; library i386
</span><br>
<span class="quotelev1">&gt; libltdl.3.dylib (for architecture ppc): Mach-O dynamically linked  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; library ppc
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; (so no ppc64)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Werner Van Geit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;                          ,,,
</span><br>
<span class="quotelev1">&gt;                         (o o)
</span><br>
<span class="quotelev1">&gt; ====================oOO==(_)==OOo==================
</span><br>
<span class="quotelev1">&gt; PhD Student Laboratory for Theoretical Neurobiology
</span><br>
<span class="quotelev1">&gt; Department of Biomedical Sciences
</span><br>
<span class="quotelev1">&gt; University of Antwerp (Campus Drie Eiken)
</span><br>
<span class="quotelev1">&gt; Universiteitsplein 1
</span><br>
<span class="quotelev1">&gt; B-2610 Wilrijk (Belgium)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office T5.37
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel. ++ 32 3 8202610
</span><br>
<span class="quotelev1">&gt; werner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;buildoutput.txt&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3040.php">Brian Powell: "[OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Previous message:</strong> <a href="3038.php">Brian W. Barrett: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>Maybe in reply to:</strong> <a href="3034.php">Werner Van Geit: "[OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3047.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
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
