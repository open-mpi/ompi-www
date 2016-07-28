<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 14:47:53 2010" -->
<!-- isoreceived="20100728184753" -->
<!-- sent="Wed, 28 Jul 2010 14:47:28 -0400" -->
<!-- isosent="20100728184728" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="AANLkTi=F-tk6aK6O54sR-2v2vzKRAQwZxz=uydq8Rgbz_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C504845.7040000_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-07-28 14:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13848.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13846.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13848.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13848.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13849.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 28, 2010 at 11:09 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Cristobal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case you are not using full path name for mpiexec/mpirun,
</span><br>
<span class="quotelev1">&gt; what does &quot;which mpirun&quot; say?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>--&gt; $which mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi-1.4.2
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Often times this is a source of confusion, old versions may
</span><br>
<span class="quotelev1">&gt; be first on the PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>openMPI version problem is now gone, i can confirm that the version is
<br>
consistent now :), thanks.
<br>
<p>however, i keep getting this kernel crash randomnly when i execute with -np
<br>
higher than 5
<br>
these are Xeons, with Hyperthreading On, is that a problem??
<br>
<p>im trying to locate the kernel error on logs, but after rebooting a crash,
<br>
the error is not in the kern.log (neither kern.log.1).
<br>
all i remember is that it starts with &quot;Kernel BUG...&quot;
<br>
and somepart it mentions a certain CPU X, where that cpu can be any from 0
<br>
to 15 (im testing only in main node).  Someone knows where the log of kernel
<br>
error could be?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa &lt;gus_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Hi Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Does it run only on the head node alone?
</span><br>
<span class="quotelev2">&gt;&gt;    (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev2">&gt;&gt;    Try to put only the head node on the hostfile and execute with mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; i will try only with the head node, and post results back
</span><br>
<span class="quotelev2">&gt;&gt;    This may help sort out what is going on.
</span><br>
<span class="quotelev2">&gt;&gt;    Hopefully it will run on the head node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Also, do you have Infinband connecting the nodes?
</span><br>
<span class="quotelev2">&gt;&gt;    The error messages refer to the openib btl (i.e. Infiniband),
</span><br>
<span class="quotelev2">&gt;&gt;    and complains of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; no we are just using normal network 100MBit/s , since i am just testing
</span><br>
<span class="quotelev2">&gt;&gt; yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;perhaps a missing symbol, or compiled for a different
</span><br>
<span class="quotelev2">&gt;&gt;    version of Open MPI?&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;    It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; i agree, somewhere there must be the remains of the older version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Did you configure/build OpenMPI from source, or did you install
</span><br>
<span class="quotelev2">&gt;&gt;    it with apt-get?
</span><br>
<span class="quotelev2">&gt;&gt;    It may be easier/less confusing to install from source.
</span><br>
<span class="quotelev2">&gt;&gt;    If you did, what configure options did you use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt;i installed from source, ./configure --prefix=/opt/openmpi-1.4.2
</span><br>
<span class="quotelev2">&gt;&gt; --with-sge --without-xgid --disable--static
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Also, as for the OpenMPI runtime environment,
</span><br>
<span class="quotelev2">&gt;&gt;    it is not enough to set it on
</span><br>
<span class="quotelev2">&gt;&gt;    the command line, because it will be effective only on the head node.
</span><br>
<span class="quotelev2">&gt;&gt;    You need to either add them to the PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;    on your .bashrc/.cshrc files (assuming these files and your home
</span><br>
<span class="quotelev2">&gt;&gt;    directory are *also* shared with the nodes via NFS),
</span><br>
<span class="quotelev2">&gt;&gt;    or use the --prefix option of mpiexec to point to the OpenMPI main
</span><br>
<span class="quotelev2">&gt;&gt;    directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes, all nodes have their PATH and LD_LIBRARY_PATH set up properly inside
</span><br>
<span class="quotelev2">&gt;&gt; the login scripts ( .bashrc in my case  )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Needless to say, you need to check and ensure that the OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;    directory (and maybe your home directory, and your work directory)
</span><br>
<span class="quotelev2">&gt;&gt;    is (are)
</span><br>
<span class="quotelev2">&gt;&gt;    really mounted on the nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; yes, doublechecked that they are
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; thanks really!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Update: i just reinstalled openMPI, with the same parameters, and it
</span><br>
<span class="quotelev2">&gt;&gt;    seems that the problem has gone, i couldnt test entirely but when i
</span><br>
<span class="quotelev2">&gt;&gt;    get back to lab ill confirm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; best regards! Cristobal
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13848.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13846.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13848.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13848.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13849.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
