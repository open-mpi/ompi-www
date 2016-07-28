<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 11:05:53 2010" -->
<!-- isoreceived="20100728150553" -->
<!-- sent="Wed, 28 Jul 2010 11:05:10 -0400" -->
<!-- isosent="20100728150510" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="AANLkTikPc=SFH+DXjM5kmfKdjD8b8krnGH+peyKswKS-_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="42EF28A7-B68D-4B88-8A50-737AC37F51EF_at_cisco.com" -->
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
<strong>Date:</strong> 2010-07-28 11:05:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13832.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13823.php">Jeff Squyres: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes,
<br>
<p>somehow after the second install, the installlation is consistent.
<br>
<p>im only running into an issue, might be mpi im not sure.
<br>
these nodes, each one have 8 phisical procesors (2xIntel Xeon quad core),
<br>
and 16 virtual ones, btw i have ubuntu server 64bit 10.04 instaled on these
<br>
nodes.
<br>
<p>the problem seems to be whenever y try to use over 8 proceses (make use of
<br>
the virtual ones), i get a horrible error saying about a kernel error and a
<br>
certain cpu that crashed, the error hags there for about a minute, then it
<br>
switches to another cpu and shows the same error. i have no other option to
<br>
press power off button.
<br>
<p>ill try to copy the error, and post it.
<br>
<p><p><p>On Wed, Jul 28, 2010 at 7:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This issue is usually caused by installing one version of Open MPI over an
</span><br>
<span class="quotelev1">&gt; older version:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2010, at 10:35 PM, Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Cristobal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does it run only on the head node alone?
</span><br>
<span class="quotelev2">&gt; &gt; (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev2">&gt; &gt; Try to put only the head node on the hostfile and execute with mpiexec.
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; i will try only with the head node, and post results back
</span><br>
<span class="quotelev2">&gt; &gt; This may help sort out what is going on.
</span><br>
<span class="quotelev2">&gt; &gt; Hopefully it will run on the head node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, do you have Infinband connecting the nodes?
</span><br>
<span class="quotelev2">&gt; &gt; The error messages refer to the openib btl (i.e. Infiniband),
</span><br>
<span class="quotelev2">&gt; &gt; and complains of
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; no we are just using normal network 100MBit/s , since i am just testing
</span><br>
<span class="quotelev1">&gt; yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;perhaps a missing symbol, or compiled for a different
</span><br>
<span class="quotelev2">&gt; &gt; version of Open MPI?&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; i agree, somewhere there must be the remains of the older version
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did you configure/build OpenMPI from source, or did you install
</span><br>
<span class="quotelev2">&gt; &gt; it with apt-get?
</span><br>
<span class="quotelev2">&gt; &gt; It may be easier/less confusing to install from source.
</span><br>
<span class="quotelev2">&gt; &gt; If you did, what configure options did you use?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --&gt;i installed from source,
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/opt/openmpi-1.4.2 --with-sge --without-xgid
</span><br>
<span class="quotelev1">&gt; --disable--static
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, as for the OpenMPI runtime environment,
</span><br>
<span class="quotelev2">&gt; &gt; it is not enough to set it on
</span><br>
<span class="quotelev2">&gt; &gt; the command line, because it will be effective only on the head node.
</span><br>
<span class="quotelev2">&gt; &gt; You need to either add them to the PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; on your .bashrc/.cshrc files (assuming these files and your home
</span><br>
<span class="quotelev1">&gt; directory are *also* shared with the nodes via NFS),
</span><br>
<span class="quotelev2">&gt; &gt; or use the --prefix option of mpiexec to point to the OpenMPI main
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; yes, all nodes have their PATH and LD_LIBRARY_PATH set up properly inside
</span><br>
<span class="quotelev1">&gt; the login scripts ( .bashrc in my case  )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Needless to say, you need to check and ensure that the OpenMPI directory
</span><br>
<span class="quotelev1">&gt; (and maybe your home directory, and your work directory) is (are)
</span><br>
<span class="quotelev2">&gt; &gt; really mounted on the nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; yes, doublechecked that they are
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; thanks really!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Update: i just reinstalled openMPI, with the same parameters, and it
</span><br>
<span class="quotelev1">&gt; seems that the problem has gone, i couldnt test entirely but when i get back
</span><br>
<span class="quotelev1">&gt; to lab ill confirm.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; best regards!
</span><br>
<span class="quotelev2">&gt; &gt; Cristobal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13833/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13832.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13823.php">Jeff Squyres: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
