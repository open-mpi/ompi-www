<?
$subject_val = "[OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 31 12:13:25 2009" -->
<!-- isoreceived="20090531161325" -->
<!-- sent="Mon, 1 Jun 2009 00:13:19 +0800" -->
<!-- isosent="20090531161319" -->
<!-- name="wruslan wyusoff" -->
<!-- email="wruslan.clusters_at_[hidden]" -->
<!-- subject="[OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2" -->
<!-- id="399c48d80905310913r6e1184bdvfff7fcdc263fee98_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2<br>
<strong>From:</strong> wruslan wyusoff (<em>wruslan.clusters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-31 12:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9473.php">mtcreekmore_at_[hidden]: "[OMPI users] Performance testing software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[root_at_bismillah-00 openmpi-1.3.2]# make all install
<br>
....
<br>
....
<br>
vt_tracefilter.cc: In function &#145;int main(int, char**)&#146;:
<br>
vt_tracefilter.cc:133: internal compiler error: Segmentation fault
<br>
Please submit a full bug report,
<br>
with preprocessed source if appropriate.
<br>
See &lt;URL:<a href="http://bugzilla.redhat.com/bugzilla">http://bugzilla.redhat.com/bugzilla</a>&gt; for instructions.
<br>
Preprocessed source stored into /tmp/cc353yuL.out file, please attach
<br>
this to your bugreport.
<br>
make[6]: *** [vtfilter-vt_tracefilter.o] Error 1
<br>
make[6]: Leaving directory
<br>
`/home/openmpi-1.3.2/ompi/contrib/vt/vt/tools/vtfilter'
<br>
....
<br>
...
<br>
==========================================
<br>
Installation failed for openmpi-1.3.2 on this machine.
<br>
This machine runs OSCAR 5.0 Beowulf Cluster as head node on Fedora Core 5
<br>
Currently: openmpi-1.1.1 runs OK on this cluster.
<br>
Please find the bug report file as attached.
<br>
<p>[root_at_bismillah-00 openmpi-1.3.2]# uname -a
<br>
Linux bismillah-00.mmu.edu.my 2.6.15-1.2054_FC5 #1 Tue Mar 14 15:48:33
<br>
EST 2006 i686 i686 i386 GNU/Linux
<br>
<p>[root_at_bismillah-00 openmpi-1.3.2]# gcc -v
<br>
Using built-in specs.
<br>
Target: i386-redhat-linux
<br>
Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
<br>
--infodir=/usr/share/info --enable-shared --enable-threads=posix
<br>
--enable-checking=release --with-system-zlib --enable-__cxa_atexit
<br>
--disable-libunwind-exceptions --enable-libgcj-multifile
<br>
--enable-languages=c,c++,objc,obj-c++,java,fortran,ada
<br>
--enable-java-awt=gtk --disable-dssi
<br>
--with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre
<br>
--with-cpu=generic --host=i386-redhat-linux
<br>
Thread model: posix
<br>
gcc version 4.1.0 20060304 (Red Hat 4.1.0-3)
<br>
[root_at_bismillah-00 openmpi-1.3.2]#
<br>
<p>Thank you.
<br>
wruslan wyusoff
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9474/cc353yuL.out.bz2">cc353yuL.out.bz2</a>
</ul>
<!-- attachment="cc353yuL.out.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9473.php">mtcreekmore_at_[hidden]: "[OMPI users] Performance testing software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
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
