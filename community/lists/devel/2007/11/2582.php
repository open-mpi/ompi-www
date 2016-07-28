<?
$subject_val = "[OMPI devel] Moving fragments in btl sm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 07:38:27 2007" -->
<!-- isoreceived="20071108123827" -->
<!-- sent="Thu, 8 Nov 2007 13:38:21 +0100 (CET)" -->
<!-- isosent="20071108123821" -->
<!-- name="Torje Henriksen" -->
<!-- email="torjeh_at_[hidden]" -->
<!-- subject="[OMPI devel] Moving fragments in btl sm" -->
<!-- id="Pine.LNX.4.63.0711081330320.19116_at_lgserv3.stud.cs.uit.no" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Moving fragments in btl sm<br>
<strong>From:</strong> Torje Henriksen (<em>torjeh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 07:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2583.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Previous message:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2592.php">Li-Ta Lo: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Reply:</strong> <a href="2592.php">Li-Ta Lo: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Reply:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a question that I shouldn't need to ask, but I'm 
<br>
kind of lost in the code.
<br>
<p>The btl sm component is using the circular buffers to write and read 
<br>
fragments (sending and receiving).
<br>
<p>In the write_to_head and read_from_tail I can only see pointers beeing set, 
<br>
no data being moved. So where does the actual data movement/copying take 
<br>
place? I'm thinking maybe a callback function existing somewhere :)
<br>
<p><p>Thank you for your help now and earlier.
<br>
<p><p>Best regards,
<br>
<p>Torje Henriksen
<br>
(torjeh_at_[hidden])
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2583.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Previous message:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2592.php">Li-Ta Lo: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Reply:</strong> <a href="2592.php">Li-Ta Lo: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Reply:</strong> <a href="2593.php">George Bosilca: "Re: [OMPI devel] Moving fragments in btl sm"</a>
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
