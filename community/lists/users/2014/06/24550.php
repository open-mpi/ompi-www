<?
$subject_val = "Re: [OMPI users] OpenMPI Compilation Error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 12:29:50 2014" -->
<!-- isoreceived="20140605162950" -->
<!-- sent="Thu, 5 Jun 2014 16:29:48 +0000" -->
<!-- isosent="20140605162948" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Compilation Error" -->
<!-- id="5A93BE3F-A4EA-44D6-AD84-C3B77B7FEDBA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVJC_8ToiOpqwLe_hm5ukJd+6WWrg7Xe4-7gkUVscFwsg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 12:29:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24551.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
<li><strong>Previous message:</strong> <a href="24549.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="24546.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24552.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Reply:</strong> <a href="24552.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George and I are together at the MPI Forum this week -- we just looked at this in more detail; it looks like this is a more pervasive problem.
<br>
<p>Let us look at this a bit more...
<br>
<p><p>On Jun 5, 2014, at 10:37 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Alan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we forgot to cleanup after a merge and as a result we have
</span><br>
<span class="quotelev1">&gt; c_destweights and c_sourceweights defined twice. Please try the
</span><br>
<span class="quotelev1">&gt; following patch and let us know if this fixes your issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: ompi/mpi/fortran/mpif-h/dist_graph_create_adjacent_f.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mpi/fortran/mpif-h/dist_graph_create_adjacent_f.c (revision 31954)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mpi/fortran/mpif-h/dist_graph_create_adjacent_f.c (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -72,8 +72,6 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Info c_info;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm c_comm_old, c_comm_graph;
</span><br>
<span class="quotelev1">&gt; -    const int *c_destweights, *c_sourceweights;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     OMPI_ARRAY_NAME_DECL(sources);
</span><br>
<span class="quotelev1">&gt;     OMPI_ARRAY_NAME_DECL(sourceweights);
</span><br>
<span class="quotelev1">&gt;     OMPI_ARRAY_NAME_DECL(destinations);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 5, 2014 at 12:34 AM, Alan Sang Loon &lt;alan988_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have downloaded OpenMPI-1.8.1 and compiled it using Intel Compilers (Intel
</span><br>
<span class="quotelev2">&gt;&gt; Composer XE Suites 2013) and the command used is as follow:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [Code]
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi-1.8.1 CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt; make all install
</span><br>
<span class="quotelev2">&gt;&gt; [/code]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Everything works just fine except I realized that the MPI library was built
</span><br>
<span class="quotelev2">&gt;&gt; for 32-bit integers (fort integer size=4)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then I reconfigured it using this command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [Code]
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi-1.8.1 CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS=-i8 FCFLAGS=-i8
</span><br>
<span class="quotelev2">&gt;&gt; [/code]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, when I tried to compile it using the make all install command, some
</span><br>
<span class="quotelev2">&gt;&gt; errors appeared at the end of the compilation which is described as
</span><br>
<span class="quotelev2">&gt;&gt; followed:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [qoute]
</span><br>
<span class="quotelev2">&gt;&gt; ... ...
</span><br>
<span class="quotelev2">&gt;&gt;  CC       pdist_graph_create_adjacent_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; pdist_graph_create_adjacent_f.c(79): error: &quot;c_sourceweights&quot; has already
</span><br>
<span class="quotelev2">&gt;&gt; been declared in the current scope
</span><br>
<span class="quotelev2">&gt;&gt;      OMPI_ARRAY_NAME_DECL(sourceweights);
</span><br>
<span class="quotelev2">&gt;&gt;      ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pdist_graph_create_adjacent_f.c(81): error: &quot;c_destweights&quot; has already been
</span><br>
<span class="quotelev2">&gt;&gt; declared in the current scope
</span><br>
<span class="quotelev2">&gt;&gt;      OMPI_ARRAY_NAME_DECL(destweights);
</span><br>
<span class="quotelev2">&gt;&gt;      ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; compilation aborted for pdist_graph_create_adjacent_f.c (code 2)
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [pdist_graph_create_adjacent_f.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/opt/openmpi-1.8.1/ompi/mpi/fortran/mpif-h/profile'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/openmpi-1.8.1/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/opt/openmpi-1.8.1/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; [/qoute]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have no idea of what is happening. Would anyone please help me to solve
</span><br>
<span class="quotelev2">&gt;&gt; the problem if it is possible?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="24551.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
<li><strong>Previous message:</strong> <a href="24549.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="24546.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24552.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Reply:</strong> <a href="24552.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
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
