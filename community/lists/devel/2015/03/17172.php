<?
$subject_val = "Re: [OMPI devel] Unable to execute development version";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 21:06:05 2015" -->
<!-- isoreceived="20150328010605" -->
<!-- sent="Sat, 28 Mar 2015 01:06:01 +0000" -->
<!-- isosent="20150328010601" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unable to execute development version" -->
<!-- id="892661AC-E987-42B3-B3EE-A542B09492AF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADf4hJKN2zJzmTAp2kRps4TxUZ+RdgO4gBfzezKp9uQgGOOghw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unable to execute development version<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-27 21:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Previous message:</strong> <a href="17171.php">Federico Reghenzani: "[OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17171.php">Federico Reghenzani: "[OMPI devel] Unable to execute development version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you having a problem with the OMPI git master?  Or ompi-release with the v1.8.5 branch?
<br>
<p>FWIW, I'm able to run on the current master HEAD (dev-1415-g89e14f5).  What git revision are you using?
<br>
<p><p><span class="quotelev1">&gt; On Mar 27, 2015, at 6:05 PM, Federico Reghenzani &lt;federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all.
</span><br>
<span class="quotelev1">&gt; I'm working together with Gianmario to Barbeque-OpenMPI interface. I downloaded the last version of repository from github. After successfully maked &amp; installed it, I can execute locally OpenMPI programs. The problem is when I try to execute the program also remotely, I get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MyHostname:02907] [[33518,0],0] ORTE_ERROR_LOG: Error in file oob_tcp_connection.c at line 806
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the execution stucks. I also tried with ompi_info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun --bynode --hostfile hf --tag-output ompi_info -v ompi fullull --parsable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using stable 1.8.4 there is no problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt; M.Eng. student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17171.php">http://www.open-mpi.org/community/lists/devel/2015/03/17171.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Previous message:</strong> <a href="17171.php">Federico Reghenzani: "[OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17171.php">Federico Reghenzani: "[OMPI devel] Unable to execute development version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
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
