<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 14:21:47 2007" -->
<!-- isoreceived="20070419182147" -->
<!-- sent="Thu, 19 Apr 2007 14:21:35 -0400" -->
<!-- isosent="20070419182135" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] peruse MSG_ARRIVED events lost" -->
<!-- id="ECCBD2CA-0919-41FE-85E5-6D2C9A913950_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="462787EB.8020209_at_cepba.upc.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-19 14:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3097.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Previous message:</strong> <a href="3095.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>In reply to:</strong> <a href="3094.php">Harald Servat: "[OMPI users] peruse MSG_ARRIVED events lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3101.php">Harald Servat: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>Reply:</strong> <a href="3101.php">Harald Servat: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Harald,
<br>
<p>I check the PERUSE code which generate the MSG_ARRIVED event. There  
<br>
seems to be no way to miss one of this events if the following  
<br>
conditions are respected:
<br>
<p>- the communicator where the message arrive has the MSG_ARRIVED event  
<br>
attached
<br>
- if this event is active.
<br>
<p>If you can provide the source code of your example, I'll give it a try.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Apr 19, 2007, at 11:16 AM, Harald Servat wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I'm interested on gathering MSG_ARRIVED events through the PERUSE  
</span><br>
<span class="quotelev1">&gt; API
</span><br>
<span class="quotelev1">&gt; offered by OpenMPI 1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I've written an small MPIC C program that performs some  
</span><br>
<span class="quotelev1">&gt; communication,
</span><br>
<span class="quotelev1">&gt; and although I receive some MSG_ARRIVED events, however I'm loosing  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; events because the number of MSG_ARRIVED do not match with the total
</span><br>
<span class="quotelev1">&gt; number of sends (and waitalls).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Do you know if there's any reason that could cause this strange  
</span><br>
<span class="quotelev1">&gt; behaviour?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.5 (FreeBSD)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iD8DBQFGJ4frwMPeuqUCg9wRAousAJoCTJFeXfWpBxIIBdsLT3fzqShi+gCaA0pZ
</span><br>
<span class="quotelev1">&gt; AuWmOaw7E0VxGAYmBjFRV5Q=
</span><br>
<span class="quotelev1">&gt; =EUmk
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3096/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3097.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Previous message:</strong> <a href="3095.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>In reply to:</strong> <a href="3094.php">Harald Servat: "[OMPI users] peruse MSG_ARRIVED events lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3101.php">Harald Servat: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>Reply:</strong> <a href="3101.php">Harald Servat: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
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
