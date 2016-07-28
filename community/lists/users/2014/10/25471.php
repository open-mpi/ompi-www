<?
$subject_val = "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 21:02:38 2014" -->
<!-- isoreceived="20141007010238" -->
<!-- sent="Mon, 6 Oct 2014 18:02:36 -0700" -->
<!-- isosent="20141007010236" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Update/patch to check/opal_check_pmi.m4" -->
<!-- id="CAMD57od4Se-zS_sOs1HnrFiSv+XSQxgTTZAU04hkoR3OwnUWkA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9ACCAE1B-EE0A-45B9-9517-AD100C366575_at_colorado.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-06 21:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>In reply to:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25474.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Reply:</strong> <a href="25474.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've looked at your patch, and it isn't quite right as it only looks for
<br>
libpmi and not libpmi2. We need to look for each of them as we could have
<br>
either or both.
<br>
<p>I'll poke a bit at this tonight and see if I can make this a little simpler
<br>
- the nesting is getting a little deep.
<br>
<p><p>On Mon, Oct 6, 2014 at 5:33 PM, Timothy Brown &lt;Timothy.Brown-1_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I know. Sorry I might not have articulated myself fully earlier.
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
<span class="quotelev1">&gt;                          opal_pmi_rpath=&quot;$with_pmi/lib&#226;&#128;&#157;])
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
<span class="quotelev1">&gt; libpmi.a   libpmi.so.0      libslurmdb.a   libslurmdb.so.27
</span><br>
<span class="quotelev1">&gt; libslurm.so         slurm
</span><br>
<span class="quotelev1">&gt; libpmi.la  libpmi.so.0.0.0  libslurmdb.la  libslurmdb.so.27.0.0
</span><br>
<span class="quotelev1">&gt; libslurm.so.27
</span><br>
<span class="quotelev1">&gt; libpmi.so  libslurm.a       libslurmdb.so  libslurm.la
</span><br>
<span class="quotelev1">&gt;  libslurm.so.27.0.0
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
<span class="quotelev1">&gt; You do bring up an interesting point, I didn&#226;&#128;&#153;t think of. If it is checking
</span><br>
<span class="quotelev1">&gt; for libpmi2.so, that can be accounted for by adding another 2 test and
</span><br>
<span class="quotelev1">&gt; run-if-true results to the AS_IF macro. If you deem my patch worthwhile, I
</span><br>
<span class="quotelev1">&gt; am happy to modify it to meet this criteria.
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
<span class="quotelev2">&gt; &gt; We only link in libpmi(2).so if specifically requested to do so via
</span><br>
<span class="quotelev1">&gt; &quot;--with-pmi&quot; configure flag. It is not automatic.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Oct 6, 2014 at 3:28 PM, Timothy Brown &lt;
</span><br>
<span class="quotelev1">&gt; Timothy.Brown-1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I&#226;&#128;&#153;m not too sure if this is the right list, or if I should be posting to
</span><br>
<span class="quotelev1">&gt; the dev list. Please let me know if I&#226;&#128;&#153;m in the wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We use SLURM (14.03.7) and have been trying to get OpenMPI (1.8.3) to
</span><br>
<span class="quotelev1">&gt; work with `srun`. It seems that the M4 file to check for PMI doesn&#226;&#128;&#153;t work
</span><br>
<span class="quotelev1">&gt; in our situation. Where we have both a lib64 and lib directory within
</span><br>
<span class="quotelev1">&gt; SLURM. The lib64 directory only contains perl modules, while the lib
</span><br>
<span class="quotelev1">&gt; directory contains the PMI library.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; By changing the M4 AS_IF macro in config/opal_check_pmi.m4 to check for
</span><br>
<span class="quotelev1">&gt; the library .so and to have an else if test. The configuration script finds
</span><br>
<span class="quotelev1">&gt; the library. Which means OpenMPI builds with PMI support and now we have
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
<span class="quotelev2">&gt; &gt; I have created a patch against the git master and it&#226;&#128;&#153;s attached.
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25467.php">http://www.open-mpi.org/community/lists/users/2014/10/25467.php</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25469.php">http://www.open-mpi.org/community/lists/users/2014/10/25469.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25470.php">http://www.open-mpi.org/community/lists/users/2014/10/25470.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25471/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25472.php">Howard Pritchard: "Re: [OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>In reply to:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25474.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Reply:</strong> <a href="25474.php">Ralph Castain: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
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
