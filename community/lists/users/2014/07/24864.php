<?
$subject_val = "[OMPI users] configure fails to detect missing libcrypto";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 16:50:20 2014" -->
<!-- isoreceived="20140724205020" -->
<!-- sent="Thu, 24 Jul 2014 13:49:58 -0700" -->
<!-- isosent="20140724204958" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="[OMPI users] configure fails to detect missing libcrypto" -->
<!-- id="CAGKz=uLF0VsRUxLHq_W6xiqnU2gHa8V0A+C=20531UEzO=8XMQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] configure fails to detect missing libcrypto<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 16:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24865.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Previous message:</strong> <a href="24863.php">Mike Dubman: "Re: [OMPI users] openib component not available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24865.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Reply:</strong> <a href="24865.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Reply:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build Open MPI SVN trunk on NERSC Babbage with PBS
<br>
support.  configure completes without error but the build fails
<br>
because libcrypto.so is missing.
<br>
<p>I consider it a desirable property that configure detect all the
<br>
necessary dependencies for a build to complete, rather than defer
<br>
errors to the compilation phase.
<br>
<p>I will file a Trac ticket as soon as my account is reset (in-progress).
<br>
<p>Making all in mca/plm/tm
<br>
make[2]: Entering directory
<br>
`/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte/mca/plm/tm'
<br>
&nbsp;&nbsp;CC       plm_tm_component.lo
<br>
&nbsp;&nbsp;CC       plm_tm_module.lo
<br>
&nbsp;&nbsp;CCLD     mca_plm_tm.la
<br>
ld: cannot find -lcrypto
<br>
make[2]: *** [mca_plm_tm.la] Error 1
<br>
make[2]: Leaving directory
<br>
`/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte/mca/plm/tm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/chos/global/u1/j/jhammond/MPI/ompi-trunk/build-intel/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Thanks,
<br>
<p>Jeff
<br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24864/config.log.tbz">config.log.tbz</a>
</ul>
<!-- attachment="config.log.tbz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24865.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Previous message:</strong> <a href="24863.php">Mike Dubman: "Re: [OMPI users] openib component not available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24865.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Reply:</strong> <a href="24865.php">Ralph Castain: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Reply:</strong> <a href="24866.php">Jeff Hammond: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
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
