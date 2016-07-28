<?
$subject_val = "Re: [OMPI users] help understand unhelpful ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 19:17:49 2015" -->
<!-- isoreceived="20151120001749" -->
<!-- sent="Thu, 19 Nov 2015 17:17:45 -0700" -->
<!-- isosent="20151120001745" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help understand unhelpful ORTE error message" -->
<!-- id="CAF1Cqj6fo_Uk3CO072aL+YGKqyBq37jwYepUJbSnATSTSnn7mg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj67BG7cR_NQgrEyrgW0tzN_YaUsgWJ5g5oyccY9LXYvgQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] help understand unhelpful ORTE error message<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 19:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28075.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28075.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I finally got an allocation on cori - its one busy machine.
<br>
<p>Anyway, using the ompi i'd built on edison with the above recommended
<br>
configure options
<br>
I was able to run using either srun or mpirun on cori provided that in the
<br>
later case I used
<br>
<p>mpirun -np X -N Y --mca plm slurm ./my_favorite_app
<br>
<p>I will make an adjustment to the alps plm launcher to disqualify itself if
<br>
the wlm_detect
<br>
facility on the cray reports that srun is the launcher.  That's a minor fix
<br>
and should make
<br>
it in to v2.x in a week or so.  It will be a runtime selection so you only
<br>
have to build ompi
<br>
once for use either on edison or cori.
<br>
<p>Howard
<br>
<p><p>2015-11-19 17:11 GMT-07:00 Howard Pritchard &lt;hppritcha_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi Jeff H.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why don't you just try configuring with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=my_favorite_install_dir
</span><br>
<span class="quotelev1">&gt; --with-libfabric=install_dir_for_libfabric
</span><br>
<span class="quotelev1">&gt; make -j 8 install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and see what happens?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure before you configure that you have PrgEnv-gnu or PrgEnv-intel
</span><br>
<span class="quotelev1">&gt; module loaded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those were the configure/compiler options I used to do testing of ofi mtl
</span><br>
<span class="quotelev1">&gt; on cori.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff S. - this thread has gotten intermingled with mpich setup as well,
</span><br>
<span class="quotelev1">&gt; hence
</span><br>
<span class="quotelev1">&gt; the suggestion for the mpich shm mechanism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-11-19 16:59 GMT-07:00 Jeff Hammond &lt;jeff.science_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How did you configure for Cori?  You need to be using the slurm plm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component for that system.  I know this sounds like gibberish.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../configure --with-libfabric=$HOME/OFI/install-ofi-gcc-gni-cori \
</span><br>
<span class="quotelev2">&gt;&gt;              --enable-mca-static=mtl-ofi \
</span><br>
<span class="quotelev2">&gt;&gt;              --enable-mca-no-build=btl-openib,btl-vader,btl-ugni,btl-tcp \
</span><br>
<span class="quotelev2">&gt;&gt;              --enable-static --disable-shared --disable-dlopen \
</span><br>
<span class="quotelev2">&gt;&gt;              --prefix=$HOME/MPI/install-ompi-ofi-gcc-gni-xpmem-cori \
</span><br>
<span class="quotelev2">&gt;&gt;              --with-cray-pmi --with-alps --with-cray-xpmem --with-slurm \
</span><br>
<span class="quotelev2">&gt;&gt;              --without-verbs --without-fca --without-mxm --without-ucx \
</span><br>
<span class="quotelev2">&gt;&gt;              --without-portals4 --without-psm --without-psm2 \
</span><br>
<span class="quotelev2">&gt;&gt;              --without-udreg --without-ugni --without-munge \
</span><br>
<span class="quotelev2">&gt;&gt;              --without-sge --without-loadleveler --without-tm --without-lsf \
</span><br>
<span class="quotelev2">&gt;&gt;              --without-pvfs2 --without-plfs \
</span><br>
<span class="quotelev2">&gt;&gt;              --without-cuda --disable-oshmem \
</span><br>
<span class="quotelev2">&gt;&gt;              --disable-mpi-fortran --disable-oshmem-fortran \
</span><br>
<span class="quotelev2">&gt;&gt;              LDFLAGS=&quot;-L/opt/cray/ugni/default/lib64 -lugni \                      -L/opt/cray/alps/default/lib64 -lalps -lalpslli -lalpsutil \                      -ldl -lrt&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is copied from
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/jeffhammond/HPCInfo/blob/master/ofi/README.md#open-mpi">https://github.com/jeffhammond/HPCInfo/blob/master/ofi/README.md#open-mpi</a>,
</span><br>
<span class="quotelev2">&gt;&gt; which I note in case you want to see what changes I've made at any point in
</span><br>
<span class="quotelev2">&gt;&gt; the future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There should be a with-slurm configure option to pick up this component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed there is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doesn't mpich have the option to use sysv memory?  You may want to try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPICH?  Look, I may have earned my way onto Santa's naughty list more
</span><br>
<span class="quotelev2">&gt;&gt; than a few times, but at least I have the decency not to post MPICH
</span><br>
<span class="quotelev2">&gt;&gt; questions to the Open-MPI list ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If there is a way to tell Open-MPI to use shm_open without filesystem
</span><br>
<span class="quotelev2">&gt;&gt; backing (if that is even possible) at configure time, I'd love to do that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh for tuning params you can use env variables.  For example lets say
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rather than using the gni provider in ofi mtl you want to try sockets. Then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Export OMPI_MCA_mtl_ofi_provider_include=sockets
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.  I'm glad that there is an option to set them this way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the spirit OMPI - may the force be with you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All I will say here is that Open-MPI has a Vader BTL :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Thu 19.11.2015 09:44:20 Jeff Hammond wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I have no idea what this is trying to tell me. Help?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; mpirun -n 2 ./driver.x 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; [nid00024:00482] [[46168,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; ../../../../../orte/mca/plm/alps/plm_alps_module.c at line 418
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I can run the same job with srun without incident:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; srun -n 2 ./driver.x 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; MPI was initialized.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; This is on the NERSC Cori Cray XC40 system. I build Open-MPI git
</span><br>
<span class="quotelev3">&gt;&gt;&gt; head from
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; source for OFI libfabric.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I have many other issues, which I will report later. As a spoiler,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if I
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; cannot use your mpirun, I cannot set any of the MCA options there. Is
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; there a method to set MCA options with environment variables? I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could not
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; find this documented anywhere.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; In particular, is there a way to cause shm to not use the global
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; filesystem? I see this issue comes up a lot and I read the list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archives,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; but the warning message (
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/">https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; help-mpi-common-sm.txt) suggested that I could override it by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting TMP,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; TEMP or TEMPDIR, which I did to no avail.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; From my experience on edison: the one environment variable that does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works is TMPDIR - the one that is not listed in the error message :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's great.  I will try that now.  Is there a Github issue open already
</span><br>
<span class="quotelev2">&gt;&gt; to fix that documentation?  If not...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Can't help you with your mpirun problem though ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No worries.  I appreciate all the help I can get.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28072.php">http://www.open-mpi.org/community/lists/users/2015/11/28072.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28075.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28075.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
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
