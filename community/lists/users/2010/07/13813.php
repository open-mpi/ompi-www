<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 19:29:58 2010" -->
<!-- isoreceived="20100727232958" -->
<!-- sent="Tue, 27 Jul 2010 19:29:48 -0400" -->
<!-- isosent="20100727232948" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="4C4F6BEC.405_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimmAkuSQ6pGB9rHU7HqLX5kVygCUxyFjKmSgCk4_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 19:29:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13814.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Cristobal
<br>
<p>Does it run only on the head node alone?
<br>
(Fuego? Agua? Acatenango?)
<br>
Try to put only the head node on the hostfile and execute with mpiexec.
<br>
This may help sort out what is going on.
<br>
Hopefully it will run on the head node.
<br>
<p>Also, do you have Infinband connecting the nodes?
<br>
The error messages refer to the openib btl (i.e. Infiniband),
<br>
and complains of
<br>
&quot;perhaps a missing symbol, or compiled for a different
<br>
version of Open MPI?&quot;.
<br>
It sounds as a mixup of versions/builds.
<br>
<p>Did you configure/build OpenMPI from source, or did you install
<br>
it with apt-get?
<br>
It may be easier/less confusing to install from source.
<br>
If you did, what configure options did you use?
<br>
<p>Also, as for the OpenMPI runtime environment,
<br>
it is not enough to set it on
<br>
the command line, because it will be effective only on the head node.
<br>
You need to either add them to the PATH and LD_LIBRARY_PATH
<br>
on your .bashrc/.cshrc files (assuming these files and your home 
<br>
directory are *also* shared with the nodes via NFS),
<br>
or use the --prefix option of mpiexec to point to the OpenMPI main 
<br>
directory.
<br>
<p>Needless to say, you need to check and ensure that the OpenMPI directory 
<br>
(and maybe your home directory, and your work directory) is (are)
<br>
really mounted on the nodes.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>Cristobal Navarro wrote:
<br>
<span class="quotelev1">&gt; i compiled with absolute path in case:
</span><br>
<span class="quotelev1">&gt; fcluster_at_agua:~$ /opt/openmpi-1.4.2/bin/mpicc testMPI/hello.c -o 
</span><br>
<span class="quotelev1">&gt; testMPI/hola
</span><br>
<span class="quotelev1">&gt; fcluster_at_agua:~$ mpirun --hostfile myhostfile -np 5 testMPI/hola
</span><br>
<span class="quotelev1">&gt; [agua:03547] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:03547] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:03548] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:03548] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:03549] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:03549] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:03550] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:03550] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:03551] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; [agua:03551] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, 
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 4 with PID 3551 on node agua exited on 
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and it segfaulted. the machine stoped and threw many errors on its 
</span><br>
<span class="quotelev1">&gt; screen, cannot copy them because they didnt show in ssh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 27, 2010 at 7:07 PM, Cristobal Navarro &lt;axischire_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:axischire_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Thanks Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     but i already had the paths
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     fcluster_at_agua:~$ echo $PATH
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-1.4.2/bin:/opt/cfc/sge/bin/lx24-amd64:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
</span><br>
<span class="quotelev1">&gt;     fcluster_at_agua:~$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi-1.4.2/lib:
</span><br>
<span class="quotelev1">&gt;     fcluster_at_agua:~$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     even weird, errors come sometimes from the master node (agua)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Tue, Jul 27, 2010 at 6:59 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Try using the --prefix option of mpiexec.
</span><br>
<span class="quotelev1">&gt;         &quot;man mpiexec&quot; is your friend!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Alternatively, append the OpenMPI directories to your
</span><br>
<span class="quotelev1">&gt;         PATH *and* LD_LIBRARY_PATH on your .bashrc/.csrhc file
</span><br>
<span class="quotelev1">&gt;         See this FAQ:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I hope it helps,
</span><br>
<span class="quotelev1">&gt;         Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Hi,
</span><br>
<span class="quotelev1">&gt;             Even when executing a hello world openmpi, i get this error,
</span><br>
<span class="quotelev1">&gt;             which is then ignored.
</span><br>
<span class="quotelev1">&gt;             fcluster_at_fuego:~$ mpirun --hostfile myhostfile -np 5
</span><br>
<span class="quotelev1">&gt;             testMPI/hola [agua:02357] mca: base: component_find: unable
</span><br>
<span class="quotelev1">&gt;             to open /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps
</span><br>
<span class="quotelev1">&gt;             a missing symbol, or compiled for a different version of
</span><br>
<span class="quotelev1">&gt;             Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             [agua:02354] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a
</span><br>
<span class="quotelev1">&gt;             missing symbol, or compiled for a different version of Open
</span><br>
<span class="quotelev1">&gt;             MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             [agua:02356] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a
</span><br>
<span class="quotelev1">&gt;             missing symbol, or compiled for a different version of Open
</span><br>
<span class="quotelev1">&gt;             MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             [agua:02358] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a
</span><br>
<span class="quotelev1">&gt;             missing symbol, or compiled for a different version of Open
</span><br>
<span class="quotelev1">&gt;             MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             [agua:02355] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a
</span><br>
<span class="quotelev1">&gt;             missing symbol, or compiled for a different version of Open
</span><br>
<span class="quotelev1">&gt;             MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             [agua:02358] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a
</span><br>
<span class="quotelev1">&gt;             missing symbol, or compiled for a different version of Open
</span><br>
<span class="quotelev1">&gt;             MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             [agua:02355] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a
</span><br>
<span class="quotelev1">&gt;             missing symbol, or compiled for a different version of Open
</span><br>
<span class="quotelev1">&gt;             MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             [agua:02354] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a
</span><br>
<span class="quotelev1">&gt;             missing symbol, or compiled for a different version of Open
</span><br>
<span class="quotelev1">&gt;             MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             [agua:02356] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a
</span><br>
<span class="quotelev1">&gt;             missing symbol, or compiled for a different version of Open
</span><br>
<span class="quotelev1">&gt;             MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             [agua:02357] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a
</span><br>
<span class="quotelev1">&gt;             missing symbol, or compiled for a different version of Open
</span><br>
<span class="quotelev1">&gt;             MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;             Process 3 on agua out of 5
</span><br>
<span class="quotelev1">&gt;             Process 4 on agua out of 5
</span><br>
<span class="quotelev1">&gt;             Process 1 on agua out of 5
</span><br>
<span class="quotelev1">&gt;             Process 2 on agua out of 5
</span><br>
<span class="quotelev1">&gt;             Process 0 on agua out of 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi-1.4.2/ is shared through NFS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             master node did had an older openmpi version before
</span><br>
<span class="quotelev1">&gt;             installing 1.4.2, but i removed them all with
</span><br>
<span class="quotelev1">&gt;             sudo apt-get --purge remove libopenmpi1 libopenmpi-dev
</span><br>
<span class="quotelev1">&gt;             openmpi-bin openmpi-dev openmpi-common
</span><br>
<span class="quotelev1">&gt;             i checked for /usr/lib64/openmpi   and for  /usr/lib/openmpi
</span><br>
<span class="quotelev1">&gt;               and deleted them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             however, when compiling again i keep getting this error,
</span><br>
<span class="quotelev1">&gt;             something must be remaining from the older version of
</span><br>
<span class="quotelev1">&gt;             openmpi, but i really dont know where that remaining could be.
</span><br>
<span class="quotelev1">&gt;             any help, welcome
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13814.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13812.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
