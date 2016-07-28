<?
$subject_val = "Re: [OMPI devel] enabling ft-enable-cr + vprotocol";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 23 07:57:59 2012" -->
<!-- isoreceived="20120723115759" -->
<!-- sent="Mon, 23 Jul 2012 07:57:45 -0400" -->
<!-- isosent="20120723115745" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] enabling ft-enable-cr + vprotocol" -->
<!-- id="7D0767F1-E8B0-43C1-B1F4-571E302A5260_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAByYst9=+Q-CPdvKXFGWnnJMMWhWkb-YkuNk=rrrCAdyY6eVqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] enabling ft-enable-cr + vprotocol<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-23 07:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11312.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26825 - branches/v1.7/contrib"</a>
<li><strong>Previous message:</strong> <a href="11310.php">tiago essex: "[OMPI devel] enabling ft-enable-cr + vprotocol"</a>
<li><strong>In reply to:</strong> <a href="11310.php">tiago essex: "[OMPI devel] enabling ft-enable-cr + vprotocol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tiago, 
<br>
<p>I have never tried to do this, I'm sorry to hear it doesn't work. 
<br>
<p>I am very busy at the moment, but I'll try to upgrade the pessimist protocol in the trunk with my latest internal repo, that contains some features to mix coordinated and message logging, as soon as possible. 
<br>
<p>Aurelien
<br>
<p><p>Le 22 juil. 2012 &#224; 18:47, tiago essex a &#233;crit :
<br>
<p><span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i have been playing around with the code of the pessimist protocol and i have set it so to save some messages and some other specific information into a few files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; however i also need to be able to perform global checkpoint during execution.
</span><br>
<span class="quotelev1">&gt; i was wondering if it's possible to simultaneous set the mca parameters for both the coordinated checkpoint and the vprototocol at the same time, something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 10 -am ft-enable-cr -mca crs blcr -mca vprotocol pessimist prog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i have tried, but it seems that the vprotocol does not work with ft-enable-cr enable. is there a way to overcome this? or i'm missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Researcher at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 309b
* Knoxville, TN 37996
* 865 974 9375

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11311/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11312.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26825 - branches/v1.7/contrib"</a>
<li><strong>Previous message:</strong> <a href="11310.php">tiago essex: "[OMPI devel] enabling ft-enable-cr + vprotocol"</a>
<li><strong>In reply to:</strong> <a href="11310.php">tiago essex: "[OMPI devel] enabling ft-enable-cr + vprotocol"</a>
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
