<?
$subject_val = "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 17:10:26 2008" -->
<!-- isoreceived="20080212221026" -->
<!-- sent="Tue, 12 Feb 2008 17:10:19 -0500" -->
<!-- isosent="20080212221019" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS" -->
<!-- id="c84311bb0802121410v51e163f4p51bc689dfb25d4c7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] openMPI on 64 bit SUSE 10.2 OS" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS<br>
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 17:10:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5026.php">Jeff Pummill: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Maybe in reply to:</strong> <a href="5023.php">Hsieh, Pei-Ying (MED US): "[OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Reply:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Are you pointing to the 64-bit build of HYPRE?  For that matter, like Jeff
<br>
asked, are you sure that each library path that you are defining goes to a
<br>
64-bit library path?
<br>
<p>Good luck,
<br>
<p>Mark E. Kosmowski
<br>
<p>peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi/lib:/usr/local/hypre2.0/lib:$LD_LIBRA
</span><br>
<span class="quotelev1">&gt; RY_PATH
</span><br>
<span class="quotelev1">&gt; peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=$ELMER_HOME --with-mpi-dir=$MPI_HOME
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<p><p><p><p>checking for Fortran 77 libraries of mpif90...
<br>
<span class="quotelev1">&gt; -L/usr/local/hypre2.0/lib -L/usr/local/lib
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../.. -lHYPRE -lmpi_f90
</span><br>
<span class="quotelev1">&gt; checking for Fortran libraries of mpif90...  -L/usr/local/hypre2.0/lib
</span><br>
<span class="quotelev1">&gt; -L/usr/local/lib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../lib64
</span><br>
<span class="quotelev1">&gt; -L/lib/../lib64 -L/usr/lib/../lib64
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../x86_64-suse-linux/l
</span><br>
<span class="quotelev1">&gt; ib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../.. -lHYPRE -lmpi_f90
</span><br>
<span class="quotelev1">&gt; checking for dseupd_ in -larpack... yes
</span><br>
<span class="quotelev1">&gt; checking for pdneupd_ in -lparpack... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: No parallel arpack found.
</span><br>
<span class="quotelev1">&gt; checking for HYPRE_IJMatrixCreate in -lHYPRE... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: HYPRE not found, some functionaly will be disabled.
</span><br>
<span class="quotelev1">&gt; checking for umf4def_ in -lumfpack... yes
</span><br>
<span class="quotelev1">&gt; checking for mtc_init in -lmatc... yes
</span><br>
<span class="quotelev1">&gt; checking for main in -lm... yes
</span><br>
<span class="quotelev1">&gt; configure: error: The MPI version needs parpack. Disabling MPI.
</span><br>
<span class="quotelev1">&gt; peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; Pei-Ying Hsieh, Ph.D.
</span><br>
<span class="quotelev1">&gt; Staff Product Engineer
</span><br>
<span class="quotelev1">&gt; Siemens Healthcare Diagnostics Inc.
</span><br>
<span class="quotelev1">&gt; 511 Benedict Ave., MS 32
</span><br>
<span class="quotelev1">&gt; Tarrytown, NY 10591
</span><br>
<span class="quotelev1">&gt; USA
</span><br>
<span class="quotelev1">&gt; Phone: (914)524-3146
</span><br>
<span class="quotelev1">&gt; fax:   (914)524-2580
</span><br>
<span class="quotelev1">&gt; email: Pei-Ying.Hsieh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.siemens.com/diagnostics
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What puzzles me is that, on 32 bit OpenSUSE, I was able to compile elmer
</span><br>
<span class="quotelev1">&gt; solver without any issue using the same script.  I am planning to use
</span><br>
<span class="quotelev1">&gt; HYPRE library, but, configure file indicated that it cannot find hypre
</span><br>
<span class="quotelev1">&gt; either which is another puzzle to me.  I will look into this further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pei
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible that this could be a problem with /usr/lib64 as opposed
</span><br>
<span class="quotelev1">&gt; to /usr/lib?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a thought...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev1">&gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5026.php">Jeff Pummill: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Maybe in reply to:</strong> <a href="5023.php">Hsieh, Pei-Ying (MED US): "[OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Reply:</strong> <a href="5028.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
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
