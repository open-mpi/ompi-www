<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 22:36:13 2010" -->
<!-- isoreceived="20100728023613" -->
<!-- sent="Tue, 27 Jul 2010 22:35:48 -0400" -->
<!-- isosent="20100728023548" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="AANLkTimETtdYp=8xz=RyZvRrVemXbkp4bR60+k1w9c6r_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C4F6BEC.405_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-07-27 22:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13816.php">Yves Caniou: "[OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13814.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13823.php">Jeff Squyres: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13823.php">Jeff Squyres: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Cristobal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it run only on the head node alone?
</span><br>
<span class="quotelev1">&gt; (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev1">&gt; Try to put only the head node on the hostfile and execute with mpiexec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
--&gt; i will try only with the head node, and post results back
<br>
<p><span class="quotelev1">&gt; This may help sort out what is going on.
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
<p><p>no we are just using normal network 100MBit/s , since i am just testing yet.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;perhaps a missing symbol, or compiled for a different
</span><br>
<span class="quotelev1">&gt; version of Open MPI?&quot;.
</span><br>
<span class="quotelev1">&gt; It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>--&gt; i agree, somewhere there must be the remains of the older version
<br>
<p><span class="quotelev1">&gt;
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
<p>--&gt;i installed from source,
<br>
./configure --prefix=/opt/openmpi-1.4.2 --with-sge --without-xgid
<br>
--disable--static
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, as for the OpenMPI runtime environment,
</span><br>
<span class="quotelev1">&gt; it is not enough to set it on
</span><br>
<span class="quotelev1">&gt; the command line, because it will be effective only on the head node.
</span><br>
<span class="quotelev1">&gt; You need to either add them to the PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; on your .bashrc/.cshrc files (assuming these files and your home directory
</span><br>
<span class="quotelev1">&gt; are *also* shared with the nodes via NFS),
</span><br>
<span class="quotelev1">&gt; or use the --prefix option of mpiexec to point to the OpenMPI main
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>yes, all nodes have their PATH and LD_LIBRARY_PATH set up properly inside
<br>
the login scripts ( .bashrc in my case  )
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Needless to say, you need to check and ensure that the OpenMPI directory
</span><br>
<span class="quotelev1">&gt; (and maybe your home directory, and your work directory) is (are)
</span><br>
<span class="quotelev1">&gt; really mounted on the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>--&gt; yes, doublechecked that they are
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<p><p>--&gt; thanks really!
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Update: i just reinstalled openMPI, with the same parameters, and it seems
</span><br>
<span class="quotelev1">&gt; that the problem has gone, i couldnt test entirely but when i get back to
</span><br>
<span class="quotelev1">&gt; lab ill confirm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>best regards!
<br>
Cristobal
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13815/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13816.php">Yves Caniou: "[OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13814.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13823.php">Jeff Squyres: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13823.php">Jeff Squyres: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
