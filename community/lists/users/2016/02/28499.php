<?
$subject_val = "Re: [OMPI users] error openmpi check hdf5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 13:08:19 2016" -->
<!-- isoreceived="20160210180819" -->
<!-- sent="Wed, 10 Feb 2016 12:07:56 -0600" -->
<!-- isosent="20160210180756" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error openmpi check hdf5" -->
<!-- id="56BB7C7C.6090703_at_central.uh.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5v0PLeDgQeasOUs4VrY_u0+kFLbj9Sfk0aKvW3AXvj8Sg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error openmpi check hdf5<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 13:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28500.php">Douglas L Reeder: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>Previous message:</strong> <a href="28498.php">David Shrader: "[OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>In reply to:</strong> <a href="28495.php">Gilles Gouaillardet: "[OMPI users]  error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28510.php">Rob Latham: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28510.php">Rob Latham: "Re: [OMPI users] error openmpi check hdf5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes and no :-) That particular functions was fixed, but there are a few 
<br>
other especially in the shardefp framework that would cause similar 
<br>
problems if compiled without RTLD_GLOBAL.
<br>
<p>But more importantly, I can confirm that ompio in the 1.8 and 1.10 
<br>
series does *not* pass the HDF5 tests and should not be used for that 
<br>
(it passes on master and the 2.x series).  ROMIO is the default in 1.7, 
<br>
1.8 and 1.10 and should be used therefore.
<br>
<p>Thganks
<br>
Edgar
<br>
<p>On 2/10/2016 6:32 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Edgar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems this the consequence of an abstraction violation
</span><br>
<span class="quotelev1">&gt; (fcoll/two_phases directly calls the io/ompio component) and that was 
</span><br>
<span class="quotelev1">&gt; fixed in master.
</span><br>
<span class="quotelev1">&gt; Can you confirm that ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Delphine,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem should disappear if you use romio instead of ompio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, February 10, 2016, Edgar Gabriel 
</span><br>
<span class="quotelev1">&gt; &lt;egabriel_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','egabriel_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     which version of Open MPI is this?
</span><br>
<span class="quotelev1">&gt;     Thanks
</span><br>
<span class="quotelev1">&gt;     Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 2/10/2016 4:13 AM, Delphine Ramalingom wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I try to compile a parallel version of hdf5.
</span><br>
<span class="quotelev2">&gt;&gt;     I have error messages when I check with openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Support on HDF5 told me that the errors seem related to the new
</span><br>
<span class="quotelev2">&gt;&gt;     ompio implementation inside
</span><br>
<span class="quotelev2">&gt;&gt;     open MPI for MPI-I/O. He suggests that I talk to the OMPI mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list to resolve  these errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     For information, my version of openmpi is : gcc (GCC) 4.8.2
</span><br>
<span class="quotelev2">&gt;&gt;     mpicc --showme
</span><br>
<span class="quotelev2">&gt;&gt;     gcc -I/programs/Compilateurs2/usr/include -pthread -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt;     -Wl,/programs/Compilateurs2/usr/lib -Wl,--enable-new-dtags
</span><br>
<span class="quotelev2">&gt;&gt;     -L/programs/Compilateurs2/usr/lib -lmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Errors are :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:f
</span><br>
<span class="quotelev2">&gt;&gt;     /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so:
</span><br>
<span class="quotelev2">&gt;&gt;     undefined symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev2">&gt;&gt;     .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:
</span><br>
<span class="quotelev2">&gt;&gt;     /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so:
</span><br>
<span class="quotelev2">&gt;&gt;     undefined symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev2">&gt;&gt;     -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt;     a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt;     -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:
</span><br>
<span class="quotelev2">&gt;&gt;     /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so:
</span><br>
<span class="quotelev2">&gt;&gt;     undefined symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev2">&gt;&gt;     .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:
</span><br>
<span class="quotelev2">&gt;&gt;     /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so:
</span><br>
<span class="quotelev2">&gt;&gt;     undefined symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev2">&gt;&gt;     .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:
</span><br>
<span class="quotelev2">&gt;&gt;     /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so:
</span><br>
<span class="quotelev2">&gt;&gt;     undefined symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks in advance for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Regards
</span><br>
<span class="quotelev2">&gt;&gt;     Delphine
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.univ-reunion.fr">http://www.univ-reunion.fr</a>&gt; *Delphine Ramalingom Barbary |
</span><br>
<span class="quotelev2">&gt;&gt;     Ing&#195;&#169;nieure en Calcul Scientifique *
</span><br>
<span class="quotelev2">&gt;&gt;     Direction des Usages du Num&#195;&#169;rique (DUN)
</span><br>
<span class="quotelev2">&gt;&gt;     Centre de D&#195;&#169;veloppement du Calcul Scientifique
</span><br>
<span class="quotelev2">&gt;&gt;     TEL : 02 62 93 84 87- FAX : 02 62 93 81 06
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;     Associate Professor
</span><br>
<span class="quotelev1">&gt;     Parallel Software Technologies Lab<a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;     Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt;     Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt;     Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28500.php">Douglas L Reeder: "Re: [OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>Previous message:</strong> <a href="28498.php">David Shrader: "[OMPI users] a single build of Open MPI that can be used with multiple GCC versions"</a>
<li><strong>In reply to:</strong> <a href="28495.php">Gilles Gouaillardet: "[OMPI users]  error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28510.php">Rob Latham: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28510.php">Rob Latham: "Re: [OMPI users] error openmpi check hdf5"</a>
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
