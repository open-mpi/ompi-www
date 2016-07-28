<?
$subject_val = "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 12:55:58 2009" -->
<!-- isoreceived="20090601165558" -->
<!-- sent="Mon, 1 Jun 2009 12:55:52 -0400" -->
<!-- isosent="20090601165552" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2" -->
<!-- id="348794DE-ACE5-49BD-94FE-E59F33E31452_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 12:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9483.php">Jeff Layton: "[OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Previous message:</strong> <a href="9481.php">tsilva_at_[hidden]: "[OMPI users] overlapping communicators?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9541.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9541.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like your compiler seg faulted.  I think you should contact  
<br>
your compiler vendor and find out why.
<br>
<p>Additionally, you can disable the optional/3rd-party-add-on  
<br>
VampirTrace package with --enable-contrib-no-build=vt.  This is the  
<br>
part of the code where your compiler seg faulted, so perhaps if you  
<br>
skip that part, you'll get a successful OMPI installation.
<br>
<p><p>On May 31, 2009, at 12:21 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I don't believe the 1.3.x series supports Bproc/Beowulf systems -  
</span><br>
<span class="quotelev1">&gt; I'm afraid that support ended with the 1.2.x series. There is a  
</span><br>
<span class="quotelev1">&gt; possibility that someone will restore support beginning with the 1.5  
</span><br>
<span class="quotelev1">&gt; release, but that is only a possibility at this point (not a  
</span><br>
<span class="quotelev1">&gt; commitment).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, May 31, 2009 at 10:13 AM, wruslan wyusoff &lt;wruslan.clusters_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; [root_at_bismillah-00 openmpi-1.3.2]# make all install
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; vt_tracefilter.cc: In function &#145;int main(int, char**)&#146;:
</span><br>
<span class="quotelev1">&gt; vt_tracefilter.cc:133: internal compiler error: Segmentation fault
</span><br>
<span class="quotelev1">&gt; Please submit a full bug report,
</span><br>
<span class="quotelev1">&gt; with preprocessed source if appropriate.
</span><br>
<span class="quotelev1">&gt; See &lt;URL:<a href="http://bugzilla.redhat.com/bugzilla">http://bugzilla.redhat.com/bugzilla</a>&gt; for instructions.
</span><br>
<span class="quotelev1">&gt; Preprocessed source stored into /tmp/cc353yuL.out file, please attach
</span><br>
<span class="quotelev1">&gt; this to your bugreport.
</span><br>
<span class="quotelev1">&gt; make[6]: *** [vtfilter-vt_tracefilter.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/openmpi-1.3.2/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ==========================================
</span><br>
<span class="quotelev1">&gt; Installation failed for openmpi-1.3.2 on this machine.
</span><br>
<span class="quotelev1">&gt; This machine runs OSCAR 5.0 Beowulf Cluster as head node on Fedora  
</span><br>
<span class="quotelev1">&gt; Core 5
</span><br>
<span class="quotelev1">&gt; Currently: openmpi-1.1.1 runs OK on this cluster.
</span><br>
<span class="quotelev1">&gt; Please find the bug report file as attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bismillah-00 openmpi-1.3.2]# uname -a
</span><br>
<span class="quotelev1">&gt; Linux bismillah-00.mmu.edu.my 2.6.15-1.2054_FC5 #1 Tue Mar 14 15:48:33
</span><br>
<span class="quotelev1">&gt; EST 2006 i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bismillah-00 openmpi-1.3.2]# gcc -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i386-redhat-linux
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
</span><br>
<span class="quotelev1">&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-checking=release --with-system-zlib --enable-__cxa_atexit
</span><br>
<span class="quotelev1">&gt; --disable-libunwind-exceptions --enable-libgcj-multifile
</span><br>
<span class="quotelev1">&gt; --enable-languages=c,c++,objc,obj-c++,java,fortran,ada
</span><br>
<span class="quotelev1">&gt; --enable-java-awt=gtk --disable-dssi
</span><br>
<span class="quotelev1">&gt; --with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre
</span><br>
<span class="quotelev1">&gt; --with-cpu=generic --host=i386-redhat-linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.0 20060304 (Red Hat 4.1.0-3)
</span><br>
<span class="quotelev1">&gt; [root_at_bismillah-00 openmpi-1.3.2]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; wruslan wyusoff
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9483.php">Jeff Layton: "[OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Previous message:</strong> <a href="9481.php">tsilva_at_[hidden]: "[OMPI users] overlapping communicators?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9475.php">Ralph Castain: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9541.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9541.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
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
