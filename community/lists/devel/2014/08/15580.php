<?
$subject_val = "[OMPI devel] jenkins errors in origin/v1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 01:33:59 2014" -->
<!-- isoreceived="20140809053359" -->
<!-- sent="Sat, 9 Aug 2014 08:33:58 +0300" -->
<!-- isosent="20140809053358" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] jenkins errors in origin/v1.8" -->
<!-- id="CAAO1KybRYi6MCc+VfsBjNntDD7vZUUBwxdi88O4EEDiiqKR=JA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] jenkins errors in origin/v1.8<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 01:33:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15581.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Previous message:</strong> <a href="15579.php">Mike Dubman: "Re: [OMPI devel] jenkins error in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>Reply:</strong> <a href="15584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*02:36:30*   CC       base/odls_base_default_fns.lo*02:36:30*
<br>
base/odls_base_default_fns.c: In function
<br>
'odls_base_default_wait_local_proc':*02:36:30*
<br>
base/odls_base_default_fns.c:2001: warning: implicit declaration of
<br>
function 'ORTE_FLAG_SET'*02:36:30* base/odls_base_default_fns.c:2001:
<br>
error: 'ORTE_PROC_FLAG_WAITPID' undeclared (first use in this
<br>
function)*02:36:30* base/odls_base_default_fns.c:2001: error: (Each
<br>
undeclared identifier is reported only once*02:36:30*
<br>
base/odls_base_default_fns.c:2001: error: for each function it appears
<br>
in.)*02:36:30* base/odls_base_default_fns.c:2004: warning: implicit
<br>
declaration of function 'ORTE_FLAG_TEST'*02:36:30*
<br>
base/odls_base_default_fns.c:2004: error:
<br>
'ORTE_PROC_FLAG_IOF_COMPLETE' undeclared (first use in this
<br>
function)*02:36:30* base/odls_base_default_fns.c:2005: warning:
<br>
implicit declaration of function 'ORTE_FLAG_UNSET'*02:36:30*
<br>
base/odls_base_default_fns.c:2005: error: 'ORTE_PROC_FLAG_ALIVE'
<br>
undeclared (first use in this function)*02:36:30* make[2]: ***
<br>
[base/odls_base_default_fns.lo] Error 1*02:36:30* make[2]: Leaving
<br>
directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/orte/mca/odls'*02:36:30*
<br>
make[1]: *** [install-recursive] Error 1*02:36:30* make[1]: Leaving
<br>
directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/orte'*02:36:30*
<br>
make: *** [install-recursive] Error 1*02:36:30* Build step 'Execute
<br>
shell' marked build as failure
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15580/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15581.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Previous message:</strong> <a href="15579.php">Mike Dubman: "Re: [OMPI devel] jenkins error in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>Reply:</strong> <a href="15584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
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
