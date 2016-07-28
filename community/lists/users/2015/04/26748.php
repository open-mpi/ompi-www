<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 11:41:22 2015" -->
<!-- isoreceived="20150416154122" -->
<!-- sent="Thu, 16 Apr 2015 11:41:19 -0400" -->
<!-- isosent="20150416154119" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="552FD81F.1020401_at_hp.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMD57ofhdpL6tSrW1uYGOKVZpJMu6KZF-75G8_xS+vOdoATL4g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-04-16 11:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26749.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26747.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26746.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26749.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26749.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    Hi Ralph,<br>
    <br>
    If I did this right (NEVER a good bet :-) ), it didn't work...<br>
    <br>
    Using last night's master nightly,
    openmpi-dev-1515-gc869490.tar.bz2, I built with the same script as
    yesterday, but removing the LDFLAGS=-Wl, stuff:<br>
    <br>
    $ ./configure --prefix=/home/ariebs/mic/mpi-nightly CC="icc -mmic"
    CXX="icpc -mmic" \<br>
      --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \<br>
       AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib
    LD=x86_64-k1om-linux-ld \<br>
       --enable-mpirun-prefix-by-default --disable-io-romio
    --disable-mpi-fortran \<br>
       --enable-debug
    --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud<br>
    $ make<br>
    $ make install<br>
     ...<br>
    make[1]: Leaving directory
    `/home/ariebs/mic/openmpi-dev-1515-gc869490/test'<br>
    make[1]: Entering directory
    `/home/ariebs/mic/openmpi-dev-1515-gc869490'<br>
    make[2]: Entering directory
    `/home/ariebs/mic/openmpi-dev-1515-gc869490'<br>
    make  install-exec-hook<br>
    make[3]: Entering directory
    `/home/ariebs/mic/openmpi-dev-1515-gc869490'<br>
    make[3]:<b> ./config/find_common_syms: Command not found</b><br>
    make[3]: [install-exec-hook] Error 127 (ignored)<br>
    make[3]: Leaving directory
    `/home/ariebs/mic/openmpi-dev-1515-gc869490'<br>
    make[2]: Nothing to be done for `install-data-am'.<br>
    make[2]: Leaving directory
    `/home/ariebs/mic/openmpi-dev-1515-gc869490'<br>
    make[1]: Leaving directory
    `/home/ariebs/mic/openmpi-dev-1515-gc869490'<br>
    $<br>
    <br>
    But it seems to finish the install.<br>
    <br>
    I then tried to run, adding the new mca arguments:<br>
    <br>
    $  shmemrun -x SHMEM_SYMMETRIC_HEAP_SIZE=1M -mca plm_rsh_pass_path
    $PATH<b> -mca plm_rsh_pass_libpath $MIC_LD_LIBRARY_PATH</b> -H
    mic0,mic1 -n 2 ./mic.out<br>
    /home/ariebs/mic/mpi-nightly/bin/orted: error while loading shared
    libraries:<b> libimf.so: cannot open shared object file</b>: No such
    file or directory<br>
     ...<br>
    $ echo $MIC_LD_LIBRARY_PATH<br>
    <b>/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic</b>:/opt/intel/15.0/composer_xe_2015.2.164/mpirt/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/ipp/lib/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:/opt/intel/15.0/composer_xe_2015.2.164/mkl/lib/mic:/opt/intel/15.0/composer_xe_2015.2.164/tbb/lib/mic<br>
    $ ls <b>/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.*</b><br>
    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.a<br>
    /opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic/libimf.so<br>
    $<br>
    <br>
    <br>
    <div class="moz-cite-prefix">On 04/16/2015 07:22 AM, Ralph Castain
      wrote:<br>
    </div>
    <blockquote
cite="mid:CAMD57ofhdpL6tSrW1uYGOKVZpJMu6KZF-75G8_xS+vOdoATL4g@mail.gmail.com"
      type="cite">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <div dir="ltr">FWIW: I just added (last night) a pair of new MCA
        params for this purpose:
        <div><br>
        </div>
        <div>plm_rsh_pass_path &lt;foo&gt;   prepends the designated
          path to the remote shell's PATH prior to executing orted</div>
        <div>plm_rsh_pass_libpath &lt;foo&gt;  same thing for
          LD_LIBRARY_PATH</div>
        <div><br>
        </div>
        <div>I believe that will resolve the problem for Andy regardless
          of compiler used. In the master now, waiting for someone to
          verify it before adding to 1.8.5. Sadly, I am away from any
          cluster for the rest of this week, so I'd welcome anyone
          having a chance to test it.</div>
        <div><br>
        </div>
      </div>
      <div class="gmail_extra"><br>
        <div class="gmail_quote">On Thu, Apr 16, 2015 at 2:57 AM, Thomas
          Jahns <span dir="ltr">&lt;<a moz-do-not-send="true"
              href="mailto:jahns@dkrz.de" target="_blank">jahns@dkrz.de</a>&gt;</span>
          wrote:<br>
          <blockquote class="gmail_quote" style="margin:0 0 0
            .8ex;border-left:1px #ccc solid;padding-left:1ex">
            <div style="word-wrap:break-word">Hello,
              <div><span class=""><br>
                  <div>
                    <div>On Apr 15, 2015, at 02:11 , Gilles Gouaillardet
                      wrote:</div>
                    <blockquote type="cite">
                      <div bgcolor="#FFFFFF" text="#000000">what about
                        reconfiguring Open MPI with
                        LDFLAGS="-Wl,-rpath,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic"
                        ?<br>
                        <br>
                        IIRC, an other option is :
                        LDFLAGS="-static-intel"<br>
                      </div>
                    </blockquote>
                  </div>
                  <div><br>
                  </div>
                </span>
                <div>let me first state that I have no experience
                  developing for MIC. But regarding the Intel runtime
                  libraries, the only sane option in my opinion is to
                  use the icc.cfg/ifort.cfg/icpc.cfg files that get put
                  in the same directory as the corresponding compiler
                  binaries and add a line like</div>
                <div><br>
                </div>
                <div>-Wl,-rpath,/path/to/composerxe/lib/intel??</div>
                <div><br>
                </div>
                <div>to that file.</div>
                <div><br>
                </div>
                <div>Regards, Thomas</div>
                <span class="HOEnZb"><font color="#888888">
                    <div> <span
                        style="border-collapse:separate;color:rgb(0,0,0);font-family:'Day
Roman';font-size:medium;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;text-align:auto;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px">
                        <div style="word-wrap:break-word">
                          <div>
                            <div>-- </div>
                            <div>Thomas Jahns</div>
                            <div>DKRZ GmbH, Department: Application
                              software</div>
                            <div><br>
                            </div>
                            <div>Deutsches Klimarechenzentrum</div>
                            <div>Bundesstraße 45a</div>
                            <div>D-20146 Hamburg</div>
                            <div><br>
                            </div>
                            <div>Phone: <a moz-do-not-send="true"
                                href="tel:%2B49-40-460094-151"
                                value="+4940460094151" target="_blank">+49-40-460094-151</a></div>
                            <div>Fax: <a moz-do-not-send="true"
                                href="tel:%2B49-40-460094-270"
                                value="+4940460094270" target="_blank">+49-40-460094-270</a></div>
                            <div>Email: Thomas Jahns &lt;<a
                                moz-do-not-send="true"
                                href="mailto:jahns@dkrz.de"
                                target="_blank">jahns@dkrz.de</a>&gt;</div>
                            <div><br>
                            </div>
                          </div>
                        </div>
                      </span><br>
                    </div>
                    <br>
                  </font></span></div>
            </div>
            <br>
            _______________________________________________<br>
            users mailing list<br>
            <a moz-do-not-send="true" href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
            Subscription: <a moz-do-not-send="true"
              href="http://www.open-mpi.org/mailman/listinfo.cgi/users"
              target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
            Link to this post: <a moz-do-not-send="true"
              href="http://www.open-mpi.org/community/lists/users/2015/04/26745.php"
              target="_blank">http://www.open-mpi.org/community/lists/users/2015/04/26745.php</a><br>
          </blockquote>
        </div>
        <br>
      </div>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26746.php">http://www.open-mpi.org/community/lists/users/2015/04/26746.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26749.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26747.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26746.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26749.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26749.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
