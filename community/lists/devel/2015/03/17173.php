<?
$subject_val = "Re: [OMPI devel] Unable to execute development version";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 21:15:24 2015" -->
<!-- isoreceived="20150328011524" -->
<!-- sent="Sat, 28 Mar 2015 10:15:22 +0900" -->
<!-- isosent="20150328011522" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unable to execute development version" -->
<!-- id="CAAkFZ5v8XOjdXtw8MXw7Tqms0_ETxW4j2B7Un9w24rvL9fYPxA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-27 21:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Previous message:</strong> <a href="17172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17171.php">Federico Reghenzani: "[OMPI devel] Unable to execute development version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Reply:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Federico,
<br>
<p>can you try
<br>
mpirun -mca sec basic ...
<br>
<p>cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, March 28, 2015, Federico Reghenzani &lt;
<br>
federico1.reghenzani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all.
</span><br>
<span class="quotelev1">&gt; I'm working together with Gianmario to Barbeque
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://bosp.dei.polimi.it/">http://bosp.dei.polimi.it/</a>&gt;-OpenMPI interface. I downloaded the last
</span><br>
<span class="quotelev1">&gt; version of repository from github. After successfully maked &amp; installed it,
</span><br>
<span class="quotelev1">&gt; I can execute locally OpenMPI programs. The problem is when I try to
</span><br>
<span class="quotelev1">&gt; execute the program also remotely, I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MyHostname:02907] [[33518,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; oob_tcp_connection.c at line 806
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the execution stucks. I also tried with ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun --bynode --hostfile hf --tag-output ompi_info -v
</span><br>
<span class="quotelev1">&gt; ompi fullull --parsable
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
<span class="quotelev1">&gt; *M.Eng. student @ Politecnico di Milano*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17173/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Previous message:</strong> <a href="17172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17171.php">Federico Reghenzani: "[OMPI devel] Unable to execute development version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>Reply:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
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
