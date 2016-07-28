<?
$subject_val = "Re: [OMPI users] error openmpi check hdf5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 07:23:26 2016" -->
<!-- isoreceived="20160210122326" -->
<!-- sent="Wed, 10 Feb 2016 21:23:24 +0900" -->
<!-- isosent="20160210122324" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error openmpi check hdf5" -->
<!-- id="CAAkFZ5txUcw14b5kzqgy8V8GwH0LjQUuUiLnVnFYa0tNWzR0GQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56BB292C.5080108_at_univ-reunion.fr" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 07:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28495.php">Gilles Gouaillardet: "[OMPI users]  error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28493.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28492.php">Delphine Ramalingom: "Re: [OMPI users] error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28495.php">Gilles Gouaillardet: "[OMPI users]  error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28495.php">Gilles Gouaillardet: "[OMPI users]  error openmpi check hdf5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Delphine,
<br>
<p>I am surprised you are using ompio with openmpi 1.8 series.
<br>
The default is to use romio
<br>
Did you explicitly ask for ompio ?
<br>
If not, can you check your environment and ensure you are not mixing
<br>
openmpi 1.8 and v2.x ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, February 10, 2016, Delphine Ramalingom &lt;
<br>
delphine.ramalingom_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It's version 1.8.1.
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Delphine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.univ-reunion.fr">http://www.univ-reunion.fr</a>&gt; *Delphine Ramalingom Barbary | Ing&#195;&#169;nieure en
</span><br>
<span class="quotelev1">&gt; Calcul Scientifique *
</span><br>
<span class="quotelev1">&gt; Direction des Usages du Num&#195;&#169;rique (DUN)
</span><br>
<span class="quotelev1">&gt; Centre de D&#195;&#169;veloppement du Calcul Scientifique
</span><br>
<span class="quotelev1">&gt; TEL : 02 62 93 84 87- FAX : 02 62 93 81 06
</span><br>
<span class="quotelev1">&gt; Le 10/02/2016 15:50, Edgar Gabriel a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which version of Open MPI is this?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/10/2016 4:13 AM, Delphine Ramalingom wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to compile a parallel version of hdf5.
</span><br>
<span class="quotelev1">&gt; I have error messages when I check with openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Support on HDF5 told me that the errors seem related to the new ompio
</span><br>
<span class="quotelev1">&gt; implementation inside
</span><br>
<span class="quotelev1">&gt; open MPI for MPI-I/O. He suggests that I talk to the OMPI mailing list to
</span><br>
<span class="quotelev1">&gt; resolve  these errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For information, my version of openmpi is : gcc (GCC) 4.8.2
</span><br>
<span class="quotelev1">&gt; mpicc --showme
</span><br>
<span class="quotelev1">&gt; gcc -I/programs/Compilateurs2/usr/include -pthread -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/programs/Compilateurs2/usr/lib -Wl,--enable-new-dtags
</span><br>
<span class="quotelev1">&gt; -L/programs/Compilateurs2/usr/lib -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Errors are :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: undefined
</span><br>
<span class="quotelev1">&gt; symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: undefined
</span><br>
<span class="quotelev1">&gt; symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: undefined
</span><br>
<span class="quotelev1">&gt; symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: undefined
</span><br>
<span class="quotelev1">&gt; symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: undefined
</span><br>
<span class="quotelev1">&gt; symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Delphine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.univ-reunion.fr">http://www.univ-reunion.fr</a>&gt; *Delphine Ramalingom Barbary | Ing&#195;&#169;nieure en
</span><br>
<span class="quotelev1">&gt; Calcul Scientifique *
</span><br>
<span class="quotelev1">&gt; Direction des Usages du Num&#195;&#169;rique (DUN)
</span><br>
<span class="quotelev1">&gt; Centre de D&#195;&#169;veloppement du Calcul Scientifique
</span><br>
<span class="quotelev1">&gt; TEL : 02 62 93 84 87- FAX : 02 62 93 81 06
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28489.php">http://www.open-mpi.org/community/lists/users/2016/02/28489.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28494/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28494/logouru.png" alt="logouru.png">
<!-- attachment="logouru.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28494/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28495.php">Gilles Gouaillardet: "[OMPI users]  error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28493.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28492.php">Delphine Ramalingom: "Re: [OMPI users] error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28495.php">Gilles Gouaillardet: "[OMPI users]  error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28495.php">Gilles Gouaillardet: "[OMPI users]  error openmpi check hdf5"</a>
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
