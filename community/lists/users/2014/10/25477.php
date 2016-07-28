<?
$subject_val = "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 12:11:37 2014" -->
<!-- isoreceived="20141007161137" -->
<!-- sent="Tue, 7 Oct 2014 10:11:35 -0600" -->
<!-- isosent="20141007161135" -->
<!-- name="Timothy Brown" -->
<!-- email="Timothy.Brown-1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Update/patch to check/opal_check_pmi.m4" -->
<!-- id="DFD2DA1D-1F3D-46FE-8151-C811185068D0_at_colorado.edu" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAMD57of-SKrNTFbFu8F8jLYWvE_X7ve_hYXnE1DPs19_RAfpJg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-10-07 12:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25478.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25476.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25474.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Thanks for the patch. It cleaned up the pmi check nicely.
<br>
<p>Applied, configured and compiled without any problems! Great!
<br>
<p>The configure gave me:
<br>
--- MCA component pubsub:pmi (m4 configuration macro)
<br>
checking for MCA component pubsub:pmi compile mode... dso
<br>
checking if user requested PMI support... yes
<br>
checking if PMI installed... yes
<br>
checking final added libraries... -lpmi
<br>
checking if MCA component pubsub:pmi can compile&#133;yes
<br>
<p>Regards
<br>
Timothy
<br>
<p><p>On Oct 7, 2014, at 9:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've poked at this a bit and think I have all the combinations covered - can you try the attached patch? I don't have a way to test it right now, so I don't want to put it in the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 6, 2014 at 6:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I've looked at your patch, and it isn't quite right as it only looks for libpmi and not libpmi2. We need to look for each of them as we could have either or both.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll poke a bit at this tonight and see if I can make this a little simpler - the nesting is getting a little deep.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 6, 2014 at 5:33 PM, Timothy Brown &lt;Timothy.Brown-1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes, I know. Sorry I might not have articulated myself fully earlier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently if I run configure as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/curc/tools/x_86_64/rh6/openmpi/1.8.3/intel/13.0.0 \
</span><br>
<span class="quotelev1">&gt;   --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;   --with-pmi=/curc/slurm/slurm/current/ --with-slurm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component common:pmi (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component common:pmi compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking if user requested PMI support... yes
</span><br>
<span class="quotelev1">&gt; checking if PMI or PMI2 headers installed... Slurm PMI headers found
</span><br>
<span class="quotelev1">&gt; checking for PMI2_Init in -lpmi2... no
</span><br>
<span class="quotelev1">&gt; checking for PMI2_Init in -lpmi... no
</span><br>
<span class="quotelev1">&gt; checking for PMI_Init in -lpmi... no
</span><br>
<span class="quotelev1">&gt; checking PMI2 and/or PMI support enabled... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: PMI support requested (via --with-pmi) but not found.
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As the test in config/opal_check_pmi.m4 contains:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             [AS_IF([test -d &quot;$with_pmi/lib64&quot;],
</span><br>
<span class="quotelev1">&gt;                         [opal_check_pmi_$1_LDFLAGS=&quot;-L$with_pmi/lib64&quot;
</span><br>
<span class="quotelev1">&gt;                          opal_pmi_rpath=&quot;$with_pmi/lib64&quot;],
</span><br>
<span class="quotelev1">&gt;                         [opal_check_pmi_$1_LDFLAGS=&quot;-L$with_pmi/lib&quot;
</span><br>
<span class="quotelev1">&gt;                          opal_pmi_rpath=&quot;$with_pmi/lib&#148;])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And in our SLURM installation directory:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ls /curc/slurm/slurm/current/lib64/
</span><br>
<span class="quotelev1">&gt; perl5
</span><br>
<span class="quotelev1">&gt; $ ls /curc/slurm/slurm/current/lib/
</span><br>
<span class="quotelev1">&gt; libpmi.a   libpmi.so.0      libslurmdb.a   libslurmdb.so.27      libslurm.so         slurm
</span><br>
<span class="quotelev1">&gt; libpmi.la  libpmi.so.0.0.0  libslurmdb.la  libslurmdb.so.27.0.0  libslurm.so.27
</span><br>
<span class="quotelev1">&gt; libpmi.so  libslurm.a       libslurmdb.so  libslurm.la           libslurm.so.27.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the patch I am providing checks for the actual libpmi.so file, by
</span><br>
<span class="quotelev1">&gt; 1) replacing the test -d with a test -f
</span><br>
<span class="quotelev1">&gt; 2) appending the file we are looking for (libpmi.so)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You do bring up an interesting point, I didn&#146;t think of. If it is checking for libpmi2.so, that can be accounted for by adding another 2 test and run-if-true results to the AS_IF macro. If you deem my patch worthwhile, I am happy to modify it to meet this criteria.
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
<span class="quotelev1">&gt; On Oct 6, 2014, at 6:07 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We only link in libpmi(2).so if specifically requested to do so via &quot;--with-pmi&quot; configure flag. It is not automatic.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Oct 6, 2014 at 3:28 PM, Timothy Brown &lt;Timothy.Brown-1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I&#146;m not too sure if this is the right list, or if I should be posting to the dev list. Please let me know if I&#146;m in the wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We use SLURM (14.03.7) and have been trying to get OpenMPI (1.8.3) to work with `srun`. It seems that the M4 file to check for PMI doesn&#146;t work in our situation. Where we have both a lib64 and lib directory within SLURM. The lib64 directory only contains perl modules, while the lib directory contains the PMI library.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; By changing the M4 AS_IF macro in config/opal_check_pmi.m4 to check for the library .so and to have an else if test. The configuration script finds the library. Which means OpenMPI builds with PMI support and now we have
</span><br>
<span class="quotelev2">&gt; &gt; - srun
</span><br>
<span class="quotelev2">&gt; &gt; - mpirun
</span><br>
<span class="quotelev2">&gt; &gt; - mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; all working properly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have created a patch against the git master and it&#146;s attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Timothy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25467.php">http://www.open-mpi.org/community/lists/users/2014/10/25467.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25469.php">http://www.open-mpi.org/community/lists/users/2014/10/25469.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25470.php">http://www.open-mpi.org/community/lists/users/2014/10/25470.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;pmi-patch.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25474.php">http://www.open-mpi.org/community/lists/users/2014/10/25474.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25478.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25476.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25474.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
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
