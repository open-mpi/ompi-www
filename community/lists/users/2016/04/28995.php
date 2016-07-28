<?
$subject_val = "Re: [OMPI users] MPI_Bcast implementations in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 12:02:04 2016" -->
<!-- isoreceived="20160422160204" -->
<!-- sent="Fri, 22 Apr 2016 17:02:01 +0100" -->
<!-- isosent="20160422160201" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast implementations in OpenMPI" -->
<!-- id="8737qdocna.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAMJJpkXJ-zNTMjYOLWARjh0P=YYtJ6jrdeqhU+jqjLuCP9YT3g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast implementations in OpenMPI<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-22 12:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="28994.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28998.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28998.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Matthieu,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are talking about how Open MPI selects between different broadcast
</span><br>
<span class="quotelev1">&gt; algorithms you might want to read [1]. We have implemented a dozen
</span><br>
<span class="quotelev1">&gt; different broadcast algorithms and have run a set of tests to measure their
</span><br>
<span class="quotelev1">&gt; performance. 
</span><br>
<p>I'd been meaning to ask about this sort of thing as I didn't anything
<br>
written about it.
<br>
<p>It seems the measurements on which at collective parameter defaults are
<br>
based were originally from interconnects with at least an order of
<br>
magnitude difference in performance from typical current ones, and maybe
<br>
different topology.
<br>
<p>Have parameters been revisited since, or is it clear they'll still be
<br>
valid for, say, FDR IB?  I know a case that was changed a while ago, but
<br>
the new alltoallv default algorithm hurt performance on typical
<br>
chemistry code that might constitute the majority of its use, and it
<br>
wasn't clear why the change was made.
<br>
<p>I assume it could be useful to know how things were derived to indicate
<br>
when it might be worth trying different values as it often seems
<br>
worthwhile to do so.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28996.php">Dave Love: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="28994.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28998.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28998.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
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
