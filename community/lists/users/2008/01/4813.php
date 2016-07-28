<?
$subject_val = "Re: [OMPI users] users Digest, Vol 787, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 09:42:08 2008" -->
<!-- isoreceived="20080111144208" -->
<!-- sent="Fri, 11 Jan 2008 14:41:47 +0000 (GMT)" -->
<!-- isosent="20080111144147" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 787, Issue 1" -->
<!-- id="Pine.GSO.4.53.0801111437390.19557_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.707.1200054874.5488.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 787, Issue 1<br>
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 09:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4814.php">Aurélien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Previous message:</strong> <a href="4812.php">Adrian Knoth: "Re: [OMPI users] how to select a specific network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Adrian,
<br>
<p>you guessed right: it is solaris.
<br>
<p>. The user file space is shared and so ~/.openmpi is the same on
<br>
all machines.
<br>
. I cannot disable the &quot;unwanted&quot; interface because is is carrying
<br>
all the other services such as NIS, NFS etc
<br>
<p>So the only way is to address the network by it IP number range.
<br>
<p>The question therefore is: can that be done?
<br>
I have looked through the description of the MCAs and I fear that I could
<br>
not find an indication for that.
<br>
<p>Lydia
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 11 Jan 2008 13:34:16 +0100
</span><br>
<span class="quotelev1">&gt; From: adi_at_[hidden] (Adrian Knoth)
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] how to select a specific network
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;20080111123416.GQ11368_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 11, 2008 at 11:36:23AM +0000, Lydia Heck wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a setup which contains one set of machines
</span><br>
<span class="quotelev2">&gt; &gt; with one nge and one e1000g network and of machines
</span><br>
<span class="quotelev2">&gt; &gt; with two e1000g networks configured. I am planning a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are we talking about shared filesystems or can you place different
</span><br>
<span class="quotelev1">&gt; ~/.openmpi/mca-params.confs across different machines? If so, just
</span><br>
<span class="quotelev1">&gt; specify the interfaces you want to exclude/include on each machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If nothing helps, either shutdown the unnecessary interfaces or use
</span><br>
<span class="quotelev1">&gt; interface renaming.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nge sounds like Solaris, unfortunately I'm not common with it. Under
</span><br>
<span class="quotelev1">&gt; Linux, one would rename either the required or the unwanted interfaces,
</span><br>
<span class="quotelev1">&gt; depending if you include or exclude.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; adi_at_amun:~$ ip r s
</span><br>
<span class="quotelev1">&gt; 192.168.4.0/24 dev ethmp  proto kernel  scope link  src 192.168.4.130
</span><br>
<span class="quotelev1">&gt; 192.168.3.0/24 dev ethmp  proto kernel  scope link  src 192.168.3.130
</span><br>
<span class="quotelev1">&gt; 192.168.1.0/24 dev ethsvc  proto kernel  scope link  src 192.168.1.130
</span><br>
<span class="quotelev1">&gt; default via 192.168.1.12 dev ethsvc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;ethmp&quot; is &quot;ethernet message passing&quot;, &quot;ethsvc&quot; is &quot;ethernet service
</span><br>
<span class="quotelev1">&gt; network&quot;. That's more or less the same you want: a dedicated network for
</span><br>
<span class="quotelev1">&gt; message passing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you would obviously include ethmp in your mca-params.conf file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under Linux, the tool to rename interfaces is called &quot;nameif&quot;, but I
</span><br>
<span class="quotelev1">&gt; guess it cannot be used for Solaris (interface names are kernel space,
</span><br>
<span class="quotelev1">&gt; and Linux kernel != Solaris kernel).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit?t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 787, Issue 1
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4814.php">Aurélien Bouteiller: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Previous message:</strong> <a href="4812.php">Adrian Knoth: "Re: [OMPI users] how to select a specific network"</a>
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
