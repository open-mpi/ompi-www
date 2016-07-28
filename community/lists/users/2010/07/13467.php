<?
$subject_val = "Re: [OMPI users] Unable to include mpich library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  2 22:20:41 2010" -->
<!-- isoreceived="20100703022041" -->
<!-- sent="Fri, 2 Jul 2010 23:20:35 -0300" -->
<!-- isosent="20100703022035" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to include mpich library" -->
<!-- id="AANLkTinuqRJVTiJDwJe8leekRWukD9T5cfRpr42icxk5_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="677F4910-A56F-4B7C-B23D-2C141FA07877_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to include mpich library<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-02 22:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13468.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13466.php">Jack Bryan: "[OMPI users] OpenMPI error MPI_ERR_TRUNCATE"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13468.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13468.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 28 June 2010 04:26, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I saw makefiles, where the compilers (i.e. MPI wrappers) were only used for
</span><br>
<span class="quotelev1">&gt; compiling the source to object files. Later on these were still linked with
</span><br>
<span class="quotelev1">&gt; `gcc` or `ld`. Hence the MPI library must be accessed also for the linker
</span><br>
<span class="quotelev1">&gt; step by `mpicc` instead of `gcc` when setting $LD is supported, or set in
</span><br>
<span class="quotelev1">&gt; e.g. $LDFLAGS for the latter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why is there no `mpild` to do this automatically then?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Why not use LD=mpicc ?
<br>
<p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13468.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13466.php">Jack Bryan: "[OMPI users] OpenMPI error MPI_ERR_TRUNCATE"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13468.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13468.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
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
