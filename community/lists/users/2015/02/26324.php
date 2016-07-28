<?
$subject_val = "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 04:33:00 2015" -->
<!-- isoreceived="20150213093300" -->
<!-- sent="Fri, 13 Feb 2015 10:32:59 +0100 (CET)" -->
<!-- isosent="20150213093259" -->
<!-- name="Thibaud Kloczko" -->
<!-- email="thibaud.kloczko_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively" -->
<!-- id="491907827.54728976.1423819979165.JavaMail.zimbra_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20150213021212.GA739_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively<br>
<strong>From:</strong> Thibaud Kloczko (<em>thibaud.kloczko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-13 04:32:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>Previous message:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>In reply to:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>Thanks a lot for your fast answer !
<br>
<p>----- Original Message -----
<br>
| From: &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt;
<br>
| To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
| Sent: Friday, 13 February, 2015 3:12:12 AM
<br>
| Subject: Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively
<br>
| 
<br>
| 
<br>
| There was a bug in the MPI_MODE_NOCHECK path in osc/sm. It has been
<br>
| fixed on master and a fix has been CMRed to 1.8. Thank you for reporting
<br>
| this.
<br>
<p>You welcome :-) !
<br>
<p>| 
<br>
| In the meantime you can remove MPI_MODE_NOCHECK and it should work
<br>
| fine.
<br>
<p>Indeed, it works fine now :-) !
<br>
<p>However, I observed another weird behaviour with the lock functions.
<br>
<p>I send another mail to give further details about it.
<br>
<p>Thanks again :-) !
<br>
<p>Cheers,
<br>
<p>Thibaud.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>Previous message:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>In reply to:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
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
