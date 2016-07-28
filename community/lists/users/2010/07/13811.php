<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 19:08:05 2010" -->
<!-- isoreceived="20100727230805" -->
<!-- sent="Tue, 27 Jul 2010 19:07:40 -0400" -->
<!-- isosent="20100727230740" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="AANLkTinrKTMESxicwBUyDB5qDZV2BCf3U81KuKCh=ifa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C4F64D1.8050602_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-07-27 19:07:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gus,
<br>
<p>but i already had the paths
<br>
<p>fcluster_at_agua:~$ echo $PATH
<br>
/opt/openmpi-1.4.2/bin:/opt/cfc/sge/bin/lx24-amd64:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
<br>
fcluster_at_agua:~$ echo $LD_LIBRARY_PATH
<br>
/opt/openmpi-1.4.2/lib:
<br>
fcluster_at_agua:~$
<br>
<p>even weird, errors come sometimes from the master node (agua)
<br>
<p><p>On Tue, Jul 27, 2010 at 6:59 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Cristobal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try using the --prefix option of mpiexec.
</span><br>
<span class="quotelev1">&gt; &quot;man mpiexec&quot; is your friend!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, append the OpenMPI directories to your
</span><br>
<span class="quotelev1">&gt; PATH *and* LD_LIBRARY_PATH on your .bashrc/.csrhc file
</span><br>
<span class="quotelev1">&gt; See this FAQ:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope it helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; Even when executing a hello world openmpi, i get this error, which is then
</span><br>
<span class="quotelev2">&gt;&gt; ignored.
</span><br>
<span class="quotelev2">&gt;&gt; fcluster_at_fuego:~$ mpirun --hostfile myhostfile -np 5 testMPI/hola
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02357] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02354] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02356] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02358] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02355] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02358] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02355] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02354] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02356] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [agua:02357] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
</span><br>
<span class="quotelev2">&gt;&gt; compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; Process 3 on agua out of 5
</span><br>
<span class="quotelev2">&gt;&gt; Process 4 on agua out of 5
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 on agua out of 5
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 on agua out of 5
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 on agua out of 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.2/ is shared through NFS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; master node did had an older openmpi version before installing 1.4.2, but
</span><br>
<span class="quotelev2">&gt;&gt; i removed them all with
</span><br>
<span class="quotelev2">&gt;&gt; sudo apt-get --purge remove libopenmpi1 libopenmpi-dev openmpi-bin
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-dev openmpi-common
</span><br>
<span class="quotelev2">&gt;&gt; i checked for /usr/lib64/openmpi   and for  /usr/lib/openmpi   and deleted
</span><br>
<span class="quotelev2">&gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; however, when compiling again i keep getting this error,
</span><br>
<span class="quotelev2">&gt;&gt; something must be remaining from the older version of openmpi, but i
</span><br>
<span class="quotelev2">&gt;&gt; really dont know where that remaining could be.
</span><br>
<span class="quotelev2">&gt;&gt; any help, welcome
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
