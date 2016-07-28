<?
$subject_val = "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 15 06:29:56 2013" -->
<!-- isoreceived="20130715102956" -->
<!-- sent="Mon, 15 Jul 2013 19:29:36 +0900" -->
<!-- isosent="20130715102936" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype" -->
<!-- id="20130715192936.0826c3efef7132d719767dc3_at_nifty.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="547398A2-1A2C-48A4-8E6D-8BC59ED33E44_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype<br>
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-15 06:29:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12605.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12603.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12603.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12605.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Reply:</strong> <a href="12605.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thanks. I've confirmed your patch.
<br>
I wrote a simple program to test your patch and no problems are found.
<br>
The test program is attached to this mail.
<br>
<p>Regards,
<br>
KAWASHIMA Takahiro
<br>
<p><span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please find below another patch, this time hopefully fixing all issues. The problem with my original patch and with yours was that they try to address the packing of the data representation without fixing the computation of the required length. As a result the length on the packer and unpacker differs and the unpacking of the subsequent data is done from a wrong location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I changed the code to force the preparation of the packed data representation before returning the length the first time. This way we can compute exactly how many bytes we need, including the potential alignment requirements. As a result the amount on both sides (the packer and the unpacker) are now identical, and the entire process works flawlessly (or so I hope).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if you still notice issues with this patch. I'll push the tomorrow in the trunk, so it can soak for a few days before propagation to the branches.
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12604/put_dup_type_4.c">put_dup_type_4.c</a>
</ul>
<!-- attachment="put_dup_type_4.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12605.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12603.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12603.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12605.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Reply:</strong> <a href="12605.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
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
