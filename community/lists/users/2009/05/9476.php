<?
$subject_val = "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 31 12:44:50 2009" -->
<!-- isoreceived="20090531164450" -->
<!-- sent="Mon, 1 Jun 2009 00:44:44 +0800" -->
<!-- isosent="20090531164444" -->
<!-- name="wruslan wyusoff" -->
<!-- email="wruslan.clusters_at_[hidden]" -->
<!-- subject="Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2" -->
<!-- id="399c48d80905310944q2c50e9a1g7426348da9232427_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="71d2d8cc0905310921m72d26f71lde91917111941b66_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2<br>
<strong>From:</strong> wruslan wyusoff (<em>wruslan.clusters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-31 12:44:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9477.php">Gus Correa: "Re: [OMPI users] To connect two computers as two nodes"</a>
<li><strong>Previous message:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9482.php">Jeff Squyres: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mr Ralph Castain,
<br>
<p>Thanks for the information.
<br>
<p>Regards.
<br>
wruslan wyusoff
<br>
<p>On Mon, Jun 1, 2009 at 12:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't believe the 1.3.x series supports Bproc/Beowulf systems - I'm
</span><br>
<span class="quotelev1">&gt; afraid that support ended with the 1.2.x series. There is a possibility that
</span><br>
<span class="quotelev1">&gt; someone will restore support beginning with the 1.5 release, but that is
</span><br>
<span class="quotelev1">&gt; only a possibility at this point (not a commitment).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, May 31, 2009 at 10:13 AM, wruslan wyusoff &lt;
</span><br>
<span class="quotelev1">&gt; wruslan.clusters_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_bismillah-00 openmpi-1.3.2]# make all install
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; vt_tracefilter.cc: In function &#145;int main(int, char**)&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; vt_tracefilter.cc:133: internal compiler error: Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; Please submit a full bug report,
</span><br>
<span class="quotelev2">&gt;&gt; with preprocessed source if appropriate.
</span><br>
<span class="quotelev2">&gt;&gt; See &lt;URL:<a href="http://bugzilla.redhat.com/bugzilla">http://bugzilla.redhat.com/bugzilla</a>&gt; for instructions.
</span><br>
<span class="quotelev2">&gt;&gt; Preprocessed source stored into /tmp/cc353yuL.out file, please attach
</span><br>
<span class="quotelev2">&gt;&gt; this to your bugreport.
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: *** [vtfilter-vt_tracefilter.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[6]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/openmpi-1.3.2/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ==========================================
</span><br>
<span class="quotelev2">&gt;&gt; Installation failed for openmpi-1.3.2 on this machine.
</span><br>
<span class="quotelev2">&gt;&gt; This machine runs OSCAR 5.0 Beowulf Cluster as head node on Fedora Core 5
</span><br>
<span class="quotelev2">&gt;&gt; Currently: openmpi-1.1.1 runs OK on this cluster.
</span><br>
<span class="quotelev2">&gt;&gt; Please find the bug report file as attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_bismillah-00 openmpi-1.3.2]# uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux bismillah-00.mmu.edu.my 2.6.15-1.2054_FC5 #1 Tue Mar 14 15:48:33
</span><br>
<span class="quotelev2">&gt;&gt; EST 2006 i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_bismillah-00 openmpi-1.3.2]# gcc -v
</span><br>
<span class="quotelev2">&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev2">&gt;&gt; Target: i386-redhat-linux
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
</span><br>
<span class="quotelev2">&gt;&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix
</span><br>
<span class="quotelev2">&gt;&gt; --enable-checking=release --with-system-zlib --enable-__cxa_atexit
</span><br>
<span class="quotelev2">&gt;&gt; --disable-libunwind-exceptions --enable-libgcj-multifile
</span><br>
<span class="quotelev2">&gt;&gt; --enable-languages=c,c++,objc,obj-c++,java,fortran,ada
</span><br>
<span class="quotelev2">&gt;&gt; --enable-java-awt=gtk --disable-dssi
</span><br>
<span class="quotelev2">&gt;&gt; --with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre
</span><br>
<span class="quotelev2">&gt;&gt; --with-cpu=generic --host=i386-redhat-linux
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 4.1.0 20060304 (Red Hat 4.1.0-3)
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_bismillah-00 openmpi-1.3.2]#
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; wruslan wyusoff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9476/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9477.php">Gus Correa: "Re: [OMPI users] To connect two computers as two nodes"</a>
<li><strong>Previous message:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9482.php">Jeff Squyres: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
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
