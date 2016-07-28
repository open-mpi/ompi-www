<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 12:16:01 2015" -->
<!-- isoreceived="20150416161601" -->
<!-- sent="Thu, 16 Apr 2015 10:15:58 -0600" -->
<!-- isosent="20150416161558" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="CAMD57ofTLzP9OXfMBGyjyw7Si2NGO8+uRT=Ntn-c0atWRT+Tqw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="552FD81F.1020401_at_hp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-16 12:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26748.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26748.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26789.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26789.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry - I had to revert the commit due to a reported MTT problem. I'll
<br>
reinsert it after I get home and can debug the problem this weekend.
<br>
<p>On Thu, Apr 16, 2015 at 9:41 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I did this right (NEVER a good bet :-) ), it didn't work...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using last night's master nightly, openmpi-dev-1515-gc869490.tar.bz2, I
</span><br>
<span class="quotelev1">&gt; built with the same script as yesterday, but removing the LDFLAGS=-Wl,
</span><br>
<span class="quotelev1">&gt; stuff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/ariebs/mic/mpi-nightly CC=&quot;icc -mmic&quot;
</span><br>
<span class="quotelev1">&gt; CXX=&quot;icpc -mmic&quot; \
</span><br>
<span class="quotelev1">&gt;   --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev1">&gt;    AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib
</span><br>
<span class="quotelev1">&gt; LD=x86_64-k1om-linux-ld \
</span><br>
<span class="quotelev1">&gt;    --enable-mpirun-prefix-by-default --disable-io-romio
</span><br>
<span class="quotelev1">&gt; --disable-mpi-fortran \
</span><br>
<span class="quotelev1">&gt;    --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; $ make install
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/ariebs/mic/openmpi-dev-1515-gc869490/test'
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev1">&gt; make  install-exec-hook
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev1">&gt; make[3]:* ./config/find_common_syms: Command not found*
</span><br>
<span class="quotelev1">&gt; make[3]: [install-exec-hook] Error 127 (ignored)
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it seems to finish the install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then tried to run, adding the new mca arguments:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $  shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -mca plm_rsh_pass_path $PATH*
</span><br>
<span class="quotelev1">&gt; -mca plm_rsh_pass_libpath $MIC_LD_LIBRARY_PATH* -H mic0,mic1 -n 2
</span><br>
<span class="quotelev1">&gt; ./mic.out
</span><br>
<span class="quotelev1">&gt; /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
</span><br>
<span class="quotelev1">&gt; libraries:* libimf.so: cannot open shared object file*: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt; $ echo $MIC_LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; */opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic*
</span><br>
<span class="quotelev1">&gt; :/opt/intel/15.0/composer_xe_2015.2.164/mpirt/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/ipp/lib/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:/opt/intel/15.0/composer_xe_2015.2.164/mkl/lib/mic:/opt/intel/15.0/composer_xe_2015.2.164/tbb/lib/mic
</span><br>
<span class="quotelev1">&gt; $ ls */opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.**
</span><br>
<span class="quotelev1">&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.a
</span><br>
<span class="quotelev1">&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/16/2015 07:22 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I just added (last night) a pair of new MCA params for this purpose:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  plm_rsh_pass_path &lt;foo&gt;   prepends the designated path to the remote
</span><br>
<span class="quotelev1">&gt; shell's PATH prior to executing orted
</span><br>
<span class="quotelev1">&gt; plm_rsh_pass_libpath &lt;foo&gt;  same thing for LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I believe that will resolve the problem for Andy regardless of compiler
</span><br>
<span class="quotelev1">&gt; used. In the master now, waiting for someone to verify it before adding to
</span><br>
<span class="quotelev1">&gt; 1.8.5. Sadly, I am away from any cluster for the rest of this week, so I'd
</span><br>
<span class="quotelev1">&gt; welcome anyone having a chance to test it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 16, 2015 at 2:57 AM, Thomas Jahns &lt;jahns_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Apr 15, 2015, at 02:11 , Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what about reconfiguring Open MPI with
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS=&quot;-Wl,-rpath,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IIRC, an other option is : LDFLAGS=&quot;-static-intel&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  let me first state that I have no experience developing for MIC. But
</span><br>
<span class="quotelev2">&gt;&gt; regarding the Intel runtime libraries, the only sane option in my opinion
</span><br>
<span class="quotelev2">&gt;&gt; is to use the icc.cfg/ifort.cfg/icpc.cfg files that get put in the same
</span><br>
<span class="quotelev2">&gt;&gt; directory as the corresponding compiler binaries and add a line like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -Wl,-rpath,/path/to/composerxe/lib/intel??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  to that file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Regards, Thomas
</span><br>
<span class="quotelev2">&gt;&gt;    --
</span><br>
<span class="quotelev2">&gt;&gt; Thomas Jahns
</span><br>
<span class="quotelev2">&gt;&gt; DKRZ GmbH, Department: Application software
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Deutsches Klimarechenzentrum
</span><br>
<span class="quotelev2">&gt;&gt; Bundesstra&#195;&#159;e 45a
</span><br>
<span class="quotelev2">&gt;&gt; D-20146 Hamburg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Phone: +49-40-460094-151
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +49-40-460094-270
</span><br>
<span class="quotelev2">&gt;&gt; Email: Thomas Jahns &lt;jahns_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26745.php">http://www.open-mpi.org/community/lists/users/2015/04/26745.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26746.php">http://www.open-mpi.org/community/lists/users/2015/04/26746.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26748.php">http://www.open-mpi.org/community/lists/users/2015/04/26748.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26749/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26750.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26748.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26748.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26789.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26789.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
