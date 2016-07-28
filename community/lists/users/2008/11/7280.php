<?
$subject_val = "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 11:40:47 2008" -->
<!-- isoreceived="20081111164047" -->
<!-- sent="Tue, 11 Nov 2008 08:40:42 -0800 (PST)" -->
<!-- isosent="20081111164042" -->
<!-- name="Oleg V. Zhylin" -->
<!-- email="ovz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?" -->
<!-- id="31768_1226421647_mABGehM1004996_971786.89764.qm_at_web56601.mail.re3.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A9B49D86-6A12-44AD-BA33-2329D1AE7E9C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?<br>
<strong>From:</strong> Oleg V. Zhylin (<em>ovz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 11:40:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7281.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7279.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>In reply to:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7281.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7281.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you're right, '/usr/libs' was just a typo. Below is the detailed reproduction on Fedora Core 9 x86_64. 
<br>
<p>yum install openmpi*
<br>
<p>This installs 3 rpms from yum repository
<br>
<p>&nbsp;openmpi               x86_64         1.2.4-2.fc9         fedora          127 k
<br>
&nbsp;openmpi-devel         x86_64         1.2.4-2.fc9         fedora          281 k
<br>
&nbsp;openmpi-libs          x86_64         1.2.4-2.fc9         fedora          1.0 M
<br>
<p>next, I'm trying to compile PARF (<a href="http://www.irb.hr/en/cir/projects/info/parf/">http://www.irb.hr/en/cir/projects/info/parf/</a>)  and get the following output 
<br>
<p><p>mpif90 -g -pg -CB -traceback --static -fno-range-check -L/usr/lib64/openmpi/1.2.4-gcc -c -o parallel.o parallel/mpi.f90
<br>
gfortran: unrecognized option '-CB'
<br>
gfortran: unrecognized option '-traceback'
<br>
cc -Wall -g -pg --static -c support.c
<br>
<p>[skip]
<br>
<p>mpif90 -g -pg -CB -traceback --static -fno-range-check -L/usr/lib64/openmpi/1.2.4-gcc -c forests.f90
<br>
gfortran: unrecognized option '-CB'
<br>
gfortran: unrecognized option '-traceback'
<br>
mpif90 -g -pg -CB -traceback --static -fno-range-check -L/usr/lib64/openmpi/1.2.4-gcc -o parf main.f90 parallel.o trees.o bitvectors.o instancesets.o options.o utilities.o bootstraps.o forests.o importances.o prototypes.o graphics.o support.o
<br>
gfortran: unrecognized option '-CB'
<br>
gfortran: unrecognized option '-traceback'
<br>
/usr/bin/ld: cannot find -lmpi_f90
<br>
collect2: ld returned 1 exit status
<br>
make: *** [parf] Error 1
<br>
<p>/usr/bin/ld doesn't see libmpi_f90 despite 
<br>
<p>ls /usr/lib64/openmpi/1.2.4-gcc/libmpi_f90*
<br>
/usr/lib64/openmpi/1.2.4-gcc/libmpi_f90.la
<br>
/usr/lib64/openmpi/1.2.4-gcc/libmpi_f90.so
<br>
/usr/lib64/openmpi/1.2.4-gcc/libmpi_f90.so.0
<br>
/usr/lib64/openmpi/1.2.4-gcc/libmpi_f90.so.0.0.0
<br>
<p><p>&nbsp;Here is information about MPI setup
<br>
<p>mpif90 --showme
<br>
gfortran -I/usr/include/openmpi/1.2.4-gcc/64 -I/usr/include/openmpi/1.2.4-gcc -m64 -pthread -I/usr/lib64/openmpi/1.2.4-gcc -L/usr/lib64/openmpi/1.2.4-gcc -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>ompi_info --all &gt;ompi_info.txt
<br>
<p>ompi_info.zip is attached to this message
<br>
<p>echo $PATH
<br>
/usr/kerberos/sbin:/usr/kerberos/bin:/usr/lib64/ccache:/usr/bin:/bin
<br>
<p>echo $LD_LIBRARY_PATH
<br>
<p># contains nothing
<br>
<p><p><p>WBR Oleg V. Zhylin   ovz_at_[hidden]
<br>
<p><p>--- On Tue, 11/11/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, November 11, 2008, 4:53 PM
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2008, at 8:21 PM, Oleg V. Zhylin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Are you saying that you have libmpi_f90.so
</span><br>
<span class="quotelev1">&gt; available and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when you try to run, you get missing symbol
</span><br>
<span class="quotelev1">&gt; errors?  Or are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you failing to compile/link at all?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Linking stage fails. When I use mpif90 to produce
</span><br>
<span class="quotelev1">&gt; actual executable ld reports error that it can't find
</span><br>
<span class="quotelev1">&gt; -lmpi_f90. The libmpi_f90.so is in /usr/libs but,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/libs is not a standard linker directory.  If
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so is there, it's probably fairly predictable
</span><br>
<span class="quotelev1">&gt; that the linker is not finding it.  Did you really mean
</span><br>
<span class="quotelev1">&gt; /usr/lib?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; again, as I've discovered ld doesn't even try
</span><br>
<span class="quotelev1">&gt; to look for it. Maybe this is ld problem, or ld in
</span><br>
<span class="quotelev1">&gt; conjunction with gfortran...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you supply all the information listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, what's the output when you run
</span><br>
<span class="quotelev1">&gt; &quot;mpif90 --showme&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7280/ompi_info.zip">ompi_info.zip</a>
</ul>
<!-- attachment="ompi_info.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7281.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7279.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>In reply to:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7281.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7281.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
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
