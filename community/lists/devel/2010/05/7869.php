<?
$subject_val = "Re: [OMPI devel] bug with /bin/sh and /bin/ksh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 09:04:35 2010" -->
<!-- isoreceived="20100503130435" -->
<!-- sent="Mon, 3 May 2010 09:04:31 -0400" -->
<!-- isosent="20100503130431" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug with /bin/sh and /bin/ksh" -->
<!-- id="AFCBC0EB-A7B0-4398-9E97-B5269D5439AD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="t2x522fad9c1004290824ld7f8f56brdea70b21d18b5821_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug with /bin/sh and /bin/ksh<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 09:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7868.php">Christopher Yeoh: "Re: [OMPI devel] openib btl thread safety warning"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7841.php">Jonathan Vincent: "[OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2010, at 11:24 AM, Jonathan Vincent wrote:
<br>
<p><span class="quotelev1">&gt; i.e. a simpler version such as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev1">&gt; ksh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is not valid
</span><br>
<span class="quotelev1">&gt; sh -c '/usr/bin/env FOO=bar echo hello'
</span><br>
<span class="quotelev1">&gt; works.
</span><br>
<p>Per your later mails, plm_rsh_module.c does this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp = opal_argv_split(&quot;( test ! -r ./.profile || . ./.profile;&quot;, ' ');
<br>
<p>(and later adds the closing &quot;)&quot;).  You reported the final line to be:
<br>
<p>/usr/bin/env LD_LIBRARY_PATH=/pdc/vol/openmpi/1.4.1/intel/lib:/pdc/vol/icompilers/11.1/icc/lib/intel64:/pdc/vol/i-compilers/11.1/ifort/lib/intel64 ( test ! -r ./.profile || . ./.profile; /pdc/vol/openmpi/1.4.1/intel/bin/orted -mca ess env -mca orte_ess_jobid 284360704 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 5 --hnp-uri &quot;284360704.0;tcp://193.11.170.208:49530&quot; )
<br>
<p>What would the correct syntax be?  With the || and ;, are the () really unnecessary?  I would think that would group things wrong, but I'm a tcsh user, not an sh user....
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7868.php">Christopher Yeoh: "Re: [OMPI devel] openib btl thread safety warning"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7841.php">Jonathan Vincent: "[OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
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
