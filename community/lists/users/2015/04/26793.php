<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 26 22:59:11 2015" -->
<!-- isoreceived="20150427025911" -->
<!-- sent="Sun, 26 Apr 2015 19:58:57 -0700" -->
<!-- isosent="20150427025857" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="B38FA399-CBC4-48F9-B64D-B7F1E31CB43F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="553D74E6.4030702_at_hp.com" -->
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
<strong>Date:</strong> 2015-04-26 22:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26794.php">Walt Brainerd: "[OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26792.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26792.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl! Let us know if it breaks again.
<br>
<p><span class="quotelev1">&gt; On Apr 26, 2015, at 4:29 PM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it just worked -- I took the old command line, just to ensure that I was testing the correct problem, and it worked. Then I remembered that I had set OMPI_MCA_plm_rsh_pass_path and OMPI_MCA_plm_rsh_pass_libpath in my test setup, so I removed those from my environment, ran again, and it still worked!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whatever it is that you're doing Ralph, keep it up :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regardless of the cause or result, thanks $$$$$$ for poking at this!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/26/2015 10:35 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not intentionally - I did add that new MCA param as we discussed, but don&#226;&#128;&#153;t recall making any other changes in this area.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There have been some other build system changes made as a result of more extensive testing of the 1.8 release candidate - it is possible that something in that area had an impact here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you saying it just works, even without passing the new param?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 26, 2015, at 6:39 AM, Andy Riebs &lt;andy.riebs_at_[hidden] &lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you solve this problem in a more general way? I finally sat down this morning to try this with the openmpi-dev-1567-g11e8c20.tar.bz2 nightly kit from last week, and can't reproduce the problem at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/16/2015 12:15 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry - I had to revert the commit due to a reported MTT problem. I'll reinsert it after I get home and can debug the problem this weekend.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Apr 16, 2015 at 9:41 AM, Andy Riebs &lt;andy.riebs_at_[hidden] &lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I did this right (NEVER a good bet :-) ), it didn't work...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Using last night's master nightly, openmpi-dev-1515-gc869490.tar.bz2, I built with the same script as yesterday, but removing the LDFLAGS=-Wl, stuff:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ./configure --prefix=/home/ariebs/mic/mpi-nightly CC=&quot;icc -mmic&quot; CXX=&quot;icpc -mmic&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib LD=x86_64-k1om-linux-ld \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --enable-mpirun-prefix-by-default --disable-io-romio --disable-mpi-fortran \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --enable-debug --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ make install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/ariebs/mic/openmpi-dev-1515-gc869490/test'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Entering directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make  install-exec-hook
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Entering directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: ./config/find_common_syms: Command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: [install-exec-hook] Error 127 (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Leaving directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/ariebs/mic/openmpi-dev-1515-gc869490'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But it seems to finish the install.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I then tried to run, adding the new mca arguments:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $  shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -mca plm_rsh_pass_path $PATH -mca plm_rsh_pass_libpath $MIC_LD_LIBRARY_PATH -H mic0,mic1 -n 2 ./mic.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ echo $MIC_LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:/opt/intel/15.0/composer_xe_2015.2.164/mpirt/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/ipp/lib/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:/opt/intel/15.0/composer_xe_2015.2.164/mkl/lib/mic:/opt/intel/15.0/composer_xe_2015.2.164/tbb/lib/mic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ls /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 04/16/2015 07:22 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FWIW: I just added (last night) a pair of new MCA params for this purpose:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plm_rsh_pass_path &lt;foo&gt;   prepends the designated path to the remote shell's PATH prior to executing orted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plm_rsh_pass_libpath &lt;foo&gt;  same thing for LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I believe that will resolve the problem for Andy regardless of compiler used. In the master now, waiting for someone to verify it before adding to 1.8.5. Sadly, I am away from any cluster for the rest of this week, so I'd welcome anyone having a chance to test it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thu, Apr 16, 2015 at 2:57 AM, Thomas Jahns &lt;jahns_at_[hidden] &lt;mailto:jahns_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 15, 2015, at 02:11 , Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; what about reconfiguring Open MPI with LDFLAGS=&quot;-Wl,-rpath,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic&quot; ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; IIRC, an other option is : LDFLAGS=&quot;-static-intel&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; let me first state that I have no experience developing for MIC. But regarding the Intel runtime libraries, the only sane option in my opinion is to use the icc.cfg/ifort.cfg/icpc.cfg files that get put in the same directory as the corresponding compiler binaries and add a line like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wl,-rpath,/path/to/composerxe/lib/intel??
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to that file.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards, Thomas
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thomas Jahns
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; DKRZ GmbH, Department: Application software
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Deutsches Klimarechenzentrum
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bundesstra&#195;&#159;e 45a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; D-20146 Hamburg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Phone: +49-40-460094-151 &lt;tel:%2B49-40-460094-151&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fax: +49-40-460094-270 &lt;tel:%2B49-40-460094-270&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email: Thomas Jahns &lt;jahns_at_[hidden] &lt;mailto:jahns_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26745.php">http://www.open-mpi.org/community/lists/users/2015/04/26745.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26745.php">http://www.open-mpi.org/community/lists/users/2015/04/26745.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26746.php">http://www.open-mpi.org/community/lists/users/2015/04/26746.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26746.php">http://www.open-mpi.org/community/lists/users/2015/04/26746.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26748.php">http://www.open-mpi.org/community/lists/users/2015/04/26748.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26748.php">http://www.open-mpi.org/community/lists/users/2015/04/26748.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26749.php">http://www.open-mpi.org/community/lists/users/2015/04/26749.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26749.php">http://www.open-mpi.org/community/lists/users/2015/04/26749.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26789.php">http://www.open-mpi.org/community/lists/users/2015/04/26789.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26789.php">http://www.open-mpi.org/community/lists/users/2015/04/26789.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26790.php">http://www.open-mpi.org/community/lists/users/2015/04/26790.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26790.php">http://www.open-mpi.org/community/lists/users/2015/04/26790.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26792.php">http://www.open-mpi.org/community/lists/users/2015/04/26792.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26793/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26794.php">Walt Brainerd: "[OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26792.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26792.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
