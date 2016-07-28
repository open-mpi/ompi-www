<?
$subject_val = "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 03:39:45 2012" -->
<!-- isoreceived="20121202083945" -->
<!-- sent="Sun, 02 Dec 2012 00:39:25 -0800" -->
<!-- isosent="20121202083925" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.6.3 &amp;amp; MXM" -->
<!-- id="50BB13BD.4080204_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL3GGtrkx+06FMx=KwfkGpWxNqHTXYDC1j3zsUpaBwuCD19bbA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM<br>
<strong>From:</strong> Joseph Farran (<em>jfarran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-02 03:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20846.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20844.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20843.php">Mike Dubman: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20881.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Reply:</strong> <a href="20881.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=ISO-8859-1"
      http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    <div class="moz-cite-prefix">Hi again.<br>
      <br>
      I believe I have the latest mxm:<br>
      <br>
      # rpm -qa| fgrep mxm<br>
      mxm-1.1.3a5e745-1.x86_64<br>
      <br>
      Let me know if I have the config part correct from previous email.<br>
      <br>
      Best,<br>
      Joseph<br>
      <br>
      <br>
      On 12/1/2012 11:44 PM, Mike Dubman wrote:<br>
    </div>
    <blockquote
cite="mid:CAL3GGtrkx+06FMx=KwfkGpWxNqHTXYDC1j3zsUpaBwuCD19bbA@mail.gmail.com"
      type="cite">
      <div dir="ltr">
        <div>Hi,</div>
        <div>&nbsp;</div>
        <div>The mxm which is part of MOFED 1.5.3 supports OMPI 1.6.0.</div>
        <div>&nbsp;</div>
        <div>The mxm upgrade is needed to work with OMPI 1.6.3+</div>
        <div>&nbsp;</div>
        <div>Please remove mxm from your cluster nodes (rpm -e mxm)</div>
        <div>Install latest from&nbsp; <a moz-do-not-send="true"
            href="http://mellanox/com/products/mxm/">http://mellanox/com/products/mxm/</a></div>
        <div>Compile ompi 1.6.3, add following to its configure line:
          ./configure --with-openib=/usr --with-mxm=/opt/mellanox/mxm
          &lt;...&gt;)</div>
        <div>&nbsp;</div>
        <div>Regards</div>
        <div>M<br>
          <br>
        </div>
        <div class="gmail_quote">On Sat, Dec 1, 2012 at 2:23 AM, Joseph
          Farran <span dir="ltr">&lt;<a moz-do-not-send="true"
              href="mailto:jfarran@uci.edu" target="_blank">jfarran@uci.edu</a>&gt;</span>
          wrote:<br>
          <blockquote style="margin:0px 0px 0px
0.8ex;padding-left:1ex;border-left-color:rgb(204,204,204);border-left-width:1px;border-left-style:solid"
            class="gmail_quote">
            <div bgcolor="#FFFFFF" text="#000000"> Konz,<br>
              <br>
              For whatever it is worth, I am in the same boat.<br>
              <br>
              I have CentOS 6.3, trying to compile OpenMPI 1.6.3 with
              the mxm from Mellanox and it fails.<br>
              <br>
              Also, the Mellanox OFED (
              MLNX_OFED_LINUX-1.5.3-3.1.0-rhel6.3-x86_64 ) does not work
              either.<br>
              <br>
              Mellanox really needs to step in here and help out.&nbsp;&nbsp;&nbsp; <br>
              <br>
              I have a cluster full of Mellanox products and I hate to
              think we chose the wrong Infiniband vendor.<br>
              <br>
              Joseph
              <div>
                <div class="h5"><br>
                  <br>
                  <br>
                  On 11/30/2012 12:33 PM, Konz, Jeffrey (SSA Solution
                  Centers) wrote: </div>
              </div>
              <blockquote type="cite">
                <div>
                  <div class="h5">
                    <div>
                      <p>I tried building the latest OpenMPI-1.6.3 with
                        MXM support and got this error:</p>
                      <p>&nbsp;</p>
                      <p><span>make[2]: Entering directory
                          `Src/openmpi-1.6.3/ompi/mca/mtl/mxm'</span></p>
                      <p><span>&nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm.lo</span></p>
                      <p><span>&nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_cancel.lo</span></p>
                      <p><span>&nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_component.lo</span></p>
                      <p><span>&nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_endpoint.lo</span></p>
                      <p><span>&nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_probe.lo</span></p>
                      <p><span>&nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_recv.lo</span></p>
                      <p><span>&nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_send.lo</span></p>
                      <p><span>mtl_mxm_send.c: In function
                          'ompi_mtl_mxm_send':</span></p>
                      <p><span>mtl_mxm_send.c:96: error: 'mxm_wait_t'
                          undeclared (first use in this function)</span></p>
                      <p><span>mtl_mxm_send.c:96: error: (Each
                          undeclared identifier is reported only once</span></p>
                      <p><span>mtl_mxm_send.c:96: error: for each
                          function it appears in.)</span></p>
                      <p><span>mtl_mxm_send.c:96: error: expected ';'
                          before 'wait'</span></p>
                      <p><span>mtl_mxm_send.c:104: error:
                          'MXM_REQ_FLAG_BLOCKING' undeclared (first use
                          in this function)</span></p>
                      <p><span>mtl_mxm_send.c:118: error:
                          'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use
                          in this function)</span></p>
                      <p><span>mtl_mxm_send.c:134: error: 'wait'
                          undeclared (first use in this function)</span></p>
                      <p><span>mtl_mxm_send.c: In function
                          'ompi_mtl_mxm_isend':</span></p>
                      <p><span>mtl_mxm_send.c:183: error:
                          'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use
                          in this function)</span></p>
                      <p><span>make[2]: *** [mtl_mxm_send.lo] Error 1</span></p>
                      <p><span>&nbsp;</span></p>
                      <p><span>&nbsp;</span></p>
                      <p>Our OFED is 1.5.3 and our MXM version is
                        1.0.601. </p>
                      <p>&nbsp;</p>
                      <p>Thanks,</p>
                      <p>&nbsp;</p>
                      <p>-Jeff</p>
                      <p>&nbsp;</p>
                      <p>/**********************************************************/</p>
                      <p>/* Jeff Konz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                          moz-do-not-send="true"
                          href="mailto:jeffrey.konz@hp.com"
                          target="_blank">jeffrey.konz@hp.com</a> */</p>
                      <p>/* Solutions Architect&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HPC
                        Benchmarking */</p>
                      <p>/* Americas Shared Solutions Architecture
                        (SSA)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;*/</p>
                      <p>/* Hewlett-Packard
                        Company&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; */</p>
                      <p>/* Office: <a moz-do-not-send="true"
                          href="tel:248-491-7480" target="_blank"
                          value="+12484917480">248-491-7480</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        Mobile: <a moz-do-not-send="true"
                          href="tel:248-345-6857" target="_blank"
                          value="+12483456857">248-345-6857</a> */ </p>
                      <p>/**********************************************************/</p>
                    </div>
                    <br>
                    <fieldset></fieldset>
                    <br>
                  </div>
                </div>
                <pre>_______________________________________________
users mailing list
<a moz-do-not-send="true" href="mailto:users@open-mpi.org" target="_blank">users@open-mpi.org</a>
<a moz-do-not-send="true" href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
              </blockquote>
              <br>
            </div>
            <br>
            _______________________________________________<br>
            users mailing list<br>
            <a moz-do-not-send="true" href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
            <a moz-do-not-send="true"
              href="http://www.open-mpi.org/mailman/listinfo.cgi/users"
              target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
          </blockquote>
        </div>
        <br>
      </div>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20846.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20844.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20843.php">Mike Dubman: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20881.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Reply:</strong> <a href="20881.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
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
