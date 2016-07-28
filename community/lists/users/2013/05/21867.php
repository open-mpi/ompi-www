<?
$subject_val = "Re: [OMPI users] running openmpi with specified lib path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 10:39:56 2013" -->
<!-- isoreceived="20130507143956" -->
<!-- sent="Tue, 07 May 2013 21:39:46 +0700" -->
<!-- isosent="20130507143946" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi with specified lib path" -->
<!-- id="51891232.2010407_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="882E42B1-3001-4105-BA83-79BA51277252_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] running openmpi with specified lib path<br>
<strong>From:</strong> Duke Nguyen (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 10:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21866.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21865.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/7/13 9:25 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Look at your ld-library-path. Breaking it down, you have the following elements
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib
</span><br>
<p>$ export LD_LIBRARY_PATH=
<br>
$ module load mpi/openmpi-1.7.2_composer_xe_2013.3.163
<br>
$ module load
<br>
apps/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl
<br>
$ echo $LD_LIBRARY_PATH
<br>
/opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib
<br>
<p>The LD_LIBRARY_PATH above contains three different locations:
<br>
<p>/opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib
<br>
/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
<br>
/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; repeated three times. Did you actually configure with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local
</span><br>
<p><p>No I didnt (and that maybe the reason, I am not really sure I was
<br>
correct when installation these things). What I did was:
<br>
<p>$ cd /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163
<br>
$ ./configure CC=/opt/intel/composer_xe_2013.3.163/bin/intel64/icc
<br>
CXX=/opt/intel/composer_xe_2013.3.163/bin/intel64/icpc
<br>
F77=/opt/intel/composer_xe_2013.3.163/bin/intel64/ifort
<br>
FC=/opt/intel/composer_xe_2013.3.163/bin/intel64/ifort
<br>
$ make -j8
<br>
$ DESTDIR=`pwd` make -j8 install
<br>
<p>so all the compiled openmpi components were installed at
<br>
<p>$ ls /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/
<br>
bin  etc  include  lib  share
<br>
<p>Am I doing wrong??? Please advise.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the prefix path *must* be the first element in your ld-libary-path or you'll pickup one of your other installations. When you did your test, you goofed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ export
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/opt/intel/composer_xe_2013/lib/intel64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This put the new path at the end, where it would never be used
</span><br>
<p><p>What I thought was if the needed lib or exec is not found on the first
<br>
path, then the next will be used. Since libimf was not found from all
<br>
previous path, added the last one helped. Anyway, try adding to the
<br>
beginning:
<br>
<p>$ mpirun ./mpihello_intel
<br>
[node0111.biobos.grih.org:19243] mca: base: component_find: unable to
<br>
open /usr/local/lib/openmpi/mca_ess_hnp:
<br>
/usr/local/lib/openmpi/mca_ess_hnp.so: undefined symbol:
<br>
orte_local_jobdata (ignored)
<br>
[node0111.biobos.grih.org:19243] mca: base: component_find: unable to
<br>
open /usr/local/lib/openmpi/mca_ess_slurm:
<br>
/usr/local/lib/openmpi/mca_ess_slurm.so: undefined symbol:
<br>
orte_orted_exit_with_barrier (ignored)
<br>
[node0111.biobos.grih.org:19243] mca: base: component_find: unable to
<br>
open /usr/local/lib/openmpi/mca_ess_slurmd:
<br>
/usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol:
<br>
orte_pmap_t_class (ignored)
<br>
mpirun: symbol lookup error:
<br>
/usr/local/lib/openmpi/mca_ess_singleton.so: undefined symbol:
<br>
orte_util_setup_local_nidmap_entries
<br>
<p>gave the same error.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 7, 2013, at 7:11 AM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 5/7/13 8:10 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2013, at 7:36 AM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So apparently openmpi 1.7.2 looks for the old library at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/loca/lib/openmpi for 1.6.3 instead of at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there away to force openmpi 1.7.2 look at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first before looking at other locations?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is *usually* a problem of local settings.  Make sure you don't have both the 1.6 and 1.7 library directories listed in LD_LIBRARY_PATH, for example.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also thought of that, but removing /usr/local does not help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/qt-3.3/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/opt/apps/abinit/bin:/opt/torque/sbin:/opt/torque/bin:/usr/local/bin:/opt/apps/bin
</span><br>
<span class="quotelev2">&gt;&gt; $ export PATH=/usr/lib64/qt-3.3/bin:/bin:/usr/bin:/usr/sbin:/sbin
</span><br>
<span class="quotelev2">&gt;&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; :/usr/local/lib:/opt/intel/lib/intel64:/opt/intel/mkl/lib/intel64
</span><br>
<span class="quotelev2">&gt;&gt; $ export LD_LIBRARY_PATH=
</span><br>
<span class="quotelev2">&gt;&gt; $ module load mpi/openmpi-1.7.2_composer_xe_2013.3.163
</span><br>
<span class="quotelev2">&gt;&gt; $ module load
</span><br>
<span class="quotelev2">&gt;&gt; apps/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun ./mpihello_intel
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: error while loading shared libraries: libimf.so: cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/abinit/abinit-7.2.1_composer_xe_2013.3.163_openmpi-1.7.2_intel_fftw3-mkl/usr/local/lib:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi:/opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt; $ export
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/opt/intel/composer_xe_2013/lib/intel64
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun ./mpihello_intel
</span><br>
<span class="quotelev2">&gt;&gt; [node0111.biobos.grih.org:18979] mca: base: component_find: unable to
</span><br>
<span class="quotelev2">&gt;&gt; open /usr/local/lib/openmpi/mca_ess_hnp:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_hnp.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; orte_local_jobdata (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [node0111.biobos.grih.org:18979] mca: base: component_find: unable to
</span><br>
<span class="quotelev2">&gt;&gt; open /usr/local/lib/openmpi/mca_ess_slurm:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_slurm.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; orte_orted_exit_with_barrier (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [node0111.biobos.grih.org:18979] mca: base: component_find: unable to
</span><br>
<span class="quotelev2">&gt;&gt; open /usr/local/lib/openmpi/mca_ess_slurmd:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_slurmd.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; orte_pmap_t_class (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: symbol lookup error:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/openmpi/mca_ess_singleton.so: undefined symbol:
</span><br>
<span class="quotelev2">&gt;&gt; orte_util_setup_local_nidmap_entries
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21867/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21866.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21865.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
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
