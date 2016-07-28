<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 11 12:52:16 2015" -->
<!-- isoreceived="20150411165216" -->
<!-- sent="Sat, 11 Apr 2015 12:52:14 -0400" -->
<!-- isosent="20150411165214" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="5529513E.8020609_at_hp.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D448D6B8-E6D8-4A85-8835-AB2A3DA53FCC_at_open-mpi.org" -->
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
<strong>From:</strong> Andy Riebs (<em>andy.riebs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-11 12:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26681.php">Ahmed Salama: "[OMPI users] run openmpi 1.8 in both linux and windows 7"</a>
<li><strong>Previous message:</strong> <a href="26679.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26679.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26682.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26682.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    Everything is built on the Xeon side, with the icc "-mmic" switch. I
    then ssh into one of the PHIs, and run shmemrun from there.<br>
    <br>
    <br>
    <div class="moz-cite-prefix">On 04/11/2015 12:00 PM, Ralph Castain
      wrote:<br>
    </div>
    <blockquote
      cite="mid:D448D6B8-E6D8-4A85-8835-AB2A3DA53FCC@open-mpi.org"
      type="cite">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      Let me try to understand the setup a little better. Are you
      running shmemrun on the PHI itself? Or is it running on the host
      processor, and you are trying to spawn a process onto the Phi?
      <div class=""><br class="">
      </div>
      <div class=""><br class="">
        <div>
          <blockquote type="cite" class="">
            <div class="">On Apr 11, 2015, at 7:55 AM, Andy Riebs &lt;<a
                moz-do-not-send="true" href="mailto:andy.riebs@hp.com"
                class="">andy.riebs@hp.com</a>&gt; wrote:</div>
            <br class="Apple-interchange-newline">
            <div class="">
              <div bgcolor="#FFFFFF" text="#000000" class=""> Hi Ralph,<br
                  class="">
                <br class="">
                Yes, this is attempting to get OSHMEM to run on the Phi.<br
                  class="">
                <br class="">
                I grabbed openmpi-dev-1484-g033418f.tar.bz2 and
                configured it with<br class="">
                <br class="">
                $ ./configure --prefix=/home/ariebs/mic/mpi-nightly   
                CC=icc -mmic CXX=icpc -mmic    \<br class="">
                    --build=x86_64-unknown-linux-gnu
                --host=x86_64-k1om-linux    \<br class="">
                     AR=x86_64-k1om-linux-ar
                RANLIB=x86_64-k1om-linux-ranlib 
                LD=x86_64-k1om-linux-ld   \<br class="">
                     --enable-mpirun-prefix-by-default
                --disable-io-romio     --disable-mpi-fortran    \<br
                  class="">
                     --enable-debug    
                --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud<br
                  class="">
                <br class="">
                (Note that I had to add "oob-ud" to the
                "--enable-mca-no-build" option, as the build complained
                that mca oob/ud needed mca common-verbs.)<br class="">
                <br class="">
                With that configuration, here is what I am seeing now...<br
                  class="">
                <br class="">
                $ export SHMEM_SYMMETRIC_HEAP_SIZE=1G<br class="">
                $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca
                plm_base_verbose 5 $PWD/mic.out<br class="">
                [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
                component [rsh]<br class="">
                [atl1-01-mic0:189895] [[INVALID],INVALID] plm:rsh_lookup
                on agent ssh : rsh path NULL<br class="">
                [atl1-01-mic0:189895] mca:base:select:(  plm) Query of
                component [rsh] set priority to 10<br class="">
                [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
                component [isolated]<br class="">
                [atl1-01-mic0:189895] mca:base:select:(  plm) Query of
                component [isolated] set priority to 0<br class="">
                [atl1-01-mic0:189895] mca:base:select:(  plm) Querying
                component [slurm]<br class="">
                [atl1-01-mic0:189895] mca:base:select:(  plm) Skipping
                component [slurm]. Query failed to return a module<br
                  class="">
                [atl1-01-mic0:189895] mca:base:select:(  plm) Selected
                component [rsh]<br class="">
                [atl1-01-mic0:189895] plm:base:set_hnp_name: initial
                bias 189895 nodename hash 4121194178<br class="">
                [atl1-01-mic0:189895] plm:base:set_hnp_name: final
                jobfam 32419<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:rsh_setup on
                agent ssh : rsh path NULL<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive
                start comm<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_job<br
                  class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm<br
                  class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
                creating map<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] setup:vm: working
                unmanaged allocation<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] using dash_host<br
                  class="">
                [atl1-01-mic0:189895] [[32419,0],0] checking node
                atl1-01-mic0<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] ignoring myself<br
                  class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
                only HNP in allocation<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] complete_setup on
                job [32419,1]<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] ORTE_ERROR_LOG: Not
                found in file base/plm_base_launch_support.c at line 440<br
                  class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch_apps
                for job [32419,1]<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch
                wiring up iof for job [32419,1]<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch
                [32419,1] registered<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch job
                [32419,1] is not a dynamic spawn<br class="">
                [atl1-01-mic0:189899] Error: pshmem_init.c:61 -
                shmem_init() SHMEM failed to initialize - aborting<br
                  class="">
                [atl1-01-mic0:189898] Error: pshmem_init.c:61 -
                shmem_init() SHMEM failed to initialize - aborting<br
                  class="">
--------------------------------------------------------------------------<br
                  class="">
                It looks like SHMEM_INIT failed for some reason; your
                parallel process is<br class="">
                likely to abort.  There are many reasons that a parallel
                process can<br class="">
                fail during SHMEM_INIT; some of which are due to
                configuration or environment<br class="">
                problems.  This failure appears to be an internal
                failure; here's some<br class="">
                additional information (which may only be relevant to an
                Open SHMEM<br class="">
                developer):<br class="">
                <br class="">
                  mca_memheap_base_select() failed<br class="">
                  --&gt; Returned "Error" (-1) instead of "Success" (0)<br
                  class="">
--------------------------------------------------------------------------<br
                  class="">
--------------------------------------------------------------------------<br
                  class="">
                SHMEM_ABORT was invoked on rank 1 (pid 189899,
                host=atl1-01-mic0) with errorcode -1.<br class="">
--------------------------------------------------------------------------<br
                  class="">
--------------------------------------------------------------------------<br
                  class="">
                A SHMEM process is aborting at a time when it cannot
                guarantee that all<br class="">
                of its peer processes in the job will be killed
                properly.  You should<br class="">
                double check that everything has shut down cleanly.<br
                  class="">
                <br class="">
                Local host: atl1-01-mic0<br class="">
                PID:        189899<br class="">
--------------------------------------------------------------------------<br
                  class="">
                -------------------------------------------------------<br
                  class="">
                Primary job  terminated normally, but 1 process returned<br
                  class="">
                a non-zero exit code.. Per user-direction, the job has
                been aborted.<br class="">
                -------------------------------------------------------<br
                  class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:orted_cmd
                sending orted_exit commands<br class="">
--------------------------------------------------------------------------<br
                  class="">
                shmemrun detected that one or more processes exited with
                non-zero status, thus causing<br class="">
                the job to be terminated. The first process to do so
                was:<br class="">
                <br class="">
                  Process name: [[32419,1],1]<br class="">
                  Exit code:    255<br class="">
--------------------------------------------------------------------------<br
                  class="">
                [atl1-01-mic0:189895] 1 more process has sent help
                message help-shmem-runtime.txt /
                shmem_init:startup:internal-failure<br class="">
                [atl1-01-mic0:189895] Set MCA parameter
                "orte_base_help_aggregate" to 0 to see all help / error
                messages<br class="">
                [atl1-01-mic0:189895] 1 more process has sent help
                message help-shmem-api.txt / shmem-abort<br class="">
                [atl1-01-mic0:189895] 1 more process has sent help
                message help-shmem-runtime.txt / oshmem shmem
                abort:cannot guarantee all killed<br class="">
                [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive
                stop comm<br class="">
                <br class="">
                <br class="">
                <br class="">
                <br class="">
                <div class="moz-cite-prefix">On 04/10/2015 06:37 PM,
                  Ralph Castain wrote:<br class="">
                </div>
                <blockquote
                  cite="mid:2E13CA6E-9B06-472F-A315-827348668ECF@open-mpi.org"
                  type="cite" class=""> Andy - could you please try the
                  current 1.8.5 nightly tarball and see if it helps? The
                  error log indicates that it is failing to get the
                  topology from some daemon, I�m assuming the one on the
                  Phi?
                  <div class=""><br class="">
                  </div>
                  <div class="">You might also add �enable-debug to that
                    configure line and then put -mca plm_base_verbose on
                    the shmemrun cmd to get more help</div>
                  <div class=""><br class="">
                  </div>
                  <div class=""><br class="">
                    <div class="">
                      <blockquote type="cite" class="">
                        <div class="">On Apr 10, 2015, at 11:55 AM, Andy
                          Riebs &lt;<a moz-do-not-send="true"
                            href="mailto:andy.riebs@hp.com" class="">andy.riebs@hp.com</a>&gt;
                          wrote:</div>
                        <br class="Apple-interchange-newline">
                        <div class="">
                          <div bgcolor="#FFFFFF" text="#000000" class="">
                            Summary: MPI jobs work fine, SHMEM jobs work
                            just often enough to be tantalizing, on an
                            Intel Xeon Phi/MIC system.<br class="">
                            <br class="">
                            Longer version<br class="">
                            <br class="">
                            Thanks to the excellent write-up last June (<a
                              moz-do-not-send="true"
                              class="moz-txt-link-rfc2396E"
                              href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">&lt;https://www.open-mpi.org/community/lists/users/2014/06/24711.php&gt;</a>),


                            I have been able to build a version of Open
                            MPI for the Xeon Phi coprocessor that runs
                            MPI jobs on the Phi coprocessor with no
                            problem, but not SHMEM jobs.  Just at the
                            point where I was about to document the
                            problems I was having with SHMEM, my trivial
                            SHMEM job worked. And then failed when I
                            tried to run it again, immediately
                            afterwards. I have a feeling I may be in
                            uncharted  territory here.<br class="">
                            <br class="">
                            Environment<br class="">
                            <ul class="">
                              <li class="">RHEL 6.5</li>
                              <li class="">Intel Composer XE 2015</li>
                              <li class="">Xeon Phi/MIC</li>
                            </ul>
                            ----------------<br class="">
                            <br class="">
                            <br class="">
                            Configuration<br class="">
                            <br class="">
                            $ export PATH=/usr/linux-k1om-4.7/bin/:$PATH<br
                              class="">
                            $ source
                            /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
                            intel64<br class="">
                            $ ./configure --prefix=/home/ariebs/mic/mpi
                            \<br class="">
                               CC="icc -mmic" CXX="icpc -mmic" \<br
                              class="">
                               --build=x86_64-unknown-linux-gnu
                            --host=x86_64-k1om-linux \<br class="">
                                AR=x86_64-k1om-linux-ar
                            RANLIB=x86_64-k1om-linux-ranlib \<br
                              class="">
                                LD=x86_64-k1om-linux-ld \<br class="">
                                --enable-mpirun-prefix-by-default
                            --disable-io-romio \<br class="">
                                --disable-vt --disable-mpi-fortran \<br
                              class="">
                               
                            --enable-mca-no-build=btl-usnic,btl-openib,common-verbs<br
                              class="">
                            $ make<br class="">
                            $ make install<br class="">
                            <br class="">
                            ----------------<br class="">
                            <br class="">
                            Test program<br class="">
                            <br class="">
                            #include &lt;stdio.h&gt;<br class="">
                            #include &lt;stdlib.h&gt;<br class="">
                            #include &lt;shmem.h&gt;<br class="">
                            int main(int argc, char **argv)<br class="">
                            {<br class="">
                                    int me, num_pe;<br class="">
                                    shmem_init();<br class="">
                                    num_pe = num_pes();<br class="">
                                    me = my_pe();<br class="">
                                    printf("Hello World from process %ld
                            of %ld\n", me, num_pe);<br class="">
                                    exit(0);<br class="">
                            }<br class="">
                            <br class="">
                            ----------------<br class="">
                            <br class="">
                            Building the program<br class="">
                            <br class="">
                            export PATH=/home/ariebs/mic/mpi/bin:$PATH<br
                              class="">
                            export PATH=/usr/linux-k1om-4.7/bin/:$PATH<br
                              class="">
                            source
                            /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
                            intel64<br class="">
                            export
LD_LIBRARY_PATH=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:$LD_LIBRARY_PATH<br
                              class="">
                            <br class="">
                            icc -mmic -std=gnu99
                            -I/home/ariebs/mic/mpi/include -pthread \<br
                              class="">
                                    -Wl,-rpath
                            -Wl,/home/ariebs/mic/mpi/lib
                            -Wl,--enable-new-dtags \<br class="">
                                    -L/home/ariebs/mic/mpi/lib -loshmem
                            -lmpi -lopen-rte -lopen-pal \<br class="">
                                    -lm -ldl -lutil \<br class="">
                                    -Wl,-rpath
                            -Wl,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic
                            \<br class="">
                                   
                            -L/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic
                            \<br class="">
                                    -o mic.out  shmem_hello.c<br
                              class="">
                            <br class="">
                            ----------------<br class="">
                            <br class="">
                            Running the program<br class="">
                            <br class="">
                            (Note that the program had been consistently
                            failing. Then, when I logged back into the
                            system to capture the results, it worked
                            once,  and then immediately failed when I
                            tried again, as shown below. Logging in and
                            out isn't sufficient to correct the problem.
                            Overall, I think I had 3 successful runs in
                            30-40 attempts.)<br class="">
                            <br class="">
                            $ shmemrun -H localhost -N 2 --mca sshmem
                            mmap ./mic.out<br class="">
                            [atl1-01-mic0:189372] [[30936,0],0]
                            ORTE_ERROR_LOG: Not found in file
                            base/plm_base_launch_support.c at line 426<br
                              class="">
                            Hello World from process 0 of 2<br class="">
                            Hello World from process 1 of 2<br class="">
                            $ shmemrun -H localhost -N 2 --mca sshmem
                            mmap ./mic.out<br class="">
                            [atl1-01-mic0:189381] [[30881,0],0]
                            ORTE_ERROR_LOG: Not found in file
                            base/plm_base_launch_support.c at line 426<br
                              class="">
                            [atl1-01-mic0:189383] Error:
                            pshmem_init.c:61 - shmem_init() SHMEM failed
                            to initialize - aborting<br class="">
--------------------------------------------------------------------------<br
                              class="">
                            It looks like SHMEM_INIT failed for some
                            reason; your parallel process is<br class="">
                            likely to abort.  There are many reasons
                            that a parallel process can<br class="">
                            fail during SHMEM_INIT; some of which are
                            due to configuration or environment<br
                              class="">
                            problems.  This failure appears to be an
                            internal failure; here's some<br class="">
                            additional information (which may only be
                            relevant to an Open SHMEM<br class="">
                            developer):<br class="">
                            <br class="">
                              mca_memheap_base_select() failed<br
                              class="">
                              --&gt; Returned "Error" (-1) instead of
                            "Success" (0)<br class="">
--------------------------------------------------------------------------<br
                              class="">
--------------------------------------------------------------------------<br
                              class="">
                            SHMEM_ABORT was invoked on rank 0 (pid
                            189383, host=atl1-01-mic0) with errorcode
                            -1.<br class="">
--------------------------------------------------------------------------<br
                              class="">
--------------------------------------------------------------------------<br
                              class="">
                            A SHMEM process is aborting at a time when
                            it cannot guarantee that all<br class="">
                            of its peer processes in the job will be
                            killed properly.  You should<br class="">
                            double check that everything has shut down
                            cleanly.<br class="">
                            <br class="">
                            Local host: atl1-01-mic0<br class="">
                            PID:        189383<br class="">
--------------------------------------------------------------------------<br
                              class="">
-------------------------------------------------------<br class="">
                            Primary job  terminated normally, but 1
                            process returned<br class="">
                            a non-zero exit code.. Per user-direction,
                            the job has been aborted.<br class="">
-------------------------------------------------------<br class="">
--------------------------------------------------------------------------<br
                              class="">
                            shmemrun detected that one or more processes
                            exited with non-zero status, thus causing<br
                              class="">
                            the job to be terminated. The first process
                            to do so was:<br class="">
                            <br class="">
                              Process name: [[30881,1],0]<br class="">
                              Exit code:    255<br class="">
--------------------------------------------------------------------------<br
                              class="">
                            <br class="">
                            Any thoughts about where to go from here?<br
                              class="">
                            <br class="">
                            Andy<br class="">
                            <br class="">
                            <pre class="moz-signature" cols="72">-- 
Andy Riebs
Hewlett-Packard Company
High Performance Computing
+1 404 648 9024
My opinions are not necessarily those of HP
</pre>
                          </div>
_______________________________________________<br class="">
                          users mailing list<br class="">
                          <a moz-do-not-send="true"
                            href="mailto:users@open-mpi.org" class="">users@open-mpi.org</a><br
                            class="">
                          Subscription: <a moz-do-not-send="true"
                            class="moz-txt-link-freetext"
                            href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br
                            class="">
                          Link to this post: <a moz-do-not-send="true"
                            class="moz-txt-link-freetext"
                            href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a></div>
                      </blockquote>
                    </div>
                    <br class="">
                  </div>
                  <br class="">
                  <fieldset class="mimeAttachmentHeader"></fieldset>
                  <br class="">
                  <pre class="" wrap="">_______________________________________________
users mailing list
<a moz-do-not-send="true" class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a moz-do-not-send="true" class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a></pre>
                </blockquote>
                <br class="">
              </div>
              _______________________________________________<br
                class="">
              users mailing list<br class="">
              <a moz-do-not-send="true" href="mailto:users@open-mpi.org"
                class="">users@open-mpi.org</a><br class="">
              Subscription:
              <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br
                class="">
              Link to this post:
              <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a></div>
          </blockquote>
        </div>
        <br class="">
      </div>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26681.php">Ahmed Salama: "[OMPI users] run openmpi 1.8 in both linux and windows 7"</a>
<li><strong>Previous message:</strong> <a href="26679.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26679.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26682.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26682.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
