<?
$subject_val = "[OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 03:38:29 2012" -->
<!-- isoreceived="20121212083829" -->
<!-- sent="Wed, 12 Dec 2012 19:38:25 +1100" -->
<!-- isosent="20121212083825" -->
<!-- name="Ifeanyi" -->
<!-- email="ifeanyeg2012_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr" -->
<!-- id="CAMxrTy9B8xvD8pzTsxY_GdqgeUsznjTpXH5ufBcMhQ+Yzdxh+A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr<br>
<strong>From:</strong> Ifeanyi (<em>ifeanyeg2012_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 03:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20921.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20919.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>Reply:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am having trouble building openmpi-1.7rc5 with ../configure --with-ft=cr
<br>
<p>openmpi-1.7rc5# ./configure --with-ft=cr
<br>
openmpi-1.7rc5# make all install
<br>
<p>error message:
<br>
base/errmgr_base_fns.c:565:13: warning: ignoring return value of
<br>
'asprintf', declared with attribute warn_unused_result [-Wunused-result]
<br>
base/errmgr_base_fns.c: In function 'orte_errmgr_base_migrate_state_str':
<br>
base/errmgr_base_fns.c:384:17: warning: ignoring return value of
<br>
'asprintf', declared with attribute warn_unused_result [-Wunused-result]
<br>
base/errmgr_base_fns.c: In function 'orte_errmgr_base_abort':
<br>
base/errmgr_base_fns.c:244:18: warning: ignoring return value of
<br>
'vasprintf', declared with attribute warn_unused_result [-Wunused-result]
<br>
make[2]: *** [base/errmgr_base_fns.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/abolap/Downloads/openmpi-1.7rc5/orte/mca/errmgr'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/abolap/Downloads/openmpi-1.7rc5/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>It install successfully when fault tolerance is not enabled on the build.
<br>
<p>Pls help.
<br>
<p>Regards - Ifeanyi
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20921.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20919.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>Reply:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
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
