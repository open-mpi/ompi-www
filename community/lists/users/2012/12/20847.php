<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 05:02:03 2012" -->
<!-- isoreceived="20121202100203" -->
<!-- sent="Sun, 02 Dec 2012 02:01:54 -0800" -->
<!-- isosent="20121202100154" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50BB2712.50708_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL3GGtq9b8ZxdYZPG++LX1MpEfXX6V+0WK74-MtdsRdU5Sq+cw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3<br>
<strong>From:</strong> Joseph Farran (<em>jfarran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-02 05:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20846.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20846.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=ISO-8859-1"
      http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    <div class="moz-cite-prefix">Same thing.<br>
      <br>
      My new config:<br>
      <br>
      &nbsp;&nbsp;&nbsp; CFLAGS="" FCFLAGS="" ./configure&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      &nbsp;&nbsp;&nbsp; --with-sge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      &nbsp;&nbsp;&nbsp; --with-openib=/usr&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      &nbsp;&nbsp;&nbsp; --enable-openib-connectx-xrc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      &nbsp;&nbsp;&nbsp; --enable-mpi-thread-multiple&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      &nbsp;&nbsp;&nbsp; --with-threads&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      &nbsp;&nbsp;&nbsp; --with-hwloc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      &nbsp;&nbsp;&nbsp; --enable-heterogeneous&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      &nbsp;&nbsp;&nbsp; --with-fca=/opt/mellanox/fca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      &nbsp;&nbsp;&nbsp; --with-mxm-libdir=/opt/mellanox/mxm/lib \<br>
      &nbsp;&nbsp;&nbsp; --with-mxm=/opt/mellanox/mxm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
      <br>
      Fails at the same spot:<br>
      <br>
      make[2]: Entering directory
      `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'<br>
      &nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm.lo<br>
      &nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_cancel.lo<br>
      &nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_endpoint.lo<br>
      &nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_probe.lo<br>
      &nbsp; CC&nbsp;&nbsp;&nbsp;&nbsp; mtl_mxm_recv.lo<br>
      &nbsp; CCLD&nbsp;&nbsp; mca_mtl_mxm.la<br>
      /bin/grep: /usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la: No
      such file or directory<br>
      /bin/sed: can't read
      /usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la: No such file
      or directory<br>
      libtool: link:
      `/usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la' is not a
      valid libtool archive<br>
      make[2]: *** [mca_mtl_mxm.la] Error 1<br>
      make[2]: Leaving directory
      `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'<br>
      make[1]: *** [all-recursive] Error 1<br>
      make[1]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi'<br>
      make: *** [all-recursive] Error 1<br>
      <br>
      <br>
      <br>
      On 12/2/2012 1:37 AM, Mike Dubman wrote:<br>
    </div>
    <blockquote
cite="mid:CAL3GGtq9b8ZxdYZPG++LX1MpEfXX6V+0WK74-MtdsRdU5Sq+cw@mail.gmail.com"
      type="cite">
      <div dir="ltr">
        <div>please change "--with-openib" to "--with-openib=/usr"&nbsp; and
          retry configure/make stage.</div>
        <div>10x<br>
          <br>
        </div>
        <div class="gmail_quote">On Sun, Dec 2, 2012 at 10:36 AM, Joseph
          Farran <span dir="ltr">&lt;<a moz-do-not-send="true"
              href="mailto:jfarran@uci.edu" target="_blank">jfarran@uci.edu</a>&gt;</span>
          wrote:<br>
          <blockquote style="margin:0px 0px 0px
0.8ex;padding-left:1ex;border-left-color:rgb(204,204,204);border-left-width:1px;border-left-style:solid"
            class="gmail_quote">
            <div bgcolor="#FFFFFF" text="#000000">
              <div>Hi Mike.<br>
                <br>
                Thanks for the help!<br>
                <br>
                I am installing OFED on an NFS share partition so that
                all compute nodes will have access.<br>
                <br>
                For the "--with-openib" option, I don't specify one.&nbsp;&nbsp;
                My config file looks like this:<br>
                <br>
                &nbsp;&nbsp;&nbsp; CFLAGS="" FCFLAGS="" ./configure&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \
                <div class="im"><br>
                  &nbsp;&nbsp;&nbsp; --with-sge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
                  &nbsp;&nbsp;&nbsp; --with-openib&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
                  &nbsp;&nbsp;&nbsp; --enable-openib-connectx-xrc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
                  &nbsp;&nbsp;&nbsp; --enable-mpi-thread-multiple&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
                  &nbsp;&nbsp;&nbsp; --with-threads&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
                  &nbsp;&nbsp;&nbsp; --with-hwloc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
                  &nbsp;&nbsp;&nbsp; --enable-heterogeneous&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
                  &nbsp;&nbsp;&nbsp; --with-fca=/opt/mellanox/fca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
                </div>
                &nbsp;&nbsp;&nbsp; --with-mxm-libdir=/opt/mellanox/mxm/lib \<br>
                &nbsp;&nbsp;&nbsp; --with-mxm=/opt/mellanox/mxm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \<br>
                &nbsp;&nbsp;&nbsp; --prefix=/data/openmpi-1-6.3<br>
                <br>
                Please advise,<br>
                Joseph
                <div>
                  <div class="h5"><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    On 12/1/2012 11:39 PM, Mike Dubman wrote:<br>
                  </div>
                </div>
              </div>
              <div>
                <div class="h5">
                  <blockquote type="cite">
                    <div dir="ltr">
                      <div>Hi Joseph,</div>
                      <div>I guess you install MOFED under /usr, is that
                        right?</div>
                      <div>Could you please specify "--with-openib=/usr"
                        parameter during ompi "configure" stage?</div>
                      <div>10x</div>
                      <div>M<br>
                        <br>
                      </div>
                      <div class="gmail_quote">On Fri, Nov 30, 2012 at
                        1:11 AM, Joseph Farran <span dir="ltr">&lt;<a
                            moz-do-not-send="true"
                            href="mailto:jfarran@uci.edu"
                            target="_blank">jfarran@uci.edu</a>&gt;</span>
                        wrote:<br>
                        <blockquote style="margin:0px 0px 0px
0.8ex;padding-left:1ex;border-left-color:rgb(204,204,204);border-left-width:1px;border-left-style:solid"
                          class="gmail_quote"> Hi YK:<br>
                          <br>
                          Yes, I have those installed but they are newer
                          versions:<br>
                          <br>
                          # rpm -qa | grep rdma<br>
                          librdmacm-1.0.15-1.x86_64<br>
                          librdmacm-utils-1.0.15-1.x86_64<br>
                          librdmacm-devel-1.0.15-1.x86_64<br>
                          # locate <a moz-do-not-send="true"
                            href="http://librdmacm.la" target="_blank">librdmacm.la</a><br>
                          #<br>
                          <br>
                          Here are the RPMs the Mellanox build created
                          for kernel: 2.6.32-279.14.1.el6.x86_64<br>
                          <br>
                          # ls *rdma*<br>
                          librdmacm-1.0.15-1.i686.rpm &nbsp;
                          &nbsp;librdmacm-devel-1.0.15-1.i686.rpm &nbsp;
                          &nbsp;librdmacm-utils-1.0.15-1.i686.rpm<br>
                          librdmacm-1.0.15-1.x86_64.rpm
                          &nbsp;librdmacm-devel-1.0.15-1.x86_64.rpm
                          &nbsp;librdmacm-utils-1.0.15-1.x86_64.rpm<br>
                          <br>
                          <br>
                          On 11/29/2012 02:59 PM, Yevgeny Kliteynik
                          wrote:<br>
                          <blockquote style="margin:0px 0px 0px
0.8ex;padding-left:1ex;border-left-color:rgb(204,204,204);border-left-width:1px;border-left-style:solid"
                            class="gmail_quote"> Joseph,
                            <div><br>
                              <br>
                              You're supposed to have librdmacm
                              installed as part of MLNX_OFED
                              installation.<br>
                              What does "rpm -qa | grep rdma" tell?<br>
                              <br>
                              &nbsp; &nbsp;$ rpm -qa | grep rdma<br>
                              &nbsp; &nbsp;librdmacm-devel-1.0.14.1-1.x86_64<br>
                              &nbsp; &nbsp;librdmacm-utils-1.0.14.1-1.x86_64<br>
                              &nbsp; &nbsp;librdmacm-1.0.14.1-1.x86_64<br>
                              <br>
                              &nbsp; &nbsp;$ locate <a moz-do-not-send="true"
                                href="http://librdmacm.la"
                                target="_blank">librdmacm.la</a><br>
                              &nbsp; &nbsp;/usr/local/mofed/1.5.3-4.0.9/lib/<a
                                moz-do-not-send="true"
                                href="http://librdmacm.la"
                                target="_blank">librdmacm.la</a><br>
                              <br>
                              -- YK<br>
                              <br>
                            </div>
                          </blockquote>
                          <br>
                        </blockquote>
                      </div>
                      <br>
                    </div>
                  </blockquote>
                  <br>
                </div>
              </div>
            </div>
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
<li><strong>Next message:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20846.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20846.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
