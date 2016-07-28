<?
$subject_val = "Re: [OMPI users] MPIRUN SEGMENTATION FAULT";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 23 10:49:22 2016" -->
<!-- isoreceived="20160423144922" -->
<!-- sent="Sat, 23 Apr 2016 10:49:20 -0400" -->
<!-- isosent="20160423144920" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN SEGMENTATION FAULT" -->
<!-- id="571B8B70.4080404_at_hpe.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BLUPR10MB075456D265E88EEC2D1729B8EA600_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIRUN SEGMENTATION FAULT<br>
<strong>From:</strong> Andy Riebs (<em>andy.riebs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-23 10:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29007.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29007.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29007.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=windows-1252"
      http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    The challenge for the MPI experts here (of which I am NOT one!) is
    that the problem appears to be in your program; MPI is simply
    reporting that your program failed. If you got the program from
    someone else, you will need to solicit their help. If you wrote it,
    well, it is never a bad time to learn to use gdb!<br>
    <br>
    Best regards<br>
    Andy<br>
    <br>
    <div class="moz-cite-prefix">On 04/23/2016 10:41 AM, Elio Physics
      wrote:<br>
    </div>
    <blockquote
cite="mid:BLUPR10MB075456D265E88EEC2D1729B8EA600@BLUPR10MB0754.namprd10.prod.outlook.com"
      type="cite">
      <meta http-equiv="Content-Type" content="text/html;
        charset=windows-1252">
      <style type="text/css" style="display:none;"><!-- P {margin-top:0;margin-bottom:0;} --></style>
      <div id="divtagdefaultwrapper"
style="font-size:12pt;color:#000000;background-color:#FFFFFF;font-family:Calibri,Arial,Helvetica,sans-serif;">
        <p>I am not really an expert with gdb. What is the core file?
          and how to use gdb? I have got three files as an output when
          the executable is used. One is the actual output which stops
          and the other two are error files (from which I knew about the
          segmentation fault).</p>
        <p><br>
        </p>
        <p><br>
        </p>
        <p>thanks<br>
        </p>
        <br>
        <br>
        <div style="color: rgb(0, 0, 0);">
          <hr tabindex="-1" style="display:inline-block; width:98%">
          <div id="divRplyFwdMsg" dir="ltr"><font style="font-size:11pt"
              face="Calibri, sans-serif" color="#000000"><b>From:</b>
              users <a class="moz-txt-link-rfc2396E" href="mailto:users-bounces@open-mpi.org">&lt;users-bounces@open-mpi.org&gt;</a> on behalf of
              Ralph Castain <a class="moz-txt-link-rfc2396E" href="mailto:rhc@open-mpi.org">&lt;rhc@open-mpi.org&gt;</a><br>
              <b>Sent:</b> Saturday, April 23, 2016 11:39 AM<br>
              <b>To:</b> Open MPI Users<br>
              <b>Subject:</b> Re: [OMPI users] MPIRUN SEGMENTATION FAULT</font>
            <div> </div>
          </div>
          <div>valgrind isn’t going to help here - there are multiple
            reasons why your application could be segfaulting. Take a
            look at the core file with gdb and find out where it is
            failing.
            <div class=""><br class="">
              <div>
                <blockquote type="cite" class="">
                  <div class="">On Apr 22, 2016, at 10:20 PM, Elio
                    Physics &lt;<a moz-do-not-send="true"
                      href="mailto:elio-physics@live.com" class="">elio-physics@live.com</a>&gt;
                    wrote:</div>
                  <br class="Apple-interchange-newline">
                  <div class="">
                    <div id="divtagdefaultwrapper" class=""
                      style="font-style:normal; font-weight:normal;
                      letter-spacing:normal; orphans:auto;
                      text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px; font-size:12pt;
                      background-color:rgb(255,255,255);
                      font-family:Calibri,Arial,Helvetica,sans-serif">
                      <div class="" style="margin-top:0px;
                        margin-bottom:0px">One more thing i forgot to
                        mention in my previous e-mail. In the output
                        file I get the following message:</div>
                      <div class="" style="margin-top:0px;
                        margin-bottom:0px"><br class="">
                      </div>
                      <div class="" style="margin-top:0px;
                        margin-bottom:0px"><br class="">
                        2 total processes killed (some possibly by
                        mpirun during cleanup)</div>
                      <div class="" style="margin-top:0px;
                        margin-bottom:0px"><br class="">
                      </div>
                      <div class="" style="margin-top:0px;
                        margin-bottom:0px">Thanks<br class="">
                        <br class="">
                      </div>
                      <br class="">
                      <br class="">
                      <div class="" style="">
                        <hr tabindex="-1" class=""
                          style="display:inline-block;
                          width:1021.15625px">
                        <div id="divRplyFwdMsg" dir="ltr" class=""><font
                            class="" style="font-size:11pt"
                            face="Calibri, sans-serif"><b class="">From:</b><span
                              class="Apple-converted-space"> </span>users
                            &lt;<a moz-do-not-send="true"
                              href="mailto:users-bounces@open-mpi.org"
                              class="">users-bounces@open-mpi.org</a>&gt;

                            on behalf of Elio Physics &lt;<a
                              moz-do-not-send="true"
                              href="mailto:Elio-Physics@live.com"
                              class=""><a class="moz-txt-link-abbreviated" href="mailto:Elio-Physics@live.com">Elio-Physics@live.com</a></a>&gt;<br
                              class="">
                            <b class="">Sent:</b><span
                              class="Apple-converted-space"> </span>Saturday,
                            April 23, 2016 3:07 AM<br class="">
                            <b class="">To:</b><span
                              class="Apple-converted-space"> </span>Open
                            MPI Users<br class="">
                            <b class="">Subject:</b><span
                              class="Apple-converted-space"> </span>Re:
                            [OMPI users] MPIRUN SEGMENTATION FAULT</font>
                          <div class=""> </div>
                        </div>
                        <div class="">
                          <div id="divtagdefaultwrapper" class=""
                            style="font-size:12pt;
                            background-color:rgb(255,255,255);
                            font-family:Calibri,Arial,Helvetica,sans-serif">
                            <div class="" style="margin-top:0px;
                              margin-bottom:0px">I have used valgrind
                              and this is what i got:</div>
                            <div class="" style="margin-top:0px;
                              margin-bottom:0px"><br class="">
                            </div>
                            <div class="" style="margin-top:0px;
                              margin-bottom:0px">valgrind mpirun
                              ~/Elie/SPRKKR/bin/kkrscf6.3MPI Fe_SCF.inp
                              &gt; scf-51551.jlborges.fisica.ufmg.br.out<br
                                class="">
                              ==8135== Memcheck, a memory error detector<br
                                class="">
                              ==8135== Copyright (C) 2002-2012, and GNU
                              GPL'd, by Julian Seward et al.<br class="">
                              ==8135== Using Valgrind-3.8.1 and LibVEX;
                              rerun with -h for copyright info<br
                                class="">
                              ==8135== Command: mpirun
                              /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI
                              Fe_SCF.inp<br class="">
                              ==8135==<br class="">
--------------------------------------------------------------------------<br
                                class="">
                              mpirun noticed that process rank 0 with
                              PID 8147 on node<span
                                class="Apple-converted-space"> </span><a
                                moz-do-not-send="true"
                                href="http://jlborges.fisica.ufmg.br/"
                                class="">jlborges.fisica.ufmg.br</a><span
                                class="Apple-converted-space"> </span>exited
                              on signal 11 (Segmentation fault).<br
                                class="">
--------------------------------------------------------------------------<br
                                class="">
                              ==8135==<br class="">
                              ==8135== HEAP SUMMARY:<br class="">
                              ==8135==     in use at exit: 485,683 bytes
                              in 1,899 blocks<br class="">
                              ==8135==   total heap usage: 7,723 allocs,
                              5,824 frees, 12,185,660 bytes allocated<br
                                class="">
                              ==8135==<br class="">
                              ==8135== LEAK SUMMARY:<br class="">
                              ==8135==    definitely lost: 34,944 bytes
                              in 34 blocks<br class="">
                              ==8135==    indirectly lost: 26,613 bytes
                              in 58 blocks<br class="">
                              ==8135==      possibly lost: 0 bytes in 0
                              blocks<br class="">
                              ==8135==    still reachable: 424,126 bytes
                              in 1,807 blocks<br class="">
                              ==8135==         suppressed: 0 bytes in 0
                              blocks<br class="">
                              ==8135== Rerun with --leak-check=full to
                              see details of leaked memory<br class="">
                              ==8135==<br class="">
                              ==8135== For counts of detected and
                              suppressed errors, rerun with: -v<br
                                class="">
                              ==8135== ERROR SUMMARY: 0 errors from 0
                              contexts (suppressed: 6 from 6)<br
                                class="">
                            </div>
                            <div class="" style="margin-top:0px;
                              margin-bottom:0px"><br class="">
                            </div>
                            <div class="" style="margin-top:0px;
                              margin-bottom:0px">What does that supposed
                              to mean?</div>
                            <div class="" style="margin-top:0px;
                              margin-bottom:0px"><br class="">
                            </div>
                            <div class="" style="margin-top:0px;
                              margin-bottom:0px">Regards<br class="">
                            </div>
                          </div>
                          <hr tabindex="-1" class=""
                            style="display:inline-block;
                            width:1021.15625px">
                          <div id="divRplyFwdMsg" dir="ltr" class=""><font
                              class="" style="font-size:11pt"
                              face="Calibri, sans-serif"><b class="">From:</b><span
                                class="Apple-converted-space"> </span>users
                              &lt;<a moz-do-not-send="true"
                                href="mailto:users-bounces@open-mpi.org"
                                class="">users-bounces@open-mpi.org</a>&gt;

                              on behalf of Ralph Castain &lt;<a
                                moz-do-not-send="true"
                                href="mailto:rhc@open-mpi.org" class=""><a class="moz-txt-link-abbreviated" href="mailto:rhc@open-mpi.org">rhc@open-mpi.org</a></a>&gt;<br
                                class="">
                              <b class="">Sent:</b><span
                                class="Apple-converted-space"> </span>Saturday,
                              April 23, 2016 1:36:50 AM<br class="">
                              <b class="">To:</b><span
                                class="Apple-converted-space"> </span>Open
                              MPI Users<br class="">
                              <b class="">Subject:</b><span
                                class="Apple-converted-space"> </span>Re:
                              [OMPI users] MPIRUN SEGMENTATION FAULT</font>
                            <div class=""> </div>
                          </div>
                          <div class="">All I can say is that your
                            program segfault’d during execution - you
                            might want to look at the core file using a
                            debugger like gdb to see why it failed.
                            <div class=""><br class="">
                            </div>
                            <div class=""><br class="">
                              <div class="">
                                <blockquote type="cite" class="">
                                  <div class="">On Apr 22, 2016, at 8:32
                                    PM, Elio Physics &lt;<a
                                      moz-do-not-send="true"
                                      href="mailto:Elio-Physics@live.com"
                                      class=""><a class="moz-txt-link-abbreviated" href="mailto:Elio-Physics@live.com">Elio-Physics@live.com</a></a>&gt;
                                    wrote:</div>
                                  <br class="Apple-interchange-newline">
                                  <div class="">
                                    <div id="divtagdefaultwrapper"
                                      class="" style="font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px; font-size:12pt;
                                      background-color:rgb(255,255,255);
font-family:Calibri,Arial,Helvetica,sans-serif">
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px">Dear all,</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px"><br class="">
                                      </div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px">I have
                                        successfully compiled a code
                                        where the executable have been
                                        produced. However when I started
                                        using the executable with
                                        mpirun, the code stopped with
                                        the following error:</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px"><br class="">
                                      </div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px">"mpirun
                                        noticed that process rank 0 with
                                        PID 570 on node
                                        compute-1-9.local exited on
                                        signal 11 (Segmentation fault)."</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px"><br class="">
                                      </div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px">What is that
                                        error due to? and How can i
                                        solve it?</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px"><br class="">
                                      </div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px">I will post
                                        the make.inc compilation file:</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px"><br class="">
                                      </div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px">BUILD_TYPE ?=<br
                                          class="">
                                        #BUILD_TYPE := debug<br class="">
                                        <br class="">
                                        VERSION = 6.3</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px"><br class="">
                                        ifeq ($(BUILD_TYPE), debug)<br
                                          class="">
                                         VERSION :=
                                        $(VERSION)$(BUILD_TYPE)<br
                                          class="">
                                        endif<br class="">
                                        <br class="">
                                        BIN =~/Elie/SPRKKR/bin<br
                                          class="">
                                        #BIN=~/bin<br class="">
                                        #BIN=/tmp/$(USER)<br class="">
                                        <br class="">
                                        LIB = 
                                        -L/opt/intel/mkl/lib/intel64/libmkl_blas95_ilp64
                                        -L/opt/intel/mkl/lib/intel64/libmkl_lapack95_ilp64
                                        -L/opt/intel/mkl/lib/intel64
                                        -lmkl_scalapack_ilp64
                                        -lmkl_intel_ilp64 -lmkl_core
                                        -lmkl_sequential -lmkl_blacs_i<br
                                          class="">
                                        ntelmpi_ilp64 -lpthread -lm -ldl<br
                                          class="">
                                        <br class="">
                                        #Include mpif.h<br class="">
                                        INCLUDE =
                                        -I/opt/intel/mkl/include/intel64/ilp64 
                                        -I/opt/intel/mkl/lib/include</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px"><br class="">
                                        #FFLAGS<br class="">
                                        FFLAGS = -O2<br class="">
                                        <br class="">
                                        FC   = mpif90 -c $(FFLAGS)
                                        $(INCLUDE)<br class="">
                                        LINK = mpif90   $(FFLAGS)
                                        $(INCLUDE)<br class="">
                                        <br class="">
                                        MPI=MPI</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px"><br class="">
                                      </div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px">Thanks in
                                        advance</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px"><br class="">
                                      </div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px">Elio</div>
                                      <div class=""
                                        style="margin-top:0px;
                                        margin-bottom:0px">University of
                                        Rondonia, brazil<br class="">
                                        <br class="">
                                      </div>
                                    </div>
                                    <span class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px; float:none;
                                      display:inline!important">_______________________________________________</span><br
                                      class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px">
                                    <span class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px; float:none;
                                      display:inline!important">users
                                      mailing list</span><br class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px">
                                    <a moz-do-not-send="true"
                                      href="mailto:users@open-mpi.org"
                                      class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px">users@open-mpi.org</a><br
                                      class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px">
                                    <span class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px; float:none;
                                      display:inline!important">Subscription:<span
                                        class="Apple-converted-space"> </span></span><a
                                      moz-do-not-send="true"
                                      href="http://www.open-mpi.org/mailman/listinfo.cgi/users"
                                      class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px"><a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></a><br
                                      class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px">
                                    <span class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px; float:none;
                                      display:inline!important">Link to
                                      this post:<span
                                        class="Apple-converted-space"> </span></span><a
                                      moz-do-not-send="true"
                                      href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php"
                                      class=""
                                      style="font-family:Helvetica;
                                      font-size:12px; font-style:normal;
                                      font-weight:normal;
                                      letter-spacing:normal;
                                      orphans:auto; text-align:start;
                                      text-indent:0px;
                                      text-transform:none;
                                      white-space:normal; widows:auto;
                                      word-spacing:0px"><a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/04/29000.php">http://www.open-mpi.org/community/lists/users/2016/04/29000.php</a></a></div>
                                </blockquote>
                              </div>
                              <br class="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <span class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px; float:none;
                      display:inline!important">_______________________________________________</span><br
                      class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px">
                    <span class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px; float:none;
                      display:inline!important">users mailing list</span><br
                      class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px">
                    <a moz-do-not-send="true"
                      href="mailto:users@open-mpi.org" class=""
                      style="font-family:Helvetica; font-size:12px;
                      font-style:normal; font-weight:normal;
                      letter-spacing:normal; orphans:auto;
                      text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px">users@open-mpi.org</a><br
                      class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px">
                    <span class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px; float:none;
                      display:inline!important">Subscription:<span
                        class="Apple-converted-space"> </span></span><a
                      moz-do-not-send="true"
                      href="http://www.open-mpi.org/mailman/listinfo.cgi/users"
                      class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px"><a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></a><br
                      class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px">
                    <span class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px; float:none;
                      display:inline!important">Link to this post:<span
                        class="Apple-converted-space"> </span></span><a
                      moz-do-not-send="true"
                      href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php"
                      class="" style="font-family:Helvetica;
                      font-size:12px; font-style:normal;
                      font-weight:normal; letter-spacing:normal;
                      orphans:auto; text-align:start; text-indent:0px;
                      text-transform:none; white-space:normal;
                      widows:auto; word-spacing:0px"><a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/04/29003.php">http://www.open-mpi.org/community/lists/users/2016/04/29003.php</a></a></div>
                </blockquote>
              </div>
              <br class="">
            </div>
          </div>
        </div>
      </div>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/04/29005.php">http://www.open-mpi.org/community/lists/users/2016/04/29005.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29007.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>In reply to:</strong> <a href="29005.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29007.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Reply:</strong> <a href="29007.php">Elio Physics: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
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
