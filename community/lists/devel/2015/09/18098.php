<?
$subject_val = "[OMPI devel] problems compiling ompi master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 12:24:30 2015" -->
<!-- isoreceived="20150922162430" -->
<!-- sent="Tue, 22 Sep 2015 10:24:29 -0600" -->
<!-- isosent="20150922162429" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] problems compiling ompi master" -->
<!-- id="CAF1Cqj6S-kEBXfNp=PX65kO2pyqCYvaUFn9NoktTYbuQxssEXg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] problems compiling ompi master<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-22 12:24:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18099.php">Nathan Hjelm: "Re: [OMPI devel] problems compiling ompi master"</a>
<li><strong>Previous message:</strong> <a href="18097.php">Mark Santcroos: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18099.php">Nathan Hjelm: "Re: [OMPI devel] problems compiling ompi master"</a>
<li><strong>Reply:</strong> <a href="18099.php">Nathan Hjelm: "Re: [OMPI devel] problems compiling ompi master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>Is anyone seeing a problem compiling ompi today?
<br>
This is what I'm getting
<br>
<p>&nbsp;&nbsp;CC       osc_pt2pt_passive_target.lo
<br>
In file included from ../../../../opal/include/opal_config.h:2802:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../ompi/include/ompi_config.h:29,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from osc_pt2pt_active_target.c:24:
<br>
osc_pt2pt_active_target.c: In function 'ompi_osc_pt2pt_get_peers':
<br>
osc_pt2pt_active_target.c:84:35: error: 'ompi_osc_rdma_peer_t' undeclared
<br>
(first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peers = calloc (size, sizeof (ompi_osc_rdma_peer_t *));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../opal/include/opal_config_bottom.h:323:61: note: in definition
<br>
of macro 'calloc'
<br>
&nbsp;#    define calloc(nmembers, size) opal_calloc((nmembers), (size),
<br>
__FILE__, __LINE__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
osc_pt2pt_active_target.c:84:35: note: each undeclared identifier is
<br>
reported only once for each function it appears in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peers = calloc (size, sizeof (ompi_osc_rdma_peer_t *));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../opal/include/opal_config_bottom.h:323:61: note: in definition
<br>
of macro 'calloc'
<br>
&nbsp;#    define calloc(nmembers, size) opal_calloc((nmembers), (size),
<br>
__FILE__, __LINE__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
osc_pt2pt_active_target.c:84:57: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peers = calloc (size, sizeof (ompi_osc_rdma_peer_t *));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../opal/include/opal_config_bottom.h:323:61: note: in definition
<br>
of macro 'calloc'
<br>
&nbsp;#    define calloc(nmembers, size) opal_calloc((nmembers), (size),
<br>
__FILE__, __LINE__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18099.php">Nathan Hjelm: "Re: [OMPI devel] problems compiling ompi master"</a>
<li><strong>Previous message:</strong> <a href="18097.php">Mark Santcroos: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18099.php">Nathan Hjelm: "Re: [OMPI devel] problems compiling ompi master"</a>
<li><strong>Reply:</strong> <a href="18099.php">Nathan Hjelm: "Re: [OMPI devel] problems compiling ompi master"</a>
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
