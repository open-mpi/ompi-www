<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 11:10:14 2010" -->
<!-- isoreceived="20100728151014" -->
<!-- sent="Wed, 28 Jul 2010 11:09:57 -0400" -->
<!-- isosent="20100728150957" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="4C504845.7040000_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimETtdYp=8xz=RyZvRrVemXbkp4bR60+k1w9c6r_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-28 11:09:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13833.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13847.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13847.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Cristobal
<br>
<p>In case you are not using full path name for mpiexec/mpirun,
<br>
what does &quot;which mpirun&quot; say?
<br>
<p>Often times this is a source of confusion, old versions may
<br>
be first on the PATH.
<br>
<p>Gus
<br>
<p>Cristobal Navarro wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa &lt;gus_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Does it run only on the head node alone?
</span><br>
<span class="quotelev1">&gt;     (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev1">&gt;     Try to put only the head node on the hostfile and execute with mpiexec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; i will try only with the head node, and post results back 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     This may help sort out what is going on.
</span><br>
<span class="quotelev1">&gt;     Hopefully it will run on the head node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Also, do you have Infinband connecting the nodes?
</span><br>
<span class="quotelev1">&gt;     The error messages refer to the openib btl (i.e. Infiniband),
</span><br>
<span class="quotelev1">&gt;     and complains of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; no we are just using normal network 100MBit/s , since i am just testing yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     &quot;perhaps a missing symbol, or compiled for a different
</span><br>
<span class="quotelev1">&gt;     version of Open MPI?&quot;.
</span><br>
<span class="quotelev1">&gt;     It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; i agree, somewhere there must be the remains of the older version 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Did you configure/build OpenMPI from source, or did you install
</span><br>
<span class="quotelev1">&gt;     it with apt-get?
</span><br>
<span class="quotelev1">&gt;     It may be easier/less confusing to install from source.
</span><br>
<span class="quotelev1">&gt;     If you did, what configure options did you use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt;i installed from source, 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.4.2 --with-sge --without-xgid 
</span><br>
<span class="quotelev1">&gt; --disable--static 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Also, as for the OpenMPI runtime environment,
</span><br>
<span class="quotelev1">&gt;     it is not enough to set it on
</span><br>
<span class="quotelev1">&gt;     the command line, because it will be effective only on the head node.
</span><br>
<span class="quotelev1">&gt;     You need to either add them to the PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;     on your .bashrc/.cshrc files (assuming these files and your home
</span><br>
<span class="quotelev1">&gt;     directory are *also* shared with the nodes via NFS),
</span><br>
<span class="quotelev1">&gt;     or use the --prefix option of mpiexec to point to the OpenMPI main
</span><br>
<span class="quotelev1">&gt;     directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, all nodes have their PATH and LD_LIBRARY_PATH set up properly 
</span><br>
<span class="quotelev1">&gt; inside the login scripts ( .bashrc in my case  ) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Needless to say, you need to check and ensure that the OpenMPI
</span><br>
<span class="quotelev1">&gt;     directory (and maybe your home directory, and your work directory)
</span><br>
<span class="quotelev1">&gt;     is (are)
</span><br>
<span class="quotelev1">&gt;     really mounted on the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; yes, doublechecked that they are 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; thanks really! 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Update: i just reinstalled openMPI, with the same parameters, and it
</span><br>
<span class="quotelev1">&gt;     seems that the problem has gone, i couldnt test entirely but when i
</span><br>
<span class="quotelev1">&gt;     get back to lab ill confirm. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best regards! 
</span><br>
<span class="quotelev1">&gt; Cristobal
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
<li><strong>Next message:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13833.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13847.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13847.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
