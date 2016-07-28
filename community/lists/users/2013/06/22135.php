<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 10:01:12 2013" -->
<!-- isoreceived="20130619140112" -->
<!-- sent="Wed, 19 Jun 2013 07:01:11 -0700" -->
<!-- isosent="20130619140111" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="658D5A0C-12E9-4BB3-B510-C4FF5DA3AF35_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJGE3zWzLe-oX3ryn2iipKd=PtvQeX8Qmm_v-9VCcEwRjzOwuA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 10:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22136.php">Lorenzo Donà: "[OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Previous message:</strong> <a href="22134.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22134.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22138.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22138.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How is OMPI picking up this hostfile? It isn't being specified on the cmd line - are you running under some resource manager?
<br>
<p>I haven't seen that confusion elsewhere, so I'm trying to understand which code path is involved - hence the questions.
<br>
<p>On Jun 19, 2013, at 6:26 AM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (colleague of OP here)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 19 June 2013 15:09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I don't see a hostfile on your command line - so I assume you are using a
</span><br>
<span class="quotelev2">&gt;&gt; default hostfile? What is in it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The hostfile comes from the batch system; it just contains the
</span><br>
<span class="quotelev1">&gt; unqualified host names:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ cat $TMPDIR/machines
</span><br>
<span class="quotelev1">&gt;    nh64-1-17
</span><br>
<span class="quotelev1">&gt;    nh64-1-17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No problem if we modify the setup script to create the hostfile using
</span><br>
<span class="quotelev1">&gt; FQDNs instead.  (`uname -n` returns the FQDN, not the unqualified host name.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Riccardo Murri
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gc3.uzh.ch/people/rm">http://www.gc3.uzh.ch/people/rm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Grid Computing Competence Centre
</span><br>
<span class="quotelev1">&gt; University of Zurich
</span><br>
<span class="quotelev1">&gt; Winterthurerstrasse 190, CH-8057 Z&#252;rich (Switzerland)
</span><br>
<span class="quotelev1">&gt; Tel: +41 44 635 4222
</span><br>
<span class="quotelev1">&gt; Fax: +41 44 635 6888
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22136.php">Lorenzo Donà: "[OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Previous message:</strong> <a href="22134.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22134.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22138.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22138.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
