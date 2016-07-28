<?
$subject_val = "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 09:21:03 2009" -->
<!-- isoreceived="20090604132103" -->
<!-- sent="Thu, 4 Jun 2009 21:15:44 +0800" -->
<!-- isosent="20090604131544" -->
<!-- name="wruslan wyusoff" -->
<!-- email="wruslan.clusters_at_[hidden]" -->
<!-- subject="Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2" -->
<!-- id="399c48d80906040615o3efd1b19hfd0958121844a8c_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="348794DE-ACE5-49BD-94FE-E59F33E31452_at_cisco.com" -->
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
<strong>From:</strong> wruslan wyusoff (<em>wruslan.clusters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 09:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<li><strong>In reply to:</strong> <a href="9482.php">Jeff Squyres: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Mr Jeff Squyres.
<br>
<p>Followed your suggestion. Disabled vt.
<br>
OpenMPI-1.3.2 compiled successfully. And now it works like a charm.
<br>
<p>Regards.
<br>
Wan Ruslan Yusoff
<br>
<p>On Tue, Jun 2, 2009 at 12:55 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This looks like your compiler seg faulted.  I think you should contact your
</span><br>
<span class="quotelev1">&gt; compiler vendor and find out why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, you can disable the optional/3rd-party-add-on VampirTrace
</span><br>
<span class="quotelev1">&gt; package with --enable-contrib-no-build=vt.  This is the part of the code
</span><br>
<span class="quotelev1">&gt; where your compiler seg faulted, so perhaps if you skip that part, you'll
</span><br>
<span class="quotelev1">&gt; get a successful OMPI installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 31, 2009, at 12:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I don't believe the 1.3.x series supports Bproc/Beowulf systems - I'm
</span><br>
<span class="quotelev2">&gt;&gt; afraid that support ended with the 1.2.x series. There is a possibility that
</span><br>
<span class="quotelev2">&gt;&gt; someone will restore support beginning with the 1.5 release, but that is
</span><br>
<span class="quotelev2">&gt;&gt; only a possibility at this point (not a commitment).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, May 31, 2009 at 10:13 AM, wruslan wyusoff &lt;
</span><br>
<span class="quotelev2">&gt;&gt; wruslan.clusters_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9541/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<li><strong>In reply to:</strong> <a href="9482.php">Jeff Squyres: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
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
