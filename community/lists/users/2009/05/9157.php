<?
$subject_val = "Re: [OMPI users] compilation application with openmpi question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 11:18:23 2009" -->
<!-- isoreceived="20090501151823" -->
<!-- sent="Fri, 1 May 2009 09:18:17 -0600" -->
<!-- isosent="20090501151817" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation application with openmpi question" -->
<!-- id="71d2d8cc0905010818n7f8b8141y4b16703dd7ea4ced_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49FB104D.1010803_at_epa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation application with openmpi question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 11:18:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="9156.php">David Wong: "[OMPI users] compilation application with openmpi question"</a>
<li><strong>In reply to:</strong> <a href="9156.php">David Wong: "[OMPI users] compilation application with openmpi question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....those appear to be vampirtrace functions. I suspect they will have
<br>
to fix it.
<br>
<p>For now, you can work around the problem by configuring with this:
<br>
<p>--enable-contrib-no-build=vt
<br>
<p>That will turn the offending code off.
<br>
<p>Ralph
<br>
<p><p>On Fri, May 1, 2009 at 9:07 AM, David Wong &lt;wong.david-c_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have installed openmpi on my machine and tested with some simple
</span><br>
<span class="quotelev1">&gt; programs such as ring and fpi. Everything works. When I tried to compile my
</span><br>
<span class="quotelev1">&gt; application, I got the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In function
</span><br>
<span class="quotelev1">&gt; `OTF_File_open_zlevel':
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x5a2): undefined reference to `inflateInit_'
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x762): undefined reference to `deflateInit_'
</span><br>
<span class="quotelev1">&gt; /work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In function
</span><br>
<span class="quotelev1">&gt; `OTF_File_seek':
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x1172): undefined reference to `inflateEnd'
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x11a2): undefined reference to `inflateInit_'
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x11c2): undefined reference to `inflateSync'
</span><br>
<span class="quotelev1">&gt; /work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In function
</span><br>
<span class="quotelev1">&gt; `OTF_File_read':
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x1322): undefined reference to `inflate'
</span><br>
<span class="quotelev1">&gt; /work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In function
</span><br>
<span class="quotelev1">&gt; `OTF_File_write':
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x1622): undefined reference to `deflate'
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x1772): undefined reference to `deflate'
</span><br>
<span class="quotelev1">&gt; /work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In function
</span><br>
<span class="quotelev1">&gt; `OTF_File_close':
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x19d2): undefined reference to `inflateEnd'
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x1bc2): undefined reference to `deflate'
</span><br>
<span class="quotelev1">&gt; OTF_File.c:(.text+0x1c82): undefined reference to `deflateEnd'
</span><br>
<span class="quotelev1">&gt; make: *** [CCTM_e1a_Linux2_i686intel] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I missing something in the openmpi building process? Please advise. Your
</span><br>
<span class="quotelev1">&gt; help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9158.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Previous message:</strong> <a href="9156.php">David Wong: "[OMPI users] compilation application with openmpi question"</a>
<li><strong>In reply to:</strong> <a href="9156.php">David Wong: "[OMPI users] compilation application with openmpi question"</a>
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
