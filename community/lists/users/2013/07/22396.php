<?
$subject_val = "[OMPI users] Locker memory Limits error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 26 04:26:20 2013" -->
<!-- isoreceived="20130726082620" -->
<!-- sent="Fri, 26 Jul 2013 10:26:06 +0200" -->
<!-- isosent="20130726082606" -->
<!-- name="thomas.forde_at_[hidden]" -->
<!-- email="thomas.forde_at_[hidden]" -->
<!-- subject="[OMPI users] Locker memory Limits error" -->
<!-- id="OF685E8C50.0D3539D3-ONC1257BB4.002DF1D0-C1257BB4.002E55B7_at_ulstein.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Locker memory Limits error<br>
<strong>From:</strong> <a href="mailto:thomas.forde_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Locker%20memory%20Limits%20error"><em>thomas.forde_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-07-26 04:26:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Locker memory Limits error"</a>
<li><strong>Previous message:</strong> <a href="22395.php">Dusan Zoric: "[OMPI users] MPI_Bcast hanging after some amount of data transferred on Infiniband network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Locker memory Limits error"</a>
<li><strong>Reply:</strong> <a href="22397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Locker memory Limits error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi guys
<br>
<p>im having a strange problem when starting some jobs that i dont uderstand.
<br>
<p>its just 1 node that has an issue and i find it odd.
<br>
<p>The OpenFabrics (openib) BTL failed to initialize while trying to
<br>
allocate some locked memory.  This typically can indicate that the
<br>
memlock limits are set too low.  For most HPC installations, the
<br>
memlock limits should be set to &quot;unlimited&quot;.  The failure occured
<br>
here:
<br>
<p>&nbsp;&nbsp;OMPI source:   btl_openib_component.c:1066
<br>
&nbsp;&nbsp;Function:      ompi_free_list_init_ex_new()
<br>
&nbsp;&nbsp;Device:        mlx4_0
<br>
&nbsp;&nbsp;Memlock limit: 65536
<br>
<p><p>i have rechecked and verified everywhere that the limit is set to 
<br>
&quot;unlimited&quot;.
<br>
<p>i can run the same job on other nodes and they have no problems, just so 
<br>
strnage that this one node crashes.
<br>
<p>running open_mpi 1.4.5 
<br>
<p><p>not sure where to look next.
<br>
<p>this node was working 2 days ago, but after a reboot it has changed to 
<br>
this.
<br>
<p><p><p><p><p><p><p><p><p>Denne e-posten kan innehalde informasjon som er konfidensiell 
<br>
og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har 
<br>
adgang 
<br>
til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. 
<br>
Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr 
<br>
e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og 
<br>
kopiar av den.
<br>
<p>This e-mail may contain confidential information, or otherwise 
<br>
be protected against unauthorised use. Any disclosure, distribution or 
<br>
other use of the information by anyone but the intended recipient is 
<br>
strictly prohibited. 
<br>
If you have received this e-mail in error, please advise the sender by 
<br>
immediate reply and destroy the received documents and any copies hereof.
<br>
<p><p>PBefore 
<br>
printing, think about the environment
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Locker memory Limits error"</a>
<li><strong>Previous message:</strong> <a href="22395.php">Dusan Zoric: "[OMPI users] MPI_Bcast hanging after some amount of data transferred on Infiniband network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Locker memory Limits error"</a>
<li><strong>Reply:</strong> <a href="22397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Locker memory Limits error"</a>
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
