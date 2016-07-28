<?
$subject_val = "Re: [OMPI users] static, standalone mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 14:43:50 2012" -->
<!-- isoreceived="20120924184350" -->
<!-- sent="Mon, 24 Sep 2012 11:43:42 -0700" -->
<!-- isosent="20120924184342" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] static, standalone mpirun" -->
<!-- id="DB3026C2-844D-4F8C-9F0F-FDF065DE9E47_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2E47DDD62F84E4CAF40AFFA65C0843C016B4CA5F2BB_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] static, standalone mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 14:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20281.php">Liu, Hanzhong: "[OMPI users] openmpi failed the hello world test"</a>
<li><strong>Previous message:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>In reply to:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20310.php">Jeff Squyres: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not entirely sure I'd call it a bug just yet, but attached is a patch you can use that should help your situation. The 1.6 release manager is out-of-country this week, so I haven't heard back yet as to whether or not he wants this change in the official release.
<br>
<p>Ralph
<br>
<p>

<br><p>
<p><p>On Sep 24, 2012, at 11:26 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I should have been clearer - I was asking if the path in the error message was indeed OPAL_PREFIX/etc/.... I gather from your message that it is not. At the moment, it appears to be set to the install location, and probably isn't looking at OPAL_PREFIX. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, the path in error message is $OPAL_PREFIX/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what else  shall I check to help to fix this bug please ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.mpirun -v -np 1  ./dirac.x
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;    /home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sparc:09036] [[3051,0],0] ORTE_ERROR_LOG: Not found in file base/ras_base_allocate.c at line 200
</span><br>
<span class="quotelev1">&gt; [sparc:09036] [[3051,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev1">&gt; [sparc:09036] [[3051,0],0] ORTE_ERROR_LOG: Not found in file plm_rsh_module.c at line 1167
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.echo $OPAL_PREFIX
</span><br>
<span class="quotelev1">&gt; /home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.echo $PATH
</span><br>
<span class="quotelev1">&gt; /home/ilias/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC:/home/ilias/bin:/usr/local/bin:/usr/bin:/bin:/usr/games:/home/ilias/bin:.
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.ldd mpirun
</span><br>
<span class="quotelev1">&gt;        not a dynamic executable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/work/dirac/build_Intel_OpenMPI_MKL_ILP64_STATIC/.ls -l share/openmpi/
</span><br>
<span class="quotelev1">&gt; total 336K
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x 2 ilias ilias 4.0K 2012-09-22 22:08 amca-param-sets/
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 ilias ilias  618 2012-09-22 22:08 help-coll-sync.txt
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
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
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20280/prefix.diff">prefix.diff</a>
</ul>
<!-- attachment="prefix.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20281.php">Liu, Hanzhong: "[OMPI users] openmpi failed the hello world test"</a>
<li><strong>Previous message:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>In reply to:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20310.php">Jeff Squyres: "Re: [OMPI users] static, standalone mpirun"</a>
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
