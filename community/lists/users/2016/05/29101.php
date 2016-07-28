<?
$subject_val = "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 18:04:57 2016" -->
<!-- isoreceived="20160505220457" -->
<!-- sent="Thu, 5 May 2016 18:04:55 -0400" -->
<!-- isosent="20160505220455" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1" -->
<!-- id="572BC387.7010700_at_hpe.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAG4F6z_us+-UakzymxVbVFF+uhC5b7EvUjyNButNwiBMwQOfVw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1<br>
<strong>From:</strong> Andy Riebs (<em>andy.riebs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 18:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Previous message:</strong> <a href="29100.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29100.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Reply:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=windows-1252"
      http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    For anyone like me who happens to google this in the future, the
    solution was to set OMPI_MCA_pml=yalla<br>
    <br>
    Many thanks Josh!<br>
    <br>
    <div class="moz-cite-prefix">On 05/05/2016 12:52 PM, Joshua Ladd
      wrote:<br>
    </div>
    <blockquote
cite="mid:CAG4F6z_us+-UakzymxVbVFF+uhC5b7EvUjyNButNwiBMwQOfVw@mail.gmail.com"
      type="cite">
      <meta http-equiv="Content-Type" content="text/html;
        charset=windows-1252">
      <div dir="ltr">
        <div>We are working with Andy offline.<br>
          <br>
        </div>
        Josh<br>
      </div>
      <div class="gmail_extra"><br>
        <div class="gmail_quote">On Thu, May 5, 2016 at 7:32 AM, Andy
          Riebs <span dir="ltr">&lt;<a moz-do-not-send="true"
              href="mailto:andy.riebs@hpe.com" target="_blank">andy.riebs@hpe.com</a>&gt;</span>
          wrote:<br>
          <blockquote class="gmail_quote" style="margin:0 0 0
            .8ex;border-left:1px #ccc solid;padding-left:1ex">I've built
            1.10.2 with all my favorite configuration options, but I get
            messages such as this (one for each rank with
            orte_base_help_aggregate=0) when I try to run on a MOFED
            system:<br>
            <br>
            $ shmemrun -H hades02,hades03 $PWD/shmem.out<br>
--------------------------------------------------------------------------<br>
            No OpenFabrics connection schemes reported that they were
            able to be<br>
            used on a specific port.  As such, the openib BTL
            (OpenFabrics<br>
            support) will be disabled for this port.<br>
            <br>
              Local host:           hades03<br>
              Local device:         mlx4_0<br>
              Local port:           2<br>
              CPCs attempted:       rdmacm, udcm<br>
--------------------------------------------------------------------------<br>
            <br>
            My configure options:<br>
            config_opts="--prefix=${INSTALL_DIR} \<br>
                    --without-mpi-param-check \<br>
                    --with-knem=/opt/mellanox/hpcx/knem \<br>
                    --with-mxm=/opt/mellanox/mxm  \<br>
                    --with-mxm-libdir=/opt/mellanox/mxm/lib \<br>
                    --with-fca=/opt/mellanox/fca \<br>
                    --with-pmi=${INSTALL_ROOT}/slurm \<br>
                    --without-psm --disable-dlopen \<br>
                    --disable-vt \<br>
                    --enable-orterun-prefix-by-default \<br>
                    --enable-debug-symbols"<br>
            <br>
            <br>
            There aren't any obvious error messages in the build log --
            what am I missing?<br>
            <br>
            Andy<br>
            <br>
            -- <br>
            Andy Riebs<br>
            <a moz-do-not-send="true" href="mailto:andy.riebs@hpe.com"
              target="_blank">andy.riebs@hpe.com</a><br>
            Hewlett-Packard Enterprise<br>
            High Performance Computing Software Engineering<br>
            <a moz-do-not-send="true" href="tel:%2B1%20404%20648%209024"
              value="+14046489024" target="_blank">+1 404 648 9024</a><br>
            My opinions are not necessarily those of HPE<br>
            <br>
            _______________________________________________<br>
            users mailing list<br>
            <a moz-do-not-send="true" href="mailto:users@open-mpi.org"
              target="_blank">users@open-mpi.org</a><br>
            Subscription: <a moz-do-not-send="true"
              href="https://www.open-mpi.org/mailman/listinfo.cgi/users"
              rel="noreferrer" target="_blank">https://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
            Link to this post: <a moz-do-not-send="true"
              href="http://www.open-mpi.org/community/lists/users/2016/05/29094.php"
              rel="noreferrer" target="_blank">http://www.open-mpi.org/community/lists/users/2016/05/29094.php</a><br>
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
Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/05/29100.php">http://www.open-mpi.org/community/lists/users/2016/05/29100.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Previous message:</strong> <a href="29100.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29100.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Reply:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
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
