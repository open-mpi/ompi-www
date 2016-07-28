<?
$subject_val = "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 27 07:47:41 2013" -->
<!-- isoreceived="20130627114741" -->
<!-- sent="Thu, 27 Jun 2013 11:47:36 +0000" -->
<!-- isosent="20130627114736" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error: unknown type name 'ompi_jobid_t'" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6BEB2E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57oezLifmMQFS3bnAsbN9DGWSnSSVg7CCkxO0xf+VTTGr5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error: unknown type name 'ompi_jobid_t'<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-27 07:47:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22222.php">Ed Blosch: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22220.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>In reply to:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff --
<br>
<p>Should be fixed in 1.7.2, which was released yesterday.
<br>
<p><p>On Jun 26, 2013, at 3:06 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry about that - it has been fixed in the upcoming 1.7.2, which should be released in the immediate future. For now, you can grab the 1.7.2 tarball from the web site.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 25, 2013 at 8:25 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I observe this error with the OpenMPI 1.7.1 &quot;feature&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mca/common/ofacm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/mira-home/jhammond/MPI/openmpi-1.7.1/build-gcc/ompi/mca/common/ofacm'
</span><br>
<span class="quotelev1">&gt;   CC       common_ofacm_xoob.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/common/ofacm/common_ofacm_xoob.c:158:91:
</span><br>
<span class="quotelev1">&gt; error: unknown type name 'ompi_jobid_t'
</span><br>
<span class="quotelev1">&gt;  static int xoob_ib_address_init(ofacm_ib_address_t *ib_addr, uint16_t
</span><br>
<span class="quotelev1">&gt; lid, uint64_t s_id, ompi_jobid_t ep_jobid)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                     ^
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/common/ofacm/common_ofacm_xoob.c: In function
</span><br>
<span class="quotelev1">&gt; 'xoob_ib_address_add_new':
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/common/ofacm/common_ofacm_xoob.c:189:5:
</span><br>
<span class="quotelev1">&gt; warning: implicit declaration of function 'xoob_ib_address_init'
</span><br>
<span class="quotelev1">&gt; [-Wimplicit-function-declaration]
</span><br>
<span class="quotelev1">&gt;      ret = xoob_ib_address_init(ib_addr, lid, s_id, ep_jobid);
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [common_ofacm_xoob.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/mira-home/jhammond/MPI/openmpi-1.7.1/build-gcc/ompi/mca/common/ofacm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/mira-home/jhammond/MPI/openmpi-1.7.1/build-gcc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I invoked configure like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../configure CC=gcc CXX=g++ FC=gfortran F77=gfortran
</span><br>
<span class="quotelev1">&gt; --prefix=/home/jhammond/MPI/openmpi-1.7.1/install-gcc --with-verbs
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple --enable-static --enable-shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My config.log is attached with bzip2 compression or if you do not
</span><br>
<span class="quotelev1">&gt; trust binary attachments, please go to Dropbox and blindly download
</span><br>
<span class="quotelev1">&gt; the uncompressed text file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.dropbox.com/l/ZxZoE6FNROZuBY7I7wdsgc">https://www.dropbox.com/l/ZxZoE6FNROZuBY7I7wdsgc</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?  I asked the Google and it had not heard of this
</span><br>
<span class="quotelev1">&gt; particular error message before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS Please do not tell Pavan I was here :-)
</span><br>
<span class="quotelev1">&gt; PPS I recognize the Streisand effect is now in play and that someone
</span><br>
<span class="quotelev1">&gt; will deliberately disobey the previous request because I made it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22222.php">Ed Blosch: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="22220.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>In reply to:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<!-- nextthread="start" -->
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
