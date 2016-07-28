<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 15:29:08 2010" -->
<!-- isoreceived="20100728192908" -->
<!-- sent="Wed, 28 Jul 2010 15:28:59 -0400" -->
<!-- isosent="20100728192859" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="4C5084FB.8000602_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=F-tk6aK6O54sR-2v2vzKRAQwZxz=uydq8Rgbz_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-28 15:28:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13848.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13847.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Cristobal
<br>
<p>Cristobal Navarro wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 28, 2010 at 11:09 AM, Gus Correa &lt;gus_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     In case you are not using full path name for mpiexec/mpirun,
</span><br>
<span class="quotelev1">&gt;     what does &quot;which mpirun&quot; say?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; $which mpirun
</span><br>
<span class="quotelev1">&gt;       /opt/openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Often times this is a source of confusion, old versions may
</span><br>
<span class="quotelev1">&gt;     be first on the PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openMPI version problem is now gone, i can confirm that the version is 
</span><br>
<span class="quotelev1">&gt; consistent now :), thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This is good news.
<br>
<p><span class="quotelev1">&gt; however, i keep getting this kernel crash randomnly when i execute with 
</span><br>
<span class="quotelev1">&gt; -np higher than 5
</span><br>
<span class="quotelev1">&gt; these are Xeons, with Hyperthreading On, is that a problem??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The problem may be with Hyperthreading, maybe not.
<br>
Which Xeons?
<br>
If I remember right, the old hyperthreading on old Xeons was problematic.
<br>
<p>OTOH, about 1-2 months ago I had trouble with OpenMPI on a relatively 
<br>
new Xeon Nehalem machine with (the new) Hyperthreading turned on,
<br>
and Fedora Core 13.
<br>
The machine would hang with the OpenMPI connectivity example.
<br>
I reported this to the list, you may find in the archives.
<br>
Apparently other people got everything (OpenMPI with HT on Nehalem)
<br>
working in more stable distributions (CentOS, RHEL, etc).
<br>
<p>That problem was likely to be in the FC13 kernel,
<br>
because even turning off HT I still had the machine hanging.
<br>
Nothing worked with shared memory turned on,
<br>
so I had to switch OpenMPI to use tcp instead,
<br>
which is kind of ridiculous in a standalone machine.
<br>
<p><p><span class="quotelev1">&gt; im trying to locate the kernel error on logs, but after rebooting a 
</span><br>
<span class="quotelev1">&gt; crash, the error is not in the kern.log (neither kern.log.1).
</span><br>
<span class="quotelev1">&gt; all i remember is that it starts with &quot;Kernel BUG...&quot;
</span><br>
<span class="quotelev1">&gt; and somepart it mentions a certain CPU X, where that cpu can be any from 
</span><br>
<span class="quotelev1">&gt; 0 to 15 (im testing only in main node).  Someone knows where the log of 
</span><br>
<span class="quotelev1">&gt; kernel error could be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Have you tried to turn off hyperthreading?
<br>
In any case, depending on the application, it may not help much 
<br>
performance to have HT on.
<br>
<p>A more radical alternative is to try
<br>
-mca btl tcp,self
<br>
in the mpirun command line.
<br>
That is what worked in the case I mentioned above.
<br>
<p>My $0.02
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa
</span><br>
<span class="quotelev1">&gt;         &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Does it run only on the head node alone?
</span><br>
<span class="quotelev1">&gt;            (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev1">&gt;            Try to put only the head node on the hostfile and execute
</span><br>
<span class="quotelev1">&gt;         with mpiexec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         --&gt; i will try only with the head node, and post results back
</span><br>
<span class="quotelev1">&gt;            This may help sort out what is going on.
</span><br>
<span class="quotelev1">&gt;            Hopefully it will run on the head node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Also, do you have Infinband connecting the nodes?
</span><br>
<span class="quotelev1">&gt;            The error messages refer to the openib btl (i.e. Infiniband),
</span><br>
<span class="quotelev1">&gt;            and complains of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         no we are just using normal network 100MBit/s , since i am just
</span><br>
<span class="quotelev1">&gt;         testing yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            &quot;perhaps a missing symbol, or compiled for a different
</span><br>
<span class="quotelev1">&gt;            version of Open MPI?&quot;.
</span><br>
<span class="quotelev1">&gt;            It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         --&gt; i agree, somewhere there must be the remains of the older
</span><br>
<span class="quotelev1">&gt;         version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Did you configure/build OpenMPI from source, or did you install
</span><br>
<span class="quotelev1">&gt;            it with apt-get?
</span><br>
<span class="quotelev1">&gt;            It may be easier/less confusing to install from source.
</span><br>
<span class="quotelev1">&gt;            If you did, what configure options did you use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         --&gt;i installed from source, ./configure
</span><br>
<span class="quotelev1">&gt;         --prefix=/opt/openmpi-1.4.2 --with-sge --without-xgid
</span><br>
<span class="quotelev1">&gt;         --disable--static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Also, as for the OpenMPI runtime environment,
</span><br>
<span class="quotelev1">&gt;            it is not enough to set it on
</span><br>
<span class="quotelev1">&gt;            the command line, because it will be effective only on the
</span><br>
<span class="quotelev1">&gt;         head node.
</span><br>
<span class="quotelev1">&gt;            You need to either add them to the PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;            on your .bashrc/.cshrc files (assuming these files and your home
</span><br>
<span class="quotelev1">&gt;            directory are *also* shared with the nodes via NFS),
</span><br>
<span class="quotelev1">&gt;            or use the --prefix option of mpiexec to point to the OpenMPI
</span><br>
<span class="quotelev1">&gt;         main
</span><br>
<span class="quotelev1">&gt;            directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         yes, all nodes have their PATH and LD_LIBRARY_PATH set up
</span><br>
<span class="quotelev1">&gt;         properly inside the login scripts ( .bashrc in my case  )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Needless to say, you need to check and ensure that the OpenMPI
</span><br>
<span class="quotelev1">&gt;            directory (and maybe your home directory, and your work
</span><br>
<span class="quotelev1">&gt;         directory)
</span><br>
<span class="quotelev1">&gt;            is (are)
</span><br>
<span class="quotelev1">&gt;            really mounted on the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         --&gt; yes, doublechecked that they are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         --&gt; thanks really!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Update: i just reinstalled openMPI, with the same parameters,
</span><br>
<span class="quotelev1">&gt;         and it
</span><br>
<span class="quotelev1">&gt;            seems that the problem has gone, i couldnt test entirely but
</span><br>
<span class="quotelev1">&gt;         when i
</span><br>
<span class="quotelev1">&gt;            get back to lab ill confirm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         best regards! Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13848.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13847.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
