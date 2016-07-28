<?
$subject_val = "[OMPI devel] enabling ft-enable-cr + vprotocol";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 22 18:47:20 2012" -->
<!-- isoreceived="20120722224720" -->
<!-- sent="Sun, 22 Jul 2012 23:47:16 +0100" -->
<!-- isosent="20120722224716" -->
<!-- name="tiago essex" -->
<!-- email="tiagoessex_at_[hidden]" -->
<!-- subject="[OMPI devel] enabling ft-enable-cr + vprotocol" -->
<!-- id="CAByYst9=+Q-CPdvKXFGWnnJMMWhWkb-YkuNk=rrrCAdyY6eVqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] enabling ft-enable-cr + vprotocol<br>
<strong>From:</strong> tiago essex (<em>tiagoessex_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-22 18:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11311.php">Aurélien Bouteiller: "Re: [OMPI devel] enabling ft-enable-cr + vprotocol"</a>
<li><strong>Previous message:</strong> <a href="11309.php">Rolf Riesen: "[OMPI devel] AUTO: Rolf Riesen is on vacation (returning 07/08/2012)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11311.php">Aurélien Bouteiller: "Re: [OMPI devel] enabling ft-enable-cr + vprotocol"</a>
<li><strong>Reply:</strong> <a href="11311.php">Aurélien Bouteiller: "Re: [OMPI devel] enabling ft-enable-cr + vprotocol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>i have been playing around with the code of the pessimist protocol and i
<br>
have set it so to save some messages and some other specific information
<br>
into a few files.
<br>
<p>however i also need to be able to perform global checkpoint during
<br>
execution.
<br>
i was wondering if it's possible to simultaneous set the mca parameters for
<br>
both the coordinated checkpoint and the vprototocol at the same time,
<br>
something like this:
<br>
<p>mpirun -n 10 -am ft-enable-cr -mca crs blcr -mca vprotocol pessimist prog
<br>
<p>i have tried, but it seems that the vprotocol does not work with
<br>
ft-enable-cr enable. is there a way to overcome this? or i'm missing
<br>
something?
<br>
<p><p>thank you
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11310/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11311.php">Aurélien Bouteiller: "Re: [OMPI devel] enabling ft-enable-cr + vprotocol"</a>
<li><strong>Previous message:</strong> <a href="11309.php">Rolf Riesen: "[OMPI devel] AUTO: Rolf Riesen is on vacation (returning 07/08/2012)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11311.php">Aurélien Bouteiller: "Re: [OMPI devel] enabling ft-enable-cr + vprotocol"</a>
<li><strong>Reply:</strong> <a href="11311.php">Aurélien Bouteiller: "Re: [OMPI devel] enabling ft-enable-cr + vprotocol"</a>
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
