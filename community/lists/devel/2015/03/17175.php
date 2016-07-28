<?
$subject_val = "Re: [OMPI devel] Unable to execute development version";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 28 05:21:46 2015" -->
<!-- isoreceived="20150328092146" -->
<!-- sent="Sat, 28 Mar 2015 09:21:41 +0000" -->
<!-- isosent="20150328092141" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unable to execute development version" -->
<!-- id="CADf4hJLz=fVTDZphHE3ps=C5+sa1g+MY43b8mPia3pqtbQX0cA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="022EEDF8-A4C3-4A3F-B26A-37E2316DED34_at_open-mpi.org" -->
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
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-28 05:21:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17176.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, one of the nodes had a 3-days-old version of ompi. Updating it to HEAD
<br>
solved the problem. Now it's working with and without &quot;-mca sec basic&quot;.
<br>
<p><p>Thank you and sorry for this stupid mistake.
<br>
<p>Cheers,
<br>
Federico
<br>
<p>Il giorno sab 28 mar 2015 alle ore 02:55 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
ha scritto:
<br>
<p><span class="quotelev1">&gt; It&#226;&#128;&#153;s definitely the security authorization issue - working on the broader
</span><br>
<span class="quotelev1">&gt; solution now. The MCA param should indeed resolve the problem for now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2015, at 6:15 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; On Saturday, March 28, 2015, Federico Reghenzani &lt;
</span><br>
<span class="quotelev1">&gt; federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all.
</span><br>
<span class="quotelev2">&gt;&gt; I'm working together with Gianmario to Barbeque
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://bosp.dei.polimi.it/">http://bosp.dei.polimi.it/</a>&gt;-OpenMPI interface. I downloaded the last
</span><br>
<span class="quotelev2">&gt;&gt; version of repository from github. After successfully maked &amp; installed it,
</span><br>
<span class="quotelev2">&gt;&gt; I can execute locally OpenMPI programs. The problem is when I try to
</span><br>
<span class="quotelev2">&gt;&gt; execute the program also remotely, I get this error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MyHostname:02907] [[33518,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_connection.c at line 806
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the execution stucks. I also tried with ompi_info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/mpirun --bynode --hostfile hf --tag-output ompi_info -v
</span><br>
<span class="quotelev2">&gt;&gt; ompi fullull --parsable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using stable 1.8.4 there is no problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev2">&gt;&gt; *M.Eng. student @ Politecnico di Milano*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17173.php">http://www.open-mpi.org/community/lists/devel/2015/03/17173.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/">http://www.open-mpi.org/community/lists/devel/2015/03/</a>
</span><br>
<span class="quotelev1">&gt; 17174.php
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17175/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17176.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
<li><strong>In reply to:</strong> <a href="17174.php">Ralph Castain: "Re: [OMPI devel] Unable to execute development version"</a>
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
