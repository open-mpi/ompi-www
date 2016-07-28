<?
$subject_val = "Re: [OMPI users] OpenMPI Compilation Error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 13:12:25 2014" -->
<!-- isoreceived="20140605171225" -->
<!-- sent="Thu, 5 Jun 2014 12:12:21 -0500" -->
<!-- isosent="20140605171221" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Compilation Error" -->
<!-- id="CAMJJpkVc=fDRVp2iEKjJS7uyMD-4yL78jCkQx_BMjN64VLYQOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5A93BE3F-A4EA-44D6-AD84-C3B77B7FEDBA_at_cisco.com" -->
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
<strong>Date:</strong> 2014-06-05 13:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24553.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24551.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
<li><strong>In reply to:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A fix has been pushed in the trunk (r31955). Once reviewed it will
<br>
make it to the next release 1.8.2.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Jun 5, 2014 at 11:29 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; George and I are together at the MPI Forum this week -- we just looked at this in more detail; it looks like this is a more pervasive problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let us look at this a bit more...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2014, at 10:37 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we forgot to cleanup after a merge and as a result we have
</span><br>
<span class="quotelev2">&gt;&gt; c_destweights and c_sourceweights defined twice. Please try the
</span><br>
<span class="quotelev2">&gt;&gt; following patch and let us know if this fixes your issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mpi/fortran/mpif-h/dist_graph_create_adjacent_f.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mpi/fortran/mpif-h/dist_graph_create_adjacent_f.c (revision 31954)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mpi/fortran/mpif-h/dist_graph_create_adjacent_f.c (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -72,8 +72,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Info c_info;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm c_comm_old, c_comm_graph;
</span><br>
<span class="quotelev2">&gt;&gt; -    const int *c_destweights, *c_sourceweights;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;     OMPI_ARRAY_NAME_DECL(sources);
</span><br>
<span class="quotelev2">&gt;&gt;     OMPI_ARRAY_NAME_DECL(sourceweights);
</span><br>
<span class="quotelev2">&gt;&gt;     OMPI_ARRAY_NAME_DECL(destinations);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jun 5, 2014 at 12:34 AM, Alan Sang Loon &lt;alan988_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have downloaded OpenMPI-1.8.1 and compiled it using Intel Compilers (Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Composer XE Suites 2013) and the command used is as follow:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Code]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/opt/openmpi-1.8.1 CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [/code]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything works just fine except I realized that the MPI library was built
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for 32-bit integers (fort integer size=4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then I reconfigured it using this command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Code]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/opt/openmpi-1.8.1 CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAGS=-i8 FCFLAGS=-i8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [/code]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I tried to compile it using the make all install command, some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors appeared at the end of the compilation which is described as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; followed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [qoute]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       pdist_graph_create_adjacent_f.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pdist_graph_create_adjacent_f.c(79): error: &quot;c_sourceweights&quot; has already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been declared in the current scope
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_ARRAY_NAME_DECL(sourceweights);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pdist_graph_create_adjacent_f.c(81): error: &quot;c_destweights&quot; has already been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declared in the current scope
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OMPI_ARRAY_NAME_DECL(destweights);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation aborted for pdist_graph_create_adjacent_f.c (code 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [pdist_graph_create_adjacent_f.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/opt/openmpi-1.8.1/ompi/mpi/fortran/mpif-h/profile'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/opt/openmpi-1.8.1/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/opt/openmpi-1.8.1/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [/qoute]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no idea of what is happening. Would anyone please help me to solve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem if it is possible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="24553.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24551.php">Mike Dubman: "Re: [OMPI users] spml_ikrit_np random values"</a>
<li><strong>In reply to:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
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
