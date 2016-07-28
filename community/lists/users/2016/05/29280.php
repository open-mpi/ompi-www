<?
$subject_val = "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 08:42:07 2016" -->
<!-- isoreceived="20160523124207" -->
<!-- sent="Mon, 23 May 2016 08:41:52 -0400" -->
<!-- isosent="20160523124152" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed" -->
<!-- id="5742FA90.80909_at_hpe.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="792759046.1653046.1464003657839.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed<br>
<strong>From:</strong> Andy Riebs (<em>andy.riebs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 08:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29281.php">Siegmar Gross: "[OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29279.php">Megdich Islem: "[OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>In reply to:</strong> <a href="29279.php">Megdich Islem: "[OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29283.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Reply:</strong> <a href="29283.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=windows-1252"
      http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    Hi,<br>
    <br>
    The short answer: Environment module files are probably the best
    solution for your problem.<br>
    <br>
    The long answer: See
    <a class="moz-txt-link-rfc2396E" href="http://www.admin-magazine.com/HPC/Articles/Environment-Modules">&lt;http://www.admin-magazine.com/HPC/Articles/Environment-Modules&gt;</a>,
    which pretty much addresses your question.<br>
    <br>
    Andy<br>
    <br>
    <div class="moz-cite-prefix">On 05/23/2016 07:40 AM, Megdich Islem
      wrote:<br>
    </div>
    <blockquote
      cite="mid:792759046.1653046.1464003657839.JavaMail.yahoo@mail.yahoo.com"
      type="cite">
      <meta http-equiv="Content-Type" content="text/html;
        charset=windows-1252">
      <div style="color:#000; background-color:#fff;
        font-family:verdana, helvetica, sans-serif;font-size:16px">
        <div id="yui_3_16_0_ym19_1_1463993679754_10012">Hi,</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10010"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">I am
          using 2 software, one is called Open Foam and the other called
          EMPIRE that need to run together at the same time.</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">Open
          Foam uses  Open MPI implementation and EMPIRE uses either
          MPICH or intel mpi.</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">The
          version of Open MPI that comes with Open Foam is 1.6.5.</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">I am
          using Intel (R) MPI Library for linux * OS, version 5.1.3 and
          MPICH 3.0.4.</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">My
          problem is when I have the environment variables of  either
          mpich or Intel MPI  sourced to bashrc, I fail to run a case of
          Open Foam with parallel processing ( You find attached a
          picture of the error I got ) </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">This
          is an example of a command line I use to run Open Foam</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">mpirun
          -np 4 interFoam -parallel</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">Once I
          keep the environment variable of OpenFoam only, the parallel
          processing works without any problem, so I won't be able to
          run EMPIRE.</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">I am
          sourcing the environment variables in this way:</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">For
          Open Foam:</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">source
          /opt/openfoam30/etc/bashrc</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">For
          MPICH 3.0.4</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">export
          PATH=/home/islem/Desktop/mpich/bin:$PATH</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">export
LD_LIBRARY_PATH="/home/islem/Desktop/mpich/lib/:$LD_LIBRARY_PATH"</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">export
          MPICH_F90=gfortran</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">export
          MPICH_CC=/opt/intel/bin/icc</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">export
          MPICH_CXX=/opt/intel/bin/icpc</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">export
          MPICH-LINK_CXX="-L/home/islem/Desktop/mpich/lib/ -Wl,-rpath
          -Wl,/home/islem/Desktop/mpich/lib -lmpichcxx -lmpich -lopa
          -lmpl -lrt -lpthread"</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">For
          intel</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">export
          PATH=$PATH:/opt/intel/bin/</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">LD_LIBRARY_PATH="/opt/intel/lib/intel64:$LD_LIBRARY_PATH"</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">export
          LD_LIBRARY_PATH</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">source
          /opt/intel/compilers_and_libraries_2016.3.210/linux/mpi/intel64/bin/mpivars.sh
          intel64</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">If
          Only Open Foam is sourced, mpirun --version gives OPEN MPI
          (1.6.5)</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">If
          Open Foam and MPICH are sourced, mpirun --version gives mpich
          3.0.1</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">If
          Open Foam and intel MPI are sourced, mpirun --version gives
          intel (R) MPI libarary for linux, version 5.1.3 </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">My
          question is why I can't have two MPI implementation installed
          and sourced together. How can I solve the problem ?</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">Regards,</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr">Islem
          Megdiche</div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
        <div id="yui_3_16_0_ym19_1_1463993679754_10008" dir="ltr"><br>
        </div>
      </div>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/05/29279.php">http://www.open-mpi.org/community/lists/users/2016/05/29279.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29281.php">Siegmar Gross: "[OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29279.php">Megdich Islem: "[OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>In reply to:</strong> <a href="29279.php">Megdich Islem: "[OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29283.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Reply:</strong> <a href="29283.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
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
