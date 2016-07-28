<?
$subject_val = "Re: [OMPI devel] Unable to execute development version";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 21:55:32 2015" -->
<!-- isoreceived="20150328015532" -->
<!-- sent="Fri, 27 Mar 2015 18:55:29 -0700" -->
<!-- isosent="20150328015529" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unable to execute development version" -->
<!-- id="022EEDF8-A4C3-4A3F-B26A-37E2316DED34_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5v8XOjdXtw8MXw7Tqms0_ETxW4j2B7Un9w24rvL9fYPxA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-27 21:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17175.php">Federico Reghenzani: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Previous message:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17175.php">Federico Reghenzani: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Reply:</strong> <a href="17175.php">Federico Reghenzani: "Re: [OMPI devel] Unable to execute development version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It&#226;&#128;&#153;s definitely the security authorization issue - working on the broader solution now. The MCA param should indeed resolve the problem for now
<br>
<p><p><span class="quotelev1">&gt; On Mar 27, 2015, at 6:15 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Federico,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you try
</span><br>
<span class="quotelev1">&gt; mpirun -mca sec basic ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Saturday, March 28, 2015, Federico Reghenzani &lt;federico1.reghenzani_at_[hidden] &lt;mailto:federico1.reghenzani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello all.
</span><br>
<span class="quotelev1">&gt; I'm working together with Gianmario to Barbeque &lt;<a href="http://bosp.dei.polimi.it/">http://bosp.dei.polimi.it/</a>&gt;-OpenMPI interface. I downloaded the last version of repository from github. After successfully maked &amp; installed it, I can execute locally OpenMPI programs. The problem is when I try to execute the program also remotely, I get this error:
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17173.php">http://www.open-mpi.org/community/lists/devel/2015/03/17173.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/03/17173.php">http://www.open-mpi.org/community/lists/devel/2015/03/17173.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17174/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17175.php">Federico Reghenzani: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Previous message:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17173.php">Gilles Gouaillardet: "Re: [OMPI devel] Unable to execute development version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17175.php">Federico Reghenzani: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Reply:</strong> <a href="17175.php">Federico Reghenzani: "Re: [OMPI devel] Unable to execute development version"</a>
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
