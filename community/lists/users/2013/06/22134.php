<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 09:27:15 2013" -->
<!-- isoreceived="20130619132715" -->
<!-- sent="Wed, 19 Jun 2013 15:26:50 +0200" -->
<!-- isosent="20130619132650" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAJGE3zWzLe-oX3ryn2iipKd=PtvQeX8Qmm_v-9VCcEwRjzOwuA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D0F4C820-90CA-4282-8EE4-CA025D17D0A5_at_open-mpi.org" -->
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
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 09:26:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22135.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22133.php">Vladimir Yamshchikov: "[OMPI users] unsubscribe"</a>
<li><strong>In reply to:</strong> <a href="22132.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22135.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22135.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>(colleague of OP here)
<br>
<p>On 19 June 2013 15:09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I don't see a hostfile on your command line - so I assume you are using a
</span><br>
<span class="quotelev1">&gt; default hostfile? What is in it?
</span><br>
<p>The hostfile comes from the batch system; it just contains the
<br>
unqualified host names:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ cat $TMPDIR/machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nh64-1-17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nh64-1-17
<br>
<p>No problem if we modify the setup script to create the hostfile using
<br>
FQDNs instead.  (`uname -n` returns the FQDN, not the unqualified host name.)
<br>
<p>Thanks,
<br>
Riccardo
<br>
<p><pre>
--
Riccardo Murri
<a href="http://www.gc3.uzh.ch/people/rm">http://www.gc3.uzh.ch/people/rm</a>
Grid Computing Competence Centre
University of Zurich
Winterthurerstrasse 190, CH-8057 Z&#195;&#188;rich (Switzerland)
Tel: +41 44 635 4222
Fax: +41 44 635 6888
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22135.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22133.php">Vladimir Yamshchikov: "[OMPI users] unsubscribe"</a>
<li><strong>In reply to:</strong> <a href="22132.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22135.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22135.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
