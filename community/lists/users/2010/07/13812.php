<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 19:11:58 2010" -->
<!-- isoreceived="20100727231158" -->
<!-- sent="Tue, 27 Jul 2010 19:11:32 -0400" -->
<!-- isosent="20100727231132" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="AANLkTimmAkuSQ6pGB9rHU7HqLX5kVygCUxyFjKmSgCk4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinrKTMESxicwBUyDB5qDZV2BCf3U81KuKCh=ifa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI shared with NFS, but says different version<br>
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 19:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i compiled with absolute path in case:
<br>
fcluster_at_agua:~$ /opt/openmpi-1.4.2/bin/mpicc testMPI/hello.c -o
<br>
testMPI/hola
<br>
fcluster_at_agua:~$ mpirun --hostfile myhostfile -np 5 testMPI/hola
<br>
[agua:03547] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:03547] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:03548] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:03548] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:03549] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:03549] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:03550] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:03550] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:03551] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:03551] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 4 with PID 3551 on node agua exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>and it segfaulted. the machine stoped and threw many errors on its screen,
<br>
cannot copy them because they didnt show in ssh.
<br>
<p><p>On Tue, Jul 27, 2010 at 7:07 PM, Cristobal Navarro &lt;axischire_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but i already had the paths
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fcluster_at_agua:~$ echo $PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/bin:/opt/cfc/sge/bin/lx24-amd64:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
</span><br>
<span class="quotelev1">&gt; fcluster_at_agua:~$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib:
</span><br>
<span class="quotelev1">&gt; fcluster_at_agua:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; even weird, errors come sometimes from the master node (agua)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 27, 2010 at 6:59 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try using the --prefix option of mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;man mpiexec&quot; is your friend!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, append the OpenMPI directories to your
</span><br>
<span class="quotelev2">&gt;&gt; PATH *and* LD_LIBRARY_PATH on your .bashrc/.csrhc file
</span><br>
<span class="quotelev2">&gt;&gt; See this FAQ:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope it helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even when executing a hello world openmpi, i get this error, which is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fcluster_at_fuego:~$ mpirun --hostfile myhostfile -np 5 testMPI/hola
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02357] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02354] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02356] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02358] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02355] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02358] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02355] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02354] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02356] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [agua:02357] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 on agua out of 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 4 on agua out of 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 on agua out of 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 2 on agua out of 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 on agua out of 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.2/ is shared through NFS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master node did had an older openmpi version before installing 1.4.2, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i removed them all with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sudo apt-get --purge remove libopenmpi1 libopenmpi-dev openmpi-bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-dev openmpi-common
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i checked for /usr/lib64/openmpi   and for  /usr/lib/openmpi   and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deleted them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however, when compiling again i keep getting this error,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something must be remaining from the older version of openmpi, but i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; really dont know where that remaining could be.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any help, welcome
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13811.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
