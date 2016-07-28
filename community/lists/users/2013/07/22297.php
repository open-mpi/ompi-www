<?
$subject_val = "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  9 08:44:14 2013" -->
<!-- isoreceived="20130709124414" -->
<!-- sent="Tue, 9 Jul 2013 12:44:09 +0000" -->
<!-- isosent="20130709124409" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `MPI::Comm::Comm()" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F704559_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANAOJCtkGDKN=XNXUOZKb_r+C7h5Mu1WSAMt8WTS7Lszvv_n9g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined reference to `MPI::Comm::Comm()<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-09 08:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22298.php">Tomek Wlodarski: "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Previous message:</strong> <a href="22296.php">Tomek Wlodarski: "[OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>In reply to:</strong> <a href="22296.php">Tomek Wlodarski: "[OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22298.php">Tomek Wlodarski: "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Reply:</strong> <a href="22298.php">Tomek Wlodarski: "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jul 9, 2013, at 8:36 AM, Tomek Wlodarski &lt;tomek.wlodarski_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to locally compile software which uses openmpi (1.6.3),
</span><br>
<span class="quotelev1">&gt; but I got this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; restraint_camshift2.o:(.toc+0x98): undefined reference to
</span><br>
<span class="quotelev1">&gt; `ompi_mpi_cxx_op_intercept'
</span><br>
<span class="quotelev1">&gt; restraint_camshift2.o: In function `Intracomm':
</span><br>
<span class="quotelev1">&gt; /home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev1">&gt; /home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev1">&gt; restraint_camshift2.o: In function `Intracomm':
</span><br>
<span class="quotelev1">&gt; /home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm_inln.h:23:
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev1">&gt; restraint_camshift2.o: In function `Intracomm':
</span><br>
<span class="quotelev1">&gt; /home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev1">&gt; /home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Comm::Comm()'
</span><br>
<span class="quotelev1">&gt; restraint_camshift2.o:/home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
</span><br>
<span class="quotelev1">&gt; more undefined references to `MPI::Comm::Comm()' follow
</span><br>
<span class="quotelev1">&gt; restraint_camshift2.o:(.data.rel.ro._ZTVN3MPI3WinE[_ZTVN3MPI3WinE]+0x48):
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Win::Free()'
</span><br>
<span class="quotelev1">&gt; restraint_camshift2.o:(.data.rel.ro._ZTVN3MPI8DatatypeE[_ZTVN3MPI8DatatypeE]+0x78):
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Datatype::Free()'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [mdrun] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/users/didymos/src/gromacs-4.5.5/src/kernel'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/users/didymos/src/gromacs-4.5.5/src'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/users/didymos/src/gromacs-4.5.5/src'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using gcc 4.7.3
</span><br>
<span class="quotelev1">&gt; Any ideas or suggestions?
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tomek
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
<li><strong>Next message:</strong> <a href="22298.php">Tomek Wlodarski: "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Previous message:</strong> <a href="22296.php">Tomek Wlodarski: "[OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>In reply to:</strong> <a href="22296.php">Tomek Wlodarski: "[OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22298.php">Tomek Wlodarski: "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Reply:</strong> <a href="22298.php">Tomek Wlodarski: "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
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
