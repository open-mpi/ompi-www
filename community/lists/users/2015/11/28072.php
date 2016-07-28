<?
$subject_val = "Re: [OMPI users] help understand unhelpful ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 18:59:45 2015" -->
<!-- isoreceived="20151119235945" -->
<!-- sent="Thu, 19 Nov 2015 15:59:22 -0800" -->
<!-- isosent="20151119235922" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help understand unhelpful ORTE error message" -->
<!-- id="CAGKz=u+qOxN-=c9ZOpER3bzThQO70xZoNEUtMxWNTqOi3TYf+A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FC203DF5-80B6-4AA4-AF3F-8DC4BB8FF9AF_at_gmail.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 18:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28071.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28084.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How did you configure for Cori?  You need to be using the slurm plm
</span><br>
<span class="quotelev1">&gt; component for that system.  I know this sounds like gibberish.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
../configure --with-libfabric=$HOME/OFI/install-ofi-gcc-gni-cori \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-static=mtl-ofi \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-no-build=btl-openib,btl-vader,btl-ugni,btl-tcp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static --disable-shared --disable-dlopen \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=$HOME/MPI/install-ompi-ofi-gcc-gni-xpmem-cori \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-cray-pmi --with-alps --with-cray-xpmem --with-slurm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-verbs --without-fca --without-mxm --without-ucx \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-portals4 --without-psm --without-psm2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-udreg --without-ugni --without-munge \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-sge --without-loadleveler --without-tm --without-lsf \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-pvfs2 --without-plfs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-cuda --disable-oshmem \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-fortran --disable-oshmem-fortran \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-L/opt/cray/ugni/default/lib64 -lugni \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/opt/cray/alps/default/lib64 -lalps -lalpslli -lalpsutil
<br>
\                      -ldl -lrt&quot;
<br>
<p><p>This is copied from
<br>
<a href="https://github.com/jeffhammond/HPCInfo/blob/master/ofi/README.md#open-mpi">https://github.com/jeffhammond/HPCInfo/blob/master/ofi/README.md#open-mpi</a>,
<br>
which I note in case you want to see what changes I've made at any point in
<br>
the future.
<br>
<p><p><span class="quotelev1">&gt; There should be a with-slurm configure option to pick up this component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed there is.
</span><br>
<p><p><span class="quotelev1">&gt; Doesn't mpich have the option to use sysv memory?  You may want to try that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
MPICH?  Look, I may have earned my way onto Santa's naughty list more than
<br>
a few times, but at least I have the decency not to post MPICH questions to
<br>
the Open-MPI list ;-)
<br>
<p>If there is a way to tell Open-MPI to use shm_open without filesystem
<br>
backing (if that is even possible) at configure time, I'd love to do that.
<br>
<p><p><span class="quotelev1">&gt; Oh for tuning params you can use env variables.  For example lets say
</span><br>
<span class="quotelev1">&gt; rather than using the gni provider in ofi mtl you want to try sockets. Then
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Export OMPI_MCA_mtl_ofi_provider_include=sockets
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thanks.  I'm glad that there is an option to set them this way.
<br>
<p><p><span class="quotelev1">&gt; In the spirit OMPI - may the force be with you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
All I will say here is that Open-MPI has a Vader BTL :-)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu 19.11.2015 09:44:20 Jeff Hammond wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have no idea what this is trying to tell me. Help?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; mpirun -n 2 ./driver.x 64
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [nid00024:00482] [[46168,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../../../orte/mca/plm/alps/plm_alps_module.c at line 418
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can run the same job with srun without incident:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; srun -n 2 ./driver.x 64
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI was initialized.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is on the NERSC Cori Cray XC40 system. I build Open-MPI git head
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source for OFI libfabric.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have many other issues, which I will report later. As a spoiler, if I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cannot use your mpirun, I cannot set any of the MCA options there. Is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; there a method to set MCA options with environment variables? I could
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; find this documented anywhere.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In particular, is there a way to cause shm to not use the global
</span><br>
<span class="quotelev3">&gt; &gt; &gt; filesystem? I see this issue comes up a lot and I read the list
</span><br>
<span class="quotelev1">&gt; archives,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but the warning message (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/">https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; help-mpi-common-sm.txt) suggested that I could override it by setting
</span><br>
<span class="quotelev1">&gt; TMP,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; TEMP or TEMPDIR, which I did to no avail.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From my experience on edison: the one environment variable that does
</span><br>
<span class="quotelev1">&gt; works is TMPDIR - the one that is not listed in the error message :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's great.  I will try that now.  Is there a Github issue open already
<br>
to fix that documentation?  If not...
<br>
<p><p><span class="quotelev2">&gt; &gt; Can't help you with your mpirun problem though ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No worries.  I appreciate all the help I can get.
</span><br>
<p>Thanks,
<br>
<p>Jeff
<br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28072/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28071.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28073.php">Howard Pritchard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28084.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
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
