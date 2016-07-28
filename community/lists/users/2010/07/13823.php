<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 07:39:01 2010" -->
<!-- isoreceived="20100728113901" -->
<!-- sent="Wed, 28 Jul 2010 07:39:49 -0400" -->
<!-- isosent="20100728113949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="42EF28A7-B68D-4B88-8A50-737AC37F51EF_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 07:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13824.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13822.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13833.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13833.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This issue is usually caused by installing one version of Open MPI over an older version:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
<br>
<p><p>On Jul 27, 2010, at 10:35 PM, Cristobal Navarro wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it run only on the head node alone?
</span><br>
<span class="quotelev1">&gt; (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev1">&gt; Try to put only the head node on the hostfile and execute with mpiexec.
</span><br>
<span class="quotelev1">&gt; --&gt; i will try only with the head node, and post results back 
</span><br>
<span class="quotelev1">&gt; This may help sort out what is going on.
</span><br>
<span class="quotelev1">&gt; Hopefully it will run on the head node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, do you have Infinband connecting the nodes?
</span><br>
<span class="quotelev1">&gt; The error messages refer to the openib btl (i.e. Infiniband),
</span><br>
<span class="quotelev1">&gt; and complains of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; no we are just using normal network 100MBit/s , since i am just testing yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;perhaps a missing symbol, or compiled for a different
</span><br>
<span class="quotelev1">&gt; version of Open MPI?&quot;.
</span><br>
<span class="quotelev1">&gt; It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; i agree, somewhere there must be the remains of the older version 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you configure/build OpenMPI from source, or did you install
</span><br>
<span class="quotelev1">&gt; it with apt-get?
</span><br>
<span class="quotelev1">&gt; It may be easier/less confusing to install from source.
</span><br>
<span class="quotelev1">&gt; If you did, what configure options did you use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt;i installed from source, 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.4.2 --with-sge --without-xgid --disable--static 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, as for the OpenMPI runtime environment,
</span><br>
<span class="quotelev1">&gt; it is not enough to set it on
</span><br>
<span class="quotelev1">&gt; the command line, because it will be effective only on the head node.
</span><br>
<span class="quotelev1">&gt; You need to either add them to the PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; on your .bashrc/.cshrc files (assuming these files and your home directory are *also* shared with the nodes via NFS),
</span><br>
<span class="quotelev1">&gt; or use the --prefix option of mpiexec to point to the OpenMPI main directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, all nodes have their PATH and LD_LIBRARY_PATH set up properly inside the login scripts ( .bashrc in my case  ) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Needless to say, you need to check and ensure that the OpenMPI directory (and maybe your home directory, and your work directory) is (are)
</span><br>
<span class="quotelev1">&gt; really mounted on the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; yes, doublechecked that they are 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; thanks really! 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Update: i just reinstalled openMPI, with the same parameters, and it seems that the problem has gone, i couldnt test entirely but when i get back to lab ill confirm. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best regards! 
</span><br>
<span class="quotelev1">&gt; Cristobal
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13824.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13822.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13833.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13833.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
