<?
$subject_val = "Re: [OMPI users] errors trying to run a simple mpi task";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 24 18:16:30 2013" -->
<!-- isoreceived="20130624221630" -->
<!-- sent="Tue, 25 Jun 2013 01:16:22 +0300" -->
<!-- isosent="20130624221622" -->
<!-- name="dani" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors trying to run a simple mpi task" -->
<!-- id="51C8C536.6020107_at_letai.org.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6B20E6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors trying to run a simple mpi task<br>
<strong>From:</strong> dani (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-24 18:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22207.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Windows - policy"</a>
<li><strong>Previous message:</strong> <a href="22205.php">Mathieu Gontier: "[OMPI users] OpenMPI on Windows - policy"</a>
<li><strong>In reply to:</strong> <a href="22201.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<html style="direction: ltr;">
  <head>
    <meta content="text/html; charset=ISO-8859-1"
      http-equiv="Content-Type">
    <style type="text/css">body p { margin-bottom: 0cm; margin-top: 0pt; } </style>
  </head>
  <body style="direction: ltr;"
    bidimailui-detected-decoding-type="latin-charset" text="#000000"
    bgcolor="#FFFFFF">
    OK, I see the part I missed - changing the MTT parameters for
    mlx4_core.<br>
    My only issue is that currently there is no num_mtt or log_num_mtt,
    but there is log_mtts_per_seg in /sys/module/mlx4_core/parameters<br>
    Has the parameter names changed? I know I can simply set
    log_mtts_per_seg to 5 (it's currently 3) but the discussion at the
    mailing list
    (<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/devel/2012/08/11417.php">http://www.open-mpi.org/community/lists/devel/2012/08/11417.php</a>)
    seems to indicate it's better to use numerous small chunks to avoid
    fragmentation.<br>
    <br>
    Can you, or anyone else, provide documentation for the current
    parameters of mlx4_core? I can't locate it in the mellanox or ofed
    sites.<br>
    <br>
    <br>
    <div class="moz-cite-prefix">On 24/06//2013 18:02, Jeff Squyres
      (jsquyres) wrote:<br>
    </div>
    <blockquote
cite="mid:EF66BBEB19BADC41AC8CCF5F684F07FC4F6B20E6@xmb-rcd-x01.cisco.com"
      type="cite">
      <pre wrap="">On Jun 23, 2013, at 3:21 PM, dani <a class="moz-txt-link-rfc2396E" href="mailto:dani@letai.org.il">&lt;dani@letai.org.il&gt;</a> wrote:

</pre>
      <blockquote type="cite">
        <blockquote type="cite">
          <pre wrap="">See this Open MPI FAQ item for more information on these Linux kernel module
parameters:

    <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</pre>
        </blockquote>
        <pre wrap="">BTW, the node has 64GB total ram. Is it possible openmpi is limited to only 32GB? or possibly the ofed installation has such a limit?
</pre>
      </blockquote>
      <pre wrap="">
Yes.

See the FAQ item cited in the help message for more detail.

</pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22207.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Windows - policy"</a>
<li><strong>Previous message:</strong> <a href="22205.php">Mathieu Gontier: "[OMPI users] OpenMPI on Windows - policy"</a>
<li><strong>In reply to:</strong> <a href="22201.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors trying to run a simple mpi task"</a>
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
