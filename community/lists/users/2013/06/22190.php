<?
$subject_val = "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 15:13:30 2013" -->
<!-- isoreceived="20130621191330" -->
<!-- sent="Fri, 21 Jun 2013 21:13:06 +0200" -->
<!-- isosent="20130621191306" -->
<!-- name="thomas.forde_at_[hidden]" -->
<!-- email="thomas.forde_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4" -->
<!-- id="9D20D49D-3E13-4D78-86EF-111CF1A46F62_at_ulstein.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6982DE_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4<br>
<strong>From:</strong> <a href="mailto:thomas.forde_at_[hidden]?Subject=Re:%20[OMPI%20users]%20New%20Cluster%20Centos%206.4%20with%20Openmpi%201.6.4"><em>thomas.forde_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-06-21 15:13:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22191.php">Andreas Schäfer: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is what i belive aswell, i have done a few tests now the past few
<br>
hours, and heavily tested my queue system with submitting jobs diretly with
<br>
qsub, and i have no problem allocating resources across several nodes.
<br>
<p>but when i try through the task manager of numeca fine/marine, it stops,
<br>
and have found some references to ompi1.4 in their system somewhere, that i
<br>
have to figure out how to remove/fix.
<br>
<p>there was a copy of mpirun/mpicc in one of the subdirs of the numeca
<br>
install that i think its using instead of the 1.6.4 that they are suppose
<br>
to use:)
<br>
<p>not easy trying to build and figure things out when never done it before,
<br>
but interesting learning:)
<br>
<p>./Thomas
<br>
<p><p>Sendt fra min iPad
<br>
<p>Den 21. juni 2013 kl. 21:08 skrev &quot;Jeff Squyres (jsquyres)&quot;
<br>
&lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; This usually means that you are inadvertently mixing versions of Open MPI
</span><br>
between your nodes (e.g., version A.B.C on your head node, and version
<br>
X.Y.Z on your compute nodes).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 21, 2013, at 3:02 AM, thomas.forde_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; im running into a strange problem when trying to start parallell
</span><br>
processing with Numcea Fine Marine software for jobs.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have managed to setup openmpi 1.64 on qmaster and all nodes, so they
</span><br>
all run the same version.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Every time i try to start a job that requires more then 1 node the job
</span><br>
dies with the following error:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_ERROR_LOG: Data unpack had inadequate space in file
</span><br>
base/odls_base_default_fns.c at line 528
<br>
<span class="quotelev2">&gt; &gt; ORTE_ERROR_LOG: Data unpack had inadequate space in file
</span><br>
orted/orted_comm.c at line 292
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If i run the job with only 16 cores(1 node) the jobs runs fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Im new to all this, so im trying hard to figoure out where the mistake
</span><br>
may lie, but even trying to search th archives for what i might think be
<br>
right, gives me so amny hits it takes forever to investigate.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./THomas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev2">&gt; &gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har
</span><br>
adgang
<br>
<span class="quotelev2">&gt; &gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande
</span><br>
vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt
<br>
avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige
<br>
utskrifter og kopiar av den.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This e-mail may contain confidential information, or otherwise
</span><br>
<span class="quotelev2">&gt; &gt; be protected against unauthorised use. Any disclosure, distribution or
</span><br>
other use of the information by anyone but the intended recipient is
<br>
strictly prohibited.
<br>
<span class="quotelev2">&gt; &gt; If you have received this e-mail in error, please advise the sender by
</span><br>
immediate reply and destroy the received documents and any copies hereof.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PBefore
</span><br>
<span class="quotelev2">&gt; &gt; printing, think about the environment
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>Denne e-posten kan innehalde informasjon som er konfidensiell og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den. 
<br>
This e-mail may contain confidential information, or otherwise be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof. P Before printing, think about the environment 
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22190/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22191.php">Andreas Schäfer: "Re: [OMPI users] Detecting Node Failure"</a>
<li><strong>Previous message:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
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
