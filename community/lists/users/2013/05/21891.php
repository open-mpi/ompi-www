<?
$subject_val = "Re: [OMPI users] mpirun error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 14:01:10 2013" -->
<!-- isoreceived="20130509180110" -->
<!-- sent="Thu, 9 May 2013 17:59:37 +0000" -->
<!-- isosent="20130509175937" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7327E3E9B_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="518BDC0F.4040507_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-09 13:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21892.php">Matteo Parsani: "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<li><strong>Previous message:</strong> <a href="21890.php">Gus Correa: "Re: [OMPI users] mpirun error"</a>
<li><strong>In reply to:</strong> <a href="21890.php">Gus Correa: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; It looks like your PATH is pointing to the Intel MPI mpirun,
</span><br>
<span class="quotelev1">&gt; not to the Open MPI mpirun/mpiexec.
</span><br>
[Tom] 
<br>
Just to expand a little on this, it looks like your path is pointing to the Intel MPI run-time version (mpirt) that is included with the Intel Compiler and it's PATH/LD_LIBRARY_PATH is set up by compilervars.[c]sh.
<br>
A common way to set up OpenMPI variables, is by using OFED is mpi-selector.
<br>
<p>The combination of the above two runs into this problem:
<br>
<span class="quotelev3">&gt; &gt;&gt; /opt/intel/composer_xe_2013.1.117/mpirt/bin/intel64/mpirun:  
</span><br>
is in the PATH before Open MPI's mpirun.
<br>
<p>&nbsp;
<br>
<span class="quotelev1">&gt; Check the OpenMPI FAQ:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
[Tom] 
<br>
Good FAQ.  One solution it points to is the use of the --prefix option, or
<br>
&quot;note that specifying the absolute pathname to mpirun is equivalent to using the --prefix argument. For example, the following is equivalent to the above command line that uses --prefix: 
<br>
<p>shell$ /opt/openmpi-1.6.4/bin/mpirun -np 4 a.out&quot;
<br>
<p>Another method is to use  OpenMPI's mpivars.sh or set the  OpenMPI parts of your PATH/LD_LIBRARY_PATH in your shell's startup file AFTER you use the Intel Compiler's  compilervars.sh.
<br>
<p>-Tom
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21892.php">Matteo Parsani: "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<li><strong>Previous message:</strong> <a href="21890.php">Gus Correa: "Re: [OMPI users] mpirun error"</a>
<li><strong>In reply to:</strong> <a href="21890.php">Gus Correa: "Re: [OMPI users] mpirun error"</a>
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
