<?
$subject_val = "Re: [OMPI users] OpenMPI Compilation Error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 11:37:57 2014" -->
<!-- isoreceived="20140605153757" -->
<!-- sent="Thu, 5 Jun 2014 10:37:53 -0500" -->
<!-- isosent="20140605153753" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Compilation Error" -->
<!-- id="CAMJJpkVJC_8ToiOpqwLe_hm5ukJd+6WWrg7Xe4-7gkUVscFwsg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADUh-ZXEUfm5-6aMoDt5pS2dhWFTDJmAxmrVDCns62PN4UYeWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Compilation Error<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 11:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24547.php">Timur Ismagilov: "[OMPI users] spml_ikrit_np random values"</a>
<li><strong>Previous message:</strong> <a href="24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>In reply to:</strong> <a href="24543.php">Alan Sang Loon: "[OMPI users] OpenMPI Compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Reply:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alan,
<br>
<p>I think we forgot to cleanup after a merge and as a result we have
<br>
c_destweights and c_sourceweights defined twice. Please try the
<br>
following patch and let us know if this fixes your issue.
<br>
<p>Index: ompi/mpi/fortran/mpif-h/dist_graph_create_adjacent_f.c
<br>
===================================================================
<br>
--- ompi/mpi/fortran/mpif-h/dist_graph_create_adjacent_f.c (revision 31954)
<br>
+++ ompi/mpi/fortran/mpif-h/dist_graph_create_adjacent_f.c (working copy)
<br>
@@ -72,8 +72,6 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info c_info;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm c_comm_old, c_comm_graph;
<br>
-    const int *c_destweights, *c_sourceweights;
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ARRAY_NAME_DECL(sources);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ARRAY_NAME_DECL(sourceweights);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ARRAY_NAME_DECL(destinations);
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Jun 5, 2014 at 12:34 AM, Alan Sang Loon &lt;alan988_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have downloaded OpenMPI-1.8.1 and compiled it using Intel Compilers (Intel
</span><br>
<span class="quotelev1">&gt; Composer XE Suites 2013) and the command used is as follow:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Code]
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.8.1 CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt; [/code]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything works just fine except I realized that the MPI library was built
</span><br>
<span class="quotelev1">&gt; for 32-bit integers (fort integer size=4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I reconfigured it using this command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Code]
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.8.1 CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; FFLAGS=-i8 FCFLAGS=-i8
</span><br>
<span class="quotelev1">&gt; [/code]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I tried to compile it using the make all install command, some
</span><br>
<span class="quotelev1">&gt; errors appeared at the end of the compilation which is described as
</span><br>
<span class="quotelev1">&gt; followed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [qoute]
</span><br>
<span class="quotelev1">&gt; ... ...
</span><br>
<span class="quotelev1">&gt;   CC       pdist_graph_create_adjacent_f.lo
</span><br>
<span class="quotelev1">&gt; pdist_graph_create_adjacent_f.c(79): error: &quot;c_sourceweights&quot; has already
</span><br>
<span class="quotelev1">&gt; been declared in the current scope
</span><br>
<span class="quotelev1">&gt;       OMPI_ARRAY_NAME_DECL(sourceweights);
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pdist_graph_create_adjacent_f.c(81): error: &quot;c_destweights&quot; has already been
</span><br>
<span class="quotelev1">&gt; declared in the current scope
</span><br>
<span class="quotelev1">&gt;       OMPI_ARRAY_NAME_DECL(destweights);
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compilation aborted for pdist_graph_create_adjacent_f.c (code 2)
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pdist_graph_create_adjacent_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/opt/openmpi-1.8.1/ompi/mpi/fortran/mpif-h/profile'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/opt/openmpi-1.8.1/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/opt/openmpi-1.8.1/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [/qoute]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no idea of what is happening. Would anyone please help me to solve
</span><br>
<span class="quotelev1">&gt; the problem if it is possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24547.php">Timur Ismagilov: "[OMPI users] spml_ikrit_np random values"</a>
<li><strong>Previous message:</strong> <a href="24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>In reply to:</strong> <a href="24543.php">Alan Sang Loon: "[OMPI users] OpenMPI Compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Reply:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
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
