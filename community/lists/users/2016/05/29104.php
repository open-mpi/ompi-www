<?
$subject_val = "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 21:07:16 2016" -->
<!-- isoreceived="20160506010716" -->
<!-- sent="Thu, 5 May 2016 21:06:03 -0400" -->
<!-- isosent="20160506010603" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1" -->
<!-- id="572BEDFB.3040507_at_hpe.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20160505220922.GJ42233_at_mordor.lanl.gov" -->
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
<strong>Date:</strong> 2016-05-05 21:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29117.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Reply:</strong> <a href="29117.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=windows-1252"
      http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    Sorry, my output listing was incomplete -- the program did run after
    the "No OpenFabrics" message, but (I presume) ran over Ethernet
    rather than InfiniBand. So I can't really say what was causing it to
    fail.<br>
    <br>
    Andy<br>
    <br>
    <div class="moz-cite-prefix">On 05/05/2016 06:09 PM, Nathan Hjelm
      wrote:<br>
    </div>
    <blockquote cite="mid:20160505220922.GJ42233@mordor.lanl.gov"
      type="cite">
      <pre wrap="">
It should work fine with ob1 (the default). Did you determine what was
causing it to fail?

-Nathan

On Thu, May 05, 2016 at 06:04:55PM -0400, Andy Riebs wrote:
</pre>
      <blockquote type="cite">
        <pre wrap="">   For anyone like me who happens to google this in the future, the solution
   was to set OMPI_MCA_pml=yalla

   Many thanks Josh!

   On 05/05/2016 12:52 PM, Joshua Ladd wrote:

     We are working with Andy offline.

     Josh
     On Thu, May 5, 2016 at 7:32 AM, Andy Riebs <a class="moz-txt-link-rfc2396E" href="mailto:andy.riebs@hpe.com">&lt;andy.riebs@hpe.com&gt;</a> wrote:

       I've built 1.10.2 with all my favorite configuration options, but I
       get messages such as this (one for each rank with
       orte_base_help_aggregate=0) when I try to run on a MOFED system:

       $ shmemrun -H hades02,hades03 $PWD/shmem.out
       --------------------------------------------------------------------------
       No OpenFabrics connection schemes reported that they were able to be
       used on a specific port.  As such, the openib BTL (OpenFabrics
       support) will be disabled for this port.

         Local host:           hades03
         Local device:         mlx4_0
         Local port:           2
         CPCs attempted:       rdmacm, udcm
       --------------------------------------------------------------------------

       My configure options:
       config_opts="--prefix=${INSTALL_DIR} \
               --without-mpi-param-check \
               --with-knem=/opt/mellanox/hpcx/knem \
               --with-mxm=/opt/mellanox/mxm  \
               --with-mxm-libdir=/opt/mellanox/mxm/lib \
               --with-fca=/opt/mellanox/fca \
               --with-pmi=${INSTALL_ROOT}/slurm \
               --without-psm --disable-dlopen \
               --disable-vt \
               --enable-orterun-prefix-by-default \
               --enable-debug-symbols"

       There aren't any obvious error messages in the build log -- what am I
       missing?

       Andy

       --
       Andy Riebs
       <a class="moz-txt-link-abbreviated" href="mailto:andy.riebs@hpe.com">andy.riebs@hpe.com</a>
       Hewlett-Packard Enterprise
       High Performance Computing Software Engineering
       +1 404 648 9024
       My opinions are not necessarily those of HPE

       _______________________________________________
       users mailing list
       <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
       Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
       Link to this post:
       <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/05/29094.php">http://www.open-mpi.org/community/lists/users/2016/05/29094.php</a>

 _______________________________________________
 users mailing list
 <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
 Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/05/29100.php">http://www.open-mpi.org/community/lists/users/2016/05/29100.php</a>
</pre>
      </blockquote>
      <pre wrap="">
</pre>
      <blockquote type="cite">
        <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/05/29101.php">http://www.open-mpi.org/community/lists/users/2016/05/29101.php</a>
</pre>
      </blockquote>
      <pre wrap="">
</pre>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/05/29102.php">http://www.open-mpi.org/community/lists/users/2016/05/29102.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29117.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Reply:</strong> <a href="29117.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
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
