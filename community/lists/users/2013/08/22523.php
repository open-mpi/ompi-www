<?
$subject_val = "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 15:40:16 2013" -->
<!-- isoreceived="20130820194016" -->
<!-- sent="Tue, 20 Aug 2013 12:40:13 -0700" -->
<!-- isosent="20130820194013" -->
<!-- name="RoboBeans" -->
<!-- email="robobeans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple" -->
<!-- id="5213C61D.9050701_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BA920608-6410-46D2-899E-ED39C51DC9F5_at_umb.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple<br>
<strong>From:</strong> RoboBeans (<em>robobeans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 15:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22524.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Previous message:</strong> <a href="22522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22149.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using	--enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22526.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22526.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm that mpi program still hangs if one uses these options 
<br>
while configuring openmpi-1.7.2
<br>
<p>--enable-event-thread-support --enable-opal-multi-threads 
<br>
--enable-orte-progress-threads --enable-mpi-thread-multiple
<br>
<p><p>*cd /opt**
<br>
**gunzip -c openmpi-1.7.2.tar.gz | tar xf -**
<br>
**cd openmpi-1.7.2**
<br>
**./configure --with-openib=/usr --with-psm=/usr 
<br>
--prefix=/opt/openmpi-1.7.2 --enable-event-thread-support 
<br>
--enable-opal-multi-threads --enable-orte-progress-threads 
<br>
--enable-mpi-thread-multiple**
<br>
**make all install**
<br>
**cd ..**
<br>
**chmod -R 775 openmpi-1.7.2**
<br>
**ldconfig*
<br>
<p>Is there any plan to support multiple threads any time soon?
<br>
<p>*$ uname -r*
<br>
<p>2.6.32-358.14.1.el6.x86_64
<br>
<p><p>Thanks!
<br>
<p>On 6/19/13 12:51 PM, Hans Ekkehard Plesser wrote:
<br>
<span class="quotelev1">&gt; I can confirm that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-event-thread-support --enable-opal-multi-threads --enable-orte-progress-threads --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; worked for me as well under OSX 10.8.4 with clang. The orte-progress flag is needed, without it the parallel process hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will report this to the MacPorts people so they can fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Hans
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 19. juni 2013, at 15.08, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I'm glad it worked, having it depend on orte progress thread wasn't done by intent, hence the comment in the configure help output. I'm not seeing any problems with using that option, but please let us know if you run into something. It hasn't been as fully tested as we'd like.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 19, 2013, at 12:10 AM, Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This has now been solved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The solution (as suggested by Ralph) is to use the following four configure options together:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable_event_thread_support --enable_opal_multi_threads --enable_orte_progress_threads --enable_mpi_thread_multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, apparently the --enable_mpi_thread_multiple option cannot be used by itself, it must be combined with the other three options, otherwise MPI_Init_thread will hang.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; / Elias
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quoting Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I now tried using --enable-opal-multi-threads (I added an &quot;s&quot; in the end, since &quot;--enable-opal-multi-thread&quot; was not recognized by the configure script).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, my test code still hangs in the same way as before.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To be clear, I now configure like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but the problem remains: MPI_Init_thread still hangs when trying to run the test case with -np 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any other ideas?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are there other configure options that must be used together with --enable-mpi-thread-multiple to make it work?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Elias
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Quoting Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hmmm...well, your code runs fine for me:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralphs-iMac:mpi rhc$ mpirun -n 2 ./thread_init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralphs-iMac:mpi rhc$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think the key, however, is that you also have to configure with --enable-opal-multi-thread.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 16, 2013, at 8:54 AM, Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I would like to report what seems to be a bug in MPI_Init_thread in OpenMPI 1.7.1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The bug can be reproduced with the following test program (test_mpi_thread_support.c):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, const char* argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int provided = -1;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Calling MPI_Init_thread...\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init_thread(NULL, NULL, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;MPI_Init_thread returned, provided = %d\n&quot;, provided);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When trying to run this when OpenMPI was configured with --enable-mpi-thread-multiple, the program hangs when trying to run using anything more than one process.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Steps I use to reproduce this in Ubuntu:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (1) Download openmpi-1.7.1.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (2) Configure like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (3) make
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (4) Compile test program like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpicc test_mpi_thread_support.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (5) Run like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Then you see the following two lines of output:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And then it hangs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init_thread did not hang in earlier OpenMPI versions (for example it worked in 1.5.* and 1.6.*), so it seems like a bug introduced in 1.7.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The description above shows how I reproduce this in Ubuntu on my local desktop computer, but the same problem exists for the OpenMPI 1.7.1 installation at the UPPMAX computer center where I wan to run my code in the end. I don't know all details about how they installed it there, but I know they set --enable-mpi-thread-multiple. So maybe it hangs in 1.7.1 on any computer as long as you use MPI_THREAD_MULTIPLE. At least I have not seen it work anywhere.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you agree that this is a bug, or am I doing something wrong?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Elias
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Hans Ekkehard Plesser, Associate Professor
</span><br>
<span class="quotelev1">&gt; Head, Basic Science Section
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dept. of Mathematical Sciences and Technology
</span><br>
<span class="quotelev1">&gt; Norwegian University of Life Sciences
</span><br>
<span class="quotelev1">&gt; PO Box 5003, 1432 Aas, Norway
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone +47 6496 5467
</span><br>
<span class="quotelev1">&gt; Fax   +47 6496 5401
</span><br>
<span class="quotelev1">&gt; Email hans.ekkehard.plesser_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Home  <a href="http://arken.umb.no/~plesser">http://arken.umb.no/~plesser</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22523/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22524.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Previous message:</strong> <a href="22522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22149.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using	--enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22526.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22526.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
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
