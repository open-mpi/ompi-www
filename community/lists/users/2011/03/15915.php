<?
$subject_val = "[OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 19 20:05:27 2011" -->
<!-- isoreceived="20110320000527" -->
<!-- sent="Sun, 20 Mar 2011 01:05:15 +0100" -->
<!-- isosent="20110320000515" -->
<!-- name="Tru Huynh" -->
<!-- email="tru_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)" -->
<!-- id="20110320000513.GA30192_at_sillage.bis.pasteur.fr" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)<br>
<strong>From:</strong> Tru Huynh (<em>tru_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-19 20:05:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15914.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16066.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16066.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>OpenMPI 1.5.3 compiled with the Intel 12 series is failing on my
<br>
CentOS-5.5 x86_64 machine.
<br>
<p>Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.0 Build 20110112
<br>
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
<br>
<p>./configure --prefix=/c5/shared/openmpi/1.5.3/sge/6.2u4/intel/12.2011.2.137 --with-sge CC=icc FC=ifort CXX=icpc
<br>
make 
<br>
make check &gt; make.check 2&gt;&amp;1
<br>
<p>/bin/sh: line 5: 21493 Segmentation fault      ${dir}$tst
<br>
FAIL: opal_datatype_test
<br>
...
<br>
========================================================
<br>
1 of 5 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p>gzipped file attached along with the config.log file
<br>
<p>no issue on the same machine with the Intel 11.1.075 or 10.1.025.
<br>
<p>Cheers.
<br>
<p>Tru
<br>
<pre>
-- 
Dr Tru Huynh          | <a href="http://www.pasteur.fr/recherche/unites/Binfs/">http://www.pasteur.fr/recherche/unites/Binfs/</a>
mailto:tru_at_[hidden] | tel/fax +33 1 45 68 87 37/19
Institut Pasteur, 25-28 rue du Docteur Roux, 75724 Paris CEDEX 15 France  


</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15915/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15915/make.check.gz">make.check.gz</a>
</ul>
<!-- attachment="make.check.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15914.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16066.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16066.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
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
