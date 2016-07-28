<?
$subject_val = "Re: [OMPI users] undefined symbol: tm_init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 02:03:44 2009" -->
<!-- isoreceived="20090212070344" -->
<!-- sent="Thu, 12 Feb 2009 08:03:37 +0100" -->
<!-- isosent="20090212070337" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol: tm_init" -->
<!-- id="1234422217.29157.121.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="F4B88E55-A0F3-444B-AB16-E13173E8DD61_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined symbol: tm_init<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 02:03:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8030.php">Mr Yann JOBIC: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Previous message:</strong> <a href="8028.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-02-11 at 17:14 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Actually, this was also the subject of another email thread on the  
</span><br>
<span class="quotelev1">&gt; user list earlier today. The user noted that we had lost an important  
</span><br>
<span class="quotelev1">&gt; line in our Makefile.am for the tm plm module, and that this was the  
</span><br>
<span class="quotelev1">&gt; root cause of the problems you and others have been seeing. We don't  
</span><br>
<span class="quotelev1">&gt; see it here because we always configure as shown below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has been fixed in the upcoming 1.3.1 release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the meantime, if you configure with --enable-static  --enable- 
</span><br>
<span class="quotelev1">&gt; shared, the required library will be linked into OMPI and will be  
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the problem.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p>Or, do as i did.
<br>
In orte/mca/plm/tm/Makefile.in there is a line
<br>
mca_plm_tm_la_LIBADD = 
<br>
change it to
<br>
mca_plm_tm_la_LIBADD = $(plm_tm_LIBS)
<br>
<p>and rebuild.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8030.php">Mr Yann JOBIC: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Previous message:</strong> <a href="8028.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
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
