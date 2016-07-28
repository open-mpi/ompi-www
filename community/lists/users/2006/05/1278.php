<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 17:29:07 2006" -->
<!-- isoreceived="20060524212907" -->
<!-- sent="Wed, 24 May 2006 17:28:59 -0400" -->
<!-- isosent="20060524212859" -->
<!-- name="Paul" -->
<!-- email="paul.lundin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile issue on ppc64" -->
<!-- id="d2403b0605241428v7a34125nfddbe18a27b88c91_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d2403b0605241220t5a33dc84i6cbf821a01eb13d0_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul (<em>paul.lundin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 17:28:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1279.php">George Bosilca: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Previous message:</strong> <a href="1277.php">Brock Palen: "[OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>In reply to:</strong> <a href="1275.php">Paul: "[OMPI users] Compile issue on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1280.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compile issue on ppc64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I got around this problem by building a 64bit version of libsysfs from
<br>
the src rpm. However now during the &quot;make all install&quot; phase the compilation
<br>
is dying on a bunch of incompatibilities. As it states those files are 32bit
<br>
and I need the 64bit ppc version. Not sure why they are being built as 32
<br>
bit since I have CFLAGS and LDFLAGS set. Is there something I am missing ?
<br>
(those files are built by the make)
<br>
<p>/usr/bin/ld: warning: powerpc:common architecture of input file
<br>
`.libs/mpicxx.o' is incompatible with powerpc:common64 output
<br>
/usr/bin/ld: warning: powerpc:common architecture of input file
<br>
`.libs/intercepts.o' is incompatible with powerpc:common64 output
<br>
/usr/bin/ld: warning: powerpc:common architecture of input file
<br>
`.libs/comm.o' is incompatible with powerpc:common64 output
<br>
/usr/bin/ld: can not size stub section: Bad value
<br>
/usr/bin/ld: .libs/libmpi_cxx.so.0.0.0: Not enough room for program headers,
<br>
try linking with -N
<br>
/usr/bin/ld: final link failed: Bad value
<br>
collect2: ld returned 1 exit status
<br>
make[3]: *** [libmpi_cxx.la] Error 1
<br>
make[3]: Leaving directory `/root/ompi/openmpi-1.1a3/ompi/mpi/cxx'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/root/ompi/openmpi-1.1a3/ompi/mpi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/root/ompi/openmpi-1.1a3/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><p>On 5/24/06, Paul &lt;paul.lundin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;      I have been trying to get openmpi to install (./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/ompi --with-openib=/usr/local/ofed)  using various methods on
</span><br>
<span class="quotelev1">&gt; rhel4 u3 ppc64. No matter what method I use when I try to build 64bit (32bit
</span><br>
<span class="quotelev1">&gt; works) it fails while searching for sysfs. I know that redhat only
</span><br>
<span class="quotelev1">&gt; distributes sysfsutils (which supplies libsysfs.so.1.0.2) in 32bit format.
</span><br>
<span class="quotelev1">&gt; I was wondering if there was a workaround for this problem. I have been
</span><br>
<span class="quotelev1">&gt; unable to find a ppc64 version of libsysfs. The error is contained in the
</span><br>
<span class="quotelev1">&gt; attached log. Here is a summary:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking for sysfs_open_class in -lsysfs... no
</span><br>
<span class="quotelev1">&gt; configure: error: OpenIB support requested but required sysfs not found.
</span><br>
<span class="quotelev1">&gt; Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1278/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1279.php">George Bosilca: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Previous message:</strong> <a href="1277.php">Brock Palen: "[OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>In reply to:</strong> <a href="1275.php">Paul: "[OMPI users] Compile issue on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1280.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compile issue on ppc64"</a>
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
