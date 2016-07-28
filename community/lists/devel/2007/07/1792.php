<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  2 16:57:33 2007" -->
<!-- isoreceived="20070702205733" -->
<!-- sent="Mon, 02 Jul 2007 13:56:54 -0700" -->
<!-- isosent="20070702205654" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="[OMPI devel] extracting MPI message tag at the btl level" -->
<!-- id="46896696.8040308_at_cs.ubc.ca" -->
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
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-02 16:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Previous message:</strong> <a href="1791.php">Jeff Squyres: "[OMPI devel] Installdirs functionality FAQ entry"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Reply:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning everyone. I had a question about obtaining the message tag 
<br>
from the iovec array in mca_btl_sctp_frag_t* frag from within the 
<br>
mca_btl_tcp_frag_send() function. If I understand correctly, the first X 
<br>
bytes in the first iovec entry contain message header information in the 
<br>
form of an mca_pml_ob1_match_hdr_t struct that contains a hdr_tag field. 
<br>
When I extract this, I get a number that resembles an address. 
<br>
Dereferencing this gives, from what I can tell, an incorrect value and 
<br>
passing the value into ntohl() etc brings me no closer. There is 
<br>
probably something basic I'm overlooking... any help would be appreciated.
<br>
<p>Thanks,
<br>
Karol
<br>
<p><pre>
-- 
Karol Mroz
kmroz_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Previous message:</strong> <a href="1791.php">Jeff Squyres: "[OMPI devel] Installdirs functionality FAQ entry"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
<li><strong>Reply:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI devel] extracting MPI message tag at the btl level"</a>
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
