<?
$subject_val = "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 20:33:23 2014" -->
<!-- isoreceived="20141007003323" -->
<!-- sent="Mon, 6 Oct 2014 18:33:21 -0600" -->
<!-- isosent="20141007003321" -->
<!-- name="Timothy Brown" -->
<!-- email="Timothy.Brown-1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Update/patch to check/opal_check_pmi.m4" -->
<!-- id="9ACCAE1B-EE0A-45B9-9517-AD100C366575_at_colorado.edu" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAG4F6z8_N-yiRt0ZaW_QkwSem1y1MNTEL_QWgJTweeUB56wT0g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Update/patch to check/opal_check_pmi.m4<br>
<strong>From:</strong> Timothy Brown (<em>Timothy.Brown-1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-06 20:33:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25471.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>In reply to:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25471.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Reply:</strong> <a href="25471.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I know. Sorry I might not have articulated myself fully earlier.
<br>
<p>Currently if I run configure as:
<br>
<p>$ ./configure --prefix=/curc/tools/x_86_64/rh6/openmpi/1.8.3/intel/13.0.0 \
<br>
&nbsp;&nbsp;--with-threads=posix --enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-pmi=/curc/slurm/slurm/current/ --with-slurm
<br>
<p>I get the following error:
<br>
<p>--- MCA component common:pmi (m4 configuration macro)
<br>
checking for MCA component common:pmi compile mode... dso
<br>
checking if user requested PMI support... yes
<br>
checking if PMI or PMI2 headers installed... Slurm PMI headers found
<br>
checking for PMI2_Init in -lpmi2... no
<br>
checking for PMI2_Init in -lpmi... no
<br>
checking for PMI_Init in -lpmi... no
<br>
checking PMI2 and/or PMI support enabled... no
<br>
configure: WARNING: PMI support requested (via --with-pmi) but not found.
<br>
configure: error: Aborting.
<br>
<p>As the test in config/opal_check_pmi.m4 contains:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AS_IF([test -d &quot;$with_pmi/lib64&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[opal_check_pmi_$1_LDFLAGS=&quot;-L$with_pmi/lib64&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_pmi_rpath=&quot;$with_pmi/lib64&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[opal_check_pmi_$1_LDFLAGS=&quot;-L$with_pmi/lib&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_pmi_rpath=&quot;$with_pmi/lib&#148;])
<br>
<p>And in our SLURM installation directory:
<br>
<p>$ ls /curc/slurm/slurm/current/lib64/
<br>
perl5
<br>
$ ls /curc/slurm/slurm/current/lib/
<br>
libpmi.a   libpmi.so.0      libslurmdb.a   libslurmdb.so.27      libslurm.so         slurm
<br>
libpmi.la  libpmi.so.0.0.0  libslurmdb.la  libslurmdb.so.27.0.0  libslurm.so.27
<br>
libpmi.so  libslurm.a       libslurmdb.so  libslurm.la           libslurm.so.27.0.0
<br>
<p>So the patch I am providing checks for the actual libpmi.so file, by
<br>
1) replacing the test -d with a test -f 
<br>
2) appending the file we are looking for (libpmi.so)
<br>
<p>You do bring up an interesting point, I didn&#146;t think of. If it is checking for libpmi2.so, that can be accounted for by adding another 2 test and run-if-true results to the AS_IF macro. If you deem my patch worthwhile, I am happy to modify it to meet this criteria.
<br>
<p>Regards
<br>
Timothy
<br>
<p><p>On Oct 6, 2014, at 6:07 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We only link in libpmi(2).so if specifically requested to do so via &quot;--with-pmi&quot; configure flag. It is not automatic. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 6, 2014 at 3:28 PM, Timothy Brown &lt;Timothy.Brown-1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m not too sure if this is the right list, or if I should be posting to the dev list. Please let me know if I&#146;m in the wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use SLURM (14.03.7) and have been trying to get OpenMPI (1.8.3) to work with `srun`. It seems that the M4 file to check for PMI doesn&#146;t work in our situation. Where we have both a lib64 and lib directory within SLURM. The lib64 directory only contains perl modules, while the lib directory contains the PMI library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By changing the M4 AS_IF macro in config/opal_check_pmi.m4 to check for the library .so and to have an else if test. The configuration script finds the library. Which means OpenMPI builds with PMI support and now we have
</span><br>
<span class="quotelev1">&gt; - srun
</span><br>
<span class="quotelev1">&gt; - mpirun
</span><br>
<span class="quotelev1">&gt; - mpiexec
</span><br>
<span class="quotelev1">&gt; all working properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have created a patch against the git master and it&#146;s attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Timothy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25467.php">http://www.open-mpi.org/community/lists/users/2014/10/25467.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25469.php">http://www.open-mpi.org/community/lists/users/2014/10/25469.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25471.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>In reply to:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25471.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Reply:</strong> <a href="25471.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
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
