<?
$subject_val = "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 04:56:54 2009" -->
<!-- isoreceived="20090331085654" -->
<!-- sent="Tue, 31 Mar 2009 10:56:50 +0200" -->
<!-- isosent="20090331085650" -->
<!-- name="Alessandro Surace" -->
<!-- email="zioalex_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init" -->
<!-- id="adbbb9af0903310156i27357f51qb7f924f257f45892_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init<br>
<strong>From:</strong> Alessandro Surace (<em>zioalex_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 04:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8669.php">Jerome BENOIT: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Maybe in reply to:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Yes I've installed LSF and the liblsf and libbat are found by the configure
<br>
how you can see in the previous attach and here:
<br>
/opt/lsf/7.0/linux2.6-glibc2.3-x86/lib
<br>
-rw-r--r-- 1 root 10007 1771182 Sep 24  2008 libbat.a
<br>
-rw-r--r-- 1 root 10007   31278 Nov 23  2007 libbat.jsdl.a
<br>
-rwxr-xr-x 1 root 10007 1451966 Sep 24  2008 libbat.so
<br>
-rw-r--r-- 1 root 10007 1505724 Sep 24  2008 liblsf.a
<br>
-rwxr-xr-x 1 root 10007 1131736 Sep 24  2008 liblsf.so
<br>
<p>At the moment my preliminary test is to run the job only on one
<br>
host...Therefore the version is the same...
<br>
I think that the lsb_init is included:
<br>
[root_at_grid01 lib]# strings libbat.* |grep lsb_init
<br>
lsb_init
<br>
sch_lsb_init
<br>
lsb_init()
<br>
lsb_init
<br>
sch_lsb_init
<br>
sch_lsb_init
<br>
sch_lsb_init
<br>
sch_lsb_init
<br>
lsb_init()
<br>
sch_lsb_init
<br>
<p>Bye
<br>
Alex
<br>
<p><span class="quotelev1">&gt;Do you have the LSF support libraries installed on all nodes?  Are
</span><br>
<span class="quotelev1">&gt;they all the same version?  Do they include the lsb_init symbol?  If
</span><br>
<span class="quotelev1">&gt;memory serves, the name of the library is simply &quot;liblsf&quot; or
</span><br>
<span class="quotelev1">&gt;&quot;libbat&quot; (.a or .so; I don't know which).
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8669.php">Jerome BENOIT: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Maybe in reply to:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
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
